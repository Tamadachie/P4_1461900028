<!DOCTYPE html>
<html>
<head>
<title>1461900028</title>
</head>
<body>
<h3>Data buku</h3>
<a href="/buku/ekspor"> ekspor </a>
<table border="1">
<tr>
<th>Id</th>
<th>Nama</th>
<th>Jenis Buku</th>
</tr>
@foreach($rak_buku as $b)
<tr>
<td>{{ $b->id }}</td>
<td>{{ $b->judul }}</td>
<td>{{ $b->jenis }}</td>
</tr>
@endforeach
</table>
</body>
</html>
