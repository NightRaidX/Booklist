<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BooklistController extends AbstractController
{
    /**
     * @Route("/booklist", name="booklist")
     */
    public function index()
    {
        return $this->render('booklist/index.html.twig', [
            'controller_name' => 'BooklistController',
        ]);
    }
}
