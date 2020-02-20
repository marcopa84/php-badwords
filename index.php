<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php
  $text = 'Lorem ipsum dolor sit amet, / casa / consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. / casa / Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur / casa / . Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  $get_value = $_GET ['word'];

  $text_modified = str_replace($get_value, '***', $text);



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESERCIZIO 1</title>
  </head>
  <body>
    <p>Parola da escludere: <?php echo $get_value; ?></p>
    <p>Lunghezza della stringa:  <?php echo strlen($text); ?></p>

    <div class="">
      <?php echo $text_modified; ?>
    </div>
  </body>
</html>
