<div id="slideshow">
   <div>
     <a href="index.php"><img src="resources/img/My Post(1).png" width="100%" height="100%"></a>
   </div>
   <div>
     <a href="index.php"><img src="resources/img/My Post(2).png" width="100%" height="100%"></a>
   </div>
   <div>
     <a href="index.php"><img src="resources/img/My Post(3).png" width="100%" height="100%"></a>
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
