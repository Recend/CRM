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
    public function __construct( $customer_id, $date, $conversation, $id=null)
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
        $conversation=new Conversation($customer_id ,$c['date'],$c['conversation']);

        return $conversation;

    }

    public function getCustomers() {
        if ($this->customer==null){
            $this->customer=Customer::getCustomers();
        }

        return $this->customer;
    }
}