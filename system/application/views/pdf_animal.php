<table class="detail" style="margin: 0px; border-top: none;">

<tr>
<td class="label">Tag:</td>
<td class="field"><?= $report->getTags();?></td>
</tr>

<tr>
<td class="label">Disposition:</td>
<td class="field"><?= $report->getDisposition();?></td>
<td class="label">Seal Pickup:</td>
<td class="field"><?= $report->getSealPickup();?></td>
</tr>

<tr>
<td class="label">Sex:</td>
<td class="field"><?= $report->getSex();?></td>
<td class="label">Weight:</td>
<td class="field"><?= $report->getWeight();?></td>
</tr>

<tr>
<td class="label">Straight Lenght:</td>
<td class="field"><?= $report->getStraightLength();?></td>
<td class="label">Contour Length:</td>
<td class="field"><?= $report->getContourLength();?></td>
</tr>

<tr>
<td class="label">Girth:</td>
<td class="field"><?= $report->getGirth();?></td>
</tr>
</table>
