<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Travel Agency</title>
    <script type="text/javascript">
      function Soumettre(form2){
        alert("Vous receverez un E-mail de confirmation à ");
      }
    </script>
</head>
<body>
    <div class="maindiv">
        <header class="header">
                    <a class="logo" href="index.php"> > Travel Agency < </a>
        </header>

   
<div class="containers">
  <h1>Formulaire d'ajout d'hotel</h1>
  <form name="form1" action="formsubmited.php" method="post">
    <label for="nom"> Nom</label>
    <input type="text" id="nom" name="firstname" placeholder="Votre nom ">

    <label for="prenom"> Prénom</label>
    <input type="text" id="prenom" name="secname" placeholder="Votre prénom">

    <label for="sujet">Hotel</label>
    <input type="text" id="sujet" name="sujet" placeholder="Le nom de votre hotel ">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">

    <label for="adresse">Adresse</label>
    <input id="adresse" name="adresse" type="text" placeholder="Votre adresse">


    <label for="subject">Description</label>
    <textarea id="subject" name="subject" placeholder="Veuillez descrire votre hotel " style="height:200px"></textarea>

    <input type="submit" value="Souscrire">
    
    
  </form>
  <br>
    <br>
</div>






      
        <footer class="footer">
            <div class="contactinformation">
                    <h4 class="h4contactinformation">Contact Information</h4>
                    <p class="info">Contact : contact@travelagency.com</p>
                    <p class="info">Tel : +21300000000</p>
                    <p class="info">Fax : +21300000000</p>
            </div>

            <div class="copyrights">
                <p>Travel Agency inc. Tout droit réservé</p>
            </div>
            <div class="follow">
                <h4 class="followus">Nous suivre</h4>
                <a class="followlinks" href="https://www.facebook.com/" target="_blank">Facebook</a>
                <a class="followlinks" href="https://www.instagram.com/" target="_blank">Instagram</a>
                <a class="followlinks" href="https://www.twitter.com/" target="_blank">Twitter</a>
            </div>
        </footer>
    </div>
</body>
</html>
