    CREATE DATABASE IF NOT EXISTS `ArcNoordNederland` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
    USE `ArcNoordNederland`;
    DROP TABLE IF EXISTS `fotos`;
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
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/geel-Myrthe-1152x1536.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/0d6c2f80215e5120f3b9f510a3344c29-1.jpg'),
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/IMG-20251213-WA0142-1536x864.jpg'),
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/IMG-20251213-WA0074-1536x1152.jpg'),
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/IMG-20251213-WA0073-1152x1536.jpg'),
    ('Kerstshow 2025', 'https://arcnoordnederland.com/wp-content/uploads/2026/01/DSC0109-1536x1024.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/1ff5657a45b2db58c54c5bb79049e3be.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/2d9a0a48627092d6d02dade1c2740971-1.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/2d66dae4827619af577daa9c2e0e18f0.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/3bbdcbd7070229557fc182e5295a554a.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/038d533222c4b69144ee944cc455a342.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/251cf0d3dad3c3de244986e7c7b87aa7.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/13530d4e28f89ac68997113765259884.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/6338565cfb8c6484f0ecf719261bb9c8_400x400.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/3869d14ec210d8b5d2d424e4c02356fe.jpg'),
    ('Eindshow 2019', 'https://arcnoordnederland.com/wp-content/uploads/2024/03/d5cb64833812252d2c54b251ec776b4a.jpg');
    