
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Controller {


///cargar el login

	public function login()
	{
		$this->load->view('login/index.php');
	}

	///cargar el login
	public function index()
	{

		$this->load->view('login/login.php');
	}
///guarda clientes
	public function saveCliente()
	{


		$nombre = $this->input->post('Nombre');
		$cedula = $this->input->post('cedula');
		$pagina = $this->input->post('pagina');
		$dirrecion = $this->input->post('dirrecion');
		$telefono = $this->input->post('telefono');
		$sector = $this->input->post('sector');
		$Cliente = array(


			'Nombre' => $nombre,
			'cedula' => $cedula,
			'pagina' => $pagina,
			'dirrecion' => $dirrecion,
			'telefono' => $telefono,
			'sector' => $sector
			);



      //url contra la que atacamos
		$ch = curl_init("http://localhost:3000/clientes");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            //enviamos el array data
		curl_setopt($ch, CURLOPT_POSTFIELDS,$Cliente);
            //obtenemos la respuesta
		$response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);
		if($response==null) {
			
			echo("datos guardado incorectp");
			$this->load->view('Cliente/Cliente.php');

		}else{

			echo("datos guardado correcto");

			$this->load->view('usuarios/Admin.php');
		}  




	}




////modifica los clientes

	public function Modifcar(){

     //datos a enviar

		$id = $this->input->post('id');

		
		




		

		$nombre = $this->input->post('Nombre');




		if($nombre==""){



			$nombre=null;

		}



		$cedula = $this->input->post('cedula');





		if($cedula==""){



			$cedula=null;

		}




		$pagina = $this->input->post('pagina');




		if($pagina==""){



			$pagina=null;

		}






		$dirrecion = $this->input->post('dirrecion');


		if($dirrecion==""){



			$dirrecion=null;

		}


		
		$telefono = $this->input->post('telefono');

		if($telefono==""){



			$telefono=null;

		}

		$sector = $this->input->post('sector');

		if($sector==""){



			$sector=null;

		}

		$Cliente = array(


			'Nombre' => $nombre,
			'cedula' => $cedula,
			'pagina' => $pagina,
			'dirrecion' => $dirrecion,
			'telefono' => $telefono,
			'sector' => $sector

			);


		
            //url contra la que atacamos
		$ch = curl_init("http://localhost:3000/clientes/".$id);
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            //enviamos el array data
		curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($Cliente));
            //obtenemos la respuesta
		$response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);
		if($response==null) {
			
			echo("datos modificado incorecto");
			$this->load->view('Cliente/Modificar.php');

		}else{

			echo("datos guardado correcto");

			$this->load->view('usuarios/Admin.php');
		}  








	}
///llama a vista a elimnar

	public function EliminarClientemostra(){



		$this->load->view('Cliente/EliminarCliente.php');

	}
///llama a vista crear cliente

	public function CrearClientemostra(){



		$this->load->view('Cliente/Cliente.php');

	}


	////lllama a vista modificar
	public function ModificarClientemostra(){



		$this->load->view('Cliente/Modificar.php');

	}



/////metodo mostrar


	public function mostrar(){




		
            //url contra la que atacamos
		$ch = curl_init("http://localhost:3000/clientes");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            //enviamos el array data
            ///curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            //obtenemos la respuesta
		$response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);
		if(!$response) {
			return false;
		}else{
              
		}
			
		$data= $response;

		print_r($response);

	}


	
////metodo eliminar
	public function EliminarCliente(){


		$id = $this->input->post('id');
		
		$Cliente = array(


			'id' => $id,
			
			);


		
		
            //url contra la que atacamos
		$ch = curl_init("http://localhost:3000/clientes/".$id);
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		
		$response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);
		if($response==null) {
			
			echo("datos eliminado incorecto");
			$this->load->view('Cliente/EliminarCliente.php');

		}else{

			echo("datos eliminado correcto");

			$this->load->view('usuarios/Admin.php');
		}  


	}

}
