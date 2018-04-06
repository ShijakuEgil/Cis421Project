<?php
/*
    @package CIS421 project
    @author Egil Shijaku, Mighty_j ADD YOUR NAMES HERE GUYS

    LOGOUT OF THE CURENT USER
*/
session_destroy();
header('Location:index.php');
