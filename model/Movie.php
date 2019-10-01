<?php namespace Model;
    
    class Movie{
        private $id;
        private $title;
        private $lenght;
        private $language;
        private $image;

        public function __construct($id,$title,$lenght,$language,$image){
            $this->id = $id;
            $this->title = $title;
            $this->length = $lenght;
            $this->language = $language;
            $this->image = $image;
        }

        public function getTitle()
        {
                return $this->title;
        }
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        public function getLenght()
        {
                return $this->lenght;
        }
        public function setLenght($lenght)
        {
                $this->lenght = $lenght;

                return $this;
        }

        public function getLanguage()
        {
                return $this->language;
        }
        public function setLanguage($language)
        {
                $this->language = $language;

                return $this;
        }

        public function getImage()
        {
                return $this->image;
        }
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        public function getId()
        {
                return $this->id;
        }
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }

?>