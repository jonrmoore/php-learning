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
        foreach ($names as $name) {
          echo "<li>$name</li>";
        }
        ?>

        <?php foreach ($names as $name) : ?>
          <li><?= $name; ?></li>
        <?php endforeach; ?>
      </ul>
      <br>
      <ul>
        <?php foreach ($person as $feature) : ?>
          <li><?= $feature; ?></li>
        <?php endforeach; ?>

        <?php foreach ($person as $feature => $val) : ?>
          <li><?= "<strong>{$feature}</strong>: {$val}" ?></li>
        <?php endforeach; ?>
      </ul>

      <ul>
        <li>
          <strong>Title</strong>: <?= $task['title']; ?>
        </li>
        <li>
          <strong>Due</strong>: <?= $task['due']; ?>
        </li>
        <li>
          <strong>Person Responsible</strong>: <?= $task['assigned_to']; ?>
        </li>
        <li>
          <strong>Status</strong>:
          <?php if ($task['completed']) : ?>
            <span>"&#9989;"</span>
          <?php else : ?>
            <span>"incomplete"</span>
          <?php endif; ?>
        </li>
      </ul>

      <h2>Are you old enough?</h2>
      <?php if(validate_age($person['age'])) : ?>
        <h3>You are! Come on in!</h3>
      <?php else : ?>
        <h3>Nope! Go home.</h3>
      <?php endif; ?>

      <p><?= $person["age"]; ?></p>
    </main>
  </body>
</html>