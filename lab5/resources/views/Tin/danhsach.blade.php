<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin</title>
</head>

<body>
    <h2>Danh sách tin</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Tóm tắt</th>
            <th>Loại tin</th>
        </tr>
        @foreach ($tins as $tin)
        <tr>
            <td>{{ $tin->id }}</td>
            <td>{{ $tin->tieuDe }}</td>
            <td>{{ $tin->tomTat }}</td>
            <td>{{ $tin->idLT == 1 ? 'Xã hội' : 'Du lịch' }}</td>
            <td>
                <a href="{{ route('tin.xoa', $tin->id) }}" onclick="return confirm('Bạn có chắc muốn xoá?')">
                    Xoá
                </a>
            </td>
            <td>
                <a href="{{ route('tin.sua', ['id' => $tin->id]) }}">Sửa</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>