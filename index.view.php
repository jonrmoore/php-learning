<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Awesome website</title>
    <meta charset="UTF-8">
    <style>
      header {
        background-color: grey;
        text-align: center;
        padding: 2em;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>
        <?= $greeting ?>
      </h1>
      <h2>
        <?= $favoriteAnimal ?>
      </h2>
    </header>
    <main>
      <ul>

      <!-- Two different syntaxes -->
        <?php
          foreach($names as $name) {
            echo "<li>$name</li>";
          }
        ?>

        <?php foreach($names as $name) : ?>
          <li><?= $name; ?></li>
        <?php endforeach;?>
      </ul>
      <br>
      <ul>
        <?php foreach($person as $feature) : ?>
          <li><?= $feature; ?></li>
        <?php endforeach; ?>

        <?php foreach($person as $feature => $val) : ?>
          <li><?= "<strong>{$feature}</strong>: {$val}" ?></li>
        <?php endforeach; ?>
      </ul>

    </main>
  </body>
</html>