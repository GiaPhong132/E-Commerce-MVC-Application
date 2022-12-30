use E_commerce;

drop table if exists user;

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('admin@gmail.com', 'public/images/user/default.png', 'admin', 'admin', 1, 20, '123123', '2022-06-16 21:46:51', '2022-06-16 21:46:51', '$2y$10$GTSVSDI2TFhxJnNFrS8tj.2GKKkbAfiZtvYbRxUvIP/Mp6dtcwC8u');

INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('giaphong132@gmail.com', 'public/images/user/default.png', 'Bùi Đoàn', 'Phong', 1, 20, '1', '2022-06-16 20:48:56', '2022-06-17 17:42:04', '$2y$10$NtrSaLnNsR29ouPqCuQF5ukGtuttVs70TYntJrdkyqWEC0YM417H.');
INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('phong.bui132@hcmut.edu.vn', 'public/img/user/default.png', 'Phong', 'Phong', 1, 20, '0704701412', '2022-06-16 20:49:12', '2022-06-16 20:49:12', '$2y$10$CMNaGhePLvkl.U4DuIMRfesAGCn3uJohnSaBMyi1EK1pVSGk7OcQi');

ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);


