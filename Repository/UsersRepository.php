<?php namespace Repository;

    use repository\IRepository as IRepository;
    use model\User as User;

    class UsersRepository implements IRepository
    {
        private $usersList = array();

        public function Add($newUser){
            $this->RetrieveData();
            array_push($this->usersList,$newUser);
            $this->SaveData();
        }


        public function GetAll(){
            $this->RetrieveData();
            return $this->usersList;
        }


        public function Delete($dni){
            $this->RetrieveData();
            $newList = array();
            foreach($this->usersList as $value){
                if($value->getDni() != $dni){
                    array_push($newList,$value);
                }
            }
            $this->usersList = $newList;
            $this->SaveData();
        }

        private function SaveData() {
            $arrayToEncode = array();

            foreach($this->usersList as $user)
            {
                $valuesArray["name"] = $user->getFirstName();
                $valuesArray["surname"] = $user->getSurName();
                $valuesArray["email"] = $user->getEmail();
                $valuesArray["dni"] = $user->getDni();
                $valuesArray["pass"] = $user->getPass();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            $jsonPath = $this->GetJsonFilePath();
            
            file_put_contents($jsonPath, $jsonContent);
        }

        private function RetrieveData() {
            
            $this->usersList = array();
            $jsonPath = $this->GetJsonFilePath();
                
            $jsonContent = file_get_contents($jsonPath);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {

                $user = new User($valuesArray["name"], $valuesArray["dni"], $valuesArray["birthdate"], $valuesArray["email"], $valuesArray["pass"]);

                array_push($this->usersList, $user);

            }

        }


        public function getByEmail($email) {
            $this->RetrieveData();

            foreach ($this->usersList as $key => $user) {
                if($user->getEmail() == $email) {
                    return $user;
                }
            }
        }

        function GetJsonFilePath(){

            $initialPath = "data/users.json";
            
            if(file_exists($initialPath)){
                $jsonFilePath = $initialPath;
            }else{
                $jsonFilePath = "../".$initialPath;
            }
    
            return $jsonFilePath;
        }

    }
?>