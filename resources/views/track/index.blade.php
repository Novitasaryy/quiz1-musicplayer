@extends('layouts.app')

@section('content')

<div class="container">

	<h3 align="center">Daftar Lagu</h3>
	<br>
		<center><button type="button" class="btn btn-dark"><a href="{{ url('track/create') }}" style="color: white;">Tambah Data</a></button></center>
	<br>

	<table align="center" style="border: 1px solid #000; border-collapse: collapse;">
		<tr class="bg-dark" align="center" style="font-weight: bold; color: white;">
			<td style="border: 1px solid #000; padding: 10px;">JUDUL</td>
			<td style="border: 1px solid #000; padding: 10px;">ALBUM</td>
			<td style="border: 1px solid #000; padding: 10px;">WAKTU</td>
			<td style="border: 1px solid #000; padding: 10px;">PUTAR</td>
			<td style="border: 1px solid #000; padding: 10px;">EDIT</td>
			<td style="border: 1px solid #000; padding: 10px;">HAPUS</td>
		</tr>

		@foreach($track as $row)
		<tr align="center">
			<td style="border: 1px solid #000; padding: 10px;">{{ $row->track_name }}</td>
			<td style="border: 1px solid #000; padding: 10px;">{{ $row->album->album_name }}</td>
			<td style="border: 1px solid #000; padding: 10px;">{{ $row->track_time }}</td>
			<td style="border: 1px solid #000; padding: 10px;">{{ $row->track_file }}</td>
			<td style="border: 1px solid #000; padding: 10px;">
				<button type="button" class="btn btn-warning"><a href="{{ url('track/' . $row->track_id . '/edit') }}" style="color: black;">Edit</a></button>
			</td>
			<td style="border: 1px solid #000; padding: 10px;">
				<form action="{{ url('track/' . $row->track_id) }}" method="POST">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button type="button" class="btn btn-info">Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection