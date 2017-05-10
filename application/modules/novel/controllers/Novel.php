<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Novel extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->model('novel_model');
    $this->load->library('pagination');
  }
	public function index()
	{
    $data['novel'] = $this->novel_model->get_novel_list();
		$this->load->view('home/index',$data);
	}
}