<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>登録フォーム</title>
</head>
<body> 

<form>
<p>ユーザ名</p>
<input type="text" name="username"/>
<p>パスワード</p>
<input type="password" name="password" />

<p>パスワードの確認</p>
<input type="password" name="passconf" />

<p>メールアドレス</p>
<input type="text" name="email"/>

<div><input type="submit" value="送信" /></div>

</form>

</body>
</html>


