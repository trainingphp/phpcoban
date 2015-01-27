/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : newsphp

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-01-25 20:06:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('7', 'Văn hóa');
INSERT INTO `categories` VALUES ('8', 'Kinh tế');
INSERT INTO `categories` VALUES ('9', 'Chính trị');
INSERT INTO `categories` VALUES ('10', 'Xã hội');
INSERT INTO `categories` VALUES ('11', 'Thể thao');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `category_id` int(6) NOT NULL,
  `title` varchar(450) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `cont` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `user_id` int(6) NOT NULL,
  `status` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('22', '7', 'Chủ quán cà phê \"chết đi sống lại\" tố giác nghi can', '<p>TTO - \"Em phải gi&ecirc;́t chị chứ đ&ecirc;́n nước này em kh&ocirc;ng dừng lại được nữa&rdquo; - theo lời nạn nh&acirc;n kể lại, đ&oacute; l&agrave; lời của nghi can n&oacute;i với chị khi ra tay.</p>', '<p>&ldquo;T&ocirc;i vừa th&acirc;́y bóng đen thoáng qua sau lưng thì m&ocirc;̣t sợi d&acirc;y đã si&ecirc;́t quanh c&ocirc;̉. T&ocirc;i c&ocirc;́ ngoái lại thì th&acirc;́y mặt Toàn. T&ocirc;i hét: &ldquo;Toàn ơi, sao em lại gi&ecirc;́t chị? Em mu&ocirc;́n bao nhi&ecirc;u chị đưa chứ chị xin em đừng gi&ecirc;́t chị&rdquo;. Toàn nói: &ldquo;Chị ơi, em nợ nhi&ecirc;̀u quá r&ocirc;̀i em phải gi&ecirc;́t chị đ&ecirc;̉ cướp của, em kh&ocirc;ng dừng lại được nữa&rdquo;.</p>', 'CI92Oy4D.jpg', '2015-01-25 19:57:05', '2015-01-25 19:57:05', '1', 0x30);
