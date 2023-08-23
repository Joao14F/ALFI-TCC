CREATE TABLE modelo (
  `Id modelo` INT NOT NULL AUTO_INCREMENT,
  `Título` VARCHAR(50) NOT NULL,
  `Sustentável` VARCHAR(50) NOT NULL,
  `Tipo` VARCHAR(50) NOT NULL,
  `Comprimento` VARCHAR(50),
  `Quadril` VARCHAR(50),
  `Cintura` VARCHAR(50),
  `Gancho` VARCHAR(50),
  `Capa` varchar(50) NOT NULL,
  `Moldes` varchar(200) NOT NULL,
  PRIMARY KEY (`Id modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `modelo` (`Id modelo`, `Título`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Capa`, `Moldes`) VALUES
(1, 'nf', 'Não', 'Saia', '432', '63', '75', NULL, 'Arquivos/Capas/64cbd60149a1e.jpg', 'Arquivos/Moldes/64cbd60149b79.jpg'),
(2, 'saia', 'Sim', 'Saia', '1', '2', '3', NULL, 'Arquivos/Capas/64cbea17eff7a.jpg', 'Arquivos/Moldes/64cbea17f03c8.jpg,Arquivos/Moldes/64cbea17f06dd.jpg,Arquivos/Moldes/64cbea17f0950.jpg'),
(3, '35', 'Sim', 'Calça', '0742', '68', '169', '13669', 'Arquivos/Capas/64d68d159d8a6.png', 'Arquivos/Moldes/64d68d159db8c.png,Arquivos/Moldes/64d68d159ddef.png,Arquivos/Moldes/64d68d159e063.png');

CREATE TABLE moderador (
  `Id moderador` INT NOT NULL AUTO_INCREMENT,
  `Cadastro moderador` VARCHAR(90) NOT NULL,
  `Nome moderador` VARCHAR(30) NOT NULL,
  `E-mail moderador` VARCHAR(30) NOT NULL,
  `Senha moderador` VARCHAR(30) NOT NULL,
  `Modelos inspecionados` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`Id moderador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE usuário (
  `Id usuário` INT NOT NULL AUTO_INCREMENT,
  `Nome usuário` VARCHAR(30) NOT NULL,
  `E-mail usuário` VARCHAR(30) NOT NULL,
  `Telefone usuário` VARCHAR(30) NOT NULL,
  `Senha usuário` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`Id usuário`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuário` (`Id usuário`, `Nome usuário`, `E-mail usuário`, `Telefone usuário`, `Senha usuário`) VALUES
(1, 'JOÃO FRANCISCO', 'eu@gmail.com', '48998340172', '12345');
