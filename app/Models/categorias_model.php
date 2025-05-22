<?php 

namespace App\Models;
use CodeIgniter\Model;

class categorias_model extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $useSoftDeletes = false;
    protected $allowedFields = ['nombre_categoria'];

    protected $validationRules =[];
}