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
<!--            	<ul>
                	<li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>-->
<!--                <div class="social_icons">
                	<label>Connect with Us:</label>
                    <em><a href="#"><img src="/sites/all/themes/drupalindia/images/drupalindia/facebook.jpg" alt="" onmouseover="this.src='/sites/all/themes/drupalindia/images/drupalindia/facebook_hover.jpg'" onmouseout="this.src='/sites/all/themes/drupalindia/images/drupalindia/facebook.jpg'" /></a></em>
                    <em><a href="#"><img src="/sites/all/themes/drupalindia/images/drupalindia/plus.jpg" alt="" onmouseover="this.src='/sites/all/themes/drupalindia/images/drupalindia/plus_hover.jpg'" onmouseout="this.src='/sites/all/themes/drupalindia/images/drupalindia/plus.jpg'" /></a></em>
                    <em><a href="#"><img src="/sites/all/themes/drupalindia/images/drupalindia/youtube.jpg" alt="" onmouseover="this.src='/sites/all/themes/drupalindia/images/drupalindia/youtube_hover.jpg'" onmouseout="this.src='/sites/all/themes/drupalindia/images/drupalindia/youtube.jpg'" /></a></em>
                    <em><a href="#"><img src="/sites/all/themes/drupalindia/images/drupalindia/blog.jpg" alt=""onmouseover="this.src='/sites/all/themes/drupalindia/images/drupalindia/blog_hover.jpg'" onmouseout="this.src='/sites/all/themes/drupalindia/images/drupalindia/blog.jpg'" /></a></em>
                    <em><a href="#"><img src="/sites/all/themes/drupalindia/images/drupalindia/twitter.jpg" alt="" onmouseover="this.src='/sites/all/themes/drupalindia/images/drupalindia/twitter_hover.jpg'" onmouseout="this.src='/sites/all/themes/drupalindia/images/drupalindia/twitter.jpg'" /></a></em>
                    <em><a href="#"><img src="/sites/all/themes/drupalindia/images/drupalindia/flickr.jpg" alt="" onmouseover="this.src='/sites/all/themes/drupalindia/images/drupalindia/flickr_hover.jpg'" onmouseout="this.src='/sites/all/themes/drupalindia/images/drupalindia/flickr.jpg'" /></a></em>
                </div>-->
            </div>
            <div id="content_front">
                <div class="bannerbox">
                    <?php if ($page['homepage_banner']): ?>
                        <?php print render($page['homepage_banner']); ?>
                    <?php endif; ?>
                    
<!--                    <div class="banner">
                            <ul class="control">
                                <li><a href="#"></a></li>
                            </ul>
                            <div class="carousal_sec" id="slider1">
                                <div class="panel">
                                 <p class="text1">The Most diverse</p>
                                 <p class="text2 red">drupal development</p>
                                 <p class="text3">team is born.</p>
                                 <img src="images/banner.jpg" alt="banner" /> 
                                </div>
                                <div class="panel">
                                 <p class="text1">The Most diverse</p>
                                 <p class="text2 red">drupal development</p>
                                 <p class="text3">team is born.</p> <img src="images/banner.jpg" alt="banner" /> 
                                </div>
                                <div class="panel">
                                 <p class="text1">The Most diverse</p>
                                 <p class="text2 red">drupal development</p>
                                 <p class="text3">team is born.</p> <img src="images/banner.jpg" alt="banner" /> 
                                </div>
                                <div class="panel">
                                 <p class="text1">The Most diverse</p>
                                 <p class="text2 red">drupal development</p>
                                 <p class="text3">team is born.</p> <img src="images/banner.jpg" alt="banner" /> 
                                </div>
                            </div>
                    </div>-->
                    <?php if ($page['quick_contact']): ?>
                      <div class="banner_right">
                        <?php print render($page['quick_contact']); ?>
                      </div>
                    <?php endif; ?>
                  
                    
