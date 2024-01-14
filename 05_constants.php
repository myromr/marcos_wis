<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php
        //Constants
        define("ONE",1);
        define("Cats","The only creatures on Earth that can simultaneously demand your attention and ignore you completely with unmatched expertise.");

        print "Constant ONE: ";
        print constant("ONE");
        print "<br>";

        //Constant with array
        define("SENTENCE", ["this", "is", "a", "sentence."]);
        function sentence(){
            //using if-else

            /*STATIC $x = 0;
            if($x == 4){
                print "<br>";
            }
            else{
                print SENTENCE[$x];
                print " ";
                $x++;
            }
            */

            //using for
            for($x = 0; $x < 4; $x++){
                print SENTENCE[$x];
                print " ";
                if($x == 3)
                    print "<br>";
            }
        }
        sentence();

        //Magic Constants
        print __LINE__;
        print "<br>";
        print __FILE__;
    ?>
</body>
</html>