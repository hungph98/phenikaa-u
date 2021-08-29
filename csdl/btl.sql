-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 05:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `iddangnhap` int(10) NOT NULL,
  `tendangnhap` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` date NOT NULL,
  `idphanquyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`iddangnhap`, `tendangnhap`, `matkhau`, `hoten`, `diachi`, `ngaylap`, `idphanquyen`) VALUES
(7, 'hung', '$2y$10$zLUQTLXBT6lswO4OkY/B.OjDQ9wJFt3URrD4OPGs/XOUpWYZx.5hm', 'Phạm Hưng', ' Hưng Yên', '2021-02-20', 1),
(8, 'Giang1', '$2y$10$tt6ctnJEsF0DByK0TBdcA.PAvMfgy.mi2YZLyN1rnauUkQLQ1B89K', 'Phạm Giang', ' Hà Nội', '2021-08-24', 1),
(12, 'Giang2', '$2y$10$b6Ajkyt/26EodrA2cDkIJus3wNjmi3z48q23FeXrD1ojOYFgqbw4a', 'phạm giang', ' hà nội', '2021-08-25', 1),
(14, 'giang', '$2y$10$ulZqTPgq4fWfIa5TGFI9yucERQ1VnKkxwzZoT2m1qBlLGxXN4dxM.', 'phạm giang', ' hà nội', '2021-08-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(10) NOT NULL,
  `tendanhmuc` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `iddangnhap` int(1) NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `tendanhmuc`, `mota`, `iddangnhap`, `ngaydang`) VALUES
(1, 'Tin tuyển sinh', 'Tin tuyển sinh', 12, '2021-08-04'),
(3, 'tin tức và thông báo', 'tin tức và thông báo', 8, '2021-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idphanquyen` int(10) NOT NULL,
  `tenquyen` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`idphanquyen`, `tenquyen`) VALUES
