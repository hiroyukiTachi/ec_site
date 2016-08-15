<div class="search-result">
    
    <?php echo $this->Session->flash(); ?>    

    <ul class="clearfix">
        <?php $i = 1; ?>
        <?php foreach ($searchResult as $result): ?>       
        <li>
            <?php $resultId = $result['products']['product_id']; ?>
            <a href="<?php echo $this->html->url(array('controller'=>'ProductDetail', 'action'=>'productDetail', $resultId)); ?>">                    
                <?php $image_path = "Nature/$i.jpg"; ?>
                <?php echo $this->Html->image( $image_path, array('width' => '165', 'height' => '220')); ?>
                <p>商品名：<?php echo $result['products']['name']; ?></p>
                <p>税込み：<?php echo $result['products']['price']; ?></p>
            </a>
            <?php $i += 1; ?>
        </li>  
        <?php endforeach; ?>
    </ul>
    
</div>
