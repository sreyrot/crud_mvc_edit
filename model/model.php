<?php
    function get_data(){
        include_once "connection.php";
        $query = "SELECT * FROM student";
        $result = mysqli_query($connection, $query);
        $rows = [];
        if($result && mysqli_num_rows($result) > 0){
            foreach($result as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }
    function add_data(){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $mark = $_POST['mark'];
        $sex = $_POST['sex'];
        include_once "connection.php";
       $query = "INSERT INTO student(name, class, mark, sex)
       VALUES('$name','$class','$mark','$sex')";
       $result = mysqli_query($connection, $query);
       return $result;
    }

    function m_detail(){
        $id = $_GET['id'];
        include_once "connection.php";
        $query = "SELECT * FROM student WHERE id = $id";
        $result = mysqli_query($connection, $query);
      return $result;
    }
    
    function m_delete(){
        $id = $_GET['id'];
        include_once "connection.php";
        $query = "DELETE FROM student WHERE id = $id ";
        $result = mysqli_query($connection, $query);
        return $result;
    }
    

    function m_edit(){
        if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $mark = $_POST['mark'];
        $sex = $_POST['sex'];
        include_once "connection.php";
        $data = " UPDATE student SET name ='$name', class='$class', mark='$mark', sex='$sex' WHERE id = $id " ;
        $re_data = mysqli_query($connection, $data);
        return $re_data;
    }
    }
?>