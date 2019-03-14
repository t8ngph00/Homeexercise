
<?php

class Staff extends Persons
{

    function __construct()
    {

    }

  private $vacancy;



  
    public function getvacancy()
    {
        return $this->vacancy;
    }
    public function setvacancy($param)

    {

       $this->vacancy=$param;

    }



}



?>