<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nrp'       => [
				'type'           => 'CHAR',
				'constraint'     => '9',
			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint'	=> '100'
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'	=> '100',
				'null'			=> true,
				'default'  		 => null
			],
			'jurusan' => [
				'type'           => 'VARCHAR',
				'constraint'	=> '64'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('mahasiswa');
	}

	public function down()
	{
		$this->forge->dropTable('mahasiswa');
	}
}
