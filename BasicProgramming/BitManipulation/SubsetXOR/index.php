<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 08/05/16
 * Time: 12:57 AM
 * https://www.hackerearth.com/problem/algorithm/subset-xor-4/
 */


function getInput()
{
    $handle = fopen("php://stdin", "r");
    fscanf($handle, "%d", $n);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    return $a;
}
/*
function powerSet($a)
{
    $results = array(array());
    foreach ($a as $element) {
        foreach ($results as $combination) {
            $results[] = array_merge($combination, array($element));
        }
    }
    return $results;
}
*/
function xorOfArr($a) {
    $len = sizeof($a);
    if($len === 1) {
        echo $a[0] . "\n";
    } else {
        echo "0\n";
    }

}

fscanf(STDIN, "%d\n", $n);
$set = array();
for ($i = 0; $i < $n; $i++) {
    $set[] = getInput();
}
$len = sizeof($set);
for ($i = 0; $i < $len; $i++) {
    xorOfArr($set[$i]);
}
/*
import java.io.BufferedOutputStream;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.math.BigDecimal;
import java.math.BigInteger;
import java.io.IOException;
public class Main{
  public static void main(String args[]){
   BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
   BufferedOutputStream bos=new BufferedOutputStream(System.out);
   try{
       String str = br.readLine();
	   int j=0;
	   int len=str.length();
	   while(j<len){
	     if(str.charAt(j)==' ')
		  break;
		 else
		  j++;
	   }
	 int t=Integer.parseInt(str.substring(0,j));

	 while(t!=0)
     { str = br.readLine();
	   j=0;
	   len=str.length();
	   while(j<len){
	     if(str.charAt(j)==' ') break;
		 else j++;
	   }
	   int n=Integer.parseInt(str.substring(0,j));

	   str=br.readLine();
	   if(n==1){
	      j=0;
	      len=str.length();
	      while(j<len){
	       if(str.charAt(j)==' ') break;
		   else j++;
	       }
	       n=Integer.parseInt(str.substring(0,j));

		  System.out.println(n);
	    }else{
	     System.out.println(0);
	    }
	  t=t-1;
	 }
   }catch(IOException ioe){
      ioe.printStackTrace();
   }
  }
}
 */
?>