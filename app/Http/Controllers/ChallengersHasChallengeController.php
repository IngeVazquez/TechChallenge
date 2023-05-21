<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\ChallengersHasChallenge;
use Illuminate\Http\Request;

class ChallengersHasChallengeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Challenge $challenge)
    {

        $userId      = auth()->id();
        $challengeId = $challenge->id;
       // dd($userId, $challengeId);
        return view('dashboard.index-challenger', [
            'userId'       => $userId,
             'challengeId' => $challengeId ]);
    }
}
