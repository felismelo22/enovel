<?php
$site_value = $site['value'];
$site_value = json_decode($site_value,1);
?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="list-inline">
						<li>
							<a href="<?php echo base_url() ?>">Home</a>
						</li>
						<li class="footer-menu-divider">&sdot;</li>
						<li>
							<a href="<?php echo base_url('novel/novel') ?>">Novel List</a>
						</li>
						<li class="footer-menu-divider">&sdot;</li>
						<li>
							<a href="#popular">Novel Popular</a>
						</li>
						<li class="footer-menu-divider">&sdot;</li>
						<li>
							<a href="#contact">Contact</a>
						</li>
					</ul>
					<p class="copyright text-muted small">Copyright &copy; 2017 <?php echo '<a href="'.base_url().'">'.$site_value['title'].'</a>' ?> | Powered By <a href="http://esoftgreat.com">esoftgreat</a>. All Rights Reserved</p>
				</div>
			</div>
		</div>