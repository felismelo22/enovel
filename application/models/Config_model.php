<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Config_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_config($name = '')
	{
		if(!empty($name))
		{
			$query  = $this->db->get_where('config', 'name = "'.$name.'"', '1');
			$config = $query->row_array();
			return $config;
		}
	}
}