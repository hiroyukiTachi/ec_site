<div class="best">
    <h2>おすすめ商品情報</h2>

    <ul class="clearfix">
        <?php foreach ($bestProducts as $bestProduct): ?>       
        <li>
            <?php $i = $bestProduct['products']['product_id']; ?>
            <?php $imagePath = "Nature/$i.jpg"; ?>
            <a href="/Main/detail/detail/<?php echo $i ?>">
                <?php echo $this->Html->image($imagePath, array('width' => '90', 'height' => '105')); ?>
                <p><?php echo $bestProduct['products']['name']; ?></p>
                <p><?php echo $bestProduct['products']['price']; ?></p>
            </a>
        </li>  
        <?php endforeach; ?>
    </ul>

</div>
    
