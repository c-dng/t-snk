<?php

namespace Snk\Controllers;

use Snk\Models\Character;

class MainController extends CoreController {
    public function home() {
        // Instanciation de la classe Character
        $characterClass = new Character();

        // Je récupère tous les personnages grâce à la méthode findAll du model Character.
        $characters = $characterClass->findAll();

        // Appel de la méthode show héritée de CoreController
        $this->show('home', [
            'charactersList' => $characters,
        ]);
    }

    public function creator() {
        // Appel de la méthode show héritée de CoreController
        $this->show('creator');
    }

    public function history() {
        // Appel de la méthode show héritée de CoreController
        $this->show('history');
    }

    public function spoils() {
        // Appel de la méthode show héritée de CoreController
        $this->show('spoils');
    }

    public function page404()
    {
        $this->show('page404');
    }
}