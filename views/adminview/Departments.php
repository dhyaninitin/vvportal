<div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" onclick="window.history.go(-1); return false;" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Departments List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Admin-Dashboard" ><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Department</li>
                            <li class="breadcrumb-item active">Departments List</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Runing Porject</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-grid"></i> 1,784</h6>
                            </div>
                            <!-- <span class="bh_visitors float-right">20,1,0</span> -->
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Employee On Leave</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-user"></i> 325</h6>
                            </div>
                            <!-- <span class="bh_visits float-right">20</span> -->
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Total Employee</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-users"></i> 13</h6>
                            </div>
                            <!-- <span class="bh_chats float-right">30</span> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Employee List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addDepartments"><i class="icon-plus icon-style" ></i> Add New Departments</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Department Name</th>
                                            <th>Department Head</th>
                                            <th>Total Employee</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td><h6 class="mb-0">Web Development</h6></td>
                                            <td>John Smith</td>
                                            <td>305</td>
                                            <td>
                                                <button type="button" class="btn btn-sm " title="Edit"><i class="icon-pencil"></i></button>
                                                <button type="button" class="btn btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></button>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Default Size -->
<div class="modal animated bounceIn" id="addDepartments" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel"><i class="icon-plus" ></i> Add New Departments</h6>
            </div>
            <form >
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" placeholder="Departments Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" placeholder="Departments Head">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><i class="icon-plus icon-style" ></i> Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-close"></i> CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

