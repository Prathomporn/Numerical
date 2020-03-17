@extends('Navbar')
@section('body')
    <div class="container">
        <div class="row">
              <div class="col-md-12">
                  <h3 align="center">Secant Method</h3>
                  <form method="get" action="{{url('/show/Secant')}}" align="center">
                      <div class="form-group">
                          <input type="submit" class="btn btn-primary">

                      </div>
                  </form>
              </div>
        </div>
    </div>

    <?php
    function func($x){ return $x * $x * $x - $x * $x + 2; }//x^3 - x^2 +2
    function derivfunc($x0,$x1){ return ($x1-$x0)/(func($x1)-func($x0)); } //ฟังค์ชั่น diff

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
@endsection
