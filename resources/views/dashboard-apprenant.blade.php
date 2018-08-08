

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your dashboard</title>
  </head>
  <body>
    <h1>Welcome dear  {{session('pseudo')}}</h1>
    <h2>Let's look at what you have achieved</h2>
        <p>You have: {{session('badges')}}  badges for the moment.</p>
        <p>Your datas</p>
        <ul>
          <li>Your mail: {{session('email')}} </li>
          <li><p><a href=<?php echo url('change-infos'); ?>>Change your  personnals informations</a></p></li>
        </ul>
        <form class="__form_dashboard-apprenant" action="#" method="post">
          <p>Commence ton apprentissage dés maintenant et découvre le CSS</p>
          <p><a href=</p>
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
          <input type="submit" name="submit" value="Go">
        </form>
  </body>
</html>
