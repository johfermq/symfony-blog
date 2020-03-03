<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog_index", methods={"GET", "HEAD"})
     */
    public function index(EntityManagerInterface $em)
    {   
        $repository = $em->getRepository(Post::class);

        /** var Post $posts */
        $posts = $repository->findAll();

        return $this->render('blog/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
