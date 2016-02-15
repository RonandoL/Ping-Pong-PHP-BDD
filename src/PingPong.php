<?php
    class PingPong
    {
        private $number;

        //functions
        function PingPong()
        {

        }

        //setters
        function setNumber($new_number)
        {
            $this->number = $new_number;
        }

        //getters
        function getNumber()
        {
            return $this->new_number;
        }

        //savers

        function save()
        {
            array_push($_SESSION['user_input'], $this);
        }




    }
?>
