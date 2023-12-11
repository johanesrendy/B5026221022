<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        // Mengambil data dari table chat
        $chats = DB::table('chat')->get();

        foreach ($chats as $chat) {
            // Explode each chat message using space as a separator
            $words = explode(" ", $chat->pesan);

            // Initialize an array to store the modified words
            $modifiedWords = [];

            foreach ($words as $word) {
                switch($word){
                    case ":))":
                        $imagePath = "/assets/images/eas/1.png";
                        $modifiedWords[] = "<img src='$imagePath' alt=':))' class='emote' />";
                        break;
                    case ":3":
                        $imagePath = "/assets/images/eas/2.png";
                        $modifiedWords[] = "<img src='$imagePath' alt=':3' class='emote'/>";
                        break;
                    case ":P":
                        $imagePath = "/assets/images/eas/3.png";
                        $modifiedWords[] = "<img src='$imagePath' alt=':P' class='emote'/>";
                        break;
                    case ":C":
                        $imagePath = "/assets/images/eas/4.png";
                        $modifiedWords[] = "<img src='$imagePath' alt=':C' class='emote'/>";
                        break;
                    case ";)":
                        $imagePath = "/assets/images/eas/5.png";
                        $modifiedWords[] = "<img src='$imagePath' alt=';)' class='emote'/>";
                        break;
                    default:
                        $modifiedWords[] = $word;
                        break;

                }
            }

            // Update the chat message with the modified content
            $chat->pesan = implode(" ", $modifiedWords);
        }

        return view('eas/chat', ['chats' => $chats]);
    }
}