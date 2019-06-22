<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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

    /**
     * @Route("/create", name="create" methods="POST")
     */
    public function create(Request $request)
    {
      // Retrive data from Form
    //   $title = 





        return $this->render('to_list/index.html.twig', [
            'controller_name' => 'ToListController',
        ]);
    }

    /**
     * @Route("/switch_status", name="switch_status" methods="POST")
     */
    public function switch_status()
    {
        return $this->render('to_list/index.html.twig', [
            'controller_name' => 'ToListController',
        ]);
    }


    /**
     * @Route("/delete", name="delete" methods="POST")
     */
    public function delete()
    {
        return $this->render('to_list/index.html.twig', [
            'controller_name' => 'ToListController',
        ]);
    }


   

    //delete

}
