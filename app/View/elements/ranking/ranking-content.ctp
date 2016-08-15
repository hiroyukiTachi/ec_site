<div class="ranking-content">
    
    <div class="ranking-list">
        
        <h2>ランキング</h2>
        
        <ul>
            <?php $i = 1; ?>
            <?php foreach ($rankingProducts as $rankingProduct): ?>       
            <li>
                <?php $rankingProductId = $rankingProduct['products']['product_id']; ?>
                <p><?php echo $rankingProductId + 1; ?></p>
                <a href="<?php echo $this->html->url(array('controller'=>'ProductDetail', 'action'=>'productDetail', $rankingProductId)); ?>">                      
                    <?php $image_path = "Nature/$i.jpg"; ?>
                    <?php echo $this->Html->image( $image_path, array('width' => '165', 'height' => '220')); ?>
                    <p>商品名：<?php echo $rankingProduct['products']['name']; ?></p>
                    <p>税込み：<?php echo $rankingProduct['products']['price']; ?></p>
                </a>
                <?php $i += 1; ?>
            </li>  
            <?php endforeach; ?>
        </ul>
        
    </div>
    
</div>