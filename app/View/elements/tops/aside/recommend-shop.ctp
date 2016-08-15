<div class="recommend-shop">                        
     <h2>おすすめショップ</h2>
     <ul>
         <?php for ($i = 1; $i <= 5; $i++) { ?> 
         <li>                                
             <a href="#">                                    
                 <?php $image_path = "Brand/$i.jpg"; ?>     
                 <?php echo $this->Html->image( $image_path, array('width' => '175', 'height' => '105')); ?>                                    
             </a>                                
         </li>      
         <?php } ?>
     </ul>

 </div>
