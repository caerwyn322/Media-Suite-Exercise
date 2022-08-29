<!DOCTYPE HTML>
<html>
	<head>
		<title>Media Suite Blog Post Test</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div>
			<?php
				include "ext.php";
				
				$file = fopen("assets/posts/people-do-good.md", "r");
				
				$myfile = fread($file, filesize("assets/posts/people-do-good.md"));
				
				$post = new Post($myfile);
				print "<h1>" . $post->getTitle($myfile) . "</h1>";
				
				print "<p>" . $post->getContent($myfile) . "<p>";
				
				print "<h2> Tags <h2> <br>";
				print_r($post->getTags($myfile));
				
			?>
		</div>
		<a href="Posts.php">Return</a>
	</body>
</html>	
