<?php
    if (isset($_POST['sub'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        echo "First Name: " . $firstname . "<br>" . "Last Name: " . $lastname;  
    }
?>