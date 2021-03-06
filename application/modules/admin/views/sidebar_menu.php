<ul class="nav navbar-nav side-nav">
	<li>
		<a href="<?php echo base_url('admin') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
	</li>
	<li>
		<a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-user"></i> User <i class="fa fa-fw fa-caret-down"></i></a>
		<ul id="user" class="collapse">
			<!-- <li>
				<a href="<?php echo base_url('admin/user_list') ?>">User List</a>
			</li> -->
			<li>
				<a href="<?php echo base_url('admin/user_edit') ?>">User Add</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="javascript:;" data-toggle="collapse" data-target="#content"><i class="fa fa-fw fa-file-text"></i> Content <i class="fa fa-fw fa-caret-down"></i></a>
		<ul id="content" class="collapse">
			<li>
				<a href="<?php echo base_url('admin/content_category') ?>">Category</a>
			</li>
			<li>
				<a href="<?php echo base_url('admin/content_edit') ?>">Add Content</a>
			</li>
			<li>
				<a href="<?php echo base_url('admin/content_list') ?>">Content List</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="javascript:;" data-toggle="collapse" data-target="#novel"><i class="fa fa-fw fa-book"></i> Novel <i class="fa fa-fw fa-caret-down"></i></a>
		<ul id="novel" class="collapse">
			<li>
				<a href="<?php echo base_url('admin/novel_novel') ?>">Novel</a>
			</li>
			<li>
				<a href="<?php echo base_url('admin/novel_category') ?>">Category</a>
			</li>
			<li>
				<a href="<?php echo base_url('admin/novel_edit') ?>">Add Chapter</a>
			</li>
			<li>
				<a href="<?php echo base_url('admin/novel_list') ?>">Chapter List</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="javascript:;" data-toggle="collapse" data-target="#configuration"><i class="fa fa-fw fa-cog"></i> Configuration <i class="fa fa-fw fa-caret-down"></i></a>
		<ul id="configuration" class="collapse">
			<li>
				<a href="<?php echo base_url('admin/config_header/header') ?>">Header</a>
			</li>
			<li>
				<a href="<?php echo base_url('admin/config_header_bottom/header_bottom') ?>">Header Bottom</a>
			</li>
			<li>
				<a href="<?php echo base_url('admin/config_logo/logo') ?>">Logo</a>
			</li>
			<li>
				<a href="<?php echo base_url('admin/config_site/site') ?>">Site</a>
			</li>
		</ul>
	</li>
</ul>