<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function login($email,$password)
	{
		return  $this->db->get_where('admin', array('email' => $email,'password'=>$password));
	}
	public function addCampaign($data)
	{
		return $this->db->insert('campaigns',$data);
	}
	public function getCampaignData($id='')
	{
		if($id):
		return $this->db->get_where('campaigns',array('id'=>$id))->result();
		else:
		$res=$this->db->get('campaigns')->result();
		$output='';
		$i=1;
		foreach($res as $key):
		$output.='<tr><td>'.$i.'</td><td><img src="'.base_url().$key->poster.'" style="height:100px;width:120px;border-radius:10px;box-shadow:0 5px 10px rgba(0,0,0,0.4);"></td><td>'.$key->title.'</td><td>'.$key->sub_title.'</td><td><a href="'.base_url('admin/editCampaign/'.$key->id).'"><i class="fa fa-edit "></i></a></td><td><a onclick="showDeletePopup('.$key->id.')" href="#"><i class="fa fa-trash close-card"></i></a></td></tr>';
		$i++;endforeach;
		return $output;
		endif;
	}
	public function deleteCampaignData($id)
	{
		return $this->db->delete('campaigns',array('id'=>$id));
	}
	public function updateCampaign($data,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('campaigns',$data);
	}
	public function getCampaigns()
	{
		return $this->db->get('campaigns')->result();
	}
	public function addCampaignImage($data)
	{
		return $this->db->insert('campaign_images',$data);
	}
	public function getCampaignImages($id='')
	{
		if($id):
		return $this->db->get_where('campaign_images',array('id'=>$id))->result();
		else:
		$this->db->order_by('id','desc');
		return $this->db->get('campaign_images')->result();
		endif;
	}
	public function deleteCampaignImage($id)
	{
		return $this->db->delete('campaign_images',array('id'=>$id));
	}
	public function updateCampaignImage($data,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('campaign_images',$data);
	}
	public function getImpact($id='')
	{
		if($id):
			return $this->db->get_where('impact',array('id'=>$id))->result();
		else:
			$this->db->order_by('id','desc');
			return $this->db->get('impact')->result();
		endif;
	}
	public function addImpact($data)
	{
		return $this->db->insert('impact',$data);
	}
	public function deleteImpact($id)
	{
		return $this->db->delete('impact',array('id'=>$id));
	}
	public function updateImpact($data,$id)
	{
		$this->db->where('id',$id);
		return  $this->db->update('impact',$data);
	}
	public function getMedia($id='')
	{
		if($id):
		return $this->db->get_where('media',array('id'=>$id))->result();
		else:
		return $this->db->get('media')->result();
		endif;
	}
	public function addMedia($data)
	{
		return $this->db->insert('media',$data);
	}
	public function deleteMedia($id)
	{
		return $this->db->delete('media',array('id'=>$id));
	}
	public function updateMedia($data,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('media',$data);
	}
	public function getWorkCategory($id='')
	{
		if($id):
		return $this->db->get_where('work_category',array('id'=>$id))->result();
		else:
		$this->db->order_by('id','desc');
		return $this->db->get('work_category')->result();
		endif;
	}
	public function getStateList()
	{
		return $this->db->get('state')->result();
	}
	public function addWorkCategory($data)
	{
		return $this->db->insert('work_category',$data);
	}
	public function deleteWorkCategory($id)
	{
		return $this->db->delete('work_category',array('id'=>$id));
	}
	public function getWorkItem($id='')
	{
		if($id):
			return $this->db->get_where('work_items',array('id'=>$id))->result();
		else:	
			$this->db->order_by('id','desc');
			return $this->db->get('work_items')->result();
		endif;
	}
	public function updateWorkCategory($data,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('work_category',$data);
	}
	public function addWorkItem($data)
	{
		return $this->db->insert('work_items',$data);
	}
	public function deleteWorkItem($id)
	{
		return $this->db->delete('work_items',array('id'=>$id));
	}
	public function updateWorkItem($data,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('work_items',$data);
	}
	public function getJoinCategory($id='')
	{
		if($id):
			return $this->db->get_where('job_category',array('id'=>$id))->result();
		else:
			$this->db->order_by('id','desc');
			return $this->db->get('job_category')->result();
		endif;
	}
	public function addJobCategory($data)
	{
		return $this->db->insert('job_category',$data);
	}
	public function deleteJobCategory($id)
	{
		return $this->db->delete('job_category',array('id'=>$id));
	}
	public function updateJobCategory($data,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('job_category',$data);
	}
	public function getJobSubCategory($id='')
	{
		if($id):
		return $this->db->get_where('job_sub_category',array('id'=>$id))->result();
		else:
		$this->db->order_by('id','desc');
		return $this->db->get('job_sub_category')->result();
		endif;
	}
	public function addJobSubCategory($data)
	{
		return $this->db->insert('job_sub_category',$data);
	}
	public function updateJobSubCategory($data,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('job_sub_category',$data);
	}
	public function deleteJobSubCategory($id)
	{
		return $this->db->delete('job_sub_category',array('id'=>$id));
	}
	public function getJob($id='')
	{
		if($id):
		return $this->db->get_where('job',array('id'=>$id))->result();
		else:
		$this->db->order_by('id','desc');
		return $this->db->get('job')->result();
		endif;
	}
	public function deleteJob($id)
	{
		return $this->db->delete('job',array('id'=>$id));
	}
	public function getSubCategory($cat_id)
	{
		$res=$this->db->get_where('job_sub_category',array('cat_id'=>$cat_id))->result();
		$output='<option disabled selected>Select Sub Category</option>';
		foreach($res as $key):
			$output.='<option value="'.$key->id.'">'.$key->sub_cat_name.'</option>';
		endforeach;
		return $output;
	}
}
