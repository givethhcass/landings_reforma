<?php


class DataSource
{
	
	private static $server = "104.42.105.210";
	private static $database = "polimatia";
	private static $user = "pro_user_poli";
	private static $pass = 'cmEM$bW5%qre_PHF3&Wd';
	
	/*
	private static $server = "localhost";
	private static $database = "prueba";
	private static $user = "root";
	private static $pass = "";
	
   */


	private function __construct ()
	{		
	}

	public static function connect()
	{
		try{
			$link = mysqli_connect(self::$server, self::$user, self::$pass);
			if (!$link){ //Error
				return null;
			}
			
			$select_db = mysqli_select_db($link, self::$database);
			if (!$select_db){
				//echo "Database Selection Failed" . mysqli_error($link);
				return null;
			}
	 		mysqli_set_charset($link,"utf8");
			return $link;
		}catch(Exception $e){
			return null;
		}
	}

	private static function close($link)
	{
		mysqli_close($link);
	}

	public static function getURLpublic(){

		try{
			$conn = self::connect();
			if ($conn) {
				$sql = "SELECT img_path_sip FROM configs WHERE id= 2";
				//var_dump($sql);
				$result = mysqli_query( $conn, $sql);
				//var_dump($result);
				if ($result != null && (mysqli_num_rows($result)==1)) {
					$url = mysqli_fetch_object($result);
					//var_dump($url);
					return $url;
				
				}
				self::close($conn);
			}
		}
		catch(Exception $e)
		{
		}
		

	}



	public static function getImageById($id_landing, $id_image){
		$data = null;
		try{
			$conn = self::connect();

			if ($conn) {
				$sql = "SELECT * FROM landingimages WHERE id_landing = '$id_landing' AND id_platform = '$id_image'";
				//var_dump($sql);
				$result = mysqli_query( $conn, $sql);
				//var_dump($result);
				$contador = mysqli_num_rows($result);

				if ($contador < 1){
					$data= false;
				}else{
					$data = mysqli_fetch_object($result);
				}

			}
		}
		catch(Exception $e)
		{
		}

		self::close($conn);

		return $data;
	}


	/*public static function getElements($id){

		try{
			$conn = self::connect();
			if ($conn) {
				
				$elements=[];
				$sql = "SELECT a.id, a.tipo, a.nombre, a.descripcion, a.color_nombre, a.color_descripcion, a.id_imagen, b.alt, b.url, b.link FROM landing_element a right Join landing_images b On a.id_imagen=b.id || a.id_boton= b.id WHERE a.id_landing = '$id'  ";
				$result = mysqli_query($conn, $sql);
				//var_dump($result);
				$contador = mysqli_num_rows($result);

				if (!$contador){
					return false;
					echo "no paso";
				}else{
					while($data = mysqli_fetch_object($result)){
						array_push($elements, $data);
					}
					 
					return $elements;
				}	
				
			} 
		}
		catch(Exception $e)
		{
		}
		self::close($conn);º

	}*/

	public static function getImages($id_landing){
		$elements=[];
		try{
			$conn = self::connect();
			if ($conn) {

				
				$sql = "SELECT * FROM landingimages WHERE id_landing = '$id_landing' order by id";
				//var_dump($sql);
				$result = mysqli_query( $conn, $sql);
				//var_dump($result);
				$contador = mysqli_num_rows($result);

				if (!$contador){
					echo "no paso";
					$elements = false;
				}else{
					while($data = mysqli_fetch_object($result)){
						array_push($elements, $data);
					}
				}

			}
		}
		catch(Exception $e)
		{
		}
		self::close($conn);
		return $elements;
	}

	public static function getTexts($id_landing){

		try{
			$conn = self::connect();
			if ($conn) {

				$elements=[];
				$sql = "SELECT * FROM landingtexts WHERE id_landing = '$id_landing' order by id";
				//var_dump($sql);
				$result = mysqli_query( $conn, $sql);
				//var_dump($result);
				$contador = mysqli_num_rows($result);

				if (!$contador){
					return false;
					echo "no paso";
				}else{

					while($data = mysqli_fetch_object($result)){
						array_push($elements, $data);
					}
					return $elements;
				}

			}
		}
		catch(Exception $e)
		{
		}

		self::close($conn);

	}

	public function getButtons($id_landing){

		try{
			$conn = self::connect();
			if ($conn) {

				$elements=[];
				$sql = "SELECT * FROM landingbuttons WHERE id_landing = '$id_landing' order by id";
				//var_dump($sql);
				$result = mysqli_query( $conn, $sql);
				//var_dump($result);
				$contador = mysqli_num_rows($result);

				if (!$contador){
					
					echo "no paso";
					$elements= false;
				}else{

					while($data = mysqli_fetch_object($result)){
						array_push($elements, $data);
					}
				}

			}
			self::close($conn);

		}
		catch (Exception $e){
		}
		return $elements;
	}

	public static function getLandingIdByUrl($url)
	{
		$data = null;
		
		if(!(is_null($url) || strlen ($url) == 0)){

		try{
			$conn = self::connect();
			if ($conn) {

				
				$sql = "SELECT id FROM landingpage WHERE url = '$url' LIMIT 1";
				//var_dump($sql);
				$result = mysqli_query( $conn, $sql);
				//var_dump($result);
				$contador = mysqli_num_rows($result);

				if ($contador < 1){
					echo "<br/>no paso landing url<br/>";
				}else{
					$data = mysqli_fetch_object($result);
					$data = $data->id;
				}

			}
		}
		catch(Exception $e)
		{
		}
		self::close($conn);
		}
		return $data;
	}



	public static function getLandingById($id)
	{
		$data = null;
		
		if(!(is_null($id))){

		try{
			$conn = self::connect();
			if ($conn) {

				
				$sql = "SELECT * FROM landingpage WHERE id = '$id' LIMIT 1";
				//var_dump($sql);
				$result = mysqli_query( $conn, $sql);
				//var_dump($result);
				$contador = mysqli_num_rows($result);

				if ($contador < 1){
					echo "<br/>no paso landing id<br/>";
				}else{
					$data = mysqli_fetch_object($result);
				}

			}
		}
		catch(Exception $e)
		{
		}
		self::close($conn);
		}
		return $data;
	}

	public static function UpdateAnalitics($id,$var)
	{
			
		if(!(is_null($id))){

		try{
			$conn = self::connect();
			if ($conn) {

				
				$sql = "UPDATE landingpage SET Analytics =\"$var\"  WHERE id = $id ";
				var_dump($sql);
				$result = mysqli_query( $conn, $sql);
				//var_dump($result);
				

				if ($result == false){
					echo "<br/>no paso landing id<br/>";
				}else{
					echo "bien";
				}

			}
		}
		catch(Exception $e)
		{
		}
		self::close($conn);
		}
		return 0;
	}


}

