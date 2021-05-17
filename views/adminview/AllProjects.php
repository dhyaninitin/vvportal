<style type="text/css">
    .deletetext{
        font-size: 20px;
        text-align: center;
        padding: 43px;
    }
    .leave {   
        padding: 2px 2px;
        text-transform: uppercase;
        line-height: 4px;
        font-size: 11px;
        border: 2px solid;
        font-weight: 900;
        border-radius: 9%;
    }
    .leave-danger {
    background: transparent;
    border-color: #de4848;
    color: #de4848;
    }   

    /*put on the header*/
    .sweet-alert .sa-icon {
        width: 60px !important;
        height: 60px !important;
        border: 4px solid gray !important;
        margin: 5px auto !important;
    }
    .sweet-alert .sa-icon.sa-info::before {
        width: 4px !important;
        height: 18px !important;
        bottom: 12px !important;
    }
    .sweet-alert h2 {
        font-size: 21px !important;
        margin: 15px 0 !important;
    }
    .sweet-alert {
        width: 380px !important;
        padding: 18px !important;
        border-radius: 15px !important;
        left: 53% !important;
        top: 51% !important;
    }
    a:not([href]):not([tabindex]) {
    cursor: pointer;
}
</style>
<div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" onclick="window.history.go(-1); return false;" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> All Project List </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Admin-Dashboard" ><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Project</li>
                            <li class="breadcrumb-item active">All Project List </li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Running Porject</small>
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
                <?php 
                    $row11 = mysqli_fetch_row(mysqli_query($con,"SELECT MAX(emp_id) FROM users "));
                        $iparr = explode("-", $row11[0]);  
                        if($iparr[1] < 9){$count = $iparr[1] + intval(1);  $vvempid = 'VVT-00'.$count;}
                        elseif($iparr[1] < 99){$count = $iparr[1] + intval(1);  $vvempid = 'VVT-0'.$count;}
                        else{$count = $iparr[1] + intval(1);  $vvempid = 'VVT-'.$count;}
                    ?>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown">
                                <li><a href="New-Project" class="btn btn-info"><i class="icon-plus icon-style" ></i> Add New Project </a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                        <tr class="text-center">     
                                            <th>
                                                <input class="select-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </th>                                       
                                            <th>Project</th>
                                            <th>Client</th>
                                            <th>Deadline</th>
                                            <th>Price</th>
                                            <th>Prograss</th>
                                            <th>Lead</th>
                                            <th>Team</th>
                                            <th>Profit</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $emp_que=mysqli_query($con,"SELECT * FROM vvallproject   ");
                                            $cnt = 1; while($emp=mysqli_fetch_assoc($emp_que)) { 
                                                $fatchemp = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id ='".$emp['team_leader']."' "))
                                                ?>
                                            <tr>
                                                <td class="width45">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                        <span></span><span></span>
                                                </td>
                                                <td class="project-title">
                                                    <h6><?php echo $emp['project_name'];?>  </h6>
                                                    <small>Start Date <span><?php echo date("d F Y", strtotime($emp['project_startdate']));?> </span></small>
                                                </td>
                                                <td class="text-center"><?php echo $emp['client_name'];?></td>
                                                <td class="text-center"><?php echo date("d F Y", strtotime($emp['project_enddate']));?></td>
                                                <td class="project-title text-center">
                                                    <h6><?php echo '<i class="fa fa-inr" ></i>  ' .$emp['projectprice_inr'] ;?></h6>
                                                    <span><?php echo '<i class="fa fa-usd"></i>  '. ($emp['projectprice_doller']);?></span>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                                    </div>
                                                    <small>Completion with: 48%</small>
                                                </td>

                                                <td class="project-title text-center">
                                                    <h6><img src="../assets/user-profile/<?php echo $fatchemp['image'] ;?>" data-toggle="tooltip" data-placement="top" 
                                                    title="Team Lead" alt="Avatar" class="width35 rounded"> </h6>
                                                    <small><b><?php echo $fatchemp['name'] ;?></b></small>
                                                </td>
                                                <td class="project-title text-center">
                                                     <?php $explode_emp=explode(",",$emp['project_team'] );
                                                        $empsalley= 0; $empname = '';?>
                                                    <h6><ul class="list-unstyled team-info">
                                                        <?php  for($d=0;$d<sizeof($explode_emp);$d++){
                                                            $fatcteam = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE 
                                                            id ='".$explode_emp[$d]."' ")); $empsalley += $fatcteam['emp_sallery'];
                                                            $empname .= $fatcteam['name'].' ,';
                                                            ?>
                                                            <li><img src="../assets/user-profile/<?php echo $fatcteam['image'] ;?>" data-toggle="tooltip" data-placement="top" title="Avatar"
                                                                alt="Avatar"></li>
                                                        <?php }?>
                                                    </ul></h6>
                                                    
                                                    <small><b><?php echo $empname?></b></small>
                                                </td>

                                                <td class="project-title text-center">
                                                    <h6>Profit - <?php echo  $emp['projectprice_inr'] - $empsalley .'  <i class="fa fa-inr" ></i>';?>  </h6>
                                                    <small><b>DevloperFee - <span><?php echo '<i class="fa fa-inr" ></i>  ' .$empsalley;?> </span></b></small>
                                                </td>

                                                <td><?php if($emp['project_status'] == '1'){?>
                                                            <span class="badge badge-success" style="cursor: pointer;">Complete</span>
                                                            <?php }elseif($emp['project_status'] == '2'){?>
                                                            <span class="badge badge-danger" style="cursor: pointer;">Bugs</span>
                                                            <?php }elseif($emp['project_status'] == '0'){?>
                                                            <span class="badge badge-danger" style="cursor: pointer;">Running</span>
                                                            <?php }else{?>
                                                                <span class="badge badge-danger" style="cursor: pointer;">pending</span>
                                                            <?php }?>
                                                    </td>
                                                
                                                <td class="project-actions">
                                                <a href="View-Project&ud=<?php echo $emp['id'];?>" class="btn btn-sm" title="View Project Report" ><i class="icon-info"></i></a>
                                                        <a href="Update-Project&ud=<?php echo $emp['id'];?>" class="btn btn-sm" title="Update Project" ><i class="icon-pencil"></i></a>
                                                        <button type="button" class="btn btn-sm js-sweetalert" data-toggle="modal" data-target="#defaultModal"
                                                         title="Delete" data-type="confirm" onclick="deleteemp('<?php echo $emp['id'];?>')"><i class="icon-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php $cnt = $cnt+1; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-modal="true">
    <div class="modal-dialog" role="document">
        <form  action="Admindelete-project" method="POST" >
            <div class="modal-content">
                <input type="hidden" name="delete_id" id="deleteid">
                <div class="modal-body deletetext">Are you sure want to Delete This Project ! </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="icon-trash"></i> Delete</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="icon-close"></i> CLOSE</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script type="text/javascript">
  
    function deleteemp(id){
        $('#deleteid').val(id);
    }


</script>
