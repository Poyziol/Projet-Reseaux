<?php

namespace app\models;

use PDO;

class LoginModel
{
    private $db;

    //Need db of type PDO
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    //Verify username and password of an user
    function check_user($name,$password)
    {
        $query = "SELECT * FROM gift_user WHERE gift_user = :name LIMIT 1";
        $data =  $this->db->prepare($query);
        $data->bindParam(':name',$name,PDO::PARAM_STR);
        $data->execute();

        $user = $data->setFetchMode(PDO::FETCH_ASSOC);
        if(!$user)
        {
            return ['message' => 'User not found'];
        }
        if($user['password'] !== $password)
        {
            return ['message' => 'Invalid password'];
        }

        return ['message' => 'success' , 'user' => $user];
    }

    //Verify username and password of an admin
    function check_admin($name,$password)
    {
        $query = "SELECT * FROM gift_user WHERE gift_user = :name LIMIT 1";
        $data =  $this->db->prepare($query);
        $data->bindParam(':name',$name,PDO::PARAM_STR);
        $data->execute();

        $user = $data->setFetchMode(PDO::FETCH_ASSOC);
        if(!$user)
        {
            return ['message' => 'User not found'];
        }
        if($user['password'] !== $password)
        {
            return ['message' => 'Invalid password'];
        }
        if($user['is_amin'] != 1)
        {
            return ['message' => 'You are not amin'];
        } 

        return ['message' => 'success' , 'user' => $user];
    }

    //add an user with his new name and password
    function add_user($new_name,$new_password)
    {
        $query = "SELECT * FROM gift_user WHERE gift_user = :new_name LIMIT 1";
        $data =  $this->db->prepare($query);
        $data->bindParam(':new_name',$new_name,PDO::PARAM_STR);
        $data->execute();

        $user = $data->setFetchMode(PDO::FETCH_ASSOC);
        if($user)
        {
            return ['message' => 'Username already exist!'];
        }

        $query2 ="INSERT INTO gift_user(name,password,is_admin) VALUES (:name,:password,0)";
        $data2 =  $this->db->prepare($query2);
        $data->bindParam(':name',$new_name,PDO::PARAM_STR);
        $data->bindParam(':password',$new_password,PDO::PARAM_STR);

        if($data->execute())
        {
            return ['message' => 'success'];
        }
        else
        {
            return ['message' => 'sign in failed'];
        }
    }
}

?>