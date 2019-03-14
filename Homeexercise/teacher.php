
<?php

/**

 *

 */

class teacher extends Persons
{

    function __construct()
    {

    }

  private $vacancy;

  private $teachingSubjects=array();

  private $department;


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