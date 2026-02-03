<?php

namespace Inachis\Timeline\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TimelineController extends AbstractController
{
    #[Route('/incc/timeline', name: 'incc_timeline_index')]
    public function index(): Response
    {
        return $this->render('@InachisTimeline/inadmin/timeline.html.twig');
    }
    #[Route('/timeline', name: 'web_timeline_index')]
    public function index(): Response
    {
        return $this->render('@InachisTimeline/web/timeline.html.twig');
    }
}
