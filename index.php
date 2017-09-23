<?php
$data = file_get_contents('https://www.codeschool.com/users/110833.json');
$json_data = json_decode($data, true);
//echo'<pre>';
//print_r($json_data['courses']['completed']);
//echo'</pre>';
$courses = $json_data['courses']['completed'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <link rel="stylesheet" href="./css/grid.css" media="screen" title="no title" charset="utf-8">
    <title>Simple badger app</title>
  </head>
<body>
	<header>
      <h1>Simple Badger App</h1>
    </header>
     <div class="container">
     	<div class="grid">
			<?php
			foreach ($courses as $course) {
					echo '<div class="grid-cell">';
					echo '<img src="'.$course['badge'].'" height="200px"/><br/>';
					echo '<a href="'.$course["url"].'">' . $course["title"] . '</a>';
					echo '</div>';
				}	
			?>
	 </div>
	</div>
</body>
</html>