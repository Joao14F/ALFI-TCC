CREATE TABLE modelo (
  `Id modelo` INT NOT NULL AUTO_INCREMENT,
  `Título` VARCHAR(50) NOT NULL,
  `Tecido` VARCHAR(50) NOT NULL,
  `Sustentável` VARCHAR(50) NOT NULL,
  `Tipo` VARCHAR(50) NOT NULL,
  `Comprimento` VARCHAR(50),
  `Quadril` VARCHAR(50),
  `Cintura` VARCHAR(50),
  `Gancho` VARCHAR(50),
  `Capa` varchar(50) NOT NULL,
  `Moldes` varchar(200) NOT NULL,
  `Usuário cadastrador` INT NULL,
  `Verificado` VARCHAR(10) NOT NULL DEFAULT 'Não',
  PRIMARY KEY (`Id modelo`)
  CONSTRAINT `cadastrador` FOREIGN KEY (`Usuário cadastrador`) 
  REFERENCES `usuário`(`Id usuário`) ON DELETE CASCADE ON UPDATE CASCADE;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `modelo` (`Id modelo`, `Título`, `Tecido`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Capa`, `Moldes`, `Usuário cadastrador`, `Verificado`) VALUES
(21, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Não'),
(22, 'Bermuda 2', 'Palha', 'Não', 'Bermuda', '34', '58,8', '52', '29', 'Arquivos/Capas/64f261dc28169.jpg', 'Arquivos/Moldes/64f261dc283a8.jpg', 2, 'Não');

CREATE TABLE moderador (
  `Id moderador` INT NOT NULL AUTO_INCREMENT,
  `Nome moderador` VARCHAR(30) NOT NULL,
  `E-mail moderador` VARCHAR(30) NOT NULL,
  `Senha moderador` VARCHAR(30) NOT NULL,
  `Modelos inspecionados` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`Id moderador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `moderador` (`Id moderador`, `Nome moderador`, `E-mail moderador`, `Senha moderador`) VALUES
(1, 'Moderador', '1@adm', '123');

CREATE TABLE usuário (
  `Id usuário` INT NOT NULL AUTO_INCREMENT,
  `Nome usuário` VARCHAR(30) NOT NULL,
  `E-mail usuário` VARCHAR(30) NOT NULL,
  `Telefone usuário` VARCHAR(30) NOT NULL,
  `Senha usuário` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`Id usuário`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuário` (`Id usuário`, `Nome usuário`, `E-mail usuário`, `Telefone usuário`, `Senha usuário`) VALUES
(1, 'eu', 'eu@gmail.com', '123456', '123'),
(2, 'jf', 'jfranciscobratti@gmail.com', '48998340172', '123'),
(3, 'victor', 'victorgraeff.sb@gmail.com', '12345678910', 'senha12345678910');
