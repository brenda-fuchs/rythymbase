<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
body,
html {
  height: 100%;
}
h1{
  color: white;
}
body {
  font-family: 'Open Sans';
  font-weight: 100;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
}

input ::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

input ::-moz-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

input :-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

input:focus {
  outline: 0 transparent solid;
}

input:focus ::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
}

input:focus ::-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
}

input:focus :-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
}

.login-form {
  min-height: 10rem;
  margin: auto;
  max-width: 50%;
  padding: .5rem;
}

.login-text {
  color: white;
  font-size: 1.5rem;
  margin: 0 auto;
  max-width: 50%;
  padding: .5rem;
  text-align: center;
}

.login-text .fa-stack-1x {
  color: black;
}

.login-username,
.login-password {
  background: transparent;
  border: 0 solid;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  color: white;
  display: block;
  margin: 1rem;
  padding: .5rem;
  -webkit-transition: 250ms background ease-in;
  transition: 250ms background ease-in;
  width: calc(100% - 3rem);
}

.login-username:focus,
.login-password:focus {
  background: white;
  color: black;
  -webkit-transition: 250ms background ease-in;
  transition: 250ms background ease-in;
}

/*.login-forgot-pass {
  bottom: 0;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 75%;
  left: 0;
  opacity: 0.6;
  padding: .5rem;
  position: absolute;
  text-align: center;
  width: 100%;
} */

.login-forgot-pass:hover {
  opacity: 1;
}

.login-sign-up {
  bottom: 10;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 75%;
  left: 0;
  opacity: 0.6;
  padding: .5rem;
  position: absolute;
  text-align: center;
  width: 100%;
}

.login-sign-up:hover {
  opacity: 1;
}
.login-submit {
  border: 1px solid white;
  background: transparent;
  color: white;
  display: block;
  margin: 1rem auto;
  min-width: 1px;
  padding: .25rem;
  -webkit-transition: 250ms background ease-in;
  transition: 250ms background ease-in;
}

.login-submit:hover, .login-submit:focus {
  background: white;
  color: black;
  -webkit-transition: 250ms background ease-in;
  transition: 250ms background ease-in;
}

[class*=underlay] {
  left: 0;
  min-height: 100%;
  min-width: 100%;
  position: fixed;
  top: 0;
}

.underlay-photo {
  -webkit-animation: hue-rotate 6s infinite;
          animation: hue-rotate 6s infinite;
  background: url("https://64.media.tumblr.com/affedfe4e24e93f02fb10b13ae635c87/tumblr_oma7uuULcH1u18u0wo2_1280.jpg");
  background-size: cover;
  z-index: -1;
}

.underlay-black {
  background: rgba(0, 0, 0, 0.7);
  z-index: -1;
}

/*# sourceMappingURL=login.css.map */
      </style>
</head>
<body>
<form class="login-form" method="post">
  <p class="login-text">
  <span class="fa-stack fa-lg">
    <i class="far fa-2x fa-user-circle"></i>
    </span>
  </p>
  <h1> Ingresá tu email y contraseña para registrarte</h1>
  <input type="email" name="email" class="login-username" autofocus="true" required="true" placeholder="Email" />
  <input type="password" name="passwd" class="login-password" required="true" placeholder="Password" />
  <input type="submit" name="login" value="Create" class="login-submit" />
  <div class="underlay-photo"></div>
</form>
</body>
</html>