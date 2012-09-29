<div class="quick_links">
 <h4>Quick Links <span class="icon"></span></h4>
 <ul>
  <?php
  if (isset($quick_links) && !empty($quick_links)) {
    foreach ($quick_links as $key => $val) { ?>
      <li><?php print $val; ?></li>
  <?php
    }
  }
  ?>
 </ul>
</div>