<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\ChallengersHasChallenge;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ChallengersHasChallengeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $userId = auth()->id();

        // Buscar la forma de optimizar la consulta con Eager Loading
        $challengeData = Challenge
::join("challengers_has_challenges", "challengers_has_challenges.challenge_id", "=", "challenges.id")
->where("challengers_has_challenges.user_id", "=", $userId)
->select("*")
->get();

//dd($challengeData);

        return view('dashboard.index-challenger')->with(['challengeData' => $challengeData]);
    }

 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Challenge $challenge)
    {
        $userId      = auth()->id();
        $challengeId = $challenge->id;

        // Aquí eloquent asume que el segundo parametro es '='     ↓
        $existUser      = ChallengersHasChallenge::where('user_id', $userId)->exists();
        $existChallenge = ChallengersHasChallenge::where('challenge_id', $challengeId)->exists();

        if ($existUser == TRUE  and $existChallenge == TRUE) {
            return to_route('challenges.index')->with('mensaje', 'Ya estás compitiendo en este challenge');
        } else {
            $registro = new ChallengersHasChallenge;
            $registro->user_id      = $userId;
            $registro->challenge_id = $challengeId;
            $registro->save();

            return to_route('registros')->with(['user' => $userId, 'status' => 'Que empiecen los juegos']);
        }
    }
}
