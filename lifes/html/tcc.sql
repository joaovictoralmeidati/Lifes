-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jul-2021 às 17:39
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

use tcc;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emergencia_samu`
--

-- Por obsequio, não mexer na tabela do SAMU-- 
-- Se não, vou dar um socão em quem mexer-- 

CREATE TABLE `emergencia_samu` (
  `id` int primary key auto_increment, 
  `nome` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `telefone` longtext DEFAULT NULL,
  `urgencia` longtext DEFAULT NULL,
  `cep` text DEFAULT NULL,
  `rua` text DEFAULT NULL,
  `bairro` text DEFAULT NULL,
  `cidade` text DEFAULT NULL,
  `estado` text DEFAULT NULL,
  `numerocomp` text DEFAULT NULL,
  `complemento`text DEFAULT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SELECT * FROM emergencia_samu 

drop table emergencia_samu

INSERT INTO `emergencia_samu` VALUES (1, 'DR Fabio', 'fabinhogameplays@gmail.com', '444444', 'SOCORRO', '54554', 'rua das rosas', 'bairro das flores', 'cidade jardin', 'estado dos jardineiros', '11', 'b')

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbconsulta`
--

CREATE TABLE `tbconsulta` (
  `CNPJ` double NOT NULL,
  `CRM` double DEFAULT NULL,
  `CPF` double DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Preco` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SELECT * FROM tbconsulta

use tcc;

--
-- Extraindo dados da tabela `tbconsulta`
--

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 963258741, 987656788, 5, '2021-07-06', '13:00:00', 120);

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 527819, 987656788, 5, '2021-09-20', '13:00:00', 120);

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 527819, 987656788, 5, '2021-09-20', '20:50:00', 120);

--

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 963258741, 40028922, 12, '2021-09-29', '20:50:00', 120);

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 200, 40028922, 27, '2021-10-01', '20:50:00', 120);

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 200, 40028922, 27, '2021-09-30', '22:00:00', 120);

use tcc;

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 963258741, 40028922, 27, '2021-10-05', '22:00:00', 120);

--

--

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 963258741, 32145687, 55, '2021-10-07', '22:00:00', 120);

use tcc;
--

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 527819, 987656788, 15, '2021-09-21', '20:50:00', 120);



INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 527819, 987656788, 16, '2021-09-22', '20:50:00', 120);

INSERT INTO `tbconsulta` (`CNPJ`, `CRM`, `CPF`, `Id`, `Data`, `Hora`, `Preco`) VALUES
(100, 189098, 987656788, 5, '2021-07-06', '13:00:00', 120),
(100, 768909, 765678987, 6, '2021-07-06', '13:30:00', 150),
(104, 527819, 652818725, 7, '2021-07-09', '07:00:00', 120),
(103, 189098, 872456745, 8, '2021-02-04', '07:00:00', 120),
(104, 527819, 765678987, 9, '2021-02-04', '17:23:00', 120),
(104, 100, 872456745, 10, '2021-07-09', '18:00:00', 120);


-- --------------------------------------------------------

--
-- Estrutura da tabela `tbhospital`
--

CREATE TABLE `tbhospital` (
  `CNPJ` double NOT NULL,
  `NomeH` text DEFAULT NULL,
  `EnderecoH` text DEFAULT NULL,
  `TelefoneH` double NOT NULL,
  `Responsavel` text DEFAULT NULL,
  `Senha` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

use tcc;

drop table tbhospital

SELECT * FROM tbhospital

--
-- Extraindo dados da tabela `tbhospital`
--

INSERT INTO `tbhospital` (`CNPJ`, `NomeH`, `EnderecoH`, `TelefoneH`, `Responsavel`, `Senha`) VALUES
(100, 'Hospital Cidade Tiradentes', 'Av dos Metalurgicos', 1125553545, 'Dr. Roberto', '1234'),
(101, 'Hospital Sirio Libanes', 'Rua Dona AdmaJafet', 33940200, 'André', '1234'),
(103, 'Hospital Geral de Guaianases', 'Av. Miguel Achiole da Fonseca', 25513300, 'Maria', '1234'),
(104, 'Hospital Pérola Byington', 'Av. Brigadeiro Luís Antônio', 32488000, 'Ricardo', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmedico`
--

CREATE TABLE tbmedico (
  `CNPJ` double NOT NULL,
  `CRM` double NOT NULL,
  `NomeM` text DEFAULT NULL,
  `TelefoneM` double DEFAULT NULL,
  `Especialidade` text DEFAULT NULL,
  `Sexo` text DEFAULT NULL,
  `Data_de_Nascimento` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Senha` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

drop table `tbmedico`

SELECT * FROM tbmedico

use tcc;

INSERT INTO `tbmedico` (`CNPJ`, `CRM`, `NomeM`, `TelefoneM`, `Especialidade`, `Senha`) VALUES
(100, 527819, 'DR.Morgana da Silva', 741852, 'Oftalmologista', '124');
use tcc

--
-- Extraindo dados da tabela `tbmedico`
--

INSERT INTO `tbmedico` (`CNPJ`, `CRM`, `Nome-M`, `Telefone-M`, `Endereco-M`, `Especialidade`, `Senha`) VALUES
(100, 189098, 'DR.Fabio', 1125553545, 'rua das oliveiras', 'Oftalmologista', '123'),
(103, 189099, 'DR.Roberto', 33940220, 'rua das laranjas', 'Pediatra', '123'),
(104, 527819, 'Dr. Ana Lucia', 33940222, 'rua das flores', 'psicolooga', '123'),
(100, 768909, 'Dr. Sergio', 33940200, 'rua das maças', 'Cardiologista', '123'),
(101, 1890976, 'Dr.Luiz', 33940415, 'rua dos santos', 'Oncologista', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpaciente`
--

CREATE TABLE `tbpaciente` (
  `CPF` double NOT NULL,
  `NomeP` text DEFAULT NULL,
  `TelefoneP` double DEFAULT NULL,
  `EnderecoP` text DEFAULT NULL,
  `Data_de_Nascimento` varchar(110) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `Email` text DEFAULT NULL,
  `Senha` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SELECT * FROM tbpaciente

use tcc;


INSERT INTO `tbpaciente` (`CPF`, `NomeP`, `TelefoneP`, `EnderecoP`, `Data_de_Nascimento`, `sexo`, `Email`, `Senha`) VALUES
(40028922, 'Erika Nagatomo', 852852852, 'Rua das Cartas', '2004-12-01', 'feminino', 'ErikaGmail@gmail.com', 123);



drop table tbpaciente

--
-- Extraindo dados da tabela `tbpaciente`
--

INSERT INTO `tbpaciente` (`CPF`, `NomeP`, `TelefoneP`, `EnderecoP`, `Data_de_Nascimento`, `sexo`, `Email`, `Senha`) VALUES
(652818725, 'Joao', 89870987, 'rua do joao', '', '', 'joao@gmail.com', '1234'),
(765678987, 'Daniela', 9876789, 'rua das rosas ', '', '', 'daniela@gmail.com', '123'),
(872456745, 'Eduardo', 76727878, 'rua das Oliveiras', '', '', 'eduardo@gmail.com', '1234'),
(987656788, 'Carlos', 32488909, 'Rua eduardo alves', '', '', 'carlos@gmail.com', '123'),
(43147458830, 'Gabriel da Silva Severo ', 11969044312, 'RUA ÉDSON CHAGAS', '2021-07-02', 'masculino', 'gabrielsilvasevero@outlook.com', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbconsulta`
--
ALTER TABLE `tbconsulta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CNPJ` (`CNPJ`),
  ADD KEY `CRM` (`CRM`),
  ADD KEY `CPF` (`CPF`);

--
-- Índices para tabela `tbhospital`
--
ALTER TABLE `tbhospital`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Índices para tabela `tbmedico`
--
ALTER TABLE `tbmedico`
  ADD PRIMARY KEY (`CRM`),
  ADD KEY `CNPJ` (`CNPJ`);

--
-- Índices para tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbconsulta`
--
ALTER TABLE `tbconsulta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbconsulta`
--
ALTER TABLE `tbconsulta`
  ADD CONSTRAINT `tbconsulta_ibfk_1` FOREIGN KEY (`CNPJ`) REFERENCES `tbhospital` (`CNPJ`),
  ADD CONSTRAINT `tbconsulta_ibfk_2` FOREIGN KEY (`CRM`) REFERENCES `tbmedico` (`CRM`),
  ADD CONSTRAINT `tbconsulta_ibfk_3` FOREIGN KEY (`CPF`) REFERENCES `tbpaciente` (`CPF`);

--
-- Limitadores para a tabela `tbmedico`
--
ALTER TABLE `tbmedico`
  ADD CONSTRAINT `tbmedico_ibfk_1` FOREIGN KEY (`CNPJ`) REFERENCES `tbhospital` (`CNPJ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
