<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package worldmediainteractive
 */

get_header();?>

<div class="page-header-info">
    <h2>The 2018</h2>
    <h1>USA Fun-Finder<sup>TM</sup></h1>
    <h3>Choose an event, get a car match!</h3>

    <div class="audi">
        <img src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/1478719005536.png">
    </div>

</div>



<div class="button">
    <button class="active"><h3>Search For City</h3></button>
    <button><h3>Find On Map</h3></button>
</div>


<!-- Locator Start -->

<div class="locator">
    <h3>FIND YOUR CITY</h3>
    <input type="text" placeholder="Palm Springs, CA">
    <img src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/WMI_LOCATOR.png">
</div>

<!-- Locator End -->


<!-- Begin List Results -->

<h3 class="results-hdr">LOOK WHAT WE FOUND FOR YOU!</h3>


<div class="results">
    <div class="result-1">
        <div class="result-location">
            <h4>COACHELLA</h4>
            <h3>Music Festival - Indio, California</h3>
        </div>

        <div class="result-miles">
            <h4>25</h4>
            <h3>miles</h3>
        </div>

        <div class="result-img">
            <img class="accent-img" src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/balloon.png">
            <img class="main-img" src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/coachella-header.jpg">
            <h3>BEST ENJOYED WITH:</h3>
        </div>

        <div class="result-car-info">
            <h3>Jeep Renegade</h3>
            <img src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/1452898157384.png">
        </div>

        <div class="reserve-button">
            <h3>Reserve Now</h3>
        </div>
    </div>


    <div class="result-2">
        <div class="result-location">
            <h4>K-Swiss Desert Smash</h4>
            <h3>Sports - Palm Springs, California</h3>
        </div>

        <div class="result-miles">
            <h4>0.3</h4>
            <h3>miles</h3>
        </div>

        <div class="result-img">
            <img class="accent-img" src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/tennis_PNG10405.png">
            <img class="main-img" src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/tennis-3.jpg">
            <h3>BEST ENJOYED WITH:</h3>
        </div>

        <div class="result-car-info">
            <h3>Porsche Boxter</h3>
            <img src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/2013-porsche-boxster-s-convertible-angular-front.png">
        </div>

        <div class="reserve-button">
            <h3>Reserve Now</h3>
        </div>
    </div>
</div>

<!-- End List Results -->



<?php get_footer();?>