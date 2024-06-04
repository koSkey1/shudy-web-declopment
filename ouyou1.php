<?php
$now = date('Y-m-d H:i:s',time());
echo $now .'<br>' ;
    for ($year=0;$year <= 1;$year++){

        for ($month = 1;$month <= 12;$month ++){

            for ($week = 1 ;$week <= 4;$week++){

                for ($day = 1;$day <=7;$day++){
                    $puls ="+".$year.' year '.$month.' month '.$week.' week '.$day.' day ';
                    echo $puls .'<br>';
                    echo date("Y-m-d",strtotime($puls,strtotime($now))) .'<br>';
                    
                }

            }
        }
    }
?>