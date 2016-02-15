<?php
    class PingPong
    {
        private $number;

        //functions
        function makePingPong($number)
        {
            $output = array();
            for($i = 1; $i <= $number; $i++) {
                if (($i % 3 == 0) && ($i % 5 == 0)) {
                    array_push($output, 'ping-pong');
                } elseif ($i % 5 == 0) {
                    array_push($output, 'pong');
                } elseif ($i % 3 == 0) {
                    array_push($output, 'ping');
                }else {
                    array_push($output, $i);
                }
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
