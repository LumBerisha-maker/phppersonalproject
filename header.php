<!DOCTYPE html>
<html>
<head>
<title>Sports Shop</title>
<style>
body { font-family: Arial; }
.card { border:1px solid #ccc; padding:10px; margin:10px; display:inline-block; }
.slider img { width:100%; height:300px; }
</style>
</head>
<body>

<h1>🏪 Sports Shop</h1>

<div class="slider">
  <img id="slide" src="images/ffoootball.webp">
</div>

<script>
let imgs = ["1.jpg","2.jpg","3.jpg"];
let i = 0;
setInterval(()=>{
  i = (i+1)%imgs.length;
  document.getElementById("slide").src = "images/" + imgs[i];
},2000);
</script>