<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    $app->get("/", function() use ($app) {
        return $app['twig']->render('pingpong.html.twig'); //
    });

    // Upon User Input
    $app->get("/userInput", function() use ($app) {
        $my_input = $_GET['number'];
        $my_PingPong = new PingPong;
        $results = $my_PingPong->makePingPong($my_input);

        return $app['twig']->render('pingpong.html.twig', array('results' => $results));
    });

    return $app;  // leave this shit here!
?>
