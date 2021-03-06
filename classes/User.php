<?php
class User
{
    private $_db,$_data,$_sessionId, $_isLoggedIn;
    
    public function __construct($user=NULL) {
        $this->_db=DB::getInstance();
        $this->_sessionId=  Config::get('session/session_name');
        if(!$user){
            if(Session::exists($this->_sessionId)){
               $user=  Session::get($this->_sessionId);
               if($this->find($user)) {
                   $this->_isLoggedIn=TRUE;
               }else{
                   //process logout
               }
            }else{
                $this->find($user);
            }
        }
    }
    public function create($fields=array()){
        if(!$this->_db->insert('users',$fields)){
            throw new Exception('There was a problem creating a new account. ');
        }
    }
    public function find($user=null){
        if($user){
            $field=(is_numeric($user)) ? 'User_Id':'User_Name';
            $data=  $this->_db->get('pgssc_users',array($field,'=',$user));
            if($data->count())
            {
                $this->_data=$data->first();
                return TRUE;
            }
        }
    }
    public function  login($username,$password){
        $user=  $this->find($username);
        //print_r($this->_data);
        if($user)
        {
			$hashedpassword=DB::getInstance()->getName("pgssc_users",$username,"Password","User_Name");
            if($hashedpassword==Hash::make($password)){
                //echo 'OK!';
                //Session::put($this->_sessionId, $this->data()->User_Id);
                return TRUE;
            }
        }
        
        return FALSE;
    }
    public function logout()
    {
        Session::delete($this->_sessionId);
    }

    public function  data()
    {
        return $this->_data;
    }
    public function isLoggedIn(){
        return $this->_isLoggedIn;
    }
    
}
?>