<?php

namespace App\Controllers;

use App\Models\User;

class Home extends Controller {

    public function __construct($router) {
        parent::__construct($router);
    }

    public function home(): void {
        $this->view->addData([
            'title' => 'Página inicia | ' . SITE['name']
        ]);
        echo $this->view->render('home');
    }    

}