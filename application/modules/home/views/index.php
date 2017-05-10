<?php defined('BASEPATH') OR exit('No direct script access allowed');

	$mod['name'] = $this->router->fetch_class();
	$mod['task'] = $this->router->fetch_method();

	// $content = $mod['name'].'/'.$mod['task'];
	$content = ($mod['name'] == 'home' && $mod['task'] == 'index') ? 'home/content': $mod['name'].'/'.$mod['task'];
	$data['content'] = $content;
	$data['task']    = $mod['task'];
	$data['module']  = $mod['name'];

	$this->session->__set('link_js','');
	// pr($mod);
	// pr($data);die();
	$this->load->view('home/home',$data);