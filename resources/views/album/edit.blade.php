@extends('layouts.app')

@section('content')

<div class="container">

	<h3 align="center">Edit Data Album</h3>
	<br>
	<form action="{{ url('/album/'. $row->album_id) }}" method="POST">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table align="center" style="border: 1px solid #000; border-collapse: collapse;">
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">NAMA</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="album_name" value="{{ $row->album_name }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">ARTIST</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="artist_id" value="{{ $row->artist_id }}"></td>
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