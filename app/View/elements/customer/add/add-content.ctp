<?php 
$year = $month = $date = array();
$cnt = 1;

for ($i = 2016; $i >= 1926; $i--){
    $year[$cnt] = $i;
    $cnt += 1;
}

for ($i = 1; $i <= 12; $i++){
    $month[$i] = $i;
}

for ($i = 1; $i <= 31; $i++){
    $date[$i] = $i;
}

$prefecture = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県',
                    '茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県',
                    '新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県', '愛知県',
                    '三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県',
                    '鳥取県','島根県','岡山県','広島県', '山口県',
                    '徳島県','愛媛県','福井県','高知県',
                    '福岡県','佐賀県','長崎県', '熊本県', '大分県', '宮城県', '鹿児島県',
                    '沖縄県');
?>

<div class="add-content">   
    
    <div class="add-form">
        
        <h2>会員登録</h2>
        
        <?php echo $this->Form->create('Customer' ,array('method' => 'post', 'url' => 'add')); ?>

            <table>
                
                <tr>
                    <th>
                        お名前
                    </th>
                    <td>                        
                        <?php echo $this->Form->input( 'name01' , array( 'class' => 'add-name', 'type' => 'text', 'label' => false, 'div' => false, 'placeholder' => '性')); ?>                        
                        <?php echo $this->Form->input( 'name02' , array( 'class' => 'add-name margin-top', 'type' => 'text', 'label' => false, 'div' => false, 'placeholder' => '名前')); ?>
                    </td>
                </tr>
                
                <tr>
                    <th>
                        フリガナ
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'kana01' , array( 'class' => 'add-name', 'type' => 'text', 'label' => false, 'div' => false, 'placeholder' => 'セイ')); ?>
                        <?php echo $this->Form->input( 'kana02' , array( 'class' => 'add-name margin-top', 'type' => 'text', 'label' => false, 'div' => false, 'placeholder' => 'メイ')); ?>
                    </td>
                </tr>
                
                <tr>
                    <th>
                        性別
                    </th>
                    <td>
                        <?php $sex = array( 0 => '男性', 1 => '女性'); ?>
                        <?php echo $this->Form->input( 'sex' , array( 'class' => '', 'type' => 'radio', 'options' => $sex, 'legend' => false, 'div' => false)); ?>  
                    </td>
                </tr>
                
                <tr>
                    <th>
                        生年月日
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'birth_year', array( 
                                                        'class' => 'add-year',
                                                        'type' => 'select',
                                                        'options' => $year,                                                        
                                                        'label' => false,                                                        
                                                        'div' => false));
                        ?>年
                        <?php echo $this->Form->input( 'birth_month', array( 
                                                        'class' => 'add-month',
                                                        'type' => 'select',
                                                        'options' => $month,                                                        
                                                        'label' => false,
                                                        'div' => false));
                        ?>月
                        <?php echo $this->Form->input( 'birth_day', array( 
                                                        'class' => 'add-date',
                                                        'type' => 'select',
                                                        'options' => $date,                                                        
                                                        'label' => false,
                                                        'div' => false));
                        ?>日
                    </td>
                </tr>
                
                <tr>
                    <th>
                        郵便番号
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'zip01' , array( 'class' => 'add-postal-code', 'type' => 'text', 'label' => false, 'div' => false, 'placeholder' => '例：2700012')); ?>
                        <a class="addr-search margin-top" href="#">住所検索</a>
                    </td>
                </tr>                
               
                <tr>
                    <th>
                        都道府県
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'pref', array( 
                            'class' => 'add-prefecture',
                            'type' => 'select',                                                                                                                                       
                            'options' => $prefecture,
                            'empty' => '東京都',
                            'label' => false,
                            'div' => false));
                        ?>
                    </td>
                </tr>          
                
                <tr>
                    <th>
                        市区郡
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'addr01' , array( 'class' => 'add-addr', 'type' => 'text' ,'label' => false, 'div' => false, 'placeholder' => '例：渋谷区')); ?>
                    </td>
                </tr>          
                
                <tr>
                    <th>
                        町名・番地
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'addr02' , array( 'class' => 'add-addr', 'type' => 'text' ,'label' => false, 'div' => false, 'placeholder' => '例：神南１－６－３')); ?>
                    </td>
                </tr>          
                
                <tr>
                    <th>
                        建物名
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'addr03' , array( 'class' => 'add-addr', 'type' => 'text' ,'label' => false, 'div' => false, 'placeholder' => '例：神南フラッグ３階')); ?>
                    </td>
                </tr>          
                
                <tr>
                    <th>
                        電話番号
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'tel01' , array( 'class' => 'add-phone', 'type' => 'tel', 'label' => false, 'div' => false, 'placeholder' => '例：08038742837')); ?>
                    </td>
                </tr>          
                
                <tr>
                    <th>
                        メールアドレス
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'email' , array( 'class' => 'add-mail', 'type' => 'mail', 'label' => false, 'div' => false, 'placeholder' => '例：hiroyuki@yahoo.co.jp')); ?>
                        <?php echo $this->Form->input( 'email' , array( 'class' => 'add-mail-confirm margin-top', 'type' => 'mail', 'label' => false, 'div' => false, 'placeholder' => '※確認のため再度入力ください', 'error' => false)); ?>
                    </td>
                </tr>          
                
                <tr>
                    <th>
                        パスワード
                    </th>
                    <td>
                        <?php echo $this->Form->input( 'password' , array( 'class' => 'add-password', 'type' => 'password', 'label' => false, 'div' => false, 'placeholder' => '例：mogumogu@_[\/')); ?>
                        <?php echo $this->Form->input( 'password' , array( 'class' => 'add-password-confirm margin-top', 'type' => 'password', 'label' => false, 'div' => false, 'placeholder' => '※確認のため再度入力ください', 'error' => false)); ?>
                    </td>
                </tr>          
                
                <tr>
                    <th>
                        メールマガジン
                    </th>
                    <td>
                        <?php $mailMagazine = array( 0 => '受け取る', 1 => '受け取らない'); ?>
                        <?php echo $this->Form->input( 'mail-magazine' , array( 'class' => '', 'type' => 'radio', 'options' => $mailMagazine, 'legend' => false, 'div' => false)); ?>  
                    </td>
                </tr>          
                
            </table>
            
            <div class="add-form-botton">
                <a href="#" id="add-btn">会員登録</a>
                <a href="" onClick="document.form.reset()" class="margin-left">クリア</a>
            </div>                        
            
        </form>        
        
    </div>            
    
</div>