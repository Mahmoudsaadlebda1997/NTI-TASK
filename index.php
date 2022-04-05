<?php

// echo '<table width="600px" cellpadding="0px" border="1px">';
// for($tableRow = 1 ;$tableRow <= 8; $tableRow++){

//     echo "<tr>";
//  for ($tableCol = 1; $tableCol <=8; $tableCol++){
//     $total= $tableRow + $tableCol;
//     if($total%2==0){
//         echo "<td height=60px width=60px bgcolor=white></td>";
//     }else{
//         echo "<td height=60px width=60px bgcolor=black></td>";
//     }
//     }
//     echo "</tr>";

//     }
//     echo '</table>'


//Task 1

// function getNextChar($char){
//     $GLOBALS['char']=$char;
//     $next_char = ++$char; 
//     if (strlen($next_char) > 1) 
//     {
//         $next_char = $next_char[0];
//     }
//     return $next_char."\n";
// }
// echo getNextChar('b');




// Task 2
function afterSlachPrint($my_url){
    return substr($my_url, strrpos($my_url, '/' )+1)."\n";
}
echo afterSlachPrint('http://www.example.com/5478331');
?>
