<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>
body {
  margin: 18pt 18pt 24pt 18pt;
}

* {
  font-family: helvetica,georgia,serif;
  font-weight: bold;
}

p {
  text-align: justify;
  font-size: 1em;
  margin: 0.5em;
  padding: 10px;
}

.detail {
  border-spacing: 3px;
  border-top: 0px solid #8B7958;
  border-bottom: 0px solid #8B7958;
  width: 99%;
  padding: 3px;
  margin-bottom: 10px;
}

.detail td.label {
  width: 16%;
  background-color: #D1D0D1;
}

.detail td.field {
  width: 33%;
  text-align: center;
  background-color: #D2F5D1;
}

</style>
</head>
<body>

<center>
<h1>San Juan County Marine Mammal Stranding Network</h1>
<h2>Stranding Response Report</h2>
</center>
<h3>CALL</h3>
<table class="detail" style="margin: 0px; border-top: none;">

<tr>
<td class="label">Responder:</td>
<td class="field"><?= $report->getResponder();?></td>
</tr>

<tr>
<td class="label">Date:</td>
<td class="field"><?= $report->getCallDate("F j, Y");?></td>
<td class="label">Time:</td>
<td class="field"><?= $report->getCallDate("g:i a");?></td>
</tr>

<tr>
<td class="label">Call From:</td>
<td class="field"><?= $report->getCallFrom();?></td>
</tr>

<tr>
<td class="label">Call Name:</td>
<td class="field"><?= $report->getCallerName();?></td>
<td class="label">Call Phone:</td>
<td class="field"><?= $report->getCallerPhoneNumber();?></td>
</tr>

<tr>
<td class="label">Location:</td>
<td class="field"><?= $report->getCallLocation();?></td>
</tr>

<tr>
<td class="label">Species:</td>
<td class="field"><?= $report->getCallSpecies();?></td>
<td class="label">Condition:</td>
<td class="field"><?= $report->getCallCondition();?></td>
</tr>

<tr>
<td class="label">Call Referred To:</td>
<td class="field"><?= $report->getCallReferredTo();?></td>
</tr>
</table>

<h4>Comments:</h4>
<p><?= $report->getCallComments();?></p>

<h3>INVESTIGATION</h3>

<table class="detail" style="margin: 0px; border-top: none;">

<tr>
<td class="label">Investigator/Support:</td>
<td class="field"><?= $report->getInvestigatorSupport();?></td>
</tr>

<tr>
<td class="label">Date:</td>
<td class="field"><?= $report->getInvestigationDate("F j, Y");?></td>
<td class="label">Time:</td>
<td class="field"><?= $report->getInvestigationDate("g:i a");?></td>
</tr>

<tr>
<td class="label">Physical Location:</td>
<td class="field"><?= $report->getInvestigationPhysicalLocation();?></td>
</tr>

<tr>
<td class="label">Lat\Lon:</td>
<td class="field"><?= $report->getInvestigationLatLocation();?>N <?= $report->getInvestigationLonLocation();?>W</td>
</tr>

<tr>
<td class="label">Species:</td>
<td class="field"><?= $report->getInvestigationSpecies();?></td>
<td class="label">Condition:</td>
<td class="field"><?= $report->getInvestigationCondition();?></td>
</tr>

<tr>
<td class="label">Animal Found:</td>
<td class="field"><?php 
if($report->getAnimalNotFound()){
	echo "No";
}
else{
	echo "Yes";
}
?></td>
</tr>
</table>

<?php 
if($report->getAnimalNotFound()){
}
else{
        $data = array('report' =>$report);
	echo $this->load->view('pdf_animal', $data);
}
?>

<h4>Comments:</h4>
<p><?= $report->getInvestigationComments();?></p>

<h3>ATTACHMENTS</h3>

<table class="detail" style="margin: 0px; border-top: none;">

<tr>
<td class="label">Photos:</td>
<td class="field"><?php 
if($report->getIsPhotoTaken()){
	echo "Yes";
}
else{
	echo "No";
}
?></td>
</tr>
</table>

<?php 
$attachments = $report->getAttachments();

foreach($attachments as $attachment){
        $data = array('attachment' =>$attachment);
	echo $this->load->view('pdf_attachment', $data);
}

?>

<br />
<p align="center" />
<div align='center'><address>The Whale Museum is a 501 (c)(3) non-profit organization registered with the      Secretary of State in Olympia, Washington.</address></div>
</body> </html>
