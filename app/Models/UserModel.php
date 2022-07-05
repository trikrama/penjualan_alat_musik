<?php

namespace App\Models;

use CodeIgniter\Model;

// $data = [
//     'users' => $model->where('ban', 1)->paginate(10),
//     'pager' => $model->pager,
// ];

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'avatar', 'password', 'salt', 'created_date', 'created_by', 'updated_date', 'updated_by'
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;

    // public function banned()
    // {
    //     $this->builder()->where('ban', 1);

    //     return $this; // This will allow the call chain to be used.
    // }
}
// $data = [
//     'users' => $model->banned()->paginate(10),
//     'pager' => $model->pager,
// ];
