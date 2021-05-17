<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/dropify/multipaldropbox.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.left-box{
    border: 2px solid #FEC804;
}

</style>
<style type="text/css">
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
</style>
 <?php $fatchemp = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM vvallproject WHERE id ='".$_GET['ud']."' "));
 $emp = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id ='".$fatchemp['team_leader']."' "));?>
 <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">

                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" onclick="window.history.go(-1); return false;" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Update (<?php echo $fatchemp['project_name'];?>) Project</h2>
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
                                <div class="col-sm-3">
                               
                                    <div class="body left-box">
                                        <div class="new_timeline">
                                            <div class="header">
                                                <div class="color-overlay">
                                                    <div class="day-number date">8</div>
                                                    <div class="date-right">
                                                    <div class="day-name weekenname"></div>
                                                    <div class="month monthnmame">February 2018</div>
                                                    </div>
                                                </div>                                
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="bullet green"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="projectnametxt"><?=$fatchemp['project_name']?></h3>
                                                        <h4>Project Name</h4>
                                                    </div>
                                                </li>
                                                
                                                <li>
                                                    <div class="bullet pink"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="clientnametext"><?=$fatchemp['client_name']?></h3>
                                                        <h4>Client Name</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet orange"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="teamleadertext"><?=$emp['name'];?></h3>
                                                        <h4>Team Leader</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet v2"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <!-- <h3>Developer Team</h3> -->
                                                        <h4>Developer Team</h4>
                                                        <ul class="list-unstyled team-info margin-0 p-t-5 add-team" >                                            
                                                            <!-- <li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>
                                                            <li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>
                                                            <li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>
                                                            <li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>                                             -->
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="bullet v3"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc ">
                                                        <h3 class="inrprice"><i class="fa fa-inr"></i>00.00</h3>
                                                        <h4>Project Price</h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="bullet green"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                    <h3 class="inrprice"><i class="fa fa-inr"></i>00.00</h3>
                                                        <h4>Devloper Fees</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet pink"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="inrprice"><i class="fa fa-inr"></i>00.00</h3>
                                                        <h4>Profit</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet v2"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="project-enddate"></h3>
                                                        <h4>End Date</h4>
                                                    </div>
                                                </li>
                                            </ul>

                                            
                                        </div>
                                    </div>

                                </div>
                                
                                
                                
                                <div class="col-sm-9">
                                    <form action="Admin-Update-project" method="POST" > 
                                    <div class="row clearfix">
                                   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input type="text" id="projectname" name="projectname" value="<?=$fatchemp['project_name']?>" class="form-control" placeholder="Project Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Client Name</label>
                                                <input type="text" id="clientname" name="clientname" value="<?=$fatchemp['client_name']?>" class="form-control" placeholder="Client Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Start date</label>
                                                <input type="text" data-provide="datepicker" name="startdate" value="<?=date("m/d/Y", strtotime($fatchemp['project_startdate']))?>"  data-date-autoclose="true" 
                                                class="form-control" placeholder="Start date *">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="text" id="endprojectdate" name="end_date" value="<?=date("m/d/Y", strtotime($fatchemp['project_enddate']))?>"  data-provide="datepicker" 
                                                data-date-autoclose="true" class="form-control" placeholder="End date *">
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Doller Price </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-usd"></i></span>
                                                    </div>
                                                    <input type="text" id="dollerprice" name="dollerprice" value="<?=$fatchemp['pro_dollerprice']?>" class="form-control" placeholder="Doller Price  *">
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
                                                    <input type="text" id="projectprice" name="projectprice"  value="<?=$fatchemp['projectprice_doller']?>" class="form-control" placeholder="Enter Project Price  *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <label> Team Leader</label>
                                            <div class="form-group">                                        
                                                <select class="form-control show-tick" id="teamleader" name="teamleader">
                                                <option value="<?=$emp['id'];?>"> <?=$emp['name'];?> </option>
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
                                                <select name="employeteam[]" id="Brand_namee" class="form-control" onChange="getemployeevalue(this.value)" multiple="multiple">
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
                                            <textarea class="form-control" name="proejct_desc"  rows="7" cols="6"
                                             placeholder="Write project description"><?=$fatchemp['project_description']?></textarea>
                                        </div>                               
                                    


                                        <div class="col-sm-12">
                                            <div class="mt-4" style="float: right;">
                                                <button type="submit" class="btn btn-primary"><i class="icon-plus icon-style" ></i> Update Project</button>
                                                <button type="submit" class="btn btn-outline-secondary"><i class="icon-close"></i> CLOSE</button>
                                            </div>
                                        </div>
                                                      

                                    </div>
                                    </form>  
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

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
     
    });

// Brand_namee
        const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
            const d = new Date(); $(".monthnmame").html(monthNames[d.getMonth()] +'       '+ d.getFullYear()  );
            $(".date").html(d.getDate());
                var weekday = new Array(7);
                    weekday[0] = "Sunday";weekday[1] = "Monday"; weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";weekday[4] = "Thursday"; weekday[5] = "Friday";
                    weekday[6] = "Saturday";
                    $(".weekenname").html(weekday[d.getDay()]);

                $("#projectname").change(function(){ $('.projectnametxt').html(this.value);});
                $("#clientname").change(function(){ $('.clientnametext').html(this.value);});
                $("#teamleader").change(function(){ $('.teamleadertext').html(this.value.split(",").pop()); });
                $("#endprojectdate").change(function(){
                   $(".project-enddate").html(this.value);
                });

                // function getemployeevalue(sel){
                //     var opts = [],
                //             opt;
                //         var len = sel.options.length;
                //         for (var i = 0; i < len; i++) {
                //             opt = sel.options[i];

                //             if (opt.selected) {
                //             opts.push(opt);
                //             console.log(opt.value);
                //             // alert(opt.value);
                //             }
                //         }

                //         return opts;

                // }
                // var numArray = [];
                // $("#Brand_namee").change(function(){ 
                //     // console.log(this.value)
                //     // numArray.push(this.value);
                //     console.log($("input[name='employeteam']").val());
                //     // console.log(numArray);


                //     $('.add-team').append('<li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>');
                //     // console.log(this.value); 
                // });

                var dollerprice = '';
                $("#dollerprice").change(function(){
                    dollerprice = this.value;
                })
                $("#projectprice").change(function(){
                    $(".inrprice").html('<i class="fa fa-inr"></i> ' + (dollerprice * this.value).toFixed(2) );
                });
     
    </script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript">
// $('#Brand_namee').select2({
// placeholder: 'Select Brand'
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

