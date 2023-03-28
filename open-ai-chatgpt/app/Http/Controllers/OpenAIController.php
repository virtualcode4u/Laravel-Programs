<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;

class OpenAIController extends Controller
{
    public function index() : JsonResponse
    {
        $q_search = "Mostly visited places in Mumbai";

        $data = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.env('OPENAI_API_KEY'),
        ])
        ->post("https://api.openai.com/v1/chat/completions", [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $q_search
                ]
            ],
            "temperature" => 0.5,
            "max_tokens" => 200,
            "top_p" => 1.0,
            "frequency_penalty" => 0.52,
            "presence_penalty" => 0.5,
            "stop" => ["11."],
        ])->json();

        return response()->json($data['choices'][0]['message'], 200, array(), JSON_PRETTY_PRINT);
    }
}
