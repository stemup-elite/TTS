
<h4 class="tle125">Tin nổi bật</h4>
				<!-- <?php //echo 'Chưa có bài viết';?> -->
	<?php
		foreach ($common_news1 as $key => $value) {
	?>
		<div class="media-object-default mgin">
			<div class="media">
				<div class="media-left"><a href="<?php echo site_url('home/tintuc'.'/'.$value['url_name'])?>"><img class="media-object" src="<?php echo $value['avatar']?>" width="130" height="100" alt="placeholder image"></a></div>
				<div class="media-body">
				    <h4 class="media-heading"><a class="tle-tin" href="<?php echo site_url('home/tintuc'.'/'.$value['url_name'])?>"><?php echo $value['name'];?></a></h4>
					<div class="media-description"><!-- <?php echo _substr($value['description'], 100, $minword = 5);?> --></div>
				</div>
			</div>
		</div><!-- <hr class="line-f">  -->
	<?php
		}
	?>
				