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
// PHP program to implement Trapezoidal rule

// A sample function whose definite
// integral's approximate value is
// computed using Trapezoidal rule
function y($x)
{

// Declaring the function
// f(x) = 1/(1+x*x)
return 1 / (1 + $x * $x);
}

// Function to evalute the
// value of integral
function trapezoidal($a, $b, $n)
{

// Grid spacing
$h = ($b - $a) / $n;

// Computing sum of first
// and last terms
// in above formula
$s = y($a) + y($b);

// Adding middle terms
// in above formula
for ($i = 1; $i < $n; $i++)
  $s += 2 * Y($a + $i * $h);

// h/2 indicates (b-a)/2n.
// Multiplying h/2 with s.
return ($h / 2) * $s;
}

// Driver Code
// Range of definite integral
$x0 = 0;
$xn = 1;

// Number of grids.
// Higher value means
// more accuracy
$n = 6;

echo("Value of integral is ");
echo(trapezoidal($x0, $xn, $n));

// This code is contributed by nitin mittal
?>



</div>
@endsection
