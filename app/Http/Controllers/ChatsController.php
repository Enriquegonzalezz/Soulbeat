<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Pusher\Pusher;

class ChatsController extends Controller
{
    public function __construct() 
    {  
        $this->middleware(['auth']);
    }

    public function viewDirects(){
        /*$user = Auth::user();

        $id = $user->id;

        $chats = Chat::where('from', $id) 
             ->whereNull('AcceptFrom')
             ->whereNull('AcceptTo')
             ->get();

        return view('',['chats'=>$chats]);*/
        return view('chats.chats');
    }

    public function viewTransactions(){
        $user = Auth::user();

        $id = $user->id;

        $chats = Chat::where('from', $id) 
             ->whereNotNull('AcceptFrom')
             ->whereNotNull('AcceptTo')
             ->get();

        return view('',['chats'=>$chats]);
    }

    public function showChat(Chat $chat){
        $messages = Message::where('chat',$chat->id)->get();

        return view('',['chat'=>$chat,'messages'=>$messages]);
    }

    public function storeChat(Request $request){
        $user = Auth::user();
        $id = $user->id;

        $validated = $request->validate([
            'to' => ['required','integer'],
        ]);

        $data = array_merge($validated, [
            'from' => $id,
            'AcceptFrom' => $request->has('type') ? 0 : null,
            'AcceptTo' => $request->has('type') ? 0 : null,
        ]);

        Chat::create($data);

        return to_route('');
    }

    public function destroyChat(Chat $chat){
        $chat->delete();

        return to_route('');
    }

    public function updateChatTime(Chat $chat){
        $chat->time += 48;
        $chat->update();

        return to_route('');
    }

    public function updateChatAccept(Request $request,Chat $chat){
        if($request->input('accept') != null){
            $chat->AcceptTo = 1;
        }else{
            $chat->AcceptFrom = 1;
        }

        $chat->update();

        return to_route('');
    }

    public function storeMessage(Request $request,Chat $chat){
        $user = Auth::user();
        $id = $user->id;

        $validated = $request->validate([
            'body' => ['required','string'],
        ]);

        $data = array_merge(['chat'=>$chat->id,'user'=>$id],$validated);

        Message::create($data);

        return to_route('');
    }

    public function destroyMessage(Message $message){
        $message->update(['status'=>0]);

        return to_route('');
    }

    private function SendMessage($message)
    {
        $pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            array(
                'cluster' => config('broadcasting.connections.pusher.options.cluster'),
                'useTLS' => config('broadcasting.connections.pusher.options.useTLS')
            )
        );
    
        $pusher->trigger('public', 'chat', ['message' => $message, 'socket_id' => request()->get('socket_id')]);
    }

    public function broadcast(Request $request): Factory|View|Application
    {
        self::SendMessage($request->get('message'));

        return view('components.chats.messages.my', [
            'text' => $request->get('message'), 'time' => now()->format('H:i')
        ]);
    }

    public function receive(Request $request): Factory|View|Application
    {
        return view('receive', ['message' => $request->get('message')]);
    }
}
