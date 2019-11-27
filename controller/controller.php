<?php
    $data = array();
    flix($data);
    function flix(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data){
        $data['student'] = get_data();
        $data['page'] = 'test/view.php';
    }
    function add(&$data){
        $data['page'] = 'test/add.php';
    }
    function add_student(&$data){
        $result = add_data($_POST);
        if($result){
            $action = 'view';
        }else{
            $action = 'add';
        }
        header("location:index.php?action=$action");
    }
    function detail(&$data){
        $data['student'] = m_detail();
        $data['page'] = 'test/detail.php';
    }

    function delete(&$data){
        $result = m_delete();
        if($result){
            $result = 'view';
        }else{
          echo("cannot delete !!!");
        }
        header("Location: index.php?action=$result");
    }
    
    function edit(&$data){
        $data['student'] = m_detail();
        $data['page'] = 'test/edit.php';
    }
    
    function edit_student(&$data){
        $data= m_edit($_POST);
        if($data){
            $action = 'view';
        }else{
          $action = 'edit';
        }
        header("Location: index.php?action=$action");
    }
?>