<?php

function getAllPuppies()
{
    return "SELECT * FROM `puppies`";
}
function getAllPuppiesOrderLitter()
{
    return "SELECT * FROM `puppies` ORDER BY `litter` DESC";
}
function getAllPuppiesFromLitter()
{
    return "SELECT * FROM `puppies` WHERE litter = :litterID ORDER BY `litter` DESC";
}
function getPuppyFromId()
{
    return "SELECT * FROM `puppies` WHERE puppyID = :puppyID";
}
function createPuppy()
{
    return "INSERT INTO `puppies` 
    (name, litter, sex, color, available, mainImg, display) 
    VALUES (:name, :litter, :sex, :color, :available, :mainImg, :display)";
}
function managePuppy()
{
    return "UPDATE `puppies` SET name = :name, litter = :litter, sex = :sex, color = :color, available = :available, mainImg = :mainImg, display = :display WHERE puppyID = :puppyID";
}

function savePuppyDiapo()
{
    return "INSERT INTO `diapos` (path, puppyID) VALUES (:path, :puppyID)";
}
function deletePuppyMales()
{
    return "DELETE FROM `puppies` WHERE litter = :litterID AND sex = 'Male'";
}

function deletePuppyFemales()
{
    return "DELETE FROM `puppies` WHERE litter = :litterID AND sex = 'Female'";
}
