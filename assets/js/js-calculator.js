var btnCalculate = document.getElementsByClassName('calculatex')[0];

btnCalculate.addEventListener('click', function () {
    calculateEMI();
});

function calculateEMI() {
    var loanAmount = document.getElementById('la_value').value;
    var numberOfMonths = document.getElementById('nm_value').value;
    var rateOfInterest = document.getElementById('roi_value').value;
    var monthlyInterestRatio = (rateOfInterest / 100) / 12;


    var top = Math.pow((1 + monthlyInterestRatio), numberOfMonths);
    var bottom = top - 1;
    var sp = top / bottom;
    var emi = ((loanAmount * monthlyInterestRatio) * sp);
    var full = numberOfMonths * emi;
    var interest = full - loanAmount;
    var intPge = (interest / full) * 100;
    var tblIntPge = document.getElementById('int_pge');
    tblIntPge.innerHTML = intPge.toFixed(2) + ' %'; // TODO: Are there better tools to format

    var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ',');

    document.getElementById('emi').innerHTML = emi_str;
    //document.getElementById('la').innerHTML = loanAmount_str;
    //document.getElementById('nm').innerHTML = numberOfMonths;
    //document.getElementById('roi').innerHTML = rateOfInterest;
    document.getElementById('full').innerHTML = full_str;
    document.getElementById('int').innerHTML = int_str;

    var tbl = '<thead><tr class="table-head"><th>Payment No.</th><th>Begining Balance</th><th>Monthly Instalment</th><th>Principal</th><th>Interest</th><th>Ending Balance</th></thead><tbody>';
    var bb = parseInt(loanAmount);
    var int_dd = 0;
    var pre_dd = 0;
    var end_dd = 0;
    for (var j = 1; j <= numberOfMonths; j++) {
        int_dd = bb * ((rateOfInterest / 100) / 12);
        pre_dd = emi.toFixed(2) - int_dd.toFixed(2);
        end_dd = bb - pre_dd.toFixed(2);
        tbl += '<tr><td>' + j + '</td><td>' + bb.toFixed(2) + '</td><td>' + emi.toFixed(2) + '</td><td>' + pre_dd.toFixed(2) + '</td><td>' + int_dd.toFixed(2) + '</td><td>' + end_dd.toFixed(2) + '</td></tr>';
        bb = bb - pre_dd.toFixed(2);
    }
    tbl += '</tbody>';
    document.getElementById('loantable').innerHTML = tbl;
}