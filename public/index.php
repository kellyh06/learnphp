<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
  return false;    // serve the requested resource as-is.
}


//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';

switch ($_SERVER['REQUEST_URI']) {
  case '/':
    $posts = [
      [
        'title' => 'US news 1',
        'published' => '16.09.2025',
        'author' => 'Nikita',
        'body' => 'This is the biggest hit.'
      ],

      [
        'title' => 'US news 2',
        'published' => '15.09.2025',
        'author' => 'Aleks',
        'body' => 'This is always the best trick.'
      ],

      [
        'title' => 'US news 3',
        'published' => '14.09.2025',
        'author' => 'Lylia',
        'body' => 'This might be illegal.'
      ],

      [
        'title' => 'US news 4',
        'published' => '13.09.2025',
        'author' => 'Morgan',
        'body' => 'Say no to this.'
      ],

    ];
    include __DIR__ . '/../views/index.php';
    break;
  case '/us':
    include __DIR__ . '/../views/us.php';
    break;
  default:
    echo '404 Page Not Found';
}
