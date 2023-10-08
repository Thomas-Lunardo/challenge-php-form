<!-- http://localhost:8000/form.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulaire de contact</h1>

<form action="thanks.php" method="post">
<div>
  <label for="lastname">Nom :</label><br>
  <input type="text" id="lastname" name="lastname" require placeholder="Toto">
</div>
<div>
  <label for="firstname">Prénom :</label><br>
  <input type="text" id="firstname" name="firstname" require placeholder="Tata">
</div>
<div>
  <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" require placeholder="toto69@hell.gg">
</div>
<div>
  <label for="phone">Téléphone</label><br>
  <input type="tel" id="phone" name="phone" minlenght="10" require placeholder="06 66 66 66 66">
</div>
<div>
  <label for="selectItem">What's wrong with you ?</label><br>
    <select type="selectItem" id="selectItem" name="selectItem">
        <option value=""></option>
        <option value="J'ai froid">J'ai froid</option>
        <option value="J'ai chaud">J'ai chaud</option>
        <option value="J'ai tiède">J'ai tiède</option>
    </select>
</div>
<div>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message" require placeholder="Expliquer moi de quoi vous avez besoin, je vous expliquerai comment vous en passer."></textarea>
</div>
<div class="button">
  <button type="submit">Envoyer votre message</button>
</div>
</form>
</body>
</html>
