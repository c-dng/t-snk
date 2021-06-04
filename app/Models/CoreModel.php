<?php

namespace Snk\Models;

class CoreModel {
    // Propriétés communes aux Models
    protected $id;


    // J'écris les GETTERs
    // (aucun setters, car on ne veut pas laisser la possiblité d'écriture sur ces propriétés)
    public function getId() {
        return $this->id;
    }




}