<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

public function autenticar()
		{

		// obtener valores

		$email = $this->input->post('email');
		$pass = ($this->input->post('pass')); //md5

		// consultar BD<





	$Cliente = array(


			'nombre' => $email,
			'clave' => $pass,
			
		);





		
		$ch = curl_init("http://localhost:3000/sessions");
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
               

			echo("datos incorrectos");


	$this->load->view('login/login.php');
            }else{
                


			echo("datos guardado correcto");


		$this->load->view('usuarios/Admin.php');
            }




			}
		// validar si el usuario existe o no


		}



