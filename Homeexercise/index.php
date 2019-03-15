<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//$animalobject = new Animal();
//$animalobject->setColor("red");
//echo 'The color of the animal is '.$animalobject->getColor();
//echo '<h2>First Cat</h2>';
/*
$myCat = new Cat();
$myCat->setColor('Black');
$myCat->setWeight('5 kg');
$myCat->setOwner('Jim Smith');

echo 'The color of the cat is '. $myCat->getColor();
echo '<br> The weight of the cat is '. $myCat->getWeight();
echo '<br> The Owner of the cat is '. $myCat->getOwner();

echo '<h2>Second Cat</h2>';
$anotherCat = new Cat('Orange','6 kg','Donald T');
echo 'The color of the cat is '. $anotherCat->getColor();
echo '<br> The weight of the cat is '. $anotherCat->getWeight();
echo '<br> The Owner of the cat is '. $anotherCat->getOwner();

echo '<h2>Dog</h2>';
$aDog = new Dog();
$aDog->setColor('Brown');
$aDog->setWeight('15 kg');
$aDog->setregisterNumber('1234');

echo '<br>The color of the Dog is '. $aDog->getColor();
echo '<br>The register Number of the Dog is '.$aDog->getregisterNumber();
*/
echo '<h2>Student</h2>';

$astudent = new Students();
$astudent->setfirstName('Lisa');
$astudent->setlastName('Jones');
$astudent->setyearOfBirth('1999');
$astudent->setselectedCourses('JavaScript programming');
$astudent->setselectedCourses('PHP programming');
$astudent->setgreditPoints('5');

$coursesOfLisa =$astudent->getselectedCourses();
echo ' Student '.$astudent->getfirstName().' '.$astudent->getlastName().', born in'.$astudent->getyearOfBirth().'. GreditPoints : '.$astudent->getgreditPoints();
echo'<br>';
echo 'My age '.$astudent->getAge();
echo '<br>';
print_r($coursesOfLisa);

echo '<h2>Teacher</h2>';
$ateacher = new teacher();
$ateacher->setfirstName('Bill');
$ateacher->setlastName('Gates');
$ateacher->setyearOfBirth(1955);
$ateacher->setteachingSubjects('Software Development');
$ateacher->setteachingSubjects('Mathemathic');
$ateacher->setdepartment('Lecture ');
$teachingSubjectsOfBillGates =$ateacher->getteachingSubjects();
echo ' Teacher '.$ateacher->getfirstName().' '.$ateacher->getlastName().', born in '.$ateacher->getyearOfBirth().'. Department : '.$ateacher->getdepartment();
echo '<br>';

echo ' My age '. $ateacher->getAge();
echo '<br>';
print_r($teachingSubjectsOfBillGates);

echo '<h2>Staff 1</h2>';

$astaff = new Staff();
$astaff->setfirstName('QUYNH');
$astaff->setlastName('NGUYEN PHUONG');
$astaff->setyearOfBirth(2000);
$astaff->setvacancy('Cleanner');

echo ' Staff '.$astaff->getlastName().' '.$astaff->getfirstName().', born in '.$astaff->getyearOfBirth().'. Vacancy :'.$astaff->getvacancy();
echo '<br>';
echo 'My age '.$astaff->getAge();
echo '<br>';

echo '<h2>Staff 2</h2>';

$astaff = new Staff();
$astaff->setfirstName('Fred');
$astaff->setlastName('Smith');
$astaff->setyearOfBirth(1996);
$astaff->setvacancy('Caretaker');

echo ' Staff '.$astaff->getlastName().' '.$astaff->getfirstName().', born in '.$astaff->getyearOfBirth().'. Vacancy :'.$astaff->getvacancy();
echo '<br>';
echo 'My age '.$astaff->getAge();
echo '<br>';



?> 