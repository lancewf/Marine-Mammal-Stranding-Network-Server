
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- report
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `report`;


CREATE TABLE `report`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'id',
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
	`investigation_lat_lon_location` VARCHAR(100),
	`investigation_physical_location` VARCHAR(100),
	`investigation_species` VARCHAR(100),
	`animal_not_found` TINYINT,
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
	`is_photo_taken` TINYINT,
	`volunteer_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `report_FI_1` (`volunteer_id`),
	CONSTRAINT `report_FK_1`
		FOREIGN KEY (`volunteer_id`)
		REFERENCES `volunteer` (`id`)
) ENGINE=MyISAM COMMENT='a report';

#-----------------------------------------------------------------------------
#-- report_comments
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `report_comments`;


CREATE TABLE `report_comments`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'id',
	`index` INTEGER  NOT NULL COMMENT 'order',
	`comments` TEXT,
	`report_id` INTEGER  NOT NULL,
	`volunteer_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `report_comments_FI_1` (`report_id`),
	CONSTRAINT `report_comments_FK_1`
		FOREIGN KEY (`report_id`)
		REFERENCES `report` (`id`),
	INDEX `report_comments_FI_2` (`volunteer_id`),
	CONSTRAINT `report_comments_FK_2`
		FOREIGN KEY (`volunteer_id`)
		REFERENCES `volunteer` (`id`)
) ENGINE=MyISAM COMMENT='comments on a report';

#-----------------------------------------------------------------------------
#-- blog_entry
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog_entry`;


CREATE TABLE `blog_entry`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'id',
	`title` VARCHAR(100) COMMENT 'title of the blog entry',
	`message` TEXT,
	`day_of_month` INTEGER,
	`month` INTEGER,
	`year` INTEGER,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM COMMENT='attachments to a report';

#-----------------------------------------------------------------------------
#-- blog_entry_comments
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog_entry_comments`;


CREATE TABLE `blog_entry_comments`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'id',
	`index` INTEGER  NOT NULL COMMENT 'order',
	`comments` TEXT,
	`blog_entry_id` INTEGER  NOT NULL,
	`volunteer_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `blog_entry_comments_FI_1` (`blog_entry_id`),
	CONSTRAINT `blog_entry_comments_FK_1`
		FOREIGN KEY (`blog_entry_id`)
		REFERENCES `blog_entry` (`id`),
	INDEX `blog_entry_comments_FI_2` (`volunteer_id`),
	CONSTRAINT `blog_entry_comments_FK_2`
		FOREIGN KEY (`volunteer_id`)
		REFERENCES `volunteer` (`id`)
) ENGINE=MyISAM COMMENT='comments on a blog entry';

#-----------------------------------------------------------------------------
#-- attachment
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `attachment`;


CREATE TABLE `attachment`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'id',
	`file_name` VARCHAR(100) COMMENT 'the name of the file',
	`comments` TEXT,
	`report_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `attachment_FI_1` (`report_id`),
	CONSTRAINT `attachment_FK_1`
		FOREIGN KEY (`report_id`)
		REFERENCES `report` (`id`)
) ENGINE=MyISAM COMMENT='attachments to a report';

#-----------------------------------------------------------------------------
#-- volunteer
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `volunteer`;


CREATE TABLE `volunteer`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'id',
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
	`sunday_any_time` TINYINT,
	`monday_any_time` TINYINT,
	`tuesday_any_time` TINYINT,
	`wednesday_any_time` TINYINT,
	`thursday_any_time` TINYINT,
	`friday_any_time` TINYINT,
	`saturday_any_time` TINYINT,
	`sunday_no_time` TINYINT,
	`monday_no_time` TINYINT,
	`tuesday_no_time` TINYINT,
	`wednesday_no_time` TINYINT,
	`thursday_no_time` TINYINT,
	`friday_no_time` TINYINT,
	`saturday_no_time` TINYINT,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM COMMENT='a volunteer';

#-----------------------------------------------------------------------------
#-- volunteer_hours
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `volunteer_hours`;


CREATE TABLE `volunteer_hours`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'id',
	`total_hours` DOUBLE,
	`mileage` INTEGER,
	`comments` TEXT,
	`day_of_month` INTEGER,
	`month` INTEGER,
	`year` INTEGER,
	`volunteer_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `volunteer_hours_FI_1` (`volunteer_id`),
	CONSTRAINT `volunteer_hours_FK_1`
		FOREIGN KEY (`volunteer_id`)
		REFERENCES `volunteer` (`id`)
) ENGINE=MyISAM COMMENT='a volunteer';

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
