-- DATA TYPE 1: Event
CREATE TABLE IF NOT EXISTS `#__srh_events` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `start_date` DATETIME DEFAULT NULL,
  `end_date` DATETIME DEFAULT NULL,
  `is_free` TINYINT(1) NOT NULL DEFAULT 1,
  `event_category` VARCHAR(50) NOT NULL DEFAULT 'other',
  `venue` VARCHAR(255) DEFAULT NULL,
  `ticket_link` VARCHAR(512) DEFAULT NULL,
  `capacity` INT DEFAULT NULL,
  `state` TINYINT NOT NULL DEFAULT 1,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- DATA TYPE 2: Ambassador
CREATE TABLE IF NOT EXISTS `#__srh_ambassadors` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `bio` TEXT,
  `phone` VARCHAR(50) DEFAULT NULL,
  `nationality` VARCHAR(100) DEFAULT NULL,
  `faculty` VARCHAR(255) DEFAULT NULL,
  `active` TINYINT(1) NOT NULL DEFAULT 1,
  `joined_date` DATE DEFAULT NULL,
  `state` TINYINT NOT NULL DEFAULT 1,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- DATA TYPE 3: Club
CREATE TABLE IF NOT EXISTS `#__srh_clubs` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `category` VARCHAR(100) DEFAULT NULL,
  `meeting_schedule` VARCHAR(255) DEFAULT NULL,
  `contact_email` VARCHAR(255) DEFAULT NULL,
  `state` TINYINT NOT NULL DEFAULT 1,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Seed rows (same content as Strapi demo)
INSERT INTO `#__srh_events` (`title`,`description`,`start_date`,`is_free`,`event_category`,`venue`) VALUES
('Berlin Inclusive Film Festival','Films by and about people with disabilities. Audio descriptions, subtitles, and sign language.','2026-08-15 14:00:00',0,'cultural','Tempodrom, Berlin'),
('SRH Open Campus Day','Meet ambassadors and tour the inclusive campus.','2026-09-05 10:00:00',1,'academic','Aufbau Haus, Berlin'),
('Handic.app Public Launch Event','Live demos and panels on accessible event booking.','2026-10-17 17:00:00',1,'other','Humboldt Forum, Berlin');

INSERT INTO `#__srh_ambassadors` (`name`,`email`,`bio`,`nationality`,`faculty`,`active`,`joined_date`) VALUES
('Elena Müller','elena.mueller@srh.de','Web developer and accessibility advocate.','German','Information & Communication Technology',1,'2023-09-01'),
('Ahmed Hassan','ahmed.hassan@srh.de','International business ambassador and cultural bridge.','Egyptian','Business & Management',1,'2023-09-01'),
('Sofia Martínez','sofia.martinez@srh.de','Design lead for WCAG-compliant ambassador materials.','Spanish','Design & Media Arts',1,'2024-03-01');

INSERT INTO `#__srh_clubs` (`name`,`description`,`category`,`meeting_schedule`,`contact_email`) VALUES
('Tech & Innovation Club','Hackathons and project showcases.','Technology','Every Wednesday 18:00','tech@srh-clubs.de'),
('Inclusive Arts Collective','Art centred on disabled and marginalised voices.','Arts','Every Friday 17:00','arts@srh-clubs.de'),
('SRH Debate Society','Debate on digital rights and accessibility.','Academic','Every Tuesday 19:00','debate@srh-clubs.de');
