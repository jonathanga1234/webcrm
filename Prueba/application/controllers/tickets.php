<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tickets extends CI_Controller {




public function login()
		{
		$this->load->view('login/index.php');
		}
	public function index()
	{

		$this->load->view('usuarios/Admin.php');
	}

public function savetickets()
		{




		$titulo = $this->input->post('titulo');
		$detalle = $this->input->post('detalle');
	
		$quien_reporto = $this->input->post('quien_reporto');
		$cliente = $this->input->post('cliente');
		$estado = $this->input->post('estado');


		$Cliente = array(

 

			'titulo' => $titulo,
			'quien_reporto' => $quien_reporto,
			'quien_reporto' => $quien_reporto,
		
			'cliente' => $cliente,
			'estado' => $estado
		);



      //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/tickets");
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
                            $this->load->view('tikets/tickets.php');

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

        $detalle = $this->input->post('detalle');



                if($detalle==""){



            $detalle=null;

        }

    
        $quien_reporto = $this->input->post('quien_reporto');

                   if($quien_reporto==""){



            $quien_reporto=null;

        }

        $cliente = $this->input->post('cliente');

                           if($cliente==""){



            $cliente=null;

        }


        $estado = $this->input->post('estado');


                        if($estado==""){



            $estado=null;

        }
             $Cliente = array(

 

            'titulo' => $titulo,
            'quien_reporto' => $quien_reporto,
            'quien_reporto' => $quien_reporto,
        
            'cliente' => $cliente,
            'estado' => $estado
        );



   
            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/tickets/".$id);
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
                                $this->load->view('tikets/Modificar.php');


       }else{

echo("datos modificado correcto");

               $this->load->view('usuarios/Admin.php');
            }  









}


public function Eliminarticketsmostra(){



		$this->load->view('tikets/Eliminartickets.php');

}


public function Creartiketsmostra(){



		$this->load->view('tikets/tickets.php');

}
public function Modificartiketsmostra(){



		$this->load->view('tikets/Modificar.php');

}






public function mostrar(){




  
            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/tickets");
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
		$this->load->view('tikets/Mostrar.php', $json);
}


		

		public function Eliminartickets(){


					$id = $this->input->post('id');
		
				$Cliente = array(


			'id' => $id,
			
		);


   
      
            //url contra la que atacamos
            $ch = curl_init("http://localhost:3000/tickets/".$id);
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
        $this->load->view('tikets/Eliminartickets.php');


       }else{

echo("datos modificado correcto");

               $this->load->view('usuarios/Admin.php');
            }  

		}
}