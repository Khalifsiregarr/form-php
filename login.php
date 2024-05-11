<?php

    if (isset($_POST['username']) && isset($_POST['password'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if (empty($username)) {
            header("Location: username.php?error=hey you forget input username?");
            exit();
        }else if(empty($password)){
            header("Location: username.php?error=aha don't forget your pass");
            exit();
        }else {
            echo "can't login please input your data";
        }

    }else {  
        header("Location: username.php");
        exit();
    }