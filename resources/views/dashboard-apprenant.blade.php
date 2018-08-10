@extends ('layouts.app',['title', 'Becode CodeChain (Aplha) - ton dashboard'])

@section ('main-content')

    <h1>Welcome dear  {{session('pseudo')}}</h1>

    <h2>Let's look at what you have achieved</h2>

    <p>You have: {{session('badges')}}  badges for the moment.</p>

    <h3>Your datas</h3>

    <ul>
      <li>
        Your mail: {{session('email')}}
      </li>
      <li>
        <p>
          <a href=<?php echo url('change-infos'); ?>>Change your  personnals informations</a>
        </p>
      </li>
    </ul>
    
    <form class="__form_dashboard-apprenant" action="#" method="post">

      @if ($errors->any())

        <div class="alert alert-danger">
            <ul>

              @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

              @endforeach

            </ul>
          </div>

        @endif

      <p>Commence ton apprentissage dés maintenant et découvre le CSS</p>

      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

      <input type="checkbox" name="action" value="go_CSS"/>

      <label for="Go to CSS">Go to CSS</label>
      <input type="checkbox" name="action" value="last_progression"/>

      <label for="Resume to last progression">Resume to last progression</label>

      <input type="submit" name="submit" value="Go">
    </form>

@endsection
