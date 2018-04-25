<?php
$error = ""; 
$successMessage = "";
$projectNumber = "project Mars reader 1096-1";
$date = 3;
$nth = "nth";
$user = "user";
$tmmNumber = "5055087707";
$guestNumbers= array(5055087707, 5054637256, 5051234567);
$tmmName = "Thomas M. Maestas"; 
$tmmEmail = "thomas.maestas@hotmail.com";
$tmmURL = "http://www.thomasmaestas.net";
$tmmCalculation = $tmmNumber * 31 /97 + 4;
$myArray = array("Hello", "My name is $tmmName.");

echo "
<!DOCTYPE html><html><head> 
 <meta charset=\"utf-8\">

 <style type=\"text/css\">

 body{

opacity:.85;

background-image:url(\"bluechipTile.jpg\");



 };

 h2,h3{

     text-align:center;

 };

 #container{

    margin-left:auto;

    width:80%;

    padding:20px;

    margin-right:auto;

    border:1px, solid, blue ;

    opacity:.9;

     background:steelblue;

 };

 </style>

 <meta charset=\"utf-8\">

 <script src=\"marsreader.js\"></script>

 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

 <title>Mars Reader APOD call</title>

 </head>  <body style=\"color:white;background:steelblue;\" >

 <div id =\"container\">

 ";

  

if ($user == "user") {
	echo "<hr><a href=\"http://www.thomasmaestas.net\">back to tmm</a>";
    echo "<hr><h4>Welcome Guest.<hr></h4>";
	

 } else {

        echo "<hr><br /><h3>Welcome New Guest</h3>";

    };




echo "<hr> ";



echo "<h2>Mars Reader</h2><h4>Greetings!</h4>

<h5>Today's NASA Report. This Twython Mars Weather Broadcast brought to you by

 $tmmName.<br /> This project $projectNumber is the $nth broadcast.</h5> <div  style=\"color:steelblue;\"> ";



 echo "<script   type=\"text/javascript\"> var url = \"https://api.nasa.gov/planetary/apod?api_key=e4AJtILB6TAZhSkO4qZG3mBwb7ya5MbM1nvtOwq9\";

  $.ajax({

   url: url,

   success: function(result){

   if(\"copyright\" in result) {

     $(\"#copyright\").text(\"Image Credits: \" + result.copyright);

   }

   else {

     $(\"#copyright\").text(\"Image Credits: \" + \"Public Domain\");

   }

   

   if(result.media_type == \"video\") {

     $(\"#apod_img_id\").css(\"visibility\", \"hidden\"); 

     $(\"#apod_vid_id\").attr(\"src\", result.url);

   }

   else {

     $(\"#apod_vid_id\").css(\"display\", \"none\"); 

     $(\"#apod_img_id\").attr(\"src\", result.url);

   }

   $(\"#reqObject\").text(url);
 $(\"#reqObject\").css(\"display\", \"none\");


   $(\"#returnObject\").text(JSON.stringify(result, null, 4));  

   $(\"#apod_explaination\").text(result.explanation);

   $(\"#apod_title\").text(result.title);

 }

 });

 </script>
</div>
 ";
 

 echo "<hr><b></b>

 <pre id=\"reqObject\"></pre> 

 <img id=\"apod_img_id\" width=\"250px\"/> 

 <iframe id=\"apod_vid_id\" type=\"text/html\" width=\"640\" height=\"385\" frameborder=\"0\"></iframe>

 <p id=\"copyright\"></p> 

 <h3 id=\"apod_title\"></h3>

 <p id=\"apod_explaination\"></p>

 <br/><hr>

 <b>Return Object:</b>

 <pre id=\"returnObject\"></pre>";
echo " <br />";



if ($date <= 3 || $user == "user") {

    echo "  <img class=\"u1\" style=\"width:800px;max-width:100%;\" src=\"u1.jpg\"> ";
    echo " <small><br />Image of Nov. 2 NASA.GOV APOD API: Interstellar A/2017 U1 </small>";
    echo " <p><br />Current updates of NASA.gov API below:</p>";

} else {

    echo " <h3>Welcome, Mars Report $projectNumber has today updated with Mars report</h3>";

};







 

echo "</p><p><br />Thank you for visiting the NASA-updated Mars Weather Reader Site. <br />Brought to you by 

TMM</p><br /></div></body>  </html>";  

?>