 <div class="favorite">
    <h2>お気に入り</h2>
    <ul class="clearfix">
        <?php $i = 1; ?>
        <?php foreach ($favoriteProducts as $favoriteProduct): ?>       
        <li>
            <a href="#">                    
                <?php $i = $favoriteProduct['products']['product_id']; ?>
                <?php $image_path = "Nature/$i.jpg"; ?>
                <?php echo $this->Html->image( $image_path, array('width' => '90', 'height' => '105')); ?>
                <p><?php echo $favoriteProduct['products']['name']; ?></p>
                <p><?php echo $favoriteProduct['products']['price']; ?></p>
            </a>
        </li>  
        <?php endforeach; ?>
    </ul>

    <div class="paginator">  
        <?php
        echo $this->Paginator->prev('前へ');
        echo $this->Paginator->numbers();
        echo $this->Paginator->next('次へ');
        ?>
    </div>

</div>
