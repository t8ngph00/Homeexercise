<?php


abstract class Persons
{
private $firstName;
private $lastName;
private $yearOfBirth;

public function setfirstName($value)
{
$this->firstName=$value;
} 
public function setlastName($value)
{
$this->lastName=$value;    
}
public function setyearOfBirth($value)
{
$this->yearOfBirth=$value;
}
public function getfirstName()
{
    return $this->firstName;
}
public function getlastName()
{
    return $this->lastName;
}
public function getyearOfBirth()
{   
    return $this->yearOfBirth;
}
public function getAge()
{
return date('Y')-$this->yearOfBirth;
}


}



?>