<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Form Data</div>
                <div class="card-body">
                    <form action="index.php?action=add_student" method='post'>
                        <div class="form-group">
                            <label for="text">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="text">Class</label>
                            <select name="class" class="form-control">
                                <option value=""></option>
                                <option value="WEP-A">WEP-A</option>
                                <option value="WEP-B">WEP-B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="number">Mark</label>
                            <input type="number" name="mark" class="form-control">
                        </div>
                        <label for="text">Gender</label>
                        <br>
                        <input type="radio" name="sex" value="Female">Female
                        <input type="radio" name="sex" value="Male">Male
                        <input type="submit" class="btn btn-success float-right" value="Submit" >
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>