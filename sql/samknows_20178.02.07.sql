CREATE DATABASE IF NOT EXISTS samknows;

USE samknows;

CREATE TABLE
IF NOT EXISTS `metrics` (
    `id` BIGINT (20) UNSIGNED NOT NULL AUTO_INCREMENT,
    unit SMALLINT COLLATE utf8_bin NOT NULL,
    metric VARCHAR (40) COLLATE utf8_bin NOT NULL
    `timestamp` datetime NOT NULL
    mean FLOAT COLLATE utf8_bin NOT NULL,
    median FLOAT COLLATE utf8_bin NOT NULL,
    minimum FLOAT COLLATE utf8_bin NOT NULL,
    maximum FLOAT COLLATE utf8_bin NOT NULL,
    sample_size INT COLLATE utf8_bin NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8 COLLATE = utf8_bin;

ALTER TABLE `metrics` ADD INDEX `metrics_index_1` (`unit`, `metric`, `timestamp`);