<?php
    require_once("../autoload.php");
    use model\User as User;


    class UserRepository{
        private $userList;

        public function add(User $user){
            $this->retrieveData();
            array_push($this->userList,$user);
            $this->saveData();
        }

        public function getAll(){
            $this->retrieveData();
            return $this->userList;
        }

        private function saveData(){
            $arrayToEncode = array();
            foreach($this->userList as $user){
                $valuesArray["firstName"] = $user->getFirstName();
                $valuesArray["lastName"] = $user->getLastName();
                $valuesArray["birthday"] = $user->getBirthday();
                $valuesArray["dni"] = $user->getDni();
                $valuesArray["address"] = $user->getAddress();
                $valuesArray["phone"] = $user->getPhone();
                $valuesArray["email"] = $user->getEmail();
                array_push($arrayToEncode,$valuesArray);
            }
            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            file_get_contents('data\users.json');
        }

        private function retrieveData(){
            $this->userList = array();
            if(file_exists('data\users.json')){
                $jsonContent = file_get_contents('data\users.json');
                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent,true) : array();
                foreach($arrayToDecode as $valuesArray){
                    $user = new User($valuesArray["firstName"],$valuesArray["lastName"],
                                        $valuesArray["birthday"],$valuesArray["dni"],$valuesArray["address"],
                                        $valuesArray["phone"],$valuesArray["email"]);
                    array_push($this->userList,$user);
                }
            }
        }

    }

?>