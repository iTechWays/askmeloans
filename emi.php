<?php
include "includes/header.php";
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="assets/simple-slider.js"></script>
<link href="assets/simple-slider.css" rel="stylesheet" type="text/css" />


<div class="row">
    <div class="col-sm-12 text-center">
        <button id="btnSearch" class="btn btn-primary btn-md center-block" Style="width: 100px;" OnClick="btnSearch_Click" >Home Loan</button>
         <button id="btnClear" class="btn btn-primary btn-md center-block" Style="width: 120px;" OnClick="btnClear_Click" >Business Loan</button>
     </div>
</div>
<style>
#btnSearch,
#btnClear{
    display: inline-block;
    vertical-align: top;
}
</style>
<h4><span class="label label-primary">Loan Amount is <strong><span class ='' id="la_value">260000</span></strong></span></h4>	

<input type="text" data-slider="true" value="260000" data-slider-range="100000,5000000" data-slider-step="10000" data-slider-snap="true" id="la">

<h4><span class="label label-danger">No. of Month is <strong><span class =''  id="nm_value">36</span> </strong></span></h4>
<input type="text" data-slider="true" value="36" data-slider-range="12,300" data-slider-step="1" data-slider-snap="true" id="nm">

<h4><span class="label label-warning">Rate of Interest [ROI] is <strong><span class ='' id="roi_value">10.2</span></strong></span> </h4>

<input type="text" data-slider="true" value="10.2" data-slider-range="3,36" data-slider-step=".05" data-slider-snap="true" id="roi">


