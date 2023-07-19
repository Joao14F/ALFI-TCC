CREATE TABLE modelo (
  `Id modelo` INT NOT NULL AUTO_INCREMENT,
  `Título` VARCHAR(50) NOT NULL,
  `Sustentável` VARCHAR(50) NOT NULL,
  `Tipo` VARCHAR(50) NOT NULL,
  `Comprimento` VARCHAR(50),
  `Quadril` VARCHAR(50),
  `Cintura` VARCHAR(50),
  `Gancho` VARCHAR(50),
  `Arquivo` VARCHAR(200) NOT NULL,
  `Tempo` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`Id modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Cadastro` VARCHAR(120) NOT NULL,
  `Nome usuário` VARCHAR(30) NOT NULL,
  `E-mail usuário` VARCHAR(30) NOT NULL,
  `Telefone usuário` VARCHAR(30) NOT NULL,
  `Senha usuário` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`Id usuário`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;