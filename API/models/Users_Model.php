<?php

class Users_Model extends Models
{
    private $table = 'user';

    public function get($id = null)
    {
        if ($id === null) {
            $result = mysqli_query($this->koneksi, "SELECT id as 'user_id', nama, email, role FROM $this->table;");
        } else {
            $result = mysqli_query($this->koneksi, "SELECT id as 'user_id', nama, email, role FROM $this->table WHERE id = '$id';");
        }

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
        $role = htmlspecialchars($data['role']);

        $result = mysqli_query($this->koneksi, "SELECT email FROM $this->table WHERE email = '$email'");
        if (mysqli_fetch_assoc($result)) {
            throw new Exception('Email telah terdaftar');
        }

        $query =    "INSERT INTO $this->table VALUES
                    ('', '$nama', '$email', '$password', '$role')
                    ;";

        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }

    public function update($id, $data)
    {
        $nama = isset($data['nama']) ? htmlspecialchars($data['nama']) : $this->get($id)['nama'];
        $email = isset($data['email']) ? htmlspecialchars($data['email']) : $this->get($id)['email'];
        $password = isset($data['email']) ? password_hash(htmlspecialchars($data['password']), PASSWORD_DEFAULT) : $this->get($id)['password'];
        $role = isset($data['role']) ? htmlspecialchars($data['role']) : $this->get($id)['role'];

        $result = mysqli_query($this->koneksi, "SELECT id, email FROM $this->table WHERE email = '$email'");
        if ($row = mysqli_fetch_assoc($result)) {
            if ($row['id'] != $id)
                throw new Exception('Email telah terdaftar');
        }

        $query =    "UPDATE $this->table SET
                        nama = '$nama',
                        email = '$email',
                        password = '$password',
                        role = '$role'
                    WHERE id = '$id';
                    ";

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
