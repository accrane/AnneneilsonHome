</div><!-- #main .wrapper -->
    </div><!-- #page -->
    
	<footer id="colophon" role="contentinfo">
		<div class="footer-inside">
        
        <div id="social"><?php acc_social_links() ?></div><!-- social -->
        
        <div class="footer-left">
        <?php wp_nav_menu( array( 
				'theme_location' => 'footer' ,
				'container'       => 'div',
				'container_class' => 'footer-nav',
			) ); ?>
        	<a href="<?php the_field('sitemap' , 'option'); ?>">Sitemap</a> | 
            Site by <a href="http://bellaworksweb.com" target="_blank">Bellaworks</a>
        	
           <div class="copyright">
         		&copy; Anne Neilson Home <?php echo date('Y'); ?>
            </div><!-- copyright -->
        </div><!-- footer left -->
        
        <div class="footer-middle">
        	<a class="buttn" href="http://anneneilsonfineart.com" target="_blank">Gallery</a>
            <div class="clear"></div>
            <a class="buttn" href="<?php the_field('wholesaler_link' , 'option'); ?>">Request Wholesale Information</a>
            <div class="clear"></div>
            <a class="buttn" href="<?php bloginfo('url'); ?>/store-location">Store Locators</a>
        </div><!-- footer middle -->
        
        <div class="footer-right">
        <p>KEEP IN TOUCH</p>
            <a class="buttn newsletter" href="#mc_form_pop">Subscribe via Email</a>
            <p><?php the_field('footer_newsletter_blurb' , 'option'); ?></p>
            
            <?php //get_template_part('inc/newsletter-popup'); ?>
            
        </div><!-- footer right -->
        
        </div><!-- footer inside -->
	</footer><!-- #colophon -->

<div style="display:none" class="newsletter">
	<div id="mc_form_pop">
 


<!-- Begin MailChimp Signup Form -->
<!--<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">-->

<div id="mc_embed_signup">
<form action="//anneneilsonfineart.us3.list-manage.com/subscribe/post?u=33908336d7b67e6ca5c33dfc7&amp;id=37f8f6f238" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div id="mc_embed_signup_scroll">
	
<div class="newscenter">
<h2>Join In</h2>
<p>Signup and receive the latest News</p>
</div>
    
<!--<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>-->
<div class="formwrapper">
<div class="mc-field-radio input-group">
    <!--<strong>Mr Ms </strong>-->
    <ul class="popuplist"><li><input type="radio" value="MR" name="MMERGE2" id="mce-MMERGE2-0"><label for="mce-MMERGE2-0">MR</label></li>
<li><input type="radio" value="MS" name="MMERGE2" id="mce-MMERGE2-1"><label for="mce-MMERGE2-1">MS</label></li>
</ul>
</div>
<div class="mc-field-bday size1of2">
	
	<div class="datefield">
		<div class="subfield monthfield birthday-field">
        <input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="MMERGE3[month]" id="mce-MMERGE3-month">
         / 
		<input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="MMERGE3[day]" id="mce-MMERGE3-day">
        </div> <!-- birthday-field -->
        
	</div><!-- date field -->
 </div>
 <div class="thelabel bday">
        <label for="mce-MMERGE3-month">BIRTHDAY </label>
        </div>
 
 
 
 
 <div class="mc-field-group">
	
	<input type="text" value="" name="NAME" class="" id="mce-NAME">
    <div class="thelabel label-name"><label for="mce-NAME">NAME </label></div>
</div>
<div class="mc-field-group">
	
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    
    <div class="thelabel label-name"><label for="mce-EMAIL">EMAIL  <span class="asterisk">*</span></label></div>
</div>

<div class="mc-list-group">
    <ul>
        <li><input type="checkbox" value="1" name="group[6385][1]" id="mce-group[6385]-6385-0"><label for="mce-group[6385]-6385-0">Blog</label></li>
        <li><input type="checkbox" value="2" name="group[6385][2]" id="mce-group[6385]-6385-1"><label for="mce-group[6385]-6385-1">Products + Promotions</label></li>
    </ul>
    <div class="thelabel label-name"><label for="mce-group">INTERESTS</label>
</div><!-- mc-field-group -->

	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_33908336d7b67e6ca5c33dfc7_37f8f6f238" tabindex="-1" value=""></div>
    </div><!-- form wrapper -->
    <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[2]='MMERGE2';ftypes[2]='radio';fnames[3]='MMERGE3';ftypes[3]='birthday';fnames[1]='NAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);




</script>

 
	</div>
</div><!-- email signup -->
<?php wp_footer(); ?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<link href="https://plus.google.com/105836384615258778564" rel="publisher" />
<script type="text/javascript" async defer src="https://apis.google.com/js/platform.js?publisherid=105836384615258778564"></script>

<?php 
// Analytics
the_field('google_analytics','option'); 
// Remarketing data
$product = get_the_ID();


?>
	<script type="text/javascript">
    var google_tag_params = {
    ecomm_prodid: '<?php echo $product ?>',
    ecomm_totalvalue: '<?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>',
    };
    </script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 951347273;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/951347273/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
</body>
</html>