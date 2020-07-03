@extends('layouts.app')

@section('content')

<div class="container">

	<h3 align="center">Tambah Lagu</h3>
	<br>
	<form action="{{ url('/track') }}" method="POST">
		@csrf
		<table align="center" style="border: 1px solid #000; border-collapse: collapse;">
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">JUDUL</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="track_name" required=""></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">ALBUM</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="album_id"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">DURASI</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="track_time" required=""></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">FILE (MP3)</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="file" name="track_file"></td>
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