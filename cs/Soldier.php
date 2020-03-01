<?php
namespace cs;

class Soldier
{
    protected  $gun;
    public function setGun(AbstractGun $_gun){
        $this->gun=$_gun;
}
    public function killEnemy(){
        echo '士兵开始杀人......'.PHP_EOL;
        $this->gun->shoot();
    }
}

class Snipper extends  Soldier {
    public  function  killEnemy()
    {
        $this->gun->zoomout();
        $this->gun->shoot();
    }
}