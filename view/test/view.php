<div class="container mt-5">
    <div class="row">
        <div class="col-12">
        <a href="index.php?action=add" class="btn btn-success">Add New</a>
        <br>
        <br>
            <table class="table table-bodered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Mark</th>
                    <th>Sex</th>
                    <th>Action</th>
                </tr>
                <?php
                    if(isset($data['student'])){
                        foreach($data['student'] as $row){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td><?php echo $row['mark']; ?></td>
                    <td><?php echo $row['sex']; ?></td>
                    <td>
                            <a href="index.php?action=detail&id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to view ??')"><i class="material-icons">remove_red_eye</i></a>
                            <a href="index.php?action=delete&id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete ??')"><i class="material-icons">delete</i></a>
                            <a href="index.php?action=edit&id=<?php echo $row['id']; ?>"><i class="material-icons">edit</i></a>
                    </td>
                </tr>
                <?php
                             
                            }
                        }
                ?>
            </table>
        </div>
    </div>
</div>