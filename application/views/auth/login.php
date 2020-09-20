 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
 <div>
     <a class="hiddenanchor" id="signup"></a>
     <a class="hiddenanchor" id="signin"></a>


     <div class="login_wrapper">
         <div class="animate form login_form">
             <section class="login_content">
                 <form action="<?= base_url() ?>auth/login" method="post">
                     <img src="<?= base_url() ?>assets/img/POLDA.png" width="75px">
                     <h3>Login To Your Account</h3>

                     <div>
                         <input type=" text" class="form-control" name="identity" placeholder="Username" required="" />
                     </div>
                     <div>
                         <input type="password" class="form-control" name="password" placeholder="Password"
                             required="" />
                     </div>
                     <div>
                         <div style="text-align:left;">
                             <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                             <?php echo lang('login_remember_label', 'remember'); ?>
                         </div>
                         <button class="btn btn-default" type="reset">Reset </button>
                         <button class="btn btn-success" type="submit" name="login">Login</button>
                     </div>
                     <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
                     <div class="clearfix"></div>
                     <br />
                     <div class="separator">
                         <div>
                             <h2>SISTEM INFORMASI ARSIP PERSURATAN</h2>
                             <h2>(SIAP BALI)</h2>
                             <br>
                             <p><strong>© 2018-2019 SIAP.</strong> All Right Reserved</P>
                             <p>Programmer Application By: <strong><a href="https://github.com/deyan-ardi"
                                         style="text-decoration: none;">ChristinaSita
                                         & D'Verayanti</a> </strong>
                             </p>
                         </div>
                     </div>
                 </form>
             </section>
         </div>
     </div>
 </div>