<script type="text/Javascript">	
		$(document).ready(function(){
			$("#la").bind(
				"slider:changed", function (event, data) {				
					$("#la_value").html(data.value.toFixed(0)); 
					calculateEMI();
				}
			);

			$("#nm").bind(
				"slider:changed", function (event, data) {				
					$("#nm_value").html(data.value.toFixed(0)); 
					calculateEMI();
				}
			);
			
			$("#roi").bind(
				"slider:changed", function (event, data) {				
					$("#roi_value").html(data.value.toFixed(2)); 
					calculateEMI();
				}
			);
			
			function calculateEMI(){
				var loanAmount = $("#la_value").html();
				var numberOfMonths = $("#nm_value").html();
				var rateOfInterest = $("#roi_value").html();
				var monthlyInterestRatio = (rateOfInterest/100)/12;
				
				var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
				var bottom = top -1;
				var sp = top / bottom;
				var emi = ((loanAmount * monthlyInterestRatio) * sp);
				var full = numberOfMonths * emi;
				var interest = full - loanAmount;
				var int_pge =  (interest / full) * 100;
				$("#tbl_int_pge").html(int_pge.toFixed(2)+" %");
				//$("#tbl_loan_pge").html((100-int_pge.toFixed(2))+" %");
				
				var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				$("#emi").html(emi_str);
				$("#tbl_emi").html(emi_str);
				$("#tbl_la").html(loanAmount_str);
				$("#tbl_nm").html(numberOfMonths);
				$("#tbl_roi").html(rateOfInterest);
				$("#tbl_full").html(full_str);
				$("#tbl_int").html(int_str);
				var detailDesc = "<thead><tr class='success'><th>Payment No.</th><th>Begining Balance</th><th>EMI</th><th>Principal</th><th>Interest</th><th>Ending Balance</th></thead><tbody>";
				var bb=parseInt(loanAmount);
				var int_dd =0;var pre_dd=0;var end_dd=0;
				for (var j=1;j<=numberOfMonths;j++){
					int_dd = bb * ((rateOfInterest/100)/12);
					pre_dd = emi.toFixed(2) - int_dd.toFixed(2);
					end_dd = bb - pre_dd.toFixed(2);
					detailDesc += "<tr><td>"+j+"</td><td>"+bb.toFixed(2)+"</td><td>"+emi.toFixed(2)+"</td><td>"+pre_dd.toFixed(2)+"</td><td>"+int_dd.toFixed(2)+"</td><td>"+end_dd.toFixed(2)+"</td></tr>";
					bb = bb - pre_dd.toFixed(2);
				}
					detailDesc += "</tbody>";
				$("#illustrate").html(detailDesc);
				 $('#container').highcharts({
				 
						chart: {
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'EMI Calculator'
						},
						tooltip: {
							//pointFormat: '{series.name}: <b>{point.value}%</b>'
						},
						plotOptions: {
							pie: {
								allowPointSelect: true,
								cursor: 'pointer',
								dataLabels: {
								//	enabled: true,
									color: '#000000',
									connectorColor: '#000000',
									format: '<b>{point.name}</b>: {point.percentage:.1f} %'
								}
							}
						},
						series: [{
							type: 'pie',
							name: 'Amount',
							data: [
								['Loan',   eval(loanAmount)],
								['Interest',       eval(interest.toFixed(2))]
							]
						}]
					});			
			
			}
			calculateEMI();

		});
		
		
	</script>
	
	
	<div class="alert alert-info col-md-5 ">									  
									  <center><strong>Monthly EMI</strong> <BR>
									  <button type="button" class="btn btn-success btn-lg" id='emi'></button></center>
									</div>
									
									<div class="alert alert-info col-md-5">									  
									  <center><strong>Total Interest</strong> <BR>
									  <button type="button" class="btn btn-warning btn-lg" id='tbl_int'></button></center>
									</div>
									
									
									<div class="alert alert-info col-md-5 ">									  
									  <center><strong>Payable Amount</strong> <BR>
									  <button type="button" class="btn btn-info btn-lg" id='tbl_full'></button>
									  </center>
									</div>

									<div class="alert alert-info col-md-5 ">									  
									  <center>
									  <strong>Interest Percentage</strong><BR>
									  <button type="button" class="btn btn-info btn-lg" id='tbl_int_pge'></button>
									  </center>
									</div>
									
									<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <!--<section class="content-header">
                    <h1>
					EMI Calculator
                        
                        <small>Finance</small>
						
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li>Finance</li>
                        <li class="active">EMI Calculator</li>
                    </ol>
                </section>-->

				<!--<div class="col-md-5" id="container" data-highcharts-chart="0"><div id="highcharts-v2fc7f6-0" class="highcharts-container " style="position: relative; overflow: hidden; width: 428px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="428" height="400"><desc>Created with Highcharts 5.0.6</desc><defs><clipPath id="highcharts-v2fc7f6-1"><rect x="0" y="0" width="408" height="332" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="428" height="400" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="10" y="53" width="408" height="332"></rect><rect fill="none" class="highcharts-plot-border" x="10" y="53" width="408" height="332"></rect><g class="highcharts-series-group"><g class="highcharts-series highcharts-series-0 highcharts-pie-series highcharts-color-undefined highcharts-tracker " transform="translate(10,53) scale(1 1)" style="cursor:pointer;"><path fill="#7cb5ec" d="M 203.97168942468636 27.000002883052815 A 139 139 0 1 1 95.86561183246123 78.66184055275697 L 95.86561183246123 78.66184055275697 A 139 139 0 1 0 203.97168942468636 27.000002883052815 Z" class="highcharts-halo highcharts-color-0" fill-opacity="0.25"></path><path fill="#7cb5ec" d="M 203.97168942468636 27.000002883052815 A 139 139 0 1 1 95.86561183246123 78.66184055275697 L 204 166 A 0 0 0 1 0 204 166 Z" class="highcharts-point highcharts-color-0 " stroke="#ffffff" stroke-width="1" stroke-linejoin="round"></path><path fill="#434348" d="M 95.95300404454167 78.55374985168793 A 139 139 0 0 1 203.80693178860804 27.00013408400082 L 204 166 A 0 0 0 0 0 204 166 Z" class="highcharts-point highcharts-color-1" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"></path></g><g class="highcharts-markers highcharts-series-0 highcharts-pie-series highcharts-color-undefined " transform="translate(10,53) scale(1 1)"></g></g><g class="highcharts-button highcharts-contextbutton" style="cursor:pointer;" stroke-linecap="round" transform="translate(394,10)"><title>Chart context menu</title><rect fill="#ffffff" class=" highcharts-button-box" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect><path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" class="highcharts-button-symbol" stroke="#666666" stroke-width="3"></path><text x="0" style="font-weight:normal;color:#333333;fill:#333333;" y="12"></text></g><text x="214" text-anchor="middle" class="highcharts-title" style="color:#333333;font-size:18px;fill:#333333;width:364px;" y="24"><tspan>EMI Calculator</tspan></text><g class="highcharts-data-labels highcharts-series-0 highcharts-pie-series highcharts-color-undefined highcharts-tracker" transform="translate(10,53) scale(1 1)" opacity="1" style="cursor:pointer;"><path fill="none" class="highcharts-data-label-connector highcharts-color-0" stroke="#000000" stroke-width="1" d="M 281.7399555916005 318.54474379844095 C 276.7399555916005 318.54474379844095 268.99250470018734 302.2973746364768 266.4100210697163 296.8815849158221 L 263.8275374392453 291.4657951951674"></path><path fill="none" class="highcharts-data-label-connector highcharts-color-1" stroke="#000000" stroke-width="1" d="M 126.26004440839958 13.455256201559024 C 131.26004440839958 13.455256201559024 139.00749529981263 29.702625363523154 141.58997893028365 35.11841508417786 L 144.17246256075467 40.53420480483257"></path><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 " style="cursor:pointer;" transform="translate(287,309)"><text x="5" style="font-size:11px;font-weight:bold;color:#000000;text-outline:1px contrast;fill:#000000;" y="16"><tspan style="font-weight: bold;" x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">Loan</tspan><tspan dx="0" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">: 85.8 %</tspan><tspan style="font-weight:bold" x="5" y="16">Loan</tspan><tspan dx="0">: 85.8 %</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1 " style="cursor:pointer;" transform="translate(24,3)"><text x="5" style="font-size:11px;font-weight:bold;color:#000000;text-outline:1px contrast;fill:#000000;" y="16"><tspan style="font-weight: bold;" x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">Interest</tspan><tspan dx="0" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">: 14.2 %</tspan><tspan style="font-weight:bold" x="5" y="16">Interest</tspan><tspan dx="0">: 14.2 %</tspan></text></g></g><g class="highcharts-legend"><rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="8" height="8" visibility="hidden"></rect><g><g></g></g></g><text x="418" class="highcharts-credits" text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-0" style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(45,-9999)" opacity="0" visibility="visible"><path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 132.5 0.5 C 135.5 0.5 135.5 0.5 135.5 3.5 L 135.5 44.5 C 135.5 47.5 135.5 47.5 132.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 132.5 0.5 C 135.5 0.5 135.5 0.5 135.5 3.5 L 135.5 44.5 C 135.5 47.5 135.5 47.5 132.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 132.5 0.5 C 135.5 0.5 135.5 0.5 135.5 3.5 L 135.5 44.5 C 135.5 47.5 135.5 47.5 132.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 132.5 0.5 C 135.5 0.5 135.5 0.5 135.5 3.5 L 135.5 44.5 C 135.5 47.5 135.5 47.5 132.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#7cb5ec" stroke-width="1"></path><text x="8" style="font-size:12px;color:#333333;fill:#333333;" y="20"><tspan style="font-size: 10px">Loan</tspan><tspan style="fill:#7cb5ec" x="8" dy="15">●</tspan><tspan dx="0"> Amount: </tspan><tspan style="font-weight:bold" dx="0">260 000</tspan></text></g></svg></div></div>-->
                <!-- Main content -->
				
                <section class="content">
                    <div class="row">
						
                        
                           
												<div class="col-md-5" id="container" ></div>
								
								
								<div class="box-body table-responsive " id='datatable' style="float:left;width:100%;">
								

								<table id='illustrate' class='table table-striped table-bordered' align="center" style="width:80%">
								
								</table>
								
								<input type="button" value="Save" onClick="window.print()">
								</div></div>
    
	<?php
include "includes/footer.php";
?>	
