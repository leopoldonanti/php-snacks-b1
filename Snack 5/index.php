<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<h1>Snack 5</h1>

<?php

$testo = "New York, 1987. La vita di Patrick Bateman, agiato consulente finanziario e spietato assassino, ruota intorno al tentativo di salvare le apparenze davanti alla sua futura sposa, Evelyn, e davanti ai ricchi e superficiali colleghi di lavoro, per la maggior parte dei quali prova un sentimento di odio.

Durante tutta la durata del film Bateman fa allusioni al suo bisogno di uccidere, alla sua sete di sangue e al suo io assassino con chiunque parli nei momenti che mettono a più dura prova il proprio autocontrollo, eppure nessuno fa caso a queste sue affermazioni, prendendole come esagerazioni ironiche.

Quando il collega Paul Allen dimostra di avere un biglietto da visita migliore del suo, Bateman viene preso da un impeto d'ira e uccide un barbone e un cane. Durante la festa d'ufficio per il Natale, Bateman cerca di organizzare una cena con Allen, che lo scambia però per un altro collega; dopo averlo fatto ubriacare e averlo condotto nel suo appartamento, Bateman lo uccide con un'ascia. Entrato a casa di Allen, Bateman lascia un messaggio in segreteria fingendo che il collega sia partito per un viaggio di lavoro a Londra. Nei giorni successivi, la sparizione di Allen viene indagata dal detective Donald Kimball, che interroga anche Bateman.

Quando il collega Luis Carruthers si presenta con un nuovo biglietto da visita, simile a quello di Allen, Bateman cerca di strangolarlo nel bagno di un ristorante. Tuttavia, Luis scambia il tentato omicidio per un tentativo di approccio sessuale e dichiara il suo amore davanti a un Bateman disgustato. Dopo aver ucciso una modella, Bateman invita la segretaria, Jean, a cena da lui con l'intento di assassinarla, ma la fa invece andar via dopo aver ricevuto un messaggio da Evelyn al telefono";

$arrayParagrafo = explode('.', $testo);

var_dump($arrayParagrafo);

?>

<ul>

  <?php 
      foreach ($arrayParagrafo as $arrayParagrafi){
    ?>

  <li>
    <?php echo $arrayParagrafi ?> 
  </li>
  
    <?php  } ?>

</ul>


</body>
</html>