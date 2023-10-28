CREATE TABLE `modelo` (
  `Id modelo` int(11) NOT NULL,
  `Título` varchar(50) NOT NULL,
  `Tecido` varchar(50) DEFAULT NULL,
  `Sustentável` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Comprimento` varchar(50) DEFAULT NULL,
  `Quadril` varchar(50) DEFAULT NULL,
  `Cintura` varchar(50) DEFAULT NULL,
  `Gancho` varchar(50) DEFAULT NULL,
  `Ombro` varchar(50) DEFAULT NULL,
  `Busto` varchar(50) DEFAULT NULL,
  `Comprimento de manga` varchar(50) DEFAULT NULL,
  `Comprimento de cintura` varchar(50) DEFAULT NULL,
  `Punho` varchar(50) DEFAULT NULL,
  `Capa` varchar(50) NOT NULL,
  `Moldes` varchar(200) NOT NULL,
  `Usuário cadastrador` int(11) DEFAULT NULL,
  `Verificado` varchar(10) NOT NULL DEFAULT 'Não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `modelo` (`Id modelo`, `Título`, `Tecido`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Ombro`, `Busto`, `Comprimento de manga`, `Comprimento de cintura`, `Punho`, `Capa`, `Moldes`, `Usuário cadastrador`, `Verificado`) VALUES
