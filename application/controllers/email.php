<?php

/**
* Sends email with GMAIL
*/
class Email extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}	
		function index(){
			$this->load->view('newsletter');
		}
		function send(){
			
			// echo "Hello from send method"; die();

			$this->load->library('form_validation');

			//field name, error message, validation rules
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

			if($this->form_validation->run()==FALSE)
			{
				 $this->load->view('newsletter');
			}
			else
			{
				//validation has passed. Now Send the email
				$name = $this->input->post('name');
				$email = $this->input->post('email');


				$this->load->library('email');
				$this->email->set_newline("\r\n"); 

				$this->email->from('hemaet@gmail.com', 'Hemaet');
				$this->email->to($email);
				$this->email->subject('Test newsletter Signup Confirmation');
				$this->email->message('Your\'ve now signed up, fool!');


				$path = $this->config->item('server_root');
				$file = $path. '/rinto/ci_day4/attachments/yourinfo.txt';	

				$this->email->attach($file);
				


				if($this->email->send())
				{
					echo 'Your mail has been sent successfully!';
				} 
				else
				{
					show_error($this->email->print_debugger());
				}
			}

			
		}
}