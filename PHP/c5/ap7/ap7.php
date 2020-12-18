<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicatia 7</title>
    <style>
        .form{
            margin: 0 auto;
            margin-top: 100px;
            background-color: rgb(255, 250, 244);
            border-radius: 10px;
            width: 280px;
            text-align: center;
            border: 1px solid rgb(190, 189, 189);
        }

        .message-ok{
            margin: 0 auto;
            margin-top: 20px;
            background-color: rgb(16, 189, 54);
            border-radius: 10px;
            width: 280px;
            text-align: center;
            border: 1px solid rgb(190, 189, 189);
            color: white;
        }

        .message-bad{
            margin: 0 auto;
            margin-top: 20px;
            background-color: rgb(214, 49, 8);
            border-radius: 10px;
            width: 280px;
            text-align: center;
            border: 1px solid rgb(190, 189, 189);
            color: white;
        }


    </style>
</head>
<body>

    <div class="form">
        <h1>Login Form</h1>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
            <label for=""><b>Username:</b></label><br><br>
            <input type="text" name="user" placeholder="Enter your username" required><br><br><br>

            <label for=""><b>Password:</b></label><br><br>
            <input type="password" name="pass" placeholder="Enter your password" required><br><br>

            <input type="submit" name="submit" value="Login"><br><br>
        </form>
    </div>

    <?php
        if(isset($_POST['user'])){
            $username = $_POST['user'];
            $password = $_POST['pass'];

            $utilizatori= array(
                0=> array('username'=>'geani','password'=>'geanie','nivelacces'=>'user'),
                1=> array('username'=>'admin','password'=>654321,'nivelacces'=>'administrator'),
                2=> array('username'=>'geani','password'=>'geanie','nivelacces'=>'user'),
                3=> array('username'=>'geani','password'=>'geanie','nivelacces'=>'user'),
                4=> array('username'=>'geani','password'=>'geanie','nivelacces'=>'user'),
                5=> array('username'=>'ceo','password'=>123,'nivelacces'=>'user'),
                6=> array('username'=>'admin','password'=>654321,'nivelacces'=>'administrator'),
                7=> array('username'=>'bast','password'=>123,'nivelacces'=>'administrator' ),
                8=> array('username'=>'bandi','password'=>123,'nivelacces'=>'administrator' ),
                9=> array('username'=>'ceo','password'=>123,'nivelacces'=>'user'),
            );

            //generate array last key (PHP 7.2.0)
            $utilizatori_last_index1 = array_keys($utilizatori);
            $utilizatori_last_index2 = end($utilizatori_last_index1);

            //"is duplicate?" verifier
            $count = 0;
            for($i = 0; $i<= $utilizatori_last_index2; $i++){
                if($username  == $utilizatori[$i]['username']){
                    $count++;
                    //echo 'Gasit la pozitia: ' . $i .  " <br>";
                }
                if($i == $utilizatori_last_index2){
                    break;
                }
            }
            //echo "<hr>" . 'Ai in baza de date de ' . $count . ' ori userul ' . "<b>$username</b>"   ;

            //throw validation messages
            $is_valid = 0;
            if($count >= 2){
                echo "<div class='message-bad'>User duplicat in baza de date</div>";     
            }else{
                for($p = 0; $p<=$utilizatori_last_index2; $p++){
                    if($username == $utilizatori[$p]['username'] && $password == $utilizatori[$p]['password']){
                        $is_valid = 1;
                        echo "<div class='message-ok'>Salut $username </div>";
                        break;
                    }else{
                        $is_valid = 0;
                        continue;
                    }  
                }
                if($is_valid == 0){
                    echo "<div class='message-bad'>Invalid User! Introduceti datele de logare din nou</div>";
                }
            }
        }
    ?>
</body>
</html>