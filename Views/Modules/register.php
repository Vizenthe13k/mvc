<br>
<h6>Register a user</h6>
<br><br>

<div class="row">
    <form class="col s12" method="post">

      <div class="row">
        <div class="input-field col s4">
          <input id="username" type="text" name="username" class="validate" required>
          <label for="username">Username</label>
        </div>

        <div class="input-field col s4">
          <input id="password" type="password" name="password" class="validate" required>
          <label for="password">Password</label>
        </div>

        <div class="input-field col s4">
            <input id="email" type="email" name="email" class="validate" required>
            <label for="email">Email</label>
        </div>

        <div class="row">

            <div class="input-field col s2">
                <button class="btn waves waves-effect waves-light teal darken-3">Register</button>
            </div>

        </div>
        
    </div>

    <br>

    </form>
  </div>

<?php

  $registro = new MvcController();
  $registro -> regUserController();

  if(isset($_GET["bv"])) 
  {
    if($_GET["bv"] == "ok") 
    {
      echo "<h5>Registro agregado!</h5>";
    }

  }

?>