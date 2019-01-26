<html>
<head>
    <title>
        JokeApp | The Laughing world
    </title>
    <script language="javascript" type="text/javascript">
        var Joke = function(text,date){
            this.text = text;
            this.date = date;

            this.displayJokeName = function(){
                return?(this.text);
            }


            this.displayJokeDate = function(){
                return(this.date);
            }

        }

        Joke HA = new Joke("<?php $JokeText ?>", "<?php $JokeDate ?>");
        document.write(HA.displayJokeName());
        document.write(HA.displayJokeDate());
    </script>
</head>
<body>
    <table>
        <tr>
            <td>
                1
            </td>
        </tr>
    </table>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 4:25 AM
 */

$JokeText = "this is the first joke";
$JokeDate = "2019-01-26";