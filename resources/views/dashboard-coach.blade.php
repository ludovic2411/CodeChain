
<?php
$becodian_name=DB::table('users')->pluck('name');
$becodian_firstname=DB::table('users')->pluck('first_name');
$becodian_pseudo=DB::table('users')->pluck('pseudo');
$becodian_email=DB::table('users')->pluck('email');
$becodian_acheviement=DB::table('users')->pluck('badges');

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href={{asset('css/dashboard.css')}}>
    <title>Your dashboard</title>
  </head>
  <body>
    <section class="dashboard_container">
    <h1>hello dear coach </h1>
    <h2>Let's look at what the futur becode have done</h2>
    <p>Personnal infos: </p>
    <section class="main_table">
      <section class="name_row">
        <h3>Name:</h3>
        <?php foreach ($becodian_name as $value) {
          echo '<p>'.$value.'</p>';
        } ?>
      </section>
      <section class="first_name_row">
        <h3>First name:</h3>
        <?php foreach ($becodian_firstname as $value) {
          echo '<p>'.$value.'</p>';
        } ?>
      </section>
      <section class="pseudo_row">
        <h3>Pseudo:</h3>
        <?php foreach ($becodian_pseudo as $value) {
          echo '<p>'.$value.'</p>';
        } ?>
      </section>
      <section class="email_row">
        <h3>Email:</h3>
        <?php foreach ($becodian_email as $value) {
          echo '<p>'.$value.'</p>';
        } ?>
      </section>
      <section class="badges_row">
        <h3>Badges:</h3>
        <?php foreach ($becodian_acheviement as $value) {
          echo '<p>'.$value.'</p>';
        } ?>
      </section>
    </section>

    <script src="{{asset('assets/js/dashboard.js')}}" type="text/javascript">

    </script>
  </body>
</html>