INSERT INTO `news` VALUES ('23', '8', 'VTV bị phạt 40 triệu đồng vì “Điều ước thứ 7”', '<p>TTO - Ng&agrave;y 19-1, Thanh tra Bộ Th&ocirc;ng tin - truyền th&ocirc;ng đ&atilde; ra quyết định xử phạt VTV 40 triệu đồng v&igrave; đ&atilde; th&ocirc;ng tin sai sự thật trong chương tr&igrave;nh &ldquo;Điều ước thứ 7&rdquo; ph&aacute;t s&oacute;ng tr&ecirc;n k&ecirc;nh VTV3 ng&agrave;y 10-1.</p>', '<p>Quyết định xử phạt số 07 n&ecirc;u r&otilde; h&agrave;nh vi th&ocirc;ng tin sai sự thật n&agrave;y của &nbsp;&nbsp;<span style=\"line-height: 22.3999996185303px;\">Đ&agrave;i Truyền h&igrave;nh Việt Nam (</span><span style=\"line-height: 22.3999996185303px;\">VTV)</span><span style=\"line-height: 22.3999996185303px;\">&nbsp;</span><span style=\"line-height: 1.6;\">g&acirc;y ảnh hưởng rất nghi&ecirc;m trọng, t&aacute;c động xấu đến dư luận x&atilde; hội. &nbsp;</span><span style=\"line-height: 1.6;\">Tuy nhi&ecirc;n, </span><span style=\"line-height: 1.6;\">c&oacute; t&igrave;nh tiết giảm nhẹ khi VTV đ&atilde; kịp thời ph&aacute;t hiện sai phạm, thực hiện cải ch&iacute;nh th&ocirc;ng tin sai sự thật trong chương tr&igrave;nh ph&aacute;t s&oacute;ng ng&agrave;y 17-1.&nbsp;</span></p>\r\n<p>Đồng thời, VTV&nbsp;đ&atilde; nghi&ecirc;m t&uacute;c xử l&yacute; sai phạm, tạm dừng ph&aacute;t s&oacute;ng chương tr&igrave;nh &ldquo;Điều ước thứ 7&rdquo; để chấn chỉnh c&ocirc;ng t&aacute;c sản xuất, tạm đ&igrave;nh chỉ c&ocirc;ng t&aacute;c đối với bi&ecirc;n tập vi&ecirc;n v&agrave; đạo diễn phụ tr&aacute;ch chương tr&igrave;nh để kiểm điểm v&agrave; xem x&eacute;t xử l&yacute; kỷ luật. T&iacute;ch cực hợp t&aacute;c với cơ quan chức năng để xem x&eacute;t, giải quyết vụ việc.</p>\r\n<p>Trước đ&oacute;, chương tr&igrave;nh &ldquo;Điều ước thứ 7&rdquo; ph&aacute;t s&oacute;ng tr&ecirc;n k&ecirc;nh VTV3 ng&agrave;y 10-1 đ&atilde; n&ecirc;u nội dung về một cặp vợ chồng h&aacute;t rong. Tuy nhi&ecirc;n, tr&ecirc;n thực tế người chồng trong chương tr&igrave;nh n&agrave;y đ&atilde; c&oacute; vợ ở qu&ecirc; tại Thanh H&oacute;a.</p>\r\n<p>Việc&nbsp;VTV đ&atilde; kh&ocirc;ng kiểm chứng v&agrave; ph&aacute;t s&oacute;ng g&acirc;y t&aacute;c động xấu đến dư luận x&atilde; hội.</p>', '0jDGEEqv.jpg', '2015-01-25 20:02:24', '2015-01-25 20:02:24', '1', 0x30);
INSERT INTO `news` VALUES ('24', '10', 'Hoàng Nam đánh bại nhà vô địch trẻ của Pháp', '<p><strong>TTO &ndash; Ng&agrave;y 25-1, L&yacute; Ho&agrave;ng Nam xuất sắc đ&aacute;nh bại nh&agrave; v&ocirc; địch U-16 Ph&aacute;p Corentin Moutet ở v&ograve;ng 1 đơn nam Giải quần vợt trẻ &Uacute;c mở rộng 2015 diễn ra tại Melbourne.</strong></p>', '<p>V&aacute;n đầu ti&ecirc;n diễn ra kịch t&iacute;nh khi t&acirc;m l&yacute; hơi khớp ở lần đầu thi đấu v&ograve;ng ch&iacute;nh &nbsp;giải Grand Slam v&agrave; cổ tay chưa ho&agrave;n to&agrave;n b&igrave;nh phục chấn thương khiến Ho&agrave;ng Nam nhập cuộc chậm chạp. Nh&acirc;n cơ hội n&agrave;y, &nbsp;Moutet một mạch vượt l&ecirc;n dẫn trước 3-0.</p>\r\n<p>Đ&uacute;ng thời điểm tưởng chừng tuyệt vọng, Ho&agrave;ng Nam đ&atilde; thi đấu quật khởi với t&acirc;m l&yacute; kh&ocirc;ng c&oacute; g&igrave; để mất. Anh kh&ocirc;n ngoan điều chỉnh chiến thuật, li&ecirc;n&nbsp;tục thực hiện những pha &eacute;p tr&aacute;i tay Moutet, chờ cơ hội tung ra những c&uacute; dứt điểm quyết định.</p>\r\n<p>Lối đ&aacute;nh n&agrave;y đ&atilde;&nbsp;hạn chế những c&uacute; đ&aacute;nh sấm s&eacute;t bằng tay tr&aacute;i (tay thuận) của Moutet v&agrave; khiến đối thủ người Ph&aacute;p &iacute;t nhiều bị ức chế, điển h&igrave;nh l&agrave; t&igrave;nh huống anh quăng vợt xuống đất sau pha đ&ocirc;i c&ocirc;ng thất bại trước Ho&agrave;ng Nam ở b&agrave;n thứ 9. Nhờ đ&oacute;, Ho&agrave;ng Nam thắng 5 trong 6 b&agrave;n tiếp theo để dẫn ngược đối thủ với tỉ số 5-4.</p>\r\n<p>Tuy nhi&ecirc;n, Moutet chẳng phải tay vừa. Tay vợt người Ph&aacute;p thi đấu quyết liệt để c&acirc;n bằng tỉ số 6-6 buộc v&aacute;n đấu phải bước v&agrave;o loạt tie-break c&acirc;n n&atilde;o. Bằng t&acirc;m l&yacute; thoải m&aacute;i, Ho&agrave;ng Nam đ&atilde; gi&agrave;nh chiến thắng 7-4, ấn định chiến thắng nghẹt thở 7-6 ở v&aacute;n đầu ti&ecirc;n sau hơn 1 giờ thi đấu.</p>\r\n<p>Chiến thắng n&agrave;y tạo đ&agrave; t&acirc;m l&yacute; thuận lợi cho Ho&agrave;ng Nam khi bước sang v&aacute;n thứ hai. D&ugrave; Moutet (hạng 54 trẻ thế giới v&agrave; thứ 1250 thế giới) được giới chuy&ecirc;n m&ocirc;n đ&aacute;nh gi&aacute; cao hơn Ho&agrave;ng Nam (hạng 65 trẻ thế giới v&agrave; thứ 1576 thế giới) nhưng tay vợt Việt Nam ho&agrave;n to&agrave;n l&agrave;m chủ thế trận. Ho&agrave;ng Nam thắng trước hai b&agrave;n đầu ti&ecirc;n rồi dẫn trước 5-2. Tưởng chừng chiến thắng đ&atilde; dễ d&agrave;ng trong tầm tay của Ho&agrave;ng Nam th&igrave; Moutet bất ngờ gỡ h&ograve;a 5-5.</p>\r\n<p>Kh&ocirc;ng &iacute;t người h&acirc;m mộ VN xem trực tiếp trận đấu đ&atilde; bắt đầu lo lắng cho Ho&agrave;ng Nam. Nhưng đ&uacute;ng l&uacute;c n&agrave;y, Ho&agrave;ng Nam t&igrave;m lại ch&iacute;nh m&igrave;nh với những c&uacute; đ&aacute;nh t&aacute;o bạo để vươn l&ecirc;n 7-5, ấn định chiến thắng 2-0 trước nh&agrave; v&ocirc; địch trẻ nước Ph&aacute;p Moutet. </p>', 'AxhROPUW.jpg', '2015-01-25 20:03:32', '2015-01-25 20:03:32', '1', 0x30);
INSERT INTO `news` VALUES ('25', '11', ' HLV Huỳnh Đức \"tố\" Công Phượng ăn vạ', '<p><strong>TTO - HLV trưởng đội SHB Đ&agrave; Nẵng L&ecirc; Huỳnh Đức cho rằng, C&ocirc;ng Phượng giả vờ kh&eacute;o l&eacute;o đ&aacute;nh lừa trọng t&agrave;i để gi&uacute;p Ho&agrave;ng Anh Gia Lai (HAGL) được hưởng quả phạt đền v&agrave;o ph&uacute;t 57 tr&ecirc;n s&acirc;n Pleiku chiều 25-1.</strong></p>', '<p><span style=\"line-height: 1.6em;\">Trận thứ 5&nbsp;li&ecirc;n tục kh&ocirc;ng biết m&ugrave;i chiến thắng đ&atilde; đẩy Đ&agrave; Nẵng xuống đ&aacute;y bảng xếp hạng chỉ với 1 điểm. </span></p>\r\n<p><span style=\"line-height: 1.6em;\">Sau trận thua HAGL 0-1, Huỳnh Đức l&ecirc;n tiếng chỉ tr&iacute;ch trọng t&agrave;i Trần Đ&igrave;nh Thịnh: \"</span><span style=\"line-height: 1.6em;\">C&ocirc;ng Phượng giả</span><span style=\"line-height: 1.6em;\">&nbsp;vờ kh&eacute;o l&eacute;o để đ&aacute;nh lừa trọng t&agrave;i. Ngo&agrave;i ra,&nbsp;ch&uacute;ng t&ocirc;i c&ograve;n&nbsp;mất đi quả phạt đền tr&ocirc;ng thấy khi Qu&aacute;ch T&acirc;n bị ch&egrave;n ng&atilde; tr&aacute;i ph&eacute;p trong v&ograve;ng cấm địa. B&ecirc;n cạnh đ&oacute;, SHB Đ&agrave; Nẵng c&ograve;n bị những thẻ v&agrave;ng v&ocirc; l&yacute;, đ&oacute; l&agrave; những lỗi 12 kh&ocirc;ng đ&aacute;ng bị phạt thẻ. Chơi tr&ecirc;n s&acirc;n kh&aacute;ch th&igrave; phải chịu những thiệt th&ograve;i như vậy, t&ocirc;i muốn th&ocirc;ng qua b&aacute;o ch&iacute; l&ecirc;n tiếng về sự yếu k&eacute;m của trọng t&agrave;i trận n&agrave;y\".</span></p>\r\n<p>Đ&aacute;nh gi&aacute; về trận đấu, HLV L&ecirc; Huỳnh Đức cho rằng đội b&oacute;ng của &ocirc;ng đ&atilde; chơi tốt, tinh thần thi đấu ngoan cường, thực hiện đ&uacute;ng &yacute; đồ chiến thuật v&agrave; c&oacute; nhiều cơ hội l&agrave;m b&agrave;n ở hiệp một.</p>\r\n<p>\"Đ&aacute;ng tiếc l&agrave;&nbsp;cả hai tiền đạo đều kh&ocirc;ng thể ghi b&agrave;n v&agrave;o lưới đối phương để rồi phải trả gi&aacute; bởi quả phạt đền qu&aacute; oan uổng. Nhưng c&aacute;c cầu thủ của t&ocirc;i rất đ&aacute;ng được khen v&agrave; nếu h&ograve;a th&igrave; hợp l&yacute; hơn.&nbsp;<span style=\"line-height: 1.6em;\">T&ocirc;i đ&aacute;nh gi&aacute; cao lứa cầu thủ trẻ Ho&agrave;ng Anh Gia Lai với nền tảng thể lực tốt, kỹ thuật kh&eacute;o l&eacute;o, kiểm so&aacute;t b&oacute;ng giỏi v&agrave; tự tin nhưng họ c&ograve;n thiếu chiều s&acirc;u, m&agrave; điều n&agrave;y chỉ c&oacute; thể khắc phục qua nhiều năm th&aacute;ng nữa\" - Huỳnh Đức n&oacute;i th&ecirc;m.&nbsp;</span></p>\r\n<p>Trong khi đ&oacute;, trả lời Tuổi Trẻ trong cuộc họp b&aacute;o, HLV Graecehn Guillaume của HAGL &nbsp;cũng đ&aacute;nh gi&aacute; trọng t&agrave;i mắc nhiều sai s&oacute;t: &ldquo;Trọng t&agrave;i c&ograve;n bỏ s&oacute;t nhiều thẻ đối với đội kh&aacute;ch,&nbsp; nhất l&agrave; những c&uacute; phi hai ch&acirc;n truy cản rất nguy hiểm, dễ g&acirc;y chấn thương cho đối thủ. Điền h&igrave;nh l&agrave; cầu thủ hậu vệ mang &aacute;o số 3 (Huy To&agrave;n). Ở ch&acirc;u &Acirc;u, trong t&igrave;nh huống phạt quả 11m v&agrave;o ph&uacute;t 57 th&igrave; th&ocirc;ng thường trọng t&agrave;i lu&ocirc;n k&egrave;m theo chiếc thẻ đỏ cho thủ m&ocirc;n v&igrave; lối chơi th&ocirc; bạo. Việc đội kh&aacute;ch n&oacute;i rằng họ kh&ocirc;ng được hưởng quả phạt đền l&agrave; thiếu s&oacute;t của trọng t&agrave;i, theo t&ocirc;i, thiếu s&oacute;t ấy nếu c&oacute; l&agrave; việc của trợ l&yacute; trọng t&agrave;i đứng gần đ&oacute; v&agrave; kh&ocirc;ng phải&nbsp;bất kỳ pha b&oacute;ng n&agrave;o trọng t&agrave;i ch&iacute;nh cũng tr&ocirc;ng thấy&rdquo;.</p>', 'wWeI3KoW.jpg', '2015-01-25 20:04:13', '2015-01-25 20:04:13', '1', 0x30);
INSERT INTO `news` VALUES ('26', '10', 'Vé xem Hoàng Anh Gia Lai vẫn sốt', '<p><strong>TTO - Bất chấp thời tiết xuống c&ograve;n 14 độ C, ngay từ s&aacute;ng sớm 25-1, rất đ&ocirc;ng người h&acirc;m mộ Pleiku đ&atilde; ki&ecirc;n nhẫn xếp h&agrave;ng đứng chờ mua v&eacute; xem trận Ho&agrave;ng Anh Gia Lai gặp SHB Đ&agrave; Nẵng ở v&ograve;ng 5 Toyota V-League 1 2015 diễn ra 17g h&ocirc;m nay. </strong></p>', '<p><span style=\"line-height: 1.6em;\">Kh&ocirc;ng như c&aacute;c lần b&aacute;n v&eacute; trước, lần n&agrave;y t&igrave;nh trạng trật tự đ&atilde; được thiết lập trước c&aacute;c ph&ograve;ng v&eacute; nhờ sự c&oacute; mặt từ sớm của lực lượng cảnh s&aacute;t cơ động tỉnh Gia Lai. Sự hiện diện của lực lượng cảnh s&aacute;t khiến cho nh&oacute;m mua b&aacute;n v&eacute; chợ đen &iacute;t c&oacute; cơ hội \"khuynh đảo\" ph&ograve;ng v&eacute; như những trận trước.&nbsp;</span></p>\r\n<p>Cầm ba chiếc v&eacute; tr&ecirc;n tay sau 35 ph&uacute;t xếp h&agrave;ng, anh Nguyễn C&ocirc;ng Khoa (phường Hội Thương, th&agrave;nh phố Pleiku) h&agrave;o hứng n&oacute;i: &ldquo;Cầu thủ Ho&agrave;ng Anh Gia Lai c&ograve;n non k&eacute;m kinh nghiệm trận mạc n&ecirc;n thua liền ba trận cũng kh&ocirc;ng c&oacute; g&igrave; bất ngờ. Họ vẫn chơi b&oacute;ng nhiệt t&igrave;nh, trung th&agrave;nh với lối đ&aacute; đẹp cho n&ecirc;n sức h&uacute;t của họ vẫn kh&ocirc;ng suy giảm. Ch&iacute;nh v&igrave; vậy m&agrave; người h&acirc;m mộ ch&uacute;ng t&ocirc;i kh&ocirc;ng thể quay lưng với lứa cầu th&ugrave; trẻ&hellip;&rdquo;.</p>\r\n<p><span style=\"line-height: 1.6em;\">Nhằm hạn chế tối đa t&igrave;nh trạng thu gom v&eacute; để b&aacute;n ra chợ đen, lần n&agrave;y, ban tổ chức s&acirc;n Pleiku quyết định chỉ b&aacute;n cho mỗi người 3 v&eacute;, thay v&igrave; 6 v&eacute; như c&aacute;c trận trước. Tuy nhi&ecirc;n đến hơn 8g s&aacute;ng nay (25-1),&nbsp;do lượng người đổ dồn đến mua v&eacute; qu&aacute; đ&ocirc;ng n&ecirc;n&nbsp;ban tổ chức quyết định mỗi người chỉ c&ograve;n mua được 2 v&eacute;.</span></p>\r\n<p>&Ocirc;ng Huỳnh Mau - trưởng ban tổ chức trận đấu n&oacute;i th&ecirc;m: &ldquo;Nếu đến trưa, việc ph&aacute;t h&agrave;nh v&eacute; ho&agrave;n tất th&igrave; ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;nh lắp r&aacute;p m&agrave;n h&igrave;nh 300 Inch ph&iacute;a trước s&acirc;n vận động (đường Quang Trung) để phục vụ cho những người kh&ocirc;ng mua được v&eacute;&rdquo;.</p>\r\n<p>T&iacute;nh đến 9g s&aacute;ng 25-1, bốn ph&ograve;ng v&eacute; đ&atilde; đ&oacute;ng cửa sau khi ph&aacute;t h&agrave;nh 8.820 v&eacute;.</p>', '1422168928-1422137945-dn-02.jpg', '2015-01-25 20:04:50', '2015-01-25 20:04:50', '1', 0x30);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Admin');
INSERT INTO `roles` VALUES ('2', 'Manager');
INSERT INTO `roles` VALUES ('3', 'Editor');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `role_id` int(6) NOT NULL,
  `account` varchar(250) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'hvquyet', '123123', 'Quyeet');
INSERT INTO `users` VALUES ('2', '2', 'hvq', '123456', 'Quyết 2');
INSERT INTO `users` VALUES ('4', '3', 'vqhuynh', '123456', 'quyet3');
