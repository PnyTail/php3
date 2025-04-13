<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Nhập học sinh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 border border-primary rounded p-4">
        <h3 class="mb-4">Nhập thông tin học sinh</h3>

        {{-- Hiển thị lỗi --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Có lỗi xảy ra:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="/hs">
            @csrf
            <div class="mb-3">
                <label class="form-label">Họ tên học sinh</label>
                <input type="text" name="hoten" class="form-control" value="{{ old('hoten') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Tuổi</label>
                <input type="number" name="tuoi" class="form-control" value="{{ old('tuoi') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Ngày sinh</label>
                <input type="date" name="ngaysinh" class="form-control" value="{{ old('ngaysinh') }}">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>