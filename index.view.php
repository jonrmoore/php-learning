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
        <?php foreach ($tasks as $task) : ?>
          <li>
            <?php if($task->isComplete()) : ?>
              <strike><?= $task->getDescription(); ?></strike>
            <?php else : ?>
              <?= $task->getDescription(); ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </main>
  </body>
</html>