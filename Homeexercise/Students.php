
<?php

/**

 *

 */

class Students extends Persons
{

    private $selectedCourses=array();
    private $greditPoints;

    function __construct($firstName, $lastName, $yearOfBirth, $selectedCourses, $greditPoints)
    {
        $this->setfirstName($firstName);
        $this->setlastName($lastName);
        $this->setyearOfBirth($yearOfBirth);
        $this->selectedCourses = $selectedCourses;
        $this->greditPoints = $greditPoints;
    }




    public function getselectedCourses()

    {

        return $this->selectedCourses;

    }

    public function setselectedCourses($param)

    {

        array_push($this->selectedCourses,$param);

    }
    public function getgreditPoints()
    {
        return $this->greditPoints;
    }
    public function setgreditPoints($param)
    {
        $this->greditPoints=5;
    }



}



?>