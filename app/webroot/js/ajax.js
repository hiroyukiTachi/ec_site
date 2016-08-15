// メニュークリック時イベント
$(function() {
     $('select').change(function() {        
        // var categoryId = $('li.menu__mega').index(this);
        categoryId = 0;
        getCategoryItem(categoryId);       
     });
 });
 
// カラーセレクトボックス変更時イベント
 $(function(){    
    $('#select-color').change(function(){
        var selectedColor = $('#select-color option:selected').css('background-color');
        setSelectedColor(selectedColor);
    });     
 });

 // セレクトボックスで選択中のカラーを先頭のoptionに設定する
 function setSelectedColor(selectedColor){
     $('#select-color').css('background-color', selectedColor);
 }
 
 // セレクトボックスにカラーを設定する
 function setSelectColor(){

    $(function() {        
        var colorList = {
             black: '#000000',
             gray : '#808080',
             silver : '#C0C0C0',
             white : '#FFFFFF',             
             blue : '#0000FF',
             navy : '#000080',
             teal : '#008080',
             green : '#008000',
             lime : '#00FF00',
             aqua: '#00FFFF',
             yellow: '#FFFF00',
             red : '#FF0000',
             fuchsia : '#FF00FF',          
             olive : '#808000',
             purple : '#800080',
             maroon : '#800000'            
         };

         var select = $('#select-color');
         var option;

         $.each(colorList, function (value, backgroundColor) {
             option = $('<option>')
                 .val(value)
                 .css('background-color', backgroundColor);

             select.append(option);
         });        
    });
} 

setSelectColor();
 
 // 商品カテゴリを取得する
 function getCategoryItem(categoryId){
    // Ajax通信でサーバから該当する商品情報を取得する
    $.ajax({
       url: "/Main/ProductCategory/getProductCategoryAjax",
       type: "post",
       dataType: "json",
       data: { 'category_id' : categoryId },
       success : function(response){
           //　通信成功
           console.log(response);
           
           var ul = $('.best ul'); 
           
           ul.empty();
           
           // 商品カテゴリを追加する
           $.each(response,function(i){

                var productDetailId = response[i].products.product_id;
                var li = $('<li>');
                var a = $('<a>').attr('href', "../../ProductDetail/productDetail/" + productDetailId);
                var img = $('<img>').attr('src', '/Main/app/webroot/img/Nature/' + (i+1) + '.jpg').attr('width', 165).attr('height', 220); 
                var pName = $('<p>').text(response[i].products.name);
                var pPrice = $('<p>').text(response[i].products.price);

                li.append(a.append(img).append(pName).append(pPrice));  
                
                li.hide().appendTo(ul).delay(100 * i).fadeIn(1500);
            });            
            
       },
        error : function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);    // XMLHttpRequestオブジェクト
            console.log(textStatus);        // status は、リクエスト結果を表す文字列
            console.log(errorThrown);       // errorThrown は、例外オブジェクト
        }
   });
 }

$(function() {
    $('.color .plus').click(function(){
        $('.color ul').toggle('blind', '', 500);                 
        $(this).attr('src', '../img/minus.gif');
    });
});

$(function() {
    $('.size .plus').click(function(){
        $('.size ul').toggle('blind', '', 500);                 
        $(this).attr('src', '../img/minus.gif');
    });
});

$(function() {
    $('.price .plus').click(function(){
        $('.price ul').toggle('blind', '', 500);                 
        $(this).attr('src', '../img/minus.gif');
    });
});