<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orlando_Attractions
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="company-details" itemscope itemtype="http://schema.org/Organization">
      <div class="logo">
        <img itemprop="logo" src="/wp-content/uploads/2016/08/OA-Logo-1000.png" alt="Orlando Attractions Logo">
      </div>
      <div class="company-text">
        <p itemprop="description">Orlando Attractions offers unbeatable deals on Orlando Attraction Tickets, along with all the latest news, videos and information from the world's most popular family destination! With over 30 years experience and USA & UK offices we are truly transatlantic - our customer service is second to none regardless of which side of 'the pond’ you live on!<p>
      </div>
    </div>
    
    <div class="important-links">
      <h2>Important Links</h2>
      <?php
			wp_nav_menu( array(
				'theme_location'   => 'footer',
				'menu'             => 'footer',
				'container'        => 'div',
				'container_class'  => 'important-links'
			));
		?>
    </div>
    
    <div class="contact-us">
      <h2>Contact Us</h2>
      <address>
        154 East Highland Avenue<br />
        Clermont, FL 34711<br /><br />
        (352) 241-8539<br /><br />
        Email Us
      </address>
      <div class="footer-social" itemscope itemtype="http://schema.org/Organization">
         <ul class="footer-social-links">
            <li class="social"><a itemprop="sameAs" href="https://www.facebook.com/OrlandoAttraction/"><span class="fa icon-facebook-f fa-2x" aria-hidden="true"></span></a></li>
            <li class="social"><a itemprop="sameAs" href="https://twitter.com/MrsOrlando"><span class="fa icon-twitter fa-2x" aria-hidden="true"></span></a></li>
            <li class="social"><a itemprop="sameAs" href="https://www.youtube.com/channel/UCVwiX0GFGWLGZjTDUok4tnw"><span class="fa icon-youtube-play fa-2x" aria-hidden="true"></span></a></li>
            <li class="social"><a itemprop="sameAs" href="https://instagram.com/orlandoattractionstickets"><span class="fa icon-instagram fa-2x" aria-hidden="true"></span></a></li>
        </ul>
      </div>
    </div>
    
    <div class="seller-details">
      <h2>Trusted Ticket Seller</h2>
      <div class="ticket-badges">
        <img src="/wp-content/uploads/2018/11/ticket-badges.png" alt="Trusted Ticket Seller">
      </div>
      <div class="cards-accepted">
        <img src="/wp-content/uploads/2018/11/credit-cards-accepted.png" alt="Credit Cards Accepted">
      </div>
    </div>
    
    <div class="gdpr-area">
      <p>Attraction tickets sold on <a href="http://orlandoattractions.com/">OrlandoAttractions.com</a> are supplied by Ascot Travel House Ltd in the UK and Travel House of America for the rest of the World.</p>

<p>Ascot Travel House Ltd (trading as <a href="http://orlandoattractions.com/">OrlandoAttractions.com</a>) is a member of ABTA. Company registration 11178791, head office: 5 Royal Hunt House, Fernbank Road, Ascot, SL5 8JR.  As members of ABTA you have the benefit of ABTA’s assistance and Code of Conduct. Attraction Tickets purchased through <a href="http://orlandoattractions.com/">OrlandoAttractions.com</a> are not covered by ABTA’s scheme of financial protection.</p>

<p>Any holidays purchased are supplied by our retail travel agent NAR UK Ltd ABTA K5268. Company registration 01475109, head office: 5 Royal Hunt House, Fernbank Road, Ascot, SL5 8JR. All flights and flight-inclusive holidays we sell are financially protected by the ATOL scheme. When you pay you will be supplied with an ATOL certificate. Please ask for it and check to ensure that everything booked (flights, hotels and other services) is listed on it. Please visit <a href="x-webdoc://A3C81874-86C5-4842-ABAE-2DBF081B380C/www.atol.org.uk/ATOLCertificate" target="_blank" rel=”nofollow”>www.atol.org.uk/ATOLCertificate</a> for more information.</p>

<p>Accommodation supplied to persons outside of the UK will be supplied by Travel House of America INC. Registration number 593223781, head office: 154 East Highland Avenue, Clermont, FL, 34711. These sales are not covered by ABTA.</p>

<p>For more information, please click <a href="https://www.orlandoattractions.com/tickets/orlando-attractions-about-us">HERE</a></p>
    </div>
    
    <div class="copyright-area">
      <div class="copyright-text">
        <p>&copy; Orlando Attractions 2006 - <?php echo date("Y"); ?></p>
      </div>
      <div class="copyright-links">
        <ul>
          <li><a href="">Terms & Conditions</a>&nbsp;|</li>
          <li><a href="">Privacy Policy</a>&nbsp;|</li>
          <li><a href="">Sitemap</a></li>
        </ul>
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/navigation.js"></script>
<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End Trustbox script -->
<script>
    var owl = $('.slider-wrapper');
    owl.owlCarousel({
        // items:3,
        // loop:true,
        margin:1,
        autoplay:true,
        autoplayTimeout:3500,
        autoplayHoverPause:true,
        center: true,
        autoWidth:true,
        // nav: true,
        responsiveClass:true,
        responsive:{
        0:{
            items:1,
            nav:true,
            loop: true
        },
        480:{
            items:3,
            nav:true,
            loop: true
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
    });
    </script>
    <script>
    var owlAttractions = $('.attractions-carousel');
    owlAttractions.owlCarousel({
    loop:true,
    margin:30,
    autoplay:true,
    autoplayHoverPause:true,
    autoplayTimeout:3000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop: true
        },
        600:{
            items:1,
            nav:true,
            loop: true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
});
</script>
<script>
    var owlTickets = $('.tickets-carousel');
    owlTickets.owlCarousel({
    items: 3,
    autoWidth: true,
    center: true,
    loop:true,
    margin:10,
    autoplay:false,
    autoplayHoverPause:true,
    autoplayTimeout:3500,
    dots: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            loop: true,
            autoWidth: true
        },
        600:{
            items:1,
            loop: true
        },
        1000:{
            items:2
        },
        1440:{
            items:3,
            loop:true
        }
    }
});
</script>
<script>
    var owl = $('.destination-carousel');
    $(owl).owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      responsiveClass: true,
      autoHeight:true,
      responsive: {
        0: {
          items: 2,
          nav: false,
          stagePadding: 25
        },
        600: {
          items: 2,
          nav: false,
          stagePadding: 25
        },
        1000: {
          items: 5,
          nav: false,
          loop: true
        }
      }
    })
  </script>
  <script>
    var owl = $('.partner-ticket-carousel');
    $(owl).owlCarousel({
      loop: false,
      autoHeight: false,
      autoWidth: true,
      margin: 5,
      stagePadding: 5,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 2
        }
      }
    })
  </script>
</body>
</html>
