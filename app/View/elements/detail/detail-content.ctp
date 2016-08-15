<?php $productId = $productDetail[0]['products']['product_id']; ?>
<?php $orderId = $productDetail[0]['order']['order_id']; ?>

<div class="detail-content clearfix">
    
    <div class="product-detail-image">        
        
        <div class="product-slider">
      
            <h2>商品画像</h2>

            <ul class="bxslider1">
                <li><?php echo $this->Html->image( 'Nature/1.jpg', array('width' => '650', 'height' => '660')); ?></li>
                <li><?php echo $this->Html->image( 'Nature/2.jpg', array('width' => '650', 'height' => '660')); ?></li>
                <li><?php echo $this->Html->image( 'Nature/3.jpg', array('width' => '650', 'height' => '660')); ?></li>
                <li><?php echo $this->Html->image( 'Nature/4.jpg', array('width' => '650', 'height' => '660')); ?></li>
                <li><?php echo $this->Html->image( 'Nature/5.jpg', array('width' => '650', 'height' => '660')); ?></li>
                <li><?php echo $this->Html->image( 'Nature/6.jpg', array('width' => '650', 'height' => '660')); ?></li>
                <li><?php echo $this->Html->image( 'Nature/7.jpg', array('width' => '650', 'height' => '660')); ?></li>
                <li><?php echo $this->Html->image( 'Nature/8.jpg', array('width' => '650', 'height' => '660')); ?></li>                
            </ul>

            <div id="bx-pager">
                <a data-slide-index="0" href=""><?php echo $this->Html->image( 'Nature/1.jpg', array('width' => '115', 'height' => '120')); ?></a>
                <a data-slide-index="1" href=""><?php echo $this->Html->image( 'Nature/2.jpg', array('width' => '115', 'height' => '120')); ?></a>
                <a data-slide-index="2" href=""><?php echo $this->Html->image( 'Nature/3.jpg', array('width' => '115', 'height' => '120')); ?></a>
                <a data-slide-index="3" href=""><?php echo $this->Html->image( 'Nature/4.jpg', array('width' => '115', 'height' => '120')); ?></a>
                <a data-slide-index="4" href=""><?php echo $this->Html->image( 'Nature/5.jpg', array('width' => '115', 'height' => '120')); ?></a>
                <a data-slide-index="5" href=""><?php echo $this->Html->image( 'Nature/6.jpg', array('width' => '115', 'height' => '120')); ?></a>
                <a data-slide-index="6" href=""><?php echo $this->Html->image( 'Nature/7.jpg', array('width' => '115', 'height' => '120')); ?></a>
                <a data-slide-index="7" href=""><?php echo $this->Html->image( 'Nature/8.jpg', array('width' => '115', 'height' => '120')); ?></a>
            </div>

        </div>
        
    </div>

    <div class="product-detail-info">

        <div class="product-detail-status">
            
            <h2>商品ステータス</h2>        

            <table>
                <thead>
                    <tr>
                            <th scope="cols">タイトル</th>
                            <th scope="cols">内容</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <th scope="row">商品名</th>
                            <td><?php echo $productDetail[0]['products']['name']; ?></td>
                    </tr>
                    <tr>
                            <th scope="row">料金</th>
                            <td><?php echo $productDetail[0]['products']['price']; ?>円</td>
                    </tr>
                    <tr>
                            <th scope="row">性別タイプ</th>
                            <td><?php echo $productDetail[0]['sex_type']['sex_type_name']; ?></td>
                    </tr>
                    <tr>
                            <th scope="row">商品タイプ</th>
                            <td><?php echo $productDetail[0]['product_type']['product_type_name']; ?></td>
                    </tr>
                    <tr>
                            <th scope="row">取り扱いタイプ</th>
                            <td><?php echo $productDetail[0]['use_type']['use_type_name']; ?></td>
                    </tr>
                    <tr>
                            <th scope="row">ショップタイプ</th>
                            <td><?php echo $productDetail[0]['shop_type']['shop_type_name']; ?></td>
                    </tr>
                    <tr>
                            <th scope="row">カテゴリ名</th>
                            <td><?php echo $productDetail[0]['categorys']['category_name']; ?></td>
                    </tr>
                    <tr>
                            <th scope="row">カラー</th>
                            <td><?php echo $productDetail[0]['color_type']['color_type_name']; ?></td>
                    </tr>
                    <tr>
                            <th scope="row">サイズ</th>
                            <td><?php echo $productDetail[0]['size_type']['size_type_name']; ?></td>
                    </tr>
                    <tr>
                            <th scope="row">在庫</th>
                            <td><?php echo $productDetail[0]['product_stock_isexist']['stock_type']; ?></td>
                    </tr>
                </tbody>
            </table>        
            
            <div class="cart-button"><a href="<?php echo $this->html->url(array('controller'=>'ShoppingCart', 'action'=>'cartAdd', $orderId, $productId)); ?>">カートへ追加</a></div>
            
        </div>   
        
        <div class="product-description">
    
            <h2>商品説明</h2>       
            <?php echo $productDetail[0]['products']['main_comment']; ?>
            
        </div>    
        
    </div>
 
</div>
   
<div class="relation-product">

    <div class="relation-product-slider">
        <h2>関連商品</h2>
        
        <ul class="bxslider">
            <li><a href="<?php echo $this->html->url(array('controller'=>'ProductDetail', 'action'=>'productDetail', 0)); ?>"><?php echo $this->Html->image( 'Nature/1.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/2.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/3.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/4.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/5.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/6.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/7.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/8.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/9.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/10.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/11.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
            <li><a href="#"><?php echo $this->Html->image( 'Nature/12.jpg', array('width' => '150', 'height' => '170')); ?></a></li>
        </ul>   
        
    </div>    

</div>

    