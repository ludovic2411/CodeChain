<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('assets/js/lib/codemirror.js') }}"></script>
    <!-- LINK  -->
    <link rel="stylesheet" href= "{{ asset('assets/js/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{asset('assets/js/addon/hint/show-hint.css')}}">
    <!-- MODE JS -->
    <script src="{{asset('assets/js/mode/javascript/javascript.js')}}"></script>
    <!-- MODE HTML -->
    <script src="{{asset('assets/js/mode/htmlmixed/htmlmixed.js')}}"></script>
    <!-- MODE CSS -->
    <script src="{{asset('assets/js/mode/css/css.js')}}"></script>

    <!-- Addon HINT -->
    <script src="{{asset('assets/js/addon/hint/html-hint.js')}}"></script>
    <script src="{{asset('assets/js/addon/hint/show-hint.js')}}"></script>
    <script src="{{asset('assets/js/addon/hint/css-hint.js')}}"></script>
    <script src="{{asset('assets/js/addon/hint/javascript-hint.js')}}"></script>



    <style type="text/css">
    body{
      background-color: blue;
    }
    </style>
    <title>Document</title>
</head>
<body>
  <section class="wrapper">
    <div class="mytext">
      <h1>Bonjour cher apprenant</h1>
      <h2>Comment tu t'appelles?</h2>
    </div>

    <div class="empty">
      <h3 class="item-1">1</h3>
      <h3 class="item-2">2 </h3>
      <h3 class="item-3">3 </h3>
      <h3 class="item-4">4</h3>
      <h3 class="item-5">5</h3>
      <h3 class="item-6">6</h3>
    </div>
    <div class="left">
    <div id="codeeditor"></div>
    <div id="soluce_editor"></div>
    <button>Valider</button>
    <button>Solution</button>
    </div>
    <div class="right">
      <form class="exo__form" action="#" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
        <input type="submit" name="submit" value="go next">
      </form>
    </div>
  </section>
<script id="toscript" type="text/javascript">

</script>
<!-- <script src="{{asset('assets/js/scripts-js/script-js-exo-1.js" type="text/javascript')}}"></script> -->
<!-- <script src="{{asset('assets/js/scripts-html/script-html.js')}}"></script> -->
<!-- <script src="{{asset('assets/js/scripts-js/exo-js-2.js')}}" type="text/javascript"></script> -->
<!-- <script src="{{asset('assets/js/scripts-css/script-css-exo-1.js')}}" type="text/javascript"></script> -->
<script src="{{asset('assets/js/scripts-css/script-css-exo-2.js')}}" type="text/javascript"></script>
</body>
</html>
