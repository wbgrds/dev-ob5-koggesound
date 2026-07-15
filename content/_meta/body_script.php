
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="/includes/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.6" id="swv-js"></script>
<script id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/<?php echo $domain; ?>\/json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>

<script src="/includes/js/jquery/ui/effect.min.js?ver=1.13.2" id="jquery-effects-core-js"></script>
<script src="/includes/theme/js/parallax.js?ver=1.1.3" id="parallax_js-js"></script>
<script src="/includes/theme/js/bootstrap.min.js?ver=3.3.4" id="bootstrap_js-js"></script>
<script src="/includes/theme/js/jquery.prettyPhoto.js?ver=3.1.6" id="prettyphoto_js-js"></script>
<script src="/includes/theme/js/jquery.flexslider-min.js?ver=2.6.4" id="flexslider_js-js"></script>
<script src="/includes/theme/js/waypoints.min.js?ver=2.0.5" id="waypoints_js-js"></script>
<script src="/includes/theme/js/jquery.counterup.min.js?ver=1.0" id="counterup_js-js"></script>
<script src="/includes/theme/js/scrollreveal.min.js?ver=3.3.2" id="scrollreveal_js-js"></script>
<script src="/includes/theme/js/smooth-scroll.js?ver=1.0" id="smoothscroll_js-js"></script>



<script>
jQuery(document).ready(function($){

	 $('#welcome').parallax("50%", 0.3); 	 $('#testimonials').parallax("50%", 0.3); 	 $('#calltoaction').parallax("50%", 0.3); 	 $('#newsletter').parallax("50%", 0.3); 
	$('.flexslider').flexslider({
	animation: "slide",
	slideshow: true,
	slideshowSpeed: parseInt(7)*1000,
	});

	$('.testislider').flexslider({
	controlNav: true, 
	animation: "slide",
	slideshow: true,
	slideshowSpeed: parseInt(7)*1000,
	});
})	
</script>

<!-- PrettyPhoto Code START -->
<script>
        jQuery(document).ready(function($){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				social_tools: false,
				theme: 'light_rounded',
                show_title: false,
                callback: function(){}
			});
		});
</script>
<!-- PrettyPhoto Code END -->

<!-- CounterUp Code For Stats START -->
<script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,  // The delay in which the stats counter will start 
                time: 2000  // The speed by which the stats counter counts up (in milliseconds)
            });
        });
</script>
<!-- CounterUp Code For Stats END -->


<!-- Scroll Reveal START -->
<script>
    // Changing the defaults
    window.sr = ScrollReveal({ reset: false });
    // Customizing a reveal set
    sr.reveal('.page-template-template_home .features .feature', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .project-single .project', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .projects-grid .grid', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .services .feature', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .pts .pt', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .skills .skill', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .team .member', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .blog article', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
</script>

