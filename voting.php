<?php

 $age = 19;
 $hasPVC = true;
 $ward = "020";  

if(empty($age || $hasPVC || $ward)){
    echo "All fields must be entered correctly!";
} 
   

    elseif ($age <= 18) {
        echo "Age must be 18 years and above";
    }

    elseif ($hasPVC != true) {
        echo "You must have a PVC to vote";
    }

    elseif ($ward != "020") {
        echo "You cannot vote in this ward. Please check the ward locator for your ward";
    }

else {
    echo "<h1>You are eligible to vote.</h1>";
}
 ?> 