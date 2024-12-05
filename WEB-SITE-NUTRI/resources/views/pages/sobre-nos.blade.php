@extends('layouts.app')

@section('content')

<!-- Conteúdo Principal -->
<div class="container">
    <header>
        <div class="logo-container">
            <img src="{{ asset('imgs/logo.jpg') }}" alt="Logo" class="logo-img">
            <div class="logo-text">Clínica Bem Viver</div>
        </div>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <!-- Dropdown para Serviços -->
            <div class="dropdown">
                <a href="#servicos">Serviços</a>
                <div class="dropdown-content">
                    <a href="#medicos">Nossa Equipe</a>
                    <a href="#avaliacao">Avaliações Nutricionais</a>
                </div>
            </div>
            <!-- Botão de Login -->
            <form action="/register" method="get" style="margin: 0;">
                <button class="login-button" type="submit">Fazer Login</button>
            </form>
        </nav>
    </header>

    <section id="sobre-nos">
        <h1>Sobre a Clínica Bem Viver</h1>
        <p>A Clínica Bem Viver é um projeto inovador que combina tecnologia e nutrição personalizada para oferecer soluções práticas para o seu bem-estar. Nossa missão é oferecer serviços de nutrição adaptados às suas necessidades, com acompanhamento contínuo para garantir seus melhores resultados.</p>

        <h2>Nosso Objetivo</h2>
        <p>Transformar a forma como você gerencia sua alimentação e saúde, oferecendo planos nutricionais personalizados e consultas online.</p>

        <h2>Como Funciona?</h2>
        <ul>
            <li>Avaliação online de suas necessidades nutricionais.</li>
            <li>Consultas com nutricionistas especializados.</li>
            <li>Plano alimentar personalizado para suas metas de saúde.</li>
        </ul>

        <h2>Benefícios para Você</h2>
        <ul>
            <li>Consultas rápidas e acessíveis.</li>
            <li>Planos alimentares adaptados às suas necessidades.</li>
            <li>Acompanhamento contínuo e personalizado.</li>
        </ul>
    </section>

    <section id="calculadora-imc">
        <h2>Calculadora de IMC</h2>
        <p>Use a ferramenta abaixo para calcular o seu Índice de Massa Corporal (IMC):</p>
        
        <!-- Código do iframe fornecido -->
        <script src="https://hellosafe.com.br/responsive.js"></script>
        <iframe class="responsive-iframe" src="https://hellosafe.com.br/app/iframe?id=7109&amp;has-title=false&amp;lang=pt-BR" title="calculo imc" frameborder="0" style="top: 0; left: 0; bottom: 0; border: 0; right: 0; width: 100%;"></iframe>
    </section>
</div>

@endsection
