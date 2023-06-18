CREATE TABLE `modelo` (
  `Id modelo` int(11) NOT NULL,
  `Título` varchar(50) NOT NULL,
  `Sustentável` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Comprimento` varchar(50) DEFAULT NULL,
  `Quadril` varchar(50) DEFAULT NULL,
  `Cintura` varchar(50) DEFAULT NULL,
  `Gancho` varchar(50) DEFAULT NULL,
  `Arquivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `moderador` (
  `Id moderador` int(11) NOT NULL,
  `Cadastro moderador` varchar(90) NOT NULL,
  `Nome moderador` varchar(30) NOT NULL,
  `E-mail moderador` varchar(30) NOT NULL,
  `Senha moderador` varchar(30) NOT NULL,
  `Modelos inspecionados` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `usuário` (
  `Id usuário` int(11) NOT NULL,
  `Cadastro` varchar(120) NOT NULL,
  `Nome usuário` varchar(30) NOT NULL,
  `E-mail usuário` varchar(30) NOT NULL,
  `Telefone usuário` varchar(30) NOT NULL,
  `Senha usuário` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `modelo`
  ADD PRIMARY KEY (`Id modelo`);

ALTER TABLE `moderador`
  ADD PRIMARY KEY (`Id moderador`);

ALTER TABLE `usuário`
  ADD PRIMARY KEY (`Id usuário`);

ALTER TABLE `modelo`
  MODIFY `Id modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `moderador`
  MODIFY `Id moderador` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuário`
  MODIFY `Id usuário` int(11) NOT NULL AUTO_INCREMENT;