<?php 
    class hero{
        private $level = 0;
        public function __construct($num=10){
            $this->setLevel($num);
            echo "Hi! Wizard";
        }
        function __destruct(){
            echo "<br>bye Wizard";            
        }        
        function setLevel($num){
            $this->level = $num;
        }
        function getLevel(){
            return $this->level;
        }
        function levelUp(){
            $this->level ++;
            echo "<br>Level UP! congratulation!";
        }

        function fireBall(){
            echo "<br><div style='color:red'>fireBall!!------==>>>o</div><br>";
        }   
    } 
?>