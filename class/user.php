<?php


class user{
    function __construct(){	
        global $conn;
        $this->conn=$conn;
    }
    /**
     * 
     * @param array $data
     * 
     * Add user with given datas
     */
    public function addUser($data){
        $sql="INSERT INTO users(name, surname, email, country) VALUES('".$data['name']."', '".$data['surname']."', '".$data['mail']."', '".$data['country_code']."')";
        $result=$this->conn->execute($sql);
        if($result)return true;
        return false;
    }
    
    /**
     * List all users
     */
    public function listUsers(){
        $sql="SELECT * FROM users u INNER JOIN country c ON u.country=c.code ORDER BY id ASC";
        $result=$this->conn->execute($sql);
        if(is_object($result) && $result->RecordCount()>0){
            return $result->getArray(); 
	}
	return false;
    }
    
    /**
     * 
     * @param int $id
     * 
     * Returns data of user with given id
     * 
     */
    public function getUserById($id){
        $sql="SELECT * FROM users u INNER JOIN country c ON u.country=c.code where id='".$id."'";
        $result=$this->conn->execute($sql);
        if(is_object($result) && $result->RecordCount()>0){
            return $result->getArray(); 
	}
	return false;
    }
    
    /**
     * 
     * 
     * @param array $data
     * 
     * Repopulate user with given ID with data in array
     */
    public function updateUser($data){
        $sql="UPDATE users SET name='".$data['name']."', surname='".$data['surname']."', email='".$data['mail']."', country='".$data['country_code']."' WHERE id='".$data['id']."'";
        $this->conn->execute($sql); 
    }
    
    /**
     * 
     * @param int $id
     * 
     * Delete user with given ID
     * 
     */
    public function delUser($id){
         $sql="DELETE FROM users WHERE id='".$id."';";
         $result=$this->conn->execute($sql);
         return true;
    }
    
    
    /**
     * Function returns all countries in database
     * @return Array countries
     */
    public function listCountries(){
        $sql="SELECT * FROM country;";
        $result=$this->conn->execute($sql);
        if(is_object($result) && $result->RecordCount()>0){
            return $result->getArray(); 
	}
	return false;
    }
    
    
    /**
     * function returns all available user IDs
     * 
     * 
     */
    public function availableIds(){
        $sql="SELECT id FROM users ORDER BY id ASC";
        $result=$this->conn->execute($sql);
        if(is_object($result) && $result->RecordCount()>0){
            return $result->getArray(); 
	}
	return false;
    }
}



?>