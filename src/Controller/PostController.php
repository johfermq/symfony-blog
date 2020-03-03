<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
	/**
     * @Route("/posts/{postName}", name="posts_show", methods={"GET", "HEAD"})
     */
    public function show(string $postName, EntityManagerInterface $em)
    {
        $repository = $em->getRepository(Post::class);

        /** var Post $post */
        $post = $repository->findOneBy(['post_name' => $postName]);

        if (! $post)
        {
            throw $this->createNotFoundException('No existe un post con el nombre dado.');
        }

        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }
}