<div class="coordinate-content">
    
    <div class="coordinate-list">
        
        <h2>新着コーディネート</h2>
        
        <ul>
            <?php $i = 1; ?>
            <?php foreach ($newProducts as $newProduct): ?>       
            <li>
                <?php $newProductId = $newProduct['products']['product_id']; ?>
                <a href="<?php echo $this->html->url(array('controller'=>'ProductDetail', 'action'=>'productDetail', $newProductId)); ?>">                      
                    <?php $image_path = "Nature/$i.jpg"; ?>
                    <?php echo $this->Html->image( $image_path, array('width' => '165', 'height' => '220')); ?>
                    <p>商品名：<?php echo $newProduct['products']['name']; ?></p>
                    <p>税込み：<?php echo $newProduct['products']['price']; ?></p>
                </a>
                <?php $i += 1; ?>
            </li>  
            <?php endforeach; ?>
        </ul>
        
    </div>
    
</div>
