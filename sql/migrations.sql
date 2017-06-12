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

Date: 2017-06-12 09:53:02
*/


-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS "public"."migrations";
CREATE TABLE "public"."migrations" (
"id" int4 DEFAULT nextval('migrations_id_seq'::regclass) NOT NULL,
"migration" varchar(255) COLLATE "default" NOT NULL,
"batch" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO "public"."migrations" VALUES ('1', '2017_05_23_033522_Standar2', '1');
INSERT INTO "public"."migrations" VALUES ('2', '2017_05_23_035718_Standar3', '1');
INSERT INTO "public"."migrations" VALUES ('3', '2017_05_23_035728_Standar4', '1');
INSERT INTO "public"."migrations" VALUES ('4', '2017_05_23_035739_Standar5', '1');
INSERT INTO "public"."migrations" VALUES ('5', '2017_05_23_035749_Standar6', '1');
INSERT INTO "public"."migrations" VALUES ('6', '2017_05_23_035757_Standar7', '1');

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table migrations
-- ----------------------------
ALTER TABLE "public"."migrations" ADD PRIMARY KEY ("id");
