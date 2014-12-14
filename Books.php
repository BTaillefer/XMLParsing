<html>
	<head>
		<title> Lab 9 XML and PHP </title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
	</head>
	
	<body>
		<?php
			include_once 'Menu.php';
			include_once 'Header.php';
			$xml = file_get_contents("http://profchris.com/algonquin/ict/14F/CST8238/Books.xml");
			echo"<div align='center'>";
				$xmlDoc = new DOMDocument();
				$xmlDoc->loadXML($xml);
				
				$catalog = $xmlDoc->getElementsByTagName("catalog");
				echo"<table border='1px dotted black'>";
				
				foreach($catalog as $currentCatalog) {
					foreach($currentCatalog->childNodes as $node) {
						if($node->nodeName == "book") {
							echo"<tr>";
							foreach($node->childNodes as $bookNode) {
								if($bookNode->nodeName == "author") {
									echo"<td>";
									echo $bookNode->nodeValue;
									echo"</td>";
								}
								if($bookNode->nodeName == "title") {
									echo"<td>";
									echo $bookNode->nodeValue;
									echo"</td>";
								}
								if($bookNode->nodeName == "genre") {
									echo"<td>";
									echo $bookNode->nodeValue;
									echo"</td>";
								}
								if($bookNode->nodeName =="price") {
									echo"<td>";
									echo $bookNode->nodeValue;
									echo"</td>";
								}
								if($bookNode->nodeName =="publish_date") {
									echo"<td>";
									echo $bookNode->nodeValue;
									echo"</td>";
								}
							}
							echo"</tr>";
						}
					}
				}
				echo"</table>";
				echo "<hr />";
			echo"</div>";
			include_once 'Footer.php';
		?>
	</body>
</html>
		
							
			