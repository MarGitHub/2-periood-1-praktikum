<!DOCTYPE HTML>
<html>

   <head>
   
		<title>2-periood</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
   </head>
	<body>
		<?php $page_link = "second_page.php";
		$name = "Margit";
		$lastname = "Pilden";
		$age = 100; ?>
		<a href="<?php echo $page_link.'?name='.$name."&lastname=".$lastname."&age=".$age; ?>">Teisele lehele</a>
		<?php $example = array("name" => "Margit", "lastname" => "Pilden"); ?><br>
		<?php echo $_GET["test"]; ?>
   </body>
</html>