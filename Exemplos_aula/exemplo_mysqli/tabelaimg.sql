

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET time_zone = "+00:00";
 SET NAMES utf8 ;

--
-- Base de Dados: `banco`
--
create database banco1;
use banco1;
-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelaimg`
--

CREATE TABLE IF NOT EXISTS tabelaimg(
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  codigo int NOT NULL,
  produto varchar(80) NOT NULL,
  descricao varchar(250) NOT NULL,
  data_ok date NOT NULL,
  valor decimal(10,2) NOT NULL,
  imagem varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tabelaimg`
--

INSERT INTO `tabelaimg` ( `id`,`codigo`, `produto`, `descricao`, `data_ok`, `valor`, `imagem`) VALUES
(1, 102030, 'Horizon - Zero Dawn - PS4', 'Em um mundo aberto, exuberante, vibrante e pós-apocalíptico, criaturas mecanizadas colossais vagam por uma paisagem fora do controle da humanidade.Ao longo do tempo, a evolução humana regrediu para uma existência tribal de caça e colheita ...', '2017-05-01', '199.29', 'ZeroDawn.png'),
(2, 112233, 'Assassin''s Creed - Unity - PS4', 'Paris, 1789. A Revolução Francesa transforma a antes magnifica cidade em um lugar de terror e caos. Suas ruas de paralelepípedos estão vermelhas com o sangue de pessoas comuns que se atreveram a levantar-se contra a aristocracia opressiva ...', '2017-05-01', '129.00', 'AssassinCreed.png'),
(3, 302010, 'God Of War III - Remasterizado - PS4', 'Originalmente desenvolvido pelo Santa Monica Studio da Sony Computer Entertainment, exclusivamente para o sistema PLAYSTATION®3, God of War® III foi remasterizado para o sistema PLAYSTATION®4, com compatibilidade de 1080p em 60fps para suas ...', '2017-05-01', '99.49', 'GodOfWar.png'),
(4, 332211, 'Yooka-Laylee - PS4', '''Yooka-Laylee é uma nova plataforma de mundo aberto do principal criador por trás dos Banjo-Kazooie e Donkey Kong Country. Renovada na Playtonic Games, a equipe está construindo um sucessor espiritual para seu trabalho mais estimado do passado ...', '2017-05-01', '169.90', 'YookaLaylee.png'),
(5, 123456, 'The Last Guardian - PS4', 'The Last Guardian – PS4 é um dos games mais aguardados do momento. Ele possui uma narrativa de flashback, com um homem maduro contando histórias de quando era jovem, justamente na época em que encontra uma criatura conhecida como ''Trico'', que ...', '2017-05-01', '149.00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
