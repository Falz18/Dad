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
    
        Service::create($validated);
    
        $filePath = public_path('porto/portfolio.pdf');
    
        return response()->streamDownload(function () use ($filePath) {
            $stream = fopen($filePath, 'r');
            fpassthru($stream);
        }, 'portfolio.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
    
}

