<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <?php 
    echo "min khant maw";
 ?> -->
    <script>
        let name="Min khant Maw";  //string
        let age=26; //number
        let fruits=["apple","orange","mango"]; //array

        // 
        function drive(){
            return name + "can drive";
        }
        // object
        let mySelf={
            // property
            name : "min khant maw",
            age  : 24,
            // method
            eat(){
                return this.name + " is eating";
            },
            sleep(){
                return "I like sleep";
            }
        }
    </script>
</body>
</html>
