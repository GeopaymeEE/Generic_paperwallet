<?php

// get image

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 1048577)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      //echo " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
    // convert to base64

    $path = "upload/" . $_FILES["file"]["name"];

    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
  }
else
  {
  echo "Invalid file";
  }



//generate preview

?> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <script src="jquery.plug-in.js" type="text/javascript"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  
  #draggable { width: 150px; height: 150px; padding: 0.5em; }
  #image { border: 0;height: 261px;left: 0;margin: 0;padding: 0;width: 486px; }
  #qrcode_public1 { background-color: #FFFFFF;
					display: block;
					float: none;
					left: 17px;
					margin: 0;
					padding: 5px 5px 2px;
					position: absolute;
					top: 52px;
					z-index: 100; }
  #qrcode_private1 { background-color: #FFFFFF;
					display: block;
					float: none;
					left: 360px;
					margin: 0;
					padding: 5px 5px 2px;
					position: absolute;
					top: 104px;
					z-index: 100; }
			
  
  </style>
  <script> 
  $(function() {
    $( "#image" ).resizable();
	$( "#qrcode_public1" ).draggable({ cursor: "move" });
	$( "#qrcode_public1" ).resizable();
	$( "#qrcode_private1" ).draggable({ cursor: "move" });
	$( "#qrcode_private1" ).resizable();

  });  

  </script>

<script type='text/javascript'>

function submitButton() {
    $('#target input[name="qr_pub_w"]').val($('#qrcode_public1').css('width'));
    $('#target input[name="qr_pub_h"]').val($('#qrcode_public1').css('height'));
    $('#target input[name="qr_priv_w"]').val($('#qrcode_private1').css('width'));
    $('#target input[name="qr_priv_h"]').val($('#qrcode_private1').css('height'));
    $('#target input[name="qr_pub_pos_t"]').val($('#qrcode_public1').css('top'));
    $('#target input[name="qr_pub_pos_l"]').val($('#qrcode_public1').css('left'));
    $('#target input[name="qr_priv_pos_t"]').val($('#qrcode_private1').css('top'));
    $('#target input[name="qr_priv_pos_l"]').val($('#qrcode_private1').css('left'));

    $('#target input[name="img_w"]').val($('#image').css('width'));
    $('#target input[name="img_h"]').val($('#image').css('height'));

    $('#target').submit();
    return false;
}


</script>

</head>
<body style="margin: 0px;>


<div id="canvas" >
	<img id="image" class="ui-widget-content" src="<?php echo $base64; ?>" >

	<div id="qrcode_public1" class="ui-widget-content">
		<canvas width="825" height="825" style="width: 82.5px; height: 82.5px;"></canvas>
	</div>

	<div id="qrcode_private1" class="ui-widget-content">
		<canvas width="1025" height="1025" style="width: 102.5px; height: 102.5px;"></canvas>
	</div>
        <form action="Generic_Generator.php" method="post" id="target">
        <input type="hidden" id="qr_pub_w" name="qr_pub_w" value="null" />
        <input type="hidden" id="qr_pub_h" name="qr_pub_h" value="null" />
        <input type="hidden" id="qr_priv_w" name="qr_priv_w" value="null" />
        <input type="hidden" id="qr_priv_h" name="qr_priv_h" value="null" />
        <input type="hidden" id="qr_pub_pos_t" name="qr_pub_pos_t" value="null" />
        <input type="hidden" id="qr_pub_pos_l" name="qr_pub_pos_l" value="null" />
        <input type="hidden" id="qr_priv_pos_t" name="qr_priv_pos_t" value="null" />
        <input type="hidden" id="qr_priv_pos_l" name="qr_priv_pos_l" value="null" />
        <input type="hidden" id="img_h" name="img_h" value="null" />
        <input type="hidden" id="img_w" name="img_w" value="null" />
        <input type="hidden" id="img" name="img" value=<?php echo $path; ?> />

        <input type="button" onclick="submitButton()" value="Generate"> 
        </form>
 
 
</body>
</html>


