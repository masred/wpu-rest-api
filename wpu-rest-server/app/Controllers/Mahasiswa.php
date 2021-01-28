<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Mahasiswa extends ResourceController
{
    protected $format   = 'json';
    protected $modelName = 'App\Models\MahasiswaModel';

    public function index()
    {
        return $this->respond($this->model->findAll(), 200);
    }

    public function create()
    {
        $validation =  \Config\Services::validation();

        $nama   = $this->request->getVar('nama');
        $nrp = $this->request->getVar('nrp');
        $email = $this->request->getVar('email');
        $jurusan = $this->request->getVar('jurusan');

        $data = [
            'nama' => $nama,
            'nrp' => $nrp,
            'email' => $email,
            'jurusan' => $jurusan
        ];

        if ($validation->run($data, 'mahasiswa') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->model->insertMahasiswa($data);
            if ($simpan) {
                $msg = ['message' => 'Saved mahasiswa data successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }
    public function show($id = NULL)
    {
        $get = $this->model->getMahasiswa($id);
        if ($get) {
            $code = 200;
            $response = [
                'status' => $code,
                'error' => false,
                'data' => $get,
            ];
        } else {
            $code = 401;
            $msg = ['message' => 'Not Found'];
            $response = [
                'status' => $code,
                'error' => true,
                'data' => $msg,
            ];
        }
        return $this->respond($response, $code);
    }

    public function edit($id = NULL)
    {
        $get = $this->model->getMahasiswa($id);
        if ($get) {
            $code = 200;
            $response = [
                'status' => $code,
                'error' => false,
                'data' => $get,
            ];
        } else {
            $code = 401;
            $msg = ['message' => 'Not Found'];
            $response = [
                'status' => $code,
                'error' => true,
                'data' => $msg,
            ];
        }
        return $this->respond($response, $code);
    }

    public function update($id = NULL)
    {
        $validation =  \Config\Services::validation();

        $nama   = $this->request->getVar('nama');
        $nrp = $this->request->getVar('nrp');
        $email = $this->request->getVar('email');
        $jurusan = $this->request->getVar('jurusan');

        $data = [
            'nama' => $nama,
            'nrp' => $nrp,
            'email' => $email,
            'jurusan' => $jurusan
        ];

        if ($validation->run($data, 'mahasiswa') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->model->updateMahasiswa($data, $id);
            if ($simpan) {
                $msg = ['message' => 'Updated mahasiswa successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }

    public function delete($id = NULL)
    {
        $hapus = $this->model->deleteMahasiswa($id);
        if ($hapus) {
            $code = 200;
            $msg = ['message' => 'Deleted mahasiswa successfully'];
            $response = [
                'status' => $code,
                'error' => false,
                'data' => $msg,
            ];
        } else {
            $code = 401;
            $msg = ['message' => 'Not Found'];
            $response = [
                'status' => $code,
                'error' => true,
                'data' => $msg,
            ];
        }
        return $this->respond($response, $code);
    }
}
