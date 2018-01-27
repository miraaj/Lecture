<?php
    $currentValue = 10;
    $value = $currentValue;
    $new_Value = $value + 1;
    echo "Without reference".$new_Value;

    $reference = &$new_Value;
    echo "With reference $reference";
?>