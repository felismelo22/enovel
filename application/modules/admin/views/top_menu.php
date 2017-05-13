
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata['logged_in']['username'] ?> <b class="caret"></b></a>
	<ul class="dropdown-menu">
		<li class="divider"></li>
		<li>
			<a href="<?php echo base_url('admin/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
		</li>
	</ul>
</li>