<!--                    	<div class="contactbox">
                        	<h1>Contact Our Drupal Experts</h1>
                            <div class="contactsubbox">
                            	<span>
                                	<input type="textbox" value="First Name" />
	                                <input type="textbox" value="Last Name" class="sec" />
                                </span>
                                <span>
                                	<input type="textbox" value="Email" />
	                                <input type="textbox" value="Contact Us" class="sec" />
                                </span>
                                <span>
                                	<select>
                                    	<option>Subject</option>
                                        <option>Subject</option>
                                    </select>
	                                <input type="textbox" value="Website" class="sec" />
                                </span>
                                <span>
                                	<textarea rows="4">Please describe your requirements</textarea>
                                </span>
                                <span>
                                	<label>
                                    	<tt></tt>
                                        <b><a href="#">Submit</a></b>
                                        <tt class="right"></tt>
                                    </label>
                                </span>
                            </div>
                        </div>-->
                </div>
                <div class="contentbox">
                  <?php if ($page['homepage_sevices_box']): ?>
                        <?php print render($page['homepage_sevices_box']); ?>
                    <?php endif; ?>
<!--                   	<div class="contentsubbox">
                    	<h2>
                        	<label>Drupal Development</label>
                            <em><img src="images/icon1.png" alt="" /></em>
                        </h2>
                        <span>
                        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when type and scrambled it to make a type specimen book.
                        </span>
                        <span class="active">
                        	<label><a href="#">Learn More</a></label>
                            <i></i>                            
                        </span>
                    </div>
                    <div class="contentsubbox contentsubmid">
                    	<h2>
                        	<label>Mobile Development</label>
                            <em><img src="images/icon2.png" alt="" /></em>
                        </h2>
                        <span>
                        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when type and scrambled it to make a type specimen book.
                        </span>
                        <span>
                        	<label><a href="#">Learn More</a></label>
                            <i></i>                            
                        </span>
                    </div>
                    <div class="contentsubbox contentsubmid">
                    	<h2>
                        	<label>Drupal Support</label>
                            <em><img src="images/icon3.png" alt="" /></em>
                        </h2>
                        <span>
                        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when type and scrambled it to make a type specimen book.
                        </span>
                        <span>
                        	<label><a href="#">Learn More</a></label>
                            <i></i>                            
                        </span>
                    </div>
                    <div class="contentsubbox contentsubmid">
                    	<h2>
                        	<label>Drupal Theming</label>
                            <em><img src="images/icon4.png" alt="" /></em>
                        </h2>
                        <span>
                        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when type and scrambled it to make a type specimen book.
                        </span>
                        <span>
                        	<label><a href="#">Learn More</a></label>
                            <i></i>                            
                        </span>
                    </div>-->
                </div>
                <div class="contentbox">
                  <?php if ($page['homepage_content_top']): ?>
                        <?php print render($page['homepage_content_top']); ?>
                    <?php endif; ?>
<!--                	<div class="testimonials">
                    	<h1>Testimonials</h1>
                        <div class="testbox">
                            <i><img src="images/thumb.jpg" /></i>
                            <span>
                                <label>
                                    Lorem Ipsum is simply dummy text of text of the printin typesetting printing and typesetting industry. Lorem Ipsum is simply dummy text of text of the printin typesetting printing and typesetting industry.Lorem Ipsum is simply. simply dummy text of text of the printin typesetting printing and typesetting industry.Lorem Ipsum is simply.
                                </label>
                                <label><a href="#">Learn More</a></label>
                                <tt><a href="#"><img src="images/rightarrow.jpg" onmouseover="this.src='images/rightarrow_hover.jpg'" onmouseout="this.src='images/rightarrow.jpg'" /></a></tt>
                                <tt><a href="#"><img src="images/leftarrow.jpg" onmouseover="this.src='images/leftarrow_hover.jpg'" onmouseout="this.src='images/leftarrow.jpg'" /></a></tt>
                            </span>
                        </div>
                    </div>
                    <div class="testimonials featured">
                    	<h1>Featured Works</h1>
                        <div class="testbox featuredbox">
                            <img src="images/fworks.jpg" />
                        </div>
                    </div>                -->
                </div>
                <div class="contentbox">
                	<div class="bottomcontent">
                    	 <?php if ($page['content']): ?>
                        <?php print render($page['content']); ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
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