<?php

function getAllPuppies()
{
    return "SELECT * FROM `puppies`";
}
function getAllPuppiesOrderLitter()
{
    return "SELECT * FROM `puppies` ORDER BY `litter` DESC";
}
function createPuppy()
{
    return "INSERT INTO `puppies` 
    (name, litter, sex, color, available, mainImg, display) 
    VALUES (:name, :litter, :sex, :color, :available, :mainImg, :display)";
}
function managePuppy()
{
    return "UPDATE `puppies` WHERE puppyID = :puppyID";
}
