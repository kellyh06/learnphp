<?php
$posts = [
  ['title' => 'US news 1',
   'published' => '16.09.2025',
   'author' => 'Nikita',
   'body' => 'This is the biggest hit.'],

   ['title' => 'US news 2',
   'published' => '15.09.2025',
   'author' => 'Aleks',
   'body' => 'This is always the best trick.'],

   ['title' => 'US news 3',
   'published' => '14.09.2025',
   'author' => 'Lylia',
   'body' => 'This might be illegal.'],

   ['title' => 'US news 4',
   'published' => '13.09.2025',
   'author' => 'Morgan',
   'body' => 'Say no to this.'],

]
?>


<?php include __DIR__ . '/partials/header.php'; ?>

    <main class="container">


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
