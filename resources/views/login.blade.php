@extends ('layouts.app',['title', 'Becode CodeChain (Aplha) - login'])

@section ('main-content')

  <section class="loginform-box">
    <div class="loginform-wrapper">
      
        <img
        src="/assets/img/app_image192.png"
        alt="CodeChain app image" 
        title="CodeChain"
        >
    
    
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

        <label for="pseudo">Pseudo</label>
        <input type="text" name="login_pseudo" value=""/>
        

        <label for="email">Email</label>
        <input type="email" name="login_email"/>
        

        <label for="password">Password</label>
        <input type="password" name="login_password"/>
        
        <label for="status">Vous êtes:</label>
        <select name="login_satus">
          <option value="Apprenant">Apprenant</option>
          <option value="Coach">Coach</option>
        </select>
        
      
        <label for="key">Clé d'identification</label>
        <input type="password" name="login_key"/>
        
        <!-- <label for="remember">Remember me
          <input type="checkbox" value="remember me" name="remember"/>
        </label> -->
        <input type="submit" class="btn primary" name="login_submit" value="Login"/>
        <a href=<?php echo url('/register'); ?>>Not registered? Create an account</a>

      </form>
    </div>
  </section>

@endsection