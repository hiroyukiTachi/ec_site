<div class="login-content">    
    
    <h2>ログイン</h2>
    
    <div class="login-form">             
                
        <?php echo $this->Form->create('Customer', array('method' => 'post', 'url' => 'login')); ?>              
        <?php echo $this->Session->flash(); ?>
        <p><?php echo $this->Form->input( 'email' , array( 'class' => 'login-mail', 'type' => 'mail', 'label' => false, 'div' => false, 'placeholder' => 'メールアドレス')); ?></p>
        <p><?php echo $this->Form->input( 'password' , array( 'class' => 'login-password margin-top', 'type' => 'password', 'label' => false, 'div' => false, 'placeholder' => 'パスワード')); ?></p>
        <div class="text-align-center margin-top">
            <a id="login-btn" href="#">ログイン</a>
        </div>        
        <?php echo $this->Form->end(); ?>
        
    </div>    
    
</div>