@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    @auth()
        <div class="row">
            <div class="col-sm-9">
                <h1>
                    Suas notícias
                </h1>
            </div>
            <div class="col-sm-3">
                <a href="/noticia/adicionar">
                    <button class="btn btn-primary">Adicionar notícia</button>
                </a>
            </div>
        </div>
        @foreach($noticias as $noticia)
            <div class="row">
                <div class="col-12">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <div class="row">
                                <div class="col-sm-6 text-left">
                                    <h5 class="card-category">Criação: {{ $noticia->created_at }} / Ultima
                                        edição: {{ $noticia->updated_at }}</h5>
                                    <h1 class="card-title">{{ $noticia->titulo }}</h1>
                                    <h4 class="card-subtitle">{{ $noticia->subtitulo }}</h4>
                                </div>
                                <div class="col-sm-6">
                                    <div class="btn-group btn-group-toggle float-right">
                                        {{--                                        Todo, quando ativado adicionar a classe activate--}}
                                        <a>
                                            <label class="btn btn-sm btn-primary btn-simple" id="0">
                                                <span
                                                    class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Ver</span>
                                                <span class="d-block d-sm-none">
{{--                                        Todo, fazer essa função--}}
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                                            </label>
                                        </a>
                                        <a href="/noticia/editar/{{ $noticia->id }}">
                                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                            <span
                                                class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Editar</span>
                                                <span class="d-block d-sm-none">
{{--                                        Todo, fazer essa função--}}

                                    <i class="tim-icons icon-gift-2"></i>
                                </span>
                                            </label>
                                        </a>
                                        <a href="/noticia/deletar/{{ $noticia->id }}">
                                            <label class="btn btn-sm btn-primary btn-simple" id="2">
                                            <span
                                                class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Deletar</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-tap-02"></i>
                                                </span>
                                            </label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    @foreach(explode("\n", $noticia->conteudo) as $paragrafo)
                                        <p align="justify">
                                            {{ $paragrafo }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endauth
@endsection
