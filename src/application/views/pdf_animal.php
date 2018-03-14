<table class="detail" style="margin: 0px; border-top: none;">

<tr>
<td class="label">Tag:</td>
<td class="field"><?= $report->getTags();?></td>
<td class="label">Disposition:</td>
<td class="field"><?= $report->getDisposition();?></td>
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
<td class="label">Girth:</td>
<td class="field"><?= $report->getGirth();?></td>
</tr>

<tr>
<td class="label">Nutritional Condition:</td>
<td class="field"><?= $report->getInvestigationNutritionalCondition();?></td>
<td class="label">Age Class:</td>
<td class="field"><?= $report->getInvestigationAgeClass();?></td>
</tr>
</table>
