@extends('Navbar')
@section('body')
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 align="center">One Point Iteration</h3><br>
					<form method="get" action="{{url('/show/OnePointIteration')}}" align="center">
						<div class="form-group">
							<input type="submit" class="btn btn-primary"/>
						</div>
					</form>
				</div>
			</div>
		</div>

<?php

				$EPSILON = 0.01;
        $Error = 1;
        $XO = 5;
        $iteration = 0;
				while($Error>=$EPSILON){
          $XN = func($XO);
          $Error = abs(($XN-$XO)/$XN);
          $XO = $XN;
          $iteration = $iteration+1;
          echo "<br>iteration = ",$iteration," XN = ",$XN;

          $dataInsert = [
  					'XN'=>$XN,
            'Iteration'=>$iteration
  				];

  				\App\One_Point_Iteration::insert($dataInsert);
        }

        function func($x)
				{
						return 4/($x-3); //x^2-3x-4
				}


			?>
@endsection
