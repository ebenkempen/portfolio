<?php
    res.header("Access-Control-Allow-Origin: *");
    res.header("Content-Type: application/json; charset=UTF-8");

//new project
    class Project{
        public $id;
        public $title;
        public $image;
        public $href;
    }

    class Projects{
        public $projects;
    }

    require 'Slim/Slim.php';
    \Slim\Slim::registerAutoloader();

    $app = new \Slim\Slim();
    //$app -> get('/projects/:id', function($id){
    $app -> get('/projects/', function(){

//set username
    $servername = "154.0.170.55";
    $username = "obkzeoyb_KEM74";
    $password = "obkzeoyb_LyQLBS6B";
    $dbname = "myWork";
        
        
    

// create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM projects;";
    $result = $conn -> query($sql);

    
    $rows = mysqli_num_rows($result);

    $projects = new Projects;
    $projects->projects = array();
        
    while($row = $result -> fetch_array()){
        $project1 =  new Project;
        $project1 -> id = $row["id"];
        $project1 -> title = $row["title"];
        $project1 -> image = $row["image"];
        $project1 -> href = $row["href"];
        array_push($projects -> projects, $project1);
    }

        //echo json_encode($bproject1);
        
        echo json_encode($projects);
    });


    $app -> run();

?>
