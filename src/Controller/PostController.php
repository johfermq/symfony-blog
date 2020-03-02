<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
	/**
     * @Route("/posts/{post}", name="posts_show", methods={"GET", "HEAD"})
     */
    public function show(string $post)
    {
        return $this->render('post/show.html.twig', [
            'title' => $post,
        ]);
    }
}