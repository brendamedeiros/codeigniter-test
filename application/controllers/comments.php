<?php

class Comments extends CI_Controller{

	function add_comment($postID){
		if(!$_POST){
			redirect(base_url().'posts/post/'.$postID);
		}

		$user_type=$this->session->userdata('user_type');
		if(!$user_type){
			redirect(base_url().'users/login');
		}

		if(strtolower($this->session->userdata('captcha') !=strtolower($_POST['captcha']))){
			echo"<p>The captcha code was incorrect! You type in ".$_POST['captcha']." and the code was ".$this->session->userdata('captcha')."</p>";
		} else {
			$this->load->model('comment');
			$data=array(
				'postID'=>$postID,
				'userID'=>$this->session->userdata('userID'),
				'comment'=>$_POST['comment']
			);
			$this->comment->add_comment($data);
			redirect(base_url().'posts/post/'.$postID);
		}
	}
}
?>