
 <div class="container">
 <div class="row">
 <div class="col offset-m3 m6">
   <h1>Bienvenido</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
    <div class="input-field col s12 m12 l12">
          <input placeholder="Usuario" size="20" id="username" name="username" type="text" class="validate">
          <label for="first_name">Usuario</label>
        </div>
   <!--  <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/> -->
     <br/>
   <div class="input-field col s12 m12 l12">
          <input id="password" type="password" size="20" name="password" class="validate">
          <label for="password">Password</label>
        </div>
    <!--<label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/> -->
     <br/>
       <div class="input-field col s12 m12 l12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
    <i class="material-icons right">send</i>  </button>
        </div>

   </form>
   </div>
   </div>
  </div>
