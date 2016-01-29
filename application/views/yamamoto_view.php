<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body> 
<table border>
	<tbody>	

<form method=post>
<tr>
<td><p>番号</p></td>
<input type="text" name="number"/>
</tr>
<tr>
<td><p>名前</p></td>
<input type="text" name="name" />
</tr>
<tr>
<td><p>パスワード</p></td>
<input type="password" name="pass" />
</tr>
<!-- <p>メールアドレス</p>
<input type="text" name="email"/> -->

<div><input type="submit" value="送信" /></div>

</form>
</tbody>
</table>

</body>
</html>;

<!-- <html>
<head>
<title></title>
</head>
<body>
<h1><?php echo $heading; ?></h1>
</body>
</html>
 -->
