@extends('Navbar')
@section('body')
<?php
// PHP Program to decompose
// a matrix into lower and
// upper traingular matrix
$MAX = 100;

function luDecomposition($mat, $n)
{
    $lower;
    $upper;
    for($i = 0; $i < $n; $i++)
    for($j = 0; $j < $n; $j++)
    {
        $lower[$i][$j]= 0;
        $upper[$i][$j]= 0;
    }
    // Decomposing matrix
    // into Upper and Lower
    // triangular matrix
    for ($i = 0; $i < $n; $i++)
    {

        // Upper Triangular
        for ($k = $i; $k < $n; $k++)
        {

            // Summation of
            // L(i, j) * U(j, k)
            $sum = 0;
            for ($j = 0; $j < $i; $j++)
                $sum += ($lower[$i][$j] *
                         $upper[$j][$k]);

            // Evaluating U(i, k)
            $upper[$i][$k] = $mat[$i][$k] - $sum;
        }

        // Lower Triangular
        for ($k = $i; $k < $n; $k++)
        {
            if ($i == $k)
                $lower[$i][$i] = 1; // Diagonal as 1
            else
            {

                // Summation of L(k, j) * U(j, i)
                $sum = 0;
                for ($j = 0; $j < $i; $j++)
                    $sum += ($lower[$k][$j] *
                             $upper[$j][$i]);

                // Evaluating L(k, i)
                $lower[$k][$i] = (int)(($mat[$k][$i] -
                                $sum) / $upper[$i][$i]);
            }
        }
    }

    // setw is for
    // displaying nicely
    echo "\t\tLower Triangular";
    echo "\t\t\tUpper Triangular\n";

    // Displaying the result :
    for ($i = 0; $i < $n; $i++)
    {
        // Lower
        for ($j = 0; $j < $n; $j++)
            echo "\t" . $lower[$i][$j] . "\t";
        echo "\t";

        // Upper
        for ($j = 0; $j < $n; $j++)
        echo $upper[$i][$j] . "\t";
        echo "\n";
    }
}

// Driver code
$mat = array(array(2, -1, -2),
             array(-4, 6, 3),
             array(-4, -2, 8));

luDecomposition($mat, 3);

// This code is contributed by mits
?> 
@endsection
