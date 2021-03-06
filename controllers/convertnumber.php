<?php
//=============================================================================================
//==============  FRENCH VERSION ==============================================================
//=============================================================================================
  function int2strF($a){
  $simo = explode('.',$a);
  if (isset($simo[1]) && $simo[1]!=''){
    return int2strF($simo[0]).' virgule '.int2strF($simo[1]) ;
  }
  if ($a<0) return 'moins '.int2strF(-$a);
  if ($a<17){
    switch ($a){
      case 0: return '';
      case 1: return 'un';
      case 2: return 'deux';
      case 3: return 'trois';
      case 4: return 'quatre';
      case 5: return 'cinq';
      case 6: return 'six';
      case 7: return 'sept';
      case 8: return 'huit';
      case 9: return 'neuf';
      case 10: return 'dix';
      case 11: return 'onze';
      case 12: return 'douze';
      case 13: return 'treize';
      case 14: return 'quatorze';
      case 15: return 'quinze';
      case 16: return 'seize';
    }
  } else if ($a<20){
    return 'dix-'.int2strF($a-10);
  } else if ($a<100){
    if ($a%10==0){
      switch ($a){
      case 20: return 'vingt';
      case 30: return 'trente';
      case 40: return 'quarante';
      case 50: return 'cinquante';
      case 60: return 'soixante';
      case 70: return 'soixante-dix';
      case 80: return 'quatre-vingt';
      case 90: return 'quatre-vingt-dix';
      }
    } elseif (substr($a, -1)==1){
      if( ((int)($a/10)*10)<70 ){
        return int2strF((int)($a/10)*10).'-et-un';
      } elseif ($a==71) {
        return 'soixante-et-onze';
      } elseif ($a==81) {
        return 'quatre-vingt-un';
      } elseif ($a==91) {
        return 'quatre-vingt-onze';
      }
    } elseif ($a<70){
      return int2strF($a-$a%10).'-'.int2strF($a%10);
    } elseif ($a<80){
      return int2strF(60).'-'.int2strF($a%20);
    } else{
      return int2strF(80).'-'.int2strF($a%20);
    }
  } else if ($a==100){
    return 'cent';
  } else if ($a<200){
    return int2strF(100).' '.int2strF($a%100);
  } else if ($a<1000){
  if($a%100==0)
    return int2strF((int)($a/100)).' '.int2strF(100);
  if($a%100!=0)return int2strF((int)($a/100)).' '.int2strF(100).' '.int2strF($a%100);
  } else if ($a==1000){
    return 'mille';
  } else if ($a<2000){
    return int2strF(1000).' '.int2strF($a%1000).' ';
  } else if ($a<1000000){
    return int2strF((int)($a/1000)).' '.int2strF(1000).' '.int2strF($a%1000);
  }else if ($a==1000000){
    return 'million';
  }else if($a<1000000000){
    return int2strF((int)($a/1000000)).' '.int2strF(1000000).' '.int2strF($a%1000000);
  }else if ($a==1000000000){
    return 'milliard';
  }else if($a<1000000000000){
    return int2strF((int)($a/1000000000)).' '.int2strF(1000000000).' '.int2strF($a%1000000000);
  }
}

// //==============================================================================================
// //==============	ENGLISH VERSION	==============================================================
// //==============================================================================================
// $nwords = array( "zero", "one", "two", "three", "four", "five", "six", "seven",
//                    "eight", "nine", "ten", "eleven", "twelve", "thirteen",
//                    "fourteen", "fifteen", "sixteen", "seventeen", "eighteen",
//                    "nineteen", "twenty", 30 => "thirty", 40 => "forty",
//                    50 => "fifty", 60 => "sixty", 70 => "seventy", 80 => "eighty",
//                    90 => "ninety" );

// function int2strE($x) {
//    global $nwords;

//    if(!is_numeric($x))
//       $w = '#';
//    else if(fmod($x, 1) != 0)
//       $w = '#';
//    else {
//       if($x < 0) {
//          $w = 'minus ';
//          $x = -$x;
//       } else
//          $w = '';
//       // ... now $x is a non-negative integer.

//       if($x < 21)   // 0 to 20
//          $w .= $nwords[$x];
//       else if($x < 100) {   // 21 to 99
//          $w .= $nwords[10 * floor($x/10)];
//          $r = fmod($x, 10);
//          if($r > 0)
//             $w .= '-'. $nwords[$r];
//       } else if($x < 1000) {   // 100 to 999
//          $w .= $nwords[floor($x/100)] .' hundred';
//          $r = fmod($x, 100);
//          if($r > 0)
//             $w .= ' and '. int2strE($r);
//       } else if($x < 1000000) {   // 1000 to 999999
//          $w .= int2strE(floor($x/1000)) .' thousand';
//          $r = fmod($x, 1000);
//          if($r > 0) {
//             $w .= ' ';
//             if($r < 100)
//                $w .= 'and ';
//             $w .= int2strE($r);
//          }
//       } else {    //  millions
//          $w .= int2strE(floor($x/1000000)) .' million';
//          $r = fmod($x, 1000000);
//          if($r > 0) {
//             $w .= ' ';
//             if($r < 100)
//                $word .= 'and ';
//             $w .= int2strE($r);
//          }
//       }
//    }
//    return $w;
// }
