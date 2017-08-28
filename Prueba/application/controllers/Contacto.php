
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contacto extends CI_Controller {




public function login()
		{
		$this->load->view('login/index.php');
		}
	public function index()
	{

		$this->load->view('usuarios/Admin.php');
	}

public function saveContacto()
		{




		$cliente = $this->input->post('cliente');
		$nombre = $this->input->post('nombre');
		$apellidos = $this->input->post('apellidos');
		$correo = $this->input->post('correo');
		$numero = $this->input->post('numero');
		$puesto = $this->input->post('puesto');
		$Cliente = array(


			'cliente' => $cliente,
			'nombre' => $nombre,
			'apellidos' => $apellidos,
			'correo' => $correo,
			'numero' => $numero,
			'puesto' => $puesto
		);



      //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/contactos");
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
             
echo("datos creardo incorecto");
					$this->load->view('contacto/Contatctos.php');
       }else{

echo("datos eliminado correcto");

               $this->load->view('usuarios/Admin.php');
            }  



			}






public function Modifcar(){

     //datos a enviar

$id = $this->input->post('id');

       
	
		$cliente = $this->input->post('cliente');






				if($cliente==""){



			$cliente=null;

		}
		$nombre = $this->input->post('nombre');



				if($nombre==""){



			$nombre=null;

		}



		$apellidos = $this->input->post('apellidos');


				if($apellidos==""){



			$apellidos=null;

		}


		$correo = $this->input->post('correo');
					if($correo==""){



			$correo=null;

		}

		$numero = $this->input->post('numero');

							if($numero==""){



			$numero=null;

		}
		$puesto = $this->input->post('puesto');


							if($puesto==""){



			$puesto=null;

		}

		

		$Cliente = array(


			'cliente' => $cliente,
			'nombre' => $nombre,
			'apellidos' => $apellidos,
			'correo' => $correo,
			'numero' => $numero,
			'puesto' => $puesto
		);



   
            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/contactos/".$id);
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
					$this->load->view('contacto/Modificar.php');
       }else{

echo("datos modificado correcto");

               $this->load->view('usuarios/Admin.php');
            }  





}


public function EliminarContatctosmostra(){



		$this->load->view('contacto/EliminarContatctos.php');

}


public function CrearContatctosmostra(){



		$this->load->view('contacto/Contatctos.php');

}
public function ModificarClientemostra(){



		$this->load->view('contacto/Modificar.php');

}






public function mostrar(){




  
            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/Contatctos");
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
               // var_dump($response);
            }
			///$response->result_array();

		$json = json_encode($response);
			$data['usuarios'] = $json;

		///$data['usuarios'] = $usuarios;
		$this->load->view('contacto/Mostrar.php', $json);
}


		

		public function EliminarContatctos(){


					$id = $this->input->post('id');
		
				$Cliente = array(


			'id' => $id,
			
		);


   

            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/contactos/".$id);
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
              //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        
            $response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
            curl_close($ch);
                                               if($response==null) {
             
echo("datos elinador incorecto");
		$this->load->view('contacto/EliminarContatctos.php');
       }else{

echo("datos eliminado correcto");

               $this->load->view('usuarios/Admin.php');
            }  


        }

		}
