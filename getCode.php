<?php

$url = "https://raw.githubusercontent.com/samshad/UVa/master/10221%20-%20Satellites.cpp";
//$url = "https://raw.githubusercontent.com/samshad/Jumping_Monkey/master/BandorerFalafali/src/mundu/Matha.java";

if(isset($_REQUEST['num'])) $id = htmlentities(trim($_REQUEST['num']), ENT_QUOTES);

if($id == 1) $url = "https://raw.githubusercontent.com/samshad/UVa/master/10222%20-%20Decode%20the%20Mad%20man.cpp";
if($id == 2) $url = "https://raw.githubusercontent.com/aminul-haq/Java/master/Data%20Structures/BinaryIndexTree.java";
if($id == 3) $url = "https://raw.githubusercontent.com/samshad/UVa/master/10223%20-%20How%20many%20nodes.cpp";
if($id == 4) $url = "https://raw.githubusercontent.com/samshad/UVa/master/10226-Hardwood%20Species.cpp";

echo htmlentities(file_get_contents($url));