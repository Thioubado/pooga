<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contactez le Restaurant Fiasco sur Montpellier</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
            <h1 class="header-title">Restaurant le fiasco</h1>
            <nav class="header-nav">
            <ul>
            <!--http://pooga/Momo/Html/menu.php -->
                <a href="/Momo/Html/index.php">Acceuil</a>
                <a href="menu.php">Menu</a>
                <a href="contact.php">Contact</a>
            </ul>
            </nav>
        
                <!--Pour redimensionner l'image, aller sur le site https://imageresize.org/ -->
                
                
                <!-- Bonne URL d'une image avec VH (Virtual Host pooga)ou  localhost
                -->
                <img src="/Momo/Html/img/mais.jpeg" alt="photo du mais chez le fiasco" width="600" height="200">
        </header>
    <form action="">
        <fieldset>
            <legend>Nous contacter</legend>
                <div>
                    <label for="emailinput">Email</label>
                    <input type="text"name="email" id="emailinput">
                </div>
                <div>
                    <label for="nominput">Nom</label>
                    <input type="text"name="nom" id="nominput">
                </div>
                <div>
                    <label for="fileinput">Pièce jointe</label>
                    <input type="file"name="file" id="fileinput">
                </div>
                <div>
                    <label for="sexe">Sexe</label>
                        <div>
                            <input type="radio" name="sexe" id="masculin">
                            <label for="masculin">Masculin</label>
                        </div>
                        <div>
                            <input type="radio" name="sexe" id="feminin">
                            <label for="feminin">Féminin</label>
                        </div>
                </div>
                <div>
                    <label><input type="checkbox" name="cgu" checked>J'accepte les conditions générales d'utilisation</label>
                </div>
                <input type="submit" value="Envoyer">
                <input type="reset" value="Annuler">
        </fieldset>
    </form>
</body>