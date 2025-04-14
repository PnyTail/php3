<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'status' => true,
            'message' => 'Danh sách sản phẩm',
            'data' => ProductResource::collection($products)
        ]);
    }


    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'tenSP' => 'required',
            'gia' => 'required|integer',
            'anHien' => 'boolean'
        ]);

        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $product = Product::create($input);
        $arr = [
            'status' => true,
            'message' => 'Sản phẩm đã lưu thành công',
            'data' => new ProductResource($product)
        ];

        return response()->json($arr, 201);
    }


    public function show($id)
    {
        $product = Product::find($id);

        if (is_null($product)) {
            return response()->json([
                'success' => false,
                'message' => 'Không có sản phẩm này',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Chi tiết sản phẩm',
            'data' => new ProductResource($product)
        ]);
    }


    public function update(Request $request, Product $product)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'tenSP' => 'required',
            'gia' => 'required|integer',
            'anHien' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ], 200);
        }

        $product->update($input);

        return response()->json([
            'status' => true,
            'message' => 'Sản phẩm đã được cập nhật',
            'data' => new ProductResource($product)
        ]);
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sản phẩm đã được xoá',
            'data' => null
        ]);
    }
}
