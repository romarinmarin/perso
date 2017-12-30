<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter" id="contact">

<div class="container">


<div class="footer__inner">
    <h2 class="tblock__title footer__title">Contactez moi</h2>
    <h3 class="tblock__subtitle footer__subtitle">Je vous réponds rapidement</h3>

    <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact"]' ); ?>




</div>

</div>
</footer>



<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-70284838-1', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Raleway:300,400,500,600,700','Libre+Baskerville:700','Cookie:400','Open+Sans:300,400,500,600,700' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

</body>

</html>
<!-- end of site. what a ride! -->