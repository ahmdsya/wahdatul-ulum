  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{asset('frontend/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('frontend/lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('frontend/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('frontend/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('frontend/js/main.js')}}"></script>

  <!-- <SCRIPT>
  $(document).ready(function() {
  var div = $('#left-widget');
  var start = $(div).offset().top;
  $.event.add(window, "scroll", function() {
  var p = $(window).scrollTop();
  $(div).css('position',((p)>start) ? 'fixed' : 'static');
  $(div).css('top',((p)>start) ? '0px' : '');
  });
  });
  </SCRIPT> -->

</body>
</html>