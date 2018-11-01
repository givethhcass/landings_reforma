<?php 
require_once ('DataSource.php');

class Functions{


function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}


function getElementById($elements, $id)
{
	if (is_array($elements)){
		$key = array_search($id, array_column($elements, 'id'));
		if($key !== false){
			return $elements[$key];
		}
	}
	return null;
}


}

 ?>