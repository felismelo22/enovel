<?php $data = json_decode($config['value'], 1);?>
<div class="row">
	<div class="col-md-12">
		<?php echo form_open_multipart(base_url('admin/config_header_bottom/header_bottom'), 'id="conf_header"');?>
		<div class="panel panel-default">
			<div class="panel panel-heading">
				<h4 class="panel-title">
					<?php echo 'Header Bottom Configuration';?>
				</h4>
			</div>
			<div class="panel panel-body">
				<?php
				echo form_label('Title', 'title');
				echo form_input(array(
					'name'     => 'title',
					'required' => 'required',
					'class'    => 'form-control',
					'value'    => @$data['title']));
				echo form_label('Image', 'image');
				echo form_upload(array(
					'name'   => 'image',
					'class'  => 'form-control',
					'accept' => 'image/jpeg',
					'value'  => ''));
				echo form_label('Twitter', 'twitter');
				echo form_input(array(
					'name'     => 'twitter',
					'required' => 'required',
					'class'    => 'form-control',
					'value'    => @$data['twitter']));
				echo form_label('Facebook', 'facebook');
				echo form_input(array(
					'name'     => 'facebook',
					'required' => 'required',
					'class'    => 'form-control',
					'value'    => @$data['facebook']));
				echo form_label('Google Plus', 'gplus');
				echo form_input(array(
					'name'     => 'gplus',
					'required' => 'required',
					'class'    => 'form-control',
					'value'    => @$data['gplus']));?>
			</div>
			<div class="panel panel-footer">
				<?php
				echo form_button(array(
	        'id'      => 'submit',
	        'value'   => 'true',
	        'type'    => 'success',
	        'content' => 'submit',
	        'class'   => 'btn btn-success'));
				echo form_button(array(
	        'id'      => 'reset',
	        'value'   => 'true',
	        'type'    => 'reset',
	        'content' => 'reset',
	        'class'   => 'btn btn-warning'));
				?>
			</div>
		</div>
		<?php echo form_close();?>
	</div>
</div>