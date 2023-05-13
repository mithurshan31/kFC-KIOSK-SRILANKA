<?php include 'partials/_dbconnect.php';?>
<?php 

$date = isset($_GET['date']) ? $_GET['date'] : date("Y-m-d");
?>
<div class="content py-5 px-3 bg-gradient-warning">
    <h2>Daily Sales Reports</h2>
</div>
<div class="row flex-column mt-4 justify-content-center align-items-center mt-lg-n4 mt-md-3 mt-sm-0">
    <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
        <div class="card rounded-0 mb-2 shadow">
            <div class="card-body">
                <fieldset>
                    <legend>Filter</legend>
                    <form action="" id="filter-form">
                        <div class="row align-items-end">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="date" class="control-label">Choose Date</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="date" id="date" value="<?= $date ?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <button class="btn btn-sm btn-flat btn-primary bg-gradient-primary"><i class="fa fa-filter"></i> Filter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
        <div class="card rounded-0 mb-2 shadow">
            <div class="card-header py-1">
                <div class="card-tools">
                    <button class="btn btn-flat btn-sm btn-light bg-gradient-light border text-dark" type="button" id="print"><i class="fa fa-print"></i> Print</button>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid" id="printout">
                    <table class="table table-bordered">
                        <colgroup>
                            <col width="10%">
                            <col width="15%">
                            <col width="20%">
                            <col width="20%">
                            <col width="20%">
                            <col width="15%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="px-1 py-1 text-center">#</th>
                                <th class="px-1 py-1 text-center">Time</th>
                                <th class="px-1 py-1 text-center">Transaction Code</th>
                                <th class="px-1 py-1 text-center">Queue</th>
                                <th class="px-1 py-1 text-center">Processed By</th>
                                <th class="px-1 py-1 text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5" class="text-center">Total Sales</th>
                                
                                <!-- <th class="text-right"><?= format_num($g_total,2) ?> </th>-->
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>