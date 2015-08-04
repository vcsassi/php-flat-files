<?php
$file = fopen("einstein.txt", "r") or die("unable to open file!");
$file_data = fread($file, fielsize("einstein.txt"));
fclose($file);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flat File Mini Assignment</title>
    </head>
    <body>
        <h1>Albert Einstein Quotes</h1>
        <form action="new_line_adder.php" method="POST">
        	<fieldset>
        	<legend>Add this line to the end</legend>
        	<input type="text" name="It is the supreme art of the teacher to awaken joy in creative expression and knowledge."/>
        	<input type="submit">
        	</fieldset>
        </form>
        <pre><?php echo $file_data; ?></pre>
    </body>
</html>