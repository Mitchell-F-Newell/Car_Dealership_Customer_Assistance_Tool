<html>
<body>
<?php
$arr_data = array(); //Create empty array
try{
	//get form data
	$formData = array('firstName' => $_POST['fname'],
					  'lastName' => $_POST['lname'],
					  'emailAddress' => $_POST['email'],
					  );

	//Check inputs are valid
    //NOTE: We will add statements and incorporate vehicle lists as more models are added to the System
    if(firstName != NULL && lastName != NULL && emailAddress != NULL){

             header('Location: submit.html');
             exit;
    }else{
       echo 'Information incorrectly passed!';
       exit;
    }
}catch (Exception $e) {
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
</body>
</html>
