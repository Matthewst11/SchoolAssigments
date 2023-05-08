<?php

$customer_type = filter_input(INPUT_POST, 'type');
$invoice_subtotal = filter_input(INPUT_POST, 'subtotal');

switch($customer_type){
    case 'R':
    case 'r' :
        if ($invoice_subtotal >= 250 && $invoice_subtotal < 500) {
            $discount_percent = .25;
        } else if ($invoice_subtotal >= 500) {
            $discount_percent = .3;
        }
        else{$discount_percent = .0;
     }
     break;
    
        
     break;
     case 'C' :
     case 'c' :
        $discount_percent = .0;
    break;
    
    case 'T' :
    case 't' :
        if ($invoice_subtotal < 500) {
            $discount_percent = .4;
        } else if ($invoice_subtotal >= 500) {
            $discount_percent = .5;
        }
        else{$discount_percent = .0;
        }
    break;
    
      

/*if ($customer_type == 'R' or $customer_type == 'r') {
    if ($invoice_subtotal >= 250 && $invoice_subtotal < 500) {
        $discount_percent = .25;
    } else if ($invoice_subtotal >= 500) {
        $discount_percent = .3;
    }
    else{$discount_percent = .0;
 }
} else if ($customer_type == 'C' or $customer_type == 'c') {
    $discount_percent = .0;
    }
 else if ($customer_type == 'T' or $customer_type == 't'){
    if ($invoice_subtotal < 500) {
        $discount_percent = .4;
    } else if ($invoice_subtotal >= 500) {
        $discount_percent = .5;
    }
    else{$discount_percent = .0;
 }
*/}


$discount_amount = $invoice_subtotal * $discount_percent;
$invoice_total = $invoice_subtotal - $discount_amount;

$percent = number_format(($discount_percent * 100));
$discount = number_format($discount_amount, 2);
$total = number_format($invoice_total, 2);

include 'invoice_total.php';

?>