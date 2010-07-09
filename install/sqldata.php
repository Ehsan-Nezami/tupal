<?php
$sql_drop_tbls = array(
	"sort",	"article_db",	"article",	"reply",	"article_content_100",
	"article_content_101",	"article_content_102",	"article_content_103",	"article_content_104",	"article_content_105",
	"article_module",	"members",	"memberdata",	"memberdata_1",	"group",
	"menu",	"admin_menu",	"module",	"fu_article",	"fu_sort",
	"special",	"special_comment",	"spsort",	"alonepage",	"channel",
	"collection",	"comment",	"config",	"copyfrom",	"hack",
	"label",	"form_content",	"form_content_1",	"form_content_2",	"form_content_3",
	"form_content_4",	"form_content_5",	"form_content_6",	"form_content_7",	"form_content_8",
	"form_module",	"form_reply",	"friendlink",	"friendlink_sort",	"gather_rule",
	"gather_sort",	"pm",	"guestbook",	"keyword",	"keywordid",
	"limitword",	"ad",	"ad_user",	"sellad",	"sellad_user",
	"shoporderproduct",	"shoporderuser",	"upfile",	"vote",	"vote_comment",
	"vote_config",	"area",	"jfabout",	"jfsort",	"moneycard",
	"olpay",	"propagandize",	"report",	"template",	"template_bak",
	"count_site",	"count_stat",	"count_user",	"exam_form",	"exam_form_element",
	"exam_sort",	"exam_student",	"exam_student_title",	"exam_title"
);

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}sort` (
  fid int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fup` int(10) unsigned NOT NULL default '0',
  `fmid` int(10) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `class` smallint(4) NOT NULL default '0',
  `sons` smallint(4) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `admin` varchar(100) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `listorder` tinyint(2) NOT NULL default '0',
  `passwd` varchar(32) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL default '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL default '',
  `maxperpage` tinyint(3) NOT NULL default '0',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` text NOT NULL,
  `list_html` varchar(255) NOT NULL default '',
  `bencandy_html` varchar(255) NOT NULL default '',
  `domain` varchar(150) NOT NULL default '',
  `domain_dir` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`fid`),
  KEY `fup` (`fup`),
  KEY `fmid` (`fmid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article_db` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY  (`aid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article` (
  `aid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL default '',
  `smalltitle` varchar(100) NOT NULL default '',
  `fid` mediumint(7) unsigned NOT NULL default '0',
  `mid` mediumint(5) NOT NULL default '0',
  `fname` varchar(50) NOT NULL default '',
  `special_id` mediumint(7) NOT NULL default '0',
  `bak_id` mediumint(7) NOT NULL default '0',
  `info` tinyint(2) NOT NULL default '0',
  `hits` mediumint(7) NOT NULL default '0',
  `pages` smallint(4) NOT NULL default '0',
  `comments` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `author` varchar(30) NOT NULL default '',
  `copyfrom` varchar(100) NOT NULL default '',
  `copyfromurl` varchar(150) NOT NULL default '',
  `titlecolor` varchar(15) NOT NULL default '',
  `fonttype` tinyint(1) NOT NULL default '0',
  `titleicon` smallint(3) NOT NULL default '0',
  `picurl` varchar(150) NOT NULL default '0',
  `ispic` tinyint(1) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `yzer` varchar(30) NOT NULL default '',
  `yztime` int(10) NOT NULL default '0',
  `levels` tinyint(2) NOT NULL default '0',
  `levelstime` int(10) NOT NULL default '0',
  `keywords` varchar(100) NOT NULL default '',
  `jumpurl` varchar(150) NOT NULL default '',
  `iframeurl` varchar(150) NOT NULL default '',
  `style` varchar(15) NOT NULL default '',
  `template` varchar(255) NOT NULL default '',
  `target` tinyint(1) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `lastfid` mediumint(7) NOT NULL default '0',
  `money` mediumint(7) NOT NULL default '0',
  `buyuser` text NOT NULL,
  `passwd` varchar(32) NOT NULL default '',
  `allowdown` varchar(150) NOT NULL default '',
  `allowview` varchar(150) NOT NULL default '',
  `editer` varchar(30) NOT NULL default '',
  `edittime` int(10) NOT NULL default '0',
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `description` text NOT NULL,
  `lastview` int(10) NOT NULL default '0',
  `digg_num` mediumint(7) NOT NULL default '0',
  `digg_time` int(10) NOT NULL default '0',
  `forbidcomment` tinyint(1) NOT NULL default '0',
  `ifvote` tinyint(1) NOT NULL default '0',
  `heart` varchar(255) NOT NULL default '',
  `htmlname` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`aid`),
  KEY `fid` (`fid`),
  KEY `hits` (`hits`,`yz`,`fid`,`ispic`),
  KEY `lastview` (`yz`,`lastview`,`fid`,`ispic`),
  KEY `list` (`list`,`yz`,`fid`,`ispic`),
  KEY `ispic` (`ispic`),
  KEY `uid` (`uid`),
  KEY `levels` (`levels`),
  KEY `digg_num` (`digg_num`),
  KEY `digg_time` (`digg_time`),
  KEY `mid` (`mid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}reply` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `subhead` varchar(150) NOT NULL default '',
  `postdate` int(10) NOT NULL default '0',
  `aid` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `topic` tinyint(1) NOT NULL default '0',
  `ishtml` tinyint(1) NOT NULL default '1',
  `download` text NOT NULL,
  `content` mediumtext NOT NULL,
  `orderid` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`rid`),
  KEY `aid` (`aid`),
  KEY `topic` (`topic`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article_content_100` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `aid` mediumint(7) NOT NULL default '0',
  `rid` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `photourl` mediumtext NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `aid` (`aid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article_content_101` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `aid` mediumint(7) NOT NULL default '0',
  `rid` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `day_hits` mediumint(7) NOT NULL default '0',
  `week_hits` mediumint(7) NOT NULL default '0',
  `month_hits` mediumint(7) NOT NULL default '0',
  `total_hits` mediumint(7) NOT NULL default '0',
  `hits_time` int(10) NOT NULL default '0',
  `hits_user` text NOT NULL,
  `my_author` varchar(30) NOT NULL default '',
  `my_copyfromurl` varchar(150) NOT NULL default '',
  `my_demo` varchar(150) NOT NULL default '',
  `operatingsystem` varchar(150) NOT NULL default '',
  `softlanguage` varchar(30) NOT NULL default '',
  `copyright` varchar(30) NOT NULL default '',
  `softsize` varchar(20) NOT NULL default '',
  `softurl` mediumtext NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `aid` (`aid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article_content_102` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `aid` mediumint(7) NOT NULL default '0',
  `rid` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `day_hits` mediumint(7) NOT NULL default '0',
  `week_hits` mediumint(7) NOT NULL default '0',
  `month_hits` mediumint(7) NOT NULL default '0',
  `total_hits` mediumint(7) NOT NULL default '0',
  `hits_time` int(10) NOT NULL default '0',
  `hits_user` text NOT NULL,
  `mvurl` mediumtext NOT NULL,
  `my_role` varchar(100) NOT NULL default '',
  `my_lang` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `aid` (`aid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article_content_103` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `aid` mediumint(7) NOT NULL default '0',
  `rid` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `shoptype` varchar(50) NOT NULL default '',
  `martprice` varchar(15) NOT NULL default '',
  `nowprice` varchar(20) NOT NULL default '',
  `shop_id` varchar(30) NOT NULL default '',
  `shopmoney` int(7) NOT NULL default '0',
  `shopnum` varchar(5) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `aid` (`aid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article_content_104` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `aid` mediumint(7) NOT NULL default '0',
  `rid` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `flashurl` varchar(150) NOT NULL default '',
  `flashauthor` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `aid` (`aid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article_content_105` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `aid` mediumint(7) NOT NULL default '0',
  `rid` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `my_type` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `aid` (`aid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}article_module` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL default '',
  `alias` varchar(30) NOT NULL default '',
  `list` smallint(4) NOT NULL default '0',
  `allowpost` varchar(255) NOT NULL default '',
  `style` varchar(30) NOT NULL default '',
  `template` varchar(255) NOT NULL default '',
  `config` mediumtext NOT NULL,
  `keywords` varchar(30) NOT NULL default '',
  `ifclose` tinyint(1) NOT NULL default '0',
  `iftable` mediumint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}members` (
  `uid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}memberdata` (
  `uid` mediumint(7) unsigned NOT NULL default '0',
  `username` varchar(50) NOT NULL default '',
  `question` varchar(32) NOT NULL default '',
  `groupid` smallint(4) NOT NULL default '0',
  `grouptype` tinyint(1) NOT NULL default '0',
  `groups` varchar(255) NOT NULL default '',
  `yz` tinyint(1) NOT NULL default '0',
  `newpm` tinyint(1) NOT NULL default '0',
  `medals` varchar(255) NOT NULL default '',
  `money` mediumint(7) unsigned NOT NULL default '0',
  `totalspace` bigint(13) NOT NULL default '0',
  `usespace` bigint(13) NOT NULL default '0',
  `oltime` int(10) NOT NULL default '0',
  `lastvist` int(10) NOT NULL default '0',
  `lastip` varchar(15) NOT NULL default '',
  `regdate` int(10) NOT NULL default '0',
  `regip` varchar(15) NOT NULL default '',
  `sex` tinyint(1) NOT NULL default '0',
  `bday` date NOT NULL default '0000-00-00',
  `icon` varchar(150) NOT NULL default '',
  `introduce` text NOT NULL,
  `hits` int(7) NOT NULL default '0',
  `lastview` int(10) NOT NULL default '0',
  `oicq` varchar(11) NOT NULL default '',
  `msn` varchar(50) NOT NULL default '',
  `homepage` varchar(150) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `provinceid` mediumint(6) NOT NULL default '0',
  `cityid` mediumint(7) NOT NULL default '0',
  `address` varchar(255) NOT NULL default '',
  `postalcode` varchar(6) NOT NULL default '',
  `mobphone` varchar(12) NOT NULL default '',
  `telephone` varchar(25) NOT NULL default '',
  `idcard` varchar(20) NOT NULL default '',
  `truename` varchar(20) NOT NULL default '',
  `config` text NOT NULL,
  `moneycard` mediumint(7) unsigned NOT NULL default '0',
  `email_yz` tinyint(1) NOT NULL default '0',
  `mob_yz` tinyint(1) NOT NULL default '0',
  `idcard_yz` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`),
  KEY `groups` (`groups`),
  KEY `sex` (`sex`,`bday`,`cityid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}memberdata_1` (
  `uid` mediumint(7) NOT NULL default '0',
  `cpname` varchar(50) NOT NULL default '',
  `cplogo` varchar(150) NOT NULL default '',
  `cptype` varchar(40) NOT NULL default '0',
  `cptrade` varchar(40) NOT NULL default '',
  `cpproduct` varchar(255) NOT NULL default '',
  `cpcity` mediumint(7) NOT NULL default '0',
  `cpfoundtime` varchar(20) NOT NULL default '',
  `cpfounder` varchar(20) NOT NULL default '',
  `cpmannum` varchar(20) NOT NULL default '',
  `cpmoney` varchar(20) NOT NULL default '',
  `cpcode` varchar(30) NOT NULL default '',
  `cppermit` varchar(150) NOT NULL default '',
  `cpweb` varchar(150) NOT NULL default '',
  `cppostcode` varchar(6) NOT NULL default '0',
  `cptelephone` varchar(30) NOT NULL default '',
  `cpfax` varchar(30) NOT NULL default '',
  `cpaddress` varchar(150) NOT NULL default '',
  `cplinkman` varchar(20) NOT NULL default '',
  `cpmobphone` varchar(11) NOT NULL default '',
  `cpqq` varchar(11) NOT NULL default '',
  `cpmsn` varchar(50) NOT NULL default '',
  UNIQUE KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}group` (
  `gid` smallint(4) NOT NULL AUTO_INCREMENT,
  `gptype` tinyint(1) NOT NULL default '0',
  `grouptitle` varchar(50) NOT NULL default '',
  `levelnum` mediumint(7) NOT NULL default '0',
  `totalspace` int(10) NOT NULL default '0',
  `allowsearch` tinyint(1) NOT NULL default '0',
  `powerdb` text NOT NULL,
  `allowadmin` tinyint(1) NOT NULL default '0',
  `allowadmindb` text,
  PRIMARY KEY  (`gid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}menu` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL default '0',
  `name` varchar(80) NOT NULL default '',
  `linkurl` varchar(150) NOT NULL default '',
  `color` varchar(15) NOT NULL default '',
  `target` tinyint(1) NOT NULL default '0',
  `moduleid` tinyint(2) NOT NULL default '0',
  `type` tinyint(2) NOT NULL default '0',
  `hide` tinyint(1) NOT NULL default '0',
  `list` smallint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}admin_menu` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL default '0',
  `name` text NOT NULL,
  `linkurl` varchar(150) NOT NULL default '',
  `color` varchar(15) NOT NULL default '',
  `target` tinyint(1) NOT NULL default '0',
  `list` smallint(4) NOT NULL default '0',
  `groupid` mediumint(5) NOT NULL default '0',
  `iftier` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}module` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL default '0',
  `name` varchar(30) NOT NULL default '',
  `pre` varchar(20) NOT NULL default '',
  `dirname` varchar(30) NOT NULL default '',
  `domain` varchar(100) NOT NULL default '',
  `admindir` varchar(20) NOT NULL default '',
  `unite_admin` tinyint(1) NOT NULL default '0',
  `config` text NOT NULL,
  `list` mediumint(5) NOT NULL default '0',
  `admingroup` varchar(150) NOT NULL default '',
  `adminmember` text NOT NULL,
  `unite_member` tinyint(1) NOT NULL default '1',
  `unite_table` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}fu_article` (
  `fid` int(7) NOT NULL default '0',
  `aid` int(10) NOT NULL default '0',
  KEY `fid` (`fid`),
  KEY `aid` (`aid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}fu_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL default '0',
  `fmid` mediumint(5) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `class` smallint(4) NOT NULL default '0',
  `sons` smallint(4) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `admin` varchar(100) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `listorder` tinyint(2) NOT NULL default '0',
  `passwd` varchar(32) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL default '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL default '',
  `maxperpage` tinyint(3) NOT NULL default '0',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` text NOT NULL,
  `list_html` varchar(255) NOT NULL default '',
  `bencandy_html` varchar(255) NOT NULL default '',
  `domain` varchar(150) NOT NULL default '',
  `domain_dir` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`fid`),
  KEY `fup` (`fup`),
  KEY `fmid` (`fmid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}special` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `titlecolor` varchar(15) NOT NULL default '',
  `keywords` varchar(100) NOT NULL default '',
  `style` varchar(25) NOT NULL default '',
  `template` varchar(255) NOT NULL default '',
  `picurl` varchar(150) NOT NULL default '',
  `content` mediumtext NOT NULL,
  `aids` text NOT NULL,
  `tids` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL default '',
  `target` tinyint(1) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(50) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  `hits` mediumint(7) NOT NULL default '0',
  `lastview` int(10) NOT NULL default '0',
  `levels` tinyint(1) NOT NULL default '0',
  `levelstime` int(10) NOT NULL default '0',
  `htmlfile` varchar(50) NOT NULL default '',
  `banner` varchar(150) NOT NULL default '',
  `allowpost` varchar(255) NOT NULL default '',
  `ifbase` tinyint(1) NOT NULL default '0',
  `htmlname` varchar(80) NOT NULL default '',
  `yz` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `ifbase` (`ifbase`),
  KEY `yz` (`yz`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}special_comment` (
  `id` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cid` mediumint(7) unsigned NOT NULL default '0',
  `vid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) unsigned NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  `icon` tinyint(3) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `aid` (`cid`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}spsort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL default '0',
  `name` varchar(200) NOT NULL default '',
  `class` smallint(4) NOT NULL default '0',
  `sons` smallint(4) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `admin` varchar(100) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `listorder` tinyint(2) NOT NULL default '0',
  `passwd` varchar(32) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL default '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL default '',
  `maxperpage` tinyint(3) NOT NULL default '0',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` text NOT NULL,
  `list_html` varchar(255) NOT NULL default '',
  `bencandy_html` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`fid`),
  KEY `fup` (`fup`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}alonepage` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `style` varchar(15) NOT NULL default '',
  `tpl_head` varchar(50) NOT NULL default '',
  `tpl_main` varchar(50) NOT NULL default '',
  `tpl_foot` varchar(50) NOT NULL default '',
  `filename` varchar(100) default NULL,
  `filepath` varchar(30) NOT NULL default '',
  `descrip` text NOT NULL,
  `keywords` varchar(255) NOT NULL default '',
  `content` text NOT NULL,
  `hits` int(7) NOT NULL default '0',
  `ishtml` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}channel` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `type` tinyint(2) NOT NULL default '0',
  `sort` smallint(4) NOT NULL default '0',
  `name` varchar(30) NOT NULL default '',
  `path` varchar(30) NOT NULL default '',
  `phpname` varchar(255) NOT NULL default '',
  `htmlname` varchar(255) NOT NULL default '',
  `fids` varchar(255) NOT NULL default '',
  `showfid` varchar(150) NOT NULL default '',
  `style` varchar(15) NOT NULL default '',
  `head_tpl` varchar(255) NOT NULL default '',
  `main_tpl` varchar(255) NOT NULL default '',
  `foot_tpl` varchar(255) NOT NULL default '',
  `url` varchar(150) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` text NOT NULL,
  `admin` varchar(150) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `config` text NOT NULL,
  PRIMARY KEY  (`id`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}collection` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `aid` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}comment` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(10) unsigned NOT NULL default '0',
  `fid` mediumint(7) unsigned NOT NULL default '0',
  `authorid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) unsigned NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  `icon` tinyint(3) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `ifcom` tinyint(1) NOT NULL default '0',
  `agree` mediumint(5) NOT NULL default '0',
  `disagree` mediumint(5) NOT NULL default '0',
  PRIMARY KEY  (`cid`),
  KEY `aid` (`aid`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `ifcom` (`ifcom`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}config` (
  `c_key` varchar(50) NOT NULL default '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY  (`c_key`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}copyfrom` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `keywords` (`name`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}hack` (
  `keywords` varchar(30) NOT NULL default '',
  `name` varchar(30) NOT NULL default '',
  `isclose` tinyint(1) NOT NULL default '0',
  `author` varchar(30) NOT NULL default '',
  `config` text NOT NULL,
  `htmlcode` text NOT NULL,
  `hackfile` text NOT NULL,
  `hacksqltable` text NOT NULL,
  `adminurl` varchar(150) NOT NULL default '',
  `about` text NOT NULL,
  `class1` varchar(30) NOT NULL default '',
  `class2` varchar(30) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `linkname` text NOT NULL,
  `isbiz` tinyint(1) NOT NULL default '0',
  UNIQUE KEY `keywords` (`keywords`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}label` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL default '',
  `ch` smallint(4) NOT NULL default '0',
  `chtype` tinyint(2) NOT NULL default '0',
  `tag` varchar(50) NOT NULL default '',
  `type` varchar(30) NOT NULL default '',
  `typesystem` tinyint(1) NOT NULL default '0',
  `code` text NOT NULL,
  `divcode` text,
  `hide` tinyint(1) NOT NULL default '0',
  `js_time` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `pagetype` tinyint(3) NOT NULL default '0',
  `module` mediumint(6) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `if_js` tinyint(1) NOT NULL default '0',
  `style` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`lid`),
  KEY `ch` (`ch`,`pagetype`,`module`,`fid`,`chtype`),
  KEY `tag` (`tag`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL default '',
  `mid` smallint(4) NOT NULL default '0',
  `hits` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `list` varchar(10) NOT NULL default '',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `titlecolor` varchar(15) NOT NULL default '',
  `yz` tinyint(1) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `hits` (`hits`,`yz`),
  KEY `list` (`list`,`yz`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content_1` (
  `id` mediumint(7) unsigned NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `truename` varchar(20) NOT NULL default '',
  `sex` int(1) NOT NULL default '0',
  `oicq` varchar(10) NOT NULL default '',
  `mobphone` varchar(11) NOT NULL default '',
  `interest` mediumtext NOT NULL,
  `introduce` mediumtext NOT NULL,
  `sortname` varchar(40) NOT NULL default '',
  `webtime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content_2` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `workplace` varchar(100) NOT NULL default '',
  `nums` varchar(10) NOT NULL default '',
  `jobrequire` mediumtext NOT NULL,
  `workwhere` varchar(50) NOT NULL default '',
  `wage` varchar(30) NOT NULL default '',
  `asksex` int(1) NOT NULL default '0',
  `schoo_age` varchar(20) NOT NULL default '',
  `wageyear` varchar(12) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content_3` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `advicetype` varchar(30) NOT NULL default '',
  `content` mediumtext NOT NULL,
  `truename` varchar(15) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `mobphone` varchar(25) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content_4` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `truename` varchar(15) NOT NULL default '',
  `sex` int(1) NOT NULL default '0',
  `age` int(2) NOT NULL default '0',
  `mobphone` varchar(25) NOT NULL default '',
  `metier` varchar(30) NOT NULL default '',
  `my_song` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content_5` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `content` mediumtext NOT NULL,
  `bday` varchar(25) NOT NULL default '',
  `school_age` varchar(20) NOT NULL default '',
  `native` varchar(30) NOT NULL default '',
  `specialty` varchar(40) NOT NULL default '',
  `skill` varchar(50) NOT NULL default '',
  `sport` varchar(80) NOT NULL default '',
  `height` int(3) NOT NULL default '0',
  `truename` varchar(15) NOT NULL default '',
  `oicq` varchar(10) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `mobphone` varchar(11) NOT NULL default '',
  `address` varchar(150) NOT NULL default '',
  `telephone` varchar(15) NOT NULL default '',
  `idcard` varchar(18) NOT NULL default '',
  `cp_title` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content_6` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `workposition` varchar(50) NOT NULL default '',
  `experience` mediumtext NOT NULL,
  `workyear` int(2) NOT NULL default '0',
  `truename` varchar(15) NOT NULL default '',
  `schoo_age` varchar(15) NOT NULL default '',
  `myage` int(2) NOT NULL default '0',
  `graduateschool` varchar(40) NOT NULL default '',
  `specialty` varchar(50) NOT NULL default '',
  `skill` varchar(50) NOT NULL default '',
  `sex` int(1) NOT NULL default '0',
  `telephone` varchar(25) NOT NULL default '',
  `wage` varchar(20) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `oicq` varchar(11) NOT NULL default '',
  `worktime` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content_7` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `product` varchar(50) NOT NULL default '',
  `paymoney` varchar(15) NOT NULL default '',
  `paytime` varchar(15) NOT NULL default '',
  `paytype` varchar(25) NOT NULL default '',
  `sendbank` varchar(30) NOT NULL default '',
  `receivebank` varchar(30) NOT NULL default '',
  `truename` varchar(15) NOT NULL default '',
  `oicq` varchar(11) NOT NULL default '',
  `telephone` varchar(30) NOT NULL default '',
  `mobphone` varchar(11) NOT NULL default '',
  `address` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_content_8` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `roomtype` varchar(30) NOT NULL default '',
  `roomnum` int(3) NOT NULL default '0',
  `numday` int(3) NOT NULL default '0',
  `intotime` varchar(30) NOT NULL default '',
  `truename` varchar(30) NOT NULL default '',
  `telephone` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) {$tbl_setting};
EOF;

$sql_tbl[] = <<<EOF
CREATE TABLE `{$tbl_prefix}form_module` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL default '',
  `list` smallint(4) NOT NULL default '0',
  `style` varchar(50) NOT NULL default '',
  `config` mediumtext NOT NULL,
  `allowpost` varchar(255) NOT NULL default '',
  `endtime` int(10) NOT NULL default '0',
  `about` text NOT NULL,
  `usetitle` tinyint(1) NOT NULL default '0',
  `repeatpost` tinyint(1) NOT NULL default '0',
  `statename` varchar(30) NOT NULL default '',
  `allowview` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) {$tbl_setting};
EOF;

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}form_reply` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL default '0',
  `mid` int(10) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`rid`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}friendlink` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` int(7) NOT NULL default '0',
  `name` varchar(30) NOT NULL default '',
  `url` varchar(150) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` varchar(255) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `ifhide` tinyint(1) NOT NULL default '0',
  `iswordlink` tinyint(1) default NULL,
  `hits` tinyint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `uid` int(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `yz` tinyint(1) NOT NULL default '1',
  `endtime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `yz` (`yz`,`endtime`,`ifhide`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}friendlink_sort` (
  `fid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  PRIMARY KEY  (`fid`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}gather_rule` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL default '0',
  `type` varchar(15) NOT NULL default '0',
  `fixsystem` varchar(30) NOT NULL default '',
  `filetype` varchar(50) NOT NULL default '',
  `webname` varchar(150) NOT NULL default '',
  `listurl` varchar(150) NOT NULL default '',
  `firstpage` varchar(150) NOT NULL default '',
  `page_begin` int(10) NOT NULL default '0',
  `page_end` int(10) NOT NULL default '0',
  `page_step` int(10) NOT NULL default '0',
  `title_minleng` smallint(5) NOT NULL default '0',
  `listmoreurl` text NOT NULL,
  `link_include_word` text NOT NULL,
  `link_noinclude_word` text NOT NULL,
  `link_replace_word` text NOT NULL,
  `title_replace_word` text NOT NULL,
  `list_begin_code` text NOT NULL,
  `list_end_code` text NOT NULL,
  `list_begin_preg` text NOT NULL,
  `list_end_preg` text NOT NULL,
  `gatherthesame` tinyint(1) NOT NULL default '0',
  `show_begin_preg` text NOT NULL,
  `show_end_preg` text NOT NULL,
  `show_endfile_preg` text NOT NULL,
  `show_begin_code` text NOT NULL,
  `show_end_code` text NOT NULL,
  `show_replace_word` text NOT NULL,
  `show_morepage` varchar(100) NOT NULL default '',
  `show_firstpage` varchar(100) NOT NULL default '',
  `show_spe2page` tinyint(1) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  `copypic` tinyint(1) NOT NULL default '0',
  `sort` smallint(4) NOT NULL default '0',
  `file_type` varchar(50) NOT NULL default '',
  `file_minleng` mediumint(6) NOT NULL default '0',
  `file_minsize` int(9) NOT NULL default '0',
  `file_includeword` text NOT NULL,
  `file_noincludeword` text NOT NULL,
  `file_explode` text NOT NULL,
  `file_picwidth` int(8) NOT NULL default '0',
  `file_star_string` varchar(150) NOT NULL default '',
  `title_rule` text NOT NULL,
  `content_rule` text NOT NULL,
  `title_morepage_rull` text NOT NULL,
  `content_morepage_rull` text NOT NULL,
  `charset_type` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}gather_sort` (
  `fid` mediumint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL default '',
  `fup` mediumint(6) NOT NULL default '0',
  `class` smallint(4) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `list` mediumint(5) NOT NULL default '0',
  `allowpost` varchar(255) NOT NULL default '',
  `sons` smallint(4) NOT NULL default '0',
  PRIMARY KEY  (`fid`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}pm` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `touid` mediumint(8) unsigned NOT NULL default '0',
  `togroups` varchar(80) NOT NULL default '',
  `fromuid` mediumint(8) unsigned NOT NULL default '0',
  `username` varchar(15) NOT NULL default '',
  `type` enum('rebox','sebox','public') NOT NULL default 'rebox',
  `ifnew` tinyint(1) NOT NULL default '0',
  `title` varchar(130) NOT NULL default '',
  `mdate` int(10) unsigned NOT NULL default '0',
  `content` text NOT NULL,
  PRIMARY KEY  (`mid`),
  KEY `touid` (`touid`),
  KEY `fromuid` (`fromuid`),
  KEY `type` (`type`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}guestbook` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL default '0',
  `ico` tinyint(2) NOT NULL default '0',
  `email` varchar(50) NOT NULL default '',
  `oicq` varchar(11) default NULL,
  `weburl` varchar(150) NOT NULL default '',
  `blogurl` varchar(150) NOT NULL default '',
  `uid` int(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `ip` varchar(15) NOT NULL default '',
  `content` text NOT NULL,
  `yz` tinyint(1) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  `reply` text NOT NULL,
  PRIMARY KEY  (`id`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}keyword` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(30) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `ifhide` tinyint(1) NOT NULL default '0',
  `url` varchar(150) NOT NULL default '',
  `num` smallint(4) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `keywords` (`keywords`),
  KEY `num` (`num`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}keywordid` (
  `id` mediumint(7) NOT NULL default '0',
  `aid` mediumint(7) NOT NULL default '0',
  KEY `id` (`id`),
  KEY `aid` (`aid`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}limitword` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `oldword` varchar(50) NOT NULL default '',
  `newword` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}ad` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(50) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  `type` varchar(30) NOT NULL default '0',
  `isclose` tinyint(1) NOT NULL default '0',
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `adcode` text NOT NULL,
  `posttime` int(10) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `hits` mediumint(7) NOT NULL default '0',
  `money` mediumint(6) NOT NULL default '0',
  `moneycard` mediumint(6) NOT NULL default '0',
  `ifsale` tinyint(1) NOT NULL default '0',
  `autoyz` tinyint(1) NOT NULL default '0',
  `demourl` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}ad_user` (
  `u_id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL default '0',
  `u_uid` mediumint(7) NOT NULL default '0',
  `u_username` varchar(30) NOT NULL default '',
  `u_day` smallint(4) NOT NULL default '0',
  `u_begintime` int(10) NOT NULL default '0',
  `u_endtime` int(10) NOT NULL default '0',
  `u_hits` mediumint(7) NOT NULL default '0',
  `u_yz` tinyint(1) NOT NULL default '0',
  `u_code` text NOT NULL,
  `u_money` mediumint(7) NOT NULL default '0',
  `u_moneycard` mediumint(7) NOT NULL default '0',
  `u_posttime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`u_id`),
  KEY `u_endtime` (`u_endtime`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}sellad` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL default '',
  `isclose` tinyint(1) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  `price` mediumint(5) NOT NULL default '0',
  `day` mediumint(4) NOT NULL default '0',
  `adnum` smallint(3) NOT NULL default '0',
  `wordnum` smallint(3) NOT NULL default '0',
  `autoyz` tinyint(1) NOT NULL default '1',
  `demourl` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}sellad_user` (
  `ad_id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `money` mediumint(6) NOT NULL default '0',
  `id` mediumint(7) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '1',
  `adlink` varchar(200) NOT NULL default '',
  `adword` varchar(255) NOT NULL default '',
  `hits` mediumint(7) NOT NULL default '0',
  `color` varchar(20) NOT NULL default '',
  `fonttype` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`ad_id`),
  KEY `id` (`id`,`endtime`,`money`,`yz`)
) {$tbl_setting};";


$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}shoporderproduct` (
  `pid` int(7) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL default '',
  `orderid` mediumint(7) default NULL,
  `shopid` int(10) NOT NULL default '0',
  `shopuid` mediumint(7) NOT NULL default '0',
  `ifsend` tinyint(1) NOT NULL default '0',
  `amount` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`pid`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}shoporderuser` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `truename` varchar(30) NOT NULL default '',
  `sex` varchar(10) NOT NULL default '',
  `telphone` varchar(20) NOT NULL default '',
  `mobphone` varchar(12) NOT NULL default '',
  `email` varchar(30) NOT NULL default '',
  `oicq` varchar(11) NOT NULL default '',
  `postalcode` varchar(6) NOT NULL default '',
  `sendtype` varchar(50) NOT NULL default '',
  `paytype` varchar(50) NOT NULL default '',
  `olpaytype` varchar(25) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `othersay` text NOT NULL,
  `posttime` int(10) NOT NULL default '0',
  `ifsend` tinyint(1) NOT NULL default '0',
  `totalmoney` varchar(15) NOT NULL default '',
  `ifpay` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}upfile` (
  `up_id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `module_id` smallint(4) NOT NULL default '0',
  `ids` varchar(255) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `url` varchar(150) NOT NULL default '',
  `filename` varchar(100) NOT NULL default '',
  `num` smallint(5) NOT NULL default '0',
  `if_tmp` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`up_id`),
  KEY `filename` (`filename`),
  KEY `if_tmp` (`if_tmp`),
  KEY `posttime` (`posttime`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}vote` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `cid` int(7) NOT NULL default '0',
  `title` varchar(50) NOT NULL default '',
  `votenum` int(7) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  `img` varchar(100) NOT NULL default '',
  `describes` varchar(255) NOT NULL default '',
  `url` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}vote_comment` (
  `id` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cid` mediumint(7) unsigned NOT NULL default '0',
  `vid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) unsigned NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  `icon` tinyint(3) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `aid` (`cid`),
  KEY `uid` (`uid`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}vote_config` (
  `cid` int(7) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL default '',
  `about` text NOT NULL,
  `type` tinyint(4) NOT NULL default '0',
  `limittime` int(10) NOT NULL default '0',
  `limitip` tinyint(1) NOT NULL default '0',
  `ip` text NOT NULL,
  `posttime` int(10) NOT NULL default '0',
  `user` text NOT NULL,
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `forbidguestvote` tinyint(1) NOT NULL default '0',
  `ifcomment` tinyint(1) NOT NULL default '0',
  `tplcode` text NOT NULL,
  `votetype` tinyint(2) NOT NULL default '0',
  `aid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`cid`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}area` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL default '0',
  `name` varchar(200) NOT NULL default '',
  `class` smallint(4) NOT NULL default '0',
  `sons` smallint(4) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `admin` varchar(100) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `listorder` tinyint(2) NOT NULL default '0',
  `passwd` varchar(32) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL default '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL default '',
  `maxperpage` tinyint(3) NOT NULL default '0',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` text NOT NULL,
  PRIMARY KEY  (`fid`),
  KEY `fup` (`fup`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}jfabout` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `content` text NOT NULL,
  `list` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}jfsort` (
  `fid` mediumint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  PRIMARY KEY  (`fid`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}moneycard` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `passwd` varchar(32) NOT NULL default '',
  `moneyrmb` int(7) NOT NULL default '0',
  `moneycard` int(7) NOT NULL default '0',
  `ifsell` tinyint(1) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(32) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}olpay` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `orderid` int(10) NOT NULL default '0',
  `numcode` varchar(32) NOT NULL default '',
  `money` varchar(15) NOT NULL default '0',
  `ifpay` tinyint(1) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(32) NOT NULL default '',
  `paytype` tinyint(3) NOT NULL default '0',
  `moduleid` mediumint(5) NOT NULL default '0',
  `formid` mediumint(5) NOT NULL default '0',
  `banktype` varchar(15) NOT NULL default '',
  `articleid` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `numcode` (`numcode`),
  KEY `paytype` (`paytype`),
  KEY `formid` (`formid`),
  KEY `articleid` (`articleid`),
  KEY `moduleid` (`moduleid`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}propagandize` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL default '0',
  `ip` bigint(11) NOT NULL default '0',
  `day` smallint(3) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `fromurl` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `day` (`day`,`uid`,`ip`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}report` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `aid` int(10) NOT NULL default '0',
  `type` varchar(50) NOT NULL default '',
  `uid` mediumint(7) NOT NULL default '0',
  `name` varchar(30) NOT NULL default '',
  `content` text NOT NULL,
  `posttime` int(10) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `yz` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}template` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL default '',
  `type` smallint(4) NOT NULL default '0',
  `filepath` varchar(100) NOT NULL default '',
  `descrip` text NOT NULL,
  `list` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}template_bak` (
  `bid` int(7) NOT NULL AUTO_INCREMENT,
  `id` int(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `code` text NOT NULL,
  PRIMARY KEY  (`bid`),
  KEY `id` (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}count_site` (
  `fid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `list` mediumint(5) NOT NULL default '0',
  `ifclose` tinyint(1) NOT NULL default '0',
  `count_num` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`fid`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}count_stat` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL default '0',
  `year` mediumint(4) NOT NULL default '0',
  `month` tinyint(2) NOT NULL default '0',
  `week` tinyint(2) NOT NULL default '0',
  `day` smallint(3) NOT NULL default '0',
  `hour` tinyint(2) NOT NULL default '0',
  `pv` mediumint(7) NOT NULL default '0',
  `uv` mediumint(7) NOT NULL default '0',
  `ip` mediumint(7) NOT NULL default '0',
  `windows_type` text NOT NULL,
  `ie_type` text NOT NULL,
  `windows_lang` text NOT NULL,
  `screen_size` text NOT NULL,
  `from_domain` text NOT NULL,
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}count_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL default '0',
  `time_day` tinyint(2) NOT NULL default '0',
  `username` varchar(32) NOT NULL default '',
  `lasttime` int(10) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `ip_address` varchar(50) NOT NULL default '',
  `fromurl` varchar(255) NOT NULL default '',
  `weburl` varchar(150) NOT NULL default '',
  `lasturl` varchar(150) NOT NULL default '',
  `windows_type` varchar(30) NOT NULL default '',
  `ie_type` varchar(30) NOT NULL default '',
  `windows_lang` varchar(30) NOT NULL default '',
  `screen_size` varchar(30) NOT NULL default '',
  `hits` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `username` (`username`),
  KEY `time_day` (`time_day`,`ip`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}exam_form` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL default '0',
  `fid` mediumint(6) NOT NULL default '0',
  `name` varchar(150) NOT NULL default '',
  `config` text NOT NULL,
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `ifshare` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}exam_form_element` (
  `element_id` int(7) NOT NULL AUTO_INCREMENT,
  `form_id` mediumint(7) NOT NULL default '0',
  `title_id` mediumint(7) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  PRIMARY KEY  (`element_id`),
  KEY `form_id` (`form_id`),
  KEY `title_id` (`title_id`),
  KEY `list` (`list`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}exam_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL default '0',
  `name` varchar(200) NOT NULL default '',
  `class` smallint(4) NOT NULL default '0',
  `sons` smallint(4) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `admin` varchar(100) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `listorder` tinyint(2) NOT NULL default '0',
  `passwd` varchar(32) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL default '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL default '',
  `maxperpage` tinyint(3) NOT NULL default '0',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` text NOT NULL,
  `list_html` varchar(255) NOT NULL default '',
  `bencandy_html` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`fid`),
  KEY `fup` (`fup`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}exam_student` (
  `student_id` int(7) NOT NULL AUTO_INCREMENT,
  `student_uid` mediumint(7) NOT NULL default '0',
  `student_name` varchar(30) NOT NULL default '',
  `form_id` mediumint(7) NOT NULL default '0',
  `total_fen` smallint(4) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`student_id`),
  KEY `form_id` (`form_id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}exam_student_title` (
  `st_id` int(7) NOT NULL AUTO_INCREMENT,
  `title_id` mediumint(7) NOT NULL default '0',
  `student_id` mediumint(7) NOT NULL default '0',
  `form_id` mediumint(7) NOT NULL default '0',
  `answer` text NOT NULL,
  `fen` smallint(3) NOT NULL default '0',
  `comment` text NOT NULL,
  PRIMARY KEY  (`st_id`)
) {$tbl_setting};";

$sql_tbl[] = "CREATE TABLE `{$tbl_prefix}exam_title` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `fid` smallint(4) NOT NULL default '0',
  `type` tinyint(2) NOT NULL default '0',
  `question` text NOT NULL,
  `config` text NOT NULL,
  `answer` text NOT NULL,
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `ifshare` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) {$tbl_setting};";

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('1','0','0','新闻中心','1','9','1','','0','0','','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";}','','0','','','1','','','','','0','a:11:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";N;s:12:\"ListShowType\";N;s:14:\"label_bencandy\";s:0:\"\";s:10:\"channelDir\";s:4:\"nnew\";s:13:\"channelDomain\";s:0:\"\";s:10:\"label_list\";s:1:\"0\";s:15:\"ListShowBigType\";s:13:\"bigsort_tpl/0\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('3','1','0','社会新闻','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:8:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:10:\"list_tpl/6\";s:15:\"ListShowBigType\";N;s:10:\"label_list\";s:0:\"\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('4','1','0','IT业界','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','31','','','1','3','','','','0','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:11:\"list_tpl/10\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('29','0','105','产品库','1','1','1','','0','0','','','','','','','0','','','1','','','','','0','a:1:{s:10:\"label_list\";s:0:\"\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('30','29','105','晾衣机','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:8:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:0:\"\";s:15:\"ListShowBigType\";N;s:14:\"label_bencandy\";s:0:\"\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('9','0','100','图片中心','1','1','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:7:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";s:15:\"ListShowBigType\";s:1:\"0\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('10','9','100','美女欣赏','2','0','0','','0','0','','','22','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','11','','1','8','','','','0','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('11','0','101','下载中心','1','3','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:8:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";s:15:\"ListShowBigType\";s:1:\"0\";s:10:\"label_list\";s:0:\"\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('12','11','101','建站软件','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:6:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('13','0','102','影视频道','1','1','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:6:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('14','13','102','网友视频','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:8:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";s:14:\"label_bencandy\";s:0:\"\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('15','0','103','商城频道','1','1','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:6:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('16','15','103','数码产品','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:6:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('17','0','104','FLASH频道','1','1','1','','0','0','','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";}','','0','','','1','','','','','0','a:8:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";N;s:12:\"ListShowType\";N;s:15:\"ListShowBigType\";s:1:\"0\";s:10:\"label_list\";s:0:\"\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('18','17','104','MTV类','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','3','','','','0','a:8:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";s:15:\"ListShowBigType\";N;s:10:\"label_list\";s:0:\"\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('26','11','101','装机软件','2','0','0','','0','0','','','','','','','0','','','1','','','','','0','','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('27','11','101','办公软件','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:1:\"0\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('31','1','0','新闻头条','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','1','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:10:\"list_tpl/3\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('32','1','0','推荐新闻','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','1','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:0:\"\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('33','1','0','图片新闻','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','1','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:0:\"\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('34','1','0','热点事件','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','1','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:10:\"list_tpl/2\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('35','1','0','奇闻趣事','2','0','0','','0','0','','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";}','','0','','','1','','','','','0','a:7:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";N;s:12:\"ListShowType\";N;s:15:\"ListShowBigType\";s:0:\"\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('38','1','0','一语惊人','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:10:\"list_tpl/4\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('36','0','0','社会专题','1','1','1','','0','0','','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";}','','0','','','1','','','','','0','a:7:{s:11:\"sonTitleRow\";s:0:\"\";s:12:\"sonTitleLeng\";s:0:\"\";s:9:\"cachetime\";s:0:\"\";s:12:\"sonListorder\";s:1:\"0\";s:14:\"listContentNum\";N;s:12:\"ListShowType\";N;s:15:\"ListShowBigType\";s:0:\"\";}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('37','36','0','广州性文化节','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:0:\"\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}sort` VALUES ('39','1','0','web新闻','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','1','','','','','0','a:7:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;s:14:\"listContentNum\";s:0:\"\";s:12:\"ListShowType\";s:10:\"list_tpl/8\";s:15:\"ListShowBigType\";N;}','','','','');
EOF;

$sql_tbl[] = <<<EOF
INSERT INTO `{$tbl_prefix}article_db` VALUES ('519');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('520');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('521');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('522');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('523');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('524');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('529');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('530');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('531');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('532');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('535');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('536');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('537');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('538');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('539');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('540');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('541');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('542');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('544');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('545');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('546');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('547');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('548');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('549');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('550');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('551');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('552');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('553');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('554');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('555');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('556');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('557');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('558');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('559');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('560');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('561');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('562');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('563');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('564');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('565');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('566');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('567');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('568');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('569');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('570');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('571');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('572');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('573');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('574');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('575');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('576');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('577');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('578');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('579');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('580');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('581');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('582');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('583');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('584');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('585');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('586');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('587');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('588');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('589');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('590');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('591');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('592');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('593');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('594');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('595');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('596');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('597');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('598');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('599');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('600');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('601');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('603');
INSERT INTO `{$tbl_prefix}article_db` VALUES ('604');
INSERT INTO `{$tbl_prefix}article` VALUES ('565','三大学生试水校园电子商务　引来央视关注','','39','0','web新闻','0','0','0','1','1','0','1240126531','1240126531','1','admin','','','','','0','0','','0','1','','0','0','0','大学生 校园 电子商务 引来 央视 关注','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240126535','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('566','新手站长必须知道的50个问题，让你顺利成为草根站长','','39','0','web新闻','0','0','0','19','3','0','1240126684','1240126684','1','admin','','','','','0','0','','0','1','','0','0','0','新手 站长 必须 知道 问题','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240138830','0','0','','1240211176','3','1240210732','0','0','搞笑|1~~|','');
INSERT INTO `{$tbl_prefix}article` VALUES ('567','电子商务成功运作四大要素，不要都去做马云','','39','0','web新闻','0','0','0','1','1','0','1240126775','1240126775','1','admin','','','','','0','0','','0','1','','0','0','0','电子商务 成功 运作 四大 要素','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240138868','0','0','','1240211200','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('568','晒工资网站盛行为跳槽作参考，你曾经跳过几次槽','','39','0','web新闻','0','0','0','0','1','0','1240126816','1240126816','1','admin','','','','','0','0','','0','1','','0','0','0','工资 网站 行为 跳槽 参考','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240138934','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('569','婚庆门户三大巨头瓜分天下 市场前景巨大','','39','0','web新闻','0','0','0','0','1','0','1240126852','1240126852','1','admin','','','','','0','0','','0','1','','0','0','0','婚庆 门户 三大 巨头 瓜分 天下 市场 前景 巨大','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('570','大四女生求职——做您的专职太太','','38','0','一语惊人','0','0','0','1','1','0','1240126932','1240126932','1','admin','','','','','0','0','','0','1','','0','0','0','大四 女生 求职 专职 太太','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240212806','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('571','上海车展被刷车模大曝光——长成这样也刷','','38','0','一语惊人','0','0','0','1','1','0','1240127012','1240127012','1','admin','','','','','0','0','','0','1','','0','0','0','上海 车展 车模 曝光 长成 这样','http://www.voc.com.cn/article/200904/200904171447303816.html','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240127104','0','0','','1240127078','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('572','女性应关注文胸产品质量状况','','38','0','一语惊人','0','0','0','0','1','0','1240127172','1240127172','1','admin','','','','','0','0','','0','1','','0','0','0','女性 关注 文胸 产品质量 状况','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('573','明长城测量最新数据发布 总长度为8851.8千米','','38','0','一语惊人','0','0','0','0','1','0','1240127229','1240127229','1','admin','','','','','0','0','','0','1','','0','0','0','长城 测量 最新 数据 发布 长度 8851.8千米','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('574','eBay重金购Gmarket 意在重返中国电子商务市场','','4','0','IT业界','0','0','0','0','1','0','1240127281','1240127281','1','admin','','','','','0','0','','0','1','','0','0','0','eBay 重金 Gmarket 意在 重返 中国 电子商务 市场','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('575','通信管理局：代办网站备案均违规 或将被断网','','4','0','IT业界','0','0','0','0','1','0','1240127308','1240127308','1','admin','','','','','0','0','','0','1','','0','0','0','通信 管理局 代办 网站 备案 违规','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('576','成都夫妇投资“高回报”网站 被骗64万元','','4','0','IT业界','0','0','0','3','1','3','1240127373','1240127373','1','admin','','','','','0','0','','0','1','','0','0','0','成都 夫妇 投资 回报 网站 被骗 64万元','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1245999264','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('577','移动OPhone手机5月将面市对抗iPhone','','4','0','IT业界','0','0','0','0','1','0','1240127449','1240127449','1','admin','','','','','0','0','','0','1','','0','0','0','移动 OPhone手机 5月 面市 对抗 iPhone','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('578','戴志康：和我一样创业的年轻人别浮躁','','39','0','web新闻','0','0','0','1','1','0','1240127959','1240127959','1','admin','','','','','0','0','article/39/1_20090419150430_a2XoC.jpg','1','1','','0','0','0','戴志康 一样 创业 年轻人 浮躁','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240128030','0','0','','1240127986','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('579','暴雪弃九城基于财务原因 网易每年多给9000万','','4','0','IT业界','0','0','0','4','1','1','1240128462','1240128462','1','admin','','','','','0','0','','0','1','','0','0','0','暴雪 基于 财务 原因 网易 每年 9000万','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240227601','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('580','一季度中国网民新增1620万人 总数已达3.16亿','','4','0','IT业界','0','0','0','4','1','0','1240128514','1240128514','1','admin','','','','','0','0','','0','1','','0','0','0','一季度 中国 网民 新增 1620万人 总数 3.16亿','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240212764','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('581','东芝遭遇公司历史上最大净亏损 约合35亿美元','','4','0','IT业界','0','0','0','0','1','0','1240128552','1240128552','1','admin','','','','','0','0','','0','1','','0','0','0','东芝 遭遇 公司 历史 最大 亏损 约合 35亿美元','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('582','韩国购物网站走出“门户阴影”','','4','0','IT业界','0','0','0','1','1','0','1240128654','1240128654','1','admin','','','','','0','0','','0','1','','0','0','0','韩国 购物网站 走出 门户 阴影','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240202171','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('583','产品经理的前世今生（职业规划）','','4','0','IT业界','0','0','0','3','1','0','1240128744','1240128744','1','admin','','','','','0','0','article/4/1_20090419160422_PjOh8_jpg.gif','1','1','','0','0','0','产品 经理 今生 职业规划','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240202583','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('584','殡仪馆弄错遗体致六姐弟哭错爹 赔偿1.2万元','','38','0','一语惊人','0','0','0','2','1','0','1240129177','1240129177','1','admin','','','','','0','0','','0','1','','0','0','0','殡仪馆 弄错 遗体 姐弟 赔偿 1.2万元','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240192148','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('585','中国首次发现距今两千多年前的战国晚期韩王陵','','35','0','奇闻趣事','0','0','0','1','1','0','1240129339','1240129339','1','admin','','','','','0','0','','0','1','','0','0','0','中国 发现 两千 年前 战国 晚期 王陵','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240210672','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('586','美国母亲欲提取亡儿精子续香火','','35','0','奇闻趣事','0','0','0','1','1','0','1240129394','1240129394','1','admin','','','','','0','0','','0','1','','0','0','0','美国 母亲 提取 精子 香火','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240212145','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('587','72岁老汉得子 自称一周保持5次性生活(图)','','35','0','奇闻趣事','0','0','0','1','1','0','1240129426','1240129426','1','admin','','','','','0','0','','0','1','','0','0','0','老汉 自称 保持 性生活','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240197853','2','1240210731','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('588','63岁老太一分钟做97个俯卧撑(图)','','35','0','奇闻趣事','0','0','0','1','1','0','1240129508','1240129508','1','admin','','','','','0','0','article/35/1_20090419160452_PnNPa_jpg.gif','1','1','','0','0','0','老太 一分钟','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240211466','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('589','13岁女孩感冒后变身“蛇娃” 蛇般蠕动爬行','','35','0','奇闻趣事','0','0','0','1','1','0','1240129535','1240129535','1','admin','','','','','0','0','','0','1','','0','0','0','女孩 感冒 后变身 蛇娃 蠕动 爬行','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240132419','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('590','哈尔滨工地发现国内最大“太岁” 重达130公斤','','35','0','奇闻趣事','0','0','0','0','1','0','1240129591','1240129591','1','admin','','','','','0','0','','0','1','','0','0','0','哈尔滨 工地 发现 国内 最大 太岁 重达 130 公斤','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('591','农夫中千万大奖后厄运缠身 投资破产孙子被枪杀','','35','0','奇闻趣事','0','0','0','1','1','0','1240129616','1240129616','1','admin','','','','','0','0','','0','1','','0','0','0','农夫 千万 大奖 厄运 缠身 投资 破产 孙子 枪杀','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240207563','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('592','高三女生跳楼自杀获救 称自己实在太累','','3','0','社会新闻','0','0','0','1','1','0','1240129664','1240129664','1','admin','','','','','0','0','','0','1','','0','0','0','高三 女生 跳楼 自杀 获救 自己 实在','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240144388','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('593','小伙彩票中奖后酗酒遇车祸被撞成植物人','','3','0','社会新闻','0','0','0','1','1','0','1240129686','1240129686','1','admin','','','','','0','0','','0','1','','0','0','0','小伙 彩票 中奖 酗酒 车祸 植物人','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240207613','0','0','0','0','搞笑|1~~|','');
INSERT INTO `{$tbl_prefix}article` VALUES ('594','“人鬼情未了”男星患癌拒抢救 希望有尊严地离去','','3','0','社会新闻','0','0','0','1','1','0','1240129723','1240129723','1','admin','','','','','0','0','','0','1','','0','0','0','未了 抢救 希望 尊严 离去','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240207624','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('595','讲义气酒风豪爽 结果喝酒喝得膀胱都“炸掉”了','','3','0','社会新闻','0','0','0','3','1','0','1240129752','1240129752','1','admin','','','','','0','0','','0','1','','0','0','0','义气 豪爽 结果 喝酒 膀胱 炸掉','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240144067','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('596','泌乳素失调 女子被43斤巨乳所累举步维艰','','3','0','社会新闻','0','0','0','6','1','0','1240129804','1240129804','1','admin','','','','','0','0','article/3/1_20090419160400_W3bnb_jpg.gif','1','1','','0','0','0','失调 女子 举步维艰','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240212497','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('597','八旬老翁强奸智障女邻居致其怀孕','','3','0','社会新闻','0','0','0','5','1','0','1240129887','1240129887','1','admin','','','','','0','0','','0','1','','0','0','0','老翁 强奸 智障 邻居 怀孕','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240897036','2','1240210727','0','0','搞笑|1~~|','');
INSERT INTO `{$tbl_prefix}article` VALUES ('598','调查称中国20岁至29岁的女性中27.3%做过人流','','3','0','社会新闻','0','0','0','3','1','0','1240129958','1240129958','1','admin','','','','','0','0','','0','1','','0','0','0','调查 中国 岁至 女性 27.3% 人流','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240896943','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('599','深圳万科员工泼油自焚 疑因不满离职金过低','','3','0','社会新闻','0','0','0','30','1','2','1240130011','1240130011','1','admin','','','','','0','0','','0','1','','0','0','0','深圳 万科 员工 自焚 不满 离职 金过低','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240899324','5','1241074117','0','0','搞笑|1~~找骂|1~~|','');
INSERT INTO `{$tbl_prefix}article` VALUES ('600','莫斯科女大学生醉卧街头 被流氓轮奸抢劫','','35','0','奇闻趣事','0','0','0','7','1','0','1240130313','1240130313','1','admin','','','','','0','0','','0','1','','0','0','0','莫斯科 大学生 街头 流氓 轮奸 抢劫','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240218214','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('535','迅雷5,迅雷网络版权所有','','26','101','装机软件','0','0','0','5','1','0','1239786953','1239786953','1','admin','','','','','0','0','','0','1','','0','0','0','迅雷 网络 版权所有','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239787179','0','0','','1240899172','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('519','SONY DSC-T300','','16','103','数码产品','0','0','0','6','1','0','1239775591','1239775591','1','admin','','','','','0','0','article/16/1_20090415140452_ZsBYE.jpg','1','1','','0','0','0','SONY DSC-T300','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239776993','0','0','','1240112568','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('520','佳能 PowerShot SX200 IS','','16','103','数码产品','0','0','0','6','1','0','1239775699','1239775699','1','admin','','','','','0','0','article/16/1_20090415140423_bYWny.jpg','1','1','','0','0','0','佳能 PowerShot SX200','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239778105','0','0','','1240209670','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('542','【超级经典】比尔·盖茨：在哈佛大学毕业典礼上的演讲【强烈推荐】有字幕','','14','102','网友视频','0','0','0','48','1','0','1239789196','1239789196','1','admin','','','','','0','0','article/14/1_20090420100452_yuW0C.jpg','1','1','','0','0','0','盖茨','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240287737','0','0','','1240292175','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('529','爱我就别伤害我MTV','','18','104','MTV类','0','0','0','5','1','0','1239785318','1239785318','1','admin','','','','','0','0','article/18/1_20090415160423_hJmPv.jpg','1','1','','0','0','0','伤害 MTV','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240195782','0','0','','1240195785','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('530','求拂MTV','','18','104','MTV类','0','0','0','10','1','0','1239785442','1239785442','1','admin','','','','','0','0','article/18/1_20090415160450_9OWGl.jpg','1','1','','0','0','0','求拂 MTV','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240195708','0','0','','1240213307','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('532','很漂亮的女人再来两张','','10','100','美女欣赏','0','0','0','3','1','0','1239786083','1239786083','1','admin','','','','','0','0','article/10/1_20090415170437_jCYhW.jpg','1','1','','0','0','0','漂亮 女人','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240209756','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('521','Nikon D90(单机)','','16','103','数码产品','0','0','0','3','1','1','1239775778','1239775778','1','admin','','','','','0','0','article/16/1_20090415140400_cbwQO.jpg','1','1','','0','0','0','Nikon D90 单机','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239778082','0','0','','1239781788','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('522','富士 S2000HD','','16','103','数码产品','0','0','0','1','1','0','1239776022','1239776022','1','admin','','','','','0','0','article/16/1_20090415140414_kv5WX.jpg','1','1','','0','0','0','富士 S2000HD','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239778042','0','0','','1240899117','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('537','QQ2009 Beta2 (兼容Windows Vista)','','26','101','装机软件','0','0','0','1','1','0','1239788244','1239788244','1','admin','','','','','0','0','','0','1','','0','0','0','QQ2009 Beta2 兼容 Windows Vista','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1239788251','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('538','万能文章系统','','12','101','建站软件','0','0','0','1','1','0','1239788484','1239788484','1','admin','','','','','0','0','','0','1','','0','0','0','万能 文章 系统','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1239788486','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('539','PHP168分类信息系统','','12','101','建站软件','0','0','0','2','1','0','1239788649','1239788649','1','admin','','','','','0','0','','0','1','','0','0','0','PHP168 分类 信息系统','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240209778','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('540','PHP168博客系统','','12','101','建站软件','0','0','0','1','1','0','1239788777','1239788777','1','admin','','','','','0','0','','0','1','','0','0','0','PHP168 博客 系统','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240192777','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('541','PHP168知道系统','','12','101','建站软件','0','0','0','3','1','0','1239788863','1239788863','1','admin','','','','','0','0','','0','1','','0','0','0','PHP168 知道 系统','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240111969','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('523','松下 FX550','','16','103','数码产品','0','0','0','2','1','0','1239776169','1239776169','1','admin','','','','','0','0','article/16/1_20090415150402_lAoUv.jpg','1','1','','0','0','0','松下 FX550','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239781923','0','0','','1239781926','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('524','奥林巴斯 SP-565UZ','','16','103','数码产品','0','0','0','3','1','0','1239776235','1239776235','1','admin','','','','','0','0','article/16/1_20090415140459_Kwcym.jpg','1','1','','0','0','0','奥林巴斯 SP-565UZ','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239777234','0','0','','1240208559','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('544','M11504 BXF电动晾衣机','','30','105','晾衣机','0','0','0','5','1','0','1239790835','1239790835','1','admin','','','','','0','0','http://www.lb138.net/pic/20081226133620-file-M11504BXF正.jpg','1','1','','0','0','0','M11504 BXF 电动','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239791099','0','0','','1239792534','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('531','人间极品美女2两张供大家测试浏览','','10','100','美女欣赏','0','0','0','2','1','0','1239785963','1239785963','1','admin','','','','','0','0','article/10/1_20090415160450_bEErL.jpg','1','1','','0','0','0','人间 极品美女 张供 大家 测试 浏览','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1239786004','0','0','','1239786007','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('536','WPS个人版永久免费','','27','101','办公软件','0','0','0','2','1','0','1239788019','1239788019','1','admin','','','','','0','0','','0','1','','0','0','0','WPS 个人版 永久 免费','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1239788111','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('545','创新版V6----PHP168 V6热点功能介绍','','31','0','新闻头条','0','0','0','11','1','0','1240049871','1240049871','1','admin','','','','','0','0','','0','1','','0','0','0','新版 V6----PHP168 热点 功能 介绍','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240209061','0','0','作为中国最主流的CMS平台之一，PHP168即将发布对官方及站长都具有重要意义V6版，V6定位为CMS领域的创造版，不仅在功能上具有大幅创新，同时在思路上让站长运营更加贴近主流互联网经济。','1241076365','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('546','PHP168与Phpwind强势整合 打造黄金组合','','32','0','推荐新闻','0','0','0','4','1','0','1240050071','1240050071','1','admin','','','','#5555AA','0','0','','0','1','','0','1','1240058149','PHP168 Phpwind 强势 整合 打造 黄金 组合','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240210097','4','1240995136','0','0','搞笑|1~~|','');
INSERT INTO `{$tbl_prefix}article` VALUES ('547','门户通一周年 回忆那些一起走过的日子','','32','0','推荐新闻','0','0','0','2','1','0','1240050179','1240050179','1','admin','','','','','0','0','','0','1','','0','1','1240058148','门户 通一 周年 回忆 那些 一起 走过 日子','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240146817','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('548','39健康网：专家解读你体检报告的秘密','','32','0','推荐新闻','0','0','0','2','1','0','1240050522','1240050522','1','admin','','','','','0','0','','0','1','','0','1','1240058146','健康网 专家解读 体检 报告 秘密','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240058225','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('549','每一个站长都可以做一个成功互联网领域的CEO！','','32','0','推荐新闻','0','0','0','1','1','0','1240050670','1240050670','1','admin','','','','#0033FF','0','0','','0','1','','0','1','1240058139','每一个站长都可以做一个成功互联网领域的CEO！','http://www.ceodh.com/','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1241075945','0','0','','1240142450','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('550','chinaz倾力打造IDC交易平台主机网正式上线','','32','0','推荐新闻','0','0','0','16','1','0','1240051050','1240051050','1','admin','','','','#B50707','1','0','article/32/1_20090418180444_f8mDG_jpg.gif','1','1','','0','1','1240058150','chinaz 倾力 打造 IDC 交易平台 主机 cnidc.com 正式 上线','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240058256','0','0','','1240899321','1','1240210632','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('551','九城总裁陈晓薇：网游巨头是否就此陨落？','','33','0','图片新闻','0','0','0','6','1','0','1240051810','1240051810','1','admin','','','','','0','0','article/33/1_20090418180408_4qNJ4.jpg','1','1','','0','1','1240056324','总裁 陈晓 网游 巨头 是否 就此 陨落','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240199085','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('552','李开复：谷歌中国市场份额两年增长一倍','','33','0','图片新闻','0','0','0','0','1','0','1240052014','1240052014','1','admin','','','','','0','0','article/33/1_20090418180438_vPiyT.jpg','1','1','','0','1','1240056321','李开复 谷歌 中国 市场 份额 两年 增长','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240052093','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('553','央视：PHPWIND南京站长大会---互联网精英为中国互联网发展献计策','','33','0','图片新闻','0','0','0','9','1','0','1240052409','1240052409','1','admin','','','','','0','0','article/33/1_20090418190453_qabKt.jpg','1','1','','0','1','1240056320','央视 PHPWIND 南京 站长 大会 --- 互联网 精英 中国 发展 计策','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240108730','0','0','','1240212610','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('554','百度百科：admin5图王','','33','0','图片新闻','0','0','0','6','1','0','1240057138','1240057138','1','admin','','','','','0','0','article/33/1_20090418200432_5ZUc2.jpg','1','1','','0','1','1240057560','百度百科 admin5 图王','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240212754','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('555','阿飞的财富之旅Chinaz.com','','33','0','图片新闻','0','0','0','6','1','0','1240057438','1240057438','1','admin','','','','','0','0','article/33/1_20090418200416_Fs7xV.gif','1','1','','0','1','1240057559','Chinaz.com 阿飞 财富 之旅','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240057762','0','0','','1240213566','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('556','熊晓鸽：怎样拿到他的钱？','','33','0','图片新闻','0','0','0','3','2','0','1240059129','1240059129','1','admin','','','','','0','0','article/33/1_20090418200441_Zm9oq.jpg','1','1','','0','1','1240059153','熊晓鸽 怎样 拿到','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240112623','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('557','门户通阿凯：从0到18万会员 我的一年论坛推广之路','','34','0','热点事件','0','0','0','1','1','0','1240060838','1240060838','1','admin','','','','','0','0','article/34/1_20090418210432_gxpxf.jpg','1','1','','0','1','1240060860','门户 通阿凯 18万 会员 一年 论坛 推广','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240142881','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('558','371数据中心吴高远：IDC最大问题是同质化','','34','0','热点事件','0','0','0','2','1','0','1240061182','1240061182','1','admin','','','','','0','0','article/34/1_20090420140423_3KPFH.jpg','1','1','','0','1','0','基金 执行主席 慈善 金融 危机 影响','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240209223','0','0','','1240209066','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('559','中国移动抢跑3G 上网本迎来“白送”时代','','34','0','热点事件','0','0','0','0','1','0','1240061760','1240061760','1','admin','','','','','0','0','article/34/1_20090418210444_jnTex.jpg','1','1','','0','1','1240061785','中国移动 上网 迎来 白送 ”时代','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','0','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('560','chinaz主机网商品快照功能 让您明明白白去购物','','34','0','热点事件','0','0','0','5','1','0','1240062925','1240062925','1','admin','','','','','0','0','article/34/1_20090420110424_5lRC8.jpg','1','1','','0','1','0','主机 商品 功能 明明白白 购物','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240196570','0','0','','1240211417','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('561','广州性文化节落幕 大学生坦然面对“性”话题','','37','0','广州性文化节','0','0','0','5','1','0','1240115586','1240115586','1','admin','','','','','0','0','article/37/1_20090419120400_f272L_jpg.gif','1','1','','0','0','0','广州 文化节 落幕 大学生 坦然 面对 话题','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240218284','1','1240210122','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('562','第五届性文化节向外来工免费派发50万安全套','','37','0','广州性文化节','0','0','0','1','1','0','1240115660','1240115660','1','admin','','','','','0','0','','0','1','','0','0','0','第五届 文化节 外来工 免费 派发 50万 安全套','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240210018','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('563','性文化节内衣秀模特穿得多 观众嘘声四起(组图)','','37','0','广州性文化节','0','0','0','6','1','0','1240115821','1240115821','1','admin','','','','','0','0','article/37/1_20090419120440_GcPMs_jpg.gif','1','1','','0','0','0','文化节 内衣秀 模特 观众 四起 组图','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240220777','1','1240210031','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('564','深圳内衣展女模特（图）','','37','0','广州性文化节','0','0','0','11','1','1','1240115997','1240115997','1','admin','','','','#0938F7','0','0','article/37/1_20090419120444_egkjF_jpg.gif','1','1','','0','0','0','深圳 内衣 模特','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240220795','1','1240210048','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('601','刘德华1996年演唱会','','14','102','网友视频','0','0','0','6','1','0','1240193993','1240193993','1','admin','','','','','0','0','article/14/1_20090420100416_nC0fV.jpg','1','1','','0','0','0','刘德华','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','1240195173','0','0','','1240222233','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('603','“软硬兼施”助力企业信息化---------速腾数据携手PHP168','','39','0','web新闻','0','0','0','2','1','0','1240201330','1240201330','1','admin','','','','','0','0','','0','1','','0','0','0','软硬兼施 助力 企业 信息化 --------- 数据 携手 PHP168','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1240208639','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}article` VALUES ('604','4月20日公测期间，PHPwind官方论坛为PHP168  V6第二公测现场','','39','0','web新闻','0','0','0','16','1','0','1240209505','1240209505','1','admin','','','','','0','0','','0','1','','0','0','0','4月 20日 期间 PHPwind 官方 论坛 PHP168 第二 现场','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','0','','0','0','','','','','','0','0','0','','1241074550','0','0','0','0','','');
INSERT INTO `{$tbl_prefix}reply` VALUES ('73','','0','0','0','0','0','1','','<p>&nbsp;&nbsp; 诸位站长、企业用户及关注PHP168的同仁朋友： <br />\r\n&nbsp;&nbsp; 欢迎使用PHP168整站系统,目前默认安装的系统,虽然标题不一样.但内容都是一样的.这仅仅是演示数据而已,请不要误会系统出了问题。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('517','','1239788649','539','12','1','1','1','','非常好用的分类信息系统','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('518','','1239788777','540','12','1','1','1','','很漂亮的博客程序','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('519','','1239788863','541','12','1','1','1','','功能非常强大.类似百度知道','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('522','','1239790835','544','30','1','1','1','','<div><div><span>产品性能特点</span> </div>\r\n<div>1、主机采用先进的超短型晾衣机专用交流管状电机，具有过电流、过电压、过热保护，延长晾衣机机芯使用寿命.使用寿命长达10年以上,超短型的电机也方便拆卸和更换<br />\r\n2、国内晾衣机行业中首家真正采用无线遥控控制，多种使用方式的无线遥控器使用方便,不受方向和障碍物限制，独立控制晾衣架的升,降,停、照明、消毒以及风干等功能,遥控性能及距离均领先于同类晾衣架.使用GP12V电池，省电耐用<br />\r\n3、晾衣机具有独特的过载、遇障碍物自动停止的保护功能，是目前市面上的晾衣架保护功能最齐全的晾衣机<br />\r\n4、采用集中型卷线器可使晾衣机在使用时钢丝绳整齐有序，碰障碍物自动停机不燎乱，大大提高产品的使用寿命<br />\r\n5、独特的抗风机构使衣杆前后左右摆动小，是目前抗风能力最好的晾衣机<br />\r\n6、采用市面上钢性好、强度最大的剪刀片和耐磨304#不锈钢的钢丝绳，让您使用无忧愁<br />\r\n7、多功能四杆配置的衣杆可自由伸缩、快速定位、被杆可灵活放置，您晾晒衣物和被子更方便<br />\r\n8、超薄紧凑的主机,流线时尚的外观设计，凸显您家阳台独特的尊贵<br />\r\n9、轻巧、环保的全铝合金外壳，永不生锈，让您的晾衣机永无脱漆和生锈的烦恼<br />\r\n10、精致的晾衣机照明灯取代阳台原有灯具，让您的阳台更添温馨高贵</div>\r\n<div>&nbsp;</div>\r\n<div>官方网址:<br />\r\n<a href=\"http://www.lb138.net/product_view.asp?id=4833\" target=\"_blank\">http://www.lb138.net/product_view.asp?id=4833</a></div>\r\n</div>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('547','','1240126739','566','39','1','0','1','','先了解一下同一台服务器上其他网站的运行情况。<br />\r\n&nbsp; &nbsp; （4）网站空间的价格。现在提供网站空间服务的服务商很多，质量和服务也千差万别，价格同样有很大差异，一般来说，著名的大型服务商的虚拟主机产品价格要贵一些，而一些小型公司可能价格比较便宜，可根据网站的重要程度来决定选择哪种层次的虚拟主机提供商。选有《中华人民共和国增值电信业务经营许可证》的服务商更放心.<br />\r\n<br />\r\n9 什么叫虚拟主机 <br />\r\n<br />\r\n在网络服务器上开辟出一定配额的磁盘空间供用户放置网站、文件等内容，最基本的虚拟主机功能包含web访问和文件传输功能。&nbsp;&nbsp;<br />\r\n<br />\r\n所谓虚拟主机，也叫“网站空间”就是把一台运行在互联网上的服务器划分成多个“虚拟”的服务器，每一个虚拟主机都具有独立的域名和完整的Internet服务器（支持WWW、FTP、E-mail等）功能。一台服务器上的不同虚拟主机是各自独立的，并由用户自行管理。但一台服务器主机只能够支持一定数量的虚拟主机，当超过这个数量时，用户将会感到性能急剧下降。<br />\r\n<br />\r\n虚拟主机技术是互联网服务器采用的节省服务器硬体成本的技术，虚拟主机技术主要应用于HTTP服务，将一台服务器的某项或者全部服务内容逻辑划分为多个服务单位，对外表现为多个服务器，从而充分利用服务器硬体资源。如果划分是系统级别的，则称为虚拟服务器。<br />\r\n<br />\r\n<br />\r\n10．什么叫HTML语言<br />\r\n<br />\r\nHTML（HyperTextMark-upLanguage）即超文本标记语言，是WWW的描述语言。设计HTML语言的目的是为了能把存放在一台电脑中的文本或图形与另一台电脑中的文本或图形方便地联系在一起，形成有机的整体，人们不用考虑具体信息是在当前电脑上还是在网络的其它电脑上。我们只需使用鼠标在某一文档中点取一个图标，Internet就会马上转到与此图标相关的内容上去，而这些信息可能存放在网络的另一台电脑中。 HTML文本是由HTML命令组成的描述性文本，HTML命令可以说明文字、图形、动画、声音、表格、链接等。HTML的结构包括头部（Head）、主体（Body）两大部分，其中头部描述浏览器所需的信息，而主体则包含所要说明的具体内容。具体介绍:<a href=\"http://tool.admin5.com/shouce/html/\" target=\"_blank\"><font color=\"#0000ff\">http://tool.admin5.com/shouce/html/</font></a><br />\r\n<br />\r\n11 什么叫ASP<br />\r\n<br />\r\nASP是Active Server Page的缩写，意为“活动服务器网页”。ASP是微软公司开发的代替CGI脚本程序的一种应用,它可以与数据库和其它程序进行交互，是一种简单、方便的编程工具。ASP的网页文件的格式是.asp，现在常用于各种动态网站中。 ASP是一种服务器端脚本编写环境，可以用来创建和运行动态网页或Web应用程序。ASP网页可以包含HTML标记、普通文本、脚本命令以及COM组件等。利用ASP可以向网页中添加交互式内容（如在线表单），也可以创建使用HTML网页作为用户界面的web应用程序。 与HTML相比，ASP网页具有以下特点： <br />\r\n<br />\r\n（1）利用ASP可以实现突破静态网页的一些功能限制，实现动态网页技术； <br />\r\n<br />\r\n（2）ASP文件是包含在HTML代码所组成的文件中的，易于修改和测试； <br />\r\n<br />\r\n（3）服务器上的ASP解释程序会在服务器端制定ASP程序，并将结果以HTML格式传送到客户端浏览器上，因此使用各种浏览器都可以正常浏览ASP所产生的网页； <br />\r\n<br />\r\n（4）ASP提供了一些内置对象，使用这些对象可以使服务器端脚本功能更强。例如可以从web浏览器中获取用户通过HTML表单提交的信息，并在脚本中对这些信息进行处理，然后向web浏览器发送信息； <br />\r\n<br />\r\n（5）ASP可以使用服务器端ActiveX组件来执行各种各样的任务，例如存取数据库、发现哦那个Email或访问文件系统等。 <br />\r\n<br />\r\n（6）由于服务器是将ASP程序执行的结果以HTML格式传回客户端浏览器，因此使用者不会看到ASP所编写的原始程序代码，可防止ASP程序代码被窃取。<br />\r\n<br />\r\n12 什么叫php<br />\r\n<br />\r\nPHP是一个基于服务端来创建动态网站的脚本语言，您可以用PHP和HTML生成网站主页。当一个访问者打开主页时，服务端便执行PHP的命令并将执行结果发送至访问者的浏览器中，这类似于ASP和CoildFusion，然而PHP和他们不同之处在于PHP开放源码和跨越平台，PHP可以运行在WINDOWS NT和多种版本的UNIX上。它不需要任何预先处理而快速反馈结果，它也不需要mod_perl的调整来使您的服务器的内存映象减小。PHP消耗的资源较少，当PHP作为Apache Web服务器一部分时，运行代码不需要调用外部二进制程序，服务器不需要承担任何额外的负担。 <br />\r\n<br />\r\n除了能够操作您的页面外，PHP还能发送HIIP的标题。您可以设置cookie,管理数字签名和重定向用户，而且它提供了极好的连通性</p>\r\n</td></tr></tbody></table>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('546','','1240126684','566','39','1','0','1','','到其它数据库（还有DBC），集成各种外部库来做用PDF文档解析XML的任何事情。 <br />\r\n<br />\r\n有了PHP就无需特殊的开发环境和IDE，您可以以&lt;？php 作为程序块的开始，可以以 ？&gt;作为PHP代码块的结束，当然您也可以用带有 &lt;% %&gt;的标记甚至用&lt;script LANGUAGE=“php”&gt;&lt;/script&gt;的ASP的格式来配置 PHP，PHP会在那些标志间处理所有的事情。 <br />\r\n<br />\r\nPHP的编程语言类似与C和Perl。在使用它们之前您没必要声明任何变量，而且建立数组和Hash是很简单的事情。PHP还有一些面向对象的特征，可以为组织和打包您的代码提供很好的帮助。 <br />\r\n<br />\r\n虽然PHP在Apache里能快速运行，但是在PHP网站里有一些用来对Microsoft IIS 和 Netscape Enterprise Serer无缝结合的指令集。如果您还没有copy PHP的话，您可以在 http: //www.php.com 下载，您也可以使用操作手册，它里边包括了所有的关于PHP的功能和特性的说明<br />\r\n<br />\r\n13．什么叫pr值 <br />\r\n<br />\r\n什么叫pr： PR值全称为PageRank，PageRank(网页级别)是Google用于评测一个网页“重要性”的一种方法。在揉合了诸如Title标识和Keywords标识等所有其它因素之后，Google通过PageRank来调整结果，使那些更具“重要性”的网页在搜索结果中另网站排名获得提升，从而提高搜索结果的相关性和质量。 <br />\r\nPR值最高为10，一般PR值达到4，就算是一个不错的网站了。 <br />\r\nPR值，即PageRank，网页的级别技术。取自Google的创始人Larry Page，它是Google排名运算法则（排名公式）的一部分，用来标识网页的等级/重要性。级别从1到10级，10级为满分。PR值越高说明该网页越受欢迎（越重要）。例如：一个PR值为1的网站表明这个网站不太具有流行度，而PR值为7到10则表明这个网站非常受欢迎（或者说极其重要）。 <br />\r\n我们可以这样说：一个网站的外部链接数越多其PR值就越高；外部链接站点的级别越高（假如Macromedia的网站链到你的网站上），网站的PR值就越高。例如：如果ABC.COM网站上有一个XYZ.COM网站的链接，那为ABC.COM网站必须提供一些较好的网站内容，从而Google会把来自XYZ.COM的链接作为它对ABC.COM网站投的一票。你可以下载和安装Google工具条来检查你的网站级别（PR值）。 提示：1. <a href=\"http://www.abc.com/\" target=\"_blank\"><font color=\"#0000ff\">www.abc.com</font></a> 与abc.com 的pr值是不同性质的。 [url=http://www.abc.com与<a href=\"http://www.abc.com/a.htm\" target=\"_blank\"><font color=\"#0000ff\">www.abc.com/a.htm</font></a>]<font color=\"#0000ff\">www.abc.com与</font><a href=\"http://www.abc.com/a.htm\" target=\"_blank\"><font color=\"#0000ff\">www.abc.com/a.htm</font></a>[/url] 也是不同的 2. 并不是pr高，页面的搜索效果就好， pr高，他给别人链接，别的页面搜索排名靠前。 所以很多本身pr不高，但是有很多外链pr高的链接，搜索关键词排名靠前。 3.pr 一般是3个月更新一次，多与有价值 高pr的网站做链接，减少链接出去的低质网站，和被惩罚网站，有利于pr的提高。 <br />\r\n<br />\r\n14 如何查询一个网站的PR值&nbsp;&nbsp;<br />\r\n<br />\r\n很简单，你可以到google的官方网站去安装一个 google toolbar ，然后你在访问网页的时候发现浏览器的菜单栏部分会有一个pr值显示。当然，现在也有很多网站提供在线查询pr值的功能,比如 <a href=\"http://tool.admin5.com/\" target=\"_blank\"><font color=\"#0000ff\">http://tool.admin5.com/</font></a><br />\r\n<br />\r\n15 什么是FTP<br />\r\n<br />\r\nFTP(File Transfer Protocol，文件传输协议是Internet上使用非常广泛的一种通讯协议，它是为Internet用户进行文件传输(包括文件的上传和下载)而制定的。要想实现FTP文件传输，必须在相连的两端都装有支持FTP协议的软件，装在您的电脑上的叫FTP客户端软件，装在另一端服务器上的叫做FTP服务器端软件。 <br />\r\n<br />\r\n客户端FTP软件使用方法很简单，启动后首先要与远程主机建立连接，然后向远程主机发出传输命令，远程主机在收到命令后就给予响应，并执行正确的命令。目前Windows系统中最常用的FTP软件是CUTEFTP。FTP有一个根本的限制，那就是，如果用户在某个主机上没有注册获得授权，即没有用户名和口令，就不能与该主机进行文件传输。但匿名FTP服务器除外，它允许用户以anonymous作为用户名，以Email地址作密码来登录，从而使用户获得免费资源。<br />\r\n<br />\r\n<br />\r\n16 怎么上传自己的内容到空间 <br />\r\n<br />\r\n利用FTP工具，即文件传输工具，比如cuteftp，将你的网页上传到WEB服务器指定的目录里。 <br />\r\ncuteftp具体上传具体步骤： <br />\r\nCuteFTP的窗口有四个部分，上面是连接情况，左边是本地文件，右边是服务器上的文件，下面是上传，下载的情况。 <br />\r\n首先在CuteFTP的菜单“文件”——站点管理器——将你刚才申请的站点标签，FTP主机地址（如<a href=\"ftp://yue.hhh.net/\" target=\"_blank\"><font color=\"#0000ff\">ftp://YUE.HHH.NET</font></a>），用户名，密码填好连接就可以了！过一会就会显示连接成功。然后选择本地的你做好的网页所在的文件夹就可以开始上传了！ <br />\r\n<br />\r\n<br />\r\n<br />\r\n17 什么叫CMS<br />\r\n<br />\r\nCMS是Content Management System的缩写，意为“内容管理系统”。 <br />\r\nCMS具有许多基于模板的优秀设计，可以加快网站开发的速度和减少开发的成本。 <br />\r\nCMS的功能并不只限于文本处理，它也可以处理图片、Flash动画、声像流、图像甚至电子邮件档案。 <br />\r\nCMS其实是一个很广泛的称呼，从一般的博客程序，新闻发布程序，到综合性的网站管理程序都可以被称为内容管理系统。<br />\r\n<br />\r\n18 什么叫IIs<br />\r\n<br />\r\n&nbsp;&nbsp;Internet信息服务（Internet Information Services，以下简称IIS），是由微软公司提供的基于运行Microsoft Windows的因特网基本服务。最初是Windows NT版本的可选包，随后捆绑在Windows 2000、Windows XP Professional和Windows Server 2003一起发行，值得注意的是，在普遍使用的Windows XP home版本上并没有IIS。<br />\r\n<br />\r\n19 什么叫服务器<br />\r\n<br />\r\n服务器就是一台计算机。他和其它计算机不同的就是他的主要作用是用来资源共享的。比如说ftp文件上传、下载，一台计算机架设成为Ftp服务器之后，其它的计算机就可以通过IP地址来进行访问了，可以上传、下载东西。WEB服务器也是一样，只是他用来放网站的，用户可以通过IP地址访问。<br />\r\n<br />\r\n20 什么叫SEO<br />\r\n<br />\r\nUse some technics to make your website in the top places in Search Engine when somebody is using Search Engine to find something（英文描述），一般可简称为搜索引擎优化。与之相关的搜索知识还有Search Engine Marketing(搜索引擎营销）、Search Engine Positioning（搜索引擎定位）、Search Engine Ranking（搜索引擎排名）。<br />\r\n<br />\r\nSEO的主要工作是通过了解各类搜索引擎如何抓取互联网页面、如何进行索引以及如何确定其对某一特定关键词的搜索结果排名等技术，来对网页进行相关的优化，使其提高搜索引擎排名，从而提高网站访问量，最终提升网站的销售能力或宣传能力的技术。 <br />\r\n<br />\r\n搜索引擎优化是这么一种技术，即是遵循搜索引擎科学而全面的理论机制，对网站结构、网页文字语言和站点间的互动外交策略等进行合理规划部署来发掘网站的最大潜力而使其在搜索引擎中具有较强的自然排名竞争优势，从而对促进企业在线销售和强化网络品牌起到作用。<br />\r\n<br />\r\n简单的说，SEO是一种让网站在百度，谷歌，雅虎等搜索引擎获得较好的排名从而赢得更多潜在客户一种的网络营销方式，也是SEM(搜索引擎营销）的一种方式。<br />\r\n<br />\r\n21 什么叫B2B<br />\r\n<br />\r\nB2B是（business to bussiness）的缩写，是企业与企业之间通过互联网进行产品、服务及信息的交换. B2B是企业与企业之间通过互联网进行产品、服务及信息的交换。 B2B是企业实现电子商务、推动企业业务发展的一个最佳切入点，企业获得最直接的利益就是降低成本和提高效率，从长远来看也能带来巨额的回报。跟以前相比，企业总体战略中越来越重视与信息技术的结合。公司的CEO们认识到，必须有所作为，才能保持企业的竞争能力。信息技术对企业正日益变得生死攸关，新的信息技术投资能真正增强企业实力，而不仅限于改善企业的日常运作<br />\r\n<br />\r\n22 什么叫C2C<br />\r\n<br />\r\nC2C就是consumer to consumer，也有叫Client to Client，也就是用户到用户的电子商务，类似淘宝这样的由用户供货，卖给用户并从中收取手续费的电子商务网站就是C2C网站.<br />\r\n<br />\r\n23 什么叫web2.0<br />\r\n<br />\r\nWeb2.0，是相对Web1.0（2003年以前的互联网模式）的新的一类互联网应用的统称，是一次从核心内容到外部应用的革命。由Web1.0单纯通过网络浏览器浏览html网页模式向内容更丰富、联系性更强、工具性更强的Web2.0互联网模式的发展已经成为互联网新的发展趋势。 <br />\r\nWeb1.0到Web2.0的转变，具体的说，从模式上是单纯的“读”向“写”、“共同建设”发展；由被动地接收互联网信息向主动创造互联网信息迈进！从基本构成单元上，是由“网页”向“发表/记录的信息”发展；从工具上，是由互联网浏览器向各类浏览.<br />\r\n<br />\r\n24 什么叫div+css<br />\r\n<br />\r\ndiv是层 css是样式 可以说这两个是制作网页的核心 ,比如说某些网页上的漂浮广告就是用div层制作的,就是符合w3c标准的网页布局方法，div+css是这个标准提倡的一种方法。真名是：xhtml　<br />\r\n<br />\r\n<br />\r\n25 什么叫数据库<br />\r\n<br />\r\n数据库就是\"按照数据结构来组织、存储和管理数据的仓库\",在经济管理的日常工作中，常常需要把某些相关的数据放进这样\"仓库\"，并根据管理的需要进行相应的处理。例如，一些单位常常要把职工的基本情况(比如姓名、性别、年龄、工资、基本状况等)存放在表中，这张表就可以看成是一个数据库，通过它就可以根据需要随时查询某职工的基本情况，也可以查询某个年龄段内的职工人数等等。这些工作如果都能在计算机上自动进行，那我们的人事管理就可以达到极高的水平。此外，在财务管理、仓库管理、生产管理等管理事业中也需要建立众多的这种\"数据库\"，使其可以利用计算机实现财务、仓库、生产的自动化管理。 <br />\r\n说白了，数据库就像是按行列顺序排列的很科学的数据集合。可以随时按某种顺序（或行或列）进行添加，想用时随时可以按任意一种顺序读取数据，十分方便。<br />\r\n<br />\r\n26 MYSQL数据库怎么备份恢复<br />\r\n<br />\r\n如果数据库名字是abcd <br />\r\n服务器是linux系列：数据库的路径是/var/lib/mysql/abcd <br />\r\n如果是windows系列：数据库路径是：...\\mysql\\data\\abcd <br />\r\n<br />\r\n有两张方法备份，一种是直接备份文件夹，一种是备份数据。 <br />\r\n直接备份文件夹比较方便和安全（需要先把数据库服务停了）。 <br />\r\n另一种直接用mysqldump备份，需要把数据库应用方面停掉.<br />\r\n<br />\r\n27 mssql数据库如何远程复制<br />\r\n<br />\r\n首先SQL Server数据库备份有两种方式，一种是使用BACKUP DATABASE将数据库文件备份出去，另外一种就是直接拷贝数据库文件mdf和日志文件ldf的方式。我建议使用第二种方式的备份与恢复。</p>\r\n<p>&nbsp;</p>\r\n</td></tr></tbody></table>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('544','','1240126531','565','39','1','1','1','','<p>福州现有30万在校大学生，但是到目前为止还没有比较成熟、专门针对福州大学生的电子商务网站。3个原本不认识的福建农林大学的学生，为了开创校园电子商务网站品牌走到了一起。他们的创业还引起了央视的关注。</p>\r\n<p>　　还没赢利 准备打持久战</p>\r\n<p>　　这3名大学生创办的66校园网(<a href=\"http://www.66xiaoyuan.com\">www.66xiaoyuan.com</a>)内容包括校园商城、社区服务、校园专区、就业创业、文化传媒等各方面，销售的物品包括吃穿住用行各个方面。近日记者来到福建农林大学东区一栋宿舍楼底层仓库，里面摆放着几台电脑和一些简易家具。这里是66校园网创业团队的办公地点。</p>\r\n<p>　　“条件很简陋，不好意思。”诸葛宇衍说。他是福建农林大学通信工程专业2008届毕业生，负责网站的整体营运。</p>\r\n<p>　　他告诉记者，2008年3月，66校园网创业团队启动。12月，网站开始运营。除了他，农林大学化工专业2009届毕业生陈群辉负责外联和商品采购，植物保护专业2008届毕业生苏建汉负责网站的技术维护。</p>\r\n<p>　　“福州现有30万在校大学生，这是一个很大的市场。但是到目前为止还没有一个比较成熟、专门针对福州大学生的电子商务网站。”陈群辉说，虽然开业至今，66网站还没有实现赢利，但是他们看准了这块市场，将坚持做下去。</p>\r\n<p>　　他们把实现赢利的希望寄托在今年下半年。“要有一个让顾客接受的过程，首先要让他们认识这个网站，觉得这个网站好用。”诸葛宇衍说，现在他们正采取各种措施在福州各所高校推广网站，树立品牌。</p>\r\n<p>　　连锁“忽悠” 组成创业团队</p>\r\n<p>　　在创业之前，他们并不认识，是共同的志向让他们走到了一起。2007年8月，诸葛宇衍拿着表哥给的1万多元钱，代理了某培训机构在榕城各高校的宣传和推广业务。其间，他负责在福建农林大学举办了一次免费试讲。最后交钱参加培训的只有2人，其中就包括陈群辉。</p>\r\n<p>　　“我是被他‘忽悠’进来的。”陈群辉笑着说，之所以参加培训，是因为他也有创业理想。“认识宇衍后，我觉得他是一个会做大事的人。”</p>\r\n<p>　　2007年年底，陈群辉读了马云的《阿里巴巴》。之后连续3个晚上，他都睡不着觉。“我在想，什么时候自己能像马云一样，在电子商务领域做出点名堂来。”</p>\r\n<p>　　通过校园论坛，陈群辉找到了论坛版主苏建汉，商谈合作事宜，没想到一拍即合。三人就这样走到了一起。</p>\r\n<p>　　“真正开始做的时候，我们遇到很多问题，找不到可以借鉴的经验，只能靠自己摸索。”陈群辉说。相对今年夏天才毕业的陈群辉，已经毕业大半年的诸葛宇衍和苏建汉压力显得大多了，但是“每当有人叫我们送货上门时，又有了希望”。</p>\r\n<p>　　“只要还有一个顾客，我们也要服务好。”2月底，他们的创业吸引了中央电视台的关注。陈群辉在接受央视记者采访时表示，只要他还在，“就会把这个网站坚持做下去”。</p>\r\n<p><br />\r\n文章来自: 站长网(<a href=\"http://www.admin5.com\">www.admin5.com</a>) 详文参考：<a href=\"http://www.admin5.com/article/20090417/143322.shtml\">http://www.admin5.com/article/20090417/143322.shtml</a></p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('507','','1239785318','529','18','1','1','1','','<u><em>爱我就别伤害我MTV</em></u>','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('508','','1239785442','530','18','1','1','1','','<em>求拂MTV</em>','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('497','','1239775591','519','16','1','1','1','','<ul><li><font color=\"#717171\">相机类型：</font><a target=\"_blank\"><font color=\"#000000\">卡片数码相机</font></a> </li><li><font color=\"#717171\">有效像素：</font><a target=\"_blank\"><font color=\"#000000\">1010万像素</font></a> </li><li><font color=\"#717171\">光学变焦倍数：</font><a target=\"_blank\"><font color=\"#000000\">5倍光学变焦</font></a> </li><li><font color=\"#717171\">液晶屏尺寸：</font><a target=\"_blank\"><font color=\"#000000\">3.5英寸</font></a> </li><li><font color=\"#717171\">防抖功能：</font><a target=\"_blank\"><font color=\"#000000\">光学防抖</font></a> </li><li><font color=\"#717171\">存储介质：</font><a target=\"_blank\"><font color=\"#000000\">MS Duo记忆棒</font></a>,<a target=\"_blank\"><font color=\"#000000\">MS Pro Duo记忆棒</font></a>,<a target=\"_blank\"><font color=\"#000000\">MS Pro-HG Duo记忆棒</font></a> </li><li><font color=\"#717171\">焦距(相当于35mm)：</font>33-165mm </li><li><font color=\"#717171\">电池：</font><a target=\"_blank\"><font color=\"#000000\">专用可充电锂电池</font></a>,NP-BD1(标配)/智慧型锂</li></ul>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('498','','1239775699','520','16','1','1','1','','<ul><li><font color=\"#717171\">相机类型：</font><a target=\"_blank\"><font color=\"#000000\">单反数码相机</font></a> </li><li><font color=\"#717171\">有效像素：</font><a target=\"_blank\"><font color=\"#000000\">1510万像素</font></a> </li><li><font color=\"#717171\">光学变焦倍数：</font><a target=\"_blank\"><font color=\"#000000\">视镜头而定</font></a> </li><li><font color=\"#717171\">焦距(相当于35mm)：</font>视镜头而定 </li><li><font color=\"#717171\">液晶屏尺寸：</font><a target=\"_blank\"><font color=\"#000000\">3英寸</font></a> </li><li><font color=\"#717171\">防抖功能：</font><a target=\"_blank\"><font color=\"#000000\">无拍照防抖功能</font></a> </li><li><font color=\"#717171\">存储介质：</font><a target=\"_blank\"><font color=\"#000000\">SD卡</font></a>,<a target=\"_blank\"><font color=\"#000000\">SDHC卡</font></a> </li><li><font color=\"#717171\">电池：</font><a target=\"_blank\"><font color=\"#000000\">专用可充电锂电池</font></a>,LP-E5,1080毫安 </li></ul>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('499','','1239775778','521','16','1','1','1','','<ul><li><font color=\"#717171\">相机类型：</font><a target=\"_blank\"><font color=\"#000000\">单反数码相机</font></a> </li><li><font color=\"#717171\">有效像素：</font><a target=\"_blank\"><font color=\"#000000\">1230万像素</font></a> </li><li><font color=\"#717171\">光学变焦倍数：</font><a target=\"_blank\"><font color=\"#000000\">视镜头而定</font></a> </li><li><font color=\"#717171\">焦距(相当于35mm)：</font>视镜头而定 </li><li><font color=\"#717171\">液晶屏尺寸：</font><a target=\"_blank\"><font color=\"#000000\">3.0英寸</font></a> </li><li><font color=\"#717171\">存储介质：</font><a target=\"_blank\"><font color=\"#000000\">SD卡</font></a>,<a target=\"_blank\"><font color=\"#000000\">SDHC卡</font></a>,存储格式:压缩的NEF(RAW):12-bit压缩,JPEG-Baseline标准,压缩率:FINE(1/4),NORMAL(1/8),BASIC(1/16) </li><li><font color=\"#717171\">电池：</font><a target=\"_blank\"><font color=\"#000000\">专用可充电锂电池</font></a>,EN-EL3e </li></ul>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('500','','1239776022','522','16','1','1','1','','<li><font color=\"#717171\">相机类型：</font><font color=\"#000000\">长焦数码相机</font> </li><li><font color=\"#717171\">有效像素：</font><font color=\"#000000\">1000万像素</font> </li><li><font color=\"#717171\">光学变焦倍数：</font><font color=\"#000000\">15倍光学变焦</font> </li><li><font color=\"#717171\">焦距(相当于35mm)：</font>27.6-414mm </li><li><font color=\"#717171\">液晶屏尺寸：</font><font color=\"#000000\">2.7英寸</font> </li><li><font color=\"#717171\">防抖功能：</font><font color=\"#000000\">光学防抖</font> </li><li><font color=\"#717171\">存储介质：</font><font color=\"#000000\">SD卡</font>,<font color=\"#000000\">SDHC卡</font> </li><li><font color=\"#717171\">电池：</font><font color=\"#000000\">4节5号AA电池</font> </li>','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('501','','1239776169','523','16','1','1','1','','<font color=\"#717171\"><ul><li>相机类型：消费数码相机 </li><li>有效像素：1210万像素 </li><li>光学变焦倍数：5倍光学变焦 </li><li>液晶屏尺寸：3英寸 </li><li>防抖功能：光学防抖,MEGA O.I.S </li><li>存储介质：SD卡,SDHC卡 </li><li>焦距(相当于35mm)：25-125mm </li></ul>\r\n</font>','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('513','','1239786953','535','26','1','1','1','','非常好用的下载工具','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('514','','1239788019','536','27','1','1','1','','版本：6.3.0.1705 (2008-09-27)<br />\r\nWindows 2000/XP/Vista(含32位、64位) ','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('515','','1239788244','537','26','1','1','1','','<p style=\"color:#333333;\">全新推出的用户操作界面，为您带来更简洁雅致的视觉体验。 </p>\r\n<p style=\"color:#333333;\">推荐功能：“好友印象”说出心中的Ta、“游戏人生”展示玩家成长经历</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('502','','1239776235','524','16','1','1','1','','<ul><li><font color=\"#717171\">相机类型：</font><a target=\"_blank\"><font color=\"#000000\">卡片数码相机</font></a> </li><li><font color=\"#717171\">有效像素：</font><a target=\"_blank\"><font color=\"#000000\">1010万像素</font></a> </li><li><font color=\"#717171\">光学变焦倍数：</font><a target=\"_blank\"><font color=\"#000000\">5倍光学变焦</font></a> </li><li><font color=\"#717171\">液晶屏尺寸：</font><a target=\"_blank\"><font color=\"#000000\">3.5英寸</font></a> </li><li><font color=\"#717171\">防抖功能：</font><a target=\"_blank\"><font color=\"#000000\">光学防抖</font></a> </li><li><font color=\"#717171\">存储介质：</font><a target=\"_blank\"><font color=\"#000000\">MS Duo记忆棒</font></a>,<a target=\"_blank\"><font color=\"#000000\">MS Pro Duo记忆棒</font></a>,<a target=\"_blank\"><font color=\"#000000\">MS Pro-HG Duo记忆棒</font></a> </li><li><font color=\"#717171\">焦距(相当于35mm)：</font>33-165mm </li><li><font color=\"#717171\">电池：</font><a target=\"_blank\"><font color=\"#000000\">专用可充电锂电池</font></a>,NP-BD1(标配)/智慧型锂</li></ul>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('520','','1239789196','542','14','1','1','1','','&nbsp;&nbsp; 比尔·盖茨于2008年6月27日退休了，他在<font color=\"#3366cc\">微软</font>同事的心目中是一个什么形象呢？这个当属与他一起共同执掌了微软28年之久的<font color=\"#3366cc\">CEO</font>鲍尔默最有话语权了。“他是一个比较内向的小伙子，不太爱说话，但身上充满了活力，尤其是一到晚上就活跃起来。当时的情况是，经常在我早上醒来时，他才准备睡觉。”鲍尔默在最近接受《<font color=\"#3366cc\">华尔街日报</font>》采访时，如此形容比尔·盖茨。鲍尔默说的对，也许只有活力才是成功的最关键因素，这是比尔·盖茨留给大家最好的礼物！','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('509','','1239785963','531','10','1','1','1','','<p>sfdsfd</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('510','','1239786083','532','10','1','1','1','','ff','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('516','','1239788484','538','12','1','1','1','','相当于万能模型!','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('545','','1240126684','566','39','1','1','1','','新手站长必须知道的50个问题&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;大家觉的好的话一定要顶啊 <table cellspacing=\"0\"><tbody><tr><td><p>1 建立网站的步骤是什么<br />\r\n<br />\r\n1、申请一个空间空间 <br />\r\n2、申请自己的域名<br />\r\n3、制作自己的网站 <br />\r\n4 上传自己的内容到空间 <br />\r\n5、推广自己的网站<br />\r\n<br />\r\n<br />\r\n2&nbsp;&nbsp;制作网站需要那些工具<br />\r\n<br />\r\n推荐网页三剑客：FLASH+DREAMWEAVER+FIREWORKS。 <br />\r\nFLASH可以创建何种小、下载速度快的网页动画。 <br />\r\nFIREWORKS可以设计各种位图和矢量图形，悬停按钮，分割图片。 <br />\r\nDREAMWEAVER综合功能强大，有网站管理功能。 <br />\r\nFRONTPAGE易用，但很难做出好看的效果。 <br />\r\n<br />\r\n<br />\r\n3 什么叫域名<br />\r\n<br />\r\n从技术角度来看，域名是在Internet上用于解决IP地址对应的一种方法。一个完整的域名由二个或二个以上部分组成，各部分之间用英文的句号\".\"来分隔，最后一个\".\"的右边部分称为顶级域名（TLD，也称为一级域名），最后一个\".\"的左边部分称为二级域名（SLD），二级域名的左边部分称为三级域名，以此类推，每一级的域名控制它下一级域名的分配。 <br />\r\n顶级域名由美国政府控制的ICANN来定义和分配，分为通用顶级域名(gTLD, General Top Level Domain，国内也称为国际域名)和国家代码顶级域名(ccTLD, Country Code Top Level Domain)。 <br />\r\n通用顶级域名中向用户开放的只有.com、.net和.org三个通用顶级域名，由InterNIC来管理（目前ICANN委托美国Network Solutions公司承担InterNIC的运行和管理工作），国家代码顶级域名有240多个，它们由二个字母缩写来表示，分别代表不同的国家，.cn是中国的国家代码顶级域名，由CNNIC来管理（目前中国政府委托中国科学院计算机网络信息中心承担CNNIC的运行和管理工作）。 <br />\r\n从商业角度来看，域名是\"企业的网上商标\"。企业都非常重视自己的商标，而作为网上商标的域名，其重要性和其价值也已被全世界的企业所认识。域名和商标都在各自的范畴内具有唯一性，并且随着Internet的发展。从企业树立形象的角度看，域名和商标有着潜移默化的联系。所以，域名与商标有一定的共同特点。许多企业在选择域名时，往往希望用和自己企业商标一致的域名。但是，域名和商标相比又具有更强的唯一性。 <br />\r\n从域名价值角度来看，域名是互联网上最基础的东西，也是一个稀有的全球资源，无论是做ICP和电子商务，还是在网上开展其它活动，都要从域名开始，一个名正言顺和易于宣传推广的域名是互联网企业和网站成功的第一步。<br />\r\n<br />\r\n4 如何解析域名<br />\r\n<br />\r\n域名解析就是域名到IP地址的转换过程。IP地址是网路上标识您站点的数字地址，为了简单好记，采用域名来代替ip地址标识站点地址。域名的解析工作由DNS服务器完成。 <br />\r\n如何设置域名解析？ <br />\r\n<br />\r\n您可按以下的步骤办理： <br />\r\n（1）域名可以通过“网络服务管理平台”来管理： <br />\r\n1）浏览：<a href=\"http://idc.admin5.com/---\" target=\"_blank\"><font color=\"#0000ff\">http://idc.admin5.com/---</font></a>＞通过数字ID及对应密码登录客户网络管理系统---＞域名服务---＞域名管理---＞点击需要解析的域名---＞－－&gt;域名解析服务---＞填写三级域名或者IP地址---＞保存设定，系统自动解析---＞域名生效 <br />\r\n<br />\r\nA.新域名初次设置域名解析或在原域名解析中新添域名解析记录，设置将在30分钟左右全球DNS生效； <br />\r\n<br />\r\nB.对已存在的域名解析记录进行IP地址修改，变更结果在管理平台的DNS上是30分钟左右生效，全球DNS一般6-12小时生效； <br />\r\n<br />\r\n5 如何查询一个域名是否被注册 <br />\r\n<br />\r\n请使用域名WHOIS查询。 WHOIS是一个用来查询已经被注册域名的详细信息的数据库（如域名所有人、域名注册商、域名注册日期和过期日期等）。通过WHOIS来实现对域名注册信息查询（WHOIS Database）。 WHOIS查询系统支持国际域名WHOIS查询，国内域名WHOIS查询，英文域名WHOIS查询，中文域名WHOIS 查询。您也可以到<a href=\"http://tool.admin5.com/\" target=\"_blank\"><font color=\"#0000ff\">http://tool.admin5.com/</font></a>查询信息<br />\r\n<br />\r\n6&nbsp;&nbsp;什么地方域名注册好<br />\r\n<br />\r\n推荐几个域名注册商<br />\r\n<br />\r\n中国频道&nbsp;&nbsp;<a href=\"http://www.35.com/\" target=\"_blank\"><font color=\"#0000ff\">www.35.com</font></a><br />\r\n中国万网&nbsp;&nbsp;<a href=\"http://www.net.cn/\" target=\"_blank\"><font color=\"#0000ff\">www.net.cn</font></a><br />\r\n中国新网&nbsp;&nbsp;<a href=\"http://www.paycenter.com.cn/\" target=\"_blank\"><font color=\"#0000ff\">www.paycenter.com.cn</font></a><br />\r\n新网互联&nbsp;&nbsp;mgt.dns.com.cn<br />\r\n商务中国&nbsp;&nbsp;<a href=\"http://www.bizcn.com/\" target=\"_blank\"><font color=\"#0000ff\">www.bizcn.com</font></a><br />\r\n易名中国&nbsp;&nbsp;<a href=\"http://www.ename.cn/\" target=\"_blank\"><font color=\"#0000ff\">www.ename.cn</font></a><br />\r\n<br />\r\nidc.admin5.com 有便宜的1块钱CN域名，如果你不想投入太多资金的话，可以申请用户去注册。<br />\r\n<br />\r\n<br />\r\n7 什么叫网站空间<br />\r\n<br />\r\n网站空间，简单地讲，就是存放网站内容的空间，我们在上网时，通过域名就可以访问到对方的网站内容，然后看对方网站的文章，或下载音乐、电影什么的。<br />\r\n&nbsp; &nbsp;&nbsp; &nbsp; 网站空间可以采用虚拟主机或者专用服务器，那网站是采用虚拟主机还是专用服务器?需要根据网站的情况和预期发展状况进行综合考虑。站长网（<a href=\"http://www.admin5.com/\" target=\"_blank\"><font color=\"#0000ff\">www.admin5.com</font></a>）的一般建议是：一般小型企业网站内容比较少，功能简单，访问量也不大，采用虚拟主机即可，如果虚拟主机无法满足网站的正常运营，或者网站有某些特殊功能，则应考虑采用专用服务器的方式。国内90%以上的网站都是采用虚拟主机.一般来说，企业网站的空间较小，采用虚拟主机就可以,娱乐性质的网站要大一点,下载服务，音乐电影等大型网站往往需要自己组建WEB服务器.<br />\r\n<br />\r\n8 怎样选择网站空间 <br />\r\n<br />\r\n网站建成之后，要购买一个网站空间才能发布网站内容，在选择网站空间和网站空间服务商时，主要应考虑的因素包括：网站空间的大小、操作系统、对一些特殊功能如数据库的支持，网站空间的稳定性和速度，网站空间服务商的专业水平等。下面是一些通常需要考虑的内容：<br />\r\n&nbsp; &nbsp; （1）网站空间服务商的专业水平和服务质量。这是选择网站空间的第一要素，如果选择了质量比较低下的空间服务商，很可能会在网站运营中遇到各种问题，甚至经常出现网站无法正常访问的情况，或者遇到问题时很难得到及时的解决，这样都会严重影响网络营销工作的开展。<br />\r\n&nbsp; &nbsp; （2）虚拟主机的网络空间大小、操作系统、对一些特殊功能如数据库等是否支持。可根据网站程序所占用的空间，以及预计以后运营中所增加的空间来选择虚拟主机的空间大小，应该留有足够的余量，以免影响网站正常运行。一般说来虚拟主机空间越大价格也相应较高，因此需在一定范围内权衡，也没有必要购买过大的空间。虚拟主机可能有多种不同的配置，如操作系统和数据库配置等，需要根据自己网站的功能来进行选择，如果可能，最好在网站开发之前就先了解一下虚拟主机产品的情况，以免在网站开发之后找不到合适的虚拟主机提供商。<br />\r\n&nbsp; &nbsp; （3）网站空间的稳定性和速度等。这些因素都影响网站的正常运作，需要有一定的了解，如果可能，在正式购买之前，</p>\r\n</td></tr></tbody></table>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('523','','1240049871','545','31','1','1','1','','<p>作为中国最主流的CMS平台之一，PHP168即将发布对官方及站长都具有重要意义V6版，V6定位为CMS领域的创造版，不仅在功能上具有大幅创新，同时在思路上让站长运营更加贴近主流互联网经济。</p>\r\n<p><strong>V6版包含的几个重要核心理念：</strong></p>\r\n<p>核心关注站长通过运作网站内容的盈利模式，而不再仅仅依靠广告。</p>\r\n<p>PHP168 官方坚信站长是互联网的核心，站长完全可运营主流的互联网平台。PHP168官方期望能协助站长建立一批有影响力的商务站和领域站。</p>\r\n<p>V6将建强大会员中心，成PHP168核心体系。新版本大幅优化美工及细节，将改变以前只重技术不重美工的现象。</p>\r\n<p>D、PHP168技术团队强调用户体验，更注重开放性团队建设，将实用型、可盈利型系统逐步、稳步推进。</p>\r\n<p><strong>V6版部分功能如下：</strong></p>\r\n<p>1、V6将嵌入快捷小额支付平台，为站长赢利提供基础，包含手机卡支付、游戏卡支付等。</p>\r\n<p>2、V6与PW、DZ进一步整合.高深度PHP168与PW整合版实现会员中心整合PW数据，附件与图片实现无缝推送、栏目内文章混排，专题图片CMS+BBS混排等。</p>\r\n<p>3、V6整站将具备订单商务模块，提供手机短信服务体系功能。</p>\r\n<p>4、V6将支持模糊搜索、体系内按模块类别搜索。</p>\r\n<p>5、V6支持在线FTP传送文件、完美支持附件通过FTP传到远程服务器.</p>\r\n<p>6、V6投稿功能将做细、做强，缩略图、所属栏目、内容简介、附件等都将细化处理。</p>\r\n<p>7、V6专题页面将体现大气、内容丰富的形式，能调用CMS文章、图片、BBS帖子。独立页增加标签专题功能.</p>\r\n<p>8、热点：V6重要子系统首页将能调用为整站核心首页调用显示，整站体系将更灵活</p>\r\n<p>9、V6下载将增加自定义功能，同时纳入积分体系。投票功能进一步加强,支持PK方式投票与人物评选投票.</p>\r\n<p>10、V6企业会员、个人会员可通过手机验证与邮箱验证</p>\r\n<p>11、知道系统将与整站融合，提供体系内完整的咨询方案与知识方案。</p>\r\n<p>12、标签新增支持调用自定义表单数据内容。系统自带招聘、报名、售后等多个默认模型。</p>\r\n<p>13、无评论,不新闻-----V6文章评论功能将深度优化, 让用户有更好阅读性,参与性.</p>\r\n<p>14、V6用户可以通过推销管理员推荐文章获得积分;最新新闻和热点新闻可通过标签控制。</p>\r\n<p>15、新增RSS订阅功能、实现跨库整合、浏览文章后发表心情投票功能、最新新闻和热点新闻可通过标签控制、</p>\r\n<p>16、V6将建造强大新闻门户模型，适合做各类资讯门户，模型可关注官方站。</p>\r\n<p>17、V6列表页面将优化，更适合阅读习惯与布局。链接功能也将在V6中优化</p>\r\n<p>18、视频、图片、下载等模块大幅优化，应用主流表现形式。</p>\r\n<p>19、V6提供在线升级功能。</p>\r\n<p>20、V6系统将方便用户搭建服务体系。方便企业售后、商务站等企业对个人的服务模型。</p>\r\n<p>21、强大的专题功能，可以任意调用网站图片，标题，视频等数据。</p>\r\n<p>22、热点：V6系统支持用户个性化系统构造功能，用户可根据需要梳理功能，从而只搭建自己需要功能的合适体系。</p>\r\n<p>在中国信息化之路上， PHP168作为国内杰出技术团队，理解程序为用户所用，不断创新梳理，为用户、合作伙伴、机构等开发实用、卓越的互联网产品。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('524','','1240050071','546','32','1','1','1','','<p>作为中国互联网平台中最优秀的两支技术团队之一，PHP168与PHPwind此次再度携手，继PHP168 V5.0与PHPWIND 7.0高深度整合后，V6版与PW7.0将再次强势整合。完美解决CMS与BBS融合问题， CMS+BBS黄金组合已经形成。</p>\r\n<p><strong>PHP168 V6与PW7.0整合版将有以下几大新亮点：</strong></p>\r\n<p>会员中心整合PW数据，用户对所发帖子的追踪、修改、查看都可以在V6会员中心进行。V6会员中心将成为PHP168核心体系之一。</p>\r\n<p>附件与图片实现无缝推送。PW论坛图片及附件将会非常方便快捷推送到CMS体系。</p>\r\n<p>PHP168 与PW实现栏目内文章混排，同时可实现静态化。</p>\r\n<p>V6专题图片实现CMS+BBS混排。同个栏目中可混排两个体系的图片。</p>\r\n<p>PHP168 与PHPwind能解决原创文章来源，让社区与门户完整整合，将平台体系搭建得更合理、有更好生命力。</p>\r\n<p><strong>PHP168 V5.0与PW7.0深度整合版已有功能如下：</strong></p>\r\n<p>一、短消息同步</p>\r\n<p>二、论坛贴子可推荐至PHP168整站文章系统显示</p>\r\n<p>三、PHP168系统与论坛整合的内容都能参与整站搜索</p>\r\n<p>四、同步注册 、登录与退出</p>\r\n<p>五、PHP168与phpwind积分同步</p>\r\n<p>六、整站首页可以调用显示论坛的各项统计信息</p>\r\n<p>七、整站可以通过标签自由调用显示论坛的各个栏目的贴子</p>\r\n<p>八、整站系统的采集功能可以采集数据到论坛的栏目，快速充实丰富论坛资料</p>\r\n<p>两个平台的深度融合，使用户有机会同时利用两个专业技术团队开发的产品，让用户项目在技术方面有更强的拓展性。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('525','','1240050179','547','32','1','1','1','','&nbsp;日子总在无声无息地悄悄溜走，申请门户通的日子仿佛还在昨天，不知不觉，已经一年了。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 我应该算是门户通的最初的一批用户吧，2008年04月21申请成功的，今天已经是2009年4月15日了，门户通的一周年，也是我在门户通的一周年，一路风风雨雨，门户通陪着我们一起走过。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刚申请的时候，我还是有点忐忑，怕申请不能通过。那时候我的PR只有2，用其他网站统计工具统计的流量只有每天40个左右的IP（现在也没增加多少）。很顺利地申请通过了，马上搬家，把原来的数据全部搬过来，不会用高级的工具，用记事本修改导出数据的格式，再导入，花了好几天的时间，总算有了自己独立的家。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 从此与门户通结下了不解之缘，几乎每天都要在管理后台和论坛中逗留一段时间，了解门户通，熟悉门户通，喜欢门户通。后来门户通一度进入了困难时期，连续多日被攻击，多个IP几近瘫痪，在这最困难的日子里，我选择了信任门户通，信任门户通的工程师们。事实证明，我的选择是正确的，不久，乌云散去，艳阳高照，门户通继续高歌猛进。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 如此优秀的免费服务，难免被有心之人觊觎，各种垃圾站、采集站纷纷进驻门户通，管理层英明决策，不因一时的用户数量而损害了门户通的美名，目前暂时关闭了新用户的申请，着力整顿垃圾站和非法占用大量资源的网站。相信整顿之后的门户通速度会更快，服务会更稳定，站长们也会更积极。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 门户通也许是国内第一家倒贴给站长钱的空间商，站长可以在自己网站投放兴趣广告，门户通会和站长分成。放眼国内所有的虚拟主机，除了门户通之外，还没发现有其他人这么做。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刚才提到了门户通的工程师们，用一句俗套的话说，他们就是一群最可爱的人。他们默默无闻地在背后做着大量的工作，让门户通能够健康地运转，为站长们解决各种疑难问题，在后台提出的每一个问题，哪怕很弱智，工程师们也都非常详细的回答。很难想象，没有兢兢业业的工程师们，门户通会是什么样子。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 和各位有理想有抱负的站长不太一样，我用门户通的空间做的只是一个小小的个人博客，有了门户通的帮助，我成了真正意义上的独立博客，有了自己的域名和空间。我是在PHP空间用Wordpress搭建的博客，http://meecy.com是我的域名，目前PR是3，曾经到过4，上次调整被降为了3，日访问量（独立IP）40-60之间，如果严格按照门户通的申请流量要求，应该算是不合格吧。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 作为计算机专业的我，想做个网站让流量超过两百，应该不是什么难事，但这不是我的兴趣，我只是想有一个自己的平台，说一些自己想说的话，足矣。是门户通给了我这样一个平台。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 当然，门户通也不是完美的，也有这样那样的小问题，但工程师团队一直都在努力，我相信，门户通的明天，会更好。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 也许，在门户通的五周年、十周年时，回头看这篇小文，会有会心的微笑吧？<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本评论转载自门户通论坛&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 作者：<a href=\"http://bbs.menhutong.com.cn/space.php?uid=1456\">mercy</a><br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 论坛原文：<a href=\"http://bbs.menhutong.com.cn/thread-35422-1-1.html\">http://bbs.menhutong.com.cn/thread-35422-1-1.html</a> ','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('526','','1240050522','548','32','1','1','1','','<strong>体检项目解读</strong><p>　　<strong>一、基本项目解读</strong></p>\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://image.39.net/094/16/351587_p_0416_001.jpg\" width=\"320\" height=\"480\" alt=\"体检报告解读\" /><p><br />\r\n　　1、身高+体重</p>\r\n<p>　　【专家解读】</p>\r\n<p>　　身高、体重可以计算出BMI值，即体重除以身高的平方，如果这个比值偏高，并且超过一定范围，则说明这个人体重超重，反之就是偏瘦。在本案例中体检者为女性，属于中等正常身材。</p>\r\n<p>　　2、血压</p>\r\n<p>　　【专家解读】</p>\r\n<p>　　这位女体检者的收缩压是96毫米汞柱，舒张压是60毫米汞柱，稍微偏低，但是对于女性而言，血压偏低是可以接受的，只要身体的血压一直是这样的水平，并且没有什么症状，就不需理会。</p>\r\n<p>　　<strong>二、心电图(EGG)+ X光胸透报告单解读</strong></p>\r\n<p>　　1、心电图</p>\r\n<p>　　检查意义：用于对各种心律失常、心室心房肥大、心肌梗死、心律失常、心肌缺血等病症检查。</p>\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://image.39.net/094/16/351588_p_0416_002.jpg\" width=\"447\" height=\"298\" alt=\"体检报告解读\" /><p><br />\r\n　　【专家解读】</p>\r\n<p>　　心电图报告单中“正常心电图”则提示无问题或无很大问题。</p>\r\n<p>　　2、x光胸透</p>\r\n<p>　　检查意义：主要看心，隔，肺有无异常，最主要是发现结核。</p>\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://image.39.net/094/16/351589_p_0416_003.jpg\" width=\"447\" height=\"298\" alt=\"体检报告解读\" /><p><br />\r\n　　【专家解读】</p>\r\n<p>　　X光胸透中“未见异常”表示心、肺、隔基本正常，“未见异常”是比较科学比较保守的说法，是表示在这次胸透的情况下，没有发现有异常，但也许在其他情况下有异常。</p>\r\n<p>　　另外，强烈建议做健康体检时，选择做胸片而不是X光透视，因为透视的X线比拍胸片高很多倍，从体检者健康角度而言，建议做胸片。</p>\r\n<p>　　<strong><font color=\"#0997f7\">·体检项目解读快速导航·</font></strong></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_1.html\"><font color=\"#0066cc\">1·基本项目+心电图+X光胸透报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_2.html\"><font color=\"#0066cc\">2·生化检验（肝功能）+免疫检验（乙肝两对半）报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_3.html\"><font color=\"#0066cc\">3·血液检验（血常规）报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_4.html\"><font color=\"#0066cc\">4·尿液检验（尿常规）+红外线乳腺检查报告解读+专家整体建议</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_5.html\"><font color=\"#0066cc\">5·解读报告后记+个人体检报告招募</font></a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>体检项目解读</strong></p>\r\n<p>　　<strong>一、基本项目解读</strong></p>\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://image.39.net/094/16/351587_p_0416_001.jpg\" width=\"320\" height=\"480\" alt=\"体检报告解读\" /><p><br />\r\n　　1、身高+体重</p>\r\n<p>　　【专家解读】</p>\r\n<p>　　身高、体重可以计算出BMI值，即体重除以身高的平方，如果这个比值偏高，并且超过一定范围，则说明这个人体重超重，反之就是偏瘦。在本案例中体检者为女性，属于中等正常身材。</p>\r\n<p>　　2、血压</p>\r\n<p>　　【专家解读】</p>\r\n<p>　　这位女体检者的收缩压是96毫米汞柱，舒张压是60毫米汞柱，稍微偏低，但是对于女性而言，血压偏低是可以接受的，只要身体的血压一直是这样的水平，并且没有什么症状，就不需理会。</p>\r\n<p>　　<strong>二、心电图(EGG)+ X光胸透报告单解读</strong></p>\r\n<p>　　1、心电图</p>\r\n<p>　　检查意义：用于对各种心律失常、心室心房肥大、心肌梗死、心律失常、心肌缺血等病症检查。</p>\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://image.39.net/094/16/351588_p_0416_002.jpg\" width=\"447\" height=\"298\" alt=\"体检报告解读\" /><p><br />\r\n　　【专家解读】</p>\r\n<p>　　心电图报告单中“正常心电图”则提示无问题或无很大问题。</p>\r\n<p>　　2、x光胸透</p>\r\n<p>　　检查意义：主要看心，隔，肺有无异常，最主要是发现结核。</p>\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://image.39.net/094/16/351589_p_0416_003.jpg\" width=\"447\" height=\"298\" alt=\"体检报告解读\" /><p><br />\r\n　　【专家解读】</p>\r\n<p>　　X光胸透中“未见异常”表示心、肺、隔基本正常，“未见异常”是比较科学比较保守的说法，是表示在这次胸透的情况下，没有发现有异常，但也许在其他情况下有异常。</p>\r\n<p>　　另外，强烈建议做健康体检时，选择做胸片而不是X光透视，因为透视的X线比拍胸片高很多倍，从体检者健康角度而言，建议做胸片。</p>\r\n<p>　　<strong><font color=\"#0997f7\">·体检项目解读快速导航·</font></strong></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_1.html\"><font color=\"#0066cc\">1·基本项目+心电图+X光胸透报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_2.html\"><font color=\"#0066cc\">2·生化检验（肝功能）+免疫检验（乙肝两对半）报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_3.html\"><font color=\"#0066cc\">3·血液检验（血常规）报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_4.html\"><font color=\"#0066cc\">4·尿液检验（尿常规）+红外线乳腺检查报告解读+专家整体建议</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_5.html\"><font color=\"#0066cc\">5·解读报告后记+个人体检报告招募</font></a></p>\r\n<p><strong>三、生化检验报告单解读</strong></p>\r\n<p>　　检验样本：血浆</p>\r\n<p>　　检查意义：本案例中只检查了血糖和肝功能2项，血糖检查可有助早期发现糖尿病及了解胰腺分泌功能，肝功能检查项是肝细胞受损最敏感的指标之一。</p>\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://image.39.net/094/16/351590_p_0416_004.jpg\" width=\"447\" height=\"298\" alt=\"体检报告解读\" /><p><br />\r\n　　【专家解读】</p>\r\n<p>　　从化验单上看，本案例中女体检者的葡萄糖和反映肝脏功能的两个酶含量都是正常的。</p>\r\n<p>　　【小编提醒】</p>\r\n<p>　　谷氨酸氨基转移酶和门冬氨酸氨基转移酶是我们肝功能检查最常见的评价肝脏功能的指标。</p>\r\n<p>　　<strong>四、免疫检验报告单解读</strong></p>\r\n<p>　　检验样本：血浆</p>\r\n<p>　　检查意义：了解是否感染乙肝病毒、是否产生对肝炎病毒的抗体，是否应该注射疫苗以及注射疫苗后的效果。</p>\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://image.39.net/094/16/351594_p_0416_008.jpg\" width=\"447\" height=\"298\" alt=\"体检报告解读\" /><p><br />\r\n　　【专家解读】</p>\r\n<p>　　这份免疫检验实际上就是大家熟知的“乙肝两对半”检查，所谓“两对半”就是5个检查项的意思，这5项中(见图)，第一、三、五项呈阳性时表示大三阳，但并不是说5项检查出3个阳性就是大三阳或者小三阳，比如当二、四、五项检查呈阳性时就是没有太大问题，可以视为正常的结果。但除了这三个以外的是阳性，我们就叫他是大三阳或小三阳。</p>\r\n<p>　　另外，5项中如果只有第2项“乙肝表面抗体”呈阳性就是最希望最好的检查结果，表示体检者体内有乙肝抗体。</p>\r\n<p>　　如果乙肝5项均呈阴性，就需要打三次乙肝疫苗，直到乙肝表面抗体变成阳性。这位女体检者的“乙肝表面抗体”检验项中，有一个“附加结果”，表明她有乙肝抗体。一般情况下，这个附加结果的范围由十几到二十几不等，得到这样的数值就算比较满意了，表示此人应该足够抵抗乙肝。</p>\r\n<p>　　【小编提醒】</p>\r\n<p>　　1、本案例中，体检报告在检验值后用“箭头”来表示检验值偏离参考范围。每个项目的参考范围不是绝对的，不同体检机构受客观因素如检验试剂或检验水平的制约，制定的参考范围都不一定相同，但不会有太大差别。</p>\r\n<p>　　2、由于肝炎在中国的感染程度非常高，并且存在一定的歧视状况，所以对于乙肝两对半检验，大家最好能了解一些基本的常识，有些用人单位看到应聘者“乙肝两对半”化验单上的3个阳性结果就拒绝接收，其实就是一种错误的做法。</p>\r\n<p>　　<strong><font color=\"#0997f7\">·体检项目解读快速导航·</font></strong></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_1.html\"><font color=\"#0066cc\">1·基本项目+心电图+X光胸透报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_2.html\"><font color=\"#0066cc\">2·生化检验（肝功能）+免疫检验（乙肝两对半）报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_3.html\"><font color=\"#0066cc\">3·血液检验（血常规）报告解读</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_4.html\"><font color=\"#0066cc\">4·尿液检验（尿常规）+红外线乳腺检查报告解读+专家整体建议</font></a></p>\r\n<p>　　<a href=\"http://tj.39.net/tjbg/094/17/843787_5.html\"><font color=\"#0066cc\">5·解读报告后记+个人体检报告招募</font></a></p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('527','','1240050670','549','32','1','1','1','','<p>&nbsp;</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('528','','1240051050','550','32','1','1','1','','2009年3月23日，中国站长站旗下专业IDC交易平台，主机网（CNIDC.com）正式上线发布。<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/32/1_20090418180444_f8mDG.jpg\" width=\"368\" height=\"111\" border=\"0\" alt=\"9.jpg\" title=\"9.jpg\" /></p>\r\n<p align=\"center\"><strong>&nbsp;图：IDC交易平台主机网（cnidc.com）</strong></p>\r\n<p>主机网（CNIDC.com），立足于IDC行业的B2C交易（B：IDC厂商，C：网站主、企业等客户），依托中国站长站（chinaz.com）7年的站长行业优势，将IDC商家、个人站长及企业用户等IDC终端消费群体，进行无缝隙的对接，保证双方的安全交易，致力于打造中国最专业的主机交易平台。</p>\r\n<p>主机网通过在交易过程中建立的信用体制，来维护和保证整个平台的公正性，以此解决现有IDC行业的价格战、行业规范失调、用户交易无保障等问题。</p>\r\n<p>自有技术开发的这一平台经过了严密的优化处理，不仅让卖家入驻、管理和销售更加简易快捷，同时还做到了让买家浏览、比较、购买更加通畅。主机网依托于中国站长站超过100万的庞大用户群体以及60万的活跃用户资源，以期打造一个中国主机行业最专业的在线交易平台。</p>\r\n<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/32/1_20090418180412_jK2np.jpg\" width=\"415\" height=\"185\" border=\"0\" alt=\"99.jpg\" title=\"99.jpg\" /></p>\r\n<p align=\"center\"><strong>图：IDC交易平台主机网（cnidc.com）正式上线</strong></p>\r\n<p>据了解，主机网历时半年多时间封闭开发，仔细论证了IDC交易过程中出现的种种可能问题，力争做到交易双方在交易便捷的同时，切实保障双方的交易安全。作为一个交易平台，主机网从商家申请认证、商品发布、服务评级以及现金体现，到用户购买商品、付款方式、信用评价等各个环节，都有一套严密的保障措施。</p>\r\n<p>主机网IDC交易平台技术负责人介绍，针对交易平台的特殊性，主机网在权益保护方面做出了最大化的保障举措。这些保障举措包括消费者保障计划、CNIDC认证商家，以及7天无理由退款等措施，全面维护消费者的权益。</p>\r\n<p>不仅技术有保障，使用也更加便捷。经由信用为基础的销售推荐榜，使得用户购买变得有章可循。整合了国内功能强大的在线支付平台----支付宝和财付通，绑定各大网上银行，也为广大IDC用户提供了安全快捷的在线交易服务。对于品类繁多的主机商品，强大智能的搜索系统让您快速找到您需要的那一款。</p>\r\n<p>作为一个IDC行业的B2C平台，主机网涵盖了虚拟主机、服务器托管、服务器租用、服务器合租、VPS主机等五个细分类别，满足了网站空间使用的不同要求。主机网同时还提供IDC行业资讯，以及其他IDC相关的技术教程等。</p>\r\n<p>对于CNIDC的发展历程，中国站长站创始人阿飞（姚剑军）介绍到，早在2005年底CNIDC就已经推出，当时网站名叫“中国主机评测网”，但是忙于cnzz免费统计的原因，这个网站一直搁置至今。2008年，CNZZ独立成立公司，CNIDC的重新规划也提上日程，成为2009年中国站长站的主要工作，网站也从以前的评测路线，改为一个有严格信誉体系的B2C平台。</p>\r\n<p>“我觉得创业者如果没有诚信体系，我们就创造一个诚信体系，如果没有支付体系，我们建设支付体系，我们只有这个样子，才有机会。”借用马云的这句话，姚剑军道出了推出主机网（cnidc.com）的初衷。姚剑军说，目前互联网交易还有很多不规范的地方，特别像IDC这种行业，更是没有一个行业规范可言，国内各大大小小的IDC服务商参差不齐。主机网的使命之一，就是我们必须让这个行业有行业规范。我们必须得有行业规范，得有诚信体系；我们必须让有实力，服务质量好，产品质量好的公司能够从中脱颖而出。让所有买主机的人都达成一个共识，那就是，买主机，上主机网，我相信我们的努力能为站长带来帮助！</p>\r\n<p>“让天下没有难买的主机！”这是姚剑军给予主机网（CNIDC.com）在IDC行业发展中的愿景。</p>\r\n<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/32/1_20090418180427_C2M5c.gif\" width=\"510\" height=\"156\" border=\"0\" alt=\"999.gif\" title=\"999.gif\" />&nbsp;&nbsp;</p>\r\n<p align=\"center\"><strong>图：主机网（cnidc.com），中国最专业的主机交易平台</strong></p>\r\n<p><strong>主机网地址</strong>：<a href=\"http://www.cnidc.com/\">www.cnidc.com</a></p>\r\n<p><strong>主机网相关信息</strong>：</p>\r\n<p><a href=\"http://www.chinaz.com/News/Biz/0323F1Q2009.html\">阿飞：我们为什么做主机网</a></p>\r\n<p><a href=\"http://www.chinaz.com/News/IT/0323F2432009.html\">主机网：多重保障打造最专业主机交易平台</a></p>\r\n<p><a href=\"http://www.chinaz.com/News/Biz/0323F2452009.html\">主机网“三心服务”让天下没有难买的主机</a></p>\r\n<p><a href=\"http://www.cnidc.com/help/index.php?action=artikel&cat=1&id=19&artlang=zh\">主机网交易流程</a> </p>\r\n<p><a href=\"http://www.cnidc.com/help/index.php?action=artikel&cat=2&id=28&artlang=zh\">安全购物指南</a> </p>\r\n<p><a href=\"http://www.cnidc.com/help/index.php?action=artikel&cat=2&id=23&artlang=zh\">消费者保障计划</a></p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('529','','1240051810','551','33','1','1','1','','<strong>作者：杨虞波罗</strong> <p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/33/1_20090418180407_R7sr3.jpg\" width=\"350\" height=\"447\" border=\"0\" alt=\"1.jpg\" title=\"1.jpg\" /></p>\r\n<p>　　《魔兽世界》作为在中国运营最为成功的一款“神话”级网游，一直被业界所关注。今天，网易已经确定成为《魔兽世界》新的代理商，九城手中最大的“摇钱树”易主。业界已经掀起轩然大波，甚至对网游知之甚少的人也很关注这一业界的大动作。九城、网易、暴雪、玩家四方最终几家欢喜几家愁呢？ </p>\r\n<p>　　<strong>九城：失去《魔兽世界》，尚能饭否？ </strong></p>\r\n<p>　　对于九城来说，《魔兽世界》是绝对的“支柱产业”。2008年，九城的总净收入为17.1亿元人民币（约合2.504亿美元），而源于计时游戏业务的净收入约为15.6亿元人民币（约合2.29亿美元），这15.6亿元人民币净收入中绝大部分来自《魔兽世界》，也就是说2008年九城的净收入超过90%来源于《魔兽世界》。 </p>\r\n<p>　　失去《魔兽世界》，九城的收入将来源于何处？目前九城正在运营的游戏除了《魔兽世界》，还有奇迹、奇迹世界、卓越之剑、九洲战记和快乐西游。这几款游戏当中没有一款可以达到《魔兽世界》50%甚至20%的收入。我们再来看看九城手里其他的未开始运营的游戏，FIFA ONLINE2、名将三国、王者世界、Audition2、Huxley、Ragnarok2、暗黑之门、Field Of Honor,其中很难有能媲美《魔兽世界》收入的游戏。当然，其中不乏有一些优秀的作品，如果运营得当，或许可以“扳回一城”。但是要想达到之前《魔兽世界》时期的辉煌，很难。 </p>\r\n<p>　　九城之所以会失去《魔兽世界》在中国的代理权，根本原因是与暴雪合作中分成比例的纠纷。之前的合同中，暴雪的分成比例为22%，而在新合同的洽谈中，暴雪将分成比例提高了约10个百分点，将分得1/3的利润。这点成为双方争论的焦点，最终双方决裂，分道扬镳。 </p>\r\n<p>　<strong>　网易：赢得了“魔兽”，能否赢得“世界”？ </strong></p>\r\n<p>　　《魔兽世界》可以说是炙手可热，每家网游公司都盯着这块“肥肉”，为什么暴雪会选择网易？网易与暴雪在之前早有合作，去年去年8月13日，网易宣布将暴雪重磅级游戏《星际争霸2》及战网引入中国。网易与暴雪双方还就此成立合资公司，以提供游戏运营的技术支持等服务。除了星际争霸Ⅱ之外，网易的关联公司上海网之易公司还获得了魔兽争霸Ⅲ：混乱之治，魔兽争霸Ⅲ：冰封王座，以及为上述游戏提供在线多人互动服务的战网平台在中国大陆的独家运营权。 </p>\r\n<p>　　双方新成立的合资公司，网易与暴雪各占50%股份，如果按这个股份分成的话，暴雪将获得50%的游戏利润，比之前与九城合同中22%的分成提高了一倍还多。暴雪何乐而不为？ </p>\r\n<p>　　网易的确能从运营《魔兽世界》中受益，《魔兽世界》大量的用户群将过度到网易门下。网易本身的用户群年龄偏大，《魔兽世界》用户的进入使网易的用户群得到了很好的补充。但是在盈利方面是否会有质的飞跃还很难说。首先网易前期需要投入大量的资金，购买服务器、九城手里的玩家信息等等，比当时九城开始代理《魔兽世界》时候的花费只能多不能少，其次，更换代理以后，游戏要重新进行出版流程，也就是说，所有的游戏内容要重新送新闻出版署进行审批。最后，《魔兽世界》还能“火”几年这也是一个未知数。 </p>\r\n<p>　<strong>　暴雪：鹬蚌相争，渔翁得利 </strong></p>\r\n<p>　　“《魔兽世界》之争”最大的受益者非暴雪莫属。动视暴雪作为一家上市公司，游戏是否稳定、由哪家公司代理，实际上并没有那么重要。赚钱才是它首要的存在意义。去年8月13日宣布与网易成立合资公司，目的显而易见，是在中国大陆这块“大得不可想象”的市场上赚更多的钱。 </p>\r\n<p>　　对于最近网上流传的九城总裁陈晓薇就《魔兽世界》运营权转移一事发给全体员工的信中提到的“我国政府依法禁止外资企业在中国以独资、或合资的形式发行游戏，而竞争对手却在我们与合作伙伴的谈判过程中又抛出成立合资企业这样的条件作谈判价码”在法律上是否真正成立这个问题，还需要进一步探讨。 </p>\r\n<p><strong>　　玩家：我们招谁惹谁了？</strong> </p>\r\n<p>　　玩家在这次风波中，绝对是扮演了最悲剧的角色。玩家数据的去留，更换代理后计费的方式，都掌握在其他人手中，生杀大权，完全在外人之手。而且在九城服务器关闭与网易服务器开启之间，玩家就不能玩游戏了。这还不是最糟的，新资料片《巫妖王之怒》的上市时间将再一次无限期延长。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('530','','1240052014','552','33','1','1','1','','4月18日消息，谷歌大中华区总裁<a href=\"http://go.tech.163.com/renwu/data/6.html\"><font color=\"#1e50a2\">李开复</font></a>希望谷歌在中国市场份额能够得到更好增长，不仅从质量上，也从数量上超越竞争对手<a href=\"http://go.tech.163.com/info/detail.jsp?id=5\"><font color=\"#1e50a2\">百度</font></a><a href=\"http://go.tech.163.com/info/detail.jsp?id=5\"><font color=\"#1e50a2\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://cimg20.163.com/tech/2008/3/31/20080331145327d1893.png\" width=\"18\" height=\"18\" border=\"0\" /></font></a>。今天，李开复在博鳌亚洲论坛接受<a href=\"http://go.tech.163.com/info/web/2.html\" target=\"_blank\"><font color=\"#1e50a2\">网易<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://cimg20.163.com/tech/2008/3/31/20080331145327d1893.png\" width=\"18\" height=\"18\" /></font></a>科技专访时表示，过去两年来，谷歌中国市场份额已经增长一倍，今年仍会推出更多的新产品，吸引更多的人来使用谷歌搜索引擎。<p><strong>报业问题可以达成共赢</strong></p>\r\n<p>在美国，传统报业媒体老总们开始指责谷歌无偿掠夺了他们花大价钱采访到的新闻，并且让网民养成了免费获得新闻的习惯。不过谷歌大中华区总裁李开复认为，随着时代的进步和传播载体的变化，谷歌已经与很多传统媒体的网站保持非常良好的关系，通过在线的谷歌广告系统也取得了很好的合作，是一种共赢的关系。</p>\r\n<p><strong>市场份额两年增一倍 搜索质量第一</strong></p>\r\n<p>李开复认为谷歌中国的中文搜索质量已经是绝对的第一。“过去两年我们的市场份额增加了一倍，可以看出我们的数据明显在成长。”</p>\r\n<p>对于谷歌中文的搜索质量，李开复表示，从谷歌内部的评估结果看，谷歌目前已经是第一的水平。</p>\r\n<p>李开复表示，从搜索质量的判断角度来说，“判断标准有四点，首先是第一页的结果，谁的相关性结果最多，其次是作弊的网站，是否能够侵入到你的搜索结果里面，三是索引是否最大最完整，第四是索引是否最新。”</p>\r\n<p>在这四个指标里面，李开复表示，索引最新都差不多，但是其他三个方面，谷歌远超过竞争对手。</p>\r\n<p>但是谷歌在中国的市场份额仍落后于百度，李开复解释说，“因为很多人不理解，不知道，不相信谷歌已经是搜索结果最好，所以我们希望将来更多的网民试一下。还有一个原因是大家的搜索习惯，因为认为觉得搜索质量差不多，所以不愿意更换搜索引擎。”</p>\r\n<p><strong>音乐搜索是唯一一家正版音乐搜索</strong></p>\r\n<p>和百度在中国大陆搜索市场的竞争，是李开复很长时间都要一直面对的一个问题。</p>\r\n<p>对于谷歌新近推出的音乐搜索，李开复认为，谷歌新近推出的音乐搜索是中国唯一一家“正版的音乐搜索”，和唱片公司合作，有助于网友进行更好的体验。“谷歌的音乐搜索不是一个模仿式的产品，不但是免费的，而且是正版和高质量的，还要有创新的功能。而正版授权仅仅针对中国大陆地区。”</p>\r\n<p>李开复认为，音乐搜索正版化其实不是谷歌最大的优势，而是最大的挑战，谷歌音乐搜索的核心优势是搜索质量和体验，对于有说法提出谷歌音乐搜索结果比较少一事，李开复表示，“搜索的结果应该是越少越好，而不是越多越好。一个好的正版高质量搜索就可以让用户满意。如果广告反馈的效果好，音乐搜索还会向中国大陆市场以外推广。”</p>\r\n<p>谷歌推出音乐搜索之举被业界认为是进入其在华最大竞争对手百度最强势的MP3搜索领域，与百度展开直接竞争，而百度此前曾经和一些大型唱片公司就是否侵权产生了分歧，百度首席执行官<a href=\"http://go.tech.163.com/renwu/data/45.html\"><font color=\"#1e50a2\">李彦宏</font></a>在昨天接受网易科技专访时表示，对于版权问题，百度非常重视，对于网上任何侵权的信息，都会立即将链接删除下线，同时百度也不希望成为音乐内容的提供者。</p>\r\n<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/33/1_20090418180432_EwElB.jpg\" width=\"500\" height=\"381\" border=\"0\" alt=\"2.jpg\" title=\"2.jpg\" /></p>\r\n<p><strong>开发更多新产品吸引更多用户</strong></p>\r\n<p>李开复表示，希望开发更多的新产品来吸引用户。</p>\r\n<p>李开复表示，和对手的差距还需要进一步拉开，Google要求做到，两米之外，就可以看出搜索的优势。“谷歌的整合搜索包括了地图、不但有网页、照片、视频、<a href=\"http://tech.163.com/special/00092FUU/blog_tech.html\" target=\"_blank\"><font color=\"#1e50a2\">博客</font></a>、音乐，任何一个搜索词，无论是常见关键词还是长尾关键词，都能在谷歌得到最有效的搜索结果。”</p>\r\n<p>除了加强音乐搜索外，对于一些用户喜欢问答型搜索，谷歌也和天涯进行了合作。谷歌的个人主页igoogle，还有移动搜索和地图搜索，也会是谷歌重点加强的三个领域，“上百位谷歌工程师，正在专注的做整合搜索，再下一步，还会有一些很好的产品出现。”</p>\r\n<p><strong>3G会是市场催化剂</strong> </p>\r\n<p><strong>针对3G移动互联网搜索市场，谷歌做了很多的准备</strong></p>\r\n<p>谷歌刚刚和中国移动续签了移动互联网搜索的协议，李开复和<a href=\"http://go.tech.163.com/renwu/data/1.html\"><font color=\"#1e50a2\">丁磊</font></a>也一起为中国电信拍摄了最新的3G宣传广告，不过李开复坦言，尽管谷歌保持开放心态愿意与所有的电信运营商在无线互联网上合作，但是由于双方精力有限、人手有限，不排除有些厂商会选择其他的搜索厂商。</p>\r\n<p>“我们认为3G是一个催化剂，让过去很慢的服务变得很快，经过收费的下降，3G将普及到全国。但谷歌不会参加更多的产品的设置，手机可以上网，也会是一个很必要的问题，让我们专注的产品，搜索和地图达到主流，但我们不会推出软硬件产品。”</p>\r\n<p>不过谷歌的Android手机平台软件会是一个例外，李开复表示，谷歌的软件可以让用户拥有一个高质量的免费开源的手机操作系统，让用户拥有一个很好的使用体验，还可以让任何手机制造商可以制造出来高质量的手机。”</p>\r\n<p>李开复说，“对于中国手机制造商和电信运营商来说，很多操作系统需要国外的手机操作系统，每次都要需要国外的支持，但是没有源代码，修改会非常麻烦，所以谷歌的手机操作系统，是将一个最新最好的操作系统和浏览器，免费的送给移动运营商和中国手机制造商。”</p>\r\n<p><strong>互联网会帮助企业度过经济危机</strong></p>\r\n<p>对于这次影响全球的经济危机，李开复认为，互联网企业是相对健康的，“希望互联网能够引导中国企业脱离此次经济危机，更好的利用互联网上面的资源，进行更好的推广，搜索广告和游戏相对是比较看好的行业，但是品牌广告是下降的，不过没有美国下降的那么严重。”</p>\r\n<p>李开复认为，当前企业要降低成本，收紧腰带，借助互联网，不仅能够平安的度过寒冬，也可以在春暖花开的时候，在世界金融复苏的时候，得到很好的成长。</p>\r\n<p>对于金融危机的影响，李开复表示从谷歌客户的统计数据看，影响较大的是出口型企业，谷歌全球成长是6%，尤其是中国成长远超过全球，“谷歌搜索广告去年第四季度增长特别的好，我们的成长远远超过业界同行。第一个季度我们预计会保持和业界一致甚至更好的增长。春节之后，中国也在保持很好的增长。”</p>\r\n<p>对于招聘计划，李开复表示，谷歌全球的人员的增长可能会相对缓慢一些，维持在稳定的水平，但是没有下降，中国区的人手则保持增长。（林一木）</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('531','','1240052409','553','33','1','1','1','','<p><span>央视网消息： 随着信息产业在中国飞速发展，一些互联网企业曾经实现了快速成长，但是在当前金融危机影响下，互联网也需要进行思路的整理和调整，互联网精英站长会召开，让部分优秀的互联网精英齐聚南京，为中国的互联网健康有序成长献计献策。<br />\r\n&nbsp;&nbsp;&nbsp; <p align=\"center\">&nbsp;</p>\r\n</span></p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/33/1_20090418190417_93pys.jpg\" width=\"546\" height=\"372\" border=\"0\" alt=\"4.jpg\" title=\"4.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p align=\"center\"><span><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/33/1_20090418190427_FSk2e.jpg\" width=\"548\" height=\"323\" border=\"0\" alt=\"5.jpg\" title=\"5.jpg\" /><p><br />\r\n&nbsp;&nbsp;&nbsp; 近日，来自全国各地的近200位网站站长和互联网精英齐聚南京，对未来社区发展和盈利等焦点话题进行了深入的探讨，众多资深站长们分享了自己的创业故事以及做网站的多年体会。本次大会针对全球和中国互联网发展前瞻性观点的行业分析，顶级技术工程师开发社区的网络应用以创造可持续发展的商业模式，在线广告平台和商业模式，以及互联网行业发展方向、经营理念、技术方案、网站收益等话题进行讨论和分享。 </p>\r\n</span></p>\r\n<p><br />\r\n&nbsp;&nbsp;&nbsp; 近日，来自全国各地的近200位网站站长和互联网精英齐聚南京，对未来社区发展和盈利等焦点话题进行了深入的探讨，众多资深站长们分享了自己的创业故事以及做网站的多年体会。本次大会针对全球和中国互联网发展前瞻性观点的行业分析，顶级技术工程师开发社区的网络应用以创造可持续发展的商业模式，在线广告平台和商业模式，以及互联网行业发展方向、经营理念、技术方案、网站收益等话题进行讨论和分享。 </p>\r\n<p>&nbsp;</p>\r\n<p><br />\r\n&nbsp;&nbsp;</p>\r\n<h1><font size=\"4\">CHINAZ:专访PHPWind 王学集：其实，我是一个程序员</font></h1><p>6月11日，雨后的杭州下午，PHPWind Forums v6.3和LXBlog v6.0正式版发布前，有点消瘦的王学集老道地起身用小青瓷茶壶泡了一壶茶，坐下后扶了扶下眼镜，悠闲地抿了一小口茶，一身的商人性格流露出来。但之后对着电脑接受采访的习惯，俨然又摇身变为一个程序员。</p>\r\n<p>王学集1998年一触网，地道的80后便开始施展自己的兴趣和爱好。起初是一种投入和迷惑，之后是满足感和被关注。2002年王学集上大学的同时，另一个身份已经是一个兼职程序员了。在做了一短时间的技术服务后，王学集开发了自己的产品，2003年将重点放在了论坛服务上。网络的快速发展后对社区软件的极大需求对王学集的技术研发团队是一个刺激，他们看到了自己产品的市场化前景，于是在2004年PHPWind正式成为一个通用论坛项目。2005年，毕业后没上研究生的王学集以自己优秀的产品打动了投资人，拿到了一笔钱，这个二人团队在母校旁边创立了自己的技术服务公司，同时他的身份由程序员变为了CEO。</p>\r\n<p>王学集坦言在成为管理者之后他便不再参与产品的研发了。原因是公司员工40多人，80%是负责产品的技术人员，他虽然是产品的创始人之一，但他担心如果自己以CEO的身份继续参与具体项目会给其他技术人员造成束缚，不利于产品和公司的发展。但他仍一直是自己产品的第一个测试者，把自己首先当成用户，之后再与研发人员交流心得，以保持产品的用户体验舒适。</p>\r\n<p>谈到产品本身，王学集表示现在PHPWind提供的建站软件服务已经非常成熟，即使建站者在没有任何计算机程序背景下，建一个网站的同样也是简单并且不失个性化。PHPWind提供了一系列建立网站的软件，比如社区、博客、SNS系统等，建站者可以根据自己的需求将不同的软件进行组合达到自己的个性化需求。目前PHP专注于更大范围内的社区网站技术支持，为建站者提供“一条龙”增值服务，包括域名、软件、购买空间，和从小站升级到大中型站点的服务等。</p>\r\n<p>王学集认为论坛作为社区产品，与博客相比较生命力更强，市场仍具备发展潜力，因此公司目前的任务是继续丰富和完善产品本身，更要迎合用户和潮流的不断变化，并在此基础之上为高级用户提供具备自成长性的产品，在此他笑称服务拼的就是内功，用户不可能因为同情而付费。</p>\r\n<p>在回忆公司发展时王学集承认自己曾经犯过两个错误，一是不应该理想化地上马网上商城项目，二是贸然在北京开设分公司。王学集表示，两个错误责任在他，使公司发展上有些冒进了，但做出下马决定的也是他，源于他对用户的负责。王学集认为对用户承诺的兑现是一个天大的事，纸上谈兵要不得，他宁可走专精路线也不能让过度膨胀砸了PHPWind的金字招牌。</p>\r\n<p>在商言商，在被问道如何看待竞争对手时王学集并无太多激动。他觉得每个好的产品都有存在的理由，想在好的市场上发展，必须要有一个竞争对手，没有竞争就没有进步，如果自己的产品不好，就不会出现在第一和第二位的争议里面。但对于对手的不正当竞争王学集表示一定会严肃对待。</p>\r\n<p>对于之前有传言称阿里巴巴旗下品牌阿里妈妈以5000万人民币的价格对PHPWind收购一事，王学集再次重申两家公司只是在社区论坛产品方面的业务合作，并没有涉及任何资本交易。他认为阿里妈妈之所以选择PHPWind的社区论坛产品，是因为看重PHPWind对于社区论坛产品的专注，和产品本身的安全、高负载和运行的高速。王学集同时表示，正是因为公司对产品和用户的关注，才使得外界对PHPWind频频关注，这是一件顺理成章的事。</p>\r\n<p>王学集在回想发展历程时有些感慨，他觉得PHPWind依靠用户的口碑传播能够取得一些成绩很不容易，这也是用户对PHPWind系列产品的认同和肯定，专注是发家之本，辛苦没有白费。</p>\r\n<p>2006年11月，PHPWind在短短的四年不到的时间里注册会员达到100万。</p>\r\n<p>2007年厦门站长大会评选出07年度十大新锐站长，王学集名列其中。</p>\r\n<p>2008年6月12日,PHPWind Forums v6.0发布至今已经有七个月时间，王学集带领他的团队又一次兑现了承诺。</p>\r\n<p>王学集认为取得成功是偶然也是必然。自己的初衷根本就不是为了赢利，而是为了兴趣。但在建了一个有价值的产品后，赢利与兴趣便有了交集，但持续对产品质量的追求才能换得用户的忠诚。</p>\r\n<p>最后谈到角色的过度，王学集认为自己的位置算是变化地比较自然，他觉得管理和技术都是在产生价值，并不对立。虽然王学集坚持认为自己现在完全成为了老板，但一谈到自家产品时他的老板神态便悄然消失，与年龄相称的热情一下就被激发出来，专业的口吻和严整地逻辑思维让人几乎忽略掉他会是领导团队的管理者和面对投资方的经理人。没办法，被人看穿只能怪王学集骨子的那种气质，程序员独有的对产品的专注。（完）</p>\r\n<p><strong>关于PHPWind</strong></p>\r\n<p>PHPWind创立于2002年，在过去的6年时间里，PHPWind一直定为于建站软件开发及提供增值服务，致力于为站长提供简便、有效、可持续的建站解决方案。公司核心产品论坛系统是一套开源软件系统，同时PHPWind拥有众多原创的核心技术包括：独创的模版设计体系、数据库的多表散列设计理念、索引数据文件的利用及其算法、文件读写稳定性算法、数据库索引负载均衡算法、多重安全防护体系等，目前已经成为国内应用广泛的论坛软件之一。 </p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('532','','1240057138','554','33','1','1','1','','<p>　　<a href=\"http://192.168.0.99/view/762692.htm\" target=\"_blank\"><font color=\"#3366cc\">章征军</font></a>，网络人称图王，网络界最仗义的个人网站站长，甚至被很多站长尊称为老大，虽然没有发展成一个大站，但是却帮助了无数的小站成长。” <br />\r\n</p>\r\n<div>&nbsp;</div>\r\n　　这是中国站长大会给图王的一个介绍。<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/33/1_20090418200452_bsk1Z.jpg\" width=\"300\" height=\"450\" border=\"0\" alt=\"6.jpg\" title=\"6.jpg\" />图王网群或者图王，目前在中国站长圈子里俨然是一个品牌，国内知名站长聚会都少不了图王的参与，图王在站长中非常受尊重。站长们对图王的尊敬来源于图王本人的人品非常好。在中国网络网行业里，个人网站已经成为一股不可小觑的新势力，个人网站以每年两万五千多个的速度快速递增，而且这种增加趋势还在加大。个人网站如此之多，很多相对弱小的网站站长非常需要建站前辈的帮忙，而图王在其中，正是扮演无私奉献的角色。 <br />\r\n<div>&nbsp;</div>\r\n　　估计很多站长朋友只知道图王这个名字，有不少人知道章征军的，或很多朋友都不知道图王这个名字的来历。图王之所以叫图王，其实是因为他第一个的网站88gg.com，这是一个图片站。当时是跟k6（k666是最早的站长论坛，如今很多知名站长，包括站长站阿飞等人都是出之该论坛。）合作的，当时这个站流量非常大。他也比较用心，天天排图片（这也给了我们以后刚刚作网站的一点经验，起始作网站，最好找一个大的网站合作一下，多学一点经验，多开拓一下视野，少一些摸索的时间）当时直接的图片网站很少，数码相机刚流行，各个论坛贴图的图片特别多，图王从朋友搞到一个pro的抓论坛图片的软件，常常借助网吧的大带宽，直接一个论坛一个论坛的抓取下来。 <br />\r\n<div>&nbsp;</div>\r\n　　一天晚上抓下来数万张图片的，然后用acdsee整理微缩再上传，图王做事情很痴狂，乐此不彼，全部手工做的网站，坚持了一年，整理了上百万张图片。手工做了近50个图片网站。当时搜索还没有封网站，常常搜索图片一类的排在第一页的一大半都是图王的，50多个网站，虽然每个网站流量不大，几千ip，全部加起来流量很猛，图王是他的qq名字，所以因此而得名，那个时候图王认识了很大一批新型的站长，相互沟通学习，基本上是知无不说，跟很多未谋面的站长形成了铁关系，多年来的友情，积累图王的关系网。特别是在短信联盟以后，成为每家联盟的活跃分子。一方面帮联盟拉站长，一方面帮站长找联盟，联盟红火的2年，图王也交了2年的朋友， 图王太相信朋友，也上当过，吃过2次大亏。在跟k6停止合作以后，他一直帮上海一个朋友组建联盟，介绍了很多站长过去，最后联盟朋友消失，几十g的图片数据服务器也没了。后来一次跟北京的一个朋友合作推广日付联盟。朋友在支付过几天以后，也玩了消失，幸好金额不大，图王自己垫付了。从此他再也没跟联盟去合作，拉他做联盟的超过几十个公司，他都宛然拒绝，后来碰到04年的严打，严打前，图王悄悄将几十个图片网站低价抛售。乐的一身轻闲，天天买起了域名，研究起了seo，他也常常写点东西，搞流量，作弊什么的，在每个论坛都是点击率很高的，也常常对朋友建站方面，推广方面，怎么买广告、怎么做联盟广告方面进行指导，图王盛名就这样流传开了。 <br />\r\n<div>&nbsp;</div>\r\n　　图王帮助过的很多站长，很多后来通过网络赚到了钱或者把自己的站也做得很大，其中包括知名站点广捷居。03年底的时候，<a href=\"http://192.168.0.99/view/2178514.htm\" target=\"_blank\"><font color=\"#3366cc\">gjj</font></a>认识了图王，图王后来带动广捷居在自己的站上做广告，然后教如何弄搜索等，广捷居然后自己再研究。后来广捷居在彩信上发展起来，成就了gjj也成就广捷居站。类似很多站长的成功都离不开图王的帮忙。 <br />\r\n<div>&nbsp;</div>\r\n　　其实我个人认识图王是比较晚的，具体时间我都忘了，大概是05年。我之前一直做网站，做过各类网站，也包括后来的流客网，得到过图王不少指点。虽然我和图王聊天的次数也不是很多，一般没有事情不会打搅他，因为他自己的事情也很多，需要他帮助的站长无数。但是我通过网站和朋友，侧面了解到图王对中国站长的种种好处，也无意中推动中国互联网的发展，这些都是非常值得我们佩服的。 <br />\r\n<div>&nbsp;</div>\r\n　　每天看到图王的qq总是在线，在qq里对朋友也一直是乐此不彼，他现在在做一个站长资讯网www.2D29.CN希望这样的朋友更多一点，这样的网站更多一点后来的人少走一些弯路，更容易取得成功。 <br />\r\n<div>&nbsp;</div>\r\n　　最后，我替我和所有得到过图王帮助的朋友，向图王表示忠心感谢，也希望图王在以后的事业上取得更大的成功！ HEHE<br />\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('533','','1240057438','555','33','1','1','1','','<p>　阿飞，原名姚剑军。中国站长站创始人。1982年生人。目前身价千万。 </p>\r\n<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/33/1_20090418200404_25EwL.gif\" width=\"400\" height=\"316\" border=\"0\" alt=\"9.gif\" title=\"9.gif\" /></p>\r\n<p align=\"center\"><strong>　　中国站长站创始人　阿飞</strong></p>\r\n<p><strong>　　阿飞是成功的</strong></p>\r\n<p><strong>　　阿飞是成功的，无论从他以一个中专生的身份，到千万身价的过程，还是从2002年建立中国站长站，2003年早期中国站长站就出现在各大网址站首页名站推荐里。</strong></p>\r\n<p><strong>　　目前，中国站长站的盈利额每个月都在涨，实现了每个月都是最高盈利额奇迹。至于每月数值，阿飞含糊地说，大于20万。</strong></p>\r\n<p><strong>　　阿飞是专一的</strong></p>\r\n<p><strong>　　在互联网泱泱的大国里，阿飞只选中了为站长服务的网站，而且，又只选了，源代码下载这一项业务。盈利渠道就是广告。</strong></p>\r\n<p><strong>　　专注的投入，即为他更有效地利用了创业之初紧缺的资源，又让他着眼于每一处细节的提升。</strong></p>\r\n<p><strong>　　中国站长站现在拥有近三十个员工，主要还是技术人员；中国站长站目前成为行业名站，主要的盈利渠道还是一个：广告。中国站长站发展已经稳固成熟，但是前景展望仍然是：更多地为站长服务。中国的站长越来越多，看重站长的公司也越来越多，站长在中国互联网的地位起来越高，这似乎更注定了，阿飞专一的更长久的理由。</strong></p>\r\n<p><strong>　　阿飞是睿智的</strong></p>\r\n<p><strong>　　阿飞的睿智，在于他懂得量力而为、舍大取小。也更表现在他的善于营销。比如，他巧妙地在源码压缩里放入中国站长站的txt介绍文件、访问快捷方式，这为牢牢抓住站长起到非常大的作用，后来的很多源码下载网站也纷纷模仿阿飞的做法。</strong></p>\r\n<p><strong>　　他的睿智，还表现在他混迹于k666等论坛的时候，发现论坛顶部满满的广告，发现什么是站长最大的需要，瞅中了商机。</strong></p>\r\n<p><strong>　　阿飞也曾是盲目的</strong></p>\r\n<p><strong>　　2000年，阿飞上网的时候，随大流也做个人主页。然后就做了一个看似很大的网站：我爱我网。看起来很美，其实整个网站只有江湖游戏栏目比较有人气，当时在线的大概有几百人吧，每个月也有固定的收入。但他花费了很多时间在网站的其他栏目上，这些栏目的内容他却都没办法做精，白花了很大精力。这是他走过的最大弯路。他也曾经为了拥有一台服务器将江湖游戏包给了别人，然后去做本地门户站，等网站搭建起来后发现本地上网的人并不多，最后不得不关掉。</strong></p>\r\n<p><strong>阿飞也曾是脆弱的</strong></p>\r\n<p>　　人总是看到别人的成功心潮澎湃，创业的激情波涛汹涌，其实，每一个人的成功，都不容易。成功背后的不容易，似乎更值得警醒关注。</p>\r\n<p>　　中国站长站成长的路上，也曾困难重重，有几次差一点就关掉。2002年3月建站后，不久的7月份，因为^法**功的内容被公安机关搬走了服务器，因为数据全在上面，网站被关了一个月。那时服务器在山东，阿飞只能托山东的朋友去找公安拿。最后罚了款还是把服务器拿回来了，网站才重新开放。</p>\r\n<p>　　2004年初，阿飞的服务器被人DDOS攻击，连续攻击了半个月，就因为中国站长站不买他们的防火墙。这半个月时间，阿飞差不多没信心把网站开下去了。最终还是因为朋友的帮助才解决了问题，网站得以重开。</p>\r\n<p>　　其实还有，情感问题，导致的阿飞无心做站，萌生放弃的念头。</p>\r\n<p>　　也曾有过，早期有人出几十万想收购中国站长站，不由心动。</p>\r\n<p>　　<strong>阿飞告诉大家：</strong></p>\r\n<p>　　1. 不管碰上了什么事，坚持下来了，对自己经常做总结并做调整，阶段性地做一些事情。</p>\r\n<p>　　2. 量力而为、舍大取小。一开始不要做大而全的网站，很累，而且并不是那么好发展。一个人的能力是很有限的，过大过全的网站，无论在物质上还是精力上的投入都是巨大的，做站切记量力而行。</p>\r\n<p>　　3. 网站的内容是根本，扎扎实实将网站做好才能吸引用户。做得比较成功的个人站主题都比较单一。主题单一并不意味着内容单一。单一的主题，定位更明确，同时也更容易更深地内容挖掘，让网站真正有“料”，而不只是宽泛的皮毛。</p>\r\n<p>　　4. 一个好的网站＝好的内容+合理的宣传。这也是网站发展的精华所在。</p>\r\n<p>　　5. 要将眼光看远一点。作任何事情都要有明确的目标和详细可行的计划，还要有敢说敢做的性格，如果仅有计划和目标而不实际动手，那么计划永远都是停留在笔记本上的计划，只有用双手实践才能让它完美。</p>\r\n<p>　　只是，为什么收支还只能扯平？</p>\r\n<p>　　<strong>阿飞创业的故事情节</strong></p>\r\n<p>　　2000年，1982年生人阿飞中专毕业了。毕业等于失业，阿飞一直呆在家里，有大把的时间来无聊。无聊又没钱的人，网吧似乎是个不二选择。那时阿飞整天泡在网吧里，与游戏和个人主页为伍，前途一片迷茫。</p>\r\n<p>　　阿飞每月的上网费大于一千，这样无所事事，泡网花钱的孩子，一定是父母的心头之恨。2000年7月，是个里程碑似的日子，阿飞的个人主页，居然赚了8848和易趣的广告费三百多元。阿飞第一次，体验到了从网上赚到钱的感觉。</p>\r\n<p>　　2000年8月，一个大得承载了阿飞不着边际的宏伟理想的“我爱我网”建成了。我爱我网看起来很美，其实整个网站只有江湖游戏栏目比较有人气，当时在线的大概有几百人吧，每个月也有固定的收入。但阿飞花费了很多时间在网站的其他栏目上，只是这些栏目的内容他都没办法做精，白花了很大精力。</p>\r\n<p>　　2000年10月25日，阿飞进了厦门大学就读计算机信息管理专业。但他很快发现，大学里学不到他想要的东西。很多理论的东西，也没有办法用到实际应用上来。中专毕业的阿飞比其他同学早接触电脑，很多同学都向他请教电脑的事情。而且，对于同学们来说，当时有固定收入的阿飞，无异是个“款”，都很羡慕。阿飞应该感觉到骄傲才对，可是，棋无对手的他，突然觉得，那个大学毕业证，对他来说，没有什么意义。</p>\r\n<p>　　2001年6月，阿飞弃学回家，专心他的建网之路。至今问起他，对放弃大学学业，是否后悔。他答得很干脆，不会。他甚至觉得庆幸，他没有虚度三年光阴。阿飞认为中国的教育是失败的，包括他的公司招人，有很多人在大学三年虚度，走上社会，却什么都不会。全都很迷茫。阿飞庆幸他不是这群人中的一个，至少没有浪费这三年时间。</p>\r\n<p>　　在这期间，阿飞曾和两个山东人(我爱我网的用户)合买了一台服务器。为了要这台服务器，他将当时站上最火的并且有收入的江湖栏目让两个山东人运营，收入也归他们。后来这个栏目的人气下降，因为那时候网游已经火起来，阿飞清楚地记得，最开始火的是石器时代。这样，阿飞发现我爱我网没什么发展，因为网站上什么内容都有，一点特色都没有，除掉江湖，网站就是个垃圾了。拖着一个庞大的垃圾网站行走的阿飞，可以说终于累垮了也可以说非常聪明地，在2001年9月，关闭了我爱我网。</p>\r\n<p>　　然后阿飞，又试图建过地方门户，也曾经建过社区网站“梦里长安”，但都不能把阿飞带到理想的顶峰。</p>\r\n<p>　　这些年，为了做站的需要，阿飞长期泡在一些站长聚集的地方，比如K666和Yuzi。2002年的互联网，个人网站已经慢慢多起来。k666是一个站长论坛，人气很不错，还有一些源码下载，广告也做得满满的。yuzi是一家提供论坛等建站程序的，也会有一群站长经常聚在里面。但是阿飞发现他们网站做得并不好，并且，他想：随着网民越来越多，个人站长也将会越来越多，做一个针对站长服务的网站应该会很有前景。</p>\r\n<p>　　2001年底，阿飞分析酝酿着他的建站计划。他考虑从源码下载入手，当时个人站长或者中小型网站做站，很多都是用现成的源码，每个做网站的人电脑里都会放着各种各样的源代码(阿飞也同样)。于是阿飞把自己收集了很久的源码拿出来重新整理。一个人做其实特别累，而且可能做不好，他就找了QQ上的一个叫顽石的朋友来帮忙。</p>\r\n<p>　　顽石当时好像是在网吧上班，有很多的时间，阿飞告诉他要做的东西并希望顽石能帮他一起来做这个网站。顽石答应了，但他向阿飞表示只算是帮阿飞。可能顽石对能不能做起来这个网站心里并没有底。阿飞一直在说服他。</p>\r\n<p>　　阿飞拿了一套下载系统修改成自己需要的，并且自己制作网页。源码由顽石负责更新，阿飞负责更新以外的如程序修改、网页制作、网站合作这些事情。阿飞和顽石两个人没日没夜大概花了一个多月时间，将所有的源码分类整理，最后在02年的3月初推出了网站，当时网站其实只有一个源码下载栏目。</p>\r\n<p>　　中国站长站的域名阿飞也是找了非常久，第一个选择的域名是2001年底注册的chinazzz.net，即中国站长站的意思，当时没有钱可以买到更好的域名。2002年1月抢注了chinazzz.com。再后来，朋友推荐说cnzzz.com会更好记，于是换了cnzzz.com，在网站发布的时候用的域名其实是cnzzz.com。一直到后来抢注到了chinaz.com这个域名。</p>\r\n<p>　　网站规划先从源码下载入手，然后再做站长论坛，再扩展其他服务。那时个人站还都是租空间，阿飞也是同样。但此时阿飞发现，真正要做好网站，服务器稳定是非常重要的。为了能有一台自己的服务器，阿飞将我爱我网的江湖游戏运营权出让给了两个山东人，然后他又写了一份计划书，找老爸要来一部分钱，花了两万多买了一台服务器。</p>\r\n<p>　　中国站长站开放一个多月后，就有一家厦门的主机商找上门要投放广告。第一笔好像是100块钱做的浮动广告。营利模式在创建之初就想好了，就是做广告，直接卖广告给这些卖虚拟主机的人。只是他没有想到，利益会来的这么快。一直到现在，发展的速度比阿飞自己想象的快很多，他没有想到中国个人网站的数量会这么快增加到这么多。</p>\r\n<p>　　2003年，中国站长站已经有了十几万访问量，在个人站中已经有了一定的知名度，已经出现在包括hao123在内的各大网址站首页名站推荐里。很多主机商都自动找上门来要投放广告。</p>\r\n<p>　　2005年下半年，阿飞的公司正式成立。目前规模大概有近三十个人，盈利额每个月都在涨，实现了每个月都是最高盈利额奇迹。</p>\r\n<p>&nbsp;</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('534','','1240059129','556','33','1','1','1','','<strong>熊晓鸽简介：</strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/33/1_20090418200406_BlSMk.jpg\" width=\"800\" height=\"532\" border=\"0\" alt=\"9.jpg\" title=\"9.jpg\" /></p>\r\n<p>&nbsp;被誉为“中国引入高科技产业风险基金的第一人”、“中国信息的使者”的熊晓鸽先生，出生于湖南湘潭市，做过4 年电工；1981年毕业于湖南大学外语系；1984年，在机电部任翻译和英语教师的他以全国统考总分第三名的成绩录取为中国社科院研究生院新闻国际英语写作专业研究生；1986年秋天，他在新华社国际部工作时，获得美国波士顿大学全额奖学金赴美留学。1987年底，获得大众传播学硕士学位后，进入费莱彻法律与外交学院攻读国际经济与商理博士学位。攻读博士学位期间，他在全球最大的出版机构卡纳斯公司工作，担任了《电子导报》亚洲版的主任编辑。1991年秋，荣获美国最具影响力的美华协会“99最佳新闻报道奖”和“留美最杰出青年”称号。1993年，他代表 IDG集团投资2000万美元与上海科委合作，成立中国第一家合资技术风险公司，熊哓鸽亲自担任总经理；同年，与广东银行合作，成立另一家技术合资公司。1998年，代表 IDG集团策划与国家科技部建立科技风险投资基金，在今后七年内向中国的技术产业提供十亿美元的创业基金</p>\r\n<p>过去几年随着一家又一家技术型公司的上市和投资“选秀”节目《赢在中国》的热播，怎样获得风险投资，从熊晓鸽手中获得投资成为众多年轻人的理想。</p>\r\n<p>　　如果你熟悉一个人的经历，你就更容易知道他的取舍。</p>\r\n<p>　　<strong>77级大学生</strong></p>\r\n<p>　　熊晓鸽出生于湖南省湘潭市。</p>\r\n<p>　　熊晓鸽的青少年时代恰逢文革，他的父亲从部队转业后在当地钢厂担任干部，经过父亲的安排，1973年，熊晓鸽到工厂当了一名电工。</p>\r\n<p>　　1977年恢复高考，一直在自学中的熊晓鸽顺利考上湖南大学。他报考的是当时颇为热门的工业自控专业，不过此时学校正在招募具有一定语言基础的学生以成立英语专业，熊晓鸽被选上。</p>\r\n<p>　　77年高考入取率是4.8%，熊晓鸽事后总结，这意味政府会给你安排一份好工作，1981年，大学毕业后熊晓鸽第一次报考研究生没有通过，随后被分配到机电部担任翻译和英语教师。</p>\r\n<p>　　在湖南大学上学期间，熊晓鸽有一篇文章在《湖南日报》头版发表，内容为美国外教教他们学习英文，这激发了他最初对记者工作的兴趣。1984年，他以全国统考总分第三名的成绩，被录取为中国社科院研究生院新闻系英语采编专业的研究生。</p>\r\n<p>　　当时熊晓鸽就读的这个班是由新华社出资，其目的就在于定向培养记者。熊晓鸽因为曾经是军人的父亲的影响，一度希望成为一名战地记者。1986年，整个上半年，熊晓鸽都在新华社中东非洲组实习。</p>\r\n<p>　　在就读研究生期间，熊晓鸽与学校的数名外教相处融洽。其中一名来自哥伦比亚大学的外教建议熊晓鸽去美国学习新闻。他认为中国的新闻从业人员仍然有需要向外界学习的地方，熊晓鸽先是有些犹豫，既然他的职业生涯已经颇为明确，随着对外界了解的增加，最后“顿悟”，决定接受老师的这个建议。</p>\r\n<p>　　熊晓鸽无疑是赶上了赴美留学的好时间，在提供美国老师的推荐信，及十篇在《中国日报》发表的英文文章之后，很快就获得波士顿大学传播系的录取通知书，并且大学提供全额奖学金。</p>\r\n<p>　　作为一个花絮，当时的熊晓鸽并不知道，赴美留学需要考托福，否则就不能获得赴美签证申请表，当然这对英语专业人士来说不构成什么问题，熊晓鸽准备了两周，考了617分，顺利通过。</p>\r\n<p>　　熊晓鸽清理了他在北京的财产，买了一张飞往美国的机票和一些他以为用得着的生活用品，当时人们的收入还不高，而美元却颇不便宜，同早期赴美的中国留学生一样，在忙完这一些之后，熊晓鸽就只剩38美元了。</p>\r\n<p>　　在父亲的挥手送别下，这个原本生活已经稳定下来的中国年轻人带着38美元来到了美国。</p>\r\n<p>　　<strong>一个湖南人在美国</strong></p>\r\n<p>　　让熊晓鸽记忆深刻的是他在美国的头两天，在抵达美国之后，熊晓鸽的担保人，也就是那位哥伦比亚大学的老师将他送到学校的临时宿舍，在为其支付了两个晚上计44美元费用之后，塞给他100美元，告诉熊晓鸽，把账单寄给他，他来付钱。</p>\r\n<p>　　第二天，熊晓鸽去学校报到，找到了一份助教的工作，每月可以赚375美元，然后找到了一个四人合租的房子，每月只需要100美元，搬家的时候又找到了一份组装自行车的工作。熊晓鸽给担保人打电话，告诉他不再需要代为支付账单了，担保人说：“我们全家都为你骄傲!”</p>\r\n<p>　　经济上的压力仍然存在，虽然波士顿大学传播系的课程为两年，但是熊晓鸽只有一年的奖学金。除了加倍的学业之外，熊晓鸽还要不断打工获得一些收入。最终熊晓鸽用八个月的时间完成了所有的学分，并且撰写了论文，获得硕士学位。熊晓鸽事后总结：外人可能觉得这是一件骄傲的事情，但他只是觉得压力。</p>\r\n<p>硕士毕业后，波士顿大学给予熊晓鸽攻读博士的奖学金。但不久熊晓鸽又收到了弗莱彻法律与外交学院的奖学金，该学院为塔弗茨大学与哈佛大学合办，于是转学至弗莱彻学院，攻读国际经济与商理博士学位。</p>\r\n<p>　　熊晓鸽之后的职业生涯受到了波士顿大学传播学院的肯定，1998年，学院授予熊晓鸽“杰出校友”称号。表彰他在新闻出版领域内的成就，称赞他是专业领域内的一位杰出的代表。一同获奖的还有007系列影片《明日帝国》的剧作人布鲁斯-费尔斯坦，美国有线电视HBO台副总裁乔-玻尔。</p>\r\n<p>　　在攻读博士期间，其导师的朋友创办了一份面向中国的电子类刊物，需要一名既懂电子又懂新闻的人，熊晓鸽去应征，顺利被卡纳斯集团聘用。本来打算是课余兼职，但是最后在《电子导报》一干就干了三年。因为半工半读，一直没有完成博士论文。</p>\r\n<p>　　在《电子导报》工作期间，恰逢时任中信集团董事长的荣毅仁访问美国，在弗莱彻法律与外交学院演讲，而《电子导报》是晚宴的赞助商。当晚来了很多业内人士，包括IDG创办人麦戈文。</p>\r\n<p>　　席间麦戈文对荣毅仁谈起了他的《计算机世界》，麦戈文让熊晓鸽帮助翻译一下，这样熊晓鸽就认识了他以后的老板麦戈文。</p>\r\n<p>　　<strong>[麦戈文与IDG]</strong></p>\r\n<p>　　急速发展的信息产业在催生苹果、微软这样的行业巨头的同时，产业本身也产生了对市场资讯的大量需求。</p>\r\n<p>　　1964年麦戈文以5000美元创办了一家计算机市场研究公司，即国际数据公司（IDC），三年后，国际数据集团公司（IDG）成立。</p>\r\n<p>　　麦戈文对中国市场情有独衷。他是第一位和中国大陆建立合作出版事业的西方人。1980年他与第四机械工业部即后来的电子工业部合资成立了中国计算机世界出版服务公司，随后出版了《计算机世界》周报。</p>\r\n<p>　　2000年2月28日，麦戈文向其母校麻省理工学院捐款3.5亿美元，这也是美国历史上个人向大学提供的最大一笔捐款。麦戈文应该是美国大公司高层领导人中拜访中国次数最多的企业家。就在前不久，第102次来到中国的麦戈文当选为2007年中国经济年度人物。</p>\r\n<p>　　1991年，熊晓鸽获得了绿卡，这个时候他所在的《电子导报》已经停刊，卡纳斯集团觉得基于当时的环境在中国发展刊物比较难，希望熊晓鸽在香港和台湾工作，而熊晓鸽仍然希望同国内有更多联系，这样他就尝试联系了麦戈文。</p>\r\n<p>　　一谈之下，两人颇为投缘。当年的11月6号，熊晓鸽正式入职IDG。入职后的第一份工作是把国内当时的《国际电子报》合并到《计算机世界》。麦戈文对熊晓鸽的办事方式较为满意，当时麦戈文正在考察亚太地区市场，于是让熊晓鸽陪同考察。</p>\r\n<p>　　一路中，两人交换了各自对新兴市场的看法。当时IDG亚太地区业务分别有两位经理人打理，其中一个是香港人，常驻香港，负责新加坡、马来西亚等地，另一个是美国人，常驻台湾，负责整个亚太区。麦戈文提出，三个人共同拿出一份报告。</p>\r\n<p>　　恰逢年末，圣诞节前夕，两位经理人都去度假了，而熊晓鸽则努力完成了这份报告。这样，麦戈文决定任命熊晓鸽为亚太区主任，后来则扶正为亚太区总裁。</p>\r\n<p>　　就这一段戏剧性的经历，熊晓鸽事后在接受新浪访谈的时候回忆：“完了一想，我说虽然我的报告采用了，我想看看人家的，我说麦先生你把他们俩的报告给我看看，他说他俩都没交，说他们要去度假，很忙，所以你就照你的做吧，他们俩另外安排工作，所以后来美国驻台湾的地方也撤回去了，后来他也离开公司了，另外一个香港的总经理，他后来移民到加拿大去了，没有听过他们怎么样说我不好，因为他们大概也没什么办法，因为给了他一个机会，他们俩都不写，那就不能怪我。”</p>\r\n<p>&nbsp;</p>\r\n<p>　　<strong>IdgVC之赢在中国</strong></p>\r\n<p>　　1993年，熊晓鸽代表IDG投资2000万美元与上海科委合作，成立中国第一家合资技术风险公司“太平洋技术风险投资（中国）基金”，后更名为“IDG技术创业投资基金”，熊晓鸽任总经理。</p>\r\n<p><font color=\"#666666\">【独家稿件声明】凡注明 “和讯网”来源之作品(文字、图片、图表及音视频)，未经和讯网授权，任何媒体和个人不得全部或者部分转载。如需转载，请与和讯网(010-85650997)联系；经许可后转载务必请注明出处，违者本网将依法追究。</font><br />\r\n　1998年10月27日IDG与科技部签署合作备忘录，计划在未来7年时间在中国建立运营一笔风险投资基金以扶持中小科技企业。事后在接受《三联生活周刊》的采访时熊晓鸽说：“这与其说是lDG在海外做的最大一笔投资，不如说是麦戈文商业生涯中最大的一个赌注。”</p>\r\n<p>　　当时国内对风险投资这个概念缺乏了解，相信那一时期，熊晓鸽面对过足够多困惑的目光。另一方面，地方政府希望这种投资局限于特定区域，或者是特定开发区，否则就不可能提供相应优惠措施。合资企业只有外方占股超过25%，才可享受到政策优惠。IDG是同地方政府合作的，并且风险投资倾向于小额占股，这样最终很难在合资企业拥有超过25%的股份。</p>\r\n<p>　　一个更为关键的问题是，熊晓鸽本人并没有从事过风险投资行业，他对风险投资的认识来源于在美国从事记者期间对相关人士的采访。2007年2月熊晓鸽在接受《京华时报》采访时回忆说：“感觉这就是个不靠谱的事情。”</p>\r\n<p>　　<strong>[猴子称大王]</strong></p>\r\n<p>　　根据熊晓鸽本人提供的数字，IDG的第一支基金是从1993年开始，到2003年为止，年均回报率为36%。第二支基金是从1999年开始，回报率超过了40%。</p>\r\n<p>　　IDG已经投资了200多家公司，在海外上市的中国概念股中，一半以上的公司，IDG在不同阶段介入过。IDG投资过的企业包括腾讯、百度、搜狐、搜房、金蝶、当当、3721、易趣，在逐渐兴起的Web2.0项目中，IDG投资了土豆、讯雷、中搜。</p>\r\n<p>　　在所谓TMT领域，可能唯一具有高知名度，但是IDG又没有介入的就是阿里巴巴了。熊晓鸽事后解释，马云最初获得的500万美元的风险投资是由高盛牵头在硅谷敲定的，随后软银开始大量投资。他始终无缘介入。</p>\r\n<p>　　IDG在中国风险投资领域成功的理由很简单，用熊晓鸽的话说就是：山中无老虎，猴子称大王。随着中国产业结构升级，在这一过程中，融资需求产生了很大的变化，就在其他海外机构仍然处于观望时，IDG在一个恰到好处的时机介入了这一领域。</p>\r\n<p>　　由于中国本来就没有风险投资的历史，虽然IDG团队大都为半路出家，但可能正因为如此，随着时间的积累，形成了一套更贴近市场现实的评估标准。另一方面，随着IDG投资项目的增加，形成了“规模”优势，具体一个项目涉及的相关企业，可能正是IDG注资的公司，一方面资讯更为充分，另一方面IDG可以从中牵线搭桥推动企业发展。</p>\r\n<p>　　随着中国市场被看好，风险投资领域本身竞争激烈。IDG开始由幕后转向台前，正在热播的创业类选秀节目《赢在中国》，整个制作费用为3000万元，由三家合作方分担，IDG提供了其中1000万元。熊晓鸽开始被广为人知。</p>\r\n<p>　　<strong>怎样拿到熊晓鸽们的钱</strong></p>\r\n<p>　　从网站留言看，最初的一段时间熊晓鸽在《赢在中国》中的表现，很是让一些受众不适应，有网友在自己的博客上写道：“提问时刁钻、刻薄，还经常不留情面地打断选手的回答，最让人受不了的是他那斜勾勾看人的目光。”</p>\r\n<p>　　这引伸出一个问题，熊晓鸽们取舍投资项目的关键是什么？</p>\r\n<p>　　实际上中国风险投资的成功率非常之高，高到不能对应“风险投资”这个名词。印象上，风险投资可能投10个项目，能够成功1个。而在中国这个数字要高得多，熊晓鸽认为这个数字就IDG来说正好相反，也就是投资10个项目，5个都成功了，熊晓鸽认为IDG只有12%的项目属于失败。</p>\r\n<p>　　业内人士认为，中国市场，规模大、增长快、成本低。作为TMT产业最重要的人力资本这一块，目前上海工程师的薪酬仍然只有硅谷的1/10。</p>\r\n<p>&nbsp;</p>\r\n<p>　　除上述的原因之外，很重要的一点，中国经济体现了后发优势，许多商业模式都在成熟市场得到了很好的检验，相应中国的企业存在拷贝的机会。几乎每一家中国创新企业都有其海外原型，百度与谷歌、搜狐与雅虎、当当与亚马逊，更不用说Web2.0企业了。</p>\r\n<p>　　阿里巴巴旗下的产品也是有其原型的，只是大家相对陌生一些，中国供应商实际上是展会推广服务，环球资源网在很早之前就在提供类似服务，而诚信通的买家互评机制也是借鉴了eBay在C2C上的做法。</p>\r\n<p><font color=\"#666666\">【独家稿件声明】凡注明 “和讯网”来源之作品(文字、图片、图表及音视频)，未经和讯网授权，任何媒体和个人不得全部或者部分转载。如需转载，请与和讯网(010-85650997)联系；经许可后转载务必请注明出处，违者本网将依法追究。</font><br />\r\n与此对应，国内的风险投资商会更倾向于拷贝型的业务，而不是基于本地市场的业务创新。虽然也有例外，比如分众传媒。创新没有受到资本更多的鼓励。</p>\r\n<p>　　<strong>[所谓执行力]</strong></p>\r\n<p>　　就根本来说，风险投资是要求相对短时间内获得高额回报的融资方式。</p>\r\n<p>　　风险投资商会从两个方面考虑问题：首先是执行人的背景，这意味他可能推动的社会资源，另一方面则是从项目的可操作性着眼。</p>\r\n<p>　　IDG是《时尚》的合作伙伴，媒体在中国仍然是高壁垒的行业，至少，获得刊号非常困难。《时尚》创办人吴泓通过努力获得其主管部门国家旅游局的支持，主管部门不但在最初的时候支持吴泓创办《时尚》，并且在2000年把《中外饭店》和《中国旅游导报》划转由《时尚》杂志社主办。《中外饭店》改为《时尚家居》重新出版，《中国旅游导报》则改为《时尚健康》。</p>\r\n<p>　　而IDG投资的搜房网，其创办人莫天全之前担任过道琼斯Teleres亚洲及中国董事总经理，道琼斯Teleres是美国最大的互联网房地产资讯服务商，实际上莫天全参与道琼斯Teleres发展的最初阶段。</p>\r\n<p>　　另一方面，所从事的业务越直观，越简单越好，这意味可操作性。搜房网的业务模式很简单，足够的流量推动在线广告收入的增长。而中国房地产行业在很长一段时间都可以看好。或者换一个角度，就《时尚》而言，其从业人员需要足够多的技能，但是并不像财经内容那么困难。</p>\r\n<p>　　为什么一段时间网站都倾向于“娱乐化”，这可能不是网站管理层的认识，体现的是投资者的要求。娱乐服务的商业模式很简单，对员工没有特殊的要求，增长的流量推动在线广告收入的增长，既然在线广告市场一直保持增长的势头。当然，今天的问题是，太多人主意想到一块去了。</p>\r\n<p>　　最忌讳的是一个模糊的目标，如果一项业务推动得不顺利，那么风险投资商至少还可以选择放弃，但是一个难以评估的结果，会让投资者无所适从。</p>\r\n<p>　　随着《赢在中国》节目演绎到第三季，唯一不变的评委熊晓鸽在镜头前更加自如，但是海选式的筛选机制，是否能够寻觅到合适的投资机会，仍然有待案例证明。</p>\r\n<p>　　<strong>时尚熊晓鸽</strong></p>\r\n<p>　　2006年9月30日，北京东方君悦大酒店，在第四届“Bazaar明星慈善夜”慈善拍卖活动现场，熊晓鸽以99999元竞得Fendi B手袋一个，这无疑是一个女用手袋，不知道他事后打算如何处理。</p>\r\n<p>　　2007年12月8日，熊晓鸽出资100万元人民币，认养成都大熊猫繁育研究基地2006年出生的一对双胞胎大熊猫，并将其命名为“乐山”和“乐水”。这应该定义为一个慈善行为，但是也有浓浓的时尚意味。</p>\r\n<p>　　我们知道，IDG是《时尚》的合作伙伴，1997年IDG和《时尚》合资成立了时之尚广告公司，但是IDG并没有时尚媒体资源，后来经IDG的介绍，《时尚》购买了美国赫斯特出版集团旗下的Cosmopolitan和Esquire的版权。</p>\r\n<p>　　熊晓鸽对“时尚”的兴趣有逐渐增强的倾向。2006年8月，IDG联手《时尚》推出了时尚网站Yoka..com，熊晓鸽亲自担任这家公司的董事长。这家网站上汇集了《时尚》旗下众多刊物的电子版，只是时间上稍微滞后一些。</p>\r\n<p>　　熊晓鸽解释：随着中国经济的发展，客户对于高端时尚品的追求欲望将更加强烈。而Yoka..com专注于为高端品牌、高端人群提供服务，契合了当前国人追求时尚的趋势，对应了国际一线品牌对中国进行渗透的需求。</p>\r\n<p>　　或者有兴趣方面的原因，但是某种意义上也说明了他对趋势的理解，中国社会正在迅速的中产化，以往赢得中国市场的关键始终在于价格，这种情况正在发生改变。同技术型产品不同，基于品牌形成的消费偏好能够实现长期的溢价。</p>\r\n<p>　　<strong>结语</strong></p>\r\n<p>　　有时候猛然间会感觉到，这个世界的变化实在是过于迅速，要很努力才能跟得上社会的发展。熊晓鸽在过去30年的时间里通过自身努力赶上了','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('535','','1240059129','556','33','1','0','1','','社会的节拍。而跟上浪潮是所有人共同的课题，不只是风险投资，我们需要尽可能适应所有新生的事物。</p>\r\n<p><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr><td style=\"color:#666;font-size:14px;\">　　【独家稿件声明】凡注明 “和讯网”来源之作品（文字、图片、图表）， 未经和讯网授权，任何媒体和个人不得全部或者部分转载。如需转载，请与 010-85650997 联系；经许可后转载务必请注明出处，并添加源链接，违者本网将依法追究责任。</td></tr></tbody></table>\r\n</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('536','','1240060838','557','34','1','1','1','','<p>&nbsp;</p>\r\n<p>善水：大家好。这里是 本<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/34/1_20090418210424_cSiW4.jpg\" width=\"477\" height=\"311\" border=\"0\" alt=\"44.jpg\" title=\"44.jpg\" />站站，能够达到高 度的默契和一致，这样就使得我们的创新性和生产效率得到了保证，这里透露下门户通管理团队的人员情况：其实只有4个半人，总体负责：我 ，论坛管理员：比邻天堂，编辑：一滴水，专题编辑：senlon，还有半个美工：逛逛，如果说我们为什么能在这么短的时间，起跳到一个高度 ，我觉得最大的收获还是：团队的力量真的是无穷的!作为一个团队的负责人，你必须尽可能的去激励你的团队的战斗力，同时尽可能的从策 划着手去减少犯错误的几率，我一直也比较认同：高手之间的竞争就是比谁犯的错误少，同时还有一点就是要制定一个较高的目标，去引领和 激励你的团队的斗志，我们在去年创立伊始，就将目标定在了：08年底前注册人数达到10万会员，同时挺进国内站长类社区四强行列这样的目 标。<br />\r\n　　善水：除了你上面讲的那些，阿凯认为门户通之所以能够占据目前的优势，当初的哪些决策是起到不可估量的作用的?<br />\r\n　　阿凯：我还是坚持认为：认真做好市场调研，最大程度的少犯错误，只有少犯错误，本来少的人员和资源才不会浪费，也才能够做到有的放矢 ，另外如果错误犯的多了，你的团队的斗志也会开始涣散，怀疑和动摇也将蔓延。<br />\r\n　　善水：运营门户通一年来，阿凯是怎么样将网站推广与自身的产品相结合的?有没有什么好的经验分享?<br />\r\n　　阿凯：你问到一个根本的问题上来了，呵呵，那就是--运营之道，门户通本身的推广和产品说实话和大家没有什么不同，都是差不多的套路， 只是我们非常的重视日常的运营工作，不断的从产品改进和创新方面，满足用户的细微需求变化，只有产品强大了，高度自动化了，我们的人 才可以腾出功夫来天天搞创新，只有天天的创新不断的得以实践和应验后，团队的成就感和用户的体验也都才会不断增强。<br />\r\n　　另外，就是要听得进去用户的反馈和意见，虚心接受用户任何方面的建议，哪怕是某些上来就看的比较荒谬的看法，还是那句话：用户是最好 的老师，千万别排斥你的用户和意见<br />\r\n　　再有，运营工作也要围绕推广来进行，运营的再好，也只是上你站的人才比较了解，还需要不断的通过媒体将好的活动推广出去，形成良性循 环，当然在推广过程中，还要结合不同媒体的特性和爱好，来设计推广形式，让人能比较愉快的接受而又不会腻烦。<br />\r\n　　善水：阿凯作为一个seoer，是怎么发挥seo在门户通推广时的作用的呢?seo在门户通的推广中又是占据什么样的位置呢?<br />\r\n　　阿凯：先摆明一个观点：seo是一个底层架构，但一定不要神话它，seo救不活一个网站，一个好的创意或经典广告语也同样搞活不了一个网站 ，我们真的需要的是持续创新，不断进取和改进。<br />\r\n　　seo在门户通这里，一开始就被摆在了一个很重要的位置，俗话说缺粮又缺钱，再不重视seo我们还有什么可以倚重呢?所以在门户通早期的策 划过程中，我们力求从架构、到内容、再到论坛，在各个频道和栏目甚至在专题页面，都务必重视seo的规范性和实施工作，同时我们门户通站 长社区里也有不少热心的会员，提出了一些改进意见，也都不断的得到实施和改进，最后还有一点就是定期查看和分析统计数据是非常必要的 ，同时还要针对一些流量较大，又和你的网站受众密切相关的词，做重点的优化和规划工作，还是那句话：做事要抓重点，基础功夫做好做足 了，我们才能腾出功夫做更多事情和创新。<br />\r\n　　善水：除了自身的努力、团队的协助外，阿凯能够取得当前的成绩，不同于其他白手起家的草根站长，你所占据的优势是什么?我想门户通这 个品牌在当初也是占据一定的优势的。<br />\r\n　　阿凯：呵呵，当时门户通在我来之前确实是没有怎么推广过的，好像连一篇软文也没有过，除了产品，基本还是从零开始的。<br />\r\n　　我觉得自己最大的一个优势，还是创新，打个比方说，门户通站长社区也是用的DZ，甚至是6.0版本，但是我们做了将近一年的创新和改进，到 如今已经和绝大多数论坛看起来都迥然不同了，我们内部半年前都说是不是已经改进的差不多了，实际的情况是到今天还在不断的改进。<br />\r\n　　如果说非有什么不同的话，那可能是赢利压力不是那么的痛彻心扉，呵呵，不过内部压力还是蛮大的，干不好一样随时会走人，我们内部在这 个问题上达到了高度一致，就是一群年轻人在一起，一定要做成一件事情。<br />\r\n　　善水：门户通运营之初的经营理念是什么?现在有没有改变?<br />\r\n　　阿凯：核心理念基本没有什么变化：2G全能空间鼎力支持站长创业!<br />\r\n　　但是随时我们网站和影响力的不断增强，也会不断的外延到站长所关注的更多方面上，今年开始我们重点推广的将是：兴趣广告这一平台，实 际上今后门户通不仅要提供高质量的免费空间给站长，也还要让站长们能通过“兴趣广告”这一平台获得实实在在的赢利。<br />\r\n　　善水：关于论坛人气方面的问题。阿凯着手策划调动会员们的积极性是以什么为出发点?阿凯在每一次的策划时，支持你的观点，认为这次策 划是可以成功的根据有哪些?目前论坛的人气达到阿凯的预期目标没有?差距有哪些?为什么没有达成?阿凯近期有没有新的策划活动，预先 公布下?<br />\r\n　　阿凯：目前论坛人气方面还远没有达到我们的预期，特别是发帖量方面还需要加强一些，不过这个问题也和我们并不强制新会员回复发帖有一 定关系，对门户通论坛的主要管理思想，还是推荐无为而治，相信大家都是好同学。<br />\r\n　　论坛活动策划方面，我们还是比较关注的是：实用，好玩，应时这几点，最简单的你把大家召集一起来，一定要有一个好的来由吧，让大家通 过共同参与造就和分享成就感，我觉得这是论坛活动的一个关键，门户通论坛目前我们比较自豪的一点是：<br />\r\n　　这里可能是互联网上活动最多，互动最丰富的站长社区，事实的情况是我们的论坛有将近一百多个活动策划在跑着，但会根据不同的时期和热 点来推某些活动。<br />\r\n　　近期的一个活动也借admin5的宝地宣传一下：4月8日是我们门户通正式上线一周年庆典，最近将邀请一些知名站长给我们写一些寄语，这里也 请更多网友有空也常来门户通逛逛。<br />\r\n　　善水：呵呵，4月8日的门户通论坛一定非常热闹的，绝对值得站长们去看看。阿凯，作为老站长，一定很明白站长在辛辛苦苦做好站之后，看 到网站的流量越来越少时那种越来越急躁的做站心理，我想问一下，作为一个推广门户通网站且卓有成效的负责人，关于网站推广这块可以给 站长们支下招吗?<br />\r\n　　阿凯：方向的正确性很重要，还是推荐在大家积累了一些经验后，尽量选择做一些有前景，有广阔市场空间的网站项目，该放弃的时候一定要 学会放弃，我本人不是很赞成：盲从和蛮干，但是初学者来说是没有什么捷径可言的，唯有不断的去实践和尝试，直到你有足够的经验和智慧 去分辨什么是好项目，什么是坏项目，哪些机会一定要把握住等等。<br />\r\n　　好的推广源自好的产品和内容，在推广伊始，务必把你的产品和内容做好，同时做好用户体验和SEO,否则你花了大力气推广来的人气，也没有 足够的漏斗可以承住。<br />\r\n　　善水：好了，节目已经尾声，最后阿凯还有什么话想要补充一下的吗?<br />\r\n　　阿凯：呵呵，感觉你的采访很细致，谢谢admin5的采访，希望站长们有时间多到门户通论坛坐坐。<br />\r\n　　善水：好的，非常感谢阿凯在百忙之中抽出时间参与到A5的站长访谈中来，同时我们也希望可以看到更多类似如阿凯这样的站长，走到我们A5中来，与我们分享自己宝贵的做站经验、运营心得、盈利模式以及推广之道。非常感谢默默给与A5支持的站长们，谢谢大家！<br />\r\n<br />\r\n更过精彩站长访谈，尽在admin5站长采访专题：！</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('537','','1240061182','558','34','1','1','1','','<font size=\"4\"><strong>访谈嘉宾：　　371数据中心（河南磐石网络发展有限公司）CEO 吴高远<br />\r\n</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><span><b><br />\r\n<font size=\"4\"></font><p align=\"center\"><font size=\"4\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/34/1_20090420140400_NQScG.jpg\" width=\"363\" height=\"363\" border=\"0\" alt=\"1.jpg\" title=\"1.jpg\" />&nbsp;<br />\r\n<br />\r\n　　河南磐石网络发展有限公司IDC网络运营商，始终围绕IDC产业做不断的深入开发并且推出了具有自主知识产权的产品。在开发软件、互联网、网站建设应用和系统平台开发等方面始终保持领先地位，并获得了社会各行业的广泛赞誉和认同。 公司成功运营了----www.371.com---371数据中心，</font></p>\r\n&nbsp;<br />\r\n<br />\r\n　　河南磐石网络发展有限公司IDC网络运营商，始终围绕IDC产业做不断的深入开发并且推出了具有自主知识产权的产品。在开发软件、互联网、网站建设应用和系统平台开发等方面始终保持领先地位，并获得了社会各行业的广泛赞誉和认同。 公司成功运营了----www.371.com---371数据中心，<a href=\"http://www.jdjsq.com------/\" target=\"_blank\"><font color=\"#0070af\" size=\"4\">www.jdjsq.com------</font></a><font size=\"4\">简单加速器等产品和服务 ，公司始终公司始终以不懈的努力、更高的目标来要求自己，在不断完善自身管理模式和提高技术研发能力的同时，促进中国科技产业的发展。<br />\r\n<br />\r\n<b><span style=\"color:#666666;\">　　访谈正文：</span></b><br />\r\n<br />\r\n　　IDC风云榜： 在电信重组背景下，对IDC行业产生了怎么样的深远影响，作为企业本身您是如何看何看待这一次重组带来的机遇与挑战？<br />\r\n<br />\r\n　　吴高远：资源的整合能更好的优化服务。企业如果能够抓住契机，重点进行突破，找到适合自己发展的方向，会为企业带来更大的利益。<br />\r\n<br />\r\n　　IDC风云榜：今年是奥运年，奥运给中国带来很多的契机，但同时也给中国IDC行业带来诸多的挑战（比如奥运封网），请问您是如何看这奥运的带来的挑战以及后奥运时期对IDC市场产生的影响的？<br />\r\n<br />\r\n　　吴高远：有更多面向世界的机遇，也有更多的海外企业来华，如果在国内建立网站节点的话，对IDC肯定是个促进。<br />\r\n<br />\r\n　　IDC风云榜：近期互联网行业很多人都喊出了\"过冬论\"的说法，请问您是怎么看待互联网对IDC行业所带来的影响，您企业本身又是做哪些应对的？<br />\r\n<br />\r\n　　吴高远：企业都在节约成本，IDC也是成本的一部分，所以更需要性价比高的IDC.<br />\r\n<br />\r\n　　IDC风云榜：近期IDC行业出现像中索、网住等公司相继倒闭的事件，您作为这个行业的从业者是如何来看待这样的事情，同时又给您企业的发展带来哪些启示的？<br />\r\n<br />\r\n　　吴高远：优胜劣汰是自然法则。只有行业的领先者才能吸引到更多的客户。市场有需求，才会有相关企业存在，不适合的必然会成为历史。<br />\r\n<br />\r\n　　IDC风云榜：您觉得2010年的IDC行业会如何发展，你们企业本身又有哪些规划？<br />\r\n<br />\r\n　　吴高远：更多的为客户着想，把握客户心理，来调整企业战略思路，为企业客户节约IDC成本是09年IDC行业的趋势。<br />\r\n<br />\r\n　　产业升级是必须的，现在IDC最大的问题就是\"同质化\"，如何突出自己的服务特色，是企业发展的一个重要指标。<br />\r\n　　发展融合或许是一个必然的趋势，这可以使资源配置最优，包括硬件、软件、人员等方面。<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;IDC风云榜：广大站长是我们IDC的主要消费群体，针对一些新创业的站长371数据中心又做了那些工作呢？<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;吴高远：371数据中心针对站长群体推出了1G空间99元，COM域名注册39元活动，这个价格水平上我们是亏钱的，但是能为广大站长做点事情，扶持中国网络行业的发展做尽一点努 力是值得的<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;IDC风云榜：贵公司还有一些什么大的战略呢？<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;吴高远：我们自己开发的加速器软件也是基于IDC的一个应用，我们公司一直以来把IDC的基础服务做为我们公司的核心业务以后也会围绕这个核心业务做一些开发，宗旨是为了提高用户的感受，会在服务上更进一步。呵呵，我们公司是扎根在IDC行业了。另外我们公司会继续建设双线多线机房提升服务品质。<br />\r\n<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IDC风云榜：</font><a href=\"http://www.alexeidc.com/\" target=\"_blank\"><font color=\"#0070af\" size=\"4\">www.alexeidc.com</font></a><br />\r\n<font size=\"4\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 371数据中心</font><a href=\"http://www.371.com/\" target=\"_blank\"><font color=\"#0070af\" size=\"4\">www.371.com</font></a><p>&nbsp;</p>\r\n</b>','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('538','','1240061760','559','34','1','1','1','','<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/34/1_20090418210411_MAuzU.jpg\" width=\"500\" height=\"333\" border=\"0\" alt=\"1.jpg\" title=\"1.jpg\" /></p>\r\n<p>中国移动G3笔记本发布暨合作伙伴加盟仪式在北京举行。中国移动正式宣布与联想、戴尔、惠普、海尔、清华同方、方正等17家国内外PC厂商开展深度合作，共推出29款中国移动定制G3笔记本。此举开创了国内运营商与PC厂商大规模合作的先河，标志着3G（TD-SCDMA）产业化发展取得重大进展。对于用户来说，上网本已经开始向手机发展，当年可以有预存话费换手机，如今也可有条件的“白送”笔记本。<br />\r\n<br />\r\n<img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/34/1_20090418210415_iM0Xb.jpg\" width=\"500\" height=\"333\" border=\"0\" alt=\"1.jpg\" title=\"1.jpg\" /><br />\r\n<br />\r\n<br />\r\n中国移动副总裁鲁向东（中）与17家合作伙伴举杯共庆<br />\r\n<br />\r\n&nbsp; &nbsp; 中国移动作为本次发布会的东道主，邀请了17家合作伙伴的高层领导出席，这种国内PC厂商高层云集的场面即便是在英特尔的倡导下也难得一见。联想大中华及俄罗斯区副总裁 刘杰、中国惠普信息产品集团(PSG)副总裁兼总经理 张永利、戴尔全球副总裁、大中华区消费业务总经理 杨超均上台致辞。足见3G的第一炮已经在国内外PC厂商中开了花。<br />\r\n<br />\r\n</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('539','','1240062925','560','34','1','1','1','','<p>明明白白购主机--专业IDC交易网站主机网（CNIDC）推出“商品快照”功能，让用户更好了解商品动态信息</p>\r\n<p><strong>中国站长站（chinaz.com）4月13日消息：</strong>作为一种对网页历史数据的保存，我们对“网页快照”功能早已熟悉，各大网页搜索引擎中都使用了这一功能。网上贸易中实现某种“快照”功能，是否可以更加全面地了解一个商品的动态信息呢？近期，主机网（<a href=\"http://www.cnidc.com/\">www.cnidc.com</a>）即推出了这一项功能。</p>\r\n<p>主机网推出的这一保存历史数据的功能叫“商品快照”，技术原理上和搜索引擎的“网页快照”相似，只是把这一技术功能巧妙地融入到了商品交易当中。</p>\r\n<p>主机网是一家专业IDC交易平台。众所周知，主机（网站空间）涵盖的指标信息繁多，往往一项指标的改变，就会使得性价比大相径庭。比如支持脚本的不同（ASP，ASP.NET，PHP ）、数据库类型（ACCESS，MSSQL，MySQL），甚至是IIS连接数、流量限制、机房线路、是否代备案等，有时候一项指标的变化，就会使得主机的性能有天上地下的区别，这往往会使用户陷入一种被动的局面。</p>\r\n<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/34/1_20090418210456_2Vexh.gif\" width=\"448\" height=\"364\" border=\"0\" alt=\"1.gif\" title=\"1.gif\" /></p>\r\n<p align=\"center\">&nbsp;<strong>图：标明信息有变化的一件商品</strong></p>\r\n<p align=\"center\"><strong></strong><p align=\"center\"><strong><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/34/1_20090418210410_CH9Ep.gif\" width=\"417\" height=\"366\" border=\"0\" alt=\"9.gif\" title=\"9.gif\" /><p align=\"center\">&nbsp;图：上述商品最新信息数据</p>\r\n</strong></p>\r\n<p align=\"center\">&nbsp;图：上述商品最新信息数据</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">&nbsp;图：上述商品最新信息数据</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">&nbsp;图：上述商品最新信息数据</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">&nbsp;图：上述商品最新信息数据</p>\r\n<p>或许用户是通过朋友介绍而来，或者是用户在参看信息之后相隔很久才购买，在这个时间间隔期里，主机商（IDC）或许就会对某件商品指标进行一定的变动。而主机网推出的“商品快照”功能，将完全杜绝这一情况的发生，让用户全面了解该商品的历史数据，做到心里有数，明明白白购物。</p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p align=\"center\"><strong>&nbsp;图：无信息变化的一件商品</strong></p>\r\n<p>据了解，“商品快照”功能在国内网上交易行业并不多见。技术负责人于东锋介绍，主机相比其他商品在指标上更加复杂，加之全面了解主机性能具有一定的技术难度，如何让用户便捷地了解一件主机商品，至少在信息获取上具有一定优势，“网页快照”即可大大缓解这一矛盾。</p>\r\n<p>作为一家专业IDC交易平台，主机网一直在维护用户权益上精益求精，包括消费者保障计划、CNIDC认证商家，以及7天无理由退款等措施。此番推出“商品快照”功能，即是全方位维护消费者权益的又一悉心举措。</p>\r\n<p><strong>关于主机网：</strong>主机网（CNIDC.com），一家IDC交易平台，也是中国大陆首家专业主机交易平台，于2009年3月23日上线。</p>\r\n<p>主机网立足于IDC行业的B2C交易（B：IDC厂商，C：网站主、企业等客户），依托中国站长站（chinaz.com）7年的站长行业优势，将IDC商家、个人站长及企业用户等IDC终端消费群体，进行无缝隙对接，保证双方安全交易，致力于打造中国最专业主机交易平台。</p>\r\n<p>作为一个IDC行业B2C平台，主机网涵盖了虚拟主机、服务器托管、服务器租用、服务器合租、VPS主机等五个细分类别，满足了网站空间使用的不同要求。主机网同时还提供IDC行业资讯，以及其他IDC相关的技术教程等。主机网网站地址：<a href=\"http://www.cnidc.com/\">www.cnidc.com</a>&nbsp;。</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('540','','1240115586','561','37','1','1','1','','　第五届全国性文化节于本周一在广州落下帷幕。当晚，性文化节的最后一项活动“大学生性心理健康讲座”在大学城广州美术学院大讲堂举行。针对当今大学校园“性爱分离”、“网聊”、“网婚”等形形色色的性现象，性学专家和学子们展开坦率对话。专家指大学生处于“性待业”状态，学生们则道出焦虑：“找不着女友该怎么办？”<br />\r\n<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/37/1_20090419120400_f272L.jpg\" width=\"307\" height=\"500\" border=\"0\" alt=\"1.jpg\" title=\"1.jpg\" /></p>\r\n<br />\r\n　　现场气氛十分火爆。讲座还未开始，能够容纳近900人的讲堂早已经座无虚席，连最后面的走廊上也挤满了大学生。演讲中，掌声几乎每隔三四分钟就响起一次。<br />\r\n<br />\r\n　　主持人在开场白中指出，最近一项调查显示，97％的大学生认为在大学开展性与生殖健康教育非常必要，62％的学生希望通过讲座的形式接受性与生殖健康教育。而在大学里，许多学生的性知识还不如中学生，在针对学生进行的心理咨询中，经常还有人会问\"和女朋友睡一晚会不会怀孕？避孕套有大小号吗？\"等等之类的问题，因此，在高校学生中有必要进行性教育。<br />\r\n<br />\r\n　　专家观点一：<br />\r\n<br />\r\n　　网恋、裸聊是“性与身”的分离<br />\r\n<br />\r\n　　主讲专家是广东省性学会副会长兼秘书长、《人之初》杂志社总编辑董玉整。他说，性知识教育也是素质教育的重要环节，“见到异性不心动的人，不是健康的人，因为健康人必须具备创造人的能力。把两性关系看作动物性，是对人类最大的污蔑。”他认为，大学生不必为性话题感到羞羞答答，也不必为自己的性需要感到羞耻。但同时，他呼吁大学生们，警惕性心分离、性婚分离、性与健康的分离、性与道德的分离、性与文化的分离。<br />\r\n<br />\r\n　　“恋物癖在高校中比较普遍，有一些男士喜欢收藏女性用品就是存在性心理障碍。”董玉整说，必须警惕“性的片断化”，性与身的分离、性与心的分离都是目前存在的问题，比如早恋、迟性、单身、性玩偶、变性、同性恋、网恋、网婚、裸聊等都属于“性与身”的分离。<br />\r\n<br />\r\n　　他指出，大学生也是艾滋病传播的新高风险人群，一项针对大学生的调查表明，大学生婚前性行为发生比例高达10％~30％，学生群体中尝试吸毒者更是占到5.7％，但安全套的使用率却比较低。过度开放的性观念有可能成为大学生群体相关疾病及艾滋病传播的高危因素。就全世界而言，艾滋病病毒感染者70％以上由性接触传播，其中超过一半是14~25岁的青少年。<br />\r\n<br />\r\n　　专家观点二：<br />\r\n<br />\r\n　　有了“性”未必就有爱<br />\r\n<br />\r\n　　中山大学的一名男生问：“既然性缺失是不合理的行为，学校是否有责任为学生创造最佳的恋爱环境呢？”<br />\r\n<br />\r\n　　董玉整认为，大学生既已成人，就应该享有成人应有的权利，其中包括恋爱的权利。学校不仅应该为大学生恋爱提供良好环境，而且应该做得更多。“但是，良好的恋爱环境绝对不能和解决性饥渴挂钩。学校应该提供的，是让大学生们谈好恋爱、谈高雅的恋爱的文明、健康的环境。”<br />\r\n<br />\r\n　　星海音乐学院的一名男生透露了如今大学生常见的现象：一些人在感情上经历挫折后，出现了爱和性的脱节，有些人甚至认为先有性后有爱。董玉整告诫道，这种现象的存在引人思考：“有了性就一定会有爱吗？为性而冲动的人，往往是美好爱情的终结者。我们应该提倡‘先在心灵上拥有你，再在身体上占有你。’”<br />\r\n<br />\r\n　　男生追问：“找不到女朋友，怎么办？”<br />\r\n<br />\r\n　　董玉整指出，性别比例失衡也是目前存在的重要问题，据估计，找不着老婆的男士将达到3500万人。幽默地说：“以目前的男女比例来看，男性远多于女性，这也就是说明，有不少男性处于‘性失业’状态，而在座各位则处于‘性待业’状态。”这段论述随后引发了男生们的不断追问：“找不到女朋友，我该怎么办？”<br />\r\n<br />\r\n　　广东工业大学的一名男生首先把话题引向这个方向，引起了全场轰动：“我们大学的男女比例是13：1，极不平衡，因此多数男生长期处于‘饥渴’状态。11月11日‘光棍节’快到了，据我所知，整个大学城里的光棍比例高达一半。”华南师范大学一名男生更是直接发问：“男女比例失调，我们的出路在哪里？”<br />\r\n<br />\r\n　　董玉整幽默地告诉在场的大学生们：“大家的目光要放远些，寻找对象要勇于冲出自己的校园甚至冲出‘城’（大学城）外。优秀的中华儿女具有在全球发展的眼光。”更有趣的是，广东外语外贸大学的一名男生还安抚“难兄难弟”们：“我们男生随着年龄的增长，选择女朋友的空间也在不断拓展，大家不必着急。”<br />\r\n<br />\r\n　　女生质疑：“同性恋是性取向错位？”<br />\r\n<br />\r\n　　随后的学生提问环节高潮迭起，且男女观点不同，让人们对如今大学生们的性心理略知一二。<br />\r\n<br />\r\n　　广州大学的一位女生首先向董教授“叫板”：“您认为‘同性恋是一种性取向错位，应该尽量纠正’。而我认为同性恋爱是一种正常的心理状态，对于一些人来说是一种偶然的选择，部分人的同性恋倾向更是与生俱来。”<br />\r\n<br />\r\n　　她引经据典地说，近年来随着社会对同性恋爱的态度越来越包容，研究BL（Brother&nbsp;Love的缩写，即男孩之恋）和“拉拉”（英文Lesbian的音译，意为女同性恋者）的兴趣开始在部分大学生中蔓延。2003年，复旦大学公共卫生学院开设的研究生课程《同性恋健康社会科学》正式开课，开课两年内共有5位研究生选课，但每次大课的旁听人数都在100人上下。2005年，复旦大学学生社团知和社成立，主要学术议题是与社会性别相关的话题，如女性主义、家庭暴力、同性恋等，核心会员每年均在二三十人。<br />\r\n<br />\r\n　　华南理工大学一名女生提问，“是否具备发生性行为的能力就应该行动？”董玉整解释，大学生们在年龄上已经成熟，但是具备条件却不等于要付诸行动，还要考虑性行为的社会性。“当你具备能力时，你是否具备条件？当你具备条件和能力的时候你是否具备权利？当你具备能力、条件、权利的时候，你是否做好承担责任的准备？当你的回答都是Yes时，那么，Just　do&nbsp;it!（译：尽管去做吧！）”<br />\r\n<br />\r\n　　记者观察<br />\r\n<br />\r\n　　大学生<br />\r\n<br />\r\n　　更勇于网上论性<br />\r\n<br />\r\n　　大庭广众之下，听学者用他们喜欢的语言坦荡地谈性，不少学生大呼“过瘾”。广州大学大三的林同学告诉记者，“过去自己关于性方面的知识，大部分都是靠自己‘估估下’，最多只是同性之间个别探讨一下，像今天这样这么多人排排坐讨论‘性’还是第一次。”<br />\r\n<br />\r\n　　记者发现，在日常生活中，大部分大学生对于在众人面前，尤其是异性之间交流性知识和性心理，仍然感到羞于启齿，而互联网上的虚拟世界则为他们提供了一个“宝地”，讨论的气氛明显热烈得多。<br />\r\n<br />\r\n　　在广州某重点高校的校园BBS上，记者发现了一个主题为“当你发现你的女友不是处女时，你会怎样？”的帖子，10个小时内有近400人次参加讨论，成为当时版面的一个“热帖”，讨论的语言也更为“出位”，如：“我严重地接受不了这个事实，我的女友的过去是那么的恐怖！”“有经验简直就是好事！”“非常介意的人应该还比较幼稚。”“处女之身要保持到什么时候？新婚之夜吗？可是你又怎么知道结婚以后不会离婚？”<br />\r\n<br />\r\n　　据了解，类似的性心理讨论帖不时会在各高校校园BBS上冒出来，几乎每次一石激起千层浪般引发激烈讨论。<br />\r\n<br />\r\n　　但限于高校对BBS的管理条例，绝大部分这种讨论帖都会被网络管理员在短时间内设置为合集或者不可回复，甚至完全删除所有讨论内容。（任珊珊&nbsp;伍仞&nbsp;李燕&nbsp;郭艳平）<br />\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('541','','1240115660','562','37','1','1','1','','<p>信息时报10月31日报道　“十一二岁的小男生小女生知道紧急避孕，书包</p>\r\n里面带着安全套！‘性文化节’期间我们要把性教育带进中学，政府官员、家长、学生、性教育工作者坐在一起，共同探讨如何正确引导青少年的性观念。”昨天，性文化节组委会新闻发言人段建华说。“2007第五届全国（广州）性文化节”的各项活动将于11月1日到5日陆续展开，欢迎公众积极参与。 <p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n“性教育进入中学是第一次。”段建华介绍，“我们之前与11、12、13岁的小孩接触，这些刚进入青春期刚来例假、刚有遗精的小女生小男生，已经知道事后紧急避孕、书包里面带着安全套……他们的各种问题让我们这些老工作者都大为意外。”11月2日，作为性文化节的内容之一，广州市第四中学将举行一堂性教育课程，“到时候政府官员、家长、学生、性教育工作者坐在一起，共同探讨如何正确引导青少年的性观念。” <p>&nbsp;</p>\r\n昨天，“第五届全国（广州）性文化节与生殖监控用品进社区、进厂矿、进企业”活动上，作为“性文化节”的第一炮，白云区向流动人口免费派发了50万个安全套，以及其他性与生殖健康用品。现场还有免费的体检和卫生、性问题咨询。“光是安全套就派发了50万个，还有其他夫妻用品，价值超过50万元。”段建华说。 (<a href=\"http://information.dayoo.com/\"><font color=\"#1f3a87\">信息时报</font></a>) 记者:<b>蒋隽 通讯员 李燕</b><a href=\"http://news.163.com/\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://cimg2.163.com/cnews/img07/end_i.gif\" width=\"12\" height=\"11\" border=\"0\" alt=\"锁锁\" /></a> ','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('542','','1240115821','563','37','1','1','1','','<p>广州性文化节“情趣内衣秀”出现嘘场一幕，拥挤在前排的众多男观众不满模特穿的多，而嘘声四起。</p>\r\n<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/37/1_20090419120440_GcPMs.jpg\" width=\"266\" height=\"400\" border=\"0\" alt=\"2.jpg\" title=\"2.jpg\" /></p>\r\n<p align=\"center\"><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/37/1_20090419120452_fSki9.jpg\" width=\"400\" height=\"266\" border=\"0\" alt=\"3.jpg\" title=\"3.jpg\" /></p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('543','','1240115997','564','37','1','1','1','','　2009年4月4日，第四届深圳内衣展在深圳会展中心开幕，吸引了来自国内外上百家品牌参展.<p>　　这次展览的确是吸引了大批观众，场面相当火爆。不过有网友表示质疑，按说内衣展是为了展示品牌内衣，恰倒好处就行了，而这次展览上美貌的女模特们似乎更着重在大秀身材，而且有的模特穿着似乎过于暴露了。毕竟模特们展示的是内衣的做工，款式，而不是靠女模特的娇好身材来吸引观众的目光，那样就是本末倒置了。</p>\r\n<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/37/1_20090419120444_egkjF.jpg\" width=\"497\" height=\"511\" border=\"0\" alt=\"1.jpg\" title=\"1.jpg\" /></p>\r\n<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/37/1_20090419120457_9XlUz.jpg\" width=\"415\" height=\"511\" border=\"0\" alt=\"2.jpg\" title=\"2.jpg\" /></p>\r\n<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/37/1_20090419120410_7NzLo.jpg\" width=\"472\" height=\"511\" border=\"0\" alt=\"3.jpg\" title=\"3.jpg\" /></p>\r\n<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/37/1_20090419120426_Lbt8g.jpg\" width=\"467\" height=\"511\" border=\"0\" alt=\"4.jpg\" title=\"4.jpg\" /></p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('548','','1240126775','567','39','1','1','1','','<p>随着网络购物环境的日渐成熟，越来越多的消费者开始网上购物，社会商业交易环境突破了商家传统的营销模式。互联网时代的进步，产生了新的营销模式——电子商务。</p>\r\n<p>　　电子商务运作得好，不仅仅是商家/厂家单纯产品销售的网络平台，更可以作为商家/厂家售后服务的沟通平台，及时传达市场政策和信息的工作平台，最终形成企业自身一体化运作的商业增值平台。公司或个人如能充分利用互联网环境，就可大大降低企业的市场运作成本，提高效率，同时消费者也能从这个扁平化的网络平台上得到快捷高效的服务，应该是众多厂家/公司今后营销发展的主流。如跟不上这一时代变化，不抢先行动，落后就要挨打，就要被这个互联网时代淘汰，尤其是对终端产品的生产/销售型企业/公司，至关重要。</p>\r\n<p>　　而一个公司要想把电子商务运作成功，需对以下四大要素给予足够重视，防止电子商务营运操作不当。否则，不是盲目投资上马，就是方向、思路、策略型错误，不得要领，最后不得不以失败告终。</p>\r\n<p>　　要素一：自建电子商务平台的重要性</p>\r\n<p>　　很多公司其实现在还在电子商务门外转悠，以为靠阿里巴巴、慧聪网等商业平台上发布商业信息开展工作，就是开展了电子商务，其实，这是在为比别人做嫁衣，你的电子商务命运永远拽在别人的手心里，那些信息发布型商业平台只能作为你宣传推广的网络环境而已。</p>\r\n<p>　　要想把自己的电子商务操作起来，自己的命运就要自己掌握，必须建立自己的电子商务交易平台，平台越早建越好，因为你的平台也是需要时间积累的，早建早受益，后面激发的能量越多，对你公司今后的发展越有利。</p>\r\n<p>　　要素二：建立电子商务平台应遵循循环、可持续发展，逐步提升，稳妥推进</p>\r\n<p>　　1、避免被理论空谈者误导</p>\r\n<p>　　近期通过对多家开展电子商务的公司进行观察发现，很多一开始高调进入，大肆投资的公司不是陷入困境，就是没有了声音，问题在哪?问题出在操作者一开始没有冷静，盲目投资造成，或者一开始心态就有问题， 总想骗老板，骗投资者，或者想造成表面繁荣假象，借机上市，圈钱，结果无一有好下场，泡沫裂了，自己一溜之，其实这些都是操作缺乏经验，没有务实做实业的心态，不懂装懂，破坏电子商务的良好形象。</p>\r\n<p>　　2、早做早受益</p>\r\n<p>　　真正要想把电子商务操作成功，必须抓住公司核心，从 品牌 + 网络平台 + 市场 三个方向上展开，对一个已有品牌，已有市场环境基础的公司来说，启动电子商务相对来说容易些，对一个初始没有品牌，没有市场客户，什么都空白的公司来说，起步期相对需要时间的验证，毕竟这也是一个低成本起步的操作，做任何事总要从基础做起的，不可能一蹿而就，早做早受益。</p>\r\n<p>　　3、建电子商务平台可循环式，可持续发展</p>\r\n<p>　　自建电子商务平台时，不一定一下子投入几百万就是必须的。笔者根据多年的经验，建议起步首先着手建一个基础的电子商务平台，有些后台功能以后可逐步上。这样既起步快，节约时间;又可避免浪费不必要的成本投入。电子商务首抓的是销售、推广，而现在很多缺乏实际操作经验的人总是一开始强调后台功能要如何大，如何强，其实一开始根本用不上，甚至永远也用不上，理论脱离实际。电子商务的循环式、可持续发展才是上上策，操作上逐步提升，稳妥推进，各方参与者都能接受，成功的概率很高。</p>\r\n<p>　　要素三：公司整体团队对电子商务的高度认同、重视</p>\r\n<p>　　电子商务毕竟是近几年发展的新型事物，很多公司的老板、握有决策权的高层管理者在这方面其实都没什么经验和认识，甚至不懂，有的可能听说过。如果在这方面公司团队没有高度的认同、重视，电子商务在公司内部的运用、引进、发展方面，就可能存在着一道不可逾越的鸿沟，这里强调的是团队，不是一个人。</p>\r\n<p>　　一般来说，高度重视的公司会加大投入，全力支持，这样的公司，电子商务发展就快，见效也快;反之，就会原地踏步，或小有进步，瓶颈不解除，做强做大的日子就望眼欲穿，也许要等到同类型竞争者刺激一下，才会醒一醒，行动不行动还不一定知道。所以公司整体团队对电子商务的高度重视，也是电子商务成功运作的关键要素。</p>\r\n<p>　　要素四：要有可靠的电子商务操作领头人</p>\r\n<p>　　公司要找到一个有实战经验的带头人，不能是理论空谈家，给其提供对公司、对个人都有利的空间发展平台，捆绑式发展，这样，公司的电子商务才可持续发展下去，否则，一个人一个思路，耽误公司电子商务的顺利发展，造成不必要的时间、费用浪费。当然，选一个这样务实操作的人也确实不容易，何况真正懂这一领域的专家并不多。</p>\r\n<p>　　对于想用电子商务引领今后发展的生产型、营销型、服务型公司/企业，只要对以上四点核心要素领悟得当，就可最大限度地避免电子商务操作进入误区。在当前经济危机下，以低成本的电子商务模式，务实地把公司各项工作开展起来，就能在这个快速发展的互联网时代，领先一步走在行业的前面;领先竞争对手，早得商机;引领消费者潮流，受益无穷。</p>\r\n<p><br />\r\n文章来自: 站长网(<a href=\"http://www.admin5.com/\">www.admin5.com</a>) 详文参考：<a href=\"http://www.admin5.com/article/20090408/141109.shtml\">http://www.admin5.com/article/20090408/141109.shtml</a></p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('549','','1240126816','568','39','1','1','1','','<p>您愿意将自己的工资“公之于众”吗?要知道，现在已经有越来越多的人在网络的“阳台”上对自己的工资“大晒特晒”。进入“一晒网”、“晒工资吧”、“搜薪网”等提供给网民晒工资的专门网站，均能看到不同职业不同人群所“晒”出来的工资单。</p>\r\n<p>　　来自广州的网友YAMO，是在外企工作了5年的高级软件工程师，他在“一晒网”上详细罗列了自己的收入情况，“年薪(税前)8万元。基本工资：1406元;岗位津贴：2858元……”</p>\r\n<p>　　除了像YAMO一样“晒”工资，网友们还对“晒”出的工资作出评价，或者与大家分享自己的工资如何开销的心得。在“搜薪网”上，网友bkh不仅“晒”工资，还从年收入、股票、生活等各项分析自己如何用微薄的工资得出21万的存款。从一些“晒工资”的网站上，网友们能了解到各个行业的工资排行榜，甚至能通过网站提供的软件，输入自己所处的职位、工资收入等，量身订造一份“薪资比较报告”。</p>\r\n<p>　　曾有网友总结了 “晒工资”的四大心理动机，分别是“夸富”、“宣泄”、“攀比”、“交流”，对于这种“晒”工资网站，网友们多表示提倡。网友“小人鸟”说，“大家都晒一晒工资，互相参考一下，能够作为自己更换工作的参考”。 何剑辉</p>\r\n<p><br />\r\n</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('550','','1240126852','569','39','1','1','1','','<p>个性需求催生“旅游婚纱”</p>\r\n<p>　　“拍婚纱照要学姚明叶莉，选背景要挑青山绿水。”这是最近在年轻情侣中十分流行的一句话。一种将旅游和婚纱摄影结合在一起的旅游方式开始在全国流行起来，一批批时尚新人们选择了一边出门旅行，一边拍摄婚纱照，以个性化的方式记录人生的重要时刻。</p>\r\n<p>　　风景定格浪漫瞬间</p>\r\n<p>　　传统的婚纱摄影，拍摄地往往是影楼、室内影棚或是就近的公园。这种老套路拍出来的照片几乎都是流水作业，渐渐不能满足年轻人的口味。</p>\r\n<p>　　“这种将旅游和婚纱摄影结合在一起，以旅游线路上的天然风景为背景，摄影作品独一无二的新兴婚纱拍摄方式，正越来越吸引时尚的年轻人。”</p>\r\n<p>　　“姚明效应”带热旅游婚纱摄影，旅行社、影楼自然不会放过这绝好商机。据介绍，姚明叶莉拍婚纱的太湖源、四川四姑娘山、九寨沟、云南丽江、三亚天涯海角等风景独特的旅游胜地，成了很多新人们拍婚纱照选择的地方。</p>\r\n<p>　　据专业人士分析，旅游婚纱摄影是突破旅游单一概念，引入旅游新元素—摄影的创新，从目前旅游业逐步向高端、细分发展趋势来看，将来的旅游婚纱摄影将成为又一重要旅游产品。</p>\r\n<p>　　随着旅游婚纱的刚性需求的加大，跨区域跨省会乃至跨国度的需求逐步放大，那么如何才能了解到各地婚纱影楼、摄影工作室的详细情况、优惠信息、拍摄风格呢?很简单“网络”，因此在近几年网络上出现了大量的全国性、区域性婚纱摄影网站，随着几年的“优胜劣汰”，目前国内已经出现了婚纱摄影三大门户鼎足而立瓜分天下的景象，也成为全国各地新人们选择影楼和摄影工作室的最权威的网络平台，三大门户久久结婚网、中国婚纱摄影网、幸福婚嫁网各有特色，致力于为广大新人们提供最全面最优秀的服务平台。</p>\r\n<p>　　婚纱摄影第一门户 中国婚纱摄影网 <a href=\"http://www.wed114.cn\">http://www.wed114.cn</a></p>\r\n<p>　　中国婚纱摄影网专注于婚纱摄影行业，囊括中国大部分城市的影楼和摄影工作室，目前已经开通城市达到140多个，15000个影楼和摄影工作室正式入驻开通网上商铺，堪称中国最大的婚纱摄影网站，最吸引消费者的在于最详细的商家信息，包括商家基本信息，精选作品展示，优惠券，最值得消费者注意的是提供了商家点评、留言反馈、最新优惠活动、团购信息发布等。</p>\r\n<p>　　通过我们对其上面100多个商家的查访，普遍认为中国婚纱摄影网在国内首次引进了“婚纱摄影诚信”机制，并建立了“行业大联盟”，类似于淘宝的信用度，可以通过最客观的方式为消费者提供最权威的借鉴指标，通过信用积分机制，准新人们可以了解其他网友对商家的客观评价，不过也有个别商家反应有些点评似乎是竞争对手恶意评价，希望中国婚纱摄影网对点评的监管力度加大，这样才可以形成更客观的信用机制。</p>\r\n<p>　　目前，中国婚纱摄影网除最完善的全国影楼信息库外，还有非常丰富的内容内涵，包含中国婚纱写真图库(堪称中国最大婚纱写真图库)、中国摄影圈(据说已经有近3万摄影师入驻其中，具了解应该属于SNS交流平台)、中国结婚新闻中心(很专业的结婚新闻中心，信息发布很快)、中国婚纱摄影论坛(主要涉及婚纱摄影方面)、中国影楼人才网(通过了解，该网刚刚上线不久，不过已经有很多的商家在上面发布招聘信息，也有很多摄影师、化妆师等进入，逐步形成专业的影楼招聘、求职中心)。</p>\r\n<p>　　编辑小结：编辑通过多方面了解，认为中国婚纱摄影网经营理念清晰明确，致力于为全国准新人们提供选择影楼、摄影工作室最权威的服务平台，通过商家自行管理，消费者反馈、点评可以第一时间了解各商家信用、最新活动、团购信息等信息，让消费者和商家得到真正的实惠。思考问题：虽然全网内容丰富、信息更新效率很高，但是全站贯穿性还待提高，特别论坛活动组织方面还需下大功夫。</p>\r\n<p>　　婚嫁第一门户 久久结婚网 <a href=\"http://www.99wed.com\">http://www.99wed.com</a></p>\r\n<p>　　久久结婚网是目前全国新概念的婚礼服务及婚礼用品的全新展示平台，久久婚嫁网汇集了北京、上海、杭州众多婚礼服务商家的最新资讯和最多促销信息，运用商家网上店铺全方位推介与准新人消费的完美结合，通过网络良好的及时互动和商家精彩纷呈的优惠活动相结合，实现网民网上浏览咨询和网下洽谈交易，为准新人和商家提供一个高效、便捷的一站式婚礼消费平台。</p>\r\n<p>　　久久结婚网主要以社区为主导，通过大量社区活动辅助，建立了中国最大的婚庆社区，通过社区人气带动全网。具了解自成立以来，日P150万，独立IP5万，网站商家会员入驻数量500多家。通过流量分析看出久久结婚网90%以上的访问量来源于社区，因此久久结婚网的结婚社区不愧为中国第一婚庆社区。久久结婚网主要频道包含结婚资讯、结婚知道、结婚社区、结婚文集、结婚商家(包含婚纱摄影、婚庆、礼仪等等)。</p>\r\n<p>　　通过了解，久久结婚网将在2009年，启动区域拓展模式来渗透到中国70%以上的区域市场。同时也加大线下婚展规模，并购结婚行业杂志，探索影视娱乐项目来架构结婚产业立体媒体，以期形成中国结婚产业传媒制高点。</p>\r\n<p>　　编辑小结：久久结婚网是中国最早涉及婚庆行业网站之一，通过频繁社区活动迅速发展至今，久久结婚网树立了婚庆行业全国知名品牌，为广大商家所接受，久久结婚网通过“专注、创新、激情、梦想”的理念，独特的运营模式，吸引了大量的商家及忠实客户群。编辑通过认真了解和分析，发现久久结婚网目前仍然没有走出社区导向型的模式，主要人气仍然聚集于社区，由于社区的网友中准新人所占比例并不是很高，因此虽然久久结婚网有很高的流量和知名度，但是针对商家所带来的实际意义有待思考。</p>\r\n<p>　　北京婚庆第一门户 幸福婚嫁网 <a href=\"http://www.xfwed.com\">http://www.xfwed.com</a></p>\r\n<p>　　幸福婚嫁网专注于北京婚庆行业，在北京、天津等周边区域，幸福婚嫁网有着相当的知名度，自创建以来，一直致力于为广大网友和北京婚嫁服务企业提供服务，对北京婚嫁行业的相关资源进行了内容和咨询的有机整合，方便网友及时获得所需信息。基于在婚嫁行业内建立的信誉及信息优势，目前“幸福婚嫁网”已成为国内婚嫁领域领先的行业门户网站，迅速、及时地提供各地婚嫁发展动向，婚嫁最新潮流，婚嫁市场动态和全面的企业信息，为消费者提供专业的婚嫁消费指导、婚嫁企业推荐、新婚产品导购等服务，引领全新的婚嫁消费理念。</p>\r\n<p>　　同样在北京叱诧风云的婚嫁网站，谁曾想到无限风光的背后有多少的辛酸，用幸福婚嫁网创始人刘小东的话说，婚嫁网就是为婚嫁行业中的企业提供一个展示、品牌推广的舞台;为即将踏上婚礼殿堂的准新人提供一个婚礼经验交流、服务采购的平台。为了实现这个梦想，幸福婚嫁网付出了很多，这是所有的网友都能见证的。幸福婚嫁网的最新动态还是团购为主，因为他的论坛还是有些人气，聚集人气只能通过不断搞活动。</p>\r\n<p>　　编辑小结：幸福婚嫁网是中国最早涉及婚庆行业网站之一，通过社区大量团购活动聚集人气，通过对本地婚庆市场的全方位挖掘，幸福婚嫁网亦然成为北京最大婚庆平台。北京首都，政治文化中心，幸福婚嫁网专注于北京，相信在将来幸福婚嫁网可以发展的更好。思考问题：由于本网主要涵盖北京区域，区域性市场和商家有限，网民和准新人数量有限，因此幸福婚嫁网发展至今遇到了瓶颈，如何突破这个瓶颈对本地市场的深挖掘和更多新的业务拓展将是幸福婚嫁网应该考虑的问题。另外如何稳固论坛的本地人气凝聚力也是很严峻的问题。</p>\r\n<p>　　婚嫁网站对整个结婚行业起到整合、推动的作用，那对于本类网站来说，这个市场到底有多大?</p>\r\n<p>　　数字最能说明问题。据《中国结婚产业发展调查报告》显示，我国最近5年来平均登记结婚人数为811万对，其中城镇居民占41%。在新婚消费方面， 88.40%的新人需要拍摄婚纱照;49.14%的新人计划请婚庆公司为他们筹办婚礼;78.74%的新人准备到酒楼举办婚宴;36.83%的新人要为新娘购买婚纱;67.66%的新人将安排蜜月旅游。每对新人的加权平均消费金额达到12.58万元。按此计算，中国城镇结婚人群一年的消费总额为4183亿元(811万元×41%×12.58万元)。</p>\r\n<p>　　编辑的话：我列举以上三大网站并不表示这三大网站已经垄断全国婚庆网上市场，只是因为他们各有特色，发展良好。而全国各地方均有大小不同的婚庆类网站，其中也不乏优秀之作，比如杭州、武汉、成都等地都有不错的地方婚庆网，因此我们也不能以偏概全。</p>\r\n<p><a href=\"http://www.admin5.com/article/20090417/143375.shtml\"></a></p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('551','','1240126932','570','38','1','1','1','','“大四女生求职——— 希望有缘做您的专职太太，要求对方40岁以下，本市户口，有自己的事业……”昨天上午，张贴在文化西路吉祥苑小区附近的一张“应聘启事”引来不少人的关注。“求职？还是在征婚？”路人议论纷纷。 <p>　　采访中记者了解到，目前正值毕业生求职高峰期，“不忙找工作忙征婚”的学生并不鲜见。</p>\r\n<p>　　<strong>“求职”女生：</strong></p>\r\n<p><strong>　　张口就问“年收入”</strong></p>\r\n<p>　　昨天中午，由于一直占线，记者数次拨打后才拨通“应聘启事”上的手机号。</p>\r\n<p>　　记者：“求职‘专职太太’是啥意思，要干家政工吗？我没看懂啊。”</p>\r\n<p>　　对方一女生称：“说白了就是征婚啊。你符合条件吗？不符合条件就别浪费电话费了。”</p>\r\n<p>　　记者：“能把条件说得再具体一下吗？”</p>\r\n<p>　　女生：“您的年收入是多少？在济南有房子吗？”</p>\r\n<p>　　记者：“年收入有几万块，还没房子。”</p>\r\n<p>　　女生：“那你打啥电话啊。”</p>\r\n<p>　　记者：“非得有房子才行吗？”</p>\r\n<p>　　女生：“现在工作这么难找，毕业离校后，你若没房子我住哪儿？我这样做也是没办法……”</p>\r\n<p>　　当记者亮明身份后，该女生不断解释：“现在要找份称心的工作太难了，不如找个好老公实在，趁着年轻，把找对象的事儿确定下来，免得以后麻烦。事实上，我周围不少同学都已在父母的安排下相亲了。”</p>\r\n<p>　　<strong>探访婚介所：</strong></p>\r\n<p><strong>　　女学生资源近30%</strong></p>\r\n<p>　　昨天中午，记者来到某高校附近的一家婚介所。当被问及有没有在校女学生征婚时，婚介所老板刘先生说：“你可算来对地方了，我们这周围高校多，不少大学生来这儿报名征婚。”</p>\r\n<p>　　记者翻阅了部分登记在册的征婚名单，发现有几本花名册是“女大学生专项名单”。</p>\r\n<p>　　刘先生说：“现在，女大学生占我们这儿征婚资源的近30%。她们年轻、有学历，因而比较吃香，征婚的成功率也很高。我们这儿专科、本科、研究生都有，开出的条件也都很高，尤其是临毕业的学生，常常开口就要年薪十几万元的。至于对方的年龄，她们一般都能接受20岁以内的差距。还有些女生，喜欢找自己开公司的人做伴侣，并提出要在对方公司工作一段时间，边工作边‘考察’。”</p>\r\n<p>　　<strong>专业征婚网：</strong></p>\r\n<p><strong>　　首页女学生占七成</strong></p>\r\n<p>　　除了张榜求职“专职太太”或到婚介所注册征婚外，记者发现，一些“大学生征婚网站”也十分火爆。在一家“大学生征婚网”首页上，征婚的女大学生占总人数的70%。</p>\r\n<p>　　该网站还给出了“女大学生早点考虑未来人生的5大理由”：青春美丽是女人最大的资本，用人生最青春美丽的时候，去争取属于自己最好的婚姻和幸福人生；既然已经成年，难免面对恋爱，何不慎重面对婚恋早点开始……</p>\r\n<p>　<strong>　争议：</strong></p>\r\n<p><strong>　　各方观点不一</strong></p>\r\n<p>　　采访中记者发现，大学生本人、家长、老师以及其他人士的观点并不统一，但主要有以下三种看法———</p>\r\n<p>　　◆支持：专职太太也是一份工作</p>\r\n<p>　　现在大学生就业压力较大，有人想做专职太太也无可非议。在一些经济较发达国家，男主外女主内非常普遍，男人只管在外面挣钱养家，女人担负着家务和教育子女的任务。</p>\r\n<p>　　◆反对：幸福生活要靠自我努力</p>\r\n<p>　　虽然征婚是学生个人的选择，但若把征婚当成求职的行为，功利性太强。大学生毕业后的道路还很长，幸福生活需要靠自己的努力去争取。</p>\r\n<p>　　◆无所谓：</p>\r\n<p>　　女大学生征婚并不违反任何法规，只要行为合情合法，他人最好就不要指手画脚。</p>\r\n<p>　　专家：</p>\r\n<p>　　需要正确引导</p>\r\n<p>　　昨天，国家心理咨询师、社会学教授王静就此接受采访时指出，以征婚代求职，这样的做法带有一定的功利性。</p>\r\n<p>　　她说：“应届毕业生社会经验不足，恋爱观和婚姻观并不成熟，家长和学校应做好正确引导。因为，类似的婚姻很容易给将来埋下不和谐的隐患，虽然一时逃避了就业压力，但不能保证一生的幸福。”(记者 孙华)</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('552','','1240127012','571','38','1','1','1','','','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('553','','1240127172','572','38','1','1','1','','几名女顾客在郑州市人民路某商场的“花漾女人节”选购特价女内衣。 女顾客总是消费的主流，商家也最爱盯准女顾客的钱包，力推女性服装、化妆品等商品，希望能够吸引更多的女顾客购物。 马 健 摄<p>　　文胸产品是女性消费者常用的贴身用品，它质量的好坏，直接关系到广大女性消费者的身体健康甚至安全。然而，在当今市场上各类文胸产品琳琅满目的背后，却隐藏着不少质量问题。今年3月，福建省质监局在对当地文胸产品进行的专项监督抽查结果显示，抽样批次合格率只有35%。据了解，近年来在各地质监部门对文胸产品质量的监督抽查中，发现的问题也较多。</p>\r\n<p>　　近日，记者针对文胸产品存在的质量问题，采访了业内人士。</p>\r\n<p>　　石狮市华迪服饰有限公司是我国内衣行业唯一一家出口免验企业。该企业一位技术人员表示，由于文胸产品属于贴身衣物，国家对于文胸产品的生产有着严格的要求。特别是从2008年 10月1日起开始实施的 FZ/T73012-2008《文胸》标准，与此前实施的FZ/T 73012-2004《文胸》标准相比，增加了异味、可分解芳香胺染料和耐水色牢度等基本安全技术要求项目，并将pH值、甲醛含量、纤维含量等纳入了考核范围。该标准规定了文胸的术语和定义、型号、规格、要求、试验方法、检验规则、判定规则、包装和产品使用说明，适用于经纬编针织文胸，包括有衬垫、无衬垫和预定型产品。</p>\r\n<p>　　这位技术人员表示，新标准的实施对文胸产品甲醛、色牢度、pH值3项指标，有了严格的控制要求，此外也严格禁止使用偶氮染料。</p>\r\n<p>　　在谈到文胸产品甲醛和pH值超标的问题时，这位技术人员介绍说，从目前国内内衣行业的现状来看，出现甲醛和pH值超标的问题，主要是面辅料在染色过程中造成的，还有就是面料在印花过程的染色环节造成的。出现这些问题的主要原因，一是个别生产企业有意识地假冒合格产品，使用低廉的材料加工产品，并在产品上作虚假标称误导消费者，比如在标识上把化纤面料标识为全棉，把人造丝标称为真丝等。二是有些企业无意识的行为。这类情况主要表现为企业为了降低生产成本，在品控人员配置方面做不到位，质量监管的设备、仪器不完善，自主控制质量的能力较弱。甚至在某些小工厂、小作坊，根本没有品控机制、手段和专业人员。</p>\r\n<p>　　另外，由于近年来内衣外穿的趋势及趋于成衣的时尚流行风格，一些企业大量使用染色花边及染色、印花面辅料。有部分企业存在采购不专业，质量监控部门不完善，在面辅料的二次加工(染色、印花)过程中被染整企业欺骗，造成不合格的染色成品面辅料等被收货。</p>\r\n<p>　　同时，由于文胸产品的时尚化需求，在材料选用中，各种线、带、扣、标识、拉链、印度丝、绣花章、花边、手勾棉线花边等服装辅料都成为不可缺少的组成部分，而这些服装辅料在生产过程中都可能会存在pH值、甲醛、色牢度超标等安全质量隐患，而辅料中的金属扣、环、拉链等还可能存在重金属超标的问题。</p>\r\n<p>　　由于上述的众多原因，导致了文胸产品中出现了不合格产品。而据专家介绍，文胸产品甲醛含量、耐水色牢度、可分解芳香胺染料、耐汗渍色牢度等指标超标，会直接影响到消费者的健康安全。有关专家指出，文胸是长时间与皮肤接触的产品，一些采用化纤面料制造的文胸产品，往往吸湿性、透气性甚至是舒适性相对较差，不利于长时间佩戴。而穿着耐汗渍色牢度不合格的内衣，人体出汗时，面料中的染料会由于汗液的作用而脱落并转移到皮肤上，染料被皮肤吸收后可能会对人体产生致敏甚至致癌作用。</p>\r\n<p>　　石狮市华迪服饰有限公司的董事长吴光雄认为，文胸产品虽然看起来很简单，但从设计、选材、加工直到最后的检验检测，都需要严格的管理程序。吴光雄认为，目前国内在传统零售市场(百货公司专柜)销售的内衣品牌绝大部分都不会出现上述安全隐患的质量问题。问题产品大部分出现在低档品牌，由于厂家众多，进入门槛较低，处于低层次的竞争层面，竞争十分激烈。生产厂家主要靠便宜的价格和模仿知名品牌款式的速度竞争，多数在十元至数十元之间，销售主要集中在批发市场、超市、商业街等人流量大的市场终端。他提示消费者在选购时，应该尽量选择到正规的市场选购正规生产企业的产品。</p>\r\n<p>　<strong>　相关链接</strong></p>\r\n<p><strong>　　科学选用文胸</strong></p>\r\n<p>　　有关专家根据不同年龄及不同时期的女性消费者，提出了科学选择文胸类产品的建议：</p>\r\n<p>　　孕妇文胸选择专用：孕妇怀孕后到第16周左右，乳房开始变大，这时就该考虑购买孕妇专用文胸了。这时最好不要购买普通的大尺码文胸，而应选择孕妇专用文胸。因为怀孕后的乳房对文胸有不同的要求，比如不能有钢托，透气性要好，不能有衬垫等，而普通文胸未必考虑到这些。另外，孕妇最好购买2到3件孕期文胸来换洗，并随时注意文胸是否合适，如果小了，应及时购买大小合适的文胸产品。</p>\r\n<p>　　哺乳期文胸也要专用：对于要母乳喂养孩子的产妇来说，哺乳期最好用专用哺乳文胸。罩杯的角度明显上扬而且有深度，应是全罩杯，最好为较薄有弹性的纯棉针织面料。文胸扣要在前面，或者是罩杯可打开的样式，利于给孩子喂奶。文胸的肩带方向应垂直，而且要宽一些，这样不会造成肩部酸痛。罩杯的下方底边要宽，由有弹性的面料制成，在号型的选择上稍大点，这样腋下及后背部就不会形成扎肉型的凹沟。产妇的文胸颜色也有讲究，应选择本白色的，因为纯白色含有漂白剂会使皮肤产生不适，对婴儿的健康不利。</p>\r\n<p>　　在洗衣服时，不要将文胸和其他衣服混在一起洗，这样细小的化学纤维就会沾在文胸上，在穿着时进入乳腺管，逐渐引起堵塞，除了可能造成缺奶外，还可能因乳汁淤积导致急性乳腺炎。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('554','','1240127229','573','38','1','1','1','','国家文物局和国家测绘局合作开展的明长城资源调查最新数据公布，明长城总长度为8851.8千米。<p>　　发布数据显示，明长城东起辽宁虎山，西至甘肃嘉峪关，从东向西行经156个县域。8851.8千米的总长度中，人工墙体的长度为6259.6千米，壕堑长度为359.7千米，天然险的长度为2232.5千米。</p>\r\n<p>　　据介绍，明长城资源调查工作于2007年5月起先后在北京等10个省(自治区、直辖市)展开。调查总行程数十万公里，于2008年10月全面完成了野外调查工作，12月15日结束了以田野调查为基础的明长城长度量测工作。</p>\r\n<p>　　据悉，此次明长城资源调查按照1:10000测图精度量测、获得明长城的准确长度等各种基本数据。第一次全面掌握了明长城作为一个庞大的军事防御体系的现存状况，包括其具体分布、走向，墙体和附属设施建筑特点，以及长城的自然与人文环境、保护和管理现状等。</p>\r\n<p>　　调查结果显示，明长城现存敌台7062座，马面3357座，烽火台5723座，关堡1176座，相关遗存1026处。另外，通过本次调查还新发现了与长城有关的各类历史遗迹498处，例如天津市发现的火池、烟灶等相关遗存，辽宁省葫芦岛市绥中县的将军石摩崖石刻，北京延庆县发现的石墙遗迹等。为各地划定保护范围和建设控制地带、编制保护规划、制定保护修缮方案、建立长城档案等提供了支持。</p>\r\n<p>　　根据2006年国家文物局实施的“长城保护工程工作方案”，长城资源调查计划分为明长城、秦汉长城、其他时代长城等三个部分进行，并将于2010年底初步完成有关长城资源的调查、测量与数据入库、发布长城的长度信息等工作。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('555','','1240127281','574','4','1','1','1','','新浪科技讯 北京时间4月18日下午消息，据国外媒体报道，美国投资调研机构伯恩斯坦调研公司(Bernstein Research)分析师杰弗里·林德塞(Jeffrey Lindsay)周五表示，eBay收购Gmarket旨在重返中国和日本等亚洲市场。<p>　　最近几周，eBay动作频繁，先是宣布分拆Skype，然后又以每股24美元的价格收购Gmarket所有普通股和ADS，总收购价格约为12亿美元。对此，林德塞认为，这是eBay的一次重大战略调整，即重新回归核心的电子商务业务。</p>\r\n<p>　　林德塞称，eBay可能利用Gmarket这个平台重返中国和日本等亚洲市场。在前CEO梅格·惠特曼(Meg Whitman)时代，eBay在亚洲市场的表现并不令人满意，最后放弃。而在新任CEO约翰·多纳霍(John Donahoe)的领导下，eBay希望重返亚洲市场。</p>\r\n<p>　　截至2007年，eBay的互联网拍卖部门一直是韩国领先的电子商务供应商。后来，Gmarket的崛起抢占了eBay的风头。林德塞称，收购Gmarket之后，eBay将围绕Gmarket制定出亚洲，尤其是中国市场的业务战略。</p>\r\n<p>　　除了Gmarket，林德塞认为eBay下一步还可能收购拉美电子商务公司MercadoLibre、欧洲电子商务公司Tradus、在线票务公司StubHub和分类广告公司Craig\'s List等。(李明)</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('556','','1240127308','575','4','1','1','1','','“本店专业代理备案，速度超快，一分钟搞定。”最近，在一些论坛和电子商务网站上，出现了帮人快速网站备案的帖子。这些发帖者均声称，由于“信息产业部”最近政策调整，一般网站很难通过备案，自己却可以帮助网站备案成功，而且最多几分钟就能搞定。对此，上海市通信管理局相关人士表示，网站备案流程依然通畅，提醒个人站长千万别图省事而给自己留下后患。<p>　　<strong>网站备案最快也需一天</strong></p>\r\n<p>　　在拍拍网上，记者看到一个名为“杰儿设计工作室”的卖家，把“网站备案/快速备案/一分钟备案”变成了一件商品，并详细说明了交易的条件：“活站”即从来都没有备过案的网站，几分钟搞定，费用是20元一个站;而用户已经提交但没有备案成功的网站，被称为“死站”，需要十分钟，价格也上涨至50元。“死站”备案比较繁琐，需要10分钟时间通过，费用是50元一个站。买家只要提供“网站名称”、“域名”、“网站负责人姓名”、“备案省简称”即可。</p>\r\n<p>　　根据2005年信产部(现为工信部)发布的《互联网信息服务管理办法》(以下简称《办法》)规定，在国内服务器上放置的所有网站都必须备案，且办理时间在二十个工作日内。那么，这些提供“一分钟快速备案”服务的人又是怎么速成的呢?</p>\r\n<p>　　据上海市通信管理局相关人士介绍，去年开始，各地通管局和工信部便发现了此类问题，原因是当时备案系统网站有一个漏洞——同一主体同一个备案号可以同时应用于不同域名的网站。所谓一分钟备案成功，其实就是在老备案号下添加一个新域名。不过发现漏洞之后，工信部很快将其修复，现在只要出现修改域名情况，都会显示“未审核”状态。这个说法也得到了一位提供“快速备案服务”客服的承认，他告诉记者，现在已经不可能1分钟备案成功了，最快也要一天，宣传口号“一分钟备案”其实只是个噱头而已。</p>\r\n<p>　　<strong>使用代办可能会被断网</strong></p>\r\n<p>　　上述通管局人士提醒记者，目前网上这些所谓“代办备案”的服务其实都是在违规操作，根据《办法》，备案时必须提交包括主办单位名称、性质、有效证件号码、主管的单位、网站负责人基本信息、服务器放置地等多重信息，而“代办备案者”根本不会向申请方要这么多信息。如此一来，即使申请方能在开始备案成功，但一旦被通管局发现其信息有误，其备案号将会马上被注销，且通知ISP接入方断网，到时才是“竹篮打水一场空”。</p>\r\n<p>　　至于“网站备案难申请”的说法，更被斥为谣言。仅在3月份，上海市通管局便审批通过了1.5万多条网站备案，“最快一个小时，最慢一周也就审核成功了，只要信息真实完整，没有一家不通过的。”</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('557','','1240127373','576','4','1','1','1','','花1000元买下一个网站，在网站上发布虚假的投资信息，以高回报的许诺来招揽顾客。一旦有顾客上门，便劝其投资，并返给一定的“盈利”作为回报，当收到大量资金后，就卷钱逃走。从今年2月截止被捕时，吴锋(化名)、陈石(化名)等人用上述方式作案数次。受害人中，一对成都夫妇被骗走近64万元。近日，成都锦江检察院以涉嫌诈骗罪将吴锋、陈石批捕，其他几名同伙仍然在逃。<p>　　<strong>找网站投资被骗60多万</strong></p>\r\n<p>　　今年2月11日，成都人李丽(化名)通过网络搜索，找到一家名为“北京某证券投资有限公司”的网站，网页上介绍，在该公司投资回报很高。李丽致电该公司，听他们介绍了“高回报投资”情况。在和丈夫董华(化名)商量并几次致电该公司咨询后，两人决定出钱投资。</p>\r\n<p>　　2月12日，董华向公司指定的账户上汇入38000元，第二天，公司就返回了1900元的“盈利”，并说公司有内盘操作，是投资的最佳时机。当天，董华又存入了21万元，此后两天也再次收到了“返利”。就这样，夫妻俩陆续将40多万元汇入了投资公司的账户。</p>\r\n<p>　　2月20日，公司打来电话，要他们追加投资，此时董华夫妇已没有资金，于是准备退出，要公司方将本金和盈利一起还，对方回复，需要一个星期的时间。</p>\r\n<p>　　当天晚上，李丽在网上查找该公司，却发现网页已经消失，电话也没人接。此时，他们已向该公司汇了71万多元，期间虽返还了7万多元的“盈利”，但还有近64万元不知去向。2月21日早上，董华乘飞机前往北京，发现该公司根本就不存在，赶忙报案。</p>\r\n<p>　　<strong>买网站作案嫌疑人落网</strong></p>\r\n<p>　　接报后，警方立即展开调查。3月11日，嫌疑人吴锋和陈石落入法网。</p>\r\n<p>　　吴锋交代，他是福建人，今年2月5日，他和陈石等人从福建前往海口，花1000元买下一个假网站，并在网上发布了高回报的投资信息和联系方式。他说，将董华夫妇的60多万元骗到手后，他们就关掉了网站，并将这笔钱分赃、挥霍。又据陈石交代，之前他们也如法炮制，作了4至5次“投资”，但骗得的金额都在5万以下。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('558','','1240127449','577','4','1','1','1','','新浪科技讯 4月17日消息，知情人士于4月16日晚间透露，中国移动OPhone手机已完成基本的研发工作，经过小范围测试，效果良好。<p>　　据悉，5月初，基于EDGE版本的OPhone手机将面市，基于TD-SCDMA标准的手机也将于第四季度上市。</p>\r\n<p>　　OPhone手机是以中国移动OMS手机操作系统平台为基础研发的一种互联网手机，OMS又是中国移动以谷歌Android为基础。</p>\r\n<p>　　与传统手机相比，oPhone手机在互联网浏览方面的优势是其他手机不可比拟，oPhone不仅支持移动互联网，通过oPhone也可以很舒适的浏览 Http互联网的内容，因此，oPhone手机被可以与iPhone手机相抗衡。(康钊) <br />\r\n</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('559','','1240127959','578','39','1','1','1','','<p>&nbsp;</p>\r\n<p>　　<strong>这是新浪科技<a href=\"http://tech.sina.com.cn/talk/silverage/index.html\" target=\"_blank\">《白银时代》系列访谈</a>第一期</strong>。《白银时代》是新浪科技频道推出的一个强档栏目，以深度报道、人物特写、评论、调查、图表、访谈等多种形式向网民深度剖析、展现一个个快速成长的创业型高科技企业的方方面面。近期，新浪科技也将陆续邀请其他备受关注的创业企业创始人做客新浪，与广大网友进行交流。</p>\r\n<p>　　<strong>以下为戴志康聊天文字实录：</strong> </p>\r\n<p>　　<strong>精彩观点：</strong></p>\r\n<p><font face=\"楷体_GB2312\">　　- 之前我们迫于盈利压力和生存问题，每个小公司都有生存的问题，我们采取一部分软件免费、一部分软件收费的策略</font></p>\r\n<p><font face=\"楷体_GB2312\">　　- 互联网上，尤其是最近几年永恒不变的真理，就是只要有用户使用就有它的价值，就是你自己的核心竞争力</font></p>\r\n<p><font face=\"楷体_GB2312\">　　- 我最开始做这个东西就是为了找工作，首先这个软件本身会有很多人用，用了以后我就出名，出名以后我可以找一份好的工作，我不想念研究生或者在求学方面做进一步的尝试</font></p>\r\n<p><font face=\"楷体_GB2312\">　　- 我家是一个书香门第，一直希望我能够念研究生、博士、出国留学。我尝试过，但不适合这么做，并不是我不想这么做。后来我执意一个人到北京来，自己创业、自己做事情</font></p>\r\n<p><font face=\"楷体_GB2312\">　　- 我们对风险投资有自己的理解，首先我们不是靠概念、炒作生存的公司。第二我们做的事情对自己负责、也要对投资人负责</font></p>\r\n<p><font face=\"楷体_GB2312\">　　- 不要浮躁，你不要觉得我要去融多少资？赚多少大钱？等等。要有简单、淳朴的理想，往往这个理想会成为你一生、半生贡献的事业。你一开始什么都没有，既没有技术也没有人脉的情况下做很大的事情，成功的概率会很低，不然你总想着要赚钱、盈利、融资，你不断的失望、落差，会打击创业的积极性<p align=\"center\">&nbsp;</p>\r\n<p align=\"center\">图为Discuz！CEO戴志康</p>\r\n</font></p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p align=\"center\">图为Discuz！CEO戴志康</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p align=\"center\">图为Discuz！CEO戴志康</p>\r\n<p>　　<strong>主持人： </strong>各位网友上午好，欢迎大家来到第一期的新浪科技白银时代系列访谈，<strong>我是今天的主持人，《第一财经》日报记者杨国强</strong>。今天请到的嘉宾是Discuz！CEO戴志康，他是带着上大学创造的30多万到北京创立公司的。先请他简单介绍一下自己。</p>\r\n<p>　　<strong>戴志康：</strong> 各位网友大家好，今天很高兴有机会跟大家交流一些创业和人生成长的经验和经历，这些经验和经历未必很成熟和正确，但是有这样一个交流的空间，对大家来说尤其是对我自己来说是一个非常好的机会。</p>\r\n<p>　　<strong>主持人： </strong>下面首先引进一个网友的问题。</p>\r\n<p>　　<strong>网友：</strong>你24岁，是不是在学校就想着创业，怎么想干论坛？</p>\r\n<p>　　<strong>戴志康：</strong> 我肯定是在学校想创业的事情，上了大学觉得大学和心中预期的不一样，我很想做一些自己的事情，大学教的东西和我的兴趣有偏差，所以在大学真正上了一年，就开始做这个事情。之所以做论坛，考虑很简单，一个是做软件，上面有很多的网友交流，你会有很多用户，这个用户间接地使用你的软件，你的软件通过互联网传播，很多人用就是一个不错的事情。</p>\r\n<p>　　<strong>主持人： </strong>据说你在大学的时候就赚了很多钱，然后到北京成立了Discuz！公司，讲讲经历？</p>\r\n<p>　　<strong>戴志康：</strong> 当时很简单，一直做，就做好。虽然当时看不到商业前景和盈利空间，你做一件事情要对得起自己的付出和自己之前的理想和想法，所以我觉得创业和开公司是形式上的问题，一切是顺理成章的。</p>\r\n<p>　　<strong>主持人： </strong>你的公司在04、05年发展非常好的情况下，现在想着Discuz！全部免费，你是基于什么样的考虑？</p>\r\n<p>　　<strong>戴志康：</strong> 我做这个东西的初衷是让很多人用它它能够影响很多互联网用户使用习惯，之前我们迫于盈利压力和生存问题，每个小公司都有生存的问题，我们采取一部分的软件是免费、一部分软件是收费的策略，后来发现收费的门槛越来越高，不是很多人有钱购买这个软件，很多都是个人的网站，而且个人的网站都是互联网创立的生力军，一旦我们自身成熟的时候，我们肯定把软件免费给大家使用，这样突出了我们的理想。</p>\r\n<p>　　<strong>主持人： </strong>现在很多网友对Discuz！程序不是很清楚，它到底是做什么的，有什么特点？</p>\r\n<p>　　<strong>戴志康：</strong> Discuz！是BBS软件，说起论坛，和我们日常上网BBS、社区都有不同的形式，每一个社区有不同的形式，这个BBS是社区中最基础、最根本的形式，Discuz！的软件让中小网站、大型网站通过使用软件轻松地构建起自己的社区系统。我们本身在安全性上、代码的优化、功能的设计方面都是以用户为本。</p>\r\n<p>　　这个项目开始的时间不是很长，大概是3、4年的时间，但是取得了一个我认为就我自己来讲一个不错的成绩。</p>\r\n<p>　　<strong>主持人： </strong>你是从什么时候开始想到把这个程序来免费的？</p>\r\n<p>　　<strong>戴志康：</strong> 大概是05年3月份。</p>\r\n<p>　　<strong>主持人： </strong>05年3月份到年底的12月底，这之间有一个很长的过程？</p>\r\n<p>　　<strong>戴志康：</strong> 这个过程就是不断的思想斗争不断的思考，到底什么时候做？什么时候适合做？</p>\r\n<p>　　<strong>主持人： </strong>05年12月份觉得适合？</p>\r\n<p>　　<strong>戴志康：</strong> 对，主要是自身的情况来决定的，我们是一个公司，我们自身要生存，我们自身要有生存条件维持健康的发展。所以当时我们是这样觉得，之前因为论坛软件的销售额05年这个阶段成长的比较迅猛，所以在之后突然就感觉到似乎不是太需要考虑生存的压力，你要更想怎么把这个事情发展壮大。</p>\r\n<p>　　所以，05年12月是一个比较好的时机，主要的原因是我们自身的条件达到这个要求。</p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p align=\"center\">图为Discuz！CEO戴志康</p>\r\n<p>　　<strong>主持人： </strong>你们规模占到整个论坛的70%左右，我不知道免费以后，有没有新的盈利模式？</p>\r\n<p>　　<strong>戴志康：</strong> 盈利模式是这样，互联网公司是以用户为中心，我们要做软件公司，靠销售软件、靠销售相关的东西实现自己价值的公司。我觉得互联网上，尤其是最近几年永恒不变的真理就是只要有用户使用就有它的价值，有一部分用户使用你的软件，离不开你的软件，这就是你自己的核心竞争力。我觉得只要有人使用就会有你的价值。</p>\r\n<p>　　<strong>主持人： </strong>盈利模式的问题就是用户稳定以后再去考虑的问题？</p>\r\n<p>　　<strong>戴志康：</strong> 应该说是这样。</p>\r\n<p>　　<strong>主持人： </strong>免费以后你的收入来源就没有了，你打算怎么熬过去？</p>\r\n<p>　　<strong>戴志康：</strong> 并不是没有，之前我们有其他的业务，社区软件的技术支持、解决方案、相关的服务，这会提供相对稳定的经济来源，这些我们会拿过来，用于支撑我们的软件开发、软件设计与软件的完善与升级。</p>\r\n<p>　　<strong>主持人： </strong>你们公司现在有多少人？</p>\r\n<p>　　<strong>戴志康：</strong> 16、17人。</p>\r\n<p>　　<strong>主持人： </strong>技术和市场的比例是不一样的？</p>\r\n<p>　　<strong>戴志康：</strong> 我们只有两个是非技术人员，要么是技术支持等等。</p>\r\n<p>　　<strong>主持人： </strong>给你们公司定位，是技术型的？还是服务型的？</p>\r\n<p>　　<strong>戴志康：</strong> 我自己是搞技术出来的，我比较崇尚的是技术型公司。</p>\r\n<p>　　<strong>主持人： </strong>下面我们谈一下关于公司管理的问题。平常你在公司和员工的交流多吗？年龄应该会比你大，怎么处理这个关系？</p>\r\n<p>　　<strong>戴志康：</strong> 年龄不是问题，大家都有同样的志向、同样的理想。所以在开始招聘的时候，这个人可用可不做，我们在开始招聘的时候把关是比较严的我一直在寻找有共同的理想、共同的志向加入到这个Team中，我们不可能提供极高的薪酬和极具竞争力的概念，我们提供的是一个理想，他如果认同这个理想，他会来参与并且来努力工作实现大家共同的价值。</p>\r\n<p>　　虽然我有很多同事的年龄都比我大，但是我依然和他们有共同语言，因为这个项目我是作为管理者出现的，一开始是由我打造、完成的，所以他们自身对我有认同感，我也不是抱着命令、管理的心态，我抱着大家一起参与等等，然后纠正问题，共同实现目标，所以管理问题不大。</p>\r\n<p>　　<strong>主持人： </strong>当你的公司人数多了以后，原来主要是做技术的工作，现在的工作有转变吗？</p>\r\n<p>　　<strong>戴志康：</strong> 现在技术的工作基本上做的极少了，主要是做技术管理、技术交接，比如我原来负责的代码，交接给其他人，再一个是教学的培训，比如每周对新的程序员做指导和讲解，还有对整个公司的发展方向、合作等等方面也会有参与到。</p>\r\n<p>　　<strong>主持人： </strong>我不知道你喜欢什么样的员工，你怎样招到你喜欢的员工的？</p>\r\n<p>　　<strong>戴志康：</strong> 我觉得人和人之间的感觉很重要，其实我对有些人有一种一见如故的感觉，哪怕很长时间不来往，如果有共同的感兴趣的话题，眼睛就会冒着理想相同的光但是在招聘的时候，这种人不多。再一个是你的理想可以激起他的激情的人，如果你跟他讲讲你的理想，他觉得这件事情不错，或者是投身进来做。有时候是你的理想你的激情感染他来努力工作的，这种人不错。</p>\r\n<p>　　因为我们是小的技术创业公司，单纯为了赚钱，单纯为了找一份安稳的工作，这样的人不适合这样的团队。</p>\r\n<p>　　<strong>网友：</strong>请你谈谈创业初始的想法是什么？</p>\r\n<p>　　<strong>戴志康：</strong> 一直很简单，我最开始做这个东西就是为了找工作，首先这个软件本身会有很多人用，用了以后我就出名，出名以后我可以找一份好的工作，我不想念研究生或者在求学方面做进一步的尝试。你起码自身得有一定的产品经验、有一定的技术实力，你做的东西有人用，你就会有好的工作机会。</p>\r\n<p>　　但是真正工作摆在你的面前，你会觉得我之前付出的一、两年的心血中断掉，觉得很不甘心，觉得对不起以前为它付出的时间、精力和感情。所以自己做，做完以后，发现这个产业、这个产品还有小的团队，不断的壮大，你更不可能放弃它，心中有一种责任感或者是使命感把它做好。</p>\r\n<p>　　目前来讲，创业小的团队比较多，其实我觉得我们的创业目的很单纯、很单一，一开始是为了找工作，之后为了一个使命感和责任感，再将来为了实现自己的价值，实现产品的价值、实现团队的价值的目标来奋斗。</p>\r\n<p>　　<strong>主持人： </strong>你从04年毕业从一个大学生转变为公司的管理者的过程中，你觉得你自己学到了什么？</p>\r\n<p>　　<strong>戴志康：</strong> 学到了太多东西，如果有些事情你不去实践，在书中是无法体会到的。我学到的最有用的是怎么样和人建立互相信任、互相了解的过程，这个是最重要的。</p>\r\n<p>　　<strong>主持人： </strong>在创业的过程中经常会向一些人询问一些问题，或者是你不懂的东西吗？</p>\r\n<p>　　<strong>戴志康：</strong> 询问的方式很少，但是经常会交流和聊天，如果别人说到我不懂或者不知道的东西，我回来会仔细看一下。北京的IT环境比较好，我会选择和周围的朋友聊一聊这方面的事情。</p>\r\n<p>&nbsp;</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('560','','1240128462','579','4','1','1','1','','【TechWeb报道】4月17日消息，据国外媒体报道，动视暴雪(Activision-Blizzard) 昨日宣布放弃《魔兽世界》在中国的运营商九城，将《魔兽世界》其独家运营权授予网易公司，期限为三年。分析认为，此举主要是基于财务原因。&nbsp;&nbsp;&nbsp;<br />\r\n<br />\r\n　　暴雪娱乐和九城四年的合同到今年6月份到期，暴雪昨天证实了之前的传闻：将不再同九城续约，《魔兽世界》的经营权将落入九城竞争对手网易之手。对暴雪娱乐而言，网易并不陌生，之前他们就《魔兽争霸III》、《星际争霸II》和战网进行过合作。新的合同将持续到2010年夏天。<br />\r\n<br />\r\n　　这一举措必将沉重打击了九城，当年在九城获得《魔兽世界》授权后的一年，其收入就增加了一倍。今年年初，九城发布的报告显示，魔兽世界玩家数量还在不断增加，2月份《魔兽世界》同时在线人数创造了历史最高记录。<br />\r\n&nbsp;<br />\r\n　　Wedbush Morgan分析师Michael Pachter认为，暴雪娱乐公司之所以选择网易取代九城主要是基于财务原因。在和九城合作期间，据估计暴雪娱乐公司可以获得22%的特许权使用费，也就是每年能获得5000至5500万美元的收入。分析师预计这次同网易合作，暴雪娱乐公司至少可以获得55%的特许权许可费，这样的话年收入可达1.4亿美元。这样一做比较，就可以看出同网易合作要比同九城合作每年多赚9000万美元。<br />\r\n<br />\r\n　　与此同时，动视暴雪公司周四表示预计该公司第一季度收入超出预期，因为《使命召唤》、《吉他英雄》以及《魔兽世界》销售强劲。8.6亿美元的净收入目标很容易实现。<br />\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('561','','1240128514','580','4','1','1','1','','新华网博鳌(海南)4月18日电 (记者杜宇、陈雍容、周慧敏) 工业和信息化部副部长奚国华18日说，2009年一季度中国网民新增1620万人，互联网网民总数达到3.16亿人。<p>　　奚国华是在此间举行的博鳌亚洲论坛2009年年会上作出上述表示的。</p>\r\n<p>　　奚国华说，即便是在国际金融危机给实体经济带来重创的形势下，互联网发展势头依然不减。互联网宽带化趋势更加明显，宽带网民规模占网民总数的90%以上。IPv4地址资源增长迅速，2008年达到1.8亿个，域名总量达到1600万个。中国境内网站数达到287.8万个。</p>\r\n<p>　　奚国华表示，在互联网产业、电子商务、网络广告和网络游戏占据重要地位。据估计，2008年中国电子商务市场规模约为3万亿元，同比增长41.7%。网络广告整体市场规模约为120亿元，同比增长55.8%;网络游戏市场规模在190亿元至200亿元，同比增长50%左右。</p>\r\n<p>　　另外，据奚国华介绍，截至2009年3月，中国电话用户总数达到10.06亿户，其中移动电话用户达到6.7亿户，在电话用户总数中的比重达到66.1%。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('562','','1240128552','581','4','1','1','1','','【搜狐IT消息】北京时间4月17日消息，据国外媒体报道，日本最大半导体企业东芝公司周五透露，其上个财年(截止3月31日)全年净亏损3500亿日元(约合35亿美元)。这是该公司有史以来最大的净亏损。同时，东芝表示将于下月前在日本裁员3900名合同制员工。<p>　　据悉，上月末，东芝公司已经裁掉4500名临时员工。此外，该公司已经延迟或取消投资新工厂的计划。</p>\r\n<p>　　先前，东芝曾估计亏损2800亿日元，实际超出这个数字。该公司将其中原因部分归于一项850亿日元的递延所得税计划。</p>\r\n<p>　　今年1月，东芝宣布重组计划，旨在一年内节约固定开支3000亿日元。有分析师认为，东芝对节约开支的预期过于乐观。其他分析师则对东芝的债务情况表示担忧，尤其是在眼下信贷艰难的情况下。</p>\r\n<p>　　上月，东芝公司的管理层发生了一些变化，现任首席执行官西田厚聪(Atsutoshi Nishida)将于6月下台，取而代之的是公司社会基础设施部负责人佐佐木则夫(Norio Sasaki)。</p>\r\n<p>　　65岁的西田厚聪担任CEO达4年，在任期间，他对东芝进行了大范围扩张，包括2006年投资37亿美元收购西屋公司(Westinghouse)股份以加强对核能源工业的控制。此外，还投入大量资金扩大闪存芯片的产量。</p>\r\n<p>　　2007年，东芝花费10亿美元购入一家索尼工厂并为索尼的PS3生产处理器。今年2月，东芝表示和富士通达成协议，准备购买其硬盘业务，不过尚未对收购价格达成一致。在进行收购之后，东芝将成为世界上最大的笔记本硬盘制造商。</p>\r\n<p>　　尽管营收有所增长，但分析师表示，西田厚聪的扩展性战略受全球经济危机影响将没法实现，而需求下降、芯片价格下降加上股价下跌，使东芝在养老金计划及信贷级别分类上面临巨大压力。(柯柯编译)</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('563','','1240128654','582','4','1','1','1','','<div><span style=\"color:#525252;font-size:9pt;\">韩国的购物网站现在不仅仅是卖东西的商城了，服务已经囊括了搜索、信息共享、价格比较等。有的</span><span style=\"color:#525252;font-size:9pt;\">C2C</span><span style=\"color:#525252;font-size:9pt;\">网站甚至还增加了游戏、漫画、电影等一些只有在门户网站里才会经常用到的服务。再加上直接访问购物网站的网民比重在增加，大有“摆脱”门户网站特别是“</span><span style=\"color:#525252;font-size:9pt;\">naver</span><span style=\"color:#525252;font-size:9pt;\">”的意图。因为这些购物网站目前在</span><span style=\"color:#525252;font-size:9pt;\">Naver</span><span style=\"color:#525252;font-size:9pt;\">里投放了大量的广告，还要支付成交后的手续费，这些开支的比重是很大的。</span></div>\r\n<div><span style=\"color:#525252;font-size:9pt;\"><br />\r\n</span><span style=\"color:#525252;font-size:9pt;\">依据</span><span style=\"color:#525252;font-size:9pt;\">Rankey.com</span><span style=\"color:#525252;font-size:9pt;\">（览客韩国）的数据来看，</span><span style=\"color:#525252;font-size:9pt;\">Naver</span><span style=\"color:#525252;font-size:9pt;\">给</span><span style=\"color:#525252;font-size:9pt;\">Gmarket</span><span style=\"color:#525252;font-size:9pt;\">带来的访客流量已经从</span><span style=\"color:#525252;font-size:9pt;\">2006</span><span style=\"color:#525252;font-size:9pt;\">年的</span><span style=\"color:#525252;font-size:9pt;\">39%</span><span style=\"color:#525252;font-size:9pt;\">降低到去年的</span><span style=\"color:#525252;font-size:9pt;\">26%</span><span style=\"color:#525252;font-size:9pt;\">。另外，从收入结构来看购物网站也正趋同于门户网站，</span><span style=\"color:#525252;font-size:9pt;\">2005</span><span style=\"color:#525252;font-size:9pt;\">年购物网站的广告收入和其他收入所占比重从</span><span style=\"color:#525252;font-size:9pt;\">2005</span><span style=\"color:#525252;font-size:9pt;\">年的</span><span style=\"color:#525252;font-size:9pt;\">19%</span><span style=\"color:#525252;font-size:9pt;\">增加至去年的</span><span style=\"color:#525252;font-size:9pt;\">45%</span><span style=\"color:#525252;font-size:9pt;\">。</span><span style=\"color:#525252;font-size:9pt;\"><br />\r\n<br />\r\n</span><span style=\"color:#525252;font-size:9pt;\">相关业界资深人士表示“</span><span style=\"color:#525252;font-size:9pt;\">Gmarket</span><span style=\"color:#525252;font-size:9pt;\">的广告效果并不亚于门户网站”，“会员数为</span><span style=\"color:#525252;font-size:9pt;\">1570</span><span style=\"color:#525252;font-size:9pt;\">万名，每月平均访问人数在</span><span style=\"color:#525252;font-size:9pt;\">1810</span><span style=\"color:#525252;font-size:9pt;\">万人，所以广告招商并不难”。</span><span style=\"color:#525252;font-size:9pt;\"><br />\r\n<br />\r\n</span><span style=\"color:#525252;font-size:9pt;\">目前很多公司都在争先恐后开通门户型服务，所以也加速了购物网站向门户网站发展的进程。</span><span style=\"color:#525252;font-size:9pt;\">Interpark</span><span style=\"color:#525252;font-size:9pt;\">在开通了与</span><span style=\"color:#525252;font-size:9pt;\">Naver</span><span style=\"color:#525252;font-size:9pt;\">“知识购物”相似的价格比较服务“</span><span style=\"color:#525252;font-size:9pt;\">e</span><span style=\"color:#525252;font-size:9pt;\">最低价”后，很受欢迎。在整个网站的</span><span style=\"color:#525252;font-size:9pt;\">15</span><span style=\"color:#525252;font-size:9pt;\">个频道里流量处于第三，使用率比较高。</span><span style=\"color:#525252;font-size:9pt;\">D&amp;shop</span><span style=\"color:#525252;font-size:9pt;\">也开通了</span><span style=\"color:#525252;font-size:9pt;\">3</span><span style=\"color:#525252;font-size:9pt;\">个商品比较、搜索服务，反应也不错。</span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"color:#525252;font-size:9pt;\">另外购物网站也在强化类似于门户的趋势信息和内容。</span><span style=\"color:#525252;font-size:9pt;\">Lotte.com</span><span style=\"color:#525252;font-size:9pt;\">发行的类似于时尚杂志的“</span><span style=\"color:#525252;font-size:9pt;\">Fashion &amp; The City</span><span style=\"color:#525252;font-size:9pt;\">”的每周浏览量也在</span><span style=\"color:#525252;font-size:9pt;\">200</span><span style=\"color:#525252;font-size:9pt;\">万以上，</span><span style=\"color:#525252;font-size:9pt;\">istyle24</span><span style=\"color:#525252;font-size:9pt;\">在</span><span style=\"color:#525252;font-size:9pt;\">2006</span><span style=\"color:#525252;font-size:9pt;\">年开通“时尚杂志”频道以后，已经拥有了</span><span style=\"color:#525252;font-size:9pt;\">3000</span><span style=\"color:#525252;font-size:9pt;\">多个时尚精华内容，</span><span style=\"color:#525252;font-size:9pt;\">Hmall</span><span style=\"color:#525252;font-size:9pt;\">的最新杂志“</span><span style=\"color:#525252;font-size:9pt;\">HMall</span><span style=\"color:#525252;font-size:9pt;\">杂志”也可以免费阅读。</span><span style=\"color:#525252;font-size:9pt;\"><br />\r\n<br />\r\n</span></div>\r\n<div><p><span style=\"color:#525252;font-size:9pt;\">Gmarket</span><span style=\"color:#525252;font-size:9pt;\">事业部的柳光进董事说：“信息提供、价格比较”等这些不亚于门户网站的服务拓宽了购物网站的服务范围，如果能通过差异化服务来提高用户黏度，那么购物网站将从门户网站的影响中走出来。</span><span style=\"color:#525252;font-size:9pt;\"><br />\r\n</span></p>\r\n</div>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('564','','1240128744','583','4','1','1','1','','<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/4/1_20090419160422_PjOh8.jpg\" width=\"583\" height=\"370\" border=\"0\" alt=\"23.jpg\" title=\"23.jpg\" /></p>\r\n<p>根据我个人对互联网产品经理（以下简称PM）的理解，画了上面这个草图，想表达几方面的内容：</p>\r\n<p>1、蓝色箭头指向代表PM在工作过程中要接触到的对象。<br />\r\n2、蓝色箭头以PM为中心，指向周围的各部门，说明其在沟通和协调过程中扮演着主动的角色。<br />\r\n3、绿色箭头代表，互联网企业中，PM最经常由哪些工种转变而来。<br />\r\n4、整个图形是人的形状，头部、左膀右臂、双脚、心脏。</p>\r\n<p>我做的这个图只能说具有代表性，不具普遍性，因为企业不同、部门组织不同、管理模式不同都决定PM在工作过程中有差异。今天我只是希望用这个图来和大家讨论一下PM在职业生涯中的起点、支点、增长点。</p>\r\n<p><strong>一、产品经理的起点</strong></p>\r\n<p>图中有三条绿色的虚线，分别指向PM，说明这三个部门或者说这三类工种最可能发展为PM，他们分别是负责产品营销的部门、负责产品运营的部门、负责产品实现的部门。</p>\r\n<p>负责产品营销的部门和市场接触最多，对市场的需求也会逐渐的更了解，而一个产品的起点就在于市场的需求。所以只要能把市场需求表达出来，并让产品实现的部门加以实施，这就已经是PM的起点了。从市场转过来的PM个性很鲜明，沟通能力强、表达能力强、应变能力强，但毕竟还处在过渡阶段，需要学习的方向是产品的管理和经营，例如设计产品功能并且做出产品初步原型，描述产品逻辑等等。</p>\r\n<p>负责产品运营的部门可以说掌握着丰富的行业资源，他们拥有BD、PR、客服等等工种。他们了解行业，对同类产品的历史和现状甚至小小的改动都知晓。用网络游戏行业来举例，盛大是一个典型的游戏运营商，也许他们根本不需要自己开发游戏，只需要把别人做好的游戏产品拿来运作就行，可是一旦他们决定要自己开发一款网络游戏的时候就可以很快的实施，因为他们在运营产品的同时积累了大量的产品经验和市场经验。所以这个部门下的工种也是很容易转为PM的。</p>\r\n<p>负责产品实现的部门，这是现在PM的黄埔军校，可以说80%的PM是从这个部门走出来的。这个部门最了解产品的功能、使用逻辑、数据结构、信息结构等等。他们掌握着产品的“形”。再加上现在好多公司将负责开发的项目经理、负责产品demo的产品设计都称为PM。</p>\r\n<p>还有一种特殊的现象，就是好多企业的老板或者CEO，都在兼任着PM这个职务的事情。</p>\r\n<p>各位看官，您在企业担任的工种是否属于以上几个部门之中呢？如果是，那么可以试试往PM方向发展哦。</p>\r\n<p><strong>二、产品经理的支点</strong></p>\r\n<p>如果想往PM方向发展，或者现在就已经渐渐的进入PM这个角色，那么需要具备哪些支点来支撑PM这个职位的发展呢？</p>\r\n<p>1）脸皮要厚</p>\r\n<p>文章开始那副图表现的是，蓝色箭头以PM为中心，指向不同的部门。说明其在沟通和协调过程中扮演着主动的角色。</p>\r\n<p>各位男士都追过女生吧？主动的前提不就是脸皮厚么？如果在约会之前考虑要是被拒绝了该多丢脸啊，考虑约对方会不会让对方生气，考虑对方是不是根本就不会理睬自己，最后自己被自己吓着了，决定放弃。</p>\r\n<p>PM在工作过程中也是一样，会有很多计划外的事情，例如调整页面、需求变更、迎合市场需要临时做个专题等等。不可能任何事情都在各部门的计划之内，那么在别人档期之外的事情，PM如何实施呢？都找领导来协调？如果事事都这样还需要PM做什么？那就脸皮厚点，豁达一些，都是有感情的动物，没有什么事情是协调不了的。丢点面子是小，耽误了事情那就麻烦大了。</p>\r\n<p>另外，PM在产品管理经营过程中，会遇到很多临时性的沟通，不敢保证每次沟通PM都能够理解，都能够记住，需要PM多问多了解，如果PM自身姿态过高，那么很可能因为不重视而出现问题。</p>\r\n<p>至于其他支点或者说PM应该具备的技能，有篇文章说得很全面，包括沟通能力、无授权领导能力、学习能力、商业敏感度、热爱产品、注重细节、日常产品管理能力等等，推荐大家看看《<a href=\"http://hi.baidu.com/myey8/blog/item/a24a87640d2514f8f636547d.html\" target=\"_blank\"><font color=\"#0033cc\">产品经理应具备的能力</font></a>》</p>\r\n<p>作为一名成功的PM，除了具备这些能力之外，还有一个必须的支点，那就是心态，工作1-5年是锻炼一个人的能力，5-10年更多的就是在锻炼心态，关于这个问题以后会专门和大家讨论。</p>\r\n<p><strong>三、产品经理的增长点</strong></p>\r\n<p>担任PM的这三年多的时间里，我深深的被这个职位所着迷，对我来说，PM已经不仅仅是一份工作，更多的是一种生活方式。当然，我也担心时间长了会出现“审美疲劳”的问题，于是我也常想，PM能做多久、能向哪里发展、能如何一直着迷下去。</p>\r\n<p>首先：PM在一个企业中因为接触的领域最广，所以需要学习的东西也要最多，不需要成为专才，但是起码也得是个通才。所以PM是个不断积累的职业，即使有一天你失去了这个职位，那么积累的东西别人是拿不走的。</p>\r\n<p>其次：都说PM其实是这个产品的CEO，那么PM之后出来自己创业至少可以比较快的进入状态，能少走一些弯路。</p>\r\n<p>第三：PM既然是和产品捆绑在一起的，那么产品的市场应该也是和PM有关系的，产品业绩的好坏也需要作为PM考核的一部分，产品卖得好，PM拿的薪水多，没有达到市场预期就扣PM的薪水，那么PM其实可以是个薪酬丰厚的职位。</p>\r\n<p>第四：无论互联网行业还是传统行业，PM都是相通的，跨行业并不难。</p>\r\n<p>等等等等???</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('565','','1240129177','584','38','1','1','1','','<p>遗体告别厅内，儿女们带着一大帮亲戚朋友围着逝去老父亲的遗体做最后的告别，谁知就在极度悲伤的泪眼朦胧中，惊见棺中的遗体竟不是老父亲。昨日，成都市一蒲姓六姐弟就在东郊殡仪馆遇此怪事。到底是谁犯下如此大错，家属和殡仪馆方面说法不一。 </p>\r\n<p><b>遗体告别到一半 突然发觉跪错人</b> </p>\r\n<p>&nbsp;</p>\r\n<p>昨日上午，记者接到一位喻姓先生打来的电话称，他们清晨到东郊殡仪馆去对逝世老人进行遗体告别，都进行到半途，惊见棺中的遗体竟不是自家老人。喻先生说，逝世老人叫蒲平章，88岁，是他的岳父。星期一在成都去世后，遗体随后被送到东郊殡仪馆，约定昨天早上7时过火化。 </p>\r\n<p>&nbsp;</p>\r\n<p>昨日清晨6点多，蒲平章的六个子女和其他二三十位亲朋抵达殡仪馆。“我们先去了前台把号领了，对方把我们带到翠竹2厅，把单子交给司仪。司仪问了名字后就开始主持。跪拜后我们就开始瞻仰仪容，大家心情沉重，前头都走了几个人了，我岳父的二女儿和三女儿走过去瞻仰时往棺材里看，才突然发觉那不是我们的老人。”喻先生说，当时大家极为惊讶，但司仪说人死了后，过两天是有变化。“但再咋变也不至于连儿女都认不到了，而且这棺材中的大爷显然比我们的老人年轻20来岁”。司仪再次比对了单子后说的确是弄错了，于是又带领大家来到距离这2号厅10来米远的5号厅，在这里找到了蒲平章的遗体，司仪将前面的程序也简化了，直接让家属跪拜、瞻仰。 </p>\r\n<p>&nbsp;</p>\r\n<p><b>免了火葬费 还赔了1万2</b> </p>\r\n<p>&nbsp;</p>\r\n<p>如此意外让喻先生等一帮亲朋无法接受，他们找到殡仪馆评理，要求对方免除火葬费并赔付1.2万元精神损失。最终，殡仪馆的业务科科长及相关领导出面答应了这个要求。 </p>\r\n<p>&nbsp;</p>\r\n<p>就在双方理论时，该馆一位高个、眼镜男子出言不逊，还与喻先生儿子发生抓扯，让亲人们很是不爽。要求眼镜男道歉未果后，喻先生等人只得带着亡父骨灰朝老家出发。 </p>\r\n<p>&nbsp;</p>\r\n<p><b>记者调查 带错路是如何发生的？</b> </p>\r\n<p>&nbsp;</p>\r\n<p><b>殡仪馆：带路的不是我方职员</b> </p>\r\n<p>&nbsp;</p>\r\n<p>昨日下午2时，记者来到东郊殡仪馆采访。对于遗体告别过程中出现巨大错误，工作人员承认有此一事，但并非殡仪馆工作人员的错，因为家属去悼念前并未到前台接洽，而是由外面找的丧葬一条龙服务的“串串”带进悼念厅的，“串串”把厅搞错了，他们家属自己也没有先看清楚。 </p>\r\n<p>&nbsp;</p>\r\n<p>“1.2万元是\"串串\"赔的” </p>\r\n<p>&nbsp;</p>\r\n<p>为了证明该馆员工没有错，眼镜男子李先生随后带记者观看监控录像。记者在监控录像上看到，清晨6时31分，喻先生等30多位家属陆续被一名男子带到翠竹二厅，3分钟后，一名戴工作牌的男子从楼梯上走下。李先生说，带家属进来的男子并非该馆工作人员，而是外头的“串串”，而后来从楼梯下来的人才是该馆的司仪，可见该错出在“串串”身上，与馆方人员无关。同时他称，赔付1.2万是“串串”赔的，所谓免除的火化费，也是“串串”给的，殡仪馆收了这笔费用。 </p>\r\n<p>&nbsp;</p>\r\n<p>希望有相关部门打“串串” </p>\r\n<p>&nbsp;</p>\r\n<p>据馆内人员介绍，逝者停放在哪里供亲朋悼念，是殡仪馆来安排，但该馆外活跃着一群“串串”，他们带着死者亲属前往悼念厅时，常常手臂戴纱装逝者家属，我们也无法分辨，我们也希望有相关部门协助我们打击非法\"串串\"。” </p>\r\n<p>&nbsp;</p>\r\n<p>为了印证是“串串”出错，殡仪馆的李先生当场让一名保安前去通知那位</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('566','','1240129339','585','35','1','1','1','','<p>记者从河南省文物考古研究所获悉，考古人员在河南省新郑市首次发现距今两千多年前的战国晚期韩王陵，填补了韩王陵的考古空白，在中国陵墓考古方面具有重要意义，已经入选2008年度全国十大考古新发现25项入围名单。 </p>\r\n<p>发现韩王陵的胡庄墓地位于全国重点文物保护单位“郑韩故城”之西，是东周时期郑韩故城外围的重要墓地之一。2006年10月至今，河南省文物考古研究所开始对其发掘，目前发掘面积已超过12000多平方米。 </p>\r\n<p>考古队领队、河南省文物考古研究所副研究员马俊才说，发掘已证实胡庄墓地的核心是两座带封土的战国晚期“中”字形大墓，从中出土的数十件青铜器上发现的“王后”“王后官”和“太后”刻铭，可以确定这里是一处以夫妇墓为核心的战国时期韩国晚期王陵，其规模之宏大、形制之特殊在国内罕见。 </p>\r\n<p>陵园呈近长方形，面积4万多平方米，布局规整。“当初应该进行了详细的规划，特别是墓室的方向、大小、封土及陵上建筑布局相当一致，体现了陵园平面设计和施工的严密性。”马俊才说。 </p>\r\n<p>马俊才介绍说，两座装饰豪华、结构极为复杂的大墓周围，环绕着的3条壕沟，各沟相互平行，间距20米左右，南部中央留有较宽的门道。沟间各有一条短沟相互沟通，组成了面积宏大的陵区排水和防御体系，这种迹象是国内同期墓葬中首次发现的。“由环壕、墓旁建筑、陵墓和陵上建筑组成的陵园形态填补了东周陵墓空白。” </p>\r\n<p>考古发掘还证实，战国韩陵的封土形态为“中”字型，与当时齐、赵、楚、燕等国的大型墓有着显著不同。 </p>\r\n<p>考古人员还在西北发掘区的北端发现1条东西向的战国道路，宽7米左右，由路面和路边沟组成，路面上有多道车辙痕迹。这是郑韩故城外围发现的首条大道，为研究韩国都城的交通提供了罕见的新材料。 </p>\r\n<p>据介绍，韩王陵虽然部分文物被盗，但出土的500多件(套)精美绝伦的珍贵文物，依然展现了2000多年前王室的奢华，对研究战国时期韩国的各类制度和手工业、建筑技术等，提供了难得的实物资料。 </p>\r\n<p>马俊才介绍，两座大墓中，夫人墓几乎被盗一空，韩王墓虽然被盗也很严重，但目前已清出青铜礼器、乐器、银器、兵器、车马器、杂器、玉器、陶器、骨器等各种质地的文物，是战国时期韩国文物的一次重要发现。 </p>\r\n<p>经初步去锈，专家已在铜鼎、削、盖弓帽、车辖、鞋底形铜足等100多件铜器上发现刻铭，内容多为方向序号，其中在铜鼎上发现有“王后”刻铭，在铜戈上发现“左库”等战国时期韩国官署名称。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('567','','1240129394','586','35','1','1','1','','据美国<a href=\"http://news.39.net/mtpl/\" target=\"_blank\"><font color=\"#000000\">媒体</font></a>13日报道，3月27日，美国得州21岁小伙尼古拉斯在一场街头斗殴中头部重伤，于4月5日去世。悲痛欲绝的母亲密希决定从儿子身上提取精子，并找一名“代孕母亲”孕育孙辈。然而由于涉及伦理争议，<a href=\"http://yyk.39.net/\" target=\"_blank\"><font color=\"#000000\">医院</font></a>方面断然拒绝。日前，法庭作出裁决，密希有权提取儿子的精子，用于繁衍孙辈。<p><strong>　　绝望母亲欲留亡儿精子</strong></p>\r\n<p>　　据报道，上月21日，尼古拉斯在得州首府奥斯汀市的一家酒吧外与人发生口角，争斗之中被对方推倒在地，头部受伤当场不省人事。尼古拉斯随即被送往奥斯汀市布拉肯里奇医院抢救，然而两周之后，终因伤重于4月5日不治身亡。儿子的突然离世让其母亲、现年42岁的密希悲痛欲绝。目前，警方仍在全力搜捕肇事凶手。</p>\r\n<p>　　为了让儿子“遗爱人间”，密希主动提出将儿子的器官捐赠给他人。与此同时，她冒出一个大胆想法，从儿子身上提取精子，以便孕育一个孙辈。随后，她就此与22岁的大儿子以及业已离异的前夫进行商<a href=\"http://jck.39.net/jiancha/huaxue/bian/4e7e1.html\" target=\"_blank\"><font color=\"#000000\">量</font></a>，结果他们也一致表示赞同。然而，当她要求布拉肯里奇医院提取精子时，却遭医院拒绝。理由是，她的这一举动“并未得到死者本人的同意”。</p>\r\n<p><strong>　　“死后为人父”引伦理争议</strong></p>\r\n<p>　　同时，密希欲从亡儿遗体提取精子孕育孙辈的想法也引起一场激烈的伦理争论。达拉斯市伦理学家汤姆表示：“这名‘冷冻婴儿’的生父死了。他的母亲将是一位卵子捐赠者或者匿名的代孕母亲。将来孩子懂事后，一旦明白自己的出身，对于其心理上的打击可想而知。”</p>\r\n<p>　　美国俄亥俄州扬斯敦州立大学哲学和宗教<a href=\"http://news.39.net/kyfx/\" target=\"_blank\"><font color=\"#000000\">研究</font></a>教授沃帕特也指出，“即使尼古拉斯生前表达过生儿育女的愿望，也不能就此认定他愿意在死后当上某个孩子的父亲。”</p>\r\n<p><strong>　　法庭破例从速裁决：胜诉!</strong></p>\r\n<p>　　无奈之下，密希一纸诉状告上法庭。她称，儿子尼古拉斯生前对电影制作、政治和音乐有着浓厚的兴趣，他在生前也曾多次表达过生儿育女的愿望。她说：“我儿子希望读电影学院，还希望将来生3个孩子。可是现在，有人将这一切都无情地剥夺了。我现在只想让他继续活着，让他的一部分得以延续。如果我儿子活着的话，他一定会赞成我这样做的。”</p>\r\n<p>　　密希的代理律师马克表示：“这个案子其实并不复杂。因为没有人提起反对。”由于死者的精子“保鲜期”有限，4月7日，当地法庭破例从速作出裁决：密希有权提取亡儿的精子，用于繁衍孙辈。同时责令医院，将死者尸体保持在摄氏4度以下，以便<a href=\"http://talk.39.net/zjft\" target=\"_blank\"><font color=\"#000000\">专家</font></a>提取精子。</p>\r\n<p><strong>　　成功取精将找代孕母亲</strong></p>\r\n<p>　　4月8日晚，一名大夫从尼古拉斯遗体上提取了睾丸组织。令密希欣慰的是，儿子的精子仍有活力，于是她急忙想办法将其冷冻起来。</p>\r\n<p>　　密希表示，目前她不敢确定何时能够找到一位代孕母亲，实现其“孕孙计划”，可是她将义无返顾。这位<a href=\"http://oldman.39.net/lrxl/\" target=\"_blank\"><font color=\"#000000\">固执</font></a>的母亲坚定地表示：“也许这将令我倾家荡产，可是我别无选择。因为只有这样，才能让我的心灵得到些许抚慰。我希望尽快找到一位代孕母亲，以便进行人工授精。一旦孩子降生，我将亲自负责养育。”</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('568','','1240129426','587','35','1','1','1','','张家界市桑植县廖家村镇冲天溪村72岁的余本贤老人时隔20多年后再次做了父亲，在这张合影中，余本贤面对镜头略显拘谨，李仙兰抱着儿子天赐笑得很开心。<p>　　潇湘晨报4月14日报道 72岁的余本贤老人有点害怕见人，原因是撞上了世上少有的大喜。去年12月5日，他时隔20多年后再次做了父亲，生下一男孩。</p>\r\n<p>　　孩子刚生下来时，全家人心情都有点乱。念小学的外甥要喊宝宝舅舅;女儿未生，母亲先生;高龄母亲时常要在大儿大女前露出胸脯奶孩子……</p>\r\n<p>　　4月8日下午，记者来到张家界市桑植县廖家村镇冲天溪村肖家组拜访了余本贤一家，这里距长沙约600公里，群山、环水、夹田，村里春日就是一幅天生的浓郁水墨画。</p>\r\n<p><strong>　　“从天而降”的小孩取名天赐</strong></p>\r\n<p>　　记者远远就见到了山下的一栋楼房晒坪前坐着两位大人，在太阳下带着小孩。可记者进屋时，余本贤不见了。只有李仙兰抱着儿子招呼客人。</p>\r\n<p>　　“遇到人串门，老余就会躲开，溜到屋旁的地里劳作。等客人走了，再出来。但现在的胆量比当初大多了。”李仙兰解释。</p>\r\n<p>　　她怀抱里的小男孩非常漂亮，眼睛瞪得溜圆，左顾右盼，一点也不怯场。</p>\r\n<p>　　外面有风，小孩只穿了两件单衣。李仙兰兴奋地说，小孩一直在吃母乳，至今连喷嚏也没有打一个，也从不瞎吵，身体好的很。</p>\r\n<p>　　晚年得子，家人满心喜悦，只是在边远农村，这种喜悦变成了闷喜。孩子满月时，村里人都要去喝喜酒。但全被李仙兰挡住了，俩口子都认为，“太不好意思了!”</p>\r\n<p>　　村里人说，小孩是从天而降的，村里的老师专门给小孩取名，就叫余天赐。</p>\r\n<p>　　一家人都把小孩当做了宝贝，哥哥送来了童车、姐姐送来尿不湿、米糊。赶集时，也要用背篓带着小弟弟见见山外的世界。</p>\r\n<p>　　10多分钟后，余本贤终于出现。精瘦。花白头发。衣服上粘着泥巴，刚从田里回来。他仍是有点害羞，不说话，但脸色热情。从怀里拿出旱烟、纸片，唾上唾液，点火。李仙兰的脚碰了他几下，余本贤迅速踩灭旱烟。</p>\r\n<p><strong>　　老汉一周仍保持五次性生活</strong></p>\r\n<p>　　“你到底多大年龄?”</p>\r\n<p>　　余本贤还是未说，从里屋找出身份证。“出生日期1939年8月15日”。但他俩口子都说是1937年出生的。余本贤把抗日战争爆发与他的出生年份相关联，证明自己的真实岁数。</p>\r\n<p>　　老人像是知道记者的意图。他直接回答，“一餐能吃半斤，田里农活没一样比年轻人差。活到70多岁，还未生过病。”</p>\r\n<p>　　余本贤说自己身体特好时，李仙兰却起身到外面吆喝一群小鸡吃食。</p>\r\n<p>　　余本贤的话题越来越开，如从未见过补品，吃的是土猪土鸡土菜;从未熬夜，八点睡七点起;从未有名利之争……还有，他出生地主家庭，小时从未饿过肚子。</p>\r\n<p>　　也因为他的特殊身份，无人敢与他接触，直到46岁才与小她24岁的李仙兰结婚。余本贤不显老，与李仙兰谈恋爱时，说只有28岁。</p>\r\n<p>　　说到儿子的出生，夫妇俩都觉得不可思议。</p>\r\n<p>　　“已经是20年未生育了，没想到还会怀孕。”余本贤说。记者在村里打听到，余本贤夫妇口碑非常好，感情特别密切。甚至还有人说的很直白，“听老余说过，现在一周仍保持五次性生活。”</p>\r\n<p>　　1989年，李仙兰曾经做结扎手术。“输卵管做了一半，但是大出血，昏厥，六七天没有醒来，连棺材都准备好了。”李仙兰回述时仍很紧张。</p>\r\n<p><strong>　　心情是“半边喜来半边愁”</strong></p>\r\n<p>　　今年12月5日下午，李仙兰在救护车上就要分娩，原本去桑植县医院的车子只好选近，在廖家村镇中心卫生院待产。卫生院护士尚秀玲告诉记者，“足月分娩，非常顺利，男婴体重3.1公斤，一切健康。”</p>\r\n<p>　　余本贤形容自己的心情是老鼠掉在米缸里，半边喜来半边愁。“就算自己能成为百岁老人，小孩也只有28岁，读书、成家一系列问题都让人操心。”</p>\r\n<p>　　而屋旁的两亩多田，那就是余本贤一家的收入所在。</p>\r\n<p>　　让余本贤更为操心的是，早在10多年前，他就提出要做男性结扎手术。但医院认为他的年龄太大，担心出现意外。如果妻子明年又怀孕，那将咋办?</p>\r\n<p>　　余天赐出生了，给当地极大震惊，他出生的第二天，全乡在育龄妇女中进行了一次地毯式地清查。</p>\r\n<p><strong>　　专家观点</strong></p>\r\n<p><strong>　　良好的环境、心态、生活习惯是男性功能强大的条件</strong></p>\r\n<p>　　昨天，省人民医院泌尿外科主任高智勇告诉记者，72岁男子还具有生育能力，说明身体状况非常好，这种现象较为少见。一般而言，男性上了50多岁，男性功能明显成下滑趋势。上了65岁，大都只能靠抚摸等产生联想。具有超强能力的老人，不外乎具备几个特点，居住的环境好、心态好、良好的生活习惯等等。另外，男性做完结扎手术后是不会影响体力的，一般不会受年龄限制。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('569','','1240129508','588','35','1','1','1','','<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/35/1_20090419160452_PnNPa.jpg\" width=\"408\" height=\"291\" border=\"0\" alt=\"23.jpg\" title=\"23.jpg\" /></p>\r\n<p>屁股一撅，双腿蹬地，63岁的黄婆婆一双拄在地上的双手开始有频率地不断弯曲，不见喘气、不见红脸，一分钟轻轻松松做了97个俯卧撑。</p>\r\n<p>　　这是记者昨日在温江区公平镇昌平街菜市上的亲眼所见。<a href=\"http://oldman.39.net/\" target=\"_blank\"><font color=\"#000000\">老人</font></a>能做俯卧撑已是远近闻名，所以她向以1分钟做106个有效动作成为“俯卧撑之王”的王积跃叫板，大家也都不吃惊。不过，黄婆婆极不标准的俯卧撑，让积极迎战的王积跃认为自己赢定了，还奉劝这老人家“稳到点”!</p>\r\n<p><strong>　　一口气做97个俯卧撑</strong></p>\r\n<p>　　婆婆叫黄天楞，家住昌平街菜市。前日刚与老朋友们爬了龙泉的金龙长城，腿脚有些许疲累的她，昨日上午在记者面前表演起了她的拿手绝活——俯卧撑。“看，我的肌肉。”趴下之前，她先把衣袖挽得老高，伸出双臂来了个健美教练的招牌动作，双臂弓二头肌竟拱起小小的一坨。</p>\r\n<p>　　“预备，开始!1，2，3……”只见黄婆婆趴在地上，屁股撅起老高。虽然动作不太标准，但速度还是挺快。30秒过去了，黄婆婆的速度有些放慢，不过她还是坚持做完。“停，时间到了。”1分钟之内黄婆婆竟然做了97个俯卧撑。随后她慢慢站起，躺在沙发上，面不改色，轻描淡写地说：“还行，只有一点累。”</p>\r\n<p><strong>　　俯卧撑练了整7年</strong></p>\r\n<p>　　“我就是喜欢出去耍，在家里呆不住。”黄婆婆说，2002年时她住在水电七局附近，那有很多<a href=\"http://oldman.39.net/\" target=\"_blank\"><font color=\"#000000\">老年</font></a>人每天都要练太极和<a href=\"http://sports.39.net/ydxm/qtyd/qg/\" target=\"_blank\"><font color=\"#000000\">气功</font></a>，于是她就跟着学了些，虽然手曾经受伤，但伤渐渐恢复了，身体也变得越来越好。坚持锻炼中，她发现自己力量不错，开始涉足<a href=\"http://sports.39.net/ydxm/ztyd/ywqz/\" target=\"_blank\"><font color=\"#000000\">仰卧起坐</font></a>和俯卧撑。现在，她仍然坚持每天早上天一亮起床，锻炼1至2小时。</p>\r\n<p>　　“我基本上没咋生过病，身体健康就给国家减轻负担了嘛。”黄婆婆打趣说道，自己是小区老顽童，心态好得很。</p>\r\n<p><strong>　　要挑战“俯卧撑之王”</strong></p>\r\n<p>　　黄婆婆要挑战有“中国俯卧撑之王”称号的王积跃，这个消息早在几天前就传开了。昨日记者向她求证此事，她表示挑战是真，不过“考虑到我这么大年纪，又是女性，所以“对我要抛高算”，这样基本能与王积跃打个平手。</p>\r\n<p><strong>　　“俯卧撑之王”：尽管放马过来</strong></p>\r\n<p>　　记者联系上在四川省教育出版社做高级编辑的王积跃，已经练习俯卧撑21年的他说，有6旬太婆要挑战他的消息，已经传到他耳朵里了，不过只听这老人的岁数，他就断定老婆婆输定了。“她尽管放马过来……但需要找几个裁判，先把俯卧撑的标准姿势说好。”他同时提醒称，俯卧撑项目不适合尚处于生长发育阶段的少年儿童，也不适合50岁后的中年人，它在女性肌力中也不具代表性，所以劝黄婆婆还是“稳到点”，不要用力过度反而引发脑溢血等病症。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('570','','1240129535','589','35','1','1','1','','　据《眉山日报》报道四川仁寿县曲江乡，有一个13岁小姑娘燕燕，她不吃饭、不喝水，平日以香蕉、果冻代食。不睁眼、不说话，当有陌生人靠近时，会张嘴咬向靠近者。由于行动也是像蛇一样蠕动爬行，当地人都称呼她为“蛇娃”。<p>　　3月16日，记者赶到曲江乡金谷村7组的刘仲良家时，一个全身脏乱不堪、长发凌乱的小女孩顺从地趴在一个中年妇女的背上，像睡着了一样。当中年妇女把她放在地上的一刹那，双目紧闭、双唇也紧闭着的小女孩，竟然侧着身体一左一右地蠕动了起来，举止活像一条蛇。</p>\r\n<p>　　她的母亲周小英说，燕燕是家里的老二，今年13岁。以前的她很乖，虽然性格有些内向，但学习成绩很好，很会画画。2008年的10月，一次燕燕<a href=\"http://jbk.39.net/keshi/neike/huxi/48eea.html\" target=\"_blank\"><font color=\"#000000\">感冒</font></a>发高烧，当时吃了药后，感冒就完全好了。可是，就在病愈十多天之后，燕燕突然开始有了一些反常的小动作，去年的腊月二十七，燕燕突然昏倒，醒来后，便成了现在的样子。到现在，燕燕的病情依然没有得到确诊。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('571','','1240129591','590','35','1','1','1','','发现“肉弹”的消息在茶城传开，立时吸引来众多围观者。有人说它是超大异型的蘑菇，也有人怀疑它不是地球上的生物。为弄清“肉弹”的真实身份，于先生从它身上切下一小块样本，送到了省<a href=\"http://cm.39.net/\" target=\"_blank\"><font color=\"#000000\">中医</font></a><a href=\"http://news.39.net/kyfx/\" target=\"_blank\"><font color=\"#000000\">研究</font></a>院。经<a href=\"http://talk.39.net/zjft\" target=\"_blank\"><font color=\"#000000\">专家</font></a>初步鉴定，证明此物是世间难得一见的“太岁”，又叫高粘合性菌类，具有较高的食用和药用价值。<p>　　昨天，记者来到于先生存放“太岁”的地方，见此物高约82厘米，直径46厘米，重达130多公斤。外形呈圆柱状，表皮为土黄色泛红，内部为乳白色似菌类组织的百叶结构。这个“太岁”富有弹性，用手摸一下感觉发凉，还湿乎乎的。于先生开玩笑地说：“要是搂着它睡觉一定很凉爽。”几天前，于先生取样时发现，“太岁“顶部有几处裂纹，现在已悄悄地”愈合“。自从捡到这个“宝贝”，于先生小心呵护，特意买来特大号盆放上泥土给它临时安了个家。尽管这样，他还是放心不下，担心这件稀罕物儿烂掉。他希望专家能提供一些培养太岁的方法，并对其在药用、保健等价值方面做进一步的研究。</p>\r\n<p>　　据记者了解，根据相关关资料以及各地发现太岁的报道，此前发现的最大太岁为80余公斤。因此，于先生捡到的太岁，堪称是国内迄今发现的最大野生太岁。</p>\r\n<p>　　“太岁”，又称肉灵芝，《山海经》和《本草纲目》上均有记载，是一种大型罕见黏菌复合体，生长于地下，既有原生质生物的特点，也有真菌的特点，是活的生物体，具有较高的药用价值。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('572','','1240129616','591','35','1','1','1','','据报道，大卫和妻子科林1998年买彩票中了1000万澳元的大奖，从穷农夫摇身变成了千万富翁。 <p>　　得知大卫中大奖后，大卫以前的邻居劳利·纳姆找上了他，游说他投资一个橄榄树农场。于是，大卫花了大约300万澳元买下了农场，委托纳姆对农场进行管理。没多久，大卫就发现，纳姆从来没有管理农场，橄榄树都枯死了。不甘心的大卫又进行了其他投资，结果全都失败，剩下的700万澳元在几年内全部蒸发，只得宣布破产。大卫的妻子科林无法忍受剧变，和丈夫离了婚。</p>\r\n<p>　　2004年，大卫带着三个朋友来到橄榄树农场中，要求纳姆归还农场，结果大卫的一名朋友在冲突之中被纳姆的大儿子开枪打死。</p>\r\n<p>　　9月3日，大卫的15岁孙子约书亚·阿斯泰尔又死于非命。当天大卫15岁的小儿子威廉，发现家中藏着一把手枪，于是告诉了与他同龄的侄子约书亚。两人在玩弄手枪时，枪却意外走火，子弹射中约书亚的眼睛，将他当场打死。大卫说：“这一悲剧让我们的心全都碎了，我们曾是一个亲密的家庭，但现在钱没了，家庭也没了。那次中大奖彻底毁掉了我的生活。”</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('573','','1240129664','592','3','1','1','1','','经过整整一个月的治疗，17岁的高三女生小蓓近日刚刚从昏迷中清醒过来。3月17日晚上的自习课上，在老师公布了最新的考试成绩之后，在河南省素质教育示范性高中之一的南阳市西峡县第一高中读高三的小蓓，从教学楼5楼跳楼自杀。经过医院全力抢救治疗，她的生命得以保住，但是医生的诊断显示，她脊椎粉碎，双腿致残。<p>　　4月16日，中国青年报记者在第一时间看到了清醒后的小蓓。她身体瘦小，左臂和双小腿全部打着石膏，背部被固定，不能动弹，怀里紧紧抱着她最喜爱的小熊玩具。</p>\r\n<p>　　忍着剧痛，流着眼泪，她向记者说出了自己的心里话：</p>\r\n<p>　　一切感觉像是在做梦。梦醒了，我就在医院了，身上疼得厉害，旁边是满脸泪水的爸爸和妈妈。</p>\r\n<p>　　妈妈哭着问我：“你跳楼之前就没有想到过妈妈吗?”我当然想了，而且想了很久。我不断地想：如果我死了，爸妈怎么办?但是在成绩下来的那一刻，我就感觉再也想不动了。我实在太累了，根本没有一点力气再去想了……</p>\r\n<p>　　我本来性格还算开朗，爱好也广泛，特别喜欢美术，也得过一些奖。我原来不是那种“死学”的学生，也没有把成绩看得太重，但是上了高三，一切都变了。很多了解我的同学，都不相信我会跳楼自杀。</p>\r\n<p>　　从小我学习就比较好，中考是以全县50多名的成绩进的西峡一高。高一高二时，虽然也是早上5∶00起床，每天跑1000多米，晚上9∶40下晚自习，也会宣誓和定目标什么的，但我还能承受，感觉压力还不是特别大。我不喜欢老师逼着我学，逼得越紧我就越学不好。我喜欢自己灵活地学。高一高二时，学校逼得不是很紧，我成绩还不错，最好时考过全年级第18名。</p>\r\n<p>　　刚上高三的前两个月，过得还可以。两个月后，因为在一次八校联考中，我们学校没考过其他学校，校领导很生气，就召集我们开全体大会，总结教训。随后，学校改了作息时间，把晚自习下课时间延长到了晚上11∶00，中午也不让我们进寝室，吃完饭就要回到教室继续学习。</p>\r\n<p>　　每周，班里都要开会;每天课前和大大小小的会上，我们都要宣誓。学校还给每个学生发一张表格，让我们填写自己理想的大学，给自己设定目标，还要写上自己的座右铭，然后贴在教室后面的黑板上。</p>\r\n<p>　　平时的考试也多了起来，考试成绩都要排队，在全班公布。学校还给每个老师下指标，每次考试完，都要用高考的分数线评价每个学生，看能上什么大学。</p>\r\n<p>　　慢慢的，我发现自己变笨了很多，做题的时候脑子没以前转得快了。还经常头晕，头痛，晚上也睡不着，每天都昏昏沉沉的。</p>\r\n<p>　　接下来的几次考试，我考得都不好。每次考试之前，我都告诉自己，要冲上去，可是每次都上不去。</p>\r\n<p>　　后来，我实在受不了了，身体也撑不住了，就请假回家休息了4天。在我们学校，高三学生请假特别难，要先找班主任批条，然后要去找校领导签字，只有拿着签过字的条子，门卫才让出去。还好，班主任很理解我，帮我请了5天的假。</p>\r\n<p>　　回到家，我第一件事就是补觉。爸爸妈妈每个月只能见我一次，他们担心我的身体，带我去看了医生。医生说我是劳累过度了，给开了一大堆治失眠的、补脑的、恢复体力的药。我心里一直惦记着学习，到了第四天，再也待不住了，爸爸妈妈只好又把我送回了学校。</p>\r\n<p>　　到学校后，我鼓足了劲，决定冲一把，下次考试一定要考好!</p>\r\n<p>　　终于，期末考试我考了班里第十。我“有幸”被列入了“一本学生”的行列，班主任给我们10个人专门开了次会，给我们额外布置了“零班”(即该校的“尖子班”——记者注)安排的作业。</p>\r\n<p>　　高三的寒假特别短，还不到10天，作业还没做完，就又开学了。在小勇猝死课堂后，学校把晚自习下课时间提前到了10∶30，但我感觉学习更紧张了。每天我们都要喊百日冲刺的口号，倒计时牌也都贴到了教室黑板的旁边。每天、每周，我们都要考试，每次考试还没有仔细总结，下一次考试又来了。</p>\r\n<p>　　我再一次感觉到特别特别地累，都喘不过气了。有时候学得太累，快要崩溃的时候，我们很多同学都会说：“太累了!受不了了!还不如死了算了!”和我关系比较好的几个朋友，也在一起讨论过关于死的话题。可当谈到如果我们死了，父母怎么办时，我们都沉默了。</p>\r\n<p>　　就这样，我们都坚持着。高三下学期开学后，又考试了两次，我第一次考得特别差，退到了全年级第150名。我还是奋力向前冲，但越冲就越感觉自己力不从心，感觉特别累，老是头疼，根本学不进去。第二次考试，我又失败了，成绩退到了全年级第188名。</p>\r\n<p>　　3月17日那天晚上，老师把考试成绩公布在黑板上。我看完以后，心里特别乱。本来能考“一本”的，现在连“二本”都上不了。我感觉自己虽然努力了，但还是没有尽全力，上课老是打瞌睡。我学不好，我对不起父母，对不起老师。我的未来在哪里?</p>\r\n<p>　　我当时想了很多，但又好像什么也想不动，整个人完全迷糊了。到最后，我感觉实在累得受不了了，再也想不动了。我只想马上解脱，我再也不用去想学习的事，想学校的事。后来，我完全迷糊了，也不知道怎么回事就干了傻事……</p>\r\n<p>　　任何矛盾都可以解决，我可以找朋友倾诉，她们也可以帮我，可唯独学习上的压力，谁也帮不了我。我是自己绕到这个圈子里，出不来，才走到今天这样的。</p>\r\n<p>　　这几天，亲人们来看我，很多人说：“咱家小蓓学习好，没事，好好养病，身体养好了，明年再考。”我一听到关于学习考试的字眼，就头疼、烦躁，实在是忍受不了。我就不顾一切地发脾气，把他们赶走。</p>\r\n<p>　　等人走了，我哭着对妈妈说：“妈妈，我宁愿是个差生，我宁愿是个笨人……”</p>\r\n<p>　　现在想来，感觉自己真得很不值，这次经历让我明白了很多。我恨学校!学校根本就不是发自内心地爱老师、爱学生，它只是为了升学率和学校的利益!我根本犯不着为了学校的利益去牺牲自己的生命。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('574','','1240129686','593','3','1','1','1','','喜中万元彩票后的小伙子先是酗酒狂欢，继而坐上了酒后飙车的伙伴后座上，不想发生车祸变成植物人。幸好在一系列综合促醒方案的治疗和亲人不离不弃的呼唤声中，17岁的小伙日前终于悠悠醒转。有趣的是，患者父亲表示，原本脾气较暴躁的儿子在经历了这次变故后，竟然性情大变，见人总是笑脸相迎，还主动和人打招呼。<p>　　日前，广东省三九脑科医院就通过一个月的努力成功促醒一名入院时完全无意识的植物人小伙。该院神经康复科主任、植物状态促醒中心负责人倪莹莹表示，植物人骤然醒觉大多是戏剧手法描述的电视剧情而已，在进入植物状态4～5个月的促醒黄金期内进行综合治疗，将提升患者的苏醒几率。</p>\r\n<p>　　今年年仅17岁的阿伟中学毕业后成了当地一名开挖土机的司机。去年10月10日，与人合买彩票中了万元大奖的他为了庆祝和朋友们聚餐，酒后归家途中遭遇车祸，阿伟当即昏迷。在送到普宁当地医院紧急治疗后发现，车祸造成阿伟严重的脑外伤，虽经一系列治疗后能够自主睁开眼睛，但对于父亲、医生的呼唤、指令没有任何反馈，成了植物人。</p>\r\n<p>　　昨日记者在病房中见到阿伟时，这名小伙子已能自主行走，并能与人进行简单的交流。如果不是左侧颅骨处仍缺一块，需要进一步进行颅骨修复术外，只有少许语言障碍的他看起来已与常人无异。</p>\r\n<p>　　“阿伟原来在家是一个性格执拗、倔强容易发脾气的人，不想在经历了这次变故后，整个人变得十分友善了，见人总是笑脸相迎，还主动打招呼、握手，简直就是变了个人。”父亲黄先生对于儿子的这一变化非常意外。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('575','','1240129723','594','3','1','1','1','','主演经典爱情电影《人鬼情未了》(Ghost)的56岁美国男星派特里克·史威兹(PatrickSwayze)，患胰脏癌一年多，虽有接受化疗，但情况未见乐观，其体重已降至105磅(47公斤)。近日有消息指派特里克·史威兹失去求生意欲，并签下拒绝拯救同意书，希望有尊严地离世。<p>　　据外电报道，派特里克·史威兹的近照曝光，早前被拍下瘦骨嶙峋照片的他，情况未有改善，体形反而越见消瘦。消息还指接受超过一年化疗的他，对化疗带来的副作用感到不适，现在他只希望多点陪伴家人，他还已秘密签下一份拒绝拯救同意书，知情人说：“他说希望在尚余日子里好好安顿及安抚家人，他希望有尊严及安详地离去。”</p>\r\n<p>　　派特里克·史威兹日前在其加州大宅接受名嘴芭芭拉(BarbraWalters)访问，也是他宣布患癌以来首次受访。派特里克·史威兹透露当初得悉患癌时感到“恐惧和愤怒”，像“走进地狱一般”，但他似乎已看化，言谈间看来已接受事实，他说：“医生当初告诉我有5年(寿命)是乐观了一点，看来平均是两年吧。”</p>\r\n<p>　　此外，派特里克·史威兹去年患癌初期时拍下的电影《Jump》，预计于下周举行的洛杉矶犹太影展中首映，不过该片导演对派特里克·史威兹会否出席首映不太乐观。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('576','','1240129752','595','3','1','1','1','','昨天，从市三<a href=\"http://yyk.39.net/\" target=\"_blank\"><font color=\"#000000\">医院</font></a>传来一个消息，医院泌尿<a href=\"http://dy.39.net/deptdetail.aspx?keshi=%bf%c6%ca%d2_%cd%e2%bf%c6&area=\" target=\"_blank\"><font color=\"#000000\">外科</font></a>来了位中年病人，膀胱“炸掉”了。<p>　　这样的事情还是第一次听说，报社办公室立刻炸开了锅。很多人脱口而出：“膀胱怎么会炸掉？”</p>\r\n<p>　　市三医院泌尿外科主任徐智慧说，当然会。<br />\r\n<br />\r\n这个病人膀胱“炸掉”的“导火索”是喝了大<a href=\"http://jck.39.net/jiancha/huaxue/bian/4e7e1.html\" target=\"_blank\"><font color=\"#000000\">量</font></a>的啤酒、白酒和<a href=\"http://food.39.net/ylj/jiu/jfl/hj/\" target=\"_blank\"><font color=\"#000000\">黄酒</font></a>。</p>\r\n<p>　　病人老于，50岁，在朋友圈子里，他出了名的讲义气，酒风豪爽，和朋友干杯，来者不拒。</p>\r\n<p>　　三天前，朋友聚会。起先喝的是白酒，老于一口气喝下了6两，接着是黄酒、啤酒，基本上都是喉咙一张，酒直接往下灌。究竟喝了多少，老于自己也算不清。</p>\r\n<p>　　当晚是怎么回到家的，老于一概不知，第二天醒来，只觉得肚子隐隐作痛，人蛮难受。想想可能是酒后伤了胃，老于找了点胃药服下，没当回事。</p>\r\n<p>　　昨天，疼痛越来越强烈，还慢慢往下身移了，老于赶紧打车到了市三医院。</p>\r\n<p>　　徐智慧接诊，一<a href=\"http://jck.39.net/\" target=\"_blank\"><font color=\"#000000\">检查</font></a>，不得了，老于的膀胱“炸掉”了，膀胱顶部破了一个五六厘米大小的口子，尿液全都回流到了腹腔里。</p>\r\n<p>　　老于一听就有点晕，听说过喝酒喝死的，还真不知道喝酒还能把膀胱喝“炸掉”。</p>\r\n<p>　　徐智慧说，老于当晚喝得烂醉，基本处于浅<a href=\"http://jbk.39.net/keshi/neike/shenjing/4fa9e.html\" target=\"_blank\"><a href=\"http://zzk.39.net/zz/quanshen/50407.html\" target=\"_blank\"><font color=\"#000000\">昏迷</font></a>状态，压制了大脑的排尿反射，加上喝酒后前列腺充血肥大，尿液流出困难，老于整整两天没排尿。小便在膀胱里越积越多，最后“炸掉”了。这次幸亏是腹膜外膀胱破裂，否则还可能引起严重的腹腔感染。</a><p>　　昨天，老于做了膀胱修复手术，把漏洞补上了。</p>\r\n<p>　　<strong>膀胱能容纳几瓶啤酒</strong></p>\r\n<p>　　人体的膀胱有点像注了水的<a href=\"http://pc.39.net/special/0711/23/174474.html\" target=\"_blank\"><a href=\"http://www.39.net/eden/hot/byzt/ffdq/byt/\" target=\"_blank\"><a href=\"http://sex.39.net/xjy/by/\" target=\"_blank\"><font color=\"#000000\">避孕</font></a>套，水越多，壁越薄，一旦有外力作用，就会破裂。中国男人的膀胱承受能力比外国人弱些，急性扩张的情况下，承受极限是2000毫升左右，相当于6瓶现在市面上出售的千岛湖淡爽啤酒(每瓶容量355ml)。对会喝啤酒的人来说，五六瓶啤酒的量并不算极限，为何单单老于会喝得这么严重，连膀胱都“炸掉”了？</a><p>　　徐智慧解释说，每个人的转换能力不同，并不是说酒一喝下去就会马上转变成小便。当然，最关键的一个问题是，大部分人喝酒后肚子会胀，会觉得小便急，熬到一定时候，憋不住了就会到厕所排尿，小便一排出，膀胱的压力自然就小了。</p>\r\n<p>　　什么酒最容易胀膀胱？徐智慧不假思索回答，当然是啤酒，因为水分含量高。不过，最容易喝出膀胱问题的却是白酒，因为白酒酒精浓度高，病人更容易烂醉，如果喝得意识都没了，就很难有排尿反射了。　　</p>\r\n</a>','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('577','','1240129804','596','3','1','1','1','','<p><img onload=\'if(this.width>600)makesmallpic(this,600,1800);\' src=\"http://www_php168_com/Tmp_updir/article/3/1_20090419160400_W3bnb.jpg\" width=\"175\" height=\"260\" border=\"0\" alt=\"25.jpg\" title=\"25.jpg\" /></p>\r\n<p>一对重达43斤的巨大乳房，犹如两个大冬瓜，从胸前一直下垂到膝盖，令一位28岁的女子步履维艰。昨日，记者从高州市人民医院获悉，该院已成功为该女子彻底卸下了这一沉重的“包袱”，目前该女子正在接受康复治疗。</p>\r\n<p>　　这名巨乳女子名叫张君(化名)，是广东化州市人。据介绍，张于两年前喜结良缘，但一直未能怀孕。寻遍当地名医，吃了许多<a href=\"http://cm.39.net/zyfj/\" target=\"_blank\"><font color=\"#000000\">中药</font></a>，去年2月终于怀上了，一家人喜出望外。但不幸的是，怀孕近2个月时，张君的胸就开始慢慢肿胀、下垂，3个月后，胸开始迅速增大并下垂，连<a href=\"http://www.39.net/woman/ztl/jkhbra/\" target=\"_blank\"><font color=\"#000000\">文胸</font></a>都戴不了。</p>\r\n<p>　　产下男婴两个月后，张君就在爱人的陪同下来到高州市人民医院<a href=\"http://cancer.39.net/\" target=\"_blank\"><font color=\"#000000\">肿瘤</font></a><a href=\"http://dy.39.net/deptdetail.aspx?keshi=%bf%c6%ca%d2_%cd%e2%bf%c6&area=\" target=\"_blank\"><font color=\"#000000\">外科</font></a>就医。经医院<a href=\"http://jck.39.net/\" target=\"_blank\"><font color=\"#000000\">检查</font></a>发现，张的垂体泌乳素高达129.68ng/ml（正常人约1.4～24ng/ml），超高的泌乳素不停地刺激乳腺，从而导致了<a href=\"http://jbk.39.net/keshi/waike/rxwk/4e02f.html\" target=\"_blank\"><font color=\"#000000\">乳腺增生</font></a>严重，形成巨乳症，经手术治疗，巨乳最终被成功切除。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('578','','1240129887','597','3','1','1','1','','丈夫没有生育能力，可痴呆妻子却怀上身孕，原来，她多次遭82岁的邻居老翁<a href=\"http://sex.39.net/xjy/qj/\" target=\"_blank\"><font color=\"#000000\">强奸</font></a>。昨天，晋江市检察院以涉嫌强奸罪，批准逮捕晋江西园人吕某进。<p>　　小梅(化名)是晋江西园人，打小因发烧导致<a href=\"http://jbk.39.net/keshi/waike/naowaike/4df7e.html\" target=\"_blank\"><font color=\"#000000\">脑膜炎</font></a>，智力发育不好。平日里，她生活能够自理，只是常把事情搞砸，但为人善良，脸上总挂着微笑，人叫干什么就干什么。21岁那年，小梅嫁人，后来，家人发现，小梅的丈夫没有生育能力。</p>\r\n<p>　　今年春节后，家人突然发现，小梅经常表现出怀孕的<a href=\"http://zzk.39.net/\" target=\"_blank\"><font color=\"#000000\">症状</font></a>。家人担心出问题，赶紧带着小梅到<a href=\"http://yyk.39.net/\" target=\"_blank\"><font color=\"#000000\">医院</font></a><a href=\"http://jck.39.net/\" target=\"_blank\"><font color=\"#000000\">检查</font></a>。不想，小梅竟已怀孕5个月了。孩子到底是谁的?家人再三追问，小梅终于道出实情：“去年夏天的时候(指2008年)，吕某进好几次和我发生关系。”小梅说，他们在<a href=\"http://food.39.net/pr/cfcj/\" target=\"_blank\"><font color=\"#000000\">厨房</font></a>或者二楼卧室，每次都没有旁人，吕某进说帮她生个孩子。</p>\r\n<p>　　晋江西园派出所很快介入<a href=\"http://dc.39.net/\" target=\"_blank\"><font color=\"#000000\">调查</font></a>。经司法鉴定，小梅患有中度<a href=\"http://jbk.39.net/keshi/jingshen/jsb/4903f.html\" target=\"_blank\"><font color=\"#000000\">精神发育迟滞</font></a>，且无性自我防卫能力。2月18日，吕某进被抓。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('579','','1240129958','598','3','1','1','1','','“绿色人流，8分钟完成”、“即做即走，不用住院”……昨天在沪举行的优思明<a href=\"http://talk.39.net/zjft\" target=\"_blank\"><font color=\"#000000\">专家</font></a>研讨会上，一项由国际和平妇幼保健院、<a href=\"http://shanghai.39.net/\" target=\"_blank\"><font color=\"#000000\">上海</font></a>市计划生育技术指导所专家提供的<a href=\"http://dc.39.net/\" target=\"_blank\"><font color=\"#000000\">调查</font></a>数据显示，在上海人工<a href=\"http://jbk.39.net/keshi/fuchan/chanke/48d97.html\" target=\"_blank\"><font color=\"#000000\">流产</font></a>总数中，年龄在20岁至29岁的比例大约占到62%，呈现年轻化等特点。权威<a href=\"http://disease.39.net/fk/\" target=\"_blank\"><font color=\"#000000\">妇科</font></a>专家提醒年轻女性，切勿盲目相信广告，应该选择正规<a href=\"http://yyk.39.net/\" target=\"_blank\"><font color=\"#000000\">医院</font></a>就诊。<br />\r\n<br />\r\n　　在中国，大多数的适龄女性都采取了<a href=\"http://sex.39.net/xjy/by/\" target=\"_blank\"><font color=\"#000000\">避孕</font></a>措施，但仍存在着较高的流产率。我国处于20岁至29岁的女性约1亿，其中27.3%做过人流，人流率约为千分之62。如此高的人流率不仅与<a href=\"http://dy.39.net/deptdetail.aspx?keshi=%bf%c6%ca%d2_%c9%fa%d6%b3%bd%a1%bf%b5&area=\" target=\"_blank\"><font color=\"#000000\">生殖健康</font></a>和避孕知识教育欠缺有关，还与没有选择合适的避孕方式有密切关系。数据还显示，在中国，每年大约有1300万人次接受人流，不仅数量大，且多未生育。其中，未生育女性约占人工流 产 总 数 的 22.9%至42.7%。其中，未采用避孕措施或避孕失败，是导致人工流产的主要原因。 ','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('580','','1240130011','599','3','1','1','1','','<a href=\"http://sz.39.net/\" target=\"_blank\"><font color=\"#000000\">深圳</font></a>万科物业服务有限公司一名工作9年多的钟姓男员工，疑因不满离职补偿低，竟向自己泼汽油在公司内自焚，并带着大火冲进经理室，抱住一位吴姓经理，导致两人同被<a href=\"http://jbk.39.net/keshi/waike/ss/4cc75.html\" target=\"_blank\"><font color=\"#000000\">烧伤</font></a>。<p>&nbsp;</p>\r\n深圳万科员工办公楼里泼油自焚<p>&nbsp;</p>\r\n疑为不满离职金过低 办公室内一经理亦被自焚者抱住烧伤<p><strong></strong>昨日上午，深圳市万科物业服务有限公司内，突然腾起一个大火球。一名在该公司工作9年多的钟姓男员工，疑因不满离职补偿低，竟向自己泼汽油在公司内自焚，并带着大火冲进经理室，抱住一位吴姓经理，导致两人同被烧伤。公司员工用灭火器将火扑灭后，两伤者被送进市二<a href=\"http://yyk.39.net/\" target=\"_blank\"><font color=\"#000000\">医院</font></a>救治。截至今晨记者发稿时止，钟姓男子因身体烧伤面积超过了90%，尚未脱离生命危险;吴姓经理伤势相对较轻，目前没有生命危险。</p>\r\n<p><strong>现场目击</strong></p>\r\n<p><strong>“一个大火球突然闪过”</strong></p>\r\n<p>&nbsp;</p>\r\n事发地点位于深圳市<a href=\"http://yyk.39.net/sz/yiyuan/list.html#futian\" target=\"_blank\"><font color=\"#000000\">福田</font></a>区莲花街道莲花北村富莲大厦三楼的某物业公司。昨日中午，记者接报赶到时，公司大门已经上锁，4名穿迷彩服的男子守在门口，空气中充满了焦糊的汽油味。玻璃门内一片漆黑，未开电灯。该公司一员工称，他上午没在公司，后听同事说是老员工钟先生在公司内泼汽油，并点燃，烧伤了自己和一名吴姓经理。<p>&nbsp;</p>\r\n下午，记者再次来到该公司了解情况。从公司入口处的前台旁边往里走，有十几米长的过道。在过道右侧，一间经理办公室内一片狼籍，移了位的办公桌上的文件和笔记本电脑均被水打湿，皮椅前部有明显的被烧痕迹。公司办公人员介绍说经理就是在这里被钟先生抱住烧伤的。刚从莲花派出所做完笔录返回的一名前台工作人员表示，上午11时多，她正在前台与一位保洁员交待工作，突然看见有个大火球闪过，进入里面的办公区。后来她才知道，是钟先生一边往身上浇油，一边点着火往里冲，整个过程只有三四秒钟时间。<p><strong>“他是为了心中一口气”</strong></p>\r\n<p>当天下午，记者从深圳市第二医院获悉，钟先生全身烧伤面积达90%以上，尚未脱离生命危险，需住院观察。吴姓经理被烧伤约40%，其中一只手烧伤严重，痊愈之后可能残疾，需康复治疗。为防止细菌感染，两名被烧伤者的病房均已被隔离，不允许其他人员进入。</p>\r\n<p>伤者钟先生的妻子称，钟先生一个月前由于公司裁员而离职，公司里与钟先生一样职位、差不多工龄和资历的其他被裁员工都获得15万元左右的离职金，而钟先生仅拿到7.5万余元赔偿。“大家都做了10年以上，别人有那么多，他为什么那么少?老钟心里肯定觉得不公平。他在公司自焚不是为了拿钱，他是为了心中一口气。我了解他，他爱面子。”钟妻悲伤地说。</p>\r\n<p><strong>不惜代价救治两伤员</strong></p>\r\n<p>&nbsp;</p>\r\n昨晚，该物业公司召集<a href=\"http://news.39.net/mtpl/\" target=\"_blank\"><font color=\"#000000\">媒体</font></a>记者通报了有关情况。公司表示，“出现这一以外，我们和伤者及其家属一样非常难过，我们将竭尽全力救治两位伤员!”据悉，钟先生受聘在公司当司机已有9年多。今年8月，因公司班车业务取消，有11名司机需转岗做其它工作。公司为他们提供了3种选择：一是转岗;二是去与公司合作的运输公司工作;三是自愿离职，公司依照《劳动法》与他们协商给予合法经济补偿。“钟先生选择了领取补偿金离职，但是在补偿金额方面与公司产生了较大分歧。按照劳动法规定，他可以领到4.2万元补偿。公司照顾到他的一些特殊情况，提出给他补偿近8万元。但是他一直不满意，提出14万元的补偿金额。公司一直在与他协调，没想到突然发生了今天的意外。” ','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('581','','1240130313','600','35','1','1','1','','为了制止妇女酗酒现象和维护莫斯科的社会秩序，市政府在市中心建立了第一家妇女醒酒所。醒酒所设有21个床位，以供酗酒者醒酒之用。<p>　　被送入莫斯科妇女醒酒所的妇女年龄相差悬殊，最小的16岁，最大的年逾80岁。 </p>\r\n<p>　　醒酒所每天可收容5-25名酗酒者，被送入该所的人并非免费，一次需交纳罚金510卢布，其中包括治疗费、床位费。但由于送往这里的人越来越多，加之卢布一再贬值，罚金也不断提高，以示惩戒。每位醉酒者进入后，被关在一个窗上装有铁栏杆的小房间内，房内墙壁是用黑色涂料粉刷的，以使醉鬼稳定情绪。许多醉酒妇女出现严重酒精<a href=\"http://120.39.net/zdjj/\" target=\"_blank\"><font color=\"#000000\">中毒</font></a>，护理人员首先是将她们尽快送往医疗中心抢救，然后再关其“禁闭”，直到她们清醒，交完罚金方可离去。</p>\r\n<p>　　据莫斯科妇女醒酒所所长伊凡诺娃说，酒精中毒对妇女的身心健康损害很大，甚至会对下一代产生不良的影响。妇女醉卧街头是一种可怕的社会现象，同时可导致一连串的严重后果。一名23岁的姑娘，大学毕业后，一时难以寻觅到合适的工作，便借酒消愁，以致醉卧街头，遭到一伙流氓的轮奸、抢劫，在她心灵深处留下了可怕的阴影。另外一些妇女由于在工作上失意，家庭纠纷增多，对未来丧失了信心而自暴自弃，也沾染上了酗酒的恶习。</p>\r\n<p>　　一天深夜，30岁的少妇奥莉卡被送入了醒酒所，当时她的形象十分狼狈，脚上的鞋已不翼而飞，蓬头垢面，只穿一件污秽的短上衣，直到第二天早上8时30分才苏醒过来，可是她当天晚上又喝的酩酊大醉，再次被送进了醒酒所。这位年轻的少妇已对一切丧失了信心。</p>\r\n<p>　　如此现象，上至俄罗斯的贵妇，下到贫民百姓常常发生。</p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('582','','1240193993','601','14','1','1','1','','&nbsp;&nbsp; 刘德华出生于香港新界大埔泰亨村，在家中排行第四。<br />\r\n<div>&nbsp;</div>\r\n　　他有三个姊姊、一个弟弟和一个妹妹。由于出生在大家族。刘德华在黄大仙天主教小学毕业后升读可立中学，当时他热心参加校内学校剧社的表演，参与幕后制作负责编剧。<br />\r\n<div>&nbsp;</div>\r\n　　而教授他有关戏剧方面知识的老师，就是后来的著名舞台剧编剧杜国威。<br />\r\n<div>&nbsp;</div>\r\n　　中六上学期后，到香港电视广播有限公司(TVB)的艺员训练班受训。1981年在电视剧《花艇小英雄》中首次亮相。','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('584','','1240201330','603','39','1','1','1','','<p><span style=\"font-family:宋体;\"><font size=\"3\"><span>&nbsp;</span>软件和硬件就如同鱼和水一样，软件要运行离不开硬件支持，硬件没有了软件就如同死水一滩。在当今信息爆炸的网络时代，软件和硬件一经搭载上网络概念后<span>,</span>新一轮发展开始爆发，而由它们组成的网络<span>,</span>将人类生活引入了一个全新的时代。<span><p>&nbsp;</p>\r\n</span></font></span></p>\r\n<p><span style=\"font-family:宋体;\"><p><font size=\"3\">&nbsp;</font></p>\r\n</span></p>\r\n<p><font size=\"3\"><span style=\"font-family:宋体;\"><span>&nbsp;&nbsp;&nbsp; </span></span><span style=\"font-family:宋体;\">上海四卜格网络科技有限公司（速腾数据<span>www.sutenw.Com)</span>是一家经营互联网数据接入的公司，公司既是硬件提供者也为网络概念的延续提供有效保障<span>,</span>主营是服务器租用、服务器托管、机柜租用、带宽租用及相关数据增值业务；<span>PHP168(www.php168.com)</span>整站系统是中国领先的开源<span>CMS</span>平台与服务提供商，长期专注于互联网<span>CMS</span>平台及应用技术解决方案的研发和运营是<span>CMS</span>的鼻祖。速腾数据作为<span>PHP168</span>的<span>IDC</span>服务提供商之一，双方长期保持着愉快融洽的合作关系。特此在<span>PHP168</span>新一代<span>V6</span>系统的发布之际，速腾数据与<span>PHP168</span>强强联手推出高性价比的<span>IDC</span>产品（品牌双至强<span> 4G</span>内存<span> 73G</span>硬盘 上海电信<span>10M</span>带宽<span> 4G</span>金盾防御 ）每月仅需<span>888</span>元。这就是顺应网络时代新格局下推出的一种商业合作模式，软硬件的搭配赋予网络概念后必将助力更多的企业打造更多更强的网络项目进入高速网络时代。</span></font></p>\r\n','0');
INSERT INTO `{$tbl_prefix}reply` VALUES ('585','','1240209505','604','39','1','1','1','','<div><font size=\"4\"><span style=\"color:#0000ff;\">鉴于前几轮公测时用户访问量大，为了保障公测顺利进行，防止意外情况。<br />\r\n<br />\r\nPHP168官方决定，在PHP168官方<span>论坛</span>发布公测的同时，在PHPWIND官方论坛的PHP168专区也同步发布V6公测。<br />\r\n<br />\r\n大家同时可以在PHP168与PHPWIND查看相关<span>消息</span>及<span>下载</span>公测版本。</span></font><br />\r\n<br />\r\n<br />\r\nPHP168官方论坛站点：<br />\r\n<a href=\"http://bbs.php168.com/index.php\" target=\"_blank\"><font color=\"#0070af\">http://bbs.php168.com/index.php</font></a></div>\r\n','0');
INSERT INTO `{$tbl_prefix}article_content_100` VALUES ('1','531','509','10','1','photo/10/1_20090415160401_XMXbb.jpg@@@06C84C97B8F24A26A6C05B4BC5BE4794200608021752@@@\nphoto/10/1_20090415160416_qs6Mj.jpg@@@839-45-5@@@');
INSERT INTO `{$tbl_prefix}article_content_100` VALUES ('2','532','510','10','1','photo/10/1_20090415170406_X57YC.jpg@@@2006_11_06_22_15_11_258@@@\nphoto/10/1_20090415170419_IxNF1.jpg@@@200808%5C1722073@@@');
INSERT INTO `{$tbl_prefix}article_content_101` VALUES ('2','535','513','26','1','24','24','24','24','1239787781','','迅雷网络','http://www.xunlei.com/','http://www.xunlei.com/','XP/2003','简体中文','免费版','9.5','http://down.sandai.net/Thunder5.8.13.699.exe@@@@@@');
INSERT INTO `{$tbl_prefix}article_content_101` VALUES ('3','536','514','27','1','1','1','1','1','1239788031','','金山','http://www.kingsoft.com/','http://www.wps.cn/','Windows 2000/XP/Vista','简体中文','免费版','28.3','http://kad.www.wps.cn/wps/download/WPS2007.12012.exe@@@@@@');
INSERT INTO `{$tbl_prefix}article_content_101` VALUES ('4','537','515','26','1','1','1','1','1','1239788257','','腾讯','http://www.qq.com/','http://im.qq.com/','2000/2003/XP','简体中文','免费版','19.8','http://dl_dir.qq.com/qqfile/qq/QQ2009/QQ2009Beta2.exe@@@@@@');
INSERT INTO `{$tbl_prefix}article_content_101` VALUES ('5','538','516','12','1','1','1','1','1','1239788490','','php168','http://www.php168.com/','http://www.php168.com/','PHP','简体中文','免费版','1.11','http://down2.php168.com/module/wnarticle.rar@@@@@@');
INSERT INTO `{$tbl_prefix}article_content_101` VALUES ('6','539','517','12','1','2','2','2','2','1240192795','','php168','http://www.php168.com/','http://www.php168.com/','PHP','简体中文','免费版','0.75','http://down2.php168.com/module/wnfenlei.rar@@@@@@');
INSERT INTO `{$tbl_prefix}article_content_101` VALUES ('7','540','518','12','1','1','1','1','1','1240192781','','php168','http://www.php168.com/','http://www.php168.com/','PHP','简体中文','免费版','3.13','http://down2.php168.com/module/blog.rar@@@@@@');
INSERT INTO `{$tbl_prefix}article_content_101` VALUES ('8','541','519','12','1','0','0','0','0','0','','php168','http://www.php168.com/','http://www.php168.com/','PHP','简体中文','免费版','3.31','http://down2.php168.com/module/zhidao.rar@@@@@@');
INSERT INTO `{$tbl_prefix}article_content_102` VALUES ('9','542','520','14','1','8','8','8','8','1240291936','','http://down2.php168.com/other/testv6/1.flv@@@第1集@@@@@@flv\nhttp://down2.php168.com/other/testv6/2.flv@@@第2集@@@@@@flv\nhttp://down2.php168.com/other/testv6/3.flv@@@第3集@@@@@@flv\nhttp://down2.php168.com/other/testv6/4.flv@@@第4集@@@@@@flv','比尔·盖茨','英语');
INSERT INTO `{$tbl_prefix}article_content_102` VALUES ('15','601','582','14','1','1','1','1','1','1240222238','','http://player.youku.com/player.php/sid/XODUxMTk5Mjg=/v.swf@@@NBA常规赛@@@@@@swf','刘德华','粤语');
INSERT INTO `{$tbl_prefix}article_content_103` VALUES ('9','519','497','16','1','DSC-T300','2133','2111','a12','0','不');
INSERT INTO `{$tbl_prefix}article_content_103` VALUES ('10','520','498','16','1','SX200 IS','2444','2333','fe333','0','不');
INSERT INTO `{$tbl_prefix}article_content_103` VALUES ('11','521','499','16','1','D90','6555','5555','b434','0','不');
INSERT INTO `{$tbl_prefix}article_content_103` VALUES ('12','522','500','16','1','S2000HD','1888','1700','aw23','0','900');
INSERT INTO `{$tbl_prefix}article_content_103` VALUES ('13','523','501','16','1','DMC-FZ28','3444','3333','ae233','0','900');
INSERT INTO `{$tbl_prefix}article_content_103` VALUES ('14','524','502','16','1','SP-565UZ','3222','2222','d3434','0','不');
INSERT INTO `{$tbl_prefix}article_content_104` VALUES ('9','529','507','18','1','http://down2.php168.com/other/testv6/7k7k_ljlawbshw.swf@@@swf','');
INSERT INTO `{$tbl_prefix}article_content_104` VALUES ('10','530','508','18','1','http://down2.php168.com/other/testv6/7k7k_qiufy.swf@@@swf','');
INSERT INTO `{$tbl_prefix}article_content_105` VALUES ('2','544','522','30','1','M11504 BXF');
INSERT INTO `{$tbl_prefix}article_module` VALUES ('100','图片模型','图片','0','','','','a:3:{s:8:\"field_db\";a:1:{s:8:\"photourl\";a:13:{s:5:\"title\";s:12:\"图片地址\";s:10:\"field_name\";s:8:\"photourl\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:9:\"upmorepic\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:0;s:9:\"allowview\";N;}}s:7:\"is_html\";a:0:{}s:9:\"moduleSet\";a:11:{s:5:\"alias\";s:6:\"图片\";s:10:\"title_name\";s:12:\"图片名称\";s:12:\"content_name\";s:6:\"介绍\";s:6:\"edit_w\";s:3:\"500\";s:6:\"edit_h\";s:3:\"200\";s:11:\"description\";s:1:\"1\";s:5:\"etype\";s:1:\"1\";s:8:\"morepage\";s:1:\"1\";s:9:\"no_author\";s:1:\"1\";s:7:\"no_from\";s:1:\"1\";s:10:\"no_fromurl\";s:1:\"1\";}}','photo','0','0');

INSERT INTO `{$tbl_prefix}article_module` VALUES ('101','下载模型','软件','0','','','','a:3:{s:8:\"field_db\";a:8:{s:9:\"my_author\";a:13:{s:5:\"title\";s:12:\"软件作者\";s:10:\"field_name\";s:9:\"my_author\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"10\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"8\";s:9:\"allowview\";N;}s:14:\"my_copyfromurl\";a:14:{s:5:\"title\";s:12:\"厂商主页\";s:10:\"field_name\";s:14:\"my_copyfromurl\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:150;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"50\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"7\";s:9:\"allowview\";N;}s:7:\"my_demo\";a:14:{s:5:\"title\";s:12:\"演示网址\";s:10:\"field_name\";s:7:\"my_demo\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:150;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"50\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"6\";s:9:\"allowview\";N;}s:15:\"operatingsystem\";a:14:{s:5:\"title\";s:12:\"运行环境\";s:10:\"field_name\";s:15:\"operatingsystem\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:150;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"60\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:907:\"<br>平台选择：<a href=\\\"javascript:ToSystem(\\\'Linux\\\')\\\">Linux</a>/<a href=\\\"javascript:ToSystem(\\\'DOS\\\')\\\">DOS</a>/<a href=\\\"javascript:ToSystem(\\\'9x\\\')\\\">9x</a>/<a href=\\\"javascript:ToSystem(\\\'NT\\\')\\\">NT</a>/<a href=\\\"javascript:ToSystem(\\\'2000\\\')\\\">2000</a>/<a href=\\\"javascript:ToSystem(\\\'2003\\\')\\\">2003</a>/<a href=\\\"javascript:ToSystem(\\\'XP\\\')\\\">XP</a>/<a href=\\\"javascript:ToSystem(\\\'.NET\\\')\\\">.NET</a>/<a href=\\\"javascript:ToSystem(\\\'ASP\\\')\\\">ASP</a>/<a href=\\\"javascript:ToSystem(\\\'PHP\\\')\\\">PHP</a>/<a href=\\\"javascript:ToSystem(\\\'JSP\\\')\\\">JSP</a>/<a href=\\\"javascript:ToSystem(\\\'CGI\\\')\\\">CGI</a>\r\n\r\n<SCRIPT LANGUAGE=\\\"JavaScript\\\">\r\nfunction ToSystem(va){\r\n	cc=document.getElementById(\\\"atc_operatingsystem\\\").value\r\n	if(cc==\\\'\\\'){\r\n		document.getElementById(\\\"atc_operatingsystem\\\").value=va;\r\n	}else{\r\n		document.getElementById(\\\"atc_operatingsystem\\\").value+=\\\"/\\\"+va;\r\n	}\r\n	\r\n}\r\n</SCRIPT>\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"5\";s:9:\"allowview\";N;}s:12:\"softlanguage\";a:14:{s:5:\"title\";s:12:\"软件语言\";s:10:\"field_name\";s:12:\"softlanguage\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:6:\"select\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:48:\"简体中文\r\n繁体中文\r\n英文\r\n其他语言\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"4\";s:9:\"allowview\";N;}s:9:\"copyright\";a:13:{s:5:\"title\";s:12:\"授权形式\";s:10:\"field_name\";s:9:\"copyright\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:6:\"select\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:42:\"免费版\r\n试用版\r\n破解版\r\n商业版\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"3\";s:9:\"allowview\";N;}s:8:\"softsize\";a:14:{s:5:\"title\";s:12:\"文件大小\";s:10:\"field_name\";s:8:\"softsize\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:20;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:1:\"M\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"2\";s:9:\"allowview\";N;}s:7:\"softurl\";a:14:{s:5:\"title\";s:12:\"软件地址\";s:10:\"field_name\";s:7:\"softurl\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:10:\"upmorefile\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"1\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:0:{}s:9:\"moduleSet\";a:11:{s:5:\"alias\";s:6:\"软件\";s:10:\"title_name\";s:12:\"软件名称\";s:12:\"content_name\";s:12:\"软件介绍\";s:6:\"edit_w\";s:3:\"600\";s:6:\"edit_h\";s:3:\"300\";s:11:\"description\";s:1:\"1\";s:5:\"etype\";s:1:\"1\";s:8:\"morepage\";s:1:\"1\";s:9:\"no_author\";s:1:\"1\";s:7:\"no_from\";s:1:\"1\";s:10:\"no_fromurl\";s:1:\"1\";}}','download','0','0');


INSERT INTO `{$tbl_prefix}article_module` VALUES ('102','视频模型','视频','0','','','','a:3:{s:8:\"field_db\";a:3:{s:5:\"mvurl\";a:14:{s:5:\"title\";s:12:\"视频地址\";s:10:\"field_name\";s:5:\"mvurl\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:8:\"upmoremv\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"3\";s:9:\"allowview\";N;}s:7:\"my_role\";a:14:{s:5:\"title\";s:12:\"领衔主演\";s:10:\"field_name\";s:7:\"my_role\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:100;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"20\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"2\";s:9:\"allowview\";N;}s:7:\"my_lang\";a:14:{s:5:\"title\";s:6:\"语言\";s:10:\"field_name\";s:7:\"my_lang\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:20;s:9:\"form_type\";s:6:\"select\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:36:\"国语\r\n粤语\r\n英语\r\n其它语言\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"1\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:0:{}s:9:\"moduleSet\";a:11:{s:5:\"alias\";s:6:\"视频\";s:10:\"title_name\";s:12:\"视频名称\";s:12:\"content_name\";s:12:\"视频介绍\";s:6:\"edit_w\";s:3:\"500\";s:6:\"edit_h\";s:3:\"300\";s:11:\"description\";s:1:\"1\";s:5:\"etype\";s:1:\"1\";s:8:\"morepage\";s:1:\"1\";s:9:\"no_author\";s:1:\"1\";s:7:\"no_from\";s:1:\"1\";s:10:\"no_fromurl\";s:1:\"1\";}}','mv','0','0');
INSERT INTO `{$tbl_prefix}article_module` VALUES ('103','商城模型','商品','0','','','','a:3:{s:8:\"field_db\";a:6:{s:7:\"shopnum\";a:14:{s:5:\"title\";s:9:\"库存量\";s:10:\"field_name\";s:7:\"shopnum\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:5;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"8\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:6:\"不限\";s:10:\"form_units\";s:3:\"个\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"0\";s:9:\"allowview\";N;}s:8:\"nowprice\";a:14:{s:5:\"title\";s:12:\"现售价格\";s:10:\"field_name\";s:8:\"nowprice\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:20;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:3:\"元\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"0\";s:9:\"allowview\";N;}s:9:\"martprice\";a:14:{s:5:\"title\";s:12:\"市面价格\";s:10:\"field_name\";s:9:\"martprice\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:3:\"元\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"0\";s:9:\"allowview\";N;}s:9:\"shopmoney\";a:14:{s:5:\"title\";s:12:\"积分点数\";s:10:\"field_name\";s:9:\"shopmoney\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:7;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"7\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:3:\"点\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"0\";s:9:\"allowview\";N;}s:8:\"shoptype\";a:13:{s:5:\"title\";s:12:\"商品型号\";s:10:\"field_name\";s:8:\"shoptype\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"0\";s:9:\"allowview\";N;}s:7:\"shop_id\";a:14:{s:5:\"title\";s:12:\"商品编号\";s:10:\"field_name\";s:7:\"shop_id\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"0\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:0:{}s:9:\"moduleSet\";a:11:{s:5:\"alias\";s:6:\"商品\";s:10:\"title_name\";s:12:\"商品名称\";s:12:\"content_name\";s:12:\"商品介绍\";s:6:\"edit_w\";s:3:\"600\";s:6:\"edit_h\";s:3:\"300\";s:11:\"description\";s:1:\"1\";s:5:\"etype\";s:1:\"0\";s:8:\"morepage\";s:1:\"1\";s:9:\"no_author\";s:1:\"1\";s:7:\"no_from\";s:1:\"1\";s:10:\"no_fromurl\";s:1:\"1\";}}','shop','0','0');
INSERT INTO `{$tbl_prefix}article_module` VALUES ('104','FLASH模型','FLASH','0','','','','a:3:{s:8:\"field_db\";a:2:{s:11:\"flashauthor\";a:14:{s:5:\"title\";s:11:\"FLASH作者\";s:10:\"field_name\";s:11:\"flashauthor\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:20;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"12\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"2\";s:9:\"allowview\";N;}s:8:\"flashurl\";a:13:{s:5:\"title\";s:11:\"FLASH地址\";s:10:\"field_name\";s:8:\"flashurl\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:150;s:9:\"form_type\";s:6:\"upplay\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"1\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:0:{}s:9:\"moduleSet\";a:11:{s:5:\"alias\";s:5:\"FLASH\";s:10:\"title_name\";s:11:\"FLASH名称\";s:12:\"content_name\";s:11:\"FLASH介绍\";s:6:\"edit_w\";s:3:\"500\";s:6:\"edit_h\";s:3:\"300\";s:11:\"description\";s:1:\"1\";s:5:\"etype\";s:1:\"1\";s:8:\"morepage\";s:1:\"1\";s:9:\"no_author\";s:1:\"1\";s:7:\"no_from\";s:1:\"1\";s:10:\"no_fromurl\";s:1:\"1\";}}','flash','0','0');
INSERT INTO `{$tbl_prefix}article_module` VALUES ('105','产品模型','产品','0','','','','a:3:{s:8:\"field_db\";a:1:{s:7:\"my_type\";a:13:{s:5:\"title\";s:12:\"产品型号\";s:10:\"field_name\";s:7:\"my_type\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:100;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"0\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:0:{}s:9:\"moduleSet\";a:11:{s:5:\"alias\";s:6:\"产品\";s:10:\"title_name\";s:12:\"产品名称\";s:12:\"content_name\";s:12:\"产品介绍\";s:6:\"edit_w\";s:3:\"500\";s:6:\"edit_h\";s:3:\"250\";s:11:\"description\";s:1:\"1\";s:5:\"etype\";s:1:\"1\";s:8:\"morepage\";s:1:\"1\";s:9:\"no_author\";s:1:\"1\";s:7:\"no_from\";s:1:\"1\";s:10:\"no_fromurl\";s:1:\"1\";}}','','0','0');
INSERT INTO `{$tbl_prefix}members` VALUES ('1','admin','21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `{$tbl_prefix}memberdata` VALUES ('1','admin','','3','0','','1','0','','9999','999999','0','1700','1245999256','127.0.0.1','1245998759','127.0.0.1','0','0000-00-00','','','0','0','','','','','0','0','','','','','','','','0','0','0','0');
INSERT INTO `{$tbl_prefix}group` VALUES ('2','1','游客组','0','0','0','a:32:{s:10:\"upfileType\";s:0:\"\";s:13:\"upfileMaxSize\";s:0:\"\";s:14:\"PassContribute\";s:1:\"1\";s:17:\"SearchArticleType\";s:1:\"1\";s:16:\"PostArticleYzImg\";s:1:\"1\";s:13:\"EditPassPower\";s:1:\"0\";s:12:\"SetTileColor\";s:1:\"0\";s:14:\"SetSellArticle\";s:1:\"0\";s:17:\"SetSpecialArticle\";s:1:\"0\";s:17:\"SetArticleKeyword\";s:1:\"0\";s:20:\"AddArticleKeywordNum\";s:0:\"\";s:21:\"AddArticleCopyfromNum\";s:0:\"\";s:18:\"SelectArticleStyle\";s:1:\"0\";s:16:\"SelectArticleTpl\";s:1:\"0\";s:13:\"SetArticleTpl\";s:1:\"0\";s:18:\"SetArticlePosttime\";s:1:\"0\";s:18:\"SetArticleViewtime\";s:1:\"0\";s:16:\"SetArticleHitNum\";s:1:\"0\";s:18:\"SetArticlePassword\";s:1:\"0\";s:19:\"SetArticleDownGroup\";s:1:\"0\";s:19:\"SetArticleViewGroup\";s:1:\"0\";s:17:\"SetArticleJumpurl\";s:1:\"0\";s:19:\"SetArticleIframeurl\";s:1:\"0\";s:21:\"SetArticleDescription\";s:1:\"0\";s:16:\"SetArticleTopCom\";s:1:\"0\";s:13:\"SetSmallTitle\";s:1:\"0\";s:19:\"CommentArticleYzImg\";s:1:\"0\";s:17:\"CollectArticleNum\";s:0:\"\";s:15:\"CreatSpecialNum\";s:0:\"\";s:13:\"PostNoDelCode\";s:1:\"0\";s:7:\"SetVote\";s:1:\"0\";s:11:\"SetHtmlName\";s:1:\"0\";}','0','');
INSERT INTO `{$tbl_prefix}group` VALUES ('3','1','超级管理员','0','0','0','a:5:{s:10:\"upfileType\";s:0:\"\";s:13:\"upfileMaxSize\";s:0:\"\";s:14:\"PassContribute\";s:1:\"1\";s:13:\"EditPassPower\";s:1:\"0\";s:14:\"AllowUploadMax\";s:1:\"1\";}','1','a:87:{s:13:\"center_config\";s:1:\"1\";s:17:\"set_comsort_index\";s:1:\"1\";s:8:\"user_reg\";s:1:\"1\";s:12:\"center_cache\";s:1:\"1\";s:19:\"article_more_config\";s:1:\"1\";s:11:\"cache_cache\";s:1:\"1\";s:14:\"article_module\";s:1:\"1\";s:11:\"form_module\";s:1:\"1\";s:11:\"comment_set\";s:1:\"1\";s:18:\"setmakeALLhtml_set\";s:1:\"1\";s:11:\"module_list\";s:1:\"1\";s:9:\"blend_set\";s:1:\"1\";s:9:\"hack_list\";s:1:\"1\";s:14:\"ad_listAdPlace\";s:1:\"1\";s:13:\"ad_listuserad\";s:1:\"1\";s:6:\"sellad\";s:1:\"1\";s:15:\"sellad_listuser\";s:1:\"1\";s:10:\"alipay_set\";s:1:\"1\";s:9:\"shoporder\";s:1:\"1\";s:14:\"moneycard_make\";s:1:\"1\";s:7:\"js_list\";s:1:\"1\";s:17:\"propagandize_list\";s:1:\"1\";s:11:\"jfadmin_mod\";s:1:\"1\";s:15:\"attachment_list\";s:1:\"1\";s:9:\"area_list\";s:1:\"1\";s:10:\"upgrade_ol\";s:1:\"1\";s:14:\"friendlink_mod\";s:1:\"1\";s:14:\"alonepage_list\";s:1:\"1\";s:14:\"guestbook_list\";s:1:\"1\";s:12:\"channel_list\";s:1:\"1\";s:9:\"vote_list\";s:1:\"1\";s:9:\"mysql_out\";s:1:\"1\";s:10:\"mysql_into\";s:1:\"1\";s:9:\"mysql_del\";s:1:\"1\";s:9:\"mysql_sql\";s:1:\"1\";s:13:\"sort_listsort\";s:1:\"1\";s:15:\"artic_listartic\";s:1:\"1\";s:12:\"comment_list\";s:1:\"1\";s:12:\"form_content\";s:1:\"1\";s:13:\"artic_postnew\";s:1:\"1\";s:12:\"artic_addpic\";s:1:\"1\";s:11:\"member_list\";s:1:\"1\";s:12:\"company_list\";s:1:\"1\";s:8:\"regfield\";s:1:\"1\";s:16:\"member_addmember\";s:1:\"1\";s:14:\"limitword_list\";s:1:\"1\";s:11:\"report_list\";s:1:\"1\";s:13:\"copyfrom_list\";s:1:\"1\";s:17:\"limitword_replace\";s:1:\"1\";s:24:\"article_more_avoidgather\";s:1:\"1\";s:13:\"getkeyword_do\";s:1:\"1\";s:17:\"googlemap_makemap\";s:1:\"1\";s:20:\"article_group_config\";s:1:\"1\";s:10:\"group_list\";s:1:\"1\";s:16:\"group_list_admin\";s:1:\"1\";s:9:\"group_add\";s:1:\"1\";s:9:\"menu_list\";s:1:\"1\";s:14:\"adminmenu_list\";s:1:\"1\";s:15:\"membermenu_list\";s:1:\"1\";s:18:\"makeindexhtml_make\";s:1:\"1\";s:13:\"makehtml_make\";s:1:\"1\";s:15:\"spmakehtml_make\";s:1:\"1\";s:15:\"setmakehtml_set\";s:1:\"1\";s:9:\"exam_sort\";s:1:\"1\";s:10:\"exam_title\";s:1:\"1\";s:9:\"exam_form\";s:1:\"1\";s:9:\"exam_read\";s:1:\"1\";s:11:\"index_label\";s:1:\"1\";s:10:\"s_list_fid\";s:1:\"1\";s:13:\"up_splist_fid\";s:1:\"1\";s:15:\"gather_copysina\";s:1:\"1\";s:11:\"gather_list\";s:1:\"1\";s:16:\"gather_list_sort\";s:1:\"1\";s:12:\"message_send\";s:1:\"1\";s:9:\"mail_send\";s:1:\"1\";s:8:\"sms_send\";s:1:\"1\";s:8:\"cnzz_set\";s:1:\"1\";s:9:\"code_code\";s:1:\"1\";s:15:\"style_editstyle\";s:1:\"1\";s:13:\"template_list\";s:1:\"1\";s:12:\"special_list\";s:1:\"1\";s:15:\"spsort_listsort\";s:1:\"1\";s:15:\"logs_login_logs\";s:1:\"1\";s:18:\"logs_admin_do_logs\";s:1:\"1\";s:13:\"fu_sort_power\";s:1:\"1\";s:14:\"fu_artic_power\";s:1:\"1\";s:6:\"mymenu\";a:2:{s:13:\"sort_listsort\";s:1:\"1\";s:12:\"comment_list\";s:1:\"1\";}}');
INSERT INTO `{$tbl_prefix}group` VALUES ('4','1','前台管理员','0','0','0','','0','a:1:{s:6:\"mymenu\";N;}');
INSERT INTO `{$tbl_prefix}group` VALUES ('8','0','普通会员','0','50','0','a:31:{s:10:\"upfileType\";s:0:\"\";s:13:\"upfileMaxSize\";s:0:\"\";s:14:\"PassContribute\";s:1:\"1\";s:13:\"EditPassPower\";s:1:\"0\";s:17:\"SearchArticleType\";s:1:\"1\";s:12:\"SetTileColor\";s:1:\"0\";s:14:\"SetSellArticle\";s:1:\"0\";s:13:\"SetSmallTitle\";s:1:\"0\";s:17:\"SetSpecialArticle\";s:1:\"1\";s:17:\"SetArticleKeyword\";s:1:\"1\";s:20:\"AddArticleKeywordNum\";s:1:\"0\";s:16:\"PostArticleYzImg\";s:1:\"0\";s:21:\"AddArticleCopyfromNum\";s:1:\"0\";s:16:\"SelectArticleTpl\";s:1:\"0\";s:13:\"SetArticleTpl\";s:1:\"0\";s:18:\"SelectArticleStyle\";s:1:\"0\";s:18:\"SetArticlePosttime\";s:1:\"0\";s:18:\"SetArticleViewtime\";s:1:\"0\";s:16:\"SetArticleHitNum\";s:1:\"0\";s:18:\"SetArticlePassword\";s:1:\"0\";s:19:\"SetArticleDownGroup\";s:1:\"0\";s:19:\"SetArticleViewGroup\";s:1:\"0\";s:17:\"SetArticleJumpurl\";s:1:\"0\";s:19:\"SetArticleIframeurl\";s:1:\"0\";s:21:\"SetArticleDescription\";s:1:\"0\";s:16:\"SetArticleTopCom\";s:1:\"0\";s:17:\"CollectArticleNum\";s:2:\"30\";s:15:\"CreatSpecialNum\";s:1:\"7\";s:19:\"CommentArticleYzImg\";s:1:\"1\";s:11:\"SetHtmlName\";s:1:\"0\";s:7:\"SetVote\";s:1:\"1\";}','0','');
INSERT INTO `{$tbl_prefix}group` VALUES ('9','0','VIP会员','10000','0','0','a:27:{s:17:\"SearchArticleType\";s:1:\"0\";s:16:\"PostArticleYzImg\";s:1:\"0\";s:14:\"PassContribute\";s:1:\"0\";s:13:\"EditPassPower\";s:1:\"0\";s:12:\"SetTileColor\";s:1:\"0\";s:14:\"SetSellArticle\";s:1:\"0\";s:17:\"SetSpecialArticle\";s:1:\"0\";s:17:\"SetArticleKeyword\";s:1:\"0\";s:20:\"AddArticleKeywordNum\";s:0:\"\";s:21:\"AddArticleCopyfromNum\";s:0:\"\";s:18:\"SelectArticleStyle\";s:1:\"0\";s:16:\"SelectArticleTpl\";s:1:\"0\";s:13:\"SetArticleTpl\";s:1:\"0\";s:18:\"SetArticlePosttime\";s:1:\"0\";s:18:\"SetArticleViewtime\";s:1:\"0\";s:16:\"SetArticleHitNum\";s:1:\"0\";s:18:\"SetArticlePassword\";s:1:\"0\";s:19:\"SetArticleDownGroup\";s:1:\"0\";s:19:\"SetArticleViewGroup\";s:1:\"0\";s:17:\"SetArticleJumpurl\";s:1:\"0\";s:19:\"SetArticleIframeurl\";s:1:\"0\";s:21:\"SetArticleDescription\";s:1:\"0\";s:16:\"SetArticleTopCom\";s:1:\"0\";s:13:\"SetSmallTitle\";s:1:\"0\";s:19:\"CommentArticleYzImg\";s:1:\"0\";s:17:\"CollectArticleNum\";s:0:\"\";s:15:\"CreatSpecialNum\";s:0:\"\";}','0','');
INSERT INTO `{$tbl_prefix}menu` VALUES ('9','0','新闻','list.php?fid=1','','0','0','0','0','18');
INSERT INTO `{$tbl_prefix}menu` VALUES ('10','0','图片','list.php?fid=9','','0','0','0','0','16');
INSERT INTO `{$tbl_prefix}menu` VALUES ('11','0','下载','list.php?fid=11','','0','0','0','0','14');
INSERT INTO `{$tbl_prefix}menu` VALUES ('12','0','影视','list.php?fid=13','','0','0','0','0','12');
INSERT INTO `{$tbl_prefix}menu` VALUES ('13','0','商城','list.php?fid=15','','0','0','0','0','10');
INSERT INTO `{$tbl_prefix}menu` VALUES ('14','0','FLASH','list.php?fid=17','','0','0','0','0','8');
INSERT INTO `{$tbl_prefix}menu` VALUES ('54','0','考评','/do/exam_write.php?id=3','','0','0','0','0','0');
INSERT INTO `{$tbl_prefix}menu` VALUES ('52','0','产品','list.php?fid=29','','0','0','0','0','7');
INSERT INTO `{$tbl_prefix}menu` VALUES ('51','0','首页','/','','0','0','0','0','20');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('12','0','内容管理','','','0','8','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('81','12','表单管理','index.php?lfj=form_module&job=list','','0','11','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('82','12','留言本管理','index.php?lfj=guestbook&job=list','','0','10','3','1');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('83','0','标签/风格模板/静态页','','','0','9','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('84','83','</a>\r\n<font color=\"#FF0000\">主页</font><img src=../images/default/article_elite.gif> <a href=\"../index.php?&ch=1&chtype=0&jobs=show\" target=\"main\">标签</a> <A HREF=\'../index.php?&ch=1&MakeIndex=1\' target=\'_blank\' onclick=\"return confirm(\'你确实要把首页生成静态吗?生成静态后,如有更改其它相关设置,需要重新点击生成一次静态.才可以看到效果.\');\">静态</a> <a href=\"index.php?lfj=channel&job=list_fid&onlyshow=style\" target=\"main\">风格</a><a> ','#','','0','4','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('85','83','</a>\r\n<a href=\'index.php?lfj=channel&job=list_fid&onlyshow=label\' target=\'main\'><font color=\"#FF0000\"><u>栏目</u></font></a><img src=../images/default/article_elite.gif> <a href=\"../do/job.php?job=jump&pagetype=list_label\" target=\"main\">标签</a> <A HREF=\'index.php?lfj=html&job=list\' target=\"main\">静态</a> <a href=\"index.php?lfj=channel&job=list_fid&onlyshow=style\" target=\"main\">风格</a><a> ','#','','0','3','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('86','83','</a>\r\n<font color=\"#FF0000\">专题</font><img src=../images/default/article_elite.gif> <a href=\"index.php?lfj=special&job=list&onlyshow=label\" target=\"main\">标签</a> <A HREF=\'index.php?lfj=html&job=listsp\' target=\"main\">静态</a> <a href=\"index.php?lfj=special&job=list&onlyshow=style\" target=\"main\">风格</a><a> ','#','','0','1','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('87','0','会员相关功能','','','0','7','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('88','87','会员资料管理','index.php?lfj=member&job=list','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('89','87','文章相关权限','index.php?lfj=article_group&job=list','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('90','87','基本权限','index.php?lfj=group&job=list','','0','0','3','1');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('91','87','管理员后台权限设置','index.php?lfj=group&job=list_admin','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('41','0','实用功能','','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('42','41','财富中心(积分管理)','money.php?job=list','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('43','41','购买普通广告','buyad.php?job=list','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('44','41','购买竞价广告','buy_sellad.php?job=list','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('45','41','购买会员等级','buygroup.php?job=list','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('46','41','企业信息','company.php?job=edit','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('47','0','网站其它内容管理','','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('48','47','收藏夹管理','collection.php?job=myarticle','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('49','47','专题管理','special.php?job=listsp','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('50','47','评论管理','comment.php?job=list','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('51','0','文章频道','','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('52','51','发表文章','post.php?job=postnew&only=1&mid=0','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('53','51','修改/删除文章','myarticle.php?job=myarticle&only=1&mid=0','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('54','0','图片频道','','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('55','54','发布图片','post.php?job=postnew&only=1&mid=100','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('56','54','修改/删除图片','myarticle.php?job=myarticle&only=1&mid=100','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('57','0','下载频道','','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('58','0','视频频道','','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('59','0','商城频道','','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('60','0','FLASH频道','','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('61','57','发布软件','post.php?job=postnew&only=1&mid=101','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('62','58','发布视频','post.php?job=postnew&only=1&mid=102','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('63','59','发布商品','post.php?job=postnew&only=1&mid=103','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('64','60','发布FLASH','post.php?job=postnew&only=1&mid=104','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('65','57','修改/删除软件','myarticle.php?job=myarticle&only=1&mid=101','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('66','58','修改/删除视频','myarticle.php?job=myarticle&only=1&mid=102','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('67','59','修改/删除商品','myarticle.php?job=myarticle&only=1&mid=103','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('68','60','修改/删除FLASH','myarticle.php?job=myarticle&only=1&mid=104','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('69','41','身份验证','yz.php?job=email','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('70','41','推广赚积分','propagandize.php','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('71','41','版主申请','form.php?mid=1','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('72','41','投诉建议','form.php?mid=3','','0','0','-8','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('73','12','专题管理','index.php?lfj=special&job=list','','0','13','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('74','12','评论管理','index.php?lfj=comment&job=list','','0','12','3','1');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('75','12','</a>\r\n<font color=\"#FF0000\">文章</font><img src=../images/default/article_elite.gif> <a href=\"index.php?lfj=post&job=postnew&only=1&mid=0\" target=\"main\">发表</a> <a href=\"index.php?lfj=artic&job=listartic&mid=0&only=1\" target=\"main\">管理</a> <a href=\"index.php?lfj=sort&job=listsort&mid=0&only=1\" target=\"main\">栏目</a><a> ','#','','0','20','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('76','12','</a>\r\n<font color=\"#FF0000\">图片</font><img src=../images/default/article_elite.gif> <a href=\"index.php?lfj=post&job=postnew&only=1&mid=100\" target=\"main\">发表</a> <a href=\"index.php?lfj=artic&job=listartic&mid=100&only=1\" target=\"main\">管理</a> <a href=\"index.php?lfj=sort&job=listsort&mid=100&only=1\" target=\"main\">栏目</a><a> ','#','','0','19','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('77','12','</a>\r\n<font color=\"#FF0000\">软件</font><img src=../images/default/article_elite.gif> <a href=\"index.php?lfj=post&job=postnew&only=1&mid=101\" target=\"main\">发表</a> <a href=\"index.php?lfj=artic&job=listartic&mid=101&only=1\" target=\"main\">管理</a> <a href=\"index.php?lfj=sort&job=listsort&mid=101&only=1\" target=\"main\">栏目</a><a> ','#','','0','18','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('78','12','</a>\r\n<font color=\"#FF0000\">视频</font><img src=../images/default/article_elite.gif> <a href=\"index.php?lfj=post&job=postnew&only=1&mid=102\" target=\"main\">发表</a> <a href=\"index.php?lfj=artic&job=listartic&mid=102&only=1\" target=\"main\">管理</a> <a href=\"index.php?lfj=sort&job=listsort&mid=102&only=1\" target=\"main\">栏目</a><a> ','#','','0','17','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('79','12','</a>\r\n<font color=\"#FF0000\">商品</font><img src=../images/default/article_elite.gif> <a href=\"index.php?lfj=post&job=postnew&only=1&mid=103\" target=\"main\">发表</a> <a href=\"index.php?lfj=artic&job=listartic&mid=103&only=1\" target=\"main\">管理</a> <a href=\"index.php?lfj=sort&job=listsort&mid=103&only=1\" target=\"main\">栏目</a><a> ','#','','0','16','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('80','12','</a>\r\n<font color=\"#FF0000\">产品</font><img src=../images/default/article_elite.gif> <a href=\"index.php?lfj=post&job=postnew&only=1&mid=105\" target=\"main\">发表</a> <a href=\"index.php?lfj=artic&job=listartic&mid=105&only=1\" target=\"main\">管理</a> <a href=\"index.php?lfj=sort&job=listsort&mid=105&only=1\" target=\"main\">栏目</a><a> ','#','','0','15','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('92','0','系统功能设置','','','0','6','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('93','92','核心全局参数设置','index.php?lfj=center&job=config','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('94','92','网站导航菜单设置','index.php?lfj=guidemenu&job=list','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('95','92','网站内容模型管理','index.php?lfj=article_module&job=list','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('96','92','友情链接管理','index.php?lfj=friendlink&job=list','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('97','92','独立页面管理','index.php?lfj=alonepage&job=list','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('98','92','备份网站数据库','index.php?lfj=mysql&job=out','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('99','92','万能自定义表单模型管理','index.php?lfj=form_module&job=list','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('100','92','文章功能重要设置','index.php?lfj=article_more&job=config','','0','0','3','0');
INSERT INTO `{$tbl_prefix}admin_menu` VALUES ('101','83','</a>\r\n<font color=\"#FF0000\">内容</font><img src=../images/default/article_elite.gif> <a href=\"../do/job.php?job=jump&pagetype=bencandy_label\" target=\"main\">内容页标签</a>\r\n<a> ','#','','0','2','3','0');
INSERT INTO `{$tbl_prefix}special` VALUES ('1','1','2008年北京奥林匹克运动会','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1/1_20090317180324_3faZb.jpg','法国教育家顾拜旦是公认的现代奥林匹克创始人，他为奥林匹克运动的诞生和发展作出了卓越贡献。1888年，顾拜旦就任法国学校教育、体育训练筹备委员会秘书长。1889年顾拜旦代表法国参加在波士顿举行的国际体育训练大会，进一步了解世界体育的动态','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1222049403','1222049403','185','1239012334','1','1237368445','','','3','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('2','1','神七问天　龙江助力','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1/1_20090317180354_4wyVh.jpg','　23日9：00 0号指挥员开始调度点名，收集火箭、飞船和地面系统状态准备情况 \n  \n　　23日10时30分神七任务发射场区最后一次船箭地联合检查顺利完成，标志着飞船发射已进入倒计时 \n  \n　　24日14时30分神舟七号载人航天飞行任务总指挥部新闻发布会举行 \n  \n　　9月24日下午4时，运载神七的火箭开始加注燃料，加注时间将持续7个小时 \n  \n　　24日16:00 中国载人航天工程官方网站——中国载人航天工程网正式开通，网址是：WWW.CMSE.GOV.CN  \n','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1222049495','1222049495','44','1238471537','1','1237368446','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('3','1','四川汶川发生8.0级大地震','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090317180331_WbO16.jpg','　　地球可分为三层。中心层是地核；中间是地幔；外层是地壳。地震一般发生在地壳之中。地壳内部在不停地变化，由此而产生力的作用，使地壳岩层变形、断裂、错动，于是便发生地震。但其发生占总地震7%~21%,破坏程度是原子弹的数倍，所以超级地震影响十分广泛，也是十分具破坏力。超级地震指的是指震波极其强烈的大地震。','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','6','222222','1232185944','1232185944','62','1238642525','0','0','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('10','1','主页幻灯片','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1237382603','1237382603','22','1238471530','0','0','','','3,4','1','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('11','1','主页头条','','新闻 时事','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1237382706','1237382706','101','1239345687','0','1238675329','','','3,4','1','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('12','3','北京两站客流创纪录 逾40万人21日离京','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090406180439_a4h3E.jpg','记者从北京铁路部门获悉，北京铁路客流昨天（21日）迎来大爆发，北京站和西站上车客流均创建站以来的历史最高纪录。加上北京北站的1万多人，昨天共有40多万人乘火车离京。 \r\n\r\n　　北京站相关负责人透露，昨天该站客流继续上升，探亲流和务工流成为主要出行客流，在前天15.3万人次(包括北京南站的1.9万人)的基础上再创新高，达到16万人次。这一数字已经开创了北京站建站50多年来的新纪录。 \r\n\r\n','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1239014267','1239014267','7','1239709799','0','0','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('13','3','2008年北京政策性住房建设大事记','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090406180445_ZrXUG.jpg','　5月9日，朝阳区450户申请购买经济适用房的家庭成为首批在北京青年报公示的对象，接受市民监督。\r\n\r\n　　　　7月18日，朝阳区第一批经济适用住房摇号配售活动举行，陈刚副市长启动摇号机，率先确定了25户优先配售家庭的选房序号，\r\n　　此次摇号活动共有2203户获得经济适用住房购房资格的申请家庭喜获常营经济适用住房项目的选房序号。 \r\n\r\n　　　　8月1日上午10点，在西城区首批廉租房、经济适用住房配租、配售摇号现场，市建委委员程建华按下电脑摇号机摇出了20户两居\r\n　　室廉租房配租家庭的选房序号。这是本市今年首次举行廉租房配租摇号活动。\r\n\r\n　　　　9月1日上午，许爱莲大妈在家人的帮助下，在《选房确认单》上签下了自己的名字，从而成为石景山区限价房选房第一人，也成\r\n　　了北京市限价房第一个选房人。\r\n','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1239015107','1239015107','3','1239709790','0','0','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('14','3','车号限行 北京告别拥堵时代','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','7月20日，北京开始实施“机动车单双号限行”措施，以保证北京奥运会、残奥会期间交通正常运行和空气质量。根据北京市发\r\n　　布的通告，从7月20日0时至9月20日24时，北京市机动车及外省区市进京机动车需按号牌尾号分单双号上路行驶，期间每日设置3个\r\n　　小时缓冲时间，0时至3时机动车上路不受单双号限制。\r\n\r\n　　按尾号限行车辆\r\n\r\n　　　　10月13日北京实施按尾号限行车辆措施，车牌尾号1和6的车辆禁止上路，全市近80万辆机动车停驶。当日，早高峰公交客流量有\r\n　　所增长，公交车满载率均达到了80%左右，三环路的300路内外环加车40部，长安街的大1路加车10部，52路加车5部。此外，奥运期间\r\n　　服务残疾人的2100辆无障碍公交车也将陆续投入运营，通往8个远郊区县的出城线路也将再延长晚间运营时间半小时，通往郊区县的\r\n　　“9字头”公交车的城区运营时间也将延长，方便家在郊区的市民出行顺畅。 \r\n','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1239015257','1239015257','3','1240201026','1','1240116328','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('15','3','雪灾地震 北京人民献爱心','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090406180434_2ZGGB.jpg','　　　　2008年初，持续的雪灾，几乎使半个中国陷于瘫痪之中。那些被困在路上饥寒交迫的人们，牵着全国人民的心。北京市领导带头\r\n　　向南方受灾地区捐款，最后北京拿出1800万元作为地方政府间捐款。2月4日，“爱心融化冰雪”首都大型赈灾慈善义演在首都体育馆\r\n　　举行。心的默契形成爱的合力，晚会现场最终募集善款8654.16万元，并将通过首都慈善公益组织联合会捐往灾区。\r\n\r\n　　5.12汶川地震 北京各界献爱心 \r\n\r\n　　　　5.12四川汶川地震发生后，北京市民积极响应中央和市委、市政府的号召，组织捐款捐物支援灾区，万众同心掀起爱心奉献热\r\n　　潮。截至28日17时，本市社会各界为灾区累计捐款捐物折合17.686亿元。从5月14日下午开始至27日，北京有49444名个人报名成为应\r\n　　急预约献血者，还有586个单位预约团体献血。\r\n','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1239015378','1239015378','8','1240201023','1','1240116327','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('16','3','限塑令让北京进入绿色购物时代','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090406180427_PCqyL.jpg','限塑令让北京进入绿色购物时代\r\n\r\n　　　　国务院办公厅2007年底下发的《关于限制生产销售使用塑料购物袋的通知》，对塑料袋的生产销售使用做出了具体规定，以便从\r\n　　源头上采取有力措施，督促企业生产耐用、易于回收的塑料购物袋。 \r\n\r\n　　　　根据商务部、国家发改委、国家工商管理总局联合发布的《商品零售场所塑料购物袋有偿使用管理办法》，从2008年6月1日起，\r\n　　商品零售场所有不标明塑料购物袋价格，向消费者无偿或变相无偿提供塑料袋等行为之一的，将受到最高1万元的罚款。 \r\n\r\n　　　　“限塑令”在实施初期起到了立竿见影的效果。数据显示，在“限塑令”执行首日，北京各超市卖场塑料购物袋的使用量锐减，\r\n　　减少比例最多达九成以上。 \r\n\r\n　　　　但“限塑令”实施半年后，在一些综合集贸市场及街边零散的商铺摊位，免费塑料袋大有“卷土重来”之势。 \r\n','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1239015433','1239015433','7','1240201019','1','1240116326','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('17','3','2008股市大事记','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090406200408_511F4.jpg','　　　　1月21日，中国平安推出巨额再融资方案，随后多家上市公司集中提出再融资，引发市场关注。 \r\n　　　　4月18日，中国石油A股跌破发行价。 \r\n　　　　4月21日，《上市公司解除限售存量股份转让指导意见》出台，对“大小非”减持做出规范。 \r\n　　　　4月23日，财政部宣布将印花税从3‰下调至1‰，次日股市强劲反弹。 \r\n　　　　9月16日，中国人民银行多年来首次下调人民币贷款基准利率和中小金融机构人民币存款准备金率。 \r\n　　　　9月19日，证券交易印花税单边征收、国资委支持央企增持或回购上市公司股份、汇金公司将在二级市场自主购入工、中、建行\r\n　　股票等三项措施同时出台。 \r\n　　　　11月9日，国务院常务会议进一步扩大内需、促进经济增长的十项措施公布。 \r\n　　　　11月27日，央行大幅下调存贷款基准利率1.08‰。 \r\n　　　　12月5日，国务院常务会议部署金融促进经济发展的9项政策措施。 \r\n','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1239015531','1239015531','5','1240201016','1','1240116325','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('18','3','北京轨道交通网络初现','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090406190419_nZvHu.jpg','　　　　2008年，历时几年时间的北京地铁1、2号线综合改造的主体工程在奥运会前全部完成，在世界地铁运营史上创造了不停运情况下\r\n　　对运营线进行大规模改造的成功先例。 \r\n\r\n　　　　7月19日，10号线一期、奥运支线和机场线三条轨道新线下午2点正式通车。至此，北京轨道运营里程达到200公里，运营线路达\r\n　　到8条，北京轨道交通的网络效应已初步显现。 \r\n\r\n　　　　2008年6月9日，北京地铁原有的5条运营线路的93个车站自动售检票系统全部投入使用，这是北京地铁划时代的一项工程，从此\r\n　　结束了38年纸质车票的历史，北京地铁进入刷卡时代。2008年7月19日，地铁10号线一期、8号线一期和机场线三条新线在开通试运营\r\n　　时也同步启用了自动售检票系统。\r\n','7,142,184,248,250,249','3,8,9,10,11,6,12,14,13,5,7,4','','0','1','admin','1239015583','1239015583','9','1240201012','1','1240116322','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('19','1','广州、深圳性文化节成人展（图）','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090419120437_ZT7Cg.jpg','　9日，热身已久的“2008第六届全国(广州)性文化节”正式开幕，虽然因受金融风暴的影响，观展市民数量较往年略有下降，但展览内容依然丰富，原本唯我独尊的“情趣内衣秀”有了挑战对手，观展主力军除了往年的中年男性外，老年人、夫妻档也异军突起，谈“性”看“性”不再神秘','561,562,563,564','','','0','1','admin','1240114393','1240114393','29','1240218254','1','1240116319','','special/1_20090419120430_pkrpw.jpg','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('20','1','PHP168 V6专题--创造版V6','','PHP168 V6专题--创造版V6','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090419120432_tfpIV.jpg','作为中国最主流的CMS平台之一，PHP168即将发布对官方及站长都具有重要意义V6版，V6定位为CMS领域的创造版，不仅在功能上具有大幅创新，同时在思路上让站长运营更加贴近主流互联网经济的平台。\r\n','595,596,597,598,599,600,601','23,25,26,27,28,29,30,31','','0','1','admin','1240116689','1240116689','13','1240222205','1','1240117139','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('21','1','站长域名、主机购买专题','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090419140454_YezjW.jpg','国内首家专业主机交易平台，主机网（CNIDC.com）正式上线推出。“让天下没有难买的主机！”这是姚剑军给予主机网的期望。','587,590,591,593,594,595,596,598','23,24,25,26,28,29,27,30,31','','0','1','admin','1240120502','1240120502','13','1240899977','1','1240121484','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('22','1','站长工具----建站一扫光','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090419140445_xE1Sz.jpg','网站信息查询SEO信息查询域名/IP类查询代码转换工具路由器追踪LOGO在线制作网站保姆 常用软件 字符到ASCII码 转换工具输入一个字符: 输入键盘上任一字符转换该键ACSII码,大小写字母ASCII码不同。','597,595','31,30,29,28,20,21,22,23,27,26,25,24','','0','1','admin','1240121828','1240121828','8','1240201473','1','1240122051','','','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('24','1','成长中和成功的中国CEO','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090419140403_B36H1.jpg','太多的故事和意见都值得我们这些还没步入成功人士来参考。\r\n他们或许已经成功，或者有些还在成长中，不论怎样，做到今天，他们都已经是真正的英雄。','583,584,585,586,594,595,597,598,600,601','17,19,28,29,31,30,20,21,22,23,24,27,26,25','','0','1','admin','1240124312','1240124312','26','1240222220','1','1240125051','','special/1_20090419150403_aMUbN.jpg','','0','','1');
INSERT INTO `{$tbl_prefix}special` VALUES ('23','1','中国互联网观点参考','','','','a:3:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','special/1_20090419140451_9nuT0.jpg','不管是创业热潮涌起的昨天，还是金融危机依然继续的今天，\r\n更好的技术与应用始终是产业发展的重中之重。只是在多变的年代里，得到的回答也在不停变换。\r\n哪项技术会成为下一个大热门，它们会如何改变我们的生活？CEO们看到的产业未来，和我们眼中的有什么不一样？\r\n2009年2月起，腾讯科技计划走访百位互联网、IT界著名CEO和CTO，将他们的答案一一为网友呈现','597,598','17,19,18,23,20,21,22,27,28,26,25,24','','0','1','admin','1240122281','1240122281','19','1240222006','1','1240122359','','special/1_20090419150453_IGx32.jpg','','0','','1');
INSERT INTO `{$tbl_prefix}special_comment` VALUES ('5','3','0','0','','1238330478','这个界面不错','192.168.0.106','0','1');
INSERT INTO `{$tbl_prefix}special_comment` VALUES ('2','1','0','1','admin','1235393020','cccccccccccccccccccc','192.168.0.99','0','1');
INSERT INTO `{$tbl_prefix}special_comment` VALUES ('6','3','0','0','草上飞','1238330503','挺好挺好','192.168.0.106','0','1');
INSERT INTO `{$tbl_prefix}special_comment` VALUES ('7','16','0','1','admin','1239345815','gfdsgfd','127.0.0.1','0','1');
INSERT INTO `{$tbl_prefix}special_comment` VALUES ('8','21','0','1','admin','1240222890','0000000000','192.168.0.101','0','1');
INSERT INTO `{$tbl_prefix}spsort` VALUES ('1','0','时事新闻专题','1','0','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','0','','','','','0','a:4:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;}','','');
INSERT INTO `{$tbl_prefix}spsort` VALUES ('2','0','娱乐新闻专题','1','0','1','','0','0','','','fff','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','33','','0','','','','','0','a:4:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;}','','');
INSERT INTO `{$tbl_prefix}spsort` VALUES ('3','0','2008北京生活大盘点','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','','','');
INSERT INTO `{$tbl_prefix}alonepage` VALUES ('1','0','友情链接','友情链接','1229507597','0','','','','','','friendlink.htm','','','','<table cellSpacing=4 cellPadding=4 width=\"100%\" border=0>\r\n<tbody>\r\n<tr>\r\n<td width=\"20%\"><a href=\"http://www.mmcbbs.com/\" target=_blank>菁菁论坛</a></td>\r\n<td width=\"20%\"><a href=\"http://www.liuv.net/\" target=_blank>流水设计</a></td>\r\n<td width=\"20%\"><a href=\"http://pic.goodod.com/\" target=_blank>欧迪手机图片</a></td>\r\n<td width=\"20%\"><a href=\"http://www.tianyakezhan.com/\" target=_blank>天涯客栈</a></td>\r\n<td width=\"20%\"><a href=\"http://www.czin.cn/\" target=_blank>崇左热线</a></td></tr>\r\n<tr>\r\n<td width=\"20%\"><a href=\"http://www.jneg.com.cn/\" target=_blank>金能家园</a></td>\r\n<td width=\"20%\"><a href=\"http://www.wyrj.com/\" target=_blank>屋檐人家</a></td>\r\n<td width=\"20%\"><a href=\"http://www.nenbei.com/\" target=_blank>嫩北网</a></td>\r\n<td width=\"20%\"><a href=\"http://www.photosbar.com/\" target=_blank>图吧</a></td>\r\n<td width=\"20%\"><a href=\"http://www.ok586.cn/\" target=_blank>视览供销</a></td></tr>\r\n<tr>\r\n<td width=\"20%\"><a href=\"http://www.51solo.net/\" target=_blank>我爱搜罗娱乐</a></td>\r\n<td width=\"20%\"><a href=\"http://www.toopd.com/\" target=_blank>飞羽设计</a></td>\r\n<td width=\"20%\"><a href=\"http://www.qiqig.com/\" target=_blank>爱雅</a></td>\r\n<td width=\"20%\"><a href=\"http://www.jxsrjys.com.cn/\" target=_blank>上饶教研</a></td>\r\n<td width=\"20%\"><a href=\"http://www.unok.net/\" target=_blank>优盟网</a></td></tr>\r\n<tr>\r\n<td width=\"20%\"><a href=\"http://mmm.pudou.com/\" target=_blank>扑豆中国</a></td>\r\n<td width=\"20%\"><a href=\"http://www.itzhan.com/\" target=_blank>IT中文</a></td>\r\n<td width=\"20%\"><a href=\"http://www.hkwtv.com/\" target=_blank>香港网视</a></td>\r\n<td width=\"20%\">&nbsp;</td>\r\n<td width=\"20%\">&nbsp;</td></tr></tbody></table>','52','0');
INSERT INTO `{$tbl_prefix}channel` VALUES ('1','0','0','网站首页','./','','index.htm','35,4,3','','','','','','','','','','0','a:5:{s:4:\"line\";s:1:\"3\";s:4:\"rows\";s:1:\"8\";s:4:\"leng\";s:2:\"34\";s:5:\"order\";s:4:\"list\";s:8:\"fid_list\";N;}');
INSERT INTO `{$tbl_prefix}comment` VALUES ('46','113','3','0','1','admin','1230195903','ddddddddddddfffffffffffffffeeeeeeeeeee','127.0.0.1','1','1','0','0','0');
INSERT INTO `{$tbl_prefix}comment` VALUES ('47','113','3','0','1','admin','1230195917','[quote]引用ID编号为46,称呼为admin于2008-12-25 17:05:03发表的  :<br>ddddddddddddfffffffffffffffeeeeeeeeeee[/quote]ffffffffffffffffffff<br>','127.0.0.1','1','1','1','0','0');
INSERT INTO `{$tbl_prefix}comment` VALUES ('173','564','37','0','2','马云','1240131638','衣服穿得太少了','192.168.0.106','1','1','0','0','0');
INSERT INTO `{$tbl_prefix}comment` VALUES ('174','579','4','0','2','马云','1240131731','什么世道呢','192.168.0.106','1','1','0','0','0');
INSERT INTO `{$tbl_prefix}comment` VALUES ('175','576','4','0','1','admin','1240132457','骗子很多，不是都像马云这样有企业家精神的。','192.168.0.106','1','1','0','0','0');
INSERT INTO `{$tbl_prefix}comment` VALUES ('172','521','16','0','1','admin','1239781304','城楼','192.168.0.99','1','1','0','1','1');
INSERT INTO `{$tbl_prefix}comment` VALUES ('176','599','3','0','1','admin','1240897357','fffffffffffffffff','192.168.0.99','1','1','0','0','0');
INSERT INTO `{$tbl_prefix}comment` VALUES ('177','599','3','0','1','admin','1240897365','33333333333333333','192.168.0.99','1','1','0','0','0');
INSERT INTO `{$tbl_prefix}comment` VALUES ('178','576','4','1','1','admin','1245999269','fdsa','127.0.0.1','1','1','0','0','0');
INSERT INTO `{$tbl_prefix}comment` VALUES ('179','576','4','1','1','admin','1245999278','有苦难言','127.0.0.1','1','1','0','0','0');
INSERT INTO `{$tbl_prefix}config` VALUES ('yzImgComment','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('flashtime','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('showComment','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('forbidComment','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('showCommentRows','8','');
INSERT INTO `{$tbl_prefix}config` VALUES ('viewNoPassGuestBook','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('yzImgContribute','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('groupPassContribute','3','');
INSERT INTO `{$tbl_prefix}config` VALUES ('forbidRegName','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('forbidReg','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MaxOnlineUser','1000','');
INSERT INTO `{$tbl_prefix}config` VALUES ('groupPassShopYz','3,4','');
INSERT INTO `{$tbl_prefix}config` VALUES ('groupPassPassGuestBook','3','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ifOpenGuestBook','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('yzImgGuestBook','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ContributeFid','2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('SPbencandy_filename','html/5special{$fid}/show{$id}.htm','');
INSERT INTO `{$tbl_prefix}config` VALUES ('groupPassLogYz','3,4','');
INSERT INTO `{$tbl_prefix}config` VALUES ('is_waterimg','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('limitRegTime','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('FtpPort','21','');
INSERT INTO `{$tbl_prefix}config` VALUES ('PostSortStep','2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ListSonline','2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('_Notice','29weSgiaHR0cDovL3d3dy5waHAxNjguY29tL05vdGljZS8/dXJsPSR3ZWJkYlt3d3dfdXJsXSIsUEhQMTY4X1BBVEguImNhY2hlL05vdGljZS5waHAiKTs=','');
INSERT INTO `{$tbl_prefix}config` VALUES ('CommentTime','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('JsListRows','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('JsListLeng','36','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ListSonRows','9','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ListSonLeng','34','');
INSERT INTO `{$tbl_prefix}config` VALUES ('weburl','/','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MailType','smtp','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MailServer','smtp.qq.com','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MailPort','25','');
INSERT INTO `{$tbl_prefix}config` VALUES ('yeepay_id','10000821064','');
INSERT INTO `{$tbl_prefix}config` VALUES ('yeepay_key','ve4ets3huzxruch0tsf6nga7a2lpckm8h9p7qnefj31q49ms8bhl3qin6q0g','');
INSERT INTO `{$tbl_prefix}config` VALUES ('allowMemberCommentPass','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('Listsortnameline','2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AvoidGatherPre','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AvoidCopy','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AvoidGather','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AvoidSave','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AvoidGatherString','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('waterimg','images/default/water.gif','');
INSERT INTO `{$tbl_prefix}config` VALUES ('adminPostEditType','html','');
INSERT INTO `{$tbl_prefix}config` VALUES ('article_show_step','2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ifContribute','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('allowGuestSearch','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('DefaultIndexHtml','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('kill_badword','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('KeepTodayCount','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('close_count','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ShowKeywordColor','#F70968','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ifShowKeyword','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('UseFtp','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('FtpDir','111','');
INSERT INTO `{$tbl_prefix}config` VALUES ('FtpWeb','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('FtpPwd','admin','');
INSERT INTO `{$tbl_prefix}config` VALUES ('FtpName','admin','');
INSERT INTO `{$tbl_prefix}config` VALUES ('passport_type','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ListLeng','70','');
INSERT INTO `{$tbl_prefix}config` VALUES ('showsortlogo','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('yzImgReg','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('forbidRegIp','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('allowGuestCommentPass','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ShowMenu','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('GuestBookNum','8','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ShopOtherSend','18','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ShopNormalSend','8','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ShopEmsSend','25','');
INSERT INTO `{$tbl_prefix}config` VALUES ('groupUpType','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('groupTime','180','');
INSERT INTO `{$tbl_prefix}config` VALUES ('SideTitleStyle','side_tpl/2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('list_filename2','list.php?fid-{$fid}-page-{$page}.htm','');
INSERT INTO `{$tbl_prefix}config` VALUES ('SPlist_filename','html/4special{$fid}/list{$page}.htm','');
INSERT INTO `{$tbl_prefix}config` VALUES ('if_gdimg','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('guide_word','首页|/|0||51\r\n新闻|list.php?fid=1|0||9\r\n图片|list.php?fid=9|0||10\r\n下载|list.php?fid=11|0||11\r\n影视|list.php?fid=13|0||12\r\n商城|list.php?fid=15|0||13\r\nFLASH|list.php?fid=17|0||14\r\n产品|list.php?fid=29|0||52\r\n考评|/do/exam_write.php?id=3|0||54','');
INSERT INTO `{$tbl_prefix}config` VALUES ('HideNopowerPost','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('listPicRows','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('SideSortStyle','side_sort/2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('labelsort_show_step','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('CommentOrderType','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('showNoPassComment','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('allowGuestComment','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('TheSameMakeIndexHtml','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ArticleHeart','欠扁|1.gif\r\n支持|2.gif\r\n很棒|3.gif\r\n找骂|4.gif\r\n搞笑|5.gif\r\n软文|6.gif\r\n不解|7.gif\r\n吃惊|8.gif','');
INSERT INTO `{$tbl_prefix}config` VALUES ('heart_time','30','');
INSERT INTO `{$tbl_prefix}config` VALUES ('heart_noRecord','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('UseArticleHeart','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ForceDel','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('propagandize_jumpto','/','');
INSERT INTO `{$tbl_prefix}config` VALUES ('propagandize_LogDay','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('propagandize_close','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('propagandize_Money','2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AutoTitleNum','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('YZ_IdcardMoney','20','');
INSERT INTO `{$tbl_prefix}config` VALUES ('EditYzEmail','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('EditYzMob','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('EditYzIdcard','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('YZ_EmailMoney','10','');
INSERT INTO `{$tbl_prefix}config` VALUES ('YZ_MobMoney','15','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MailPw','63518','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MailId','2244484@qq.com','');
INSERT INTO `{$tbl_prefix}config` VALUES ('sms_wi_id','2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('sms_wi_pwd','3','');
INSERT INTO `{$tbl_prefix}config` VALUES ('sms_es_key','2','');
INSERT INTO `{$tbl_prefix}config` VALUES ('sms_es_name','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('sms_type','winic','');
INSERT INTO `{$tbl_prefix}config` VALUES ('bencandy_filename2','bencandy.php?fid-{$fid}-id-{$id}-page-{$page}.htm','');
INSERT INTO `{$tbl_prefix}config` VALUES ('SPlist_filename2','listsp.php?fid-{$fid}-page-{$page}.htm','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ForbidIp','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AdminIp','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AllowVisitIp','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('BbsUserAutoPass','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('regmoney','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ForbidCountDomain','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('Reg_Field','a:1:{s:8:\\\\\\\\\\\\\\\"field_db\\\\\\\\\\\\\\\";N;}','');
INSERT INTO `{$tbl_prefix}config` VALUES ('waterAlpha','80','');
INSERT INTO `{$tbl_prefix}config` VALUES ('waterpos','9','');
INSERT INTO `{$tbl_prefix}config` VALUES ('memberNotice','欢迎大家踊跃投稿,投稿可得积分奖励!!','');
INSERT INTO `{$tbl_prefix}config` VALUES ('passport_TogetherLogin','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('deleteArticleMoney','-1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('postArticleMoney','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('comArticleMoney','3','');
INSERT INTO `{$tbl_prefix}config` VALUES ('hotArticleNum','100','');
INSERT INTO `{$tbl_prefix}config` VALUES ('newArticleTime','24','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ListShowIcon','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('autoGetKeyword','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('tenpay_key','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('tenpay_id','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('pay99_id','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('alipay_id','test@test.com','');
INSERT INTO `{$tbl_prefix}config` VALUES ('pay99_key','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('alipay_scale','10','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MoneyRatio','100','');
INSERT INTO `{$tbl_prefix}config` VALUES ('Money2card','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('RegYz','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('RegCompany','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('list_cache_time','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('index_cache_time','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('label_cache_time','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('autoGetSmallPic','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('autoCutSmallPic','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ForbidRepeatTitle','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('viewNoPassArticle','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ArticleDownloadUseFtp','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ArticleDownloadDirTime','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ArticlePicWidth','800','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ArticlePicHeight','600','');
INSERT INTO `{$tbl_prefix}config` VALUES ('SortUseOtherModule','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('ForbidShowPhpPage','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('SPbencandy_filename2','showsp.php?fid-{$fid}-id-{$id}-page-{$page}.htm','');
INSERT INTO `{$tbl_prefix}config` VALUES ('list_filename','html/{$fid}/{$page}.htm','');
INSERT INTO `{$tbl_prefix}config` VALUES ('bencandy_filename','html/{$fid}-{$dirid}/{$id}-{$page}.htm','');
INSERT INTO `{$tbl_prefix}config` VALUES ('showsp_cache_time','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('PostNotice','<font face=SimSun>\r\n<p><font face=SimSun>2、如果是转载内容，请务必填写稿件来源网址及出处。<br />3、所引起的版权纠纷与法律责任由发布者承担。</font></p></font>','');
INSERT INTO `{$tbl_prefix}config` VALUES ('allowDownMv','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('autoPlayFirstMv','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('XunLei_ID','08311','');
INSERT INTO `{$tbl_prefix}config` VALUES ('FlashGet_ID','6370','');
INSERT INTO `{$tbl_prefix}config` VALUES ('passport_path','bbs','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AutoPassCompany','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('cookieDomain','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('updir','upload_files','');
INSERT INTO `{$tbl_prefix}config` VALUES ('FtpHost','127.0.0.1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('forbid_show_bug','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('upfileType','.rar .txt .jpg .gif .bmp .png .zip .mp3 .wma .wmv .mpeg .mpg .rm .ram .htm .doc .swf .avi .flv .sql .doc .ppt .xls .chm .pdf','');
INSERT INTO `{$tbl_prefix}config` VALUES ('upfileMaxSize','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('totalSpace','100','');
INSERT INTO `{$tbl_prefix}config` VALUES ('time','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('NewsMakeHtml','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MakeIndexHtmlTime','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('admin_url','admin','');
INSERT INTO `{$tbl_prefix}config` VALUES ('www_url','http://localhost/u6','');
INSERT INTO `{$tbl_prefix}config` VALUES ('style','default','');
INSERT INTO `{$tbl_prefix}config` VALUES ('close_why','网站维护当中,\r\n暂停访问.','');
INSERT INTO `{$tbl_prefix}config` VALUES ('web_open','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MoneyDW','个','');
INSERT INTO `{$tbl_prefix}config` VALUES ('UserEmailAutoPass','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('bencandy_cache_time','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('MoneyName','整站积分','');
INSERT INTO `{$tbl_prefix}config` VALUES ('webmail','admin@admin.com','');
INSERT INTO `{$tbl_prefix}config` VALUES ('UseMoneyType','cms','');
INSERT INTO `{$tbl_prefix}config` VALUES ('BuySpacesizeMoney','50','');
INSERT INTO `{$tbl_prefix}config` VALUES ('passport_pre','pw_','');
INSERT INTO `{$tbl_prefix}config` VALUES ('bokecc_id','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('miibeian_gov_cn','京ICP备050453号','');
INSERT INTO `{$tbl_prefix}config` VALUES ('copyright','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('mymd5','61589352','');
INSERT INTO `{$tbl_prefix}config` VALUES ('companyTrade','机械及行业设备\r\n普通机械制造\r\n通用零部件\r\n五金配件\r\n金属工具\r\n电动工具\r\n电子元件\r\n电子器件\r\n照明及照明器具\r\n安全防护设备\r\n包装\r\n造纸及纸制品\r\n电机、电工电器\r\n电工器材\r\n通用仪器仪表\r\n专用仪器仪表\r\n交通运输设备、零部件\r\n办公、文教用品\r\n数码、电脑及网络配件\r\n日常家居用品\r\n木材、木制品\r\n家具\r\n家用电器\r\n礼品、工艺美术品\r\n食品、饮料\r\n通信产品\r\n玩具\r\n印刷设备\r\n运动、休闲、保健用品\r\n鞋、帽\r\n服装\r\n日用化学品\r\n农用化学品\r\n胶粘剂\r\n染料、颜料、涂料和油墨\r\n催化剂和助剂\r\n库存精细化学品\r\n食品和饲料添加剂\r\n塑料\r\n橡胶制品\r\n环保、环保设备\r\n建筑、建材\r\n能源\r\n粮油、农制品\r\n金属\r\n医药、保健及医疗设备\r\n纺织\r\n皮革\r\n煤焦化产品\r\n日常服务\r\n广告服务\r\n教育培训\r\n认证\r\n创意设计\r\n物流服务\r\n进出口代理\r\n维修及安装服务\r\n广告、展览器材\r\n专业录音、放音设备\r\n光学摄影器材\r\n编辑制作设备\r\n播出、前端设备\r\n建筑、装饰业\r\n房地产\r\n安装工程\r\n邮电通信\r\n事务所、公证\r\n卫生、体育、社会、福利\r\n公共服务业\r\n金融、保险\r\n实业公司、商业贸易\r\n高新技术开发区\r\n卡类市场','');
INSERT INTO `{$tbl_prefix}config` VALUES ('description','整站系统','');
INSERT INTO `{$tbl_prefix}config` VALUES ('metakeywords','php168 news bbs board php mysql forums','');
INSERT INTO `{$tbl_prefix}config` VALUES ('webname','PHP168整站系统','');
INSERT INTO `{$tbl_prefix}config` VALUES ('passport_url','http://localhost/u6/bbs','');
INSERT INTO `{$tbl_prefix}config` VALUES ('cache_time_new','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('cache_time_hot','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('cache_time_com','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('cache_time_like','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('cache_time_pic','5','');
INSERT INTO `{$tbl_prefix}config` VALUES ('AutoCutFace','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('yzImgAdminLogin','0','');
INSERT INTO `{$tbl_prefix}config` VALUES ('Del_MoreUpfile','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('DownLoad_readfile','1','');
INSERT INTO `{$tbl_prefix}config` VALUES ('hideFid','','');
INSERT INTO `{$tbl_prefix}config` VALUES ('mirror','http://down2.php168.com/other/testv6/upload_files/','');
INSERT INTO `{$tbl_prefix}copyfrom` VALUES ('1','新浪网','1','0');
INSERT INTO `{$tbl_prefix}copyfrom` VALUES ('2','搜狐网','0','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('oicq','QQ在线聊天','0','','a:4:{s:8:\"qq_style\";s:2:\"11\";s:7:\"pic_alt\";s:10:\"有事点这里\";s:6:\"qq_num\";s:19:\"121727818\r\n37352529\";s:8:\"web_name\";s:10:\"PHP168整站\";}','<a target=blank href=\'tencent://message/?uin=121727818&Site=PHP168整站&Menu=yes\'><img border=\'0\' SRC=\'http://wpa.qq.com/pa?p=1:121727818:11\' alt=\'有事点这里\'></a><br><br><a target=blank href=\'tencent://message/?uin=37352529&Site=PHP168整站&Menu=yes\'><img border=\'0\' SRC=\'http://wpa.qq.com/pa?p=1:37352529:11\' alt=\'有事点这里\'></a><br><br>','','','index.php?lfj=hack&hack=oicq&job=edit','','','','0','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('login','用户登录插件','0','','a:3:{s:10:\"systemType\";s:6:\"php168\";s:9:\"guestcode\";s:809:\"<table width=\\\"100%\\\" border=\\\"0\\\" cellspacing=\\\"0\\\" cellpadding=\\\"0\\\"> <form name=\\\"form1\\\" method=\\\"post\\\" action=\\\"$webdb[www_url]/login.php\\\">        <tr>            <td><span class=\\\'L_passport\\\'>&nbsp;通行证 |</span><span class=\\\"L_name\\\"> 帐号：<input type=\\\"text\\\" name=\\\"username\\\" class=\\\"login_name\\\"></span><span class=\\\"L_pwd\\\"> 密码：<input type=\\\"password\\\" name=\\\"password\\\" class=\\\"login_pwd\\\"></span><span class=\\\"L_sub\\\"> <input type=\\\"submit\\\" name=\\\"Submit\\\" value=\\\"登录\\\" class=\\\"login_sub\\\"></span><span class=\\\"L_reg\\\"> <a href=\\\"$webdb[www_url]/reg.php\\\">注册</a> | <a href=\\\"$webdb[www_url]/login.php\\\">登录</a></span></td><input type=\\\"hidden\\\" name=\\\"step\\\" value=\\\"2\\\"><input class=\\\"radio\\\" type=\\\"hidden\\\" name=\\\"cookietime\\\" value=\\\"86400\\\" >        </tr></form>      </table>\";s:10:\"membercode\";s:683:\"<table width=\\\"100%\\\" border=\\\"0\\\" cellspacing=\\\"0\\\" cellpadding=\\\"0\\\" height=\\\"20\\\">        <tr>           <td align=\\\"left\\\" style=\\\"padding-top:4px;\\\"><span class=\\\"L2_name\\\">&nbsp;欢迎你回来:<a style=\\\"color:#FF0000;\\\">$lfjid</a></span><span class=\\\\\\\"L2_msg\\\\\\\"> $MSG </span><span class=\\\"L2_info\\\"> <a href=\\\"$webdb[www_url]/blog/?uid=$lfjuid\\\" target=\\\"_blank\\\">我的博客</a> <a href=\\\"$webdb[www_url]/member/\\\" target=\\\"_blank\\\">个人信息</a></span><span class=\\\"L2_out\\\"> <a href=\\\"$webdb[www_url]/member/index.php?main=userinfo.php?job=edit\\\" target=\\\"_blank\\\">修改资料</a> <a href=\\\"$webdb[www_url]/login.php?action=quit\\\">安全退出</a></span></td>        </tr>      </table>\";}','','','','index.php?lfj=hack&hack=login&job=list','','','','0','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('search','搜索','0','','a:2:{s:10:\"systemType\";s:6:\"web168\";s:10:\"searchcode\";s:456:\"<table width=\\\"100%\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\" border=\\\"0\\\">\r\n  <form name=\\\"formsearch\\\" method=\\\"post\\\" action=\\\"$webdb[www_url]/search.php\\\">\r\n    <tr> \r\n      <td height=\\\"14\\\"> 关键字:<input type=\\\"text\\\" name=\\\"keyword\\\" size=\\\"10\\\">\r\n        <input type=\\\"submit\\\" name=\\\"Submit32\\\" value=\\\"搜索\\\">\r\n        <input type=\\\"hidden\\\" name=\\\"searchTable\\\" value=\\\"article\\\">\r\n      </td>\r\n    </tr>\r\n   \r\n  </form>\r\n</table>\r\n                \";}','','','','index.php?lfj=hack&hack=search&job=list','','','','0','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('webmsg','站点统计信息','0','PHP168团队','a:3:{s:7:\"tplcode\";s:491:\"<table width=\\\"100%\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\" border=\\\"0\\\" id=\\\"webmsg\\\">\r\n     <tr> \r\n      <td height=\\\"14\\\">文章主题: {$article_num} 篇</td>\r\n    </tr>\r\n    <tr> \r\n      <td height=\\\"7\\\" >文章栏目: {$sort_num} 个</td>\r\n    </tr>\r\n    <tr> \r\n      <td height=\\\"7\\\" >文章评论: {$comment_num} 条</td>\r\n    </tr>\r\n	 <tr> \r\n      <td height=\\\"7\\\" >访客留言: {$guestbook_num} 条</td>\r\n    </tr>\r\n    <tr>\r\n      <td height=\\\"7\\\" >注册会员: {$member_num} 位</td>\r\n    </tr>\r\n</table>\";s:6:\"cktime\";s:2:\"60\";s:6:\"system\";a:3:{s:7:\"article\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";s:10:\"memberdata\";s:1:\"1\";}}','','','','index.php?lfj=hack&hack=webmsg&job=list','','','','0','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('count','流量统计','0','','','','','','index.php?lfj=hack&hack=count&job=list','','','','0','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('set_comsort_index','网站首页设置','0','','','','','','index.php?lfj=channel&job=edit&id=1','','base','核心设置','19','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('article_module','网站内容模型管理','0','','','','admin/article_module.php\r\nadmin/article_module/','','index.php?lfj=article_module&job=list','','base','核心设置','14','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('form_module','万能表单模型管理','0','','','','/admin/form_module.php\r\n/admin/form_content.php\r\n/admin/template/form_content/\r\n/admin/template/form_module/\r\n/php168/form_tpl/\r\n/do/form.php\r\n/do/bencandy_form.php\r\n/do/list_form.php\r\n/member/form.php','','index.php?lfj=form_module&job=list','','base','核心设置','13','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('comment_set','内容评论设置','0','','','','/admin/comment.php','','index.php?lfj=comment&job=set','','base','核心设置','12','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('setmakeALLhtml_set','网站静态页全局设置','0','','','','','','index.php?lfj=html&job=set','','base','核心设置','11','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('module_list','整合P8其它系统设置','0','','','','','','index.php?lfj=module&job=list','','base','核心设置','10','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('blend_set','整合外部论坛系统设置','0','','','','','','index.php?lfj=blend&job=set','','base','核心设置','9','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('cache_cache','更新缓存/数据修复','0','','','','/admin/cache.php','','index.php?lfj=cache&job=cache','','base','核心设置','15','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('channel_list','频道独立页管理','0','','','','','','index.php?lfj=channel&job=list','','base','网站常用功能管理','6','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('guestbook_list','留言本管理','0','','','','admin/template/guestbook/\r\nadmin/guestbook.php\r\ndo/guestbook.php','{$tbl_prefix}guestbook','index.php?lfj=guestbook&job=list','','base','网站常用功能管理','7','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('vote_list','投票系统','0','','','','','','index.php?lfj=vote&job=list','','base','网站常用功能管理','5','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('mysql_sql','数据库管理','0','','','','','','index.php?lfj=mysql&job=sql','','base','数据库工具','6','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('artic_addpic','快速发图','0','','','','','','index.php?lfj=artic&job=addpic','','article','内容/栏目/评论管理','4','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('company_list','企业资料管理','0','','','','','','index.php?lfj=company&job=list','','member','用户管理','8','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('member_addmember','添加新用户','0','','','','','','index.php?lfj=member&job=addmember','','member','用户管理','6','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('regfield','用户资料字段管理','0','','','','','','index.php?lfj=regfield&job=editsort','','member','用户管理','7','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('report_list','内容好坏举报管理','0','','','','','','index.php?lfj=report&job=list','','other','内容模型插件功能','8','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('limitword_replace','字符替换','0','','','','','','index.php?lfj=limitword&job=replace','','other','内容模型插件功能','6','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('copyfrom_list','来源地址管理','0','','','','','','index.php?lfj=copyfrom&job=list','','other','内容模型插件功能','7','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('googlemap_makemap','百度新闻协议/google协','0','','','','','','index.php?lfj=googlemap&job=makemap','','other','内容模型插件功能','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('ad_listAdPlace','普通广告位管理','0','','','','','','index.php?lfj=ad&job=listad','','other','广告模块','9','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('ad_listuserad','普通广告销售管理','0','','','','','','index.php?lfj=ad&job=listuserad','','other','广告模块','8','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('sellad','竞价广告位管理','0','','','','','','index.php?lfj=sellad&job=listad','','other','广告模块','7','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('sellad_listuser','竞价广告销售管理','0','','','','','','index.php?lfj=sellad&job=listuser','','other','广告模块','6','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('alipay_set','在线充值支付管理','0','','','','','','index.php?lfj=alipay&job=list','','other','电子商务管理','9','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('shoporder','商城订单管理','0','','','','','','index.php?lfj=shoporder&job=list','','other','电子商务管理','8','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('template_list','模板设置','0','','','','','','index.php?lfj=template&job=list','','other','风格/模板设置','1','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('style_editstyle','风格管理','0','','','','','','index.php?lfj=style&job=edittpl','','other','风格/模板设置','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('exam_sort','问卷分类管理','0','','','','','','index.php?lfj=exam_sort&job=listsort','','other','问卷调查模块','4','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('exam_title','问卷题库管理','0','','','','','','index.php?lfj=exam_title&job=list','','other','问卷调查模块','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('exam_form','问卷表单管理','0','','','','','','index.php?lfj=exam_form&job=list','','other','问卷调查模块','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('exam_read','问卷表单批阅','0','','','','','','index.php?lfj=exam_read&job=list','','other','问卷调查模块','1','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('gather_copysina','新浪新闻采集','0','','','','','','index.php?lfj=gather&job=copysina','','other','数据采集器','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('gather_list','采集规则管理','0','','','','','','index.php?lfj=gather&job=list','','other','数据采集器','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('gather_list_sort','采集规则分类管理','0','','','','','','index.php?lfj=gather_sort&job=list','','other','数据采集器','1','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('js_list','JS内容调用','0','','','','','','index.php?lfj=js&job=list','','other','其它功能','9','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('propagandize_list','推广赚取积分功能','0','','','','','','index.php?lfj=propagandize&job=list','','other','其它功能','8','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('jfadmin_mod','积分介绍管理','0','','','','','','index.php?lfj=jfadmin&job=listjf','','other','其它功能','7','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('attachment_list','附件管理','0','','','','','','index.php?lfj=attachment&job=list','','other','其它功能','6','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('area_list','地区管理','0','','','','','','index.php?lfj=area&job=list','','other','其它功能','5','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('upgrade_ol','系统在线升级','0','','','','','','index.php?lfj=upgrade&job=get','','other','其它功能','4','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('mail_send','邮件群发','0','','','','','','index.php?lfj=mail&job=send','','other','消息/邮件群发','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('message_send','站内消息群发','0','','','','','','index.php?lfj=message&job=send','','other','消息/邮件群发','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('sms_send','手机短信群发','0','','','','','','index.php?lfj=sms&job=send','','other','消息/邮件群发','1','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('code_code','PHPWIND营销模块','0','','','','','','index.php?lfj=code&job=code','','other','站外功能','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('cnzz_set','CNZZ流量统计','0','','','','','','index.php?lfj=cnzz&job=ask','','other','站外功能','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('center_config','网站全局参数设置','0','','','','/admin/template/center/config.htm','','index.php?lfj=center&job=config','','base','核心设置','20','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('article_more_config','内容模型基本设置','0','','','','/admin/article_more.php','','index.php?lfj=article_more&job=config','','base','核心设置','16','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('hack_list','功能管理中心','0','','','','/admin/hack.php\r\n/admin/template/hack/list.htm','','index.php?lfj=hack&job=list','','base','核心设置','8','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('menu_list','网站头部导航菜单设置','0','','','','','','index.php?lfj=guidemenu&job=list','','base','菜单管理','5','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('adminmenu_list','管理员后台菜单设置','0','','','','','','index.php?lfj=adminguidemenu&job=list','','base','菜单管理','4','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('membermenu_list','会员中心菜单设置','0','','','','','','index.php?lfj=memberguidemenu&job=list','','base','菜单管理','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('alonepage_list','单篇文章独立页面管理','0','','','','','','index.php?lfj=alonepage&job=list','','base','网站常用功能管理','8','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('friendlink_mod','友情链接管理','0','','','','','','index.php?lfj=friendlink&job=list','','base','网站常用功能管理','9','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('mysql_out','备份数据库','0','','','','','','index.php?lfj=mysql&job=out','','base','数据库工具','9','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('mysql_into','数据库还原','0','','','','','','index.php?lfj=mysql&job=into','','base','数据库工具','8','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('mysql_del','删除备份数据','0','','','','','','index.php?lfj=mysql&job=del','','base','数据库工具','7','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('sort_listsort','栏目管理','0','','','','','','index.php?lfj=sort&job=listsort&only=&mid=','','article','内容/栏目/评论管理','9','</a><A HREF=\'index.php?lfj=sort&job=listsort&only=&mid=\' target=main>栏目管理</A> | <A HREF=\'index.php?lfj=sort&job=addsort&only=&mid=\' target=main>创建栏目</A> <a>','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('artic_listartic','内容管理','0','','','','','','index.php?lfj=artic&job=listartic&only=1&mid=','','article','内容/栏目/评论管理','8','内容管理<font color=#959595>(修改、删除等)</font>','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('comment_list','评论管理','0','','','','','','index.php?lfj=comment&job=list','','article','内容/栏目/评论管理','7','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('form_content','万能表单内容管理','0','','','','','','index.php?lfj=form_content&job=list','','article','内容/栏目/评论管理','6','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('artic_postnew','发表文章','0','','','','','','index.php?lfj=post&job=postnew&only=1&mid=','','article','内容/栏目/评论管理','5','发表<font color=#959595>(文章、图片等)</font>','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('index_label','首页标签设置','0','','','','','','../index.php?&ch=1&chtype=0&jobs=show','','article','更新标签内容','4','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('s_list_fid','栏目/内容页标签设置','0','','','','','','index.php?lfj=channel&job=list_fid','','article','更新标签内容','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('up_splist_fid','专题页标签设置','0','','','','','','index.php?lfj=special&job=list&onlyshow=label','','article','更新标签内容','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('makeindexhtml_make','主页静态','0','','','','','','../index.php?&ch=1&MakeIndex=1','','article','静态页生成管理','5','</a><a href=\'../index.php?&ch=1&MakeIndex=1\' target=\'_blank\' onclick=\"return confirm(\'你确实要把首页生成静态吗?生成静态后,如有更改其它相关设置,需要重新点击生成一次静态.才可以看到效果.\')\");\">主页静态</a> | <A HREF=\'index.php?lfj=center&job=delindex\' target=main>删除</A><a>','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('makehtml_make','栏目内容静态页管理','0','','','','','','index.php?lfj=html&job=list','','article','静态页生成管理','4','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('spmakehtml_make','专题静态页管理','0','','','','','','index.php?lfj=html&job=listsp','','article','静态页生成管理','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('setmakehtml_set','静态网页样式设置','0','','','','','','index.php?lfj=html&job=set','','article','静态页生成管理','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('special_list','专题管理','0','','','','','','index.php?lfj=special&job=list','','article','专题管理','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('spsort_listsort','专题分类管理','0','','','','','','index.php?lfj=spsort&job=listsort','','article','专题管理','1','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('member_list','用户资料管理','0','','','','','','index.php?lfj=member&job=list','','member','用户管理','9','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('article_group_config','内容模型权限设置','0','','','','','','index.php?lfj=article_group&job=list','','member','权限管理','6','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('group_list','前台权限管理','0','','','','','','index.php?lfj=group&job=list','','member','权限管理','5','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('group_list_admin','后台权限管理','0','','','','','','index.php?lfj=group&job=list_admin','','member','权限管理','4','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('group_add','添加用户组','0','','','','','','index.php?lfj=group&job=add','','member','权限管理','3','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('getkeyword_do','关键字管理','0','','','','','','index.php?lfj=getkeyword&job=list','','other','内容模型插件功能','4','</a><A HREF=\'index.php?lfj=getkeyword&job=list\' target=\'main\'>关键字管理</A> | <A HREF=\'index.php?lfj=getkeyword&job=get\' target=\'main\'>提取关键字</A><a>','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('limitword_list','不良词语过滤','0','','','','','','index.php?lfj=limitword&job=list','','other','内容模型插件功能','9','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('article_more_avoidgather','防采集设置','0','','','','','','index.php?lfj=article_more&job=avoidgather','','other','内容模型插件功能','5','','1');
INSERT INTO `{$tbl_prefix}hack` VALUES ('moneycard_make','点卡充值管理','0','','','','','','index.php?lfj=moneycard&job=make','','other','电子商务管理','7','','1');
INSERT INTO `{$tbl_prefix}hack` VALUES ('logs_login_logs','后台登录日志','0','','','','','','index.php?lfj=logs&job=login_logs','','other','日志管理','2','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('logs_admin_do_logs','后台操作日志','0','','','','','','index.php?lfj=logs&job=admin_logs','','other','日志管理','1','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('user_reg','会员注册设置','0','','','','/admin/template/center/user_reg.htm','','index.php?lfj=center&job=user_reg','','base','核心设置','18','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('center_cache','高速缓存设置','0','','','','/admin/template/center/cache.htm','','index.php?lfj=center&job=cache','','base','核心设置','17','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('fu_sort_power','辅栏目管理','0','','','','','','index.php?lfj=fu_sort&job=listsort','','article','辅栏目管理','0','','0');
INSERT INTO `{$tbl_prefix}hack` VALUES ('fu_artic_power','辅栏目内容管理','0','','','','','','index.php?lfj=fu_artic&job=listartic','','article','辅栏目管理','0','','0');
INSERT INTO `{$tbl_prefix}label` VALUES ('298','','1','0','bodyad','pic','0','a:4:{s:6:\"imgurl\";s:32:\"label/1_20090420140457_NOGYw.jpg\";s:7:\"imglink\";s:47:\"http://www.phpwind.net/read-htm-tid-761520.html\";s:5:\"width\";s:3:\"990\";s:6:\"height\";s:2:\"80\";}','a:3:{s:5:\"div_w\";s:3:\"990\";s:5:\"div_h\";s:2:\"80\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240210319','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('299','','1','0','b2','comment','1','a:25:{s:9:\"tplpart_1\";s:588:\"<div>\r\n  <div style=\"float:left;\"><b><font color=\"#990000\">{$username}</font></b> 于 <font color=\"#990000\">{$time_m}-{$time_d} \r\n    {$time_H}:{$time_i}</font> 对 </div>\r\n  <a target=\'_blank\' href=\"$webdb[www_url]/do/comment.php?fid=$fid&id=$aid\" style=\"overflow:hidden;\r\n	text-overflow:ellipsis;\r\n	white-space:nowrap;width:230px;float:left;display:black;\"><font color=\"#0000FF\">{$article}</font></a><div style=\"float:left;\">发表如下评论</div></div>\r\n<div style=\"clear:both;border-bottom:1px dotted #ccc;margin-bottom:5px;width:99%;\">　<font color=\"#666666\">{$title}</font></div>\";s:13:\"tplpart_1code\";s:588:\"<div>\r\n  <div style=\"float:left;\"><b><font color=\"#990000\">{$username}</font></b> 于 <font color=\"#990000\">{$time_m}-{$time_d} \r\n    {$time_H}:{$time_i}</font> 对 </div>\r\n  <a target=\'_blank\' href=\"$webdb[www_url]/do/comment.php?fid=$fid&id=$aid\" style=\"overflow:hidden;\r\n	text-overflow:ellipsis;\r\n	white-space:nowrap;width:230px;float:left;display:black;\"><font color=\"#0000FF\">{$article}</font></a><div style=\"float:left;\">发表如下评论</div></div>\r\n<div style=\"clear:both;border-bottom:1px dotted #ccc;margin-bottom:5px;width:99%;\">　<font color=\"#666666\">{$title}</font></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"comment\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";N;s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:149:\" SELECT A.*,A.content AS title,B.title AS article FROM {$tbl_prefix}comment A LEFT JOIN {$tbl_prefix}article B ON A.aid=B.aid  WHERE A.yz=1  ORDER BY A.cid DESC LIMIT 5 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:8:\"titlenum\";s:2:\"80\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"468\";s:5:\"div_h\";s:3:\"190\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243739122','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('300','','1','0','listpic2','article','1','a:29:{s:13:\"tplpart_1code\";s:322:\"<div  class=\"listpic\" style=\"padding:5px 9px 3px 17px;\"> \r\n              <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>\r\n              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>\r\n            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"100\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"10\";s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:152:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.fid IN (10)  AND A.mid=\'100\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239006574','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('301','','1','0','listpic3','article','1','a:29:{s:13:\"tplpart_1code\";s:322:\"<div  class=\"listpic\" style=\"padding:5px 9px 3px 17px;\"> \r\n              <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>\r\n              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>\r\n            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:133:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239006730','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('152','','1','0','hotarticle','article','1','a:31:{s:13:\"tplpart_1code\";s:212:\"<div style=\"background:url($webdb[www_url]/images/default/i/$i.gif) no-repeat 0px 2px;height:23px;text-indent:1.3em;\"><A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;$fontweight;font-size:13px;\">$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:27:\"/common_title/2title_i2.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:3:\"all\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"9\";s:3:\"sql\";s:97:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE 1  AND A.mid=\'0\'   ORDER BY A.hits DESC LIMIT 9 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"28\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"228\";s:5:\"div_h\";s:3:\"204\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243735698','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('163','','1','0','listpic','article','1','a:31:{s:13:\"tplpart_1code\";s:322:\"<div  class=\"listpic\" style=\"padding:7px 9px 3px 17px;\"> \r\n              <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>\r\n              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>\r\n            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:0;s:5:\"fiddb\";s:2:\"33\";s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:1:\"1\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:167:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.levels=1  AND A.fid IN (33)  AND A.mid=\'0\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"3\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"459\";s:5:\"div_h\";s:3:\"254\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1241074794','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('297','','1','0','indexad1','pic','0','a:4:{s:6:\"imgurl\";s:32:\"label/1_20090418170418_Ak4sM.jpg\";s:7:\"imglink\";s:21:\"http://www.ceodh.com/\";s:5:\"width\";s:3:\"243\";s:6:\"height\";s:2:\"93\";}','a:3:{s:5:\"div_w\";s:3:\"240\";s:5:\"div_h\";s:2:\"93\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240149678','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('182','','1','0','Title1','code','0','web新闻','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"220\";s:5:\"div_h\";s:2:\"23\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240127514','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('183','','1','0','Title2','code','0','求职招聘','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"255\";s:5:\"div_h\";s:2:\"26\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239767486','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('184','','1','0','Title3','code','0','软件下载','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"210\";s:5:\"div_h\";s:2:\"23\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239022710','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('185','','1','0','Title4','code','0','社会新闻','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"210\";s:5:\"div_h\";s:2:\"23\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239022689','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('186','','1','0','Title5','code','0','文章评论','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"455\";s:5:\"div_h\";s:2:\"24\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239022487','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('187','','1','0','Title6','code','0','优秀会员','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240899624','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('188','','1','0','Title01','code','0','热门文章','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"210\";s:5:\"div_h\";s:2:\"24\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239022429','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('189','','1','0','Title02','code','0','最受关注','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"234\";s:5:\"div_h\";s:2:\"23\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239022631','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('263','','1','99','SP_adword','code','0','全力打造国内一流CMS系统！','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','0','0','0','0','');
INSERT INTO `{$tbl_prefix}label` VALUES ('284','','1','0','Title_jinjaad','code','0','投票调查','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"215\";s:5:\"div_h\";s:2:\"26\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239022512','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('285','','1','0','jinjaad','hack_vote','0','<SCRIPT src=\'http://www_php168_com/do/vote.php?job=js&cid=6\'></SCRIPT>','a:4:{s:6:\"voteid\";s:1:\"6\";s:5:\"div_w\";s:3:\"229\";s:5:\"div_h\";s:3:\"138\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239010747','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('302','','1','0','listpic4','article','1','a:29:{s:13:\"tplpart_1code\";s:322:\"<div  class=\"listpic\" style=\"padding:5px 9px 3px 17px;\"> \r\n              <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>\r\n              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>\r\n            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"103\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:133:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'103\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239006655','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('303','','1','0','listpic5','article','1','a:29:{s:13:\"tplpart_1code\";s:322:\"<div  class=\"listpic\" style=\"padding:5px 9px 3px 17px;\"> \r\n              <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>\r\n              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>\r\n            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"104\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:133:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'104\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239006692','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('287','','1','0','c2','article','1','a:31:{s:13:\"tplpart_1code\";s:147:\"<div style=\"padding-top:5px;color:#ccc;\">·<A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;$fontweight;font-size:13px;\">$title</a> $new $hot</div>\";s:13:\"tplpart_2code\";s:411:\"<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:5px;\">\r\n  <tr>\r\n    <td align=\"left\"><a href=\"$url\" target=\"_blank\" style=\"font-weight:bold;color:#666;\" title=\"$full_title\">$title</a></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=\"left\" height=\"18\" valign=\"middle\" style=\"border-bottom:1px dotted #ccc;text-indent:2em;padding-bottom:5px;color:#929292;\">$content</td>\r\n  </tr>\r\n</table>\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:5:\"35,38\";s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:10:\"A.posttime\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:189:\" SELECT A.*,A.aid AS id,R.content FROM {$tbl_prefix}article A LEFT JOIN {$tbl_prefix}reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (35,38)  AND A.mid=\'0\'   AND R.topic=1 ORDER BY A.posttime DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"68\";s:8:\"titlenum\";s:2:\"28\";s:9:\"titlenum2\";s:2:\"34\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"222\";s:5:\"div_h\";s:3:\"159\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240192238','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('288','','1','0','comarticle','article','1','a:31:{s:13:\"tplpart_1code\";s:1113:\"<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:6px;\">\r\n  <tr> \r\n    <td align=\"left\" style=\"border-bottom:1px dotted #eee;padding-bottom:5px;\"> \r\n      <div style=\"background:url($webdb[www_url]/images/default/sdigg.gif) no-repeat;width:44px;height:36px;float:left;\">\r\n        <div style=\"font-size:13px;text-align:center;padding:0px;font-weight:bold;background:#eee;\" id=\"DiggNum_$id\">$digg_num</div>\r\n        <div style=\"text-align:center;font-size:12px;color:#FFF;width:44px;height:20px;overflow:hidden;background:#ccc;\" id=\"DiggDo_$id\"><a href=\"$webdb[www_url]/do/job.php?job=digg&type=vote&id=$id\" target=\"DiggIframe_$id\" style=\"font-size:12px;color:#FFF;\">顶一下</a></div>\r\n      </div>\r\n      <div style=\"margin-left:4px;float:left;width:195px;\"> \r\n        <a href=\"$url\" target=\"_blank\" style=\"$fontcolor;$fontweight;font-size:13px;\">$title</a>\r\n      </div>\r\n      <div style=\"display:none;\"><iframe src=\"$webdb[www_url]/do/job.php?job=digg&type=getnum&id=$id\" width=0 height=0 name=\"DiggIframe_$id\" id=\"DiggIframe_$id\"></iframe></div>\r\n    </td>\r\n  </tr>\r\n</table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:2:\"-1\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:86:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1   ORDER BY A.aid DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"246\";s:5:\"div_h\";s:3:\"243\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243735758','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('338','','1','0','bjsptitle','code','0','推荐专题','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('339','','1','0','bjspecial','specialsort','1','a:34:{s:9:\"tplpart_1\";s:442:\"<div style=\"float:left;margin:5px 0px 0px 5px;width:155px;text-align:center;\"> \r\n             <a href=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\" target=\"_blank\" style=\"display:block;width:120px;height:160px;border:1px #333 solid;margin-bottom:5px;\"><img width=\"120\" height=\"160\" src=\"$picurl\" border=\"0\"></a> \r\n               <A HREF=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\" title=\'$full_title\' target=\"_blank\">$title</A> \r\n</div>\";s:13:\"tplpart_1code\";s:442:\"<div style=\"float:left;margin:5px 0px 0px 5px;width:155px;text-align:center;\"> \r\n             <a href=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\" target=\"_blank\" style=\"display:block;width:120px;height:160px;border:1px #333 solid;margin-bottom:5px;\"><img width=\"120\" height=\"160\" src=\"$picurl\" border=\"0\"></a> \r\n               <A HREF=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\" title=\'$full_title\' target=\"_blank\">$title</A> \r\n</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:11:\"specialsort\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";s:45:\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:3:\"fid\";s:0:\"\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";N;s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:4:\"list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:1:\"1\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:113:\" SELECT A.* FROM {$tbl_prefix}special A  WHERE `ifbase`=0  AND A.levels=1  AND A.picurl!=\'\'   ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";s:0:\"\";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"26\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"953\";s:5:\"div_h\";s:3:\"177\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240899961','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('289','','1','0','a1','article','1','a:31:{s:13:\"tplpart_1code\";s:147:\"<div style=\"padding-top:6px;color:#ccc;\">·<A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;$fontweight;font-size:13px;\">$title</a> $new $hot</div>\";s:13:\"tplpart_2code\";s:558:\"<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin:3px 0px 5px 0px;\">\r\n  <tr> \r\n    <td rowspan=\"2\" width=\"4%\" style=\"padding-right:3px;padding-bottom:7px;border-bottom:1px dotted #ccc;\"><a href=\"$url\"><img src=\"$picurl\" width=\"100\" height=\"70\" border=\"0\"></a></td>\r\n    <td width=\"96%\"> <a href=\"$url\" target=\"_blank\" style=\"color:#666;font-weight:bold;\">$title</a></td>\r\n  </tr>\r\n  <tr> \r\n    <td width=\"96%\" style=\"padding-bottom:7px;text-indent:1em;border-bottom:1px dotted #ccc;color:#929292;\">$content</td>\r\n  </tr>\r\n</table>\r\n\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:2:\"-1\";s:7:\"tplpath\";s:24:\"/common_zh_pic/zh_pc.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"39\";s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:10:\"A.posttime\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:171:\" SELECT A.*,A.aid AS id,R.content FROM {$tbl_prefix}article A LEFT JOIN {$tbl_prefix}reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (39)   AND R.topic=1 ORDER BY A.posttime DESC LIMIT 6 \";s:4:\"sql2\";s:183:\" SELECT A.*,A.aid AS id,R.content FROM {$tbl_prefix}article A LEFT JOIN {$tbl_prefix}reply R ON A.aid=R.aid  WHERE A.yz=1  AND A.fid IN (39)  AND A.ispic=1 AND R.topic=1 ORDER BY A.posttime DESC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"60\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"20\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"221\";s:5:\"div_h\";s:3:\"186\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240192058','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('366','','1','0','show_34','article','1','a:31:{s:13:\"tplpart_1code\";s:811:\"<table  border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"float:left;width:160px;margin-top:15px;\">\r\n  <tr>\r\n    <td align=\"center\"><a href=\"$url\" target=\"_blank\" style=\"border:1px solid #ccc;display:block;width:120px;height:90px;\"><img style=\"border:1px solid #fff;\" src=\'$picurl\' border=0 width=\"120\" height=\"90\"></a></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=\"center\" style=\"padding-top:5px;\"><a href=\"$url\" target=\"_blank\">$title</a></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=\"center\" style=\"padding-top:3px;\"><strike><b>￥$martprice</b></strike> <b><font color=\"#FF0000\">￥$nowprice</font></b></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=\"center\" style=\"padding-bottom:18px;padding-top:3px;\"><a href=\"$url\" target=\"_blank\"><img src=\"$webdb[www_url]/images/default/order_button.gif\" border=\"0\"></a></td>\r\n  </tr>\r\n</table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"103\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:133:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'103\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"450\";s:5:\"div_h\";s:3:\"200\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243739159','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('293','','1','0','c1','article','1','a:31:{s:13:\"tplpart_1code\";s:254:\"<div style=\"line-height:130%;font-size:13px;color:#ccc;clear:both;\"><span style=\"float:left;\">·<A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;$fontweight\">$title </a></span><span style=\"float:right;padding-right:3px;color:#666;\">({$hits})</span></div>\";s:13:\"tplpart_2code\";s:304:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:4px;\">\r\n  <tr>\r\n    <td style=\"font-size:13px;font-weight:bold;\">[推荐]<A HREF=\"$url\" target=\"_blank\" style=\"font-size:15px;font-weight:bold;color:#990000;text-decoration: underline;\">$title</A></td>\r\n  </tr>\r\n</table>\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"101\";s:7:\"tplpath\";s:32:\"/common_zh_title/zh_bigtitle.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"7\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'101\'   ORDER BY A.aid DESC LIMIT 8 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"30\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"226\";s:5:\"div_h\";s:3:\"140\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243740035','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('304','','1','0','a2','member','1','a:19:{s:9:\"tplpart_1\";s:504:\"<div style=\"float:left;margin-right:5px;margin-top:7px;margin-bottom:3px;\"> <CENTER><a style=\"display:block;width:65px;height:65px;border:1px solid #ccc;\" href=\"$webdb[www_url]/member/homepage.php?uid=$uid\" target=\"_blank\"><img style=\"border:2px solid #fff;\" onerror=\"this.src=\'$webdb[www_url]/images/default/noface.gif\'\" width=\"65\" height=\"65\" src=\"$picurl\" border=\"0\"></a><A HREF=\"$webdb[www_url]/member/homepage.php?uid=$uid\" title=\'$full_title\' target=\"_blank\">$title</A></CENTER>\r\n            </div>\";s:13:\"tplpart_1code\";s:504:\"<div style=\"float:left;margin-right:5px;margin-top:7px;margin-bottom:3px;\"> <CENTER><a style=\"display:block;width:65px;height:65px;border:1px solid #ccc;\" href=\"$webdb[www_url]/member/homepage.php?uid=$uid\" target=\"_blank\"><img style=\"border:2px solid #fff;\" onerror=\"this.src=\'$webdb[www_url]/images/default/noface.gif\'\" width=\"65\" height=\"65\" src=\"$picurl\" border=\"0\"></a><A HREF=\"$webdb[www_url]/member/homepage.php?uid=$uid\" title=\'$full_title\' target=\"_blank\">$title</A></CENTER>\r\n            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:7:\"group_1\";s:0:\"\";s:7:\"group_2\";s:0:\"\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"6\";s:2:\"yz\";s:3:\"all\";s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:7:\"regdate\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";N;s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:173:\" SELECT M.username AS title,D.*,D.icon AS picurl,D.introduce AS content FROM {$tbl_prefix}members M LEFT JOIN {$tbl_prefix}memberdata D ON M.uid=D.uid  WHERE 1  ORDER BY D.regdate DESC LIMIT 6 \";s:7:\"colspan\";s:1:\"1\";s:8:\"titlenum\";s:2:\"20\";s:10:\"titleflood\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"235\";s:5:\"div_h\";s:3:\"190\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240994881','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('305','','1','0','Title04','code','0','访客留言','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('306','','1','0','c02','guestbook','1','a:25:{s:9:\"tplpart_1\";s:391:\"<div> <b><font color=\"#990000\">{$username}</font></b> 于<font color=\"#990000\"> {$time_m}-{$time_d} \r\n    {$time_H}:{$time_i} </font>发表的留言:</div> \r\n<div style=\"clear:both;border-bottom:1px dotted #ccc;margin-bottom:5px;width:98%;padding-bottom:6px;\">　<a href=\"$webdb[www_url]/do/guestbook.php?fid=$fid&id=$id#$id\" target=\"_blank\"><font color=\"#666666\">{$title}</font></a></div>\r\n\";s:13:\"tplpart_1code\";s:391:\"<div> <b><font color=\"#990000\">{$username}</font></b> 于<font color=\"#990000\"> {$time_m}-{$time_d} \r\n    {$time_H}:{$time_i} </font>发表的留言:</div> \r\n<div style=\"clear:both;border-bottom:1px dotted #ccc;margin-bottom:5px;width:98%;padding-bottom:6px;\">　<a href=\"$webdb[www_url]/do/guestbook.php?fid=$fid&id=$id#$id\" target=\"_blank\"><font color=\"#666666\">{$title}</font></a></div>\r\n\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:9:\"guestbook\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:3:\"all\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";N;s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:86:\" SELECT A.*,content AS title FROM {$tbl_prefix}guestbook A  WHERE 1  ORDER BY A.id DESC LIMIT 4 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:8:\"titlenum\";s:2:\"70\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"231\";s:5:\"div_h\";s:3:\"260\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243739216','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('295','','1','0','indexrollpic','rollpic','0','a:5:{s:5:\"width\";s:3:\"260\";s:6:\"height\";s:3:\"200\";s:6:\"picurl\";a:3:{i:1;s:32:\"label/1_20090419200443_8wzPc.jpg\";i:2;s:32:\"label/1_20090419200401_zIXkg.jpg\";i:3;s:32:\"label/1_20090420120446_vRUX1.jpg\";}s:7:\"piclink\";a:3:{i:1;s:26:\"bencandy.php?fid=31&id=545\";i:2;s:26:\"bencandy.php?fid=32&id=550\";i:3;s:26:\"bencandy.php?fid=39&id=603\";}s:6:\"picalt\";a:3:{i:1;s:27:\"PHP168 V6全面盛大公测\";i:2;s:36:\"IDC交易平台主机网正式上线\";i:3;s:39:\"“软硬兼施”助力企业信息化\";}}','a:3:{s:5:\"div_w\";s:3:\"261\";s:5:\"div_h\";s:3:\"217\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243735581','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('296','','1','0','mainnews','article','1','a:31:{s:13:\"tplpart_1code\";s:639:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:8px;\">\r\n  <tr>\r\n    <td align=\"center\" style=\"padding-bottom:5px;\"><a href=\"$url\" target=\"_blank\"><b><font color=\"#D50000\" style=\"font-size:16px;\">$title</font></b></a></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=\"left\" height=\"18\" valign=\"middle\" style=\"border-bottom:1px dotted #ccc;line-height:150%;text-indent:2em;color:#929292;padding-bottom:3px;\">{$content} 共<font color=\"#D50000\">{$hits}</font>人关注  评论<font color=\"#D50000\">{$comments}</font>条 \r\n      [<a href=\"$url\" style=\"color:#D50000;\" target=\"_blank\">详情</a>]</td>\r\n  </tr>\r\n</table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:2:\"-1\";s:7:\"tplpath\";s:29:\"/common_content/content_1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"31\";s:5:\"stype\";s:1:\"c\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:166:\" SELECT A.*,A.aid AS id,R.content FROM {$tbl_prefix}article A LEFT JOIN {$tbl_prefix}reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (31)   AND R.topic=1 ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:3:\"120\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"461\";s:5:\"div_h\";s:2:\"71\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243735499','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('364','','1','0','bb1','code','0','<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" bgcolor=\"#ffffff\">\r\n        <tr align=\"center\" bgcolor=\"#EBEBEB\"> \r\n          <td width=\"36%\">求职岗位</td>\r\n          <td width=\"13%\">学历</td>\r\n          <td width=\"14%\">性别</td>\r\n          <td width=\"13%\">工作年限</td>\r\n          <td width=\"13%\">年龄</td>\r\n          <td width=\"11%\">详情</td>\r\n        </tr> \r\n</table>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"475\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239768502','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('365','','1','0','bb2','form','1','a:31:{s:9:\"tplpart_1\";s:531:\"<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" style=\"border-bottom:1px dotted #eee;\">\r\n        <tr align=\"center\"> \r\n          \r\n    <td width=\"36%\" align=\"left\"> $workposition</td>\r\n          <td width=\"13%\">$schoo_age</td>\r\n          <td width=\"14%\">$sex</td>\r\n          <td width=\"13%\">{$workyear} 年</td>\r\n          <td width=\"13%\">{$myage} 岁</td>\r\n          \r\n    <td width=\"11%\"><a href=\"$webdb[www_url]/do/bencandy_form.php?mid=$mid&id=$id\" target=\"_blank\">详情</a></td>\r\n        </tr> \r\n      </table>\";s:13:\"tplpart_1code\";s:531:\"<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" style=\"border-bottom:1px dotted #eee;\">\r\n        <tr align=\"center\"> \r\n          \r\n    <td width=\"36%\" align=\"left\"> $workposition</td>\r\n          <td width=\"13%\">$schoo_age</td>\r\n          <td width=\"14%\">$sex</td>\r\n          <td width=\"13%\">{$workyear} 年</td>\r\n          <td width=\"13%\">{$myage} 岁</td>\r\n          \r\n    <td width=\"11%\"><a href=\"$webdb[www_url]/do/bencandy_form.php?mid=$mid&id=$id\" target=\"_blank\">详情</a></td>\r\n        </tr> \r\n      </table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:4:\"form\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"6\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:3:\"all\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";N;s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:195:\" SELECT A.*,R.*,config AS M_config FROM {$tbl_prefix}form_content A LEFT JOIN {$tbl_prefix}form_content_6 R ON A.id=R.id LEFT JOIN {$tbl_prefix}form_module F ON A.mid=F.id  WHERE 1  AND A.mid=\'6\'  ORDER BY A.id DESC  LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243739085','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('318','','1','0','b02','code','0','<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" bgcolor=\"#ffffff\">\r\n        <tr align=\"center\" bgcolor=\"#EBEBEB\"> \r\n          <td width=\"36%\">招聘职位</td>\r\n          <td width=\"13%\">学历要求</td>\r\n          <td width=\"14%\">性别要求</td>\r\n          <td width=\"13%\">经验要求</td>\r\n          <td width=\"13%\">月薪待遇</td>\r\n          <td width=\"11%\">详情</td>\r\n        </tr> \r\n      </table>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"490\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239022772','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('330','','1','0','mainnews2','article','1','a:31:{s:13:\"tplpart_1code\";s:397:\"<div style=\"clear:both;padding-top:2px;margin-bottom:4px;\"><span style=\"float:left;font-size:13px;color:#ccc;\">·<A HREF=\"$list_url\" style=\"font-size:13px;\">{$fname}</A>| <A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;font-size:13px;\">$title</a>$new$hot</span>                     \r\n    <span style=\"float:right;color:#993300;padding-right:3px;font-size:13px;\">[{$time_m}-{$time_d}]</span></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:28:\"/common_fname/time_fname.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"32\";s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:10:\"A.posttime\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:1:\"1\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:141:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.levels=1  AND A.fid IN (32)  AND A.mid=\'0\'   ORDER BY A.posttime DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"48\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"467\";s:5:\"div_h\";s:3:\"126\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240280500','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('317','','1','0','Title05','code','0','商城购物','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239778992','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('319','','1','0','b022','form','1','a:31:{s:9:\"tplpart_1\";s:518:\"<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" style=\"border-bottom:1px dotted #eee;\">\r\n        <tr align=\"center\"> \r\n          \r\n    <td width=\"36%\" align=\"left\"> $workplace</td>\r\n          <td width=\"13%\">$schoo_age</td>\r\n          <td width=\"14%\">$asksex</td>\r\n          <td width=\"13%\">$wageyear</td>\r\n          <td width=\"13%\">$wage</td>\r\n          \r\n    <td width=\"11%\"><a href=\"$webdb[www_url]/do/bencandy_form.php?mid=$mid&id=$id\" target=\"_blank\">详情</a></td>\r\n        </tr> \r\n      </table>\";s:13:\"tplpart_1code\";s:518:\"<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" style=\"border-bottom:1px dotted #eee;\">\r\n        <tr align=\"center\"> \r\n          \r\n    <td width=\"36%\" align=\"left\"> $workplace</td>\r\n          <td width=\"13%\">$schoo_age</td>\r\n          <td width=\"14%\">$asksex</td>\r\n          <td width=\"13%\">$wageyear</td>\r\n          <td width=\"13%\">$wage</td>\r\n          \r\n    <td width=\"11%\"><a href=\"$webdb[www_url]/do/bencandy_form.php?mid=$mid&id=$id\" target=\"_blank\">详情</a></td>\r\n        </tr> \r\n      </table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:4:\"form\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"2\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:3:\"all\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";N;s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:195:\" SELECT A.*,R.*,config AS M_config FROM {$tbl_prefix}form_content A LEFT JOIN {$tbl_prefix}form_content_2 R ON A.id=R.id LEFT JOIN {$tbl_prefix}form_module F ON A.mid=F.id  WHERE 1  AND A.mid=\'2\'  ORDER BY A.id DESC  LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"485\";s:5:\"div_h\";s:2:\"70\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1243739034','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('322','','1','0','bodyad2','pic','0','a:4:{s:6:\"imgurl\";s:11:\"ad/cnad.jpg\";s:7:\"imglink\";s:22:\"http://www.php168.com/\";s:5:\"width\";s:3:\"742\";s:6:\"height\";s:2:\"90\";}','a:3:{s:5:\"div_w\";s:3:\"742\";s:5:\"div_h\";s:2:\"90\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239759405','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('323','','1','0','Title4d','code','0','搜索引擎之PK战','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1237278157','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('324','','1','0','c2d','hack_vote','0','<SCRIPT src=\'http://www_php168_com/do/vote.php?job=js&cid=10\'></SCRIPT>','a:4:{s:6:\"voteid\";s:2:\"10\";s:5:\"div_w\";s:3:\"237\";s:5:\"div_h\";s:3:\"145\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239011013','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('325','','1','0','Title5d','code','0','2008年中国站长八大热门','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240113989','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('326','','1','0','b2d','hack_vote','0','<SCRIPT src=\'http://www_php168_com/do/vote.php?job=js&cid=11\'></SCRIPT>','a:4:{s:6:\"voteid\";s:2:\"11\";s:5:\"div_w\";s:3:\"480\";s:5:\"div_h\";s:3:\"238\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239011483','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('327','','1','0','c02d','article','1','a:31:{s:13:\"tplpart_1code\";s:476:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin:3px 0px 12px 0px;\">\r\n  <tr> \r\n    <td rowspan=\"2\" width=\"4%\" style=\"padding-right:3px;\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" width=\"100\" height=\"75\" border=\"0\"></a></td>\r\n    <td width=\"96%\"> <a href=\"$url\" target=\"_blank\" style=\"color:#666;font-weight:bold;\">$title</a></td>\r\n  </tr>\r\n  <tr> \r\n    <td width=\"96%\" style=\"color:#929292;text-indent:1em;\">$content</td>\r\n  </tr>\r\n</table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:33:\"/common_pic/title_pic_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"34\";s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:211:\" SELECT A.*,A.aid AS id,R.content FROM {$tbl_prefix}article A LEFT JOIN {$tbl_prefix}reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (34)  AND A.mid=\'0\'  AND A.ispic=1   AND A.ispic=1  AND R.topic=1 ORDER BY A.aid DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"58\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"18\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:3:\"230\";s:5:\"div_h\";s:3:\"238\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240060985','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('328','','1','0','Title04d','code','0','推荐图文','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"215\";s:5:\"div_h\";s:2:\"26\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239345594','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('329','','1','0','c2de','pic','0','a:4:{s:6:\"imgurl\";s:32:\"label/1_20090420130440_bWzOZ.jpg\";s:7:\"imglink\";s:19:\"http://www.371.com/\";s:5:\"width\";s:3:\"242\";s:6:\"height\";s:2:\"98\";}','a:3:{s:5:\"div_w\";s:3:\"233\";s:5:\"div_h\";s:2:\"87\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240205249','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('347','','0','0','show_right_top_picad','code','0','<SCRIPT LANGUAGE=\'JavaScript\' src=\'http://www_php168_com/do/a_d_s.php?job=js&ad_id=show_right_top_picad\'></SCRIPT>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"290\";s:5:\"div_h\";s:3:\"110\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240893892','3','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('342','','1','0','index_ad3','pic','0','a:4:{s:6:\"imgurl\";s:11:\"ad/qyad.jpg\";s:7:\"imglink\";s:21:\"http://www.qy.com.cn/\";s:5:\"width\";s:3:\"742\";s:6:\"height\";s:2:\"90\";}','a:3:{s:5:\"div_w\";s:3:\"742\";s:5:\"div_h\";s:2:\"90\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239760021','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('348','','0','0','show_topad','code','0','<SCRIPT LANGUAGE=\'JavaScript\' src=\'http://www_php168_com/do/a_d_s.php?job=js&ad_id=show_topad\'></SCRIPT>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"990\";s:5:\"div_h\";s:2:\"60\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240893880','3','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('349','','0','0','list_page_topad','code','0','<SCRIPT LANGUAGE=\'JavaScript\' src=\'http://www_php168_com/do/a_d_s.php?job=js&ad_id=list_page_topad\'></SCRIPT>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"290\";s:5:\"div_h\";s:3:\"130\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240893815','2','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('350','','0','0','article_list','code','0','<SCRIPT LANGUAGE=\'JavaScript\' src=\'http://www_php168_com/do/a_d_s.php?job=js&ad_id=article_list\'> </SCRIPT>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"263\";s:5:\"div_h\";s:3:\"204\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240893832','2','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('351','','0','0','article_list_tag','code','0','广告位','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239279418','2','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('356','','0','0','bbsifmark_tag','code','0','论坛优秀贴','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','2','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('357','','0','0','bbsifmark','pwbbs','1','a:28:{s:13:\"tplpart_1code\";s:162:\"<div style=\"padding-top:6px;\">·<A HREF=\"$webdb[passport_url]/read.php?tid=$tid&page=1\" target=\'_blank\'  style=\"$fontcolor;$fontweight\">$title</a> $new $hot</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:5:\"pwbbs\";s:6:\"digest\";s:3:\"all\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"ifmark\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";N;s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:176:\" SELECT T.*,T.tid AS id,T.author AS username,T.authorid AS uid,T.subject AS title,T.postdate AS posttime FROM pw_threads T  WHERE 1  ORDER BY T.ifmark DESC,T.tid DESC LIMIT 10 \";s:7:\"colspan\";s:1:\"1\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";}','a:3:{s:5:\"div_w\";s:3:\"282\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240202279','2','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('354','','0','0','article_show','code','0','<SCRIPT LANGUAGE=\'JavaScript\' src=\'http://www_php168_com/do/a_d_s.php?job=js&ad_id=article_show\'></SCRIPT>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240893904','3','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('355','','0','0','article_show_tag','code','0','广告位','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1239279430','3','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('358','','0','0','view_article_bbs_tag','code','0','论坛推荐图文','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','3','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('359','','0','0','view_article_bbs','pwbbs','1','a:28:{s:13:\"tplpart_1code\";s:370:\"<div  class=\"listpic\"> \r\n              <p class=img><a href=\"$webdb[passport_url]/read.php?tid=$tid&page=1\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>\r\n              <p class=title style=\"text-align:center;\"><A HREF=\"$webdb[passport_url]/read.php?tid=$tid&page=1\" title=\'$full_title\' target=\"_blank\">$title</A></p>\r\n            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:5:\"pwbbs\";s:6:\"digest\";s:3:\"all\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:3:\"tid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";N;s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:252:\" SELECT T.*,T.tid AS id,T.author AS username,T.authorid AS uid,T.subject AS title,T.postdate AS posttime,A.attachurl FROM pw_attachs A LEFT JOIN pw_threads T ON A.tid=T.tid  WHERE 1  AND A.type=\'img\' GROUP BY tid ORDER BY T.tid DESC,T.tid DESC LIMIT 5 \";s:7:\"colspan\";s:1:\"1\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";}','a:3:{s:5:\"div_w\";s:3:\"650\";s:5:\"div_h\";s:3:\"100\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240893928','3','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('360','','1','0','bodyad33','pic','0','a:4:{s:6:\"imgurl\";s:32:\"label/1_20090418150428_gPa47.jpg\";s:7:\"imglink\";s:22:\"http://www.yeepay.com/\";s:5:\"width\";s:3:\"243\";s:6:\"height\";s:2:\"90\";}','a:3:{s:5:\"div_w\";s:3:\"243\";s:5:\"div_h\";s:2:\"90\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240041136','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('361','','1','0','index_ad4','pic','0','a:4:{s:6:\"imgurl\";s:32:\"label/1_20090420120412_hvW6H.jpg\";s:7:\"imglink\";s:26:\"http://www.chinaccnet.com/\";s:5:\"width\";s:3:\"242\";s:6:\"height\";s:2:\"90\";}','a:3:{s:5:\"div_w\";s:3:\"242\";s:5:\"div_h\";s:2:\"90\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240202973','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('372','','1','0','index_search','code','0','资源搜索：<a href=\\\"http://bbs.php168.com/\\\"  target=\"_blank\"><font color=\\\"#E80000\\\">PHP168整站</font></a> \r\n                <a href=\\\"http://371.com\"  target=\"_blank\">注册域名</a> <a href=\\\"http://www.ceodh.com\"  target=\"_blank\">CEO</a> <a href=\\\"http://down.chinaz.com\"  target=\"_blank\">源码下载</a> \r\n                <a href=\\\"http://www.techweb.com.cn\">IT资讯</a> <a href=\\\"http://www.cnidc.com\"  target=\"_blank\">主机空间</a> <a href=\\\"http://www.admin5.com/html\"  target=\"_blank\"><font color=\\\"#E80000\\\">建站手册</font></a> \r\n                <a href=\\\"http://www.phpwind.net\"  target=\"_blank\">PW论坛</a> <a href=\\\"http://www.39.net\"  target=\"_blank\"><font color=\\\"#FF0000\\\"><u><font color=\\\"#E80000\\\">健康咨询</font></u></font></a>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"600\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240208135','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('373','','1','99','head_guides','code','0','      <div class=\"ico_guide bbs\"><a href=\"http://www_php168_com/bbs/\" target=\'_blank\'>社区</a></div>\r\n	  <div class=\"ico_guide post\"><a href=\"http://www_php168_com/do/post.php\">投稿</a></div>\r\n	  <div class=\"ico_guide sell\"><a href=\"http://www_php168_com/do/buymoneycard.php?paytype=yeepay\">充值</a></div>\r\n	  <div class=\"ico_guide jf\"><a href=\"http://www_php168_com/do/jf.php\">积分</a></div>\r\n	  <div class=\"ico_guide user\"><a href=\"http://www_php168_com/do/list_form.php?mid=2\">招聘</a></div>\r\n	  <div class=\"ico_guide search\"><a href=\"http://www_php168_com/do/search.php\">搜索</a></div>\r\n	  <div class=\"ico_guide book\"><a href=\"http://www_php168_com/do/guestbook.php\">留言</a></div>\r\n	  <div class=\"ico_guide digg\"><a href=\"http://www_php168_com/do/listsp.php?fid=1\">专题</a></div>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"700\";s:5:\"div_h\";s:2:\"50\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240898798','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('383','','0','0','list_page_mv','article','1','a:31:{s:13:\"tplpart_1code\";s:195:\"(mv,290,210,false)$mvurl(/mv)\r\n<div style=\"line-height:170%;text-align:center;padding-top:8px;\"><A HREF=\"$url\" target=\'_blank\'  style=\"$fontcolor;$fontweight\" title=\'$full_title\'>$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'   ORDER BY A.aid DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','2','0','1','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('375','','0','0','list_top_ad','code','0','<SCRIPT LANGUAGE=\'JavaScript\' src=\'http://www_php168_com/do/a_d_s.php?job=js&ad_id=AD_list_topad\'></SCRIPT>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"900\";s:5:\"div_h\";s:2:\"51\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240893857','2','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('376','','0','0','mvshow','article','1','a:31:{s:13:\"tplpart_1code\";s:149:\"(mv,400,300,false)$mvurl(/mv)<div style=\"padding:8px 0 10px 0;\">&nbsp;<A HREF=\"$url\" target=\'_blank\'  style=\"font-size:14px;\"><b>$title</b></a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:30:\"/common_title/1title_noico.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'   ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"46\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240201322','11','0','24','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('377','','0','0','mvshow','article','1','a:31:{s:13:\"tplpart_1code\";s:144:\"(mv,400,300,false)$mvurl(/mv)<div style=\"padding:8px 0 10px 0;\"> <A HREF=\"$url\" target=\'_blank\'  style=\"font-size:14px;\"><b>$title</b></a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'   ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','11','0','23','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('378','','0','0','mvshow','article','1','a:31:{s:13:\"tplpart_1code\";s:144:\"(mv,400,300,false)$mvurl(/mv)<div style=\"padding:8px 0 10px 0;\"> <A HREF=\"$url\" target=\'_blank\'  style=\"font-size:14px;\"><b>$title</b></a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'   ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','11','0','22','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('379','','0','0','mvshow','article','1','a:31:{s:13:\"tplpart_1code\";s:144:\"(mv,400,300,false)$mvurl(/mv)<div style=\"padding:8px 0 10px 0;\"> <A HREF=\"$url\" target=\'_blank\'  style=\"font-size:14px;\"><b>$title</b></a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'   ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','11','0','21','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('380','','0','0','mvshow','article','1','a:31:{s:13:\"tplpart_1code\";s:144:\"(mv,400,300,false)$mvurl(/mv)<div style=\"padding:8px 0 10px 0;\"> <A HREF=\"$url\" target=\'_blank\'  style=\"font-size:14px;\"><b>$title</b></a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'   ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','11','0','20','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('381','','0','0','mvshow','article','1','a:31:{s:13:\"tplpart_1code\";s:144:\"(mv,400,300,false)$mvurl(/mv)<div style=\"padding:8px 0 10px 0;\"> <A HREF=\"$url\" target=\'_blank\'  style=\"font-size:14px;\"><b>$title</b></a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'   ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','11','0','19','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('384','','0','0','list_page_mv','article','1','a:31:{s:13:\"tplpart_1code\";s:195:\"(mv,290,210,false)$mvurl(/mv)\r\n<div style=\"line-height:170%;text-align:center;padding-top:8px;\"><A HREF=\"$url\" target=\'_blank\'  style=\"$fontcolor;$fontweight\" title=\'$full_title\'>$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM {$tbl_prefix}article A  WHERE A.yz=1  AND A.mid=\'102\'   ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1240292096','2','0','0','0','default');
INSERT INTO `{$tbl_prefix}label` VALUES ('385','','1','0','showinfo','code','0','<SCRIPT LANGUAGE=\"JavaScript\">\r\n<!--\r\ndocument.write(\'<span id=\"num_info\"><img alt=\"内容加载中,请稍候...\" src=\"http://www_php168_com/images/default/ico_loading3.gif\"></span>\');\r\ndocument.write(\'<div style=\"display:none;\"><iframe src=\"http://www_php168_com/do/job.php?job=getinfo&iframeID=num_info\" width=0 height=0></iframe></div>\');\r\n//-->\r\n</SCRIPT>','a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"235\";s:5:\"div_h\";s:2:\"55\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1241074422','0','0','0','0','default');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('22','','7','0','1237208241','1237208241','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('26','','6','7','1237250809','1237250809','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('27','','3','1','1237260673','1237260673','1','admin','','1','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('30','','2','7','1237269830','1237269830','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('29','','2','2','1237268864','1237268864','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('28','','1','10','1237260696','1237260696','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('25','','3','2','1237214289','1237214289','1','admin','','1','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('24','','6','3','1237213169','1237213169','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('31','','2','5','1239780761','1239780761','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('18','','3','0','1236936110','1236936110','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('19','','5','0','1236939584','1236939584','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('20','','6','0','1237174883','1237174883','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('21','','2','4','1237195731','1237195731','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content` VALUES ('23','','7','0','1237208253','1237208253','1','admin','','0','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_content_1` VALUES ('28','1','222223','2','444444','13377777777','趣爱好:','ffffffffffff','下载频道','0');
INSERT INTO `{$tbl_prefix}form_content_2` VALUES ('21','1','C语言工程师','3','独立开发IE控件','广州','1000元/月','1','本科','一年以上');
INSERT INTO `{$tbl_prefix}form_content_2` VALUES ('29','1','JAVA程序员','5','独立开发程序','深圳','800元/月','2','高中','两年以上');
INSERT INTO `{$tbl_prefix}form_content_2` VALUES ('30','1','市场总监','2','负责产品的销售.','广州','8000元/月','0','本科','三年以上');
INSERT INTO `{$tbl_prefix}form_content_2` VALUES ('31','1','销售经理','8','负责我公司的产品销售.','广州市','3000','0','大专','一年以上');
INSERT INTO `{$tbl_prefix}form_content_3` VALUES ('18','1','售后客服','','222223','65223@qq.com','133444444443');
INSERT INTO `{$tbl_prefix}form_content_3` VALUES ('25','1','售后客服','hhhhhhhhhhhhhhhhhh','222223','65223@qq.com','13377777777');
INSERT INTO `{$tbl_prefix}form_content_3` VALUES ('27','1','售后客服','192.168.0.99/55 all righ\nts reserved \n京ICP备05047353号 \nPowered by PHP168','222223','65223@qq.com','13377777777');
INSERT INTO `{$tbl_prefix}form_content_5` VALUES ('19','1','555555555555555','0000-00-00','大专','三项式','','','','0','222223','444444','65223@qq.com','13355555555','3','一直在fgsgfd','44444444444444443','');
INSERT INTO `{$tbl_prefix}form_content_6` VALUES ('20','1','程序员','55555555555\nkkkkkkkkkkkkkkkkkkkkkk','5','222223','高中','56','','','','2','6767','面议','3','65223@qq.com','444444','');
INSERT INTO `{$tbl_prefix}form_content_6` VALUES ('24','1','C语言工程师','4444444444444','4','222223','大专','4','','','','2','090-89766543','面议','3','65223@qq.com','444444','1周内');
INSERT INTO `{$tbl_prefix}form_content_6` VALUES ('26','1','C语言工程师','rrrrrrrrrrrrrrrrrrrrrrrrrrr','4','222223','大专','4','','','','1','090-89766543','1000元-2000元','3','65223@qq.com','444444','1周内');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('6','1','整站系统(文章+核心)','6655','','网上转帐','','','222223','444444','3333333','13333333333','3trewtre');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('7','1','整站系统(文章+核心)','23','2009-03-03','在线支付','fff','eee','222223','444444','333','13344444444','3');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('8','1','整站系统(文章+核心)','5','','在线支付','','','222223','444444','一直在fgsgfd3','13355555555','3');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('9','1','整站系统(文章+核心)','0.01','2009-03-13','在线支付','e','s','222223','444444','一直在fgsgfd3','13355555555','3');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('10','1','整站系统(文章+核心)','1','2009-03-13','在线支付','e','s','222223','444444','一直在fgsgfd3','13355555555','3');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('11','1','整站系统(文章+核心)','0.01','2009-03-13','olpay','e','s','222223','444444','一直在fgsgfd3','13355555555','3');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('12','1','整站系统(文章+核心)/分类信息系统/商','54','2009-03-03','网上转帐','t','t','222223','444444','一直在fgsgfd3','13355555555','3');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('13','1','1/2/商城系统','4','','olpay','','','222223','444444','一直在fgsgfd3','13344444444','3');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('22','1','1','78','','olpay','','','222223','444444','一直在fgsgfd3','13377777777','3');
INSERT INTO `{$tbl_prefix}form_content_7` VALUES ('23','1','1','78','','网上转帐','','','222223','444444','一直在fgsgfd3','13377777777','3');
INSERT INTO `{$tbl_prefix}form_module` VALUES ('1','版主申请','0','','a:3:{s:8:\"field_db\";a:8:{s:8:\"sortname\";a:14:{s:5:\"title\";s:27:\"申请哪个栏目的版主\";s:10:\"field_name\";s:8:\"sortname\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:40;s:9:\"form_type\";s:8:\"checkbox\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:54:\"新闻频道\r\n下载频道\r\n图片频道\r\n视频频道\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:11;s:9:\"allowview\";N;}s:7:\"webtime\";a:15:{s:5:\"title\";s:24:\"每天上网几个小时\";s:10:\"field_name\";s:7:\"webtime\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:10;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"4\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:6:\"小时\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:10;s:9:\"allowview\";N;}s:8:\"truename\";a:15:{s:5:\"title\";s:12:\"真实姓名\";s:10:\"field_name\";s:8:\"truename\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:20;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"7\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:9;s:9:\"allowview\";N;}s:3:\"sex\";a:15:{s:5:\"title\";s:6:\"性别\";s:10:\"field_name\";s:3:\"sex\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:1;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:22:\"1|男\r\n2|女\r\n0|保密\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:8;s:9:\"allowview\";N;}s:4:\"oicq\";a:15:{s:5:\"title\";s:8:\"联系QQ\";s:10:\"field_name\";s:4:\"oicq\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:10;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"10\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:7;s:9:\"allowview\";N;}s:8:\"mobphone\";a:15:{s:5:\"title\";s:12:\"手机号码\";s:10:\"field_name\";s:8:\"mobphone\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:11;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"11\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:6;s:9:\"allowview\";N;}s:8:\"interest\";a:15:{s:5:\"title\";s:12:\"兴趣爱好\";s:10:\"field_name\";s:8:\"interest\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:8:\"textarea\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:5;s:9:\"allowview\";N;}s:9:\"introduce\";a:15:{s:5:\"title\";s:12:\"自我介绍\";s:10:\"field_name\";s:9:\"introduce\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:8:\"textarea\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:4;s:9:\"allowview\";N;}}s:7:\"is_html\";a:1:{s:7:\"content\";s:4:\"\";}s:11:\"listshow_db\";a:2:{s:8:\"truename\";s:12:\"真实姓名\";s:3:\"sex\";s:6:\"性别\";}}','3,4,8,9','0','<p><strong>如果你有激惿有梦惿就来申请做我们的版主吿</strong></p>','0','0','审批','');
INSERT INTO `{$tbl_prefix}form_module` VALUES ('2','招聘表单','0','','a:3:{s:8:\"field_db\";a:8:{s:9:\"workplace\";a:15:{s:5:\"title\";s:12:\"职位名称\";s:10:\"field_name\";s:9:\"workplace\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:100;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"30\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"10\";s:9:\"allowview\";N;}s:4:\"nums\";a:15:{s:5:\"title\";s:12:\"招聘人数\";s:10:\"field_name\";s:4:\"nums\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:10;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"4\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:3:\"人\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"9\";s:9:\"allowview\";N;}s:10:\"jobrequire\";a:15:{s:5:\"title\";s:21:\"职位描述及要求\";s:10:\"field_name\";s:10:\"jobrequire\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:8:\"textarea\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"8\";s:9:\"allowview\";N;}s:8:\"wageyear\";a:15:{s:5:\"title\";s:18:\"工作经验要求\";s:10:\"field_name\";s:8:\"wageyear\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:12;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:57:\"应届毕业生\r\n一年以上\r\n两年以上\r\n三年以上\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"7\";s:9:\"allowview\";N;}s:9:\"workwhere\";a:15:{s:5:\"title\";s:12:\"工作地点\";s:10:\"field_name\";s:9:\"workwhere\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"6\";s:9:\"allowview\";N;}s:4:\"wage\";a:15:{s:5:\"title\";s:12:\"薪水待遇\";s:10:\"field_name\";s:4:\"wage\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"5\";s:9:\"allowview\";N;}s:6:\"asksex\";a:15:{s:5:\"title\";s:12:\"性别要求\";s:10:\"field_name\";s:6:\"asksex\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:1;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:1:\"1\";s:8:\"form_set\";s:22:\"1|男\r\n2|女\r\n0|不限\";s:10:\"form_value\";s:1:\"0\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"4\";s:9:\"allowview\";N;}s:9:\"schoo_age\";a:15:{s:5:\"title\";s:12:\"学历要求\";s:10:\"field_name\";s:9:\"schoo_age\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:20;s:9:\"form_type\";s:6:\"select\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:62:\"小学\r\n中学\r\n中专\r\n高中\r\n大专\r\n本科\r\n硕士\r\n博士\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:6:\"以上\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"3\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:1:{s:7:\"content\";s:4:\"\";}s:11:\"listshow_db\";a:5:{s:8:\"wageyear\";s:18:\"工作经验要求\";s:9:\"workplace\";s:12:\"职位名称\";s:4:\"nums\";s:12:\"招聘人数\";s:6:\"asksex\";s:12:\"性别要求\";s:9:\"schoo_age\";s:12:\"学历要求\";}}','','0','','0','1','审核','');
INSERT INTO `{$tbl_prefix}form_module` VALUES ('3','投诉建议','0','','a:3:{s:8:\"field_db\";a:5:{s:10:\"advicetype\";a:15:{s:5:\"title\";s:12:\"投诉类型\";s:10:\"field_name\";s:10:\"advicetype\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:48:\"售前客服\r\n售后客服\r\n产品质量\r\n其它\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"10\";s:9:\"allowview\";N;}s:8:\"mobphone\";a:15:{s:5:\"title\";s:12:\"你的称呼\";s:10:\"field_name\";s:8:\"mobphone\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:25;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"8\";s:9:\"allowview\";N;}s:5:\"email\";a:15:{s:5:\"title\";s:12:\"你的邮箱\";s:10:\"field_name\";s:5:\"email\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"7\";s:9:\"allowview\";N;}s:7:\"content\";a:15:{s:5:\"title\";s:12:\"投诉内容\";s:10:\"field_name\";s:7:\"content\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:8:\"textarea\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"6\";s:9:\"allowview\";N;}s:8:\"truename\";a:15:{s:5:\"title\";s:12:\"你的电话\";s:10:\"field_name\";s:8:\"truename\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"10\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"8\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:0:{}s:11:\"listshow_db\";a:2:{s:10:\"advicetype\";s:12:\"投诉类型\";s:8:\"truename\";s:12:\"你的电话\";}}','','0','','0','1','处理','3,4');
INSERT INTO `{$tbl_prefix}form_module` VALUES ('6','求职表单','0','','a:3:{s:8:\"field_db\";a:16:{s:12:\"workposition\";a:15:{s:5:\"title\";s:12:\"求职岗位\";s:10:\"field_name\";s:12:\"workposition\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"30\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"21\";s:9:\"allowview\";N;}s:8:\"truename\";a:15:{s:5:\"title\";s:6:\"姓名\";s:10:\"field_name\";s:8:\"truename\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"10\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"20\";s:9:\"allowview\";N;}s:3:\"sex\";a:15:{s:5:\"title\";s:6:\"性别\";s:10:\"field_name\";s:3:\"sex\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:1;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:22:\"1|男\r\n2|女\r\n0|保密\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"19\";s:9:\"allowview\";N;}s:5:\"myage\";a:15:{s:5:\"title\";s:6:\"年龄\";s:10:\"field_name\";s:5:\"myage\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:2;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"2\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:3:\"岁\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"18\";s:9:\"allowview\";N;}s:9:\"schoo_age\";a:13:{s:5:\"title\";s:6:\"学历\";s:10:\"field_name\";s:9:\"schoo_age\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:6:\"select\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:59:\"初中\r\n中专\r\n高中\r\n大专\r\n本科\r\n硕士\r\n博士\r\nMBA\";s:10:\"form_value\";s:6:\"大专\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"17\";s:9:\"allowview\";N;}s:14:\"graduateschool\";a:15:{s:5:\"title\";s:12:\"毕业学校\";s:10:\"field_name\";s:14:\"graduateschool\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:40;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"16\";s:9:\"allowview\";N;}s:9:\"specialty\";a:15:{s:5:\"title\";s:6:\"专业\";s:10:\"field_name\";s:9:\"specialty\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"20\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"15\";s:9:\"allowview\";N;}s:5:\"skill\";a:15:{s:5:\"title\";s:6:\"特长\";s:10:\"field_name\";s:5:\"skill\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"20\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"14\";s:9:\"allowview\";N;}s:8:\"workyear\";a:15:{s:5:\"title\";s:12:\"工作年限\";s:10:\"field_name\";s:8:\"workyear\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:2;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"2\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:3:\"年\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"13\";s:9:\"allowview\";N;}s:10:\"experience\";a:15:{s:5:\"title\";s:12:\"工作经验\";s:10:\"field_name\";s:10:\"experience\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:2;s:9:\"form_type\";s:8:\"textarea\";s:15:\"field_inputleng\";s:1:\"2\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"12\";s:9:\"allowview\";N;}s:4:\"wage\";a:15:{s:5:\"title\";s:12:\"期望月薪\";s:10:\"field_name\";s:4:\"wage\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:20;s:9:\"form_type\";s:6:\"select\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:87:\"面议\r\n1000元以下\r\n1000元-2000元\r\n2000元-3000元\r\n3000元-4000元\r\n4000元以上\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"11\";s:9:\"allowview\";N;}s:7:\"address\";a:15:{s:5:\"title\";s:15:\"当前居住地\";s:10:\"field_name\";s:7:\"address\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:255;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"70\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"10\";s:9:\"allowview\";N;}s:9:\"telephone\";a:15:{s:5:\"title\";s:12:\"联系电话\";s:10:\"field_name\";s:9:\"telephone\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:25;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"9\";s:9:\"allowview\";N;}s:5:\"email\";a:15:{s:5:\"title\";s:12:\"联系邮箱\";s:10:\"field_name\";s:5:\"email\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"20\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"8\";s:9:\"allowview\";N;}s:4:\"oicq\";a:15:{s:5:\"title\";s:8:\"QQ号码\";s:10:\"field_name\";s:4:\"oicq\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:11;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"9\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"7\";s:9:\"allowview\";N;}s:8:\"worktime\";a:14:{s:5:\"title\";s:12:\"到岗日期\";s:10:\"field_name\";s:8:\"worktime\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:45:\"随时\r\n1周内\r\n2周内\r\n3周内\r\n1个月内\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"6\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:1:{s:7:\"content\";s:4:\"\";}s:11:\"listshow_db\";a:7:{s:6:\"my_537\";s:8:\"\";s:6:\"my_425\";s:8:\"\";s:8:\"truename\";s:6:\"姓名\";s:5:\"myage\";s:6:\"年龄\";s:8:\"workyear\";s:12:\"工作年限\";s:3:\"sex\";s:6:\"性别\";s:12:\"workposition\";s:12:\"求职岗位\";}}','','0','','0','1','录用','');
INSERT INTO `{$tbl_prefix}form_module` VALUES ('7','产品订单','0','','a:3:{s:8:\"field_db\";a:11:{s:7:\"product\";a:15:{s:5:\"title\";s:12:\"产品名称\";s:10:\"field_name\";s:7:\"product\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"40\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"30\";s:9:\"allowview\";N;}s:7:\"paytype\";a:15:{s:5:\"title\";s:12:\"付款方式\";s:10:\"field_name\";s:7:\"paytype\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:25;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:93:\"olpay|在线支付\r\n网上转帐\r\nATM机/银行柜台转帐汇款\r\n货到付款\r\n其它方式\";s:10:\"form_value\";s:5:\"olpay\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"29\";s:9:\"allowview\";N;}s:7:\"paytime\";a:15:{s:5:\"title\";s:12:\"付款日期\";s:10:\"field_name\";s:7:\"paytime\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:4:\"time\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"28\";s:9:\"allowview\";N;}s:11:\"receivebank\";a:15:{s:5:\"title\";s:18:\"款项转入银行\";s:10:\"field_name\";s:11:\"receivebank\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"20\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"27\";s:9:\"allowview\";N;}s:8:\"sendbank\";a:15:{s:5:\"title\";s:18:\"款项转出银行\";s:10:\"field_name\";s:8:\"sendbank\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"20\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"26\";s:9:\"allowview\";N;}s:8:\"paymoney\";a:15:{s:5:\"title\";s:12:\"支付金额\";s:10:\"field_name\";s:8:\"paymoney\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"10\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:2:\"Ԫ\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"25\";s:9:\"allowview\";N;}s:8:\"truename\";a:15:{s:5:\"title\";s:15:\"联系人姓名\";s:10:\"field_name\";s:8:\"truename\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"10\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"24\";s:9:\"allowview\";N;}s:4:\"oicq\";a:15:{s:5:\"title\";s:11:\"联系人QQ\";s:10:\"field_name\";s:4:\"oicq\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:11;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"11\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"23\";s:9:\"allowview\";N;}s:9:\"telephone\";a:15:{s:5:\"title\";s:15:\"联系人电话\";s:10:\"field_name\";s:9:\"telephone\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"22\";s:9:\"allowview\";N;}s:8:\"mobphone\";a:15:{s:5:\"title\";s:15:\"联系人手机\";s:10:\"field_name\";s:8:\"mobphone\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:11;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"11\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"21\";s:9:\"allowview\";N;}s:7:\"address\";a:15:{s:5:\"title\";s:15:\"联系人地址\";s:10:\"field_name\";s:7:\"address\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:150;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"60\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"20\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:1:{s:7:\"content\";s:4:\"\";}s:11:\"listshow_db\";a:3:{s:7:\"paytype\";s:12:\"付款方式\";s:8:\"truename\";s:15:\"联系人姓名\";s:8:\"paymoney\";s:12:\"支付金额\";}}','','0','','0','1','付款','');
INSERT INTO `{$tbl_prefix}form_reply` VALUES ('6','25','3','1237255555','1','admin','<p><u>yyyyyy</u></p>\r\n<p><u>yyyyyyyy</u></p><strong>\r\n<hr width=\"100%\" color=#98fb98 SIZE=1 />\r\n</strong>','192.168.0.99');
INSERT INTO `{$tbl_prefix}form_reply` VALUES ('10','27','3','1239591974','1','admin','ffffffffffff ','192.168.0.99');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('12','0','PHPWIND官方论坛','http://www.phpwind.net/','http://www.phpwind.net/logo.gif','PHPWIND官方论坛','32','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('5','0','php168整站','http://www.php168.com','friendlink/1_20090418160423_boQJA.gif','免费提供建站系统','40','0','0','0','0','0','','1','1270178938');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('13','3','中国站长站','http://www.chinazhan.net/','','中国站长站','0','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('16','2','群英网络','http://www.qy.com.cn/','','','0','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('17','3','动网论坛','http://www.dvbbs.net/','','动网论坛','0','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('18','3','web开发网','http://www.cncms.com.cn/','','','25','1','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('19','2','中国站长导航','http://www.hao168.cc/','','','0','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('21','2','易宝支付','http://www.yeepay.com/','friendlink/1_20090418160410_UxB8E.gif','易宝支付','39','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('22','2','39健康网','http://www.39.net/','friendlink/1_20090418160438_KDWX7.jpg','39健康网','31','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('23','2','门户通','http://menhutong.com.cn/','friendlink/1_20090418160412_bm7cQ.gif','门户通','36','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('24','2','迅雷','http://xunlei.com/','friendlink/1_20090418160406_9UoK8.jpg','迅雷','33','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('25','2','站长网','http://admin5.com/','friendlink/1_20090418160400_wqpAk.gif','站长网','37','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('26','2','中国站长站','http://www.chinaz.com/','friendlink/1_20090418160432_JNCry.gif','中国站长站','38','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('27','2','WEB开发网','http://www.cncms.com.cn/','friendlink/1_20090418160451_64IKO.gif','WEB开发网','34','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('28','3','网页教学网','http://www.webjx.com/','','网页教学网','27','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('36','3','CEO导航','http://ceodh.com/','','CEO导航','30','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('29','2','中电华通','http://www.chinaccnet.com/','','中电华通','0','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('30','2','磐石网络','http://371.com/','','磐石网络','0','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('31','3','1166导航','http://www.1166.com/','','1166导航','29','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('32','2','快车下载','http://union.flashget.com/','','快车下载','0','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('33','3','中国建站','http://www.jz123.cn/','','中国建站','27','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('34','3','CNZZ','http://www.cnzz.cn/','','CNZZ','26','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('35','2','CEO导航','http://www.ceodh.com/','friendlink/1_20090418180404_7nYuN.jpg','CEO导航','39','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('37','2','财付通','http://union.tenpay.com/','','财付通','28','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink` VALUES ('38','2','财库股票网','http://www.caikuu.com','','财库股票网','0','0','0','0','0','0','','1','0');
INSERT INTO `{$tbl_prefix}friendlink_sort` VALUES ('2','友情链接','0');
INSERT INTO `{$tbl_prefix}friendlink_sort` VALUES ('3','合作伙伴','0');
INSERT INTO `{$tbl_prefix}gather_rule` VALUES ('3','0','article','article','','phpe.net','http://phpe.net/?n=Articles&p=[page]&t=1','','1','3','1','0','','shtml','<','','','','','','','0','','','','','','','','','0','1172984270','0','0','0','','0','0','','','','0','','<tr><td width=\"100%\"><li class=\"fang\"><a href=\"{url=NO\"}\" title=\"{NO\"}\">{title=NO<}</a></li></td>','<td style=\"word-wrap:break-word; font-size: 14px; line-height: 160%\">{content=*}</td></tr>','','','0');
INSERT INTO `{$tbl_prefix}gather_rule` VALUES ('26','0','article','article','','腾讯人才激辩','','','0','0','1','0','http://edu.qq.com/job/jlgc_more.htm\r\nhttp://edu.qq.com/job/jlgc_more1.htm\r\nhttp://edu.qq.com/job/jlgc_more2.htm','','','','','','','','','0','','','','','','<table|<table style=\"display:none;\"','','','0','1172984270','1172984423','0','0','','0','0','','','','0','','<tr><td height=\"24\" class=\"font14px\"><div align=\"left\">·<a target=\"_blank\" class=\"blackul\" href=\"{url=NO\"}\">{title=NO<}</a> ','<div id=\"ArticleCnt\">{content=*}</div><div id=\"copyweb\">','','','0');
INSERT INTO `{$tbl_prefix}gather_rule` VALUES ('20','0','article','article','','且听风吟原创文学空间----->散文 >> 心灵感悟','http://wind.yinsha.com/ashow.php?sid=10&%20size=20&page=[page]','','1','3','1','0','','','','','','','','','','0','','','','<tr><td><p class=s11>','</td></tr>','','','','0','1165498531','1165498610','0','0','','0','0','','','','0','','<img src=images/{NO\"} border=0>\r\n                    \r\n            <a href=\"{url=NO\"}\" target=_blank>{title=NO<}</a> ','','','','0');
INSERT INTO `{$tbl_prefix}gather_rule` VALUES ('24','0','article','article','','碧海银纱-> 散文 >> 心灵感悟','http://wind.yinsha.com/ashow.php?sid=5&%20size=20&page=[page]','','1','8','1','0','','','','','','','','','','0','','','','','','','','','0','1166582291','1166582456','0','0','','0','0','','','','0','','<img src=images/{NO\"} border=0>\r\n                    \r\n            <a href=\"{url=NO }\" target=_blank>{title=NO<}</a> ','<div align=\"center\" class=\"s3\">作者: {author=NO\"}　</div>{*}<tr><td><p class=s11>&nbsp;&nbsp;{content=*}</td></tr>\r\n\r\n','','','0');
INSERT INTO `{$tbl_prefix}gather_rule` VALUES ('28','0','article','article','','心理 >> 心灵鸡汤','','','0','0','1','0','http://www.39.net/mentalworld/xlzl/index.htm\r\nhttp://www.39.net/mentalworld/xlzl/index_1.htm\r\nhttp://www.39.net/mentalworld/xlzl/index_2.htm','','<','','','','','','','0','','','','','','','','','0','1179849019','1179849189','0','0','','0','0','','','','0','','><Li><a href=\"{url=NO\"}\" Target=_blank>{title=NO<}</a>','<tr><td class=\"newscontent\"><digital39:Content  showtag=\"true\" ID=\"N10\" >{content=*}</digital39:Content></td></tr></table>','','','0');
INSERT INTO `{$tbl_prefix}gather_rule` VALUES ('31','0','article','article','','phpe.net','http://phpe.net/?n=Articles&p=[page]&t=1','','1','3','1','0','','shtml','<','','','','','','','0','','','','','','','','','0','1172984270','0','0','0','','0','0','','','','0','','<tr><td width=\"100%\"><li class=\"fang\"><a href=\"{url=*}\" title=\"{*}\">{title=*}</a></li></td>','<td style=\"word-wrap:break-word; font-size: 14px; line-height: 160%\">{content=*}</td></tr>{*}更新日期:{posttime=*}&nbsp;浏览次数','','','0');
INSERT INTO `{$tbl_prefix}guestbook` VALUES ('12','0','1','','','','','1','admin','192.168.0.99','忘记密码强制进入网站后台的方法是:修改/admin/global.php文件,查找$ForceEnter=0;把0改成1即可,强制进入网站的后台.','1','1240206881','1240206881','');
INSERT INTO `{$tbl_prefix}guestbook` VALUES ('13','0','1','','','','','1','admin','192.168.0.99','普通管理员成为超级管理员的方法是,修改文件/php168/admin.php,把里边的帐号更换一下即可','1','1240206958','1240206958','');
INSERT INTO `{$tbl_prefix}guestbook` VALUES ('14','0','1','','','','','1','admin','192.168.0.99','整站系统的数据库配置文件是/php168/mysql_config.php','1','1240207079','1240207079','');
INSERT INTO `{$tbl_prefix}guestbook` VALUES ('15','0','1','','','','','1','admin','192.168.0.99','服务器默认限制上传文件大小为2M,你如果不修改服务器设置.而想在整站系统上传大于2M的文件.是不可以的.必须先修改服务器设置.一般来说服务器的PHP配置文件放在c:\\windows\\php.ini这里.','1','1240207216','1240207216','');
INSERT INTO `{$tbl_prefix}guestbook` VALUES ('16','0','1','','','','','1','admin','192.168.0.99','如果服务器做了限制.就无法使用采集程序.','1','1240207330','1240207330','');
INSERT INTO `{$tbl_prefix}guestbook` VALUES ('18','0','1','','','','','0','','192.168.0.99','ffffffffffffff','0','1240215732','1240215732','');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('1','伤害','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('2','MTV','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('3','求拂','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('4','人间','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('5','极品美女','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('6','张供','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('7','大家','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('8','测试','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('9','浏览','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('10','女人','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('11','gfdsgfds','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('12','gfdsgfdsgfds','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('13','迅雷','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('14','网络','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('15','版权所有','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('16','WPS','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('17','个人版','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('18','永久','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('19','免费','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('20','QQ2009','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('21','Beta2','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('22','兼容','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('23','Windows','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('24','Vista','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('25','万能','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('26','文章','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('27','系统','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('28','PHP168','0','1','1','','4');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('29','分类','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('30','信息系统','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('31','博客','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('32','知道','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('33','经典','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('34','八仙过海','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('35','国语','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('36','fdsafds','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('37','M11504','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('38','BXF','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('39','电动','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('40','新版','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('41','V6----PHP168','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('42','热点','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('43','功能','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('44','介绍','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('45','Phpwind','0','1','1','','3');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('46','强势','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('47','整合','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('48','打造','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('49','黄金','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('50','组合','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('51','门户','0','1','1','','4');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('52','通一','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('53','周年','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('54','回忆','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('55','那些','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('56','一起','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('57','走过','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('58','日子','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('59','健康网','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('60','专家解读','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('61','体检','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('62','报告','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('63','秘密','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('64','中电','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('65','华通','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('66','20亿','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('67','七大','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('68','运营商','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('69','chinaz','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('70','倾力','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('71','IDC','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('72','交易平台','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('73','主机','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('74','cnidc.com','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('75','正式','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('76','上线','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('77','总裁','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('78','陈晓','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('79','网游','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('80','巨头','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('81','是否','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('82','就此','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('83','陨落','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('84','李开复','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('85','谷歌','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('86','中国','0','1','1','','4');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('87','市场','0','1','1','','3');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('88','份额','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('89','两年','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('90','增长','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('91','央视','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('92','南京','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('93','站长','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('94','大会','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('95','---','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('96','互联网','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('97','精英','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('98','发展','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('99','计策','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('100','百度百科','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('101','admin5','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('102','图王','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('103','Chinaz.com','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('104','阿飞','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('105','财富','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('106','之旅','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('107','熊晓鸽','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('108','怎样','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('109','拿到','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('110','通阿凯','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('111','18万','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('112','会员','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('113','一年','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('114','论坛','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('115','推广','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('116','基金','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('117','执行主席','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('118','慈善','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('119','金融','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('120','危机','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('121','影响','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('122','中国移动','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('123','上网','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('124','迎来','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('125','白送','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('126','”时代','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('127','商品','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('128','明明白白','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('129','购物','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('130','广州','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('131','文化节','0','1','1','','3');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('132','落幕','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('133','大学生','0','1','1','','3');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('134','坦然','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('135','面对','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('136','话题','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('137','第五届','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('138','外来工','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('139','派发','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('140','50万','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('141','安全套','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('142','内衣秀','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('143','模特','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('144','观众','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('145','四起','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('146','组图','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('147','深圳','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('148','内衣','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('149','校园','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('150','电子商务','0','1','1','','3');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('151','引来','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('152','关注','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('153','新手','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('154','必须','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('155','问题','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('156','成功','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('157','运作','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('158','四大','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('159','要素','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('160','工资','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('161','网站','0','1','1','','3');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('162','行为','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('163','跳槽','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('164','参考','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('165','婚庆','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('166','三大','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('167','瓜分','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('168','天下','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('169','前景','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('170','巨大','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('171','大四','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('172','女生','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('173','求职','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('174','专职','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('175','太太','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('176','上海','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('177','车展','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('178','车模','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('179','曝光','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('180','长成','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('181','这样','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('182','女性','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('183','文胸','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('184','产品质量','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('185','状况','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('186','长城','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('187','测量','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('188','最新','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('189','数据','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('190','发布','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('191','长度','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('192','8851.8千米','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('193','eBay','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('194','重金','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('195','Gmarket','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('196','意在','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('197','重返','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('198','通信','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('199','管理局','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('200','代办','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('201','备案','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('202','违规','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('203','成都','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('204','夫妇','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('205','投资','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('206','回报','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('207','被骗','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('208','64万元','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('209','移动','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('210','OPhone手机','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('211','5月','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('212','面市','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('213','对抗','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('214','iPhone','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('215','戴志康','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('216','一样','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('217','创业','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('218','年轻人','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('219','浮躁','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('220','暴雪','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('221','基于','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('222','财务','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('223','原因','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('224','网易','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('225','每年','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('226','9000万','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('227','一季度','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('228','网民','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('229','新增','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('230','1620万人','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('231','总数','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('232','3.16亿','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('233','东芝','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('234','遭遇','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('235','公司','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('236','历史','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('237','最大','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('238','亏损','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('239','约合','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('240','35亿美元','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('241','韩国','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('242','购物网站','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('243','走出','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('244','阴影','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('245','产品','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('246','经理','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('247','今生','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('248','职业规划','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('249','殡仪馆','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('250','弄错','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('251','遗体','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('252','姐弟','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('253','赔偿','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('254','1.2万元','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('255','发现','0','1','1','','2');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('256','两千','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('257','年前','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('258','战国','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('259','晚期','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('260','王陵','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('261','美国','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('262','母亲','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('263','提取','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('264','精子','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('265','香火','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('266','老汉','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('267','自称','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('268','保持','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('269','性生活','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('270','老太','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('271','一分钟','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('272','女孩','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('273','感冒','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('274','后变身','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('275','蛇娃','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('276','蠕动','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('277','爬行','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('278','哈尔滨','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('279','工地','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('280','国内','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('281','太岁','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('282','重达','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('283','130','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('284','公斤','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('285','农夫','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('286','千万','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('287','大奖','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('288','厄运','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('289','缠身','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('290','破产','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('291','孙子','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('292','枪杀','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('293','高三','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('294','跳楼','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('295','自杀','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('296','获救','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('297','自己','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('298','实在','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('299','小伙','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('300','彩票','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('301','中奖','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('302','酗酒','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('303','车祸','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('304','植物人','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('305','未了','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('306','抢救','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('307','希望','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('308','尊严','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('309','离去','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('310','义气','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('311','豪爽','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('312','结果','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('313','喝酒','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('314','膀胱','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('315','炸掉','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('316','失调','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('317','女子','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('318','举步维艰','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('319','老翁','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('320','强奸','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('321','智障','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('322','邻居','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('323','怀孕','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('324','调查','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('325','岁至','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('326','27.3%','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('327','人流','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('328','万科','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('329','员工','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('330','自焚','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('331','不满','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('332','离职','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('333','金过低','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('334','莫斯科','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('335','街头','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('336','流氓','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('337','轮奸','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('338','抢劫','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('339','盖茨','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('340','NBA','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('341','姚明','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('342','fdsfdsa','0','1','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('343','刘德华','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('344','软硬兼施','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('345','助力','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('346','企业','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('347','信息化','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('348','---------','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('349','携手','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('350','4月','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('351','20日','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('352','期间','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('353','官方','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('354','第二','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('355','现场','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('356','暗暗','0','7','1','','0');
INSERT INTO `{$tbl_prefix}keyword` VALUES ('357','每一个站长都可以做一','0','1','1','','1');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('1','529');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('2','529');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('3','530');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('2','530');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('4','531');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('5','531');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('6','531');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('7','531');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('8','531');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('9','531');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('9','532');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('10','532');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('13','535');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('14','535');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('15','535');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('16','536');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('17','536');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('18','536');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('19','536');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('20','537');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('21','537');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('22','537');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('23','537');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('24','537');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('25','538');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('26','538');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('27','538');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('28','539');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('29','539');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('30','539');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('28','540');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('31','540');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('27','540');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('28','541');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('32','541');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('27','541');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('343','601');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('345','603');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('339','542');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('37','544');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('38','544');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('39','544');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('40','545');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('41','545');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('42','545');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('43','545');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('44','545');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('28','546');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('45','546');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('46','546');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('47','546');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('48','546');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('49','546');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('50','546');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('51','547');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('52','547');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('53','547');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('54','547');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('55','547');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('56','547');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('57','547');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('58','547');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('59','548');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('60','548');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('61','548');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('62','548');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('63','548');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('357','549');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('69','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('70','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('48','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('71','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('72','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('73','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('74','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('75','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('76','550');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('77','551');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('78','551');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('79','551');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('80','551');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('81','551');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('82','551');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('83','551');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('84','552');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('85','552');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('86','552');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('87','552');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('88','552');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('89','552');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('90','552');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('91','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('45','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('92','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('93','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('94','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('95','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('96','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('97','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('86','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('98','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('99','553');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('100','554');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('101','554');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('102','554');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('103','555');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('104','555');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('105','555');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('106','555');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('107','556');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('108','556');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('109','556');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('51','557');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('110','557');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('111','557');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('112','557');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('113','557');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('114','557');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('115','557');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('116','558');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('117','558');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('118','558');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('119','558');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('120','558');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('121','558');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('122','559');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('123','559');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('124','559');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('125','559');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('126','559');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('73','560');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('127','560');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('43','560');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('128','560');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('129','560');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('130','561');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('131','561');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('132','561');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('133','561');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('134','561');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('135','561');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('136','561');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('137','562');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('131','562');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('138','562');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('19','562');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('139','562');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('140','562');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('141','562');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('131','563');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('142','563');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('143','563');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('144','563');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('145','563');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('146','563');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('147','564');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('148','564');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('143','564');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('133','565');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('149','565');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('150','565');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('151','565');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('91','565');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('152','565');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('153','566');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('93','566');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('154','566');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('32','566');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('155','566');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('150','567');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('156','567');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('157','567');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('158','567');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('159','567');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('160','568');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('161','568');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('162','568');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('163','568');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('164','568');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('165','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('51','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('166','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('80','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('167','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('168','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('87','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('169','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('170','569');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('171','570');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('172','570');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('173','570');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('174','570');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('175','570');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('176','571');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('177','571');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('178','571');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('179','571');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('180','571');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('181','571');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('182','572');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('152','572');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('183','572');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('184','572');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('185','572');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('186','573');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('187','573');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('188','573');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('189','573');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('190','573');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('191','573');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('192','573');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('193','574');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('194','574');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('195','574');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('196','574');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('197','574');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('86','574');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('150','574');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('87','574');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('198','575');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('199','575');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('200','575');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('161','575');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('201','575');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('202','575');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('203','576');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('204','576');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('205','576');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('206','576');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('161','576');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('207','576');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('208','576');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('209','577');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('210','577');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('211','577');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('212','577');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('213','577');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('214','577');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('215','578');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('216','578');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('217','578');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('218','578');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('219','578');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('220','579');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('221','579');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('222','579');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('223','579');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('224','579');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('225','579');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('226','579');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('227','580');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('86','580');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('228','580');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('229','580');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('230','580');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('231','580');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('232','580');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('233','581');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('234','581');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('235','581');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('236','581');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('237','581');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('238','581');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('239','581');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('240','581');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('241','582');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('242','582');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('243','582');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('51','582');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('244','582');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('245','583');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('246','583');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('247','583');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('248','583');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('249','584');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('250','584');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('251','584');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('252','584');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('253','584');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('254','584');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('86','585');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('255','585');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('256','585');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('257','585');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('258','585');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('259','585');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('260','585');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('261','586');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('262','586');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('263','586');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('264','586');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('265','586');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('266','587');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('267','587');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('268','587');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('269','587');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('270','588');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('271','588');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('272','589');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('273','589');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('274','589');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('275','589');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('276','589');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('277','589');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('278','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('279','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('255','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('280','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('237','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('281','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('282','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('283','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('284','590');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('285','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('286','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('287','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('288','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('289','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('205','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('290','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('291','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('292','591');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('293','592');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('172','592');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('294','592');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('295','592');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('296','592');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('297','592');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('298','592');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('299','593');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('300','593');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('301','593');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('302','593');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('303','593');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('304','593');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('305','594');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('306','594');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('307','594');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('308','594');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('309','594');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('310','595');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('311','595');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('312','595');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('313','595');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('314','595');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('315','595');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('316','596');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('317','596');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('318','596');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('319','597');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('320','597');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('321','597');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('322','597');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('323','597');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('324','598');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('86','598');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('325','598');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('182','598');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('326','598');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('327','598');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('147','599');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('328','599');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('329','599');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('330','599');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('331','599');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('332','599');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('333','599');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('334','600');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('133','600');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('335','600');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('336','600');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('337','600');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('338','600');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('344','603');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('346','603');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('347','603');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('348','603');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('189','603');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('349','603');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('28','603');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('350','604');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('351','604');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('352','604');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('45','604');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('353','604');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('114','604');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('28','604');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('354','604');
INSERT INTO `{$tbl_prefix}keywordid` VALUES ('355','604');
INSERT INTO `{$tbl_prefix}limitword` VALUES ('1','造反','造**');
INSERT INTO `{$tbl_prefix}limitword` VALUES ('2','法轮功','法**功');
INSERT INTO `{$tbl_prefix}ad` VALUES ('1','article_list','文章列表页侧面广告','code','0','0','0','a:5:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:0:\"\";s:7:\"linkurl\";s:0:\"\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:862:\"<div style=\"LINE-HEIGHT: 150%\"><a href=\"http://www.jdu.cc/\" target=_blank>九度信息,商务信息发布平台!</a><br /><a href=\"http://www.dxcz.cn/download/\" target=_blank>苏科版数学资源 </a><br /><a href=\"http://www.cucoclub.cn/\" target=_blank>酷库网</a>&nbsp;<br /><a href=\"http://www.wfseo.org/\" target=_blank>重庆网站优化</a> <br /><a href=\"http://www.0354e.com/\" target=_blank><font color=#ff0000>晋中e时代</font> </a>&nbsp; <a href=\"http://chuangtoucn.com/\" target=_blank>龙城创投网</a><br /><a href=\"http://www.nj89.com/\" target=_blank>美食园</a><br /><a href=\"http://www.dooyes.com/\" target=_blank>DooYeS 度易</a><br /><a href=\"http://www.ncshh.com/\" target=_blank>南充生活网-基于PHP168构建</a> <br /><a href=\"http://www.tz0632.com/\" target=_blank>滕州城市网</a>　<br /><a href=\"http://www.doubar.com/\" target=_blank>豆吧</a><br /><a href=\"http://3cq.org/\" target=_blank>重庆幼儿教育 一切为了我们的孩子</a></div>\";}','0','0','0','0','0','5','0','1','../do/job.php?job=jump&pagetype=list');
INSERT INTO `{$tbl_prefix}ad` VALUES ('10','article_content','文章内容里边的广告','pic','1','0','0','a:8:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:32:\"other/1_20090326120324_mnfIi.jpg\";s:7:\"linkurl\";s:22:\"http://www.php168.com/\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";s:9:\"pictarget\";s:5:\"blank\";}','0','0','0','0','0','5','1','1','../do/job.php?job=jump&pagetype=bencandy');
INSERT INTO `{$tbl_prefix}ad` VALUES ('2','article_show','文章内容页侧边下方广告','code','0','0','0','a:5:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:0:\"\";s:7:\"linkurl\";s:0:\"\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:1782:\"<div style=\"LINE-HEIGHT: 150%\"><a href=\"http://www.zxx6.com/\" target=_blank><font color=#ff0000><strong>站长学习网</strong></font></a> 　　<a href=\"http://www.angelyyl.cn/\" target=_blank>冰蓝世界</a><a href=\"http://www.czin.cn/\" target=_blank><br />崇左热线—崇左人的网上家园</a> <br /><a href=\"http://www.sy50.com/\" target=_blank>邵阳网邻 了解邵阳 商务邵阳</a> <br /><a href=\"http://www.771881.cn/\" target=_blank>亲亲你抱抱你-国际女同拉拉网-败家女网站 </a><br /><a href=\"http://www.aihut.com/\" target=_blank>情感小筑原创情感文章网 </a><br /><a href=\"http://www.popyule.com/\" target=_blank>泡泡娱乐网--娱乐综合站PHP168构建</a> <br /><a href=\"http://www.china551.cn/\" target=_blank><font color=#ff0000>高中物理网</font></a> 　　<a href=\"http://www.ym988.com/\" target=_blank>圆梦模板工作室 </a><br /><a href=\"http://www.welights.com/\" target=_blank>国际灯具网</a> 　　<a href=\"http://www.hnmssy.cn/\" target=_blank>湖南民俗摄影网</a> <br /><a href=\"http://www.nuoyue.net/\" target=_blank><font color=#ff0000>诺跃站长社区 - 站长、菜鸟学习的好地方</font></a> <br /><a href=\"http://www.qzfl.com/\" target=_blank>泉州分类 连接泉州信息，服务百姓生活</a> <br /><a href=\"http://www.stmsn.com/\" target=_blank>中国内衣联盟</a> 　　<a href=\"http://www.downcc.cn/\" target=_blank>大当家软件站 </a><br /><a href=\"http://www.yt12333.cn/\" target=_blank>劳动社保之家-盐亭劳动保障网</a> <br /><a href=\"http://www.gooyi.cn/\" target=_blank>广易网 - 广州最大门户网 </a><br /><a href=\"http://www.idercn.com/\" target=_blank>I.D.部落</a> 　　<a href=\"http://www.tz0632.com/\" target=_blank>滕州城市网</a> 　　<a href=\"http://www.doubar.com/\" target=_blank>豆吧 </a></div>\r\n<div style=\"LINE-HEIGHT: 150%\"><a href=\"http://www.wfseo.org/\" target=_blank><font color=#d2691e>重庆网站优化</font><br /></a><br /></div>\";}','0','0','0','0','0','5','0','1','../do/job.php?job=jump&pagetype=bencandy');
INSERT INTO `{$tbl_prefix}ad` VALUES ('11','digg_list','顶客排行榜侧边广告','code','0','0','0','a:5:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:0:\"\";s:7:\"linkurl\";s:0:\"\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:813:\"<div style=\"LINE-HEIGHT: 200%\"><a href=\"http://www.ibioo.com/\" target=_blank><font color=#ff0000>绿谷生物网--打造最具活力生物站!</font> </a><br /><a href=\"http://www.51solo.net/\" target=_blank>搜罗娱乐门户－精彩娱乐生活从我开始 </a><br /><a href=\"http://1.com/45/admin/www.china-highway.com\" target=_blank>方向和路线尽在中国高速公路网 </a><br /><a href=\"http://www.nenbei.com/\" target=_blank><font color=#ff0000>嫩北聚合娱乐网欢迎您的到来 </font></a><br /><a href=\"http://www.liuv.net/\" target=_blank><font color=#ff0000>流水设计</font></a> <br /><a href=\"http://www.fming.net/\" target=_blank>蜂鸣原创 文学与摄影的创作平台 </a><br /><a href=\"http://www.netchinatown.com/\" target=_blank>时尚唐城-海外华人精英的网络家园 </a><br /><a href=\"http://frp.ok586.cn/\" target=_blank>上海玻璃钢冷却塔专业生产厂家. </a></div>\";}','0','0','0','0','0','5','0','1','../do/digg.php');
INSERT INTO `{$tbl_prefix}ad` VALUES ('19','list_page_topad','列表页侧边顶部广告位','pic','0','0','0','a:8:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:13:\"ad/listad.jpg\";s:7:\"linkurl\";s:22:\"http://www.yeepay.com/\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:0:\"\";s:5:\"width\";s:3:\"290\";s:6:\"height\";s:3:\"130\";s:9:\"pictarget\";s:5:\"blank\";}','0','0','0','2','0','10','1','1','../do/job.php?job=jump&pagetype=list');
INSERT INTO `{$tbl_prefix}ad` VALUES ('18','show_topad','内容页顶部横幅广告','pic','0','0','0','a:8:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:18:\"ad/ad_show_top.jpg\";s:7:\"linkurl\";s:22:\"http://www.yeepay.com/\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:0:\"\";s:5:\"width\";s:3:\"990\";s:6:\"height\";s:2:\"60\";s:9:\"pictarget\";s:5:\"blank\";}','0','0','0','0','0','10','1','1','../do/job.php?job=jump&pagetype=bencandy');
INSERT INTO `{$tbl_prefix}ad` VALUES ('17','show_right_top_picad','内容页侧边顶部图片广告位','pic','0','0','0','a:8:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:15:\"ad/qyshowad.jpg\";s:7:\"linkurl\";s:43:\"http://www.qy.com.cn/idc/product_double.asp\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:0:\"\";s:5:\"width\";s:3:\"290\";s:6:\"height\";s:3:\"110\";s:9:\"pictarget\";s:5:\"blank\";}','0','0','0','29','0','10','1','1','../do/job.php?job=jump&pagetype=bencandy');
INSERT INTO `{$tbl_prefix}ad` VALUES ('20','AD_list_topad','列表页顶部横幅广告','pic','0','0','0','a:8:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:14:\"ad/cnidca1.gif\";s:7:\"linkurl\";s:21:\"http://www.cnidc.com/\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:0:\"\";s:5:\"width\";s:3:\"990\";s:6:\"height\";s:2:\"60\";s:9:\"pictarget\";s:5:\"blank\";}','0','0','0','2','0','10','1','1','../do/list.php?fid=1');
INSERT INTO `{$tbl_prefix}ad` VALUES ('21','sp_show_ad','专题页广告位','code','0','0','0','a:5:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:0:\"\";s:7:\"linkurl\";s:0:\"\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:943:\"<div style=\"LINE-HEIGHT: 150%\"><a href=\"http://3cq.org/\" target=_blank>重庆幼儿教育 一切为了我们的孩子</a> <br /><a href=\"http://www.liuv.net/\" target=_blank>流水设计</a> <br /><a href=\"http://www.21yao.com/\" target=_blank>世纪医药网</a><br /><a href=\"http://www.fming.net/\" target=_blank>蜂鸣原创</a> <br /><a href=\"http://www.jnrx.net/\" target=_blank>胶南热线</a> <br /><a href=\"http://www.7mt.cn/\" target=_blank>骑摩托-中国第一摩托车互动媒体 </a><br /><a href=\"http://www.hnpolice.net/\" target=_blank>湖南公安高等专科学校校友会 </a><br /><a href=\"http://www.seo178.com/\" target=_blank>SEO培训选择--北京SEO培训中心</a> <br /><a href=\"http://www.51solo.net/\" target=_blank>品牌推广,SEO网站优化 </a><br /><a href=\"http://www.kljy.cn/\" target=_blank>致力于儿童教育 </a><br /><a href=\"http://www.eia8.com/job/\" target=_blank>中国环评吧招聘求职网</a> <br /><a href=\"http://www.wenzhang8.com/\" target=_blank>文章吧 打造最好经典文章网 </a>　 </div>\";}','0','0','0','0','0','0','0','1','../do/showsp.php?fid=1&id=23');
INSERT INTO `{$tbl_prefix}ad_user` VALUES ('1','10','1','admin','1','1238397241','1238483641','0','1','a:8:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:29:\"ad/1_20090330150357_lRNDT.jpg\";s:7:\"linkurl\";s:7:\"告网址:\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";s:9:\"pictarget\";s:5:\"blank\";}','0','5','1238397242');
INSERT INTO `{$tbl_prefix}sellad` VALUES ('3','顶客页竞价广告','0','0','50','5','8','36','1','../do/digg.php');
INSERT INTO `{$tbl_prefix}sellad_user` VALUES ('11','1','admin','1239277578','1239709578','50','3','1','http://www.php168.com/','P8官方站','0','','0');
INSERT INTO `{$tbl_prefix}sellad_user` VALUES ('12','1','admin','1239279810','1239711810','50','3','1','http://www.php168.com/bbs','P8官方论坛','0','','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('11','0','250','2','1','1237512023','article/2/1_20090320090320_3jfGd.jpg','1_20090320090320_3jfGd.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('31','0','524','16','1','1239776235','article/16/1_20090415140459_Kwcym.jpg','1_20090415140459_Kwcym.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('32','0','519','16','1','1239776346','article/16/1_20090415140452_ZsBYE.jpg','1_20090415140452_ZsBYE.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('12','0','250','2','1','1237512076','article/2/1_20090320090315_tIIGD.jpg','1_20090320090315_tIIGD.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('13','0','250','2','1','1237512135','article/2/1_20090320090313_hsnnK.jpg','1_20090320090313_hsnnK.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('33','0','522','16','1','1239778035','article/16/1_20090415140414_kv5WX.jpg','1_20090415140414_kv5WX.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('30','0','523','16','1','1239776169','article/16/1_20090415140405_ClADY.jpg','1_20090415140405_ClADY.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('16','0','252','2','1','1238136594','article/2/1_20090327140302_5jwyJ.jpg','1_20090327140302_5jwyJ.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('17','0','252','2','1','1238136594','article/2/1_20090327140345_os9zz.jpg','1_20090327140345_os9zz.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('18','0','252','2','1','1238136594','article/2/1_20090327140314_6eB5d.jpg','1_20090327140314_6eB5d.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('19','0','252','2','1','1238136594','article/2/1_20090327140347_1ZFpJ.jpg','1_20090327140347_1ZFpJ.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('34','0','521','16','1','1239778082','article/16/1_20090415140400_cbwQO.jpg','1_20090415140400_cbwQO.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('35','0','520','16','1','1239778105','article/16/1_20090415140423_bYWny.jpg','1_20090415140423_bYWny.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('36','0','523','16','1','1239781923','article/16/1_20090415150402_lAoUv.jpg','1_20090415150402_lAoUv.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('37','0','99','10','1','1239782489','article/10/1_20090415160410_LGA3n.jpg','1_20090415160410_LGA3n.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('49','0','531','10','1','1239785963','photo/10/1_20090415160401_XMXbb.jpg','1_20090415160401_XMXbb.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('50','0','531','10','1','1239785963','photo/10/1_20090415160416_qs6Mj.jpg','1_20090415160416_qs6Mj.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('24','0','256','2','1','1238145853','article/2/1_20090327170313_JUQ0JUYzJUNDJUVGJUJDJUQzJUM4JUVCU09IVQ==.rm','1_20090327170313_JUQ0JUYzJUNDJUVGJUJDJUQzJUM4JUVCU09IVQ==.rm','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('25','0','256','2','1','1238146349','article/2/1_20090327170319_JUQ0JUYzJUNDJUVGLSVENiVFRCVDOCVFMiVDRCVGNSVENyVEMw==.wmv','1_20090327170319_JUQ0JUYzJUNDJUVGLSVENiVFRCVDOCVFMiVDRCVGNSVENyVEMw==.wmv','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('54','0','532','10','1','1239786083','photo/10/1_20090415170419_IxNF1.jpg','1_20090415170419_IxNF1.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('47','0','529','18','1','1239785318','article/18/1_20090415160423_hJmPv.jpg','1_20090415160423_hJmPv.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('48','0','530','18','1','1239785442','article/18/1_20090415160450_9OWGl.jpg','1_20090415160450_9OWGl.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('51','0','531','10','1','1239785963','article/10/1_20090415160401_XMXbb.jpg.jpg','1_20090415160401_XMXbb.jpg.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('52','0','531','10','1','1239786004','article/10/1_20090415160450_bEErL.jpg','1_20090415160450_bEErL.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('53','0','532','10','1','1239786083','photo/10/1_20090415170406_X57YC.jpg','1_20090415170406_X57YC.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('55','0','532','10','1','1239786083','article/10/1_20090415170437_jCYhW.jpg','1_20090415170437_jCYhW.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('58','0','542','14','1','1239789693','article/14/1_20090415180416_EPT7r.jpg','1_20090415180416_EPT7r.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('59','0','550','32','1','1240051050','article/32/1_20090418180444_f8mDG.jpg','1_20090418180444_f8mDG.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('60','0','550','32','1','1240051050','article/32/1_20090418180412_jK2np.jpg','1_20090418180412_jK2np.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('61','0','550','32','1','1240051050','article/32/1_20090418180427_C2M5c.gif','1_20090418180427_C2M5c.gif','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('62','0','551','33','1','1240051810','article/33/1_20090418180407_R7sr3.jpg','1_20090418180407_R7sr3.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('63','0','551','33','1','1240051810','article/33/1_20090418180408_4qNJ4.jpg','1_20090418180408_4qNJ4.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('64','0','552','33','1','1240052014','article/33/1_20090418180432_EwElB.jpg','1_20090418180432_EwElB.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('65','0','552','33','1','1240052093','article/33/1_20090418180438_vPiyT.jpg','1_20090418180438_vPiyT.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('66','0','553','33','1','1240052564','article/33/1_20090418190417_93pys.jpg','1_20090418190417_93pys.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('67','0','553','33','1','1240052564','article/33/1_20090418190427_FSk2e.jpg','1_20090418190427_FSk2e.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('68','0','553','33','1','1240052564','article/33/1_20090418190453_qabKt.jpg','1_20090418190453_qabKt.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('69','0','554','33','1','1240057138','article/33/1_20090418200452_bsk1Z.jpg','1_20090418200452_bsk1Z.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('70','0','554','33','1','1240057138','article/33/1_20090418200432_5ZUc2.jpg','1_20090418200432_5ZUc2.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('71','0','555','33','1','1240057438','article/33/1_20090418200404_25EwL.gif','1_20090418200404_25EwL.gif','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('72','0','555','33','1','1240057719','article/33/1_20090418200416_Fs7xV.gif','1_20090418200416_Fs7xV.gif','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('73','0','556','33','1','1240059129','article/33/1_20090418200406_BlSMk.jpg','1_20090418200406_BlSMk.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('74','0','556','33','1','1240059129','article/33/1_20090418200441_Zm9oq.jpg','1_20090418200441_Zm9oq.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('75','0','557','34','1','1240060838','article/34/1_20090418210424_cSiW4.jpg','1_20090418210424_cSiW4.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('76','0','557','34','1','1240060838','article/34/1_20090418210432_gxpxf.jpg','1_20090418210432_gxpxf.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('150','0','542','14','1','1240193637','article/14/1_20090420100452_yuW0C.jpg','1_20090420100452_yuW0C.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('79','0','558','34','1','1240061182','article/34/1_20090418210417_0zeUI.jpg','1_20090418210417_0zeUI.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('80','0','558','34','1','1240061182','article/34/1_20090418210428_ir037.jpg','1_20090418210428_ir037.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('158','0','560','34','1','1240196570','article/34/1_20090420110424_5lRC8.jpg','1_20090420110424_5lRC8.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('153','0','601','14','1','1240195173','article/14/1_20090420100416_nC0fV.jpg','1_20090420100416_nC0fV.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('84','0','558','34','1','1240061465','article/34/1_20090418210402_HCZAE.jpg','1_20090418210402_HCZAE.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('85','0','558','34','1','1240061465','article/34/1_20090418210441_CnVlB.jpg','1_20090418210441_CnVlB.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('156','0','558','34','1','1240196029','article/34/1_20090420100428_EF2Hc.jpg','1_20090420100428_EF2Hc.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('89','0','559','34','1','1240061760','article/34/1_20090418210411_MAuzU.jpg','1_20090418210411_MAuzU.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('90','0','559','34','1','1240061760','article/34/1_20090418210415_iM0Xb.jpg','1_20090418210415_iM0Xb.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('91','0','559','34','1','1240061760','article/34/1_20090418210444_jnTex.jpg','1_20090418210444_jnTex.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('96','0','560','34','1','1240062925','article/34/1_20090418210456_2Vexh.gif','1_20090418210456_2Vexh.gif','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('97','0','560','34','1','1240062925','article/34/1_20090418210410_CH9Ep.gif','1_20090418210410_CH9Ep.gif','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('98','0','560','34','1','1240062925','article/34/1_20090418210434_LXSTx.jpg','1_20090418210434_LXSTx.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('173','0','558','34','1','1240209223','article/34/1_20090420140400_NQScG.jpg','1_20090420140400_NQScG.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('174','0','558','34','1','1240209223','article/34/1_20090420140423_3KPFH.jpg','1_20090420140423_3KPFH.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('177','0','605','10','7','1240211765','article/10/7_20090420150417_MDklQzQlRUElQzclRTUlQzMlRjc=.rar','7_20090420150417_MDklQzQlRUElQzclRTUlQzMlRjc=.rar','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('112','0','561','37','1','1240115586','article/37/1_20090419120400_f272L.jpg','1_20090419120400_f272L.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('115','0','563','37','1','1240115821','article/37/1_20090419120440_GcPMs.jpg','1_20090419120440_GcPMs.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('116','0','563','37','1','1240115821','article/37/1_20090419120452_fSki9.jpg','1_20090419120452_fSki9.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('121','0','564','37','1','1240115997','article/37/1_20090419120444_egkjF.jpg','1_20090419120444_egkjF.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('122','0','564','37','1','1240115997','article/37/1_20090419120457_9XlUz.jpg','1_20090419120457_9XlUz.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('123','0','564','37','1','1240115997','article/37/1_20090419120410_7NzLo.jpg','1_20090419120410_7NzLo.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('124','0','564','37','1','1240115997','article/37/1_20090419120426_Lbt8g.jpg','1_20090419120426_Lbt8g.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('138','0','578','39','1','1240127959','article/39/1_20090419150430_a2XoC.jpg','1_20090419150430_a2XoC.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('140','0','583','4','1','1240128744','article/4/1_20090419160422_PjOh8.jpg','1_20090419160422_PjOh8.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('142','0','588','35','1','1240129508','article/35/1_20090419160452_PnNPa.jpg','1_20090419160452_PnNPa.jpg','1','0');
INSERT INTO `{$tbl_prefix}upfile` VALUES ('144','0','596','3','1','1240129804','article/3/1_20090419160400_W3bnb.jpg','1_20090419160400_W3bnb.jpg','1','0');
INSERT INTO `{$tbl_prefix}vote` VALUES ('37','6','熊晓鸽','4','10','','','');
INSERT INTO `{$tbl_prefix}vote` VALUES ('38','6','马化腾','4','7','','','');
INSERT INTO `{$tbl_prefix}vote` VALUES ('39','6','马云','2','5','','','');
INSERT INTO `{$tbl_prefix}vote` VALUES ('41','6','李彦宏','6','6','','','');
INSERT INTO `{$tbl_prefix}vote` VALUES ('81','11','阿里妈妈和淘宝合并','0','4','vote/1_20090418220434_DSazk.jpg','','http://www.admin5.com/article/20081231/124093.shtml');
INSERT INTO `{$tbl_prefix}vote` VALUES ('80','11','Chinaz之CNIDC主机网上线','0','9','vote/1_20090419090435_51j39.jpg','','http://www.admin5.com/article/20081231/124093.shtml');
INSERT INTO `{$tbl_prefix}vote` VALUES ('68','6','丁磊','12','9','','','');
INSERT INTO `{$tbl_prefix}vote` VALUES ('70','10','百度粉丝团','4','0','vote/1_20090317160304_1cyPh.gif','我是百度粉丝团','http://www.baidu.com');
INSERT INTO `{$tbl_prefix}vote` VALUES ('71','10','谷歌粉丝团','1','0','vote/1_20090317160317_NO50S.gif','我是谷歌粉丝团','http://www.google.cn');
INSERT INTO `{$tbl_prefix}vote` VALUES ('72','11','博客已死，SNS当立','1','8','vote/1_20090419090425_nkqeB.jpg','','http://www.admin5.com/article/20081231/124093.shtml');
INSERT INTO `{$tbl_prefix}vote` VALUES ('73','11','CN域名白菜到猪肉','1','10','vote/1_20090419090455_L5Iz8.jpg','','http://www.admin5.com/article/20081231/124093.shtml');
INSERT INTO `{$tbl_prefix}vote` VALUES ('74','11','九九音乐网倒闭','0','3','vote/1_20090419090414_BVe9o.jpg','','http://www.admin5.com/article/20081231/124093.shtml');
INSERT INTO `{$tbl_prefix}vote` VALUES ('75','11','番茄花园被告','2','6','vote/1_20090419090445_qQiaW.jpg','','http://www.admin5.com/article/20081231/124093.shtml');
INSERT INTO `{$tbl_prefix}vote` VALUES ('76','11','红火的全国站长大会','2','5','vote/1_20090419090445_QVf6M.jpg','','http://www.admin5.com/article/20081231/124093.shtml');
INSERT INTO `{$tbl_prefix}vote` VALUES ('77','11','丁磊养猪','0','7','vote/1_20090419090459_1MkWx.jpg','','http://bbs.chinaz.com/Shuiba/thread-1240750-1-1.html');
INSERT INTO `{$tbl_prefix}vote_comment` VALUES ('11','10','0','1','admin','1237279209','rrrrrrrrrrrrrrr','192.168.0.99','0','1');
INSERT INTO `{$tbl_prefix}vote_comment` VALUES ('12','10','0','1','admin','1237279223','dddddddddddddddd','192.168.0.99','0','1');
INSERT INTO `{$tbl_prefix}vote_comment` VALUES ('13','6','0','1','admin','1239025838','式&nbsp;(6)','127.0.0.1','0','1');
INSERT INTO `{$tbl_prefix}vote_comment` VALUES ('14','6','0','1','admin','1239025849','&nbsp;证&nbsp;码:','127.0.0.1','0','1');
INSERT INTO `{$tbl_prefix}vote_comment` VALUES ('15','6','0','0','匿名','1239026013','fdsafdsa','127.0.0.1','0','1');
INSERT INTO `{$tbl_prefix}vote_comment` VALUES ('16','6','0','0','匿名','1239026039','erwqrewqrewqrewq','127.0.0.1','0','1');
INSERT INTO `{$tbl_prefix}vote_comment` VALUES ('17','11','0','1','admin','1240210841','非常好','192.168.0.99','0','1');
INSERT INTO `{$tbl_prefix}vote_comment` VALUES ('19','11','0','1','admin','1240210890','不错呀','192.168.0.99','0','1');
INSERT INTO `{$tbl_prefix}vote_config` VALUES ('6','互联网哪些前辈是你支持的','互联网哪些前辈是你支持和影响到你的？','2','600','0','','1164793927','','1233749543','1265256743','0','1','<div class=\"voteid\" title=\"$describes\">{$button}{$title}({$votenum})</div>','0','0','0');
INSERT INTO `{$tbl_prefix}vote_config` VALUES ('11','2008年中国站长十大热门事件投票','-------请为你觉得2008年最热门的站长事件投上一票.','2','500','0','','1237281523','','1233749543','1580789543','0','1','<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"width:118px;float:left;margin-top:4px;\" class=\"voteid\">\r\n  <tr> \r\n    <td align=\"center\"><A HREF=\"$url\" target=\"_blank\" style=\"border:1px solid #ccc;display:block;width:100px;height:75px;\"><img alt=\"{$title}\" style=\"border:1px solid #fff;\" src=\"$img\" border=\"0\" width=\"100\" height=\"75\"></A></td>\r\n  </tr>\r\n  <tr> \r\n    <td align=\"center\">\r\n      <div  style=\"width:110px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;\">{$button}(<b><font color=\"#FF0000\" >{$votenum}</font></b>)<a HREF=\"$url\" target=\"_blank\" title=\"{$title}\">{$title}</a></div>\r\n    </td>\r\n  </tr>\r\n  <tr> \r\n    <td>{$describes}</td>\r\n  </tr>\r\n  <tr> \r\n    <td></td>\r\n  </tr>\r\n</table>\r\n\r\n','1','0','0');
INSERT INTO `{$tbl_prefix}vote_config` VALUES ('10','哪个搜索引擎好?','你喜欢使用哪个搜索引擎呢,请投上一票?','1','15','0','','1237275830','','0','0','0','1','<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"width:90px;float:left;\">\r\n  <tr> \r\n    <td align=\"center\" valign=\"middle\" style=\"line-height:40px;\"> <a href=\"$url\" target=_blank> \r\n      <b>$title</b></a> </td>\r\n  </tr>\r\n  <tr> \r\n    <td align=\"center\"><a href=\"$url\" target=\"_blank\"><img alt=\"$describes\" src=\"$img\" width=\"80\" height=\"30\" border=\"0\"></a></td>\r\n  </tr>\r\n  <tr> \r\n    <td align=\"center\" style=\"line-height:20px;\"> <font color=\"#990000\">共 <b><font color=\"#FF0000\">$votenum</font> 票 \r\n      </b></font></td>\r\n  </tr>\r\n  <tr> \r\n    <td align=\"center\" style=\"line-height:40px;\"><a href=\"$webdb[www_url]/do/vote.php?action=vote&voteId=$id\" target=\"_blank\"><u>投一票</u></a> \r\n      <a href=\"$webdb[www_url]/do/vote.php?job=show&cid=$cid#postcomment\" target=\"_blank\"><u>评一评</u></a></td>\r\n  </tr>\r\n</table>','2','0','0');
INSERT INTO `{$tbl_prefix}area` VALUES ('1','0','北京市','1','18','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('2','0','上海市','1','19','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('3','0','天津市','1','18','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('4','0','重庆市','1','40','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('5','0','河北省','1','11','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('6','0','山西省','1','11','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('7','0','内蒙古自治区','1','12','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('8','0','辽宁省','1','14','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('9','0','吉林省','1','9','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('10','0','黑龙江省','1','13','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('11','0','江苏省','1','13','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('12','0','浙江省','1','11','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('13','0','安徽省','1','17','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('14','0','福建省','1','9','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('15','0','江西省','1','11','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('16','0','山东省','1','17','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('17','0','河南省','1','17','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('18','0','湖北省','1','17','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('19','0','湖南省','1','14','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('20','0','广东省','1','21','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('21','0','广西壮族自治区','1','14','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('22','0','海南省','1','21','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('23','0','四川省','1','21','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('24','0','贵州省','1','9','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('25','0','云南省','1','16','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('26','0','西藏自治区','1','7','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('27','0','陕西省','1','10','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('28','0','甘肃省','1','14','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('29','0','青海省','1','8','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('30','0','宁夏回族自治区','1','5','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('31','0','新疆维吾尔自治区','1','18','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('32','0','台湾省','1','25','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('33','0','香港特别行政区','1','18','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('34','0','澳门特别行政区','1','5','1','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('35','1','东城区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('36','1','西城区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('37','1','崇文区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('38','1','宣武区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('39','1','朝阳区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('40','1','丰台区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('41','1','石景山区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('42','1','海淀区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('43','1','门头沟区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('44','1','房山区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('45','1','通州区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('46','1','顺义区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('47','1','昌平区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('48','1','大兴区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('49','1','怀柔区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('50','1','平谷区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('51','1','密云县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('52','1','延庆县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('53','2','黄浦区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('54','2','卢湾区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('55','2','徐汇区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('56','2','长宁区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('57','2','静安区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('58','2','普陀区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('59','2','闸北区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('60','2','虹口区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('61','2','杨浦区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('62','2','闵行区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('63','2','宝山区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('64','2','嘉定区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('65','2','浦东新区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('66','2','金山区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('67','2','松江区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('68','2','青浦区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('69','2','南汇区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('70','2','奉贤区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('71','2','崇明县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('72','3','和平区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('73','3','河东区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('74','3','河西区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('75','3','南开区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('76','3','河北区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('77','3','红桥区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('78','3','塘沽区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('79','3','汉沽区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('80','3','大港区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('81','3','东丽区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('82','3','西青区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('83','3','津南区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('84','3','北辰区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('85','3','武清区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('86','3','宝坻区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('87','3','宁河县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('88','3','静海县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('89','3','蓟县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('90','4','万州区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('91','4','涪陵区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('92','4','渝中区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('93','4','大渡口区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('94','4','江北区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('95','4','沙坪坝区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('96','4','九龙坡区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('97','4','南岸区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('98','4','北碚区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('99','4','万盛区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('100','4','双桥区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('101','4','渝北区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('102','4','巴南区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('103','4','黔江区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('104','4','长寿区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('105','4','綦江县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('106','4','潼南县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('107','4','铜梁县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('108','4','大足县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('109','4','荣昌县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('110','4','璧山县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('111','4','梁平县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('112','4','城口县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('113','4','丰都县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('114','4','垫江县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('115','4','武隆县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('116','4','忠县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('117','4','开县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('118','4','云阳县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('119','4','奉节县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('120','4','巫山县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('121','4','巫溪县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('122','4','石柱土家族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('123','4','秀山土家族苗族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('124','4','酉阳土家族苗族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('125','4','彭水苗族土家族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('126','4','江津市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('127','4','合川市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('128','4','永川市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('129','4','南川市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('130','5','石家庄市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('131','5','唐山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('132','5','秦皇岛市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('133','5','邯郸市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('134','5','邢台市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('135','5','保定市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('136','5','张家口市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('137','5','承德市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('138','5','沧州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('139','5','廊坊市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('140','5','衡水市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('141','6','太原市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('142','6','大同市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('143','6','阳泉市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('144','6','长治市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('145','6','晋城市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('146','6','朔州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('147','6','晋中市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('148','6','运城市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('149','6','忻州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('150','6','临汾市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('151','6','吕梁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('152','7','呼和浩特市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('153','7','包头市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('154','7','乌海市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('155','7','赤峰市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('156','7','通辽市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('157','7','鄂尔多斯市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('158','7','呼伦贝尔市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('159','7','巴彦淖尔市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('160','7','乌兰察布市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('161','7','兴安盟','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('162','7','锡林郭勒盟','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('163','7','阿拉善盟','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('164','8','沈阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('165','8','大连市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('166','8','鞍山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('167','8','抚顺市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('168','8','本溪市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('169','8','丹东市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('170','8','锦州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('171','8','营口市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('172','8','阜新市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('173','8','辽阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('174','8','盘锦市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('175','8','铁岭市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('176','8','朝阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('177','8','葫芦岛市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('178','9','长春市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('179','9','吉林市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('180','9','四平市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('181','9','辽源市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('182','9','通化市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('183','9','白山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('184','9','松原市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('185','9','白城市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('186','9','延边朝鲜族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('187','10','哈尔滨市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('188','10','齐齐哈尔市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('189','10','鸡西市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('190','10','鹤岗市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('191','10','双鸭山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('192','10','大庆市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('193','10','伊春市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('194','10','佳木斯市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('195','10','七台河市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('196','10','牡丹江市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('197','10','黑河市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('198','10','绥化市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('199','10','大兴安岭地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('200','11','南京市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('201','11','无锡市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('202','11','徐州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('203','11','常州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('204','11','苏州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('205','11','南通市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('206','11','连云港市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('207','11','淮安市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('208','11','盐城市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('209','11','扬州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('210','11','镇江市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('211','11','泰州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('212','11','宿迁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('213','12','杭州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('214','12','宁波市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('215','12','温州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('216','12','嘉兴市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('217','12','湖州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('218','12','绍兴市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('219','12','金华市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('220','12','衢州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('221','12','舟山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('222','12','台州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('223','12','丽水市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('224','13','合肥市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('225','13','芜湖市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('226','13','蚌埠市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('227','13','淮南市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('228','13','马鞍山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('229','13','淮北市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('230','13','铜陵市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('231','13','安庆市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('232','13','黄山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('233','13','滁州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('234','13','阜阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('235','13','宿州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('236','13','巢湖市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('237','13','六安市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('238','13','亳州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('239','13','池州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('240','13','宣城市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('241','14','福州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('242','14','厦门市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('243','14','莆田市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('244','14','三明市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('245','14','泉州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('246','14','漳州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('247','14','南平市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('248','14','龙岩市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('249','14','宁德市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('250','15','南昌市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('251','15','景德镇市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('252','15','萍乡市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('253','15','九江市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('254','15','新余市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('255','15','鹰潭市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('256','15','赣州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('257','15','吉安市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('258','15','宜春市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('259','15','抚州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('260','15','上饶市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('261','16','济南市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('262','16','青岛市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('263','16','淄博市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('264','16','枣庄市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('265','16','东营市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('266','16','烟台市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('267','16','潍坊市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('268','16','济宁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('269','16','泰安市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('270','16','威海市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('271','16','日照市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('272','16','莱芜市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('273','16','临沂市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('274','16','德州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('275','16','聊城市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('276','16','滨州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('277','16','荷泽市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('278','17','郑州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('279','17','开封市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('280','17','洛阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('281','17','平顶山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('282','17','安阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('283','17','鹤壁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('284','17','新乡市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('285','17','焦作市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('286','17','濮阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('287','17','许昌市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('288','17','漯河市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('289','17','三门峡市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('290','17','南阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('291','17','商丘市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('292','17','信阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('293','17','周口市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('294','17','驻马店市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('295','18','武汉市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('296','18','黄石市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('297','18','十堰市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('298','18','宜昌市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('299','18','襄樊市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('300','18','鄂州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('301','18','荆门市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('302','18','孝感市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('303','18','荆州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('304','18','黄冈市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('305','18','咸宁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('306','18','随州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('307','18','恩施土家族苗族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('308','18','仙桃市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('309','18','潜江市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('310','18','天门市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('311','18','神农架林区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('312','19','长沙市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('313','19','株洲市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('314','19','湘潭市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('315','19','衡阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('316','19','邵阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('317','19','岳阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('318','19','常德市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('319','19','张家界市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('320','19','益阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('321','19','郴州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('322','19','永州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('323','19','怀化市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('324','19','娄底市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('325','19','湘西土家族苗族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('326','20','广州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('327','20','韶关市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('328','20','深圳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('329','20','珠海市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('330','20','汕头市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('331','20','佛山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('332','20','江门市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('333','20','湛江市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('334','20','茂名市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('335','20','肇庆市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('336','20','惠州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('337','20','梅州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('338','20','汕尾市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('339','20','河源市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('340','20','阳江市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('341','20','清远市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('342','20','东莞市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('343','20','中山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('344','20','潮州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('345','20','揭阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('346','20','云浮市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('347','21','南宁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('348','21','柳州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('349','21','桂林市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('350','21','梧州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('351','21','北海市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('352','21','防城港市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('353','21','钦州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('354','21','贵港市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('355','21','玉林市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('356','21','百色市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('357','21','贺州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('358','21','河池市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('359','21','来宾市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('360','21','崇左市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('361','22','海口市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('362','22','三亚市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('363','22','五指山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('364','22','琼海市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('365','22','儋州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('366','22','文昌市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('367','22','万宁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('368','22','东方市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('369','22','定安县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('370','22','屯昌县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('371','22','澄迈县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('372','22','临高县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('373','22','白沙黎族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('374','22','昌江黎族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('375','22','乐东黎族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('376','22','陵水黎族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('377','22','保亭黎族苗族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('378','22','琼中黎族苗族自治县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('379','22','西沙群岛','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('380','22','南沙群岛','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('381','22','中沙群岛的岛礁及其海域','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('382','23','成都市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('383','23','自贡市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('384','23','攀枝花市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('385','23','泸州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('386','23','德阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('387','23','绵阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('388','23','广元市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('389','23','遂宁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('390','23','内江市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('391','23','乐山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('392','23','南充市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('393','23','眉山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('394','23','宜宾市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('395','23','广安市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('396','23','达州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('397','23','雅安市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('398','23','巴中市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('399','23','资阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('400','23','阿坝藏族羌族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('401','23','甘孜藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('402','23','凉山彝族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('403','24','贵阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('404','24','六盘水市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('405','24','遵义市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('406','24','安顺市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('407','24','铜仁地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('408','24','黔西南布依族苗族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('409','24','毕节地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('410','24','黔东南苗族侗族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('411','24','黔南布依族苗族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('412','25','昆明市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('413','25','曲靖市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('414','25','玉溪市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('415','25','保山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('416','25','昭通市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('417','25','丽江市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('418','25','思茅市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('419','25','临沧市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('420','25','楚雄彝族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('421','25','红河哈尼族彝族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('422','25','文山壮族苗族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('423','25','西双版纳傣族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('424','25','大理白族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('425','25','德宏傣族景颇族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('426','25','怒江傈僳族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('427','25','迪庆藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('428','26','拉萨市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('429','26','昌都地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('430','26','山南地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('431','26','日喀则地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('432','26','那曲地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('433','26','阿里地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('434','26','林芝地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('435','27','西安市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('436','27','铜川市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('437','27','宝鸡市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('438','27','咸阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('439','27','渭南市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('440','27','延安市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('441','27','汉中市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('442','27','榆林市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('443','27','安康市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('444','27','商洛市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('445','28','兰州市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('446','28','嘉峪关市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('447','28','金昌市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('448','28','白银市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('449','28','天水市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('450','28','武威市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('451','28','张掖市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('452','28','平凉市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('453','28','酒泉市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('454','28','庆阳市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('455','28','定西市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('456','28','陇南市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('457','28','临夏回族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('458','28','甘南藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('459','29','西宁市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('460','29','海东地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('461','29','海北藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('462','29','黄南藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('463','29','海南藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('464','29','果洛藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('465','29','玉树藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('466','29','海西蒙古族藏族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('467','30','银川市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('468','30','石嘴山市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('469','30','吴忠市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('470','30','固原市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('471','30','中卫市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('472','31','乌鲁木齐市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('473','31','克拉玛依市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('474','31','吐鲁番地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('475','31','哈密地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('476','31','昌吉回族自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('477','31','博尔塔拉蒙古自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('478','31','巴音郭楞蒙古自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('479','31','阿克苏地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('480','31','克孜勒苏柯尔克孜自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('481','31','喀什地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('482','31','和田地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('483','31','伊犁哈萨克自治州','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('484','31','塔城地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('485','31','阿勒泰地区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('486','31','石河子市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('487','31','阿拉尔市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('488','31','图木舒克市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('489','31','五家渠市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('490','32','台北市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('491','32','高雄市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('492','32','基隆市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('493','32','新竹市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('494','32','台中市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('495','32','嘉义市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('496','32','台南市','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('497','32','台北县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('498','32','桃园县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('499','32','新竹县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('500','32','苗栗县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('501','32','台中县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('502','32','彰化县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('503','32','南投县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('504','32','云林县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('505','32','嘉义县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('506','32','台南县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('507','32','高雄县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('508','32','屏东县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('509','32','宜兰县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('510','32','花莲县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('511','32','台东县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('512','32','澎湖县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('513','32','金门县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('514','32','连江县','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('515','33','中西区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('516','33','东区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('517','33','南区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('518','33','湾仔区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('519','33','九龙城区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('520','33','观塘区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('521','33','深水埗区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('522','33','黄大仙区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('523','33','油尖旺区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('524','33','离岛区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('525','33','葵青区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('526','33','北区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('527','33','西贡区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('528','33','沙田区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('529','33','大埔区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('530','33','荃湾区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('531','33','屯门区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('532','33','元朗区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('533','34','澳门市花地玛堂区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('534','34','澳门市圣安多尼堂区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('535','34','澳门市大堂区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('536','34','澳门市望德堂区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}area` VALUES ('537','34','澳门市风顺堂区','2','0','0','','0','0','','','','','','','0','','','0','','','','','0','');
INSERT INTO `{$tbl_prefix}jfabout` VALUES ('6','2','发表文章可得{$webdb[postArticleMoney]}个积分','只有审核后的文章才可得积分,没审核的文章不得积分.','0');
INSERT INTO `{$tbl_prefix}jfabout` VALUES ('7','2','删除文章扣除{$webdb[deleteArticleMoney]}个积分','','0');
INSERT INTO `{$tbl_prefix}jfabout` VALUES ('5','1','用户注册可得{$webdb[regmoney]}个积分','','0');
INSERT INTO `{$tbl_prefix}jfabout` VALUES ('8','2','文章被设置为精华可得{$webdb[comArticleMoney]}个积分','','0');
INSERT INTO `{$tbl_prefix}jfabout` VALUES ('9','1','每个点卡可兑换{$webdb[MoneyRatio]}个积分,点卡可以通过在线充值获得.','','0');
INSERT INTO `{$tbl_prefix}jfsort` VALUES ('1','会员中心','0');
INSERT INTO `{$tbl_prefix}jfsort` VALUES ('2','文章中心','0');
INSERT INTO `{$tbl_prefix}template` VALUES ('5','头部白板','7','template/default/none.htm','','0');
INSERT INTO `{$tbl_prefix}template` VALUES ('6','底部白板','8','template/default/none.htm','','0');
INSERT INTO `{$tbl_prefix}template` VALUES ('23','文章列表页(左宽右窄)','2','template/default/list.htm','','0');
INSERT INTO `{$tbl_prefix}template` VALUES ('22','内容页(左宽右窄)','3','template/default/bencandy.htm','','0');
INSERT INTO `{$tbl_prefix}template` VALUES ('24','主页(左宽右窄)','1','template/default/index.htm','','0');
INSERT INTO `{$tbl_prefix}template` VALUES ('20','内容页(上下型)','3','template/default/bencandy_tpl_2.htm','','0');
INSERT INTO `{$tbl_prefix}template` VALUES ('21','独立页','9','template/default/alonepage.htm','','0');
INSERT INTO `{$tbl_prefix}count_site` VALUES ('1','0','整站统计','0','0','0');
INSERT INTO `{$tbl_prefix}exam_form` VALUES ('2','1','3','初一数学期中考试','a:1:{s:5:\"fendb\";a:9:{i:1;s:1:\"2\";i:2;s:1:\"5\";i:3;s:1:\"8\";i:4;s:1:\"3\";i:5;s:1:\"6\";i:6;s:2:\"20\";i:7;s:1:\"4\";i:8;s:1:\"7\";i:9;s:2:\"30\";}}','1','admin','0');
INSERT INTO `{$tbl_prefix}exam_form` VALUES ('3','1','5','站长入门考试','a:1:{s:5:\"fendb\";a:8:{i:1;s:1:\"5\";i:2;s:2:\"10\";i:3;s:1:\"5\";i:4;s:2:\"15\";i:5;s:2:\"10\";i:6;s:1:\"5\";i:7;s:2:\"20\";i:9;s:2:\"30\";}}','1','admin','0');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('3','2','4','10');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('5','2','14','1');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('6','2','13','2');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('7','2','12','3');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('8','2','11','4');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('9','2','10','5');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('10','2','9','7');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('11','2','8','6');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('12','2','7','8');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('13','2','6','9');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('14','3','22','3');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('15','3','21','4');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('16','3','20','5');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('17','3','19','6');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('18','3','18','7');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('19','3','17','8');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('20','3','16','9');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('21','3','15','10');
INSERT INTO `{$tbl_prefix}exam_form_element` VALUES ('22','3','23','0');
INSERT INTO `{$tbl_prefix}exam_sort` VALUES ('1','0','初中生试卷','1','1','0','','0','0','','','','','','','0','','','0','','','','','0','a:4:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;}','','');
INSERT INTO `{$tbl_prefix}exam_sort` VALUES ('2','0','调查表','1','0','0','','0','0','','','','','N;','','0','','','0','','','','','0','a:4:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;}','','');
INSERT INTO `{$tbl_prefix}exam_sort` VALUES ('3','1','初一数学试卷','2','0','0','','0','0','','','','','N;','','0','','','0','','','','','0','a:4:{s:11:\"sonTitleRow\";N;s:12:\"sonTitleLeng\";N;s:9:\"cachetime\";N;s:12:\"sonListorder\";N;}','','');
INSERT INTO `{$tbl_prefix}exam_sort` VALUES ('4','0','互联网','1','1','1','','10','0','','','','','','','0','','','1','','','','','0','','','');
INSERT INTO `{$tbl_prefix}exam_sort` VALUES ('5','4','站长了解互联网的入门考试','2','0','0','','10','0','','','','','','','0','','','0','','','','','0','b:0;','','');
INSERT INTO `{$tbl_prefix}exam_student` VALUES ('3','6','222222','2','22','1239708826');
INSERT INTO `{$tbl_prefix}exam_student` VALUES ('4','7','333333','2','35','1239709420');
INSERT INTO `{$tbl_prefix}exam_student` VALUES ('9','1','admin','2','44','1239715061');
INSERT INTO `{$tbl_prefix}exam_student` VALUES ('10','1','admin','3','0','1240136249');
INSERT INTO `{$tbl_prefix}exam_student` VALUES ('11','7','abc','3','5','1240211380');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('11','4','3','2','5','1','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('12','14','3','2','rt\r\ntreytreh','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('13','13','3','2','ggggggggggggggggggggg','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('14','12','3','2','rrrrrrrrrr','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('15','11','3','2','10','20','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('16','10','3','2','5435','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('17','9','3','2','7','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('18','8','3','2','正确','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('19','7','3','2','2\n3','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('20','6','3','2','6','1','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('21','4','4','2','5','1','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('22','14','4','2','eeeeeeeeeeeeeeeeeeeeee','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('23','13','4','2','333333333333333','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('24','12','4','2','2','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('25','11','4','2','10','20','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('26','10','4','2','cbaed','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('27','9','4','2','7','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('28','8','4','2','错误','8','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('29','7','4','2','2\n3','5','55');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('30','6','4','2','6','1','t');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('161','6','9','2','6','1','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('160','7','9','2','2\n3','5','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('159','8','9','2','错误','8','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('158','9','9','2','7\n12\n14','3','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('157','10','9','2','cbaed','6','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('156','11','9','2','10','20','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('155','12','9','2','f','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('153','14','9','2','fwe','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('154','13','9','2','sfd','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('152','4','9','2','5','1','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('162','18','11','3','\n','0','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('163','15','11','3','熊晓鸽','5','');
INSERT INTO `{$tbl_prefix}exam_student_title` VALUES ('164','23','11','3','个人用户','0','');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('6','3','1','3+3=?','4\r\n5\r\n6\r\n7','6','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('4','3','1','2+3=?','2\r\n3\r\n4\r\n5','5','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('7','3','2','下面哪个是整数','2\r\n3\r\n4.5\r\n2.3','2,3','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('8','3','3','1+1=3是正确的吗?','正确\r\n错误','错误','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('9','3','4','3+4=<<<7>>>，3+9=<<<12>>>，5+9=<<<14>>>这三个等式都是加法运算。','','','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('10','3','5','请把以下数字由大到小排序','12\r\n23\r\n56\r\n3\r\n7','cbaed','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('11','3','6','1+2+3+4=?','','10','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('12','3','7','请例出小于10能被2整除的数?','','','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('13','3','8','请回答出什么叫整除?','','','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('14','3','9','请以\"小草\"写一篇文章','','','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('15','5','1','国际著名风险投资商IDG中国区总裁是谁？','秦刚\r\n熊晓鸽\r\n史玉柱\r\n孙正义','熊晓鸽','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('16','5','2','国内最著名的两大站长门户创始人是谁？','口碑网--马云\r\nchinaz--阿飞\r\n站长网--图王\r\n安捷居---郭吉军','chinaz--阿飞\r\n站长网--图王','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('17','5','3','PHP168  V6+ PHPwind 7.0高深度整合版，是否已经成为中国互联网平台中CMS+BBS的黄金组合？','正确\r\n错误','正确','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('18','5','4','最近准备去养一万头猪的是互联网CEO是<<< 丁磊>>>，而PHPWIND最近召开站长大会的地点在<<< 南京 >>>。','','','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('19','5','5','请把这些互联网领袖的年龄从大到小排序----直接填字母如abcdef：','马云.\r\n阿飞.\r\n李想\r\n王学集\r\n图王\r\n马化腾\r\n秦刚','adfebcd','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('20','5','6','1+1=','','2','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('21','5','7','www.ceodh.com--------CEO导航是属于什么概念的网站？他与265.com有什么不同？','','','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('22','5','9','PHP168曾经承诺协助站长向商务转型，让站长做有意义、能盈利的站，请你提出哪些商务功能需要完善----以配合站长的网站运营。','','','1','admin','1');
INSERT INTO `{$tbl_prefix}exam_title` VALUES ('23','5','2','PHP168所有方案的代理体系适合那些人群？在哪个版块可以申请？','企业\r\n个人用户\r\n合作伙伴\r\n代理与商务区\r\nV6专区','企业\r\n个人用户\r\n合作伙伴\r\n代理与商务区','1','admin','1');
EOF;

