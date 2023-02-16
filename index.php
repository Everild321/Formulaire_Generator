<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Generer</title>
</head>
<style>
    body{
        background-color: tomato;
    }
    h2{
        margin-top:50px;
       text-align:center;
    }
    .first{
        background-color: orange;
        width:500px;
        margin-top:100px;
        margin-left:400px;
    }
    .formulaire{
        margin-left:180px;
    }
    .button{
        margin-left:20px;
        padding:20px;
    }
</style>
<body>
    <h2>Formulaire Generer</h2>
   <div class="first">
    <div class="formulaire">
                <?php
            include ('formulaire.php');
            $formulaire1=new Formulaire;
            $formulaire1->debut_soummission('Post');
            $formulaire1->ajouter_Label('Nom');
            $formulaire1->ajouter_champ('text');
            $formulaire1->ajouter_Label('Prenom');
            $formulaire1->ajouter_champ('text');
            $formulaire1->ajouter_Label('Email');
            $formulaire1->ajouter_champ('email');
            $formulaire1->ajouter_Label('Password');
            $formulaire1->ajouter_champ('password');
            $formulaire1->fin_formulaire();
            ?>
            <p class="button">
                <?php  $formulaire1->ajout_bouton('Soumettre'); ?>
            </p>
        </div>
   </div>
</body>
</html>