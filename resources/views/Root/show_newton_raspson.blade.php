@extends('Navbar')
@section('body')
<br>
	<div class="col-md-12">
		<table width="50" class="w3-table w3-striped" >
			<tr class="w3-green" >
				<th><div align="center">Iteration</div></th>
				<th><div align="center">XN</div></th>
				<th><div align="center">Error</div></th>
			</tr>

			@foreach ($newton_raspson as $row)
				<tr>
						<td><div align="center">{{$row['Iteration']}}</div></td>
						<td><div align="center">{{$row['XN']}}</div></td>
						<td><div align="center">{{$row['Error']}}</div></td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection
