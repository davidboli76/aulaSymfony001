<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Fala, macacada!');
    }

    #[Route('/pagina2')]
    public function pagina2(): Response
    {
        return new Response('Esta é a segunda página!');
    }
}