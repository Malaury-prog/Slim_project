<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Rounting PHP</title>
</head>

<body>
    <h1>Index.page</h1>
</body>

</html> -->

<?php

use App\Controllers\ProductController;
use App\Models\Product;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . "/../vendor/autoload.php";

$app = AppFactory::create(); //::methode statique ou constante
$twig = Twig::create(__DIR__ . '/../src/Views', ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

$app->get('/', function ($request, $response) {
    $view = Twig::fromRequest($request);

    return $view->render($response, 'products.html.twig', [
        'products' => ProductController::all(6),
    ]);
});









// $app->get('/', function (Request $request, Response $response, array $args) {
//     $response->getBody()->write("C'est la page d'accueil!");
//     return $response;
// });


// $app->get('/about', function (Request $request, Response $response, array $args) {
//     $response->getBody()->write("Hello");
//     return $response;
// });

// $app->get('/products', function (Request $request, Response $response, array $args) {
//     $products = Product::getAllProducts();
//     $response->getBody()->write(json_encode($products));
//     return $response;
// });


// $app->get("/", function (Request $request, Response $response, array $args) {
//     $response->getBody()->write("C'est la page d'accueil");
//     return $response;
// });

// $app->get('/products', function (Request $request, Response $response, array $args) {
//     $response->getBody()->write(ProductController::all(6));
//     return $response;
// });

$app->run();
