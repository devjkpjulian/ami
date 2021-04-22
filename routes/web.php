<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('users.create');
});

Route::get('/game', function () {
    if(auth()->check() && auth()->user()->is_played == false)
    {
        $user = App\Models\User::findOrFail(auth()->user()->id);
        $findUser = App\Models\UserWhiteList::where('is_won',false)->where('email',$user->email)->first();

        if(!is_null($findUser))
        {
            $randomizer = array(1, 1, 1);
            $user->winner = true;
            $findUser->is_won = true;
            $findUser->save();
        } else {
            $findUser = App\Models\UserWhiteList::where('is_won',false)->where('name',$user->name)->first();
            if(!is_null($findUser))
            {
                $randomizer = array(1, 1, 1);
                $user->winner = true;
                $findUser->is_won = true;
                $findUser->save();
            } else {
                $randomizer = array(rand(0, 1), 0, rand(0, 1));
                $user->winner = false;
            }
        }

        foreach($randomizer as $result){
            $results[] = $result;
        }

        $user->is_played = true;
        $user->save();

        return view('game')->with('results', json_encode($results, JSON_NUMERIC_CHECK));
    }
    else {
        auth()->logout();
        return redirect('/');
    }
});

Route::resource('users', 'App\Http\Controllers\UserController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
