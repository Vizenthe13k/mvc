<h5>Ingresar</h5>

<div class="row">
    <form class="col s12" method="post">

      <div class="row">
        <div class="input-field col offset-s3 s5">
          <input autofocus id="username" name="usernamel" type="text" class="validate" style="margin-left:40px">
          <label for="username" style="margin-left:40px">Username</label>
        </div>

      <div class="row">
        <div class="input-field col offset-s3 s5">
          <input id="password" type="password" name="passwordl" class="validate" style="margin-left:40px">
          <label for="password" style="margin-left:40px">Password</label>
        </div>
      </div>
    
    <div class="input-field col offset-s5">
      <button class="btn waves-effect waves-red">Ingresar</button>
    </div>    

  </form>
</div>

<?php

  $login = new MvcController();
  $login -> loginUserController(); //EJECUTAMOS ESTO Y NOS IMPRIME EL ECHO $RESPUESTA DE 

  if(isset($_GET["bv"]))
  {
    if($_GET["bv"] == "fail")
    {
      echo '<script>
              alert("Oops! has a error :( ");
           </script>';

    } else { echo '<script> alert("Welcome to Dreams"); </script>'; }

  }  

?>