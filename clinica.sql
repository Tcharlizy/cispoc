-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 01:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditoria`
--

CREATE TABLE `auditoria` (
  `id_auditoria` int(11) NOT NULL,
  `unidade_sanitaria` varchar(1024) NOT NULL,
  `vistoria_para` varchar(1024) NOT NULL,
  `distrito` varchar(1024) NOT NULL,
  `data_auditoria` date NOT NULL,
  `local` varchar(1024) NOT NULL,
  `composta_por` varchar(1024) NOT NULL,
  `objectivos` varchar(1024) NOT NULL,
  `constatacoes_pos` varchar(1024) NOT NULL,
  `constatacoes_neg` varchar(1024) NOT NULL,
  `recomendacoes` varchar(1024) NOT NULL,
  `condicoes_reunidas` varchar(1024) NOT NULL,
  `condicoes_nao_reunidas` varchar(1024) NOT NULL,
  `data_a` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditoria`
--

INSERT INTO `auditoria` (`id_auditoria`, `unidade_sanitaria`, `vistoria_para`, `distrito`, `data_auditoria`, `local`, `composta_por`, `objectivos`, `constatacoes_pos`, `constatacoes_neg`, `recomendacoes`, `condicoes_reunidas`, `condicoes_nao_reunidas`, `data_a`, `estado`) VALUES
(1, 'Mavalane', 'Vistoria', 'Maputo', '2022-05-15', 'Alto MaÃ©', 'Gerson Notico; Paulino Mavaieie; Abel das Neves', 'Obje;Obje;Obje', 'Obje;Obje;Obje', 'Obje;Obje;Obje', 'Obje;Obje;Obje', 'Obje;Obje;Obje', 'Obje;Obje;Obje', '2022-05-15 11:31:18', 0),
(2, 'Maputo', 'ddd', 'Katembe', '2022-05-25', 'fff', 'fff', 'fff', 'fff', 'ff', 'ff', 'ff', 'fff', '2022-05-15 11:45:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gestao_usuarios`
--

CREATE TABLE `gestao_usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_PROVINCIA` int(11) NOT NULL,
  `NOME_USUARIO` varchar(50) NOT NULL,
  `SENHA` varchar(50) NOT NULL,
  `CATEGORIA` int(11) DEFAULT NULL,
  `SECTOR` int(11) DEFAULT NULL,
  `NOME` varchar(50) DEFAULT NULL,
  `APELIDO` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `TELEFONE` int(11) DEFAULT NULL,
  `VALIDADE_CONTA` int(11) DEFAULT NULL,
  `TIPO` varchar(50) DEFAULT NULL,
  `MORADA` varchar(50) DEFAULT NULL,
  `UNIDADE` varchar(50) DEFAULT NULL,
  `DATA` datetime DEFAULT NULL,
  `ESTADO` varchar(20) DEFAULT NULL,
  `cert_profissional` varchar(50) DEFAULT NULL,
  `pedido` varchar(50) DEFAULT NULL,
  `foto_passe` varchar(50) DEFAULT NULL,
  `bi_anexo` varchar(50) DEFAULT NULL,
  `carteira_trabalho` varchar(50) DEFAULT NULL,
  `cv` varchar(50) NOT NULL,
  `centro_formacao` varchar(50) NOT NULL,
  `bi` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `r_criminal` varchar(50) NOT NULL,
  `compromisso_honra` varchar(50) NOT NULL,
  `nuit_numero` varchar(50) NOT NULL,
  `nuit_anexo` varchar(50) NOT NULL,
  `certidao_reserva` varchar(50) NOT NULL,
  `memoria_descritiva` varchar(50) NOT NULL,
  `quadro_pessoal1` varchar(50) NOT NULL,
  `quadro_pessoal2` varchar(50) NOT NULL,
  `quadro_pessoal3` varchar(50) NOT NULL,
  `quadro_pessoal4` varchar(50) NOT NULL,
  `quadro_pessoal5` varchar(50) NOT NULL,
  `quadro_pessoal6` varchar(50) NOT NULL,
  `quadro_pessoal7` varchar(50) NOT NULL,
  `quadro_pessoal8` varchar(50) NOT NULL,
  `quadro_pessoal9` varchar(50) NOT NULL,
  `quadro_pessoal_anexo1` varchar(50) NOT NULL,
  `quadro_pessoal_anexo2` varchar(50) NOT NULL,
  `quadro_pessoal_anexo3` varchar(50) NOT NULL,
  `quadro_pessoal_anexo4` varchar(50) NOT NULL,
  `quadro_pessoal_anexo5` varchar(50) NOT NULL,
  `quadro_pessoal_anexo6` varchar(50) NOT NULL,
  `quadro_pessoal_anexo7` varchar(50) NOT NULL,
  `quadro_pessoal_anexo8` varchar(50) NOT NULL,
  `quadro_pessoal_anexo9` varchar(50) NOT NULL,
  `requerimento` varchar(50) NOT NULL,
  `bi_dos_socios1` varchar(50) NOT NULL,
  `bi_dos_socios2` varchar(50) NOT NULL,
  `bi_dos_socios3` varchar(50) NOT NULL,
  `bi_dos_socios4` varchar(50) NOT NULL,
  `bi_dos_socios5` varchar(50) NOT NULL,
  `bi_dos_socios6` varchar(50) NOT NULL,
  `bi_dos_socios7` varchar(50) NOT NULL,
  `bi_dos_socios8` varchar(50) NOT NULL,
  `bi_dos_socios9` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gestao_usuarios`
--

INSERT INTO `gestao_usuarios` (`ID_USUARIO`, `ID_PROVINCIA`, `NOME_USUARIO`, `SENHA`, `CATEGORIA`, `SECTOR`, `NOME`, `APELIDO`, `EMAIL`, `TELEFONE`, `VALIDADE_CONTA`, `TIPO`, `MORADA`, `UNIDADE`, `DATA`, `ESTADO`, `cert_profissional`, `pedido`, `foto_passe`, `bi_anexo`, `carteira_trabalho`, `cv`, `centro_formacao`, `bi`, `type`, `r_criminal`, `compromisso_honra`, `nuit_numero`, `nuit_anexo`, `certidao_reserva`, `memoria_descritiva`, `quadro_pessoal1`, `quadro_pessoal2`, `quadro_pessoal3`, `quadro_pessoal4`, `quadro_pessoal5`, `quadro_pessoal6`, `quadro_pessoal7`, `quadro_pessoal8`, `quadro_pessoal9`, `quadro_pessoal_anexo1`, `quadro_pessoal_anexo2`, `quadro_pessoal_anexo3`, `quadro_pessoal_anexo4`, `quadro_pessoal_anexo5`, `quadro_pessoal_anexo6`, `quadro_pessoal_anexo7`, `quadro_pessoal_anexo8`, `quadro_pessoal_anexo9`, `requerimento`, `bi_dos_socios1`, `bi_dos_socios2`, `bi_dos_socios3`, `bi_dos_socios4`, `bi_dos_socios5`, `bi_dos_socios6`, `bi_dos_socios7`, `bi_dos_socios8`, `bi_dos_socios9`) VALUES
(2, 2, 'admin', '1234', 1, 1, 'Administrador', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-14 16:16:31', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 2, 'Gaspar', '2022#$123', 1, 2, 'Gaspar Lisboa Savela', NULL, NULL, 844640424, NULL, '2', 'Bagamoyo, Celula A Q 28 cas 47', 'ICOR', '2022-05-09 20:23:08', '1', '', '', '', '', '', '', '', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 2, 'Abel', '2022#$123', 1, 2, 'Nailidio Zango', NULL, NULL, 845050138, NULL, '3', 'Bagamoyo, Celula A Q 28 cas 47', 'Santa Filomena', '2022-05-09 20:23:58', '2', '', '', '', '', '', '', '', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 2, 'nailidio', '1234', 1, 2, 'Rogerio Cartilio Ussaca', NULL, NULL, 2147483647, NULL, '3', 'Bagamoyo, Celula A Q 28 cas 47', 'Bagamoyo', '2022-05-09 20:25:37', '3', '', '', '', '', '', '', '', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 0, '1254805055', '1234', 1, 1, 'Gerson Jose Paulo Notico', NULL, NULL, 870924930, NULL, NULL, 'Bagamoyo, Celula A Q 28 cas 47', NULL, '2022-05-14 10:11:32', '1', '3ca8dd72736614c3a7526c4e1eb6baf3444.pdf', '6be6ab791961cbdbba75fdf482a3e664444.pdf', '758005e7f20bced4b921c105d8ab2ca3444.pdf', '8c3dc866c6f7971cf94ac9b729863374444.pdf', '22dde4cbe43951e6db2ca0f5150de971444.pdf', '7d64009c75cdf2361df4609512bc95a9444.pdf', '568898jij', '1548281250N', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 0, '1025585100', '123', 1, 3, 'Paulino Armando Mavaieie', NULL, NULL, 844119618, NULL, NULL, 'Bagamoyo, Celula A Q 28 cas 47', NULL, '2022-05-14 10:13:14', '2', 'efd46230ee862ecacf21ba9cad69b1c833333.pdf', '1053b2eca0dde8675b052d3ae3fac97133333.pdf', '73ede9b80d2f8469cfb302c31fd7acc133333.pdf', '09e30848083445191b5368167afaf6fb33333.pdf', '581c6a8f6eacded4b9ebb3046fce136433333.pdf', 'f8e5a78b1f6f1c3f9c039eebf95e5bf633333.pdf', 'Maluana', '1105048248B', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 2, '131', '111', 1, 2, 'PAulino Armando Muthemba', NULL, NULL, 2147483647, NULL, '2', 'Bagamoyo, Celula A Q 28 cas 47', 'Bagamoyo', '2022-05-14 16:00:15', '1', NULL, NULL, NULL, NULL, NULL, '', '', '', 2, '5d4c4b4c2511f3614461997582610d84131.pdf', '38acb45c742387d6be02942fc213333f131.pdf', '111', '8226e74975995159e7feeecf5d2c3453131.pdf', '8226e74975995159e7feeecf5d2c3453131.sql', 'cdf79416be479825c42adba2ef8b88d2131.pdf', '11111', '22222', '', '', '', '', '', '', '', 'ef2c2acad0d74ee29e596f34bfbb5b02131.pdf', '375cb29794377d8e8193b1436cf134ab131.sql', 'ecdea8660ced49711a067695f6a78a19131', '1d44974510b7262e831bf450024f31ed131', '0b25a7a71153ecdfb9680f40e94ada72131', 'd5f8e1da668bcab82bef0c37832fc583131', '374e2389563ca1de19fa6a4f22f6df97131', '3d9b71650d643cfc6897680e28658944131', '11f8828d428c39192079b51a639be215131', '8226e74975995159e7feeecf5d2c3453131.pdf', 'd5619352827d8c8ace5e828053926fc9131.pdf', '5a89e860b5f3a9d6fcd69c6cee30d4fc131.pdf', 'adcb4f741e39598e0a6b3c4f2e65a4d9131', 'b600d44c6195de664cb499222811bf0a131', 'aa7b930ccd62efff896e07d3c9863681131', '6603aa2b9af25d9e7874835d444d89ec131', '699ff2080c7d240bb1cad368e707f217131', '77cc6d640b0c69f0985779c78c1266f8131', '13a8ceafada09958b09d97c0cc483804131'),
(49, 2, '145652330', '1234', 1, 2, 'Abel das Neves Junior', NULL, NULL, 2147483647, NULL, '3', 'Bagamoyo, Celula A Q 28 cas 47', 'Bagamoyo', '2022-05-14 16:06:35', '2', NULL, NULL, NULL, NULL, NULL, '', '', '', 2, 'e32b64fdbddc42be7682c00a4ccbe724145652330.pdf', '7a95d079107458bbec160daf219ab3f5145652330.pdf', '155969630', '6affc91e3036f6928a30e73e915bd2dc145652330.pdf', '6affc91e3036f6928a30e73e915bd2dc145652330.pdf', 'e7db252ca5cfda7b53dd735323a00359145652330.pdf', '11111', '22222', '', '', '', '', '', '', '', 'ea1b5f7a06ae425d9cef2affa1496fe6145652330.pdf', '9051f02c99d1cf5434c2ef0010eb4d20145652330.pdf', '8c927b31fa95c3749d048ef7e071946e145652330', '5b0d92b731e554164e9137d3405af037145652330', '18742e4febc3c7effddf17a27e8c53c6145652330', '08024bd00fe78a27882fed1ea3e333e8145652330', '5035c24e6477c4d2f72c374f7b0f9e6b145652330', 'e384f59eec7352964577752155a283d5145652330', 'b13520f39da9baa8b866c383c8aca968145652330', '6affc91e3036f6928a30e73e915bd2dc145652330.pdf', '963f549b59aa6d9f56bffbdfd2c31627145652330.pdf', 'e866bc7e602331e398228566b643426e145652330.pdf', '5da75ea3ca6b4cdbae677eb41f2ba9c0145652330', 'cd8d30df9ea44819e649e8132e88991f145652330', 'e65db793280391d5dfdad5ce03a1dd93145652330', '7e64c37f2a387cffce3ebfb812cdee10145652330', '4f65eda9ac73eda173e753ef88c54694145652330', 'e7da1bc7df4b48d54392ff786210a8b6145652330', '59018be616cd55aecebfd8817d869123145652330'),
(50, 2, '111', '1234', 1, 2, 'Gaspar Lisboa Savela', NULL, NULL, 2147483647, NULL, '2', 'Bagamoyo, Celula A Q 28 cas 47', 'Bagamoyo', '2022-05-14 17:50:14', '1', NULL, NULL, NULL, NULL, NULL, '', '', '', 2, '3a109b2019f4d7bf9aad9128838b3cb2111.pdf', '7a2e2868a32e1cabd13b943512fb5e5e111.pdf', '11323311', '4862f527cb90bcf85dfc7d787787040e111.pdf', '4862f527cb90bcf85dfc7d787787040e111.pdf', '0e0594147b247d32d0efed673875107a111.pdf', '11111', '22222', '', '', '', '', '', '', '', '2d072ea1a6231375f983d5f310844951111.sql', '14af67b8406cce1c69e04f35e45bfd3a111.pdf', 'b10551c55d46823c85e1d51a0ef2c94c111', '2aa9e69130ff8203d3b3ab13f74a1bfd111', 'fc1306854bb09551f3cb9c659e8d632d111', '587bf1432e01d143ccd3d76b716811e6111', '26923c1bff9144912c5d373f52926276111', 'cbc57d342f985373c36c99205743d7fc111', 'f11414a8e2ac58eb7d23484cd03f44f0111', '4862f527cb90bcf85dfc7d787787040e111.pdf', 'bd0d1ce1f8a65c86bb982aed3d6b7699111.pdf', 'ebe3b300a1363aa0d090189897f7fad4111.pdf', 'c9f6aa1d2fecd6c5100e5b4f53e03224111', 'fea98dae0057fd20ddeb780f7ac38a4d111', '526889f65db7382f7588f7c575efae60111', 'a21d1663e4f566dc2dd02e4c2cbf54a8111', '493a600e82cbd3ca34dd926ad10e8bd4111', '0e0bf8afd8823a5d8a23f38999ab645e111', '3ca16e487327cac76cc2de55e232493e111'),
(51, 0, '100200300', ',RMFKKHD', 1, 3, 'Alber CArdoso Bunguene', NULL, NULL, 844640424, NULL, NULL, 'Bagamoyo, Celula A Q 28 cas 47', NULL, '2022-05-15 09:31:37', '1', '7fad6aba7ff197a33460b3f3855d1a1f100200300.pdf', 'c10f2d0f8b09150bc97054481fefac17100200300.pdf', '4e207a2e0c9af6af3206b70ef176eb5b100200300.pdf', '12342f80ffcea65309add2085aac38ca100200300.pdf', 'b916000a139e8721ba70ce5dbaf9a11d100200300.pdf', 'fac3aeba00a504070619c776f8b4ef85100200300.pdf', 'Icor', '11045785845b', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 0, '12020334', 'cs mdcx ', 1, 3, 'Rogerio Paulo NOtico', NULL, NULL, 2147483647, NULL, NULL, 'Bagamoyo, Celula A Q 28 cas 47', NULL, '2022-05-15 09:37:15', '1', 'b93e2cea0abcb9b69c197a2e4a6bac6612020334.pdf', '3acc11b5de68c4396d2861f1a0bd7b2b12020334.pdf', '557f49cb65c4eacfa8ef3f400853411a12020334.pdf', 'a48b430a81560c98d5c7309c5242556b12020334.pdf', 'e87e4eb707a4b0ee72ed1967ff02b45f12020334.pdf', '508a127e487aac6b8daec50c81877df112020334.pdf', 'Mavalane', '11928339B', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 0, '293303232', 'nwnsjcxhzd', 1, 3, 'Ana Fernando Gumaraes', NULL, NULL, 805050138, NULL, NULL, 'Bagamoyo, Celula A Q 28 cas 47', NULL, '2022-05-15 09:39:26', '1', 'e6f708c273c956cfe594085e97f571b1293303232.pdf', 'e4dac3f7ca419c5197c3793dc76ae687293303232.pdf', '7f5ae3fb91a0ef2e0be62f9cd8c3de83293303232.pdf', 'eb490370a454f607681afc740e96c531293303232.pdf', '28a45172014233987dc180713bafdb8d293303232.pdf', '1d87c67b4adcebe9e57ae1e01cff13c0293303232.pdf', 'Katembe B', '115825585548B', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id_auditoria`);

--
-- Indexes for table `gestao_usuarios`
--
ALTER TABLE `gestao_usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `ID_PROVINCIA` (`ID_PROVINCIA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id_auditoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gestao_usuarios`
--
ALTER TABLE `gestao_usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
