<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form class="" action="#" method="post">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
      <p><label for="pseudo">Pseudo</label></p>
      <p><input type="text" name="login_pseudo" value=""/></p>
      <p><label for="email">Email</label></p>
      <p><input type="email" name="login_email"/></p>
      <p><label for="password">Password</label></p>
      <p><input type="password" name="login_password"/></p>
      <p><label for="status">Vous êtes:</label></p>
      <p><select name="login_satus">
        <option value="Apprenant">Apprenant</option>
        <option value="Coach">Coach</option></select></p>
      <p><label for="key">Clé d'identification</label></p>
      <p><input type="password" name="login_key"/></p>
      <!-- <p><label for="remember">Remember me</label></p>
      <p><input type="checkbox" value="remember me" name="remember"/></p> -->
      <p><input type="submit" name="login_submit" value="login"/></p>
      <p><a href=<?php echo url('/register'); ?>>Not registered? Create an account</a></p>
    </form>
  </body>
</html>
