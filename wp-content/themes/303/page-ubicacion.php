

<?php get_header(); ?>
    <section class="ubicacion">
        <div id="primary" class="content-area   row ">
            <div id="contenedor_mapa" class="row">
				<div class="col-8 small-12">
				<div id="googleMap" style="width: 100%; height: 400px;">_</div>
				</div>
				<div class="col-4 small-12" style="padding: 20px;">
				<h1>Ubicación</h1>
				Calle 19 No 3-03, Centro de Bogotá
				<h2>¿Cómo llegar?</h2>
				<strong>Transmilenio:</strong> Llegar a la Estación de Las Aguas o Universidades.
				<strong> Bus:</strong> Cualquiera que diga Germania o Luis A. Arango

				</div>
				</div>


        </div>
    </section>


    <script>// <![CDATA[
function myMap() { var uluru = {lat: 4.602988, lng: -74.068351}; var map = new google.maps.Map(document.getElementById('googleMap'), { zoom: 20, center: uluru }); var marker = new google.maps.Marker({ position: uluru, map: map,icon: 'http://barsotano303.com/wp-content/themes/303/assets/images/logo_menu.svg'
 }); }
// ]]></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZO_mB7TA-ejRw4QXMkU12tC5umDgsgNw&amp;callback=myMap"></script>

<?php get_footer(); ?>