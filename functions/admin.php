<?php

    /***************************************************************************
    This page maintain all the functions for the Admin
    ***************************************************************************/

    //page joining class
    require_once '../Config/config.php';
    require_once '../Classes/pageContent.php';
    require_once '../Classes/database.php';
    require_once '../Classes/Session.php';


    // object of pageContent class
    $page_content = new pageContent();
    // object of Database class
    $db = new Database();
