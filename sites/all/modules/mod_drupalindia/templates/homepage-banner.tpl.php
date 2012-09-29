<div class="banner">
  <ul class="pagination">
    <li><a href="#"></a></li>
  </ul>
  <div class="carousal_sec" id="slider1">
    <?php
     if (isset($banners) && !empty($banners)) {
       foreach ($banners as $key => $val) {
     ?>
     <div class="panel"> <img src="<?php print $val['banner_image']; ?>" alt="banner" /><span></span> 
       <div class="panel-txt"><?php print $val['text_one']; ?> <span class="color-red"><?php print $val['text_two']; ?>
        </span> <?php print $val['text_three']; ?></div>
     </div>
     <?php
       }
     }
     ?>
  </div>
</div>
<?php
//p($banners);
?>