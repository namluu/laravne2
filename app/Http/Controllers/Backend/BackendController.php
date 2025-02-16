<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('backend.index', ['user' => $user]);
    }
}
