<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QuanTriTinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Giới hạn toàn bộ các action
    }

    public function index()
    {
        return "<h1>Danh sách tin</h1>";
    }
}
