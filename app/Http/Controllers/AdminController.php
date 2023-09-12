<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
{
    // Simule des statistiques factices (tu utiliseras tes propres données réelles ici)
    $totalUsers = 1000;
    $totalOrders = 500;
    $totalRevenue = 75000;

    return view('AdminDasbord', compact('totalUsers', 'totalOrders', 'totalRevenue'));
}

}
