
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reunion extends CI_Controller {




public function login()
		{
		$this->load->view('login/index.php');
		}
	public function index()
	{

		$this->load->view('usuarios/Admin.php');
	}

public function saveReunion()
		{


 
		$titulo = $this->input->post('titulo');
		$diayhora = $this->input->post('diayhora');
	
		$usuario = $this->input->post('usuario');
		$virtual = $this->input->post('virtual');
		$cliente = $this->input->post('cliente');
		$Cliente = array(

 

			'titulo' => $titulo,
			'diayhora' => $diayhora,
			'usuario' => $usuario,
		
			'virtual' => $virtual,
			'cliente' => $cliente
		);



      //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/reuniones");
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
             
echo("datos creado incorecto");
                        $this->load->view('reuniones/reuniones.php');
       }else{

echo("datos creado correcto");

               $this->load->view('usuarios/Admin.php');
            }  




			}






public function Modifcar(){

     //datos a enviar

	$id = $this->input->post('id');

       	$titulo = $this->input->post('titulo');





				if($titulo==""){



			$titulo=null;

		}


		$diayhora = $this->input->post('diayhora');


				if($diayhora==""){



			$diayhora=null;

		}

	
		$usuario = $this->input->post('usuario');


				if($usuario==""){



			$usuario=null;

		}


	


		$virtual = $this->input->post('virtual');


					if($virtual==""){



			$virtual=null;

		}
		$cliente = $this->input->post('cliente');


			if($cliente==""){



			$cliente=null;

		}




	$Cliente = array(


			'titulo' => $titulo,
			'diayhora' => $diayhora,
			'usuario' => $usuario,
		
			'virtual' => $virtual,
			'cliente' => $cliente
		);

   
            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/reuniones/".$id);
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
                        $this->load->view('reuniones/Modificar.php');
       }else{

echo("datos modificado correcto");

               $this->load->view('usuarios/Admin.php');
            }  









}


public function Eliminarreunionesmostra(){



		$this->load->view('reuniones/Eliminarreunioness.php');

}


public function Crearreunionesmostra(){



		$this->load->view('reuniones/reuniones.php');

}
public function Modificarreunionesmostra(){



		$this->load->view('reuniones/Modificar.php');

}






public function mostrar(){




  
            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/reuniones");
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
		$this->load->view('reuniones/Mostrar.php', $json);
}


		

		public function EliminarContatctos(){


					$id = $this->input->post('id');
		
				$Cliente = array(


			'id' => $id,
			
		);


   
      
            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/reuniones/".$id);
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
                       $this->load->view('reuniones/Eliminarreunioness.php');
       }else{

echo("datos eliminado correcto");

               $this->load->view('usuarios/Admin.php');
            }  

        }

		}
