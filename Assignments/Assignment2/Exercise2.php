<?php
    function titleFunction(){
        $title = "Exercise2";
        return $title;
    }
    
    function headerFunction(){
        $header = "MY WEB PAGE";
        return $header;
    }
    function nameFunction(){
        $name = "Ryan Donnelly";
        return $name;
    }
    function paragraphFunction(){
            $paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat mollis dolor at bibendum. In congue maximus ligula, ut faucibus mi accumsan at. Vestibulum sagittis tortor eget dui ultricies, a vulputate lacus faucibus. Fusce aliquet bibendum erat, sed bibendum eros cursus eu. Nulla at neque rhoncus, ultricies odio at, accumsan elit. Proin in turpis eu leo dapibus pulvinar. Vivamus viverra massa ut enim fringilla ultricies. Donec in enim blandit, iaculis nulla quis, egestas elit. Nullam ut enim id erat bibendum finibus nec ac eros. Nulla malesuada ex facilisis ultrices rhoncus. Nullam in euismod nisl. Donec pulvinar ex sit amet aliquet egestas. <br><br>";
            return $paragraph;   
        }

    function footerFunction(){
        $footer = "My Web Page ©2022";
        return $footer;
    }
?>
<?php
  $title = titleFunction();
  $header = headerFunction();
  $name = nameFunction();
  $paragraph = paragraphFunction();
  $footer = footerFunction();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>&lt;
        <?php echo $title ?>
    &gt;</title>
	<style>
		* {margin: 0; padding: 0;}
		body {font: 120%/1.5 sans-serif;}
		#wrapper {width: 1000px; margin: 0 auto; border: 1px solid black;}
		header {background: green; height: 150px; padding: 20px;}
		header h1 {color: white;}
		main {padding: 10px;}
		main h2 {margin: 15px 0;}
		main p {margin-bottom: 15px;}
		footer {background: #eee; padding: 10px 0; text-align: center}
		footer p {font-size: .8em;}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>&lt;
                <?php echo $header;?>
                &gt;</h1>
		</header>
		<main>
			<h2>My name is &lt;
            <?php echo $name;?>
                &gt;</h2>
			<p>&lt;<?php for ($x = 0; $x <= 2; $x++) {
                        echo "$paragraph <br><br>";
} ?>&gt;</p>
		</main>
		<footer>
			<p>&lt;<?php echo $footer;?>&gt;</p>
		</footer>
	</div>
	
</body>
</html>