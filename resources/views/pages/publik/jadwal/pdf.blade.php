<!DOCTYPE html>
<html>
<head>
<style>
body{
    font-family: DejaVu Sans;
    font-size:11px;
}

h1{
    text-align:center;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border:1px solid #004d4d;
    padding:4px;
}

th{
    background:#e6f2f2;
}

.footer{
    margin-top:10px;
    font-size:10px;
}
</style>
</head>

<body>

<center>
<img src="{{ public_path('images/logo-rs.png') }}" width="90">
<h2>JADWAL DOKTER PRAKTEK</h2>
</center>

<table>
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Spesialis</th>
<th>Hari</th>
<th>Jam</th>
</tr>
</thead>

<tbody>
@php
$no=1;
@endphp

@foreach($jadwal as $row)
<tr>
<td>{{ $no++ }}</td>
<td>{{ $row->namadokter }}</td>
<td>{{ $row->namasubspesialis }}</td>
<td>{{ $row->namahari }}</td>
<td>{{ $row->jadwal }}</td>
</tr>
@endforeach

</tbody>
</table>

<div class="footer">
<p>* Dengan perjanjian</p>
<p>Pendaftaran ditutup 30 menit sebelum poli dimulai.</p>
<p>WA: 0851-5076-3480</p>
</div>

</body>
</html>
