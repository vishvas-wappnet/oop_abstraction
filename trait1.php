<?php
     trait user
         {
             public function userdata()
              {
                    echo " this is reuseable code";
              }
        }

        class user_info
            {
                use user;
            }

            $obj = new user_info();
            $obj->userdata();
?> 