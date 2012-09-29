<div class="leftmenu">
	<ul>
  <?php
  if (isset($left_nav) && !empty($left_nav)) {
    foreach ($left_nav as $key => $val) { ?>
      <li><?php print $val; ?></li>
  <?php
    }
  }
  ?>
 </ul>
</div>