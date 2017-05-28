<?php



/**
 * This class defines the structure of the 'report' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.persistence.map
 */
class ReportTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'persistence.map.ReportTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('report');
        $this->setPhpName('Report');
        $this->setClassname('Report');
        $this->setPackage('persistence');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('responder', 'Responder', 'VARCHAR', false, 100, null);
        $this->addColumn('call_date', 'CallDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('call_from', 'CallFrom', 'VARCHAR', false, 100, null);
        $this->addColumn('caller_name', 'CallerName', 'VARCHAR', false, 100, null);
        $this->addColumn('caller_phone_number', 'CallerPhoneNumber', 'VARCHAR', false, 100, null);
        $this->addColumn('call_location', 'CallLocation', 'VARCHAR', false, 100, null);
        $this->addColumn('call_species', 'CallSpecies', 'VARCHAR', false, 100, null);
        $this->addColumn('when_first_seen', 'WhenFirstSeen', 'VARCHAR', false, 100, null);
        $this->addColumn('call_comments', 'CallComments', 'LONGVARCHAR', false, null, null);
        $this->addColumn('call_referred_to', 'CallReferredTo', 'VARCHAR', false, 100, null);
        $this->addColumn('call_condition', 'CallCondition', 'VARCHAR', false, 100, null);
        $this->addColumn('investigator_support', 'InvestigatorSupport', 'VARCHAR', false, 100, null);
        $this->addColumn('investigation_date', 'InvestigationDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('investigation_lat_lon_location', 'InvestigationLatLonLocation', 'VARCHAR', false, 100, null);
        $this->addColumn('investigation_physical_location', 'InvestigationPhysicalLocation', 'VARCHAR', false, 100, null);
        $this->addColumn('investigation_species', 'InvestigationSpecies', 'VARCHAR', false, 100, null);
        $this->addColumn('animal_not_found', 'AnimalNotFound', 'BOOLEAN', false, 1, null);
        $this->addColumn('investigation_condition', 'InvestigationCondition', 'VARCHAR', false, 100, null);
        $this->addColumn('tags', 'Tags', 'VARCHAR', false, 100, null);
        $this->addColumn('disposition', 'Disposition', 'VARCHAR', false, 100, null);
        $this->addColumn('seal_pickup', 'SealPickup', 'VARCHAR', false, 100, null);
        $this->addColumn('sex', 'Sex', 'VARCHAR', false, 100, null);
        $this->addColumn('weight', 'Weight', 'DOUBLE', false, null, null);
        $this->addColumn('straight_length', 'StraightLength', 'DOUBLE', false, null, null);
        $this->addColumn('contour_length', 'ContourLength', 'DOUBLE', false, null, null);
        $this->addColumn('girth', 'Girth', 'DOUBLE', false, null, null);
        $this->addColumn('investigation_comments', 'InvestigationComments', 'LONGVARCHAR', false, null, null);
        $this->addColumn('is_photo_taken', 'IsPhotoTaken', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_sick', 'IsConSick', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_injured', 'IsConInjured', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_out_of_habitat', 'IsConOutOfHabitat', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_deemed_releasable', 'IsConDeemedReleasable', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_abandoned', 'IsConAbandoned', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_inaccessible', 'IsConInaccessible', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_location_hazard_to_animal', 'IsConLocationHazardToAnimal', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_location_hazard_to_humans', 'IsConLocationHazardToHumans', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_unknown', 'IsConUnknown', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_con_other', 'IsConOther', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_left_at_site', 'IsActionLeftAtSite', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_immediate_release_at_site', 'IsActionImmediateReleaseAtSite', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_relocated', 'IsActionRelocated', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_died_at_site', 'IsActionDiedAtSite', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_died_during_transport', 'IsActionDiedDuringTransport', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_euthanized_at_site', 'IsActionEuthanizedAtSite', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_euthanized_during_transport', 'IsActionEuthanizedDuringTransport', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_transferred_to_rehab', 'IsActionTransferredToRehab', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_action_other', 'IsActionOther', 'BOOLEAN', false, 1, null);
        $this->addColumn('relocated_location', 'RelocatedLocation', 'VARCHAR', false, 100, null);
        $this->addForeignKey('volunteer_id', 'VolunteerId', 'INTEGER', 'volunteer', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Volunteer', 'Volunteer', RelationMap::MANY_TO_ONE, array('volunteer_id' => 'id', ), null, null);
        $this->addRelation('ReportComments', 'ReportComments', RelationMap::ONE_TO_MANY, array('id' => 'report_id', ), null, null, 'ReportCommentss');
        $this->addRelation('ReportHumanInteractionSection', 'ReportHumanInteractionSection', RelationMap::ONE_TO_MANY, array('id' => 'report_id', ), null, null, 'ReportHumanInteractionSections');
        $this->addRelation('Attachment', 'Attachment', RelationMap::ONE_TO_MANY, array('id' => 'report_id', ), null, null, 'Attachments');
    } // buildRelations()

} // ReportTableMap
