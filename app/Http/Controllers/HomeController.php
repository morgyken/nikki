<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Posts::orderBy('created_at', 'desc')->paginate(3);

        return view('home', ['posts'=> $post]);
    }

    public function general()
    {
            return view('welcome');
    }


    public function posts(Request $request)
    {

        $post = new Posts;

        $post->urlpost = $request->urlpost;

        $post->email = $request->email;

        $post->save();

        return redirect()->route('general');

    }

public function sendMail()
   {
      Mail::send(['text'=>"mail" ], ['data', 'Sarthak'], function($message) {
           // Set the receiver and subject of the mail.
           $message->to('morgyken@gmail.com', 'Receiver Name')->subject('My Subject is here');
           // Set the sender
           $message->from('morgyken@morgyken.com','bitfumes');
       });

       return redirect()->route('general');
   }
}
