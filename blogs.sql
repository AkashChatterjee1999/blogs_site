-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 08:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `projs_names`
--

CREATE TABLE `projs_names` (
  `proj_topic` varchar(255) NOT NULL,
  `proj_lang` varchar(255) NOT NULL,
  `proj_abt` varchar(255) NOT NULL,
  `proj_date` date NOT NULL,
  `details_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projs_names`
--

INSERT INTO `projs_names` (`proj_topic`, `proj_lang`, `proj_abt`, `proj_date`, `details_id`) VALUES
('Covid-19 tracker and predictor app', 'Flutter', 'This is an app which is used for showing the covid cases in realtime and predicting the cases.', '2020-06-10', 1),
('Quiz web app with tab monitoring', 'Html, Css, Jquery, Ajax, Php', 'This is a web app created as a cheating proof exam system where features like question adition,tab monitoring are available.... More features coming soon', '2020-05-27', 2),
('Responsive Portfolio site', 'Html, Css, jQuery', 'This is a simple portfolio site which is also ressponsive writtn in above langs ', '2020-04-15', 3),
('Portfolio site with flutter', 'Flutter(web)', 'This is a multipage website built with flutter web framework with attractive UI.', '2020-01-02', 4),
('Twitter Sentiment analysis with TweePy', 'Python', 'This project is all about searching a trend in twitter and finding the no. of good,bad reviews in it', '2019-11-21', 5);

-- --------------------------------------------------------

--
-- Table structure for table `proj_details`
--

CREATE TABLE `proj_details` (
  `id` int(11) NOT NULL,
  `explanation` longtext DEFAULT NULL,
  `car_img_1` varchar(255) DEFAULT NULL,
  `car_img_2` varchar(255) DEFAULT NULL,
  `car_img_3` varchar(255) DEFAULT NULL,
  `car_img_4` varchar(255) DEFAULT NULL,
  `car_img_5` varchar(255) DEFAULT NULL,
  `src_code_link` varchar(255) DEFAULT NULL,
  `prj_lang` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj_details`
--

INSERT INTO `proj_details` (`id`, `explanation`, `car_img_1`, `car_img_2`, `car_img_3`, `car_img_4`, `car_img_5`, `src_code_link`, `prj_lang`) VALUES
(1, 'This is th project where i have tried to make a flutter application where i tried to track the covid cases<br>\r\nof variuos countries in real time. And this is achieved by hitting an API of covid-19 where we are getting a<br>\r\nresponse of current covid cases of varous contries.The code looks like this<br>\r\nThe code looks like this-<br><br><t>\r\n Future <Map<String,List>> fetchData() async{<br>\r\n    final response = await http.get(\'https://api.covid19api.com/summary\');<br>\r\n    if(response.statusCode==200) { //status code 200 means ok <br>\r\n      return Corona_Data.fromJSON(json.decode(response.body));<br>\r\n    }<br>\r\n    else<br>\r\n      throw Exception(\'Error has occured\');<br>\r\n  }<br>\r\nAnother aspect which is very important here is that i have implemented dynamic widget here when the app tries<br>\r\nto find the status of the covid cases country wise where we have used thw future builder widget which binds the widget<br>\r\nas required by demand...The code looks here like this<br><br>\r\nFutureBuilder <Map<String,List>>(<br>\r\n    future: c_data,<br>\r\n    builder:(context,snapshot){<br>\r\n    if(snapshot.hasData){<br>\r\n        switch(holder){<br>\r\n                            case \'USA\': data = snapshot.data[\'United States of America\'];<br>\r\n                              break;<br>\r\n                            case \'India\': data = snapshot.data[\'India\'];<br>\r\n                              break;<br>\r\n                            case \'China\':data = snapshot.data[\'China\'];<br>\r\n                              break;<br>\r\n                            case \'Italy\':data = snapshot.data[\'Italy\'];<br>\r\n                              break;<br>\r\n                            case \'Russia\':data = snapshot.data[\'Russian Federation\'];<br>\r\n                              break;<br>\r\n                            case \'France\':data = snapshot.data[\'France\'];<br>\r\n                              break;<br>\r\n                            default: data = snapshot.data[\'Global\'];<br>\r\n                          }<br>\r\n                          return __build_stat_card__(ht, wd, data);<br>\r\n                        }else if(snapshot.hasError){<br>\r\n                          return Center(child: Text(\"Sorry can\'t Load data\",style:TextStyle(fontWeight: FontWeight.bold,fontFamily: \'Raleway\')));<br>\r\n                        }<br>\r\n                        return CircularProgressIndicator();<br>\r\n                      }<br>\r\n                  ),<br>\r\n                  scrollDirection: Axis.vertical,<br>\r\n                  shrinkWrap: true,<br>\r\n              ),<br>\r\nAnd in this way achieve dynamic widget here..', 'back.jpg', 'back.jpg', 'back.jpg', 'back.jpg', 'back.jpg', '#', 'Flutter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projs_names`
--
ALTER TABLE `projs_names`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `proj_details`
--
ALTER TABLE `proj_details`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
