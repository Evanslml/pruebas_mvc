<?php 

/**
* 
*/
class Acceso
{

	protected $user;
	protected $pass;
	protected $email;
	public function __construct($a,$b,$email)
	{
		$this->user =mysqli_real_escape_string(htmlspecialchars($a)); //PARA EVITAR EL INYECCION SQL
		$this->pass =mysqli_real_escape_string(htmlspecialchars($b));
		$this->email =mysqli_real_escape_string(htmlspecialchars($email));
	}
	
	public function Login()
	{
		$db = new Conexion();
		$sql = $db->query("SELECT nombre, password FROM usuarios WHERE nombre='$this->user' AND password='$this->pass';");
		$dato = $db->recorrer($sql);
		//$dato['nombre'];
		//$dato['password'];

		//if(strtolower($dato['nombre'])==strtolower($this->user) and strtolower($dato['password'])==strtolower($this->pass))  {
		if($db->rows($sql)>0)  {
			//echo 'Iniciaste sesion';
			session_start();
			$_SESSION['user'] = $this->user;
			header('location: acceso.php');
		}else{
			header('location: index.php?error=datosIncorrectos');
			//echo 'Te equivocaste';
		}
	}

	public function Registro(){
		$db = new Conexion();
		$sql = $db->query("SELECT nombre,email FROM usuarios WHERE nombre='$this->user' OR email='$this->email';");
		$existe= $db->recorrer($sql);

		//if(strtolower($existe['nombre']) != strtolower($this->user) AND strtolower($existe['email']) != strtolower($this->email)) {
		if($db->rows($sql)==0) {
			$db->query("INSERT INTO usuarios (nombre,password,email) VALUES ('$this->user','$this->pass','$this->email');");
			session_start();
			$_SESSION['user']=$this->user;
			header('location: acceso.php');
		}else if(strtolower($existe['nombre'])==strtolower($this->user) and strtolower($existe['email']) !=strtolower($this->email)){
			header('location: index.php?modo=registro&error=usuario_usado');
		}else if(strtolower($existe['email'])==strtolower($this->email) and strtolower($existe['nombre']) !=strtolower($this->user)){
			header('location: index.php?modo=registro&error=email_usado');
		}else if(strtolower($existe['email'])==strtolower($this->email) and strtolower($existe['nombre']) ==strtolower($this->user)){
			header('location: index.php?modo=registro&error=email_user_usado');
		}
		

	}

	public function ClavePerdida(){
		$db = new Conexion();
		$sql=$db->query("SELECT email FROM usuarios WHERE email='$this->email';");
		$existe = $db->recorrer($sql);

		//if(strtolower($existe['email'])==strtolower($this->email)){
		if($db->rows($sql) > 0 ){
			include('includes/class.Generar.Pass.php');
			$passw = new GenerarPass();
			$password= $passw->NuevaPass(11); //El 11 es aleatorio puede ser cualquiera
			$db->query("UPDATE usuarios SET password='$password' WHERE email='$this->email';");
			mail($this->email,'Camnbio de contraseña','Estimado usuario hemos realizado el cambio de su contraseña a $password;');     
			header('location: index.php?modo=claveperdida&succes=ok');        
		} else{
			header('location: index.php?modo=claveperdida&error=email_inexistente');
		}


	}
}

?>