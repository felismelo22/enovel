<?php
// pr($novel);
$data = $novel['data_list'];
?>
<div class="row">
	<div class="col-md-12" style="text-align: center;">
		<form method="get" action="<?php echo base_url('novel') ?>" class="form-inline">
			<input type="text" name="keyword" class="form-control" placeholder="keyword" value="<?php echo @$_GET['keyword'] ?>">
			<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span></button>
		</form>
		<hr>
	</div>
</div>
<div class="row">
	<?php
	foreach ($data as $key => $value)
	{
		?>
		<div class="col-md-3">
			<div class="panel panel-green">
	      <div class="panel-heading">
	        <div class="row">
	          <div class="col-md-12">
							<img src="<?php echo image_src('novel',$value['image'],$value['id']); ?>" data-toggle="modal" data-target="#img_<?php echo $value['id']?>" class="img-thumbnail img-responsive" style="cursor:pointer; object-fit: cover;width: 250px;height: 250px;">
	          </div>
	          <div class="col-xs-12" style="text-align: center;">
	            <div class="huge"></div>
	            <div><?php echo $value['title']; ?></div>
	          </div>
	        </div>
	      </div>
	      <a href="<?php echo base_url('novel/detail/'.$value['id']).'/'.url_title($value['title']) ?>">
	        <div class="panel-footer">
	          <span class="pull-left">View Details</span>
	          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	          <div class="clearfix"></div>
	        </div>
	      </a>
	    </div>
		</div>
		<?php
	}
	?>
</div>
<div class="col-md-12" style="text-align: center">
	<?php echo $novel['pagination'];?>
</div>