<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('CSS/style.css') }}">
    <title>To do list</title>

</head>
<body>

    <!--bouton d'affichage popup todoliste-->

    <form>

<a onclick="open('list', 'Popup', 'scrollbars=1,resizable=1,height=700,width=900'); return false;">

    <input type="submit" id="btn" name="envoyer" value="Todo list">



</a>

    </form>

    <!---->


</body>
</html>
