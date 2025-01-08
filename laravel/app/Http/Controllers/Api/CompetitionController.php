<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Exceptions\ApiException;
use App\Http\Requests\Competition\GetCompetitionWithMatchesRequest;
use App\Services\CompetitionService;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;

class CompetitionController extends Controller
{
    use ApiResponses;

    public function __construct(
        private CompetitionService $competitionService
    ) {}

    /**
     *
     * @return JsonResponse
     */
    public function getCompetitionWithMatches(GetCompetitionWithMatchesRequest $request): JsonResponse
    {
        try {
            $result = $this->competitionService->getCompetitionWithMatches($request->validated());
            return $this->okResponse($result);
        } catch (\Throwable $e) {
            report($e);
            throw new ApiException($e->getCode(), $e);
        }
    }
}
