<?php
$data = $novel['data_list'];

?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="col-md-12">
						<h3>Novel Populer</h3>
					</div>
				</div>
				<?php
				foreach ($data as $key => $value)
				{
					?>
					<div class="col-md-4">
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
			<div class="col-md-12">
				<hr>
				<h3>Terjemahan Terbaru</h3>
				<hr>
				<?php
				if(!empty($chapter['data_list']))
				{
					foreach ($chapter['data_list'] as $key)
					{
						?><h4><?php echo $key['title'] ?></h4><?php
						foreach ($key['chapter_list'] as $keys => $value)
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
					}
				}
				?>
			</div>
		</div>
		<div class="col-md-3">
			<br>
			<h4>Novel Popular List</h4>
			<?php
			foreach ($novel_popular['data_list'] as $key => $value)
			{
				echo '<hr>';
				echo '<h5><a href="'.base_url('novel/detail/'.$value['id']).'/'.url_title($value['title']).'">'.$value['title'].'</a></h5>';
			}
			?>
			<hr>
			<h5><a href="<?php echo base_url('novel') ?>">Selengkapnya</a></h5>
			<hr>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="HKMLTFSUSU3BW">
				<input type="image" src="https://www.paypalobjects.com/id_ID/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/id_ID/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>
</div>