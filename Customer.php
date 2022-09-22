<?php
class Customer{
    public $id;
    public $name;
    public $surname;
    public $phone;
    public $email;
    public $adress;
    public $position;
    public $company_id;


    private $company;
    private $conversation;

    /**
     * @param $id
     * @param $name
     * @param $surname
     * @param $phone
     * @param $email
     * @param $adress
     * @param $position
     * @param $company_id
     */
    public function __construct( $name, $surname, $phone, $email, $adress, $position, $company_id, $id=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->email = $email;
        $this->adress = $adress;
        $this->position = $position;
        $this->company_id = $company_id;
    }



    public static function getCustomers(){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("SELECT * FROM customers");
        $stm->execute([]);
        $customers=[];
        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $c){
            $customers[]=new Customer($c['name'],$c['surname'],$c['phone'],$c['email'], $c['adress'], $c['position'], $c['company_id'],$c['id']);
        }
        return $customers;
    }



    public function  getCompany(){
            if($this->company==null){
                $this->company=Company::getCompany($this->company_id);
            }
            return $this->company;
    }

   public function  getConversations(){
            if($this->conversation==null){
                $this->conversation=Conversation::getConversation($this->id);
            }
            return $this->conversation;
    }



}