<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="pageForm">
    <form action="../php/reponse.php" method="post">
        
        <select name="genre" id="genre" enable="enable">
            <option name="genre" value="Mme">Mme</option>
            <option name="genre" value="Mr">Monsieur</option>
        </select>

        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname">

        <label for="birth">date of birth</label>
        <input type="text" name="birth" id="birth">

        <label for="id">Your id</label>
        <input type="text" name="id" id="id">

        <label for="password">Your password</label>
        <input type="text" name="password" id="password">
         <fieldset>
            <legend>genre</legend>
            <label for="genreS">sexe</label>
                <input type="radio" value="masculin" name="genreS">Masculin 
                <input type="radio" value="féminin" name="genreS">féminin

                <input type="checkbox" value="débutant" name='debutant'>Je débute en php
                <input type="checkbox" value="intermédiaire" name='debutant'>Je suis intermédiaire en php
                <input type="checkbox" value="expert" name='debutant'>Je suis expert en php
        </fieldset>

     
        

        <button>Envoyer</button>
    </form>
    </div>
</body>
</html>