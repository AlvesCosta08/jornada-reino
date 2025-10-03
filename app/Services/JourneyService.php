<?php

namespace App\Services;

use App\Models\JourneyResponse;
use Illuminate\Support\Facades\Auth;

class JourneyService
{
    public function saveResponse($stationId, $optionIndex)
    {
        $response = new JourneyResponse();
        $response->station_id = $stationId;
        $response->option_index = $optionIndex;
        $response->session_id = session()->getId();

        if (Auth::check()) {
            $response->user_id = Auth::id();
        }

        $response->save();
    }

    public function getResponsesForUser($userId)
    {
        return JourneyResponse::where('user_id', $userId)->get();
    }
}
