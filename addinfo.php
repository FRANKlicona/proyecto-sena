
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Status</h4>
                            </div>
                            <div class="content">
                                <form action="model.php?" method="POST" >
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="hidden" name="p" value="status">
                                                <label>Status</label>
                                                <input type="text" name="d" class="form-control" >
                                            </div>
                                        </div>
                                    <div>                                   
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Status</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="header">
                                <h4 class="title">New Place</h4>
                            </div>
                            <div class="content">
                                <form action="model.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="hidden" name="p" value="place">
                                                <label>Place</label>
                                                <input type="text" name="d" class="form-control" >
                                            </div>
                                        </div>
                                    <div>                                   
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Place</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="header">
                                <h4 class="title">New Journey</h4>
                            </div>
                            <div class="content">
                                <form action="model.php?p=journey" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="hidden" name="p" value="journey">
                                                <label>Journey</label>
                                                <input type="text" name="d" class="form-control" >
                                            </div>
                                        </div>
                                    <div>                                   
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Journey</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="header">
                                <h4 class="title">New Grade</h4>
                            </div>
                            <div class="content">
                                <form action="model.php?p=grade" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="hidden" name="p" value="grade">
                                                <label>Grade</label>
                                                <input type="text" name="d"  class="form-control" >
                                            </div>
                                        </div>
                                    <div>                                   
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Grade</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
