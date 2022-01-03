-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 03:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+05:30";

--
-- Table structures
--

DROP TABLE `student_details`;
DROP TABLE `jee_details`;
DROP TABLE `fees_details`;
DROP TABLE `hostel_details`;
DROP TABLE `address_details`;
DROP TABLE `education_details`;
DROP TABLE `education_details_2`;
DROP TABLE `health_details`;
DROP TABLE `declaration_details`;
DROP TABLE `user`;

CREATE TABLE `student_details` (
  `id`          int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name`        text NOT NULL,
  `gender`      text NOT NULL,
  `blood-grp`   text NOT NULL,
  `dob`         text NOT NULL,
  `mob1`        int(10) NOT NULL,
  `mob2`        int(10) NOT NULL,
  `email`       text NOT NULL,
  `aadhar`      int(12) NOT NULL,
  `f_name`      text NOT NULL,
  `f_occ`       text NOT NULL,
  `m_name`      text NOT NULL,
  `m_occ`       text NOT NULL,
  `branch`      text NOT NULL,
  `minority`    text NOT NULL,
  `disability`  text NOT NULL

);

CREATE TABLE `jee_details` (
  `id`                        int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `jee-round`                 int(2) NOT NULL,
  `jee-roll`                  int(12) NOT NULL,
  `jee-rank`                  int(10) NOT NULL,
  `jee-mark`                  int(3) NOT NULL,
  `jee-score`                 int(3) NOT NULL,
  `jee-year`                  int(4) NOT NULL,
  `allotment-category`        char(3) NOT NULL,
  `candidate-category`        char(3) NOT NULL

);

CREATE TABLE `fees_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fees-no-1`                int(10) NOT NULL,              
  `fees-date-1`              text NOT NULL,
  `fees-amt-1`               int(6) NOT NULL,
  `fees-no-2`                int(10) NOT NULL,
  `fees-date-2`              text NOT NULL,
  `fees-amt-2`               int(6) NOT NULL

);

CREATE TABLE `hostel_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `hostel-req`               char(3) NOT NULL,
  `encl-1`                   char(3) NOT NULL,
  `encl-2`                   char(3) NOT NULL,
  `encl-3`                   char(3) NOT NULL,
  `encl-4`                   char(3) NOT NULL,
  `encl-5`                   char(3) NOT NULL,
  `encl-6`                   char(3) NOT NULL,
  `encl-7`                   char(3) NOT NULL,
  `encl-8`                   char(3) NOT NULL,
  `encl-9`                   char(3) NOT NULL,
  `encl-10`                  char(3) NOT NULL,
  `encl-11`                  char(3) NOT NULL,
  `encl-12`                  char(3) NOT NULL,
  `encl-13`                  char(3) NOT NULL,
  `encl-14`                  char(3) NOT NULL

);

CREATE TABLE `address_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `add-1`                    text NOT NULL,
  `add-city-1`               text NOT NULL,
  `add-state-1`              text NOT NULL,
  `add-pincode-1`            int(6) NOT NULL,
  `add-mob-1`                int(10) NOT NULL,
  `add-2`                    text NOT NULL,
  `add-city-2`               text NOT NULL,
  `add-state-2`              text NOT NULL,
  `add-pincode-2`            int(6) NOT NULL,
  `add-mob-2`                int(10) NOT NULL

);

CREATE TABLE `education_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ed-board-1`               text NOT NULL,
  `ed-sub-1`                 text NOT NULL,
  `ed-year-1`                int(4) NOT NULL,
  `ed-marks-1`               int(3) NOT NULL,
  `ed-grade-1`               text NOT NULL,
  `ed-board-2`               text NOT NULL,
  `ed-sub-2`                 text NOT NULL,
  `ed-year-2`                int(4) NOT NULL,
  `ed-marks-2`               int(3) NOT NULL,
  `ed-grade-2`               text NOT NULL

);

CREATE TABLE `education_details_2` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `file-1`                   char(3) NOT NULL,
  `file-2`                   char(3) NOT NULL,
  `file-3`                   char(3) NOT NULL,
  `file-4`                   char(3) NOT NULL,
  `file-5`                   char(3) NOT NULL,
  `file-6`                   char(3) NOT NULL

);

CREATE TABLE `health_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `disease`                  char(3) NOT NULL,
  `dis-details`              text NOT NULL

);

CREATE TABLE `declaration_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `date`                     date NOT NULL,
  `sign`                     text NOT NULL

);

--
-- Table structure for table `user`
--
CREATE TABLE `user` (
  `id`         int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email`      text NOT NULL,
  `password`   text NOT NULL
);

--
-- Dumping data for table `user`
--
INSERT INTO `user` (`id`, `email`, `password`) VALUES (1, 'admin@admin.com', 'admin');
