<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Your dashboard</title>
  </head>
  <body>
    <h1>hello dear coach {{$pseudo}}</h1>
    <h2>Let's look at what the futur becode have done</h2>
    <p>Personnal infos: {{$email}}</p>
    <section class="main_table">
      <section class="name_row">

      </section>
    </section>
    <script src="{{asset('assets/js/database-ajax.js')}}" type="text/javascript">

    </script>
  </body>
</html>
