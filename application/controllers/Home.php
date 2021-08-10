<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model','model');
	}
	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/index');
		$this->load->view('home/footer');
	}
	public function about()
	{
		$this->load->view('home/header');
		$this->load->view('home/about');
		$this->load->view('home/footer');
	}
	public function download()
	{
		$data['campaign']=$this->model->getCampaignData();
		$this->load->view('home/header');
		$this->load->view('home/download',$data);
		$this->load->view('home/footer');
	}
	public function campaigns($id)
	{
		$data['campaign_images']=$this->model->getCampaignImages($id);
		$this->load->view('home/header');
		$this->load->view('home/campaigns',$data);
		$this->load->view('home/footer');
	}
	public function impact()
	{
		$data['impact']=$this->model->getImpact();
		$this->load->view('home/header');
		$this->load->view('home/impact',$data);
		$this->load->view('home/footer');
	}
	public function media()
	{
		$this->load->library('pagination');
		//$config['attributes'] = array('class' => 'myclass');
		$config=[
			'attributes'=> array('class' => 'page-link'),
			'base_url'=>base_url('home/media'),
			'per_page'=>2,
			'total_rows'=>$this->model->num_rows(),
			'full_tag_open'=>"<nav><ul class='pagination'>",
			'full_tag_close'=>"</ul></nav>",
			'prev_tag_open'=>"<li>",
			'prev_tag_close'=>"</li>",
			'next_tag_open'=>"<li>",
			'next_tag_close'=>"</li>",
			'num_tag_open'=>"<li>",
			'num_tag_close'=>"</li>",
			'cur_tag_open'=>"<li class='active'><a>",
			'cur_tag_close'=>"</a></li>"
		];
		$this->pagination->initialize($config);
		//$data['blog']=$this->model->get_blog($config['per_page'],$this->uri->segment(3));
		//$data['recent_blog']=$this->model->Recent_blog();
		$data['media']=$this->model->getMedia($config['per_page'],$this->uri->segment(3));
		$this->load->view('home/header');
		$this->load->view('home/media',$data);
		$this->load->view('home/footer');
	}
	public function contact()
	{
		$this->load->view('home/header');
		$this->load->view('home/contact');
		$this->load->view('home/footer');
	}
	public function join()
	{
		$this->load->view('home/header');
		$this->load->view('home/join');
		$this->load->view('home/footer');
	}
	//08 Aug, 2021
	public function social_media_mgmt()
	{
		$this->load->view('home/header');
		$this->load->view('home/social_media_mgmt');
		$this->load->view('home/footer');
	}
	public function bulk_message_services()
	{
		$this->load->view('home/header');
		$this->load->view('home/bulk_message_services');
		$this->load->view('home/footer');
	}
	public function documentary_service()
	{
		$this->load->view('home/header');
		$this->load->view('home/documentary_service');
		$this->load->view('home/footer');
	}
	public function digital_service()
	{
		$this->load->view('home/header');
		$this->load->view('home/digital_service');
		$this->load->view('home/footer');
	}
	public function election_mgmt_service()
	{
		$this->load->view('home/header');
		$this->load->view('home/election_mgmt_service');
		$this->load->view('home/footer');
	}
	public function election_war_room()
	{
		$this->load->view('home/header');
		$this->load->view('home/election_war_room');
		$this->load->view('home/footer');
	}
	public function live_broadcasting()
	{
		$this->load->view('home/header');
		$this->load->view('home/live_broadcasting');
		$this->load->view('home/footer');
	}
	public function political_research()
	{
		$this->load->view('home/header');
		$this->load->view('home/political_research');
		$this->load->view('home/footer');
	}
	public function private_call_center()
	{
		$this->load->view('home/header');
		$this->load->view('home/private_call_center');
		$this->load->view('home/footer');
	}
	public function web_app_email_service()
	{
		$this->load->view('home/header');
		$this->load->view('home/web_app_email_service');
		$this->load->view('home/footer');
	}
	public function register()
	{
		$data['country']=$this->model->getCountry();
		$this->load->view('home/header');
		$this->load->view('home/register',$data);
		$this->load->view('home/footer');
	}
	public function fetchState()
	{
		$country_id=$this->input->post('country_id');
		echo $this->model->fetchState($country_id);
	}
	public function fetchDistrict()
	{
		$state_id=$this->input->post('state_id');
		echo $this->model->fetchDistrict($state_id);
	}
	public function fetchTehsil()
	{
		$district_id=$this->input->post('district_id');
		echo $this->model->fetchTehsil($district_id);
	}
	public function fetchBlock()
	{
		$district_id=$this->input->post('district_id');
		echo $this->model->fetchBlock($district_id);
	}
	public function test()
	{
		$data['country']=$this->model->getCountry();
		$this->load->view('home/header');
		$this->load->view('home/test',$data);
		$this->load->view('home/footer');	
	}
}
