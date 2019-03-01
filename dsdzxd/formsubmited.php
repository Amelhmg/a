<?php

include_once 'database/connect.php';

$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$pnom = mysqli_real_escape_string($conn, $_POST['pnom']);
$hotel = mysqli_real_escape_string($conn, $_POST['hotel']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);


if (empty($nom) || empty($pnom) || empty($email) || empty($hotel) ||  
        empty($adresse) || empty($subject)) {
    header("Location: owner.php?signup=erroremptyfields"); 
    } else if (!preg_match("/^[a-zA-Z ]*$/",$nom) || !preg_match("/^[a-zA-Z ]*$/",$pnom) || !preg_match("/^[a-zA-Z0-9 ]*$/",$hotel)
                || !preg_match("/^[a-zA-Z]*$/",$subject)) {
                    header("Location: owner.php?signup=errorunrealisticinput"); 
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
            header("Location: owner.php?signup=errorfalsemail");
            }

            else {

                $sql = "INSERT INTO Hotels (Nom,Prenom,Hotel,Email,,Adresse,subject)
                VALUES ('$nom','$pnom','$hotel','$email','$adresse','$subject')";
                mysqli_query($conn, $sql);        
                header("Location: index.php?signup=success"); 
            }

?>