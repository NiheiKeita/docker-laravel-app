<?php


// const TABLE = [
//     'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',
//     'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
//     'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
//     'Y', 'Z', '2', '3', '4', '5', '6', '7',
//   ];
  $t=array_merge(range('A','Z'),range('2','7'));
  while($line=STDIN) {
    $line=rtrim($line);
    $bits='';
    for($i=0;$i++<strlen($line);) {
      $bits.=str_pad(base_convert(strval(ord($line[$i])),10,2),8,'0',STR_PAD_LEFT);
    }
    $base32='';
    foreach(str_split($bits,5)as$b) {
      $base32.=t[base_convert(str_pad($b,5,'0'),2,10)];
    }
    $base32.=match(strlen($bits)%40){
      8=>'======',
      16=>'====',
      24=>'===',
      32=>'=',
      default => '',
    };
    echo $base32, PHP_EOL;
  }
