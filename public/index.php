<?php



if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
  return false;    // serve the requested resource as-is.
}

function dump(...$args)
{
  echo '<pre>';
    var_dump($args);
  echo '</pre>';
}

spl_autoload_register(function ($class) {
  $class = substr($class, 4);
  require_once __DIR__ . "/../src/$class.php";
});

use App\Router;

Router::addRoute('/', function() {
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

];
    include __DIR__ . '/../views/index.php';
});

Router::addRoute('/us', function() {
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
    

    include __DIR__ . '/../views/us.php';
});



$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if ($match) {
    call_user_func($match['action']);
} else {
    echo '<img src="https://http.cat/404">';
}

