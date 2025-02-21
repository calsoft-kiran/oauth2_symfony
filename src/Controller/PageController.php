<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

class PageController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        $assets = new Package(new EmptyVersionStrategy());
        return $this->render('pages/home.html.twig', [
            'title' => 'Home',
            'css_files' => [
                $assets->getUrl('pages/home/home.css'),
            ],
            'js_files' => [
                $assets->getUrl('pages/home/home.js'),
            ],
            'global_css'=>[
                $assets->getUrl('global/global.css'),
            ],
            'global_js'=>[
                $assets->getUrl('global/global.js'),
            ]
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        $assets = new Package(new EmptyVersionStrategy());
        return $this->render('pages/about.html.twig', [
            'title' => 'About Us',
            'css_files' => [
                $assets->getUrl('pages/about/about.css'),
            ],
            'js_files' => [
                $assets->getUrl('pages/about/about.js'),
            ]
            ,
            'global_css'=>[
                $assets->getUrl('global/global.css'),
            ],
            'global_js'=>[
                $assets->getUrl('global/global.js'),
            ]
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        $assets = new Package(new EmptyVersionStrategy());
        return $this->render('pages/contact.html.twig', [
            'title' => 'Contact',
            'css_files' => [
                $assets->getUrl('pages/contact/contact.css'),
            ],
            'js_files' => [
                $assets->getUrl('pages/contact/contact.js'),
            ],
            'global_css'=>[
                $assets->getUrl('global/global.css'),
            ],
            'global_js'=>[
                $assets->getUrl('global/global.js'),
            ]
        ]);
    }
}

