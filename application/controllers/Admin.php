<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model','model');
		$config=[
		 	'upload_path'=>'./uploads/',
		 	'allowed_types'=>'gif|jpg|png|jpeg'
		 ];
		 $this->load->library('upload',$config);
	}
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function authenticate()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		if($this->model->login($email,$password)->num_rows()>0):
			$this->session->set_userdata('email', $email);
	  		return redirect(base_url().'admin/dashboard');
		else:
			$this->session->set_flashdata('msg', "Email/Password is incorrect. Try again");
			return redirect(base_url().'admin/index');
		endif;
	}
	public function check_login()
	{
		if(empty($this->session->userdata('email'))):
		$this->session->set_flashdata('msg', "Please login to continue");
		redirect(base_url().'admin/index');
		endif;
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('msg', "Logged out successfully");
		return redirect(base_url().'admin/index');
	}
	public function dashboard()
	{
		$this->check_login();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	public function campaigns()
	{
		$this->check_login();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/campaigns');
		$this->load->view('admin/footer');
	}
	public function addCampaign()
	{
		if($this->upload->do_upload('poster')):
		$title=$this->input->post('title');
		$sub_title=$this->input->post('sub_title');
		$image=$this->upload->data();
		$poster="uploads/".$image['raw_name'].$image['file_ext'];
		$data=array(
			'title'=>$title,
			'sub_title'=>$sub_title,
			'poster'=>$poster
		);
		if($this->model->addCampaign($data)):
		$this->session->set_flashdata('msg','Campaigns added successfully.');
	 	return redirect(base_url().'admin/campaigns');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/campaigns');
		endif;
		else:
		$image_error=$this->upload->display_errors();
		if(isset($image_error))
		{
		$this->session->set_flashdata('msg',$image_error);
		}
	 	return redirect(base_url().'admin/campaigns');
		endif;
	}
	public function getCampaignData()
	{
		echo $this->model->getCampaignData();
	}
	public function deleteCampaignData()
	{
		$id=$this->input->post('id');
		$data=$this->model->getCampaignData($id);
		$poster=$data[0]->poster;
		if(file_exists($poster)):unlink($poster);endif;
		echo $this->model->deleteCampaignData($id);
	}
	public function editCampaign($id)
	{
		$data['campaign']=$this->model->getCampaignData($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_campaigns',$data);
		$this->load->view('admin/footer');
	}	
	public function updateCampaign($id)
	{
	$old=$this->model->getCampaignData($id);
	$old_poster=$old[0]->poster;
	if($this->upload->do_upload('poster')):
	if(file_exists($old_poster)):unlink($old_poster);endif;
	$image=$this->upload->data();
	$poster="uploads/".$image['raw_name'].$image['file_ext'];
	else:
	$poster=$old_poster;
	endif;
	$title=$this->input->post('title');
	$sub_title=$this->input->post('sub_title');
	$data=array(
		'title'=>$title,
		'sub_title'=>$sub_title,
		'poster'=>$poster
	);
	if($this->model->updateCampaign($data,$id)):
	$this->session->set_flashdata('msg','Campaigns updated successfully.');
 	return redirect(base_url().'admin/campaigns');
	else:
	$this->session->set_flashdata('msg','Something went wrong. Try again later.');
 	return redirect(base_url().'admin/campaigns');
	endif;
	}
	public function campaign_image()
	{
		$data['campaigns']=$this->model->getCampaigns();
		$data['campaign_images']=$this->model->getCampaignImages();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/campaign_image',$data);
		$this->load->view('admin/footer');
	}
	public function addCampaignImage()
	{

		if($this->upload->do_upload('image')):
		$img=$this->upload->data();
		$image="uploads/".$img['raw_name'].$img['file_ext'];
		$campaign_id=$this->input->post('campaign_id');
		$data=array(
			'image'=>$image,
			'campaign_id'=>$campaign_id
		);
		if($this->model->addCampaignImage($data)):
		$this->session->set_flashdata('msg','Campaigns Image added successfully.');
	 	return redirect(base_url().'admin/campaign_image');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/campaign_image');
		endif;
		else:
		$image_error=$this->upload->display_errors();
		if(isset($image_error))
		{
		$this->session->set_flashdata('msg',$image_error);
		}
	 	return redirect(base_url().'admin/campaign_image');
		endif;
	}
	public function deleteCampaignImage($id)
	{
		$data=$this->model->getCampaignImages($id);
		$image=$data[0]->image;
	if(file_exists($image)):unlink($image);endif;
	if($this->model->deleteCampaignImage($id)):
	$this->session->set_flashdata('msg','Campaign Image deleted successfully.');
	 return redirect(base_url().'admin/campaign_image');
	else:
	$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 return redirect(base_url().'admin/campaign_image');
	endif;
	}
	public function editCampaignImage($id)
	{
	$data['campaigns']=$this->model->getCampaigns();
	$data['campaign_image']=$this->model->getCampaignImages($id);
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/edit_campaign_image',$data);
	$this->load->view('admin/footer');
	}
	public function updateCampaignImage($id)
	{
		$data=$this->model->getCampaignImages($id);
		$old_image=$data[0]->image;
		if($this->upload->do_upload('image')):
		if(file_exists($old_image)):unlink($old_image);endif;
		$img=$this->upload->data();
		$image="uploads/".$img['raw_name'].$img['file_ext'];
		else:
		$image=$old_image;
		endif;
		$campaign_id=$this->input->post('campaign_id');
		$data=array(
			'image'=>$image,
			'campaign_id'=>$campaign_id
		);
		if($this->model->updateCampaignImage($data,$id)):
		$this->session->set_flashdata('msg','Campaign Image updated successfully.');
		 return redirect(base_url().'admin/campaign_image');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
		 return redirect(base_url().'admin/campaign_image');
		endif;
	}
	public function impact()
	{
	$data['impact']=$this->model->getImpact();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/impact',$data);
	$this->load->view('admin/footer');
	}
	public function addImpact()
	{
		if($this->upload->do_upload('image')):
		$img=$this->upload->data();
		$image="uploads/".$img['raw_name'].$img['file_ext'];
		$data=array(
			'image'=>$image,
		);
		if($this->model->addImpact($data)):
		$this->session->set_flashdata('msg','Impact Image added successfully.');
	 	return redirect(base_url().'admin/impact');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/impact');
		endif;
		else:
		$image_error=$this->upload->display_errors();
		if(isset($image_error))
		{
		$this->session->set_flashdata('msg',$image_error);
		}
	 	return redirect(base_url().'admin/impact');
		endif;
	}
	public function deleteImpact($id)
	{
	$data=$this->model->getImpact($id);
	$image=$data[0]->image;
	if(file_exists($image)):
	unlink($image);
	endif;
	if($this->model->deleteImpact($id)):
	$this->session->set_flashdata('msg','Impact Image deleted successfully.');
	 return redirect(base_url().'admin/impact');
	else:
	$this->session->set_flashdata('msg','Something went wrong. Try again later.');
 	return redirect(base_url().'admin/impact');
	endif;
	}
	public function editImpact($id)
	{
		$data['impact']=$this->model->getImpact($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_impact',$data);
		$this->load->view('admin/footer');
	}
	public function updateImpact($id)
	{
		$old_data=$this->model->getImpact($id);
		$old_image=$old_data[0]->image;
		if($this->upload->do_upload('image')):
		if(file_exists($old_image)):unlink($old_image);endif;
		$img=$this->upload->data();
		$image="uploads/".$img['raw_name'].$img['file_ext'];
		else:
		$image=$old_image;
		endif;
		$data=array(
			'image'=>$image
		);
		if($this->model->updateImpact($data,$id)):
		$this->session->set_flashdata('msg','Impact Image updated successfully.');
		 return redirect(base_url().'admin/impact');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
			return redirect(base_url().'admin/impact');
		endif;
	}
	public function media()
	{
		$data['media']=$this->model->getMedia();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/media',$data);
		$this->load->view('admin/footer');
	}
	public function addMedia()
	{
		if($this->upload->do_upload('poster')):
		$img=$this->upload->data();
		$poster="uploads/".$img['raw_name'].$img['file_ext'];
		$title=$this->input->post('title');
		$short_description=$this->input->post('short_description');
		$link=$this->input->post('link');
		$data=array(
			'poster'=>$poster,
			'title'=>$title,
			'short_description'=>$short_description,
			'link'=>$link
		);
		if($this->model->addMedia($data)):
		$this->session->set_flashdata('msg','Media posted successfully.');
	 	return redirect(base_url().'admin/media');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/media');
		endif;
		else:
		$image_error=$this->upload->display_errors();
		if(isset($image_error))
		{
		$this->session->set_flashdata('msg',$image_error);
		}
	 	return redirect(base_url().'admin/media');
		endif;
	}
	public function deleteMedia($id)
	{
		$data=$this->model->getMedia($id);
		$poster=$data[0]->poster;
		if(file_exists($poster)):unlink($poster);endif;
		if($this->model->deleteMedia($id)):
		$this->session->set_flashdata('msg','Media deleted successfully.');
	 	return redirect(base_url().'admin/media');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/media');
		endif;
	}
	public function editMedia($id)
	{
		$data['media']=$this->model->getMedia($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_media',$data);
		$this->load->view('admin/footer');
	}
	public function updateMedia($id)
	{
		$old_data=$this->model->getMedia($id);
		$old_poster=$old_data[0]->poster;
		if($this->upload->do_upload('poster')):
		if(file_exists($old_poster)):unlink($old_poster);endif;
		$img=$this->upload->data();
		$poster="uploads/".$img['raw_name'].$img['file_ext'];
		else:
		$poster=$old_poster;
		endif;
		$title=$this->input->post('title');
		$short_description=$this->input->post('short_description');
		$link=$this->input->post('link');
		$data=array(
			'poster'=>$poster,
			'title'=>$title,
			'short_description'=>$short_description,
			'link'=>$link
		);
		if($this->model->updateMedia($data,$id)):
		$this->session->set_flashdata('msg','Media updated successfully.');
		 return redirect(base_url().'admin/media');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
			return redirect(base_url().'admin/media');
		endif;
	}
	public function work_category()
	{
		$data['work_category']=$this->model->getWorkCategory();
		$data['state']=$this->model->getStateList();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/work_category',$data);
		$this->load->view('admin/footer');
	}
	public function addWorkCategory()
	{
		if($this->upload->do_upload('poster')):
		$img=$this->upload->data();
		$poster="uploads/".$img['raw_name'].$img['file_ext'];
		$state_name=$this->input->post('state_name');
		$year=$this->input->post('year');
		$name=$this->input->post('name');
		$short_description=$this->input->post('short_description');
		$data=array(
			'poster'=>$poster,
			'state_name'=>$state_name,
			'name'=>$name,
			'short_description'=>$short_description,
			'year'=>$year
		);
		if($this->model->addWorkCategory($data)):
		$this->session->set_flashdata('msg','Work Category added successfully.');
	 	return redirect(base_url().'admin/work_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/work_category');
		endif;
		else:
		$image_error=$this->upload->display_errors();
		if(isset($image_error))
		{
		$this->session->set_flashdata('msg',$image_error);
		}
	 	return redirect(base_url().'admin/work_category');
		endif;
	}
	public function deleteWorkCategory($id)
	{
		$data=$this->model->getWorkCategory($id);
		$poster=$data[0]->poster;
		if(file_exists($poster)):unlink($poster);endif;
		if($this->model->deleteWorkCategory($id)):
		$this->session->set_flashdata('msg','Work Category deleted successfully.');
	 	return redirect(base_url().'admin/work_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/work_category');
		endif;
	}
	public function editWorkCategory($id)
	{
	$data['work_categorys']=$this->model->getWorkCategory($id);
	$data['state']=$this->model->getStateList();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/edit_work_category',$data);
	$this->load->view('admin/footer');
	}
	public function updateWorkCategory($id)
	{
		$old_data=$this->model->getWorkCategory($id);
		$old_poster=$old_data[0]->poster;
		if($this->upload->do_upload('poster')):
		if(file_exists($old_poster)):unlink($old_poster);endif;
		$img=$this->upload->data();
		$poster="uploads/".$img['raw_name'].$img['file_ext'];
		else:
		$poster=$old_poster;
		endif;
		$state_name=$this->input->post('state_name');
		$year=$this->input->post('year');
		$name=$this->input->post('name');
		$short_description=$this->input->post('short_description');
		$data=array(
			'poster'=>$poster,
			'state_name'=>$state_name,
			'year'=>$year,
			'name'=>$name,
			'short_description'=>$short_description
		);
		if($this->model->updateWorkCategory($data,$id)):
		$this->session->set_flashdata('msg','Work Category updated successfully.');
	 	return redirect(base_url().'admin/work_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/work_category');
		endif;
	}
	public function work_item()
	{
		$data['work_category']=$this->model->getWorkCategory();
		$data['work_item']=$this->model->getWorkItem();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/work_item',$data);
		$this->load->view('admin/footer');
	}
	public function addWorkItem()
	{
		if($this->upload->do_upload('image')):
		$img=$this->upload->data();
		$image="uploads/".$img['raw_name'].$img['file_ext'];
		$cat_id=$this->input->post('cat_id');
		$data=array(
			'image'=>$image,
			'cat_id'=>$cat_id
		);
		if($this->model->addWorkItem($data)):
		$this->session->set_flashdata('msg','Work Item added successfully.');
	 	return redirect(base_url().'admin/work_item');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/work_item');
		endif;
		else:
		$image_error=$this->upload->display_errors();
		if(isset($image_error))
		{
		$this->session->set_flashdata('msg',$image_error);
		}
	 	return redirect(base_url().'admin/work_item');
		endif;
	}
	public function deleteWorkItem($id)
	{
		$data=$this->model->getWorkItem();
		$image=$data[0]->image;
		if(file_exists($image)):unlink($image);endif;
		if($this->model->deleteWorkItem($id)):
		$this->session->set_flashdata('msg','Work Item deletd successfully.');
	 	return redirect(base_url().'admin/work_item');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/work_item');
		endif;
	}
	public function editWorkItem($id)
	{
		$data['work_category']=$this->model->getWorkCategory();
		$data['work_item']=$this->model->getWorkItem($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_work_item',$data);
		$this->load->view('admin/footer');
	}
	public function updateWorkItem($id)
	{
		$old_data=$this->model->getWorkItem($id);
		$old_image=$old_data[0]->image;
		if($this->upload->do_upload('image')):
		if(file_exists($old_image)):unlink($old_image);endif;
		$img=$this->upload->data();
		$image="uploads/".$img['raw_name'].$img['file_ext'];
		else:
		$image=$old_image;
		endif;
		$cat_id=$this->input->post('cat_id');
		$data=array(
			'cat_id'=>$cat_id,
			'image'=>$image
		);
		if($this->model->updateWorkItem($data,$id)):
		$this->session->set_flashdata('msg','Work Item update successfully.');
	 	return redirect(base_url().'admin/work_item');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/work_item');
		endif;
	}
	public function job_category()
	{
		$data['join_category']=$this->model->getJoinCategory();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/job_category',$data);
		$this->load->view('admin/footer');
	}
	public function addJobCategory()
	{
		$cat_name=$this->input->post('cat_name');
		$data=array(
			'cat_name'=>$cat_name
		);
		if($this->model->addJobCategory($data)):
		$this->session->set_flashdata('msg','Job Category added successfully.');
	 	return redirect(base_url().'admin/job_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/job_category');
		endif;
	}
	public function deleteJobCategory($id)
	{
		if($this->model->deleteJobCategory($id)):
		$this->session->set_flashdata('msg','Job Category deleted successfully.');
	 	return redirect(base_url().'admin/job_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/job_category');
		endif;
	}
	public function editJobCategory($id)
	{
		$data['join_category']=$this->model->getJoinCategory($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_job_category',$data);
		$this->load->view('admin/footer');
	}
	public function updateJobCategory($id)
	{
		$cat_name=$this->input->post('cat_name');
		$data=array(
			'cat_name'=>$cat_name
		);
		if($this->model->updateJobCategory($data,$id)):
		$this->session->set_flashdata('msg','Job Category updated successfully.');
	 	return redirect(base_url().'admin/job_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/job_category');
		endif;
	}
	public function job_sub_category()
	{
		$data['join_category']=$this->model->getJoinCategory();
		$data['job_sub_category']=$this->model->getJobSubCategory();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/job_sub_category',$data);
		$this->load->view('admin/footer');
	}	
	public function addJobSubCategory()
	{
		$cat_id=$this->input->post('cat_id');
		$sub_cat_name=$this->input->post('sub_cat_name');
		$data=array(
			'cat_id'=>$cat_id,
			'sub_cat_name'=>$sub_cat_name
		);
		if($this->model->addJobSubCategory($data)):
		$this->session->set_flashdata('msg','Job Sub Category added successfully.');
	 	return redirect(base_url().'admin/job_sub_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/job_sub_category');
		endif;
	}
	public function editJobSubCategory($id)
	{
	$data['join_category']=$this->model->getJoinCategory();
	$data['job_sub_category']=$this->model->getJobSubCategory($id);
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/edit_job_sub_category',$data);
	$this->load->view('admin/footer');
	}
	public function updateJobSubCategory($id)
	{
		$cat_id=$this->input->post('cat_id');
		$sub_cat_name=$this->input->post('sub_cat_name');
		$data=array(
			'cat_id'=>$cat_id,
			'sub_cat_name'=>$sub_cat_name
		);
		if($this->model->updateJobSubCategory($data,$id)):
		$this->session->set_flashdata('msg','Job Sub Category updated successfully.');
	 	return redirect(base_url().'admin/job_sub_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/job_sub_category');
		endif;
	}
	public function deleteJobSubCategory($id)
	{
		if($this->model->deleteJobSubCategory($id)):
		$this->session->set_flashdata('msg','Job Sub Category deleted successfully.');
	 	return redirect(base_url().'admin/job_sub_category');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/job_sub_category');
		endif;
	}
	public function job()
	{
		$data['job']=$this->model->getJob();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/job',$data);
		$this->load->view('admin/footer');
	}
	public function deleteJob($id)
	{
		if($this->model->deleteJob($id)):
		$this->session->set_flashdata('msg','Job  deleted successfully.');
	 	return redirect(base_url().'admin/job');
		else:
		$this->session->set_flashdata('msg','Something went wrong. Try again later.');
	 	return redirect(base_url().'admin/job');
		endif;
	}
	public function add_job()
	{
		$data['join_category']=$this->model->getJoinCategory();
		$data['job_sub_category']=$this->model->getJobSubCategory();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/add_job',$data);
		$this->load->view('admin/footer');
	}
	public function getSubCategory()
	{
		$cat_id=$this->input->post('cat_id');
		echo $this->model->getSubCategory($cat_id);
	}


}
