<?php
$statuses = array('Coming Soon','On Going','End');
?>
<div class="row">
	<div class="col-md-9">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-12">
					<h2><?php echo $novel['title'] ?></h2>
					<a href="<?php echo base_url('novel/novel_edit/'.$novel['id']) ?>" title="edit this novel" class="edit_novel"><span><i class="fa fa-pencil"></i></span></a>
				</div>
				<div class="col-md-3" style="padding-right: 5px; text-align: center;">
					<img src="<?php echo image_src('novel',$novel['image'],$novel['id']); ?>" class="img-thumbnail img-responsive">
				</div>
				<div class="col-md-9" style="padding-left: 5px;">
					<p><?php echo $novel['description'] ?></p>
					<hr>
					<span>Author : </span><span><?php echo $novel['author'] ?></span>
					<hr>
					<span>Negara : </span><span><?php echo $novel['country'] ?></span>
					<hr>
					<span>Status : </span><span><?php echo $statuses[$novel['status']] ?></span>
				</div>
				<div class="clearfix"></div>
				<hr>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<h4>3 Terjemahan Terakhir <?php echo $novel['title'] ?></h4>
					<?php
					foreach ($last_chapter_list as $key => $value)
					{
						?>
						<div class="col-md-8">
							<a href="<?php echo base_url('novel/chapter/'.$value['id']).'/'.url_title($value['title']) ?>"><?php echo $value['title'] ?></a>
						</div>
						<div class="col-md-4">
							<p><?php echo $value['created'] ?></p>
						</div>
						<?php
					}
					?>
					<div class="clearfix"></div>
					<hr>
					<div class="col-md-12" style="overflow:scroll;height: 200px;">
						<?php
						foreach ($chapter_list as $key => $value)
						{
							?>
							<h5><a href="<?php echo base_url('novel/chapter/'.$value['id']).'/'.url_title($value['title']) ?>"><?php echo $value['title'] ?></a></h5>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>