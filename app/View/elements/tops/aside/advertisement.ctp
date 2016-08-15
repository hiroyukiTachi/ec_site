 <div class="advertisement">                        
    <ul>
        <?php for ($i = 1; $i <= 8; $i++) { ?> 
        <li>                                
            <a href="#">                                    
                <?php $image_path = "Advertisement/$i.jpg"; ?>     
                <?php echo $this->Html->image( $image_path, array('width' => '175', 'height' => '115')); ?>                                    
            </a>                                
        </li>      
        <?php } ?>
    </ul>

</div>      
