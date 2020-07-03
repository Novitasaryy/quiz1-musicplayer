@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Edit Data Artist</h3>
	<br>
	<form action="{{ url('/artist/'. $row->artist_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table align="center" style="border: 1px solid #000; border-collapse: collapse;">
			<tr>
				<td style="border: 1px solid #000; padding: 10px;">NAMA</td>
				<td style="border: 1px solid #000; padding: 10px;"><input type="text" name="artist_name" value="{{ $row->artist_name }}"></td>
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