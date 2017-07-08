<?php
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>

<?php
while (have_posts()) : the_post(); ?>
    <section class="contacto">

        <div class="contacto-form">
            <h3>Contáctenos</h3>
            <p style="padding: 0 20px">¿Tiene algo que contarnos? aqui puedes contarnos tu experiencia, felicitarnos, proponernos y dar tu punto
                de vista. para nosotros es muy importante saber lo que piensas.</p>
            <?php the_content() ?>
        </div>
    </section>
<?php endwhile; ?>

    <script>// <![CDATA[
        function myMap() {
            var uluru = {lat: 4.602988, lng: -74.068351};
            var map = new google.maps.Map(document.getElementById('googleMap'), {zoom: 20, center: uluru});
            var marker = new google.maps.Marker({
                position: uluru, map: map, icon: 'http://303.app/wp-content/themes/303/assets/images/logo_menu.svg'
            });
        }
        // ]]></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZO_mB7TA-ejRw4QXMkU12tC5umDgsgNw&amp;callback=myMap"></script>

<?php get_footer() ?>