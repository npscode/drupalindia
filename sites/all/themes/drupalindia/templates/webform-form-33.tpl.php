<?php
/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 */
//p($form['submitted']);
?>
  <?php //print drupal_render($form['submitted']['first_name']); ?>
  <?php //print drupal_render($form['submitted']['last_name']); ?>
  <?php //print drupal_render($form['submitted']['email']); ?>
  <?php //print drupal_render($form['submitted']['contact_no']); ?>
  <?php //print drupal_render($form['submitted']['country']); ?>
  <?php //print drupal_render($form['submitted']['website']); ?>
  <?php //print drupal_render($form['submitted']['requirements']); ?>
  
<div class="banner_right">
  <div class="contactbox">
  <h1>Contact Our Drupal Experts</h1>
     <div class="contactsubbox">
      <span>
          <?php print drupal_render($form['submitted']['first_name']); ?>
          <?php print drupal_render($form['submitted']['last_name']); ?>
<!--          <input type="textbox" value="Last Name" class="sec" />-->
         </span>
         <span>
          <?php print drupal_render($form['submitted']['email']); ?> 
          <?php print drupal_render($form['submitted']['contact_no']); ?>
<!--          <input type="textbox" value="Email" />
          <input type="textbox" value="Contact Us" class="sec" />-->
         </span>
         <span>
          <?php print drupal_render($form['submitted']['country']); ?> 
          <?php print drupal_render($form['submitted']['website']); ?>
<!--          <select>
              <option>Subject</option>
                 <option>Subject</option>
             </select>-->
<!--          <input type="textbox" value="Website" class="sec" />-->
         </span>
         <span>
          <?php print drupal_render($form['submitted']['requirements']); ?> 
<!--          <textarea rows="4">Please describe your requirements</textarea>-->
         </span>
<!--         <span>
          
              <tt></tt>
                 <b><a href="#">Submit</a></b>
                 <tt class="right"></tt>
         </span>-->
      <?php
        print drupal_render_children($form);
      ?>
     </div>
     
 </div>
</div>