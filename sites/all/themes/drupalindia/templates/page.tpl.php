<div id="master" class="<?php print $classes; ?>"<?php print $attributes; ?>>
 <div id="container">
        	<div id="header">
                <span>
                	<tt></tt>
                    <b><a href="#">Request a Quote</a></b>
                    <tt class="right"></tt>
                </span>
              <?php if ($logo): ?>
      <em>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
          </em>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>

      </div>
    <?php endif; ?>

    <?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
<!--                <em><img src="images/logo.jpg" alt="Logo" /></em>-->
            </div>
            <div id="nav">
             <?php if ($page['header_navigation']): ?>
      <div id="header-region">
        <?php print render($page['header_navigation']); ?>
      </div>
    <?php endif; ?>
            </div>
  <div class="contentbox">
  <div id="main" class="clearfix">
   <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar first">
        <div id="sidebar-first-inner" class="inner">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </div>
    <?php endif; ?> <!-- /sidebar-first -->
    <div id="content">
      <div id="content-inner" class="inner column center">

        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">

            <?php print $breadcrumb; ?>

            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>

        <?php print $feed_icons; ?>

      </div>
    </div> <!-- /content-inner /content -->
    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar second">
        <div id="sidebar-second-inner" class="inner">
          <?php print render($page['sidebar_second']); ?>
        </div>
      </div>
    <?php endif; ?> <!-- /sidebar-second -->

  </div> <!-- /main -->
  </div>
  <!-- ______________________ FOOTER _______________________ -->
 </div>

</div> <!-- /page -->
<div class="footer">
    	<div class="footer_mid">
        	<div class="footerbox footerfirst">
            	<?php if ($page['footer_section_one']): ?>
                        <?php print render($page['footer_section_one']); ?>
                    <?php endif; ?>
            </div>
            <div class="footerbox">
            	<?php if ($page['footer_section_two']): ?>
                        <?php print render($page['footer_section_two']); ?>
                    <?php endif; ?>
            </div>
            <div class="footerbox">
            	<?php if ($page['footer_section_three']): ?>
                        <?php print render($page['footer_section_three']); ?>
                    <?php endif; ?>
            </div>
            <div class="footerbox footerlast">
            <?php if ($page['footer_section_four']): ?>
                        <?php print render($page['footer_section_four']); ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
<div class="footer btmfoot">
 <div class="footer_mid">
   <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
   <?php endif; ?>
<!--     <ul>
         <li><a href="#">Home</a></li>
            <li>|</li>
            <li><a href="#">About Us</a></li>
            <li>|</li>
            <li><a href="#">Services</a></li>
            <li>|</li>
            <li><a href="#">Products</a></li>
            <li>|</li>
            <li><a href="#">Careers</a></li>
            <li>|</li>
            <li><a href="#">Projects</a></li>
            <li>|</li>
            <li><a href="#">Contact</a></li>
        </ul>-->
        <span>Copyright &copy; 2012 DrupalIndia.com All rights reserved</span>
    </div>
</div>