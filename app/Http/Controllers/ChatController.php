<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @extends Controller
 */
class ChatController extends Controller
{
    /**
     * Get message from user input & handle MessageSent event.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $message = $request->input('message');
        MessageSent::dispatch($message);

        return response()->json(['success' => true, 'message' => 'Message ' . $message . ' sent successfully']);
    }
}
