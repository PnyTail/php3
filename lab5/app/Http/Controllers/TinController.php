<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class TinController extends Controller
{
    public function index()
    {
        $tins = Tin::all();
        return view('Tin.danhsach', compact('tins'));
    }

    // Hiển thị form thêm tin
    public function create()
    {
        return view("Tin.them");
    }

    // Lưu tin vào database
    public function store(Request $request)
    {
        $request->validate([
            'tieuDe' => 'required|string|max:255',
            'tomTat' => 'required|string',
            'urlHinh' => 'nullable|string|max:255',
            'idLT' => 'required|integer|in:1,2',
            'noiDung' => 'nullable|string',
        ]);

        Tin::create([
            'tieuDe' => $request->tieuDe,
            'tomTat' => $request->tomTat,
            'urlHinh' => $request->urlHinh,
            'idLT' => $request->idLT,
            'noiDung' => $request->noiDung ?? '', // Đảm bảo không bỏ trống
        ]);

        return redirect('/danhsach')->with('success', 'Thêm tin thành công!');
    }

    public function xoa($id)
    {
        $tin = Tin::find($id);
        if (!$tin) {
            return redirect()->route('danhsach')->with('error', 'Tin không tồn tại!');
        }

        $tin->delete();
        return redirect()->route('danhsach')->with('success', 'Xoá tin thành công!');
    }

    public function sua($id)
    {
        $tin = Tin::findOrFail($id);
        return view('Tin.suatin', compact('tin'));
    }

    public function capnhat(Request $request, $id)
    {
        $tin = Tin::findOrFail($id);
        $tin->tieuDe = $request->input('tieuDe');
        $tin->tomTat = $request->input('tomTat');
        $tin->urlHinh = $request->input('urlHinh');
        $tin->idLT = $request->input('idLT');
        $tin->save();

        return redirect()->route('danhsach')->with('success', 'Cập nhật tin thành công!');
    }
}
