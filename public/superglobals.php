<?php

$num = 2;

echo $num . PHP_EOL;

//the $GLOBAL superglobal takes a variable defined in global scope, takes the string of that scope (if $x is the variable, 'x' gets put in the superglobal like $GLOBALS['x']), then the whole thing ($GLOBALS['x']) can be used in a function
function double_global_num() {
  $GLOBALS['num'] *= 2;
  echo $GLOBALS['num'] . PHP_EOL;
};
function set_query($query) {
  $_GET['query'] = $query;
  echo $query . PHP_EOL;
};
function set_email($email) {
  $_POST['email'] = $email; 
  echo $email . PHP_EOL;
};

double_global_num();
set_query('hello');
set_email('email');



// $_GET

$_GET['rank'] = '7';
$_GET['author'] = 'donaldsebleung';
$_GET['keywords'] = 'php';
$_GET['rating'] = '5';

function user_script() {
  $GLOBALS['avocado'] = htmlspecialchars($_GET['avocado']);
  $GLOBALS['banana'] = htmlspecialchars($_GET['banana']);
  $GLOBALS['dragonfruit'] = htmlspecialchars($_GET['dragonfruit']); 
};


// $_POST


$_POST['name'] === "Jane Anderson";
$_POST['email'] === "ja1234@example.tld";
$_POST['message'] === "Hello World!";

function user_script() {
  if($_SERVER['REQUEST_METHOD'] === "POST") {
    if(empty($_POST['name'])) {
      echo "<span style=\"color: red\">Name field is required</span>";
    } elseif(!is_numeric($_POST['age'])) {
      echo "<span style=\"color: red\">Invalid Age provided</span>";
    } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo "<span style=\"color: red\">Email Address is Invalid</span>";
    } elseif(!is_int($_POST['rating']) && (floatval($_POST['rating']) > 10 || floatval($_POST['rating']) < 1)) {
      echo "<span style=\"color: red\">Rating is invalid, please provide a number from 1 to 10</span>";
    } else {
	    $name = $_POST['name'];
	    $age = $_POST['age'];
	    $email = $_POST['email'];
	    $rating = $_POST['rating'];
	    $compliments = $_POST['compliments'];
	    $criticism = $_POST['criticism'];
	    
	    $name = trim($name);
	    $name = stripslashes($name);
	    $name = htmlspecialchars($name);
	    
	    $age = trim($age);
	    $age = stripslashes($age);
	    $age = htmlspecialchars($age);
	    
	    $email = trim($email);
	    $email = stripslashes($email);
	    $email = htmlspecialchars($email);
	    
	    $rating = trim($rating);
	    $rating = stripslashes($rating);
	    $rating = htmlspecialchars($rating);
	    
	    $compliments = trim($compliements);
	    $compliments = stripslashes($compliements);
	    $compliments = htmlspecialchars($compliements);
	    
	    $criticism = trim($criticism);
	    $criticism = stripslashes($criticism);
	    $criticism = htmlspecialchars($criticism);
	    
	    echo "<p>Your name: $name</p>";
	    echo "<p>Your age: $age</p>";
	    echo "<p>Your email address: $email</p>";
	    echo "<p>Your rating: $rating</p>";
	    echo "<p>Your compliments: $compliments</p>";
	    echo "<p>Your criticism: $criticism</p>";
  	}
  }
}



?>