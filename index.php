<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align:center">Masivai</h1>
<?php
    //TASK 1
    $newArr = [];
    echo '<h2 style="text-align:center">Task1</h2><br><br>';
    for($i = 0; $i < 30; $i++) {
        array_push($newArr, rand(5, 25));
    }
    print_r($newArr);
    //TASK 2
    echo '<br><br><h2 style="text-align:center">Task2</h2><br><br>';
    //TASK A
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part A </p><br><br>';
    $count = 0;
    for($i = 0; $i < count($newArr); $i++) {
        if($newArr[$i] > 10) {
            $count++;
        }
    }
    echo "Masive yra $count reiksmiu didesniu uz 10<br><br>";
    //TASK B
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part B </p><br><br>';
    $biggest = 0;
    for($i = 0; $i < count($newArr); $i++) {
        if($newArr[$i] >= $biggest) {
            $biggest = $newArr[$i];
            $vieta = $i;
        }
    }
    echo "Didziausia reiksme masive yra: $biggest kurios pozicija yra: $vieta<br><br>";
    //TASK C
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part C </p><br><br>';
    $summ = 0;
    for($i = 0; $i < count($newArr); $i++) {
            $summ += $newArr[$i];
    }
    echo "Masivo elementu suma: $summ";
    //TASK D
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part D </p><br><br>';
    $newArr2 = [];
    for($i = 0; $i < count($newArr); $i++) {
        array_push($newArr2, ($newArr[$i] - $i));
    }
    print_r($newArr2);
    //TASK E
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part E </p><br><br>';
    for($i = 0; $i < 10; $i++) {
        array_push($newArr2, rand(2, 25));
    }
    print_r($newArr2);
    //TASK F
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part F </p><br><br>';
    $poriniaiArr = [];
    $neporiniaiArr = [];
    for($i = 0; $i < count($newArr2); $i++) {
        if($i%2 == 0) {
            array_push($poriniaiArr, $newArr2[$i]);
        } else {
            array_push($neporiniaiArr, $newArr2[$i]); 
        }
    }
    echo 'Neporinis: ';
    print_r($neporiniaiArr);
    echo '<br><br> Porinis: ';
    print_r($poriniaiArr);
    // TASK G
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part G </p><br><br>';
    for($i = 0; $i < count($newArr2); $i++) {
        if($i%2 == 0) {
            if($newArr2[$i] > 15) {
                $newArr2[$i] = 0;
            }
        }
    }
    print_r($newArr2);
    // TASK H
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part H </p><br><br>';
    $biggerThanTen = 0;
    for($i = 0; $i < count($newArr2); $i++) {
       if($newArr2[$i] > 10) {
           $biggerThanTen = $i;
           break;
       }
    }
    echo "Pirmas indeksas didesnes nei 10 yra: $biggerThanTen";

    // TASK I
    echo '<br><br> <p style="font-size: 20px; text-align:center;">Part I </p><br><br>';
     foreach ($newArr2 as $key => $value) {
         if($key%2 == 0) {
             unset($newArr2[$key]);
         }
     }
     print_r($newArr2);
     //print_r($changedArr);

     //TASK 3
    echo '<br><br><h2 style="text-align:center">Task3</h2><br><br>';
    $letters = ['A','B','C','D'];
    $tusciasArr = [];
    $A = 0;
    $B = 0;
    $C = 0;
    $D = 0;
    for($i = 0; $i < 200; $i++) {
        $random = rand(0, 3);
        array_push($tusciasArr,$letters[$random]);
        if($tusciasArr[$i] == 'A') {
            $A++;
        } else if($tusciasArr[$i] == 'B') {
            $B++;
        } else if($tusciasArr[$i] == 'C') {
            $C++;
        } else {
            $D++;
        }
    }
    echo "Masyve yra A raidziu: $A , B raidziu: $B , C raidziu: $C , D raidziu $D";

    //TASK 4
    echo '<br><br><h2 style="text-align:center">Task4</h2><br><br>';

    sort($tusciasArr);
    //print_r($tusciasArr); - PATIKRA

    //TASK 5
    echo '<br><br><h2 style="text-align:center">Task5</h2><br><br>';

    $arrUno =[];
    $arrDos =[];
    $arrTres =[];
    $dvimatis = [$arrUno, $arrDos, $arrTres]; //2D array
    for($i = 0; $i < count($dvimatis);$i++) { 
        for($j = 0; $j < 200; $j++) {
            $random = rand(0, 3);
            array_push($dvimatis[$i],$letters[$random]); //$letters pasiemu is 3 uzduoties
        }
    }
    // susidedu reiksmes i viena array
    for($i = 0; $i < 200; $i++) {
        $dvimatis[0][$i] .= ($dvimatis[1][$i] . $dvimatis[2][$i]);
    }
    print_r($dvimatis[0]);

    $howMuchDuplicates = array_count_values($dvimatis[0]); // grazina masiva, kuriame reiksme yra key - o value yra kiek 
    $unikalusStr ='';                                      // kiek kartu pakartota.
    $uniq = 0;
    echo '<br><br>';
    foreach($howMuchDuplicates as $indeksas => $reiksme) {
        if($reiksme === 1) { // jeigu kartojasi viena karta, reiskia unikali kombinacija
            $uniq++;
            $unikalusStr .= $indeksas.' ';
        }
    }
    echo "<br><br>Kiekis unikaliu: $uniq <br>";
    echo $unikalusStr; 

    //TASK 6
    echo '<br><br><h2 style="text-align:center">Task6</h2><br><br>';
    
    $pirmasArr = [];
    $antrasArr = [];
    for($i = 0; $i < 100; $i++) {
        $inArray = true;
        while($inArray) {
            $pirmoRnd = rand(100, 999);
            if(!in_array($pirmoRnd,$pirmasArr)) {
                array_push($pirmasArr, $pirmoRnd);
                $inArray = false;
        }
    }
        $inArray2 = true;
        while($inArray2) {
            $antroRnd = rand(100, 999);
            if(!in_array($antroRnd,$antrasArr)) {
                array_push($antrasArr, $antroRnd);
                $inArray2 = false;
        }
    }
}
    print_r($pirmasArr);
    echo '<br><br>';
    print_r($antrasArr);
    //PATIKRA
    //echo '<br><br>'.count($antrasArr).'<br>';
    //$tikrinu = count(array_unique($antrasArr));
    //echo $tikrinu;

    //TASK 7
    echo '<br><br><h2 style="text-align:center">Task7</h2><br><br>';
    $newMasivas = [];
    for($i = 0; $i < count($pirmasArr); $i++) {
        if(!in_array($pirmasArr[$i], $antrasArr)) {
            array_push($newMasivas, $pirmasArr[$i]);
        }
    }
    print_r($newMasivas);
    //PATIKRA
    //echo '<br><br>';
    //print_r(array_diff($newMasivas, $antrasArr)); //grazina tik reiksmes , kuriu nera sekanciose masivuose

    //TASK 8
    echo '<br><br><h2 style="text-align:center">Task8</h2><br><br>';

    $repeatableArr = [];
    $repeatableArr2 = [];
    for($i = 0; $i < count($pirmasArr); $i++) {
        if(in_array($pirmasArr[$i], $antrasArr)) {
            array_push($repeatableArr, $pirmasArr[$i]);
        }
    }
    /*   Bandziau surasti elementus kurie kartojasi abiejuose masivuose ir nera unikalus
    $repeatableArr2 = [];
    for($i = 0; $i < count($pirmasArr); $i++) {
        if(in_array($pirmasArr[$i], $antrasArr)) {
            $kiekDublikatu = array_count_values($pirmasArr);
            $kiekDublikatu2 = array_count_values($antrasArr);
            foreach($kiekDublikatu as $indeksas => $elementas) {
                if($elementas > 1) {
                    array_push($repeatableArrw, $indeksas);
                }
            }
            foreach($kiekDublikatu2 as $indeksas => $elementas) {
                if($elementas > 1) {
                    array_push($repeatableArrw, $indeksas);
                }
            }
        }
    }
    */
    print_r($repeatableArr);

    //TASK 9
    echo '<br><br><h2 style="text-align:center">Task9</h2><br><br>';
    $asociativusArr = [];
    for($i = 0; $i < count($pirmasArr); $i++) {
        $asociativusArr[$pirmasArr[$i]] = $antrasArr[$i];
    }
    print_r($asociativusArr);

    //TASK 10
    echo '<br><br><h2 style="text-align:center">Task10</h2><br><br>';
        $tenNumArr = [];
        for($i = 0; $i < 10; $i++) {
            if($i == 0 || $i == 1) {
                $tenNumArr[$i] = rand(5, 25);
            } else {
                $tenNumArr[$i] = ($tenNumArr[$i-1] + $tenNumArr[$i-2]);
            }
        }
        print_r($tenNumArr);

    //TASK 11
    echo '<br><br><h2 style="text-align:center">Task11</h2><br><br>';
    //********************************1.Sugeneruoju arr su random reiksmem***********************************/
    $lastArr = [];
    for($i = 0; $i < 101; $i++) {
        array_push($lastArr, rand(0, 300));
    }
    //********************************2.Pakeiciu dublikatus i unikalias reiksmes***********************************/
    $kolkasTikTaip = 0;
    do {
    for($i = 0; $i < count($lastArr); $i++) {
        for($j = $i+1; $j < count($lastArr);$j++) {
            $flag = true;
            if($lastArr[$i] == $lastArr[$j]){
                do{
                    $lastArr[$j] = rand(0, 300);
                        if(in_array($lastArr[$j], $lastArr)){
                            $lastArr[$j] = rand(0, 300);
                        }
                    if($lastArr[$i] != $lastArr[$j]) {
                        $flag = false;
                    }
                } while($flag);
            }
        }
    }
    $kolkasTikTaip++;
}while($kolkasTikTaip < 5);
/*
    for($i = 0; $i < count($lastArr);$i++) {
        $temp = $lastArr[$i];
        $lastArr[$i] = null;
        while(in_array($temp,$lastArr)) {
            $temp = rand(0,300);
        }
        $lastArr[$i] = $temp;
    }
    */
    print_r($lastArr);
    echo '<br><br>';
    //echo count($lastArr); //PATIKRA
    echo '<br><br>';
    //echo count(array_unique($lastArr)); //PATIKRA
    echo '<br><br>';
    //********************************3.Perrasau atsartiruota array i nauja***********************************/
        $sortedArr = [];
        rsort($lastArr);
        $sortedArr[0] = $lastArr[0];
        $sum1 = 0;
        $sum2 = 0;
        for($i = 1; $i < count($lastArr); $i++) {
          if($i%2 == 0) {
            array_unshift($sortedArr, $lastArr[$i]);
        } else {
            array_push($sortedArr,$lastArr[$i]);
        }
    }
    //********************************4.Suskaicioju vienos ir kitos puses reiksmes(be vid elemento)******************************/
    for($i = 0; $i < count($lastArr); $i++) {
        if($i == 50) {
            continue;
        } else {
       if($i%2 == 0) {
         $sum1 += $lastArr[$i];
     } else {
         $sum2 += $lastArr[$i];
     }
    }
 }

    print_r($sortedArr);
    echo '<br><br>';
    //********************************5.Tikrinu reiksmes***********************************/
    echo "Sum1: $sum1. Sum2: $sum2";
    $rez = $sum1 - $sum2;
    if($rez < 0) {
        $rez = $rez * -1;
    }
    echo '<br><br>'.$rez;
?>  
</body>
</html>