<?php defined('BASEPATH') OR exit('No direct script access allowed');
if(!empty($msg)&&!empty($alert))
{
	msg($msg,$alert);
}

$id         = !empty(@intval($data['id'])) ? $data['id'] : '';
$par_id     = @intval($data['par_id']);
$publish    = isset($data['publish']) ? $data['publish'] : 1;
$pagination = $data_list['pagination'];
$novel_list = $data_list['data_list'];
pr(@$data);
pr(@$data_list);
pr(@$_POST);
pr(@$_FILES);
?>
<div class="col-md-4">
	<?php echo form_open_multipart(base_url('admin/novel_novel/'.$id), 'id="novel_edit"');?>
		<div class="panel panel-default">
			<div class="panel panel-heading">
				<h4 class="panel-title">
					<?php echo !empty($id) ? 'Edit' : 'Add'; echo ' Novel'; ?>
				</h4>
			</div>
			<div class="panel panel-body">
				<?php
				echo form_hidden('id',$id);
				echo form_label('Title', 'title');
				echo form_input(array(
					'name'     => 'title',
					'required' => 'required',
					'class'    => 'form-control',
					'value'    => @$data['title']));
				echo '			<div id="title_error"></div>';
				echo form_label('Image', 'image');
				echo form_upload(array(
					'name'   => 'image',
					'class'  => 'form-control',
					'accept' => 'image/jpeg',
					'value'  => ''));
				echo form_label('Country', 'country');
				echo form_input(array(
					'name'     => 'country',
					'required' => 'required',
					'class'    => 'form-control',
					'value'    => @$data['country']));
				echo form_label('description', 'description');
				echo form_textarea(array(
					'name'  => 'description',
					'class' => 'form-control',
					'rows'  => '2',
					'value' => @$data['description']));

				echo form_label('Author', 'author');
				echo form_input(array(
					'name'     => 'author',
					'class'    => 'form-control',
					'value'    => @$data['author']));

				echo form_label('Status', 'status');
				echo form_dropdown(array(
					'name'     => 'status',
					'class'    => 'form-control',
					'options'  => array('0'=>'Coming Soon','1'=>'On Going', '2'=>'End'),
					'selected' => @$data['status']
					));


				echo form_label('Publish', 'publish');
				echo '<div class="checkbox">';
				echo '<label>';
				echo form_checkbox(array(
					'name' => 'publish',
					'value'=> 'publish',
					'checked' => $publish
					)).' Published';
				echo '</label>';
				echo '</div>';
				?>
			</div>
			<div class="panel panel-footer">
				<?php
				echo form_button(array(
	        'name'    => 'submit',
	        'id'      => 'submit',
	        'value'   => 'true',
	        'type'    => 'success',
	        'content' => 'submit',
	        'class'   => 'btn btn-success'));
				echo form_button(array(
	        'name'    => 'reset',
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
<div class="col-md-8">
	<form method="get" action="<?php echo base_url('admin/novel_novel') ?>" class="form-inline pull-right">
		<input type="text" name="keyword" class="form-control" placeholder="keyword" value="<?php echo @$_GET['keyword'] ?>">
		<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span></button>
	</form>
	<hr>
	<div class="clearfix"></div>
	<form method="post" action="<?php echo base_url('admin/novel_novel'); ?>">
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<!-- <th>id</th> -->
						<th>image</th>
						<th>title</th>
						<th>
							<div class="checkbox">
								<label>
									<input id="selectAllPub" type="checkbox">PUBLISH
								</label>
							</div>
						</th>
						<th>
							<div class="checkbox">
								<label>
									<input id="selectAllDel" type="checkbox">DELETE
								</label>
							</div>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if(!empty($novel_list))
					{
						foreach ($novel_list as $key => $value)
						{
							?>
							<tr data-id="<?php echo $value['id'] ?>">
								<input type="hidden" name="id[]" value="<?php echo $value['id'] ?>">
								<td><img src="<?php echo image_src('novel',$value['image'],$value['id']); ?>" data-toggle="modal" data-target="#img_<?php echo $value['id']?>" class="img-thumbnail img-responsive" style="cursor:pointer; object-fit: cover;width: 30px;height: 30px;"></td>
								<td><a href="<?php echo base_url('admin/novel_novel/'.$value['id']) ?>"><?php echo $value['title'] ?></a></td>
								<td>
									<div class="checkbox">
										<label>
											<input type="checkbox" class="pub_check" name="pub_nov[]" value="<?php echo $value['id']; ?>" <?php echo !empty($value['publish']) ? 'checked':''; ?>> Publish
										</label>
									</div>
								</td>
								<td>
									<div class="checkbox">
										<label>
											<input type="checkbox" class="del_check" name="del_nov[]" value="<?php echo $value['id']; ?>"> <span class="glyphicon glyphicon-trash"></span>
										</label>
									</div>
								</td>
							</tr>
							<?php
						}
					}else{
						?>
						<tr>
							<td colspan="4"><?php msg('data kosong', 'danger'); ?></td>
						</tr>
						<?php
					}
					?>
					<tr>
						<td colspan="2">
							<?php
							 echo $pagination;
							 ?>
						</td>
						<td>
							<button type="submit" name="publish_list" value="1" class="btn btn-success btn-sm">
								<span class="glyphicon glyphicon-floppy-disk"></span> PUBLISH
							</button>
						</td>
						<td>
							<button type="submit" name="delete" value="1" class="btn btn-danger btn-sm">
								<span class="glyphicon glyphicon-trash"></span> DELETE
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>
</div>
<?php
if(!empty($novel_list))
{
	foreach ($novel_list as $key => $value)
	{
		?>
		<div class="modal fade" id="img_<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-labelledby="img_<?php echo $value['id']?>">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="img_title_<?php echo $value['id']?>"><?php echo $value['image'];?></h4>
		      </div>
		      <div class="modal-body" style="text-align: center;">
		        <img src="<?php echo image_src('novel',$value['image'], $value['id']); ?>" data-toggle="modal" data-target="#cat_img_<?php echo $value['id']?>" class="img-thumbnail img-responsive" style="cursor:pointer; object-fit: cover;width: 350px;height: 350px;">
		      </div>
		      <div class="modal-footer">
		      </div>
		    </div>
		  </div>
		</div>
		<?php
	}
}?>
<!-- <script type="text/javascript">
	CKEDITOR.replace('textckeditor');
</script> -->