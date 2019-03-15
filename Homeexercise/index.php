<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


echo '<h2>Student</h2>';

$astudent = new Students("Lisa", "Jones", "1999", ["JavaScript programming", "PHP Programming"], "5");

$coursesOfLisa =$astudent->getselectedCourses();
echo ' Student '.$astudent->getfirstName().' '.$astudent->getlastName().', born in'.$astudent->getyearOfBirth().'. GreditPoints : '.$astudent->getgreditPoints();
echo'<br>';
echo 'My age '.$astudent->getAge();
echo '<br>';
print_r($coursesOfLisa);

echo '<h2>Teacher</h2>';
$ateacher = new teacher("Bill", "Gates", "1955", ["Software Development", "Mathemathic"], "Lecture");

$teachingSubjectsOfBillGates =$ateacher->getteachingSubjects();
echo ' Teacher '.$ateacher->getfirstName().' '.$ateacher->getlastName().', born in '.$ateacher->getyearOfBirth().'. Department : '.$ateacher->getdepartment();
echo '<br>';

echo ' My age '. $ateacher->getAge();
echo '<br>';
print_r($teachingSubjectsOfBillGates);

echo '<h2>Staff 1</h2>';

$astaff = new Staff("Daisy", "Swift", "2000", "Cleaner");


echo ' Staff '.$astaff->getfirstName().' '.$astaff->getlastName().', born in '.$astaff->getyearOfBirth().'. Vacancy :'.$astaff->getvacancy();
echo '<br>';
echo 'My age '.$astaff->getAge();
echo '<br>';

echo '<h2>Staff 2</h2>';

$astaff= new Staff("Fred", "Smith", "1985", "Caretaker");


echo ' Staff '.$astaff->getfirstName().' '.$astaff->getlastName().', born in '.$astaff->getyearOfBirth().'. Vacancy :'.$astaff->getvacancy();
echo '<br>';
echo 'My age '.$astaff->getAge();
echo '<br>';



?> 