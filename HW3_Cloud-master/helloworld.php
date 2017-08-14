<html>
<title>Ascii</title>
<body bgcolor="lightblue">
<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

$user = UserService::getCurrentUser();
if (isset($user)) {
  echo sprintf('Welcome, %s! (<a href="%s">sign out</a>)',
               $user->getNickname(),
               UserService::createLogoutUrl('/'));
?>
<?php if (!empty($_POST)): 
$memcache = new Memcache;
$string=$_POST["name"];
  $data = $memcache->get($string);
  if ($data === false) {
for($i = 0; $i != strlen($string); $i++)
{
     $asciiS +=ord($string[$i]);
}
$asciiCode1 = str_replace("&", "&amp;", $asciiS);
$memcache->set($string,$asciiCode1);
}
else
{
$asciiCode1=$data;
}?>
<br><h5 style="color:navy;">You Entered:&nbsp
<?php echo $string ?></h5>
<br><h3 style="color:navy;">The ASCII code of Character,String,Digit or Symbol is :&nbsp
<?php echo $asciiCode1 ?></h3>
<?php else: ?>
<h1 align="center" style="color:navy"> HI!!</h1>
<h1 align="center" style="color:navy">Enter a symbol(letter,digit,symbol,string)to convert to it's ASCII value</h1>
<div style="margin-left: 348px;" class="form_div"><form action=<?php echo ($_SERVER["PHP_SELF"]); ?> method="post">
<input type="text" name="name"/>
<input type="submit" name="submit1"  value="Submit">
</form></div>
<?php endif; 
}
else {
  echo sprintf('<a href="%s">Sign in or register</a>',
               UserService::createLoginUrl('/'));
}
?>
</body>
</html>
