<?php

class ApiKey {
  
  private $letters = array(0,1,2,3,4,5,6,7,8,9,'-','Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M','C','q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');


  public function Generator($count = 16) {  
  	$count = $count;
  	$letters = $this->letters;
  	$result =  '';
  	for ($i=0; $i < $count; $i++) { 
  		$result = $result.$letters[rand(0,count($letters) - 1)];
  	}
  	return $result;
  }

}
	
$api = new ApiKey();
echo $api->Generator(44);

?>