<div class="new-coordinate">
    <h2>新着コーディネート</h2>
    <ul class="clearfix">
        <?php $i = 1; ?>
        <?php foreach ($items as $item): ?>       
        <li>
            <p><?php echo $item['Item']['id']; ?></p>
            <a href="#">                    
                <?php $image_path = "Nature/$i.jpg"; ?>
                <?php echo $this->Html->image( $image_path, array('width' => '90', 'height' => '105')); ?>
                <p>説明 <?php echo $item['Item']['name']; ?></p>
                <p>税込み <?php echo $item['Item']['price']; ?></p>
            </a>
            <?php $i += 1; ?>
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
        
