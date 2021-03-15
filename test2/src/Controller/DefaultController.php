<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        $template = 'default/index.html.twig';
        $args = [];

        return $this->render($template , $args);

    }

    /**
     * @Route("/limerick", name="limerick")
     */
    public function limerick(): Response
    {

        $template = 'default/limerick.html.twig';
        $args = [];

        return $this->render($template , $args);

    }


    /**
     * @Route("/slug/{word1}/{word2}", name="slug")
     */
    public function slug($word1 , $word2 ): Response
    {
        $word3 = $word1 - $word2;

        $template = 'default/slug.html.twig';
        $args = [
            'word1' => $word1,
            'word2' => $word2,
            'word3' => $word3

        ];

        return $this->render($template , $args);

    }
}
