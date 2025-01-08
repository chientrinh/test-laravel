<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Exceptions\ApiException;
use App\Services\MatchService;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;

class MatchController  extends Controller
{
    use ApiResponses;

    public function __construct(
        private MatchService $matchService
    ) {}


    /**
     *
     * @return JsonResponse
     */
    public function countLiveMatches(): JsonResponse
    {
        try {
            $result = $this->matchService->countLiveMatches();
            return $this->okResponse($result);
        } catch (\Throwable $e) {
            report($e);
            throw new ApiException($e->getCode(), $e);
        }
    }
}
