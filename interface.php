<?php

        interface inter_face
                {
                     public function data();
                }

           
           class user implements inter_face
                {

                     public function  data()
                        {
                            echo "interface class & methods are implemented in this class";
                        }
                   
                }         


                $obj = new user();

                $obj->data();


?>