<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function deletar($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return redirect("/home");
    }

    public function adicionar()
    {
        return view("noticias/nova");
    }

    public function cadastrar(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'subtitulo' => 'required',
            'conteudo' => 'required'
        ]);
        $dados = $request->all();
        $dados["user_id"] = auth()->user()->id;
        Noticia::create($dados);
        return redirect("/home");
    }

    public function editar($id)
    {
        $noticia = (object)Noticia::findOrFail($id);
        return view("noticias/editar", compact("noticia"));
    }

    public function edicao(Request $request, $id)
    {
        $noticia = (object)Noticia::findOrFail($id);
        $this->validate($request, [
            'titulo' => 'required',
            'subtitulo' => 'required',
            'conteudo' => 'required'
        ]);
        $input = $request->all();
        $noticia->fill($input)->save();
        return redirect("/home");
    }
}
