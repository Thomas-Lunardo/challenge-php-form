<?php

$errors = [];
$data = array_map('trim', $_POST);

if (!empty($errors)) {
    require 'thanks.php';
    die();
}
if (empty($data['lastname'])){
    $errors[] = 'Le nom est obligatoire';
}
if (empty($data['firstname'])){
    $errors[] = 'Le prénom est obligatoire';
}
if (empty($data['email'])){
    $errors[] = 'L\'email est obligatoire';
}
if (!filter_var(($data['email']), FILTER_VALIDATE_EMAIL)){
    $errors[] = 'Le format de l\'email est inexact';
}
if (empty($data['phone'])){
    $errors[] = 'Le téléphone est obligatoire';
}
if (strlen($_POST['phone']) < 10){
    $errors[] = 'Le format du téléphone est inexact';
}
if (empty($data['selectItem'])){
    $errors[] = 'Le sujet de votre demande doit être renseigné';
}
if (strlen($_POST['message']) < 30){
    $errors[] = 'L\'objet du message doit contenir plus de 30 caractères';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Récapitulatif</title>
</head>
<body>

<div>
        <h1>Récapitulatif de votre demande</h1>

        <div class="errorMessage">
            <h3>Votre demande est incomplète</h3>
                  <ul>
                   <?php foreach($errors as $error) : ?>
                    <li><?= $error ?></li>
                   <?php endforeach; ?>
                  </ul>
                </div>

        <p>Merci <?php echo htmlentities($_POST['firstname'])?> <?php echo htmlentities($_POST['lastname'])?> de nous avoir contacté à propos de "<?php echo htmlentities($_POST['selectItem'])?>".
        </p>
        <p>Un de nos conseillers vous contactera soit à l’adresse <?php echo htmlentities($_POST['email'])?> ou par téléphone au <?php echo htmlentities($_POST['phone'])?> dans les plus brefs délais pour traiter votre demande : 
        </p>
        <p>Votre message : <?php echo htmlentities($_POST['message'])?></p>
        <h2>A bientôt 😄</h2>
    </div>
    </body>
</html>