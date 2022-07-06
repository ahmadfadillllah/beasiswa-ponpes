<!DOCTYPE html>
<html>
<head>
	<title>Pengumuman Beasiswa PONPES</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Pengumuman Beasiswa</h4>
		<h6><a target="_blank" href="https://ponpes-alhidayah.com">PONPES Al-Hidayah Kaduaja</a></h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>#</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Total Nilai</th>
                                        <th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($siswa as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->tanggal_lahir }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>{{ $item->status }}</td>
                                        </tr>
                                    @endforeach
		</tbody>
	</table>

</body>
</html>
