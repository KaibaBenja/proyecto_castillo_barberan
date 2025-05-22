<?php 

namespace App\Models;
use CodeIgniter\Model;

class usuarios_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $useSoftDeletes = false;
    protected $allowedFields = ['nombre_usuarios', 'apellido_usuarios', 'correo_usuarios', 'telefono_usuarios', 'contraseña_usuarios', 'perfil_id', 'persona_estado'];

    protected $validationRules =[];
}