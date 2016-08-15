// カタログスライドショー
function showCatalogSlide(){
    $(function(){
        $('.catalog-slide').bxSlider({
            auto: true,
            speed: 1000,
            pause: 3000,
            mode: 'fade',
            controls: false
        });
    });    
}

// 商品詳細画像サムネイル
function thumbnailSlide(){
    $(function() {    
        $('.bxslider1').bxSlider({  
            pagerCustom: '#bx-pager',
            mode:'fade'
        });
    });
}

// 関連商品スライド
function relationProductSlide(){
    $(function(){
        $('.bxslider').bxSlider({        
            auto: true,
            pause:3500,
            speed:1000,
            minSlides: 3,
            maxSlides: 5,
            slideWidth: 160,
            slideMargin: 10,
            pager: false 
        });
    });
}


showCatalogSlide();
thumbnailSlide();
relationProductSlide();