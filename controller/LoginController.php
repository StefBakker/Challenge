<?php

require(ROOT . "model/LoginModel.php");

function index()
{
    render("templates/header");
    render("loginpage/index");
}

