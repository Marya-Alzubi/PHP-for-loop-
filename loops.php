<table border=3>
<h1> excuse my CSS skills! </h1>
<tr>
<td>Exersice number</td>
<td>Answer</td>
</tr>
<?php
//
//
//
//EX1
echo "<tr>";
echo "<td>#1 </td>";
echo "<td>";
for($i=1 ; $i < 11 ; $i++){
    echo $i ;
}
echo "</td>";
echo "</tr>";
//
//
//
//EX2
echo "<tr>";
echo "<td>#2 </td>";
echo "<td>";
$total = 0;
for ( $x2=1 ; $x2 <=30 ; $x2++){
    // echo $x2 ;
    // $total = +$x2 ; // TAKE CARE FOR THE PLACE OF +
    $total += $x2 ;
    
}
echo $total ;
echo "</td>";
echo "</tr>";
//
//
//
//EX3C
echo "<tr>";
echo "<td>#3C </td>";
echo "<td>";
for ($count = 1 ; $count <=5 ; $count++ ){
    for($char = "A" ; $char <= "E" ; $char++ ){
        echo str_repeat("A" , 5-$count). str_repeat($char , $count)."<br>";
        if($count++ > $count){
        break;
        }
    } 
}
echo "</td>";
echo "</tr>";
//
//
//
//EX3B
echo "<tr>";
echo "<td>#3B </td>";
echo "<td>";
for ($count1 = 1 ; $count1 <=5 ; $count1++ ){
    for($num = 1 ; $num <= 5 ; $num++ ){
        echo str_repeat( 1 , 5-$count1). str_repeat($num , $count1)."<br>";
        if($count1++ > $count1){
        break;
        }
    } 
}
echo "</td>";
echo "</tr>";
//
//
//
//EX4
echo "<tr>";
echo "<td>#4 </td>";
echo "<td>";
for ($count = 1 ; $count <=5 ; $count++ ){
    for($num = 1 ; $num <= 5 ; $num++ ){
        $str = "0000"; 
        echo substr_replace($str ,$num ,$count-1 ,0)."<br>" ;
        if($count++ > $count){
        break;
        }
    } 
}
//////////another way [EX4] FIRAAAAS SOLUTION ////////
//
//
//
// for($i = 5 ; $i>= 1 ; $i--){
//     for($num = 1 ; $num <=5 ; $num++){
//         echo str_repeat(0 , 5 - $i) . $num . str_repeat(0 , 5 - $num) . "<br>";
//         if($i-- < $i){
//         break;
//         }
//     }
// }
echo "</td>";
echo "</tr>";
//
//
//
//EX5
echo "<tr>";
echo "<td>#5 </td>";
echo "<td>";
$factorial = 1; 
for($f=5 ; $f>=1 ; $f-- ){
   $factorial *= $f ;
}
echo $factorial;

echo "</td>";
echo "</tr>";
//
//
//
//EX6
echo "<tr>";
echo "<td>#6 </td>";
echo "<td>";
// $i=0;
// $g=0;
// $f = 0;

// while ($i<=5) {
//    $i++;
  
// while ($f<=5){
//     $g+=$i; // 1 - 3
//     echo $g.'<br>'; // 1 - 3
//     $i+=$g; // 2 - 5
//     echo $i.'<br>'; // 2 - 5
//     $f++;
// }
// }
echo "</td>";
echo "</tr>";
//
//
//
//EX7
echo "<tr>";
echo "<td>#7 </td>";
echo "<td>";
$str7 = "OrangeAcademycc";
echo substr_count($str7,"c");
echo "</td>";
echo "</tr>";
//
//
//
/////////////another way [EX7] ////////
// echo "<tr>";
// echo "<td>#7 ANOTHER WAY </td>";
// echo "<td>";
// $text="OrangeAcademycc";
// $search_char="c";
// $count="0";
// for($x="0"; $x< strlen($text); $x++)
//   { 
//     if(substr($text,$x,1)==$search_char)
//     {
//     $count=$count+1;
// 	 }
//   }
// echo $count;
// echo "</td>";
// echo "</tr>";
//
//
//
//EX8
echo "<tr>";
echo "<td>#8 </td>";
echo "<td>";
"<table border=3>";
for($x=1 ; $x <=6 ; $x++){
    echo "<tr>";
    for($y=1 ; $y <=5 ; $y++ ){
        $z = $x * $y; //".$i*$j."
    echo "<td> $x * $y = $z </td>";
    // if($x++ > $x){
    // break;
    // }
    }
    echo "</tr>";
}
echo "</td>";
echo "</tr>";
//
//
//
//EX9
echo "<tr>";
echo "<td>#9 </td>";
echo "<td>";
//
//
echo "</td>";
echo "</tr>";
//
//
//
//EX10
echo "<tr>";
echo "<td>#10 </td>";
echo "<td>";
for($i10=1; $i10 <=10 ; $i10++){
    echo "<tr>";
    for($x10=1; $x10 <=10 ; $x10++){
        $y10= $x10 * $i10 ;
        echo "<td> $y10 </td> ";
    }
    echo "</tr>";
}
//
//
//
//EX11
echo "<tr>";
echo "<td>#11 </td>";
echo "<td>";
for($i11=1 ; $i11<=50 ; $i11++ ){
    if ($i11 % 3 == 0 && $i11 % 5 == 0 ){
        echo $i11  . "FizzBuzz" ."<br>";
    }
    elseif ($i11 % 3 == 0 ){
        echo $i11  . "Fizz" ."<br>";
    } 
    elseif ($i11 % 5 == 0 ){
        echo $i11  . "Buzz" ."<br>";
    }
    else {
        echo $i11 ."<br>";}
    
}
echo "</td>";
echo "</tr>";
//
//
//
//EX12
echo "<tr>";
echo "<td>#12 </td>";
echo "<td>";
$n = 5;
$count = 1;
$n = 5; 
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     echo $count . " ";
     $count++;
   } 
	echo "<br>";
   }

echo "</td>";
echo "</tr>"; 
?>
</table>
