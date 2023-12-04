<?php

class Customer {
    private $user_name;
    private $postname;
    private $sex;
    private $local_address;
    private $phone_number;
    private $mail_address;
    private $solde;

    public function __construct($user_name, $postname, $sex, $local_address, $phone_number, $mail_address, $solde) {
        $this->user_name = $user_name;
        $this->postname = $postname;
        $this->sex = $sex;
        $this->local_address = $local_address;
        $this->phone_number = $phone_number;
        $this->mail_address = $mail_address;
        $this->solde = $solde;
    }

    public function create_an_account() {
        global $db ;
            
        $query = 'INSERT INTO customer(user_name, postname, sex, local_address, phone_number, mail_address, solde) VALUES (:user_name, :postname, :sex, :local_address, :phone_number, :mail_address, :solde)';
        $prepareQuery = $db->prepare($query);
        $execution = $prepareQuery->execute([
            ':user_name' => $this->user_name,
            ':postname' => $this->postname,
            ':sex' => $this->sex,
            ':local_address' => $this->local_address,
            ':phone_number' => $this->phone_number,
            ':mail_address' => $this->mail_address,
            ':solde' => $this->solde
        ]);
        return $execution ? true : false ;
    }

    public function getCustomerId($CUSTOMER) {
        global $db;

        $query = 'SELECT * FROM customer WHERE phone_number=:phone_number';
        $prepareQuery = $db->prepare($query);
        $execution = $prepareQuery->execute([
            ':phone_number'=>$CUSTOMER->getPhone_number()
        ]);

        if(!empty($execution)) {
            $data = $prepareQuery->fetch();

            return $data['id'];
        }
    }

    static function getCustomers(){
        global $db;

        $query = 'SELECT * FROM customer WHERE 1';
        $prepareQuery = $db->prepare($query);
        $execution = $prepareQuery->execute([]);

        $customers = [];
        if($execution) {
            while($data = $prepareQuery->fetch()) {
                $customer = new Customer($data['user_name'], $data['postname'], $data['sex'], $data['local_address'], $data['phone_number'], $data['mail_address'], $data['solde']);
                array_push($customers, $customer);
            } return $customers;
        } else return[];
    }

    static function getOldSolde($ID_USER) {
        global $db;
        global $old_solde ;

        $query = 'SELECT solde FROM customer WHERE id=:id' ;
        $prepareQuery = $db->prepare($query);
        $execution = $prepareQuery->execute([
            ':id' => $ID_USER
        ]);

        if($execution) {
            $data= $prepareQuery->fetch() ;
            return $data['solde'];
        }
    }
    
    static function update_solde($ID_USER, $new_solde) {
        global $db;

        $query = 'UPDATE customer SET solde=:new_solde WHERE id=:id';
        $prepareQuery = $db->prepare($query);
        $execution = $prepareQuery->execute([
            ':id' => $ID_USER,
            ':new_solde' => $new_solde
        ]);

        return $execution ? true : false;
    }

    static function delete_customer($ID_USER) {
        global $db ;

        $query = 'DELETE FROM customer WHERE id=:id';
        $prepareQuery = $db->prepare($query);
        $execution = $prepareQuery->execute([
            ':id'=> $ID_USER
        ]);

        return $execution ? true:false;
    }

    static function customer_search($ID_USER) {
        global $db;

        $query = 'SELECT * FROM customer WHERE id=:id';
        $prepareQuery = $db->prepare($query);
        $execution = $prepareQuery->execute([
            ':id'=>$ID_USER
        ]);

        if($execution) {
            if($data = $prepareQuery->fetch()) {
                $customer = new Customer($data['user_name'], $data['postname'], $data['sex'], $data['local_address'], $data['phone_number'], $data['mail_address'], $data['solde']);
                return $customer;
            }
            else return "incorrect_id";
        }
    }

    /**
     * Get the value of user_name
     */ 
    public function getUser_name()
    {
        return $this->user_name;
    }

    /**
     * Set the value of user_name
     *
     * @return  self
     */ 
    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Get the value of postname
     */ 
    public function getPostname()
    {
        return $this->postname;
    }

    /**
     * Set the value of postname
     *
     * @return  self
     */ 
    public function setPostname($postname)
    {
        $this->postname = $postname;

        return $this;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get the value of local_address
     */ 
    public function getLocal_address()
    {
        return $this->local_address;
    }

    /**
     * Set the value of local_address
     *
     * @return  self
     */ 
    public function setLocal_address($local_address)
    {
        $this->local_address = $local_address;

        return $this;
    }

    /**
     * Get the value of phone_number
     */ 
    public function getPhone_number()
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     *
     * @return  self
     */ 
    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of mail_address
     */ 
    public function getMail_address()
    {
        return $this->mail_address;
    }

    /**
     * Set the value of mail_address
     *
     * @return  self
     */ 
    public function setMail_address($mail_address)
    {
        $this->mail_address = $mail_address;

        return $this;
    }
}

?>