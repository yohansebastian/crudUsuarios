<?php namespace App\Controllers;
use App\Models\UsuariosModel;
$pager = \Config\Services::pager();

Class UsuariosController extends BaseController{
    public function formUsuario(){
		
			$model        = new UsuariosModel();
            $listarRol    = $model->listarRoles();
			$mensaje = session('mensaje');
			$data = [
                "usuarios" => $model->where('u_activo',1)
                                    ->paginate(5),
                "pager"	   => $model->pager,
                "mensaje"  => $mensaje,
                "roles"    => $listarRol,						
			];
			echo view ('layouts/header');	
			echo view ('formUsuario',$data);
			echo view ('layouts/footer');
	}
    public function crearUsuario(){
        $Crud        = new UsuariosModel();
        $u_nombres		   = $this->request->getPost('u_nombres');
        $u_apellidos 	   = $this->request->getPost('u_apellido');
        $u_correo 		   = $this->request->getPost('u_correo');
        $u_rol 		       = $this->request->getPost('roles');
        $u_create_at 	   = date('Y-m-d H:i:s');
        $respuesta = $Crud->crearUsuario($u_nombres,$u_apellidos,$u_correo,$u_rol,$u_create_at);
        echo var_dump($respuesta);
        if($respuesta){
            return redirect()->to(base_url())->with('mensaje','1');
        }else{
            return redirect()->to(base_url())->with('mensaje','0');
        }
    }
    public function seleccionarUsuarioEditar(){
        $usuarios = new UsuariosModel();
		$usuario_id = $this->request->getPost('u_id');
		$data= $usuarios->consultarUsuario($usuario_id);
		return $this->response->setJSON($data);
    }
    public function eliminarUsuario(){
        $Crud = new UsuariosModel();
		$u_id = $this->request->getGet('u_id');
		$Crud->eliminarUsuario($u_id);
    }
    public function editarUsuario(){
        $Crud = new UsuariosModel();
		$u_id   	   = $this->request->getGet('u_id');
		$u_nombres 	   = $this->request->getGet('u_nombres');
		$u_apellido    = $this->request->getGet('u_apellido');
		$u_correo 	   = $this->request->getGet('u_correo');
		$u_rol 	       = $this->request->getGet('u_rol');
		$respuesta = $Crud->editarUsuario($u_id,$u_nombres,$u_apellido,$u_correo,$u_rol);
		echo json_encode($respuesta);
    }
}