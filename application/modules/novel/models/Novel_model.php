<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Novel_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	/*get*/

	public function get_novel_list($page = 0, $keyword = NULL)
	{
		$data = array();
    $url_get = base_url('novel').'';
		$limit = 16;

    if(!empty($_GET))
    {
    	if(!empty($_GET['keyword']))
    	{
	      $keyword = @$_GET['keyword'];
	      $url_get = base_url('novel').'?keyword='.$keyword;
    	}
      if(!empty($_GET['page']))
      {
      	$page = @intval($_GET['page']);
      }
    }
    if($keyword==NULL)
    {
      $total_rows = $this->db->count_all('novel');
    }else{
      $query = $this->db->query('SELECT id FROM `novel` WHERE title LIKE "%'.$keyword.'%"');
      $total_rows = $query->num_rows();
    }
    $config = pagination($total_rows,$limit,$url_get);
    $this->pagination->initialize($config);
  	$data['pagination'] = $this->pagination->create_links();

		if($page>0)
		{
			$page = $page-1;
		}
		$page = @intval($page)*$limit;
		if($keyword != NULL)
		{
			$sql = ' WHERE title LIKE "%'.$keyword.'%"';
		}
		$query = $this->db->query('SELECT * FROM `novel` '.@$sql.' ORDER BY id DESC LIMIT '.$page.','.$limit);
		$data['data_list'] = $query->result_array();
		return $data;
	}
	public function get_novel_popular()
	{
		$this->db->order_by('hits','DESC');
		$query = $this->db->get_where('novel',array(
				'publish'=>1,
			),9);
		// $query->order_by('hits','DESC');
		$data['data_list'] = $query->result_array();
		return $data;
	}

	public function get_novel_popular_list()
	{
		$this->db->order_by('hits','DESC');
		$query = $this->db->get_where('novel',array(
				'publish'=>1,
			),50);
		// $query->order_by('hits','DESC');
		$data['data_list'] = $query->result_array();
		return $data;
	}
	public function get_last_chapter()
	{
		$this->db->order_by('novel_chapter.id','DESC');
		$this->db->join('novel', 'novel.id = novel_chapter.novel_id', 'left');
		$this->db->group_by('novel_chapter.novel_id');
		$this->db->select('novel_chapter.*, novel.title AS novel_title');
		$query = $this->db->get_where('novel_chapter',array(
				'novel.publish'=>1,
			),20);
		$data['data_list'] = $query->result_array();
		return $data;
	}

	public function get_chapter_novel($id = 0)
	{
		$this->db->order_by('id','DESC');
		$this->db->select('id,title,created');
		$query = $this->db->get_where('novel_chapter',array(
				'publish' => 1,
				'novel_id' => $id
			),3);
		$data = $query->result_array();
		return $data;
	}

	public function get_chapter($id = 0)
	{
		$query = $this->db->get_where('novel_chapter',array(
				'publish' => 1,
				'id' => $id
			));
		$data = $query->row_array();
		return $data;

	}

	public function get_chapter_list($id)
	{
		$this->db->order_by('id','DESC');
		$this->db->select('id,title,created');
		$query = $this->db->get_where('novel_chapter',array(
				'publish' => 1,
				'novel_id' => $id
			));
		$data = $query->result_array();
		return $data;
	}

	public function get_novel($id = 0)
	{
		$query = $this->db->get_where('novel', array('id'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function get_novel_cat($ids = '')
	{
		if(!empty($ids))
		{
			$query = $this->db->query('SELECT id , title FROM novel_cat WHERE id IN('.$ids.')');
			$data = $query->result_array();
			return $data;
		}
	}

	public function get_novel_by_cat($id = 0)
	{
		if(!empty($id))
		{
			$query = $this->db->query('SELECT * FROM novel WHERE cat_ids LIKE "%'.$id.'%"');
			$data = $query->result_array();
			return $data;
		}

	}

	public function set_novel($id)
	{
		$this->db->update('novel', $this->input->post(), 'id = '.$id);
	}
	public function set_chapter($id)
	{
		$this->db->update('novel_chapter', $this->input->post(), 'id = '.$id);
	}
}