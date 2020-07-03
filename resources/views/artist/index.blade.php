@extends('layouts.app')

@section('content')

<div class="container">

	<h3 align="center">Daftar Artist</h3>
	<br>
		<center><button type="button" class="btn btn-dark"><a href="{{ url('artist/create') }}" style="color: white;">Tambah Data</a></button></center>
	<br>

	<table align="center" style="border: 1px solid #000; border-collapse: collapse;">
		<tr class="bg-dark" align="center" style="font-weight: bold; color: white;">
			<td style="border: 1px solid #000; padding: 10px;">NAMA</td>
			<td style="border: 1px solid #000; padding: 10px;">EDIT</td>
			<td style="border: 1px solid #000; padding: 10px;">HAPUS</td>
		</tr>

		@foreach($rows as $row)
		<tr align="center">
			<td style="border: 1px solid #000; padding: 10px;">{{ $row->artist_name }}</td>
			<td style="border: 1px solid #000; padding: 10px;">
				<button type="button" class="btn btn-warning"><a href="{{ url('artist/' . $row->artist_id . '/edit') }}" style="color: black;">Edit</a></button>
			</td>
			<td style="border: 1px solid #000; padding: 10px;">
				<form action="{{ url('artist/' . $row->artist_id) }}" method="POST">
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