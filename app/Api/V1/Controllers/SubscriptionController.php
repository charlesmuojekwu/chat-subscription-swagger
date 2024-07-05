<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

class SubscriptionController extends Controller
{
    /**
     * @OA\Post(
     *     path="/subscribe",
     *     summary="Subscribe user to chat bot",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="username", type="string"),
     *             @OA\Property(property="email", type="string")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Successful subscription"),
     *     @OA\Response(response=400, description="Invalid request")
     * )
     */
    public function subscribe(Request $request)
    {
        // Logic for subscribing user
    }

    /**
     * @OA\Post(
     *     path="/subscribe/channel",
     *     summary="Subscribe user to channel or chat",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="channel_id", type="string"),
     *             @OA\Property(property="username", type="string")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Successful subscription"),
     *     @OA\Response(response=400, description="Invalid request")
     * )
     */
    public function subscribeChannel(Request $request)
    {
        // Logic for subscribing user to channel or chat
    }
}
