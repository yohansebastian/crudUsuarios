<?php namespace App\Models;
    use CodeIgniter\Model;

Class UsuariosModel extends Model{
    protected $table = 'usuarios';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    
    public function listarRoles(){
        $Roles = $this->db->query("SELECT * FROM rol");
        return $Roles->getResult();     
    }

    public function crearUsuario($u_nombres,$u_apellidos,$u_correo,$u_rol,$u_create_at){
        $Consulta = $this->db->query(
        "INSERT INTO usuarios(u_nombres,u_apellidos,u_correo,u_rol,u_create_at)
        VALUES ('$u_nombres','$u_apellidos','$u_correo',(SELECT r_id FROM rol WHERE r_rol = '$u_rol' ),'$u_create_at')"
        );
        return $Consulta;
    }

    public function consultarUsuario($id){
        $Consulta = $this->db->query("SELECT u_id,u_nombres,u_apellidos,u_correo,r_rol 
        FROM usuarios u 
        INNER JOIN rol r ON r.r_id = u.u_rol
        WHERE u.u_id = $id");
        return $Consulta->getResultArray();
    }
    public function eliminarUsuario($u_id){
        $u_delete_at = date('Y-m-d H:i:s');
        $Usuarios = $this->db->query("UPDATE usuarios SET u_activo=0,u_deleted_at='{$u_delete_at}' WHERE u_id = $u_id");
        return $Usuarios->getResult();
    }
    public function editarUsuario($u_id,$u_nombres,$u_apellido,$u_correo,$u_rol){
        $Consulta = $this->db->query("UPDATE usuarios SET u_nombres = '$u_nombres', u_apellidos = '$u_apellido', u_correo = '$u_correo', u_rol = (SELECT r_id FROM rol WHERE r_rol = '$u_rol' ) WHERE u_id = $u_id ");
        return $Consulta;
        
    }
    
}
?>