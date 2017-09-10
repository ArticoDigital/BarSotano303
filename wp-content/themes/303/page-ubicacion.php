

<?php get_header(); ?>
    <section class="ubicacion">
        <div id="primary" class="content-area   row ">
            <div id="contenedor_mapa" class="row">
				<div class="col-8 small-12">
				<div id="googleMap" style="width: 100%; height: 400px;">_</div>
				</div>
				<div class="col-4 small-12" style="padding: 20px;">
				<h1 class="text_centered">Ubicación</h1>
				<p>Calle 19 No 3-03, Centro de Bogotá</p>
				<h2 class="text_centered">¿COMO LLEGAR?</h2>
				<p>Estamos Ubicados En La Esquina De La Calle 19 Con Carrera 3ra
				<strong>TRANSMILENIO:</strong> Pasos Abajo de la Salida Norte Estación las Aguas.
				</p>
				<h2 class="text_centered">HORARIOS</h2><p>Lunes a Sábado de 10 am a 3 am y Domingos de 12m a 12am</p>
				<h2 class="text_centered">FORMAS DE PAGO</h2><p>Efectivo y Tarjetas Débito  O Crédito. </p>
				 <h2 class="text_centered">ZONA WIFI</h2>

				</div>
				</div>


        </div>
    </section>
<style type="text/css">
	.text_centered{
		text-align: center;
		padding: 5px 10px;
	}
</style>
    <script>// <![CDATA[
function myMap() { 
	var uluru = {lat: 4.6029334, lng: -74.0683986}; 
	var map = new google.maps.Map(document.getElementById('googleMap'), { 
		zoom: 18, 
		center: uluru,
        scrollwheel: false, 
    }); 
	var marker = new google.maps.Marker({ 

							position: uluru, 
							map: map,icon: '/wp-content/themes/303/assets/images/logo_menu.svg'}); 
	marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
    var infowindow = new google.maps.InfoWindow({
                content: '<h4 >Bar Sótano 303</h4>' +
                '<div id="bodyContent">' +
                '<p>Calle 19 No 3-03, Centro de Bogotá</p>' +
                '</div>'
            });
	}

          
// ]]></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZO_mB7TA-ejRw4QXMkU12tC5umDgsgNw&amp;callback=myMap"></script>

<?php get_footer(); ?>