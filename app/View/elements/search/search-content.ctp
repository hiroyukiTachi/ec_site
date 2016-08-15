<div class="search-content">
    
    <div class="search-form">
       
        <h2>詳細検索</h2>
        
        <?php echo $this->Form->create('DetailSearch', array('method' => 'get', 'url' => 'searchResult')); ?>
        <?php echo $this->Session->flash(); ?>
        
            <table>                
                <tr>
                    <th>
                        タイプ
                    </th>
                    <td>
                        <select name="sex-type">
                            <option>指定なし</option>
                            <option value="0">レディース</option>
                            <option value="1">メンズ</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>
                        商品タイプ
                    </th>
                    <td>
                         <select name="product-type">
                            <option>全ての商品</option>
                            <option value="0">通常商品</option>
                            <option value="1">セール商品</option>
                            <option value="2">予約商品</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>
                        取り扱いタイプ
                    </th>
                    <td>
                       <select name="use-type">
                            <option>全ての商品</option>
                            <option value="0">通常商品</option>
                            <option value="1">セール商品</option>
                            <option value="2">予約商品</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>
                        ショップ
                    </th>
                    <td>
                        <select name="shop-type">
                            <option>指定なし</option>
                            <option value="0">JOURNAL STANDARD</option>
                            <option value="1">journal standard Lessage</option>
                            <option value="2">journal standard luxe</option>
                            <option value="3">journal standard relume</option>
                            <option value="4">Spick and Span</option>
                            <option value="5">FRA MeWork</option>
                            <option value="6">Spick and Span Noble</option>
                            <option value="7">IENA</option>
                            <option value="8">SLOBE IENA</option>
                            <option value="9">EDIFICE</option>
                            <option value="10">417 EDIFICE</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>カテゴリ</th>
                    <td>
                        <select name="category-type" class="parent-category">
                            <option>指定なし</option>
                            <option value="0">CATEGORY0</option>
                            <option value="1">CATEGORY1</option>
                            <option value="2">CATEGORY2</option>
                            <option value="3">CATEGORY3</option>
                            <option value="4">CATEGORY4</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>
                        カラー
                    </th>
                    <td>
                        <select name="color-type">
                            <option>指定なし</option>
                            <option value="0">ホワイト</option>
                            <option value="1">ブラック</option>
                            <option value="2">グレー</option>
                            <option value="3">ブラウン</option>
                            <option value="4">ベージュ</option>
                            <option value="5">グリーン</option>
                            <option value="6">ブルー</option>
                            <option value="7">パープル</option>
                            <option value="8">イエロー</option>
                            <option value="9">ピンク</option>
                            <option value="10">レッド</option>
                            <option value="11">オレンジ</option>
                            <option value="12">シルバー</option>
                            <option value="13">ゴールド</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>
                        サイズ
                    </th>
                    <td>
                        <select name="size-type">
                            <option>指定なし</option>
                            <option value="0">～XS</option>
                            <option value="1">S</option>
                            <option value="2">M</option>
                            <option value="3">L</option>
                            <option value="4">XL～</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>
                        在庫
                    </th>
                    <td>
                        <?php $stock = array( 0 => 'すべて表示', 1 => '在庫あり表示'); ?>
                        <?php echo $this->Form->input( 'stock' , array( 'class' => '', 'name' => 'stock-type' , 'type' => 'radio', 'options' => $stock, 'legend' => false, 'div' => false)); ?>
                    </td>
                </tr>

            </table>
        
            <div class="search-form-botton">
                <a href="#" id="search-btn">検索</a>
                <a href="" onClick="document.form.reset()" class="margin-left">クリア</a>
            </div>
            
        </form>
           
    </div>
    
</div>
