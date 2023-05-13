<?php 
if(isset($_POST['sdate'])){
$sdate = $_POST['sdate'];
}
else {
    $sdate = date("Y-m-d");
}
if(isset($_POST['edate'])){
    $edate = $_POST['edate'];
    }
    else {
        $edate = date("Y-m-d");
    }
?>
<?php
include "./partials/_dbconnect.php";
include 'C:\xampp\htdocs\kfc-kiosk\chef\partials\_nav.php';
?>
<div class="container" style="margin-top:98px;background: aliceblue;">
    <div class="table-wrapper">
        <div class="table-title" style="border-radius: 14px;">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Daily Sales <b>Report</b></h2>
                </div>
                <div class="col-sm-8">						
                    <a href="" class="btn btn-primary"><i class="material-icons">&#xE863;</i> <span>Refresh List</span></a>
                    <a href="#" onclick="window.print()" class="btn btn-info"><i class="material-icons">&#xE24D;</i> <span>Print</span></a>
                </div>
                <div style="margin:10px;">
                <form action="index.php?page=reportManage" id="dateForm"  method="POST">
                                <div class="form-group">
                                Choose Date: <br>
                                    <label for="sdate"> from :</label>
                                    <input type="date" name="sdate" id="sdate" value="<?= $sdate ?>" required="required">

                                    <label for="edate">to : </label>
                                    <input type="date" name="edate" id="edate" value="<?= $edate ?>" required="required">
                                    <button ><i class="fa fa-filter"></i> Filter</button>
                                </div>
                                
                                <?php
                                 $sql = "SELECT * FROM `orders`
                                 where date(orderDate) between '{$sdate}' and '{$edate}'
                                 ";
                                 $result = mysqli_query($conn, $sql);
                                 $counter = 0;
                                 $totalSales=0;
                                 $numDELIVERED=0;
                                 while($row = mysqli_fetch_assoc($result)){
                                     $amount = $row['amount'];
                                     $orderStatus = $row['orderStatus'];
                                     $counter++;
                                     
                                     $totalSales+=$amount;
                                     if($orderStatus==2 || $orderStatus==1 )
                        {
                            $numDELIVERED++;
                        }
                                     
                                 }
                                 echo '<div style="border:solid;margin:20px; align-text:center;padding:20px">
                                 <H5>
                                 <table>
                                 <tr> 
                                 <th> DATE &nbsp;</th><th>:&nbsp;'. $sdate . ' to ' . $edate .'</th>
                                 </tr>
                                 
                                 <th>NUMBER OF ORDERS PLACED&nbsp;</th><th>:&nbsp;'.$counter .'</th>
                                 </tr> 
                                 <tr>
                                 <th>NUMBER OF ORDERS DELIVERED&nbsp;</th><th>:&nbsp;'.$numDELIVERED .'</th>
                                 </tr> 

                                 <tr>
                                 <th>TOTAL AMOUNT OF SALES&nbsp;</th><th>:&nbsp;'.$totalSales .' Rs.</th>
                                 </tr> 
                                 <tr>
                                 </table></H5></div>'; ?>
                                 
                    </form>
                                </div>
            </div>
        </div>
        
        <table class="table table-striped table-hover text-center" id="NoOrder">
            <thead style="background-color: rgb(111 202 203);">
                <tr>
                    <th>Order Id</th>
                    <th>User Id</th>
                    <th>Amount</th>						
                    <th>Order Date</th>	
                    <th>current Status</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM `orders`
                    where date(orderDate) between '{$sdate}' and '{$edate}'
                    ORDER BY orderId DESC";
                    $result = mysqli_query($conn, $sql);
                    $counter = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $Id = $row['userId'];
                        $orderId = $row['orderId'];
                        $amount = $row['amount'];
                        $orderDate = $row['orderDate'];
                        $orderStatus = $row['orderStatus'];
                        $counter++;

                        if($orderStatus==1){
                            $cStatus="ready!";
                        }
                        elseif($orderStatus==2)
                        {
                            $cStatus="collected!";
                        }
                        else{
                            $cStatus="Preparing!";
                        }

                        
                        echo '<tr>
                                <td>' . $orderId . '</td>
                                <td>' . $Id . '</td>
                                <td>' . $amount . '</td>
                                <td>' . $orderDate . '</td>
                                <td>' . $cStatus . '</td>
                                
                            </tr>';
                    }
                    if($counter==0) {
                        ?><script> document.getElementById("NoOrder").innerHTML = '<div class="alert alert-info alert-dismissible fade show" role="alert" style="width:100%"> You have not Recieve any Order!	</div>';</script> <?php
                    } 
                ?>
            </tbody>
        </table>
    </div>
</div> 

<?php
    include 'partials/_orderItemModal.php';
    include 'partials/_orderStatusModal.php';
?>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
    .tooltip.show {
        top: -62px !important;
    }
    
    .table-wrapper .btn {
        float: right;
        color: #333;
        background-color: #fff;
        border-radius: 3px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }
    .table-wrapper .btn:hover {
        color: #333;
        background: #f2f2f2;
    }
    .table-wrapper .btn.btn-primary {
        color: #fff;
        background: #03A9F4;
    }
    .table-wrapper .btn.btn-primary:hover {
        background: #03a3e7;
    }
    .table-title .btn {		
        font-size: 13px;
        border: none;
    }
    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }
    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }
    .table-title {
        color: #fff;
        background: #4b5366;		
        padding: 16px 25px;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
    }
    table.table tr th:first-child {
        width: 60px;
    }
    table.table tr th:last-child {
        width: 80px;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        /* background-color: #fcfcfc; */
    }
    table.table-striped.table-hover tbody tr:hover {
        /* background: #f5f5f5; */
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
    }
    table.table td a:hover {
        color: #2196F3;
    }
    table.table td a.view {        
        width: 30px;
        height: 30px;
        color: #2196F3;
        border: 2px solid;
        border-radius: 30px;
        text-align: center;
    }
    table.table td a.view i {
        font-size: 22px;
        margin: 2px 0 0 1px;
    }   
    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }
    table {
        counter-reset: section;
    }

    .count:before {
        counter-increment: section;
        content: counter(section);
    }
    

</style>


