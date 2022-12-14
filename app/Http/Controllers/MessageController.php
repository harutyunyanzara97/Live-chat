<?php

namespace App\Http\Controllers;

use App\Events\MessageSend;
use App\Jobs\SendEmailJob;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with(['user'])->get();

        return response()->json($messages);
    }

    public function store(Request $request)
    {
        $message = $request->user()->messages()->create([
            'body' => $request->body
        ]);

        broadcast(new MessageSend($message))
            ->toOthers();

        return response()->json($message);
    }
}
