<!DOCTYPE html>
<html>
	<head>
		<title>Results</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body class="action">
		<center>
			<?php		
				$data = $_POST['query'];
				$data=urlencode($data);
				$url = "http://localhost:8983/solr/gettingstarted/select?indent=on&q=".$data."&wt=json";
				$response = file_get_contents($url);

				$json = json_decode($response, true);
							
				echo '<pre>';	
				echo "<h2 style='color:white'>Results: </h2><br>";
				foreach($json['response']['docs'] as $item){
								
					$data = array($item['Rank'],$item['Song'],$item['Artist'],$item['Year'],$item['Lyrics']);
					echo '<a target="_blank" href="result.php?value='.$item['id'].'">';
					echo '<div class="bordered">';	 //chng
					echo "Rank: ".$data[0][0]."<br>Song: ".$data[1][0].", <br>Artist: ".$data[2][0].", <br>Year: ".$data[3][0].", <br>Lyrics: ".trim_text($data[4][0],125)."<br>";
					echo "</div></a><br><br><br>"; 
				}
				echo '</pre>';	
						
				function trim_text($input, $length, $ellipses = true, $strip_html = true) {
					//strip tags, if desired
					if ($strip_html) {
						$input = strip_tags($input);
					}
						  
					if (strlen($input) <= $length) {
						return $input;
					}
						  
					//find last space within length
					$last_space = strrpos(substr($input, 0, $length), ' ');
					$trimmed_text = substr($input, 0, $last_space);
						  
					if ($ellipses) {
						$trimmed_text .= '...';
					}
					  
					return $trimmed_text;
				}		
			?>
		<center>	
	</body>
</html>