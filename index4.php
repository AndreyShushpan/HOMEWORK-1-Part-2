<?php
    // В зависимости от того, в каких единицах измерения вводится значение, перевести его в другие единицы измерения.
    // В данном случае переводится объем информации (байты, килобайты, мегабайты и гигабайты).
    $a = rand(0,1000);
    $b = rand(1,4); // переменная для генерации единицы измерения
    if(1 == $b):
        $b = "Гб";
    elseif(2 == $b):
        $b = "Mб";
    elseif(3 == $b):
        $b = "Kб";
    else:
        $b = "б";
        endif;
    $a = $a . $b; // значение, которое нужно перевести в другие единицы измерения
    echo "Значение $a при переводе в другие единицы измерения это:\n<br/> ";
    if($b == "Гб"):
        $m = (int)$a * 1024;
        $k = $m * 1024;
        $b = $k * 1024;
        echo "{$m}Мб,<br/> {$k}Кб,<br/> {$b}байт";
    elseif($b == "Mб"):
        $g = (int)$a / 1024;
        $k = (int)$a * 1024;
        $b = $k * 1024;
        echo "{$g}Гб,<br/> {$k}Кб,<br/> {$b}байт";
    elseif($b == "Kб"):
        $m = (int)$a / 1024;
        $g = $m / 1024;
        $b = (int)$a * 1024;
        echo "{$g}Гб,<br/> {$m}Мб,<br/> {$b}байт";
    elseif($b == "б"):
        $k = (int)$a / 1024;
        $m = $k / 1024;
        $g = $m / 1024;
        echo "{$g}Гб,<br/> {$m}Мб,<br/> {$k}Кб";
        endif;
?>