<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MightyMouseController
{
    /**
     * @Route("/")
     */
    public function rescueAction()
    {
        return new Response('Here I come to save a day!');
    }
}
