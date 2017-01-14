<?php
$code="public class Simple{
public static void main(String args[]){
char a='c';
//System.out.println(\"hello javatpoint\"+\"hi\");
System.out.println(a+a);
}}";

$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL,"http://www.javatpoint.com/opr/run.jsp");
curl_setopt($ch, CURLOPT_URL,"https://www.compilejava.net/");
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS,"val=$code&filename=Simple&args=&classname=");
//curl_setopt($ch, CURLOPT_POSTFIELDS,$fullstr);

// in real life you should use something like:
 curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array('code' => $code,'passargs'=>'','respond'=>'respond')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

echo $server_output;

curl_close ($ch);

 
?>
