<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LuckyController
{
    #[Route('/mmi/{year}')]
    public function number($year= 2025): Response
    {
        return new Response(
            "<html><body>Lucky number : $year</body></html>"
        );
    }
}