(21, 'Bermuda 155555555555555555555555555555555555555555', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Não'),
(23, 'Bermuda 3', '', 'Sim', 'Bermuda', '78,75', '60', '52', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f4a4de0dd2d.jpg', 'Arquivos/Moldes/64f4a4de0e02b.jpg', 1, 'Não'),
(24, 'Bermuda 4', '', 'Sim', 'Bermuda', '78,75', '60', '52', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f4a526e4b07.jpg', 'Arquivos/Moldes/64f4a526e4de3.jpg', 1, 'Sim por 1'),
(25, 'Bermuda 5', '', 'Sim', 'Bermuda', '78,75', '60', '52', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f4a568c756a.jpg', 'Arquivos/Moldes/64f4a568c780d.jpg', 1, 'Não'),
(26, 'bermuda muito foda', 'plástico ', 'Sim', 'Bermuda', '4', '5', '2', '6', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f4a589dfeae.jpg', 'Arquivos/Moldes/64f4a589e016d.jpg', 1, 'Sim por 1'),
(27, 'g', 'u', 'Sim', 'Bermuda', '3', '4', '1', '6', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f4a5a0a75d8.jpg', 'Arquivos/Moldes/64f4a5a0a795b.jpg', 1, 'Sim por 1'),
(28, '6', '3', 'Sim', 'Calça', '8', '5', '57', '7', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f4a5ce2e0c0.jpg', 'Arquivos/Moldes/64f4a5ce2e4c9.jpg', 1, 'Não'),
(29, '1', 'folha', 'Não', 'Bermuda', '7', '5', '5', '7', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f4a5f70123e.jpg', 'Arquivos/Moldes/64f4a5f7015db.jpg', 1, 'Não'),
(30, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Sim por 1'),
(32, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Não'),
(34, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Sim por 1'),
(36, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Sim por 1'),
(38, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Não'),
(42, '1', '3', 'Não', 'Blusa', '4', '6', '1', '7', '9', '9', NULL, NULL, '4', 'Arquivos/Capas/653713dd42a48.jpg', 'Arquivos/Moldes/653713dd43101.jpg', 2, 'Não'),
(43, '1', '3', 'Não', 'Bermuda', '2', '3', '1', '4', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/6538269be3168.jpg', 'Arquivos/Moldes/6538269be4161.jpg', 2, 'Sim por 1'),
(44, '4', '2', 'Não', 'Camisa', '5', '6', '3', NULL, '8', '6', NULL, NULL, NULL, 'Arquivos/Capas/65387cc1dd716.jpg', 'Arquivos/Moldes/65387cc1de261.jpg', 2, 'Sim por 1'),
(45, 'j', 'r', 'Sim', 'Vestido', '6', '7', '1', '8', '9', '3', NULL, NULL, NULL, 'Arquivos/Capas/65388e9aca624.jpg', 'Arquivos/Moldes/65388e9acadd3.jpg', 2, 'Sim por 1'),
(46, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Não'),
(47, 'Bermuda 2', 'Palha', 'Não', 'Bermuda', '34', '58,8', '52', '29', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f261dc28169.jpg', 'Arquivos/Moldes/64f261dc283a8.jpg', 2, 'Sim por 1'),
(48, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Não'),
(49, 'Bermuda 2', 'Palha', 'Não', 'Bermuda', '34', '58,8', '52', '29', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f261dc28169.jpg', 'Arquivos/Moldes/64f261dc283a8.jpg', 2, 'Sim por 1'),
(50, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Sim por 1'),
(51, 'Bermuda 2', 'Palha', 'Não', 'Bermuda', '34', '58,8', '52', '29', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f261dc28169.jpg', 'Arquivos/Moldes/64f261dc283a8.jpg', 2, 'Não'),
(52, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Não'),
(53, 'Bermuda 2', 'Palha', 'Não', 'Bermuda', '34', '58,8', '52', '29', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f261dc28169.jpg', 'Arquivos/Moldes/64f261dc283a8.jpg', 2, 'Sim por 1'),
(54, 'Bermuda 1', 'Pano', 'Sim', 'Bermuda', '52', '78,75', '60', '27', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f2602903390.jpg', 'Arquivos/Moldes/64f2602903709.jpg', 1, 'Não'),
(55, 'Bermuda 2', 'Palha', 'Não', 'Bermuda', '34', '58,8', '52', '29', NULL, NULL, NULL, NULL, NULL, 'Arquivos/Capas/64f261dc28169.jpg', 'Arquivos/Moldes/64f261dc283a8.jpg', 2, 'Sim por 1'),
(56, '1', '3', 'Sim', 'Blusa', '5', '7', '3', NULL, '9', '2', NULL, NULL, '9', 'Arquivos/Capas/653a84ed2c750.jpg', 'Arquivos/Moldes/653a84ed2d654.jpg', 1, 'Não');

CREATE TABLE `moderador` (
  `Id moderador` int(11) NOT NULL,
  `Nome moderador` varchar(30) NOT NULL,
  `E-mail moderador` varchar(30) NOT NULL,
  `Senha moderador` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `moderador` (`Id moderador`, `Nome moderador`, `E-mail moderador`, `Senha moderador`) VALUES
(1, '[value-3]', '1@adm', '123');

CREATE TABLE `usuário` (
  `Id usuário` int(11) NOT NULL,
  `Nome usuário` varchar(30) NOT NULL,
  `E-mail usuário` varchar(30) NOT NULL,
  `Senha usuário` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuário` (`Id usuário`, `Nome usuário`, `E-mail usuário`, `Senha usuário`) VALUES
(1, 'eu', 'eu@gmail.com', '123'),
(2, 'jf', 'jfranciscobratti@gmail.com', '123'),
(3, 'victor', 'victorgraeff.sb@gmail.com', 'senha12345678910'),
(4, 'guga', 'guga@1.com', 'guga'),
(5, 'jose', 'jose@gmail.com', '123');

ALTER TABLE `modelo`
  ADD PRIMARY KEY (`Id modelo`),
  ADD KEY `cadastrador` (`Usuário cadastrador`);

ALTER TABLE `moderador`
  ADD PRIMARY KEY (`Id moderador`);

ALTER TABLE `usuário`
  ADD PRIMARY KEY (`Id usuário`);

ALTER TABLE `modelo`
  MODIFY `Id modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

ALTER TABLE `moderador`
  MODIFY `Id moderador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `usuário`
  MODIFY `Id usuário` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `modelo`
  ADD CONSTRAINT `cadastrador` FOREIGN KEY (`Usuário cadastrador`) REFERENCES `usuário` (`Id usuário`) ON DELETE CASCADE ON UPDATE CASCADE;
  
