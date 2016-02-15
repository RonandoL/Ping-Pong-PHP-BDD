<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    session_start();
    if (empty($_SESSION['user_input'])) {
        $_SESSION['user_input'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    $app->get("/", function() use ($app) {
        return $app['twig']->render('pingpong.html.twig'); // 
    });

    // Upon User Input
    $app->post("/userInput", function() use ($app) {
          $number = new PingPong($_POST['number']);
          $number->save();
          return $app['twig']->render('pingpong.html.twig', array('userInput' => $number));
    });




    return $app;  // leave this shit here!
?>
