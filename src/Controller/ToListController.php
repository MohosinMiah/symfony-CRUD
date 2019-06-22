<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToListController extends AbstractController
{
    /**
     * @Route("/to/list", name="to_list")
     */
    public function index()
    {
        return $this->render('to_list/index.html.twig', [
            'controller_name' => 'ToListController',
        ]);
    }

    // create / add
    //complete
    //update
    //delete

}
