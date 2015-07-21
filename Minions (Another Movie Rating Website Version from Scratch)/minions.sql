-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 07, 2015 at 11:16 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movie-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
`movie_id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `director` text CHARACTER SET utf8 NOT NULL,
  `actor` text CHARACTER SET utf8 NOT NULL,
  `rating` double NOT NULL,
  `runtime` int(11) NOT NULL,
  `production_year` int(11) NOT NULL,
  `genres` text CHARACTER SET utf8 NOT NULL,
  `num_vote` int(255) DEFAULT NULL,
  `trailer_name` text CHARACTER SET utf8,
  `image_name` text CHARACTER SET utf8,
  `movie_language` text CHARACTER SET utf8 NOT NULL,
  `storyline` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `director`, `actor`, `rating`, `runtime`, `production_year`, `genres`, `num_vote`, `trailer_name`, `image_name`, `movie_language`, `storyline`) VALUES
(1, 'Sunset Blvd.', 'Billy Wilder', 'William Holden, Gloria Swanson, Erich von Stroheim  ', 8.5, 110, 1950, 'drama, film_noir', NULL, 'Sunset_Boulevard_Trailer.mp4', 'sunset.jpg', 'English', 'The story, set in ''50s Hollywood, focuses on Norma Desmond, a silent-screen goddess whose pathetic belief in her own indestructibility has turned her into a demented recluse. The crumbling Sunset Boulevard mansion where she lives with only her butler, Max who was once her director and husband has become her self-contained world. Norma dreams of a comeback to pictures and she begins a relationship with Joe Gillis, a small-time writer who becomes her lover, that will soon end with murder and total madness. Written by alfiehitchie'),
(2, 'Alien', 'Ridley Scott', 'Sigourney Weaver, Tom Skerritt, John Hurt', 8.5, 117, 1979, 'horror, sci_fi', NULL, 'Alien_Official_Theatrical_Trailer.mp4', 'alien-poster.jpg', 'English,Spanish', 'A commercial crew aboard the deep space towing vessel, Nostromo is on its way home when they pick an SOS warning from a distant planet. What they don''t know is that the SOS warning is not like any other ordinary warning call. Picking up the signal, the crew realize that they are not alone on the spaceship when an alien stowaway is on the cargo ship. Written by blazesnakes9'),
(3, 'The Lord of the Rings: The Return of the King', 'Peter Jackson', 'Elijah Wood, Viggo Mortensen, Ian McKellen ', 8.9, 201, 2003, 'adventure, fantasy', NULL, 'The_Lord_of_the_Rings_The_Return_of_the_King_Official_Trailer_1_2003_HD.mp4', 'lord-of-the-rings-the-return-of-the-king-blu-ray-cover-38.jpg', 'English,Quenya,Old English,Sindarin', 'While Frodo & Sam continue to approach Mount Doom to destroy the One Ring, unaware of the path Gollum is leading them, the former Fellowship aid Rohan & Gondor in a great battle in the Pelennor Fields, Minas Tirith and the Black Gates as Sauron wages his last war against Middle-Earth. Written by Anonymous'),
(4, 'The Pianist', 'Roman Polanski', 'Adrien Brody, Thomas Kretschmann, Frank Finlay', 8.5, 150, 2002, 'biography, drama, war', NULL, 'The_Pianist_Official_Trailer_1_2002_HD.mp4', '2002-pianist-1.jpg', 'English,German,Russian', 'A brilliant pianist, a Polish Jew, witnesses the restrictions Nazis place on Jews in the Polish capital, from restricted access to the building of the Warsaw ghetto. As his family is rounded up to be shipped off to the Nazi labor camps, he escapes deportation and eludes capture by living in the ruins of Warsaw. Written by Anonymous'),
(5, 'Inception', 'Christopher Nolan', 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page', 8.8, 148, 2010, 'action, mystery, sci_fi, thriller', NULL, 'Inception_2010_Official_Trailer_1_Christopher_Nolan_Movie_HD.mp4', '11166725_ori.jpg', 'English,Japanese,French', 'Dom Cobb is a skilled thief, the absolute best in the dangerous art of extraction, stealing valuable secrets from deep within the subconscious during the dream state, when the mind is at its most vulnerable. Cobb''s rare ability has made him a coveted player in this treacherous new world of corporate espionage, but it has also made him an international fugitive and cost him everything he has ever loved. Now Cobb is being offered a chance at redemption. One last job could give him his life back but only if he can accomplish the impossible-inception. Instead of the perfect heist, Cobb and his team of specialists have to pull off the reverse: their task is not to steal an idea but to plant one. If they succeed, it could be the perfect crime. But no amount of careful planning or expertise can prepare the team for the dangerous enemy that seems to predict their every move. An enemy that only Cobb could have seen coming. Written by Warner Bros. Pictures'),
(6, 'Cinderella', 'Kenneth Branagh', 'Lily James, Cate Blanchett, Richard Madden', 7.6, 105, 2015, 'drama, family, fantasy, romance', NULL, 'Disney_s_Cinderella_Official_US_Trailer.mp4', 'cinderella-2015-poster-prince-james-madden.jpg', 'English', 'A girl named Ella (Cinderella) has the purest heart living in a cruel world filled with evil stepsisters and an evil stepmother out to ruin Ella''s life. Ella comes one with her pure heart when she meets the prince and dances her way to a better life with glass shoes and a little help from her fairy godmother of course.'),
(7, 'Frozen\r\n', 'Chris Buck, Jennifer Lee\r\n', ' Kristen Bell, Idina Menzel, Jonathan Groff \r\n', 7.7, 102, 2013, 'animation, adventure, comedy, family, fantasy, musical\r\n', NULL, 'Disney_s_Frozen_Official_Trailer.mp4', 'Frozen-movie-poster.jpg', 'English, Icelandic', 'Anna, a fearless optimist, sets off on an epic journey - teaming up with rugged mountain man Kristoff and his loyal reindeer Sven - to find her sister Elsa, whose icy powers have trapped the kingdom of Arendelle in eternal winter. Encountering Everest-like conditions, mystical trolls and a hilarious snowman named Olaf, Anna and Kristoff battle the elements in a race to save the kingdom. From the outside Anna''s sister, Elsa looks poised, regal and reserved, but in reality, she lives in fear as she wrestles with a mighty secret-she was born with the power to create ice and snow. It''s a beautiful ability, but also extremely dangerous. Haunted by the moment her magic nearly killed her younger sister Anna, Elsa has isolated herself, spending every waking minute trying to suppress her growing powers. Her mounting emotions trigger the magic, accidentally setting off an eternal winter that she can''t stop. She fears she''s becoming a monster and that no one, not even her sister, can help her. Written by DeAlan Wilson for ComedyE.com'),
(8, 'Whiplash', 'Damien Chazelle', 'Miles Teller, J.K. Simmons, Melissa Benoist', 8.6, 107, 2014, 'drama, music', NULL, 'Whiplash_Official_Trailer_1_2014_Miles_Teller_J_K_Simmons_Movie_HD.mp4', '345974.jpg', 'English', 'A young and talented drummer attending a prestigious music academy finds himself under the wing of the most respected professor at the school, one who does not hold back on abuse towards his students. The two form an odd relationship as the student wants to achieve greatness, and the professor pushes him. Written by andrewhodkinson'),
(9, 'Furious 7', 'James Wan', 'Vin Diesel, Paul Walker, Dwayne Johnson ', 8.7, 137, 2015, 'action, crime, thriller', NULL, 'Furious_7_Official_Theatrical_Trailer_HD.mp4', '_1414454351.jpg', 'English', 'Dominic Torretto and his crew thought they left the criminal mercenary life behind. They defeated an international terrorist named Owen Shaw and went their seperate ways. But now, Shaw''s brother, Deckard Shaw is out killing the crew one by one for revenge. Worse, a Somalian terrorist called Jakarde, and a shady government official called "Mr. Nobody" are both competing to steal a computer terrorism program called God''s Eye, that can turn any technological device into a weapon. Torretto must reconvene with his team to stop Shaw and retrieve the God''s Eye program while caught in a power struggle between terrorist and the United States government.'),
(10, 'Citizenfour\r\n', 'Laura Poitras\r\n', 'Edward Snowden, Glenn Greenwald, William Binney', 8.2, 114, 2014, 'Documentary ', NULL, 'Citizenfour_Official_Trailer_1_2014_Edward_Snowden_Documentary_HD.mp4', 'citizenfour-poster.jpg', 'English,Portuguese,German', 'In January 2013, Laura Poitras started receiving anonymous encrypted e-mails from "CITIZENFOUR," who claimed to have evidence of illegal covert surveillance programs run by the NSA in collaboration with other intelligence agencies worldwide. Five months later, she and reporters Glenn Greenwald and Ewen MacAskill flew to Hong Kong for the first of many meetings with the man who turned out to be Edward Snowden. She brought her camera with her. The resulting film is history unfolding before our eyes. Written by Anonymous'),
(11, 'A Chinese Ghost Story', 'Siu-Tung Ching', 'Leslie Cheung, Joey Wang, Ma Wu', 7.6, 98, 1987, 'action, comedy, fantasy, romance, thriller', 1, 'A Chinese Ghost Story (1987)  Official Trailer (HD).mp4', '1.jpg', 'Cantonese', 'Ning Tsai-Shen, a humble tax collector, arrives in a small town to carry out his work. Unsurprisingly, no-one is willing to give him shelter for the night, so he ends up spending the night in the haunted Lan Ro temple. There, he meets Taoist Swordsman Yen Che-Hsia, who warns him to stay out of trouble, and the beautiful Nieh Hsiao-Tsing, with whom he falls in love. Unfortunately, Hsiao-Tsing is a ghost, bound for all eternity by a hideous tree spirit with an incredibly long tongue that wraps itself round its victims and sucks out their life essence (or ''yang element'')...'),
(12, 'Farewell My Concubine', 'Kaige Chen', 'Leslie Cheung, Fengyi Zhang, Li Gong', 8.1, 171, 1993, 'drama, music, romance', 1, 'Farewell My Concubine Trailer - IMDb_baofeng.mp4', '3.jpg', 'Mandarin', '"Farewell, My Concubine" is a movie with two parallel, intertwined stories. It is the story of two performers in the Beijing Opera, stage brothers, and the woman who comes between them. At the same time, it attempts to do no less than squeeze the entire political history of China in the twentieth century into a three-hour time-frame.'),
(13, 'Titanic', 'James Cameron', 'Leonardo DiCaprio, Kate Winslet, Billy Zane', 7.7, 194, 1997, 'drama, romance', 1, 'Titanic - Official Trailer [1997].mp4', '9.jpg', 'English, French, German, Swedish, Italian, Russian', '84 years later, a 101-year-old woman named Rose DeWitt Bukater tells the story to her granddaughter Lizzy Calvert, Brock Lovett, Lewis Bodine, Bobby Buell and Anatoly Mikailavich on the Keldysh about her life set in April 10th 1912, on a ship called Titanic when young Rose boards the departing ship with the upper-class passengers and her mother, Ruth DeWitt Bukater, and her fiancé, Caledon Hockley. Meanwhile, a drifter and artist named Jack Dawson and his best friend Fabrizio De Rossi win third-class tickets to the ship in a game. And she explains the whole story from departure until the death of Titanic on its first and last voyage April 15th, 1912 at 2:20 in the morning.'),
(14, 'The Matrix', 'The Wachowski Brothers, The Wachowski Brothers', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne ', 8.7, 136, 1999, 'action, sci_fi', 3, 'Matrix Trailer HD (1999).mp4', '8.jpg', 'English', 'Thomas A. Anderson is a man living two lives. By day he is an average computer programmer and by night a hacker known as Neo. Neo has always questioned his reality, but the truth is far beyond his imagination. Neo finds himself targeted by the police when he is contacted by Morpheus, a legendary computer hacker branded a terrorist by the government. Morpheus awakens Neo to the real world, a ravaged wasteland where most of humanity have been captured by a race of machines that live off of the humans'' body heat and electrochemical energy and who imprison their minds within an artificial reality known as the Matrix. As a rebel against the machines, Neo must return to the Matrix and confront the agents: super-powerful computer programs devoted to snuffing out Neo and the entire human rebellion.'),
(15, 'saving face', 'Alice Wu', 'Joan Chen, Michelle Krusiec, Lynn Chen', 7.6, 91, 2004, 'comedy, drama, romance', 5, 'saving_face.mp4', '7.jpg', 'English,Mandarin,Shanghainese', 'In Manhattan, the brilliant Chinese-American lesbian surgeon Wil is surprised by the arrival of her forty-eight year old widow mother to her apartment. Ma was banished from Flushing, Queens, when her father discovered that she was pregnant. The presence of Ma affects the personal life of Wil, who is in love with the daughter of her boss at the hospital, the dancer Vivian Shing. Once her grandfather has promised that her mother would only return to Flushing remarried or proving that it was an immaculate conception, Wil tries to find a Chinese bachelor to marry Ma. '),
(16, 'Imagine Me & You', 'Ol Parker', 'Piper Perabo, Lena Headey, Matthew Goode', 6.9, 94, 2005, 'comedy, drama, romance', 2, 'Imagine Me & You Promo - IMDb_baofeng.mp4', '6.jpg', 'English', 'Rachel and Heck, long time friends and lovers, finally tie the knot, and during the celebration, Rachel starts a friendship with their florist, Luce. And while Rachel originally intended to match her new friend, Luce, up with her husband''s friend, Cooper, she soon finds out that Luce is a lesbian. During the course of their friendship, Rachel starts to question her own sexuality. And though she comes to realize she may have feelings for her new friend, Rachel must decide who she will ultimately find the most happiness with: Heck, her new husband who is also adored by her family, or Luce, who has turned her life and everything she thought she knew about love upside down.'),
(17, 'Fingersmith', 'Aisling Walsh', 'Elaine Cassidy, Sally Hawkins, Imelda Staunton', 8.1, 181, 2005, 'crime, drama, romance', 3, 'Fingersmith trailer.mp4', '4.jpg', 'English', 'Susan "Sue" Trinder is a fingersmith (British slang for thief) who lives in the slums of London with a baby farmer (person who looks after unwanted babies) Mrs.Sucksby. When a once rich man, who gambled all his money away, presents them with a scam that has a payout of 40,000 pounds, Sue signs on to swindle rich Maud Lilly. Maud is an orphan who lives with her uncle, but what exactly is going on in the Lilly house? Sue will pose as Maud''s maid so that Mr.Rivers (the gentleman) can get close to and eventually marry her. Their plan is to put Maud in the madhouse and take the money for themselves. All goes astray though when Sue falls in love with Maud. And the question is: Who can you trust?'),
(18, 'He''s Just Not That Into You', 'Ken Kwapis', 'Jennifer Aniston, Jennifer Connelly, Morgan Lily', 6.4, 129, 2009, 'comedy, drama, romance', 2, 'He''s Just Not That Into You trailer.mp4', '5.jpg', 'English', 'The needy Gigi Haim is a young woman seeking her prince charming somewhere amongst her unsuccessful dates. After dating estate agent Conor Barry, Gigi anxiously expects to receive a phone call from him. However Conor never calls her. Gigi decides to go to the bar where he frequents to see him, but she meets his friend Alex who works there. They become friends and Alex helps Gigi to interpret the subtle signs given out by her dates.'),
(19, 'Triangle', 'Christopher Smith', 'Melissa George, Joshua McIvor, Jack Taylor', 6.9, 99, 2009, 'mystery, thriller', 3, 'Triangle - Trailer.mp4', '10.jpg', 'English', 'When Jess sets sail on a yacht with a group of friends, she cannot shake the feeling that there is something wrong. Her suspicions are realized when the yacht hits a storm and the group is forced to board a passing ocean liner to get to safety, a ship Jess is convinced she''s been on before. The ship appears deserted, the clock on board has stopped, but they are not alone... Someone is intent on hunting them down, one by one. And Jess unknowingly holds the key to end the terror.'),
(20, 'About Time', 'Richard Curtis', 'Domhnall Gleeson, Rachel McAdams, Bill Nighy', 7.8, 123, 2013, 'drama, fantasy, romance', 1, 'about_time.mp4', '2.jpg', 'English', 'At the age of 21, Tim Lake (Domhnall Gleeson) discovers he can travel in time... The night after another unsatisfactory New Year party, Tim''s father (Bill Nighy) tells his son that the men in his family have always had the ability to travel through time. Tim can''t change history, but he can change what happens and has happened in his own life-so he decides to make his world a better place...by getting a girlfriend. Sadly, that turns out not to be as easy as you might think. Moving from the Cornwall coast to London to train as a lawyer, Tim finally meets the beautiful but insecure Mary (Rachel McAdams). They fall in love, then an unfortunate time-travel incident means he''s never met her at all. So they meet for the first time again-and again-but finally, after a lot of cunning time-traveling, he wins her heart. Tim then uses his power to create the perfect romantic proposal, to save his wedding from the worst best-man speeches, to save his best friend from professional disaster and to ... '),
(21, 'Schindler''s List', 'Steven Spielberg', 'Liam Neeson, Ralph Fiennes, Ben Kingsley', 8.9, 195, 1993, 'biography, drama, history', NULL, 'schindler''s_list.mp4', 'schindlers-list.jpg', 'English, Hebrew, German, Polish', 'Oskar Schindler is a vainglorious and greedy German businessman who becomes an unlikely humanitarian amid the barbaric Nazi reign when he feels compelled to turn his factory into a refuge for Jews. Based on the true story of Oskar Schindler who managed to save about 1100 Jews from being gassed at the Auschwitz concentration camp, it is a testament for the good in all of us.'),
(22, 'The Shawshank Redemption', 'Frank Darabont', 'Tim Robbins, Morgan Freeman, Bob Gunton', 9.3, 142, 1994, 'crime, drama', NULL, 'shawshank_redemption.mp4', 'the-shawshank-redemption.jpg', 'English', 'Andy Dufresne is a young and successful banker whose life changes drastically when he is convicted and sentenced to life imprisonment for the murder of his wife and her lover. Set in the 1940''s, the film shows how Andy, with the help of his friend Red, the prison entrepreneur, turns out to be a most unconventional prisoner.'),
(23, 'Monsters, Inc.', 'Pete Docter, David Silverman', 'Billy Crystal, John Goodman, Mary Gibbs', 8.1, 92, 2001, 'animation, adventure, comedy', NULL, 'Monsters_Inc. 3D Trailer.mp4', 'monsters_inc.jpg', 'English', 'A city of monsters with no humans called Monstropolis centers around the city''s power company, Monsters, Inc. The lovable, confident, tough, furry blue behemoth-like giant monster named James P. Sullivan (better known as Sulley) and his wisecracking best friend, short, green cyclops monster Mike Wazowski, discover what happens when the real world interacts with theirs in the form of a 2-year-old baby girl dubbed "Boo," who accidentally sneaks into the monster world with Sulley one night. And now it''s up to Sulley and Mike to send Boo back in her door before anybody finds out, especially two evil villains such as Sulley''s main rival as a scarer, chameleon-like Randall (a monster that Boo is very afraid of), who possesses the ability to change the color of his skin, and Mike and Sulley''s boss Mr. '),
(24, 'Interstellar', 'Christopher Nolan', 'Matthew McConaughey, Anne Hathaway, Jessica Chastain', 8.8, 169, 2014, 'adventure, sci_fi', NULL, 'Interstellar.mp4', 'interstellar.jpg', 'English', 'In the near future, Earth has been devastated by drought and famine, causing a scarcity in food and extreme changes in climate. When humanity is facing extinction, a mysterious rip in the space-time continuum is discovered, giving mankind the opportunity to widen its lifespan. A group of explorers must travel beyond our solar system in search of a planet that can sustain life. The crew of the Endurance are required to think bigger and go further than any human in history as they embark on an interstellar voyage into the unknown. Coop, the pilot of the Endurance, must decide between seeing his children again and the future of the human race. '),
(25, 'WALL E', 'Andrew Stanton', 'Ben Burtt, Elissa Knight, Jeff Garlin', 8.4, 98, 2008, 'animation, adventure, sci_fi', NULL, 'WALL_E.mp4', 'wall_e.jpg', 'English', 'In a distant, but not so unrealistic, future where mankind has abandoned earth because it has become covered with trash from products sold by the powerful multi-national Buy N Large corporation, WALL-E, a garbage collecting robot has been left to clean up the mess. Mesmerized with trinkets of Earth''s history and show tunes, WALL-E is alone on Earth except for a sprightly pet cockroach. One day, EVE, a sleek (and dangerous) reconnaissance robot, is sent to Earth to find proof that life is once again sustainable. WALL-E falls in love with EVE. WALL-E rescues EVE from a dust storm and shows her a living plant he found amongst the rubble. Consistent with her "directive", EVE takes the plant and automatically enters a deactivated state except for a blinking green beacon. WALL-E, doesn''t understand what has happened to his new friend, but, true to his love, he protects her from wind, rain, and lightning, even as she is unresponsive. One day a massive ship comes to reclaim EVE, but WALL-E'),
(26, 'Star Trek Into Darkness', 'J.J. Abrams', 'Chris Pine, Zachary Quinto, Zoe Saldana', 7.8, 132, 2013, 'action, adventure, sci_fi', NULL, 'Star_Trek.mp4', 'star_trek_into_darkness.jpg', 'English, Klingon', 'When the crew of the Enterprise is called back home, they find an unstoppable force of terror from within their own organization has detonated the fleet and everything it stands for, leaving our world in a state of crisis. With a personal score to settle, Captain Kirk leads a manhunt to a war-zone world to capture a one-man weapon of mass destruction. As our heroes are propelled into an epic chess game of life and death, love will be challenged, friendships will be torn apart, and sacrifices must be made for the only family Kirk has left: his crew. '),
(27, 'Ice Age: Continental Drift', 'Steve Martino, Mike Thurmeier', 'Ray Romano, Denis Leary, John Leguizamo', 6.7, 88, 2012, 'animation, adventure, comedy', NULL, 'ice_age.ogg', 'ice_age.jpg', 'English', 'When Scrat accidentally provokes a continental cataclysm with a storm, Manny is separated from Ellie and Peaches on an iceberg with Diego, Sid and Granny but he promises that he will find a way to return home. While crossing the ocean, they are captured by the cruel pirate Captain Gutt and his crew. However they escape and Manny plots a plan to steal Captain Gutt''s ship and return to his homeland in a dangerous voyage through the sea. But the cruel pirates seek revenge against Manny and his family and friends.'),
(28, 'The Imitation Game', 'Morten Tyldum', 'Benedict Cumberbatch, Keira Knightley, Matthew Goode ', 8.1, 114, 2014, 'biography, drama, thriller', NULL, 'theimitationgame.mp4', 'theImitationGame.jpg', 'English, German', 'Based on the real life story of legendary cryptanalyst Alan Turing, the film portrays the nail-biting race against time by Turing and his brilliant team of code-breakers at Britain''s top-secret Government Code and Cypher School at Bletchley Park, during the darkest days of World War II.'),
(29, 'Big Hero 6', 'Don Hall, Chris Williams', 'Ryan Potter, Scott Adsit, Jamie Chung', 8, 102, 2014, 'animation, action, adventure', NULL, 'Big_Hero 6.mp4', 'big_hero.jpg', 'English', 'From Walt Disney Animation Studios, the team behind "Frozen" and "Wreck-It Ralph," comes "Big Hero 6," an action-packed comedy-adventure about the special bond that develops between Baymax, a plus-sized inflatable robot, and prodigy Hiro Hamada. When a devastating event befalls the city of San Fransokyo and catapults Hiro into the midst of danger, he turns to Baymax and his close friends adrenaline junkie Go Go Tomago, neatnik Wasabi, chemistry whiz Honey Lemon and fanboy Fred. Determined to uncover the mystery, Hiro transforms his friends into a band of high-tech heroes called "Big Hero 6."'),
(30, 'Kingsman: The Secret Service', 'Matthew Vaughn', 'Colin Firth, Taron Egerton, Samuel L. Jackson', 8.2, 129, 2014, 'action, adventure, comedy', NULL, 'kingsman.mp4', 'kingsman.jpg', 'English, Arabic, Swedish', 'Based upon the acclaimed comic book and directed by Matthew Vaughn, Kingsman: The Secret Service tells the story of a super-secret spy organization that recruits an unrefined but promising street kid into the agency''s ultra-competitive training program just as a global threat emerges from a twisted tech genius.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
`review_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comments` longtext,
  `score` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `movie_id`, `user_id`, `comments`, `score`) VALUES
(1, 16, 10, 'In congue. Etiam justo. Etiam pretium iaculis justo.', 4),
(2, 13, 8, 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 10),
(3, 18, 4, 'In congue. Etiam justo. Etiam pretium iaculis justo.', 7),
(4, 7, 6, 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 9),
(5, 8, 4, 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 4),
(6, 14, 5, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 6),
(7, 15, 9, 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 6),
(8, 30, 10, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 6),
(9, 26, 3, 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 9),
(10, 3, 5, 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 10),
(11, 27, 10, 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 1),
(12, 16, 7, 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 1),
(13, 2, 6, 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 10),
(14, 19, 6, 'Phasellus in felis. Donec semper sapien a libero. Nam dui.', 8),
(15, 26, 5, 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 3),
(16, 18, 9, 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 1),
(17, 1, 9, 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 9),
(18, 1, 1, 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 3),
(19, 29, 1, 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 1),
(20, 21, 10, 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 10),
(21, 23, 7, 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 9),
(22, 27, 6, 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 1),
(23, 19, 1, 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 10),
(24, 4, 9, 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 8),
(25, 7, 4, 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 8),
(26, 1, 9, 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.', 5),
(27, 3, 2, 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 7),
(28, 26, 1, 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 5),
(29, 26, 6, 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 10),
(30, 1, 5, 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 1),
(31, 17, 2, 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 10),
(32, 28, 4, 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 9),
(33, 19, 1, 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 1),
(34, 8, 3, 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 4),
(35, 9, 8, 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 4),
(36, 3, 3, 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 5),
(37, 30, 8, 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.', 5),
(38, 16, 3, 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 10),
(39, 20, 3, 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 5),
(40, 9, 4, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 8),
(41, 13, 7, 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 2),
(42, 14, 8, 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 6),
(43, 20, 10, 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', 2),
(44, 6, 4, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 2),
(45, 22, 8, 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 1),
(46, 14, 9, 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 5),
(47, 14, 5, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 8),
(48, 18, 9, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.', 1),
(49, 11, 6, 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 5),
(50, 21, 8, 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 4),
(51, 23, 10, 'Sed ante. Vivamus tortor. Duis mattis egestas metus.', 5),
(52, 12, 7, 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 10),
(53, 23, 1, 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 10),
(54, 2, 7, 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.', 10),
(55, 5, 1, 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 5),
(56, 11, 1, 'Fusce consequat. Nulla nisl. Nunc nisl.', 7),
(57, 26, 5, 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 9),
(58, 29, 4, 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 2),
(59, 10, 2, 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 9),
(60, 14, 5, 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 10),
(61, 15, 10, 'New record', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(11) CHARACTER SET utf8 NOT NULL,
  `pass_word` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `pass_word`, `email`, `gender`, `birthday`) VALUES
(1, 'jwest0', '64vShir9', 'pcollins0@bing.com', '0', '1970-04-13'),
(2, 'jhenderson1', 'Q9J0n2CY39S', 'ahudson1@w3.org', '1', '1979-08-30'),
(3, 'wferguson2', 'VB1FUy', 'balexander2@imgur.com', '0', '1988-09-30'),
(4, 'balvarez3', 'P8AQ1zm', 'bbell3@nymag.com', '0', '1988-09-06'),
(5, 'sperkins4', 'YB6DZVm', 'cwagner4@yelp.com', '0', '1971-11-12'),
(6, 'dmontgomery', 'TLfoqLPPmk', 'choward5@icio.us', '1', '1964-08-18'),
(7, 'efowler6', 'qJNp3Df', 'gwelch6@tinyurl.com', '0', '2013-02-04'),
(8, 'bbutler7', 'FjI0idUB0PF', 'imatthews7@upenn.edu', '0', '1987-06-23'),
(9, 'vbradley8', 'NFT1SEN', 'jcampbell8@4shared.com', '0', '1993-12-30'),
(10, 'jmurphy9', 'PSIvlHrffaU', 'gphillips9@wsj.com', '1', '1995-04-19'),
(11, 'sreida', '76egGXrc', 'cmontgomerya@hexun.com', '1', '1951-12-04'),
(12, 'bcarterb', 'pymU2NRX', 'dbishopb@technorati.com', '1', '1981-06-28'),
(13, 'mtaylorc', 'EYHDtw', 'sfosterc@eepurl.com', '1', '1969-02-28'),
(14, 'bfernandezd', 'Uy9MUBOCE', 'kperezd@bloomberg.com', '1', '1996-04-24'),
(15, 'dkennedye', '6PAYwL7zmngr', 'tvasqueze@51.la', '0', '1954-04-19'),
(16, 'pperkinsf', 'wj3eMXy74', 'sweaverf@tinyurl.com', '0', '2007-03-20'),
(17, 'dwoodg', 'q8MAZXQJZ', 'sbutlerg@squarespace.com', '0', '2009-06-15'),
(18, 'tdanielsh', 'tGd5IkOY', 'jgriffinh@hugedomains.com', '0', '1979-05-06'),
(19, 'jknighti', 'fXGIERdA7bn', 'thunteri@salon.com', '1', '2004-08-24'),
(20, 'jwellsj', 'J01GfqmQv', 'dwarrenj@t.co', '1', '1970-10-28'),
(21, 'amccoyk', '1uluDKJI1', 'tmorgank@tmall.com', '1', '1979-08-23'),
(22, 'tfosterl', 'T9Mcufs0MPZD', 'dlongl@house.gov', '1', '2006-04-14'),
(23, 'psanchezm', 'yVkDbfg95yhc', 'ljonesm@dmoz.org', '0', '1983-01-09'),
(24, 'lhicksn', 'tIPcML', 'molivern@over-blog.com', '1', '1961-09-04'),
(25, 'awatsono', 'JCigg56z88a', 'jscotto@gnu.org', '1', '1974-04-24'),
(26, 'dblackp', 'hlsvxJp256yZ', 'rstewartp@microsoft.com', '1', '1964-06-07'),
(27, 'dmurrayq', 'BJSHzAE', 'larnoldq@comsenz.com', '1', '1973-08-19'),
(28, 'wsandersr', 'bHTvmoJ4l', 'cjordanr@shareasale.com', '1', '2007-10-27'),
(29, 'esmiths', 'umzGVNhNb', 'cfowlers@spotify.com', '1', '1976-09-08'),
(30, 'mfostert', 'tbKBKH', 'ethompsont@ihg.com', '1', '1972-10-21'),
(31, 'abishopu', 'wz0pFQj', 'rstevensu@technorati.com', '0', '1968-09-19'),
(32, 'mharrisv', '9I9OkMB', 'moliverv@ning.com', '1', '1961-03-26'),
(33, 'redwardsw', 'ZY4xJAA2', 'mwilsonw@webnode.com', '0', '2009-01-02'),
(34, 'rcolex', 'TXdoRkljtb', 'jwillisx@skyrock.com', '0', '1968-03-09'),
(35, 'ewarreny', 'HTTm3uZ7fEHf', 'krosey@wordpress.org', '0', '1973-02-27'),
(36, 'cbrooksz', 'bhSWBhtf67', 'blawrencez@posterous.com', '1', '1997-07-03'),
(37, 'jhenry10', 'DTVAK7Votrvr', 'dgreene10@woothemes.com', '0', '1975-11-09'),
(38, 'dgrant11', '787eseRH', 'jmoore11@dailymail.co.uk', '1', '1991-07-19'),
(39, 'mshaw12', 'lD5OJcuR', 'hcole12@unblog.fr', '1', '1984-09-09'),
(40, 'whill13', '0BFvPE', 'bstone13@xing.com', '1', '1988-11-12'),
(41, 'bmorris14', 'yUa8lX', 'rlawson14@google.com', '0', '1964-02-12'),
(42, 'rjenkins15', '9yDSxLLJ', 'bmarshall15@ucsd.edu', '0', '1985-05-17'),
(43, 'acoleman16', 'jNrCSMW', 'amurray16@opera.com', '1', '1976-03-10'),
(44, 'gmorrison17', 'DmNbsHs', 'hcole17@godaddy.com', '0', '1975-07-18'),
(45, 'jduncan18', '0fRnXbP6', 'tcox18@w3.org', '1', '1994-03-24'),
(46, 'aharper19', 'Cd64RkI', 'dgreene19@ft.com', '0', '1996-09-25'),
(47, 'gferguson1a', 'PL0Kq41zCuS1', 'rreyes1a@jugem.jp', '1', '1997-06-23'),
(48, 'jsmith1b', 'aE9WEQAQ', 'slawrence1b@mozilla.org', '0', '1993-04-12'),
(49, 'rperry1c', '93PrY4cB8ujV', 'pmatthews1c@stumbleupon.com', '1', '2005-03-30'),
(50, 'tharrison1d', 'BFA3V8SJ', 'ssmith1d@amazon.co.jp', '0', '1983-10-18'),
(51, 'jmendoza1e', 'ffq8bJNcWx', 'aweaver1e@earthlink.net', '1', '1995-03-28'),
(52, 'prodriguez1', 'TA670IS', 'eking1f@slideshare.net', '0', '2006-03-07'),
(53, 'tmartin1g', 'HvlUwV5', 'kblack1g@economist.com', '0', '2013-07-28'),
(54, 'klarson1h', '4ZMokcX', 'molson1h@vkontakte.ru', '1', '1977-05-04'),
(55, 'lcarr1i', 'xA3Pa6oHbv', 'jmartin1i@answers.com', '1', '1992-08-21'),
(56, 'snelson1j', 'XsLMFJ', 'lgreen1j@4shared.com', '0', '1972-03-24'),
(57, 'hburns1k', 'ntWDNlTK14', 'glong1k@mit.edu', '0', '1954-01-08'),
(58, 'cpeters1l', 'VhZA95tIR', 'mbell1l@alexa.com', '0', '1997-08-09'),
(59, 'kevans1m', 'Qj71fiCL', 'bhudson1m@csmonitor.com', '1', '1986-06-29'),
(60, 'jclark1n', 'mFFszQGmr5Y', 'kfuller1n@blinklist.com', '1', '1953-10-03'),
(61, 'admin', 'admin!', 'admin@minions.com', 'Male', '1992-05-04'),
(62, 'yingjie', 'yingjie!', 'yingjie@gmail.com', 'Male', '2012-05-04'),
(63, 'congcong', 'congcong!', 'congcong@utdallas.com', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
 ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`review_id`), ADD KEY `movie_id` (`movie_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
