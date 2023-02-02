<?php
 function processMarks($marksArr){
    $sum=0;
    $i=1;
    foreach($marksArr as $val){
        $sum+=$val;
        $i++;
    }
    return $sum/$i;
 }
 
 $Rohan = [55,65,67,75,82,78];
 $Ashu = [60,65,75,85,82,62];
 
 $sumMarks = processMarks($Rohan);
 $sumMarksAshu = processMarks($Ashu);

 echo "Total marks of Rohan ou of of 600 is $sumMarks</br>";
 echo "Total Marks of Ashu Mishra Out of 600 is $sumMarksAshu </br>";

 

?>