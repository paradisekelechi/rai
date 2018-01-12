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
  <script>
    $(document).ready(() => {
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
        responsive: {
          850: {
            items: 2
          }
        }
      });
      $(".email-span").typed({
            strings: ["cservice@robinsoninteractive.com.ng"],
            typeSpeed: 100,
            startDelay: 1200,
            callback: () => {
              $(".phone-span").typed({
                  strings: ["+122335484687494"],
                  typeSpeed: 100,
                  loop: true,
                  loopCount: 15,
                  startDelay: 1200,
                  backSpeed: 60,
                  backDelay: 5000
              });
            }
        });
    });
  </script>
</body>

</html>