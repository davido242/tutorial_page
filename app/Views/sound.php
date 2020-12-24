<html lang="en"> 
<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0"> 
		<title>Sounds</title> 
		<?php echo view('includes/header');?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/sound.css');?>">
	
  <script type="text/javascript">
  
    var audio = new Audio('<?php echo base_url("music/audio_file.mp3");?>');

    function post()
    {
      var tval=document.getElementById("mess").value;	
      var inhtml=document.getElementById("chat_div");
      inhtml.innerHTML=inhtml.innerHTML+"<p class='me'>Me:-"+tval+"</p>";
      inhtml.innerHTML=inhtml.innerHTML+"<p class='demo'>Demo:-Hi! how are you</p>";
      audio.play();
    }

  </script>
</head>

<body>
  
  <h1>Play Sound On Notification Using JavaScript And CSS</h1>
  <div id="chat_div">
    <textarea id="mess">
    </textarea>
    <input type="button" value="Play" onclick="post();">
    <p class="demo">Demo:-Post Something to test Notification Sound</p>
  </div>

</body>
</html>