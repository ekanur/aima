/*
Navicat PGSQL Data Transfer

Source Server         : localhost
Source Server Version : 90504
Source Host           : localhost:5432
Source Database       : aima
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90504
File Encoding         : 65001

Date: 2017-06-12 09:53:35
*/


-- ----------------------------
-- Table structure for standar3s
-- ----------------------------
DROP TABLE IF EXISTS "public"."standar3s";
CREATE TABLE "public"."standar3s" (
"id" int4 DEFAULT nextval('standar3s_id_seq'::regclass) NOT NULL,
"kode" varchar(15) COLLATE "default" NOT NULL,
"nilai" int4 NOT NULL,
"id_jurusan" int4 NOT NULL,
"created_at" timestamp(0),
"updated_at" timestamp(0),
"deleted_at" timestamp(0)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table standar3s
-- ----------------------------
ALTER TABLE "public"."standar3s" ADD PRIMARY KEY ("id");
