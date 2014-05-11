<div class = 'container'>
Copyright Xinsing
	<a href="http://facebook.com/onestophealthcare"><img title="facebook" src="/onestophealthcare/res/img/facebook.jpg" alt="Facebook" height="50"/></a>
	<img src="/onestophealthcare/res/img/FacebookLogo.jpg" height="50">

</div>
<?php
if(isset($_SESSION['id'])){//if u logged in
?>
<script>
$('.topheader').remove();
</script>
<?php } ?>
</body>
</html>