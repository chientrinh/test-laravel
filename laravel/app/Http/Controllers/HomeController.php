<?php

namespace App\Http\Controllers;

use App\Services\MatchService;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __construct(
        private MatchService $matchService
    ) {}

    public function index()
    {
        $matchStatus = $this->matchService->matchStatus();
        return Inertia::render('Home/Index', [
            'matchStatus' => $matchStatus,
        ]);
    }
}
