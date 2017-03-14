<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LibraryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * 
 * @Route("/admin")
 * 
 */
class AdminController extends Controller {

    /**
     * @Route("/")
     */
    public function ViewConsulting() {
        return $this->render('default/adminView.html.twig');
    }

    /**
     * @Route("/books")
     */
    public function adminBookList() {
//        return new JsonResponse($this->getDoctrine()->getRepository(Livre::class)->findAll());
        return new RedirectResponse("/library/consulting/books");
    }

    /**
     * @Route("/books/add")
     */
    public function addBook() {
        
    }

}
