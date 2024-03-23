<?php

    require('model/userModel.php');
    require('model/testimonialsModel.php');

    function home() {
        $requete = getUsers();

        require('view/listUserView.php');
    }

    function testimonials() {
        $requete = getTestimonials();

        require('view/listTestimonialsView.php');
    }