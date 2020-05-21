<html>
<body>
<?php
$arr_data = array(); //Create empty array
try{
	//get form data
	$formData = array('autoType' => $_POST['vehicleType'],
					  'allSeason' => $_POST['drivingYear'],
					  'avgDist' => $_POST['drivingDuration'],
					  'economic' => $_POST['ecoFriendly'],
					  'efficiency' => $_POST['fuelEfficiency'],
                      'frequency' => $_POST['driveFrequency'],
                      'drivingType' => $_POST['driveType']
					  );

	//Check inputs are valid
    //NOTE: We will add statements and incorporate vehicle lists as more models are added to the System
    if(autoType != NULL && allSeason != NULL && avgDist != NULL && economic != NULL
        && efficiency != NULL && frequency != NULL && drivingType != NULL){

             header('Location: colors.html');
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
