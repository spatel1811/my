<?php
echo"<marquee> BASIC PHP ASSIGNMENT</marquee>";

$obj = new main();


class main
{

function __construct()
{
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);


echo '</br>';
S::Funreplace($date);
S::Funcompare($date,$tar);
S::Funposition(str_replace("-","/",$date));
S::Funscount($date);
S::Funslength($date);
S::Funasc($date);
S::Funl2($date);
S::Funsep(str_replace("-","/",$date));
S::Funleapyear($year);
}
}
class S

{
        function Funreplace($date)
        {
        echo '<br>'.'<hr>';
        echo "<h1>The replace function for date </h1>";
      echo 'The new $date is: ' . str_replace("-","/",$date).'<br>';
      

        }


        function Funcompare($date,$tar)

        {
        echo '<br>'.'<hr>';
        echo "<h1>The Compare function for date </h1>".'<br>';
        $result=strcmp($date,$tar);

        if($result==0){
        echo "Oops";
        }
        else if($result>0){
                echo "The future";
                }
                else {
                        echo "The past";
                        }
                       
        }
      

        function Funscount($date)
        {
        echo '<br>'.'<hr>';
        echo "<h1>Counting no of words</h1>".'</br>';

        $strc=str_word_count($date);
        echo 'The number of words in $date is: '.$strc;
        echo '<br>';
        }


        function Funslength($date)
        {
        
        echo '<br>'.'<hr>';
        echo "<h1>Finding lengtrh of string</h1>".'</br>';
        $sl=strlen($date);
        echo 'The length of the string is: '.$sl;
        echo '<br>';
        }
         function Funposition($date )
       {

        echo '<br>'.'<hr>';
        echo "<h1>Finding position of / in date</h1>";
        for($i=0; $i<substr_count($date,"/");$i++)
        {
        $t=$t+1;
        $t=stripos($date,"/",$t);
        echo 'The position of / is: '. $t.' ';
        echo '<br>';
        }
        

 }


        function Funasc($date)
        {
        echo '<br>'.'<hr>';
        echo "<h1>ASCII VALUE FINDING EXAMPLE</h1>".'<br>';

        echo 'The ascii value of the first character is '. ord($date);
        echo '<br>';
        }

        function Funl2($date)
        {
       echo '<br>'.'<hr>';
        echo "<h1>Finding Last two characters  of date</h1>".'<br>';
        $arr=str_split($date);
        $a=count($arr);
        for($i=0;$i<2;$i++)
        {
        $a=$a-1;

        echo $arr[$a];
        echo ' ';

        }
        echo '<br>';
        }
 function Funsep($date)
        {
       echo '<br>'.'<hr>';
        echo "<h1>Seperating date example</h1>".'<br>';

        echo 'The separated date is: ';
        $arr= (explode("/",($date)));
        $a=count($arr);
        for($i=0;$i<$a;$i++)
        {
        echo $arr[$i].' ';
        }
        }

        function Funleapyear($year)
        {
        	echo '<br>'.'<hr>';
        echo "<h1>Leapyear function example</h1>".'<br>';
        
        foreach($year as $value)
        {
        echo '<br>';
        for($i=0;$i<1;$i++)
        {
        switch(value)
        {
        case( ($value%4)==0 and ($value%100)!=0 or ($value%400)==0);
        echo $value.'->'. 'True'.'<br>';
        break;

        default:
        echo $value.'->'.'False'.'<br>';
        }
        }
        }
        }


}
?>
