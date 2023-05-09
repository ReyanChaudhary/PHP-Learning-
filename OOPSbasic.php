<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class student{
        var $name;
        var $gpa;
        //Making a constructor
        function __constructor($aname, $agpa){
            echo "New student counted: <br>";
            $this->name = $aname;
            $this->gpa = $gpa;
        }
        //now making a object function for performing our operations
        function chk(){
            if($this->gpa >= 3.5){
                return "True";
            }
            return "False";
        }
    }

    //Creating a object 
    $student1 = new student("Alex", 3.55);
    $student2 = new student("John",3.33);
    $student3 = new student("Kai",3.7);
    
    //Now checking the reqd condition
    echo $student1->chk();
    echo $student2->chk();
    echo $student3->chk();

    //Terimated on port 5500 local host
    ?>
</body>
</html>
