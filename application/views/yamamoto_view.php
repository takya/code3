<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body> 

<form method=post>
<p>番号</p>
<input type="text" name="number"/>
<p>名前</p>
<input type="text" name="name" />

<p>パスワード</p>
<input type="password" name="pass" />

<!-- <p>メールアドレス</p> -->
<!-- <input type="text" name="email"/> -->

<div><input type="submit" value="送信" /></div>

</form>

</body>
</html>;



