<?php
class Controller{
    function __construct(){
        $this->mysqli = new mysqli('localhost','root','','eduinfo');
    }
    function insertRow($table,$data){
           
           $key = array();
           $val = array();
        foreach($data as $keys=>$values){
            $key[] = $keys;
            $val[] = "'".$values."'";
        }   

        $fields = implode(",",$key);
        $values = implode(",",$val);

    $result = mysqli_query($this->mysqli,"INSERT INTO $table ($fields) VALUES ($values)");
     if($table=="tbl_register"){
        $data = mysqli_query($this->mysqli,"INSERT INTO tbl_user (email,password) select email,password from tbl_register"  );
    }
            if($result){
                return true;
            }else{
                return false;
            } 
    } 

        function selectAll($table){
            $data=array();

            $result= mysqli_query($this->mysqli,"SELECT * FROM $table");
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $data[]=$row;

                }
            }
            return $data;
        }  

        function delete($table,$field,$id){
            $result=mysqli_query($this->mysqli,"DELETE FROM $table WHERE $field=".$id);
        } 

        function update($table,$field,$id){
            //or selectone
             $data=array();

            $result= mysqli_query($this->mysqli,"SELECT * FROM $table WHERE $field=".$id);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $data[]=$row;

                }
            }
            return $data;
        }   

        function updateRow($table,$data,$field,$id){
            foreach($data as $key=>$values){ 
           $result=mysqli_query($this->mysqli,"UPDATE $table SET $key='$values' WHERE $field=".$id);
           }
           if($result){
            return true;
           }else{
            return false;
           }
        }

          function selectone($table,$field,$pass){
            $data=array();


            $result= mysqli_query($this->mysqli,"SELECT * FROM $table WHERE $field='$pass'");

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $data[]=$row;

                }
            }
            return $data;
        }  

       
}
?>