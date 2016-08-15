<div id="nav"  class="clear">                                             

        <ul class="main-nav clearfix">
            <li><?php echo $this->Html->link( 'ショップ一覧', array('controller' => 'Shop', 'action' => 'shopList')); ?></li>
            <li><?php echo $this->Html->link( 'カテゴリ一覧', array('controller' => 'ProductCategory', 'action' => 'categoryList')); ?></li>
            <li><?php echo $this->Html->link( '新着一覧', array('controller' => 'NewCoordinate', 'action' => 'coordinate', 20)); ?></li>
            <li><?php echo $this->Html->link( 'ランキング', array('controller' => 'Ranking', 'action' => 'ranking', 20)); ?></li>
        </ul>                
        
        <form class="serach-area">                    
            <input type="text">
            <input type="submit" value="検索">                    
            <?php echo $this->Html->link( '詳細検索', array('controller' => 'DetailSearch', 'action' => 'detailSearch'), array('class' => 'detail-serach')); ?> 
        </form>                             

</div>


