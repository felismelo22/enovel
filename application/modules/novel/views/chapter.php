<?php
// pr($next);
// pr($previous);
// pr($chapter);die();
?>
<?php
if(!empty($chapter))
{
	?>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				<h2><?php echo $chapter['title'] ?></h2>
				<?php
				if(!empty($chapter['editable']))
				{
					?>
					<a href="<?php echo base_url('novel/chapter_edit/'.$chapter['id']) ?>" class="edit_chapter"><span><i class="fa fa-pencil"></i></span></a>
					<?php
				}
				?>
				<span><?php echo $chapter['created'] ?></span>
				<p>
					<?php echo $chapter['content'] ?>
				</p>
				<p style="text-align:center">
					<span style="font-family:Comic Sans MS,cursive">
						<span style="font-size:16px">
							<strong>
								<?php
								if(!empty($previous))
								{
									?>
									<a href="<?php echo base_url('novel/chapter/'.$previous['id'].'/'.url_title($previous['title'])) ?>">Previous Chapter</a> &nbsp;
									<?php
								}?>
								<a href="<?php echo base_url('novel/detail/'.$chapter['novel_id']) ?>">Chapter List</a> &nbsp;
								<?php
								if(!empty($next))
								{
									?>
									<a href="<?php echo base_url('novel/chapter/'.$next['id'].'/'.url_title($next['title'])) ?>">Next Chapter</a> &nbsp;
									<?php
								}
								?>
							</strong>
						</span>
					</span>
				</p>
			</div>
			<div class="col-md-4">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="HKMLTFSUSU3BW">
					<input type="image" src="https://www.paypalobjects.com/id_ID/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/id_ID/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
		</div>
	</div>

	<?php
}
?>