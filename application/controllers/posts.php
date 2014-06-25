<?php

class Posts extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('post');
	}

	function index($start=0){
		//$this->load->model('post');
		$data['posts']=$this->post->get_posts(5,$start);
		//echo"<pre>";print_r($data['posts']);echo"</pre>";
		$this->load->library('pagination');
		$config['base_url'] = base_url().'posts/index/';
		$config['total_rows'] = $this->post->get_posts_count();
		$config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['pages'] = $this->pagination->create_links();
		$this->load->view('header');
		$this->load->view('post_index', $data);
		$this->load->view('footer');
	}

	function post($postID){
		$this->load->model('comment');
		$data['comments']=$this->comment->get_comments($postID);
		$data['post']=$this->post->get_post($postID);
		$this->load->helper('captcha');
		$vals=array(
			'img_path'=>'./captcha/',
			'img_url'=>base_url().'captcha/',
			'img_width'=>150,
			'img_height'=>30
		);
		$cap = create_captcha($vals);
		$this->session->set_userdata('captcha',$cap['word']);
		$data['captcha']=$cap['image'];

		$this->load->helper('smiley');
		$this->load->library('table');
		
		$image_array=get_clickable_smileys(base_url()."smileys/","comment");
		$col_array=$this->table->make_columns($image_array,8);
		$data['smiley_table']=$this->table->generate($col_array);

		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('post',$data);
		$this->load->view('footer');
	}

	function new_post(){
		$user_type=$this->session->userdata('user_type');
		if($user_type !="admin" && $user_type !="author"){
			redirect(base_url().'users/login');
		}
		if($_POST){
			$data=array(
				'title'=>$_POST['title'],
				'post'=>$_POST['post'],
				'userID'=>1,
				'active'=>1
			);
			$this->post->insert_post($data);
			redirect(base_url().'posts/');
		} else {
			$this->load->view('new_post');
		}
	}

	function correct_permissions($required){
		$user_type = $this->session->userdata('user_type');
		if($required=="user"){
			if($user_type){
				return true;
			}
		} elseif($required=="author"){
			if($user_type=="admin" || $user_type=="author"){
				return true;
			}
		} elseif($required=="admin"){
			if($user_type=="admin"){
				return true;
			}
		}
	}

	function editpost($postID){
		//$user_type=$this->session->userdata('user_type');
		
		//if($user_type !="admin" && $user_type !="author"){
		if(!$this->correct_permissions('author')){
			redirect(base_url().'users/login');
		}
		$data['success']=0;
		if($_POST){
			$data=array(
				'title'=>$_POST['title'],
				'post'=>$_POST['post'],
				//'userID'=>0,
				'active'=>1
			);
			$this->post->update_post($postID,$data);
			$data['success']=1;
			redirect(base_url().'posts/');
		}
		$data['post']=$this->post->get_post($postID);
		$this->load->view('edit_post',$data);
	}
	
	function deletepost($postID){
		if(!$this->correct_permissions('author')){
			redirect(base_url().'users/login');
		}
		$this->post->delete_post($postID);
		redirect(base_url().'posts');
	}
}
?>