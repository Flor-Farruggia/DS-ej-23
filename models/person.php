<?php

class Person {
    public $name;
    public $address;
    public $dni;
    public $age;
    public $nationality;

    public function showData(){
        echo 'The information of this person is: '.'<br>';
        echo 'Name: '.$this->name.'<br>';
        echo 'Address: '.$this->address.'<br>';
        echo 'DNI: '.$this->dni.'<br>';
        echo 'Age: '.$this->age.'<br>';
        echo 'The information about his nation is: '.'<br>';
        echo 'Id: '.$this->nationality->id.'<br>';
        echo 'Description: '.$this->nationality->description;
    }
}