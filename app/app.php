<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    session_start();
    if (empty($_SESSION['user_input'])) {
        $_SESSION['user_input'] = array();
    }
    $app['debug']=true;


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

          $my_PingPong = new PingPong($_POST['number']);
          $my_PingPong->save();
          $my_number = $my_PingPong->getNumber();
          $pingpong_array = $my_PingPong->makePingPong($my_number);
          var_dump($pingpong_array);
          return $app['twig']->render('pingpong.html.twig', array('results' => $pingpong_array));
    });




    return $app;  // leave this shit here!
?>
