@extends('Navbar')
@section('body')
<br>
<!-- <div class="container"> -->
	<div class="col-md-6">
		<table width="50" class="w3-table w3-striped" >
			<tr class="w3-green" >
				<th><div align="center">XL</div></th>
				<th><div align="center">XR</div></th>
				<th><div align="center">XM</div></th>
				<th><div align="center">XMOLD</div></th>
				<th><div align="center">Error</div></th>
			</tr>

			@foreach ($false_position as $row)
				<tr>
						<td><div align="center">{{$row['XL']}}</div></td>
						<td><div align="center">{{$row['XR']}}</div></td>
						<td><div align="center">{{$row['XM']}}</div></td>
						<td><div align="center">{{$row['XMOLD']}}</div></td>
						<td><div align="center">{{$row['Error']}} %</div></td>
				</tr>
			@endforeach
		</table>
	</div>
  <div class="col-md-6"></div>
<!-- </div> -->
@endsection
