<?php
class Company
{
    public $id;
    public $name;
    public $adress;
    public $vat_code;
    public $company_name;
    public $phone;
    public $email;

    private $customer;

    /**
     * @param $id
     * @param $name
     * @param $adress
     * @param $vat_code
     * @param $company_name
     * @param $phone
     * @param $email
     */
    public function __construct($name, $adress, $vat_code, $company_name, $phone, $email,$id=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->adress = $adress;
        $this->vat_code = $vat_code;
        $this->company_name = $company_name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function prideti()
    {
        $pdo = DB::getPDO();
        $stm = $pdo->prepare("INSERT INTO `companys` (`name`, `adress`, `vat_code`, `company_name`, `phone`, `email`) VALUES (?,?,?,?,?,?)");
        $stm->execute([$this->name, $this->adress, $this->vat_code, $this->company_name, $this->phone, $this->email]);
         $pdo->lastInsertId();

    }

    public function atnaujinti (){
        $pdo = DB::getPDO();
        $stm = $pdo->prepare("UPDATE companys SET name=?, adress=?, vat_code=?, company_name=?, phone=?, email=? WHERE id=?");
        $stm->execute([$this->name, $this->adress, $this->vat_code, $this->company_name, $this->phone, $this->email, $this->id]);
    }

    public function istrinti(){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("DELETE FROM companys WHERE id=?");
        $stm->execute([ $this->id ]);
    }


    public static function getCompany($id){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("SELECT * FROM companys WHERE id=?");
        $stm->execute([$id]);
        $c=$stm->fetch(PDO::FETCH_ASSOC);
        $company=new Company($c['name'],$c['adress'],$c['vat_code'],$c['company_name'],$c['phone'],$c['email'],$id);
        return $company;


    }   public static function getCompanies(){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("SELECT * FROM companys");
        $stm->execute();
        $company=[];
        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $c){
        $company[]=new Company($c['name'],$c['adress'],$c['vat_code'],$c['company_name'],$c['phone'],$c['email'], $c['id']);
    }
    return $company;
}

    public function getCustomers() {
        if ($this->customer==null){
            $this->customer=Customer::getCustomers();
        }

        return $this->customer;
    }




}