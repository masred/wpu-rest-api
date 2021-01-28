<?php

namespace App\Database\Seeds;

class MahasiswaSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data1 = [
            'nama' => 'Ujang',
            'nrp'   => '432008887',
            'email' => 'Ujang@mail.com',
            'jurusan' => 'Teknik Komputer'
        ];
        $data2 = [
            'nama' => 'Dedi',
            'nrp'   => '657657489',
            'email' => 'Dedi@mail.com',
            'jurusan' => 'Teknik Mesin'
        ];
        $this->db->table('mahasiswa')->insert($data1);
        $this->db->table('mahasiswa')->insert($data2);
    }
}
