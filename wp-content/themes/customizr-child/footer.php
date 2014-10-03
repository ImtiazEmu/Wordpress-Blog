<?php
 /**
 * The template for displaying the footer.
 *
 *
 * @package Customizr
 * @since Customizr 3.0
 */
do_action( '__before_footer' );
?>
	<!-- FOOTER -->
 
	 	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1457951391110719&version=v2.0";
		    fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<section class="content-13 subscribe-form bg-turquoise">
		  <div class="container footer-section">
		    <div class="row">
		      <form>
		        <div class="col-sm-8">
		          <input type="text" placeholder="Enter your e-mail" spellcheck="false">
		        </div>
		        <div class="col-sm-4">
		          <button class="btn btn-large btn-primary" type="submit">
		            Subscribe now
		          </button>
		        </div>
		      </form>
		    </div>
		  </div>
		</section>

		<!-- footer-2 -->
		<footer class="footer-2 bg-midnight-blue">
		  <div class="container footer-section">
		    <div class="fb-like pull-left" data-href="https://www.facebook.com/farmido" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" style="margin-right: 20px"></div>
		    <nav class="pull-left">
		      <ul>
		        <li class="active">
		          <a href="#">Home</a>
		        </li>
		        <li>
		          <a href="#">Company</a>
		        </li>
		        <li>
		          <a href="#">Portfolio</a>
		        </li>
		        <li>
		          <a href="#">Blog</a>
		        </li>
		        <li>
		          <a href="#">Contact</a>
		        </li>
		      </ul>
		    </nav>
		    <div class="social-btns pull-right">
		      <a href="#"><div class="fui-vimeo"></div><div class="fui-vimeo"></div></a>
		      <a href="#"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>
		      <a href="#"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
		    </div>
		    <div class="additional-links">
		      Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
		    </div>
		  </div>
		</footer>
<?php
//wp_footer(); //do not remove, used by the theme and many plugins
do_action( '__after_footer' ); 
?>
	</body>
<?php do_action( '__after_body' );  ?>
</html>
