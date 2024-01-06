<?php

function getAllImages()
{
    return "SELECT * FROM `diapos`";
}
function getAllImagesFromReproId()
{
    return "SELECT * FROM `diapos` WHERE reproID = :reproID";
}
function getAllImagesFromPuppyId()
{
    return "SELECT * FROM `diapos` WHERE puppyID = :puppyID";
}