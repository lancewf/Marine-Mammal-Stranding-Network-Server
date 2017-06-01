<h3>Live Animals</h3>
<h4>Condition Determination</h4>
<table class="detail" style="margin: 0px; border-top: none;">
<tr>
<td class="field2"><?php 
if($report->getIsConSick()){ echo "X";}
else{ echo "_";}
?></td>
<td class="label2">Sick</td>

<td class="field2"><?php 
if($report->getIsConInjured()){ echo "X";}
else{ echo "_";}
?></td>
<td class="label2">Injured</td>

<td class="field2"><?php 
if($report->getIsConOutOfHabitat()){ echo "X";}
else{ echo "_";}
?></td>
<td class="label2">Out of Habitat</td>

<td class="field2"><?php 
if($report->getIsConDeemedReleasable()){ echo "X";}
else{ echo "_";}
?></td>
<td class="label2">Deemed Releasable</td>

<td class="field2"><?php 
if($report->getIsConAbandoned()){ echo "X";}
else{ echo "_";}
?></td>
<td class="label2">Abandoned</td>

<td class="field2"><?php 
if($report->getIsConInaccessible()){ echo "X";}
else{ echo "_";}
?></td>
<td class="label2">Inaccessible</td>

</tr>
</table>
<table class="detail" style="margin: 0px; border-top: none;">
<tr>

<td class="field2"><?php 
if($report->getIsConLocationHazardToAnimal()){ echo "X";}
else{ echo "_";}
?></td>
<td class="label2">Location is hazardous to animal</td>

<td class="field2"><?php 
if($report->getIsConLocationHazardToHumans()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">location is hazardous to humans</td>

<td class="field2"><?php 
if($report->getIsConUnknown()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Unknown</td>

<td class="field2"><?php 
if($report->getIsConOther()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Other</td>

</tr>
</table>

<h4>Action Taken</h4>
<table class="detail" style="margin: 0px; border-top: none;">
<tr>

<td class="field2"><?php 
if($report->getIsActionLeftAtSite()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Left at Site</td>

<td class="field2"><?php 
if($report->getIsActionImmediateReleaseAtSite()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Immediate Release at Site</td>

<td class="field2"><?php 
if($report->getIsActionRelocated()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Relocated</td>

<td class="field2"><?php 
if($report->getIsActionDiedAtSite()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Died at Site</td>

<td class="field2"><?php 
if($report->getIsActionDiedDuringTransport()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Died During Transport</td>

</tr>
</table>

<table class="detail" style="margin: 0px; border-top: none;">
<tr>

<td class="field2"><?php 
if($report->getIsActionEuthanizedAtSite()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Euthanized at Site</td>

<td class="field2"><?php 
if($report->getIsActionEuthanizedDuringTransport()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Euthanized During Transport</td>

<td class="field2"><?php 
if($report->getIsActionTransferredToRehab()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Transferred to Rehab</td>

<td class="field2"><?php 
if($report->getIsActionOther()){ echo "x";}
else{ echo "_";}
?></td>
<td class="label2">Other</td>
</tr>
</table>
<?php
if($report->getIsActionRelocated()){ 
echo "<h5>Location (if relocated): " . $report->getRelocatedLocation() . "</h5>";
}
?>
