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
					<h3 align="center" style="color:Tomato;">One Point Iteration</h3><br>
					<form method="get" action="{{url('/show/OnePointIteration')}}" align="center">
						<div class="form-group">
							<input type="submit" class="btn btn-primary"/><p>"กดเพื่อดูผลการคำนวน"
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

          $dataInsert = [
  					'XN'=>$XN,
            'Iteration'=>$iteration
  				];

  				\App\One_Point::insert($dataInsert);
        }

        function func($x)
				{
						return 4/($x-3); //x^2-3x-4
				}


			?>
			<div class="col-md-12">
				<div class="a">
					<p style="color:DodgerBlue;">
						สมการ e -x –x = 0  ปรับสมการให้อยู่ในรูป ‘F1(x)=F2(x)’  นั่นคือ x = e-x เมื่อ F 1(x)= x (สมการเส้นตรง) เมื่อ F2(x)= e-x ค่า x ที่เส้นตัดกันคือคําตอบของสมการ
					</p>

				</div>

			</div>

@endsection
