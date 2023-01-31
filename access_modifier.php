<?php 

class user 
{
       public $name;
       public $age;

        function set_name ($name)
            {
                $this->name =$name;
            }

        function get_name()
            {

                return $this->name ;
            }  



            function set_age ($age)
            {
                $this->age=$age;
            }


            //-------------------------------this function can not accessed because it is proivate functoin......
      private  function get_age()
            {

                return $this->age;
            }  

}



      $apple = new user();

      $apple->set_name('Anon');

      echo "printing public data:" . $apple->get_name() . "<br>"; 
 


      $apple->set_age(85);

      echo "printing private data " . $apple->get_age();
 

?>