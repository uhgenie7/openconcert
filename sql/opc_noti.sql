-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-03-29 08:43
-- 서버 버전: 10.4.16-MariaDB
-- PHP 버전: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `opc_noti`
--

CREATE TABLE `opc_noti` (
  `OPC_NOTI_num` int(11) NOT NULL COMMENT '고유번호',
  `OPC_NOTI_tit` varchar(20) NOT NULL COMMENT '제목',
  `OPC_NOTI_desc` text DEFAULT NULL COMMENT '설명',
  `OPC_NOTI_reg` varchar(15) DEFAULT NULL COMMENT '등록일',
  `OPC_NOTI_hit` varchar(15) NOT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `opc_noti`
--
ALTER TABLE `opc_noti`
  ADD PRIMARY KEY (`OPC_NOTI_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `opc_noti`
--
ALTER TABLE `opc_noti`
  MODIFY `OPC_NOTI_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
