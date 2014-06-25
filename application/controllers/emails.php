<?php

class Emails extends CI_Controller{

	function email(){
		$this->load->model('user');
		$emails = $this->user->get_emails();
		$this->load->library('email');
		$config['mailtype']='html';
		$this->email->initialize($config);
		foreach($emails as $row){
			if($row['emails']){
				$this->email->from('brenda.medeiros@outlook.com','Brenda Medeiros');
				$this->email->to($row['email']);
				$this->email->subject('Test Newsletter');
				$this->email->message('Your email message goes here! <strong>Bold</strong>');
				$this->email->send();
				$this->email->clear();
			}
		}
	}
}

?>