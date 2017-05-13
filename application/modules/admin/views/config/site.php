<?php $data = json_decode($config['value'], 1);?>
<div class="row">
	<div class="col-md-12">
		<?php echo form_open_multipart(base_url('admin/config_site/site'), 'id="conf_site"');?>
		<div class="panel panel-default">
			<div class="panel panel-heading">
				<h4 class="panel-title">
					<?php echo 'Site Configuration';?>
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
				echo form_label('Description', 'description');
				echo form_input(array(
					'name'     => 'description',
					'required' => 'required',
					'class'    => 'form-control',
					'value'    => @$data['description']));
				echo form_label('Keyword', 'keyword');
				echo form_input(array(
					'name'     => 'keyword',
					'required' => 'required',
					'class'    => 'form-control',
					'value'    => @$data['keyword']));
				echo form_label('Image', 'image');
				echo form_upload(array(
					'name'   => 'image',
					'class'  => 'form-control',
					'accept' => 'image/jpeg',
					'value'  => ''));?>
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