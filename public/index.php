<?php

// Inclusion de composer (!important)
require __DIR__.'/../vendor/autoload.php';


// Instanciation d'Altorouter
$router = new AltoRouter();

// On définit le basePath d'AltoRouter
$router->setBasePath($_SERVER['BASE_URI']);

// Lister les routes de notre site 
$router->map(
    'GET', // La méthode HTTP qui est autorisée
    '/', // L'URL que l'on saisira dans le navigateur
    // Le tableau suivant stocke les noms de l'action (la méthode) et du contrÃ´leur qui vont se dÃ©clencher pour rÃ©agir Ã  cette URL : ces donnÃ©es seront rÃ©cupÃ©rables grÃ¢ce Ã  la variable $match['target']
    [
        'method' => 'home',
        'controller' => 'Snk\Controllers\MainController'
    ], 
    'home' // On donne un nom (un identifiant Ã  la route). On va prendre comme convention : nomDuControleur-nomDeLaMethode
);

$router->map(
    'GET',  
    '/manga',   
    [       
        'controller' => 'Snk\Controllers\MainController',
        'method' => 'manga'
    ],
    'manga'  
);

$router->map(
    'GET',  
    '/characters',   
    [       
        'controller' => 'Snk\Controllers\MainController',
        'method' => 'characters'
    ],
    'characters'  
);

$router->map(
    'GET',  
    '/contact',   
    [       
        'controller' => 'Snk\Controllers\MainController',
        'method' => 'contact'
    ],
    'contact'  
);

// Début du dispatcher: mise en place du matching
// Ici je demande à AltoRouter si il y a une correspondance entre mon url
// et toutes les routes que je lui ai déclarée via ->map
$match = $router->match();

// Si une route correspond à l'url courante :
if ($match) {


    // On récupère le controller qui sera utilisé
    // $controllerToUse = 'Sonic\Controllers\\'.$match['target']['controller'];
    $controllerToUse = $match['target']['controller'];

    // Et la méthode qui sera exécutée
    $methodToCall = $match['target']['method'];
    // Ainsi que les potentiels paramètres dynamiques de la page
    $arguments = $match['params'];
    
} else {
    // Je définis ces valeurs pour aller sur la page 404
    $controllerToUse = 'Snk\Controllers\MainController';
    $methodToCall = 'page404';
    $arguments = [];
}


// J'instancie le controller
// PHP va remplacer la variable $controllerToUse par sa valeur
// puis va instancier la bonne classe "new MainController()" par exemple
// je transmets $router en argument pour que les controllers y aient accès (=> regarder le constructeur du CoreController)
// $controller = new $controllerToUse($router);
$controller = new $controllerToUse($router);
// J'appelle la méthode correspondant à la route
// PHP va remplacer la variable $methodToCall par sa valeur
// puis va appeler la bonne méthode "->home()" par exemple
// On passe en argument le tableau des paramètres dynamiques de la route matchée
$controller->$methodToCall($arguments);
