if(isset($_POST["reset-password-submit"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if(empty($password) || empty($passwordRepeat)){
        header("Location: ../create-new-password.php?newpwd=empty");
        exit();
    } else if ($password != $passwordRepeat){
        header("Location: ../create-new-password.php?newpwd=pwdnotsame");
        exit();
    }

    $currentDate = date("U");

    require 'Database.php'; 

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ";
    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "s", $selector); //cho biet nhung gi dau ? se duoc thay the bang trc khi thuc hien cau lenh
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)){
            echo "You need to re-submit your reset request.";
            exit();
        }else{

            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if($tokenCheck === false){
                echo "You need to re-submit your reset request.";
                exit();
            } elseif ($tokenCheck === true){

                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM users WHERE emailUser=?;";
                $stmt = mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error!";
                    exit();
                } else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                     if(!$row = mysqli_fetch_assoc($result)){
                     echo "There was an error.";
                     exit();
                     }else{
                          
                        $sql = "UPDATE users SET pwdUsers=? WHERE emailUser=?";
                        $stmt = mysqli_stmt_init($connect);
                        if(!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "There was an error!";
                        exit();
                } else{
                    $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $tokenEmail);
                    mysqli_stmt_execute($stmt);


                    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                    $stmt = mysqli_stmt_init($connect);
                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "There was an error!";
                        exit();
                    } else{
                        mysqli_stmt_bind_param($stmt, "s", $tokenEmail); 
                        mysqli_stmt_execute($stmt);
                        header("Location: ../login.php?newpwd=passwordupdated");
                    } 

                
                
                }


                     }
                }

            }

        }
    }
    
} else{
    header("Location:".URL);
}

