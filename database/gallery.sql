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
(13, '30', '220', '3'),
(14, '30', '180', '6'),
(15, '30', '110', '6'),
(38, '26', '150', '2'),
(53, '34', '220', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `lovework`
--

CREATE TABLE `lovework` (
  `lid` int(11) NOT NULL,
  `mid` varchar(200) NOT NULL,
  `wid` varchar(200) NOT NULL,
  `lovework` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `lovework`
--

INSERT INTO `lovework` (`lid`, `mid`, `wid`, `lovework`) VALUES
(1, '25', '4', '1'),
(2, '25', '10', '1'),
(3, '25', '4', '2'),
(4, '25', '16', '1'),
(5, '25', '18', '1'),
(6, '24', '12', '1'),
(7, '24', '16', '2'),
(8, '24', '3', '1'),
(9, '24', '4', '1'),
(10, '24', '10', '2'),
(11, '24', '10', '1'),
(12, '24', '15', '1'),
(13, '26', '3', '1'),
(14, '26', '10', '1'),
(15, '26', '11', '1'),
(16, '26', '18', '1');

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
(23, '小狗', 'ac123456dk@gmail.com', '123456', '880504', '0986025718'),
(24, '涵涵', 'easonlmaggie@gmail.com', '0000', '890327', '0912345678'),
(25, '十月二十六日', '1026@mail.com', '1026', '2020-10-26', '0921345816'),
(26, '今天吃弘爺', '1027@mail.com', '1027', '19971027', '0912345789'),
(29, '李一一', 'maggie@gmail.com', '88', '19970819', '8035678'),
(30, '張鏸香', '2020@gmail.com', '2020', '1997-09-20', '0988756423'),
(31, '郭小小', 'accc123456dk@gmail.com', '789456', '2020-10-13', '0978456123'),
(32, '測試先生', 'aaa@gmail.com', 'aaa', '2020-10-28', '098877554'),
(33, '張鏸香', 'u0545008@gmail.com', '00000', '1997-09-20', '0986025718'),
(34, '管理者', 'management@gmail.com', 'management', '2020-11-25', '0000000000');

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
(5, '25', '3', '很認真很好看'),
(6, '25', '4', '花朵很真實'),
(7, '25', '4', '優雅而獨特的魅力'),
(9, '25', '13', '12\r\n'),
(10, '25', '15', '美麗啊'),
(11, '32', '15', 'nice'),
(12, '25', '11', '77777'),
(13, '25', '11', '8888'),
(16, '25', '3', '顏色很豐富'),
(17, '33', '10', '在大學學姊報名之下，參加伊林超級男模大賽，獲得第3名後'),
(18, '33', '10', '所拍平面廣告而使劉以豪的詢問度大增。'),
(21, '33', '3', '顏色很豐富同意呢'),
(23, '33', '3', '好棒哦'),
(24, '33', '4', '這我可以'),
(25, '33', '10', '率出新告度'),
(26, '33', '11', '有感覺'),
(27, '33', '12', '可愛哦'),
(28, '33', '13', '小花多很可愛'),
(30, '33', '15', '下雨後種會放晴'),
(31, '33', '16', '這是背影嗎?哈哈哈'),
(32, '33', '17', '猶豫的感覺嗎'),
(33, '32', '16', '我自己化的哦很棒吧'),
(34, '32', '18', '娃好特別的LOGO'),
(35, '32', '20', '那現在還在徵人嗎?'),
(37, '25', '4', '123123'),
(38, '25', '4', '123123');

-- --------------------------------------------------------

--
-- 資料表結構 `reservation`
--

CREATE TABLE `reservation` (
  `rid` int(11) NOT NULL,
  `mid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `datet` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `timet` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `peo` varchar(200) NOT NULL,
  `restatus` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `reservation`
--

INSERT INTO `reservation` (`rid`, `mid`, `name`, `phone`, `datet`, `timet`, `peo`, `restatus`, `remarks`) VALUES
(10, '26', '今天吃弘爺', '0912345789', '2020-10-12', '下午14:00', '5-10人', '3', ''),
(12, '26', '張小姐', '0912345789', '2020-10-15', '下午14:00', '10-20人', '1', '789'),
(13, '25', '陳小姐', '0921345816', '2020-10-30', '下午14:00', '10-20人', '2', '有老人家'),
(14, '33', '張鏸香', '0986025718', '2020-10-31', '下午14:00', '10-20人', '1', '需要輪椅一台'),
(15, '33', '張鏸紅', '0986036021', '2020-11-26', '下午16:00', '20人以上', '2', ''),
(17, '26', '張小姐', '0912345789', '2020-10-15', '下午14:00', '10-20人', '1', '789'),
(18, '26', '張小姐', '0912345789', '2020-10-15', '下午14:00', '10-20人', '2', '789'),
(19, '32', '測試先生', '0988775777', '2020-11-06', '下午14:00', '5-10人', '1', ''),
(20, '32', '測試先生', '0923654875', '2020-11-20', '下午14:00', '10-20人', '2', '一二三四五六'),
(23, '25', '陳先生', '0921345816', '2020-11-28', '下午14:00', '10-20人', '1', '');

-- --------------------------------------------------------

--
-- 資料表結構 `ticketorder`
--

CREATE TABLE `ticketorder` (
  `toid` int(11) NOT NULL,
  `mid` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `gettickets` varchar(200) NOT NULL,
  `sum` varchar(200) NOT NULL,
  `tostatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `ticketorder`
--

INSERT INTO `ticketorder` (`toid`, `mid`, `payment`, `gettickets`, `sum`, `tostatus`) VALUES
(5, '25', '1', '1', '2140', '3'),
(6, '25', '2', '2', '400', '3'),
(7, '25', '3', '2', '840', '1'),
(8, '26', '1', '1', '2070', '2'),
(9, '26', '3', '3', '940', '3'),
(10, '26', '2', '2', '1540', '2'),
(11, '26', '3', '2', '220', '1'),
(12, '33', '3', '3', '1630', '1'),
(13, '33', '2', '3', '760', '2'),
(14, '33', '3', '2', '660', '1'),
(15, '32', '3', '1', '3470', '2'),
(16, '32', '2', '1', '220', '3'),
(17, '33', '3', '2', '660', '3'),
(18, '33', '3', '2', '660', '3'),
(19, '32', '1', '1', '880', '1'),
(20, '32', '2', '3', '900', '1'),
(21, '32', '2', '2', '2060', '1'),
(22, '36', '3', '2', '1350', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `ticketorderlist`
--

CREATE TABLE `ticketorderlist` (
  `tolid` int(11) NOT NULL,
  `toid` varchar(200) NOT NULL,
  `species` varchar(200) NOT NULL,
  `num` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `ticketorderlist`
--

INSERT INTO `ticketorderlist` (`tolid`, `toid`, `species`, `num`) VALUES
(7, '5', '220', '3'),
(8, '5', '150', '4'),
(9, '5', '220', '4'),
(10, '6', '220', '1'),
(11, '6', '180', '1'),
(12, '7', '220', '3'),
(13, '7', '180', '1'),
(14, '8', '220', '3'),
(15, '8', '150', '5'),
(16, '8', '110', '6'),
(20, '9', '220', '1'),
(21, '9', '180', '4'),
(22, '10', '220', '2'),
(23, '10', '220', '5'),
(24, '11', '220', '1'),
(25, '12', '220', '4'),
(26, '12', '150', '5'),
(27, '13', '110', '2'),
(28, '13', '180', '3'),
(29, '14', '220', '3'),
(30, '15', '150', '7'),
(31, '15', '110', '10'),
(32, '15', '220', '6'),
(33, '16', '220', '1'),
(34, '19', '180', '8'),
(35, '19', '220', '4'),
(36, '20', '150', '6'),
(37, '21', '220', '2'),
(38, '21', '180', '9');

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
(15, 25, '下雨', '這個周末安排活動時要注意氣溫變化！中央氣象局表示，東北風從明(28)日開始增強，北部、東半部水氣增加，天氣偏溼涼；到了週五晚間至週六清晨轉為乾冷，預估週六清晨最冷，台南以北及東半部地區，低溫約攝氏18至21度。', '台南以北及東半部地區，低溫約攝氏18至21度。', '02-rainbow-facts-exist-at-night.jpg'),
(16, 32, 'people', 'Sketch People Vector  - 30,490 royalty free vector graphics and clipart matching Sketch People', 'Sketch People Vector  ', 'people2.jpg'),
(17, 32, '劉以豪', '《比悲傷更悲傷的故事》（英語：More Than Blue）是一部2018年臺灣愛情電影，翻拍自2009年南韓電影《最悲傷的故事》[2]，導演為林孝謙，並以擅長詩意光影的香港攝影師關本良擔任攝影指導。2018年1月4日開鏡。由劉以豪、陳意涵、張書豪、陳庭妮領銜主演[3]，2018年11月30日港、臺同步上映[4]，2019年3月14日澳洲上映[5]。本劇入選第23屆', '比悲傷更悲傷的故事', 'more than blue.jpg'),
(18, 33, '美術館LOGO', '用於上課網站著LOGO設計，以英文字母TR為出發點，讓字母產生生命感，彷彿活生生的，舞動自我。', '用於上課網站著LOGO設計', 'LOGO.png'),
(20, 33, '陳麻飯', '陳麻飯陳老闆要求製作徵人海報2019/3-2019/6', '徵人海報', '陳麻飯.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `carticket`
--
ALTER TABLE `carticket`
  ADD PRIMARY KEY (`ctid`);

--
-- 資料表索引 `lovework`
--
ALTER TABLE `lovework`
  ADD PRIMARY KEY (`lid`);

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
-- 資料表索引 `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`rid`);

--
-- 資料表索引 `ticketorder`
--
ALTER TABLE `ticketorder`
  ADD PRIMARY KEY (`toid`);

--
-- 資料表索引 `ticketorderlist`
--
ALTER TABLE `ticketorderlist`
  ADD PRIMARY KEY (`tolid`);

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
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lovework`
--
ALTER TABLE `lovework`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mem`
--
ALTER TABLE `mem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reservation`
--
ALTER TABLE `reservation`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ticketorder`
--
ALTER TABLE `ticketorder`
  MODIFY `toid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ticketorderlist`
--
ALTER TABLE `ticketorderlist`
  MODIFY `tolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `works`
--
ALTER TABLE `works`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
