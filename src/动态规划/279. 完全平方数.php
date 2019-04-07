<?php
/**
 * User: zyp
 * Date: 2019-04-07
 * Time: 11:55
 */

/**
 * dp[n] = min(dp[n] , dp[n - j * j] + 1) 其中(j = 1,2,3,…,k)
 * 如果我们想知道n=15的方法数，我们可以转换为求n=14的方法数、n=11的方法数、n=6的方法数,然后他们中间取最小值+1，即是15的方法数。
 */

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function numSquares($n) {
        $dp[0]=0;

        $coin=[];
        $i=1;
        while ($i*$i<=$n){
            $coin[]=$i*$i;
            $i++;
        }

        for ($i=1;$i<=$n;$i++){
            foreach ($coin as $v){
                if($i>=$v){
                    if(isset($dp[$i])){
                        $dp[$i]=min($dp[$i],$dp[$i-$v]+1);
                    }else{
                        $dp[$i]=$dp[$i-$v]+1;
                    }
                }else{
                    break;
                }
            }
        }

        return $dp[$n];
    }
}

(new Solution())->numSquares(4);
