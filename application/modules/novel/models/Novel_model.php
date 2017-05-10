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
    $url_get = base_url('admin/novel_novel').'';
		$limit = 5;

    if(!empty($_GET))
    {
    	if(!empty($_GET['keyword']))
    	{
	      $keyword = @$_GET['keyword'];
	      $url_get = base_url('admin/novel_novel').'?keyword='.$keyword;
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
      $query = $this->db->query('SELECT id FROM `novel` WHERE id = "'.$keyword.'" OR title LIKE "'.$keyword.'%"');
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
			$sql = ' WHERE id = "'.$keyword.'" OR title LIKE "'.$keyword.'%"';
		}
		$query = $this->db->query('SELECT * FROM `novel` '.@$sql.' ORDER BY id DESC LIMIT '.$page.','.$limit);
		$data['data_list'] = $query->result_array();
		return $data;
	}
}