<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tin</title>
</head>

<body>
    <h2>Thêm Tin Mới</h2>

    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ url('/tin/them') }}" method="POST">
        @csrf
        <label for="tieuDe">Tiêu đề:</label>
        <input type="text" id="tieuDe" name="tieuDe" required><br><br>

        <label for="tomTat">Tóm tắt:</label>
        <textarea id="tomTat" name="tomTat" required></textarea><br><br>

        <label for="noiDung">Nội dung:</label>
        <textarea id="noiDung" name="noiDung"></textarea><br><br>

        <label for="urlHinh">URL Hình:</label>
        <input type="text" id="urlHinh" name="urlHinh"><br><br>

        <label for="idLT">Loại tin:</label>
        <select id="idLT" name="idLT" required>
            <option value="1">Xã hội</option>
            <option value="2">Du lịch</option>
        </select><br><br>

        <button type="submit">Thêm tin</button>
    </form>
</body>

</html>