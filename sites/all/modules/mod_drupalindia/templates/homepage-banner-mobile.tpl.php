<section id="banner">
	<div id="slides">
	<div class="slides_container">

<?php //p($banners);
if (isset($banners) && !empty($banners)) {
  foreach ($banners as $key => $val) {
?> 
	<div class="slide">
	<img src="<?php print $val['banner_image']; ?>" width="320" height="177" alt="<?php print $val['banner_image_alt']; ?>">
        <div class="caption">
            <p class="slogan"><?php print $val['grey_title']; ?></p>
            <h1><?php print $val['text_below_title']; ?></h1>
            <p class="intro"><?php print $val['description']; ?></p>
            <p class="callnumber"><?php print $val['phone_number']; ?></p>
        </div>
    </div>
  <?php
  }
} ?>
</div>
<!--end sliding container-->

</div>
</section>