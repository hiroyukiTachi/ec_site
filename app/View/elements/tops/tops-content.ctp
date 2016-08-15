<div class="tops-content">

    <div class="catalog">
    
        <ul class="catalog-slide">
            <li><?php echo $this->Html->image( 'Nature/1.jpg', array('width' => '735', 'height' => '295')); ?></li>
            <li><?php echo $this->Html->image( 'Nature/2.jpg', array('width' => '735', 'height' => '295')); ?></li>
            <li><?php echo $this->Html->image( 'Nature/3.jpg', array('width' => '735', 'height' => '295')); ?></li>
            <li><?php echo $this->Html->image( 'Nature/4.jpg', array('width' => '735', 'height' => '295')); ?></li>
            <li><?php echo $this->Html->image( 'Nature/5.jpg', array('width' => '735', 'height' => '295')); ?></li>
        </ul>
        
    </div>

    <div class="new-products">
        
        <h2>新着商品</h2>
        
        <ul class="clearfix">
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
    
    <div class="ranking">
        
        <h2>ランキング</h2>
        
        <ul class="clearfix">
            <?php $i = 1; ?>
            <?php foreach ($rankingProducts as $rankingProduct): ?>       
            <li>
                <?php $rankingProductId = $rankingProduct['products']['product_id']; ?>
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
    
    <div class="favorite-products">
        
        <h2>お気に入り商品</h2>
        
        <ul class="clearfix">
            <?php $i = 1; ?>
            <?php foreach ($favoriteProducts as $favoriteProduct): ?>       
            <li>
                <?php $favoriteProductId = $favoriteProduct['products']['product_id']; ?>
                <a href="<?php echo $this->html->url(array('controller'=>'ProductDetail', 'action'=>'productDetail', $favoriteProductId)); ?>">                    
                    <?php $image_path = "Nature/$i.jpg"; ?>
                    <?php echo $this->Html->image( $image_path, array('width' => '165', 'height' => '220')); ?>
                    <p>商品名：<?php echo $favoriteProduct['products']['name']; ?></p>
                    <p>税込み：<?php echo $favoriteProduct['products']['price']; ?></p>
                </a>
                <?php $i += 1; ?>
            </li>  
            <?php endforeach; ?>
        </ul>

    </div>
    
    <div class="news">
        
        <h2>新着ニュース</h2>
        
        <ul>
            <?php foreach ($newNews as $news): ?> 
            <?php $newsId = $news['news']['news_id']; ?>
            <li>
                <a href="<?php echo $this->html->url(array('controller'=>'News', 'action'=>'news', $newsId)); ?>">
                <?php echo $news['news']['create_date']; ?>：<?php echo $news['news']['news_detail']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        
    </div>    

</div>