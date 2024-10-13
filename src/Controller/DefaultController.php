<?php

namespace App\Controller;

use App\Entity\Blog;
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
        $blogs = $blogRepository->findAll();
//        $blogsWithId1 = $blogRepository->findBy(['id' => 1]);
        $blog = $blogRepository->findOneBy(['id' => 3]);

        /** Изменить тайтл */
//        $blog->setTitle('Title 2');

        /** Удалиь запись */
//        $em->remove($blog);
//        $em->flush();

        /** Обновить данные */
//        $em->refresh($blog);

//        dump($blog);

        $blog = (new Blog())
            ->setTitle('Title')
            ->setDescription('Description')
            ->setText('Text');

        $em->persist($blog);
        $em->flush();

        return $this->render('default/index.html.twig', []);
    }
}
