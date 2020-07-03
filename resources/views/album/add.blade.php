@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Tambah Data Album</h3>
	<br>
	<form action="{{ url('/album') }}" method="POST">
		@csrf
		<table align="center" style="border: 1px solid #000; border-collapse: collapse;">
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">NAMA</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="album_name"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">ARTIST</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="artist_id"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;"></td>
				<td style="border: 1px solid #000; padding: 10px;">
					<input type="submit" value="SIMPAN" class="btn btn-warning">
				</td>
			</tr>
		</table>
	</form>
</div>

@endsection