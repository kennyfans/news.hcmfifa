<?php
	/**
	* The template for displaying the footer.
	*
	* Contains the closing of the #content div and all content after
	*
	* @package redwaves-lite
	*/
?>
</div><!--#page -->
</div><!--.main-container -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript">
	jQuery.noConflict();
	jQuery(document).ready(function(){
		jQuery("#sidemenu_show").click(function(){
			jQuery("#mobile-menu-wrapper").animate({ left: "0px" }, 500);
		});
	});
	jQuery(document).ready(function(){
		jQuery("#sidemenu_hide").click(function(){
			jQuery("#mobile-menu-wrapper").animate({ left: "-300px" },500);
		});
	});
	jQuery(document).ready(function(){
		jQuery(".mobile_search").hide();
		jQuery(".searchtoggle").click(function(){
			jQuery(".mobile_search").slideToggle('slow');
		});
	});
</script>
</body>
</html>