<!DOCTYPE html >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Curso ideal para você</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Seu curso ideial é:</h1>
		
        <?php
            
            $answer1 = $_POST['pergunta1'];
            $answer2 = $_POST['pergunta2'];
            $answer3 = $_POST['pergunta3'];
            $answer4 = $_POST['pergunta4'];
            $answer5 = $_POST['pergunta5'];
        
           
            if ($answer1 == "A" && $answer2 == "A" && $answer3 =="C" && $answer4 == "D") {           
            echo "Informática Kids";
            }

            if ($answer1 == "B" && $answer2 == "B" && $answer3 =="B" && $answer4 == "B" && $answer5  == "D") {           
            echo "Editoração e Produção Gráfica";
            }
            
            if ($answer1 == "E" && $answer2 == "A" && $answer3 =="A" && $answer4 == "D") {           
            echo "Informática para melhor idade";
            }
            
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>