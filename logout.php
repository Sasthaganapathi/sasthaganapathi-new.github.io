<input type="submit" name="logout" value="Logout"><br>
<?phpif(isset($_POST["logout"]))
{
session_destroy();
header("location:mainlogin.php");	
}?>