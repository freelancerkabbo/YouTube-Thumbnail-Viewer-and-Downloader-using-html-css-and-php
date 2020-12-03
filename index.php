<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YT-Download</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<!-- YouTube thumbnail downloader -->
<?php

if(isset($_POST["submit"])){

$url = $_POST["url"];
$value = explode ('v=',$url);
$videoId = $value[1];

}

?>
<style type="text/css">

</style>

<div id="llll">
<samp id="kokkk" >YouTube Thumbnail Viewer and Downloader!</samp>

<form method="post" >

<input placeholder="Youtube URL" id="hii" type="text" name="url" required />
<input id="ekk" type="submit" name="submit" />

</form>

<p id="text01">How to download a YouTube thumbnail preview image</p>
<p id="text02" >1. Paste your YouTube URL in the box and press Submit</p>
<p id="text03" >2. Right-click the image and select "Save image as"</p>

<br>

<?php if(!empty ($videoId)){ ?>

<h1  id="text04" >Max resolution 1080p</h1>
<a href="https://img.youtube.com/vi/<?php echo $videoId;?>/maxresdefault.jpg" alt="thumbnail full resolution" >

<img src="https://img.youtube.com/vi/<?php echo $videoId;?>/maxresdefault.jpg" 
alt="thumbnail full resolution" alt="thumbnail full resolution" id="jjj">

</a><br><br>

<h1 id="text04" >HD 720p </h1>
<a href="https://img.youtube.com/vi/<?php echo $videoId;?>/sddefault.jpg" alt="thumbnail SMALL resolution" >

<img src="https://img.youtube.com/vi/<?php echo $videoId;?>/sddefault.jpg" 
alt="thumbnail full resolution" alt="thumbnail SMALL resolution" id="jjj">

</a><br><br>

<h1 id="text04">Standard quality 480p</h1>
<a href="https://img.youtube.com/vi/<?php echo $videoId;?>/hqdefault.jpg" alt="thumbnail MEDIUM resolution" >

<img src="https://img.youtube.com/vi/<?php echo $videoId;?>/hqdefault.jpg" 
alt="thumbnail full resolution" alt="thumbnail MEDIUM resolution" id="jjj">

</a><br><br>

<h1 id="text04" >Medium 360p</h1>
<a href="https://img.youtube.com/vi/<?php echo $videoId;?>/mqdefault.jpg" alt="thumbnail MEDIUM resolution" >

<img src="https://img.youtube.com/vi/<?php echo $videoId;?>/mqdefault.jpg" 
alt="thumbnail full resolution" alt="thumbnail MEDIUM resolution" id="jjj">

</a>

<?php }?> 
</div>

<!-- YouTube thumbnail downloader end -->

</body>
</html>