(1, 'Admin'),
(3, 'Giảng viên');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `idslide` int(11) NOT NULL,
  `idhinhanh` int(11) NOT NULL,
  `ngaydang` date NOT NULL,
  `iddangnhap` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuvien`
--

CREATE TABLE `thuvien` (
  `idhinhanh` int(10) NOT NULL,
  `tenanh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thuvien`
--

INSERT INTO `thuvien` (`idhinhanh`, `tenanh`, `ngaydang`) VALUES
(2, 'https://phenikaa-uni.edu.vn:3600/pu/vi/posts/thumbnail-nguong-diem-nhan-ho-so-04.jpg', '2021-08-29'),
(3, 'https://phenikaa-uni.edu.vn:3600/pu/vi/posts/tin-tuc.jpg', '2021-08-28'),
(6, 'https://phenikaa-uni.edu.vn:3600/pu/vi/posts/thumbnail-tin-tuc-01.jpg', '2021-08-28'),
(7, 'https://phenikaa-uni.edu.vn:3600/pu/vi/posts/thumbnail-tin-tuc.jpg', '2021-08-28'),
(8, 'https://phenikaa-uni.edu.vn:3600/pu/vi/posts/k15-tuu-truong-thumbnail-tin-tuc-06.jpg', '2021-08-28'),
(9, 'https://phenikaa-uni.edu.vn:3600/pu/vi/posts/phenikaa27-538.jpg', '2021-08-28'),
(12, 'https://phenikaa-uni.edu.vn:3600/pu/vi/posts/thumbnail-nguong-diem-nhan-ho-so-03.jpg', '2021-08-29'),
(13, 'https://phenikaa-uni.edu.vn:3600/pu/vi/posts/anh-1.PNG', '2021-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(30) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayviet` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iddanhmuc` int(30) NOT NULL,
  `idhinhanh` int(10) NOT NULL,
  `iddangnhap` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`idtintuc`, `tieude`, `noidung`, `ngayviet`, `iddanhmuc`, `idhinhanh`, `iddangnhap`) VALUES
(5, ' Công bố ngưỡng điểm nhận hồ sơ xét tuyển Đại học hệ chính quy theo phương thức xét điểm thi tốt nghiệp THPT năm 2021', 'Hội đồng Tuyển sinh Trường Đại học Phenikaa (PKA) công bố ngưỡng điểm nhận hồ sơ đăng ký xét tuyển (điểm sàn) đại học hệ chính quy năm 2021 vào từng ngành/chương trình theo phương thức xét điểm thi tốt nghiệp Trung học phổ thông (THPT) năm 2021 như sau:                                   1. Ngưỡng điểm sàn nhận hồ sơ đăng ký xét tuyển đối với thí sinh sử dụng kết quả thi tốt nghiệp THPT năm 2021 là: Áp dụng đối với thí sinh khu vực 3 có mức điểm tối thiểu của tổng điểm 3 bài thi/môn thi theo tổ hợp xét tuyển (không nhân hệ số, điểm mỗi bài thi/môn thi phải lớn hơn 1 điểm).2. Nguyên tắc xét tuyển:Điểm xét tuyển là tổng điểm của 3 bài thi/môn thi của kỳ thi tốt nghiệp THPT năm 2021 thuộc tổ hợp môn xét tuyển tương ứng với ngành học đăng ký cộng với điểm ưu tiên đối tượng và khu vực theo quy định hiện hành và cộng điểm tiếng Anh theo quy định của Trường Đại học Phenikaa (Bảng 1); Điểm trúng tuyển tính từ cao xuống thấp theo thang điểm 10 và được làm tròn đến hai chữ số thập phân cho đến đủ chỉ tiêu đã xác định;Mỗi thí sinh khi đăng ký xét tuyển vào Trường sẽ được chọn các ngành/chương trình tương ứng với các nguyện vọng xếp theo thứ tự ưu tiên. Trong trường hợp thí sinh trượt nguyện vọng 1 thì xuống xét tuyển lần lượt vào các nguyện vọng ưu tiên tiếp theo như các thí sinh xét tuyển nguyện vọng 1 vào ngành đó.Tiêu chí phụ để xét tuyển khi thí sinh có điểm trúng tuyển bằng nhau:Thí sinh có điểm xét tuyển bằng nhau thì sẽ tính đến tiêu chí tiếp theo là môn chính điểm cao hơn sẽ trúng tuyển. Nếu điểm vẫn bằng nhau, sẽ xét theo tiêu chí có nguyện vọng cao hơn.', '2021-08-26', 1, 2, 8),
(6, 'Trường Đại học Phenikaa công bố kết quả xét tuyển đợt 2 năm 2021 theo phương thức xét tuyển kết quả học tập THPT (học bạ)', 'Hội đồng tuyển sinh Trường Đại học Phenikaa (PKA) thông báo kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và theo phương thức kết quả học tập bậc THPT (Học bạ) đợt 2 năm 2021 như sau:\r\n\r\n1. Điểm chuẩn trúng tuyển theo kết quả học tập bậc THPT (học bạ)\r\n\r\nĐiểm trúng tuyển được thực hiện theo đúng đề án tuyển sinh đại học của Trường năm 2021, cụ thể như sau:\r\nĐiểm trúng tuyển là tổng điểm của 3 môn theo tổ hợp xét tuyển (không nhân hệ số, điểm mỗi môn phải lớn hơn 1 điểm) được làm tròn đến 02 chữ số thập phân cộng với điểm ưu tiên đối tượng, khu vực theo quy định chung và điểm cộng khuyến khích đối với các thí sinh có chứng chỉ Tiếng Anh theo Đề án tuyển sinh của Trường Đại học Phenikaa;\r\nThang điểm áp dụng cho tổ hợp 3 môn xét tuyển là 30 (thang điểm cho mỗi môn xét tuyển là 10);\r\nĐiểm trúng tuyển áp dụng cho tất cả các tổ hợp môn xét tuyển vào từng ngành, điểm chênh lệch giữa các tổ hợp môn xét tuyển là bằng 0 (không).\r\n2. Thí sinh tra cứu kết quả trúng tuyển theo phương thức học bạ tại website:tuyensinh.phenikaa-uni.edu.vn\r\n\r\nLưu ý: Theo quy định của Nhà Trường chỉ xét tuyển những hồ sơ đủ điểm sàn xét tuyển và hợp lệ.\r\n\r\n3. Thí sinh được công nhận kết quả trúng tuyển khi đáp ứng đủ những điều kiện sau:\r\n\r\nĐược công nhận tốt nghiệp THPT năm 2021;\r\nLàm thủ tục nhập học trực tuyến (online) theo đúng quy định của Nhà trường.\r\nNộp đầy đủ hồ sơ nhập học bản cứng về Trường theo đúng quy định bao gồm:\r\nChứng nhận kết quả thi tốt nghiệp THPT năm 2021 (bản gốc);\r\nChứng nhận tốt nghiệp THPT tạm thời (bản gốc/photo công chứng) - Đối với các thí sinh tốt nghiệp THPT năm 2021;\r\nBằng tốt nghiệp THPT (bản sao công chứng) - Đối với các thí sinh tốt nghiệp THPT trước năm 2021;\r\nHọc bạ THPT (bản sao công chứng).\r\n4. Thời gian và hình thức nhập học:\r\n\r\nThời gian nhập học: Từ 20/8 đến 22/8/2021;\r\nHình thức nhập học: Nhập học trực tuyến tại: tuyensinh.phenikaa-uni.edu.vn;\r\nThí sinh đăng nhập vào website: tuyensinh.phenikaa-uni.edu.vn để hoàn thành thủ tục nhập học theo hướng dẫn;\r\n\r\nTrường ĐH Phenikaa sẽ gửi thông báo trúng tuyển (có điều kiện) và hướng dẫn nhập học đến các thí sinh trúng tuyển theo địa chỉ email đã cung cấp trong hồ sơ đăng ký, đồng thời đăng tải hướng dẫn nhập học trên các kênh truyền thông của nhà trường;\r\n\r\nChi tiết liên hệ Phòng Tuyển sinh và Truyền thông, Trường Đại học PHENIKAA\r\nĐịa chỉ: Đường Nguyễn Văn Trác, phường Yên Nghĩa, quận Hà Đông, Hà Nội;\r\nHotline: 951.1010 - 094. 651. 1010; Email: tuyensinh@phenikaa-uni.edu.vn.', '2021-08-26', 1, 3, 8),
(7, 'Thông báo nhập học đợt 2 năm 2021', 'ĐỐI TƯỢNG\r\n\r\nThí sinh đã đạt kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và kết quả học tập bậc THPT (học bạ) đợt 2 năm 2021.\r\n\r\nTHỜI GIAN NHẬP HỌC\r\n\r\nTừ ngày 20 đến ngày 22/8/2021.\r\n\r\nHƯỚNG DẪN NHẬP HỌC\r\n\r\nA. Giấy tờ và kinh phí cần chuẩn bị\r\n\r\nA1.  Giấy tờ cần chuẩn bị: \r\n\r\nChứng nhận tốt nghiệp tạm thời bản gốc hoặc bản photo công chứng;\r\nChứng nhận kết quả thi tốt nghiệp THPT năm 2021 bản gốc;\r\nHọc bạ photo công chứng.\r\nA2.  Các khoản kinh phí cần nộp:\r\n\r\nHọc phí kỳ 1: theo ngành\r\nLệ phí nhập học: 100.000đ\r\nLệ phí khám sức khỏe: 263.100đ\r\nBảo hiểm y tế: 46.935đ/tháng (Đóng 12 tháng hoặc 15 tháng tùy lựa chọn)\r\nLệ phí làm các loại thẻ (thẻ sinh viên, thẻ ngân hàng...): Miễn phí lần đầu\r\nB. Quy trình nhập học online (từ 20/8 – 22/8/2021)\r\n\r\n-  Truy cập bước 5 trên hệ thống: tuyensinh.phenikaa-uni.edu.vn và làm theo hướng dẫn.\r\n\r\n-  Những nội dung quan trọng cần lưu ý:\r\n\r\n+ Cần upload bản chụp “Giấy tờ cần chuẩn bị” (A1)- (trừ học bạ)\r\n\r\n+ Đóng “Các khoản kinh phí cần nộp” (A2) vào tài khoản của trường, chi tiết số tài khoản xem trên hệ thống.\r\n\r\n+ Upload bản chụp minh chứng đã nộp tiền lên hệ thống\r\n\r\n+ Nộp toàn bộ “Giấy tờ cần chuẩn bị” (A1) về trường qua đường bưu điện trước 12h ngày 25/8/2021 (tính theo dấu bưu điện) theo địa chỉ: \r\n\r\nPhòng Tuyển sinh và Truyền thông, phòng 103-A2, Trường Đại học Phenikaa\r\n\r\nĐịa chỉ: Yên Nghĩa, Hà Đông, Hà Nội.\r\n\r\nSĐT: 0969511010 - 0946511010\r\n\r\nC. Thời gian tra cứu kết quả nhập học\r\n\r\nĐối với thí sinh đã nộp đủ hồ sơ và kinh phí về trường: Kiểm tra xác nhận nhập học thành công trên hệ thống từ ngày 30/08/2021. Hệ thống cũng sẽ tự động gửi thông báo xác nhận qua email cho thí sinh. \r\n\r\nD. Ghi chú      \r\n\r\nRiêng thí sinh đã tốt nghiệp THPT từ năm 2020 trở về trước, các em thực hiện việc upload giấy tờ lên hệ thống và gửi về trường như sau:\r\n\r\nUpload bằng tốt nghiệp THPT (chụp ảnh 2 mặt);\r\nGửi bản photo công chứng bằng tốt nghiệp THPT và học bạ THPT photo công chứng về trường qua đường bưu điện.\r\nLịch học dự kiến từ tháng 9/2021. Thông tin chi tiết sẽ được gửi về địa chỉ email của sinh viên và được thông báo trên các kênh truyền thông của trường.\r\n\r\nMọi thắc mắc vui lòng liên hệ hotline:  094.651.1010 - 096.881.1010 - 098.381.1010 - 096.751.1010', '2021-08-26', 1, 6, 7),
(11, 'Trường Đại học Phenikaa nhận hồ sơ xét tuyển học bạ đợt 2 năm 2021', 'Hội đồng tuyển sinh Trường Đại học Phenikaa (PKA) thông báo nhận hồ sơ xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức kết quả học tập bậc THPT (Học bạ) đợt 2 năm 2021 như sau:\r\n\r\nĐối tượng: Thí sinh tốt nghiệp THPT hoặc tương đương.\r\nVùng tuyển sinh: Cả nước.\r\nNgành/chương trình đào tạo - chỉ tiêu - tổ hợp xét tuyển - ngưỡng điểm (điểm sàn)\r\nĐiểm xét tuyển là tổng điểm của 3 môn theo tổ hợp xét tuyển (không nhân hệ số, điểm mỗi môn phải lớn hơn 1 điểm) được làm tròn đến 02 chữ số thập phân cộng với điểm ưu tiên đối tượng, khu vực theo quy định chung và điểm cộng khuyến khích đối với các thí sinh có chứng chỉ Tiếng Anh theo Đề án tuyển sinh của Trường Đại học Phenikaa;\r\nThang điểm áp dụng cho tổ hợp 3 môn xét tuyển là 30 (thang điểm cho mỗi môn xét tuyển là 10);\r\nĐiểm xét tuyển áp dụng cho tất cả các tổ hợp môn xét tuyển vào từng ngành, điểm chênh lệch giữa các tổ hợp môn xét tuyển là bằng 0 (không).\r\nThời gian và hình thức đăng ký xét tuyển\r\nThời gian đăng ký: Từ 08 giờ 00 ngày 12/08/2021 đến 17 giờ 00 ngày 16/8/2021.\r\nHình thức đăng ký: Đăng ký trực tuyến tại: https://dkxt.phenikaa-uni.edu.vn/\r\nLưu ý: Học sinh chỉ được đăng ký xét tuyển 01 nguyện vọng duy nhất.\r\n\r\nThời gian công bố kết quả: Ngày 18/8/2021\r\nThời gian và hình thức nhập học:\r\nThời gian nhập học: Từ 20/8 đến 22/8/2021\r\nHình thức nhập học: Nhập học trực tuyến tại: tuyensinh.phenikaa-uni.edu.vn\r\nHướng dẫn nhập học sẽ được đăng tải trên các kênh truyền thông của nhà trường, đồng thời sẽ được gửi tới thí sinh trúng tuyển qua địa chỉ email đã đăng ký.\r\n\r\nChi tiết liên hệ:\r\nPhòng Tuyển sinh và Truyền thông - Phòng 103 Nhà A2 - Trường Đại học Phenikaa - Đường Nguyễn Trác - phường Yên Nghĩa - quận Hà Đông - Hà Nội.\r\nĐiện thoại: 094.651.1010; Email: tuyensinh@phenikaa-uni.edu.vn.\r\n', '2021-08-26', 1, 7, 8),
(12, 'Thông báo nhập học đợt 1 năm 2021', 'ĐỐI TƯỢNG\r\n\r\nThí sinh đã đạt kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và kết quả học tập bậc THPT (học bạ) đợt 1 năm 2021.\r\n\r\nTHỜI GIAN NHẬP HỌC\r\n\r\nTừ ngày 04 đến ngày 10/8/2021.\r\n\r\nHƯỚNG DẪN NHẬP HỌC\r\n\r\nA. Giấy tờ và kinh phí cần chuẩn bị\r\n\r\nA1. Giấy tờ cần chuẩn bị: \r\n\r\nChứng nhận tốt nghiệp tạm thời bản gốc hoặc bản photo công chứng;\r\nChứng nhận kết quả thi tốt nghiệp THPT năm 2021 bản gốc;\r\nHọc bạ photo công chứng.\r\nA2. Các khoản kinh phí cần nộp:\r\n\r\nHọc phí kỳ 1: theo ngành;\r\nLệ phí nhập học: 100.000 đồng;\r\nLệ phí khám sức khỏe: 263.100 đồng;\r\nBảo hiểm y tế: 46.935 đồng/tháng (Đóng 12 tháng hoặc 15 tháng tùy lựa chọn);\r\nLệ phí làm các loại thẻ (thẻ sinh viên, thẻ ngân hàng...): miễn phí lần đầu.\r\nB. Quy trình nhập học online (từ 04/8 – 10/8/2021)\r\n\r\n-  Truy cập bước 5 trên hệ thống: tuyensinh.phenikaa-uni.edu.vn và làm theo hướng dẫn.\r\n\r\n-  Những nội dung quan trọng cần lưu ý:\r\n\r\n+ Cần upload bản chụp “Giấy tờ cần chuẩn bị” (A1), (trừ học bạ THPT);\r\n\r\n+ Đóng “Các khoản kinh phí cần nộp” (A2) vào tài khoản của trường, chi tiết số tài khoản xem trên hệ thống;\r\n\r\n+ Upload bản chụp minh chứng đã nộp tiền lên hệ thống;\r\n\r\n+ Nộp toàn bộ “Giấy tờ cần chuẩn bị” (A1) về trường qua đường bưu điện trước 17h ngày 11/8/2021 (tính theo dấu bưu điện) theo địa chỉ: \r\n\r\nPhòng Tuyển sinh và Truyền thông, phòng 103-A2, Trường Đại học Phenikaa. \r\nĐịa chỉ: Yên Nghĩa, Hà Đông, Hà Nội.\r\nSĐT: 0946511010\r\nC. Thời gian tra cứu kết quả nhập học\r\n\r\nĐối với thí sinh đã nộp đủ hồ sơ và kinh phí về trường: Kiểm tra xác nhận nhập học thành công trên hệ thống từ ngày 16/08/2021. Hệ thống cũng sẽ tự động gửi thông báo xác nhận qua email cho thí sinh.\r\n\r\nD. Ghi chú\r\n\r\nRiêng thí sinh đã tốt nghiệp THPT từ năm 2020 trở về trước thực hiện việc upload giấy tờ lên hệ thống và gửi về trường như sau:\r\n\r\n+ Upload bằng tốt nghiệp THPT (chụp ảnh 2 mặt);\r\n\r\n+ Gửi bản photo công chứng bằng tốt nghiệp THPT và học bạ THPT photo công chứng về trường qua đường bưu điện.\r\n\r\nLịch học dự kiến từ tháng 9/2021. Thông tin chi tiết sẽ được gửi về địa chỉ email của sinh viên và được thông báo trên các kênh truyền thông của trường.\r\n\r\nMọi thắc mắc vui lòng liên hệ hotline:  094.651.1010 - 096.881.1010 - 098.381.1010 - 096.751.1010', '2021-08-26', 1, 8, 7),
(13, 'Thí sinh cần làm gì sau khi biết điểm thi tốt nghiệp THPT?', 'Ngày 26/7/2021, Bộ Giáo dục đã công bố điểm thi tốt nghiệp THPT 2021 đợt 1, vậy thí sinh cần làm gì sau khi biết điểm thi?Tính điểm đỗ tốt nghiệp THPT 2021Tại Điều 42 Quy chế thi tốt nghiệp THPT ban hành kèm Thông tư số 15/2020/TT-BGDĐT quy định: ', '2021-08-26', 1, 9, 8),
(21, 'Trường Đại học Phenikaa công bố ngưỡng điểm nhận hồ sơ xét tuyển Đại học hệ chính quy theo phương thức xét điểm thi tốt nghiệp THPT năm 2021', 'Hội đồng Tuyển sinh Trường Đại học Phenikaa (PKA) công bố ngưỡng điểm nhận hồ sơ đăng ký xét tuyển (điểm sàn) đại học hệ chính quy năm 2021 vào từng ngành/chương trình theo phương thức xét điểm thi tốt nghiệp Trung học phổ thông (THPT) năm 2021 như sau:\r\n\r\n\r\n\r\n1. Ngưỡng điểm sàn nhận hồ sơ đăng ký xét tuyển đối với thí sinh sử dụng kết quả thi tốt nghiệp THPT năm 2021 là: Áp dụng đối với thí sinh khu vực 3 có mức điểm tối thiểu của tổng điểm 3 bài thi/môn thi theo tổ hợp xét tuyển (không nhân hệ số, điểm mỗi bài thi/môn thi phải lớn hơn 1 điểm).\r\n\r\n2. Nguyên tắc xét tuyển:\r\n\r\nĐiểm xét tuyển là tổng điểm của 3 bài thi/môn thi của kỳ thi tốt nghiệp THPT năm 2021 thuộc tổ hợp môn xét tuyển tương ứng với ngành học đăng ký cộng với điểm ưu tiên đối tượng và khu vực theo quy định hiện hành và cộng điểm tiếng Anh theo quy định của Trường Đại học Phenikaa (Bảng 1); Điểm trúng tuyển tính từ cao xuống thấp theo thang điểm 10 và được làm tròn đến hai chữ số thập phân cho đến đủ chỉ tiêu đã xác định;\r\nMỗi thí sinh khi đăng ký xét tuyển vào Trường sẽ được chọn các ngành/chương trình tương ứng với các nguyện vọng xếp theo thứ tự ưu tiên. Trong trường hợp thí sinh trượt nguyện vọng 1 thì xuống xét tuyển lần lượt vào các nguyện vọng ưu tiên tiếp theo như các thí sinh xét tuyển nguyện vọng 1 vào ngành đó.\r\nTiêu chí phụ để xét tuyển khi thí sinh có điểm trúng tuyển bằng nhau:\r\nThí sinh có điểm xét tuyển bằng nhau thì sẽ tính đến tiêu chí tiếp theo là môn chính điểm cao hơn sẽ trúng tuyển. Nếu điểm vẫn bằng nhau, sẽ xét theo tiêu chí có nguyện vọng cao hơn.', '2021-08-29', 3, 12, 14),
(22, 'Trường Đại học Phenikaa công bố kết quả xét tuyển đợt 2 năm 2021 theo phương thức xét tuyển kết quả học tập THPT (học bạ)', 'Hội đồng tuyển sinh Trường Đại học Phenikaa (PKA) thông báo kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và theo phương thức kết quả học tập bậc THPT (Học bạ) đợt 2 năm 2021 như sau:\r\n\r\n1. Điểm chuẩn trúng tuyển theo kết quả học tập bậc THPT (học bạ)\r\n\r\nĐiểm trúng tuyển được thực hiện theo đúng đề án tuyển sinh đại học của Trường năm 2021, cụ thể như sau:\r\n\r\n\r\n\r\nĐiểm trúng tuyển là tổng điểm của 3 môn theo tổ hợp xét tuyển (không nhân hệ số, điểm mỗi môn phải lớn hơn 1 điểm) được làm tròn đến 02 chữ số thập phân cộng với điểm ưu tiên đối tượng, khu vực theo quy định chung và điểm cộng khuyến khích đối với các thí sinh có chứng chỉ Tiếng Anh theo Đề án tuyển sinh của Trường Đại học Phenikaa;\r\nThang điểm áp dụng cho tổ hợp 3 môn xét tuyển là 30 (thang điểm cho mỗi môn xét tuyển là 10);\r\nĐiểm trúng tuyển áp dụng cho tất cả các tổ hợp môn xét tuyển vào từng ngành, điểm chênh lệch giữa các tổ hợp môn xét tuyển là bằng 0 (không).\r\n2. Thí sinh tra cứu kết quả trúng tuyển theo phương thức học bạ tại website:tuyensinh.phenikaa-uni.edu.vn\r\n\r\nLưu ý: Theo quy định của Nhà Trường chỉ xét tuyển những hồ sơ đủ điểm sàn xét tuyển và hợp lệ.\r\n\r\n3. Thí sinh được công nhận kết quả trúng tuyển khi đáp ứng đủ những điều kiện sau:\r\n\r\nĐược công nhận tốt nghiệp THPT năm 2021;\r\nLàm thủ tục nhập học trực tuyến (online) theo đúng quy định của Nhà trường.\r\nNộp đầy đủ hồ sơ nhập học bản cứng về Trường theo đúng quy định bao gồm:\r\nChứng nhận kết quả thi tốt nghiệp THPT năm 2021 (bản gốc);\r\nChứng nhận tốt nghiệp THPT tạm thời (bản gốc/photo công chứng) - Đối với các thí sinh tốt nghiệp THPT năm 2021;\r\nBằng tốt nghiệp THPT (bản sao công chứng) - Đối với các thí sinh tốt nghiệp THPT trước năm 2021;\r\nHọc bạ THPT (bản sao công chứng).\r\n4. Thời gian và hình thức nhập học:\r\n\r\nThời gian nhập học: Từ 20/8 đến 22/8/2021;\r\nHình thức nhập học: Nhập học trực tuyến tại: tuyensinh.phenikaa-uni.edu.vn;\r\nThí sinh đăng nhập vào website: tuyensinh.phenikaa-uni.edu.vn để hoàn thành thủ tục nhập học theo hướng dẫn;\r\n\r\nTrường ĐH Phenikaa sẽ gửi thông báo trúng tuyển (có điều kiện) và hướng dẫn nhập học đến các thí sinh trúng tuyển theo địa chỉ email đã cung cấp trong hồ sơ đăng ký, đồng thời đăng tải hướng dẫn nhập học trên các kênh truyền thông của nhà trường;\r\n\r\nChi tiết liên hệ Phòng Tuyển sinh và Truyền thông, Trường Đại học PHENIKAA\r\nĐịa chỉ: Đường Nguyễn Văn Trác, phường Yên Nghĩa, quận Hà Đông, Hà Nội;\r\nHotline: 951.1010 - 094. 651. 1010; Email: tuyensinh@phenikaa-uni.edu.vn.', '2021-08-29', 3, 3, 14),
(23, 'Thông báo nhập học đợt 2 năm 2021', 'ĐỐI TƯỢNG\r\n\r\nThí sinh đã đạt kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và kết quả học tập bậc THPT (học bạ) đợt 2 năm 2021.\r\n\r\nTHỜI GIAN NHẬP HỌC\r\n\r\nTừ ngày 20 đến ngày 22/8/2021.\r\n\r\nHƯỚNG DẪN NHẬP HỌC\r\n\r\nA. Giấy tờ và kinh phí cần chuẩn bị\r\n\r\nA1.  Giấy tờ cần chuẩn bị: \r\n\r\nChứng nhận tốt nghiệp tạm thời bản gốc hoặc bản photo công chứng;\r\nChứng nhận kết quả thi tốt nghiệp THPT năm 2021 bản gốc;\r\nHọc bạ photo công chứng.\r\nA2.  Các khoản kinh phí cần nộp:\r\n\r\nHọc phí kỳ 1: theo ngành\r\nLệ phí nhập học: 100.000đ\r\nLệ phí khám sức khỏe: 263.100đ\r\nBảo hiểm y tế: 46.935đ/tháng (Đóng 12 tháng hoặc 15 tháng tùy lựa chọn)\r\nLệ phí làm các loại thẻ (thẻ sinh viên, thẻ ngân hàng...): Miễn phí lần đầu\r\nB. Quy trình nhập học online (từ 20/8 – 22/8/2021)\r\n\r\n-  Truy cập bước 5 trên hệ thống: tuyensinh.phenikaa-uni.edu.vn và làm theo hướng dẫn.\r\n\r\n-  Những nội dung quan trọng cần lưu ý:\r\n\r\n+ Cần upload bản chụp “Giấy tờ cần chuẩn bị” (A1)- (trừ học bạ)\r\n\r\n+ Đóng “Các khoản kinh phí cần nộp” (A2) vào tài khoản của trường, chi tiết số tài khoản xem trên hệ thống.\r\n\r\n+ Upload bản chụp minh chứng đã nộp tiền lên hệ thống\r\n\r\n+ Nộp toàn bộ “Giấy tờ cần chuẩn bị” (A1) về trường qua đường bưu điện trước 12h ngày 25/8/2021 (tính theo dấu bưu điện) theo địa chỉ: \r\n\r\nPhòng Tuyển sinh và Truyền thông, phòng 103-A2, Trường Đại học Phenikaa\r\n\r\nĐịa chỉ: Yên Nghĩa, Hà Đông, Hà Nội.\r\n\r\nSĐT: 0969511010 - 0946511010\r\n\r\nC. Thời gian tra cứu kết quả nhập học\r\n\r\nĐối với thí sinh đã nộp đủ hồ sơ và kinh phí về trường: Kiểm tra xác nhận nhập học thành công trên hệ thống từ ngày 30/08/2021. Hệ thống cũng sẽ tự động gửi thông báo xác nhận qua email cho thí sinh. \r\n\r\nD. Ghi chú      \r\n\r\nRiêng thí sinh đã tốt nghiệp THPT từ năm 2020 trở về trước, các em thực hiện việc upload giấy tờ lên hệ thống và gửi về trường như sau:\r\n\r\nUpload bằng tốt nghiệp THPT (chụp ảnh 2 mặt);\r\nGửi bản photo công chứng bằng tốt nghiệp THPT và học bạ THPT photo công chứng về trường qua đường bưu điện.\r\nLịch học dự kiến từ tháng 9/2021. Thông tin chi tiết sẽ được gửi về địa chỉ email của sinh viên và được thông báo trên các kênh truyền thông của trường.\r\n\r\nMọi thắc mắc vui lòng liên hệ hotline:  094.651.1010 - 096.881.1010 - 098.381.1010 - 096.751.1010', '2021-08-29', 3, 6, 14),
(24, 'Trường Đại học Phenikaa hỗ trợ học phí cho sinh viên, học viên do ảnh hưởng của dịch COVID-19', 'Thấu hiểu được những khó khăn của phụ huynh và sinh viên trước tình hình dịch bệnh vẫn kéo dài, Trường Đại học Phenikaa quyết định hỗ trợ một phần kinh phí cho tất cả sinh viên, học viên đang theo học tại Trường nhằm hỗ trợ tối đa cho người học.\r\n\r\n Theo đó, mức giảm được Trường đề xuất là 7% học phí tất cả các môn học trong học kỳ I năm học 2021 – 2022 đối với sinh viên, học viên từ K14 trở về trước đã hoàn thành học phí học kỳ 1 năm học 2021 -2022 đầy đủ, đúng hạn.\r\n\r\nNgoài ra, Trường còn gia hạn thời gian nộp tiền học phí học kỳ 1 năm học 2021-2022 cho tất cả sinh viên, học viên đang theo học tại Trường Đại học Phenikaa đến hết ngày 01/10/2021.\r\n\r\nHy vọng rằng, với chính sách hỗ trợ kịp thời này sẽ phần nào chia sẻ những khó khăn với phụ huynh và sinh viên của Trường do ảnh hưởng bởi đại dịch COVID-19.\r\n\r\n\r\n\r\nNgoài việc giảm học phí, năm 2021 Trường Đại học Phenikaa vận hành Quỹ học bổng và hỗ trợ học tập với nhiều chính sách ưu đãi dành cho sinh viên với tổng giá trị lên tới 50 tỷ đồng. Quỹ học bổng Phenikaa được thành lập từ nhiều nguồn: tài trợ từ Tập đoàn Phenikaa; tài trợ từ các công ty thành viên của Tập đoàn Phenikaa; tài trợ từ các doanh nghiệp, đối tác; tài trợ từ các cựu sinh viên thành đạt.\r\n\r\nĐặc biệt, với mong muốn tạo cơ hội để người học ở mọi hoàn cảnh đều được tiếp cận với giáo dục đại học chất lượng cao, đồng thời thực hiện trách nhiệm của trường đại học theo định hướng không vì lợi nhuận, Trường Đại học Phenikaa và Tập đoàn Phenikaa sẽ hỗ trợ 20% học phí cả khoá học cho tất cả sinh viên đỗ vào Trường năm 2021.\r\n\r\n Thông tin chi tiết về chính sách học bổng và hỗ trợ học tập của Trường xem TẠI ĐÂY.', '2021-08-29', 3, 13, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`iddangnhap`),
  ADD KEY `dangnhap_ibfk_1` (`idphanquyen`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`),
  ADD KEY `danhmuc_ibfk_1` (`iddangnhap`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`idphanquyen`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`idslide`),
  ADD KEY `slideshow_ibfk_1` (`idhinhanh`),
  ADD KEY `slideshow_ibfk_2` (`iddangnhap`);

