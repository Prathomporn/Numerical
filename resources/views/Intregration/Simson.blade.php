@extends('Navbar')
@section('body')
<style>
div.a {
  text-align: center;
}

div.b {
  text-align: left;
}

div.c {
  text-align: right;
}

div.d {
  text-align: justify;
}
</style>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 align="center" style="color:Tomato;">Trapezoidal</h3><br>
					<form method="get" action="{{url('/show/Bisection')}}" align="center">
						<!-- <div class="form-group">
							<input type="Submit" class="btn btn-primary"/><p>"กดเพื่อดูผลการคำนวน"
						</div> -->
					</form>
				</div>
			</div>
		</div>

    <?php
// PhP program for simpson's 1/3 rule

// Function to calculate f(x)
function func($x)
{
	return log($x);
}

// Function for approximate integral
function simpsons_($ll, $ul, $n)
{

	// Calculating the value of h
	$h = ($ul - $ll) / $n;

	// Calculating values of x and f(x)
	for ($i = 0; $i <= $n; $i++)
	{
		$x[$i] = $ll + $i * $h;
		$fx[$i] = func($x[$i]);
	}

	// Calculating result
	$res = 0;
	for ($i = 0; $i <= $n; $i++)
	{
		if ($i == 0 || $i == $n)
			$res += $fx[$i];
		else if ($i % 2 != 0)
			$res += 4 * $fx[$i];
		else
			$res += 2 * $fx[$i];
	}

	$res = $res * ($h / 3);

	return $res;
}

// Driver program
	$lower_limit = 4; // Lower limit
	$upper_limit = 5.2; // Upper limit
	$n = 6; // Number of interval
	echo simpsons_($lower_limit, $upper_limit, $n);

// This code is contributed by ajit.
?>




</div>
@endsection
