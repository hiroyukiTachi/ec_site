<?php echo $this->Form->create('User'); ?>                        
<p><?php echo $this->Form->input( 'username' , array( 'class' => 'input-text', 'type' => 'email', 'label' => false, 'div' => false, 'placeholder' => 'メールアドレス')); ?></p>
<p><?php echo $this->Form->input( 'password' , array( 'class' => 'input-text', 'type' => 'password', 'label' => false, 'div' => false, 'placeholder' => 'パスワード')); ?></p>
<?php echo $this->Form->end(__('Submit')); ?>