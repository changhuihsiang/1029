-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `gallery`
--

-- --------------------------------------------------------

--
-- 資料表結構 `carticket`
--

CREATE TABLE `carticket` (
  `ctid` int(11) NOT NULL,
  `mid` varchar(200) NOT NULL,
  `species` varchar(200) NOT NULL,
  `num` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `carticket`
--

INSERT INTO `carticket` (`ctid`, `mid`, `species`, `num`) VALUES
(4, '31', '150', '5'),
(6, '31', '180', '5'),
(8, '31', '220', '1'),
(9, '25', '220', '3'),
(11, '25', '150', '4'),
(12, '25', '180', '4');

-- --------------------------------------------------------

--
-- 資料表結構 `mem`
--

CREATE TABLE `mem` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `mem`
--

INSERT INTO `mem` (`id`, `name`, `username`, `password`, `birth`, `phone`) VALUES
(1, '張惠香', '12346@gmail.com', '123', '860920', '0986025718'),
(20, '胖子', '789@mail.com', '12345678', '890612', '0988753951'),
(22, '333', '333@lll', '333', '333', '333'),
(23, '小狗', 'ac123456dk@gmail.com', '123456', '880504', '0986025718'),
(24, '涵涵', 'easonlmaggie@gmail.com', '0000', '890327', '0912345678'),
(25, '十月二十六日', '1026@mail.com', '1026', '20310504', '0921345816'),
(26, '今天吃弘爺', '1027@mail.com', '1027', '19971027', '0912345789'),
(28, '', '1234', '', '', ''),
(29, '李一一', 'maggie@gmail.com', '88', '19970819', '8035678'),
(30, '張鏸香', '2020@gmail.com', '2020', '1997-09-20', '0988756423'),
(31, '郭小小', 'accc123456dk@gmail.com', '789456', '2020-10-13', '0978456123');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `messageid` int(11) NOT NULL,
  `mid` varchar(200) NOT NULL,
  `wid` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`messageid`, `mid`, `wid`, `message`) VALUES
(2, '25', '3', 'GOOD'),
(3, '25', '3', '不錯'),
(4, '25', '3', '很認真'),
(5, '25', '3', '很認真很好看'),
(6, '25', '4', '花朵很真實'),
(7, '25', '4', '優雅而獨特的魅力'),
(8, '25', '14', '123'),
(9, '25', '13', '12\r\n'),
(10, '25', '15', '美麗啊');

-- --------------------------------------------------------

--
-- 資料表結構 `works`
--

CREATE TABLE `works` (
  `wid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `wname` varchar(200) NOT NULL,
  `wintroduction` varchar(200) NOT NULL,
  `wshort` varchar(200) NOT NULL,
  `wlink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `works`
--

INSERT INTO `works` (`wid`, `mid`, `wname`, `wintroduction`, `wshort`, `wlink`) VALUES
(3, 25, '白花麝香', '溫暖的白花麝香調香氣可以說是秋冬必備，溫暖的白花麝香調香氣可以說是秋冬必備，溫暖的白花麝香調香氣可以說是秋冬必備', '溫暖的白花麝香調香氣可以說是秋冬必備', 'works001.jpg'),
(4, 24, '茉莉', '讓整體味道更加清新、帶有大自然的綠意，接續而來淡淡的奶油白花香氣和輕快的茉莉氣息，魅惑而不甜膩。基調則是飽滿的檀香和陽光浸透的木質香氣，和鳶尾花、安息香融為一體，賦予這支香水優雅而獨特的魅力，最後以感性柔軟的麝香氣息結尾，穿上它立刻充滿法國女人的優雅迷人！', '讓整體味道更加清新、帶有大自然的綠意，', 'works002.jpg'),
(10, 25, '劉以豪', '在2008年，在大學學姊報名之下，參加伊林超級男模大賽，獲得第3名後，就此進入演藝圈。在《我可能不會愛你》飾演趙美男嶄露頭角。後來為「Lativ」所拍平面廣告而使劉以豪的詢問度大增。', '台灣男演員，素有「台灣最萌男友[1]」之稱。', 'maso.jpg'),
(11, 25, '人', '人在生物學上通常指智人（學名：Homo sapiens），偶爾也泛指人屬的史前物種，與其他靈長類動物一樣，人類是社會性的。人類個體之間的社會交際創立了廣泛的傳統習俗、宗教制度、價值觀、法律，這些共同構成了人類社會的基礎。人尤其擅長用口語、手勢、肢體語言與書面語言來溝通、協作、表達自我、交際、交換意見、組織事物。', '人在生物學上通常指智人（學名：Homo sapiens），偶爾也泛指人屬的史前物種', 'people.jpg'),
(12, 25, '情侶', '手繪頭像Q版卡通簡筆畫黑白彩色可選情侶手機殼圖案設計定製照片', '手繪頭像Q版卡通簡筆畫黑白彩色可選情侶手機殼圖案設計定製照片', 'cuple.jpg'),
(13, 25, '花', '獲取手繪花朵插圖設計的更多詳細信息，此圖像格式為JPG/PSD，lovepik編號為400216897，使用場景為其他，大小為39.6 MB。 在Lovepik上免費下載近100,000個矢量插圖資源，您可以在Web和移動界面，廣告設計和印刷設計中使用這些資源，使您的項目設計的視覺層次結構和頁面佈局更加獨特和前沿。', '獲取手繪花朵插圖設計的更多詳細信息，', 'flower.jpg'),
(14, 25, '作品名稱', '\r\n作品名稱 \r\n作品名稱\r\n作品介紹(200以下)', '\r\n作品名稱 \r\n作品名稱\r\n作品介紹(200以下) \r\n\r\n作品名稱', 'student.jpg'),
(15, 25, '下雨', '這個周末安排活動時要注意氣溫變化！中央氣象局表示，東北風從明(28)日開始增強，北部、東半部水氣增加，天氣偏溼涼；到了週五晚間至週六清晨轉為乾冷，預估週六清晨最冷，台南以北及東半部地區，低溫約攝氏18至21度。', '台南以北及東半部地區，低溫約攝氏18至21度。', '02-rainbow-facts-exist-at-night.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `carticket`
--
ALTER TABLE `carticket`
  ADD PRIMARY KEY (`ctid`);

--
-- 資料表索引 `mem`
--
ALTER TABLE `mem`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageid`);

--
-- 資料表索引 `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`wid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `carticket`
--
ALTER TABLE `carticket`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mem`
--
ALTER TABLE `mem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `works`
--
ALTER TABLE `works`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
