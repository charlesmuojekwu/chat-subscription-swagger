<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Atymic\Twitter\Facade\Twitter;
use OpenApi\Annotations as OA;

class MessageController extends Controller
{
    /**
     * @OA\Post(
     *     path="/send",
     *     summary="Send message to subscribers",
     *     @OA\Response(response=200, description="Message sent successfully"),
     *     @OA\Response(response=400, description="Invalid request")
     * )
     */
    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        Twitter::postTweet(['status' => $message]);
    }
}
