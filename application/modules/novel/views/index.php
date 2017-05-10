<?php
// pr($novel);
$data = $novel['data_list'];
?>
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
	      <a href="#">
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