# tz_atcoder_php

//a,b=map(int,input().split())  
list($a, $b) = explode(' ', trim(fgets(STDIN)));  


//S[b-1],S[a-1]=S[a-1],S[b-1]  
$charArray = str_split($S);  
list($charArray[$a - 1], $charArray[$b - 1]) = array($charArray[$b - 1], $charArray[$a - 1]);  

  
//print(''.join(S))  
$S = implode('', $charArray);  


//[$a,$b,$x] = array_map('intval', explode(' ', trim(fgets(STDIN))));
//[$n] = array_map('intval', explode(' ', trim(fgets(STDIN))));
//$a = array_map('intval', explode(' ', trim(fgets(STDIN))));
//[$s,$t] = explode(' ', trim(fgets(STDIN)));
//[$s] = explode(' ', trim(fgets(STDIN)));
//$s = explode(' ', trim(fgets(STDIN)));
