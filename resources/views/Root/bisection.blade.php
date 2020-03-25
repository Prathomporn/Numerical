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
					<h3 align="center" style="color:Tomato;">Bisection</h3><br>
					<form method="get" action="{{url('/show/Bisection')}}" align="center">
						<div class="form-group">
							<input type="Submit" class="btn btn-primary"/><p>"กดเพื่อดูผลการคำนวน"
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

				function bisection($XL, $XR)
				{
						global $EPSILON;
						if (func($XL) * func($XR) >= 0)
						{
								echo "You have not assumed " . "right a and b","\n";
								return;
						}

						$XM = $XL;
						$XMOLD = 0;
						$Error = 100;
						while ($Error >= $EPSILON)
						{

								$XM = ($XL + $XR) / 2;
								$Error = abs((($XM*$XMOLD)/$XM)*100);
								if (func($XM) == 0.0)
										break;
								else if (func($XM) * func($XL) < 0)
										$XR = $XM;
								else
										$XL = $XM;

								$XMOLD = $XM;

								$dataInsert = [
									'XL'=>$XL,
									'XR'=>$XR,
									'XM'=>$XM,
									'XMOLD'=>$XMOLD,
									'Error'=>$Error
								];
								//dd($dataInsert);
								\App\Bisection::insert($dataInsert);
						}
				}

				$XL =-2;
				$XR = 3;
				$XM = bisection($XL, $XR);
			?>
<div class="col-md-12">
	<div class="a">
		<p style="color:DodgerBlue;">
			การแบ่งครึ่งช่วง (Bisection method) คือการแบ่งออกเป็นสองส่วนเท่ากันในคณิตศาสตร์เป็นวิธีการหารากที่ซ้ำ ๆ การแบ่งออกเป็นสองส่วนเท่ากันช่วงเวลาและจากนั้นเลือกช่วงย่อยซึ่งรากต้องอยู่ในแนวแกน X สำหรับการประมวลผลต่อไป เป็นวิธีที่ง่ายและมีประสิทธิภาพ แต่ก็ยังค่อนข้างช้า ด้วยเหตุนี้มันจึงมักใช้เพื่อหาแนวทางในการแก้ปัญหาโดยประมาณซึ่งใช้เป็นจุดเริ่มต้นของวิธีการบรรจบกันอย่างรวดเร็วมากขึ้น วิธีการนี้เรียกว่าวิธีการลดช่วงเวลา วิธีการค้นหาแบบไบนารี
		</p>
		<p style="color:MediumSeaGreen;">จัดทำโดย 5904062636258 นายปฐมพร โรจน์ฤทธิไกร</p>
		<p style="color:Orange;">เมื่อเข้ามาที่หน้านี้ ระบบจะทำการคำนวนค่าเพื่อเก็บลงไปที่ฐานข้อมูล โดยมีค่าเริ่มต้น XL = -2 , XR = 3 เเละ สมการคือ x^3-x^2+2</p>
			<p>Step1: ทำการเดาจุดสองจุดคือค่า Xl และค่า Xuสมมุติว่าค่า Xl เป็นค่าที่ต่ำกว่าจากนั้นทดสอบว่า f (Xl) f (Xu) < 0 ถ้าไม่ใช้ให้หาจุดใหม่ซึ่งจากขั้นตอนนี้ เรารู้ว่ารากจะต้องอยู่ในช่วงนี้
			<p>Step 2: ทําการประมาณค่า Root ที่ต้องการที่จุดกึ่งกลางระหว่างสองค่าใน Step 1 โดยคํานวณ
			<p>Step 3: หาว่าตอนนี้ Root ที่ต้องการอยู่ในครึ่งไหนดังนี้
			<p>Bisection method
<p>3.1 ถ้า f (Xl) f (Xr) < 0 แสดงว่า Root ที่ต้องการอยู่ในครึ่งล่าง ให้ตั้ง Xu= Xr และกลับไปทํา Step 2

<p>3.2 ถ้า f (Xl) f (Xr) > 0 แสดงว่า Root ที่ต้องการอยู่ในครึ่งบน ให้ตั้ง Xl = Xr และกลับไปทํา Step 2

<p>3.3 ถ้า f (Xl) f (Xr) = 0 แสดงว่าคําตอบที่ต้องการเท่ากับ X</p>
	</div>

</div>
@endsection
