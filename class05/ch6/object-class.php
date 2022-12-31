<?php
require "class.team.php";

//create object from team class
$brazil = new Team("Brazil",5);
$brazil->addPlayer("Pele");
$brazil->addPlayer("Ronaldo");
$brazil->addPlayer("Rivaldo");
$brazil->addPlayer("Kaka");
$brazil->addPlayer("Roberto Karlos");
echo $brazil->showteaminfo();
$germany = new Team("Germany",4);
echo $germany->showteaminfo();
$argentina = new Team("Argentina",3);
echo $argentina->showteaminfo();

$bcb = new Team("Bangladesh Cricket Board",2);
$bcb->addPlayer("Akram Khan");
$bcb->addPlayer("Atahar Ali");
$bcb->addPlayer("Aminul Islam");
$bcb->addPlayer("Omar golla");
$bcb->addPlayer("Pilot");
$bcb->addPlayer("Ashraful");
echo $bcb->showteaminfo();
?>


