<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;
use App\Http\Requests\SaveChallengeRequest;

class ChallengeController extends Controller
        //  Tenemos los 7 metodos REST
{


    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['index']]);
    }
    // Muestra el listado de challenges.
    public function index()

    {
        $challenges = Challenge::get();
        return view('challenges.index', ['challenges' => $challenges]);
    }
    // Muestra los detalles de un challenge.
    public function show(Challenge $challenge)

    {
        return view('challenges.show', ['challenge' => $challenge]);
    }
    // Devuelve el formulario para crear un nuevo challenge.
    public function create()
     {

        return view('challenges.create', ['challenge' => new Challenge()]);

     }
     // Almacena el challenge en la base de datos.
     public function store(SaveChallengeRequest $request)

     {
        $data = $request->validated();
        if(isset($data["img"])){

            $data["img"] = time().".".$data["img"]->extension();
            $request->img->move(public_path("img_challenges"),  $data["img"]);

        }
        Challenge::create($data);

        // return redirect()->route('challenges.index');
        // La siguiente es una forma mas corta de hacer el redireccionamiento
        return to_route('challenges.index')->with('status','Challenge creado con éxito');

     }
     // Muestra el formulario para actualizar un challenge.
     public function edit(Challenge $numero)

     {
        return view('challenges.edit', ['challenge' => $numero]);
     }
     // Guarda los datos de la actualización en la base de datos.
     public function update(SaveChallengeRequest $request, Challenge $numero)

     {
        $data = $request->validated();
        $challenge = $numero;
        if(isset($data["img"])){

            $data["img"] = time().".".$data["img"]->extension();
            $request->img->move(public_path("img_challenges"),  $data["img"]);

        }
        $challenge->update($data);

        // return redirect()->route('challenges.index');
        // La siguiente es una forma mas corta de hacer el redireccionamiento
        return to_route('challenges.show', $challenge)->with('status','Actualizado con éxito');
     }

     // Elimina un challenge
     public function destroy(Challenge $numero)
     {
         $challenge = $numero;
         $challenge->delete();

         return to_route('challenges.index')->with('status', '!Eliminado de forma exitosa¡');
     }
}

