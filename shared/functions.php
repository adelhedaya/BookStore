<?php
function convertPrice($price, $currency) {
    switch ($currency) {
        case 'EUR':
            $rate = 0.85;  
            break;
        case 'EGP':
            $rate = 30.89; 
            break;
        case 'AED':
            $rate = 3.67; 
            break;
        case 'KWD':
            $rate = 0.31;  
            break;
        default:
            $rate = 1;     
    }
    
    return round($price * $rate, 2);
}
?>
