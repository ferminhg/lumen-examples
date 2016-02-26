<?php

use App\Models\Quote;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    $count = Quote::query()->get()->count();
    $day = (int) date('z');
    $page = $day % $count +1;

    $quotes = Quote::query()->get()->all();

    $pos = rand(0, sizeof($quotes)-1);
    if (empty($quotes)) {
        throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
    }
    return view('quote', ['quote' => $quotes[$pos]]);
});


$app->get('/{id}', function($id) use ($app) {
    $quote = Quote::query()->findOrFail($id);
    return view('quote', ['quote' => $quote]);
});

