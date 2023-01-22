<?php
$untitle_form=$_POST['untitle_form'];
$FirstQuestion=$_POST['FirstQuestion'];
$optionfirst=$_POST['optionfirst'];
$firstquestionfirst=$_POST['firstquestionfirst'];
$secondquestionfirst=$_POST['secondquestionfirst'];
$thirdquestionfirst=$_POST['thirdquestionfirst'];
$secondquestion=$_POST['secondquestion'];
$optionsecond=$_POST['optionsecond'];
$firstquestionsecond=$_POST['firstquestionsecond'];
$secondquestionsecond=$_POST['secondquestionsecond'];
$thirdquestionsecond=$_POST['thirdquestionsecond'];
$thirdquestion=$_POST['thirdquestion'];
$optionthird=$_POST['optionthird'];
$firstquestionthird=$_POST['firstquestionthird'];
$secondquestionthird=$_POST['secondquestionthird'];
$thirdquestionthird=$_POST['thirdquestionthird'];
$fourquestion=$_POST['fourquestion'];
$optionfour=$_POST['optionfour'];
$firstquestionfour=$_POST['firstquestionfour'];
$secondquestionfour=$_POST['secondquestionfour'];
$thirdquestionfour=$_POST['thirdquestionfour'];
$fifthquestion=$_POST['fifthquestion'];
$optionfifth=$_POST['optionfifth'];
$firstquestionfifth=$_POST['firstquestionfifth'];
$secondquestionfifth=$_POST['secondquestionfifth'];
$thirdquestionfifth=$_POST['thirdquestionfifth'];


//database connection 
$con=mysqli_connect('localhost','root','','ace_driving_school');
if($con->connect_error)
{
    die("Connection Failed :".$con->connect_error);
}
else
{
    $stmt ="insert into quiz_form(untitle_form,FirstQuestion,optionfirst,
    firstquestionfirst,secondquestionfirst,thirdquestionfirst,secondquestion,optionsecond,
    firstquestionsecond,secondquestionsecond,thirdquestionsecond,thirdquestion,optionthird,
    firstquestionthird,secondquestionthird,thirdquestionthird,fourquestion,optionfour,
    firstquestionfour,secondquestionfour,thirdquestionfour,fifthquestion,optionfifth,
    firstquestionfifth,secondquestionfifth,thirdquestionfifth) 
    VALUES('$untitle_form','$FirstQuestion','$optionfirst','$firstquestionfirst',
    '$secondquestionfirst','$thirdquestionfirst','$secondquestion','$optionsecond',
    '$firstquestionsecond','$secondquestionsecond','$thirdquestionsecond','$thirdquestion',
    '$optionthird','$firstquestionthird','$secondquestionthird','$thirdquestionthird',
    '$fourquestion','$optionfour','$firstquestionfour','$secondquestionfour','$thirdquestionfour',
    '$fifthquestion','$optionfifth','$firstquestionfifth','$secondquestionfifth','$thirdquestionfifth')";
    if(mysqli_query($con,$stmt)){
    echo "success";
    }
    else{
    echo "error";
    }
}
?>