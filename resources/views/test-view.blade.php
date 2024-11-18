<!DOCTYPE html>
<html>
<body>
    <h1>Test Semesters</h1>
    <ul>
    @foreach($semesters as $semester)
        <li>{{ $semester->tahun_ajaran }} - {{ $semester->name }}</li>
    @endforeach
    </ul>
</body>
</html>