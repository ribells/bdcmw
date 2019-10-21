--
-- Host: localhost:8889
-- Generation Time: Oct 20, 2019 at 04:10 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `adaquest`
--

-- --------------------------------------------------------

--
-- Database user and privileges required for web updates
--

CREATE USER 'adaquest'@'localhost' IDENTIFIED BY '+rB1DCp+R2!mw1c';
GRANT ALL PRIVILEGES ON * . * TO 'adaquest'@'localhost';

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `quest` text NOT NULL,
  `name` text NOT NULL,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL,
  `a5` text NOT NULL,
  `a6` text NOT NULL,
  `a7` text NOT NULL,
  `a8` text NOT NULL,
  `a9` text NOT NULL,
  `a10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quest`, `name`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`) VALUES
(2, 'Has your child ever received a diagnosis?', 'previous', 'Yes', 'No', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(3, 'Has your child every received Special Education [or Early Intervention as a function of child’s age] services at school (e.g., meeting with a Special Education teacher, or a Speech Therapist, or an Occupational or Physical Therapist, a teacher specialized in instruction like reading or math, etc.)?', 'sped', 'Never', 'My child has had some limited or occasional services (1-to-6 visits) during one or more school years.', 'My child has received help a few times per month during one or more school years.', 'My child has received help on a weekly basis during one or more school years.', 'My child has received help on most days of the week during one or more school years.', '-1', '-1', '-1', '-1', '-1'),
(4, 'Has your child every received mental health counseling services either at school or from a private Counselor (e.g., Psychiatrist, Psychologist, Social Worker, School Counselor, Licensed Professional Counselor, Marriage & Family Counselor)?', 'counsel', 'Never', 'My child has had some limited or occasional counseling services (1-to-6 visits) during the last 3 years.', 'My child has received counseling services a few times per month sometime during the last 3 years.', 'My child has been receiving help on a weekly basis some time during the last 3-years.', 'My child has been receiving counseling services on a monthly to weekly basis during the last year.', '-1', '-1', '-1', '-1', '-1'),
(5, 'Have you ever participated in meetings with the administrators, teachers and/or therapists from your child’s school that has resulted in any of the following:', 'meetings', 'I do not know or remember if I have ever participated in these types of meetings, nor do I know if my child has any specialized plans for his/her education.', 'I have not participated in any special meetings other than back to school nights, open houses or routine teacher conferences given to all of the children in my child\'s school and my child is not receiving any specialized supports other than what is given to all the children in the class.', 'My child has been, or is being \"monitored\" to determine if he/she is having any specific difficulties in school.', 'My child is provided with \"special accommodations\" in taking tests, seating in class or other forms of assistance (called a \"504 plan\").', 'My child was given an Individual Education Program (IEP).', '-1', '-1', '-1', '-1', '-1'),
(1, 'Age of individual in question:', 'age', 'Infancy 0-to-1', 'Toddler 1-to-3', 'Preschool 4-to-5', 'Early school age 5-to-7', 'Middle Elementary 7-to-9', 'Late Elementary 9-to-11', 'Middle School 11-to-14', 'HS 14-to-18', 'Post HS 18-to-21', 'Young adult 21-to-30');

--
-- Table structure for table `page1`
--

CREATE TABLE `page1` (
  `name` text,
  `email` text,
  `role` text,
  `age` tinyint(4) DEFAULT NULL,
  `previous` tinyint(4) DEFAULT NULL,
  `sped` tinyint(4) DEFAULT NULL,
  `counsel` tinyint(4) DEFAULT NULL,
  `meetings` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Example data for table `page1`
--

--INSERT INTO `page1` (`name`, `email`, `role`, `age`, `previous`, `sped`, `counsel`, `meetings`) VALUES
--('Bruce Donald Campbell', 'bdc105@gmail.com', 'Parent', 1, 1, 4, 4, 2);


