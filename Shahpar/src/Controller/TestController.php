<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    // /**
    //  * @
    //  */
    #[Route('/test', name: 'test')]
    public function index(): Response
    {

  
        $todo =['dance'];
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController', 
            'message' => 'hello',
            'todo' => $todo,

        ]);
    }

    #[Route("random/{max}", name:"random_number")]
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
    $obj -> email = $name."gmail.com";
       return $this->render('test/user.html.twig', [
           'name' => $name
       ]);
   }

   #[Route("testvar", name:"var")]
   public function  testVarAction()
   {
       $arr = array("name"=>"serri", "age" =>30); // here we create a simple array have keys and values
        return $this->render('test/testvar.html.twig', array("varName"=>$arr)); // this is the way how to send a variable from php (variable you created in the controller) to the twig file
   }

   #[Route("/helloworld", name:"helloworld_page")]
   public function  testAction()
   {
       $text = 'Hello World!';
       return   $this->render('test/helloworld.html.twig', array('text' =>$text));
   }
}
