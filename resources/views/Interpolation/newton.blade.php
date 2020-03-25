@extends('Navbar')
@section('body')
<?php
// PHP Program to interpolate using
// newton forward interpolation

// calculating u mentioned in the formula
function u_cal($u, $n)
{
    $temp = $u;
    for ($i = 1; $i < $n; $i++)
        $temp = $temp * ($u - $i);
    return $temp;
}

// calculating factorial of given number n
function fact($n)
{
    $f = 1;
    for ($i = 2; $i <= $n; $i++)
        $f *= $i;
    return $f;
}

// Driver Code

// Number of values given
$n = 4;
$x = array( 45, 50, 55, 60 );

// y[,] is used for difference table
// with y[,0] used for input
$y = array_fill(0, $n,
     array_fill(0, $n, 0));
$y[0][0] = 0.7071;
$y[1][0] = 0.7660;
$y[2][0] = 0.8192;
$y[3][0] = 0.8660;

// Calculating the forward difference
// table
for ($i = 1; $i < $n; $i++)
{
    for ($j = 0; $j < $n - $i; $j++)
        $y[$j][$i] = $y[$j + 1][$i - 1] -
                     $y[$j][$i - 1];
}

// Displaying the forward difference table
for ($i = 0; $i < $n; $i++)
{

    print($x[$i] . "\t");
    for ($j = 0; $j < $n - $i; $j++)
        print($y[$i][$j] . "\t");
    print("\n");
}

// Value to interpolate at
$value = 52;

// initializing u and sum
$sum = $y[0][0];
$u = ($value - $x[0]) / ($x[1] - $x[0]);
for ($i = 1; $i < $n; $i++)
{
    $sum = $sum + (u_cal($u, $i) * $y[0][$i]) /
                                    fact($i);
}

print("\nValue at " . $value .
      " is " . round($sum, 6));

// This code is contributed by mits
?>
@endsection
