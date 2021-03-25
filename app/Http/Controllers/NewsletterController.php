<?php

namespace App\Http\Controllers;

use App\Mail\SendNewsletter;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $store = new Newsletter;
        $store->email = $request->email;
        $store->save();
        Mail::to('tidoraa@gmail.com')->send(new SendNewsletter($request));
        return redirect()->back();
    }
}
