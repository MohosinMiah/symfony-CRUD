<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\ToLIst;

class ToListController extends AbstractController
{


 public function taskList()
 {
    $entityManager = $this->getDoctrine()->getManager();
    $task = $this->getDoctrine()
    ->getRepository(ToLIst::class)
    ->findAll();
    return $task;
 }

    /**
     * @Route("/to/list", name="to_list")
     */
    public function index()
    {
 
        return $this->render('to_list/index.html.twig', [
            'tasks' =>$this->taskList(),
        ]);
    }

    /**
     * @Route("/create", name="create" )
     */
    public function create(Request $request)
    {
        $task = new ToLIst();
        //   Retrive data from Form
        $title = $request->get('title');
        if(empty($title)){
            return $this->redirectToRoute('to_list');
 
        }
        $task->setTitle($title);
        $task->setStatus(false);
        $entityManager = $this->getDoctrine()->getManager();
        // tell Doctrine you want to (eventually) save the user (no queries yet)
        $entityManager->persist($task);
        $entityManager->flush();


        return $this->redirectToRoute('to_list');
    }

    /**
     * @Route("/switch_status/{id}", name="switch_status" )
     */
    public function switch_status($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
      $task =   $entityManager->getRepository(ToLIst::class)->find($id);
       //Update status 
       $task->setStatus(!$task->getStatus());

       $entityManager->flush();

       return $this->redirectToRoute('to_list');

    }


    /**
     * @Route("/delete", name="delete" )
     */
    public function delete()
    {
        return $this->render('to_list/index.html.twig', [
            'controller_name' => 'ToListController',
        ]);
    }
}
