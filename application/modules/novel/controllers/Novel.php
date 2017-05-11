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
    // pr($this->db->last_query());die();
    $this->load->view('home/index',$data);
  }
  public function last()
  {
    $data['novel'] = $this->novel_model->get_novel_popular();
    $data['chapter'] = $this->novel_model->get_last_chapter();
    $data['novel_popular'] = $this->novel_model->get_novel_popular_list();
    // pr($this->db->last_query());die();
    $this->load->view('home/index',$data);
  }
  public function detail($id = 0)
  {
    $data['novel'] = $this->novel_model->get_novel($id);
    $data['last_chapter_list'] = $this->novel_model->get_chapter_novel($id);
    $data['chapter_list'] = $this->novel_model->get_chapter_list($id);
    // pr($this->db->last_query());die();
    $this->load->view('home/index', $data);
  }
}