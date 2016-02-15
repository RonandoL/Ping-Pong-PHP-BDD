<?php

    require_once "src/PingPong.php";  // This tells PHPUnit to open the class we're going to test. To do this we use the keyword require_once to tell PHP where to find the TitleCaseGenerator.php file in relation to the project folder.

    class PingPongTest extends PHPUnit_Framework_TestCase
    {       // This is the class declaration.
            // extends PHPUnit_Framework_TestCase means that this is a special kind of class that handles testing.We will always declare our test classes like this, using upper camel case, ending the file name with Test.php.

        function test_PingPong_count()  //we declare a method to run our first test.
        {
            // There're three parts to a PHPUnit test method: Arrange, Act, and Assert.
            //Arrange: gather all the materials needed to run our test. We create an instance of the class and store it in the variable $test_PingPong

            //Arrange
            $test_PingPong = new PingPong;
            $input = 2;

            //Act: runs the actual method that we are testing.
            $result = $test_PingPong->makePingPong($input);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(array(1, 2), $result);
        }  // we will declare a method to run our first test. When we run PHPUnit, our test class will be instantiated and each of its methods will be executed.

        function test_PingPong_countPing()//replaces %3 with ping.
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 3;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals(array(1, 2, 'ping'), $result);
        }

        function test_PingPong_countPong() // replaces 5 with 'pong'
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 5;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals(array(1, 2, 'ping', 4, 'pong'), $result);
        }



    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
