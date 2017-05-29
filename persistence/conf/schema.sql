
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- report
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `report`;

CREATE TABLE `report`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'id',
    `responder` VARCHAR(100),
    `call_date` DATETIME,
    `call_from` VARCHAR(100),
    `caller_name` VARCHAR(100),
    `caller_phone_number` VARCHAR(100),
    `call_location` VARCHAR(100),
    `call_species` VARCHAR(100),
    `when_first_seen` VARCHAR(100),
    `call_comments` TEXT,
    `call_referred_to` VARCHAR(100),
    `call_condition` VARCHAR(100),
    `investigator_support` VARCHAR(100),
    `investigation_date` DATETIME,
    `investigation_lat_location` VARCHAR(100),
    `investigation_lon_location` VARCHAR(100),
    `investigation_location_accuracy` VARCHAR(100),
    `investigation_physical_location` VARCHAR(100),
    `investigation_species` VARCHAR(100),
    `animal_not_found` TINYINT(1),
    `investigation_condition` VARCHAR(100),
    `tags` VARCHAR(100),
    `disposition` VARCHAR(100),
    `seal_pickup` VARCHAR(100),
    `sex` VARCHAR(100),
    `weight` DOUBLE,
    `straight_length` DOUBLE,
    `contour_length` DOUBLE,
    `girth` DOUBLE,
    `investigation_comments` TEXT,
    `is_photo_taken` TINYINT(1),
    `is_con_sick` TINYINT(1),
    `is_con_injured` TINYINT(1),
    `is_con_out_of_habitat` TINYINT(1),
    `is_con_deemed_releasable` TINYINT(1),
    `is_con_abandoned` TINYINT(1),
    `is_con_inaccessible` TINYINT(1),
    `is_con_location_hazard_to_animal` TINYINT(1),
    `is_con_location_hazard_to_humans` TINYINT(1),
    `is_con_unknown` TINYINT(1),
    `is_con_other` TINYINT(1),
    `is_action_left_at_site` TINYINT(1),
    `is_action_immediate_release_at_site` TINYINT(1),
    `is_action_relocated` TINYINT(1),
    `is_action_died_at_site` TINYINT(1),
    `is_action_died_during_transport` TINYINT(1),
    `is_action_euthanized_at_site` TINYINT(1),
    `is_action_euthanized_during_transport` TINYINT(1),
    `is_action_transferred_to_rehab` TINYINT(1),
    `is_action_other` TINYINT(1),
    `relocated_location` VARCHAR(100) COMMENT 'a description of the relocated location',
    `volunteer_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `report_FI_1` (`volunteer_id`)
) ENGINE=MyISAM COMMENT='a report';

-- ---------------------------------------------------------------------
-- report_comments
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `report_comments`;

CREATE TABLE `report_comments`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'id',
    `index` INTEGER NOT NULL COMMENT 'order',
    `comments` TEXT,
    `report_id` INTEGER NOT NULL,
    `volunteer_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `report_comments_FI_1` (`report_id`),
    INDEX `report_comments_FI_2` (`volunteer_id`)
) ENGINE=MyISAM COMMENT='comments on a report';

-- ---------------------------------------------------------------------
-- report_human_interaction_section
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `report_human_interaction_section`;

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

-- ---------------------------------------------------------------------
-- blog_entry
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `blog_entry`;

CREATE TABLE `blog_entry`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'id',
    `title` VARCHAR(100) COMMENT 'title of the blog entry',
    `message` TEXT,
    `date` DATETIME NOT NULL COMMENT 'date',
    PRIMARY KEY (`id`)
) ENGINE=MyISAM COMMENT='attachments to a report';

-- ---------------------------------------------------------------------
-- blog_entry_comments
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `blog_entry_comments`;

CREATE TABLE `blog_entry_comments`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'id',
    `index` INTEGER NOT NULL COMMENT 'order',
    `comments` TEXT,
    `blog_entry_id` INTEGER NOT NULL,
    `volunteer_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `blog_entry_comments_FI_1` (`blog_entry_id`),
    INDEX `blog_entry_comments_FI_2` (`volunteer_id`)
) ENGINE=MyISAM COMMENT='comments on a blog entry';

-- ---------------------------------------------------------------------
-- attachment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `attachment`;

CREATE TABLE `attachment`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'id',
    `file_name` VARCHAR(100) COMMENT 'the name of the file',
    `comments` TEXT,
    `report_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `attachment_FI_1` (`report_id`)
) ENGINE=MyISAM COMMENT='attachments to a report';

-- ---------------------------------------------------------------------
-- volunteer
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `volunteer`;

CREATE TABLE `volunteer`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'id',
    `first_name` VARCHAR(100),
    `last_name` VARCHAR(100),
    `city` VARCHAR(100),
    `state` VARCHAR(100),
    `zip` VARCHAR(100),
    `streetAddress` VARCHAR(100),
    `vehicle` VARCHAR(100),
    `island` VARCHAR(100),
    `email` VARCHAR(100),
    `training` VARCHAR(100),
    `comments` TEXT,
    `phoneNumber` VARCHAR(100),
    `sunday_from_hour` INTEGER,
    `monday_from_hour` INTEGER,
    `tuesday_from_hour` INTEGER,
    `wednesday_from_hour` INTEGER,
    `thursday_from_hour` INTEGER,
    `friday_from_hour` INTEGER,
    `saturday_from_hour` INTEGER,
    `sunday_to_hour` INTEGER,
    `monday_to_hour` INTEGER,
    `tuesday_to_hour` INTEGER,
    `wednesday_to_hour` INTEGER,
    `thursday_to_hour` INTEGER,
    `friday_to_hour` INTEGER,
    `saturday_to_hour` INTEGER,
    `sunday_any_time` TINYINT(1),
    `monday_any_time` TINYINT(1),
    `tuesday_any_time` TINYINT(1),
    `wednesday_any_time` TINYINT(1),
    `thursday_any_time` TINYINT(1),
    `friday_any_time` TINYINT(1),
    `saturday_any_time` TINYINT(1),
    `sunday_no_time` TINYINT(1),
    `monday_no_time` TINYINT(1),
    `tuesday_no_time` TINYINT(1),
    `wednesday_no_time` TINYINT(1),
    `thursday_no_time` TINYINT(1),
    `friday_no_time` TINYINT(1),
    `saturday_no_time` TINYINT(1),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM COMMENT='a volunteer';

-- ---------------------------------------------------------------------
-- volunteer_hours
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `volunteer_hours`;

CREATE TABLE `volunteer_hours`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'id',
    `total_hours` DOUBLE,
    `mileage` INTEGER,
    `comments` TEXT,
    `day_of_month` INTEGER,
    `month` INTEGER,
    `year` INTEGER,
    `volunteer_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `volunteer_hours_FI_1` (`volunteer_id`)
) ENGINE=MyISAM COMMENT='a volunteer';

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
