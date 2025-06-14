<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HelloController extends AbstractController
{
    #[Route('/')]
    // public function index(): Response
    // {
    //     return new Response('Esta é a página principal!');
    // }

    public function index(): Response
    {
        $users = [
            ['nome' => 'Jocasta Nu', 'telefone' => '(81) 9.9999.5568'],
            ['nome' => 'Obi wan Kenobi', 'telefone' => '(81) 9.5844.5522'],
            ['nome' => 'Darth Plaguels', 'telefone' => '(81) 9.8632.3232'],
            ['nome' => 'Lea Organa', 'telefone' => '(81) 9.9466.5888'],
            ['nome' => 'Jar-jar Binks', 'telefone' => '(81) 9.6457.5200'],
            ['nome' => 'Jango Feet', 'telefone' => '(81) 9.9091.0308']
        ];

        // dump($users);
        // exit;

        return $this->render('hello/homepage.html.twig', [
            'title' => 'Meu manicômio',
            'boasvindas' => 'Welcome to meu mundo, prego!',
            'users' => $users,
        ]);
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug = null): Response
    {
        $newSlug = str_replace('-', ' ', $slug);
        $newSlug = u($newSlug)->title(true);
        return new Response('O animal escolhido foi ' . $newSlug);
    }

    // #[Route('/pagina01')]
    // public function pagina01(): Response
    // {
    //     return new Response('Esta é a página principal!');
    // }

    // #[Route('/pagina02')]
    // public function pagina02(): Response
    // {
    //     return new Response('Esta é a segunda página!');
    // }

    // #[Route('/pagina03')]
    // public function pagina03(): Response
    // {
    //     return new Response('Esta é a terceira página!');
    // }

    // #[Route('/pagina04')]
    // public function pagina04(): Response
    // {
    //     return new Response('Esta é a quarta página!');
    // }

    // #[Route('/pagina05')]
    // public function pagina05(): Response
    // {
    //     return new Response('Esta é a quinta página!');
    // }

    // #[Route('/pagina06')]
    // public function pagina06(): Response
    // {
    //     return new Response('Esta é a sexta página!');
    // }

    // #[Route('/pagina07')]
    // public function pagina07(): Response
    // {
    //     return new Response('Esta é a sétima página!');
    // }
}