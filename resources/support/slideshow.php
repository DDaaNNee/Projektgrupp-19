<div id="slideshow">
   <div>
     <a href="resources/produkter/sportpaket.php"><img src="resources/img/nocco.png" width="100%" height="100%"></a>
   </div>
   <div>
     <a href="resources/produkter/gamingpaket.php"><img src="resources/img/redbull.png" width="100%" height="100%"></a>
   </div>
   <div>
     <a href="resources/produkter/extremepaket.php"><img src="resources/img/extreme.png" width="100%" height="100%"></a>
   </div>
</div>
<script type="text/javascript">

$("#slideshow > div:gt(0)").hide();
setInterval(function() {
$('#slideshow > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('#slideshow');
},  5000);
</script>
