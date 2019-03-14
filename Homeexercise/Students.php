
<?php

/**

 *

 */

class Students extends Persons
{

    function __construct()
    {

    }


  private $selectedCourses=array();

  private $greditPoints;

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