<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Count.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/find", function() use ($app){
        $new_sentence = new Count;
        $new_input = $new_sentence->countWord($_GET['sentence'], $_GET['find']);
        return $app['twig']->render('index.html.twig', array('results' => $new_input));
      });

    return $app;
?>
