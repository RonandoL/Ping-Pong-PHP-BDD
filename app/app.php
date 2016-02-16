<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Show home page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('pingpong.html.twig');
    });

    // Upon User Input - using a get, not a post
    $app->get("/userInput", function() use ($app) {
        $my_input = $_GET['number'];  // get user input from form
        $my_PingPong = new PingPong;  // create new PingPong object
        $results = $my_PingPong->makePingPong($my_input);  // new object runs function w/user input

        // render html page with associative array of $results value
        return $app['twig']->render('pingpong.html.twig', array('results' => $results));
    });

    return $app;  // leave this shit here!
?>
