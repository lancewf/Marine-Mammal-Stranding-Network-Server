<h3>Human Interaction</h3>
<table class="human_interaction" style="margin: 0px; border-top: none;">
  <tr>
    <th>Examined</th>
    <th>Possible HI Lesion</th>
    <th>Possible Source</th>
    <th>Scavenger Damage</th>
  </tr>
  <?php $x=0; ?>
  <?php foreach($sections as $section): ?>
    <tr class="r<?= $x%2; ?>">
      <td>
          <?php
          if($section->getIsExamined()){ echo "x";}
          else{ echo "_";}
          ?>
          <?= $section->getName();?>
      </td>
      <td ><?= $section->getPossibleHiLesion();?></td>
      <td ><?= $section->getPossibleSource();?></td>
      <td ><?= $section->getScavengerDamage();?></td>
    </tr>
    <?php $x++; ?>
  <?php endforeach; ?>
</table>
