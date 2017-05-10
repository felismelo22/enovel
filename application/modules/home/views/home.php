<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('home/meta'); ?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
		<?php $this->load->view('home/top'); ?>
	</nav>
	<a name="about"></a>
		<?php
		if($content == 'home/content')
		{
			echo '<div class="intro-header">';
			$this->load->view('home/header');
			echo '</div>';
		}else{
			echo '<br><br><br>';
			?>
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li class="active">
							<i class="fa fa-home"></i><a href="<?php echo base_url('admin'); ?>"> Home</a>
						</li>
						<li class="active">
							<a href="<?php echo base_url($module); ?>"> <?php echo $module ?></a>
						</li>
						<?php
						if($task != 'index')
						{
						 ?>
							<li class="active">
								<a href="<?php echo base_url($module.'/'.$task); ?>"> <?php echo $task ?></a>
							</li>
						 <?php
						}?>
					</ol>
				</div>
			</div>
			<?php
		}
		?>
	<a  name="services"></a>
	<?php
	$data['msg']    = @$msg;
	$data['alert']  = @$alert;
	$data['module'] = @$module;
	$data['task']   = @$task;
	$this->load->view($content, $data);
	pr(@($this->session));
	?>

	<a  name="contact"></a>
	<div class="banner">
		<?php $this->load->view('home/bottom'); ?>
	</div>
	<footer>
		<?php $this->load->view('home/footer'); ?>
	</footer>

	<!-- jQuery -->
	<script src="<?php echo base_url().'templates/admin/'; ?>js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url().'templates/admin/'; ?>js/bootstrap.min.js"></script>

</body>

</html>
