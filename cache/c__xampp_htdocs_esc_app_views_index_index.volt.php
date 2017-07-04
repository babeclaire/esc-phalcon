 

 <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
             
                                  <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                         <?= $this->tag->form(['index/start', 'role' => 'form']) ?>
                            <fieldset>
                                <div class="form-group">
                                     <?= $this->tag->textField(['email', 'class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                     <?= $this->tag->passwordField(['password', 'class' => 'form-control']) ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <?= $this->tag->submitButton(['Login', 'class' => 'btn btn-lg btn-success btn-block']) ?>

                            </fieldset>
                        </form>
                        

                         <div class="panel-title">
                           <h5>Don't have an account yet?</h5>
                               </div>
                              <div class="clearfix center">
                              <?= $this->tag->linkTo(['register', 'Sign Up', 'class' => 'btn btn-primary btn-large btn-success']) ?>
                             </div>
                             </div>
                       
                    


                </div>
            </div>
        </div>
       
    </div>
   
