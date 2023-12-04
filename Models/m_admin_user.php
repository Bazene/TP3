<?php

class Admin_user {
    private $user_name;
    private $postname;
    private $sex;
    private $phone_number;
    private $mail_address;
    private $password_key;

    public function __construct($user_name, $postname, $sex, $phone_number, $mail_address, $password_key) {
        $this->user_name = $user_name;
        $this->postname = $postname;
        $this->sex = $sex;
        $this->phone_number = $phone_number;
        $this->mail_address = $mail_address;
        $this->password_key = $password_key;
    }
    

    public function create_account() {
        global $db;

        $query = 'INSERT INTO admin_user(user_name, postname, sex, phone_number, mail_address, password_key) VALUES (:user_name, :postname, :sex, :phone_number, :mail_address, :password_key)';
        $preparequery = $db->prepare($query);
        $execution = $preparequery->execute([
            ':user_name'=> $this->user_name,
            ':postname' => $this->postname,
            ':sex' => $this->sex,
            ':phone_number' => $this->phone_number,
            ':mail_address' => $this->mail_address,
            'password_key' => $this->password_key
        ]);

        return $execution ? true : false;
    }

    static function update_password($MAIL_ADDRESS, $NEW_PASSWORD_KEY) {
        global $db;

        $query = 'UPDATE admin_user SET password_key = :password_key WHERE mail_address = :mail_address';
        $preparequery = $db->prepare($query);
        $execution = $preparequery->execute([
            ':mail_address' => $MAIL_ADDRESS,
            ':password_key' => $NEW_PASSWORD_KEY
        ]);

        // if($execution) {
        //     return (empty($preparequery->fetch())) ? true : false;
        // }
        return $execution ? true : false;
    }

    static function authentification($USER_NAME, $PASSWORD_KEY) {
        global $db;

        $query = 'SELECT * FROM admin_user WHERE user_name = :user_name AND password_key = :password_key';
        $preparequery = $db->prepare($query);
        $execution = $preparequery->execute([
            ':user_name' => $USER_NAME,
            ':password_key' => $PASSWORD_KEY
        ]);

        if($execution) {
            return $preparequery->fetch() ? true : false;
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

    /**
     * Get the value of password_key
     */ 
    public function getPassword_key()
    {
        return $this->password_key;
    }

    /**
     * Set the value of password_key
     *
     * @return  self
     */ 
    public function setPassword_key($password_key)
    {
        $this->password_key = $password_key;

        return $this;
    }
}

?>