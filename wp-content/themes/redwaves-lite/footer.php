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
<!-- BEGIN Analytics -->
<script type="text/javascript">

    var _gaq = _gaq || [];

    _gaq.push(['_setAccount', 'UA-64232208-1']);
    _gaq.push(['_setDomainName', 'hcmfo3club.net']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>

</body>
</html>
