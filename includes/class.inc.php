<?php
    include "dbh.inc.php";
        class user
        {
            public $db;
            public function __construct()
            {
                $this->db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                if(mysqli_connect_errno())
                {
                    echo "Error: Could not connect to database.";
                    exit;
                }
            }
           
            public function check_available($checkin, $checkout)
            {
                
                
                   $sql="SELECT DISTINCT room_cat FROM rooms WHERE room_id NOT IN (SELECT DISTINCT room_id
                    FROM rooms WHERE (checkin <= '$checkin' AND checkout >='$checkout') OR (checkin >= '$checkin' AND checkin <='$checkout') OR (checkin <= '$checkin' AND checkout >='$checkin') )";
                    $check= mysqli_query($this->db,$sql)  or die(mysqli_connect_errno()."Query Doesnt run");;

                
                    return $check;
                

            }
            
            
            
            
            public function booknow($checkin, $checkout, $name, $phone,$roomname)
            {
                    
                    $sql="SELECT * FROM rooms WHERE room_cat='$roomname' AND (room_id NOT IN (SELECT DISTINCT room_id
   FROM rooms WHERE checkin <= '$checkin' AND checkout >='$checkout'))";
                    $check= mysqli_query($this->db,$sql)  or die(mysqli_connect_errno()."Data herecannot inserted");;
                 
                    if(mysqli_num_rows($check) > 0)
                    {
                        $row = mysqli_fetch_array($check);
                        $id=$row['room_id'];
                        
                        $sql2="UPDATE rooms  SET checkin='$checkin', checkout='$checkout', name='$name', phone='$phone', book='true' WHERE room_id=$id";
                         $send=mysqli_query($this->db,$sql2);
                        if($send)
                        {
                            $result="Your Room has been booked!!";
                        }
                        else
                        {
                            $result="Sorry, Internel Error";
                        }
                    }
                    else                       
                    {
                        $result = "No Room Is Available";
                    }
                    
                    
                
                    return $result;
                

            }
            
            
            
          
            
            
            
            public function check_login($username,$password)
            {
                
                $sql2="SELECT uid from manager WHERE  uname='$username' and upass='$password'";
                $result=mysqli_query($this->db,$sql2);
                $user_data=mysqli_fetch_array($result);
                $count_row=$result->num_rows;
                
                if($count_row==1)
                {
                    $_SESSION['login']=true;
                    $_SESSION['uid']=$user_data['uid'];
                    return true;    
                }
                else
                {
                    return false;
                }
            }

            public function get_session()
            {
                return $_SESSION['login'];
            }
            public function user_logout()
            {
                $_SESSION['login']=false;
                session_destroy();
            }
        }
        

    


?>