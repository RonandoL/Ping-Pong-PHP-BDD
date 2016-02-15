<?php
    class PingPong
    {
        private $number;

        //functions
        function makePingPong($input)
        {
            $output = array();
            for($i = 0; $i <= $input; $i++) {
                array_push($output, $i);
            }

            return $output;
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
