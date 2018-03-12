
</main>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="widget col-md-6 col-lg-3">
				<img src="/assets/icons/logo_white.png" class="img-footer" alt="">
				<p>Devento, est une plateforme qui met en avant des astuces sur les technologies Web, Html,Css, Javascript,...</p>
			</div>
			<div class="widget col-md-6 col-lg-3">
				<h2>Liens Utiles</h2>
				<ul>
					<li><a href="">Accueil</a></li>
					<li><a href="">Derniers Posts</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>
			<div class="widget col-md-6 col-lg-3">
				<h2>Catégories</h2>
				<ul>
					<li class="border-none"><a href="">HTML</a></li>
					<li class="border-none"><a href="">CSS</a></li>
					<li class="border-none"><a href="">JavaScript</a></li>
					<li class="border-none"><a href="">PHP</a></li>
				</ul>
			</div>
			<div class="widget col-md-6 col-lg-3">
				<h2>Restons connectés</h2>
				<ul class="social-icons">
					<li class="border-none"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
					<li class="border-none"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
					<li class="border-none"><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
					<li class="border-none"><a href="https://fr.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div><span class="copyright">© 2017 Tous droits réservés - Made with <i class="fa fa-heart" style="color:#e70841;" aria-hidden="true"></i> by Devento Team</span></div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- TinyMce -->
<script type="text/javascript" src='/assets/tinymce/tinymce.min.js'></script>
<script type="text/javascript" src="/assets/tinymce/langs/fr_FR.js"> </script>
<script>
	tinymce.init({
		selector: '#content',
		language:'fr_FR',
		height : "400",
		plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help image emoticons',
		toolbar1: 'formatselect | bold italic strikethrough forecolor | link image codesample| alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
		image_advtab: true,

	});
</script>
<script src="/assets/prism/prism.js"></script>
<script src="/assets/js/main.js"></script>
<script>
	$(document).ready(function(){function t(t){$.ajax({url:"/search.php",method:"POST",data:{query:t},success:function(t){$("#result").html(t)}})}t(),$("#search-input").keyup(function(){var u=$(this).val();""!=u?t(u):t()})});
</script>
</body>
</html>