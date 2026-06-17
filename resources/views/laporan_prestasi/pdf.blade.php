<!DOCTYPE html>

<html>

<head>

```
<meta charset="utf-8">

<style>

    body{
        font-family: sans-serif;
        font-size:12px;
    }

    table{
        width:100%;
        border-collapse:collapse;
        margin-top:10px;
    }

    table,th,td{
        border:1px solid #000;
    }

    th,td{
        padding:6px;
    }

    h2,h3{
        text-align:center;
    }

</style>
```

</head>

<body>

<h2>
    LAPORAN PRESTASI SISWA
</h2>

<hr>

<p>
    Nama :
    {{ $siswa->nama }}
</p>

<p>
    NIS :
    {{ $siswa->nis }}
</p>

<p>
    Kelas :
    {{ $siswa->kelas->nama_kelas }}
</p>

<h3>
    Prestasi Akademik
</h3>

<table>

```
<thead>

    <tr>
        <th>Mapel</th>
        <th>Semester</th>
        <th>Nilai</th>
    </tr>

</thead>

<tbody>

    @foreach($akademik as $item)

    <tr>

        <td>
            {{ $item->mataPelajaran->nama_mapel }}
        </td>

        <td>
            {{ $item->semester }}
        </td>

        <td>
            {{ $item->nilai }}
        </td>

    </tr>

    @endforeach

</tbody>
```

</table>

<h3>
    Prestasi Non Akademik
</h3>

<table>

```
<thead>

    <tr>
        <th>Kegiatan</th>
        <th>Tingkat</th>
        <th>Juara</th>
    </tr>

</thead>

<tbody>

    @foreach($nonAkademik as $item)

    <tr>

        <td>
            {{ $item->nama_kegiatan }}
        </td>

        <td>
            {{ $item->tingkat }}
        </td>

        <td>
            {{ $item->juara }}
        </td>

    </tr>

    @endforeach

</tbody>
```

</table>

</body>
</html>
