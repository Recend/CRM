<?php

class Admin
{
    protected $id;
    protected $username;
    protected $password;

    /**
     * @param $id
     * @param $username
     * @param $password
     */
    public function __construct($id, $username, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }


    public function getNavigation(){
        return[
            ['link'=>'companies.php', 'name'=>'Kompanijos'],
            ['link'=>'create.php', 'name'=>'Pridėti klienta'],
            ['link'=>'createcomp.php', 'name'=>'Pridėti kompanija'],
        ];
    }


    public static function getUser($id){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("SELECT * FROM users WHERE id=?");
        $stm->execute([$id]);
        $u=$stm->fetch(PDO::FETCH_ASSOC);
        return self::makeUser($u);
}
    public function canEdit(){
        return false;
    }

    public static function makeUser($u){
        if ($u['type']=='admin'){
            $user=new Admin($u['username'],$u['password'],$u['id']);
        }
        if ($u['type']=='superadmin'){
            $user=new Superadmin($u['username'],$u['password'],$u['id']);
        }

        return $user;
    }

    public static function login($username, $password){
        $pdo = DB::getPDO();
        $stm = $pdo->prepare("SELECT * FROM users WHERE username=?");
        $stm->execute([$username]);
        $u = $stm->fetch(PDO::FETCH_ASSOC);
        if(!$u){
            return null;
        }
        if(password_verify($_POST['password'], $u['password'] )){
            $_SESSION['uid']=$u['id'];
            return self::makeUser($u);
        }
        return null;
    }

    public function __toString()
    {
        return "$this->id $this->username";
    }

    public static function logout(){
        session_destroy();
        unset($_SESSION);
    }

    public static function auth(){
        if (!isset($_SESSION['uid'])){
            header('location: login.php');
            die();
        }
        $uid=$_SESSION['uid'];

        $user=Admin::getUser($uid);
        return $user;
    }

}




