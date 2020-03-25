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
<div>
  <div class="row">
    <div class="col-md-12">
      <h3 align="center" style="color:Tomato;">Newton Rarpson</h3>
        <form action="{{url('show/NewtonRarpson')}}" method="get" align='center'>
          <div class="form-group">
            <input type="submit" class="btn btn-primary"><p>"กดเพื่อดูผลการคำนวน"
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

        $dataInsert = [
          'XN' => $XN,
          'Iteration' => $iteration,
          'Error' => $Error
        ];
        App\Newton_Raspson::insert($dataInsert);
        }
?>
<div class="col-md-12">
	<div class="a">
		<p style="color:DodgerBlue;">
			เป็นวิธีที่นิยมมากที่สุดในการหา Root ของสมการ เนื่องจากรวดเร็ว เราสามารถพิสูจน์ได้(จาก Taylor Series Expansion) ว่า ถ้าโปรแกรม Converge แล้ว Error ใน Iteration ใหม่ จะมีค่าประมาณเท่ากับกําลังสองของ Error ใน Iteration ก่อนหน้านี้ และในกรณีนี้เราเรียกว่าเป็น Quadratic Convergence วิธีการของ Newton-Ralphson สามารถอธิบายได้จากรูปที่ 7.2 ข้างล่าง โดยในกรรมวิธีนี้ เราจะ Estimate คำ ที่ดีกว่า โดยใช้คำ Tangent ที่จุด  ตัดกับแกน 1+ix )] (,[ i i x fx </p>
		<p style="color:MediumSeaGreen;">จัดทำโดย 5904062636258 นายปฐมพร โรจน์ฤทธิไกร</p>
		<p style="color:Orange;">เมื่อเข้ามาที่หน้านี้ ระบบจะทำการคำนวนค่าเพื่อเก็บลงไปที่ฐานข้อมูล โดยมีค่าเริ่มต้น X = 2 เเละ สมการคือ x^3 - x^2 +2</p>
			<p>อย่างไรก็ตาม วิธีของ Newton-Ralphson นั้นมีข้อเสียที่ว่าจะให้ผลลัพธ์ที่ แย่ในกรณีของ Multiple Root และแม้แต่ Simple Root บางครั้งก็มีปัญหา เช่นกรณีของ โดยเริ่ม จาก จะพบว่า Converge ได้ช้ามาก และอัตราการ Converge จะขึ้นกับค่า ที่เลือก 1)( 10 −= xxf 5.00 =x 0 x นอกจากนี้แล้ว วิธีการนี้จะต้องใช้การหา Derivative ของ Function ซึ่งบางครั้งไม่สามารถหาได้ง่ายๆ การ แก้ไขก็คือใช้วิธีการประมาณค่า Derivative ซึ่งเป็นวิธีการของ Secant Method ดังจะกล่าวในหัวข้อต่อไป </p>
	</div>

</div>
@endsection
