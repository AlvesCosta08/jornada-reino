<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrayerRequest;
use Illuminate\Http\Request;

class PrayerRequestController extends Controller
{
    public function index()
    {
        // Opcional: só permitir seu e-mail
        if (auth()->user()->email !== 'seu@email.com') {
            abort(403, 'Acesso negado.');
        }

        $requests = PrayerRequest::latest()->paginate(20);
        return view('admin.prayer-requests', compact('requests'));
    }
}
