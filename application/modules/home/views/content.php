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


<div class="content-section-a">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-sm-6">
				<hr class="section-heading-spacer">
				<div class="clearfix"></div>
				<h2 class="section-heading">Pembuatan / Kelola Website</h2>
				<p class="lead">Kami <a href="http://esoftgreat.com/">esfotgreat</a> menawarkan jasa pembuatan segala macam website/desain website sesuai permintaan. Jasa kelola website / perawatan website. Percayakan kepada kami.</p>
			</div>
			<div class="col-lg-5 col-lg-offset-2 col-sm-6">
				<img class="img-responsive" src="<?php echo base_url().'templates/land_page/'; ?>img/ipad.png" alt="">
			</div>
		</div>
	</div>
</div>
<div class="content-section-b">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
				<hr class="section-heading-spacer">
				<div class="clearfix"></div>
				<h2 class="section-heading">SEO, ONLINE & Sosial Media Marketing</h2>
				<p class="lead"><a href="http://esoftgreat.com/">esoftgreat</a> Menyediakan jasa online marketing SEO, Meningkatkan pengunjung / traffic website anda, Menambah jumlah liker/follower/subscriber media sosial anda seperti facebook, twitter, google plus, instagram dan youtube.</p>
			</div>
			<div class="col-lg-5 col-sm-pull-6  col-sm-6">
				<img class="img-responsive" src="<?php echo base_url().'templates/land_page/'; ?>img/dog.png" alt="">
			</div>
		</div>
	</div>
</div>
<div class="content-section-a">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-sm-6">
				<hr class="section-heading-spacer">
				<div class="clearfix"></div>
				<h2 class="section-heading">About Us</h2>
				<p class="lead"><a href="http://esoftgreat.com/fonts">esoftgreat</a> mempunyai tenaga ahli professional dan berpengalaman yang siap membantu menyelesaikan permasalahan anda. kami hadir sebagai MITRA yang dapat dipercaya dan diandalkan.</p>
			</div>
			<div class="col-lg-5 col-lg-offset-2 col-sm-6">
				<img class="img-responsive" src="<?php echo base_url().'templates/land_page/'; ?>img/phones.png" alt="">
			</div>
		</div>
	</div>
</div>