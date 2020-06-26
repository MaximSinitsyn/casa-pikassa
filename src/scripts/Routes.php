<?php
// маршруты (можно хранить в конфиге приложения)
// можно использовать wildcards (подстановки):
// :any - любое цифробуквенное сочетание
// :num - только цифры
// в результирующее выражение записываются как $1, $2 и т.д. по порядку

/* $routes = array(
    'url' => 'контроллер/действие/параметр1/параметр2/параметр3'
    '/' => 'MainController/index', // главная страница
    '/contacts' => 'MainController/contacts', // страница контактов
    '/blog' => 'BlogController/index', // список постов блога
    '/blog/:num' => 'BlogController/viewPost/$1' // просмотр отдельного поста, например, /blog/123
    '/blog/:any/:num' => 'BlogController/$1/$2' // действия над постом, например, /blog/edit/123 или /blog/dеlete/123
    '/:any' => 'MainController/anyAction' // все остальные запросы обрабатываются здесь
)); */


require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/Router.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/controllers/MainController.php';

$router = Bit55\Litero\Router::fromGlobals();

$router->add([
    '/'       => 'Bit55\Litero\MainController@base',
    '/anticafe' => 'Bit55\Litero\MainController@anticafe',
    '/coworking' => 'Bit55\Litero\MainController@coworking',
    '/company' => 'Bit55\Litero\MainController@company',
    '/afisha' => 'Bit55\Litero\MainController@afisha',
    '/afisha/:any' => 'Bit55\Litero\MainController@afishaPages',
    '/events' => 'Bit55\Litero\MainController@events',
    '/events/happy-birthday' => 'Bit55\Litero\MainController@happy_birthday',
    '/events/happy-birthday/programs' => 'Bit55\Litero\MainController@happy_birthday_programs',
    '/events/happy-birthday/programs/:any' => 'Bit55\Litero\MainController@happy_birthday_program',
    '/rent' => 'Bit55\Litero\MainController@rent',
    '/rent/:any' => 'Bit55\Litero\MainController@rent_rooms',
    '/info' => 'Bit55\Litero\MainController@info',
    '/info/contacts' => 'Bit55\Litero\MainController@infoContacts',
    '/info/visit-rools' => 'Bit55\Litero\MainController@infoVisitRools'
]);


// Start route processing
if ($router->isFound()) {
    $router->executeHandler(
        $router->getRequestHandler(),
        $router->getParams()
    );
}
else {
    // Simple "Not found" handler
    $router->executeHandler(function () {
        
        http_response_code(404);
        $page = '404';
        require_once './baseTemplate.php';
    });
}
?>