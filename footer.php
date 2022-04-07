<!-- <section class="Lets_start">
      <div class="lftdots wow slideInUp">
          <img src="images/dot1-started2.png">
      </div>
      <div class="container">
          <div class="row">
              <div class="col-12 text-center Get_Started_Content">
                  <p style="text-align: center;"> lets <span>Get started</b></span></p>
                  <form name="footer_form" class="form-inline" id="footer_form" method="POST" action="userinfo.php">
                      <div class="form-group ">
                          <input type="email" name="email" class="form-control" id="email" placeholder="Your Email Id">
                      </div>
                      <button type="submit" class="btn btn-primary">Sign Up<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </form>
                  <div id="contact-response"></div>
              </div>

              <div class="rightdots wow slideInUp">
                  <img src="images/dot1-started.png">
              </div>
  </section> -->

  <footer class="page-footer font-small blue " style="background-color: white;">

      <div class="container text-center text-md-left">

          <div class="row">

              <div class="col-md-4  footerlogo">

                  <a href="index.php"> <img src="images/karunya_global_new_logo_1.png"></a>
                  <p class="text-justify">
                      Karunya Global has always believed in ensuring complete satisfaction of its patrons. We strictly follow ethical business policies to maintain that trust. What has kept us as their first choice is our quality of work and timely deliverability of services with the help of industry's most efficient workforce.

                  </p>
              </div>

              <div class="col-md-3 ServicesList">

                  <h5 class="text-uppercase">Services</h5>
                  <ul class="list-unstyled underline">
                      <li>
                          <a href="smart_meters.php"> Smart Meters</a>
                      </li>
                      <li>
                          <a href="it-services.php"> IT Services</a>
                      </li>
                      <li>
                          <a href="information-security.php"> Information Security</a>
                      </li>

                      <li>
                          <a href="Forensic_Services.php">Forensic Services</a>
                      </li>
                      <!--li>
                          <a href="digital-forensics.php"> Digital Forensics</a>
                      </li-->
                      <li>
                          <a href="software.phpp"> Software Development</a>
                      </li>
                      <li>
                          <a href="hardware.php"> Hardware Services</a>
                      </li>
                  </ul>
              </div>

              <div class="col-md-2 FollowList">

                  <h5 class="text-uppercase">Follow us</h5>
                  <ul class="list-unstyled footer-icon">
                      <li>
                          <i class="fa fa-facebook-official" aria-hidden="true" ></i>
                          <a href="https://www.facebook.com/Techserversinfra-103397241511958" target="_blank"> Facebook </a>
                      </li>
                      <li>
                          <i class="fa fa-twitter-square" aria-hidden="true"></i>
                          <a href="https://twitter.com/InfraServers" target="_blank">Twitter</a>
                      </li>
                      <li>
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                          <a href="https://www.instagram.com/techserverinfra/" target="_blank"> Instagram </a>
                      </li>
                      <li>
                          <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                          <a href="https://www.linkedin.com/company/68772823/admin/" target="_blank">Linkedin</a>
                      </li>
                  </ul>
              </div>
              <div class="col-md-3 ContactList">

                  <h5 class="text-uppercase">Contact us</h5>
                  <ul class="list-unstyled">
                      <li>
                          <span><i class="fa fa-phone" aria-hidden="true"></i></span> <a href="tel:918878992542" style="color:#4582FE;">+91 8878992542</a>
                      </li>
                      <li><span><i class="fa fa-globe" aria-hidden="true"></i></span> <a href="http://karunyagroup.com" style="color:#4582FE;">https://karunyagroup.com</a></li>
                      
                  </ul>
              </div>

          </div>
          


          


          <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
          <script src="js/validation.js"></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="https://www.google.com/recaptcha/api.js"></script>

          <script>
              jQuery(window).scroll(function() {
                  var scrollTop = jQuery(window).scrollTop();
                  if (scrollTop > 50) {
                      jQuery('header').addClass('head_stiky');
                  } else {
                      jQuery('header').removeClass('head_stiky');
                  }
              });

              var wow = new WOW({
                  boxClass: 'wow',
                  animateClass: 'animated',
                  offset: 220,
                  mobile: true,
                  live: true,
                  callback: function(box) {},
                  scrollContainer: null
              });
              wow.init();

          </script>
          <script>
              $('.product-box').each(function() {
                  $(this).find('#show-deatil').click(function() {
                      $(this).parent().siblings('.features-detail').slideToggle();
                  })
              })

          </script>
          <script>
              $('#tech-slider .owl-carousel').owlCarousel({
                  loop: true,
                  margin: 10,
                  nav: false,
                  autoplay: true,
                  autoplayTimeout: 3000,
                  responsive: {
                      0: {
                          items: 1,
                          nav: false
                      },
                      600: {
                          items: 1
                      },
                      1000: {
                          items: 1
                      }
                  }
              })

          </script>
       <script>(function(w, d) { w.CollectId = "622c28dbbc2315111d70a58a"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
          

  </footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr style="border-width: medium;">
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <center><h6 class="mt-3">copyright &copy; 2022 Karunya Global</h6></center>
        <div class="col-md-12 text-center Copyright_Content">
            <button class="btn btn-sm btn-primary rounded mb-3" onclick="scrollToTop()" id="myBtn" style="float: right;"><i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
  function scrollToTop() {
    $(window).scrollTop(0);
  }
  </script>