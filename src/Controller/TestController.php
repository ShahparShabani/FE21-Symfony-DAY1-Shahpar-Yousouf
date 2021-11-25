<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    // /**
    //  * @Route("/test", name="test")
    //  */
    #[Route('/test', name: 'test')]
    public function index(): Response
    {


        $todo = ['dance'];
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'message' => 'hello',
            'todo' => $todo,

        ]);
    }

    #[Route("random/{max}", name: "random_number")]
    public function number($max)
    {
        $number = random_int(0, $max);
        return $this->render('test/random.html.twig', [
            'randomNumber' => $number
        ]);
    }

    #[Route('/user/{name}', name: 'user')]
    public function displayUser($name = 'Marry'): Response
    {
        $obj = new \stdClass;
        $obj->email = $name . "gmail.com";
        $obj->job = "developer";
        return $this->render('test/user.html.twig', [
            'name' => $name,
            'obj' => $obj,
        ]);
    }
}
