<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ArticleController extends AbstractController
{

    public function homepage(Environment $twig)
    {
        $html = $twig->render('articles/homepage.html.twig');
        return new Response($html);
    }


    public function show($slug)

    {
        $comments = [

            'I`m work in Symfony',
            'Symfony лучше Laravel???',
            'Мне кажеться да!!!, а вам?'
        ];

        return $this->render('articles/show.html.twig', [
        'article' => ucwords(str_replace('-', ' ', $slug)),
        'comments' => $comments,
        ]);
    }
}