$(function() {
     $('#add-btn').click(function() {
         $('#CustomerAddForm').submit();
     });
 });

/*
$(function(){    
    
    validate();

    if (!valid()) {
      return false;
    } 
});

// 会員登録バリデーション
function validate(){    
    
    $("#login-form").validate({
      rules: {
        'data[name01]': {
          required: true
        }
      },
      messages:{
          name:{
              required:"お名前を入力してください"
          }
      }
    });
    
}

// バリデーションの結果チェック
function valid(){
    if (!$("#login-form").valid()) {
      return false;
    }
}
*/