  <div id="header">               

        <div class="site-title">
            <?php echo $this->Html->link( 'SITETITLE', array('controller' => 'Tops', 'action' => 'index')); ?>
        </div>

        <div class="g-nav">     

            <p class="geust-name"><?php 
                if (isset($session_email)){
                    echo $session_email; 
                }else{
                    echo 'ゲスト';
                }
                ?></p>                

            <ul class="clearfix">                
                <li><?php echo $this->Html->link( 'ログイン', array('controller' => 'Customers', 'action' => 'login')); ?></li>
                <li><?php echo $this->Html->link( 'ログアウト', array('controller' => 'Customers', 'action' => 'logout')); ?></li>
                <li><?php echo $this->Html->link( '新規登録', array('controller' => 'Customers', 'action' => 'add')); ?></li>
                <li><?php echo $this->Html->link( 'ヘルプ', array('controller' => 'Help', 'action' => 'help')); ?></li>
                <li><?php echo $this->Html->link( 'お気に入り', array('controller' => 'CustomerFavoriteProducts', 'action' => 'favorite')); ?></li>
                <li><?php echo $this->Html->link( 'カート', array('controller' => 'ShoppingCart', 'action' => 'cart')); ?></li>
            </ul>

        </div>
                
</div>  