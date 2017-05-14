<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Novel extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->model('novel_model');
    $this->load->model('config_model');
    $this->load->library('pagination');
  }

  function get_home()
  {
    $data['header']        = $this->config_model->get_config('header');
    $data['header_bottom'] = $this->config_model->get_config('header_bottom');
    $data['logo']          = $this->config_model->get_config('logo');
    $data['site']          = $this->config_model->get_config('site');

    return $data;
  }

	public function index()
	{

    $data = $this->get_home();

    $data['novel'] = $this->novel_model->get_novel_list();
    // pr($this->db->last_query());die();
    $this->load->view('home/index',$data);
  }
  public function last()
  {
    $data = $this->get_home();
    $data['novel']         = $this->novel_model->get_novel_popular();
    $data['chapter']       = $this->novel_model->get_last_chapter();
    $data['novel_popular'] = $this->novel_model->get_novel_popular_list();

    // die();

    $this->load->view('home/index',$data);
  }
  public function detail($id = 0)
  {
    $data = $this->get_home();

    $data['novel'] = $this->novel_model->get_novel($id);
    $data['last_chapter_list'] = $this->novel_model->get_chapter_novel($id);
    $data['chapter_list'] = $this->novel_model->get_chapter_list($id);

    $cat_ids = array();
    if(!empty($data['novel']['cat_ids']))
    {
      $cat_ids = $data['novel']['cat_ids'];
      // $cat_ids = explode(',',$cat_ids);
    }
    if(!empty($cat_ids))
    {
      $data['category'] = $this->novel_model->get_novel_cat($cat_ids);
    }
    // pr($this->db->last_query());die();
    $this->load->view('home/index', $data);
  }
  public function chapter($id = 0)
  {
    $data = $this->get_home();

    $data['chapter'] = $this->novel_model->get_chapter($id);


    $this->load->view('home/index', $data);
  }


  public function category($id = 0)
  {
    $data = $this->get_home();
    if(!empty($id))
    {
      $data['novel_list'] = $this->novel_model->get_novel_by_cat($id);
    }
    pr($this->db->last_query());
    pr($data);die();
    $this->load->view('home/index', $data);
  }

  public function novel_edit($id = 0)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('description', 'Description', 'required');

    if(!empty($id))
    {
      if($this->form_validation->run() === TRUE)
      {
        $data['msg']   = 'Novel Updated Successfully';
        $data['alert'] = 'success';
        $this->novel_model->set_novel($id);
      }
    }

    $data = $this->get_home();

    $data['novel'] = $this->novel_model->get_novel($id);
    $data['last_chapter_list'] = $this->novel_model->get_chapter_novel($id);
    $data['chapter_list'] = $this->novel_model->get_chapter_list($id);

    // pr($this->db->last_query());die();
    $this->load->view('home/index', $data);
  }

  public function chapter_edit($id)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('content', 'Content', 'required');
    $data = $this->get_home();

    if(!empty($id))
    {
      if($this->form_validation->run() === TRUE)
      {
        $data['msg']   = 'Novel Updated Successfully';
        $data['alert'] = 'success';
        $this->novel_model->set_chapter($id);
      }
    }

    $data['chapter'] = $this->novel_model->get_chapter($id);


    // pr($this->db->last_query());die();
    $this->load->view('home/index', $data);

  }
}