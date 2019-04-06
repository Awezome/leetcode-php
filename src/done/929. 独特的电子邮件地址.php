<?php
/**
 * Created by IntelliJ IDEA.
 * User: zyp
 * Date: 2019-03-19
 * Time: 13:41
 */
class Solution {

    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails) {
        $results=[];
        foreach ($emails as $email){
            $email=explode("@",$email);
            $prefix=strstr($email[0],'+',true);
            if(!$prefix){
                $prefix=$email[0];
            }
            $prefix=str_replace('.','',$prefix);
            $last=$prefix.'@'.$email[1];
            $results[$last]=true;
        }
        return count($results);
    }
}

$test=["test.email+alex@leetcode.com","test.e.mail+bob.cathy@leetcode.com","testemail+david@lee.tcode.com"];
$test=["testemail@leetcode.com","testemail1@leetcode.com","testemail+david@lee.tcode.com"];
$a=(new Solution())->numUniqueEmails($test);
print_r($a);
