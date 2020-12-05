CREATE TABLE `tbl_comment` (
  `comment_id` int(100) NOT NULL,
  `parent_comment_id` int(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);


ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT;