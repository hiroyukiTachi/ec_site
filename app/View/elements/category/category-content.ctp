<div class="category-content">
    
    <div class="category-list">
    
        <h2>商品カテゴリ</h2>

        <div class="select-search-conditions">

            <table>
                <th>
                    表示順：                                
                    <td>
                        <select>
                            <option value="1">価格の安い順</option>
                            <option value="2">価格の高い順</option>
                        </select>
                    </td>
                </th>
                
                <th>
                    在庫：                                
                    <td>
                        <select>
                            <option value="1">全て表示</option>
                            <option value="2">在庫あり</option>                            
                        </select>
                    </td>
                </th>
                
                <th>
                    カラー：                                
                    <td>                          
                        <select id="select-color">

                        </select>
                    </td>
                </th>               
                
            </table>
            
        </div>
        
        <div class="best">
            
            <ul>
                <?php $i = 1; ?>
                <?php foreach ($productCategories as $productCategory): ?>       
                <li>
                    <?php $productCategoryId = $productCategory['products']['product_id']; ?>
                    <a href="<?php echo $this->html->url(array('controller'=>'ProductDetail', 'action'=>'productDetail', $productCategoryId)); ?>">                    
                        <?php $image_path = "Nature/$i.jpg"; ?>
                        <?php echo $this->Html->image( $image_path, array('width' => '165', 'height' => '220')); ?>
                        <p>商品名：<?php echo $productCategory['products']['name']; ?></p>
                        <p>税込み：<?php echo $productCategory['products']['price']; ?></p>
                    </a>
                    <?php $i += 1; ?>
                </li>  
                <?php endforeach; ?>
            </ul>
            
        </div>
        
    </div>
    
</div>

