<?php
$logo_value = $logo['value'];
$logo_value = json_decode($logo_value,1);
?>
<div class="container topnav">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand topnav" href="<?php echo base_url(); ?>">
			<?php
			if(!empty($logo_value['image']))
			{
				?>
				<img src="<?php echo image_src('config/logo', $logo_value['image'], $logo['id']) ?>" height="50">
				<?php
			}else{
				echo $logo_value['title'];
			}
			?>
		</a>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="<?php echo base_url('novel/novel') ?>">Novel List</a>
			</li>
			<li>
				<a href="#popular">Novel Popular</a>
			</li>
			<li>
				<a href="#contact">Contact</a>
			</li>
		</ul>
	</div>
</div>