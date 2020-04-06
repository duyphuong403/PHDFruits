-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2019 lúc 08:22 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phdfruits_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_admin`
--

CREATE TABLE `account_admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account_admin`
--

INSERT INTO `account_admin` (`id`, `full_name`, `username`, `email`, `password`) VALUES
(1, 'PHD', 'admin', 'admin@phdfruits.com', 'cfed01013118b69573256b6f8abdfdae');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(50) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `post` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `link`, `post`, `author`, `date`) VALUES
(30, '9 lợi ích của quả cam', 'https://photo-1-baomoi.zadn.vn/w700_r1/2017_07_25_101_22840554/4b61a79256d4bf8ae6c5.jpg', '<p><strong>Chắc hẳn ai cũng biết về lợi &iacute;ch của việc uống nước cam. Bởi trong nước cam c&oacute; rất nhiều Vitamin C v&agrave; c&aacute;c nh&oacute;m chống oxy h&oacute;a tốt cho sức khỏe của bạn. Nhất l&agrave; trong thời điểm giao m&ugrave;a, thời tiết thất thường khiến cơ thể rất dễ mắc bệnh. Kh&ocirc;ng chỉ d&ugrave;ng cam để vắt lấy nước, m&agrave; vỏ cam cũng c&oacute; những t&aacute;c dụng kh&ocirc;ng ngờ đến. H&atilde;y c&ugrave;ng t&igrave;m hiểu 9 lợi &iacute;ch của quả cam.</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"https://photo-1-baomoi.zadn.vn/w700_r1/2017_07_25_101_22840554/4b61a79256d4bf8ae6c5.jpg\" style=\"height:285px; width:500px\" /></strong></p>\r\n\r\n<p style=\"text-align:center\">Nước cam chứa nhiều chất dinh dưỡng bao gồm vitamin C.&nbsp;<em>Ảnh: thealternativedaily</em></p>\r\n\r\n<p><strong>1.Cam c&oacute; nhiều chất dinh dưỡng</strong>&nbsp;(Nước cam chứa nhiều chất dinh dưỡng bao gồm vitamin C)</p>\r\n\r\n<p>Bạn c&oacute; lẽ đ&atilde; biết rằng nước cam c&oacute; lượng vitamin C v&agrave; chất chống oxy h&oacute;a rất cao. Nhưng thực sự vỏ cam cũng chứa gần gấp đ&ocirc;i lượng vitamin C như vậy.</p>\r\n\r\n<p>C&ugrave;ng với vitamin C, trong cam c&ograve;n chứa c&aacute;c vitamin A, B1, axit pantothenic, folate, canxi, đồng v&agrave; kali. Vỏ cam cũng l&agrave; nguồn chất xơ tuyệt vời, v&agrave; lượng tinh dầu qu&yacute; gi&aacute;. Những người uống nước cam đều đặn bao giờ cũng c&oacute; sức đề kh&aacute;ng v&agrave; thể lực tốt hơn.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://photo-1-baomoi.zadn.vn/w700_r1/2017_07_25_101_22840554/e5ab0b58fa1e13404a0f.jpg\" style=\"height:285px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\">Lu&ocirc;n tốt cho hệ thống miễn dịch của bạn.&nbsp;<em>Ảnh: thealternativedaily</em></p>\r\n\r\n<p><strong>2.Lu&ocirc;n tốt cho hệ thống miễn dịch của bạn</strong></p>\r\n\r\n<p>Ăn c&aacute;c loại cam, hoặc uống nước cam v&agrave;o m&ugrave;a lạnh, m&ugrave;a c&uacute;m cũng c&oacute; thể gi&uacute;p cơ thể bạn bảo vệ được vi&ecirc;m nhiễm v&agrave; những bệnh cảm c&uacute;m th&ocirc;ng thường.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://photo-1-baomoi.zadn.vn/w700_r1/2017_07_25_101_22840554/d34939bac8fc21a278ed.jpg\" style=\"height:285px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\">H&agrave;m lượng vitamin A trong nước cam c&oacute; thể cải thiện thị lực.<em>&nbsp;Ảnh: thealternativedaily</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3.Gi&uacute;p mắt s&aacute;ng v&agrave; cải thiện thị lực</strong></p>\r\n\r\n<p>Beta-carotene t&igrave;m thấy trong nước cam l&agrave; chất chống oxy h&oacute;a tạo Vitamin A. M&agrave; trong c&aacute;c loại vitamin th&igrave; vitamin A l&agrave; tốt nhất cho mắt.</p>\r\n\r\n<p><strong>4.Da s&aacute;ng rạng ngời</strong></p>\r\n\r\n<p>Vitamin C c&oacute; vai tr&ograve; quan trọng trong việc sản xuất collagen cho da, l&agrave; chất gi&uacute;p da mềm mại, mịn m&agrave;ng v&agrave; trẻ trung. Ngo&agrave;i ra, vitamin C gi&uacute;p cải thiện t&igrave;nh trạng vi&ecirc;m da như mụn trứng c&aacute;, ch&agrave;m. Đ&oacute; cũng ch&iacute;nh l&agrave; l&iacute; do bạn n&ecirc;n thường xuy&ecirc;n uống nước cam.</p>\r\n\r\n<p><strong>5.Một tr&aacute;i tim khỏe mạnh</strong></p>\r\n\r\n<p>Tr&aacute;i cam c&oacute; thể gi&uacute;p bảo vệ tr&aacute;i tim của bạn bằng nhiều c&aacute;ch. Thứ nhất, ch&uacute;ng c&oacute; chứa nhiều chất xơ &ndash; chất quan trọng cho chức năng tối ưu h&oacute;a của hệ thống tim mạch. Thứ 2, trong cam chứa chất chống oxy h&oacute;a flavonoid, hesperidin l&agrave;m giảm cholesterol, giảm vi&ecirc;m, v&agrave; hạ huyết &aacute;p.</p>\r\n\r\n<p><strong>6.C&oacute; khả năng chống ung thư</strong></p>\r\n\r\n<p>Nước cam c&oacute; nhiều t&aacute;c động t&iacute;ch cực trong việc ph&ograve;ng chống ung thư nhờ h&agrave;m lượng chất chống oxy h&oacute;a cao c&oacute; nguồn gốc từ chất flavonoids như hesperitin v&agrave; nariginin.</p>\r\n\r\n<p>C&aacute;c vitamin C cao c&oacute; trong cam cũng như l&agrave; một chất chống oxy h&oacute;a tốt để bảo vệ c&aacute;c tế b&agrave;o cơ thể.</p>\r\n\r\n<p><strong>7.Vỏ cam l&agrave;m giảm dị ứng</strong></p>\r\n\r\n<p>Vỏ cam c&oacute; t&iacute;nh chất chống vi&ecirc;m v&agrave; kh&aacute;ng histamine. Do đ&oacute;, khi uống nước cam hay sử dụng cả vỏ cam trong thời gian d&agrave;i sẽ l&agrave;m dịu c&aacute;c triệu chứng dị ứng.</p>\r\n\r\n<p><strong>8.Cải thiện hệ ti&ecirc;u h&oacute;a</strong></p>\r\n\r\n<p>Cam c&oacute; đầy đủ c&aacute;c chất được gọi l&agrave; phytosterols (sterol thực vật), một loại chất b&eacute;o được t&igrave;m thấy trong c&aacute;c loại hạt, tr&aacute;i c&acirc;y v&agrave; rau quả. Những sterol n&agrave;y chặn cholesterol kh&ocirc;ng cho c&aacute;c tế b&agrave;o trong ruột hấp thụ.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://photo-1-baomoi.zadn.vn/w700_r1/2017_07_25_101_22840554/72f29f016e478719de56.jpg\" style=\"height:285px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\">Cải thiện hệ thống ti&ecirc;u h&oacute;a.&nbsp;<em>Ảnh: thealternativedaily</em></p>\r\n\r\n<p><strong>9.Gi&uacute;p giảm c&acirc;n</strong></p>\r\n\r\n<p>Nước cam gi&uacute;p tăng cường thể lực, giải nhiệt, thỏa cơn kh&aacute;t cho người c&oacute; cường độ vận động cao, tăng cường hệ ti&ecirc;u h&oacute;a v&agrave; hệ miễn dịch của cơ thể. L&agrave; chất bổ sung tuyệt vời cho khi bạn c&oacute; kế hoạch giảm c&acirc;n.</p>\r\n\r\n<p>Thật đơn giản, h&atilde;y &ldquo;chăm chỉ&rdquo; vắt từ một đến hai quả cam, để c&oacute; một cốc nước cam h&agrave;ng ng&agrave;y. Th&ecirc;m một &iacute;t đường, muối t&ugrave;y th&iacute;ch theo khẩu vị. Giữ vỏ cam lại, xắt mỏng v&agrave; th&ecirc;m nước s&ocirc;i. Đ&oacute; cũng l&agrave; một thức uống tuyệt vời gi&uacute;p bạn sảng kho&aacute;i.</p>\r\n\r\n<p>Theo&nbsp;<em>thealternativedaily.com</em></p>\r\n', 'Admin', '2019-01-08'),
(40, '10 lợi ích không ngờ của dâu tây', 'https://i-suckhoe.vnecdn.net/2015/07/09/strawberrytests-5467-1436430881.jpg', '<p><strong>D&acirc;u t&acirc;y c&oacute; t&aacute;c dụng ngăn ngừa c&aacute;c bệnh tim mạch, hen, ung thư v&agrave; l&agrave;m trắng răng.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tốt cho b&agrave; bầu</strong></p>\r\n\r\n<p>H&atilde;y bổ sung d&acirc;u t&acirc;y v&agrave;o thực đơn khi mang thai để tạo tiền đề tốt cho sự ph&aacute;t triển em b&eacute;. Ăn d&acirc;u t&acirc;y sẽ gi&uacute;p cung cấp cho hai mẹ con c&aacute;c vitamin v&agrave; chất kho&aacute;ng cần thiết.</p>\r\n\r\n<p><strong>Bổ mắt v&agrave; giảm quầng th&acirc;m</strong></p>\r\n\r\n<p>Nếu như bạn đang khổ t&acirc;m v&igrave; quầng th&acirc;m, d&acirc;u t&acirc;y sẽ rất c&oacute; &iacute;ch bởi ch&uacute;ng c&oacute; khả năng chống vi&ecirc;m v&agrave; l&agrave;m s&aacute;ng da. Th&ecirc;m v&agrave;o đ&oacute;, vitamin C trong d&acirc;u t&acirc;y hạn chế c&aacute;c bệnh về mắt như đục thủy tinh thể.</p>\r\n\r\n<p><strong>Chống ung thư</strong></p>\r\n\r\n<p>Chất chống oxy h&oacute;a v&agrave; kh&aacute;ng vi&ecirc;m trong d&acirc;u t&acirc;y chống lại sự tăng sinh c&aacute;c khối u v&agrave; ngăn khối u kh&ocirc;ng lan rộng.</p>\r\n\r\n<p><strong>Gi&uacute;p sản xuất hormone hạnh ph&uacute;c</strong></p>\r\n\r\n<p>Trầm cảm h&igrave;nh th&agrave;nh từ những cảm x&uacute;c ti&ecirc;u cực. V&agrave; bạn c&oacute; thể chống lại chứng bệnh n&agrave;y bằng c&aacute;c nguy&ecirc;n liệu tự nhi&ecirc;n. Khi cảm thấy buồn rầu, h&atilde;y ăn d&acirc;u t&acirc;y. Th&agrave;nh phần trong d&acirc;u t&acirc;y hỗ trợ m&aacute;u mang dưỡng chất đến n&atilde;o, chống lại sự h&igrave;nh th&agrave;nh homocysteine v&agrave; l&agrave;m tăng c&aacute;c hormone hạnh ph&uacute;c như dopamine v&agrave; serotonin; gi&uacute;p bạn tươi tỉnh trở lại.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://i-suckhoe.vnecdn.net/2015/07/09/strawberries-basket-21-1140-1436430881.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p><strong>Chống hen v&agrave; dị ứng</strong></p>\r\n\r\n<p>Nếu bạn đ&atilde; qu&aacute; mệt mỏi v&igrave; uống thuốc chống hen v&agrave; dị ứng, h&atilde;y chuyển sang d&acirc;u t&acirc;y. Nhờ v&agrave;o c&aacute;c chất kh&aacute;ng vi&ecirc;m, d&acirc;u t&acirc;y l&agrave;m giảm c&aacute;c triệu chứng như sổ mũi, chảy nước mắt v&agrave; nổi mề đay.</p>\r\n\r\n<p><strong>L&agrave;m mờ đốm t&agrave;n nhang</strong></p>\r\n\r\n<p>Nếu bạn muốn x&oacute;a c&aacute;c đốm t&agrave;n nhang, h&atilde;y sử dụng d&acirc;u t&acirc;y kết hợp với c&aacute;c nguy&ecirc;n liệu kh&aacute;c như nước chanh, kem chua, đu đủ hay sữa.</p>\r\n\r\n<p><strong>Trị mụn</strong></p>\r\n\r\n<p>H&atilde;y d&agrave;nh 30 ph&uacute;t để l&agrave;m v&agrave; đắp mặt d&acirc;u t&acirc;y, bạn sẽ gi&uacute;p da bớt mụn v&agrave; chống lại sự h&igrave;nh th&agrave;nh nếp nhăn. Chất chống oxy h&oacute;a trong d&acirc;u t&acirc;y hoạt động hiệu quả hơn khi trực tiếp d&ugrave;ng l&ecirc;n da. N&ecirc;n d&ugrave;ng mặt nạ d&acirc;u t&acirc;y trong m&ugrave;a h&egrave; để hạn chế t&aacute;c hại của &aacute;nh nắng.</p>\r\n\r\n<p><strong>L&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a</strong></p>\r\n\r\n<p>Ch&uacute;ng ta gi&agrave; đi bởi c&aacute;c tế b&agrave;o trong cơ thể l&atilde;o h&oacute;a. Khi tiếp x&uacute;c với &aacute;nh mặt trời v&agrave; &ocirc; nhiễm kh&ocirc;ng kh&iacute;, da c&agrave;ng xấu đi nhanh ch&oacute;ng. D&acirc;u t&acirc;y sẽ gi&uacute;p cải thiện điều n&agrave;y. C&aacute;c nghi&ecirc;n cứu chỉ ra rằng, chỉ 30 ph&uacute;t sau khi ăn d&acirc;u t&acirc;y, cơ thể sẽ được tăng cường chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Giảm nguy cơ đau tim</strong></p>\r\n\r\n<p>Đau tim l&agrave; một trong những nguy cơ g&acirc;y tử vong h&agrave;ng đầu v&agrave; cần được đặc biệt lưu &yacute;. Một chế độ ăn hợp l&yacute; c&oacute; thể gi&uacute;p bạn ph&ograve;ng chống c&aacute;c bệnh tim mạch v&agrave; d&acirc;u t&acirc;y l&agrave; thực phẩm kh&ocirc;ng thể bỏ qu&ecirc;n. D&acirc;u t&acirc;y gi&uacute;p kiểm so&aacute;t LDL, một loại cholesterol c&oacute; hại. Vitamin C trong loại quả n&agrave;y c&ograve;n hỗ trợ lưu th&ocirc;ng m&aacute;u.</p>\r\n\r\n<p><strong>L&agrave;m trắng răng</strong></p>\r\n\r\n<p>Vitamin C trong d&acirc;u t&acirc;y ngăn ngừa ố răng. Bạn c&oacute; thể sử dụng hỗn hợp d&acirc;u t&acirc;y v&agrave; baking soda để gi&uacute;p răng trắng hơn.</p>\r\n', 'Admin', '2019-01-08'),
(41, 'Lợi ích tuyệt vời khi ăn quả kiwi', 'http://giadinh.mediacdn.vn/thumb_w/640/2015/kiwi6-1436260101788.jpg', '<p>Kiwi nằm trong danh s&aacute;ch thực phẩm an to&agrave;n trước nhiều loại thuốc trừ s&acirc;u. Năm 2011, n&oacute; được nằm trong top 10 loại thực phẩm an to&agrave;n nhất thế giới.</p>\r\n\r\n<p><img alt=\"\" src=\"http://giadinh.mediacdn.vn/2015/kiwi1-1436260101661.jpg\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<p>C&aacute;c nghi&ecirc;n cứu khoa học ở nước &Yacute; tr&ecirc;n 18.000 trẻ em từ 6 - 7 tuổi đ&atilde; minh chứng về c&aacute;c lợi &iacute;ch của kiwi đối với đường h&ocirc; hấp. Những trẻ em thường ăn từ 5 &ndash; 7 phần ăn c&oacute; chứa c&aacute;c loại tr&aacute;i c&acirc;y thuộc họ cam qu&iacute;t kết hợp với kiwi mỗi tuần sẽ c&oacute; tỉ lệ mắc bệnh hen suyễn thấp hơn 44 % so với những trẻ em chỉ ăn thực phẩm c&ugrave;ng loại chỉ 1 lần trong tuần.</p>\r\n\r\n<p>Quả kiwi được gọi l&agrave; một loại &ldquo;si&ecirc;u tr&aacute;i c&acirc;y&rdquo;. Một tr&aacute;i kiwi cung cấp cho bạn c&aacute;c loại vitamin, kho&aacute;ng chất, calo c&oacute; trong hơn 27 c&aacute;c loại tr&aacute;i c&acirc;y phổ biến nhất, do đ&oacute; n&oacute; được xếp hạng đầu c&aacute;c loại tr&aacute;i c&acirc;y c&oacute; h&agrave;m lượng dinh dưỡng cao.</p>\r\n\r\n<p><img alt=\"\" src=\"http://giadinh.mediacdn.vn/2015/kiwi8-1436260101738.jpeg\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<p>Kiwi c&oacute; t&aacute;c dụng chống lại bệnh tim. Ăn kiwi v&agrave;o mỗi buổi s&aacute;ng c&oacute; hiệu quả tương tự như thuốc aspirin đối với tim mạch (giảm hiện tượng tắc nghẽn mạch m&aacute;u) m&agrave; kh&ocirc;ng c&oacute; t&aacute;c dụng phụ như g&acirc;y vi&ecirc;m nhiễm v&agrave; chảy m&aacute;u đường ruột.</p>\r\n\r\n<p>Ăn 2/3 tr&aacute;i kiwi mỗi ng&agrave;y c&oacute; t&aacute;c dụng l&agrave;m giảm nguy cơ đ&ocirc;ng m&aacute;u đến 19% v&agrave; giảm h&agrave;m lượng chất b&eacute;o đến 16%.</p>\r\n\r\n<p><img alt=\"\" src=\"http://giadinh.mediacdn.vn/2015/kiwi2-1436260101674.jpg\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<p>Kiwi l&agrave; nguồn chất xơ, kali, acid folic, vitamin C v&agrave; E, chất chống oxy ho&aacute; tuyệt vời, c&oacute; thể ngăn ngừa t&aacute;o b&oacute;n v&agrave; ti&ecirc;u chảy cũng như những vấn đề về ruột kh&aacute;c.</p>\r\n\r\n<p>Kiwi cũng rất gi&agrave;u vitamin E n&ecirc;n c&oacute; khả năng l&agrave;m giảm bớt, x&oacute;a mờ nếp nhăn v&agrave; giảm t&aacute;c hại của tia cực t&iacute;m, t&aacute;c nh&acirc;n g&acirc;y ung thư da. Ngo&agrave;i ra, nguồn vitamin E trong kiwi được biết đến như chất chống oxy h&oacute;a, c&oacute; t&aacute;c dụng bảo vệ da khỏi t&igrave;nh trạng tho&aacute;i h&oacute;a.</p>\r\n\r\n<p>Kiwi chứa nhiều vitamin C hơn cả cam n&ecirc;n c&oacute; t&aacute;c dụng chữa l&agrave;nh vết thương, cũng như gi&uacute;p ngăn ngừa t&igrave;nh trạng da bị kh&ocirc; v&agrave; th&ocirc; r&aacute;p</p>\r\n\r\n<p><img alt=\"\" src=\"http://giadinh.mediacdn.vn/2015/kiwi5-1436260101693.jpg\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<p>Chỉ số glycemic thấp v&agrave; h&agrave;m lượng chất xơ cao trong kiwi kh&ocirc;ng l&agrave;m tăng đột ngột lượng insulin như một số loại tr&aacute;i c&acirc;y chứa nhiều glucose kh&aacute;c. V&igrave; vậy d&ugrave; c&oacute; ăn nhiều kiwi bạn cũng kh&ocirc;ng bị b&eacute;o ph&igrave;.</p>\r\n\r\n<p>Với h&agrave;m lượng thấp glycemic, kiwi kh&ocirc;ng l&agrave;m tăng lượng đường trong m&aacute;u một c&aacute;ch đột ngột. H&agrave;m lượng glycemic ph&ugrave; hợp trong loại tr&aacute;i c&acirc;y n&agrave;y lu&ocirc;n an to&agrave;n cho bệnh nh&acirc;n tiểu đường.</p>\r\n\r\n<p><img alt=\"\" src=\"http://giadinh.mediacdn.vn/2015/kiwi7-1436260101729.jpg\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<p>Kiwi cũng l&agrave; loại quả cung cấp folate cho phụ nữ mang thai. Phụ nữ mang thai cần khoảng 400 - 800 mg cho sự ph&aacute;t triển khoẻ mạnh của thai nhi trong giai đoạn đầu của thai kỳ. Ăn Kiwi sẽ cung cấp cho bạn một nguồn folate. Folate rất quan trọng trong việc ph&aacute;t triển của n&atilde;o bộ, nhận thức v&agrave; ngăn ngừa dị tật ở trẻ sơ sinh (cả trước v&agrave; trong khi mang thai).</p>\r\n\r\n<p>Ngo&agrave;i c&aacute;c t&aacute;c dụng tr&ecirc;n, quả kiwi c&ograve;n c&oacute; t&aacute;c dụng chống lại bệnh liệt dương bởi kiwi chứa nhiều ax&iacute;t amin arginine- một chất c&oacute; t&aacute;c dụng điều trị c&aacute;c rối loạn chức năng t&igrave;nh dục ở nam giới.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Admin', '2019-01-08'),
(42, 'Những lợi ích kỳ diệu cho sức khỏe từ cà chua', 'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2017_10_03/Hinh_1.jpg', '<p><strong>Gi&aacute; trị dinh dưỡng của c&agrave; chua đến từ th&agrave;nh phần gi&agrave;u vitamin, kho&aacute;ng chất v&agrave; c&aacute;c loại dưỡng chất quan trọng bao gồm vitamin A , C, K, n B6, folate v&agrave; thiamin.</strong></p>\r\n\r\n<p>Theo BS. Nguyễn Vũ Linh - Trung t&acirc;m Dinh dưỡng Vinamilk - c&agrave; chua c&oacute; t&ecirc;n khoa học l&agrave; Solanum lycopersicum, mang lại nhiều lợi &iacute;ch cho sức khỏe khi d&ugrave;ng thường xuy&ecirc;n, đ&uacute;ng c&aacute;ch.</p>\r\n\r\n<h3><strong>Ph&ograve;ng chống ung thư</strong></h3>\r\n\r\n<p>Với th&agrave;nh phần chống oxy ho&aacute; phong ph&uacute;, c&agrave; chua đ&atilde; được chứng minh l&agrave; ph&ograve;ng chống hiệu quả lại nhiều loại ung thư. Loại quả n&agrave;y chứa một lượng lớn lycopene, hoạt chất nguy&ecirc;n gi&aacute; trị thậm ch&iacute; c&ograve;n tăng về lượng khi được xử l&yacute;, chế biến ở nhiệt độ cao.</p>\r\n\r\n<p>Lycopene l&agrave; một chất chống oxy h&oacute;a c&oacute; hiệu quả cao trong việc thu nhặt, loại bỏ c&aacute;c gốc tự do - nguy&ecirc;n nh&acirc;n g&acirc;y ra rất nhiều bệnh tật, đặc biệt l&agrave; ung thư. Theo c&aacute;c nghi&ecirc;n cứu của Trường Y tế c&ocirc;ng cộng Harvard, lycopene từ c&agrave; chua c&oacute; khả năng g&oacute;p phần ph&ograve;ng chống ung thư tuyến tiền liệt , cổ tử cung, v&uacute;, dạ d&agrave;y - trực tr&agrave;ng, họng - miệng - thực quản.</p>\r\n\r\n<p>C&aacute;c lycopene c&ograve;n c&oacute; khả năng chống oxy h&oacute;a lipid (mỡ) trong huyết thanh, l&agrave;m giảm c&aacute;c loại mỡ m&aacute;u c&oacute; hại như triglyceride v&agrave; cholesterol tỷ trọng thấp. Từ đ&oacute; bảo vệ tim mạch, tr&aacute;nh lắng đọng chất b&eacute;o trong c&aacute;c mạch m&aacute;u, g&acirc;y xơ vữa động mạch, tăng huyết ấp&hellip;</p>\r\n\r\n<p>100 gram c&agrave; chua c&oacute; thể cung cấp khoảng 40% nhu cầu vitamin C h&agrave;ng ng&agrave;y - chất chống oxy h&oacute;a tự nhi&ecirc;n, ngăn ngừa gốc tự do g&acirc;y ung thư v&agrave; l&agrave;m tổn hại c&aacute;c hệ thống cơ thể.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2017_10_03/Hinh_1.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<h3><strong>Chống t&aacute;c hại của kh&oacute;i thuốc l&aacute;</strong></h3>\r\n\r\n<p>Hai th&agrave;nh phần, axit coumaric v&agrave; axit chlorogenic c&oacute; khả năng bất hoạt nitrosamin nội sinh - chất được t&igrave;m thấy lượng lớn trong kh&oacute;i thuốc l&aacute; c&oacute; khả năng g&acirc;y ung thư. Nhờ đ&oacute;, c&agrave; chua được chứng minh l&agrave;m giảm t&aacute;c dụng c&aacute;c chất g&acirc;y ung thư đến từ việc h&uacute;t thuốc l&aacute;, đặc biệt l&agrave; ung thư phổi.</p>\r\n\r\n<p>C&aacute;c th&agrave;nh phần vitamin A, vC, lycopene, lutein v&agrave; zeaxanthin c&ograve;n gi&uacute;p cải thiện thị lực, ph&ograve;ng ngừa bệnh qu&aacute;ng g&agrave;, tho&aacute;i h&oacute;a điểm v&agrave;ng, đục thủy tinh thể v&agrave; c&aacute;c vấn đề của mắt li&ecirc;n quan đến sự hiện diện c&aacute;c gốc tự do.</p>\r\n\r\n<p>Th&agrave;nh phần chứa chất xơ ti&ecirc;u h&oacute;a (cả 2 loại h&ograve;a tan v&agrave; kh&ocirc;ng tan) gi&uacute;p hệ ti&ecirc;u h&oacute;a sẽ khỏe mạnh hơn, ngăn ngừa t&aacute;o b&oacute;n v&agrave; ti&ecirc;u chảy, chứng v&agrave;ng da tắt mật v&agrave; loại bỏ độc tố khỏi cơ thể. Loại quả n&agrave;y c&ograve;n k&iacute;ch th&iacute;ch nhu động ruột, hệ cơ trơn ti&ecirc;u h&oacute;a l&agrave;m tăng lưu th&ocirc;ng hơi v&agrave; dịch ti&ecirc;u h&oacute;a ở khu vực đại tr&agrave;ng.</p>\r\n\r\n<h3><strong>Ph&ograve;ng ngừa c&aacute;c bệnh về m&aacute;u, đường tiểu</strong></h3>\r\n\r\n<p>C&agrave; chua chứa nhiều vitamin nh&oacute;m B, kali, cũng như sắt. Kali l&agrave;m th&agrave;nh mạch m&aacute;u dẻo dai, mềm mại hơn, duy tr&igrave; sức khoẻ mạch m&aacute;u, ổn định huyết &aacute;p. Sắt v&agrave; c&aacute;c vitamin nh&oacute;m B l&agrave; nguy&ecirc;n liệu cho qu&aacute; tr&igrave;nh tạo m&aacute;u. C&ugrave;ng với đ&oacute;, vitamin K rất cần thiết cho qu&aacute; tr&igrave;nh đ&ocirc;ng m&aacute;u v&agrave; kiểm so&aacute;t chảy m&aacute;u.</p>\r\n\r\n<p>Th&agrave;nh phần chất xơ trong c&agrave; chua l&agrave;m chậm sự hấp thu đường ở ruột. Cacbohydrate (chất bột đường) thấp, ổn định lượng đường trong m&aacute;u. Hiệp hội Y khoa Mỹ cho biết hoạt chất chống oxy h&oacute;a trong c&agrave; chua c&oacute; t&aacute;c dụng hạn chế c&aacute;c tổn thương mạch m&aacute;u ở thận, biến chứng thường thấy ở bệnh nh&acirc;n đ&aacute;i th&aacute;o đường t&yacute;p 2.</p>\r\n\r\n<p>Chứa nhiều nước, carotenoid v&agrave; bioflavonoid n&ecirc;n thực phẩm n&agrave;y c&oacute; t&iacute;nh kh&aacute;ng vi&ecirc;m tốt v&agrave; l&agrave;m giảm tỷ lệ mắc bệnh nhiễm tr&ugrave;ng đường tiểu, ung thư b&agrave;ng quang. C&agrave; chua c&ograve;n c&oacute; t&aacute;c dụng b&agrave;i niệu, tăng việc loại bỏ chất độc ra khỏi cơ thể, ph&ograve;ng ngừa sỏi mật, tăng lưu th&ocirc;ng mật ruột v&agrave; l&agrave;m giảm lắng đọng ở t&uacute;i mật.</p>\r\n\r\n<h3><strong>Đẹp da, mượt t&oacute;c</strong></h3>\r\n\r\n<p>Với th&agrave;nh phần gi&agrave;u c&aacute;c hoạt chất chống oxy h&oacute;a mạnh, vitamin A, K, canxi&hellip; c&agrave; chua hỗ trợ tăng cường sức khỏe răng, xương, da. Đồng thời, hạn chế tối đa tổn hại từ tia cực t&iacute;m - một trong những nguy&ecirc;n nh&acirc;n g&acirc;y ra c&aacute;c nếp nhăn cho l&agrave;n da.</p>\r\n\r\n<p>Chất xơ trong c&agrave; chua hỗ trợ c&acirc;n bằng hấp thu c&aacute;c dưỡng chất ở ruột, ph&ograve;ng chống thừa c&acirc;n b&eacute;o ph&igrave;, gi&uacute;p thon thả hơn. C&aacute;c vitamin như A, E v&agrave; sắt hỗ trợ c&acirc;n bằng pH v&agrave; m&ocirc;i trường v&ugrave;ng ch&acirc;n t&oacute;c, ph&ograve;ng chống g&agrave;u, dị ứng, tăng hệ thống vi tuần ho&agrave;n da đầu, gi&uacute;p m&aacute;i t&oacute;c &oacute;ng ả, mượt m&agrave;.</p>\r\n\r\n<p>Quả c&agrave; chua to hay nhỏ kh&ocirc;ng quan trọng, thay v&agrave;o đ&oacute;, bạn n&ecirc;n ch&uacute; &yacute; m&agrave;u sắc v&agrave; mật độ. Vẻ ngo&agrave;i căng b&oacute;ng, ch&iacute;n mọng, c&agrave;ng đỏ th&igrave; c&agrave;ng chứa nhiều dưỡng chất, đặc biệt l&agrave; lycopene, betacarotene, th&agrave;nh phần chống oxy h&oacute;a kh&aacute;c v&agrave; vitamin C.</p>\r\n\r\n<p>Khi được nấu ch&iacute;n kỹ hay xay nhuyễn, c&aacute;c hoạt chất chống oxy h&oacute;a n&agrave;y được ph&oacute;ng th&iacute;ch nhiếu nhất. Trong trường hợp nấu ch&iacute;n, c&aacute;c vitamin kh&ocirc;ng bền với nhiệt sẽ mất đ&aacute;ng kể. Để bảo to&agrave;n hầu hết dưỡng chất, n&ecirc;n d&ugrave;ng c&agrave; chua tươi, xay nhuyễn. Khi chế biến m&oacute;n ăn, n&ecirc;n th&ecirc;m v&agrave;o t&iacute; dầu ăn để cơ thể hấp thu tối đa c&aacute;c th&agrave;nh phần dưỡng chất.</p>\r\n', 'Admin', '2019-01-08'),
(43, '7 lợi ích tuyệt vời của xoài', 'https://znews-photo.zadn.vn/w660/Uploaded/sgorvz/2016_06_14/qua_xoai_1.jpg', '<p>Với hương vị ngọt thơm, xo&agrave;i l&agrave; tr&aacute;i c&acirc;y y&ecirc;u th&iacute;ch của nhiều người. Đ&acirc;y l&agrave; thực phẩm tuyệt vời bởi kh&ocirc;ng chỉ tốt cho sức khỏe m&agrave; c&ograve;n gi&uacute;p l&agrave;m đẹp, chống l&atilde;o h&oacute;a.</p>\r\n\r\n<p><strong>1. Ổn định đường huyết</strong></p>\r\n\r\n<p>Xo&agrave;i chứa lượng đường tự nhi&ecirc;n kh&aacute; lớn, v&igrave; thế nhiều người nghĩ rằng xo&agrave;i l&agrave;m tăng lượng đường trong m&aacute;u. Thực chất, xo&agrave;i được xếp v&agrave;o loại quả gi&uacute;p ổn định nồng độ insulin trong m&aacute;u, tốt cho người bị tiểu đường.</p>\r\n\r\n<p>Ngo&agrave;i ra, xo&agrave;i cũng được biết đến với c&ocirc;ng dụng ngăn ngừa đột quỵ khi kiểm so&aacute;t mức độ homocystiene trong m&aacute;u. Chất xơ h&ograve;a tan pectin trong xo&agrave;i c&ograve;n c&oacute; t&aacute;c dụng giảm cholesterol, gi&uacute;p ngừa bệnh tim mạch.</p>\r\n\r\n<p><strong>2. Ngừa ung thư</strong></p>\r\n\r\n<p>Xo&agrave;i chứa hợp chất phenol - chất chống oxy h&oacute;a mạnh, gi&uacute;p ngăn ngừa bệnh ung thư v&uacute;, ung thư tuyến tiền liệt, ung thư ruột kết... Chất chống oxy h&oacute;a v&agrave; lượng lớn vitamin C trong xo&agrave;i cũng gi&uacute;p cơ thể duy tr&igrave; hệ thống miễn dịch khỏe mạnh.</p>\r\n\r\n<p><strong>3. Tăng cường thị lực</strong></p>\r\n\r\n<p>Xo&agrave;i rất gi&agrave;u vitamin A (retinol) gi&uacute;p tăng cường thị lực. Việc ăn xo&agrave;i thường xuy&ecirc;n cũng c&oacute; t&aacute;c dụng với c&aacute;c bệnh qu&aacute;ng g&agrave;, kh&ocirc; mắt, tật kh&uacute;c xạ, ngứa, r&aacute;t mắt&hellip;</p>\r\n\r\n<p><strong>4. Duy tr&igrave; c&acirc;n bằng kiềm trong cơ thể</strong></p>\r\n\r\n<p>Với c&aacute;c th&agrave;nh phần axit malic, tartaric v&agrave; citric, xo&agrave;i l&agrave; tr&aacute;i c&acirc;y tuyệt vời gi&uacute;p duy tr&igrave; sự c&acirc;n bằng kiềm trong cơ thể.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.monngon.tv/uploads/images/images/1457343128587_9911100(3).jpg\" style=\"height:432px; width:772px\" /></p>\r\n\r\n<p><strong>5. Tốt cho hệ ti&ecirc;u h&oacute;a</strong></p>\r\n\r\n<p>Với nhiều chất xơ, xo&agrave;i gi&uacute;p cải thiện hệ ti&ecirc;u h&oacute;a. Đ&acirc;y cũng l&agrave; loại tr&aacute;i c&acirc;y tốt cho người ăn ki&ecirc;ng do &iacute;t calo. Ngo&agrave;i ra, xo&agrave;i rất gi&agrave;u vitamin E, gi&uacute;p tăng cường v&agrave; cải thiện ham muốn t&igrave;nh dục.</p>\r\n\r\n<p><strong>6. Bổ sung kho&aacute;ng chất</strong></p>\r\n\r\n<p>Sự vắng mặt của c&aacute;c kho&aacute;ng chất vi lượng như đồng, selen, kẽm v&agrave; kali c&oacute; thể g&acirc;y ra nhiều vấn đề về sức khỏe. Th&ecirc;m xo&agrave;i v&agrave;o thực đơn tr&aacute;i c&acirc;y sẽ gi&uacute;p bạn bổ sung những kho&aacute;ng chất n&agrave;y cho cơ thể.</p>\r\n\r\n<p><strong>7. L&agrave;m đẹp</strong><br />\r\nNgo&agrave;i những lợi &iacute;ch về sức khỏe, xo&agrave;i cũng l&agrave; thực phẩm l&yacute; tưởng để l&agrave;m đẹp. Vitamin A v&agrave; beta-carotene trong xo&agrave;i c&oacute; khả năng l&agrave;m giảm đốm đen, t&agrave;n nhang, mụn trứng c&aacute;, gi&uacute;p phục hồi v&agrave; trẻ h&oacute;a l&agrave;n da.</p>\r\n\r\n<p>C&aacute;c chất chống oxy h&oacute;a trong xo&agrave;i cũng gi&uacute;p tr&igrave; ho&atilde;n sự khởi đầu qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da, bảo vệ l&agrave;n da chống lại c&aacute;c gốc tự do c&oacute; hại c&oacute; thể g&acirc;y ung thư da.</p>\r\n', 'Admin', '2019-01-08'),
(44, 'Những tác dụng của bí đỏ tốt cho sức khỏe của bạn', 'https://s1.bloganchoi.com/wp-content/uploads/2018/03/bi-do-696x492.jpg', '<p>C&aacute;c m&oacute;n ăn từ b&iacute; đỏ&nbsp;(b&iacute; ng&ocirc;) lu&ocirc;n được y&ecirc;u th&iacute;ch v&igrave; hương vị thơm ngon v&agrave; v&ocirc; c&ugrave;ng bổ dưỡng. BlogAnChoi sẽ gi&uacute;p bạn t&igrave;m hiểu cụ thế 10&nbsp;<em>t&aacute;c dụng của b&iacute; đỏ</em> đối với sức khỏe nh&eacute;!</p>\r\n\r\n<p>Trong b&iacute; đỏ c&oacute; chứa h&agrave;m lượng cao axit glutamine &ndash; chất thiết yếu cho sự hoạt động của n&atilde;o bộ. Th&agrave;nh phần n&agrave;y của b&iacute; đỏ c&oacute; vai tr&ograve; quan trọng trong việc chuyển h&oacute;a tế b&agrave;o thần kinh v&agrave; bồi dưỡng n&atilde;o.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s1.bloganchoi.com/wp-content/uploads/2018/03/bi-do-696x492.jpg\" style=\"height:424px; width:600px\" /></p>\r\n\r\n<p>Đặc biệt, phụ nữ mang thai n&ecirc;n bổ sung b&iacute; đỏ v&agrave;o thực đơn, v&igrave; chất n&agrave;y gi&uacute;p k&iacute;ch th&iacute;ch v&agrave; ph&aacute;t triển n&atilde;o bộ của c&aacute;c thai nhi. Đồng thời, ăn c&aacute;c m&oacute;n ăn từ b&iacute; đỏ cũng gi&uacute;p l&agrave;m giảm thiểu những biến chứng, triệu chứng ti&ecirc;u cực khi mang thai như ph&ugrave; nề, tăng huyết &aacute;p&hellip; v&agrave; ph&ograve;ng chống bị sốt xuất huyết sau khi sinh.</p>\r\n\r\n<h2><strong><strong>2. Tốt cho mắt</strong></strong></h2>\r\n\r\n<p>Ăn b&iacute; đỏ c&oacute; thể gi&uacute;p bạn ngăn ngừa được c&aacute;c bệnh về tho&aacute;i h&oacute;a mắt. Bởi v&igrave; b&iacute; đỏ c&oacute; chứa h&agrave;m lượng carotene cao, sau khi được hấp thụ v&agrave;o cơ thể sẽ chuyển h&oacute;a chất n&agrave;y th&agrave;nh c&aacute;c vitamin A gi&uacute;p duy tr&igrave; v&agrave; ph&aacute;t triển thị lực.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s2.bloganchoi.com/wp-content/uploads/2018/03/tac-dung-cua-bi-ngo.jpg\" style=\"height:480px; width:640px\" /></p>\r\n\r\n<h2><strong><strong>3. Gi&uacute;p g</strong></strong><strong><strong>iảm c&acirc;n hiệu quả</strong></strong></h2>\r\n\r\n<p>H&agrave;m lượng chất b&eacute;o v&agrave; calo thấp trong b&iacute; đỏ rất ph&ugrave; hợp với qu&aacute; tr&igrave;nh trao đổi chất của những người muốn giảm c&acirc;n. Chuy&ecirc;n gia dinh dưỡng đ&atilde; cho biết ăn b&iacute; đỏ c&ograve;n tạo ra cảm gi&aacute;c no l&acirc;u, l&agrave;m hạn chế sự th&egrave;m ăn của cơ thể. V&igrave; thế, đ&acirc;y sẽ l&agrave; một loại thực phẩm l&yacute; tưởng cho những ai đang muốn giảm c&acirc;n.</p>\r\n\r\n<p>Một trong những th&agrave;nh phần ch&iacute;nh của b&iacute; đỏ l&agrave; vitamin C &ndash; chất t&aacute;c dụng tăng sức đề kh&aacute;ng cho cơ thể. Nhờ đ&oacute;, hệ miễn dịch được cải thiện, gi&uacute;p bạn tho&aacute;t khỏi sự tấn c&ocirc;ng của vi khuẩn, vi r&uacute;t. V&igrave; thế, h&atilde;y ăn b&iacute; đỏ để tr&aacute;nh khỏi những căn bệnh th&ocirc;ng thường.</p>\r\n\r\n<h2><strong><strong>5. Tốt cho tim mạch</strong></strong></h2>\r\n\r\n<p style=\"text-align:center\">Bạn c&oacute; thể ngăn ngừa một số bệnh về t&igrave;m mạch khi ăn b&iacute; đỏ. Trong thực phẩm n&agrave;y c&oacute; chứa c&aacute;c axit b&eacute;o như omega 3, omega 6 gi&uacute;p l&agrave;m giảm c&aacute;c lượng cholesterol xấu trong cơ thể. Đặc biệt, c&aacute;c axit n&agrave;y c&oacute; rất nhiều trong hạt b&iacute;.<img alt=\"\" src=\"https://s1.bloganchoi.com/wp-content/uploads/2018/03/hat-bi-696x348.jpg\" style=\"height:348px; width:696px\" /></p>\r\n\r\n<h2><strong><strong>6. Tẩy giun</strong></strong></h2>\r\n\r\n<p>B&ecirc;n cạnh việc uống thuốc th&ocirc;ng thường, bạn n&ecirc;n kết hợp với ăn b&iacute; đỏ v&agrave; hạt b&iacute; rang để tẩy giun hiệu quả hơn. Kh&ocirc;ng những thế, trẻ em nếu ăn b&iacute; đỏ c&ograve;n c&oacute; thể ph&ograve;ng ngừa được chứng giun s&aacute;n.</p>\r\n\r\n<h2><strong><strong>7. Ph&ograve;ng chống ung thư</strong></strong></h2>\r\n\r\n<p>C&aacute;c nghi&ecirc;n cứu của c&aacute;c nh&agrave; khoa học đ&atilde; cho thấy trong b&iacute; đỏ c&oacute; chứa nhiều beta- carotene. Chất n&agrave;y c&oacute; t&aacute;c dụng chống vi&ecirc;m v&agrave; ngăn ngừa một số bệnh ung thư hiệu quả. V&igrave; vậy, đừng bỏ qua c&aacute;c m&oacute;n từ b&iacute; đỏ để đẩy l&ugrave;i nguy cơ ung thư nh&eacute;!</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s1.bloganchoi.com/wp-content/uploads/2018/03/canh-bi-do-696x392.jpg\" style=\"height:392px; width:696px\" /></p>\r\n\r\n<h2><strong><strong>8. Ngăn ngừa nguy cơ bị tiểu đường</strong></strong></h2>\r\n\r\n<p>B&iacute; đỏ gi&uacute;p l&agrave;m hạ đường huyết trong m&aacute;u, hỗ trợ tr&aacute;nh được nguy cơ bị tiểu đường. Tượng tự, những người đang bị bệnh n&agrave;y nếu ăn b&iacute; đỏ sẽ cải thiện t&igrave;nh trạng cơ thể, tr&aacute;nh ph&aacute;t triển th&agrave;nh bệnh m&atilde;n t&iacute;nh.</p>\r\n\r\n<h2><strong><strong>9. Chống l&atilde;o h&oacute;a</strong></strong></h2>\r\n\r\n<p>B&iacute; đỏ c&oacute; thể gi&uacute;p bảo vệ da v&agrave; chống lại mức độ ảnh hưởng của &aacute;nh nắng mặt trời tới l&agrave;n da. H&agrave;m lượng vitamin C dồi d&agrave;o c&oacute; trong b&iacute; đỏ c&oacute; thể chống lại c&aacute;c gốc tế b&agrave;o tự do g&acirc;y ra l&atilde;o h&oacute;a, thậm ch&iacute; c&ograve;n gi&uacute;p l&agrave;m đẹp da.</p>\r\n', 'Admin', '2019-01-08'),
(45, '10 lợi ích tuyệt vời khi ăn táo mà bạn không biết', 'http://sohanews.sohacdn.com/thumb_w/660/2017/photo-6-1487059676040-64-0-436-600-crop-1487059888747.jpg', '<p><strong>Ăn t&aacute;o c&ograve;n nhiều lợi &iacute;ch kh&aacute;c với sức khỏe m&agrave; c&oacute; thể bạn kh&ocirc;ng biết, v&iacute; dụ như ngăn ngừa bệnh Alzheimer v&agrave; ung thư, giảm nguy cơ mắc bệnh tiểu đường...</strong></p>\r\n\r\n<p>T&aacute;o&nbsp;</p>\r\n\r\n<p>l&agrave; một trong những thực phẩm gi&agrave;u c&aacute;c chất dinh dưỡng, vitamin v&agrave; protein... n&ecirc;n bạn c&oacute; thể ăn ch&uacute;ng h&agrave;n ng&agrave;y để tăng cường sức khỏe cho m&igrave;nh.</p>\r\n\r\n<p>T&aacute;o c&ograve;n chứa nhiều chất xơ, chất chống oxy h&oacute;a v&agrave; vitamin C n&ecirc;n cũng c&oacute; t&aacute;c dụng tăng cường miễn dịch, tăng sức đề kh&aacute;ng cũng như chống l&atilde;o h&oacute;a, bảo vệ sức khỏe tim mạch.</p>\r\n\r\n<p>Ngo&agrave;i ra, t&aacute;o c&ograve;n nhiều lợi &iacute;ch kh&aacute;c với sức khỏe m&agrave; c&oacute; thể bạn kh&ocirc;ng biết, v&iacute; dụ như ngăn ngừa bệnh Alzheimer v&agrave; ung thư, giảm nguy cơ mắc bệnh tiểu đường, l&agrave;m giảm cholesterol xấu v&agrave; cải thiện hệ thống miễn dịch...</p>\r\n\r\n<p>Với những lợi &iacute;ch sức khỏe tuyệt vời như vậy, t&aacute;o &quot;xứng đ&aacute;ng&quot; được coi l&agrave; những phẩm l&agrave;nh mạnh n&ecirc;n bổ sung trong cuộc sống h&agrave;ng ng&agrave;y của mỗi người.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; một số lợi &iacute;ch sức khỏe th&uacute; vị v&agrave; quan trọng nhất của quả t&aacute;o m&agrave; bạn n&ecirc;n biết th&ecirc;m:</p>\r\n\r\n<p><strong>1. Giảm cholesterol xấu</strong></p>\r\n\r\n<p>T&aacute;o c&oacute; chứa pectin, một loại chất xơ h&ograve;a tan. Pectin c&oacute; hiệu quả trong việc l&agrave;m giảm cholesterol xấu trong cơ thể bằng c&aacute;ch giảm lipoprotein mật độ thấp (LDL).</p>\r\n\r\n<p>Điều n&agrave;y sẽ gi&uacute;p l&agrave;m giảm nguy cơ mắc bệnh xơ vữa động mạch v&agrave; bệnh tim hiệu quả.</p>\r\n\r\n<p><img alt=\"\" src=\"http://sohanews.sohacdn.com/2017/photo-1-1487059672798.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p><strong>2. Ngăn ngừa bệnh Alzheimer</strong></p>\r\n\r\n<p>T&aacute;o c&oacute; t&aacute;c dụng ngăn ngừa bệnh Alzheimer l&agrave; bởi v&igrave; trong t&aacute;o c&oacute; chứa một chất chống oxy h&oacute;a hiệu quả gọi l&agrave; quercetin.</p>\r\n\r\n<p>Quercetin đặc biệt c&oacute; hiệu ứng với hệ thần kinh, đ&oacute; l&agrave; bảo vệ c&aacute;c tế b&agrave;o n&atilde;o khỏi bị hư hại, ph&ograve;ng tr&aacute;nh c&aacute;c bệnh li&ecirc;n quan đến thần kinh, bao gồm cả Alzheimer.</p>\r\n\r\n<p><img alt=\"\" src=\"http://sohanews.sohacdn.com/2017/photo-1-1487059676029.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p><strong>3. Giảm nguy cơ tiểu đường</strong></p>\r\n\r\n<p>Nhiều loại tr&aacute;i c&acirc;y bị coi l&agrave; &quot;thủ phạm&quot; l&agrave;m tăng nguy cơ ph&aacute;t triển bệnh tiểu đường nhưng t&aacute;o kh&ocirc;ng nằm trong số đ&oacute;.</p>\r\n\r\n<p>Ti&ecirc;u thụ t&aacute;o ở mức độ vừa phải c&ograve;n c&oacute; lợi ở chỗ giữ cho lượng đường trong m&aacute;u của bạn lu&ocirc;n ở mức kiểm so&aacute;t, tr&aacute;nh tăng cao dẫn đến bệnh tiểu đường.</p>\r\n\r\n<p>C&aacute;c dưỡng chất thực vật v&agrave; chất chống oxy h&oacute;a trong t&aacute;o như polyphenol sẽ l&agrave;m giảm hấp thu glucose v&agrave; ổn định lượng đường trong m&aacute;u.</p>\r\n\r\n<p><img alt=\"\" src=\"http://sohanews.sohacdn.com/2017/photo-2-1487059676031.jpg\" /></p>\r\n\r\n<p><strong>4. Tăng cường hệ thống miễn dịch của cơ thể</strong></p>\r\n\r\n<p>Vitamin C l&agrave; một trong những th&agrave;nh phần c&oacute; t&aacute;c dụng hỗ trợ hệ miễn dịch của con người. Vitamin C lại c&oacute; nhiều trong t&aacute;o n&ecirc;n ti&ecirc;u thụ t&aacute;o h&agrave;ng ng&agrave;y sẽ gi&uacute;p cơ thể trước những sự tấn c&ocirc;ng của c&aacute;c yếu tố b&ecirc;n ngo&agrave;i.</p>\r\n\r\n<p><strong>5. Ngăn ngừa đục thủy tinh thể</strong></p>\r\n\r\n<p>Một trong những l&yacute; do ch&iacute;nh của t&igrave;nh trạng đục thủy tinh thể l&agrave; bởi sự tho&aacute;i h&oacute;a do oxy h&oacute;a g&acirc;y ra.</p>\r\n\r\n<p>Thường xuy&ecirc;n ăn t&aacute;o sẽ gi&uacute;p loại bỏ c&aacute;c gốc tự do, đẩy l&ugrave;i nguy cơ oxy h&oacute;a dẫn đến tho&aacute;i h&oacute;a v&agrave; do đ&oacute; bảo vệ mắt khỏi nguy cơ đục thủy tinh thể.</p>\r\n\r\n<p><strong>6. Tốt cho da</strong></p>\r\n\r\n<p>Collagen v&agrave; elastin trong t&aacute;o sẽ c&oacute; t&aacute;c động l&ecirc;n l&agrave;n da của bạn để giữ cho da trắng s&aacute;ng, rạng rỡ v&agrave; khỏe mạnh hơn.</p>\r\n\r\n<p>Ngo&agrave;i ra, c&aacute;c chất chống oxy h&oacute;a trong t&aacute;o cũng g&oacute;p phần đẩy l&ugrave;i qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a, đồng thời tăng sức đề kh&aacute;ng của da.</p>\r\n\r\n<p><img alt=\"\" src=\"http://sohanews.sohacdn.com/2017/photo-5-1487059676037.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p><strong>7. Giảm c&aacute;c triệu chứng hen suyễn v&agrave; bệnh ở đường h&ocirc; hấp</strong></p>\r\n\r\n<p>C&aacute;c chất phytochemical trong t&aacute;o được chứng minh l&agrave; c&oacute; hiệu quả ở những người bị hen suyễn v&agrave; c&aacute;c bệnh dị ứng kh&aacute;c li&ecirc;n quan đến đường h&ocirc; hấp bị tắc nghẽn.</p>\r\n\r\n<p>C&aacute;c th&agrave;nh phần như flavanoids v&agrave; axit phenolic cũng c&oacute; t&aacute;c dụng giảm c&aacute;c triệu chứng do bệnh hen suyễn hoặc bệnh ở đường h&ocirc; hấp g&acirc;y ra.</p>\r\n\r\n<p><strong>8. Giảm c&acirc;n</strong></p>\r\n\r\n<p>Sự hiện diện của chất chống oxy h&oacute;a v&agrave; pectin trong t&aacute;o tươi ch&iacute;nh l&agrave; yếu tố gi&uacute;p cho trọng lượng cơ thể của bạn lu&ocirc;n ở mức kiểm so&aacute;t, ổn định.</p>\r\n\r\n<p>Polyphenol trong t&aacute;o cũng gi&uacute;p điều h&ograve;a sự chuyển h&oacute;a chất b&eacute;o n&ecirc;n bạn sẽ kh&ocirc;ng phải lo đến nguy cơ tăng c&acirc;n.</p>\r\n\r\n<p><strong>9. Chống ung thư</strong></p>\r\n\r\n<p>C&aacute;c chất chống oxy h&oacute;a flavonoid như quercetin v&agrave; triterpenoids trong t&aacute;o gi&uacute;p l&agrave;m chậm sự ph&aacute;t triển của bệnh ung thư, đặc biệt l&agrave; ung thư ở đại tr&agrave;ng, phổi v&agrave; ngực.</p>\r\n\r\n<p><strong>10. Bảo vệ xương</strong></p>\r\n\r\n<p>Một trong số c&aacute;c th&agrave;nh phần dinh dưỡng của quả t&aacute;o l&agrave; phloridzin c&oacute; t&aacute;c dụng bảo vệ xương rất hiệu quả, tr&aacute;nh bệnh lo&atilde;ng xương, đặc biệt l&agrave; ở phụ nữ sau m&atilde;n kinh. N&oacute; cũng sẽ l&agrave;m tăng mật độ xương, gi&uacute;p xương chắc khỏe.</p>\r\n\r\n<p><img alt=\"\" src=\"http://sohanews.sohacdn.com/2017/photo-9-1487059676048.jpg\" style=\"height:450px; width:600px\" /></p>\r\n', 'Admin', '2019-01-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `height` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `file_name`, `width`, `height`, `date_created`, `date_modified`) VALUES
(46, 'depositphotos_139840908-stock-photo-collage-of-fresh-fruits-and.jpg', '1536', '500', '2019-01-24 11:21:59', '2019-01-24 11:26:24'),
(47, 'satoyu-contact-banner.png', '1536', '500', '2019-01-24 11:22:08', '2019-01-24 11:26:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name_category`) VALUES
(21, 'Cherry'),
(29, 'Xoài'),
(30, 'Táo'),
(32, 'Nho'),
(33, 'Cam'),
(34, 'Chuối'),
(35, 'Kiwi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company_info`
--

CREATE TABLE `company_info` (
  `id` int(10) NOT NULL,
  `sdt1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sdt2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `map` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company_info`
--

INSERT INTO `company_info` (`id`, `sdt1`, `sdt2`, `email`, `address`, `map`) VALUES
(1, '0898 480 187', '0898 480 187', 'info@phdfruits.vn', '590 Cách Mạng Tháng 8, Quận 3, Hồ Chí Minh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.325648981132!2d106.66413881462097!3d10.786351461960367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed23ca5d8db%3A0x24d414f45e5a523!2zNTkwIEPDoWNoIE3huqFuZyBUaMOhbmcgOCwgUGjGsOG7nW5nIDExLCBRdeG6rW4gMywgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1556074002258!5m2!1svi!2s\"   height=\"400px\" class=\"container\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `count_visit`
--

CREATE TABLE `count_visit` (
  `id` int(1) NOT NULL,
  `visit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `count_visit`
--

INSERT INTO `count_visit` (`id`, `visit`) VALUES
(1, 309);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_order`
--

CREATE TABLE `list_order` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `note` mediumtext COLLATE utf8_unicode_ci,
  `list_products` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(20) DEFAULT NULL,
  `price_sale` int(20) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `hot` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `homepage` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `sort_homepage` int(20) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `category`, `price`, `price_sale`, `file_name`, `description`, `hot`, `homepage`, `sort_homepage`, `date_created`, `date_modified`) VALUES
(53, 'Cherry', 211, '21', 590000, 490000, '8.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut orci eget tortor efficitur molestie non in mi. Suspendisse ac odio in dui dignissim scelerisque. Vivamus at pellentesque lectus. Phasellus condimentum, sem quis efficitur porttitor, nisi sem dapibus neque, vitae commodo magna lorem vel nulla. Pellentesque et euismod sapien, sit amet sodales nulla. Mauris id volutpat neque. Proin eu ipsum posuere, efficitur dui et, dapibus est. Quisque pretium, enim vel molestie vestibulum, nunc massa imperdiet mauris, eget tempor velit urna sit amet ipsum. Quisque faucibus ante id ultricies condimentum. Duis velit arcu, ornare non elit hendrerit, scelerisque posuere velit. Donec ornare fringilla neque. Morbi laoreet porta nisl, sed faucibus diam ornare non. Donec enim ex, iaculis sit amet aliquam sit amet, sodales dignissim tellus.</p>\r\n\r\n<p>Phasellus semper orci a nulla aliquam, convallis finibus diam condimentum. Integer lobortis urna at dui consequat ultricies. Phasellus vehicula sed ante nec rhoncus. Mauris eu nisi vitae arcu dignissim consectetur vitae sed orci. Nullam non vestibulum tortor, vitae tempor odio. Suspendisse tincidunt varius velit, quis pellentesque ipsum. Aliquam augue tortor, tempor eu augue vel, aliquam congue ipsum. Praesent sodales purus et congue faucibus. Nulla nec ante at lorem congue sollicitudin a a diam. Aliquam mattis, justo quis pharetra suscipit, urna velit luctus erat, eu tincidunt ex odio sed felis. Nam elementum massa libero, et luctus eros tincidunt et. Quisque semper pretium lectus in auctor. Ut sit amet metus nulla.</p>\r\n\r\n<p>Fusce urna ligula, imperdiet ut mauris id, vestibulum venenatis tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc quam erat, tristique quis neque quis, pretium finibus tortor. Vivamus mattis tincidunt consequat. Fusce at purus scelerisque, efficitur diam a, volutpat arcu. Nulla vitae efficitur nisi. Nulla tristique facilisis tellus a mattis. Nulla mattis consequat interdum. Vivamus ullamcorper, felis vitae ullamcorper rhoncus, felis augue porta ipsum, luctus posuere magna turpis nec metus. Praesent interdum diam nec enim vestibulum, at fringilla justo tristique. Praesent quam velit, laoreet sed porttitor nec, egestas et urna. Quisque nec lectus purus. Duis at malesuada odio.</p>\r\n\r\n<p>Integer mollis placerat nisi eu cursus. Praesent rhoncus vitae diam sed tempor. Proin ut risus id mauris laoreet sodales. Suspendisse ornare, ante eget finibus euismod, dui orci congue justo, quis rhoncus purus tellus eu arcu. Aliquam erat volutpat. Donec malesuada erat turpis, sed porttitor turpis rhoncus non. Aliquam erat volutpat. Sed nec tortor eget dui accumsan venenatis. Nunc imperdiet placerat orci a venenatis. Cras vehicula lacinia eros vel luctus.</p>\r\n\r\n<p>.Donec congue ornare consequat. Aliquam varius congue nisl, non varius mauris commodo nec. Maecenas quis est nunc. Pellentesque mattis massa quis commodo finibus. Cras congue ante risus, a cursus ligula posuere non. Curabitur ut leo nunc. Integer feugiat tincidunt risus at eleifend. Nullam vitae libero a quam auctor fermentum. Donec leo nisi, tempor at faucibus in, iaculis sed quam. Sed pretium lacus eu enim hendrerit rhoncus..</p>', 'Có', 'Có', 3, '2019-01-23 13:57:03', '2019-02-12 22:26:47'),
(54, 'Táo Đỏ', 206, '30', 250000, 150000, 'apple-fruit-11526067113bpkdzjmq8g.png', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut orci eget tortor efficitur molestie non in mi. Suspendisse ac odio in dui dignissim scelerisque. Vivamus at pellentesque lectus. Phasellus condimentum, sem quis efficitur porttitor, nisi sem dapibus neque, vitae commodo magna lorem vel nulla. Pellentesque et euismod sapien, sit amet sodales nulla. Mauris id volutpat neque. Proin eu ipsum posuere, efficitur dui et, dapibus est. Quisque pretium, enim vel molestie vestibulum, nunc massa imperdiet mauris, eget tempor velit urna sit amet ipsum. Quisque faucibus ante id ultricies condimentum. Duis velit arcu, ornare non elit hendrerit, scelerisque posuere velit. Donec ornare fringilla neque. Morbi laoreet porta nisl, sed faucibus diam ornare non. Donec enim ex, iaculis sit amet aliquam sit amet, sodales dignissim tellus.</p>\r\n\r\n<p>Phasellus semper orci a nulla aliquam, convallis finibus diam condimentum. Integer lobortis urna at dui consequat ultricies. Phasellus vehicula sed ante nec rhoncus. Mauris eu nisi vitae arcu dignissim consectetur vitae sed orci. Nullam non vestibulum tortor, vitae tempor odio. Suspendisse tincidunt varius velit, quis pellentesque ipsum. Aliquam augue tortor, tempor eu augue vel, aliquam congue ipsum. Praesent sodales purus et congue faucibus. Nulla nec ante at lorem congue sollicitudin a a diam. Aliquam mattis, justo quis pharetra suscipit, urna velit luctus erat, eu tincidunt ex odio sed felis. Nam elementum massa libero, et luctus eros tincidunt et. Quisque semper pretium lectus in auctor. Ut sit amet metus nulla.</p>\r\n\r\n<p>Fusce urna ligula, imperdiet ut mauris id, vestibulum venenatis tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc quam erat, tristique quis neque quis, pretium finibus tortor. Vivamus mattis tincidunt consequat. Fusce at purus scelerisque, efficitur diam a, volutpat arcu. Nulla vitae efficitur nisi. Nulla tristique facilisis tellus a mattis. Nulla mattis consequat interdum. Vivamus ullamcorper, felis vitae ullamcorper rhoncus, felis augue porta ipsum, luctus posuere magna turpis nec metus. Praesent interdum diam nec enim vestibulum, at fringilla justo tristique. Praesent quam velit, laoreet sed porttitor nec, egestas et urna. Quisque nec lectus purus. Duis at malesuada odio.</p>\r\n\r\n<p>Integer mollis placerat nisi eu cursus. Praesent rhoncus vitae diam sed tempor. Proin ut risus id mauris laoreet sodales. Suspendisse ornare, ante eget finibus euismod, dui orci congue justo, quis rhoncus purus tellus eu arcu. Aliquam erat volutpat. Donec malesuada erat turpis, sed porttitor turpis rhoncus non. Aliquam erat volutpat. Sed nec tortor eget dui accumsan venenatis. Nunc imperdiet placerat orci a venenatis. Cras vehicula lacinia eros vel luctus.</p>\r\n\r\n<p>.Donec congue ornare consequat. Aliquam varius congue nisl, non varius mauris commodo nec. Maecenas quis est nunc. Pellentesque mattis massa quis commodo finibus. Cras congue ante risus, a cursus ligula posuere non. Curabitur ut leo nunc. Integer feugiat tincidunt risus at eleifend. Nullam vitae libero a quam auctor fermentum. Donec leo nisi, tempor at faucibus in, iaculis sed quam. Sed pretium lacus eu enim hendrerit rhoncus..</p>\r\n</div>', 'Có', 'Có', 4, '2019-01-23 13:59:19', '2019-02-12 22:26:40'),
(55, 'Nho đen Mỹ', 211, '32', 400000, 350000, 'black-seedless-grapes-500x500.jpg', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut orci eget tortor efficitur molestie non in mi. Suspendisse ac odio in dui dignissim scelerisque. Vivamus at pellentesque lectus. Phasellus condimentum, sem quis efficitur porttitor, nisi sem dapibus neque, vitae commodo magna lorem vel nulla. Pellentesque et euismod sapien, sit amet sodales nulla. Mauris id volutpat neque. Proin eu ipsum posuere, efficitur dui et, dapibus est. Quisque pretium, enim vel molestie vestibulum, nunc massa imperdiet mauris, eget tempor velit urna sit amet ipsum. Quisque faucibus ante id ultricies condimentum. Duis velit arcu, ornare non elit hendrerit, scelerisque posuere velit. Donec ornare fringilla neque. Morbi laoreet porta nisl, sed faucibus diam ornare non. Donec enim ex, iaculis sit amet aliquam sit amet, sodales dignissim tellus.</p>\r\n\r\n<p>Phasellus semper orci a nulla aliquam, convallis finibus diam condimentum. Integer lobortis urna at dui consequat ultricies. Phasellus vehicula sed ante nec rhoncus. Mauris eu nisi vitae arcu dignissim consectetur vitae sed orci. Nullam non vestibulum tortor, vitae tempor odio. Suspendisse tincidunt varius velit, quis pellentesque ipsum. Aliquam augue tortor, tempor eu augue vel, aliquam congue ipsum. Praesent sodales purus et congue faucibus. Nulla nec ante at lorem congue sollicitudin a a diam. Aliquam mattis, justo quis pharetra suscipit, urna velit luctus erat, eu tincidunt ex odio sed felis. Nam elementum massa libero, et luctus eros tincidunt et. Quisque semper pretium lectus in auctor. Ut sit amet metus nulla.</p>\r\n\r\n<p>Fusce urna ligula, imperdiet ut mauris id, vestibulum venenatis tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc quam erat, tristique quis neque quis, pretium finibus tortor. Vivamus mattis tincidunt consequat. Fusce at purus scelerisque, efficitur diam a, volutpat arcu. Nulla vitae efficitur nisi. Nulla tristique facilisis tellus a mattis. Nulla mattis consequat interdum. Vivamus ullamcorper, felis vitae ullamcorper rhoncus, felis augue porta ipsum, luctus posuere magna turpis nec metus. Praesent interdum diam nec enim vestibulum, at fringilla justo tristique. Praesent quam velit, laoreet sed porttitor nec, egestas et urna. Quisque nec lectus purus. Duis at malesuada odio.</p>\r\n\r\n<p>Integer mollis placerat nisi eu cursus. Praesent rhoncus vitae diam sed tempor. Proin ut risus id mauris laoreet sodales. Suspendisse ornare, ante eget finibus euismod, dui orci congue justo, quis rhoncus purus tellus eu arcu. Aliquam erat volutpat. Donec malesuada erat turpis, sed porttitor turpis rhoncus non. Aliquam erat volutpat. Sed nec tortor eget dui accumsan venenatis. Nunc imperdiet placerat orci a venenatis. Cras vehicula lacinia eros vel luctus.</p>\r\n\r\n<p>.Donec congue ornare consequat. Aliquam varius congue nisl, non varius mauris commodo nec. Maecenas quis est nunc. Pellentesque mattis massa quis commodo finibus. Cras congue ante risus, a cursus ligula posuere non. Curabitur ut leo nunc. Integer feugiat tincidunt risus at eleifend. Nullam vitae libero a quam auctor fermentum. Donec leo nisi, tempor at faucibus in, iaculis sed quam. Sed pretium lacus eu enim hendrerit rhoncus..</p>\r\n</div>', 'Có', 'Có', 5, '2019-01-23 14:37:04', '2019-02-12 22:26:14'),
(56, 'Cam Nam Phi', 224, '33', 300000, 250000, 'fruit-orange.jpg', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut orci eget tortor efficitur molestie non in mi. Suspendisse ac odio in dui dignissim scelerisque. Vivamus at pellentesque lectus. Phasellus condimentum, sem quis efficitur porttitor, nisi sem dapibus neque, vitae commodo magna lorem vel nulla. Pellentesque et euismod sapien, sit amet sodales nulla. Mauris id volutpat neque. Proin eu ipsum posuere, efficitur dui et, dapibus est. Quisque pretium, enim vel molestie vestibulum, nunc massa imperdiet mauris, eget tempor velit urna sit amet ipsum. Quisque faucibus ante id ultricies condimentum. Duis velit arcu, ornare non elit hendrerit, scelerisque posuere velit. Donec ornare fringilla neque. Morbi laoreet porta nisl, sed faucibus diam ornare non. Donec enim ex, iaculis sit amet aliquam sit amet, sodales dignissim tellus.</p>\r\n\r\n<p>Phasellus semper orci a nulla aliquam, convallis finibus diam condimentum. Integer lobortis urna at dui consequat ultricies. Phasellus vehicula sed ante nec rhoncus. Mauris eu nisi vitae arcu dignissim consectetur vitae sed orci. Nullam non vestibulum tortor, vitae tempor odio. Suspendisse tincidunt varius velit, quis pellentesque ipsum. Aliquam augue tortor, tempor eu augue vel, aliquam congue ipsum. Praesent sodales purus et congue faucibus. Nulla nec ante at lorem congue sollicitudin a a diam. Aliquam mattis, justo quis pharetra suscipit, urna velit luctus erat, eu tincidunt ex odio sed felis. Nam elementum massa libero, et luctus eros tincidunt et. Quisque semper pretium lectus in auctor. Ut sit amet metus nulla.</p>\r\n\r\n<p>Fusce urna ligula, imperdiet ut mauris id, vestibulum venenatis tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc quam erat, tristique quis neque quis, pretium finibus tortor. Vivamus mattis tincidunt consequat. Fusce at purus scelerisque, efficitur diam a, volutpat arcu. Nulla vitae efficitur nisi. Nulla tristique facilisis tellus a mattis. Nulla mattis consequat interdum. Vivamus ullamcorper, felis vitae ullamcorper rhoncus, felis augue porta ipsum, luctus posuere magna turpis nec metus. Praesent interdum diam nec enim vestibulum, at fringilla justo tristique. Praesent quam velit, laoreet sed porttitor nec, egestas et urna. Quisque nec lectus purus. Duis at malesuada odio.</p>\r\n\r\n<p>Integer mollis placerat nisi eu cursus. Praesent rhoncus vitae diam sed tempor. Proin ut risus id mauris laoreet sodales. Suspendisse ornare, ante eget finibus euismod, dui orci congue justo, quis rhoncus purus tellus eu arcu. Aliquam erat volutpat. Donec malesuada erat turpis, sed porttitor turpis rhoncus non. Aliquam erat volutpat. Sed nec tortor eget dui accumsan venenatis. Nunc imperdiet placerat orci a venenatis. Cras vehicula lacinia eros vel luctus.</p>\r\n\r\n<p>.Donec congue ornare consequat. Aliquam varius congue nisl, non varius mauris commodo nec. Maecenas quis est nunc. Pellentesque mattis massa quis commodo finibus. Cras congue ante risus, a cursus ligula posuere non. Curabitur ut leo nunc. Integer feugiat tincidunt risus at eleifend. Nullam vitae libero a quam auctor fermentum. Donec leo nisi, tempor at faucibus in, iaculis sed quam. Sed pretium lacus eu enim hendrerit rhoncus..</p>\r\n</div>', 'Có', 'Có', 6, '2019-01-23 14:37:50', '2019-02-12 22:25:20'),
(60, 'Cam Xoàn', 29, '33', 35000, 15000, 'cam-xoan.jpg', '', 'Có', 'Có', 7, '2019-04-24 08:56:49', '2019-02-15 14:43:08'),
(62, 'Kiwi Úc', 4, '35', 150000, 110000, 'cachnauan.edu_.vn-cach-chon-kiwi.jpg', '', 'Có', 'Có', 8, '2019-05-03 08:50:17', '2019-02-15 15:05:29');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account_admin`
--
ALTER TABLE `account_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_order`
--
ALTER TABLE `list_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account_admin`
--
ALTER TABLE `account_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `list_order`
--
ALTER TABLE `list_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
