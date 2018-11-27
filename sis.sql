-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27/11/2018 às 03:11
-- Versão do servidor: 10.1.25-MariaDB
-- Versão do PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sis`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_cidade`
--

CREATE TABLE `cad_cidade` (
  `id_cidade` int(11) NOT NULL,
  `id_estado_pai` int(11) NOT NULL,
  `cad_cidade_nome` varchar(50) NOT NULL,
  `cad_cidade_ibge` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_clientes`
--

CREATE TABLE `cad_clientes` (
  `id_cliente` int(11) NOT NULL,
  `cad_nome_cliente` varchar(50) NOT NULL,
  `cad_tipo_cliente` tinyint(1) NOT NULL,
  `cad_status_cliente` tinyint(1) NOT NULL,
  `cad_cnpj_cliente` varchar(18) NOT NULL,
  `cad_razao_cliente` varchar(100) NOT NULL,
  `cad_contribuinte_cliente` varchar(20) NOT NULL,
  `cad_incricao_cliente` varchar(20) NOT NULL,
  `cad_email_cliente` varchar(100) NOT NULL,
  `cad_fone_cliente` varchar(16) NOT NULL,
  `cad_cel_cliente` varchar(14) NOT NULL,
  `cad_data_fund_cliente` date NOT NULL,
  `cad_obs_cliente` text NOT NULL,
  `cad_endereco_cliente` varchar(100) NOT NULL,
  `cad_cep_cliente` varchar(10) NOT NULL,
  `cad_num_cliente` varchar(10) NOT NULL,
  `cad_complemento_cliente` varchar(50) NOT NULL,
  `cad_bairro_cliente` varchar(50) NOT NULL,
  `cad_cidade_cliente` varchar(50) NOT NULL,
  `cad_estado_cliente` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_contato_cliente`
--

CREATE TABLE `cad_contato_cliente` (
  `id_contato_cliente` int(11) NOT NULL,
  `cad_nome_contato` varchar(100) NOT NULL,
  `cad_email_contato` varchar(100) NOT NULL,
  `cad_fone_contato` varchar(20) NOT NULL,
  `cad_cargo_contato` varchar(50) NOT NULL,
  `id_cliente_pai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_estado`
--

CREATE TABLE `cad_estado` (
  `id_estado` int(11) NOT NULL,
  `cad_nome_estado` varchar(20) NOT NULL,
  `cad_uf_estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_fornecedores`
--

CREATE TABLE `cad_fornecedores` (
  `id_fornecedor` int(11) NOT NULL,
  `cad_nome_fornecedor` varchar(100) NOT NULL,
  `cad_tipo_fornecedor` int(1) NOT NULL,
  `cad_cnpj_fornecedor` varchar(20) NOT NULL,
  `cad_inscricao_fornecedor` varchar(20) NOT NULL,
  `cad_contribuinte_fornecedor` varchar(30) NOT NULL,
  `cad_insc_muni_fornecedor` varchar(30) NOT NULL,
  `cad_fone_fornecedor` varchar(16) NOT NULL,
  `cad_cel_fornecedor` varchar(16) NOT NULL,
  `cad_email_fornecedor` varchar(60) NOT NULL,
  `cad_contato_fornecedor` varchar(60) NOT NULL,
  `cad_estado_fornecedor` varchar(8) NOT NULL,
  `cad_cidade_fornecedor` varchar(50) NOT NULL,
  `cad_obs_fornecedor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_fornecedor_produto`
--

CREATE TABLE `cad_fornecedor_produto` (
  `id_fornecedor_produto` int(11) NOT NULL,
  `id_produto_pai` int(11) NOT NULL,
  `id_fornecedor_pai` int(11) NOT NULL,
  `cad_nome_fornecedor_pai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_produtos`
--

CREATE TABLE `cad_produtos` (
  `id_produto` int(11) NOT NULL,
  `cad_nome_produto` varchar(100) NOT NULL,
  `cad_codigo_produto` varchar(20) NOT NULL,
  `cad_ean_produto` varchar(14) NOT NULL,
  `cad_categoria_produto` varchar(50) NOT NULL,
  `cad_valor_venda_produto` float(10,2) NOT NULL,
  `cad_valor_custo_produto` float(10,2) NOT NULL,
  `cad_estoque_atual_produto` int(11) NOT NULL,
  `cad_estoque_min_produto` int(11) NOT NULL,
  `cad_un_medida_produto` varchar(20) NOT NULL,
  `cad_ncm_produto` varchar(14) NOT NULL,
  `cad_cest_produto` varchar(14) NOT NULL,
  `cad_peso_liq_produto` float(10,3) NOT NULL,
  `cad_peso_bruto_produto` float(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_servicos`
--

CREATE TABLE `cad_servicos` (
  `id_servico` int(11) NOT NULL,
  `cad_nome_servico` varchar(100) NOT NULL,
  `cad_codigo_servico` varchar(20) NOT NULL,
  `cad_tipo_servico` varchar(50) NOT NULL,
  `cad_ativo_servico` tinyint(1) NOT NULL,
  `cad_valor_servico` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_transportadora`
--

CREATE TABLE `cad_transportadora` (
  `id_transportadora` int(11) NOT NULL,
  `cad_nome_transportadora` varchar(100) NOT NULL,
  `cad_cep_transportadora` varchar(12) NOT NULL,
  `cad_endereco_transportadora` varchar(100) NOT NULL,
  `cad_complemento_transportadora` varchar(50) NOT NULL,
  `cad_bairro_transportadora` varchar(30) NOT NULL,
  `cad_cidade_transportadora` varchar(50) NOT NULL,
  `cad_estado_transportadora` varchar(8) NOT NULL,
  `cad_fone_transportadora` varchar(16) NOT NULL,
  `cad_cel_transportadora` varchar(16) NOT NULL,
  `cad_email_transportadora` varchar(60) NOT NULL,
  `cad_contato_transportadora` varchar(50) NOT NULL,
  `cad_valor_frete_transportadora` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sis_menu`
--

CREATE TABLE `sis_menu` (
  `id_menu` int(11) NOT NULL,
  `nome_menu` varchar(25) NOT NULL,
  `link_menu` varchar(100) NOT NULL,
  `icone_menu` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sis_menu`
--

INSERT INTO `sis_menu` (`id_menu`, `nome_menu`, `link_menu`, `icone_menu`) VALUES
(1, 'Analíticos', 'home', '<i class=\"menu-item-icon icon ion-ios-pie-outline tx-22\"></i>'),
(2, 'Cadastros', '', '<i class=\"menu-item-icon icon ion-compose tx-22\"></i>'),
(3, 'Financeiro', '', '<i class=\"fa fa-bar-chart\"></i>'),
(4, 'Compras', '', '<i class=\"icon ion-clipboard\"></i>'),
(5, 'Relatórios', '', '<i class=\"icon ion-paperclip\"></i>'),
(6, 'Nf-e', '', '<i class=\"fa fa-television\"></i>'),
(7, 'Vendas', '', '<i class=\"icon ion-calculator\"></i>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sis_submenu`
--

CREATE TABLE `sis_submenu` (
  `id_submenu` int(11) NOT NULL,
  `nome_submenu` varchar(50) NOT NULL,
  `link_submenu` varchar(100) NOT NULL,
  `id_menu_pai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sis_submenu`
--

INSERT INTO `sis_submenu` (`id_submenu`, `nome_submenu`, `link_submenu`, `id_menu_pai`) VALUES
(1, 'Clientes', 'clientes', 2),
(2, 'Produtos', 'produtos', 2),
(3, 'Fornecedores', 'fornecedores', 2),
(4, 'Categorias', 'categorias', 2),
(5, 'Serviços', 'servicos', 2),
(6, 'Ordens de Serviço', 'ordens', 7),
(7, 'Vendas & Orçamentos', 'vendas', 7),
(8, 'Nf-e Produto', '', 6),
(9, 'Nf-e Consumidor', '', 6),
(10, 'Nf-e Serviço', '', 6),
(11, 'Compras', 'compras', 4),
(12, 'Parcelas a pagar', 'parcelas', 4),
(13, 'Nf-e recebidas', 'recebidas', 4),
(14, 'Contas a pagar', 'pagar', 3),
(15, 'Contas a receber', 'receber', 3);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cad_cidade`
--
ALTER TABLE `cad_cidade`
  ADD PRIMARY KEY (`id_cidade`);

--
-- Índices de tabela `cad_clientes`
--
ALTER TABLE `cad_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `cad_contato_cliente`
--
ALTER TABLE `cad_contato_cliente`
  ADD PRIMARY KEY (`id_contato_cliente`);

--
-- Índices de tabela `cad_estado`
--
ALTER TABLE `cad_estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Índices de tabela `cad_fornecedores`
--
ALTER TABLE `cad_fornecedores`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices de tabela `cad_fornecedor_produto`
--
ALTER TABLE `cad_fornecedor_produto`
  ADD PRIMARY KEY (`id_fornecedor_produto`);

--
-- Índices de tabela `cad_produtos`
--
ALTER TABLE `cad_produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `cad_servicos`
--
ALTER TABLE `cad_servicos`
  ADD PRIMARY KEY (`id_servico`);

--
-- Índices de tabela `cad_transportadora`
--
ALTER TABLE `cad_transportadora`
  ADD PRIMARY KEY (`id_transportadora`);

--
-- Índices de tabela `sis_menu`
--
ALTER TABLE `sis_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Índices de tabela `sis_submenu`
--
ALTER TABLE `sis_submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cad_cidade`
--
ALTER TABLE `cad_cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cad_clientes`
--
ALTER TABLE `cad_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cad_contato_cliente`
--
ALTER TABLE `cad_contato_cliente`
  MODIFY `id_contato_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cad_estado`
--
ALTER TABLE `cad_estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cad_fornecedores`
--
ALTER TABLE `cad_fornecedores`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cad_fornecedor_produto`
--
ALTER TABLE `cad_fornecedor_produto`
  MODIFY `id_fornecedor_produto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cad_produtos`
--
ALTER TABLE `cad_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cad_servicos`
--
ALTER TABLE `cad_servicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cad_transportadora`
--
ALTER TABLE `cad_transportadora`
  MODIFY `id_transportadora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `sis_menu`
--
ALTER TABLE `sis_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `sis_submenu`
--
ALTER TABLE `sis_submenu`
  MODIFY `id_submenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
