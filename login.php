<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Administrator Online Ticketing</title>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="loginWrap">
 <div id="loginMain">
  <div id="loginLogin"></div>
  <div id="loginhead"></div>
  <div id="loginform">
    <form action="actlogin.php" method="post" name="login" id="login" onsubmit="return validasi(this)">
      <label>
        <input placeholder='Email' type='text' name='email' onfocus="if(this.value=='email')this.value=''" onblur="if(this.value=='')this.value='email'" />
        </label>
      <label>
        <input placeholder='Password' type='password' name='password' onfocus="if(this.value=='password')this.value=''" onblur="if(this.value=='')this.value='password'" />
        </label>
      <label1>
      <input name="submit"  class="button" type="submit" value="LOGIN" />
        </label>
    </form>
  </div>
 </div>
</div>
</body>
</html>