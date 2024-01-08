<?php include('header.php');?>
<center>
    <div class="right_col" role="main">
        <!-- <div class="col-md-12 col-sm-12 col-xs-12"> -->
            <div class="x_panel">
                
                <div class="x_title">
                    <br><br>
                    <h3>ค้นหา ข้อมูลนักศึกษาที่ผ่านการอบรม</h3>
                    <div class="clearfix"></div>
                </div>

                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                        
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="report_id">ถึงปี<span class="required"></span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="report_id" name="report_id" class="form-control col-md-7 col-xs-12" placeholder="กรุณาเลือกปี">
                            </div>
                    </div>
                    <br>
                          
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="submit" class="btn btn-success">ค้นหา</button>
                            </div>

                            </div>
                            <div class="ln_solid"></div>            
                        </form>

                <div class="x_title">
                    <h3>สรุปผู้ที่ผ่านการอบรมต่อปี</h3>
                    <div class="clearfix"></div>
                </div>
                            
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>รายงาน</th>
                                    <th>ข้อมูลผู้สมัคร</th>
                                    <th>ข้อมูลประกาศ</th>
                                    <th>ข้อมูลผู้ผ่านอบรม</th>
                                </tr>
                            </thead>


                            <tbody>
                                <!-- <?php
                             $sql=" select * from reportr";
                                
                                //ค้นหา
                                if(isset($_POST['submit']))
                                {
                                    $date_start=$_POST['date_start'];
                                    $date_end=$_POST['date_end'];
                                    
                                     $sql.=" where";
                                     $sql.=" orderdetail_datetime>='$date_start'";
                                     $sql.=" and";
                                     $sql.=" orderdetail_datetime<='$date_end'";
                                        
                                }
                                
                                //echo $sql;
                                //แสดงข้อมูล
                                $sum[]=0;
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?> -->
                                    <tr>
                                        
                                        <td>
                                            <?=$row['product_name'];?>
                                        </td>
                                        <td>
                                            <?=$row['orderqty'];?>
                                        </td>
                                        <td>
                                            <?=$row['product_price'];?>
                                        </td>
                                        <td>
                                            <?=$sum[]=$row['totalprice'];?>
                                        </td>
                                        <td>
                                            <?=$row['orderdetail_datetime'];?>
                                        </td>
                                        <td>
                                            <?php
                                            switch($row['orderdetail_status']){
                                                case '0':
                                                    echo '<span style="color:green;">จำหน่าย</span>';
                                                    break;

                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                             }
                          ?>
                            </tbody>
                        </table><br>
                    <div><h3><p align=center>รวมเป็นเงิน : <?=number_format(array_sum($sum));?> บาท</p></h3></div>
                    
                    </div>
                </div>
             </div>

    </div>
    </center>