-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-02-04 03:41
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
-- 테이블 구조 `opc_per`
--

CREATE TABLE `opc_per` (
  `OPC_PER_num` int(11) NOT NULL COMMENT '고유번호',
  `OPC_PER_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '공연제목',
  `OPC_PER_ger` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '장르',
  `OPC_PER_des` text CHARACTER SET utf8 NOT NULL COMMENT '공연설명',
  `OPC_PER_thumb` text CHARACTER SET utf8 NOT NULL COMMENT '공연간략설명',
  `OPC_PER_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '포스터 사진',
  `OPC_PER_actor` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '배우',
  `OPC_PER_esrb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '콘텐츠 등급',
  `OPC_PER_reg` varchar(15) CHARACTER SET utf8 DEFAULT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `opc_per`
--
ALTER TABLE `opc_per`
  ADD PRIMARY KEY (`OPC_PER_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `opc_per`
--
ALTER TABLE `opc_per`
  MODIFY `OPC_PER_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