--
-- Indexes for table `thuvien`
--
ALTER TABLE `thuvien`
  ADD PRIMARY KEY (`idhinhanh`),
  ADD UNIQUE KEY `idhinhanh` (`idhinhanh`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtintuc`),
  ADD KEY `tintuc_ibfk_1` (`iddangnhap`),
  ADD KEY `tintuc_ibfk_3` (`iddanhmuc`),
  ADD KEY `tintuc_ibfk_4` (`idhinhanh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `iddangnhap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `idphanquyen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `idslide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thuvien`
--
ALTER TABLE `thuvien`
  MODIFY `idhinhanh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtintuc` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD CONSTRAINT `dangnhap_ibfk_1` FOREIGN KEY (`idphanquyen`) REFERENCES `phanquyen` (`idphanquyen`);

--
-- Constraints for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `danhmuc_ibfk_1` FOREIGN KEY (`iddangnhap`) REFERENCES `dangnhap` (`iddangnhap`);

--
-- Constraints for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD CONSTRAINT `slideshow_ibfk_1` FOREIGN KEY (`idhinhanh`) REFERENCES `thuvien` (`idhinhanh`),
  ADD CONSTRAINT `slideshow_ibfk_2` FOREIGN KEY (`iddangnhap`) REFERENCES `dangnhap` (`iddangnhap`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`iddangnhap`) REFERENCES `dangnhap` (`iddangnhap`),
  ADD CONSTRAINT `tintuc_ibfk_3` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`iddanhmuc`),
  ADD CONSTRAINT `tintuc_ibfk_4` FOREIGN KEY (`idhinhanh`) REFERENCES `thuvien` (`idhinhanh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
