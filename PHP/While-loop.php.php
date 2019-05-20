<?php
// udskriv 10-tabellen med en while loop

$Titabellen = 1;
while($Titabellen <=10){
    echo 10*$Titabellen."";
    echo "<br>";
    $Titabellen++;
}


echo "<br>";

// udskriv tallen 0 til -100 med en while loop
    $decrement = 0;
    while ($decrement >= -100){
        echo $decrement;
        echo "<br>";

        --$decrement;
    }



/* Vi ønsker at købe en robot. Lav et program med 3 variabler (money, paycheck og robotCost). Sæt de 3 værdier til
   henholdsvist 0 (vores nuværdene konto saldo), 5 (vores løn) og 100 (prisen på den seje robot). Forøg money med
   paycheck (money += paycheck), så længe at (while-loop) money er mindre end robotCost. Når vi får råd til at købe
   vores robot, så udskriv sætningen "Nu kan vi købe robotten!"*/

$money = 0;
$paycheck = 5;
$robotcost = 100 ;

    //Så længe money(0) er mindre end Robotcost(100)
    while (@$money < $robotcost){
        //skal vi ligge paycheck(5) til money(0) indtil vi rammer 100
        $money+=$paycheck;
        //udskriv moneys værdi
        echo"$money kr. ";
    }

    if($money==$robotcost){
        echo " = Nu kan vi købe robotten";
    }

?>