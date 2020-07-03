@extends('layouts.app')

@section('content')

<div class="container">

	<h3 align="center">Edit Lagu</h3>
	<br>
	<form action="{{ url('/track/' . $row->track_id) }}" method="POST">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table align="center" style="border: 1px solid #000; border-collapse: collapse;">
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">JUDUL</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="track_name" value="{{ $row->track_name }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">ALBUM</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="album_id" value="{{ $row->album_id }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">DURASI</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="track_time" value="{{ $row->track_time }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">FILE (MP3)</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="file" name="track_file" value="{{ $row->track_file }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;"></td>
				<td style="border: 1px solid #000; padding: 10px;">
					<input type="submit" value="UPDATE" class="btn btn-warning">
				</td>
			</tr>
		</table>
	</form>
</div>

@endsection