<?php
require_once "./cs/Soldier.php";
require_once "./cs/Gun.php";
use cs\{Rifle,Handgun,MachineGun};
use cs\{AUG,AWM};
use cs\Soldier;
use cs\{Snipper};
$sanMao=new Snipper();
$sanMao->setGun(new AUG());
$sanMao->killEnemy();
$sanMao->setGun(new AWM());
$sanMao->killEnemy();
