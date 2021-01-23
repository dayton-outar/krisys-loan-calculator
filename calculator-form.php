<?php

?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="bg-light pinside40 outline col-md-6">
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

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-light pinside30 outline">
                        Monthly Instalment
                        <h2 id="emi" class="pull-right">1,003.61</h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-light pinside30 outline">
                        Total Interest
                        <h2 id="int" class="pull-right">6,129.92</h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-light pinside30 outline">
                        Payable Amount
                        <h2 id="full" class="pull-right">36,129.92</h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-light pinside30 outline">
                        Interest Percentage
                        <h2 id="int_pge" class="pull-right">16.97 %</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <table id="loantable" class="table table-striped table-bordered loantable table-responsive"></table>
    </div>
</div>