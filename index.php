// $inputSeconds = selisih 2 waktu dalam detik
// Output berupa array
function selisihWaktu($inputSeconds) {

    $secondsInAMinute = 60;
    $secondsInAnHour  = 60 * $secondsInAMinute;
    $secondsInADay    = 24 * $secondsInAnHour;

    // extract days
    $days = floor($inputSeconds / $secondsInADay);

    // extract hours
    $hourSeconds = $inputSeconds % $secondsInADay;
    $hours = floor($hourSeconds / $secondsInAnHour);

    // extract minutes
    $minuteSeconds = $hourSeconds % $secondsInAnHour;
    $minutes = floor($minuteSeconds / $secondsInAMinute);

    // extract the remaining seconds
    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
    $seconds = ceil($remainingSeconds);

    // return the final array
    $obj = array(
        'd' => (int) $days,
        'h' => (int) $hours,
        'm' => (int) $minutes,
        's' => (int) $seconds,
    );
   $hasil = array();
    if($inputSeconds > 86400)
    {
      $hasil[] = $obj['d']." Hari";
    }
    if($inputSeconds > 3600)
    {
      $hasil[] = $obj['h']." Jam";
    }
   if($inputSeconds > 60)
    {
      $hasil[] = $obj['m']." Menit";
    }
   
   $hasil[] = $obj['s']." Detik";
   
   return implode(", ", $hasil);
}

// waktu awal
$t1 = strtotime("2001-11-22 11:21:00");

// waktu akhir (waktu sekarang)
$t2 = strtotime(date("Y-m-d H:i:s"));

// selisih waktu dalam detik
$selisih = $t2 - $t1;

var_dump($selisih);


