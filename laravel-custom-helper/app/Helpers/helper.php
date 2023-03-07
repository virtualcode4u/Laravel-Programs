<?php 

use Carbon\Carbon;

function getMsg()
{
    return "Welcome to Custom Helper Message From Write2Prorgram";
}

function getName($name)
{
    return "Welcome to Write2Program! How r u? ".$name; 
}


function getCurDate()
{
    return Carbon::now()->format('d-m-Y'); 
}