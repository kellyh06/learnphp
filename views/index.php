<?php
$posts = [
  ['title' => 'World news 1',
   'published' => '16.09.2025',
   'author' => 'Alice',
   'body' => 'This is the excerpt for World news 1.'],

   ['title' => 'World news 2',
   'published' => '15.09.2025',
   'author' => 'Kelly',
   'body' => 'This is the best place to relive stress.'],

   ['title' => 'World news 3',
   'published' => '14.09.2025',
   'author' => 'Sebastian',
   'body' => 'There are the craziest animals.'],

   ['title' => 'World news 4',
   'published' => '13.09.2025',
   'author' => 'Pets',
   'body' => 'This is the World news 4.'],

]
?>


<?php include __DIR__ . '/partials/header.php'; ?>

    <main class="container">
      <?php include __DIR__ . '/partials/hero.php'; ?>
      <?php include __DIR__ . '/partials/featured.php'; ?>

      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
