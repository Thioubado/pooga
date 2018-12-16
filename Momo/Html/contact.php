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
    <nav>
        <ul>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
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