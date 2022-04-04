<?php 
/*
Algorithm
Stock maximum profit
(1) Iterate through each number in the list.
(2) At the ith index, get the i+1 index price and check if it is larger than the ith index price.
(3) If so, set buy_price = i and sell_price = i+1. Then calculate the profit: sell_price - buy_price.
(4) If a stock price is found that is cheaper than the current buy_price, set this to be the new buying price and continue from step 2.
(5) Otherwise, continue changing only the sell_price and keep buy_price set.
*/

function ArrayChallenge($arr) {
 $buy=0;$sell=0;$profit=-1;
 $changeBuyIndex=true;
 for($i=0;$i<(count($arr)-1);$i++)
 {
   $sell=$arr[$i+1];
  if($changeBuyIndex){
    $buy= $arr[$i];
  }

  if( $sell<$buy){
    $changeBuyIndex=true;
    continue;
  }else
  {
    $temp_profit =$sell-$buy;
    if($temp_profit>$profit){
      $profit=$temp_profit;
    }
    $changeBuyIndex=false;

  }

 }
  // code goes here
  return $profit;

}
   
// keep this function call here  
echo ArrayChallenge(fgets(fopen('php://stdin', 'r')));  

?>
