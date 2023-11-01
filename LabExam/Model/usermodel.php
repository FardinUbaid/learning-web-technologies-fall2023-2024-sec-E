<?php

    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from labexam where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }

    function signup($user){

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from labexam";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

    function adduser(){

        function adduser($user) {
            $con = getConnection();
            $username = $user['username'];
            $password = $user['password'];
            $id = $user['id'];
            $usertype = $user['usertype'];
            
            // You should add more validation and error handling here.
            
            $sql = "INSERT INTO labexam (username, password) VALUES ('$username', '$password')";
            
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
        }
        
    }

    function deleteUser(){
        function deleteUser($userId) {
            $con = getConnection();
            
            // You should add more validation and error handling here.
            
            $sql = "DELETE FROM labexam WHERE id = $userId";
            
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
        }
        

    }

    function updateUser(){

        function updateUser($userId, $newUserData) {
            $con = getConnection();
            $username = $newUserData['username'];
            $password = $newUserData['password'];
            
            // You should add more validation and error handling here.
            
            $sql = "UPDATE labexam SET username = '$username', password = '$password' WHERE id = $userId";
            
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
        }
        
        
    }


?>