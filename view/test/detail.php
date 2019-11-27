<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
               <?php
                    if(isset($data['student'])){
                        foreach($data['student'] as $row){
                ?>
                <tr>
                    <th>ID</th>
                    <td><?php echo $row['id']; ?></td>
                </tr>

                <tr>
                    <th>FullName</th>
                    <td><?php echo $row['name']; ?></td>
                </tr>

                <tr>
                    <th>Class</th>
                    <td><?php echo $row['class']; ?></td>
                </tr>

                <tr>
                    <th>Score</th>
                    <td><?php echo $row['mark'];?></td>
                </tr>

                <tr>
                    <th>Gender</th>
                    <td><?php echo $row['sex'];?></td>
                </tr>
              <?php
                          
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</div>