<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Contact;

class AdminDashboard extends Controller
{
    public function index()
    {
        $portfolios = Service::orderBy('created_at', 'desc')->paginate(10);
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
    
        return view('admin.dashboard', compact('portfolios', 'contacts'));
    }
}
