<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog_index", methods={"GET", "HEAD"})
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'title' => 'Blog Symfony',
        ]);
    }
}
