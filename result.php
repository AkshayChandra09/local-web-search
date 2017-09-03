<?php 
	ini_set('session.gc_maxlifetime', 3600);
	session_start();
?>
<html>
	<head>
		<title>Document</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body class="result">
		<center>
			<h1>LexiCo</h1>
			<h4>Results</h4>

			<?php 
			$id = $_GET['value'];
			$url = "http://localhost:8983/solr/gettingstarted/get?id=".$id."&wt=json";
			$data = file_get_contents($url);
			$json = json_decode($data, true);	
			echo '<pre>';	
				echo '<pre>';
				echo "<h3>";
					echo "Rank: "; print_r($json['doc']['Rank'][0]);   echo "<br>";
					echo "Song: "; print_r($json['doc']['Song'][0]);   echo "<br>";
					echo "Artist: "; print_r($json['doc']['Artist'][0]); echo "<br>";
					echo "Year: "; print_r($json['doc']['Year'][0]);     echo "<br>";				
					$newtext = wordwrap($json['doc']['Lyrics'][0], 70, "<br />");
					echo "Lyrics: ".$newtext;
				echo "</h3>";
				echo '</pre>';	
			?>
		</center>
	</body>
</html>
