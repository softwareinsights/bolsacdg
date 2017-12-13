
      <!--Login-->
      <form class="form-signin" action="server/acceso.php" method="post">>
        <h2 class="form-signin-heading">Accesa</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name= "email" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name= "password" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
          <a href="registro-empresa" class="btn btn-lg btn-default btn-block">Registrate Empresa</a>
          <a href="registro" class="btn btn-lg btn-default btn-block">Registrate Solicitate</a>
      </form>
