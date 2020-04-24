<?php
    require_once('functions/frontend.php');

    $page_content->getIndexHeader();
    $page_content->getContent('slider');
    $page_content->getContent('trending');
    $page_content->getContent('section1');
    $page_content->getContent('newspost');
    $page_content->getContent('section2');
    $page_content->getFooter();
