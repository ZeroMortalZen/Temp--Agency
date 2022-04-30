<?php


interface CVInterface
{
public function getFirstname();
public function getSurname();
public function getAge();
public function getAddress();
public function getEmail();
public function getNumber();
public function getPerviousJobs();
public function getEducation();
public function getSkills();

//Set Functions
    public function setFirstname($firstname);
    public function setSurname($Surname);
    public function setAge($Age);
    public function setAddress($Address);
    public function setEmail($Email);
    public function seNumber($Number);
}