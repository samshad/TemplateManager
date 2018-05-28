<?php
/**
 * Created by PhpStorm.
 * User: Samshad
 * Date: 5/28/2018
 * Time: 1:33 PM
 */

$url = "https://raw.githubusercontent.com/samshad/UVa/master/10221%20-%20Satellites.cpp";
echo htmlentities(file_get_contents($url));