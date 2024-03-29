<?php
    namespace Model;
    class User{
        private $firstName;
        private $surName;
        private $dni;
        private $email;
        private $pass;

        public function __construct($firstName,$surName,$dni,$email,$pass){
            $this->firstName = $firstName;
            $this->surName = $surName;
            $this->dni = $dni;
            $this->email = $email;
            $this->pass = $pass;
        }

        public function getFirstName()
        {
                return $this->firstName;
        }


        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;

                return $this;
        }

        public function getSurName()
        {
                return $this->surName;
        }


        public function setSurName($surName)
        {
                $this->surName = $surName;

                return $this;
        }

        public function getDni()
        {
                return $this->dni;
        }

  
        public function setDni($dni)
        {
                $this->dni = $dni;

                return $this;
        }


        public function getEmail()
        {
                return $this->email;
        }

 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }


        public function getPass()
        {
                return $this->pass;
        }


        public function setPass($pass)
        {
                $this->pass = $pass;

                return $this;
        }
    }

?>