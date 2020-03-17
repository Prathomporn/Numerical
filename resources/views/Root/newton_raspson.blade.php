@extends('Navbar')
@section('body')
<div>
  <div class="row">
    <div class="col-md-12">
      <h3 align="center">Newton Rarpson</h3>
        <form action="{{url('show/NewtonRarpson')}}" method="get" align='center'>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="blablablah" >
          </div>
        </form>
    </div>
  </div>s
</div>

<?php
        function func($x){ return $x * $x * $x - $x * $x + 2; }//x^3 - x^2 +2
        function derivfunc($x){ return 3*$x*$x-2*$x; } //ฟังค์ชั่น diff

        $EPSILON = 0.01;
        $Error = 1;
        $XO = 2;
        $iteration = 0;
        while($Error>=$EPSILON){
              $XN = $XO-(func($XO) / derivFunc($XO));;
              $Error = abs(($XN-$XO)/$XN);
              $XO = $XN;
              $iteration = $iteration+1;
              echo "<br>iteration = ",$iteration," XN = ",$XN, " Error = ",$Error;

        $dataInsert = [
          'XN' => $XN,
          'Iteration' => $iteration,
          'Error' => $Error
        ];
        App\Newton_Raspson::insert($dataInsert);
        }
?>
@endsection
