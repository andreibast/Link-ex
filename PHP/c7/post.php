<?php 

//verifica daca formularul a fost completat sau nu. String-ul trebuie sa aiba aceeasi valoare trimisa din HTML.
$cheie= "cheie_secreta_generata_pe_sesiune";
if($cheie!==$_POST['hash'] ){
    echo 'Eroare CSRF';die;
}

include_once("connect.php"); 


$nume = '';
$prenume='';
$dataNasterii= '';
$telefon='';
$email='';
$parola='';
$linkPoza='c://xampp/htdocs/link-ex/PHP/c7/userimages/';
$linkPozaUpload ='';
$mesaj='';
$mess_error ='';


//validare (aici poate sa fie REGEX in locul ei)
if(isset($_POST['prenume']) && !empty($_POST['prenume']) && strlen($_POST['prenume'])>3){
    $prenume=trim($_POST['prenume']);
}
else{
    $error = true;
    $mess_error.='Prenumele nu a fost introdus!'."<br />";
}
if(isset($_POST['nume']) && !empty($_POST['nume'])){
    $nume= trim($_POST['nume']);
}
else{
    $error = true;
    $mess_error.='Numele nu a fost introdus!'."<br />";
}
if(isset($_POST['dataNasterii']) && !empty($_POST['dataNasterii'])){
    $dataNasterii= trim($_POST['dataNasterii']);
}
else{
    $error = true;
    $mess_error.='Data nasterii nu a fost introdusa corect!'."<br />";
}
if(isset($_POST['telefon']) && !empty($_POST['telefon'])){
    $telefon= trim($_POST['telefon']);
}
else{
    $error = true;
    $mess_error.='Telefonul nu a fost introdusa corect!'."<br />";
}
if(isset($_POST['email']) && !empty($_POST['email'])){
    $email= trim($_POST['email']);
}
else{
    $error = true;
    $mess_error.='Emailul nu a fost introdus!'."<br />";
}
if(isset($_POST['parola']) && !empty($_POST['parola'])){
    
        $parola= sha1(trim($_POST['parola'])); //aici criptam parola in SHA1
}
else{
    $error = true;
    $mess_error.='Parola nu a fost introdusa corect!'."<br />";
}


if(isset($_FILES['picture']) && !empty($_FILES['picture'])){
    $linkPozaUpload = $linkPoza . basename($_FILES['picture']['name']);
    if (move_uploaded_file($_FILES['picture']['tmp_name'], $linkPozaUpload)) {
        echo "Imaginea a fost incarcata cu succes.\n";
      } else {
         echo "Incarcarea imaginii a esuat";
      }
}
else{
    $error = true;
    $mess_error.='Mesajul nu a fost introdus corect!'."<br />";
}


if(isset($_POST['textarea']) && !empty($_POST['textarea'])){
    $mesaj= trim($_POST['textarea']);
}
else{
    $error = true;
    $mess_error.='Mesajul nu a fost introdus corect!'."<br />";
}

if(isset($error) && $error===true){
    echo '<div style="color:red;">'.$mess_error.'</div>';
    include("index.php");
}else{
    //datele au fost introduse corect
    $sql = "INSERT INTO users2 (nume, prenume, dataNasterii, telefon, email, parola, poza, mesaj)
    VALUES ('".$nume."', '".$prenume."', '".$dataNasterii."', '".$telefon."', '".$email."', '".$parola."', '".$linkPozaUpload."', '".$mesaj."')";
    if (mysqli_query($con, $sql)) {
        echo "Datele au fost introduse cu succes!";
        $db_eroare = false;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}