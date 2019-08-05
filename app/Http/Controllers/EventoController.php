<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Evento;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
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
     * Lista todos os eventos.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $evento = Evento::all();
        return view('admin.list-evento', compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.form-add-evento');
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
            'evento' => 'required',
            'carga_horaria' => 'required',
            'data' => 'required',
            'preco' => 'required',
            'texto' => 'required',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2000'
        ]);
        
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            
            $extention = $request->file('imagem')->extension();
            
            $converted = Str::slug($request->evento);
            $nameImage = date("Ymd_His").'_'.$converted.'.'.$extention;
            
            $upload = $request->file('imagem')->storeAs('evento', $nameImage);
            
            if (!$upload)
            return redirect()
                        ->back()
                            ->with('msg_danger','Falha ao fazer o upload da imagem!');
            
        }

        $evento = Evento::create([
            'titulo' => $request->evento,
            'carga_horaria' => $request->carga_horaria,
            'preco' => $request->preco,
            'data' => $request->data,
            'texto' => $request->texto,
            'inscrever' => $request->inscr,
            'imagem' => $nameImage
        ]);

        return redirect()
                    ->route('home')
                        ->with('msg_danger','Evento criada com secesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $e = Evento::find($id);
        return view('admin.forms.form-edit-evento', compact('e'));
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
            'carga_horaria' => 'required',
            'preco' => 'required',
            'data' => 'required',
            'texto' => 'required',
        ]);

        $nameImage = null;
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            
            $extention = $request->file('imagem')->extension();
            
            $converted = Str::slug($request->titulo);
            $nameImage = date("Ymd_His").'_'.$converted.'.'.$extention;

            $upload = $request->file('imagem')->storeAs('evento', $nameImage);

            if (!$upload)
                return redirect()
                            ->back()
                                ->with('msg_danger','Falha ao fazer o upload da imagem!');

        }

        $e = Evento::find($id);
        $e->titulo = $request->titulo;
        $e->carga_horaria = $request->carga_horaria;
        $e->data = $request->data;
        $e->preco = $request->preco;
        $e->texto = $request->texto;
        $e->inscrever = $request->inscr;
        
        if ($nameImage) {
            Storage::delete('evento/'.$e->imagem);
            $e->imagem = $nameImage;
        }
        $e->save();
        return redirect()->route('home')->with('msg_success','Evento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $e = Evento::find($id);
        Storage::delete('evento/'.$e->imagem);
        $e->delete();
        return redirect()->route('home')->with('msg_success','Evento deletado com sucesso!');
    }
}
