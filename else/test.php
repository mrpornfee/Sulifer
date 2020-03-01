<?php
// 用户类
class user implements JsonSerializable{

    public $id = 1;
    public $name = 'fdipzone';
    public $profession = 'programmer';
    private $age = 18;

    // 实现的抽象类方法，指定需要被序列化JSON的数据
    public function jsonSerialize() {
        $data = [];
        foreach ($this as $key=>$val){
            if ($val !== null) $data[$key] = $val;
        }
        return $data;
    }

}

// 对象
$oUser = new User;

// json_encode
$json = json_encode($oUser);
echo $json;

// json_decode
$oUser = json_decode($json);
var_dump($oUser);

