<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		redirect(site_url('Welcome/Home'));
	}
	public function Home(){
		$this->load->view('home');
	}
	public function login(){
		// if ($this->session->userdata('logged_in') && $this->session->userdata('username')!='admin') {
		// 	redirect(site_url('Welcome/loginIn'));
		// }else{
			$this->load->view('login');
		// }
	}

	public function prosesLogin(){
		// $data['username'] = $this->input->post('username');
		// $data['password'] = $this->input->post('password');
		// $id=$this->UserModel->login($data);
		// if ($id != null) {
		// 	$result = $id->result_array();
		// 	$_SESSION['nama'] = $result[0]['nama'];
		// 	$_SESSION['username'] = $result[0]['username'];
		// 	$_SESSION['logged_in'] = true;

		// 	if ($_SESSION['username'] == 'admin') {
		// 		//redirect(site_url('Admin'));
		// 		$this->load->view('Admin');

		// 	}else{
		 		$this->loginIn();
		// 	}
		// }else{
		// 	//ned to show something the user about wrong login
		// 	$this->load->view('logErr');
		// }
	}

	public function loginIn(){
		// if ($_SESSION['logged_in']) {
		 		$this->load->view('homeIn');
		// 	}else{
		// 		redirect(site_url('Welcome/'));
		// 	}
		// }
	}

	public function regist(){
		$this->load->view('regist');
	}

	public function prosesRegis(){
		// $data['nama'] = $this->input->post('nama');
		// $data['username'] = $this->input->post('username');
		// $data['password'] = $this->input->post('password');
		// $this->UserModel->register($data);
		// redirect(site_url('Welcome/'));
	}	

	public function Detail(){
		$this->load->view('detail/detailBarang1');
	}

	public function DetailIn(){
		$this->load->view('detail/In/detailBarang_userIn');
	}

	public function Keranjang(){
		$this->load->view('cart_userIn');
	}

	public function Profile(){
		$this->load->view('profileUser');
	}

	public function aboutIn(){
		$this->load->view('aboutIn');
	}

	public function about(){
		$this->load->view('about');
	}

	public function logout(){
		// foreach ($_SESSION as $key => $value) {
		// 	$_SESSION[$key] = null;
		// }
		 $this->load->view('home');
	}

}
