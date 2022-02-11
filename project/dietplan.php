<!DOCTYPE html>
<html>
<head>
<style>
  h2{
    color: darkblue;
  }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body{
    background: url('images/6.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
}
th{
  display: flex;
justify-content: center;
color: darkcyan;
}
</style>
</head>
<body >
<title>Dietplan</title>
<div style="display:flex;justify-content: space-between;">
    <h2>Suggested dietplan for your symptoms -></h2>
    <div style="display: flex; margin-top: 20px;float:right;">
        <button><a href="profile.php" style="text-decoration:none">Dashboard</a></button>
    </div>
</div>
<table>
  <tr>
    <th>Dietplan for the day (select altenative on your observations) : </th>
  </tr>
</table>

</body>
</html>
<?php 
include('../dietform.php');
session_start();
$age = $_SESSION['age'];
if($age < 8 || $age > 45){
  echo "<script>alert('Please consult physician before following diet!');</script>";
}
$symptoms = $_SESSION['array'];
if(in_array('Fever',$symptoms, TRUE)){
    echo "<table border='1'>

<tr>


</tr>";


  echo "<tr>";
  echo "<td>
  1.lemon water 
  2.five soaked almonds and walnuts. 
 </td>";
 echo "<br>";
  echo "<td>
  Fruits and oats
  Dosa
  Omelet
  </td>";
  echo "<td>
  2 Phulkas
  1 cup of steamed rice 
   sabji (beans/ cauliflower/ broccoli/ leafy veg/ mixed veg) 
   ¾ cup dal/chana/rajma/1 cup paneer + 1 cup curd
  </td>";
  echo "<td>vegetable khichdi + 1 cup curd
  2 Mung dal cheela with paneer + garlic chutney
  Idli with vegetable sambar
  2 Rotis
  </td>";
echo "</table>";
}
if(in_array('Cold',$symptoms, TRUE)){
    echo "<table border='1'>

<tr>


</tr>";


  echo "<tr>";
  echo "<td>
  Pomegranate juice
  Banana  
 </td>";
  echo "<td>
  warm, cooked pasta, including macaroni and cheese.
  </td>";
  echo "<td>
  1 cup boiled green gram sprouts 
  Veg pulav rice 1 cup+ 1 cup Soya Chunk curry
  </td>";
  echo "<td>1 cup Almond milk</td>";
  echo "<td>2 chapatti + Ladies finger subji 1 cup</td>";
  echo "<td>Low-fat milk with turmeric 
  grape or apple juice
  </td>";

echo "</table>";
}

if(in_array('Rashes on Skin',$symptoms, TRUE)){
    echo "<table border='1'>

<tr>


</tr>";


  echo "<tr>";
  echo "<td>
  5-6 almonds
  4-5 walnuts    
 </td>";
  echo "<td>
  Upma, Idli, Dosa, poha  
  </td>";
  echo "<td>
  bananas, mangoes, Chikoos, Grapes, Custard apples
    </td>";
  echo "<td>2 rotis
  Salad, vegetable curry, curd
  </td>";
  echo "<td>green tea/coffee </td>";
  echo "<td>2 chapatti 
  Dal Kichidi
  Turmeric milk
  </td>";

echo "</table>";
}
if(in_array('Loss of Smell',$symptoms, TRUE)){
    echo "<table border='1'>

<tr>


</tr>";


  echo "<tr>";
  echo "<td>
  5-6 almonds
  4-5 walnuts    
 </td>";
  echo "<td>
  Toast
Boiled potatoes.
  </td>";
  echo "<td>
  bananas, mangoes, Chikoos, Grapes, Custard apples
    </td>";
  echo "<td>Banana
  apple  
  </td>";
  echo "<td>Plain rice
  Curd rice
  </td>";
  echo "<td>
  cream of wheat, or rice porridge.
Rice
  </td>";

echo "</table>";
}

if(in_array('Loss of taste',$symptoms, TRUE)){
    echo "<table border='1'>

<tr>
</tr>";

  echo "<tr>";
  echo "<td>
  Pumpkin seeds
  lemon juice       
 </td>";
  echo "<td>
  Bread
  Idli
  Egg  
  </td>";
  echo "<td>
  Mint Juice
    </td>";
  echo "<td>
  Roti
Dal fry
  </td>";
  echo "<td>
  Apples
Blueberries, Carrot sticks, Cherries, Dried, sweetened cranberries, Grapes, Strawberries
  </td>";
  echo "<td>
  Veg Cutlet, Pulao, Rice
  </td>";

echo "</table>";
}

if(in_array('Headache',$symptoms, TRUE)){
    echo "<table border='1'>

<tr>
</tr>";

  echo "<tr>";
  echo "<td>
  Pomegranate juice
  Banana      
 </td>";
  echo "<td>
  Bread
  Idli
  Egg  
  </td>";
  echo "<td>
  Mint Juice
    </td>";
  echo "<td>
  Roti
Dal fry
  </td>";
  echo "<td>
  bananas, mangoes, Chikoos, Grapes, Custard apples
  </td>";
  echo "<td>
  Veg Cutlet, Dal Kichidi
  </td>";

echo "</table>";
}

if(in_array('Chest Pain',$symptoms, TRUE)){
    echo "<table border='1'>

<tr>
</tr>";

  echo "<tr>";
  echo "<td>
  Pomegranate juice
  Orange      
 </td>";
  echo "<td>
  Roti
  Egg  
  </td>";
  echo "<td>
  Lime Juice
    </td>";
  echo "<td>
  Roti
Dal fry
  </td>";
  echo "<td>
  Chikoos, Grapes, Custard apples
  </td>";
  echo "<td>
  Rice, Dal Kichidi
  </td>";

echo "</table>";
}

if(in_array('Cough',$symptoms, TRUE)){
    echo "<table border='1'>

<tr>


</tr>";


  echo "<tr>";
  echo "<td>
  5-6 almonds
  4-5 walnuts    
 </td>";
  echo "<td>
  Upma, Idli, Dosa, poha  
  </td>";
  echo "<td>
  bananas, mangoes, Chikoos, Grapes, Custard apples
    </td>";
  echo "<td>2 rotis
  Salad, vegetable curry, curd
  </td>";
  echo "<td>green tea/coffee </td>";
  echo "<td>2 chapatti 
  Dal Kichidi
  Turmeric milk
  </td>";

echo "</table>";
}

if(in_array('Pregnancy',$symptoms, TRUE)){
  echo "<table border='1'>

<tr>


</tr>";


echo "<tr>";
echo "<td>
A glass of plain cow’s milk
Almond milk
Milkshake
Apple juice
Tomato juice  
</td>";
echo "<td>
Dry fruits
Diet For Pregnant Women - Breakfast, Bowl of fruits
Wheat rava upma with lots of vegetables, Poha with lots of vegetables
</td>";
echo "<td>
Oats porridge
Whole wheat toast with butter and omelet
Vegetable omelet
Paranthas with fillings of spinach, dal, potatoes, carrots, beans, cottage cheese, cheese with curd
Mixed bean cutlet or patties
  </td>";
echo "<td>2 rotis
Rice, dal and vegetable with vegetable salad
Lemon rice with peas and some vegetable salad
Vegetable khichdi
Chicken salad with lots of fresh vegetables or vegetable soup
Chicken curry with rice
Grilled chicken with a bowl of curd
Rice, dal, mint raita and a fruit
</td>";
echo "<td>green tea/coffee </td>";
echo "<td>2 chapatti 
A cup of green tea
Milk porridge with oats, sevaior daliya
</td>";

echo "</table>";
}
if(in_array('Liver problem',$symptoms, TRUE)){
  echo "<table border='1'>

<tr>


</tr>";


echo "<tr>";
echo "<td>
Milkshake,Apple juice
A glass of plain cow’s milk, Almond milk
</td>";
echo "<td>
Rice, dal, mint raita and a fruit
Kofta curry with rice  
</td>";
echo "<td>
bananas, mangoes, Chikoos
  </td>";
echo "<td>
Rice with dal, spinach vegetable, and some green salad
Roti with a bowl of dal, a vegetable of choice and a glass of buttermilk
Mixed dal khichdi with a vegetable curry and a bowl of curd
</td>";
echo "<td>green tea </td>";
echo "<td>
Vegetable pulaoor chicken rice with a bowl of yogurt
Plain parantha with a glass of buttermilk
</td>";

echo "</table>";
}
?>