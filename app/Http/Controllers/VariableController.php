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
                'link' => route('site.about'),
                'name' => "Sobre"
            ],
            [
                'link' => route('site.plans'),
                'name' => "Planos"
            ],
            [
                'link' => '#',
                'name' => "Demonstração"
            ],
            [
                'link' => route('site.contact'),
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
                'image' => 'img/site/home/home-entrance.webp',
                'titleside' => 'left'
            ],
            [
                'id' => 'about',
                'title' => '<h1>Sobre o <img class="mb-3" src="/img/ehub-white-logo.webp"/></h1>',
                'description' => 'Somos uma plataforma totalmente voltada para gerenciamento de ligas e campeonatos, sejam eles do mundo real ou virtual.',
                'type' => 'innerHtml',
                'image' => 'img/site/home/about.webp',
                'titleside' => 'left'
            ],
            [
                'id' => 'championship',
                'title' => '<h1>Gerencie Campeonatos</h1>',
                'description' => 'Tenha total controle sobre seus campeonatos e forneça a seu público total transparência. No eHub você poderá gerenciar desde a pontuação até responder situações que geram protestos dos participantes destes.',
                'type' => 'innerHtml',
                'image' => 'img/site/home/championship.webp',
                'titleside' => 'right'
            ],
            [
                'id' => 'club',
                'title' => '<h1>Crie O Seu Próprio Clude De Assinaturas</h1>',
                'description' => 'Realizar campeonatos não é uma tarefa fácil, por esse motivo criamos o Clube de Assinatura, para aqueles que não aguentam participar de apenas um campeonato, poderá a partir do clube participar de quantos campeonatos desejar, e tudo isso por um valor mensal pré-definido por você.',
                'type' => 'innerHtml',
                'image' => 'img/site/home/club.webp',
                'titleside' => 'left'
            ],
            [
                'id' => 'style',
                'title' => '<h1>Crie O Seu Próprio Estilo</h1>',
                'description' => 'Com uma API poderosa de fundo, o eHub permite com que você consigo modificar o seu próprio tema, tornando-o totalmente diferenciando da concorrência.',
                'type' => 'innerHtml',
                'image' => 'img/site/home/style.webp',
                'titleside' => 'right'
            ],
            [
                'id' => 'plans',
                'title' => '<h1>Gostou? Então Confira Nossos Planos!</h1>',
                'description' => '',
                'type' => 'innerHtml',
                'image' => 'img/site/home/plan.webp',
                'titleside' => 'left'
            ],
            [
                'id' => 'contact',
                'title' => '<h1>Ficou com alguma dúvida?</h1>',
                'description' => 'Sem problemas, disponibilizamos para você o nosso WhatsApp ou, se preferir, o email contato@ehubapp.com para sanar todas as suas dúvidas antes de contratar quaisquer plano.',
                'type' => 'innerHtml',
                'image' => 'img/site/home/contact.webp',
                'titleside' => 'right'
            ],
        ];
    }

    private function websitePlanInformations()
    {
        return [
            [
                'id' => 'plan-1',
                'title' => '<h1>Plano Grátis</h1>',
                'description' => '',
                'type' => 'innerHtml',
                'image' => 'img/site/home/home-entrance.webp',
                'titleside' => 'left'
            ],
            [
                'id' => 'plan-2',
                'title' => '<h1>Sobre o <img class="mb-3" src="/img/ehub-white-logo.webp"/></h1>',
                'description' => 'Somos uma plataforma totalmente voltada para gerenciamento de ligas e campeonatos, sejam eles do mundo real ou virtual.',
                'type' => 'innerHtml',
                'image' => 'img/site/home/about.webp',
                'titleside' => 'left'
            ],
            [
                'id' => 'plan-3',
                'title' => '<h1>Gerencie Campeonatos</h1>',
                'description' => 'Tenha total controle sobre seus campeonatos e forneça a seu público total transparência. No eHub você poderá gerenciar desde a pontuação até responder situações que geram protestos dos participantes destes.',
                'type' => 'innerHtml',
                'image' => 'img/site/home/championship.webp',
                'titleside' => 'right'
            ],
            [
                'id' => 'plan-4',
                'title' => '<h1>Crie O Seu Próprio Clude De Assinaturas</h1>',
                'description' => 'Realizar campeonatos não é uma tarefa fácil, por esse motivo criamos o Clube de Assinatura, para aqueles que não aguentam participar de apenas um campeonato, poderá a partir do clube participar de quantos campeonatos desejar, e tudo isso por um valor mensal pré-definido por você.',
                'type' => 'innerHtml',
                'image' => 'img/site/home/club.webp',
                'titleside' => 'left'
            ]
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
        if ($request->currentRoute == "site.plans")
            View::share('landingPage', $this->websiteLandingPageInformations());
    }
}
