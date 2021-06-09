<?php
session_start();

// initializing variables
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'RISHABHp@15', 'yk_ex');

// REGISTER USER
if (isset($_POST['insert'])) {
  // receive all input values from the form
  $client_id = mysqli_real_escape_string($db, $_POST['client_id']);
  $Client_name = mysqli_real_escape_string($db, $_POST['Client_name']);
  $contact_person_name = mysqli_real_escape_string($db, $_POST['contact_person_name']);
  $contact_person_designation = mysqli_real_escape_string($db, $_POST['contact_person_designation']);
  $contact_person_number = mysqli_real_escape_string($db, $_POST['contact_person_number']);
	
  $position_status = mysqli_real_escape_string($db, $_POST['position_status']);
  $position_status = "";
  $agreemeent_status = mysqli_real_escape_string($db, $_POST['agreemeent_status']);
  $agreemeent_status = "";	
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);
  $currentlocation = mysqli_real_escape_string($db, $_POST['currentlocation']);
  $currentdesignation = mysqli_real_escape_string($db, $_POST['currentdesignation']);
  $educationqualification = mysqli_real_escape_string($db, $_POST['educationqualification']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $nameofrecruiter = mysqli_real_escape_string($db, $_POST['nameofrecruiter']);
  $feedback = mysqli_real_escape_string($db, $_POST['feedback']);
  $noticperiordstatus = mysqli_real_escape_string($db, $_POST['noticperiordstatus']);
  $noticperiordfinal = "";
  $anp = (array)$_POST['noticperiord'];
  
  If(!empty($anp) && is_array($anp)){
	//Loop through the array of checkbox values.
	if(!empty($_POST['noticperiord'])){
		// Loop to store and display values of individual checked checkbox.
		foreach($_POST['noticperiord'] as $selected){
			$noticperiordfinal.= "/".$selected;
		}
	}
}
