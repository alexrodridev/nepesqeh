<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;

class ArtigoController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artigo = Artigo::all();
        return view('admin.list-artigo', compact('artigo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.form-add-artigo');
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
            'palavra_chave' => 'required',
            'autor' => 'required',
            'artigo' => 'required',
        ]);

        $artigo = Artigo::create([
            'titulo' => $request->titulo,
            'key' => $request->palavra_chave,
            'autores' => $request->autor,
            'article' => $request->artigo
        ]);

        return redirect()
                    ->route('home')
                        ->with('msg_success','Artigo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Artigo::find($id);
        return view('admin.forms.form-edit-artigo', compact('a'));
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
            'palavra_chave' => 'required',
            'autor' => 'required',
            'artigo' => 'required',
        ]);

        $a = Artigo::find($id);
        $a->titulo = $request->titulo;
        $a->key = $request->palavra_chave;
        $a->autores = $request->autor;
        $a->article = $request->artigo;
        $a->save();

        return redirect()
                    ->route('home')
                        ->with('msg_success','Artigo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artigo::where('id',$id)->delete();
        return redirect()->route('home')->with('msg_success','Artigo deletado com sucesso!');
    }
}