<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->helper('email');
    $this->load->model('admin_model');
    $this->load->model('content_model');
    $this->load->model('config_model');
    $this->load->model('novel_model');
		$this->load->library('session');
		$this->load->library('pagination');
  }
	public function index()
	{
		$this->load->view('admin/index');
	}

  public function login()
  {
    if(!empty($_POST))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $allow = $this->admin_model->login($username,$password);
      if(!empty($allow))
      {
        $user_data = array(
                      'id' => $allow['id'],
                      'username'=> $allow['username']
                      );
        $this->session->set_userdata('logged_in', $user_data);

        // redirect(base_url('admin'));
        redirect('admin');
      }else{
        $data['msg'] = 'pastikan username dan password anda benar';
        $data['alert'] = 'danger';
        $this->load->view('admin/index', $data);
      }
    }else{
      $this->load->view('admin/index');
    }
  }
	public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('admin'));
  }

  /*USER*/
	public function user_list($page = 0, $keyword = NULL)
	{
    if(!empty($this->input->post('delete')))
    {
      if(!empty($_POST['del_user']))
      {
        $this->admin_model->del_user($_POST['del_user']);
        $data['msg']   = 'data berhasil dihapus';
        $data['alert'] = 'success';
      }
    }
    if(!empty($this->input->post('publish')))
    {
      $this->admin_model->del_user($_POST['del_user']);
      $data['msg']   = 'data berhasil dihapus';
      $data['alert'] = 'success';
    }

    $data = $this->admin_model->get_all_user($page, $keyword);
		$this->load->view('admin/index',$data);
	}
  public function user_edit($id = 0)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $data['msg'] = '';
      $data['alert'] = '';
      if($id != 0)
      {
        $data['data_user']  = $this->admin_model->get_user($id);
      }
      $this->load->view('admin/index', $data);
    }else{
      $username = $this->input->post('username');
      $email = $this->input->post('email');
      if(valid_email($email))
      {
        if($id > 0)
        {
          $this->admin_model->set_user($id);
          $data['data_user']  = $this->admin_model->get_user($id);
        }else{
          $user = $this->admin_model->get_user($username);
          $data['msg'] = 'Success Saving Data';
          $data['alert'] = 'success';
          if($user['username'] == $username)
          {
            $data['msg'] = 'Failed Saving Data, username exist';
            $data['alert'] = 'danger';
          }
          $this->admin_model->set_user();
        }
      }else{
        $data['msg'] = 'Please insert valid email';
        $data['alert'] = 'danger';
      }
      $this->load->view('admin/index', $data);
    }
  }

  /*CONTENT*/
  public function content_category($id = 0)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'Title', 'required');
    if ($this->form_validation->run() === FALSE)
    {
      $data['msg']       = '';
      $data['alert']     = '';
    }else{
      $title       = $this->input->post('title');
      $par_id      = $this->input->post('par_id');
      $title_exist = $this->content_model->get_cat_data(' WHERE title = "'.$title.'" AND par_id = '.$par_id.' LIMIT 1');
      $title_self  = $this->content_model->get_cat_data(' WHERE title = "'.$title.'" AND par_id = '.$par_id.' AND id = '.$id.' LIMIT 1');
      if($id > 0)
      {
        $data['msg']    = 'Title Exist';
        $data['alert']  = 'danger';
        if(empty($title_exist))
        {
          $this->content_model->set_cat($id);
          $data['msg']    = 'Data Updated Successfully';
          $data['alert']  = 'success';
        }else{

          if($title_self)
          {
            $data['msg']    = 'Data Updated Successfully';
            $data['alert']  = 'success';
            $this->content_model->set_cat($id);
          }
        }
      }else{
        if(empty($title_exist))
        {
          $data['msg']   = 'Data Saved Successfully';
          $data['alert'] = 'success';
          $this->content_model->set_cat();
        }else{
          $data['msg']    = 'Title Exist';
          $data['alert']  = 'danger';
        }
      }
    }

    $this->load->helper('date');
    if(!empty($this->input->post('publish_list')))
    {
      $this->admin_model->publish_data('content_cat', $this->input->post('pub_check'));
      $data['msg']   = 'Category Updated Successfully';
      $data['alert'] = 'success';
    }
    if(!empty($this->input->post('delete')))
    {
      $this->admin_model->del_data('content_cat', $this->input->post('del_check'));
      $data['msg']   = 'Category Deleted Successfully';
      $data['alert'] = 'success';
      if(empty($this->input->post('del_check')))
      {
        $data['msg']   = 'No Data selected to delete';
        $data['alert'] = 'success';
      }
    }

    $data['parent']        = $this->content_model->get_cat_ids();
    $parent                = array();

    foreach ($data['parent'] as $key => $value)
    {
      $parent[$value['id']] = $value['title'];
    }
    $parent[0] = 'None';
    $data['parent'] = $parent;

    $data['data_list'] = $this->content_model->get_cat_list();
    $data['data']      = $this->content_model->get_cat(@intval($id));

    $this->load->view('admin/index', $data);
  }

  public function content_edit($id = 0)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'Title', 'required');

    $data['category'] = $this->content_model->get_cat_ids();
    $category = array();
    $data['category_data'] = $this->content_model->get_cat_all('id,par_id,title', 'WHERE publish = 1');

    foreach ($data['category'] as $key => $value)
    {
      $category[$value['id']] = $value['title'];
    }
    $data['category'] = $category;

    if ($this->form_validation->run() === FALSE)
    {

    }else{
      $data['msg'] = 'Content Saved Failed';
      $data['alert'] = 'danger';
      if($id > 0)
      {
        if(!empty($_FILES['image']['name']))
        {
          $type = $_FILES['image']['type'];
          if($type != 'image/jpeg')
          {
            $data['msg'] = 'only upload image with jpg/jpeg format';
            $data['alert'] = 'danger';
          }else{
            $data['msg'] = 'Content Saved Successfully';
            $data['alert'] = 'success';
            $this->content_model->set_content($id);
          }
        }else{
          $data['msg'] = 'Content Saved Successfully';
          $data['alert'] = 'success';
          $this->content_model->set_content($id);
        }
      }else{
        if(!empty($_FILES['image']['name']))
        {
          $type = $_FILES['image']['type'];
          if($type != 'image/jpeg')
          {
            $data['msg'] = 'only upload image with jpg/jpeg format';
            $data['alert'] = 'danger';
          }else{
            $data['msg'] = 'Content Saved Successfully';
            $data['alert'] = 'success';
            $this->content_model->set_content();
          }
        }else{
          $data['msg'] = 'Content Saved Successfully';
          $data['alert'] = 'success';
          $this->content_model->set_content();
        }
      }
    }
    // pr($data);
    $data['data'] = $this->content_model->get_content($id);
    $this->load->view('admin/index', $data);
  }
  public function content_list()
  {
    $this->load->helper('date');
    if(!empty($this->input->post('publish')))
    {
      $this->admin_model->publish_data('content', $this->input->post('pub_content'));
      $data['msg']   = 'Content Updated Successfully';
      $data['alert'] = 'success';
    }
    if(!empty($this->input->post('delete')))
    {
      $this->admin_model->del_data('content', $this->input->post('del_content'));
      $data['msg']   = 'Content Deleted Successfully';
      $data['alert'] = 'success';
      if(empty($this->input->post('del_content')))
      {
        $data['msg']   = 'No Data selected to delete';
        $data['alert'] = 'success';
      }
    }
    $data['data'] = $this->content_model->get_content_list();
    $this->load->view('admin/index',$data);
  }

  /*novel*/
  public function novel_novel($id = 0)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'Title', 'required');

    $data['category'] = $this->novel_model->get_cat_ids();
    $category = array();
    $data['category_data'] = $this->novel_model->get_cat_all('id,par_id,title', 'WHERE publish = 1');

    foreach ($data['category'] as $key => $value)
    {
      $category[$value['id']] = $value['title'];
    }
    $data['category'] = $category;

    if ($this->form_validation->run() === FALSE)
    {
      $data['msg']       = '';
      $data['alert']     = '';
      // pr($this->db->last_query());die();
    }else{
      $title  = $this->input->post('title');
      if($id > 0)
      {
        $title_exist    = $this->novel_model->get_novel_all('title',' WHERE title = "'.$title.'" AND id != '.$id.' LIMIT 1');
        $data['msg']    = 'Data Updated Successfully';
        $data['alert']  = 'success';
        if(empty($title_exist))
        {
          $this->novel_model->set_novel($id);
        }else{
          $data['msg']    = 'Title Exist';
          $data['alert']  = 'danger';
        }
      }else{
        $title_exist    = $this->novel_model->get_novel_all('title',' WHERE title = "'.$title.'" LIMIT 1');

        $data['msg']   = 'Data Saved Successfully';
        $data['alert'] = 'success';

        if(empty($title_exist))
        {
          $this->novel_model->set_novel();
        }else{
          $data['msg']    = 'Title Exist';
          $data['alert']  = 'danger';
        }
      }
    }

    $this->load->helper('date');
    if(!empty($this->input->post('publish_list')))
    {
      $this->admin_model->publish_data('novel', $this->input->post('pub_check'));
      $data['msg']   = 'Novel Updated Successfully';
      $data['alert'] = 'success';
    }
    if(!empty($this->input->post('delete')))
    {
      $this->admin_model->del_data('novel', $this->input->post('del_check'));
      $data['msg']   = 'Novel Deleted Successfully';
      $data['alert'] = 'success';
      if(empty($this->input->post('del_check')))
      {
        $data['msg']   = 'No Data selected to delete';
        $data['alert'] = 'success';
      }
    }

    $data['data_list'] = $this->novel_model->get_novel_list();
    $data['data']      = $this->novel_model->get_novel(@intval($id));

    $this->load->view('admin/index', $data);
  }

  public function novel_category($id = 0)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'Title', 'required');
    if ($this->form_validation->run() === FALSE)
    {
      $data['msg']       = '';
      $data['alert']     = '';
    }else{
      $title       = $this->input->post('title');
      $par_id      = $this->input->post('par_id');
      $title_exist = $this->novel_model->get_cat_data(' WHERE title = "'.$title.'" AND par_id = '.$par_id.' LIMIT 1');
      $title_self  = $this->novel_model->get_cat_data(' WHERE title = "'.$title.'" AND par_id = '.$par_id.' AND id = '.$id.' LIMIT 1');
      if($id > 0)
      {
        $data['msg']    = 'Title Exist';
        $data['alert']  = 'danger';
        if(empty($title_exist))
        {
          $this->novel_model->set_cat($id);
          $data['msg']    = 'Data Updated Successfully';
          $data['alert']  = 'success';
        }else{

          if($title_self)
          {
            $data['msg']    = 'Data Updated Successfully';
            $data['alert']  = 'success';
            $this->novel_model->set_cat($id);
          }
        }
      }else{
        if(empty($title_exist))
        {
          $data['msg']   = 'Data Saved Successfully';
          $data['alert'] = 'success';
          $this->novel_model->set_cat();
        }else{
          $data['msg']    = 'Title Exist';
          $data['alert']  = 'danger';
        }
      }
    }

    $this->load->helper('date');
    if(!empty($this->input->post('publish_list')))
    {
      $this->admin_model->publish_data('novel_cat', $this->input->post('pub_check'));
      $data['msg']   = 'Novel Updated Successfully';
      $data['alert'] = 'success';
    }
    if(!empty($this->input->post('delete')))
    {
      $this->admin_model->del_data('novel_cat', $this->input->post('del_check'));
      $data['msg']   = 'Novel Deleted Successfully';
      $data['alert'] = 'success';
      if(empty($this->input->post('del_check')))
      {
        $data['msg']   = 'No Data selected to delete';
        $data['alert'] = 'success';
      }
    }

    $data['parent']        = $this->novel_model->get_cat_ids();
    $parent                = array();

    foreach ($data['parent'] as $key => $value)
    {
      $parent[$value['id']] = $value['title'];
    }
    $parent[0] = 'None';
    $data['parent'] = $parent;

    $data['data_list'] = $this->novel_model->get_cat_list();
    $data['data']      = $this->novel_model->get_cat(@intval($id));

    $this->load->view('admin/index', $data);
  }
  public function novel_list()
  {
    $this->load->helper('date');
    if(!empty($this->input->post('publish')))
    {
      $this->admin_model->publish_data('novel_chapter', $this->input->post('pub_chapter'));
      $data['msg']   = 'Content Updated Successfully';
      $data['alert'] = 'success';
    }
    if(!empty($this->input->post('delete')))
    {
      $this->admin_model->del_data('novel_chapter', $this->input->post('del_chapter'));
      $data['msg']   = 'Content Deleted Successfully';
      $data['alert'] = 'success';
      if(empty($this->input->post('del_chapter')))
      {
        $data['msg']   = 'No Data selected to delete';
        $data['alert'] = 'success';
      }
    }
    $data['data'] = $this->novel_model->get_chapter_list();
    $this->load->view('admin/index',$data);
  }

  public function novel_edit($id = 0)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'Title', 'required');

    $data['novel'] = $this->novel_model->get_novel_ids();
    $novel = array();
    if(!empty($data['novel']))
    {
      foreach ($data['novel'] as $key => $value)
      {
        $novel[$value['id']] = $value['title'];
      }
      $data['novel'] = $novel;
    }

    if ($this->form_validation->run() === FALSE)
    {

    }else{
      $data['msg'] = 'Content Saved Failed';
      $data['alert'] = 'danger';
      if($id > 0)
      {
        $data['msg'] = 'Content Saved Successfully';
        $data['alert'] = 'success';
        $this->novel_model->set_chapter($id);
      }else{
        $data['msg'] = 'Content Saved Successfully';
        $data['alert'] = 'success';
        $this->novel_model->set_chapter();
      }
    }
    // pr($data);
    $data['data'] = $this->novel_model->get_chapter($id);
    $this->load->view('admin/index', $data);
  }


  function config($name = '')
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['msg']   = '';
    $data['alert'] = '';

    $this->form_validation->set_rules('title', 'Title', 'required');

    if($this->form_validation->run() === TRUE)
    {
      $data['msg']   = 'Config Saved Successfully';
      $data['alert'] = 'success';

      $this->config_model->set_config($name);
    }

    $data['config'] = $this->config_model->get_config($name);
    $this->load->view('admin/index',$data);
  }

  public function config_header($name = '')
  {
    $this->config($name);
  }
  public function config_header_bottom($name = '')
  {
    $this->config($name);
  }
  public function config_logo($name = '')
  {
    $this->config($name);
  }
  public function config_site($name = '')
  {
    $this->config($name);
  }
  public function config_menu($name = '')
  {
    $this->config($name);
  }
}
