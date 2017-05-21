<?php


/**
 * Base class that represents a query for the 'report' table.
 *
 * a report
 *
 * @method ReportQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ReportQuery orderByResponder($order = Criteria::ASC) Order by the responder column
 * @method ReportQuery orderByCallDate($order = Criteria::ASC) Order by the call_date column
 * @method ReportQuery orderByCallFrom($order = Criteria::ASC) Order by the call_from column
 * @method ReportQuery orderByCallerName($order = Criteria::ASC) Order by the caller_name column
 * @method ReportQuery orderByCallerPhoneNumber($order = Criteria::ASC) Order by the caller_phone_number column
 * @method ReportQuery orderByCallLocation($order = Criteria::ASC) Order by the call_location column
 * @method ReportQuery orderByCallSpecies($order = Criteria::ASC) Order by the call_species column
 * @method ReportQuery orderByWhenFirstSeen($order = Criteria::ASC) Order by the when_first_seen column
 * @method ReportQuery orderByCallComments($order = Criteria::ASC) Order by the call_comments column
 * @method ReportQuery orderByCallReferredTo($order = Criteria::ASC) Order by the call_referred_to column
 * @method ReportQuery orderByCallCondition($order = Criteria::ASC) Order by the call_condition column
 * @method ReportQuery orderByInvestigatorSupport($order = Criteria::ASC) Order by the investigator_support column
 * @method ReportQuery orderByInvestigationDate($order = Criteria::ASC) Order by the investigation_date column
 * @method ReportQuery orderByInvestigationLatLonLocation($order = Criteria::ASC) Order by the investigation_lat_lon_location column
 * @method ReportQuery orderByInvestigationPhysicalLocation($order = Criteria::ASC) Order by the investigation_physical_location column
 * @method ReportQuery orderByInvestigationSpecies($order = Criteria::ASC) Order by the investigation_species column
 * @method ReportQuery orderByAnimalNotFound($order = Criteria::ASC) Order by the animal_not_found column
 * @method ReportQuery orderByInvestigationCondition($order = Criteria::ASC) Order by the investigation_condition column
 * @method ReportQuery orderByTags($order = Criteria::ASC) Order by the tags column
 * @method ReportQuery orderByDisposition($order = Criteria::ASC) Order by the disposition column
 * @method ReportQuery orderBySealPickup($order = Criteria::ASC) Order by the seal_pickup column
 * @method ReportQuery orderBySex($order = Criteria::ASC) Order by the sex column
 * @method ReportQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method ReportQuery orderByStraightLength($order = Criteria::ASC) Order by the straight_length column
 * @method ReportQuery orderByContourLength($order = Criteria::ASC) Order by the contour_length column
 * @method ReportQuery orderByGirth($order = Criteria::ASC) Order by the girth column
 * @method ReportQuery orderByInvestigationComments($order = Criteria::ASC) Order by the investigation_comments column
 * @method ReportQuery orderByIsPhotoTaken($order = Criteria::ASC) Order by the is_photo_taken column
 * @method ReportQuery orderByIsConSick($order = Criteria::ASC) Order by the is_con_sick column
 * @method ReportQuery orderByIsConInjured($order = Criteria::ASC) Order by the is_con_injured column
 * @method ReportQuery orderByIsConOutOfHabitat($order = Criteria::ASC) Order by the is_con_out_of_habitat column
 * @method ReportQuery orderByIsConDeemedReleasable($order = Criteria::ASC) Order by the is_con_deemed_releasable column
 * @method ReportQuery orderByIsConAbandoned($order = Criteria::ASC) Order by the is_con_abandoned column
 * @method ReportQuery orderByIsConInaccessible($order = Criteria::ASC) Order by the is_con_inaccessible column
 * @method ReportQuery orderByIsConLocationHazardToAnimal($order = Criteria::ASC) Order by the is_con_location_hazard_to_animal column
 * @method ReportQuery orderByIsConLocationHazardToHumans($order = Criteria::ASC) Order by the is_con_location_hazard_to_humans column
 * @method ReportQuery orderByIsConUnknown($order = Criteria::ASC) Order by the is_con_unknown column
 * @method ReportQuery orderByIsConOther($order = Criteria::ASC) Order by the is_con_other column
 * @method ReportQuery orderByIsActionLeftAtSite($order = Criteria::ASC) Order by the is_action_left_at_site column
 * @method ReportQuery orderByIsActionImmediateReleaseAtSite($order = Criteria::ASC) Order by the is_action_immediate_release_at_site column
 * @method ReportQuery orderByIsActionRelocated($order = Criteria::ASC) Order by the is_action_relocated column
 * @method ReportQuery orderByIsActionDiedAtSite($order = Criteria::ASC) Order by the is_action_died_at_site column
 * @method ReportQuery orderByIsActionDiedDuringTransport($order = Criteria::ASC) Order by the is_action_died_during_transport column
 * @method ReportQuery orderByIsActionEuthanizedAtSite($order = Criteria::ASC) Order by the is_action_euthanized_at_site column
 * @method ReportQuery orderByIsActionEuthanizedDuringTransport($order = Criteria::ASC) Order by the is_action_euthanized_during_transport column
 * @method ReportQuery orderByIsActionTransferredToRehab($order = Criteria::ASC) Order by the is_action_transferred_to_rehab column
 * @method ReportQuery orderByIsActionOther($order = Criteria::ASC) Order by the is_action_other column
 * @method ReportQuery orderByVolunteerId($order = Criteria::ASC) Order by the volunteer_id column
 *
 * @method ReportQuery groupById() Group by the id column
 * @method ReportQuery groupByResponder() Group by the responder column
 * @method ReportQuery groupByCallDate() Group by the call_date column
 * @method ReportQuery groupByCallFrom() Group by the call_from column
 * @method ReportQuery groupByCallerName() Group by the caller_name column
 * @method ReportQuery groupByCallerPhoneNumber() Group by the caller_phone_number column
 * @method ReportQuery groupByCallLocation() Group by the call_location column
 * @method ReportQuery groupByCallSpecies() Group by the call_species column
 * @method ReportQuery groupByWhenFirstSeen() Group by the when_first_seen column
 * @method ReportQuery groupByCallComments() Group by the call_comments column
 * @method ReportQuery groupByCallReferredTo() Group by the call_referred_to column
 * @method ReportQuery groupByCallCondition() Group by the call_condition column
 * @method ReportQuery groupByInvestigatorSupport() Group by the investigator_support column
 * @method ReportQuery groupByInvestigationDate() Group by the investigation_date column
 * @method ReportQuery groupByInvestigationLatLonLocation() Group by the investigation_lat_lon_location column
 * @method ReportQuery groupByInvestigationPhysicalLocation() Group by the investigation_physical_location column
 * @method ReportQuery groupByInvestigationSpecies() Group by the investigation_species column
 * @method ReportQuery groupByAnimalNotFound() Group by the animal_not_found column
 * @method ReportQuery groupByInvestigationCondition() Group by the investigation_condition column
 * @method ReportQuery groupByTags() Group by the tags column
 * @method ReportQuery groupByDisposition() Group by the disposition column
 * @method ReportQuery groupBySealPickup() Group by the seal_pickup column
 * @method ReportQuery groupBySex() Group by the sex column
 * @method ReportQuery groupByWeight() Group by the weight column
 * @method ReportQuery groupByStraightLength() Group by the straight_length column
 * @method ReportQuery groupByContourLength() Group by the contour_length column
 * @method ReportQuery groupByGirth() Group by the girth column
 * @method ReportQuery groupByInvestigationComments() Group by the investigation_comments column
 * @method ReportQuery groupByIsPhotoTaken() Group by the is_photo_taken column
 * @method ReportQuery groupByIsConSick() Group by the is_con_sick column
 * @method ReportQuery groupByIsConInjured() Group by the is_con_injured column
 * @method ReportQuery groupByIsConOutOfHabitat() Group by the is_con_out_of_habitat column
 * @method ReportQuery groupByIsConDeemedReleasable() Group by the is_con_deemed_releasable column
 * @method ReportQuery groupByIsConAbandoned() Group by the is_con_abandoned column
 * @method ReportQuery groupByIsConInaccessible() Group by the is_con_inaccessible column
 * @method ReportQuery groupByIsConLocationHazardToAnimal() Group by the is_con_location_hazard_to_animal column
 * @method ReportQuery groupByIsConLocationHazardToHumans() Group by the is_con_location_hazard_to_humans column
 * @method ReportQuery groupByIsConUnknown() Group by the is_con_unknown column
 * @method ReportQuery groupByIsConOther() Group by the is_con_other column
 * @method ReportQuery groupByIsActionLeftAtSite() Group by the is_action_left_at_site column
 * @method ReportQuery groupByIsActionImmediateReleaseAtSite() Group by the is_action_immediate_release_at_site column
 * @method ReportQuery groupByIsActionRelocated() Group by the is_action_relocated column
 * @method ReportQuery groupByIsActionDiedAtSite() Group by the is_action_died_at_site column
 * @method ReportQuery groupByIsActionDiedDuringTransport() Group by the is_action_died_during_transport column
 * @method ReportQuery groupByIsActionEuthanizedAtSite() Group by the is_action_euthanized_at_site column
 * @method ReportQuery groupByIsActionEuthanizedDuringTransport() Group by the is_action_euthanized_during_transport column
 * @method ReportQuery groupByIsActionTransferredToRehab() Group by the is_action_transferred_to_rehab column
 * @method ReportQuery groupByIsActionOther() Group by the is_action_other column
 * @method ReportQuery groupByVolunteerId() Group by the volunteer_id column
 *
 * @method ReportQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ReportQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ReportQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ReportQuery leftJoinVolunteer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Volunteer relation
 * @method ReportQuery rightJoinVolunteer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Volunteer relation
 * @method ReportQuery innerJoinVolunteer($relationAlias = null) Adds a INNER JOIN clause to the query using the Volunteer relation
 *
 * @method ReportQuery leftJoinReportComments($relationAlias = null) Adds a LEFT JOIN clause to the query using the ReportComments relation
 * @method ReportQuery rightJoinReportComments($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ReportComments relation
 * @method ReportQuery innerJoinReportComments($relationAlias = null) Adds a INNER JOIN clause to the query using the ReportComments relation
 *
 * @method ReportQuery leftJoinAttachment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Attachment relation
 * @method ReportQuery rightJoinAttachment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Attachment relation
 * @method ReportQuery innerJoinAttachment($relationAlias = null) Adds a INNER JOIN clause to the query using the Attachment relation
 *
 * @method Report findOne(PropelPDO $con = null) Return the first Report matching the query
 * @method Report findOneOrCreate(PropelPDO $con = null) Return the first Report matching the query, or a new Report object populated from the query conditions when no match is found
 *
 * @method Report findOneByResponder(string $responder) Return the first Report filtered by the responder column
 * @method Report findOneByCallDate(string $call_date) Return the first Report filtered by the call_date column
 * @method Report findOneByCallFrom(string $call_from) Return the first Report filtered by the call_from column
 * @method Report findOneByCallerName(string $caller_name) Return the first Report filtered by the caller_name column
 * @method Report findOneByCallerPhoneNumber(string $caller_phone_number) Return the first Report filtered by the caller_phone_number column
 * @method Report findOneByCallLocation(string $call_location) Return the first Report filtered by the call_location column
 * @method Report findOneByCallSpecies(string $call_species) Return the first Report filtered by the call_species column
 * @method Report findOneByWhenFirstSeen(string $when_first_seen) Return the first Report filtered by the when_first_seen column
 * @method Report findOneByCallComments(string $call_comments) Return the first Report filtered by the call_comments column
 * @method Report findOneByCallReferredTo(string $call_referred_to) Return the first Report filtered by the call_referred_to column
 * @method Report findOneByCallCondition(string $call_condition) Return the first Report filtered by the call_condition column
 * @method Report findOneByInvestigatorSupport(string $investigator_support) Return the first Report filtered by the investigator_support column
 * @method Report findOneByInvestigationDate(string $investigation_date) Return the first Report filtered by the investigation_date column
 * @method Report findOneByInvestigationLatLonLocation(string $investigation_lat_lon_location) Return the first Report filtered by the investigation_lat_lon_location column
 * @method Report findOneByInvestigationPhysicalLocation(string $investigation_physical_location) Return the first Report filtered by the investigation_physical_location column
 * @method Report findOneByInvestigationSpecies(string $investigation_species) Return the first Report filtered by the investigation_species column
 * @method Report findOneByAnimalNotFound(boolean $animal_not_found) Return the first Report filtered by the animal_not_found column
 * @method Report findOneByInvestigationCondition(string $investigation_condition) Return the first Report filtered by the investigation_condition column
 * @method Report findOneByTags(string $tags) Return the first Report filtered by the tags column
 * @method Report findOneByDisposition(string $disposition) Return the first Report filtered by the disposition column
 * @method Report findOneBySealPickup(string $seal_pickup) Return the first Report filtered by the seal_pickup column
 * @method Report findOneBySex(string $sex) Return the first Report filtered by the sex column
 * @method Report findOneByWeight(double $weight) Return the first Report filtered by the weight column
 * @method Report findOneByStraightLength(double $straight_length) Return the first Report filtered by the straight_length column
 * @method Report findOneByContourLength(double $contour_length) Return the first Report filtered by the contour_length column
 * @method Report findOneByGirth(double $girth) Return the first Report filtered by the girth column
 * @method Report findOneByInvestigationComments(string $investigation_comments) Return the first Report filtered by the investigation_comments column
 * @method Report findOneByIsPhotoTaken(boolean $is_photo_taken) Return the first Report filtered by the is_photo_taken column
 * @method Report findOneByIsConSick(boolean $is_con_sick) Return the first Report filtered by the is_con_sick column
 * @method Report findOneByIsConInjured(boolean $is_con_injured) Return the first Report filtered by the is_con_injured column
 * @method Report findOneByIsConOutOfHabitat(boolean $is_con_out_of_habitat) Return the first Report filtered by the is_con_out_of_habitat column
 * @method Report findOneByIsConDeemedReleasable(boolean $is_con_deemed_releasable) Return the first Report filtered by the is_con_deemed_releasable column
 * @method Report findOneByIsConAbandoned(boolean $is_con_abandoned) Return the first Report filtered by the is_con_abandoned column
 * @method Report findOneByIsConInaccessible(boolean $is_con_inaccessible) Return the first Report filtered by the is_con_inaccessible column
 * @method Report findOneByIsConLocationHazardToAnimal(boolean $is_con_location_hazard_to_animal) Return the first Report filtered by the is_con_location_hazard_to_animal column
 * @method Report findOneByIsConLocationHazardToHumans(boolean $is_con_location_hazard_to_humans) Return the first Report filtered by the is_con_location_hazard_to_humans column
 * @method Report findOneByIsConUnknown(boolean $is_con_unknown) Return the first Report filtered by the is_con_unknown column
 * @method Report findOneByIsConOther(boolean $is_con_other) Return the first Report filtered by the is_con_other column
 * @method Report findOneByIsActionLeftAtSite(boolean $is_action_left_at_site) Return the first Report filtered by the is_action_left_at_site column
 * @method Report findOneByIsActionImmediateReleaseAtSite(boolean $is_action_immediate_release_at_site) Return the first Report filtered by the is_action_immediate_release_at_site column
 * @method Report findOneByIsActionRelocated(boolean $is_action_relocated) Return the first Report filtered by the is_action_relocated column
 * @method Report findOneByIsActionDiedAtSite(boolean $is_action_died_at_site) Return the first Report filtered by the is_action_died_at_site column
 * @method Report findOneByIsActionDiedDuringTransport(boolean $is_action_died_during_transport) Return the first Report filtered by the is_action_died_during_transport column
 * @method Report findOneByIsActionEuthanizedAtSite(boolean $is_action_euthanized_at_site) Return the first Report filtered by the is_action_euthanized_at_site column
 * @method Report findOneByIsActionEuthanizedDuringTransport(boolean $is_action_euthanized_during_transport) Return the first Report filtered by the is_action_euthanized_during_transport column
 * @method Report findOneByIsActionTransferredToRehab(boolean $is_action_transferred_to_rehab) Return the first Report filtered by the is_action_transferred_to_rehab column
 * @method Report findOneByIsActionOther(boolean $is_action_other) Return the first Report filtered by the is_action_other column
 * @method Report findOneByVolunteerId(int $volunteer_id) Return the first Report filtered by the volunteer_id column
 *
 * @method array findById(int $id) Return Report objects filtered by the id column
 * @method array findByResponder(string $responder) Return Report objects filtered by the responder column
 * @method array findByCallDate(string $call_date) Return Report objects filtered by the call_date column
 * @method array findByCallFrom(string $call_from) Return Report objects filtered by the call_from column
 * @method array findByCallerName(string $caller_name) Return Report objects filtered by the caller_name column
 * @method array findByCallerPhoneNumber(string $caller_phone_number) Return Report objects filtered by the caller_phone_number column
 * @method array findByCallLocation(string $call_location) Return Report objects filtered by the call_location column
 * @method array findByCallSpecies(string $call_species) Return Report objects filtered by the call_species column
 * @method array findByWhenFirstSeen(string $when_first_seen) Return Report objects filtered by the when_first_seen column
 * @method array findByCallComments(string $call_comments) Return Report objects filtered by the call_comments column
 * @method array findByCallReferredTo(string $call_referred_to) Return Report objects filtered by the call_referred_to column
 * @method array findByCallCondition(string $call_condition) Return Report objects filtered by the call_condition column
 * @method array findByInvestigatorSupport(string $investigator_support) Return Report objects filtered by the investigator_support column
 * @method array findByInvestigationDate(string $investigation_date) Return Report objects filtered by the investigation_date column
 * @method array findByInvestigationLatLonLocation(string $investigation_lat_lon_location) Return Report objects filtered by the investigation_lat_lon_location column
 * @method array findByInvestigationPhysicalLocation(string $investigation_physical_location) Return Report objects filtered by the investigation_physical_location column
 * @method array findByInvestigationSpecies(string $investigation_species) Return Report objects filtered by the investigation_species column
 * @method array findByAnimalNotFound(boolean $animal_not_found) Return Report objects filtered by the animal_not_found column
 * @method array findByInvestigationCondition(string $investigation_condition) Return Report objects filtered by the investigation_condition column
 * @method array findByTags(string $tags) Return Report objects filtered by the tags column
 * @method array findByDisposition(string $disposition) Return Report objects filtered by the disposition column
 * @method array findBySealPickup(string $seal_pickup) Return Report objects filtered by the seal_pickup column
 * @method array findBySex(string $sex) Return Report objects filtered by the sex column
 * @method array findByWeight(double $weight) Return Report objects filtered by the weight column
 * @method array findByStraightLength(double $straight_length) Return Report objects filtered by the straight_length column
 * @method array findByContourLength(double $contour_length) Return Report objects filtered by the contour_length column
 * @method array findByGirth(double $girth) Return Report objects filtered by the girth column
 * @method array findByInvestigationComments(string $investigation_comments) Return Report objects filtered by the investigation_comments column
 * @method array findByIsPhotoTaken(boolean $is_photo_taken) Return Report objects filtered by the is_photo_taken column
 * @method array findByIsConSick(boolean $is_con_sick) Return Report objects filtered by the is_con_sick column
 * @method array findByIsConInjured(boolean $is_con_injured) Return Report objects filtered by the is_con_injured column
 * @method array findByIsConOutOfHabitat(boolean $is_con_out_of_habitat) Return Report objects filtered by the is_con_out_of_habitat column
 * @method array findByIsConDeemedReleasable(boolean $is_con_deemed_releasable) Return Report objects filtered by the is_con_deemed_releasable column
 * @method array findByIsConAbandoned(boolean $is_con_abandoned) Return Report objects filtered by the is_con_abandoned column
 * @method array findByIsConInaccessible(boolean $is_con_inaccessible) Return Report objects filtered by the is_con_inaccessible column
 * @method array findByIsConLocationHazardToAnimal(boolean $is_con_location_hazard_to_animal) Return Report objects filtered by the is_con_location_hazard_to_animal column
 * @method array findByIsConLocationHazardToHumans(boolean $is_con_location_hazard_to_humans) Return Report objects filtered by the is_con_location_hazard_to_humans column
 * @method array findByIsConUnknown(boolean $is_con_unknown) Return Report objects filtered by the is_con_unknown column
 * @method array findByIsConOther(boolean $is_con_other) Return Report objects filtered by the is_con_other column
 * @method array findByIsActionLeftAtSite(boolean $is_action_left_at_site) Return Report objects filtered by the is_action_left_at_site column
 * @method array findByIsActionImmediateReleaseAtSite(boolean $is_action_immediate_release_at_site) Return Report objects filtered by the is_action_immediate_release_at_site column
 * @method array findByIsActionRelocated(boolean $is_action_relocated) Return Report objects filtered by the is_action_relocated column
 * @method array findByIsActionDiedAtSite(boolean $is_action_died_at_site) Return Report objects filtered by the is_action_died_at_site column
 * @method array findByIsActionDiedDuringTransport(boolean $is_action_died_during_transport) Return Report objects filtered by the is_action_died_during_transport column
 * @method array findByIsActionEuthanizedAtSite(boolean $is_action_euthanized_at_site) Return Report objects filtered by the is_action_euthanized_at_site column
 * @method array findByIsActionEuthanizedDuringTransport(boolean $is_action_euthanized_during_transport) Return Report objects filtered by the is_action_euthanized_during_transport column
 * @method array findByIsActionTransferredToRehab(boolean $is_action_transferred_to_rehab) Return Report objects filtered by the is_action_transferred_to_rehab column
 * @method array findByIsActionOther(boolean $is_action_other) Return Report objects filtered by the is_action_other column
 * @method array findByVolunteerId(int $volunteer_id) Return Report objects filtered by the volunteer_id column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseReportQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseReportQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'persistence';
        }
        if (null === $modelName) {
            $modelName = 'Report';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReportQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ReportQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ReportQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReportQuery) {
            return $criteria;
        }
        $query = new ReportQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Report|Report[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ReportPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Report A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Report A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `responder`, `call_date`, `call_from`, `caller_name`, `caller_phone_number`, `call_location`, `call_species`, `when_first_seen`, `call_comments`, `call_referred_to`, `call_condition`, `investigator_support`, `investigation_date`, `investigation_lat_lon_location`, `investigation_physical_location`, `investigation_species`, `animal_not_found`, `investigation_condition`, `tags`, `disposition`, `seal_pickup`, `sex`, `weight`, `straight_length`, `contour_length`, `girth`, `investigation_comments`, `is_photo_taken`, `is_con_sick`, `is_con_injured`, `is_con_out_of_habitat`, `is_con_deemed_releasable`, `is_con_abandoned`, `is_con_inaccessible`, `is_con_location_hazard_to_animal`, `is_con_location_hazard_to_humans`, `is_con_unknown`, `is_con_other`, `is_action_left_at_site`, `is_action_immediate_release_at_site`, `is_action_relocated`, `is_action_died_at_site`, `is_action_died_during_transport`, `is_action_euthanized_at_site`, `is_action_euthanized_during_transport`, `is_action_transferred_to_rehab`, `is_action_other`, `volunteer_id` FROM `report` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Report();
            $obj->hydrate($row);
            ReportPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Report|Report[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Report[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ReportPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ReportPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ReportPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ReportPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the responder column
     *
     * Example usage:
     * <code>
     * $query->filterByResponder('fooValue');   // WHERE responder = 'fooValue'
     * $query->filterByResponder('%fooValue%'); // WHERE responder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $responder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByResponder($responder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($responder)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $responder)) {
                $responder = str_replace('*', '%', $responder);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::RESPONDER, $responder, $comparison);
    }

    /**
     * Filter the query on the call_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCallDate('2011-03-14'); // WHERE call_date = '2011-03-14'
     * $query->filterByCallDate('now'); // WHERE call_date = '2011-03-14'
     * $query->filterByCallDate(array('max' => 'yesterday')); // WHERE call_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $callDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallDate($callDate = null, $comparison = null)
    {
        if (is_array($callDate)) {
            $useMinMax = false;
            if (isset($callDate['min'])) {
                $this->addUsingAlias(ReportPeer::CALL_DATE, $callDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($callDate['max'])) {
                $this->addUsingAlias(ReportPeer::CALL_DATE, $callDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALL_DATE, $callDate, $comparison);
    }

    /**
     * Filter the query on the call_from column
     *
     * Example usage:
     * <code>
     * $query->filterByCallFrom('fooValue');   // WHERE call_from = 'fooValue'
     * $query->filterByCallFrom('%fooValue%'); // WHERE call_from LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callFrom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallFrom($callFrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callFrom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callFrom)) {
                $callFrom = str_replace('*', '%', $callFrom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALL_FROM, $callFrom, $comparison);
    }

    /**
     * Filter the query on the caller_name column
     *
     * Example usage:
     * <code>
     * $query->filterByCallerName('fooValue');   // WHERE caller_name = 'fooValue'
     * $query->filterByCallerName('%fooValue%'); // WHERE caller_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callerName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallerName($callerName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callerName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callerName)) {
                $callerName = str_replace('*', '%', $callerName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALLER_NAME, $callerName, $comparison);
    }

    /**
     * Filter the query on the caller_phone_number column
     *
     * Example usage:
     * <code>
     * $query->filterByCallerPhoneNumber('fooValue');   // WHERE caller_phone_number = 'fooValue'
     * $query->filterByCallerPhoneNumber('%fooValue%'); // WHERE caller_phone_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callerPhoneNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallerPhoneNumber($callerPhoneNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callerPhoneNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callerPhoneNumber)) {
                $callerPhoneNumber = str_replace('*', '%', $callerPhoneNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALLER_PHONE_NUMBER, $callerPhoneNumber, $comparison);
    }

    /**
     * Filter the query on the call_location column
     *
     * Example usage:
     * <code>
     * $query->filterByCallLocation('fooValue');   // WHERE call_location = 'fooValue'
     * $query->filterByCallLocation('%fooValue%'); // WHERE call_location LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callLocation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallLocation($callLocation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callLocation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callLocation)) {
                $callLocation = str_replace('*', '%', $callLocation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALL_LOCATION, $callLocation, $comparison);
    }

    /**
     * Filter the query on the call_species column
     *
     * Example usage:
     * <code>
     * $query->filterByCallSpecies('fooValue');   // WHERE call_species = 'fooValue'
     * $query->filterByCallSpecies('%fooValue%'); // WHERE call_species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callSpecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallSpecies($callSpecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callSpecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callSpecies)) {
                $callSpecies = str_replace('*', '%', $callSpecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALL_SPECIES, $callSpecies, $comparison);
    }

    /**
     * Filter the query on the when_first_seen column
     *
     * Example usage:
     * <code>
     * $query->filterByWhenFirstSeen('fooValue');   // WHERE when_first_seen = 'fooValue'
     * $query->filterByWhenFirstSeen('%fooValue%'); // WHERE when_first_seen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $whenFirstSeen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByWhenFirstSeen($whenFirstSeen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whenFirstSeen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $whenFirstSeen)) {
                $whenFirstSeen = str_replace('*', '%', $whenFirstSeen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::WHEN_FIRST_SEEN, $whenFirstSeen, $comparison);
    }

    /**
     * Filter the query on the call_comments column
     *
     * Example usage:
     * <code>
     * $query->filterByCallComments('fooValue');   // WHERE call_comments = 'fooValue'
     * $query->filterByCallComments('%fooValue%'); // WHERE call_comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callComments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallComments($callComments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callComments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callComments)) {
                $callComments = str_replace('*', '%', $callComments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALL_COMMENTS, $callComments, $comparison);
    }

    /**
     * Filter the query on the call_referred_to column
     *
     * Example usage:
     * <code>
     * $query->filterByCallReferredTo('fooValue');   // WHERE call_referred_to = 'fooValue'
     * $query->filterByCallReferredTo('%fooValue%'); // WHERE call_referred_to LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callReferredTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallReferredTo($callReferredTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callReferredTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callReferredTo)) {
                $callReferredTo = str_replace('*', '%', $callReferredTo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALL_REFERRED_TO, $callReferredTo, $comparison);
    }

    /**
     * Filter the query on the call_condition column
     *
     * Example usage:
     * <code>
     * $query->filterByCallCondition('fooValue');   // WHERE call_condition = 'fooValue'
     * $query->filterByCallCondition('%fooValue%'); // WHERE call_condition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callCondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByCallCondition($callCondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callCondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callCondition)) {
                $callCondition = str_replace('*', '%', $callCondition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::CALL_CONDITION, $callCondition, $comparison);
    }

    /**
     * Filter the query on the investigator_support column
     *
     * Example usage:
     * <code>
     * $query->filterByInvestigatorSupport('fooValue');   // WHERE investigator_support = 'fooValue'
     * $query->filterByInvestigatorSupport('%fooValue%'); // WHERE investigator_support LIKE '%fooValue%'
     * </code>
     *
     * @param     string $investigatorSupport The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByInvestigatorSupport($investigatorSupport = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($investigatorSupport)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $investigatorSupport)) {
                $investigatorSupport = str_replace('*', '%', $investigatorSupport);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::INVESTIGATOR_SUPPORT, $investigatorSupport, $comparison);
    }

    /**
     * Filter the query on the investigation_date column
     *
     * Example usage:
     * <code>
     * $query->filterByInvestigationDate('2011-03-14'); // WHERE investigation_date = '2011-03-14'
     * $query->filterByInvestigationDate('now'); // WHERE investigation_date = '2011-03-14'
     * $query->filterByInvestigationDate(array('max' => 'yesterday')); // WHERE investigation_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $investigationDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByInvestigationDate($investigationDate = null, $comparison = null)
    {
        if (is_array($investigationDate)) {
            $useMinMax = false;
            if (isset($investigationDate['min'])) {
                $this->addUsingAlias(ReportPeer::INVESTIGATION_DATE, $investigationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($investigationDate['max'])) {
                $this->addUsingAlias(ReportPeer::INVESTIGATION_DATE, $investigationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportPeer::INVESTIGATION_DATE, $investigationDate, $comparison);
    }

    /**
     * Filter the query on the investigation_lat_lon_location column
     *
     * Example usage:
     * <code>
     * $query->filterByInvestigationLatLonLocation('fooValue');   // WHERE investigation_lat_lon_location = 'fooValue'
     * $query->filterByInvestigationLatLonLocation('%fooValue%'); // WHERE investigation_lat_lon_location LIKE '%fooValue%'
     * </code>
     *
     * @param     string $investigationLatLonLocation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByInvestigationLatLonLocation($investigationLatLonLocation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($investigationLatLonLocation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $investigationLatLonLocation)) {
                $investigationLatLonLocation = str_replace('*', '%', $investigationLatLonLocation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::INVESTIGATION_LAT_LON_LOCATION, $investigationLatLonLocation, $comparison);
    }

    /**
     * Filter the query on the investigation_physical_location column
     *
     * Example usage:
     * <code>
     * $query->filterByInvestigationPhysicalLocation('fooValue');   // WHERE investigation_physical_location = 'fooValue'
     * $query->filterByInvestigationPhysicalLocation('%fooValue%'); // WHERE investigation_physical_location LIKE '%fooValue%'
     * </code>
     *
     * @param     string $investigationPhysicalLocation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByInvestigationPhysicalLocation($investigationPhysicalLocation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($investigationPhysicalLocation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $investigationPhysicalLocation)) {
                $investigationPhysicalLocation = str_replace('*', '%', $investigationPhysicalLocation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::INVESTIGATION_PHYSICAL_LOCATION, $investigationPhysicalLocation, $comparison);
    }

    /**
     * Filter the query on the investigation_species column
     *
     * Example usage:
     * <code>
     * $query->filterByInvestigationSpecies('fooValue');   // WHERE investigation_species = 'fooValue'
     * $query->filterByInvestigationSpecies('%fooValue%'); // WHERE investigation_species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $investigationSpecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByInvestigationSpecies($investigationSpecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($investigationSpecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $investigationSpecies)) {
                $investigationSpecies = str_replace('*', '%', $investigationSpecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::INVESTIGATION_SPECIES, $investigationSpecies, $comparison);
    }

    /**
     * Filter the query on the animal_not_found column
     *
     * Example usage:
     * <code>
     * $query->filterByAnimalNotFound(true); // WHERE animal_not_found = true
     * $query->filterByAnimalNotFound('yes'); // WHERE animal_not_found = true
     * </code>
     *
     * @param     boolean|string $animalNotFound The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByAnimalNotFound($animalNotFound = null, $comparison = null)
    {
        if (is_string($animalNotFound)) {
            $animalNotFound = in_array(strtolower($animalNotFound), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::ANIMAL_NOT_FOUND, $animalNotFound, $comparison);
    }

    /**
     * Filter the query on the investigation_condition column
     *
     * Example usage:
     * <code>
     * $query->filterByInvestigationCondition('fooValue');   // WHERE investigation_condition = 'fooValue'
     * $query->filterByInvestigationCondition('%fooValue%'); // WHERE investigation_condition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $investigationCondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByInvestigationCondition($investigationCondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($investigationCondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $investigationCondition)) {
                $investigationCondition = str_replace('*', '%', $investigationCondition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::INVESTIGATION_CONDITION, $investigationCondition, $comparison);
    }

    /**
     * Filter the query on the tags column
     *
     * Example usage:
     * <code>
     * $query->filterByTags('fooValue');   // WHERE tags = 'fooValue'
     * $query->filterByTags('%fooValue%'); // WHERE tags LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tags The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByTags($tags = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tags)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tags)) {
                $tags = str_replace('*', '%', $tags);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::TAGS, $tags, $comparison);
    }

    /**
     * Filter the query on the disposition column
     *
     * Example usage:
     * <code>
     * $query->filterByDisposition('fooValue');   // WHERE disposition = 'fooValue'
     * $query->filterByDisposition('%fooValue%'); // WHERE disposition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $disposition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByDisposition($disposition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($disposition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $disposition)) {
                $disposition = str_replace('*', '%', $disposition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::DISPOSITION, $disposition, $comparison);
    }

    /**
     * Filter the query on the seal_pickup column
     *
     * Example usage:
     * <code>
     * $query->filterBySealPickup('fooValue');   // WHERE seal_pickup = 'fooValue'
     * $query->filterBySealPickup('%fooValue%'); // WHERE seal_pickup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sealPickup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterBySealPickup($sealPickup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sealPickup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sealPickup)) {
                $sealPickup = str_replace('*', '%', $sealPickup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::SEAL_PICKUP, $sealPickup, $comparison);
    }

    /**
     * Filter the query on the sex column
     *
     * Example usage:
     * <code>
     * $query->filterBySex('fooValue');   // WHERE sex = 'fooValue'
     * $query->filterBySex('%fooValue%'); // WHERE sex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterBySex($sex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sex)) {
                $sex = str_replace('*', '%', $sex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the weight column
     *
     * Example usage:
     * <code>
     * $query->filterByWeight(1234); // WHERE weight = 1234
     * $query->filterByWeight(array(12, 34)); // WHERE weight IN (12, 34)
     * $query->filterByWeight(array('min' => 12)); // WHERE weight >= 12
     * $query->filterByWeight(array('max' => 12)); // WHERE weight <= 12
     * </code>
     *
     * @param     mixed $weight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(ReportPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(ReportPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportPeer::WEIGHT, $weight, $comparison);
    }

    /**
     * Filter the query on the straight_length column
     *
     * Example usage:
     * <code>
     * $query->filterByStraightLength(1234); // WHERE straight_length = 1234
     * $query->filterByStraightLength(array(12, 34)); // WHERE straight_length IN (12, 34)
     * $query->filterByStraightLength(array('min' => 12)); // WHERE straight_length >= 12
     * $query->filterByStraightLength(array('max' => 12)); // WHERE straight_length <= 12
     * </code>
     *
     * @param     mixed $straightLength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByStraightLength($straightLength = null, $comparison = null)
    {
        if (is_array($straightLength)) {
            $useMinMax = false;
            if (isset($straightLength['min'])) {
                $this->addUsingAlias(ReportPeer::STRAIGHT_LENGTH, $straightLength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($straightLength['max'])) {
                $this->addUsingAlias(ReportPeer::STRAIGHT_LENGTH, $straightLength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportPeer::STRAIGHT_LENGTH, $straightLength, $comparison);
    }

    /**
     * Filter the query on the contour_length column
     *
     * Example usage:
     * <code>
     * $query->filterByContourLength(1234); // WHERE contour_length = 1234
     * $query->filterByContourLength(array(12, 34)); // WHERE contour_length IN (12, 34)
     * $query->filterByContourLength(array('min' => 12)); // WHERE contour_length >= 12
     * $query->filterByContourLength(array('max' => 12)); // WHERE contour_length <= 12
     * </code>
     *
     * @param     mixed $contourLength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByContourLength($contourLength = null, $comparison = null)
    {
        if (is_array($contourLength)) {
            $useMinMax = false;
            if (isset($contourLength['min'])) {
                $this->addUsingAlias(ReportPeer::CONTOUR_LENGTH, $contourLength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contourLength['max'])) {
                $this->addUsingAlias(ReportPeer::CONTOUR_LENGTH, $contourLength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportPeer::CONTOUR_LENGTH, $contourLength, $comparison);
    }

    /**
     * Filter the query on the girth column
     *
     * Example usage:
     * <code>
     * $query->filterByGirth(1234); // WHERE girth = 1234
     * $query->filterByGirth(array(12, 34)); // WHERE girth IN (12, 34)
     * $query->filterByGirth(array('min' => 12)); // WHERE girth >= 12
     * $query->filterByGirth(array('max' => 12)); // WHERE girth <= 12
     * </code>
     *
     * @param     mixed $girth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByGirth($girth = null, $comparison = null)
    {
        if (is_array($girth)) {
            $useMinMax = false;
            if (isset($girth['min'])) {
                $this->addUsingAlias(ReportPeer::GIRTH, $girth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($girth['max'])) {
                $this->addUsingAlias(ReportPeer::GIRTH, $girth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportPeer::GIRTH, $girth, $comparison);
    }

    /**
     * Filter the query on the investigation_comments column
     *
     * Example usage:
     * <code>
     * $query->filterByInvestigationComments('fooValue');   // WHERE investigation_comments = 'fooValue'
     * $query->filterByInvestigationComments('%fooValue%'); // WHERE investigation_comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $investigationComments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByInvestigationComments($investigationComments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($investigationComments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $investigationComments)) {
                $investigationComments = str_replace('*', '%', $investigationComments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportPeer::INVESTIGATION_COMMENTS, $investigationComments, $comparison);
    }

    /**
     * Filter the query on the is_photo_taken column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPhotoTaken(true); // WHERE is_photo_taken = true
     * $query->filterByIsPhotoTaken('yes'); // WHERE is_photo_taken = true
     * </code>
     *
     * @param     boolean|string $isPhotoTaken The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsPhotoTaken($isPhotoTaken = null, $comparison = null)
    {
        if (is_string($isPhotoTaken)) {
            $isPhotoTaken = in_array(strtolower($isPhotoTaken), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_PHOTO_TAKEN, $isPhotoTaken, $comparison);
    }

    /**
     * Filter the query on the is_con_sick column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConSick(true); // WHERE is_con_sick = true
     * $query->filterByIsConSick('yes'); // WHERE is_con_sick = true
     * </code>
     *
     * @param     boolean|string $isConSick The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConSick($isConSick = null, $comparison = null)
    {
        if (is_string($isConSick)) {
            $isConSick = in_array(strtolower($isConSick), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_SICK, $isConSick, $comparison);
    }

    /**
     * Filter the query on the is_con_injured column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConInjured(true); // WHERE is_con_injured = true
     * $query->filterByIsConInjured('yes'); // WHERE is_con_injured = true
     * </code>
     *
     * @param     boolean|string $isConInjured The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConInjured($isConInjured = null, $comparison = null)
    {
        if (is_string($isConInjured)) {
            $isConInjured = in_array(strtolower($isConInjured), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_INJURED, $isConInjured, $comparison);
    }

    /**
     * Filter the query on the is_con_out_of_habitat column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConOutOfHabitat(true); // WHERE is_con_out_of_habitat = true
     * $query->filterByIsConOutOfHabitat('yes'); // WHERE is_con_out_of_habitat = true
     * </code>
     *
     * @param     boolean|string $isConOutOfHabitat The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConOutOfHabitat($isConOutOfHabitat = null, $comparison = null)
    {
        if (is_string($isConOutOfHabitat)) {
            $isConOutOfHabitat = in_array(strtolower($isConOutOfHabitat), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_OUT_OF_HABITAT, $isConOutOfHabitat, $comparison);
    }

    /**
     * Filter the query on the is_con_deemed_releasable column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConDeemedReleasable(true); // WHERE is_con_deemed_releasable = true
     * $query->filterByIsConDeemedReleasable('yes'); // WHERE is_con_deemed_releasable = true
     * </code>
     *
     * @param     boolean|string $isConDeemedReleasable The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConDeemedReleasable($isConDeemedReleasable = null, $comparison = null)
    {
        if (is_string($isConDeemedReleasable)) {
            $isConDeemedReleasable = in_array(strtolower($isConDeemedReleasable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_DEEMED_RELEASABLE, $isConDeemedReleasable, $comparison);
    }

    /**
     * Filter the query on the is_con_abandoned column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConAbandoned(true); // WHERE is_con_abandoned = true
     * $query->filterByIsConAbandoned('yes'); // WHERE is_con_abandoned = true
     * </code>
     *
     * @param     boolean|string $isConAbandoned The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConAbandoned($isConAbandoned = null, $comparison = null)
    {
        if (is_string($isConAbandoned)) {
            $isConAbandoned = in_array(strtolower($isConAbandoned), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_ABANDONED, $isConAbandoned, $comparison);
    }

    /**
     * Filter the query on the is_con_inaccessible column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConInaccessible(true); // WHERE is_con_inaccessible = true
     * $query->filterByIsConInaccessible('yes'); // WHERE is_con_inaccessible = true
     * </code>
     *
     * @param     boolean|string $isConInaccessible The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConInaccessible($isConInaccessible = null, $comparison = null)
    {
        if (is_string($isConInaccessible)) {
            $isConInaccessible = in_array(strtolower($isConInaccessible), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_INACCESSIBLE, $isConInaccessible, $comparison);
    }

    /**
     * Filter the query on the is_con_location_hazard_to_animal column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConLocationHazardToAnimal(true); // WHERE is_con_location_hazard_to_animal = true
     * $query->filterByIsConLocationHazardToAnimal('yes'); // WHERE is_con_location_hazard_to_animal = true
     * </code>
     *
     * @param     boolean|string $isConLocationHazardToAnimal The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConLocationHazardToAnimal($isConLocationHazardToAnimal = null, $comparison = null)
    {
        if (is_string($isConLocationHazardToAnimal)) {
            $isConLocationHazardToAnimal = in_array(strtolower($isConLocationHazardToAnimal), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL, $isConLocationHazardToAnimal, $comparison);
    }

    /**
     * Filter the query on the is_con_location_hazard_to_humans column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConLocationHazardToHumans(true); // WHERE is_con_location_hazard_to_humans = true
     * $query->filterByIsConLocationHazardToHumans('yes'); // WHERE is_con_location_hazard_to_humans = true
     * </code>
     *
     * @param     boolean|string $isConLocationHazardToHumans The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConLocationHazardToHumans($isConLocationHazardToHumans = null, $comparison = null)
    {
        if (is_string($isConLocationHazardToHumans)) {
            $isConLocationHazardToHumans = in_array(strtolower($isConLocationHazardToHumans), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS, $isConLocationHazardToHumans, $comparison);
    }

    /**
     * Filter the query on the is_con_unknown column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConUnknown(true); // WHERE is_con_unknown = true
     * $query->filterByIsConUnknown('yes'); // WHERE is_con_unknown = true
     * </code>
     *
     * @param     boolean|string $isConUnknown The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConUnknown($isConUnknown = null, $comparison = null)
    {
        if (is_string($isConUnknown)) {
            $isConUnknown = in_array(strtolower($isConUnknown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_UNKNOWN, $isConUnknown, $comparison);
    }

    /**
     * Filter the query on the is_con_other column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConOther(true); // WHERE is_con_other = true
     * $query->filterByIsConOther('yes'); // WHERE is_con_other = true
     * </code>
     *
     * @param     boolean|string $isConOther The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsConOther($isConOther = null, $comparison = null)
    {
        if (is_string($isConOther)) {
            $isConOther = in_array(strtolower($isConOther), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_CON_OTHER, $isConOther, $comparison);
    }

    /**
     * Filter the query on the is_action_left_at_site column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionLeftAtSite(true); // WHERE is_action_left_at_site = true
     * $query->filterByIsActionLeftAtSite('yes'); // WHERE is_action_left_at_site = true
     * </code>
     *
     * @param     boolean|string $isActionLeftAtSite The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionLeftAtSite($isActionLeftAtSite = null, $comparison = null)
    {
        if (is_string($isActionLeftAtSite)) {
            $isActionLeftAtSite = in_array(strtolower($isActionLeftAtSite), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_LEFT_AT_SITE, $isActionLeftAtSite, $comparison);
    }

    /**
     * Filter the query on the is_action_immediate_release_at_site column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionImmediateReleaseAtSite(true); // WHERE is_action_immediate_release_at_site = true
     * $query->filterByIsActionImmediateReleaseAtSite('yes'); // WHERE is_action_immediate_release_at_site = true
     * </code>
     *
     * @param     boolean|string $isActionImmediateReleaseAtSite The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionImmediateReleaseAtSite($isActionImmediateReleaseAtSite = null, $comparison = null)
    {
        if (is_string($isActionImmediateReleaseAtSite)) {
            $isActionImmediateReleaseAtSite = in_array(strtolower($isActionImmediateReleaseAtSite), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE, $isActionImmediateReleaseAtSite, $comparison);
    }

    /**
     * Filter the query on the is_action_relocated column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionRelocated(true); // WHERE is_action_relocated = true
     * $query->filterByIsActionRelocated('yes'); // WHERE is_action_relocated = true
     * </code>
     *
     * @param     boolean|string $isActionRelocated The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionRelocated($isActionRelocated = null, $comparison = null)
    {
        if (is_string($isActionRelocated)) {
            $isActionRelocated = in_array(strtolower($isActionRelocated), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_RELOCATED, $isActionRelocated, $comparison);
    }

    /**
     * Filter the query on the is_action_died_at_site column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionDiedAtSite(true); // WHERE is_action_died_at_site = true
     * $query->filterByIsActionDiedAtSite('yes'); // WHERE is_action_died_at_site = true
     * </code>
     *
     * @param     boolean|string $isActionDiedAtSite The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionDiedAtSite($isActionDiedAtSite = null, $comparison = null)
    {
        if (is_string($isActionDiedAtSite)) {
            $isActionDiedAtSite = in_array(strtolower($isActionDiedAtSite), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_DIED_AT_SITE, $isActionDiedAtSite, $comparison);
    }

    /**
     * Filter the query on the is_action_died_during_transport column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionDiedDuringTransport(true); // WHERE is_action_died_during_transport = true
     * $query->filterByIsActionDiedDuringTransport('yes'); // WHERE is_action_died_during_transport = true
     * </code>
     *
     * @param     boolean|string $isActionDiedDuringTransport The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionDiedDuringTransport($isActionDiedDuringTransport = null, $comparison = null)
    {
        if (is_string($isActionDiedDuringTransport)) {
            $isActionDiedDuringTransport = in_array(strtolower($isActionDiedDuringTransport), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT, $isActionDiedDuringTransport, $comparison);
    }

    /**
     * Filter the query on the is_action_euthanized_at_site column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionEuthanizedAtSite(true); // WHERE is_action_euthanized_at_site = true
     * $query->filterByIsActionEuthanizedAtSite('yes'); // WHERE is_action_euthanized_at_site = true
     * </code>
     *
     * @param     boolean|string $isActionEuthanizedAtSite The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionEuthanizedAtSite($isActionEuthanizedAtSite = null, $comparison = null)
    {
        if (is_string($isActionEuthanizedAtSite)) {
            $isActionEuthanizedAtSite = in_array(strtolower($isActionEuthanizedAtSite), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE, $isActionEuthanizedAtSite, $comparison);
    }

    /**
     * Filter the query on the is_action_euthanized_during_transport column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionEuthanizedDuringTransport(true); // WHERE is_action_euthanized_during_transport = true
     * $query->filterByIsActionEuthanizedDuringTransport('yes'); // WHERE is_action_euthanized_during_transport = true
     * </code>
     *
     * @param     boolean|string $isActionEuthanizedDuringTransport The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionEuthanizedDuringTransport($isActionEuthanizedDuringTransport = null, $comparison = null)
    {
        if (is_string($isActionEuthanizedDuringTransport)) {
            $isActionEuthanizedDuringTransport = in_array(strtolower($isActionEuthanizedDuringTransport), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT, $isActionEuthanizedDuringTransport, $comparison);
    }

    /**
     * Filter the query on the is_action_transferred_to_rehab column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionTransferredToRehab(true); // WHERE is_action_transferred_to_rehab = true
     * $query->filterByIsActionTransferredToRehab('yes'); // WHERE is_action_transferred_to_rehab = true
     * </code>
     *
     * @param     boolean|string $isActionTransferredToRehab The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionTransferredToRehab($isActionTransferredToRehab = null, $comparison = null)
    {
        if (is_string($isActionTransferredToRehab)) {
            $isActionTransferredToRehab = in_array(strtolower($isActionTransferredToRehab), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB, $isActionTransferredToRehab, $comparison);
    }

    /**
     * Filter the query on the is_action_other column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActionOther(true); // WHERE is_action_other = true
     * $query->filterByIsActionOther('yes'); // WHERE is_action_other = true
     * </code>
     *
     * @param     boolean|string $isActionOther The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByIsActionOther($isActionOther = null, $comparison = null)
    {
        if (is_string($isActionOther)) {
            $isActionOther = in_array(strtolower($isActionOther), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportPeer::IS_ACTION_OTHER, $isActionOther, $comparison);
    }

    /**
     * Filter the query on the volunteer_id column
     *
     * Example usage:
     * <code>
     * $query->filterByVolunteerId(1234); // WHERE volunteer_id = 1234
     * $query->filterByVolunteerId(array(12, 34)); // WHERE volunteer_id IN (12, 34)
     * $query->filterByVolunteerId(array('min' => 12)); // WHERE volunteer_id >= 12
     * $query->filterByVolunteerId(array('max' => 12)); // WHERE volunteer_id <= 12
     * </code>
     *
     * @see       filterByVolunteer()
     *
     * @param     mixed $volunteerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function filterByVolunteerId($volunteerId = null, $comparison = null)
    {
        if (is_array($volunteerId)) {
            $useMinMax = false;
            if (isset($volunteerId['min'])) {
                $this->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volunteerId['max'])) {
                $this->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteerId, $comparison);
    }

    /**
     * Filter the query by a related Volunteer object
     *
     * @param   Volunteer|PropelObjectCollection $volunteer The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ReportQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVolunteer($volunteer, $comparison = null)
    {
        if ($volunteer instanceof Volunteer) {
            return $this
                ->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteer->getId(), $comparison);
        } elseif ($volunteer instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteer->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByVolunteer() only accepts arguments of type Volunteer or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Volunteer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function joinVolunteer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Volunteer');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Volunteer');
        }

        return $this;
    }

    /**
     * Use the Volunteer relation Volunteer object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VolunteerQuery A secondary query class using the current class as primary query
     */
    public function useVolunteerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVolunteer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Volunteer', 'VolunteerQuery');
    }

    /**
     * Filter the query by a related ReportComments object
     *
     * @param   ReportComments|PropelObjectCollection $reportComments  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ReportQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByReportComments($reportComments, $comparison = null)
    {
        if ($reportComments instanceof ReportComments) {
            return $this
                ->addUsingAlias(ReportPeer::ID, $reportComments->getReportId(), $comparison);
        } elseif ($reportComments instanceof PropelObjectCollection) {
            return $this
                ->useReportCommentsQuery()
                ->filterByPrimaryKeys($reportComments->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByReportComments() only accepts arguments of type ReportComments or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ReportComments relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function joinReportComments($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ReportComments');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ReportComments');
        }

        return $this;
    }

    /**
     * Use the ReportComments relation ReportComments object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ReportCommentsQuery A secondary query class using the current class as primary query
     */
    public function useReportCommentsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinReportComments($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ReportComments', 'ReportCommentsQuery');
    }

    /**
     * Filter the query by a related Attachment object
     *
     * @param   Attachment|PropelObjectCollection $attachment  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ReportQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAttachment($attachment, $comparison = null)
    {
        if ($attachment instanceof Attachment) {
            return $this
                ->addUsingAlias(ReportPeer::ID, $attachment->getReportId(), $comparison);
        } elseif ($attachment instanceof PropelObjectCollection) {
            return $this
                ->useAttachmentQuery()
                ->filterByPrimaryKeys($attachment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAttachment() only accepts arguments of type Attachment or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Attachment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function joinAttachment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Attachment');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Attachment');
        }

        return $this;
    }

    /**
     * Use the Attachment relation Attachment object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AttachmentQuery A secondary query class using the current class as primary query
     */
    public function useAttachmentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttachment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Attachment', 'AttachmentQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Report $report Object to remove from the list of results
     *
     * @return ReportQuery The current query, for fluid interface
     */
    public function prune($report = null)
    {
        if ($report) {
            $this->addUsingAlias(ReportPeer::ID, $report->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
