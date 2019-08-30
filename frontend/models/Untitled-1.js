function polaSpiral($array_masalah){
  $hasil = [];
  for($i=0; $i<count($array_masalah); $i++){
    for($j=0; $j<count($array_masalah); $j++){
      array_push($hasil, $array_masalah[$i][$j]);
    }
  }
  return $hasil;
}

function getCoins($value){
  $koin = [1,5,7,9,11];
  $hasil = [];
  $status = false;
  if($value <= 33){
    for($i=0; $i<count($koin); $i++){
      $jumlah = 0;
      $tampung = [];
      for($j=0; $j<count($koin); $j++){
        if(($jumlah + $koin[$j]) <= $value){
          array_push($tampung, $koin[$j]);
          $jumlah = $jumlah + $koin[$j];
        }
      }
      if($jumlah != $value){
        break;
      } else {
        array_push($hasil, $tampung)
        $status = true;
      }
    }
    if($status){
      return $hasil;
    } else{
      return -1;
    }
  } else {
    return -1;
  }
}

secretfox
