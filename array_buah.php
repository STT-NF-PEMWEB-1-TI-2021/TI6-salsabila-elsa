<?php
 $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
 // cetak buah ke index ke 2
 echo $ar_buah[2];
 // cetak jumlah buah
 echo '<br/>Jumlah Buah ' . count($ar_buah);
 // cetak seluruh buah
 echo '<ol>';
 foreach($ar_buah as $buah){
 echo '<li>'. $buah .'</li>';
 }
 echo '</ol>';
 // tambahkan buah
 $ar_buah[]="Durian";
 // hapus buah index ke 1
 unset($ar_buah[1]);
 // ubah buah index ke 2 menjadi Manggis
 $ar_buah[2]="Manggis";
 // cetak seluruh buah dengan index nya
 echo '<ul>';
 foreach($ar_buah as $k => $v){
 echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
 }
 echo '</ul>';
 ?>

 <?php
 $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
 echo '<ol>';
 foreach($ar_buah as $k =>$v) {
     echo '<li>'.$k.'-' . $v .'</li>';
 }
    echo '</ol>';
    sort ($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach ($ar_buah as $k =>$v) {
        echo '<li>'.$k.'-' . $v . '</li>';
    }
    echo '</ol>';
    ?>

<?php
    $tims = ["erwin","heru","ali","zaki"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person.'<br/>;
    }
    echo "<hr>";
?>

<?php
 $tims = ["erwin","heru","ali","zaki"];
    array_push($tims,"wati");
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>

<?php
    $tims = ["erwin","heru","ali","zaki"];
    array_shift($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>

<?php
    $tims = ["erwin","heru","ali","zaki"];
    array_unshift($tims,"joko","wati");
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>