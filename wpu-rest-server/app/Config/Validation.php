<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $mahasiswa = [
		'nama'         => 'required',
		'nrp'       => 'required',
		'email'         => 'required',
		'jurusan'       => 'required'
	];

	public $mahasiswa_errors = [
		'nama' => [
			'required'  => 'Nama wajib diisi.'
		],
		'nrp' => [
			'required'  => 'NRP wajib diisi.'
		],
		'email' => [
			'required'  => 'Email wajib diisi.'
		],
		'jurusan' => [
			'required'  => 'Jurusan wajib diisi.'
		]
	];
}
