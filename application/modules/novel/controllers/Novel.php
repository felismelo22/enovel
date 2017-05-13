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
	public function index()
	{

    $data['header']        = $this->config_model->get_config('header');
    $data['header_bottom'] = $this->config_model->get_config('header_bottom');
    $data['logo']          = $this->config_model->get_config('logo');
    $data['site']          = $this->config_model->get_config('site');

    $data['novel'] = $this->novel_model->get_novel_list();
    // pr($this->db->last_query());die();
    $this->load->view('home/index',$data);
  }
  public function last()
  {
    $data['novel']         = $this->novel_model->get_novel_popular();
    $data['chapter']       = $this->novel_model->get_last_chapter();
    $data['novel_popular'] = $this->novel_model->get_novel_popular_list();
    $data['header']        = $this->config_model->get_config('header');
    $data['header_bottom'] = $this->config_model->get_config('header_bottom');
    $data['logo']          = $this->config_model->get_config('logo');
    $data['site']          = $this->config_model->get_config('site');

    $this->load->view('home/index',$data);
  }
  public function detail($id = 0)
  {
    $data['novel'] = $this->novel_model->get_novel($id);
    $data['last_chapter_list'] = $this->novel_model->get_chapter_novel($id);
    $data['chapter_list'] = $this->novel_model->get_chapter_list($id);

    $data['header']        = $this->config_model->get_config('header');
    $data['header_bottom'] = $this->config_model->get_config('header_bottom');
    $data['logo']          = $this->config_model->get_config('logo');
    $data['site']          = $this->config_model->get_config('site');
    // pr($this->db->last_query());die();
    $this->load->view('home/index', $data);
  }
  public function chapter($id = 0)
  {
    $data['chapter'] = $this->novel_model->get_chapter($id);

    $data['header']        = $this->config_model->get_config('header');
    $data['header_bottom'] = $this->config_model->get_config('header_bottom');
    $data['logo']          = $this->config_model->get_config('logo');
    $data['site']          = $this->config_model->get_config('site');

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

    $data['novel'] = $this->novel_model->get_novel($id);
    $data['last_chapter_list'] = $this->novel_model->get_chapter_novel($id);
    $data['chapter_list'] = $this->novel_model->get_chapter_list($id);

    $data['header']        = $this->config_model->get_config('header');
    $data['header_bottom'] = $this->config_model->get_config('header_bottom');
    $data['logo']          = $this->config_model->get_config('logo');
    $data['site']          = $this->config_model->get_config('site');
    // pr($this->db->last_query());die();
    $this->load->view('home/index', $data);
  }

  public function chapter_edit($id)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('content', 'Content', 'required');

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

    $data['header']        = $this->config_model->get_config('header');
    $data['header_bottom'] = $this->config_model->get_config('header_bottom');
    $data['logo']          = $this->config_model->get_config('logo');
    $data['site']          = $this->config_model->get_config('site');

    // pr($this->db->last_query());die();
    $this->load->view('home/index', $data);

  }
}