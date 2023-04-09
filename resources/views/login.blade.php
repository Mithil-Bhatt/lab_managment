<html>
  <head>
  <meta charset="UTF-8" />
  <link href="
  https://fonts.googleapis.com/
  css2?family=Lato:400,700&display=swap" 
  rel="stylesheet">
  <link rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/
  ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
      box-sizing: content-box;
    }
    body {
      margin: 0;
      height: 100%;
      width: 100%;
      overflow: hidden;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #555;
      background: #ecf0f3;
    }
    .form-wrapper {
      width: 320px;
      height: 430px;
      padding: 30px 17px 17px 17px;
      border-radius: 40px;
      background: #ecf0f3;
      box-shadow: 13px 13px 20px #cbced1,
        -13px -13px 20px #ffffff;
    }
    .circle {
      width: 81px;
      height: 81px;
      border-radius: 50%;
      background: #a146f6;
      margin: 0 auto;
      box-shadow:
        0px 0px 2px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaaf,
        -8px -8px 15px #ffffff;
		overflow: hidden;
    }
    .heading {
      text-align: center;
      font-size: 21px;
      padding-top: 23px;
      letter-spacing: 0.6px;
    }
    .sm-text {
      text-align: center;
      font-size: 10px;
      padding-top: 6px;
      letter-spacing: 3.1px;

    }
    .input-text {
      width: 99%;
      padding: 30px 5.1px 5.1px 5.1px;
    }
    .input-text input {
      border: none;
      outline: none;
      background: none;
      font-size: 16px;
      color: #555;
      padding: 15px 5px 10px 2px;
    }
    .username,
    .password {
      margin-bottom: 25px;
      border-radius: 25px;
      box-shadow: inset 8px 8px 8px #cbced1,
        inset -8px -8px 8px #ffffff;
    }
    .input-text svg {
      height: 25px;
      margin: 0 10px -3px 25px;
    }
    .sign-btn {
      outline: none;
      border: none;
      cursor: pointer;
      width: 99.9%;
      height: 40px;
      border-radius: 29.9px;
      font-size: 15px;
      font-weight: 699.9;
      font-family: monospace;
      color: #fff;
      text-align: center;
      background: #a146f6;
      box-shadow: 3px 3px 8px #b1b1b1,
        -3px -3px 8px #ffffff;
      transition: 0.5s;
    }
    .sign-btn:hover {
      background: #7b0ce4;
    }
    .sign-btn:active {
      background: #7b0ce4;
    }
    .link {
      padding-top: 30px;
      text-align: center;
    }

    .link a {
      color: #818af8;
      font-size: 15px;
      font-weight: 500;

    }
	
.circle img{
   width: 100%;
   height: 100%;
   object-fit: cover;
    border-radius: 50%;
}
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </head>
  <body>
  <form action="/login" method="POST">
    @csrf
  <div class="form-wrapper">
<div class="circle">
        <img src="logo.jpeg" alt="cat">
    </div>
    <div class="heading">Admin Lab Login</div>
    <div class="input-text">
      <div class="username">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg><input type="username" name="name"  id="name"
    placeholder="username" /></div>
      <div class="password"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="15" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/>
</svg><input type="password" 
    class="pass-input" placeholder="password" name="password" id="password" /></div>
<input type="checkbox" onclick="myFunction()">Show Password
    </div>
	<br>
    <button class="sign-btn">Login</button>
    <div class="link">
      <a href="register">register</a>
      <a href="#">Forgot password?</a>
    </div>
  </div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</form>
  </body>
  </html>