@extends('layouts.app')
@section('body')
    <section class="planofundo flex-jc w-100 h-100">
        <div class="container flex-jc flex">
            <div class="flex-c w-100 flex-jc">
                <div class="tituloPrincipal flex-c w-100 white">
                    <h1>Portfólio</h1>
                    <h2>Web Developer</h2>
                </div>
                <div class="subtitulo">
                    <p>Prazer me chamo Ruan sou desenvolvedor web junior, focado em <span class="red">desenvolver soluções</span> á seus problemas. Possuo experiência em soluções onde mais <span class="red">de 25 mil clientes</span> utilizam e recomendam. Para maiores informações entre em contato e faça sua consultoria.</p>
                </div>
                <div class="sobremim flex-ac flex-jc">
                    <a href="">Sobre mim</a>
                </div>
            </div>
            <div class="tecnologias flex-ac flex-jc flex-c gap-2">
                {{-- <img src="{{asset('img/user.jpg')}}" alt="RUAN"> --}}
            </div>
        </div>
    </section>
    @include('includes.sobremim')
    @include('includes.experiencias')
    @include('includes.projetos')
    @include('includes.contato')
@endsection
    