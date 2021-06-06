<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<h1>Snack 2</h1>

<?php

  $data = $_GET;

  if(empty($data['name']) || empty($data['mail']) || empty($data['age'])) {
    echo "Errore: dati non pervenuti";

  }elseif(strlen($data['name'])<= 3) {
    echo "Errore: nome troppo corto";

  }elseif(strpos($data['mail'], '@') === false || strpos($data['mail'], '.')=== false) {
    echo "Errore: mail non valida";

  }elseif(!is_numeric($data['age'])){
    echo "Errore: età non validà";

  }else{
    echo "Registrazione completata";
  }

?>

</body>
</html>