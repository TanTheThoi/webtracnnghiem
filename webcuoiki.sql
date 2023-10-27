-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2023 lúc 04:14 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webcuoiki`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cau_hoi`
--

CREATE TABLE `tbl_cau_hoi` (
  `id` int(10) NOT NULL,
  `cau_hoi` varchar(500) NOT NULL,
  `dapanA` varchar(500) NOT NULL,
  `dapanB` varchar(500) NOT NULL,
  `dapanC` varchar(500) NOT NULL,
  `dapanD` varchar(500) NOT NULL,
  `cautraloi` text NOT NULL,
  `mon_hoc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cau_hoi`
--

INSERT INTO `tbl_cau_hoi` (`id`, `cau_hoi`, `dapanA`, `dapanB`, `dapanC`, `dapanD`, `cautraloi`, `mon_hoc`) VALUES
(53, 'Vừa gà vừa chó bó lại cho tròn ba mươi sáu con một trăm chân chẵn. Hỏi có bao nhiêu chó?', '12', '14', '16', '18', 'B', 'toan'),
(54, 'Bình phương cạnh huyền trong tam giác vuông bằng?', 'Bình phương tổng hai cạnh góc vuông', 'Tổng bình phương hai cạnh góc vuông', 'Tổng hai cạnh góc vuông', 'Hiệu hai cạnh góc vuông', 'B', 'toan'),
(55, 'Nhà Lan cách trường 200km, Lan đi xe đạp đến trường với vận tốc 40km/h. Hỏi bán kính trái đất là bao nhiêu?', '6400km', '4600km', '6040km', '6600km', 'A', 'toan'),
(56, 'Một người đàn ông đi bộ 10 dặm về phía bắc, sau đó quay lại và đi bộ 10 dặm về phía nam. Anh ta đi bao nhiêu dặm?', '10 dặm', '20 dặm', '30 dặm', '0 dặm', 'B', 'toan'),
(57, 'Một người đàn ông có 12 con gà và 8 con vịt. Tổng cộng, anh ta có bao nhiêu con vật?', '20', '24', '30', '32', 'A', 'toan'),
(58, 'Một người đàn ông có 12 con gà và 8 con vịt. Tổng cộng, anh ta có bao nhiêu con vật?', '1', 'nửa', '0', '2', 'C', 'toan'),
(59, 'Bạn có 3 quả táo, Nam cướp mất của bạn 2 quả hỏi bạn mất gì?', '2 quả', 'Không mất gì', '1 quả', 'Mất niềm tin', 'D', 'toan'),
(60, 'Một ô tô lao về phía bạn với vận tốc 60km/h và cách bạn 10m khi bạn đang đứng ở giữa đường, cần vận tốc bao nhiêu để né chiếc ô tô đó?', '60km/h', '100km/h', '70km/h', 'niệm', 'D', 'toan'),
(61, '2 con vịt đi trước 2 con vịt, 2 con vịt đi sau hai con vịt hỏi có mấy con vịt', '2 con', '6 con', '8 con', '4 con', 'D', 'toan'),
(62, 'Anh trai Lan 15 tuổi, gấp đôi tuổi. Hỏi 3 năm nữa, Lan bao nhiêu tuổi?', '10.5', '36', '20', '8', 'A', 'toan'),
(63, 'Tèo đi xe máy đến trường, nhưng Tèo không có bằng. Hỏi Tèo ngồi tù bao lâu?', '0 năm', '3 năm', '2 năm', '1 năm', 'A', 'toan'),
(64, '1 đô = 23k. 689 đô = ...k?', '15857k', '15867k', '15847k', '15877k', 'C', 'toan'),
(65, 'Số tự nhiên nào khi đem nhân với 3 và trừ đi 2 thì sẽ cho ra đáp án là số đảo ngược của chính nó.', '34', '28', '43', '82', 'B', 'toan'),
(66, 'Bạn hãy thực hiện tìm ra số tiếp theo của dãy số dưới đây?\n\n5, 16, 49, 104, ?', '181', '167', '156', '142', 'A', 'toan'),
(67, 'Một cây gỗ có chiều dài là 8m. Người thợ mộc muốn cưa cây gỗ 8m này thành các khúc gỗ dài 16 dm. Biết được rằng, mỗi lần thực hiện cưa người thợ mộc sẽ hết 5 phút, khi cưa được 1 khúc gỗ người thợ mộc sẽ nghỉ ngơi 3 phút để lấy sức. Hỏi người thợ mộc cần bao nhiêu phút để cưa xong cây gỗ.', '31 phút', '32 phút', '33 phút', '34 phút', 'B', 'toan'),
(68, 'Nếu 5 con mèo có thể bắt được 5 con chuột trong thời gian là 5 phút thì cần bao nhiêu con mèo để chúng có thể bắt được 100 con chuột trong vòng 100 phút?', '2 con', '3 con', '4 con', '5 con', 'D', 'toan'),
(69, 'Một người đàn ông nọ mua một con ngựa có giá là 60 đô la. Sau đó ông ta bán con ngựa với giá là 70 đô la. Rồi anh lại mua lại với 80 đô la. Cuối cùng anh ta bán con ngựa với giá 90 đô la. Hỏi người đàn ông có lãi hay không? Nếu lãi thì lãi được bao nhiêu?', '20 đô', '30 đô', '40 đô', '50 đô', 'A', 'toan'),
(70, 'Có một người đàn ông đi câu cá. Sau buổi câu, anh ta câu được 6 con không đầu, 8 con có một nửa và 9 con không có đuôi. Hỏi anh ta tổng cộng câu được bao nhiêu con?', '0 con', '1 con', '2 con', '3 con', 'A', 'toan'),
(71, '6 + 9 = ?', '69', '96', '15', '51', 'C', 'toan'),
(72, 'Văn bản được coi là tác phẩm đầu tiên về Hà Nội?', '“Chiếu dời đô” của Lý Công Uẩn.', 'Hà Nội ơi', 'Không biết', 'Tất cả các đáp án trên', 'A', 'van'),
(73, 'Ai là tác giả của tiểu thuyết \"Một trăm năm cô đơn\"?', 'Gabriel García Márquez', 'Leo Tolstoy', 'F. Scott Fitzgerald', 'George Orwell', 'D', 'van'),
(74, 'Cuốn sách nổi tiếng \"Sát thủ mặt trời\" là tác phẩm của ai?', 'Dan Brown', 'Agatha Christie', 'Stieg Larsson', 'John Grisham', 'C', 'van'),
(75, 'Tác phẩm \"Người đẹp và quái vật\" được lấy cảm hứng từ câu chuyện dân gian nào?', 'Cinderella', 'Snow White', 'Beauty and the Beast', 'Sleeping Beauty', 'C', 'van'),
(76, '\"Cuộc đời và người bạn của tôi\" là tác phẩm của ai?', 'Mark Twain', 'Charles Dickens', 'Jane Austen', 'J.K. Rowling', 'A', 'van'),
(77, 'Ai là tác giả của tiểu thuyết \"Người lạ từ biển xanh\"?', 'Haruki Murakami', 'Ernest Hemingway', 'Jules Verne', 'Jack London', 'C', 'van'),
(78, 'Cuốn sách \"1984\" mô tả một xã hội chuyên quyền và kiểm soát chặt chẽ. Ai là tác giả?', 'George Orwell', 'Aldous Huxley', 'Ray Bradbury', 'H.G. Wells', 'A', 'van'),
(79, 'Tác phẩm \"Romeo và Juliet\" được viết bởi ai?', 'William Faulkner', 'William Shakespeare', 'Jane Austen', 'Emily Brontë', 'B', 'van'),
(80, '\"Dấu chân trên cát\" là một tiểu thuyết nổi tiếng của ai?', 'J.D. Salinger', 'J.R.R. Tolkien', 'George R.R. Martin', 'Khaled Hosseini', 'D', 'van'),
(81, 'Trong cuốn \"Harry Potter\", tên thứ ba của Harry là gì?', 'John', 'Ronald', 'James', 'Sirius', 'B', 'van'),
(82, 'Ai là tác giả của \"Cuốn theo chiều gió\"?', 'Harper Lee', 'Mark Twain', 'Margaret Mitchell', 'F. Scott Fitzgerald', 'C', 'van'),
(83, 'Tên nhân vật chính trong cuốn \"Sherlock Holmes\" của Arthur Conan Doyle là gì?', 'John Watson', 'James Moriarty', 'Hercule Poirot', 'Sherlock Holmes', 'D', 'van'),
(84, 'Ai là tác giả của tiểu thuyết \"Mặt trời lửa\"?', 'Jules Verne', 'H.G. Wells', 'Ray Bradbury', 'Jack London', 'C', 'van'),
(85, 'Cuốn sách \"Anna Karenina\" được viết bởi tác giả nào?', 'Leo Tolstoy', 'Fyodor Dostoevsky', 'Anton Chekhov', 'Ivan Turgenev', 'A', 'van'),
(86, '\"Câu chuyện hai thành phố\" của Charles Dickens diễn ra ở thành phố nào?', 'Paris và London', 'New York và Los Angeles', 'Rome và Vienna', 'Moscow và St. Petersburg', 'A', 'van'),
(87, 'Tác phẩm \"The Catcher in the Rye\" được viết bởi ai?', 'F. Scott Fitzgerald', 'J.D. Salinger', 'Ernest Hemingway', 'Mark Twain', 'B', 'van'),
(88, '\"Người đàn bà và biển cả\" là tác phẩm của ai?', 'Albert Camus', 'Virginia Woolf', 'Gabriel García Márquez', 'Ernest Hemingway', 'D', 'van'),
(89, 'Cuốn \"Cuộc phiêu lưu của Tom Sawyer\" là tác phẩm của ai?', 'F. Scott Fitzgerald', 'Mark Twain', 'J.D. Salinger', 'Harper Lee', 'B', 'van'),
(90, 'Tác phẩm \"Gone with the Wind\" được viết bởi ai?', 'Jane Austen', 'Margaret Atwood', 'George Orwell', 'Margaret Mitchell', 'D', 'van'),
(91, 'What is the capital of France?', 'Berlin', 'Madrid', 'Paris', 'Rome', 'C', 'anh'),
(92, 'Which planet is known as the Red Planet?', 'Jupiter', 'Mars', 'Venus', 'Saturn', 'B', 'van'),
(93, 'What is the chemical symbol for gold?', 'Go', 'Gd', 'Ge', 'Au', 'D', 'anh'),
(94, 'Which of the following is a mammal?', 'Shark', 'Eagle', 'Dolphin', 'Crocodile', 'C', 'anh'),
(95, 'What is the largest mammal in the world?', 'Elephant', 'Blue Whale', 'Giraffe', 'Polar Bear', 'B', 'anh'),
(96, 'Who wrote the play \"Romeo and Juliet\"?', 'Charles Dickens', 'William Shakespeare*', 'Jane Austen', 'F. Scott Fitzgerald', 'B', 'anh'),
(97, 'How many continents are there in the world?', '5', '6', '7', '8', 'C', 'anh'),
(98, 'What is the currency of Japan?', 'Yen', 'Won', 'Ringgit', 'Baht', 'A', 'anh'),
(99, 'What is the largest planet in our solar system?', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'C', 'anh'),
(100, 'Which country is known as the Land of the Rising Sun?', 'China', 'Japan', 'South Korea', 'Thailand', 'B', 'anh'),
(101, 'What is the national flower of the United States?', 'Rose', 'Sunflower', 'Lily', 'Tulip', 'A', 'anh'),
(102, 'What is the chemical symbol for oxygen?', 'O2', 'CO', 'OX', 'O', 'D', 'anh'),
(103, 'Which planet is known as the \"Morning Star\"?', 'Venus', 'Mars', 'Jupiter', 'Saturn', 'A', 'anh'),
(104, 'Who wrote the novel \"To Kill a Mockingbird\"?', 'Harper Lee', 'J.K. Rowling', 'George Orwell', 'Jane Austen', 'A', 'anh'),
(105, 'What is the longest river in the world?', 'Amazon', 'Nile', 'Mississippi', 'Yangtze', 'B', 'anh'),
(106, 'What is the largest organ in the human body?', 'Heart', 'Brain', 'Skin', 'Liver', 'C', 'anh'),
(107, 'Which gas do plants absorb from the atmosphere during photosynthesis?', 'Oxygen', 'Carbon dioxide', 'Nitrogen', 'Hydrogen', 'B', 'anh'),
(108, 'Who is known as the Father of Modern Physics?', 'Albert Einstein', 'Isaac Newton', 'Galileo Galilei', 'Stephen Hawking', 'A', 'anh'),
(109, 'What is the chemical symbol for water?', 'CO2', 'O2', 'N2', 'H2O', 'D', 'anh'),
(110, 'Which of the following is a synonym for \"happy\"?', 'Sad', 'Angry', 'Joyful', 'Tired', 'C', 'anh'),
(111, 'Which of the following is a type of energy that comes from the sun?', 'Wind energy', 'Solar energy', 'Nuclear energy', 'Fossil fuel energy', 'B', 'anh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(11) NOT NULL,
  `thoi_gian` varchar(20) NOT NULL,
  `diem` int(2) NOT NULL,
  `idSV` int(11) NOT NULL,
  `mon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_history`
--

INSERT INTO `tbl_history` (`id`, `thoi_gian`, `diem`, `idSV`, `mon`) VALUES
(30, '10:00', 5, 2, ''),
(31, '10:00', 3, 3, ''),
(32, '10:00', 0, 3, ''),
(33, '00:13', 5, 3, ''),
(34, '00:21', 9, 10, ''),
(35, '00:01', 0, 2, ''),
(36, '00:32', 10, 13, ''),
(37, '00:03', 0, 13, ''),
(38, '00:00', 0, 14, ''),
(39, 'NaN:NaN', 0, 14, ''),
(40, '01:15', 0, 14, ''),
(41, '00:05', 1, 14, ''),
(42, '00:10', 2, 14, ''),
(43, '00:10', 1, 14, 'Tiếng Anh'),
(44, '00:12', 4, 13, ''),
(45, '00:11', 2, 14, 'Toán'),
(46, '00:14', 1, 13, 'Toán'),
(47, '00:14', 1, 14, 'Toán'),
(48, '00:12', 3, 14, 'Văn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `quyen` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user`, `password`, `quyen`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'tantt', '88888888', NULL),
(3, 'tanthethoi', '88888888', NULL),
(8, 'tantt123580', '88888888', NULL),
(9, 'taolachua', 'cungnhutren', 'admin'),
(10, 'aaaaaaaa', '12345678', NULL),
(11, 'tanlatao', '8ddcff3a80f4189ca1c9d4d902c3c9', NULL),
(12, '88888888', '8ddcff3a80f4189ca1c9d4d902c3c9', NULL),
(13, 'tanlaaivay', '8ddcff3a80f4189ca1c9d4d902c3c909', NULL),
(14, 'daylanhom13', '25d55ad283aa400af464c76d713c07ad', NULL),
(15, 't', '1', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cau_hoi`
--
ALTER TABLE `tbl_cau_hoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cau_hoi`
--
ALTER TABLE `tbl_cau_hoi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
