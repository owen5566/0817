<?php
    class hero{
        public $level;
        private $_level = 0;
        public function __construct($num=10){
            $this->setLevel($num);
            echo "Hi! Wizard<br>";
        }
        function __destruct(){
            echo "bye Wizard<br>";            
        }        
        // function __set($k, $v){
        //     echo $k,$v,"<br>";
        // }
        function setLevel($num){
            $this->_level = $num;
        }
        function getLevel(){
            return $this->_level;
        }
        function levelUp(){
            $this->_level ++;
            echo "Level UP! congratulation!<br>";
        }

        function fireBall(){
            echo "<div style='color:red'>fireBall!!------==>>>o</div><br>";
        }   
    } 
    $wizard = new hero(100);
    $wizard->fireBall();
    echo $wizard->getLevel()."<br>";
    $wizard->levelUp();
    echo $wizard->getLevel()."<br>";
    // $wizard2 = $wizard;
    // $wizard = null;
    // $wizard2->levelup();
    // $wizard2 = null;
    $wizard->sp = 3;
    echo "<br>".$wizard->sp;
?>