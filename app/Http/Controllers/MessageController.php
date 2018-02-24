<?php

namespace App\Http\Controllers;

use App\Events\MessagePosted;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $messages = Message::where([
                ['user_id', Auth::id()],
                ['reciever_id', $id]
            ])
            ->orWhere([
                ['user_id', $id],
                ['reciever_id', Auth::id()]  
            ])
            ->with('user')
            ->get();

        return request()->ajax() ? $messages : view('chat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // add validation
        $message = Auth::user()
            ->messages()
            ->create([
                'body'         => $request->body,
                'reciever_id'  => $request->reciever
            ]);

        broadcast(new MessagePosted($message, Auth::user()))
            ->toOthers();

        return response('Success', 201);
    }

}
