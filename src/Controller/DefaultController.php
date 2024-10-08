<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/default/{id}', name: 'blog_default', requirements: ['id' => '\d+'], defaults: ['id' => 1], methods: ['GET'])]
    public function index(Request $request, int $id): Response
    {
//        dump('1');exit;
//        dd(['id' => 1]);
//        dd($id);
//        dd($request->query->get('name'));
        return $this->render('default/index.html.twig', ['id' => $id]);
    }
}
