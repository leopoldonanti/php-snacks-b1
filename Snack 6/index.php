<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>

  body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
  } 
  
  .insegnanti{
    background-color: gray;
    width: 50%;
    text-align: center;
    margin: auto;
    padding: 5px;
    margin: 20px;
    border-radius: 20px;
  }

  .pm{
    background-color: green;
    width: 50%;
    margin: auto;
    text-align: center;
    padding: 5px;
    margin: 20px;
    border-radius: 20px;
  }

  ul{
    list-style: none;
    padding: 0;
  }

  li{
    padding: 0;
  }
    
  </style>

</head>
<body>
  
<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];

?>

<div class="insegnanti">

  <h1>Teachers</h1>
    
  <ul>
    <?php foreach($db['teachers'] as $db['teacher']){ ?>
      <li>   
        <?php echo $db['teacher']['name'] ?> 
        <?php echo $db['teacher']['lastname'] ?> 
      </li>
    <?php } ?> 
  </ul>
 
</div>

<div class="pm">

  <h1>Pm</h1>

  <ul>
      <?php 
        foreach ($db['pm'] as $db['singlepm']){ ?>
    <li> 
      <?php echo $db['singlepm']['name'] ?> 
      <?php echo $db['singlepm']['lastname'] ?>  
    </li>
      <?php } ?> 
  </ul>

</div>

</body>
</html>