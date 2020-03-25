@extends('Navbar')
@section('body')
<?php
function func($x){ return $x * $x * $x - $x * $x + 2; }//x^3 - x^2 +2
function derivfunc($x0,$x1){
	if(func($x1)-func($x0) == 0){
		return 1;
	}else{
		return ($x1-$x0)/(func($x1)-func($x0));
	}
} //ฟังค์ชั่น diff

$EPSILON = 0.01;
$Error = 1;
$XO = 0;
$X1 = 1;
$iteration = 0;
while($Error>=$EPSILON){
			$XN = $X1-(func($X1) / derivFunc($XO,$X1));;
			$Error = abs(($XN-$XO)/$XN);
			$XO = $XN;
			$iteration = $iteration+1;
			echo "<br>iteration = ",$iteration," XN = ",$XN, " Error = ",$Error;
}
?>
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
