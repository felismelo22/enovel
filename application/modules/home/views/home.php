<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$data['site'] = @$site;
	$this->load->view('home/meta', $data);
	?>
	<script type="text/javascript">

	 var _gaq = _gaq || [];

	 _gaq.push(['_setAccount', 'UA-XXXXXXXX']);

	 _gaq.push(['_trackPageview']);

	 (function() {

	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

	ga.src = ('https:' == document.location.protocol ? 'https://ssl' :

	'http://www') + '.google-analytics.com/ga.js';

	var s = document.getElementsByTagName('script')[0];

	s.parentNode.insertBefore(ga, s);

	 })();

	</script>
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
	if($content == 'novel/last')
	{
		?>
		<div class="chatbox" style="position: fixed;top: 11%; z-index: 99999;">
			<script async="" data-cfasync="false" id="cid0020000151094912792" src="//st.chatango.com/js/gz/emb.js" style="height: 300px; width: 200px;">{"handle":"noveltamfan","arch":"js","styles":{"a":"000099","b":89,"c":"ffffff","d":"e0e0e0","e":"ffffff","f":20,"g":"ffffff","i":32,"k":"3333ff","l":"3333ff","m":"3333ff","p":"10","q":"000000","r":89,"usricon":0.65,"sbc":"66ffff","fwtickm":1}}</script>
		</div>
		<?php
	}
	?>
	<a  name="contact"></a>
	<?php
	// if($content == 'novel/last')
	// {
		$data['header_bottom'] = @$header_bottom;
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
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-89940977-3', 'auto');
	  ga('send', 'pageview');

	</script>
</body>

</html>
