<?php

namespace Snk\Controllers;

use Snk\Models\Character;

class MainController extends CoreController {
    public function home() {
        // Appel de la méthode show héritée de CoreController
        $this->show('home');
            // 'charactersList' => $characters,
    }

    public function manga() {
        // Appel de la méthode show héritée de CoreController
        $this->show('manga');
    }

    public function history() {
        // Appel de la méthode show héritée de CoreController
        $this->show('history');
    }

    public function characters() {
        // Instanciation de la classe Character
        $characterClass = new Character();

        // Je récupère tous les personnages grâce à la méthode findAll du model Character.
        $characters = $characterClass->findAll();
        
        // Appel de la méthode show héritée de CoreController
        $this->show('characters', [
            'charactersList' => $characters,
        ]);
    }

    public function contact()
    {
        $this->show('contact');
    }

    public function page404()
    {
        $this->show('page404');
    }
}