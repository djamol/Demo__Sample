<?php 
/*
Algorithm  ( in php and javascript )
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

/*
In Javascript
function StockPicker(arr) { 
  
  var max_profit = -1;
  var buy_price = 0;
  var sell_price = 0;
  
  // this allows our loop to keep iterating the buying
  // price until a cheap stock price is found
  var change_buy_index = true;
  
  // loop through list of stock prices once
  for (var i = 0; i < arr.length-1; i++) {
    
    // selling price is the next element in list
    sell_price = arr[i+1]; 
    
    // if we have not found a suitable cheap buying price yet
    // we set the buying price equal to the current element
    if (change_buy_index) { buy_price = arr[i]; }
    
    // if the selling price is less than the buying price
    // we know we cannot make a profit so we continue to the 
    // next element in the list which will be the new buying price
    if (sell_price < buy_price) {
      change_buy_index = true; 
      continue;
    }
    
    // if the selling price is greater than the buying price
    // we check to see if these two indices give us a better 
    // profit then what we currently have
    else { 
      var temp_profit = sell_price - buy_price;
      if (temp_profit > max_profit) { max_profit = temp_profit; }
      change_buy_index = false;
    }
    
  }
  
  return max_profit;
         
}

StockPicker([44, 30, 24, 32, 35, 30, 40, 38, 15]);  

*/


?>


