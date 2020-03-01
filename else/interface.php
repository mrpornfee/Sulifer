<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/2/10
 * Time: 18:23
 */
interface Person{
    public  function Identity();
}
class Student implements Person{
    public function  Identity()
    {
        // TODO: Implement Identity() method.
        echo '人员身份：学生<br>';
    }
}

class Teacher implements Person{
    public function Identity()
    {
        // TODO: Implement Identity() method.
        echo '人员身份：教师<br>';
    }
}

class PersonMessage{
    public function showMessage(Person $person){
        $person->Identity();
    }
}

$student=new Student();
$teacher=new Teacher();
$teacherMs=new PersonMessage();
$studentMs=new PersonMessage();
$teacherMs->showMessage($teacher);
$studentMs->showMessage($student);
