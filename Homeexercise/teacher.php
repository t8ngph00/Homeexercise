
<?php

/**

 *

 */

class teacher extends Persons
{

    
  

  private $teachingSubjects=array();

  private $department;
  function __construct($firstName, $lastName, $yearOfBirth, $teachingSubjects, $department)
    {
        $this->setfirstName($firstName);
        $this->setlastName($lastName);
        $this->setyearOfBirth($yearOfBirth);
        $this->teachingSubjects = $teachingSubjects;
        $this->department = $department;
    }


    public function getteachingSubjects()

    {

        return $this->teachingSubjects;

    }

    public function setteachingSubjects($param)

    {

        array_push($this->teachingSubjects,$param);

    }
    public function getdepartment()
    {
        return $this->department;
    }
    public function setdepartment($param)
    {
        $this->department=$param;
    }



}



?>