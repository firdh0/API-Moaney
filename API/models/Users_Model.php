<?php

use LDAP\Result;

class Users_Model extends Models
{
    private $table = 'user';

    public function get($id = null)
    {
        if ($id == null) {
            throw new Exception('Maaf, terdapat kesalahan internal');
        }

        $result = mysqli_query($this->koneksi, "SELECT * FROM $this->table WHERE id = '$id';");

        if (!$result) {
            throw new Exception('Data Akun tidak ada');
        }
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function insert($data)
    {
        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $password = password_hash(htmlspecialchars($data['password']), PASSWORD_DEFAULT);

        $result = mysqli_query($this->koneksi, "SELECT email FROM $this->table WHERE email = '$email'");
        if (mysqli_fetch_assoc($result)) {
            throw new Exception('Email telah terdaftar');
        }

        $rekening = rand(0000000000, 9999999999);
        $result = mysqli_query($this->koneksi, "SELECT id FROM $this->table WHERE rekening = '$rekening'");
        while (mysqli_fetch_assoc($result)) {
            $rekening = rand(0000000000, 9999999999);
            $result = mysqli_query($this->koneksi, "SELECT id FROM $this->table WHERE rekening = '$rekening'");
        }
        $query =    "INSERT INTO $this->table VALUES
                    ('', '$nama', '$email', '$password', '$rekening', '')
                    ;";

        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }

    public function update($id, $data)
    {
        $user_data = $this->get($id)[0];
        $nama = isset($data['nama']) ? htmlspecialchars($data['nama']) : $user_data['nama'];
        $email = isset($data['email']) ? htmlspecialchars($data['email']) : $user_data['email'];
        $password = isset($data['password']) ? password_hash(htmlspecialchars($data['password']), PASSWORD_DEFAULT) : $user_data['password'];
        $saldo = isset($data['saldo']) ? htmlspecialchars($data['saldo'] + $user_data['saldo']) : $user_data['saldo'];

        $query =    "UPDATE $this->table SET
                        nama = '$nama',
                        email = '$email',
                        password = '$password',
                        saldo = '$saldo'
                    WHERE id = '$id';";

        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }

    public function delete($id)
    {
        $result = mysqli_query($this->koneksi, "SELECT email FROM $this->table WHERE id = '$id'");
        if (!mysqli_fetch_assoc($result)) {
            throw new Exception('Akun tidak ada');
        }
        mysqli_query($this->koneksi, "DELETE FROM $this->table WHERE id = $id");
        return mysqli_affected_rows($this->koneksi);
    }
}
