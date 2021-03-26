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
-- 테이블 구조 `opc_msg`
--

CREATE TABLE `opc_msg` (
  `OPC_MSG_num` int(11) NOT NULL COMMENT '고유번호',
  `OPC_MSG_name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '작성자 이름',
  `OPC_MSG_email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '작성자 이메일',
  `OPC_MSG_tit` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '메시지 제목',
  `OPC_MSG_con` text CHARACTER SET utf8 NOT NULL COMMENT '메시지 내용',
  `OPC_MSG_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '메시지 작성일시'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `opc_msg`
--
ALTER TABLE `opc_msg`
  ADD PRIMARY KEY (`OPC_MSG_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `opc_msg`
--
ALTER TABLE `opc_msg`
  MODIFY `OPC_MSG_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
