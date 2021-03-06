@extends('plantillas.main-alumno2')
@section('title', 'Material didáctico')

@section('menu')
	@include('plantillas.partes.main-alumno2')
@endsection
@section('contenido')
	<div class="row">
		<h3 class="flow-text center-align">Clase de Física</h3>
		<div class="col s8 m8 offset-m3">
			<iframe width="480" height="480" src="https://www.youtube.com/embed/lSpG06OmZFQ?list=PL7cM54lY7sxEQqRH7ytL57wNArRp2zn4z" frameborder="0" allowfullscreen class="valign"></iframe>
		</div>
		<hr>		
	</div>
	<div class="row">
		<div class="col s12 m10 offset-m1">
			<h5>Comentarios</h5>
			<div id="disqus_thread"></div>
			<script>
			/**
			* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
			*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');

			s.src = '//bildung.disqus.com/embed.js';

			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
		</div>
	</div>
@endsection