<footer class="content-info" role="contentinfo">
  <div class="container">
    <p class="logos"><a href="http://chalmers.it" target="_blank" title="IT-Sektionen"><img src="<?php bloginfo('template_directory'); ?>/assets/img/footer/it.png" alt="Teknologsektionen Informationsteknik" title="Teknologsektionen Informationsteknik" /></a><a href="http://www.chs.chalmers.se/" target="_blank" title="Kårens hemsida"><img src="<?php bloginfo('template_directory'); ?>/assets/img/footer/chs.png" alt="Chalmers Studentkår" /></a></p>
  	<div class="fb-like" data-href="https://www.facebook.com/PRITChalmers" data-send="false" data-width="450" data-show-faces="true" data-font="arial" data-colorscheme="dark"></div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p><b>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></b> | 
    <script>document.write("<n uers=\"znvygb:cevg@punyzref.vg\" gvgyr=\"Rcbfgn bff\" ery=\"absbyybj\">cevg@punyzref.vg</n> |".replace(/[a-zA-Z]/g,
    function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));</script> <a href="https://www.facebook.com/PRITChalmers" target="_blank" title="PRIT på Facebook">Facebook</a> | <a href="http://chalmers.it" target="_blank" title="IT-Sektionen">Teknologsektionen Informationsteknik</a> | <a href="http://www.chs.chalmers.se/" target="_blank" title="Kårens hemsida">Chalmers Studentkår</a></p>
  </div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sv_SE/all.js#xfbml=1&appId=199344906755719";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>