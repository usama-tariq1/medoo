<?php


require './vendor/autoload.php';
require './modals/modal.php';
use Modal\Modal;



// $loader = new Twig_Loader_Filesystem('views');
$loader = new \Twig\Loader\FilesystemLoader('views');


$twig = new \Twig\Environment($loader);

$lexer = new Twig\Lexer($twig , array(
    'tag_block'    => array( '{' , '}' ),
    'tag_variable' => array('{{' , '}}')


));

$twig->setLexer($lexer);





class Controller{
    protected $twig ;
    protected $db;

    function __construct( )
    {
        global $twig;
        global $db;
        $this->twig = $twig;
        $this->db = $db;
    }


    function display($page , $data=[] ){
        echo $this->twig->render($page , $data);
    }


}


 ?>