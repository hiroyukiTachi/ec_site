<div class="cart-content">
    
    <div class="cart-list">
        
        <h2>カート一覧</h2>        
        
        <ul>
            <?php $i = 1; ?>
            <?php foreach ($productCart as $product): ?>       
            <li>
                <?php $productCartId = $product['order_detail']['product_id']; ?>
                <a href="<?php echo $this->html->url(array('controller'=>'ProductDetail', 'action'=>'productDetail', $productCartId)); ?>">                      
                    <?php $image_path = "Nature/$i.jpg"; ?>
                    <?php echo $this->Html->image( $image_path, array('width' => '165', 'height' => '220')); ?>
                    <p>商品名：<?php echo $product['products']['name']; ?></p>
                    <p>税込み：<?php echo $product['products']['price']; ?></p>
                </a>
                <?php $i += 1; ?>
            </li>
            <?php endforeach; ?>
        </ul>
        
    </div>
    
</div>
