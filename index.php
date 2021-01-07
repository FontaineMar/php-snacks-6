<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde. -->
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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>snack-6</title>
  </head>
  <body>
    <div class="grey">
      <?php
        foreach ($db['teachers'] as $k => $value) {
          echo $value['name'] . " " . $value['lastname'] . '<br>';
        }
      ?>
    </div>
    <div class="green">
      <?php
        foreach ($db['pm'] as $k => $value) {
          echo $value['name'] . " " . $value['lastname'] . '<br>';
        }
      ?>
    </div>
  </body>
</html>
