<?php
class Report_human_interaction_model extends Model
{
    public function __construct()
    {
        parent::Model();

        require_once('persistence/ReportHumanInteractionSection.php');
        require_once('persistence/ReportHumanInteractionSectionQuery.php');
    }

    public function updateReport($reportData, $report)
    {
        $current_sections = $this->getSections($report->getId());
        foreach ($reportData['human_interactions'] as $section) {
            $current_section = $this->findSection($section['name'], $current_sections);
            if ($current_section != null) {
                $current_section->fromArray($section, BasePeer::TYPE_FIELDNAME);
                $current_section->save();
            } else {
                $reportHumanInteractionSection = new ReportHumanInteractionSection();
                $reportHumanInteractionSection->fromArray($section, BasePeer::TYPE_FIELDNAME);
                $reportHumanInteractionSection->setReportId($report->getId());
                $reportHumanInteractionSection->save();
            }
        }
    }

    public function addReport($reportData, $report)
    {
        foreach ($reportData['human_interactions'] as $section) {
            $reportHumanInteractionSection = new ReportHumanInteractionSection();
            $reportHumanInteractionSection->fromArray($section, BasePeer::TYPE_FIELDNAME);
            $reportHumanInteractionSection->setReportId($report->getId());
            $reportHumanInteractionSection->save();
        }
    }

    public function goodReportData($reportData){
        foreach ($reportData['human_interactions'] as $section) {
		if (array_key_exists('name', $section) and
		   array_key_exists('is_examined', $section) and
		   array_key_exists('possible_hi_lesion', $section) and
		   array_key_exists('possible_source', $section) and
		   array_key_exists('scavenger_damage', $section)) {
		} else {
		    return false;
		}
        }
        return true;
    }

    private function getSections($report_id)
    {
        $sections = ReportHumanInteractionSectionQuery::create()->filterByReportId($report_id)->find();

        return $sections;
    }

    private function findSection($name, $current_sections)
    {
        foreach ($current_sections as $section) {
            if (strcmp($section->getName(), $name) == 0) {
                return $section;
            }
        }
        return null;
    }
}
