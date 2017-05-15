<?php
$data = $novel;
if(!empty($data['editable']))
{
	$id   = !empty($data['id']) ? $data['id'] : '';
	if(!empty($msg)&&!empty($alert))
	{
		msg($msg,$alert);
	}
	echo form_open_multipart(base_url('novel/novel_edit/'.$id), 'id="novel_edit"');?>
		<div class="panel panel-default">
			<div class="panel panel-heading">
				<h4 class="panel-title">
					<?php echo 'Edit Novel'; ?>
				</h4>
			</div>
			<div class="panel panel-body">
				<?php
				echo form_hidden('id',$id);
				echo form_label('description', 'description');
				echo form_textarea(array(
					'name'  => 'description',
					'class' => 'form-control',
					'rows'  => '4',
					'value' => @$data['description']));
				?>
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
		<?php
	echo form_close();
}else{
	msg('anda tidak memiliki hak untuk mengakses halaman ini', 'danger');
}