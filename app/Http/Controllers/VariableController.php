<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class VariableController extends Controller
{
    private function adminSidebar ($currentRoute)
    {
        return [
            [
                'link' => route('admin.dashboard'),
                'name' => "Dashboard",
                'icon' => 'bx-user',
                'active' => ($currentRoute == 'admin.dashboard' ? true : false)
            ],
            [
                'link' => route('admin.config'),
                'name' => "Configurações",
                'icon' => 'bx-user',
                'active' => ($currentRoute == 'admin.config' ? true : false)
            ]
        ];
    }

    private function websiteNavbar()
    {
        return [
            [
                'link' => route('site.home.about'),
                'name' => "Sobre"
            ],
            [
                'link' => route('site.home.plans'),
                'name' => "Planos"
            ],
            [
                'link' => '#',
                'name' => "Demonstração"
            ],
            [
                'link' => route('site.home.contact'),
                'name' => "Contato"
            ],
        ];
    }

    private function websiteLandingPageInformations()
    {
        return [
            [
                'id' => 'home',
                'title' => '<h1>Descubra O Poder Do Gerenciamento</h1>',
                'description' => '',
                'type' => 'innerHtml',
                'image' => 'https://placehold.co/600x400.png',
                'titleside' => 'left'
            ],
            [
                'id' => 'about',
                'title' => '<h1>Sobre o eHub</h1>',
                'description' => 'Lorem ipsuuuuuuuum grandão',
                'type' => 'innerHtml',
                'image' => 'https://placehold.co/600x400/orange/white',
                'titleside' => 'left'
            ],
            [
                'id' => 'championship',
                'title' => '<h1>Gerencie Campeonatos</h1>',
                'description' => 'Lorem ipsuuuuuuuum grandão',
                'type' => 'innerHtml',
                'image' => 'https://placehold.co/600x400.png',
                'titleside' => 'right'
            ],
            [
                'id' => 'club',
                'title' => '<h1>Crie O Seu Próprio Clude De Assinaturas</h1>',
                'description' => 'Lorem ipsuuuuuuuum grandão',
                'type' => 'innerHtml',
                'image' => 'https://placehold.co/600x400/orange/white',
                'titleside' => 'left'
            ],
            [
                'id' => 'style',
                'title' => '<h1>Crie O Seu Próprio Estilo</h1>',
                'description' => 'Lorem ipsuuuuuuuum grandão',
                'type' => 'innerHtml',
                'image' => 'https://placehold.co/600x400.png',
                'titleside' => 'right'
            ],
            [
                'id' => 'plans',
                'title' => '<h1>Gostou? Então Confira Nossos Planos!</h1>',
                'description' => 'Lorem ipsuuuuuuuum grandão',
                'type' => 'planModule',
                'image' => 'https://placehold.co/600x400/orange/white',
                'titleside' => 'left'
            ],
        ];
    }

    public function sendAdminVariables(Request $request)
    {
        View::share('sidebarNav', $this->adminSidebar($request->currentRoute));
    }

    public function sendWebsiteVariables(Request $request)
    {
        View::share('navbarNav', $this->websiteNavbar());

        if ($request->currentRoute == "site.home")
            View::share('landingPage', $this->websiteLandingPageInformations());
    }
}
