<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

class WebhookController extends Controller
{
    /**
     * @OA\Post(
     *     path="/webhook",
     *     summary="Receive responses from messenger API",
     *     @OA\Response(response=200, description="Webhook received successfully"),
     *     @OA\Response(response=400, description="Invalid request")
     * )
     */
    public function webhook(Request $request)
    {
        // Logic for handling webhook responses
    }
}
