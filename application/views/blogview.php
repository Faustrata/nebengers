<html>
<head>
        <title>My Blog</title>
</head>
<body>
        <h1>Welcome to my Blog!</h1>
        <ul>
        	<?php
        	foreach ($list as $row) :
        		echo "<li>$row</li>";
        	
        	endforeach;
        	?>
        </ul>
</body>
</html>