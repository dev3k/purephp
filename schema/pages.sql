CREATE TABLE `purephp`.`pages`
(
    `id`      BIGINT NOT NULL AUTO_INCREMENT,
    `title`   VARCHAR(255) NULL,
    `content` TEXT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
