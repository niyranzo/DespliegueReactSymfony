<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NYGController
{
    #[Route('/api/nyg', name: 'nyg_hello')]
    public function index(): Response
    {
        return new Response('Symfony de Nicole Yranzo Ghisolfi Responde a la llamada de React');
    }
}
