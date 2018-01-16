<div class="container-fluid footer-suppport">
  <div class="row footer-contact">
    <div class="col-md-3"></div>
    <div class="col-md-3">
      <h5>Email: <span>cservice@rai.com.ng</span></h5>
    </div>
    <div class="col-md-3">
      <h5><span>Phone: </span><span>+2348081959378</span> </h5>
    </div>
  </div>
  <div class="row social">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <a href="#"><span class="social-icon facebook"><i class="ion-social-facebook-outline"></i></span></a>
      <a href="#"><span class="social-icon twitter"><i class="ion-social-twitter-outline"></i></span></a>
    </div>
  </div>
</div>

<footer>
  <div class="container-fluid">
    <div class="row footer">
      <div class="col-md-4"></div>
      <div class="col-md-4">
       <p>&copy; <?php echo date("Y"); ?> Reubenson Automotive Industry</p>
      </div>
    </div>
  </div>
</footer>


<!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="<?php echo base_url(); ?>_assets/js/jquery-slim.min.js"><\/script>')
  </script>
  <script src="<?php echo base_url(); ?>_assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>_assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>_assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script>
    var formIsOpened = false;
    AOS.init();
    $(document).ready(() => {
      $('#contact-form').hide();
      formIsOpened = false;
      
      $(".owl-carousel").owlCarousel({
        items: 1,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        navigation: true,
        slideSpeed: 2300,
        paginationSpeed: 2400,
        navSpeed: 2000,
        singleItem: true,
        pagination: false,
        rewindSpeed: 1500,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 2000,
        nav: false,
        dots: false,
      });
      $(".email-span").typed({
            strings: ["cservice@rai.com.ng"],
            typeSpeed: 100,
            loop: true,
            loopCount: 200,
            startDelay: 1200,
            backSpeed: 60,
            backDelay: 5000
        });
        $(".phone-span").typed({
            strings: ["+2348081959378"],
            typeSpeed: 100,
            loop: true,
            loopCount: 200,
            startDelay: 1200,
            backSpeed: 60,
            backDelay: 5000
        });
        $('#contact-button').click((event) => {
          event.preventDefault();
          if(formIsOpened){
            $('#contact-form').hide();
            formIsOpened = false;
          }else{
            $('#contact-form').show();
            formIsOpened = true;
          }
        });
    });
  </script>
</body>

</html>