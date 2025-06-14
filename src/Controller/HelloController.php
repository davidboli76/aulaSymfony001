<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Esta é a página principal!');
    }

    #[Route('/pagina01')]
    public function pagina01(): Response
    {
        return new Response('Esta é a página principal!');
    }

    #[Route('/pagina02')]
    public function pagina02(): Response
    {
        return new Response('Esta é a segunda página!');
    }

    #[Route('/pagina03')]
    public function pagina03(): Response
    {
        return new Response('Esta é a terceira página!');
    }

    #[Route('/pagina04')]
    public function pagina04(): Response
    {
        return new Response('Esta é a quarta página!');
    }

    #[Route('/pagina05')]
    public function pagina05(): Response
    {
        return new Response('Esta é a quinta página!');
    }

    #[Route('/pagina06')]
    public function pagina06(): Response
    {
        return new Response('Esta é a sexta página!');
    }
}