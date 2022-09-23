<?php
class Conversation{
 public $id;
 public $customer_id;
 public $date;
 public $conversation;


 private $customer;

    /**
     * @param $id
     * @param $customer_id
     * @param $date
     * @param $conversation
     */
    public function __construct( $conversation, $customer_id, $date=null , $id=null)
    {
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->date = $date;
        $this->conversation = $conversation;
    }

    public static function getConversation($customer_id){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("SELECT * FROM contact_information WHERE customer_id=?");
        $stm->execute([$customer_id]);
        $c=$stm->fetch(PDO::FETCH_ASSOC);
        $conversation=new Conversation($c['conversation'],$customer_id ,$c['date']);
        return $conversation;

    }

    public static function getConversations(){
    $pdo=DB::getPDO();
    $stm=$pdo->prepare("SELECT * FROM contact_information");
    $stm->execute();
    $conversation=[];
    foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $c){
        $conversation[]=new Conversation($c['customer_id'],$c['date'],$c['conversation'],$c['id'],);
    }
    return $conversation;
}

    public function createCustomerConversation()
    {
        $pdo = DB::getPDO();
        $stm = $pdo->prepare("INSERT INTO `contact_information`(`conversation`, customer_id) VALUES (?, ?)");
        $stm->execute([$_POST['conversation'], $this->customer_id]);

    }
        public function istrinti(){
            $pdo=DB::getPDO();
            $stm=$pdo->prepare("DELETE FROM contact_information WHERE id=?");
            $stm->execute([ $this->id ]);
        }



    public function getCustomers() {
        if ($this->customer==null){
            $this->customer=Customer::getCustomers();
        }

        return $this->customer;
    }
}
