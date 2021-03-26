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
-- 테이블 구조 `opc_mem`
--

CREATE TABLE `opc_mem` (
  `OPC_mem_num` int(11) NOT NULL COMMENT '고유번호',
  `OPC_mem_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '아이디',
  `OPC_mem_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '이름',
  `OPC_mem_email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '이메일',
  `OPC_mem_pass` varchar(80) CHARACTER SET utf8 NOT NULL COMMENT '비밀번호',
  `OPC_mem_regi_day` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '가입일',
  `OPC_mem_level` int(11) DEFAULT NULL COMMENT '레벨(회원등급)',
  `OPC_mem_point` int(11) NOT NULL COMMENT '포인트'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `opc_mem`
--

INSERT INTO `opc_mem` (`OPC_mem_num`, `OPC_mem_id`, `OPC_mem_name`, `OPC_mem_email`, `OPC_mem_pass`, `OPC_mem_regi_day`, `OPC_mem_level`, `OPC_mem_point`) VALUES
(5, 'hello2', '안녕2', 'hello2@naver.com', '1234', '2020-12-28 18:02:37', 9, 0),
(6, 'hello3', '안녕3', 'hello3@naver.com', '11', '2020-12-28 18:03:30', 9, 0),
(7, 'hello1', '안녕1', 'hello@naver.com', '1234', '2020-12-28 18:04:12', 1, 0),
(8, 'holly', '홀리', 'gg@naver.com', '1313', '2020-12-28 18:09:15', 9, 1),
(9, 'hi1', '안녕하세요', 'hello@naver.com', '1234', '2021-01-07 12:05:26', 9, 0),
(10, 'lalala', '랄랄라', 'lalala@hello.co.kr', '1234', '2021-02-02 10:41:15', 9, 0),
(11, 'geonanu', '한지오', 'geo@nation.com', '1234', '2021-02-02 10:41:42', 9, 0),
(12, 'hellonum2', '김안녕', 'num2@hanmail.com', '1234', '2021-02-02 10:42:11', 9, 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `opc_mem`
--
ALTER TABLE `opc_mem`
  ADD PRIMARY KEY (`OPC_mem_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `opc_mem`
--
ALTER TABLE `opc_mem`
  MODIFY `OPC_mem_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
