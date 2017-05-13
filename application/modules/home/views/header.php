<?php
$header_value = $header['value'];
$header_value = json_decode($header_value,1);
// pr($header_value);

// die();
?>
<style type="text/css">
	.intro-header {
    padding-top: 50px;
    padding-bottom: 50px;
    text-align: center;
    color: #f8f8f8;
    background: url(<?php echo image_src('config/header', $header_value['image'], $header['id']) ?>) no-repeat center center;
    background-size: cover;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="intro-message">
				<h1><?php echo $header_value['title'] ?></h1>
				<h3><?php echo $header_value['description'] ?></h3>
				<hr class="intro-divider">
				<ul class="list-inline intro-social-buttons">
					<li>
						<a href="<?php echo $header_value['twitter']; ?>" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter-square fa-fw"></i> <span class="network-name">Twitter</span></a>
					</li>
					<li>
						<a href="<?php echo $header_value['facebook'] ?>" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
					</li>
					<li>
						<a href="<?php echo $header_value['gplus'] ?>" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>