@extends('invitado.master')
@section('contenido')
<div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<br><br>
		<div class="carousel-item active">
			<img src='{{url("/img/img1.png")}}' height="400" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src='{{url("/img/img2.jpg")}}' height="400" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src='{{url("/img/img3.jpg")}}' height="400" class="d-block w-100" alt="...">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<div class="container"><br>
<h2>Encuentranos</h2>
	<div id="map-container-google-3" class="z-depth-1-half map-container-3">
		<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4295.883512178578!2d-77.63972598504778!3d0.8238791632685313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e296beeb405801b%3A0x8fd75e36aca4f550!2sCra.%207%20%2311-47%2C%20Ipiales%2C%20Nari%C3%B1o!5e1!3m2!1ses-419!2sco!4v1613492327615!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</div>

@stop