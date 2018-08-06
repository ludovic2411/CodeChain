<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change your informations</title>
  </head>
  <body>
    <h1>Welcome dear</h1>
    <h2>Here you can change your personnal informations</h2>
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
      <p><label for="current_pseudo">Type your current pseudo</label></p>
      <p><input type="text" name="current_pseudo"/></p>
      <p><label for="new_pseudo">Type your new pseudo</label></p>
      <p><input type="text" name="new_pseudo"/></p>
      <p><label for="current_email">Type your current email adress</label></p>
      <p><input type="email" name="current_email"/></p>
      <p><label for="new_email">Type your new email address</label></p>
      <p><input type="email" name="new_email"/></p>
      <p><label for="current_password">Type your current password</label></p>
      <p><input type="password" name="current_password"/></p>
      <p><label for="new_password">Type your new password</p>
      <p><input type="password" name="new_password"/></p>
      <p><input type="submit" name="submit" value="change informations"/></p>
      </form>
  </body>
</html>
