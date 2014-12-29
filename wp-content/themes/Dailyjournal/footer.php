		</section> <!-- end #recent-posts -->
		
		<div id="widgets">
			<?php dynamic_sidebar('Sidebar'); ?>
		</div> <!-- end #widgets -->
	</div> <!-- end #content -->

	<?php wp_footer(); ?>
<script type="text/javascript">
<?php if(is_home()) echo 'var isindex=true;var title="";';else echo 'var isindex=false;var title="',  get_the_title(),'";'; ?>
<?php if((($display_name = wp_get_current_user()->display_name) != null)) echo 'var visitor="',$display_name,'";'; else if(isset($_COOKIE['comment_author_'.COOKIEHASH])) echo 'var visitor="',$_COOKIE['comment_author_'.COOKIEHASH],'";';else echo 'var visitor="Visitor";';echo "\n"; ?>
</script>
<script type="text/javascript" src="http://www.ccpt.cc/wp-content/themes/Dailyjournal/js/spig.js"></script>
<div id="spig" class="spig">
    <div id="message">Loading...</div>
    <div id="mumu" class="mumu"></div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43243195-1', 'ccpt.cc');
  ga('send', 'pageview');

</script>
</body>
</html>
