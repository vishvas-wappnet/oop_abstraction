<?php


                echo "------------------------------------------------------------Abstaction----------------------------------------". "<br>";

             interface product_interface
                    {
                        public function  doSell();
                        public function  doBuy();
                    }


             abstract class default_Product_Abstraction implements product_interface
                    {
                        private $_bought = false;
                        private $_sold = false;
                        abstract public function doMore();

                        public function doSell()
                           {
                                $this->sold = true;
                                echo "defaultproductionabstraction is desell : {$this->_sold}" . "<br>";
                           }

                        public function doBuy()
                            {
                                $this->bought = true;
                                echo "defaultProductAbstraction doBuy: {$this->_bought}"  . "<br>";
                            }   
                    }


                    

             class default_Product_Implementatoin  extends default_Product_Abstraction
                    {

                        public function doMore()
                            {
                                echo "defaultProductImplementation doMore()"  . "<br>";
                            }
                    }

                    

            
             class my_Product_Implementatoin extends  default_Product_Abstraction
                    {
                        public function doMore() 
                            {
                                echo "myProductImplementation doMore() does more!"  . "<br>";
                            }

                        public function doBuy() 
                            {
                                echo "myProductImplementation's doBuy() and also my parent's dubai()"  . "<br>";
                                parent::doBuy();
                            }
                    
                    }

                    

             class my_Product extends default_Product_Implementatoin
                    {

                        private $_bought=true;
                        public function __construct() {
                            var_dump($this->_bought);
                        }
                        public function doBuy () {
                            /* non-default doBuy implementation */
                            $this->_bought = true;
                            echo "myProduct overrides the defaultProductImplementation's doBuy() here {$this->_bought}";
                        }

                    }

                   

             class my_OtherProduct extends  my_Product_Implementatoin
                    {
                        public function doBuy() 
                            {
                                echo "myOtherProduct overrides myProductImplementations doBuy() here but still calls parent too".¶;
                                parent::doBuy();
                            }
                    }
                    
                    
           
          

            $product  = new my_Product();

            $product->doBuy();
            $product->doSell();
            $product->doMore();


            echo "------------------------------------------------------------new default product implementatoin ----------------------------------------". "<br>";


            $new_product = new default_Product_Implementatoin();
            $new_product->doBuy();
            $new_product->doSell();
            $new_product->doMore();


            echo "------------------------------------------------------------new  MY  Other product implementatoin ----------------------------------------". "<br>";

            $aanother_Product = new my_Product_Implementatoin();
            $last_product->doBuy();
            $last_product->doSell();
            $last_product->doMore();
            

?>

