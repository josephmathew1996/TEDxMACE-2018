<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {


	public function index()
	{
		
		$data['title']="TEDxMACE";
		$data['page']="home";

		$this->load->view('head',$data);
		$this->load->view('front_page',$data);
		$this->load->view('foot',$data);
	}

	public function about()
	{
		$data['title']="About TEDxMACE";
		$data['page']="about";
        		
		$this->load->view('head',$data);
		$this->load->view('about_page',$data);
		$this->load->view('foot',$data);	
	}

	public function register()
	{
		$data['title']="Register TEDxMACE";
		$data['page']="register";

		$this->load->view('head',$data);
		$this->load->view('register_page',$data);
		$this->load->view('foot',$data);	
	}

	public function partners()
	{
		$data['title']="Partners TEDxMACE";
		$data['page']="partners";

		$this->load->view('head',$data);
		$this->load->view('partners_page',$data);
		$this->load->view('foot',$data);	
	}

	public function ideas()
	{
		$data['title']="Idea Submission TEDxMACE";
		$data['page']="ideas";

		$this->load->view('head',$data);
		$this->load->view('ideas_page',$data);
		$this->load->view('foot',$data);	
	}

	public function team()
	{
		$data['title']="Team TEDxMACE";
		$data['page']="team";

		$this->load->view('head',$data);
		$this->load->view('team_page',$data);
		$this->load->view('foot',$data);	
	}
	public function speakers()
	{
		$data['title']="Speakers TEDxMACE";
		$data['page']="speakers";

		$this->load->view('head',$data);
		$this->load->view('speakers_page',$data);
		$this->load->view('foot',$data);	
	}

	public function subs()
	{
		$data['title']="SubsribersTEDxMACE";

		$this->load->view('subs_see',$data);
	}
	public function youth()
	{
		$data['title']="Youth Speaker Hunt TEDxMACE";
		$data['page']="youth";

		$this->load->view('head',$data);
		$this->load->view('youth_page',$data);
		$this->load->view('foot',$data);	
	}

}
