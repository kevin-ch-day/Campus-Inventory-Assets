<?php

class Building{
	private $name
	private $city
	private $dateCreated

	function __construct($name, $city, $dateCreated){
		setName($name);
		setCity($city);
		setDateCreated($dateCreated);
	}
	
	function setName($name){
		$this->name = $name;
	}
	
	function getName(){
		$this->name;
	}
	
	function setCity($city){
		$this->city = $city;
	}
	
	function getCity(){
		$this->city;
	}
	
	function setDateCreated($dateCreated){
		$this->dateCreated = $dateCreated;
	}
	
	function getDateCreated){
		$this->dateCreated;
	}
}

class Person{
	private $fname;
	private $lname;
	
	function __construct($fname, $lname){
		setFirstName($fname);
		setLastName($lname);
	}
	
	function setFirstName($fname){
		$this->fname = $fname;
	}
	
	function getFirstName()
		return $this->fname;
	}
	
	function setLastName($lname){
		$this->lname = $lname;
	}
	
	function getLastName(){
		return $this->lname;
	}
}

class Student extends Person{
	private $gradYear;
	private $advisorId;
	private $dateCreated;
	
	function __construct($fname, $lname, $year, $id, $date){
		setFirstName($fname);
		setLastName($lname);
		setGradYear($year);
		setAdvisorId($id);
		setDateCreated($date);
	}
	
	function setGradYear($year){
		$this->gradYear = $year;
	}
	
	function getGradYear(){
		return $this->gradYear;
	}
	
	function setAdvisorId($id){
		$this->advisorId = $id;
	}
	
	function getAdvisorId(){
		return $this->advisorId;
	}
	
	function setDateCreated($date){
		$this->dateCreated = $date;
	}
	
	function getDateCreated(){
		$this->dateCreated;
	}
}

class Advisor extends Person{
	private $buildingId;
	private $dateCreated;
	
	function __construct($fname, $lname, $buildingId, $date){
		setFirstName($fname);
		setLastName($lname);
		setBuildingId($buildingId);
		setDateCreated($date);
	}
	
	function setBuildingId($id){
		$this->buildingId = $id;
	}
	
	function getBuildingId(){
		return $this->buildingId;
	}
	
	function setDateCreated($date){
		$this->dateCreated = $date;
	}
	
	function getDateCreated()
		return $this->$dateCreated;
	}
}

class Asset{
	private $assetId;
	private $serialNumber;
	private $brand;
	private $model;
	private $purchaseNumber;
	private $EOL_Date;
	private $dateCreated;
}

?>