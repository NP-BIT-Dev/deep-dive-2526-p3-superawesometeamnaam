    CREATE DATABASE IF NOT EXISTS `ArcNoordNederland` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
    USE `ArcNoordNederland`;
    CREATE TABLE IF NOT EXISTS `fotos` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `categorie` varchar(255) NOT NULL,
    `url` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    );

    INSERT INTO `fotos` (`categorie`, `url`) VALUES
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/DSC0080-1536x1024.jpg'),
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/DSC0286-1536x1024.jpg'),
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/DSC0267-1024x1536.jpg'),
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/DSC0090-1024x1536.jpg'),
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/geel-Myrthe-1152x1536.jpg');