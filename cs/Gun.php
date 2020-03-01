<?php
namespace cs;

abstract class AbstractGun{
    public abstract function shoot();
}

class Handgun extends AbstractGun{
    public function shoot()
    {
        echo '手枪射击.....'.PHP_EOL;
    }
}

class Rifle extends AbstractGun{
    public function shoot()
    {
        echo '步枪射击.....'.PHP_EOL;
    }
}

class  MachineGun extends AbstractGun{
    public function shoot()
    {
        echo '机枪射击.....'.PHP_EOL;
    }
}

class AUG extends Rifle
{
//狙击枪都携带一个精准的望远镜
public function zoomOut()
{
echo "通过望远镜察看敌人...".PHP_EOL;
}

public function shoot(){
echo "AUG射击...".PHP_EOL;
}

}

class AWM extends Rifle
{
//狙击枪都携带一个精准的望远镜
    public function zoomOut()
    {
        echo "通过望远镜察看敌人...".PHP_EOL;
    }

    public function shoot(){
        echo "AWM射击...".PHP_EOL;
    }

}