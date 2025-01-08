<?php

use App\Http\Controllers\Api\CompetitionController;
use App\Http\Controllers\Api\MatchController;
use Illuminate\Support\Facades\Route;


Route::name('api.')->group(function () {
    Route::get('/get-competition-with-matches', [CompetitionController::class, 'getCompetitionWithMatches'])->name('get-competition-with-matches');
    Route::get('/count-live-matches', [MatchController::class, 'countLiveMatches'])->name('count-live-matches');
});
