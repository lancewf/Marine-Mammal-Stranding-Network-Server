ALTER TABLE report ADD COLUMN is_con_sick BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_injured BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_out_of_habitat BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_deemed_releasable BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_abandoned BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_inaccessible BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_location_hazard_to_animal BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_location_hazard_to_humans BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_unknown BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_con_other BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_left_at_site BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_immediate_release_at_site BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_relocated BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_died_at_site BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_died_during_transport BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_euthanized_at_site BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_euthanized_during_transport BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_transferred_to_rehab BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN is_action_other BOOLEAN DEFAULT FALSE;
ALTER TABLE report ADD COLUMN relocated_location VARCHAR(100) DEFAULT '';


CREATE TABLE `report_human_interaction_section`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'id',
    `name` VARCHAR(100) COMMENT 'The name of the section of the animal examined',
    `is_examined` TINYINT(1) COMMENT 'Was the section examined',
    `possible_hi_lesion` VARCHAR(100) COMMENT 'was the section lesion caused by human interaction',
    `possible_source` VARCHAR(100) COMMENT 'what was the souce of the lesion',
    `scavenger_damage` VARCHAR(100) COMMENT 'does the section of the animal have scavenger damage',
    `report_id` INTEGER NOT NULL COMMENT 'foreign id to the main report',
    PRIMARY KEY (`id`),
    INDEX `report_human_interaction_section_FI_1` (`report_id`)
) ENGINE=MyISAM COMMENT='examined human interactions on the animal';

