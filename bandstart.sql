-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 13 apr 2016 om 00:10
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `bandstart`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bands`
--

CREATE TABLE IF NOT EXISTS `bands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `Titel` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `bands`
--

INSERT INTO `bands` (`id`, `name`, `url`, `Titel`, `bio`, `img`) VALUES
(1, 'Alex Goot', 'https://www.youtube.com/watch?v=bxpiK1RqRHY', 'Pretty Eyes', 'Goot began recording music in 2004 at the age of 16 and since then has gained popularity from his profiles on various social network sites, as well as his own website, from which he distributes some of his music and provides news and regular updates.[1] His time is almost all spent in his home studio self-producing all audio and video for his releases, or touring the world.[1]\n\nGoot released his first studio album In Your Atmosphere,[4] which was made possible by his fans via an extremely successful Kickstarter campaign. He is the example of celebrity in the YouTube age; self-driven, self-promoting, aside from his musicianship, relying on modern messaging and technology to get heard. His YouTube channel has about 2,000,000 subscribers and his videos have been viewed over 330 million times.[1] His celebrity rank has fallen and he is now ranked in the 400''s among subscribers and 800''s in views.[5]\n\nAccording to Goot, his inspiration is to show the love he has for music. He further states that he "had no plan B".[3]\n\nAfter he recorded his music as well as videos for many years in his home studio in Poughkeepsie, he moved in early February 2015, immediately after his European tour in January 2015, to Los Angeles.\n\nGoot has made several videos in collaboration with other artists such as We Are the In Crowd, Kurt Hugo Schneider, Megan Nicole, Sam Tsui.\n\nGoot has released four volumes of Songs I Wish I Wrote with some of the versions of his channel on YouTube.', 'alexgoot.jpg'),
(2, 'Megan Nicole', 'https://www.youtube.com/watch?v=NXkOTMRztRw', 'B-e-a-utiful', 'In 2009, Nicole uploaded her first video to YouTube, her cover of "Use Somebody" by Kings of Leon. She followed with more covers on her YouTube channel, which includes songs by Bruno Mars, Katy Perry, Justin Bieber, Miley Cyrus, Taylor Swift, Selena Gomez, Lorde and other artists. She has several collaborations from fellow YouTube artists such as Tiffany Alvord, Alyssa Bernal, Madilyn Bailey, Tyler Ward, Dave Days, Conor Maynard and Lindsey Stirling.\n\nNicole released her first original song, "B-e-a-utiful", on July 15, 2011. Written by Nicole, Lairs Johnston, Stephen Folden, and Tom Mgrdichian, the "pop ditty" received one million hits after two days and had 27 million hits by November 2013.\n\nIn August 2012, Nicole signed with Bad Boy Records. In September 2012, Nicole reached number 29 on the Billboard Social 50 in her fourth week on the popularity chart.\n\nAn April 2014 article in The News Tribune said that on YouTube, Nicole had 1.5 million subscribers and 350 million video views. She also performed at the Pre-Show Party for the 2014 Radio Disney Music Awards.\n\nOn August 19, 2014 Megan Nicole released her single "Electrified". This was her first single off of her debut album Escape, which is an independent release on Hume Records, following her departure from Bad Boy Records. Escape has 5 new, original songs all co-written by Nicole and Mgrdichian and is released on October 14, 2014. The 80''s-inspired music video for "Electrified" premiered on People.com on September 16, 2014.\n\nNicole then starred in her first feature film Summer Forever alongside Alyson Stoner and Anna Grace Barlow, it was released on September 4, 2015, through video on demand.', 'megannicole.jpg'),
(3, 'Sam Tsui', 'https://www.youtube.com/watch?v=zAC_teyfrHU', 'Make It Up', 'Samuel "Sam" Tsui (born May 2, 1989) is an American singer/songwriter & video producer. He rose to fame as an internet celebrity and is known for covering songs by popular artists like Adele, Britney Spears, Taylor Swift, Justin Timberlake and Bruno Mars, as well as some original songs, medleys, and mashups, along with his frequent collaborations with Kurt Hugo Schneider. As of August 31, 2015, Tsui had reached 2.1 million subscribers.', 'samtsui.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
