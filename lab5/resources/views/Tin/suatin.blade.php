<form method="POST" action="{{ route('tin.capnhat', ['id' => $tin->id]) }}">
    @csrf
    <label>Tiêu đề:</label>
    <input type="text" name="tieuDe" value="{{ $tin->tieuDe }}"><br>

    <label>Tóm tắt:</label>
    <textarea name="tomTat">{{ $tin->tomTat }}</textarea><br>

    <label>URL Hình:</label>
    <input type="text" name="urlHinh" value="{{ $tin->urlHinh }}"><br>

    <label>Loại tin:</label>
    <select name="idLT">
        <option value="1" {{ $tin->idLT == 1 ? 'selected' : '' }}>Xã hội</option>
        <option value="2" {{ $tin->idLT == 2 ? 'selected' : '' }}>Du lịch</option>
    </select><br>

    <button type="submit">Cập nhật</button>
</form>