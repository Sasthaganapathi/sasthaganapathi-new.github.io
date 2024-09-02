
<footer class="container-fluid text-center">
  <p>SASTHAGANAPATHI© <?=date('Y')?></p>
</footer>
</body>
</html>

<?php
if(isset($_POST["logout"]))
{
			session_destroy();
			header("location:mainlogin.php");
}?>