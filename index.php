<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 4:25 AM
 */

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
            background: aliceblue;

        }
        table, td{
            background: aqua;
            text-align: center;
            alignment: center;
            padding: 20px;
            border-width: thin 0px;
            border-style: solid;
            border-color: black;
            border-collapse: collapse;
            align-content: center;
        }

        table{
            margin-left:auto;
            margin-right:auto;
            width: 40%;
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
    </script>
</head>
<body>
    <font id="header"><h1><?php echo $appName ?></h1></font>]

    <table border>
        <tr>
            <td id="td1" colspan="3"><font id="fcreatername">App created by:<b><?php echo $creator ?></b></font> <font id="ftodaydate">Today is: <b><?php echo $date ?></b></font></td>
        </tr>
        <tr>

            <td colspan = "3">
                        <form action="/JokeApp/newjoke.php" method="POST">
                            <label>create new Joke:</label>
                            <input type="text" name="newjoketext" />
                            <input type="submit" value="submit" name="submit"/>
                        </form>
            </td>
        <tr>
            <td>
                <h3>ID</h3>
            </td>
            <td>
                <h3>JOKETEXT</h3>
            </td>
            <td>
                <h3>JOKEDATE</h3>
            </td>
        </tr>
            <!--
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

            if($query) {
                $index = 1;
                while ($row = mysqli_fetch_array($query)) {
                    echo "<tr><td>" . "$index" . " </td>
                 <td>" . $row["JokeText"] . " </td>
                <td>" . $row["JokeDate"] . "</td><br></tr>" .
                        $index++;

                }
            }else{
                echo "<tr><td colspan='3'> <font>no jokes posted yet</font> </td><br></tr>";
            }
            ?>
    </table>
</body>
</html>

