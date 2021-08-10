<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function getCampaignData($id='')
	{
		if($id):
		return $this->db->get_where('campaigns',array('id'=>$id))->result();
		else:
		$this->db->order_by('id','desc');
		return $this->db->get('campaigns')->result();
		endif;
	}
	public function getCampaignImages($id)
	{
		return $this->db->get_where('campaign_images',array('campaign_id'=>$id))->result();
	}
	public function getImpact()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('impact')->result();
	}
	public function num_rows()
	{
		return $this->db->get('media')->num_rows();
	}
	public function getMedia($limit,$offset)
	{
		$this->db->order_by('id','DESC');
		$this->db->limit($limit,$offset);
		return $this->db->get('media')->result();
	}
	public function getCountry()
		{
			$this->db->order_by('country_id','desc');
			return $this->db->get('country')->result();
		}
		public function getCountryNameByID($country_id)
		{
			return $this->db->get_where('country',array('country_id'=>$country_id))->row()->country_name;
		}
		public function getStateNameByID($state_id)
		{
			return $this->db->get_where('state',array('state_id'=>$state_id))->row()->state_name;
		}
		public function getDistrictNameByID($district_id)
		{
			return $this->db->get_where('district',array('district_id'=>$district_id))->row()->district_name;
		}
		public function getTehsilNameByID($tehsil_id)
		{
			return $this->db->get_where('tehsil',array('tehsil_id'=>$tehsil_id))->row()->tehsil_name;
		}
		public function getBlockNameByID($block_id)
		{
			return $this->db->get_where('block',array('block_id'=>$block_id))->row()->block_name;
		}
		public function fetchState($country_id)
		{
			$res=$this->db->get_where('state',array('country_id'=>$country_id))->result();
			$output='';
			$output.=' <option selected="" disabled="">Choose State</option>';
			foreach($res as $key):
			$output.='<option value="'.$key->state_id.'">'.$key->state_name.'</option>';
			endforeach;
			return $output;
		}
		public function fetchDistrict($state_id)
		{
			$res=$this->db->get_where('district',array('state_id'=>$state_id))->result();
			$output='';
			$output.=' <option selected="" disabled="">Choose district</option>';
			foreach($res as $key):
			$output.='<option value="'.$key->district_id.'">'.$key->district_name.'</option>';
			endforeach;
			return $output;
		}
		public function fetchBlock($district_id)
		{
			$res=$this->db->get_where('block',array('district_id'=>$district_id))->result();
			$output='';
			$output.=' <option selected="" disabled="">Choose Block</option>';
			foreach($res as $key):
			$output.='<option value="'.$key->block_id.'">'.$key->block_name.'</option>';
			endforeach;
			return $output;
		}

}
