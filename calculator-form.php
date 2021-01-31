<?php

?>
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="bg-light p-5 mb-4 outline">
            <div class="form-group">
                <label for="la" class="form-label">Loan Amount is</label>
                <input type="number" name="la" id="la_value" class="la_value form-control" required="" min="0"
                    value="30000">
            </div>
            <div class="form-group">
                <label for="nm" class="form-label">No. of Month is</label>
                <input type="number" name="nm" id="nm_value" class="form-control" value="36">
            </div>
            <div class="form-group">
                <label for="roi" class="form-label">Rate of Interest [ROI] is</label>
                <input type="number" name="roi" id="roi_value" class="form-control" value="12.5">
            </div>
            <button class="btn btn-primary calculatex">Calculate</button>

            <!-- <input type="text" data-slider="true" value="10.2" data-slider-range="8,16" data-slider-step=".05" data-slider-snap="true" id="roi"> -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="bg-light py-3 px-4 mb-4 outline">
            <div class="form-row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <label class="d-block text-right">Monthly Instalment</label>
                    <h2 id="emi" class="pull-right">1,003.61</h2>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <label class="d-block text-right">Total Interest</label>
                    <h2 id="int" class="pull-right">6,129.92</h2>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <label class="d-block text-right">Payable Amount</label>
                    <h2 id="full" class="pull-right">36,129.92</h2>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <label class="d-block text-right">Interest Percentage</label>
                    <h2 id="int_pge" class="pull-right">16.97 %</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <table id="loantable" class="table table-striped table-royal table-responsive"></table>
    </div>
</div>