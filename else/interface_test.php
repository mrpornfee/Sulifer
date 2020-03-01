<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/2/29
 * Time: 13:26
 */

 abstract class AbstractGun{
    public abstract  function shoot();
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

class MachineGun extends AbstractGun{
    public function shoot()
    {
        echo '机枪射击.....'.PHP_EOL;
    }
}

