
  <?php require 'partials/head.view.php'; ?>
  <?php require 'partials/nav.view.php'; ?>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?php echo $heading; ?></h1>
    </div>
  </header>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      Welcome to the Home Page
      <ul class="m-4 p-4 bg-white rounded shadow-lg">
        <?php

          foreach ($persons as $person) {
            $object = new Person($person['name'], $person['age']);
            echo '<li>'.$object->sayHello().'</li>';
          }

        ?>
      </ul>
    </div>
  </main>
</div>

</body>
</html>