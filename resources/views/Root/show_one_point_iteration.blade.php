@extends('Navbar')
@section('body')
<br>
<!-- <div class="container"> -->
	<div class="col-md-6">
		<table width="50" class="w3-table w3-striped" >
			<tr class="w3-green" >
				<th><div align="center">Iteration</div></th>
				<th><div align="center">X ใหม่</div></th>
			</tr>

			@foreach ($one_point_iteration as $row)
				<tr>
						<td><div align="center">{{$row['Iteration']}}</div></td>
						<td><div align="center">{{$row['XN']}}</div></td>
				</tr>
			@endforeach
		</table>
	</div>
  <div class="col-md-6"></div>
<!-- </div> -->
@endsection
