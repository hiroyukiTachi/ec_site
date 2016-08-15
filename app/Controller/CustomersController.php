<?php
App::uses('AppController', 'Controller');

/*
 * ユーザコントローラークラス
 */
class CustomersController extends AppController {
    
    // 使用モデル
    public $uses = array( 'Customer' , 'Item');     
    
    // コンストラクタ
    public function beforeFilter() {
        parent::beforeFilter();        
        $this->Auth->allow('add', 'logout', 'edit');
    }
    
    /**
     * ログイン
     */
    public function login() { 
        
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {    
                
                $session_email = $this->request->data['Customer']['email'];
                $this->Session->write('session_email', $session_email );
                
                $this->redirect(array( 'controller' => 'tops', 'action' => 'index'));          
            } else {
                $this->Flash->error(__('メールアドレスまたはパスワードが不正です。やり直してください。'));
            }
        }
    }
    
    /**
     * 初期処理
     */
    public function index(){
        // トップページへリダイレクト
        $this->redirect(array( 'controller' => 'tops', 'action' => 'index'));
    }

    /**
     * ログアウト
     */
    public function logout() {
        // セッション情報を破棄
        $this->Session->delete('session_email');
        $this->redirect($this->Auth->logout());
    }

    /**
     * ユーザ情報新規追加
     * @return トップページへリダイレクト
     */
    public function add() {        
        
        $this->set('email', $this->Session->read('session_email'));
        
        if ($this->request->is('post')) {
            
            $this->Customer->create();
            
            if ($this->Customer->save($this->request->data)) {                         
                return $this->redirect(array( 'controller' => 'tops', 'action' => 'index'));
            }
        }         
    }
    
    /**
     * ユーザ情報閲覧
     * @param ユーザID $id
     * @throws NotFoundException
     */
    public function view($id = null) {
        $this->Customer->id = $id;
        
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        
        $this->set('user', $this->Customer->findById($id));
    }

    /**
     * ユーザ情報編集
     * @param ユーザID $id
     * @return トップページへリダイレクト
     * @throws NotFoundException
     */
    public function edit($id = null) {        
        $this->Customer->id = $id;
        
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Customer->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->Customer->findById($id);
            unset($this->request->data['Customer']['password']);
        }
    }

    /**
     * ユーザ情報削除
     * @param ユーザID $id
     * @return トップページへリダイレクト
     * @throws NotFoundException
     */
    public function delete($id = null) {
        $this->request->allowMethod('post');

        $this->Customer->id = $id;
        
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        
        if ($this->Customer->delete()) {
            $this->Flash->success(__('Customer deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        
        $this->Flash->error(__('Customer was not deleted'));
        
        return $this->redirect(array('action' => 'index'));
    }
      
}