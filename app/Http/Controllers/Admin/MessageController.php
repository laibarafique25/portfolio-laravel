<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageController extends Controller {
    public function index() { return view('admin.messages.index',['items'=>Message::latest()->paginate(15)]); }
    public function show(Message $message) {
        $message->update(['is_read'=>true]);
        return view('admin.messages.show', ['item'=>$message]);
    }
    public function destroy(Message $message) { $message->delete(); return redirect()->route('admin.messages.index')->with('status','Message deleted.'); }
}
