<?php

           abstract class ab_class
                {
                     abstract public function data() :string;
                }

           
           class user extends ab_class
                {

                     public function  data() : string 
                        {
                            echo "abstract class & methods are implemented in this class";
                        }
                   
                }         


                $obj = new user();

                $obj->data();


?>