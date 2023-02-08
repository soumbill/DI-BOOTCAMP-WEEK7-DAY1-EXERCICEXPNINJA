<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPNINJA | W7_D1</title>
</head>
<body>
    <h1>Exercise 1 : Chaining Methods And Properties</h1>
    <?php 
        class User{
            public $firsname;
            public $lastname;
            
            public function hello(){
                echo $this -> lastname;
                return $this;
            }

            public function register(){
                echo ' >> registered ';
                return $this;
            }

            public function add(){
                echo ' >> email send ';
                return $this;
            }
        }

        function test(){
            $user1 = new User();
            $user1 -> lastname = 'John';
            $user1 -> hello() -> register() -> add();
        }

        test();
    ?>
</body>
</html>