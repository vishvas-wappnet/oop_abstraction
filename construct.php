


<?php 
              echo "=-----------------------------------------------------------USINF CONSTRUCT FUNCTION-------------------------------------------------------------=".    "<br>";
class user
{

                        //data members 
                        public $name;
                        public $mobile;
                        public $email;



    //init method
    // function init($name ,$mobile , $email)
    //     {
    //         $this->name = $name;   
    //         $this->mobile = $mobile;
    //         $this->email= $email;     
    //     }


    //construct functoin in php    

                    function __construct($name ,$mobile , $email)
                        {
                            $this->name = $name;   
                            $this->mobile = $mobile;
                            $this->email= $email;  
                        }

   //display method
    
    function display()
        {
           // return $this->name. ' '. $this->mobile . ' ' . $this->mobile; 
            echo "User Name is :" .  $this->name . "<br>"; ;
    
            echo "User Mobile Number is:" .  $this->mobile . "<br>" ;

            echo "User Email is:" .  $this->email . "<br>"; 

           echo  "<br>";
            
        }

    
}



$user1 = new user('vishvas Solanki', 112233445599 ,'vishvas@gmail.com');

$user2 = new user('ronak Rathod', 2233445566 ,'ronak@gmail.com');

$user3= new user('virat Kohli ' , 1122334455 , 'kohli@mail.com');


// $user1->init('vishvas Solanki', 112233445599 ,'vishvas@gmail.com');
//  "<br>";
// $user2->init('ronak Rathod', 2233445566 ,'ronak@gmail.com');

// $user3->init('virat Kohli ' , 1122334455 , 'kohli@mail.com');

//echo "user details is:".$user1->display();

$user1->display();

$user2->display();

$user3->display();


echo "=-----------------------------------------------------------USINF CONSTRUCT FUNCTION-------------------------------------------------------------=";


?>