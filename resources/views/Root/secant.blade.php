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
                  <h3 align="center" style="color:Tomato;">Secant Method</h3>
                  <form method="get" action="{{url('/show/Secant')}}" align="center">
                      <!-- <div class="form-group">
                          <input type="submit" class="btn btn-primary"><p>"กดเพื่อดูผลการคำนวน"

                      </div> -->
                  </form>
              </div>
        </div>
    </div>

    <div class="col-md-12">
    	<div class="a">
    		<p style="color:DodgerBlue;">
    			จากที่กล่าวมาแล้ว ในการใช้วิธีของ Newton-Ralphson Method นั้น เราจะต้องหา Derivative ของ Function ซึ่ง บาง Function จะหาค่า Derivative ได้ยากมาก ในกรณีเช่นนี้ เราอาจจะใช้วิธีการประมาณค่า Derivative </p>
    		<p style="color:MediumSeaGreen;">จัดทำโดย 5904062636258 นายปฐมพร โรจน์ฤทธิไกร</p>
    		<p style="color:Orange;">เมื่อเข้ามาที่หน้านี้ ระบบจะทำการคำนวนค่าเพื่อเก็บลงไปที่ฐานข้อมูล โดยมีค่าเริ่มต้น X0 = 0 , X1 = 1 เเละ สมการคือ x^3 - x^2 +2</p>
    			<p>สังเกตว่าวิธีการนี้จําต้องใช้ค่า Estimate ของ x จํานวนสองค่า
Secant Method อาจจะไม่ Converge ถ้าเราเลือกสองจุดที่ไม่เหมาะสม แต่ถ้ามัน Converge แล้ว มันจะ Converge ได้เร็วเกือบเท่าๆ Newton-Ralphson Method อย่างไรก็ตาม การ Convergence ขึ้นอยู่กับ Function และ จุดเริ่มต้นที่เลือก </p>
    	</div>

    </div>

    <?php
    function func($x){ return $x * $x * $x - $x * $x + 2; }//x^3 - x^2 +2
    function derivfunc($x0,$x1){
      if(func($x1)-func($x0) == 0){
        return 1;
      }else{
        return ($x1-$x0)/(func($x1)-func($x0));
      }
    } //ฟังค์ชั่น diff

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
