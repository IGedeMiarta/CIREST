<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name','number'];

    protected $validationRules = [
        'name' => 'required',
        'number'=> 'required|numeric|max_length[15]|is_unique[contacts.number]'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Nama Wijib Diisi'
        ],
        'number'=> [
            'required' => 'Nomer Wajib Diisi',
            'max_length' => 'Nomer minimal 15 angka',
            'numeric' =>'Nomor harus angka',
            'is_unique' => 'Nomer Sudah Terdaftar',
        ],
    ];
}