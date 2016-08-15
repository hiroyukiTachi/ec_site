<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth'); 

/**
 * ユーザモデル
 */
class Customer extends AppModel {

    public $validate = array(
        'name01' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            )
        ),
        'name02' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            )
        ),
        'kana01' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            )
        ),
        'kana02' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            )
        ),
        'sex' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            )
        ),
        'birth_year' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A birth_year is required'
            )
        ),
        'birth_month' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A birth_month is required'
            )
        ),
        'birth_day' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A birth_date is required'
            )
        ),
        'zip01' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            )
        ),
        'addr01' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            )
        ),
        'addr02' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            )
        ),
        'tel01' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => '必須項目です'
            ),
            'required02' => array(
                'rule' => 'isUnique',
                'message' => '登録済みの電話番号です'
            )
        ),        
        'email' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'メールアドレスが未入力です'
            ),
            'required02' => array(
                'rule' => 'isUnique',
                'message' => '登録済みのメールアドレスです'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'パスワードが未入力です'
            ),
            'required02' => array(
                'rule' => 'isUnique',
                'message' => '登録済みのパスワードです'
            )
        ),
    );
    
// データベースからログインユーザのcustomer_idを取得する
    public function getCustomerId($email){
        $sql = "SELECT ec.customers.customer_id FROM ec.customers WHERE ec.customers.email = ?";
 
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,array($email), true);
        
        $customerId = $result[0]['customers']['customer_id'];     
        
        return $customerId; 
    }
    
    // パスワードのハッシュ化
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}








