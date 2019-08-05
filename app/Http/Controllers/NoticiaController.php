<?php

namespace App\Http\Controllers;

use Auth;
use App\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Lista todas as noticias.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $noticia = Noticia::all();
        return view('admin.list-noticia', compact('noticia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.form-add-noticia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required',
            'keywords' => 'required',
            'texto' => 'required',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2000'
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            
            $extention = $request->file('imagem')->extension();
            
            $converted = Str::slug($request->titulo);
            $nameImage = date("Ymd_His").'_'.$converted.'.'.$extention;

            $upload = $request->file('imagem')->storeAs('noticia', $nameImage);

            if (!$upload)
                return redirect()
                            ->back()
                                ->with('msg_danger','Falha ao fazer o upload da imagem!');

        }
        $noticia = Noticia::create([
            'titulo' => $request->titulo,
            'keywords' => $request->keywords,
            'texto' => $request->texto,
            'imagem' => $nameImage,
            'user_id' => Auth::id()
        ]);

        return redirect()
                    ->route('home')
                        ->with('msg_success','Noticia criada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n = Noticia::find($id);
        return view('admin.forms.form-edit-noticia', compact('n'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titulo' => 'required',
            'keywords' => 'required',
            'texto' => 'required',
        ]);
        $nameImage = null;
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            
            $extention = $request->file('imagem')->extension();
            
            $converted = Str::slug($request->titulo);
            $nameImage = date("Ymd_His").'_'.$converted.'.'.$extention;

            $upload = $request->file('imagem')->storeAs('noticia', $nameImage);

            if (!$upload)
                return redirect()
                            ->back()
                                ->with('msg_danger','Falha ao fazer o upload da imagem!');

        }
        $n = Noticia::find($id);
        $n->titulo = $request->titulo;
        $n->keywords = $request->keywords;
        $n->texto = $request->texto;
        if ($nameImage) {
            Storage::delete('noticia/'.$n->imagem);
            $n->imagem = $nameImage;
        }
        $n->save();
        return redirect()->route('home')->with('msg_success','Noticia atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $n = Noticia::find($id);
        Storage::delete('noticia/'.$n->imagem);
        $n->delete();
        return redirect()->route('home')->with('msg_success','Noticia deletada com sucesso!');;
    }
}