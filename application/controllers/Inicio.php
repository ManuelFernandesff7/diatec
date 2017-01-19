<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sede_model','sede');
		$this->load->model('prospecto_model','prospecto');

	}

	public function index()
	{
		$list = $this->sede->get_all();
		$data['todos'] = $list;
		$this->load->helper('url');
		$this->load->view('layout/header_view');
		$this->load->view('inicio_view',$data);
		$this->load->view('layout/footer_view',$data);
	}
	public function agregar_prospecto()
	{
		$existe=0;
		$existe = $this->prospecto->verificar_email($this->input->post('email'));
		//print_r($existe);
		if($existe > 0){
		echo json_encode(array("status" => FALSE));
	}else{
		$hoy = date("Y-m-d");
		$data = array(
				'nombre' => $this->input->post('nombre'),
				'apellidos' => $this->input->post('apellidos'),
				'email' => $this->input->post('email'),
				'fecha_registro' => $hoy,
				'sede' => $this->input->post('sede'),
				'descripcion_sede' => $this->input->post('nom_sede'),

			);
		$insert = $this->prospecto->alta_prospecto($data);
		echo json_encode(array("status" => TRUE));
		//enviar_correos($this->input->post('email'));
	}

	}

	public function enviar_correos(){
  // Set SMTP Configuration
        $emailConfig = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'diatec101156@gmail.com',
            'smtp_pass' => 'passdiatec',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        ];

        // Set your email information
        $from = [
            'email' => 'diatec101156@gmail.com',
            'name' => 'Instituto tecnológico'
        ];

        $to = array($this->input->post('email'));


			$cc = array('illiana.reyes@itesm.mx','miguelramos@itesm.mx');
       // $cc = array('manuel.fernandez@globalt.com.mx','manuel.fernandez@globalt.com.mx');
        $subject = 'Confirmación de subscripción';
      //  $message = 'Type your gmail message here';
        $message =  '¡Enhorabuena! Se ha confirmado tu correo

							¡Muchísimas gracias por suscribirte!';
        // Load CodeIgniter Email library
        $this->load->library('email', $emailConfig);
        // Sometimes you have to set the new line character for better result
        $this->email->set_newline("\r\n");
        // Set email preferences
        $this->email->from($from['email'], $from['name']);
        $this->email->to($to);
        $this->email->cc($cc);
        $this->email->subject($subject);
        $this->email->message($message);
        // Ready to send email and check whether the email was successfully sent
        if (!$this->email->send()) {
            // Raise error message
            show_error($this->email->print_debugger());
        } else {
            // Show success notification or other things here
            echo 'Correo enviado';
        }
    }



}