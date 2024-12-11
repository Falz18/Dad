<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'userType' => 'required|string',
        ]);

        Service::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'userType' => $validated['userType'],
        ]);

        $file = public_path('porto/portfolio.pdf');

        return response()->download($file);
    }
}

