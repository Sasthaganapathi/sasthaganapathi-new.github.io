<?php 
//error_reporting(0);
//include("MPDF/mpdf60/mpdf.php");
include_once __DIR__ .'/vendor/autoload.php';
//$mpdf=new ()mPDF;
$mpdf=new \Mpdf\Mpdf();
$tab='
<html>
<body>
<style>
    /* Define table borders */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border: 1px solid black; /* Set border for table cells */
        padding: 8px;
        text-align: right; /* Center-align content within cells */
    }
	th
	{
		border: 1px solid black; /* Set border for table cells */
        padding: 8px;
        text-align: left; /* Center-align content within cells */
	}

</style>
			<table style="border-collapse: collapse; width: 100%; border: none;">
				<tr style="border-collapse: collapse; width: 100%; border: none;"><td colspan="2" align="center"><h3>(6) Inspection of Water Supply/Bridges/Roads/Buildings /Irrigation Schemes/Other infrastructure Works </h3></td></tr>
				<tr style="border-collapse: collapse; width: 100%; border: none;">
					<td style="text-align: left;border: none;"><h4>Name of the District Collector :</h4> </td>
					<td style="text-align: right;border: none;"><h4>Period :</h4></td>
				</tr>
			</table>
			 <table class="table" id="mytable" border="1px solid black">
				<tbody>
					<tr align="center" valign="middle">
						<th align="center" width="5%">#</th>
						<th align="center" width="15%">Name of the Scheme/Project</th>
						<th align="center" width="15%">Implementing Agency/Department</th>
						<th align="center" width="10%">Estimate Cost</th>
						<th  align="center" width="10%">Date of Work Order</th>
						<th align="center" width="10%">Completion date as per contract agreement(A/B)</th>
						<th  align="center" width="10%">Physical Progress(%)</th>
						<th  align="center" width="10%">Estimated Date of completion</th>
						<th  align="center" width="15%">Issues ,if any</th>
					</tr>';
					
			   
		
					
				$tab.='</tbody>
			 </table><br/><br/><br/><br/><br/><br/>
			 <div class="row" align="right" style="margin-right:20px;">
				District Collector,
			 </div>
			  <div class="row" align="right">
				'.$dtname.'
			 </div>
		</div>
	</div>
  </body>
</html>

';



$mpdf->WriteHTML($tab);
$mpdf->Output();
	
?>