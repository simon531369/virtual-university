<html>
<head>
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen -Login/Sign-Up</title>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<title>Login/Sign_Up</title>
<link rel="stylesheet" href="/sandbox/css/style_for_login.css" type="text/css" media="all" />
</head>
<body><br/>
<br/>
<div class= "cont">
  <div class="form sign-in">
    <h2>Welcome back </h2>
    <label>
      <span>Enter Your Email</span>
      <input type="email" />
    </label>
    <label>
      <span>Enter Your Password</span>
      <input type="password" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <a href="/sandbox/campusdashboard.php">
    <button type="button" class="submit">Sign In</button></a>
    <button type="button" class="fb-btn">or connect with <span>gmail</span></button>
    <button type="button" class="fb-btn">or connect with   <span>facebook</span></button>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>Hi there !</h2>
        <p>Sign up and join our great community !</p>
      </div>
      <div class="img__text m--in">
        <h2>Member ?</h2>
        <p>If you already has an account, please sign in here !</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>You are few steps ahead!</h2>
      <label>
        <span>Enter your Name</span>
        <input type="text" />
      </label>
      <label>
        <span>Enter your Email</span>
        <input type="email" />
      </label>
      <label>
        <span>Enter your Password</span>
        <input type="password" />
      </label>
      <label>
        <span>Confirm Password</span>
        <input type="password" />
      </label>
      <button type="button" class="submit">Sign Up</button>
      <button type="button" class="fb-btn">Join with <span>gmail</span></button>
      <button type="button" class="fb-btn">Join with <span>facebook</span></button>
    </div>
  </div>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-db44b196776521ea816683afab021f757616c80860d31da6232dedb8d7cc4862.js"></script>
<script>
    document.querySelector('.img__btn').addEventListener('click', function () {
  document.querySelector('.cont').classList.toggle('s--signup');
});
    </script>
</body>
</html>
