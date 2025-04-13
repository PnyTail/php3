<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'masv' => ['required', 'regex:/^[A-Z]{2}\d{4}$/'],
            'hoten' => 'required|min:3|max:20',
            'tuoi' => 'required|integer|min:16|max:100',
            'ngaysinh' => ['required', 'regex:/^\d{4}-\d{2}-\d{2}$/'], // YYYY-MM-DD
            'cccd' => 'required|digits_between:9,12',
            'email' => 'required|email|regex:/^[\w.+-]+@fpt\.edu\.vn$/',
        ];
    }

    public function messages()
    {
        return [
            'masv.required' => 'Mã SV chưa nhập',
            'masv.regex' => 'Mã SV không đúng định dạng (VD: SE1234)',
            'hoten.required' => 'Họ tên sao không nhập ta',
            'hoten.min' => 'Họ tên sao ngắn quá vậy',
            'hoten.max' => 'Họ tên dài quá bồ ơi',
            'tuoi.required' => 'Tuổi là bắt buộc',
            'tuoi.integer' => 'Tuổi phải là số',
            'tuoi.min' => 'Tuổi phải >= 16',
            'tuoi.max' => 'Tuổi phải <= 100',
            'ngaysinh.required' => 'Ngày sinh bắt buộc',
            'ngaysinh.regex' => 'Ngày sinh phải theo định dạng YYYY-MM-DD',
            'cccd.required' => 'CCCD là bắt buộc',
            'cccd.digits_between' => 'CCCD phải từ 9 đến 12 chữ số',
            'email.required' => 'Email bắt buộc nhập',
            'email.email' => 'Email không đúng định dạng',
            'email.regex' => 'Email phải có đuôi @fpt.edu.vn',
        ];
    }

    public function attributes()
    {
        return [
            'masv' => 'Mã sinh viên',
            'hoten' => 'Họ tên',
            'tuoi' => 'Tuổi',
            'ngaysinh' => 'Ngày sinh',
            'cccd' => 'Căn cước công dân',
            'email' => 'Địa chỉ email',
        ];
    }
}
