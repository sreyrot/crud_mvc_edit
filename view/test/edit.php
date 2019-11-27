<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Form Data</div>
                <div class="card-body">
                <?php
                if(isset($data['student'])){
                    foreach($data['student'] as $row){    
                ?>
                    <form action="index.php?action=edit_student" method='post'>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                        <div class="form-group">
                            <label for="text">Name</label>
                            <input type="text" value="<?php echo $row['name']; ?>" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="text">Class</label>
                            <select name="class" class="form-control">
                                <option value=""></option>
                                <option value="WEP-A" <?php if( $row['class'] == "WEP-A" ) echo "selected";  ?> >WEP-A</option>
                                <option value="WEP-B" <?php if( $row['class'] == "WEP-B" ) echo "selected";  ?>>WEP-B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="number">Mark</label>
                            <input type="number" value="<?php echo $row['mark']; ?>" name="mark" class="form-control">
                        </div>
                        
                        <label for="text">Gender</label>
                        <br>
                        <input type="radio" <?php if($row['sex'] == "Female") echo "checked"; ?> name="sex" value="Female">Female
                        <input type="radio"<?php if($row['sex'] == "Male") echo "checked"; ?> name="sex" value="Male">Male


                        <input type="submit" class="btn btn-success float-right" name="edit" value="Submit" >
                    </form>
                    <?php
                        }
                }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
