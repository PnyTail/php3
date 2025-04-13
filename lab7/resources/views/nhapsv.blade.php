<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Nhập sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h3>Nhập thông tin sinh viên</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('sv.store') }}">
            @csrf

            <div class="mb-3">
                <label>Mã SV</label>
                <input type="text" name="masv" class="form-control" value="{{ old('masv') }}">
                @error('masv') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Họ tên</label>
                <input type="text" name="hoten" class="form-control" value="{{ old('hoten') }}">
                @error('hoten') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Tuổi</label>
                <input type="text" name="tuoi" class="form-control" value="{{ old('tuoi') }}">
                @error('tuoi') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Ngày sinh</label>
                <input type="text" name="ngaysinh" class="form-control" value="{{ old('ngaysinh') }}">
                @error('ngaysinh') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>CCCD</label>
                <input type="text" name="cccd" class="form-control" value="{{ old('cccd') }}">
                @error('cccd') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Xử lý</button>
        </form>
    </div>
</body>

</html>