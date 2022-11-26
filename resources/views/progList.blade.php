
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zone commantaire</title>
    <link rel="stylesheet" href="CSS/style.css"/>


</head>

<body>

<!--zone de vue com-->

<center>

<div class="zone">
<p>
@foreach ($todolist as $todo )

<tr class="tableau">
<td>

{{ $todo['tache'] }}

</td>

<td>
<a href={{"delete/".$todo['id'] }}> Supprimer</a>
<a href={{"modifier/".$todo['id'] }}> Modifier</a> <br> <br>
</td>
</tr>
@endforeach
</p>
</div>

</center>

<!--bouton d'envoi-->

<form action="add" method="POST">

@csrf

<div class="formulaire">

<!--com-->

<h1 class="titre">
  Commentaire
</h1>

<!---->

<!--bouton + zone écriture-->
<input type="text" class="text" name="tache" placeholder="Ajouter">

<input type="submit" id="bouton" name="envoyer" value="Ajouter">

<!---->

</div>

</form>

</body>

</html>
