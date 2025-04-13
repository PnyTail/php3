<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HsController extends Controller
{
    public function hs()
    {
        return view('nhaphs');
    }

    public function hs_store(Request $request)
    {
        $validated = $request->validate([
            'hoten' => 'required|min:3|max:20',
            'tuoi' => 'required|integer|between:16,100',
            'ngaysinh' => 'required|date',
        ]);

        return "Code xử lý lưu thông tin học sinh";
    }
}
