<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 4:25 AM
 */

$JokeId = "1";
$JokeText = "this is the first joke";
$JokeDate = "2019-01-26";

?>



<html>
<head>
    <title>
        JokeApp | The Laughing world
    </title>
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

        var  H = new Joke("<?php echo $JokeId ?> ", "<?php echo $JokeText ?>", "<?php echo $JokeDate ?>");
    </script>
</head>
<body>
    <table border>
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
        <tr>
            <td>
                <script>document.write(H.displayJokeId());</script>
            </td>
            <td>
                <script>document.write(H.displayJokeText());</script>
            </td>
            <td>
                <script>document.write(H.displayJokeDate());</script>
            </td>
        </tr>
    </table>
</body>
</html>

