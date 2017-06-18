

<?php get_header(); ?>
<section class="ubicacion">
    <div id="primary" class="content-area   row ">
        sddfsdfsd
        <?php the_content(); ?>


    </div>
</section>


<script>// <![CDATA[
    function myMap() { var uluru = {lat: 4.602988, lng: -74.068351}; var map = new google.maps.Map(document.getElementById('googleMap'), { zoom: 20, center: uluru }); var marker = new google.maps.Marker({ position: uluru, map: map,icon: 'http://303.app/wp-content/themes/303/assets/images/logo_menu.svg'
    }); }
    // ]]></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZO_mB7TA-ejRw4QXMkU12tC5umDgsgNw&amp;callback=myMap"></script>

<?php get_footer(); ?>