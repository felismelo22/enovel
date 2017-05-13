<?php
$header_value = $header_bottom['value'];
$header_value = json_decode($header_value,1);
?>
<style type="text/css">
	.banner {
    padding: 100px 0;
    color: #f8f8f8;
    background: url(<?php echo image_src('config/header_bottom', $header_value['image'], $header_bottom['id']) ?>) no-repeat center center;
    background-size: cover;
	}
</style>

<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2><?php echo $header_value['title'] ?></h2>
			</div>
			<div class="col-lg-6">
				<ul class="list-inline banner-social-buttons">
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