<?php
// pr($chapter);
?>
<?php
if(!empty($chapter))
{
	?>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				<h2><?php echo $chapter['title'] ?></h2>
				<a href="<?php echo base_url('novel/chapter_edit/'.$chapter['id']) ?>" class="edit_chapter"><span><i class="fa fa-pencil"></i></span></a>
				<span><?php echo $chapter['created'] ?></span>
				<p>
					<?php echo $chapter['content'] ?>
				</p>
			</div>
			<div class="col-md-4">

			</div>
		</div>
	</div>

	<?php
}
?>