<?php

require(ROOT . "model/HomeModel.php");

    function index()
    {
        render("templates/header");
        render("home/index");
        render("templates/footer");

    }