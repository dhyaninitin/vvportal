<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/dropify/multipaldropbox.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.left-box{
    border: 2px solid #FEC804;
}
span.select2.select2-container.select2-container--default {
    border: none!important;
    width: 89%!important;
}
@media (max-width: 479px) and (min-width: 240px){
span.select2.select2-container.select2-container--default {
border: none!important;
width: 85%!important;
}
}
@media (max-width: 999px) and (min-width: 768px){
    span.select2.select2-container.select2-container--default {
border: none!important;
width: 82%!important;
}
}

.minuse{color: red!important;font-weight: 600!important;}
.pluse{color: green!important;font-weight: 600!important;}
.deletetext {
    font-size: 20px;
    text-align: center;
    padding: 43px;
}

.card {
    box-shadow: 0px 1px 2px 0px rgb(0 0 0 / 10%);
}
.card .body {
    padding: 15px!important;
}
.p-b-15, .basic-list li, .new_timeline li {
    padding-bottom: 5px!important;
}
.p-t-15, .basic-list li {
    padding-top: 7px!important;
    font-size:16px;
}

.m-b-20, .block-header, .chart.easy-pie-chart-1, .media, .chat-widget li, .weather .city, .plan .list-plan-details, .profilepage_2 .profile-header .profile-image {
    margin-bottom: 8px !important;
}
.timeline-item {
    padding: 3em 3em 1em !important;
    position: relative;
    border-left: 3px solid !important;
    left: 38px!important;
}
</style>
<?php $fatchemp = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM vvallproject WHERE id ='".$_GET['ud']."' "));
 $emp = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id ='".$fatchemp['team_leader']."' "));?>
 <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">

                <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" onclick="window.history.go(-1); return false;" class="btn btn-xs btn-link btn-toggle-fullwidth">
                        <i class="fa fa-arrow-left"></i></a> Update (<?php echo $fatchemp['project_name'];?>) Project</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Projects</li>
                            <li class="breadcrumb-item active">Update (<?php echo $fatchemp['project_name'];?>) Project</li>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-3 left-box">
                                    <div class="card">
                                        <div class="header text-center">
                                            <h2 class="m-b-0">About Clients</h2>
                                            <h4 class="m-b-0"><strong class="clientnametext"></strong> </h4>
                                        </div>
                                    </div> 

                                    <div class="card">
                                        <div class="body">
                                            <h5 class="projectnametxt"></h5>
                                            <p class="projectdescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                            Lorem Ipsum has been the industry's standard dummy .</p>
                                            <div class="progress-container progress-info m-b-25">
                                                <span class="progress-badge">Project Status</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                                        <span class="progress-value">78%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="body">
                                            <ul class=" list-unstyled basic-list">
                                                <li><b>Start Date :</b> <span ><span class="date"></sapn> </span></li>
                                                <li><b>Project Price :</b><span class="inrprice"></span></li>
                                                <li><b>Devloper Fees :</b> <span ><i class="fa fa-inr"></i><span class="devfee">00.00</span></span></li>
                                                <li><b>Profit :</b><span class="addprof"><i class="fa fa-inr"></i><span class="pro-profit">00.00</span></span></li>
                                                <li><b>Deadline :</b><span class="project-enddate"></span></li>
                                                <li><b>Totel Days :</b> <span class="toteldays"></span></li>
                                                <li><b>Left Days :</b><span class="left-days"> <span class="leftdays"></span> </span></li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="header">
                                            <h2>Assigned Team</h2>
                                        </div>
                                        <div class="body">
                                            <div class="w_user">
                                                <span ><img class="rounded-circle teamleaderimg" src="../assets/images/sm/avatar4.jpg" alt=""></sapn>
                                                <div class="wid-u-info">
                                                    <h5 class="teamleadertext"></h5>
                                                    <span class="teamleaderemail">info@thememakker.com</span>
                                                    <p class="text-muted m-b-0">Project Lead</p>                                    
                                                </div>
                                                <hr>
                                            </div>
                                            <ul class="right_chat list-unstyled mb-0 add-team">

                                            </ul>
                                        </div>
                                    </div>
                                  
                                </div>
                                
                                
                                
                                <div class="col-sm-9">
                                    <div class="row clearfix" style="display:none;">
                                   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input type="text" id="projectname" name="projectname" value="<?=$fatchemp['project_name']?>" class="form-control" 
                                                placeholder="Project Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Client Name</label>
                                                <input type="text" id="clientname" name="clientname" value="<?=$fatchemp['client_name']?>" class="form-control" 
                                                placeholder="Client Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Start date</label>
                                                <input type="text" data-provide="datepicker" id="startprojectdate" value="<?=date("m/d/Y", strtotime($fatchemp['project_startdate']))?>" 
                                                 name="startdate" data-date-autoclose="true" class="form-control"
                                                 placeholder="Start date *" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="text" id="endprojectdate" autocomplete="off" value="<?=date("m/d/Y", strtotime($fatchemp['project_enddate']))?>" 
                                                name="end_date" data-provide="datepicker" data-date-autoclose="true" 
                                                class="form-control" placeholder="End date *">
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Doller Price </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-usd"></i></span>
                                                    </div>
                                                    <input type="text" id="dollerprice" name="dollerprice" value="<?=$fatchemp['pro_dollerprice']?>" 
                                                    class="form-control" placeholder="Doller Price  *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Enter Project Price </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-usd"></i></span>
                                                    </div>
                                                    <input type="text" id="projectprice" name="projectprice" value="<?=$fatchemp['projectprice_doller']?>" 
                                                    class="form-control" placeholder="Enter Project Price  *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <label> Team Leader</label>
                                            <div class="form-group">                                        
                                                <select class="form-control show-tick" id="teamleader" name="teamleader">
                                                <option value="<?=$emp['id'];?>,<?=$emp['name'];?>"> <?=$emp['name'];?> </option>
                                                <?php $emp_que=mysqli_query($con,"SELECT * FROM users WHERE user_type != 'superAdmin' AND user_type != 'HR' ");
                                                while($emp=mysqli_fetch_assoc($emp_que)) { ?>
                                                    <option value="<?php echo $emp['id'];?>,<?php echo $emp['name'];?>"><?php echo $emp['name'];?></option>
                                                <?php }?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <label>Select Team</label>
                                            <div class="form-group">                                        
                                                <select name="employeteam[]" id="Brand_namee" class="form-control Brand_namee" multiple="multiple" 
                                                onchange="getemployeevalue(this.value)">
                                                    <?php $emp_que=mysqli_query($con,"SELECT * FROM users WHERE user_type != 'superAdmin'  ");
                                                    // $emp_que=mysqli_query($con,"SELECT * FROM users WHERE user_type != 'superAdmin' AND user_type != 'HR' ");
                                                    while($emp=mysqli_fetch_assoc($emp_que)) { ?>
                                                        <option value="<?php echo $emp['id'];?>"><?php echo $emp['name'];?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        

                                        <!-- <div class="col-12">
                                            <div class="body">               
                                                    <div id="dropzoneid" class="dropzone">                 
                                                        <div class="fallback">
                                                            <input  type="file" name="file[]" multiple  id="drop_img"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <input type="hidden" name="image_name" id="imgname">
                                        </div>  -->

                                        <div class="col-12">
                                            <label>Project Description</label>
                                            <textarea class="form-control"  id="description" name="proejct_desc" rows="7" cols="6" 
                                            placeholder="Write project description"><?=$fatchemp['project_description']?></textarea>
                                        </div>                               
                                
                                    </div>

                                    <!-- New div and new calculation start -->
                                    <div class="card">
                                        <div class="header">
                                            <h2>Project Activity</h2>
                                        </div>
                                        <div class="body">
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            </div>
                                            <div class="post-toolbar-b">
                                                <button class="btn btn-warning"><i class="icon-paper-clip text-light"></i></button>
                                                <button class="btn btn-warning"><i class="icon-camera text-light"></i></button>
                                                <button class="btn btn-primary">Add</button>
                                            </div>                            
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="body">
                                            <div class="timeline-item green">
                                                <span class="date">Just now</span>
                                                <h6>iNext - One Page Responsive Template</h6>
                                                <span>Project Lead: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                            </div>        
                                            <div class="timeline-item warning">
                                                <span class="date">02 Jun 2018</span>
                                                <h6>Add Team Members</h6>
                                                <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                                <div class="msg">
                                                    <p>web by far While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                                    <ul class="list-unstyled team-info">
                                                        <li><img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Chris Fox" alt="Avatar"></li>
                                                        <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Joge Lucky" alt="Avatar"></li>
                                                        <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Folisise Chosielie" alt="Avatar"></li>
                                                        <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Joge Lucky" alt="Avatar"></li>
                                                    </ul>
                                                    <div class="top_counter">
                                                        <div class="icon"><i class="fa fa-file-word-o"></i> </div>
                                                        <div class="content">
                                                            <p class="mb-1">iNext project documentation.doc</p>
                                                            <span>Size: 2.3Mb</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-item warning">
                                                <span class="date">02 Jun 2018</span>
                                                <h6>Task Assigned</h6>
                                                <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                                <div class="msg">
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                                    <div class="media">
                                                        <img class="media-object rounded width40 mr-3" src="../assets/images/xs/avatar1.jpg" alt="" />
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Folisise Chosielie</h6>
                                                            <p class="mb-0"><strong>Detail:</strong> Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="media-object rounded width40 mr-3" src="../assets/images/xs/avatar5.jpg" alt="" />
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Joge Lucky</h6>                                            
                                                            <p class="mb-0"><strong>Detail:</strong> Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>        
                                            <div class="timeline-item warning">
                                                <span class="date">02 Jun 2018</span>
                                                <h6>Add new code on GitHub</h6>
                                                <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Folisise Chosielie</a></span>
                                                <div class="msg">
                                                    <!-- <div class="alert alert-success mb-3" role="alert">Code Update Successfully in GitHub</div> -->
                
                                                </div>
                                            </div>
                                            <div class="timeline-item danger">
                                                <span class="date">04 Jun 2018</span>
                                                <h6>Project Reports</h6>
                                                <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                                <div class="msg">
                                                    <ul class="list-unstyled">
                                                        <li class="mb-2">
                                                            <span>Design Bug</span>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%;"></div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span>UI UX Design Task</span>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span>Developer Task</span>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%;"></div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span>QA (Quality Assurance)</span>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                                            </div>
                                                        </li>                                      
                                                    </ul>                                         
                                                </div>
                                            </div>
                                            <div class="timeline-item dark">
                                                <span class="date">05 Jun 2018</span>
                                                <h6>Project on Goinng</h6>
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script>

    const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
            const d = new Date(); $(".monthnmame").html(monthNames[d.getMonth()] +'       '+ d.getFullYear()  );
            $(".date").html(d.getDate());
                var weekday = new Array(7);
                    weekday[0] = "Sunday";weekday[1] = "Monday"; weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";weekday[4] = "Thursday"; weekday[5] = "Friday";
                    weekday[6] = "Saturday";
                    $(".weekenname").html(weekday[d.getDay()]);
                    

        // onload chnage value
    $( document ).ready(function() {
        
        var team = '<?=$fatchemp['project_team']?>';
        sl=team.split(',');
        $('#Brand_namee option').each(function(){
            if(sl.includes($(this).val())){
             $(this).prop('selected', true);
            }
            else {
             $(this).prop('selected', false);

            }
        })
        $('#Brand_namee').select2({
            placeholder: 'Select an option'
        });

        getemployeevalue(team);

        $(".inrprice").html('<i class="fa fa-inr"></i> ' + ($('#dollerprice').val() * $('#projectprice').val()).toFixed().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );

        $('.projectnametxt').html($('#projectname').val());
        $('.clientnametext').html($('#clientname').val());
        $('.projectdescription').html($('#description').val());
        var ledername = $('#teamleader').val();

        // $('.teamleadertext').html(ledername.split(",").pop());
        $('.teamleadertext').html(function(){
            $.ajax({
                url:"fatch-emp-teamleader",
                type:"POST",
                data: {teamdata:ledername},
                success:function(done){
                    console.log(done)
                    let fatchleader  = JSON.parse(done);
                    // console.log(fatchleader.name);
                    $('.teamleadertext').html(fatchleader.name);
                    $(".teamleaderimg").attr("src", "../assets/user-profile/"+ fatchleader.image +" ");
                    $('.teamleaderemail').html(fatchleader.email);

                }
            });       
            
        });

        // console.log(ledername);

        $('#startprojectdate').html(function(){
                var updatestartday = $('#startprojectdate').val();
               
            if(updatestartday == ''){
                $(".date").html(d.getDate()); 
            }else{
                var mydate = new Date(updatestartday); 
                if(mydate.getDate().toString().length == '1'){ starttttttdate = '0'+ mydate.getDate();
                            }else{ starttttttdate = mydate.getDate();  }
            
                // $(".monthnmame").html(monthNames[mydate.getMonth()] +'       '+ mydate.getFullYear()  );
                $(".weekenname").html(weekday[mydate.getDay()]);
                $(".date").html(starttttttdate +' '+ monthNames[mydate.getMonth()] +' '+ mydate.getFullYear() );
            }
        });

        $("#endprojectdate").html(function(){
            var endprodate = new Date($('#endprojectdate').val());
            // console.log(endprodate);
            if(endprodate.getDate().toString().length == '1'){ endtttttdate = '0'+ endprodate.getDate();
                            }else{ endtttttdate = endprodate.getDate();  }
            var enddddd = monthNames[endprodate.getMonth()] + ' ' + endtttttdate + ' ' +  endprodate.getFullYear() +' '  ;
            $(".project-enddate").html(enddddd);
        });
        var dateFirst = new Date($('#startprojectdate').val());
            var dateSecond = new Date($('#endprojectdate').val());

        chekdatelift(dateFirst,dateSecond);

       
            
    });


    // onchnage vlaue chnage

        

                $("#projectname").change(function(){ $('.projectnametxt').html(this.value);});
                $("#clientname").change(function(){ $('.clientnametext').html(this.value);});
                $("#teamleader").change(function(){ $('.teamleadertext').html(this.value.split(",").pop()); });

                $("#endprojectdate").change(function(){
                    var endprodate = new Date(this.value);
                    // console.log(endprodate);
                    if(endprodate.getDate().toString().length == '1'){ endtttttdate = '0'+ endprodate.getDate();
                            }else{ endtttttdate = endprodate.getDate();  }
                    var enddddd = monthNames[endprodate.getMonth()] + ' ' + endtttttdate + ' ' +  endprodate.getFullYear() +' ' + '[' + weekday[endprodate.getDay()] + ']'  ;
                   $(".project-enddate").html(enddddd);

                            var dateFirst = new Date($('#startprojectdate').val());
                            var dateSecond = endprodate;
                            chekdatelift(dateFirst,endprodate);
                });

                $("#startprojectdate").change(function(){

                    var mydate = new Date(this.value);
                    // console.log(mydate.getDate().toString().length);
                        if(mydate.getDate().toString().length == '1'){ starttttttdate = '0'+ mydate.getDate();
                        }else{ starttttttdate = mydate.getDate();  }
                            $(".monthnmame").html(monthNames[mydate.getMonth()] +'       '+ mydate.getFullYear()  );
                            $(".weekenname").html(weekday[mydate.getDay()]);
                            $(".date").html(starttttttdate);

                        var dateFirstt = new Date($('#startprojectdate').val());
                        var dateSecondd = new Date($('#endprojectdate').val());
                        chekdatelift(dateFirstt,dateSecondd);
                });

               
                
                var devlopperfee = 0;
                function getemployeevalue(sel){
                   var valuee = $(".Brand_namee").val();
                        var opts = [];
                        for (var i = 0; i < valuee.length; i++) {
                            // console.log(valuee[i]);
                            opts.push(valuee[i]);
                        }
                        $.ajax({
                            url:"fatch-emp-sallery",
                            type:"POST",
                            data: {empvalue:opts},
                                success:function(success){
                                    // console.log( success);
                                    let unitsss  = JSON.parse(success);
                                    var empsallery = 0; var empimg = ''; var empnmae = '';
                                        unitsss.forEach(function (unitssss){
                                            empsallery +=  parseInt(unitssss.sallery); 
                                            empnmae += unitssss.name + ', ';
                                            empimg += `<li class="online"><a href="javascript:void(0);"><div class="media"><img class="media-object " 
                                            src="../assets/user-profile/`+unitssss.img +`" alt=""><div class="media-body"><span class="name">`+ unitssss.name+` [ `+unitssss.sallery +` <i class="fa fa-inr"></i> ]</span>
                                            <span class="message">`+ unitssss.role +`</span></div></div></a></li>`;
                                        });
                                            $('.add-team').html(empimg);
                                            $('.devfee').html(empsallery.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                                            $('.temaname').html(empnmae);

                                            if(projectfee == ''){
                                                projectfee = ($('#dollerprice').val() * $('#projectprice').val()).toFixed(2);
                                            }
                                            // console.log(projectfee);
                                            devlopperfee = parseInt(empsallery);
                                            var profit = parseInt(projectfee) - parseInt(empsallery);
                                            if (profit > 0) {
                                                $(".pro-profit").html(profit.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); 
                                                $(".addprof").addClass('pluse'); $(".addprof").removeClass('minuse');
                                            }else{
                                                $(".pro-profit").html(profit.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                                                $(".addprof").addClass('minuse'); $(".addprof").removeClass('pluse');
                                            }

                                }
                        });

                }

                var projectfee = 0;
                $("#projectprice").change(function(){
                    $(".inrprice").html('<i class="fa fa-inr"></i> ' + ($('#dollerprice').val() * this.value).toFixed().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
                    projectfee = ($('#dollerprice').val() * this.value).toFixed();
                    // console.log(devlopperfee);
                            var profitt = parseInt(projectfee) - parseInt(devlopperfee);
                                    if (profitt > 0) {
                                        $(".pro-profit").html(profitt.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); 
                                        $(".addprof").addClass('pluse'); $(".addprof").removeClass('minuse');
                                    }else{
                                        $(".pro-profit").html(profitt.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                                        $(".addprof").addClass('minuse'); $(".addprof").removeClass('pluse');
                                    }

                });

               //days diff
                function chekdatelift(startdate,enddate){
                  

                    // var dateFirst = new Date($('#startprojectdate').val());
                    //     var dateSecond = new Date($('#endprojectdate').val());
                        var dateFirst = new Date(startdate);
                        var dateSecond = new Date(enddate);
                        // time difference
                        var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());
                        // days difference
                        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
                        // difference
                        $('.toteldays').html(diffDays + ' Days' ); 
                        //  console.log('totel days',diffDays);

                        // var currentdate = new Date('05/23/2021');
                        var currentdate = new Date();
                        var currenttimeDiff = Math.abs(currentdate.getTime() - dateSecond.getTime());
                        var leftdays = Math.ceil(currenttimeDiff / (1000 * 3600 * 24));
                        // var leftdaysss = 0;
                        // console.log(leftdays.length);
                        if(leftdays.toString().length == '1'){ leftdays = '0' + leftdays; }else{leftdays = leftdays;  }
                        // console.log(leftdays);
                            $('.leftdays').html(leftdays + ' Days');
                        // console.log('Left days',leftdays);
                        var cal = (diffDays / 2) / 2 ;
                        //  console.log('alertdays',cal.toFixed(0)  );
                        if(cal.toFixed(0) >= leftdays){
                            // console.log('small');
                        return $('.left-days').addClass('minuse');$('.left-days').removeClass('pluse');
                        }else{
                            return $('.left-days').addClass('pluse');$('.left-days').removeClass('minuse');
                            //  console.log('big');
                        }
                }


     
    </script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript">
// $('#Brand_namee').select2({
// placeholder: 'Select Brand'
// // console.log($('.Brand_namee').select2().val());
// });

    // $('.Brand_namee').on("select2:select", function (e) {
    //     // placeholder: 'Select Brand'     

    // console.log($('.Brand_namee').select2().val()); 
                
    // });
</script>

<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

<script src="../assets/dropify/multipaldrop.js"></script>
<script>
    $('#multiselect3-all').multiselect({
        includeSelectAllOption: true,
    });
</script>
<script type="text/javascript">
     var newarray = [];
    var image_name = [];
    var myDropzone = new Dropzone("div#dropzoneid", { url: "form.php",method:"post",autoProcessQueue:false,uploadMultiple:true,parallelUploads:10,
    maxFiles:12, dictDefaultMessage: "Drop Project file here to upload",});
    newarray.push(myDropzone);
  myDropzone.on("sending", function(file, xhr, formDataa) {
    image_name.push(file.name);
  });
</script>

