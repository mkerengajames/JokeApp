<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 4:25 AM
 */

require 'browser.php';
require 'data.php';
require 'date.php';

//include 'newjoke.php';

$appName = "JOKE APP";
$creator="James Mkerenga";


?>



<html>
<head>
    <title>
        JokeApp | The Laughing world
    </title>
    <style type="text/css">
        body{
            background: black;

        }
        table, td{
            background: aqua;
            text-align: center;
            alignment: center;
            border-width: thin 0px;
            border-style: solid;
            border-color: black;
            border-bottom-width: thick;
            border-collapse: collapse;
            align-content: center;
            border-radius:30px;
            padding:20px;
        }



        table{
            margin-left:auto;
            margin-right:auto;
            width: 40%;
            margin-top: 0px;
        }

        #ftodaydate{
            float: right;
        }

        #fcreatername{
            float: left;
        }

        #header{
            text-align: center;
            text-decoration-color: cadetblue;
        }

        h1{
            color: black;
        }

        #jokeinput{
            width:300px;
            height:30px;
            border-style: groove;
            border-radius: 10px;
        }

        #jokepostbutton{
            height:30px;
            border-style: double;
            border-radius: 10px;
        }

        #jokedeletebutton{
             border-style: double;
             border-radius: 40px;
             height:30px;
             width: 30px;
            background-color: indianred;
            text-align: center;

         }

        #headertd{
            border-bottom-width: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
            background-image: url("header4.png");
        }

        #datestd{
            border-bottom-width: thin;
        }

        #posttd{
            background-color: aquamarine;
            border-radius: 0px;
        }

        #posttr{
            background-color: green;
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
        }
    </style>
    <script language="javascript" type="text/javascript">
        var Joke = function(id,text,date){
            this.id = id;
            this.text = text;
            this.date = date;

            this.displayJokeId = function(){
                return(this.id);
            }

            this.displayJokeText = function(){
                return(this.text);
            }


            this.displayJokeDate = function(){
                return(this.date);
            }

        }

        //var  H = new Joke("", "", "");

        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            h = checkTime(h);
            document.getElementById('txt').innerHTML =
                "<b>" + h + ":" + m + ":" + s + "Hrs"+"</b>";
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }

    </script>
</head>
<body onload ="startTime()">

    <table>
        <tr><td id="headertd" colspan="4"><font id="header"><h1><?php echo $appName ?></h1></font></td></tr>
        <tr id ="datestd">
            <td style="border-bottom: 0px" id="td1" colspan="3"><font id="fcreatername">Welcome:<b><?php echo '  '.$creator.'.' ?></b></font> <font id="ftodaydate">Today is: <b><?php echo $date."" ?></b>
                </font></td>
            <td style="border-bottom: 0px" id="txt"></td>
        </tr>
        <tr>

            <td colspan = "4">
                        <form action="/JokeApp/newjoke.php" method="POST">
                            <label>create new Joke:</label>
                            <input type="text" name="newjoketext" id="jokeinput"/>
                            <input type="submit" value="POST" name="submit" id="jokepostbutton"/>
                        </form>
            </td>

        </tr>
        <!--
    </table>

    <table id="posttable">

        <tr>
            <td>
                <h3>ID</h3>
            </td>
            <td>
                <h3>JOKE</h3>
            </td>
            <td>
                <h3>POSTDATE</h3>
            </td>
            <td>
                <h3> </h3>
            </td>
        </tr>
            <td>
                <script>document.write(H.displayJokeId());</script>

            </td>
            <td>
                <script>document.write(H.displayJokeText());</script>
            </td>
            <td>
                <script>document.write(H.displayJokeDate());</script>
            </td>
            -->
            <?php

            if($creator == 'James Mkerenga'){
                $creator = ' ';
            }

            if($query != NULL) {
                $index = 1;

                while ($row = mysqli_fetch_array($query)) {
                    echo "<tr id='posttr'><td id='posttd'><font color='maroon'><b>" . "$index" . "</b></font> </td>
                 <td id='posttd' ><font color='blue'><b>" . $row["JokeText"] . " </b></font></br>" . $creator . "</td>
                <td id='posttd'><b>" . $row["JokeDate"] . "</b></td>
                <td id='posttd'>
                        <form action='/JokeApp/deletejoke.php' method='POST'>
                            <input type='hidden' value='.$index.' name='index'>
                            <input type = 'submit' name='delete' value='X' width='20%' height='7%' id = 'jokedeletebutton'/>
                        </form> 
                    </td>
                <br></tr>" .
                        $index++;

                }
            }else{
                echo "<tr><td colspan='3' style='border-bottom: 0px'> <font>no jokes posted yet</font> </td><br></tr>";
            }
            ?>
        <tr>
            <td>
            <font id="footer">
                <font align="center" color="black"><?php $year ?> </font> </font>
            </td>
        </tr>
    </table>

</body>
</html>

