<?php defined('BASEPATH') OR exit('No direct script access allowed');
$id = !empty($chapter['id']) ? $chapter['id'] : '';
if(!empty($msg)&&!empty($alert))
{
	msg($msg,$alert);
}
$this->session->__set('link_js', base_url().'templates/admin/js/bootstrap-tagsinput.js');
?>
<?php echo form_open(base_url('novel/chapter_edit/'.$id), 'id="chapter_edit"');?>
	<div class="panel panel-default">
		<div class="panel panel-heading">
			<h4 class="panel-title">
				<?php echo 'Edit Chapter'; ?>
			</h4>
		</div>
		<div class="panel panel-body">
			<br>
			<?php
			echo form_hidden('id',$id);
			echo form_label('Content', 'content');
			echo form_textarea(array(
				'name'  => 'content',
				'id'    => 'textckeditor',
				'class' => 'form-control',
				'value' => @$chapter['content']));
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
	<script type="text/javascript">
		CKEDITOR.replace('textckeditor');
	</script>
<?php echo form_close();