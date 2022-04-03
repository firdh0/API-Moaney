<?php

class Users extends Controller
{
    public function index($id = null)
    {
        header('Content-Type: application/json; charset=utf8');
        $headers = getallheaders();
        $token = explode(' ', $headers['Authorization'])[1];
        if (!$token) {
            throw new Exception('Silahkan masukkan token');
        }

        $payload = TokenJWT::getData($token);
        if (!is_string($token))
            throw new Exception('Token tidak valid');

        $valid = $this->model('Users_Model')->get($payload->user_id);
        if (!$valid)
            throw new Exception('Token tidak valid');


        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            try {
                $result = $this->model('Users_Model')->get($id);
                if ($result) {
                    echo json_encode([
                        'status' => '1',
                        'data' => $result
                    ]);
                } else
                    throw new Exception('Data user gagal didapatkan');
            } catch (Exception $e) {
                http_response_code(400);
                echo json_encode([
                    'status' => '-1',
                    'message' => $e->getMessage()
                ]);
            }
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                if (!isset($_POST['nama']) || !isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['role']))
                    throw new Exception('Masukkan Nama, Email, Password, dan Role');

                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                    throw new Exception('Email tidak valid');

                if ($this->model('Users_Model')->insert($_POST))
                    echo json_encode([
                        'status' => '1',
                        'message' => 'Data akun berhasil ditambahkan'
                    ]);
                else
                    throw new Exception('Data akun gagal ditambahkan');
            } catch (Exception $e) {
                http_response_code(400);
                echo json_encode([
                    'status' => '-1',
                    'message' => $e->getMessage()
                ]);
                exit();
            }
        } else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            try {
                if ($id == null)
                    throw new Exception('Silahkan masukkan ID');

                if ($this->model('Users_Model')->delete($id))
                    echo json_encode([
                        'status' => '1',
                        'message' => 'Data akun berhasil dihapus'
                    ]);
                else
                    throw new Exception('Data akun gagal dihapus');
            } catch (Exception $e) {
                http_response_code(400);
                echo json_encode([
                    'status' => '-1',
                    'message' => $e->getMessage()
                ]);
                exit();
            }
        } else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            try {
                parse_str(file_get_contents("php://input"), $PUT);

                if ($id == null)
                    throw new Exception('Cantumkan Id yang ingin diubah');

                if (!isset($PUT['nama']) || !isset($PUT['email']) || !isset($PUT['password']) || !isset($PUT['role']))
                    throw new Exception('Masukkan Nama, Email, Password, atau Role yang ingin diubah');

                if ($this->model('Users_Model')->update($id, $PUT))
                    echo json_encode([
                        'status' => '1',
                        'message' => 'Data akun berhasil diubah'
                    ]);
                else
                    throw new Exception('Data akun gagal diubah');
            } catch (Exception $e) {
                http_response_code(400);
                echo json_encode([
                    'status' => '-1',
                    'message' => $e->getMessage()
                ]);
                exit();
            }
        }
    }
}
