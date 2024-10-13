<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'blog_default')]
    public function index(BlogRepository $blogRepository, EntityManagerInterface $em): Response
    {
        return $this->redirectToRoute('app_blog_index');
    }
}
