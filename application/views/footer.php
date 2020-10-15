<footer class="light-blue lighten-2 darken-text center">
    <h5>Web Proggaming PLUGIN. Copyright 2019.</h5>
  </footer>
  <!--JavaScript at end of body for optimized loading-->
  <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
  <script type="text/javascript" src="<?php base_url()?>assets/js/materialize.js"></script>
  <script src="<?php base_url()?>assets/js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 990,
      transition: 600,
      interval: 3000
    });
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);
  </script>
  <!-- Compiled and minified CSS -->
  <!-- Compiled and minified JavaScript -->
</body>

</html>