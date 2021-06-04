<?php

namespace Snk\Controllers;

class CoreController  {
    protected $router;

    public function __construct($router) {
        // Je récupère le routeur et le stocke dans une propriété
        $this->router = $router;
    }

    /**
     * Méthode permettant de générer les variables utiles sur toutes les pages
     */
    private function getTransversalVars() {
        // Je retourne un tableau associatif des données utile sur toutes les pages
        return [
            'baseURL' => $_SERVER['BASE_URI'],
            'router' => $this->router
        
        ];
        
    }
    
    // Méthode s'occupant d'afficher un template (+ header et footer)
    protected function show($viewName, $viewVars=array()) {
        // J'appelle la méthode s'occupant des données à utiliser sur toutes les pages
        $transversalVars = $this->getTransversalVars();

        // Pour chaque donnée, je l'ajoute à $viewVars
        foreach ($transversalVars as $viewVarName=>$viewVarValue) {
            $viewVars[$viewVarName] = $viewVarValue;
        }
        
        // J'appelle mes templates !
        include __DIR__.'/../views/header.tpl.php';
        include __DIR__.'/../views/'.$viewName.'.tpl.php';
        include __DIR__.'/../views/footer.tpl.php';
    }
}



