<?php

                    class const_keyword 
                        {
                                const MSG = "SECURE ALL NETWORK BEFORE IT BE COME DATA BREACH" . "<br>";

                               
                                const FINAL_MSG = "THIS IS LAST MESSAGE TO THE SECURTI TEAM ";

                                function display_const()
                                    {
                                        echo self :: FINAL_MSG;
                                    }
                              
                        }


                        echo const_keyword :: MSG;

                        $obj = new const_keyword();

                        $obj->display_const();



?>