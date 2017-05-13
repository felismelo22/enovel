<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$data['site'] = @$site;
	$this->load->view('home/meta', $data);
	?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
		<?php
		$data['logo'] = @$logo;
	 	$this->load->view('home/top', $data);
		?>
	</nav>
	<a name="about"></a>
		<?php
		if($content == 'novel/last')
		{
			$data['header'] = $header;
			echo '<div class="intro-header">';
			$this->load->view('home/header', $data);
			echo '</div>';
		}else{
			echo '<br><br><br>';
			?>
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li class="active">
							<i class="fa fa-home"></i><a href="<?php echo base_url(); ?>"> Home</a>
						</li>
						<li class="active">
							<a href="<?php echo base_url($module); ?>"> <?php echo $module ?></a>
						</li>
						<?php
						if($task != 'index')
						{
						 ?>
							<li class="active">
								<a href="<?php echo current_url(); ?>"> <?php echo $task ?></a>
							</li>
						 <?php
						}?>
					</ol>
				</div>
			</div>
			<?php
		}
		?>
	<a  name="popular"></a>
	<?php
	$data['msg']    = @$msg;
	$data['alert']  = @$alert;
	$data['module'] = @$module;
	$data['task']   = @$task;
	$this->load->view($content, $data);
	// pr(@($this->session));
	?>

	<a  name="contact"></a>
	<?php
	// if($content == 'novel/last')
	// {
		$data['header_bottom'] = $header_bottom;
	 	$this->load->view('home/bottom', $data);
	// }
 	?>
	<footer>
		<?php
		$data['site'] = @$site;
		$this->load->view('home/footer', $data);
		?>
	</footer>

	<!-- jQuery -->
	<script src="<?php echo base_url().'templates/admin/'; ?>js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url().'templates/admin/'; ?>js/bootstrap.min.js"></script>
	<?php
	$link_js = @$this->session->userdata('link_js');
	if(!empty($link_js))
	{
		echo '<script src="'.$link_js.'"></script>';
	}
	?>
</body>

</html>
