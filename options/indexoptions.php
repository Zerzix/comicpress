<div id="comicpress-index">

	<form method="post" id="myForm-index" enctype="multipart/form-data" action="?page=comicpress-options">
	<?php wp_nonce_field('update-options') ?>

		<div class="comicpress-options">

			<table class="widefat">
				<thead>
					<tr>
						<th colspan="3"><?php _e('Blog','comicpress'); ?></th>
					</tr>
				</thead>
				<tr class="alternate">
					<th scope="row"><label for="disable_blog_frontpage"><?php _e('Disable the blog on the Home page','comicpress'); ?></label></th>
					<td>
						<input id="disable_blog_frontpage" name="disable_blog_frontpage" type="checkbox" value="1" <?php checked(true, comicpress_themeinfo('disable_blog_frontpage')); ?> />
					</td>
					<td>
						<?php _e('Checkmark this and the blog will not display on the Home page of your site. The features allows to either not have a blog at all, or, if you place a menu link to your blog page, you can maintain your blog within the same site without readers having to see it when they are just trying to read your comic.','comicpress'); ?>
					</td>
				</tr>
			<!--
				<tr>
					<th scope="row"><label for="blog_postcount"><?php _e('Blog Post Count','comicpress'); ?></label></th>
					<td>
						<input type="text" size="7" name="blog_postcount" id="blog_postcount" value="<?php echo comicpress_themeinfo('blog_postcount'); ?>" />
					</td>
					<td>
						<?php _e('How many blog posts you would like displayed on the index page at one time.','comicpress'); ?>
					</td>
				</tr>
			//-->
			</table>

			<table class="widefat">
				<thead>
					<tr>
						<th colspan="3"><?php _e('Comic','comicpress'); ?></th>
					</tr>
				</thead>
				<tr class="alternate">
					<th scope="row"><label for="disable_comic_frontpage"><?php _e('Disable comic on Home page','comicpress'); ?></label></th>
					<td>
						<input id="disable_comic_frontpage" name="disable_comic_frontpage" type="checkbox" value="1" <?php checked(true, comicpress_themeinfo('disable_comic_frontpage')); ?> />
					</td>
					<td>
						<?php _e('Checkmark this and the comic will not display on the home page of your site. You can use the Latest Thumbnail widget to display your comic in a sidebar. Make sure you set the archive-thumbnail size to under 200px. Note: Turning this off and using the Graphic Novel style turns ComicPress into a blog only.','comicpress'); ?>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="disable_comic_blog_frontpage"><?php _e('Disable the comic blog on Home page','comicpress'); ?></label></th>
					<td>
						<input id="disable_comic_blog_frontpage" name="disable_comic_blog_frontpage" type="checkbox" value="1" <?php checked(true, comicpress_themeinfo('disable_comic_blog_frontpage')); ?> />
					</td>
					<td>
						<?php _e('Checkmark this and the comic blog will not display on the Home Page. Enabling this allows you to either not have a comic blog at all, or you can place it where you want using the comic blog post widget. If there is no content in the post it will not display regardless.','comicpress'); ?>
					</td>
				</tr>
				<tr class="alternate">
					<th scope="row"><label for="disable_comic_blog_single"><?php _e('Disable the comic blog on the single pages','comicpress'); ?></label></th>
					<td>
						<input id="disable_comic_blog_single" name="disable_comic_blog_single" type="checkbox" value="1" <?php checked(true, comicpress_themeinfo('disable_comic_blog_single')); ?> />
					</td>
					<td>
						<?php _e('Checkmark this and the blog portion of the comic will not display on the single/archive pages of your site.','comicpress'); ?>
					</td>
				</tr>
			</table>
			
			<table class="widefat">
				<thead>
					<tr>
						<th colspan="3"><?php _e('Blog Header','comicpress'); ?></th>
					</tr>
				</thead>			
				<tr class="alternate">
					<th scope="row"><label for="disable_blogheader"><?php _e('Disable blog header','comicpress'); ?></label></th>
					<td>
						<input id="disable_blogheader" name="disable_blogheader" type="checkbox" value="1" <?php checked(true, comicpress_themeinfo('disable_blogheader')); ?> />
					</td>
					<td>
						<?php _e('Checkmark this and your site will not display the contents of #blogheader.','comicpress'); ?>
					</td>
				</tr>
				<?php if (!comicpress_themeinfo('disable_blogheader')) { ?>
				<tr>
					<th scope="row"><label for="blogheader_text"><?php _e('Text for the blogheader, leave blank for none.','comicpress'); ?></label></th>
					<td colspan="2">
						<input id="blogheader_text" name="blogheader_text" type="text" width="180" value="<?php echo comicpress_themeinfo('blogheader_text'); ?>" />
					</td>
				</tr>
				<?php } ?>
			</table>
			
		</div>

		<div class="comicpress-options-save">
			<div class="comicpress-major-publishing-actions">
				<div class="comicpress-publishing-action">
					<input name="comicpress_save_index" type="submit" class="button-primary" value="Save Settings" />
					<input type="hidden" name="action" value="comicpress_save_index" />
				</div>
				<div class="clear"></div>
			</div>
		</div>

	</form>

</div>
