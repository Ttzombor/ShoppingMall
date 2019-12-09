<?php

namespace App\Controllers;

/**
 * Gestion de la page d'accueil
 */
class HomeController extends Controller
{
    /**
     * Listing des articles
     */
    public function show()
    {
        return $this->view('shopping_mall/index', [
            'baliseTitle' => 'Homepage title',
            'metaDescription' => 'Homepage desciption',
        ]);  
    }
}
