<?php 

namespace App\Models;
use CodeIgniter\Model;

class Consultas_model extends Model
{
    protected $table = 'consulta';
    protected $primaryKey = 'id_mensaje';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $useSoftDeletes = false;
    protected $allowedFields = ['nombre_mensaje', 'correo_mensaje', 'telefono_mensaje', 'consulta_mensaje'];

    protected $validationRules =[];
}