@extends('Navbar')
@section('body')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 align="center">False Position</h3><br>
          <form method="get" action="{{url('/show/FalsePosition')}}" align="center">
            <div class="form-group">
              <input type="submit" class="btn btn-primary"/>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php

    				$EPSILON = 0.01;

    				function func($x)
    				{
    						return $x * $x * $x - $x * $x + 2; //x^3-x^2+2
    				}

    				function bisection($a, $b)
    				{
    						global $EPSILON;
    						if (func($a) * func($b) >= 0)
    						{
    								echo "You have not assumed " . "right a and b","\n";
    								return;
    						}

    						$c = $a;
    						while (($b - $a) >= $EPSILON)
    						{
                    $c = ( $a + $b ) / 2;

    								if (func($c) == 0.0)
    										break;
    								else if (func($c) * func($a) < 0)
    										$b = $c;
    								else
    										$a = $c;

    						}
    						echo "The value of root is : " , $c;
    				}

    				$a =-2;
    				$b = 3;
    				$c = bisection($a, $b);

    				$dataInsert = [
    					'XL'=>$a,
    					'XR'=>$b,
    					'XM'=>$c
    				];
    				//dd($dataInsert);
    				\App\False_Position::insert($dataInsert);
    			?>
@endsection
