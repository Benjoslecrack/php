<?php

class UserEntity{

    protected int $id_user;
    protected string $email_user;
    protected string $pwd_user;

    public function __construct(int $id_user, string $email_user, string $pwd_user)
    {
        $this->id_user = $id_user;
        $this->email_user = $email_user;
        $this->pwd_user = $pwd_user;
    }


    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */ 
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */ 
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of pwd_user
     */ 
    public function getPwd_user()
    {
        return $this->pwd_user;
    }

    /**
     * Set the value of pwd_user
     *
     * @return  self
     */ 
    public function setPwd_user($pwd_user)
    {
        $this->pwd_user = $pwd_user;

        return $this;
    }
}