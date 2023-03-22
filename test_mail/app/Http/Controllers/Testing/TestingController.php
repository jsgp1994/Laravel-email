<?php

namespace App\Http\Controllers\Testing;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\TestMail;

class TestingController extends Controller
{
    public function testing(Request $request)
    {
        try {
            Mail::to("c4a0e625d7@fireboxmail.lol")->send(new TestMail());
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return response()->json(["email" => "ok"]);
    }
}
