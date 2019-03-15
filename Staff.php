
<?php

class Staff extends Persons
{


  private $vacancy;
  function __construct($firstName, $lastName, $yearOfBirth, $vacancy)
  {
      $this->setfirstName($firstName);
      $this->setlastName($lastName);
      $this->setyearOfBirth($yearOfBirth);
      $this->vacancy = $vacancy;
  }


  
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