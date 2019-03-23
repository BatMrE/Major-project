<?php
include 'db.php';
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>PHP quiz</title>
</head>

<body>
<center><H2><FONT COLOR="#000099">Quiz using PHP</FONT></H2></center>

<form name="quiz" action=quizaction.php  method="POST"> 
<ul>
<font color="#CC0000"><b>Please click in the text fields below and enter the information requested.</b></FONT> 
<ul><ul>
<li>First name:<input type="text" name="firstname" size="35"></li><br>
</ul></ul>
<hr>
<UL><B><FONT COLOR="#CC0000">Answer the questions below.&nbsp; Your individual responses will be kept confidential.<br>
For each item, select an option. When finished, click the "Done" button.</FONT></B></UL>

<!--
<UL>
1. PHP is a server-side scripting language.
<UL>
<INPUT TYPE="RADIO" NAME="question1" VALUE="answer1.1">True<BR>
<INPUT TYPE="RADIO" NAME="question1" VALUE="answer1.2">False<BR>
</UL></UL>
<HR>
<UL>
2. When you use the PHP script language in IU, what head do you type 
in your script page?
<UL>
<INPUT TYPE="RADIO" NAME="question2"VALUE="answer2.1">#!/usr/local/bin/perl<BR>
<INPUT TYPE="RADIO" NAME="question2"VALUE="answer2.2">#!/usr/local/bin/php4<BR>
<INPUT TYPE="RADIO" NAME="question2" VALUE="answer2.3">#!/usr/local/bin/mysql<br>
</UL></UL>
-->
                                                                                                                                                                                                                                 
<?php
$db_select = mysqli_select_db($conn, "videojs");
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}

$get1= "SELECT list FROM `data` WHERE sess_id=1 ";
$result1 = $conn->query($get1);

$array_one = array();

while($row = $result1->fetch_assoc()) { 
       // echo $row["list"]. "<br>";
        $array_one[] = $row;

  // OR just echo the data:
     //   echo $row['list']."<br>"; // etc
    }



//echo    "array is this".$array_one[3]['list']."<br>";

///////////////////////////////////////////

$get2= "SELECT type FROM `questions`";
$result2 = $conn->query($get2); 

$array_two = array();

while($row = $result2->fetch_assoc()) { 
        $array_two[] = $row;

    }

//echo    "array_two is this".$array_two[3]['type']."<br>"; 


/////////////////////////////////
    
$element=array_intersect(array_column($array_one, 'list'), array_column($array_two, 'type'));
$_SESSION['fin_element']= array_unique($element);
echo "list here"."<br>";
print_r($_SESSION['fin_element']);
/////////////////////////////
$sql = "SELECT * FROM questions WHERE `type` ='web'";

$result3 = $conn->query($sql);

$i=1;

if ($result3->num_rows > 0) {
    // output data of each row
    
    while($row = $result3->fetch_assoc()) {
        echo "<br>";
        echo "Q:" . $row["question_name"]. "<br>";
       
     

        echo "<input type='radio' name='question".$i."' value='answer1'/><code>".$row["answer1"]."</code>". "<br>";
        echo "<input type='radio' name='question".$i."' value='answer2'/><code>".$row["answer2"]."</code>". "<br>";
        echo "<input type='radio' name='question".$i."' value='answer3'/><code>".$row["answer3"]."</code>". "<br>";
        echo "<input type='radio' name='question".$i."' value='answer4'/><code>".$row["answer4"]."</code>". "<br>";
     
        echo $i;
       
        $i++;  
        
    }
} else {
    echo "0 results";
}


$sql = "SELECT * FROM questions WHERE `type` IN ('".implode("','",$_SESSION['fin_element'])."')";

$result = $conn->query($sql);

$_SESSION['index']=6;

if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<br>";
        echo "Q:" . $row["question_name"]. "<br>";
       
        echo "<input type='radio' name='question".$_SESSION['index']."' value='answer1'/><code>".$row["answer1"]."</code>". "<br>";
        echo "<input type='radio' name='question".$_SESSION['index']."' value='answer2'/><code>".$row["answer2"]."</code>". "<br>";
        echo "<input type='radio' name='question".$_SESSION['index']."' value='answer3'/><code>".$row["answer3"]."</code>". "<br>";
        echo "<input type='radio' name='question".$_SESSION['index']."' value='answer4'/><code>".$row["answer4"]."</code>". "<br>";    

        echo $_SESSION['index'];
        $_SESSION['index']++;
          
        
    }
} else {
    echo "0 results";

}
  // passing tier value to quizaction.
  echo "<input type='hidden' name='formvar' value=''>";
 
?>


  
<div id="timer">2:00</div>
<script type="text/javascript">


var timeoutHandle;
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("timer");
        var  current_minutes = mins-1
        seconds--;
        counter.innerHTML =
        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        // for  sending data to the form...
        document.quiz.formvar.value = seconds;
        if(seconds <=0){
				setTimeout('document.quiz.submit()',1);
        }
        if( seconds > 0 ) {
            timeoutHandle=setTimeout(tick, 1000);
        } else {

            if(mins > 1){

               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
               setTimeout(function () { countdown(mins - 1); }, 1000);

            }
        }
    }
    tick();
}

countdown(1);

</script>
<INPUT TYPE="SUBMIT" VALUE="Done" >
<INPUT TYPE="RESET" VALUE="Clear all fields of this form">
</ul></ul>
</form>
</body>
</html>