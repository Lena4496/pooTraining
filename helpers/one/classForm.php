<?php 

    class Form{
        private $data;
        public $search = 's';

            public function __construct($data = array()){
                $this->data = $data;

            }

            private function search($html){
                return "<{$this->search}>$html</{$this->search}>";
            }

            private function getValue($index){
                return isset($this->data[$index]) ? $this->data[$index] : null;
            }

            public function input($name){
                return $this->search(
                    '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');  
            }

            public function select($country){
                return $this->search(
                    '<select id="country"  country="' . $country . '" value="' . $this->getValue($country) . '"><option value="Belgique">Belgium</option></select>');  
            }

            public function submit(){
                return $this->search('<button type="submit">Envoyer</button>');
            }

            public function textarea($message){
                return $this->search(
                    '<textarea  message="' . $message . '" value="' . $this->getValue($message) . '"></textarea>');  
            }

            public function radio($radio){
                            return $this->search(
                                '<input type="radio" name="' . $radio . '" value="' . $this->getValue($radio) . '"><label for="female">Female</label><br>');  
            }

            public function check($checkbox){
                return $this->search(
                    '<input type="checkbox" name="' . $checkbox . '" value="' . $this->getValue($checkbox) . '"><label for="graduate">Diplomated</label>');  
            }

    }

  



?>