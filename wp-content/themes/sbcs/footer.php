<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage SBCS Twenty_Eleven
 * @since Twenty Eleven 1.0 */
?>
	
</div><!-- #main -->

<footer id="colophon" role="contentinfo">
	<?php
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with three columns of widgets.
		 */
		if ( ! is_404() )
			get_sidebar( 'footer' );
	?>
			
	<div id="site-generator" >
		<div id="footer-left">
			<img src='<?php echo site_url("/wp-content/themes/sbcs/images/")."CSJ_Network.gif";?>'>
		</div>
		<div id="footer-right">
			<a href="http://www.douglasconsulting.net"> 
				<img src="http://www.douglasconsulting.net/favicon.ico" style="width:32px;height:32px;vertical-align:middle;"> 
			</a>Developed by <a href="http://www.douglasconsulting.net">Douglas Consulting</a>.<br /><br /> 
			Copyright &copy; St. Bernard's Catholic School  2006-2014, All Rights Reserved
		</div>
		<div id="footer-bottom">
		</div>
	</div>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>