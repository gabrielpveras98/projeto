@extends('layouts.app', ['class' => 'register-page', 'page' => _('Register Page'), 'contentClass' => 'register-page'])

@section('content')
    <div class="card card-register card-white" style="max-width: 500px; text-align: center; margin: auto;">
        <form class="form" method="post" action="/noticia/cadastrar">
            @csrf
            <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-font"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                                <path
                                    d="M10.943 4H5.057L5 6h.5c.18-1.096.356-1.192 1.694-1.235l.293-.01v6.09c0 .47-.1.582-.898.655v.5H9.41v-.5c-.803-.073-.903-.184-.903-.654V4.755l.298.01c1.338.043 1.514.14 1.694 1.235h.5l-.057-2z"/>
                            </svg>
                        </div>
                    </div>
                    <input type="text" name="titulo"
                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           placeholder="{{ _('Título') }}" value="{{ old('name') }}">
                    {{--                    @include('alerts.feedback', ['field' => 'name'])--}}
                </div>
                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-font-fill"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5.057 4h5.886L11 6h-.5c-.18-1.096-.356-1.192-1.694-1.235l-.298-.01v6.09c0 .47.1.582.903.655v.5H6.59v-.5c.799-.073.898-.184.898-.654V4.755l-.293.01C5.856 4.808 5.68 4.905 5.5 6H5l.057-2z"/>
                            </svg>
                        </div>
                    </div>
                    <input type="text" name="subtitulo"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           placeholder="{{ _('subtítulo') }}" value="{{ old('email') }}">
                    {{--                    @include('alerts.feedback', ['field' => 'email'])--}}
                </div>
                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <textarea type="text" name="conteudo"
                                      class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                      placeholder="conteúdo"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-round btn-lg">{{ _('Adicionar') }}</button>
            </div>
        </form>
    </div>
@endsection
