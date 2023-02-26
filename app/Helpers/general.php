<?php

define('PAGINATION_COUNT',10);

function getFolder(){
    return app()->getLocale()=='ar'? 'css-rtl':'css';
}

function uploadImage($folder,$image){
    $image->store('/',$folder); //laravel method called store that stores files
    $filename=$image->hashName();
    return $filename;
}
