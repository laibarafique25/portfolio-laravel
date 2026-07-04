<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function store(Request $r) {
        $data = $r->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email|max:180',
            'subject' => 'nullable|string|max:180',
            'body'    => 'required|string|max:5000',
        ]);
        Message::create($data);
        return back()->with('status', 'Thanks! Your message has been sent.');
    }
}
