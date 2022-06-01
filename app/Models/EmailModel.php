<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'email';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
}
