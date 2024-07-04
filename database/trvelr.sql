-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 02:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trvelr`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countrycode` varchar(255) NOT NULL,
  `countryname` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `countrycode`, `countryname`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'DZA', 'Algeria', 'DZ', NULL, NULL, NULL),
(2, 'AGO', 'Angola', 'AO', NULL, NULL, NULL),
(3, 'BEN', 'Benin', 'BJ', NULL, NULL, NULL),
(4, 'BWA', 'Botswana', 'BW', NULL, NULL, NULL),
(5, 'BFA', 'Burkina Faso', 'BF', NULL, NULL, NULL),
(6, 'BDI', 'Burundi', 'BI', NULL, NULL, NULL),
(7, 'CPV', 'Cape Verde', 'CV', NULL, NULL, NULL),
(8, 'CMR', 'Cameroon', 'CM', NULL, NULL, NULL),
(9, 'CAF', 'Central African Republic', 'CF', NULL, NULL, NULL),
(10, 'TCD', 'Chad', 'TD', NULL, NULL, NULL),
(11, 'COM', 'Comoros', 'KM', NULL, NULL, NULL),
(12, 'COG', 'Republic of the Congo', 'CG', NULL, NULL, NULL),
(13, 'COD', 'Democratic Republic of the Congo', 'CD', NULL, NULL, NULL),
(14, 'DJI', 'Djibouti', 'DJ', NULL, NULL, NULL),
(15, 'EGY', 'Egypt', 'EG', NULL, NULL, NULL),
(16, 'GNQ', 'Equatorial Guinea', 'GQ', NULL, NULL, NULL),
(17, 'ERI', 'Eritrea', 'ER', NULL, NULL, NULL),
(18, 'SWZ', 'Eswatini', 'SZ', NULL, NULL, NULL),
(19, 'ETH', 'Ethiopia', 'ET', NULL, NULL, NULL),
(20, 'GAB', 'Gabon', 'GA', NULL, NULL, NULL),
(21, 'GMB', 'Gambia', 'GM', NULL, NULL, NULL),
(22, 'GHA', 'Ghana', 'GH', NULL, NULL, NULL),
(23, 'GIN', 'Guinea', 'GN', NULL, NULL, NULL),
(24, 'GNB', 'Guinea-Bissau', 'GW', NULL, NULL, NULL),
(25, 'CIV', 'Ivory Coast', 'CI', NULL, NULL, NULL),
(26, 'KEN', 'Kenya', 'KE', NULL, NULL, NULL),
(27, 'LSO', 'Lesotho', 'LS', NULL, NULL, NULL),
(28, 'LBR', 'Liberia', 'LR', NULL, NULL, NULL),
(29, 'LBY', 'Libya', 'LY', NULL, NULL, NULL),
(30, 'MDG', 'Madagascar', 'MG', NULL, NULL, NULL),
(31, 'MWI', 'Malawi', 'MW', NULL, NULL, NULL),
(32, 'MLI', 'Mali', 'ML', NULL, NULL, NULL),
(33, 'MRT', 'Mauritania', 'MR', NULL, NULL, NULL),
(34, 'MUS', 'Mauritius', 'MU', NULL, NULL, NULL),
(35, 'MYT', 'Mayotte', 'YT', NULL, NULL, NULL),
(36, 'MAR', 'Morocco', 'MA', NULL, NULL, NULL),
(37, 'MOZ', 'Mozambique', 'MZ', NULL, NULL, NULL),
(38, 'NAM', 'Namibia', 'NA', NULL, NULL, NULL),
(39, 'NER', 'Niger', 'NE', NULL, NULL, NULL),
(40, 'NGA', 'Nigeria', 'NG', NULL, NULL, NULL),
(41, 'REU', 'Réunion', 'RE', NULL, NULL, NULL),
(42, 'RWA', 'Rwanda', 'RW', NULL, NULL, NULL),
(43, 'STP', 'São Tomé and Príncipe', 'ST', NULL, NULL, NULL),
(44, 'SEN', 'Senegal', 'SN', NULL, NULL, NULL),
(45, 'SYC', 'Seychelles', 'SC', NULL, NULL, NULL),
(46, 'SLE', 'Sierra Leone', 'SL', NULL, NULL, NULL),
(47, 'SOM', 'Somalia', 'SO', NULL, NULL, NULL),
(48, 'ZAF', 'South Africa', 'ZA', NULL, NULL, NULL),
(49, 'SSD', 'South Sudan', 'SS', NULL, NULL, NULL),
(50, 'SDN', 'Sudan', 'SD', NULL, NULL, NULL),
(51, 'TZA', 'Tanzania', 'TZ', NULL, NULL, NULL),
(52, 'TGO', 'Togo', 'TG', NULL, NULL, NULL),
(53, 'TUN', 'Tunisia', 'TN', NULL, NULL, NULL),
(54, 'UGA', 'Uganda', 'UG', NULL, NULL, NULL),
(55, 'ESH', 'Western Sahara', 'EH', NULL, NULL, NULL),
(56, 'ZMB', 'Zambia', 'ZM', NULL, NULL, NULL),
(57, 'ZWE', 'Zimbabwe', 'ZW', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country_details`
--

CREATE TABLE `country_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `capital_city` varchar(255) NOT NULL,
  `official_languages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`official_languages`)),
  `currency` varchar(255) NOT NULL,
  `population` bigint(20) NOT NULL,
  `time_zones` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`time_zones`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_details`
--

INSERT INTO `country_details` (`id`, `country_id`, `description`, `name`, `capital_city`, `official_languages`, `currency`, `population`, `time_zones`, `created_at`, `updated_at`) VALUES
(1, 1, 'Algeria, officially the People\'s Democratic Republic of Algeria, is a country in North Africa on the Mediterranean coast. It is the tenth-largest country in the world by land area, and with over 44 million people, it is the most populous Arab country. Algeria is bordered by Tunisia to the northeast, Libya to the east, Niger to the southeast, Mali and Mauritania to the southwest, Western Sahara and Morocco to the west, and by the Mediterranean Sea to the north.', 'Algeria', 'Algiers', '[\"Arabic\",\"Tamazight\"]', 'Algerian Dinar', 44700000, '[\"UTC+1:00\"]', '2024-06-14 17:40:38', '2024-06-14 17:40:38'),
(2, 2, 'Angola, officially the Republic of Angola, is a country located in the southwest part of Africa. It is bordered by Namibia to the south, the Democratic Republic of the Congo to the northeast, and Zambia to the east. Angola\'s capital and largest city is Luanda, located on the Atlantic coast.', 'Angola', 'Luanda', '[\"Portuguese\"]', 'Angolan kwanza', 33132243, '[\"West Africa Time\"]', '2024-06-14 17:40:44', '2024-06-14 17:40:44'),
(3, 3, 'Benin, officially the Republic of Benin, is a country in West Africa. It is bordered by Togo to the west, Burkina Faso and Niger to the north, and Nigeria to the east. Benin has a coastline on the Bight of Benin, part of the Gulf of Guinea in the south. The country\'s capital is Porto-Novo, while its largest city is Cotonou, which is also the economic and administrative center of the country.', 'Benin', 'Porto-Novo', '[\"French\"]', 'West African CFA franc', 12863094, '[\"WAT (UTC+1)\"]', '2024-06-14 17:41:00', '2024-06-14 17:41:00'),
(4, 4, 'Botswana, officially the Republic of Botswana, is a landlocked country located in Southern Africa. It is bordered by South Africa to the south, Namibia to the west and north, Zambia to the northeast, and Zimbabwe to the east. Botswana is a sparsely populated country with a population of around 2.3 million. The capital and largest city is Gaborone.', 'Botswana', 'Gaborone', '[\"English\",\"Setswana\"]', 'Botswana pula', 2351500, '[\"UTC+2\"]', '2024-06-14 17:53:43', '2024-06-14 17:53:43'),
(5, 5, 'Burkina Faso, officially the Republic of Burkina Faso, is a sovereign state in West Africa. It is a landlocked country bordered by Mali to the northwest, Niger to the northeast, Benin to the southeast, Togo and Ghana to the south, and Ivory Coast to the southwest.', 'Burkina Faso', 'Ouagadougou', '[\"French\",\"Mor\\u00e9\"]', 'West African CFA franc', 20903278, '[\"UTC+0\"]', '2024-06-14 17:53:49', '2024-06-14 17:53:49'),
(6, 6, 'Burundi, officially the Republic of Burundi, is a landlocked country in the African Great Lakes region. It is bordered by Rwanda to the north, Tanzania to the east and south, and the Democratic Republic of the Congo to the west. The country has a tropical climate with two rainy seasons and two dry seasons. The capital and largest city is Bujumbura.', 'Burundi', 'Bujumbura', '[\"Kirundi\",\"French\"]', 'Burundian franc', 12903596, '[\"UTC+2\"]', '2024-06-14 17:53:57', '2024-06-14 17:53:57'),
(7, 7, 'Cape Verde is an archipelago of 10 volcanic islands situated in the central Atlantic Ocean, roughly 570 kilometres west of the Cape Verde Peninsula on the African mainland.', 'Republic of Cabo Verde', 'Praia', '[\"Portuguese\"]', 'Cape Verdean escudo', 555988, '[\"UTC\\u221201:00\"]', '2024-06-14 17:54:03', '2024-06-14 17:54:03'),
(8, 8, 'Cameroon, officially the Republic of Cameroon, is a country in Central Africa. It is bordered by Nigeria to the west and north, Chad to the northeast, the Central African Republic to the east, Equatorial Guinea, Gabon and the Republic of the Congo to the south, and Sao Tome and Principe to the southwest. Cameroon\'s coastline lies on the Gulf of Guinea, part of the Atlantic Ocean.', 'Cameroon', 'Yaoundé', '[\"French\",\"English\"]', 'Central African CFA franc', 27740579, '[\"WAT\"]', '2024-06-14 17:54:09', '2024-06-14 17:54:09'),
(9, 9, 'The Central African Republic, officially known as the Central African Republic, is a landlocked country in Central Africa. It is bordered by Chad to the north, Sudan to the east, South Sudan to the southeast, the Democratic Republic of the Congo to the south, and Cameroon to the west. The Central African Republic\'s capital and largest city is Bangui.', 'Central African Republic', 'Bangui', '[\"French\",\"Sango\"]', 'Central African CFA franc', 5391536, '[\"UTC+01:00\"]', '2024-06-14 17:54:14', '2024-06-14 17:54:14'),
(10, 10, 'Chad, officially the Republic of Chad, is a landlocked country in central Africa. It borders Libya to the north, Sudan to the east, the Central African Republic to the south, Cameroon and Nigeria to the southwest, and Niger to the west.', 'Chad', 'N\'Djamena', '[\"Arabic\",\"French\"]', 'Central African CFA franc', 17459893, '[\"UTC+1\"]', '2024-06-14 17:54:22', '2024-06-14 17:54:22'),
(11, 11, 'The Union of the Comoros, officially the Federal Islamic Republic of the Comoros, is an archipelago located in the Indian Ocean. Despite its proximity to the African mainland, the Comoros is geographically part of the Comoros Archipelago, which also includes the French department of Mayotte.', 'Union of the Comoros', 'Moroni', '[\"Arabic\",\"French\",\"Comorian\"]', 'Comorian franc', 869594, '[\"UTC+3\"]', '2024-06-14 17:54:29', '2024-06-14 17:54:29'),
(12, 12, 'The Republic of the Congo, also known as Congo-Brazzaville, is a country located in west-central Africa. It is bordered by Gabon and Cameroon to the west, the Central African Republic and the Democratic Republic of the Congo to the north, and Angola and the Democratic Republic of the Congo to the south. The country\'s capital and largest city is Brazzaville.', 'Republic of the Congo', 'Brazzaville', '[\"French\",\"Lingala\",\"Kikongo\"]', 'Central African CFA franc', 5657000, '[\"UTC+1\"]', '2024-06-14 17:57:36', '2024-06-14 17:57:36'),
(13, 13, 'The Democratic Republic of the Congo, formerly Zaire, is the second largest country in Africa by area and the 11th largest in the world. It is located in Central Africa and is bordered by the Central African Republic and South Sudan to the north, Uganda, Rwanda, Burundi, and Tanzania to the east, Zambia and Angola to the south, and the Republic of the Congo to the west. The country has a population of over 108 million people and is the fourth most populous country in Africa. The capital and largest city is Kinshasa.', 'Democratic Republic of the Congo', 'Kinshasa', '[\"French\",\"Lingala\",\"Kikongo\",\"Tshiluba\"]', 'Congolese franc', 108494879, '[\"UTC+1\",\"UTC+2\"]', '2024-06-14 17:57:50', '2024-06-14 17:57:50'),
(14, 14, 'Djibouti, officially the Republic of Djibouti, is a country in the Horn of Africa. It is bordered by Eritrea to the north, Ethiopia to the west and south, and Somalia to the southeast. The country has a coastline on the Red Sea and the Gulf of Aden.', 'Djibouti', 'Djibouti City', '[\"Arabic\",\"French\"]', 'Djiboutian franc', 1008865, '[\"EAT (UTC+3)\"]', '2024-06-14 17:57:58', '2024-06-14 17:57:58'),
(15, 15, 'Egypt, officially the Arab Republic of Egypt, is a country in the northeast corner of Africa, with a population of over 104 million. It is bordered by Libya to the west, Sudan to the south, and Israel and the Gaza Strip to the east. Egypt is a transcontinental country, with the Sinai Peninsula in Asia and the rest of the country in Africa. The capital and largest city is Cairo. Egypt\'s official language is Arabic, and its currency is the Egyptian pound. The majority of the population is Muslim, with a significant minority of Coptic Christians. Egypt is a member of the Arab League, the African Union, and the United Nations.', 'Egypt', 'Cairo', '[\"Arabic\"]', 'Egyptian pound', 104685738, '[\"Egypt Standard Time (EET) UTC+2\"]', '2024-06-14 17:58:09', '2024-06-14 17:58:09'),
(16, 16, 'Equatorial Guinea is a small country located in Central Africa, with a unique blend of African and Spanish influences. It is known for its lush rainforests, diverse wildlife, and substantial oil and gas reserves.', 'Equatorial Guinea', 'Malabo', '[\"Spanish\",\"French\"]', 'Central African CFA franc (XAF)', 1613000, '[\"UTC+1\"]', '2024-06-14 17:58:14', '2024-06-14 17:58:14'),
(17, 17, 'Eritrea, officially the State of Eritrea, is a country in the Horn of Africa with its capital at Asmara. The country is bordered by Sudan in the west, Ethiopia in the south, and Djibouti in the southeast. The Red Sea lies to the east, and the nation has an extensive coastline along the sea\'s western shore.', 'State of Eritrea', 'Asmara', '[\"Tigrinya\",\"Arabic\"]', 'Nakfa', 3550000, '[\"EAT (UTC+3)\"]', '2024-06-14 17:58:25', '2024-06-14 17:58:25'),
(18, 18, 'Eswatini, formerly known as Swaziland, is a small, landlocked country in Southern Africa. It is bordered by Mozambique to the east and South Africa to the north, west, and south. Eswatini is a constitutional monarchy with a population of around 1.1 million people. The official languages are English and Swati.', 'Eswatini', 'Mbabane', '[\"English\",\"Swati\"]', 'Eswatini Lilangeni', 1164023, '[\"UTC+2\"]', '2024-06-14 18:05:37', '2024-06-14 18:05:37'),
(19, 19, 'Ethiopia, officially the Federal Democratic Republic of Ethiopia, is a landlocked country in the Horn of Africa. It is the second-most populous country in Africa, with over 117 million people, and has a rich history and culture dating back to the Aksumite Empire. Ethiopia is known for its diverse landscapes, including the Ethiopian Highlands, the Great Rift Valley, and the Danakil Depression, and is home to a wide variety of plant and animal life.', 'Ethiopia', 'Addis Ababa', '[\"Amharic\",\"Oromo\"]', 'Ethiopian birr', 117607930, '[\"UTC+3\"]', '2024-06-14 18:05:45', '2024-06-14 18:05:45'),
(20, 20, 'Gabon, a country in west central Africa, is known for its diverse ecosystems, including rainforests, savannas, and beaches. It\'s also home to a variety of wildlife, including gorillas, chimpanzees, elephants, and leopards.', 'Gabonese Republic', 'Libreville', '[\"French\"]', 'Central African CFA franc', 2225728, '[\"UTC+1\"]', '2024-06-14 18:05:50', '2024-06-14 18:05:50'),
(21, 21, 'The Gambia is a small country in West Africa, bordered by Senegal to the north, east, and south, and by the Atlantic Ocean to the west. The country has a population of around 2.4 million people, and its capital city is Banjul. The Gambia is a former British colony, and it gained independence in 1965. The country is a member of the Commonwealth of Nations.', 'The Gambia', 'Banjul', '[\"English\"]', 'Gambian dalasi', 2409127, '[\"GMT\"]', '2024-06-14 18:13:45', '2024-06-14 18:13:45'),
(22, 22, 'Ghana, officially the Republic of Ghana, is a country located along the Gulf of Guinea and the Atlantic Ocean, in the subregion of West Africa. It is bordered by the Ivory Coast in the west, Burkina Faso in the north, Togo in the east, and the Atlantic Ocean in the south. Ghana covers an area of 227,540 square kilometers (87,850 sq mi) and has a population of over 31 million, making it the second-most populous country in West Africa, after Nigeria. The official language is English, and the capital is Accra.', 'Ghana', 'Accra', '[\"English\"]', 'Ghanaian cedi (GHS)', 31072940, '[\"UTC\\u00b100:00\"]', '2024-06-14 18:13:53', '2024-06-14 18:13:53'),
(23, 23, 'Guinea, officially known as the Republic of Guinea, is a country in West Africa. It is bordered by Guinea-Bissau and Senegal to the north, Mali to the north and east, Côte d\'Ivoire to the southeast, Liberia and Sierra Leone to the south, and the Atlantic Ocean to the west. Guinea has a population of around 13 million people, and its capital is Conakry.', 'Guinea', 'Conakry', '[\"French\",\"Fula\"]', 'Guinean franc', 13132792, '[\"UTC+0\"]', '2024-06-14 18:13:59', '2024-06-14 18:13:59'),
(24, 24, 'Guinea-Bissau is a small country in West Africa with a population of around 2 million people. The country is known for its beautiful beaches, lush forests, and diverse wildlife. Guinea-Bissau has a long and complex history, and has been ruled by many different empires and colonial powers over the centuries. The country gained independence from Portugal in 1973, and has since been a member of the United Nations and the African Union.', 'Republic of Guinea-Bissau', 'Bissau', '[\"Portuguese\"]', 'West African CFA Franc (XOF)', 2027188, '[\"UTC\\u00b10\"]', '2024-06-14 18:14:05', '2024-06-14 18:14:05'),
(25, 25, 'Ivory Coast, officially the Republic of Côte d\'Ivoire, is a country in West Africa. It is bordered by Liberia and Guinea to the west, Mali and Burkina Faso to the north, Ghana to the east, and the Gulf of Guinea to the south. Ivory Coast spans an area of 322,463 square kilometers (124,500 square miles) and has a population of over 27 million people. The country\'s largest city and economic center is Abidjan.', 'Ivory Coast', 'Yamoussoukro', '[\"French\"]', 'West African CFA franc', 27708000, '[\"UTC+0:00\"]', '2024-06-14 18:14:12', '2024-06-14 18:14:12'),
(26, 26, 'Kenya is a country in East Africa with a coastline on the Indian Ocean. It is bordered by Tanzania to the south, Uganda to the west, Ethiopia to the north, and Somalia to the northeast. Kenya has a diverse landscape, including mountains, forests, savannas, and deserts.', 'Kenya', 'Nairobi', '[\"English\",\"Swahili\"]', 'Kenyan shilling', 53771188, '[\"EAT (UTC+3)\"]', '2024-06-14 18:14:21', '2024-06-14 18:14:21'),
(27, 27, 'Lesotho, officially known as the Kingdom of Lesotho, is a small, mountainous country located in southern Africa. It is an enclave within South Africa, surrounded by its territory on all sides.', 'Lesotho', 'Maseru', '[\"Sesotho\",\"English\"]', 'Lesotho loti (LSL)', 2142252, '[\"UTC+2:00\"]', '2024-06-14 18:14:31', '2024-06-14 18:14:31'),
(28, 28, 'Liberia, officially the Republic of Liberia, is a country on the West African coast. It is bordered by Sierra Leone to its northwest, Guinea to its north, the Ivory Coast to its east, and the Atlantic Ocean to its south. Liberia covers an area of 111,369 square kilometers (43,000 sq mi) and has a population of around 5 million. The capital and largest city is Monrovia.', 'Liberia', 'Monrovia', '[\"English\"]', 'Liberian dollar', 5057677, '[\"UTC+0\"]', '2024-06-14 18:14:37', '2024-06-14 18:14:37'),
(29, 29, 'Libya, officially the State of Libya, is a country in the Maghreb region of North Africa. It is bordered by the Mediterranean Sea to the north, Egypt to the east, Sudan to the southeast, Chad and Niger to the south, and Algeria and Tunisia to the west.', 'Libya', 'Tripoli', '[\"Arabic\"]', 'Libyan dinar', 6936980, '[\"UTC+02:00\"]', '2024-06-14 18:17:16', '2024-06-14 18:17:16'),
(30, 30, 'Madagascar, officially the Republic of Madagascar, is an island country in the Indian Ocean, off the coast of Southeast Africa. It\'s the fourth largest island in the world and the largest island country. Madagascar is known for its unique wildlife, including lemurs, chameleons, and baobab trees.', 'Madagascar', 'Antananarivo', '[\"French\",\"Malagasy\"]', 'Malagasy ariary', 27690585, '[\"UTC+3\"]', '2024-06-14 18:17:22', '2024-06-14 18:17:22'),
(31, 31, 'Malawi, officially the Republic of Malawi, is a landlocked country in southeastern Africa. It is bordered by Zambia to the northwest, Tanzania to the northeast, and Mozambique on the east, south, and west. Lake Malawi, the ninth-largest lake in the world, dominates the country\'s geography.', 'Malawi', 'Lilongwe', '[\"Chichewa\",\"English\"]', 'Malawian kwacha', 19161000, '[\"CAT (UTC+2)\"]', '2024-06-14 18:17:27', '2024-06-14 18:17:27'),
(32, 32, 'Mali, officially the Republic of Mali, is a landlocked country in West Africa. It is the eighth-largest country in Africa, with an area of 1,240,000 square kilometers (480,000 square miles). Mali is bordered by Algeria to the north, Niger to the east, Burkina Faso and Côte d\'Ivoire to the south, Guinea to the southwest, and Senegal and Mauritania to the west.', 'Mali', 'Bamako', '[\"French\"]', 'West African CFA franc', 21808692, '[\"UTC+0\"]', '2024-06-14 18:17:36', '2024-06-14 18:17:36'),
(33, 33, 'Mauritania, officially the Islamic Republic of Mauritania, is a country in Northwest Africa. It is bordered by the Atlantic Ocean to the west, Senegal to the southwest, Mali to the southeast, Algeria to the northeast, and Western Sahara to the north. Mauritania is the 11th largest country in Africa and the 29th largest in the world, with an area of 1,030,700 square kilometers (401,800 square miles). The total population is estimated to be 4.6 million.', 'Mauritania', 'Nouakchott', '[\"Arabic\",\"French\"]', 'Mauritanian ouguiya', 4649658, '[\"UTC\\u00b10\"]', '2024-06-14 18:17:42', '2024-06-14 18:17:42'),
(34, 34, 'Mauritius is an island nation in the Indian Ocean, about 2,000 kilometers (1,200 miles) off the southeast coast of Africa. It is known for its beautiful beaches, coral reefs, and lush rainforests.', 'Mauritius', 'Port Louis', '[\"English\",\"French\",\"Mauritian Creole\"]', 'Mauritian rupee', 1271768, '[\"UTC+4\"]', '2024-06-14 18:17:48', '2024-06-14 18:17:48'),
(35, 35, 'Mayotte is an overseas department of France located in the Indian Ocean. It is an archipelago of three main islands: Grande-Terre, Petite-Terre, and Îles des Nattes. Mayotte is one of the most densely populated regions of France.', 'Mayotte', 'Mamoudzou', '[\"French\",\"Shimaore\"]', 'Euro', 299037, '[\"UTC+3\"]', '2024-06-14 18:17:55', '2024-06-14 18:17:55'),
(36, 36, 'Morocco, officially the Kingdom of Morocco, is a country in North Africa. Bordered by the Atlantic Ocean to the west, Algeria to the east, Western Sahara to the south, and Spain to the north (by the Strait of Gibraltar), Morocco spans an area of 446,550 square kilometers (172,410 square miles).', 'Morocco', 'Rabat', '[\"Arabic\",\"Berber (Tamazight)\"]', 'Moroccan dirham', 36910558, '[\"UTC+1:00\"]', '2024-06-14 18:18:02', '2024-06-14 18:18:02'),
(37, 37, 'Mozambique, officially the Republic of Mozambique, is a country located in southeastern Africa bordered by the Indian Ocean to the east, Tanzania to the north, Malawi and Zambia to the northwest, Zimbabwe to the west, and Eswatini and South Africa to the southwest.', 'Mozambique', 'Maputo', '[\"Portuguese\"]', 'Mozambican metical', 31255435, '[\"UTC+2\"]', '2024-06-14 18:19:36', '2024-06-14 18:19:36'),
(39, 38, 'Namibia, officially the Republic of Namibia, is a country in southwestern Africa. Its western border is formed by the Atlantic Ocean; it shares land borders with Angola and Zambia to the north, Botswana to the east and South Africa to the south. Namibia is one of three countries in the world that has a flag with no blue, white or red.', 'Namibia', 'Windhoek', '[\"English\",\"Afrikaans\",\"Oshiwambo\",\"Otjiherero\",\"German\",\"Nama\"]', 'Namibian dollar', 2540905, '[\"UTC+1\",\"UTC+2\"]', '2024-06-14 18:20:07', '2024-06-14 18:20:07'),
(40, 39, 'Niger, officially the Republic of Niger, is a landlocked country in West Africa named after the Niger River. Niger is bordered by Libya to the northeast, Chad to the east, Nigeria and Benin to the south, Burkina Faso and Mali to the west, and Algeria to the northwest. The country\'s capital is Niamey, which is also its largest city.', 'Niger', 'Niamey', '[\"French\"]', 'West African CFA franc', 25000000, '[\"WAT (UTC+1)\"]', '2024-06-14 18:20:14', '2024-06-14 18:20:14'),
(41, 40, 'Nigeria, officially the Federal Republic of Nigeria, is a country in West Africa. It is bordered by Benin to the west, Chad and Cameroon to the east, and Niger to the north. Its southern coast is on the Gulf of Guinea in the Atlantic Ocean. It is the most populous country in Africa, with a population of over 218 million. The official capital is Abuja, while Lagos is the largest city. The country has a diverse population, with over 250 ethnic groups and 500 languages. The official languages are English, Hausa, Igbo, and Yoruba.', 'Nigeria', 'Abuja', '[\"English\",\"Hausa\",\"Igbo\",\"Yoruba\"]', 'Naira', 218953000, '[\"UTC+01:00\"]', '2024-06-14 18:25:57', '2024-06-14 18:25:57'),
(42, 41, 'Réunion is a French overseas department and region in the Indian Ocean. It is located about 200 kilometers (124 miles) southwest of Mauritius and 170 kilometers (106 miles) east of Madagascar. The island has a population of about 860,000 and an area of 2,512 square kilometers (970 square miles). The capital city is Saint-Denis.', 'Réunion', 'Saint-Denis', '[\"French\"]', 'Euro', 860000, '[\"UTC+4\"]', '2024-06-14 18:26:04', '2024-06-14 18:26:04'),
(43, 42, 'Rwanda, officially the Republic of Rwanda, is a landlocked country in the Great Rift Valley, where the African Great Lakes region and Eastern Africa converge. One of the smallest countries in mainland Africa, it is bordered by Uganda, Tanzania, Burundi, and the Democratic Republic of the Congo. Rwanda has a tropical climate with two rainy seasons and two dry seasons each year. The country\'s genocide against the Tutsi in 1994, in which an estimated 500,000 to 1,000,000 Rwandans were killed, has had a profound impact on the country\'s history and culture.', 'Rwanda', 'Kigali', '[\"Kinyarwanda\",\"French\",\"English\"]', 'Rwandan franc', 13201512, '[\"UTC+2\"]', '2024-06-14 18:26:12', '2024-06-14 18:26:12'),
(44, 43, 'São Tomé and Príncipe is a small island nation in the Gulf of Guinea, off the western coast of Central Africa. It is composed of two main islands, São Tomé and Príncipe, and several smaller islets. The islands were uninhabited until the 15th century, when they were discovered by Portuguese explorers and became a major center of the Atlantic slave trade. São Tomé and Príncipe gained independence from Portugal in 1975.', 'São Tomé and Príncipe', 'São Tomé', '[\"Portuguese\"]', 'São Tomé and Príncipe dobra (STD)', 219159, '[\"UTC+1\"]', '2024-06-14 18:26:18', '2024-06-14 18:26:18'),
(45, 44, 'Senegal, officially the Republic of Senegal, is a country in West Africa. Senegal is bordered by Mauritania in the north, Mali in the east, Guinea and Guinea-Bissau in the south, and The Gambia on all three of its western sides. Senegal nearly surrounds The Gambia, except for a short stretch of the Atlantic coastline. The country is named after the Senegal River, which flows along Senegal\'s eastern and northern borders.', 'Senegal', 'Dakar', '[\"French\"]', 'West African CFA franc', 17842850, '[\"UTC\\u00b10\"]', '2024-06-14 18:26:32', '2024-06-14 18:26:32'),
(46, 45, 'Seychelles is an archipelago of 115 islands in the Indian Ocean, off East Africa. It\'s home to numerous beaches, coral reefs and nature reserves, as well as the rare Seychelles giant tortoise. Mahé, the largest island, contains the capital, Victoria.', 'Seychelles', 'Victoria', '[\"English\",\"French\",\"Seychellois Creole\"]', 'Seychellois rupee', 97737, '[\"UTC+4\"]', '2024-06-14 18:26:40', '2024-06-14 18:26:40'),
(47, 46, 'Sierra Leone, officially the Republic of Sierra Leone, is a country in West Africa. It is bordered by Guinea to the northeast, Liberia to the southeast, and the Atlantic Ocean to the southwest. Sierra Leone has a tropical climate and a diverse landscape, including sandy beaches, mangrove swamps, and rolling hills. The country is rich in natural resources, including diamonds, gold, and iron ore.', 'Sierra Leone', 'Freetown', '[\"English\"]', 'Leone', 7976985, '[\"UTC+00:00\"]', '2024-06-14 18:27:12', '2024-06-14 18:27:12'),
(48, 47, 'Somalia, officially the Federal Republic of Somalia, is a country in the Horn of Africa. The country is bordered by Ethiopia to the west, Djibouti to the northwest, the Gulf of Aden to the north, the Indian Ocean to the east, and Kenya to the southwest. Somalia has the longest coastline on the mainland of Africa and its terrain consists mainly of plateaus, plains and highlands.', 'Somalia', 'Mogadishu', '[\"Somali\",\"Arabic\"]', 'Somali shilling', 16927948, '[\"EAT\"]', '2024-06-14 18:27:20', '2024-06-14 18:27:20'),
(49, 48, 'South Africa is a country located at the southern tip of Africa. It is known for its diverse cultures, its beautiful landscapes, and its rich history. South Africa is a popular tourist destination, and it is also a major economic and political force in the region.', 'South Africa', 'Pretoria', '[\"Afrikaans\",\"English\",\"isiNdebele\",\"isiXhosa\",\"isiZulu\",\"Sesotho\",\"Setswana\",\"Siswati\",\"Tshivenda\",\"Xitsonga\"]', 'South African rand', 60309920, '[\"UTC+2\"]', '2024-06-14 18:27:27', '2024-06-14 18:27:27'),
(50, 49, 'South Sudan, officially the Republic of South Sudan, is a landlocked country in East-Central Africa. It is bordered by Ethiopia to the east, Kenya to the southeast, Uganda to the south, the Democratic Republic of the Congo to the southwest, the Central African Republic to the northwest, and Sudan to the north. Juba is the capital and largest city.', 'South Sudan', 'Juba', '[\"English\"]', 'South Sudanese pound', 11193729, '[\"UTC+3\"]', '2024-06-14 18:28:02', '2024-06-14 18:28:02'),
(51, 50, 'Sudan, officially the Republic of the Sudan, is a country in Northeast Africa. It is bordered by Egypt to the north, the Red Sea and Eritrea to the northeast, Ethiopia to the southeast, South Sudan to the south, the Central African Republic to the southwest, Chad to the west, and Libya to the northwest. With an area of 1,886,068 square kilometers (728,215 square miles), Sudan is the third-largest country in Africa (after Algeria and the Democratic Republic of the Congo) and the 16th-largest in the world. Its population is estimated to be around 43.8 million.', 'Sudan', 'Khartoum', '[\"Arabic\",\"English\"]', 'Sudanese pound', 43849260, '[\"UTC+2\"]', '2024-06-14 18:28:09', '2024-06-14 18:28:09'),
(52, 51, 'Tanzania, officially the United Republic of Tanzania, is a country in East Africa. It is bordered by Kenya and Uganda to the north; Rwanda, Burundi, and the Democratic Republic of the Congo to the west; Zambia, Malawi, and Mozambique to the south; and the Indian Ocean to the east.', 'Tanzania', 'Dodoma', '[\"Swahili\",\"English\"]', 'Tanzanian shilling', 63439043, '[\"East Africa Time (EAT)\"]', '2024-06-14 18:28:15', '2024-06-14 18:28:15'),
(53, 52, 'Togo is a small country in West Africa, bordered by Ghana to the west, Benin to the east, and Burkina Faso to the north. It has a narrow coastline on the Gulf of Guinea to the south. Togo was a German colony from 1884 to 1914, and then a French colony from 1914 to 1960. It gained independence in 1960 and has been ruled by a series of military dictatorships since then.', 'Togo', 'Lomé', '[\"French\"]', 'West African CFA franc (XOF)', 8278339, '[\"UTC+0\"]', '2024-06-14 18:28:26', '2024-06-14 18:28:26'),
(54, 53, 'Tunisia, officially the Republic of Tunisia, is a country in North Africa, bordering Algeria to the west and southwest, Libya to the southeast, and the Mediterranean Sea to the north and east. Tunisia is the smallest country in North Africa, with an area of 163,610 square kilometers (63,170 square miles).', 'Tunisia', 'Tunis', '[\"Arabic\",\"French\"]', 'Tunisian dinar', 11818619, '[\"UTC+1\"]', '2024-06-14 18:28:33', '2024-06-14 18:28:33'),
(55, 54, 'Uganda is a landlocked country in East Africa whose diverse landscape encompasses the snow-capped Rwenzori Mountains and immense Lake Victoria. Its abundant wildlife includes chimpanzees in Kibale Forest National Park, gorillas in Bwindi Impenetrable National Park and rare tree-climbing lions in Ishasha. The source of the Nile River is at Jinja.', 'Uganda', 'Kampala', '[\"English\",\"Swahili\"]', 'Ugandan shilling', 45741000, '[\"UTC+3\"]', '2024-06-14 18:28:39', '2024-06-14 18:28:39'),
(56, 55, 'Western Sahara is a disputed territory in the northwest of Africa, bordered by Morocco to the north, Algeria to the east, and Mauritania to the south and west. The territory is largely flat and arid, with a coastline on the Atlantic Ocean. The main economic activities are fishing, mining, and tourism.', 'Western Sahara', 'El Aaiún', '[\"Arabic\",\"Hassaniya\"]', 'Moroccan dirham', 587259, '[\"UTC+0\"]', '2024-06-14 18:28:50', '2024-06-14 18:28:50'),
(57, 56, 'Zambia is a landlocked country in Southern Africa. It is bordered by the Democratic Republic of the Congo to the north, Tanzania to the northeast, Malawi to the east, Mozambique to the southeast, Zimbabwe and Botswana to the south, Namibia to the southwest, and Angola to the west.', 'Zambia', 'Lusaka', '[\"English\"]', 'Zambian kwacha', 18383956, '[\"UTC+2\"]', '2024-06-14 18:29:15', '2024-06-14 18:29:15'),
(58, 57, 'Zimbabwe, officially the Republic of Zimbabwe, is a landlocked country located in Southern Africa, between the Zambezi and Limpopo rivers. It is bordered by South Africa to the south, Botswana to the southwest, Zambia to the northwest, and Mozambique to the east. The country\'s capital and largest city is Harare.', 'Zimbabwe', 'Harare', '[\"English\",\"Shona\",\"Ndebele\"]', 'Zimbabwean dollar (ZWL)', 15178979, '[\"UTC+2:00\"]', '2024-06-14 18:29:24', '2024-06-14 18:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `country_images`
--

CREATE TABLE `country_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `previewURL` varchar(255) NOT NULL,
  `imageURL` varchar(255) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_images`
--

INSERT INTO `country_images` (`id`, `country_id`, `previewURL`, `imageURL`, `tags`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 5, 'https://cdn.pixabay.com/photo/2013/11/04/12/16/children-205223_150.jpg', 'https://pixabay.com/get/g65bc77bc1fc722e05a828f24f74ee0f136b7ae87081b42825a66b6ecef9bec7bea7127c0cdd8b8d0f055d4a96e2f8200.jpg', 'children, africa, burkina faso', '1', 'api', '2024-06-18 23:33:14', '2024-06-18 23:33:14'),
(2, 5, 'https://cdn.pixabay.com/photo/2013/11/04/12/06/africa-205218_150.jpg', 'https://pixabay.com/get/gd0929eeb69819583c474594bf6ae038fc39f8cbf8378a23fcbb980c1f9d2e1fa4bd594acdc690e88ecb42c7db0b4563a.jpg', 'africa, burkina faso, homes', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(3, 5, 'https://cdn.pixabay.com/photo/2015/11/12/15/58/flag-1040543_150.png', 'https://pixabay.com/get/g85dc0e768af03c1698099d3e7f834b79db07eb8010f9c6bb5aa143cc68845509a54f86fdb29957175441a2ca33e5932b.png', 'flag, country, burkina faso', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(4, 5, 'https://cdn.pixabay.com/photo/2013/10/29/19/23/path-202554_150.jpg', 'https://pixabay.com/get/g50234e188bb597fa94805c3f97cbe7d10fe9fdda65074102acc9a1919519a5e67e5033e1a239c5cb94547447d1dd60a8.jpg', 'path, track, road', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(5, 5, 'https://cdn.pixabay.com/photo/2013/11/04/12/11/children-205219_150.jpg', 'https://pixabay.com/get/g050c432f62b7fc5818094222b1aefd1d0c99e649daa74b6e8d47b1dd3bef9a605d0062df9239611853aecae0a1dbafaa.jpg', 'children, kindergarten, smile', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(6, 5, 'https://cdn.pixabay.com/photo/2013/08/06/15/41/africa-170206_150.jpg', 'https://pixabay.com/get/gd3434573a133100f540a78ba9373a0a5317f0ed62374abb0a232bf65b48f96ccc02c283fe5eb8da0bc2a4cddcd9684ba.jpg', 'africa, afrique, burkina faso', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(7, 5, 'https://cdn.pixabay.com/photo/2013/11/04/12/23/market-205227_150.jpg', 'https://pixabay.com/get/g7484312d8c21644ffc88bd27ddb81924333d76cbd84c5ea576ac03946f2f122961bee9daf678d7d2b96e0b9e926afa13.jpg', 'market, africa, burkina faso', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(8, 5, 'https://cdn.pixabay.com/photo/2018/12/17/21/22/turtle-3881277_150.jpg', 'https://pixabay.com/get/gcca3a44929d0a69f1f359c83bb409315f3f1f29abbef0323a5bfdc21208cd9f3098ca02991f6696108c572850ff92c76.jpg', 'turtle, africa, burkina faso', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(9, 5, 'https://cdn.pixabay.com/photo/2013/11/04/12/34/murals-205238_150.jpg', 'https://pixabay.com/get/gf6b33e14e7d1145b01acfcec517e9b8acc347a28d6b02f2fa7a7dda025ff41c2537371124c03a80c95d292b8b90a4b89.jpg', 'murals, africa, burkina faso', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(10, 5, 'https://cdn.pixabay.com/photo/2013/11/04/12/18/child-205224_150.jpg', 'https://pixabay.com/get/g465f36704681fe01ef6162298964146bd8b0ee80a2991ecba87addffe4c1619af3919813aebd4655d322e1901e26a1ca.jpg', 'child, africa, burkina faso', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(11, 5, 'https://cdn.pixabay.com/photo/2016/10/21/19/29/burkina-faso-1758939_150.png', 'https://pixabay.com/get/g5dfcb91788ff6e10de957e90bd6d5bf3a02d98fa23226ebfd8dfb181c74f1e717834ead332991271489052ba0c209328.png', 'burkina faso, flag, map', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(12, 5, 'https://cdn.pixabay.com/photo/2017/08/18/08/23/international-2654168_150.png', 'https://pixabay.com/get/g1c8a0c628b1b05a07121a7edb44ff49f9588086dfe95d9f6955858028acc1761cab2b43633b7fa8243fa30838a925449.png', 'international, banner, flag', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(13, 5, 'https://cdn.pixabay.com/photo/2013/07/13/10/34/burkina-faso-157501_150.png', 'https://pixabay.com/get/g9f715910187c0b1caca876567ed25483fd4c4de8d82467aa573c993a156aeb39513d3001f12c9f69807e8a64ee07e774.png', 'burkina faso, map, country', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(14, 5, 'https://cdn.pixabay.com/photo/2015/03/14/22/18/burkina-faso-673828_150.png', 'https://pixabay.com/get/g05557f5596d17c6fe27ab3a49775af291f5a6c309954afa48b0dcdc109e115837955a162ad945c4ff5142a797584518b.png', 'burkina faso, flag, hand', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(15, 5, 'https://cdn.pixabay.com/photo/2017/01/31/14/48/banner-2024713_150.png', 'https://pixabay.com/get/g7dd6778078a859609b6699eb09d2bbcd36f044f7fb9cf0cd870f4eb051b19b9c31a8face0882249c24a48d8f396b6aca.png', 'banner, burkina faso, decoration', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(16, 5, 'https://cdn.pixabay.com/photo/2015/03/14/22/18/burkina-faso-673829_150.png', 'https://pixabay.com/get/g629c8eb57c38fde02e4dc53fdeb5c808af42c75d40eb4d2d7e98a96eb2401d592ab98e06eb029940b0543829bddeb119.png', 'burkina faso, flag, hand', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(17, 5, 'https://cdn.pixabay.com/photo/2017/08/28/19/05/international-2690936_150.jpg', 'https://pixabay.com/get/g6b139250c303ee5167b85c56dd297ba7d9a11c6e553daf8eb4742b82145095eeeb5e7a3b4007b39af42849c404d975e8.jpg', 'international, banner, flag', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(18, 5, 'https://cdn.pixabay.com/photo/2013/07/13/14/14/burkina-faso-162255_150.png', 'https://pixabay.com/get/gcb480c5da72e3841dbce27b978ee0af92617b8f02e35cd60cd62569f07c5beaf340073cce1617a919e54017b0ec407bc.png', 'burkina faso, flag, national flag', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(19, 5, 'https://cdn.pixabay.com/photo/2013/07/13/09/52/burkina-faso-156195_150.png', 'https://pixabay.com/get/gbab055198c4b811d52c9678b3080a39e47b5f12065916e7319163c50a591bf844560283c92d1e4178152846471135c1d.png', 'burkina faso, flag, country', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(20, 5, 'https://cdn.pixabay.com/photo/2023/05/07/23/55/burkina-faso-7977301_150.png', 'https://pixabay.com/get/g5c0d1746344c8fc4dfe229440fb7719f7fecd7a7d8cc44f993dfef9edfe5443ba7253b9f0c9b3cfb2a2285866b251c61.png', 'burkina faso, map, love', '1', 'api', '2024-06-18 23:33:15', '2024-06-18 23:33:15'),
(21, 3, 'https://cdn.pixabay.com/photo/2017/04/11/17/48/benin-2222345_150.jpg', 'https://pixabay.com/get/g5a07de2d474f52232446703cf1d30d6c31570d5e12a33707053e576578f7a8b4e56bb0fe469b467a7c1603915643e4f0.jpg', 'benin, lake, africa', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(22, 3, 'https://cdn.pixabay.com/photo/2016/10/21/19/29/benin-1758935_150.png', 'https://pixabay.com/get/geda8e617602bcbaa5459492cc6fed01b8822e884e00a2b67d466fa798f9e6ca44c8d025dcc60480c045d5ab1e0f5286a.png', 'benin, africa, borders', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(23, 3, 'https://cdn.pixabay.com/photo/2017/04/11/23/16/benin-2223164_150.jpg', 'https://pixabay.com/get/g64608dcf81f8fe50cfa9eaeaa0d32ce2ace0b5a198d4a910459a6039cd40f4fc2c5e2496237ba5babece9c2f08e7097d.jpg', 'benign, africa, child', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(24, 3, 'https://cdn.pixabay.com/photo/2022/10/31/19/24/voodoo-7560639_150.jpg', 'https://pixabay.com/get/gecba416b25d2e9d0ca85cf43d5d1d567620c785a03ec031f3cdc210431b9169d47ee0688aeb9ce9b16697156d862d4d9.jpg', 'voodoo, woman, priestess', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(25, 3, 'https://cdn.pixabay.com/photo/2013/07/13/14/14/benin-162242_150.png', 'https://pixabay.com/get/g77bd26a45471f643ae939373caece04b503629858c90feb8b8c8676f52ee69f2c632b7a7761e53da55f8374a563bd237.png', 'benin, flag, national flag', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(26, 3, 'https://cdn.pixabay.com/photo/2013/04/21/13/20/benin-106109_150.jpg', 'https://pixabay.com/get/gae6fddc03824bec0705164df22ba439738df48b54f81726eab8c6a4f6fb4d42f4d40d94defe61847684861a3c3a7bd59.jpg', 'benin, woman, baby', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(27, 3, 'https://cdn.pixabay.com/photo/2020/02/21/06/20/benin-4866618_150.png', 'https://pixabay.com/get/g57d8009dfeafb0d36875e57f650088ae1ec1bfc8c080f149117447cd30ea1f95b65b68aab7c46936a4b3b24adc794626.png', 'benin, flag, country', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(28, 3, 'https://cdn.pixabay.com/photo/2023/06/10/14/48/zebras-8054175_150.jpg', 'https://pixabay.com/get/g05cb1521a5aafc2cf4025ff5a28102f0e437b229800366c3a262995294e853c37b6e9af249e1b4c4d9e49b434d9be2c8.jpg', 'zebras, animals, africa', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(29, 3, 'https://cdn.pixabay.com/photo/2015/11/17/23/39/meditation-1048458_150.jpg', 'https://pixabay.com/get/g744ebd04f805ae3921a51d9763859505f1ee1636b41edbae68166b2fae3fca5ccdf963821bd539bdfa16ab526a9343c2.jpg', 'meditation, community, sisterhood', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(30, 3, 'https://cdn.pixabay.com/photo/2017/01/04/22/44/benin-1953480_150.jpg', 'https://pixabay.com/get/g6c5f33e85fc0ce92c41b6bac8509b392c2cf8837799ddf2bce74405befc36d5c90e0f983c4b3a5ae64808d66890f7448.jpg', 'benin, sky, clouds', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(31, 3, 'https://cdn.pixabay.com/photo/2017/08/18/07/26/international-2654069_150.png', 'https://pixabay.com/get/ga2d8d7ca05c890798f395ff70588c1e97f4be2a7bc79a791ee00e3e6abf934ccb129f3186d9821ef72ecdfde45da22a9.png', 'international, banner, flag', '1', 'api', '2024-06-18 23:41:55', '2024-06-18 23:41:55'),
(32, 3, 'https://cdn.pixabay.com/photo/2022/06/27/07/22/woman-7286907_150.jpg', 'https://pixabay.com/get/gfb865fccb8172e1128822567a261a2c8a8a87a3241a08113f8474c73991d781ebe1cf8a4d973acad191aa4708ba5279e.jpg', 'woman, turban, afro', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(33, 3, 'https://cdn.pixabay.com/photo/2014/06/23/20/58/lake-375609_150.jpg', 'https://pixabay.com/get/gd6e0fa70c3d80b7d559d9b4cbaa33e7ec25c464a11cd1199f24ab1aa819ffc3626016d947a2b7fe1224141d801a44e73.jpg', 'lake, branches, silhouettes', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(34, 3, 'https://cdn.pixabay.com/photo/2013/07/13/09/52/benin-156199_150.png', 'https://pixabay.com/get/gda84d369611a00ebc158eed64c84cf3bb68c7c69b2a406f2118d474e189202ffa562913d1a0ff533093ead9207436f47.png', 'benin, flag, country', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(35, 3, 'https://cdn.pixabay.com/photo/2017/08/21/17/47/benin-2666192_150.png', 'https://pixabay.com/get/g9464b1c6b3ff5285843ef51e192923f64b5e32c50f64a529eb8a7e519d5bc775b2f15f2788c9c32027e2e6358eaedaf3.png', 'benin, country, flag', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(36, 3, 'https://cdn.pixabay.com/photo/2012/10/10/10/28/africa-60570_150.jpg', 'https://pixabay.com/get/gc571adfc6fe5efc0b300b9e42a73bbf2c657f9762b291a020450c634b92228de771942754158646759b469eec054fc9f.jpg', 'africa, continent, map of africa', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(37, 3, 'https://cdn.pixabay.com/photo/2015/02/28/15/48/ape-653705_150.jpg', 'https://pixabay.com/get/g06e8004028d91a410968cf6d64c050f1542f00207e4f73439ef5e4805b35a8e3a461b03a083663d931f94493ac9140e9.jpg', 'ape, mandrill, africa', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(38, 3, 'https://cdn.pixabay.com/photo/2017/05/08/15/11/capetown-2295679_150.jpg', 'https://pixabay.com/get/ge3248924cc7320d05949af61b9339dab220ff9f017d716c6d23d6f0cc2b0d9c9cd513d34ad4984ae3d5918079a7e626b.jpg', 'capetown, beach, sunset', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(39, 3, 'https://cdn.pixabay.com/photo/2015/10/03/22/17/elephants-970456_150.jpg', 'https://pixabay.com/get/g72bb6ed595ece0143ee54d3bdcdde72c92bfc39308f06e75a5b997fe9654c1bc496477530feaf184a1393fe014c67206.jpg', 'elephants, safari, monochrome', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(40, 3, 'https://cdn.pixabay.com/photo/2017/08/28/18/57/international-2690879_150.jpg', 'https://pixabay.com/get/g993a79797c92b1eb1652799d6710191683fcf8de92f026cc82a3b321d6cfa0c07a3a14357b2cdc5153b84e2f59522147.jpg', 'international, banner, flag', '1', 'api', '2024-06-18 23:41:56', '2024-06-18 23:41:56'),
(41, 1, 'https://cdn.pixabay.com/photo/2019/09/20/23/47/sand-4492751_150.jpg', 'https://pixabay.com/get/g7fadba17154e856e70c00662156d5b0211171f0686405112345ce5e56be1afa1c6eb69fb3bf9301072d821ee0e8e98a7.jpg', 'sand, desert, sahara', '1', 'api', '2024-06-18 23:44:31', '2024-06-18 23:44:31'),
(42, 1, 'https://cdn.pixabay.com/photo/2017/06/02/08/17/kabylie-2365665_150.jpg', 'https://pixabay.com/get/g424923f21a0cd5a293188dd845ccd0737ba35e555f55bd7729fe264608b6e280ffc68fc8fded7ecc9ee35777515ba527.jpg', 'kabylie, algeria, africa', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(43, 1, 'https://cdn.pixabay.com/photo/2017/06/20/22/10/ain-taya-2425108_150.jpg', 'https://pixabay.com/get/g4ca92d708caa9de51fb06bb813f1edfb8c653faf4bf3314dfd8b76399169aaf49416f62718191688ad8e2d3f43e9eb9b.jpg', 'ain-taya, city, algeria', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(44, 1, 'https://cdn.pixabay.com/photo/2016/03/31/22/21/algeria-1296991_150.png', 'https://pixabay.com/get/g4b98dc4d3c568f96ee094fa8431aca6882f8e572af1326a2170f20b3a223f6e9e5e4d7dc2e2b6c4bac9d623164f0f0b2.png', 'algeria, arab, borders', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(45, 1, 'https://cdn.pixabay.com/photo/2019/07/07/06/40/kabylia-4321846_150.jpg', 'https://pixabay.com/get/gaa392ccd4500354891192af6418546a35b2ea6efbc3370a82786af59ae9702fe2d5825092b032feaac470e9def6f5ddf.jpg', 'kabylia, djebla, algeria', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(46, 1, 'https://cdn.pixabay.com/photo/2017/08/15/07/28/mediterranean-2642995_150.jpg', 'https://pixabay.com/get/gd5a6964b11f67e6afdbc9b1e3d29bcb1429e193d1af4239f57396cda6a562f0a1c7fb8cc6c505b55cf50f93133a57626.jpg', 'mediterranean, bejaia, kabylia', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(47, 1, 'https://cdn.pixabay.com/photo/2013/07/13/14/01/algeria-161961_150.png', 'https://pixabay.com/get/g1d3f63cc8c615b41c6e9a3071822055807708d8c58f9243d3638b3aadf17d7b7cafb537671fe62f83526a7727a7ae645.png', 'algeria, flag, africa', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(48, 1, 'https://cdn.pixabay.com/photo/2015/02/20/22/57/algeria-643758_150.png', 'https://pixabay.com/get/g72c485b03c81cca296292f0e1dfd9ba4d2f810e83f3a2b9ae615e957b4c904afdcbbbf522e44553c45f1bbfd5918b270.png', 'algeria, hand, flag', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(49, 1, 'https://cdn.pixabay.com/photo/2020/05/12/03/45/sahara-5161109_150.jpg', 'https://pixabay.com/get/g07b00c62f101a7f99fa3d845507c78726d25322f62a44970d57efc6ac03025e8ddc7d4e103f83a55dbca7455a095ee10.jpg', 'sahara, sand, africa', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(50, 1, 'https://cdn.pixabay.com/photo/2017/06/22/21/54/road-2432674_150.jpg', 'https://pixabay.com/get/g53939cdf8b8b358773db3d1d465aa32de25881007244aad0524c5a2c00d67cca0d3018e79ffdae47d2c6dd67234fa387.jpg', 'road, tipaza, nature', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(51, 1, 'https://cdn.pixabay.com/photo/2017/06/02/08/17/kabylie-2365667_150.jpg', 'https://pixabay.com/get/gc963564828e35df990295194e8ac79ef9e6845a7a96ae450a0908d994d50eb88f633f45fb2837d1f2510fdf30d34ce1b.jpg', 'kabylie, algeria, africa', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(52, 1, 'https://cdn.pixabay.com/photo/2017/06/22/21/48/tipaza-2432630_150.jpg', 'https://pixabay.com/get/gf7ac608c4f0713ed6dc576a2ff8c88237fb97e12ae7214af128a3430a88bc4eea6926e4cefe0c6462ae44a9e38cc8892.jpg', 'tipaza, algeria, africa', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(53, 1, 'https://cdn.pixabay.com/photo/2016/07/26/09/06/algeria-1542332_150.jpg', 'https://pixabay.com/get/g88fd8fdd5d62260144b2ceb84a31a17de82d512289cb461e4f45c37330096c9b08791b2dd82b3dd9d4b5a96c0b1a2944.jpg', 'algeria, flag, africa', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(54, 1, 'https://cdn.pixabay.com/photo/2017/08/15/07/29/mediterranean-2643008_150.jpg', 'https://pixabay.com/get/g9429c253144dfc8a194122dcce73d21abd84b8d0c242f2d31eda8195f5ec8eda4a7924cb48ea576dfb11773617b24952.jpg', 'mediterranean, bejaia, kabylia', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(55, 1, 'https://cdn.pixabay.com/photo/2017/06/22/21/49/sea-2432631_150.jpg', 'https://pixabay.com/get/gfe9b06c049acabb972f03f08656e527138542fb88c654b7d3fa7d939a0cd7eb30164cf32ec3ef52b27942a8b544dcc5d.jpg', 'sea, mediterranean, tipaza', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(56, 1, 'https://cdn.pixabay.com/photo/2019/08/13/08/54/alger-4402877_150.jpg', 'https://pixabay.com/get/ga12f6f1d2d5bb10362405d1ccbef42afcad75a3283b454ad7c8b491963c2ae1ea3a1ffad2f55b42cda66e0adad1a78c3.jpg', 'alger, kasbah, algeria', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(57, 1, 'https://cdn.pixabay.com/photo/2017/05/10/23/10/morocco-2302244_150.jpg', 'https://pixabay.com/get/g17a6e3c6388af2d288a3cbf9ece771b347b950f16e5bb6137e51b5fd3fa80875df34f6cb929c431faf742b024be96f23.jpg', 'morocco, algeria, desert', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(58, 1, 'https://cdn.pixabay.com/photo/2019/09/20/23/47/sand-4492753_150.jpg', 'https://pixabay.com/get/g63048c3eaf61b8dfee98dbd913a6139a74f01b91beea317690d69504be627aad6f3f1c6bce509c99d2c3195299bb3a92.jpg', 'sand, desert, sahara', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(59, 1, 'https://cdn.pixabay.com/photo/2018/04/13/23/12/rock-3317904_150.jpg', 'https://pixabay.com/get/g33ef7bb36f808e4f4a60b3379d2a01e6105e86d31b9d8905348ca00ca640b1b6f4a20fafdd132ee4021aade948328557.jpg', 'rock, travel, nature', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(60, 1, 'https://cdn.pixabay.com/photo/2015/11/06/15/50/globe-1029213_150.jpg', 'https://pixabay.com/get/g4d81d67c75b88c2c9fa2d00efcd796274d580e4039990bd0183091a81213037fa1057ed1b2c2b6062cb1498658d25cb6.jpg', 'globe, algeria, niger', '1', 'api', '2024-06-18 23:44:32', '2024-06-18 23:44:32'),
(61, 8, 'https://cdn.pixabay.com/photo/2012/04/16/13/17/cameroon-35964_150.png', 'https://pixabay.com/get/gf725dba5a23302b2e3e5f98d1e67076bf3e9a12fffb75a8e8726ac724cf53ddf8eff8ab14af65eefc2a97cc87aab238c.png', 'cameroon, flag, country', '1', 'api', '2024-06-19 00:33:03', '2024-06-19 00:33:03'),
(62, 8, 'https://cdn.pixabay.com/photo/2016/10/21/19/30/cameroon-1758941_150.png', 'https://pixabay.com/get/g826bafef6cdc7983ca2420225c722bec0f9fd1eb346d74b0483698788a6ba995d9d0199d5338dc5d3e182938c8a40123.png', 'cameroon, flag, map', '1', 'api', '2024-06-19 00:33:03', '2024-06-19 00:33:03'),
(63, 8, 'https://cdn.pixabay.com/photo/2022/06/12/11/43/africa-7257837_150.jpg', 'https://pixabay.com/get/g691389f2353ba1a495d0be61ac6f15ad061afe0b5324056339b41c6e59cab59ab3a7a2349fed7cc9f01aac7ba2241644.jpg', 'africa, haircut, hairdressing', '1', 'api', '2024-06-19 00:33:03', '2024-06-19 00:33:03'),
(64, 8, 'https://cdn.pixabay.com/photo/2016/06/16/01/21/cameroon-1460305_150.jpg', 'https://pixabay.com/get/g62ba36b9e4f75a121d71e264ff5f258053c5bf11c9bd2109b098082d8812cee063c475d9e883ef5c9b404cd401d0d74e.jpg', 'cameroon, flag, national', '1', 'api', '2024-06-19 00:33:03', '2024-06-19 00:33:03'),
(65, 8, 'https://cdn.pixabay.com/photo/2023/09/15/09/28/antelope-8254443_150.jpg', 'https://pixabay.com/get/g2e6e3e487e058de5aaef7a083ce7b184328f89b5491724feb58c3c3351821ca1f380b7281bc9e2690f56f136c840d4ca.jpg', 'antelope, roan, safari', '1', 'api', '2024-06-19 00:33:03', '2024-06-19 00:33:03'),
(66, 8, 'https://cdn.pixabay.com/photo/2018/11/24/20/50/peace-3836306_150.jpg', 'https://pixabay.com/get/g71ba94ae157fc18a735a530c4f38c566d59d34b453e95a0003fb92a458882c1f333ac5e041e2261fb3fc9a42dbb2ebe2.jpg', 'peace, child, africa', '1', 'api', '2024-06-19 00:33:03', '2024-06-19 00:33:03'),
(67, 8, 'https://cdn.pixabay.com/photo/2018/12/05/01/22/young-3856995_150.jpg', 'https://pixabay.com/get/g21477a6a20513204c5ba90e0c29d0a1b9a20264efec6bdf84c45b79d223d1094119831bbd25c061ca5ed56c4648f7d48.jpg', 'young, child, africa', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(68, 8, 'https://cdn.pixabay.com/photo/2022/04/03/15/20/hut-7109228_150.jpg', 'https://pixabay.com/get/g677cba308fe76fe3195eaad7d59571465b9eb68a782025954798400c1fee3074e247f55d76c42d9719ec2bea4647b62c.jpg', 'hut, shelter, nature', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(69, 8, 'https://cdn.pixabay.com/photo/2024/05/04/02/30/african-woman-8738173_150.jpg', 'https://pixabay.com/get/g94a6817c804ccf9ffabe8ef5cdef5cbb57a50cd5de48365f10263ee3e6de0c42a83e054e92cac3b47fbfb2e00b259695.jpg', 'african woman, woman, female', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(70, 8, 'https://cdn.pixabay.com/photo/2015/02/27/02/52/cameroon-651456_150.png', 'https://pixabay.com/get/gb2192e8370ed12c4fc91058fff07eda313d5f5ae511881c116a6815317386f8301f58383ce0f141f01923fd2600e5d49.png', 'cameroon, flag, hand', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(71, 8, 'https://cdn.pixabay.com/photo/2020/04/27/19/32/fabric-5101355_150.jpg', 'https://pixabay.com/get/g6d82b4b28a19a16a447db18c263254a770eeeeba0427eedfccb5402b2cefa0d2be0519a9ad42575a08311c822d2fac2c.jpg', 'cloth, texture, textile', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(72, 8, 'https://cdn.pixabay.com/photo/2015/02/27/02/52/cameroon-651455_150.png', 'https://pixabay.com/get/g52155f0036b97717e8619d259de76da8698d116f7a9b765bdcbe9e9b13372d14431e0f933d3ddf395ab7c04bd3698ae5.png', 'cameroon, flag, hand', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(73, 8, 'https://cdn.pixabay.com/photo/2023/06/10/14/48/zebras-8054175_150.jpg', 'https://pixabay.com/get/gbaddbc7b53d89d78770e3bfbfcf34d1eb8734fa681a9e19155e07dfab434bd15b425ece7871d408c2e8485ca9991d661.jpg', 'zebras, animals, africa', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(74, 8, 'https://cdn.pixabay.com/photo/2015/11/12/16/03/flag-1040548_150.png', 'https://pixabay.com/get/g8fa145d0539970a26bc370f2397339c1e6adaa24eec0fdfdb38e9a2e13e1135a70935775d63456dc966f8ecfdfff3825.png', 'flag, country, cameroon', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(75, 8, 'https://cdn.pixabay.com/photo/2016/08/31/16/17/kitchen-1633999_150.jpg', 'https://pixabay.com/get/gcd2f8b5d06d674b8beaf3f3c71604b4225068c165cf1b400229cd0b81a17217c1cbb9b6b4f771679cb2e56c93c141472.jpg', 'food, meat, cameroon', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(76, 8, 'https://cdn.pixabay.com/photo/2023/09/15/09/28/antelope-8254442_150.jpg', 'https://pixabay.com/get/g77c6f0e18cab1806ed3c17782a6ce72245e536e6180da12277a2167cbdc669713b6247c4eee052d0159344ff2f455a7f.jpg', 'antelope, fallow deer, safari', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(77, 8, 'https://cdn.pixabay.com/photo/2019/01/29/21/16/sheep-3963286_150.jpg', 'https://pixabay.com/get/gcc1dc8730b81c5bd03446a6d03febea7da3bc4eb69c321aa6335e5c68d9fe458a9e998f904c988849cf6c6c90bf03fae.jpg', 'sheep, cameroon, pup', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(78, 8, 'https://cdn.pixabay.com/photo/2022/06/27/07/22/woman-7286907_150.jpg', 'https://pixabay.com/get/gb06b51ff5915ab470054d972e7ee4605b6f37fdc6bdd66e85988ff18c946aaef6587c305f7ce24642fdfce8da878fdda.jpg', 'woman, turban, afro', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(79, 8, 'https://cdn.pixabay.com/photo/2013/07/13/09/53/cameroon-156218_150.png', 'https://pixabay.com/get/gc736805588610ea6de3941f89856e5cd7e217c3b190eb2d7081908e705393196dcd118f30531332fbb8d461b03d545e6.png', 'cameroon, flag, country', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(80, 8, 'https://cdn.pixabay.com/photo/2014/06/23/20/58/lake-375609_150.jpg', 'https://pixabay.com/get/ge25c09e72146dbf68d552b1c87f5deda2bd71c0778a0db0a4d58d4665b596c208dfdd970046a012d58dadff438bc243b.jpg', 'lake, branches, silhouettes', '1', 'api', '2024-06-19 00:33:04', '2024-06-19 00:33:04'),
(81, 17, 'https://cdn.pixabay.com/photo/2016/10/21/19/30/eritrea-1758950_150.png', 'https://pixabay.com/get/ge6aa47c6483c703ed089fef652a7762439d5dc191c9c8ca809837fb3f29f50506fab021c4aaf75f7d1255d6f67c6c1b9.png', 'eritrea, flag, map', '1', 'api', '2024-06-19 10:38:08', '2024-06-19 10:38:08'),
(82, 17, 'https://cdn.pixabay.com/photo/2017/06/01/12/22/africa-2363371_150.jpg', 'https://pixabay.com/get/gecc228acaa5c9e5961c1d426f7b969b9ed7384f5347cfcf048cb410d6b17942007b071808e98815f73e3347cdd13ca94.jpg', 'africa, eritrea, nature', '1', 'api', '2024-06-19 10:38:08', '2024-06-19 10:38:08'),
(83, 17, 'https://cdn.pixabay.com/photo/2017/06/01/12/26/africa-2363380_150.jpg', 'https://pixabay.com/get/gf4fbb3934420e507ef8df1373a0f938659b4849c81376cfa10ecf721d35b2269e56f5fa842e8441f11748289e163f827.jpg', 'africa, eritrea, agriculture', '1', 'api', '2024-06-19 10:38:08', '2024-06-19 10:38:08'),
(84, 17, 'https://cdn.pixabay.com/photo/2015/11/12/16/24/flag-1040594_150.png', 'https://pixabay.com/get/g9da7269a845590dd6f3e909cc45abbb39557639f907b87c904ba70f79668b10547d9a465b40559493ea2d23352f5e003.png', 'flag, country, eritrea', '1', 'api', '2024-06-19 10:38:08', '2024-06-19 10:38:08'),
(85, 17, 'https://cdn.pixabay.com/photo/2013/07/13/14/15/eritrea-162287_150.png', 'https://pixabay.com/get/g1c1379275f6dff6853292c2b2ff22b7049944bad0291206ace22dbe881e869d4e6d1c65b892e14ed1c600990252a1f95.png', 'eritrea, flag, national flag', '1', 'api', '2024-06-19 10:38:08', '2024-06-19 10:38:08'),
(86, 17, 'https://cdn.pixabay.com/photo/2012/04/10/23/14/eritrea-26911_150.png', 'https://pixabay.com/get/geabae98db92b5bedcf4319b83247a2d1516851f530732c19b932e5e68f8d21bbe218dca9d29dd7276024867b380e08b8.png', 'eritrea, flag, national', '1', 'api', '2024-06-19 10:38:08', '2024-06-19 10:38:08'),
(87, 17, 'https://cdn.pixabay.com/photo/2013/10/12/16/06/ghinda-194478_150.jpg', 'https://pixabay.com/get/g463090b53eb4023b733b10a0acee256421738dafa15efed86c9cbb3bd3815d7cf3e7a1b8588636a2369636ad6b88d658.jpg', 'ghinda, eritrea, landscape', '1', 'api', '2024-06-19 10:38:08', '2024-06-19 10:38:08'),
(88, 17, 'https://cdn.pixabay.com/photo/2013/05/30/20/04/eritrea-114822_150.jpg', 'https://pixabay.com/get/g0e0d7622d8151c24a164ff6aa1eb2b076bf9936f626c3f3798852a2ea0c466d7072449223484f1669b470c0850ba062a.jpg', 'eritrea, mountains, valley', '1', 'api', '2024-06-19 10:38:08', '2024-06-19 10:38:08'),
(89, 17, 'https://cdn.pixabay.com/photo/2023/06/10/14/48/zebras-8054175_150.jpg', 'https://pixabay.com/get/gf8e93251dad3a07c9fc82b6b0615167c3e5fadcd91504a6205c220e13f851ba5481d514b5d594ea9e5e61362b5a7831c.jpg', 'zebras, animals, africa', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(90, 17, 'https://cdn.pixabay.com/photo/2013/08/07/12/39/eritrea-170449_150.jpg', 'https://pixabay.com/get/gb5786d6a12e8a8ee61d7ee56080a018cc6b19d8c527bba6cb52be7caf1b226d42e4e13536508a9f73bd156bacfe82ded.jpg', 'eritrea, train, yard', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(91, 17, 'https://cdn.pixabay.com/photo/2013/07/13/09/53/eritrea-156235_150.png', 'https://pixabay.com/get/g59b6f5b68f945905a59675ca05b21ff4a9d9f4eb3fe3d9d6a43ca2513e7c6b509b31cf27551152f6eebadee9a422d501.png', 'eritrea, flag, country', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(92, 17, 'https://cdn.pixabay.com/photo/2013/02/21/13/40/eritrea-84255_150.jpg', 'https://pixabay.com/get/g372fec9cb158b85e1d6885736c41f72b1314bce0a1193b8c9b4e2447243e2112995a5be532accf56187129fff486ad7e.jpg', 'eritrea, building, towers', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(93, 17, 'https://cdn.pixabay.com/photo/2013/12/17/20/10/boxfish-230012_150.jpg', 'https://pixabay.com/get/g66846cee28f0e9cd8b54c24ddc976e588f20c47cade9048a1aeb2e7c819eeccbf93fd737e16ed62b9882d95e495b980a.jpg', 'boxfish, dive, underwater', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(94, 17, 'https://cdn.pixabay.com/photo/2013/12/09/03/44/clown-fish-225421_150.jpg', 'https://pixabay.com/get/gf885e61fa1f6fa04a7ef9434ab9948b348b4bbae98c042a7d0ce7868a2fdac7af57e3da57b476feb6d864ad7302016ce.jpg', 'clownfish, dive, nature', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(95, 17, 'https://cdn.pixabay.com/photo/2017/08/23/03/49/eritrea-2671448_150.png', 'https://pixabay.com/get/gbad8c824e71476f2ece077accfdb343d762fd61ada48767803b9549e5bdf30af266f040a8b8fee2e05998bd70dab1f90.png', 'eritrea, country, international', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(96, 17, 'https://cdn.pixabay.com/photo/2022/06/27/07/22/woman-7286907_150.jpg', 'https://pixabay.com/get/g464745842c0afa8344f73bf2d3313f42d02622514cb9da20b896ac36499b24de7947c0a642a2e6b69d157cb1d7ae5479.jpg', 'woman, turban, afro', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(97, 17, 'https://cdn.pixabay.com/photo/2013/03/09/23/46/eritrea-92055_150.jpg', 'https://pixabay.com/get/g1dc819b1a7f823937f661c96068c72ebf4439e60fb97caabdd7596c02a6df2b4d05ef30d892cd054781d39f07804d6bc.jpg', 'eritrea, landscape, boy', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(98, 17, 'https://cdn.pixabay.com/photo/2014/06/23/20/58/lake-375609_150.jpg', 'https://pixabay.com/get/gd5f2f4421c991887bc0e31f62dc8df553c79eab86f316ed3f4f79ed1743175ec1ecf35be7aa7cacc12dc0b055e6f50bd.jpg', 'lake, branches, silhouettes', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(99, 17, 'https://cdn.pixabay.com/photo/2015/03/01/04/54/eritrea-654334_150.png', 'https://pixabay.com/get/gd786311e68c3d5d23d60815cfd00209b9516462539c015bdb4252b43ab984189563441c613477f03a28a0fe1708d40aa.png', 'eritrea, flag, fingerprint', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(100, 17, 'https://cdn.pixabay.com/photo/2013/02/20/19/27/eritrea-83978_150.jpg', 'https://pixabay.com/get/g7736156f6d32c71605a82d03fb6c9c3ec0a32b800fe47bb7470e4f77096e96bbbd05a6dd56002794a853501d2b363035.jpg', 'eritrea, landscape, valley', '1', 'api', '2024-06-19 10:38:09', '2024-06-19 10:38:09'),
(101, 24, 'https://cdn.pixabay.com/photo/2016/10/21/19/30/guinea-bissau-1758954_150.png', 'https://pixabay.com/get/g715ab5a8dcce3e1682aa7c44bcd1173b8131f111d3e2a881f9a98ded7fba1f51a5bd163d65f67faec6b3c0a54f4c7f1d.png', 'guinea-bissau, flag, map', '1', 'api', '2024-06-19 12:28:27', '2024-06-19 12:28:27'),
(102, 24, 'https://cdn.pixabay.com/photo/2022/09/07/11/54/carnival-7438638_150.jpg', 'https://pixabay.com/get/g8cc78e247548594d50314af25813f3ece6be11b0f35b2f3c2ff3dd09b1f5076ff4100b356178801b220e35d874dd07d8.jpg', 'carnival, guinea bissau, queen', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(103, 24, 'https://cdn.pixabay.com/photo/2013/07/13/14/15/guinea-bissau-162310_150.png', 'https://pixabay.com/get/g972acb1a9a99fab5e9554934b8995755ab529f8a4f3d187d4c2d7da879ada17f5acf1829fdbe98298a3c77628f324ad1.png', 'guinea-bissau, flag, national flag', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(104, 24, 'https://cdn.pixabay.com/photo/2013/07/13/09/54/guinea-bissau-156258_150.png', 'https://pixabay.com/get/gca02c51c38e50be9ef9edbb28cb4c2e2e5f4d2102d8a7100a3de58c1261316a2e10ee2e8fedbbd9725fbf8401f027320.png', 'guinea-bissau, flag, country', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(105, 24, 'https://cdn.pixabay.com/photo/2014/09/03/20/34/tree-434943_150.jpg', 'https://pixabay.com/get/g2443bc017de101c7c39ac14edcf817e89cde6f9237c8bf4969509146c5a8cffa6eaf264598a67f33a039b868fd045fa1.jpg', 'tree, forest, nature', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(106, 24, 'https://cdn.pixabay.com/photo/2020/03/02/02/40/guinea-bissau-4894695_150.png', 'https://pixabay.com/get/g650fc7adae247ce0eadd61f3990fb2b9f253ec80df62b5e37fc55d2c25c7dee6952296413021823c6cbec315e64a28ac.png', 'guinea-bissau, flag, country', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(107, 24, 'https://cdn.pixabay.com/photo/2014/08/30/17/07/kid-431662_150.jpg', 'https://pixabay.com/get/g70faf6bc265ec4fa45761ab2a954087fd8bcdc2bf3a932f78ba71557203fd94fb96f424d78ac8e5156765dec8e5cd1f5.jpg', 'kid, africa, guinea bissau', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(108, 24, 'https://cdn.pixabay.com/photo/2014/01/11/23/40/guinea-pig-242520_150.jpg', 'https://pixabay.com/get/g474cc21b0b8cfaf1224ed7d6800520185b4a1a8ec3abb63155157d54d7305510772c9bf0e3ef5e952434a9d761bbac97.jpg', 'guinea pig, cavy, pet', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(109, 24, 'https://cdn.pixabay.com/photo/2020/06/11/18/18/guinea-pig-5287749_150.jpg', 'https://pixabay.com/get/g3b4c6f8c0351ea441f5c4862de90eaad203e4641bfe9760af1cf5707330b047df472c83f741fd29f8c8aa5a4b89d4412.jpg', 'guinea pig, rodent, mammal', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(110, 24, 'https://cdn.pixabay.com/photo/2020/06/07/07/07/sea-pig-5269324_150.jpg', 'https://pixabay.com/get/g6f8318c4dcc72c46c03953d12d278f86d288a1a27c4af04304f9841be3d0719d3554d12f55e29be7c4f18cc00d5670df.jpg', 'guinea pig, few, hagenbeck', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(111, 24, 'https://cdn.pixabay.com/photo/2022/07/12/20/15/cavia-7318119_150.jpg', 'https://pixabay.com/get/gfa632fd7970be530fea6b4b3288866a9b75da4b0e2fcc1af4493ea0e34271c0c3b3797ebee8716a7d8b8c24d9a534425.jpg', 'cavia, caviidae, guinea pig', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(112, 24, 'https://cdn.pixabay.com/photo/2014/08/30/18/00/child-431717_150.jpg', 'https://pixabay.com/get/g24856fa351c3ca7c26fa969e3d067008f7c7f589b6005bca0229027e9a9cac0a3fc6747084256c01cd02e3872f417f6a.jpg', 'kid, africa, black', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(113, 24, 'https://cdn.pixabay.com/photo/2017/08/29/12/40/international-2693188_150.jpg', 'https://pixabay.com/get/gbda769fc350a02efa8fab12ecc6a953e4f5e9826a4f669ef362a9541f65c3f32425e687d8e764b79b39133a6141c5d13.jpg', 'international, banner, flag', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(114, 24, 'https://cdn.pixabay.com/photo/2014/08/30/18/36/child-431744_150.jpg', 'https://pixabay.com/get/gf4d35b63e323a30871cae6dfe1db7ddd2ffe2bf3cfa38db01954530da00af2e956c1cb036d899f21935f57e1ab268971.jpg', 'kid, africa, black', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(115, 24, 'https://cdn.pixabay.com/photo/2014/08/30/18/15/cigar-431726_150.jpg', 'https://pixabay.com/get/g49f5ab77e8d9d2d62c8d2a87a71ca62071bcbb6e99625774d515635f1e67bf74ea722d3085998b21993cbcbc311f0be4.jpg', 'cigar, africa, smoke', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(116, 24, 'https://cdn.pixabay.com/photo/2014/08/30/18/03/africa-431718_150.jpg', 'https://pixabay.com/get/gdacee5a9b1b1fabd89b4def7c97617b38acf0c366b7b17cbd40159d30fcec65aa51dc95ae5e7de1e3a71af6f81b36af4.jpg', 'africa, kid, black', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(117, 24, 'https://cdn.pixabay.com/photo/2020/06/11/18/17/guinea-pig-5287747_150.jpg', 'https://pixabay.com/get/g4f8f2a11cb5e0e9a789b100e1d0c5c054dfa53c7d7481fac0caccbd8b09d52c631f240b7bf50248919f3a1b6f98958cb.jpg', 'guinea pig, rodent, mammal', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(118, 24, 'https://cdn.pixabay.com/photo/2014/11/23/16/12/guinea-pig-542917_150.jpg', 'https://pixabay.com/get/g7673761f05ab597f82a070b70da1c0918f80462db0e587b0112304c95aa524cadd23f15800184f9a39fc49ee314fbbaf.jpg', 'guinea pig, black-cream-agouti, rodent', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(119, 24, 'https://cdn.pixabay.com/photo/2017/07/21/17/23/flag-2526422_150.jpg', 'https://pixabay.com/get/ge8d8e04d2adca199fc244bdaa3bf12c2e7fd5795c253dcbcd7d16a751871ff5d3774091ff110bd37e76128ce0ddf2698.jpg', 'flag, banner, nation', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(120, 24, 'https://cdn.pixabay.com/photo/2014/09/14/01/35/child-444690_150.jpg', 'https://pixabay.com/get/g1ba54eefe652223cefe58fe681ebf029fce55fa03bf105a32f0abd2d1a447a3a5697c217382447adafa99a8f5f0ab071.jpg', 'kid, boy, africa', '1', 'api', '2024-06-19 12:28:28', '2024-06-19 12:28:28'),
(121, 9, 'https://cdn.pixabay.com/photo/2020/02/24/01/45/central-african-republic-4875003_150.png', 'https://pixabay.com/get/gf9e1b35a472860148f852f749cfc9600d26fea351872487b6c8231142a8eac4a0d50bbc5bc8c818354fa186f6b7a2212.png', 'central african republic, flag, country', '1', 'api', '2024-06-19 12:31:29', '2024-06-19 12:31:29'),
(122, 9, 'https://cdn.pixabay.com/photo/2016/10/21/19/30/central-african-republic-1758942_150.png', 'https://pixabay.com/get/g9a163c01a56fc0eefd4efde44d66342676971ab1756a930140ddaac23a24b560b73d4d8123078ed31f98b9a3ce7bf6c3.png', 'central african republic, flag, map', '1', 'api', '2024-06-19 12:31:29', '2024-06-19 12:31:29'),
(123, 9, 'https://cdn.pixabay.com/photo/2015/03/01/15/46/central-african-republic-654783_150.png', 'https://pixabay.com/get/g817880029f4b2ec6c14b62b9782344fc658702844e2df13aa6177ea03b41e4b67a75ecc7bf72af1227759ee52dd39088.png', 'central african republic, flag, fingerprint', '1', 'api', '2024-06-19 12:31:29', '2024-06-19 12:31:29'),
(124, 9, 'https://cdn.pixabay.com/photo/2017/08/28/19/08/international-2690964_150.jpg', 'https://pixabay.com/get/ge6a36fc0124e5c83c7d026af299cf3c332aa61a457239ca3c745e2a41b9781c599387141ab6c091b37f74c0c89572db9.jpg', 'international, banner, flag', '1', 'api', '2024-06-19 12:31:29', '2024-06-19 12:31:29'),
(125, 9, 'https://cdn.pixabay.com/photo/2015/11/12/16/03/flag-1040551_150.png', 'https://pixabay.com/get/g1ee6b99a1e6ed2c47ddc1d45f7aefe2c1b236ae67bebc1f801c978a9dd739b438ffd715a850d2189e51e2f274a45cb5a.png', 'flag, country, central african republic', '1', 'api', '2024-06-19 12:31:29', '2024-06-19 12:31:29'),
(126, 9, 'https://cdn.pixabay.com/photo/2017/08/19/04/25/international-2657380_150.png', 'https://pixabay.com/get/gd18273885dd9c1d422b069000df65a562664daec8de19c79cd9c554747fbb33f8e8fb8f403893e186932d07421ef9198.png', 'international, banner, flag', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(127, 9, 'https://cdn.pixabay.com/photo/2023/05/07/23/53/central-african-republic-7977295_150.png', 'https://pixabay.com/get/g0a9f937387abe5627f20eb4932cd28d30736d52306296ac24ff1fdf7f777a238bc406f958bbf28d5da78ee9b59bf3dac.png', 'central african republic, map, love', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(128, 9, 'https://cdn.pixabay.com/photo/2013/07/13/09/52/central-african-republic-156212_150.png', 'https://pixabay.com/get/gf95a08d2a4b014d7d3796121d90b547eacf31f11d9589eeb0fd2915e0b24fd97a08f3efb209f186f8019ef323e95ee37.png', 'central african republic, flag, country', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(129, 9, 'https://cdn.pixabay.com/photo/2017/07/21/17/53/flag-2526607_150.jpg', 'https://pixabay.com/get/gf70aed904141586756ea37a756ecd1e7dda3bcfb4bf47f51cac93efa7ec8d8121dbfa4ef524649dc5bfa169ac048fa38.jpg', 'flag, banner, nation', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(130, 9, 'https://cdn.pixabay.com/photo/2015/03/26/07/34/prague-night-689897_150.jpg', 'https://pixabay.com/get/g4f24475543939c74969ae2520bae53de0e34a4056acd9af1b70d1c29e2fe770eb29f13276daca60a226469e768217a34.jpg', 'prague by night, czech republic, central europe', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(131, 9, 'https://cdn.pixabay.com/photo/2013/07/13/14/14/central-african-republic-162262_150.png', 'https://pixabay.com/get/g10490364c78c58a172170f3f43347bcc22eb30522d57770f97a4dee4f85af3cfef8ffcdd86b672c3cc29fae1e60c5ccf.png', 'central african republic, flag, national flag', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(132, 9, 'https://cdn.pixabay.com/photo/2015/03/26/07/34/prague-in-the-morning-689894_150.jpg', 'https://pixabay.com/get/g1a1f029d69b7a94f3c737f79162cf378e425f12beeae623d6e80ca9fca209d58ea727480f8e84f8b6dbea532c7c1ea62.jpg', 'early morning in prague, czech republic, central europe', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(133, 9, 'https://cdn.pixabay.com/photo/2017/08/21/12/09/map-2665158_150.png', 'https://pixabay.com/get/g98efdae4a56b574ac69d138c7003679ba2ba2b2b295b9c7363cd58b530ce7a3a081f4eb9a74372fa4b84bd9663071b30.png', 'map, maps, geolocation', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(134, 9, 'https://cdn.pixabay.com/photo/2015/03/26/07/34/flowers-castle-689899_150.jpg', 'https://pixabay.com/get/g83aa58e5bc3fb84b9e852d6069028f4b8b542a73a740200b0c6f5b0e5b9cca57fb0366f253589786ae256da2f87f7a40.jpg', 'flower castle, czech republic, central europe', '1', 'api', '2024-06-19 12:31:30', '2024-06-19 12:31:30'),
(135, 9, 'https://cdn.pixabay.com/photo/2015/03/26/07/34/woman-689896_150.jpg', 'https://pixabay.com/get/gba14508c74497a14a6e0fccab6c70c09fabbcc3d3417466b4de0082deffee54e7497daf65244afaca6b1334c72e248a9.jpg', 'woman, back, waiting', '1', 'api', '2024-06-19 12:31:31', '2024-06-19 12:31:31'),
(136, 9, 'https://cdn.pixabay.com/photo/2023/04/14/20/47/cathedral-7925871_150.jpg', 'https://pixabay.com/get/g1e236d7b50656004bc1ec1eb1bfdbb83b348ff54dd0bad126c67f9f60d75a336739c9697320bc0463f1d5e2e8b87d10c.jpg', 'cathedral, santa maria, santo domingo', '1', 'api', '2024-06-19 12:31:31', '2024-06-19 12:31:31'),
(137, 9, 'https://cdn.pixabay.com/photo/2015/03/26/07/34/woman-sitting-alone-689895_150.jpg', 'https://pixabay.com/get/gde8a6f3a88d6416e335f0d7902faec2c366e9c825093506cf8a11ea1bafc946f2ec3228cb3bd9a3d1abffe7f2ef2b042.jpg', 'woman sitting alone, czech republic, central europe', '1', 'api', '2024-06-19 12:31:31', '2024-06-19 12:31:31'),
(138, 9, 'https://cdn.pixabay.com/photo/2020/05/31/07/54/sunset-5241660_150.jpg', 'https://pixabay.com/get/g2c7fc43adaed9316bb504694ef3c72a0bf9add80c2aa8854d97f5dc63455f194c4c681934f17e0930b8e06276b82a3b0.jpg', 'sunset, nature, field', '1', 'api', '2024-06-19 12:31:31', '2024-06-19 12:31:31'),
(139, 9, 'https://cdn.pixabay.com/photo/2015/03/26/07/34/church-689900_150.jpg', 'https://pixabay.com/get/gc344c4f7cf2e3a14a2c0d9e4024897cdb36700504f7faeab92fe21f3ce394d7b1a0d4b193054b95e68ede41f49303fa7.jpg', 'church, nature, sunset', '1', 'api', '2024-06-19 12:31:31', '2024-06-19 12:31:31'),
(140, 9, 'https://cdn.pixabay.com/photo/2015/03/26/07/35/fountain-689902_150.jpg', 'https://pixabay.com/get/ga07ce97c1cfca0ddc58dc67adb7488a3ff7c3e9743fd0b590e9ce96c321f9e902be8615e02831a68c529a7422d4ce64d.jpg', 'fountain, place, people', '1', 'api', '2024-06-19 12:31:31', '2024-06-19 12:31:31'),
(141, 7, 'https://cdn.pixabay.com/photo/2019/12/02/21/23/penguins-4668754_150.jpg', 'https://pixabay.com/get/gda9c1aee9a9be659f2e994719db04d50d0463f071a0ecfeaf39fd1342a2899dce285e28cbdcddab6a609bbdd5dafd261.jpg', 'penguins, south africa, cape town', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(142, 7, 'https://cdn.pixabay.com/photo/2019/04/25/02/48/peak-4153779_150.jpg', 'https://pixabay.com/get/gff49d25e62636fceeab5f9b82bcd368d96ddaccc1784f895d3467a285bee10bea1c74e7ebd311a6f1a74ebc3b0eb3b8a.jpg', 'peak, clouds, mountain', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(143, 7, 'https://cdn.pixabay.com/photo/2015/03/17/22/47/fisherman-678467_150.jpg', 'https://pixabay.com/get/g602b988ae8bf580336765a7e92f52ad8226bde2ebd8e3f381e591bbd4c78880099902f7b41cf82d50951129747e0dcaf.jpg', 'fisherman, sea, atlantic', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(144, 7, 'https://cdn.pixabay.com/photo/2015/11/06/09/32/sea-1025667_150.jpg', 'https://pixabay.com/get/g5d77bc4b2dde94e6331505170f8aa918e4836d0552f2987bedd6d0dd07e9de2bb2ef6e2407442be652579c34d84b6046.jpg', 'sea, water, nature', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(145, 7, 'https://cdn.pixabay.com/photo/2018/05/31/15/34/boa-vista-3444300_150.jpg', 'https://pixabay.com/get/g91a31cdae6057df8afb81a3201457c25eb296b4bd619f34abfdaee286930c8162ce90b914c46d45988fe09e982b33045.jpg', 'boa vista, cape verde, vacations', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(146, 7, 'https://cdn.pixabay.com/photo/2018/05/31/00/13/cape-verde-3442859_150.jpg', 'https://pixabay.com/get/g60f2dbf94a2af5e858dfc32469fbbfc4d41d6e2f299116f89df294bfb24e914e4a67ad69a438818a701f6d5c6e1eb7b9.jpg', 'cape verde, boa vista, hotel marine club beach resort', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(147, 7, 'https://cdn.pixabay.com/photo/2023/02/09/13/51/ocean-7778866_150.jpg', 'https://pixabay.com/get/gaa36abcc4bb3990e5f3ff877a17452728678acea4264abe3a2d7320845a9eed2e85246f784962a4febba367833e50444.jpg', 'ocean, sunrise, island', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(148, 7, 'https://cdn.pixabay.com/photo/2016/01/31/16/10/landscape-1171663_150.jpg', 'https://pixabay.com/get/ge44204b186336f5b6087afd8b5364743bbbc2667e2875ca79f420cf95bb1ab0c6a311355aff5eb0039d654dc0cade6eb.jpg', 'landscape, sea, nature', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(149, 7, 'https://cdn.pixabay.com/photo/2013/07/13/14/14/cape-verde-162260_150.png', 'https://pixabay.com/get/gc8978456a4e9e1b3e1bc2d340ee8885e003ba740445f6a0fc20100693ec657aa063e50c4e20dc9cfb7b5d53456f063e3.png', 'cape verde, flag, national flag', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(150, 7, 'https://cdn.pixabay.com/photo/2015/11/06/09/30/sea-1025655_150.jpg', 'https://pixabay.com/get/g200f857dedc1e01e1bf944df041b037f721d94f9e9e4723c2c3c87b15baa32b83215ebc7cfa2e83b06689bd663127847.jpg', 'sea, water, beach', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(151, 7, 'https://cdn.pixabay.com/photo/2017/08/30/21/43/cape-verde-2698680_150.jpg', 'https://pixabay.com/get/gc6028886d73fff9cdf14cd1902730728596ed5cedfde70654d85551a1994ed73e7e97bcf24bf151450b23767ccff1ba6.jpg', 'cape verde, tourism, africa', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(152, 7, 'https://cdn.pixabay.com/photo/2015/11/12/16/03/flag-1040550_150.png', 'https://pixabay.com/get/g50b8d7c9f5158ebf7b8a78e25dbbbbada9c75659150f4dc252fa54da0c273e143651dc708c2abf5dad73f4385411617f.png', 'flag, country, cape verde', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(153, 7, 'https://cdn.pixabay.com/photo/2017/02/17/23/15/duiker-island-2076042_150.jpg', 'https://pixabay.com/get/ge59aa9c8e58e1f4308850fd1cddeaebb5bcbd0aac230d3af26f9d9e9f7ec20fcf5067cd091665462c842be1648519616.jpg', 'duiker island, south africa, cape', '1', 'api', '2024-06-19 12:34:12', '2024-06-19 12:34:12'),
(154, 7, 'https://cdn.pixabay.com/photo/2017/08/28/19/08/international-2690971_150.jpg', 'https://pixabay.com/get/g2939c28b0cf26496766d3b38c415528937f86f0778ec716fdccaa90ad3c822324e8aa7fd61296c9764e95fd395ee1bdf.jpg', 'international, banner, flag', '1', 'api', '2024-06-19 12:34:13', '2024-06-19 12:34:13'),
(155, 7, 'https://cdn.pixabay.com/photo/2018/05/31/00/37/cape-verde-3442899_150.jpg', 'https://pixabay.com/get/g9a0250d159ef635548a6c1de4e740ddc0eb9798038618b971303ee54b895c7de1c57b9ff6729cabff878c1f532a821bc.jpg', 'cape verde, boa vista, hotel marine beach resort', '1', 'api', '2024-06-19 12:34:13', '2024-06-19 12:34:13'),
(156, 7, 'https://cdn.pixabay.com/photo/2018/12/15/17/10/banana-plant-3877237_150.jpg', 'https://pixabay.com/get/g4e181f693c38dfa080d9c8e53c045086eca785c0e28258123e73f3c25ad093f4b9b41b8d003f0fbec41b87959dcf2f2a.jpg', 'banana plant, bananas, cape verde', '1', 'api', '2024-06-19 12:34:13', '2024-06-19 12:34:13'),
(157, 7, 'https://cdn.pixabay.com/photo/2014/04/10/10/09/waiter-320792_150.jpg', 'https://pixabay.com/get/g965335604685710b1adfaa38df1f5978971514444afc4d676619210bbaff494c184f110bb840c9476e324679ea54ebf8.jpg', 'waiter, woman, cape verde', '1', 'api', '2024-06-19 12:34:13', '2024-06-19 12:34:13'),
(158, 7, 'https://cdn.pixabay.com/photo/2021/01/10/12/00/road-5904909_150.jpg', 'https://pixabay.com/get/gc4c7777510dac1b7838115077858ae599dcec21b04a1db695c07bbeb7bf61807b6d5a4e07ad39df731454e001a784ffe.jpg', 'road, coast, cliff', '1', 'api', '2024-06-19 12:34:13', '2024-06-19 12:34:13'),
(159, 7, 'https://cdn.pixabay.com/photo/2014/04/10/10/11/cape-verde-320810_150.jpg', 'https://pixabay.com/get/g7d5ceca665dce00cd1b4b379dfd48a852fb10a9b9d0e4a03574c7ee3968bf7926c9aae069d6f27b30ad621fd99e0074d.jpg', 'cape verde, sunset, nature', '1', 'api', '2024-06-19 12:34:13', '2024-06-19 12:34:13'),
(160, 7, 'https://cdn.pixabay.com/photo/2016/03/11/20/28/sunset-1251003_150.jpg', 'https://pixabay.com/get/gbe6e62a5f56fa30019eb725e8aec9f96f055efc2b1ec67d830929d1bd929e0b65c4115cc165f58caa64604e25672f28b.jpg', 'sunset sky, volcano, landscape', '1', 'api', '2024-06-19 12:34:13', '2024-06-19 12:34:13'),
(161, 40, 'https://cdn.pixabay.com/photo/2020/09/04/12/32/kayak-5543935_150.jpg', 'https://pixabay.com/get/gb252002048ee1c5137ec1b20df03942fe58156de6fcdb784e289394d8da419ea058cb2e3c0574b03520548aca8b8ee4e.jpg', 'kayak, kayaking, paddle', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(162, 40, 'https://cdn.pixabay.com/photo/2017/03/14/17/25/street-2143805_150.jpg', 'https://pixabay.com/get/g2d84f413ca2e3580aa50e25d1c29a472a8bd1be89fbcaf5d518cc4c21869c4eee3d72fd285cd3f2f8d5a56cc1219040d.jpg', 'street, children, africa', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(163, 40, 'https://cdn.pixabay.com/photo/2017/03/27/16/47/africa-2179608_150.jpg', 'https://pixabay.com/get/gdb56dfb96f112f5ac5eef880b3ba9762d759ce4974bc99256af9e5c70d0612189819f8d5a4c936cfb190d3ccf581c1ac.jpg', 'africa, child, children', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(164, 40, 'https://cdn.pixabay.com/photo/2016/02/19/07/39/flag-1208864_150.jpg', 'https://pixabay.com/get/g3ae9142833f094ff32d6462b01fb68c2e587a534293d9df9d1e371940153ddb8ecbbd8ec37f465ffe59ef48f29cabf07.jpg', 'flag, nigeria, africa', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(165, 40, 'https://cdn.pixabay.com/photo/2016/10/21/19/31/nigeria-1758969_150.png', 'https://pixabay.com/get/gc9a786b2acb5bb708d84dd38d28e067339f652cf1058151c0a2289763177efa2f1c1c82007f2022859df01bb1f989598.png', 'nigeria, flag, map', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(166, 40, 'https://cdn.pixabay.com/photo/2014/05/15/14/10/namibia-344891_150.jpg', 'https://pixabay.com/get/g5306722021c4bfa50b51e1ce28feeeb08dfad80bf1588b9a07cab4545def2fc0ac5b550d4f9ef6dd174cc51567ecc317.jpg', 'namibia, himba, africa', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02');
INSERT INTO `country_images` (`id`, `country_id`, `previewURL`, `imageURL`, `tags`, `status`, `type`, `created_at`, `updated_at`) VALUES
(167, 40, 'https://cdn.pixabay.com/photo/2017/03/14/17/26/africa-2143809_150.jpg', 'https://pixabay.com/get/g856150c6984fcba991893a9ad0352915c7849b4305f2856d98301e75fa05382c6f75b7afd322eba959ee1319db797cc6.jpg', 'africa, nigeria, fruits', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(168, 40, 'https://cdn.pixabay.com/photo/2023/03/06/06/51/children-7832779_150.jpg', 'https://pixabay.com/get/g70dbedee1ea4c39a088b1bc2f3c6e3efacd25d819760a00846949bf340c8224b317c58c1bbbbdd1d7723f75abac2a10c.jpg', 'children, almajiri, nigeria', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(169, 40, 'https://cdn.pixabay.com/photo/2019/11/15/13/22/lady-4628418_150.jpg', 'https://pixabay.com/get/gd651d93a9d98de59c266fcc252218f236a43b71fef80e2b799d83953bcab2c546b838c8b37b96d438bd97e1c8a85deac.jpg', 'lady, sax, musician', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(170, 40, 'https://cdn.pixabay.com/photo/2017/03/14/17/28/africa-2143814_150.jpg', 'https://pixabay.com/get/g18de3ee7b0cf0c5135255cfe97ee3f0b1626afebbca92848fe2c019c00bd9bfaba12cf7cc59b0a444bc04038d0ef2fa8.jpg', 'africa, child, nigeria', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(171, 40, 'https://cdn.pixabay.com/photo/2020/04/12/19/59/african-5035645_150.jpg', 'https://pixabay.com/get/gf769002ec7967ed88cfced87c9ef3355d82d0fc107a593fae31bcdf895c362e987209d41db9fc53be1680f446be96319.jpg', 'african, afro, turban', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(172, 40, 'https://cdn.pixabay.com/photo/2015/02/19/03/12/nigeria-641679_150.png', 'https://pixabay.com/get/g8fdc873e0a5170faf496b62d11cf966571dbfd781e3e734cbdadddda72a020446684597d16c8a8473b44cc508e3bf6d8.png', 'nigeria, flag, hand', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(173, 40, 'https://cdn.pixabay.com/photo/2012/04/10/23/15/nigeria-26923_150.png', 'https://pixabay.com/get/g4465499f364d41aa8c51441737098271f8e58138897f4f3fcad8f47406552cba1f0733c9390395c8595e52e9b8b8ffbf.png', 'nigeria, flag, national', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(174, 40, 'https://cdn.pixabay.com/photo/2017/03/14/17/26/children-2143808_150.jpg', 'https://pixabay.com/get/g4d71756d437ff0e4fcbd9b703a74a9f85b4f9357069ab3487d15b656e90ef4f5003fc199cf3e869c570829e320ef7226.jpg', 'children, street, africa', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(175, 40, 'https://cdn.pixabay.com/photo/2017/07/19/06/02/playful-2518081_150.jpg', 'https://pixabay.com/get/ga8a78690784e38f0c8f83efc92c945687f23f344f4a321aa55c126563384b12695313ceae53cf8c873c5ab5cab39be5d.jpg', 'playful, africa, nigeria', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(176, 40, 'https://cdn.pixabay.com/photo/2017/08/08/15/55/africa-2611788_150.jpg', 'https://pixabay.com/get/gff5ecc6da5e1c35808e23116c7efa85dc1ffdd242dd30b946cddcbc980e7ee926af0aa675640f9cf4247f709ad5802d0.jpg', 'africa, nigeria, children', '1', 'api', '2024-07-03 21:36:02', '2024-07-03 21:36:02'),
(177, 40, 'https://cdn.pixabay.com/photo/2017/03/01/19/01/agama-2109338_150.jpg', 'https://pixabay.com/get/g1347cb02d38e7732fa9e045c0b0eec674733f5c8aad41d2f90a7386d0014f61e990ca645a578a41f5e5b92615d58d943.jpg', 'agama, lizard, animal', '1', 'api', '2024-07-03 21:36:03', '2024-07-03 21:36:03'),
(178, 40, 'https://cdn.pixabay.com/photo/2023/03/06/06/51/children-7832776_150.jpg', 'https://pixabay.com/get/g80ed29bebb839fcfe195023676745526d2df657a536a2237757c64e375e330be9ef763fd91bffa1f0d79444e956714db.jpg', 'children, young, poverty', '1', 'api', '2024-07-03 21:36:03', '2024-07-03 21:36:03'),
(179, 40, 'https://cdn.pixabay.com/photo/2022/08/21/06/44/nature-7400524_150.jpg', 'https://pixabay.com/get/gb12df39bca363004dc752189656c4c187a30a34303715bf985b0d1f83bdc90968da32e7fc21c5fbeb54ce5e400adced2.jpg', 'nature, africa, culture', '1', 'api', '2024-07-03 21:36:03', '2024-07-03 21:36:03'),
(180, 40, 'https://cdn.pixabay.com/photo/2022/12/31/10/33/woman-7688406_150.jpg', 'https://pixabay.com/get/g9127776464300f8aa62fda4775b44e87c3d164ff64ad540f9a49d1a218959be21064f854f39048299343275a9b016819.jpg', 'woman, model, smartphone', '1', 'api', '2024-07-03 21:36:03', '2024-07-03 21:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itineraries`
--

CREATE TABLE `itineraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `destination` bigint(20) UNSIGNED NOT NULL,
  `budget` decimal(10,2) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` longtext DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `activities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`activities`)),
  `travel_companions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`travel_companions`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itineraries`
--

INSERT INTO `itineraries` (`id`, `user_id`, `title`, `destination`, `budget`, `status`, `remark`, `start_date`, `end_date`, `activities`, `travel_companions`, `created_at`, `updated_at`) VALUES
(1, 1, 'asdasd', 5, 2000.00, 'start', NULL, '2024-06-12', '2024-06-17', '\"[\\n    {\\n      \\\"day\\\": 1,\\n      \\\"date\\\": \\\"2024-06-12\\\",\\n      \\\"activities\\\": [\\n        {\\n          \\\"time\\\": \\\"10:00 AM\\\",\\n          \\\"activity\\\": \\\"Arrival at Ouagadougou Airport (OUA)\\\",\\n          \\\"budget\\\": \\\"$50\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"12:00 PM\\\",\\n          \\\"activity\\\": \\\"Check-in at Hotel Azalai\\\",\\n          \\\"budget\\\": \\\"$100\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"03:00 PM\\\",\\n          \\\"activity\\\": \\\"Visit the National Museum of Music\\\",\\n          \\\"budget\\\": \\\"$20\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"06:00 PM\\\",\\n          \\\"activity\\\": \\\"Dinner at Le Verdoyant (peanut-free options available)\\\",\\n          \\\"budget\\\": \\\"$30\\\"\\n        }\\n      ]\\n    },\\n    {\\n      \\\"day\\\": 2,\\n      \\\"date\\\": \\\"2024-06-13\\\",\\n      \\\"activities\\\": [\\n        {\\n          \\\"time\\\": \\\"08:00 AM\\\",\\n          \\\"activity\\\": \\\"Embark on a day trip to P\\u00f4 National Park\\\",\\n          \\\"budget\\\": \\\"$150\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"01:00 PM\\\",\\n          \\\"activity\\\": \\\"Picnic lunch in the park\\\",\\n          \\\"budget\\\": \\\"$20\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"04:00 PM\\\",\\n          \\\"activity\\\": \\\"Return to Ouagadougou\\\",\\n          \\\"budget\\\": \\\"$50\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"07:00 PM\\\",\\n          \\\"activity\\\": \\\"Dinner at Le Phenix (peanut-free options available)\\\",\\n          \\\"budget\\\": \\\"$30\\\"\\n        }\\n      ]\\n    },\\n    {\\n      \\\"day\\\": 3,\\n      \\\"date\\\": \\\"2024-06-14\\\",\\n      \\\"activities\\\": [\\n        {\\n          \\\"time\\\": \\\"09:00 AM\\\",\\n          \\\"activity\\\": \\\"Explore the bustling Rood Woko Market\\\",\\n          \\\"budget\\\": \\\"$20\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"12:00 PM\\\",\\n          \\\"activity\\\": \\\"Lunch at a local restaurant (peanut-free options available)\\\",\\n          \\\"budget\\\": \\\"$20\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"02:00 PM\\\",\\n          \\\"activity\\\": \\\"Visit the Grand Mosque of Ouagadougou\\\",\\n          \\\"budget\\\": \\\"$10\\\"\\n        },\\n        {\\n          \\\"time\\\": \\\"06:00 PM\\\",\\n          \\\"activity\\\": \\\"Farewell dinner at Faso Faso (peanut-free options available)\\\",\\n          \\\"budget\\\": \\\"$30\\\"\\n        }\\n      ]\\n    },\\n    {\\n      \\\"day\\\": 4,\\n      \\\"date\\\": \\\"2024-06-15\\\",\\n      \\\"activities\\\": [\\n        {\\n          \\\"time\\\": \\\"10:00 AM\\\",\\n          \\\"activity\\\": \\\"Departure from Ouagadougou Airport (OUA)\\\",\\n          \\\"budget\\\": \\\"$50\\\"\\n        }\\n      ]\\n    }\\n  ]\"', NULL, '2024-06-18 23:32:58', '2024-06-18 23:33:12'),
(2, 1, 'sdsd', 3, 2000.00, 'start', NULL, '2024-06-20', '2024-06-22', '\"[\\n  {\\n    \\\"day\\\": 1,\\n    \\\"date\\\": \\\"2024-06-20\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Arrival in Cotonou, Benin\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Check-in at Hotel du Lac\\\",\\n        \\\"budget\\\": \\\"$100\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Mus\\u00e9e National du B\\u00e9nin\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at Le Grand Bleu restaurant (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 2,\\n    \\\"date\\\": \\\"2024-06-21\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Full-day excursion to Ganvi\\u00e9, the \'Venice of Africa\'\\\",\\n        \\\"budget\\\": \\\"$150\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at Chez M\\u00e9m\\u00e9 Jeanne restaurant (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 3,\\n    \\\"date\\\": \\\"2024-06-22\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Fetish Market in Cotonou\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Departure from Cotonou\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      }\\n    ]\\n  }\\n]\"', NULL, '2024-06-18 23:41:36', '2024-06-18 23:41:46'),
(3, 1, 'f g', 1, 5000.00, 'start', NULL, '2024-06-12', '2024-06-20', '\"[\\n  {\\n    \\\"day\\\": 1,\\n    \\\"date\\\": \\\"2024-06-12\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Arrival in Algiers and transfer to hotel\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Check in to hotel: El Aurassi Hotel\\\",\\n        \\\"budget\\\": \\\"$120\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Museum of Antiquities and Islamic Arts\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at a traditional Algerian restaurant (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 2,\\n    \\\"date\\\": \\\"2024-06-13\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Explore the Casbah of Algiers, a UNESCO World Heritage Site\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a local restaurant in the Casbah (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Notre Dame d\'Afrique Cathedral for panoramic views of Algiers\\\",\\n        \\\"budget\\\": \\\"$5\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at a seafood restaurant on the waterfront (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 3,\\n    \\\"date\\\": \\\"2024-06-14\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"08:00 AM\\\",\\n        \\\"activity\\\": \\\"Day trip to Tipaza, an ancient Roman city with well-preserved ruins\\\",\\n        \\\"budget\\\": \\\"$70\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a restaurant in Tipaza (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"04:00 PM\\\",\\n        \\\"activity\\\": \\\"Return to Algiers\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Farewell dinner at a traditional Algerian restaurant (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 4,\\n    \\\"date\\\": \\\"2024-06-15\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Bardo National Museum, home to an extensive collection of Algerian history and art\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a restaurant near the museum (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Enjoy some free time for shopping or exploring the city\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at a restaurant with live traditional music (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 5,\\n    \\\"date\\\": \\\"2024-06-16\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Great Mosque of Algiers, one of the largest and most important mosques in Africa\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"11:00 AM\\\",\\n        \\\"activity\\\": \\\"Explore the Botanical Garden of Hamma, with its diverse collection of plants and flowers\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"01:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a restaurant in the Botanical Garden (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Take a cable car ride to the top of Mount Bouzareah for panoramic city views\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at a rooftop restaurant with views of the city (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 6,\\n    \\\"date\\\": \\\"2024-06-17\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"08:00 AM\\\",\\n        \\\"activity\\\": \\\"Day trip to Cherchell, an ancient Roman city with well-preserved ruins\\\",\\n        \\\"budget\\\": \\\"$70\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a restaurant in Cherchell (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"04:00 PM\\\",\\n        \\\"activity\\\": \\\"Return to Algiers\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at a traditional Algerian restaurant (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 7,\\n    \\\"date\\\": \\\"2024-06-18\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Museum of Modern Art of Algiers, showcasing contemporary Algerian art\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"11:00 AM\\\",\\n        \\\"activity\\\": \\\"Stroll along the waterfront promenade, enjoying the sea views and fresh air\\\",\\n        \\\"budget\\\": \\\"$0\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"01:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a seafood restaurant along the waterfront (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Enjoy some free time for relaxation or last-minute shopping\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Farewell dinner at a restaurant with traditional Algerian cuisine (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 8,\\n    \\\"date\\\": \\\"2024-06-19\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Check out of hotel\\\",\\n        \\\"budget\\\": \\\"$0\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"11:00 AM\\\",\\n        \\\"activity\\\": \\\"Transfer to Algiers airport for departure\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      }\\n    ]\\n  }\\n]\"', NULL, '2024-06-18 23:44:01', '2024-06-18 23:44:30'),
(4, 1, 'dsfsdf', 18, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', NULL, NULL, '2024-06-19 00:20:03', '2024-06-19 00:20:03'),
(5, 1, 'dsfsdf', 18, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', NULL, NULL, '2024-06-19 00:20:48', '2024-06-19 00:20:48'),
(6, 1, 'dsfsdf', 18, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', NULL, NULL, '2024-06-19 00:21:24', '2024-06-19 00:21:24'),
(7, 1, 'dsfsdf', 18, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', NULL, NULL, '2024-06-19 00:25:16', '2024-06-19 00:25:16'),
(8, 1, 'dsfsdf', 18, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', NULL, NULL, '2024-06-19 00:26:22', '2024-06-19 00:26:22'),
(9, 1, 'sadsad', 8, 5777.00, 'start', NULL, '2024-06-15', '2024-06-18', NULL, NULL, '2024-06-19 00:27:37', '2024-06-19 00:27:37'),
(10, 1, 'sadsad', 8, 5777.00, 'start', NULL, '2024-06-15', '2024-06-18', NULL, NULL, '2024-06-19 00:29:31', '2024-06-19 00:29:31'),
(11, 1, 'sadsad', 8, 5777.00, 'start', NULL, '2024-06-15', '2024-06-18', NULL, NULL, '2024-06-19 00:31:20', '2024-06-19 00:31:20'),
(12, 1, 'sadsad', 8, 5777.00, 'start', NULL, '2024-06-15', '2024-06-18', '\"[\\n  {\\n    \\\"day\\\": 1,\\n    \\\"date\\\": \\\"2024-06-15\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Arrival in Yaound\\u00e9\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Check-in at hotel\\\",\\n        \\\"budget\\\": \\\"$100\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at local restaurant (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the National Museum of Cameroon\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"05:00 PM\\\",\\n        \\\"activity\\\": \\\"Explore the Mfoundi Market\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 2,\\n    \\\"date\\\": \\\"2024-06-16\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Day trip to Kribi\\\",\\n        \\\"budget\\\": \\\"$100\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"11:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Lobe Waterfalls\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"01:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at local restaurant (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Relax on Kribi Beach\\\",\\n        \\\"budget\\\": \\\"$0\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Return to Yaound\\u00e9\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 3,\\n    \\\"date\\\": \\\"2024-06-17\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"08:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Limbe Wildlife Centre\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Hike to Mount Cameroon\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"01:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at local restaurant (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Limbe Botanical Garden\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"05:00 PM\\\",\\n        \\\"activity\\\": \\\"Farewell dinner at local restaurant (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 4,\\n    \\\"date\\\": \\\"2024-06-18\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Departure from Yaound\\u00e9\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      }\\n    ]\\n  }\\n]\"', NULL, '2024-06-19 00:32:46', '2024-06-19 00:33:00'),
(13, 1, 'sadasd', 17, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', NULL, NULL, '2024-06-19 10:32:06', '2024-06-19 10:32:06'),
(14, 1, 'sadasd', 17, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', NULL, NULL, '2024-06-19 10:35:48', '2024-06-19 10:35:48'),
(15, 1, 'sadasd', 17, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', '\"[\\n  {\\n    \\\"day\\\": 1,\\n    \\\"date\\\": \\\"2024-06-20\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Arrival in Asmara, Eritrea\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Check-in at Hotel Asmara Palace\\\",\\n        \\\"budget\\\": \\\"$100\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the National Museum of Eritrea\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at Ristorante Pizzeria Paradiso (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 2,\\n    \\\"date\\\": \\\"2024-06-21\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Explore the ruins of Qohaito\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"01:00 PM\\\",\\n        \\\"activity\\\": \\\"Hike to the summit of Mount Emba Soira\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at the Asmara Venus Restaurant (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 3,\\n    \\\"date\\\": \\\"2024-06-22\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"08:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Dahlak Archipelago National Park\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Snorkeling and diving in the Red Sea\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at the Dahlak Hotel (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 4,\\n    \\\"date\\\": \\\"2024-06-23\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Keren War Cemetery\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"01:00 PM\\\",\\n        \\\"activity\\\": \\\"Explore the ancient city of Axum\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at Axum Hotel (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 5,\\n    \\\"date\\\": \\\"2024-06-24\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Departure from Asmara\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      }\\n    ]\\n  }\\n]\"', NULL, '2024-06-19 10:37:47', '2024-06-19 10:38:02'),
(16, 1, 'sddsd', 24, 2000.00, 'start', NULL, '2024-06-20', '2024-06-24', '\"[\\n  {\\n    \\\"day\\\": 1,\\n    \\\"date\\\": \\\"2024-06-20\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Arrival in Bissau\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Check-in at hotel\\\",\\n        \\\"budget\\\": \\\"$100\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit Bissau War Memorial\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 2,\\n    \\\"date\\\": \\\"2024-06-21\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Day trip to the Bijagos Archipelago\\\",\\n        \\\"budget\\\": \\\"$150\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at local restaurant (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 3,\\n    \\\"date\\\": \\\"2024-06-22\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the National Museum of Guinea-Bissau\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Explore the local markets\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 4,\\n    \\\"date\\\": \\\"2024-06-23\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"08:00 AM\\\",\\n        \\\"activity\\\": \\\"Go for a walk or run along the beach\\\",\\n        \\\"budget\\\": \\\"$0\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the local fishing village\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 5,\\n    \\\"date\\\": \\\"2024-06-24\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Departure from Bissau\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      }\\n    ]\\n  }\\n]\"', NULL, '2024-06-19 12:28:09', '2024-06-19 12:28:25'),
(17, 1, 'sfsd', 9, 3000.00, 'start', NULL, '2024-06-18', '2024-06-22', '\"[\\n  {\\n    \\\"day\\\": 1,\\n    \\\"date\\\": \\\"2024-06-18\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Arrival in Bangui M\'Poko International Airport (BGF)\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"11:00 AM\\\",\\n        \\\"activity\\\": \\\"Transfer to hotel in Bangui\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Check-in at hotel\\\",\\n        \\\"budget\\\": \\\"$100\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Mus\\u00e9e National de Centrafrique (National Museum of the Central African Republic)\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"04:00 PM\\\",\\n        \\\"activity\\\": \\\"Explore the Central Market of Bangui\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at local restaurant (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 2,\\n    \\\"date\\\": \\\"2024-06-19\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"08:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Presidential Palace\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Hike to the top of Mount Ngaoui\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Picnic lunch at the top of Mount Ngaoui (pack your own peanut-free lunch)\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Chutes de Boali (Boali Waterfalls)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"05:00 PM\\\",\\n        \\\"activity\\\": \\\"Return to hotel\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at local restaurant (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 3,\\n    \\\"date\\\": \\\"2024-06-20\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"08:00 AM\\\",\\n        \\\"activity\\\": \\\"Visit the Mus\\u00e9e de Boganda (Boganda Museum)\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Take a boat trip on the Ubangi River\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a floating restaurant on the Ubangi River (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Village Artisanal (Craft Village)\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"04:00 PM\\\",\\n        \\\"activity\\\": \\\"Go for a walk in the Bangui Zoo\\\",\\n        \\\"budget\\\": \\\"$10\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Farewell dinner at local restaurant (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 4,\\n    \\\"date\\\": \\\"2024-06-21\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Departure from Bangui M\'Poko International Airport (BGF)\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      }\\n    ]\\n  }\\n]\"', NULL, '2024-06-19 12:29:37', '2024-06-19 12:29:58'),
(18, 1, 'ADAS', 7, 3000.00, 'start', NULL, '2024-06-20', '2024-06-24', '\"[\\n  {\\n    \\\"day\\\": 1,\\n    \\\"date\\\": \\\"2024-06-20\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Arrival at Am\\u00edlcar Cabral International Airport (SID)\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Check-in at Hotel O\\u00e1sis Atl\\u00e2ntico Praiamar (peanut-free breakfast included)\\\",\\n        \\\"budget\\\": \\\"$100\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"03:00 PM\\\",\\n        \\\"activity\\\": \\\"Afternoon spent exploring the local markets and shops\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at Restaurante Grelhados (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$30\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 2,\\n    \\\"date\\\": \\\"2024-06-21\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"09:00 AM\\\",\\n        \\\"activity\\\": \\\"Morning hike to the top of Monte Verde for panoramic views of the island\\\",\\n        \\\"budget\\\": \\\"$20\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a local restaurant with traditional Cape Verdean cuisine (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Museu Etnogr\\u00e1fico da Praia to learn about the history and culture of Cape Verde\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"05:00 PM\\\",\\n        \\\"activity\\\": \\\"Relax on the beach at Praia de Gamboa\\\",\\n        \\\"budget\\\": \\\"$0\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at a beachfront restaurant (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 3,\\n    \\\"date\\\": \\\"2024-06-22\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"08:00 AM\\\",\\n        \\\"activity\\\": \\\"Day trip to the island of Sal, known for its salt flats and crystal-clear waters\\\",\\n        \\\"budget\\\": \\\"$75\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a local restaurant on Sal island (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Afternoon spent snorkeling or diving in the warm waters of Sal\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"06:00 PM\\\",\\n        \\\"activity\\\": \\\"Return to Praia and enjoy the sunset at Praia de Quebra Canela\\\",\\n        \\\"budget\\\": \\\"$0\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:30 PM\\\",\\n        \\\"activity\\\": \\\"Dinner at a restaurant with live music (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 4,\\n    \\\"date\\\": \\\"2024-06-23\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Morning spent shopping for souvenirs and local crafts at the Mercado Municipal\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"12:00 PM\\\",\\n        \\\"activity\\\": \\\"Lunch at a local restaurant serving traditional Cape Verdean dishes (peanut-free options)\\\",\\n        \\\"budget\\\": \\\"$25\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"02:00 PM\\\",\\n        \\\"activity\\\": \\\"Visit the Fortaleza Real de S\\u00e3o Filipe, a 16th-century fortress with historical significance\\\",\\n        \\\"budget\\\": \\\"$15\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"04:00 PM\\\",\\n        \\\"activity\\\": \\\"Take a cooking class and learn to prepare local Cape Verdean cuisine (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      },\\n      {\\n        \\\"time\\\": \\\"07:00 PM\\\",\\n        \\\"activity\\\": \\\"Farewell dinner at a restaurant with a traditional Cape Verdean ambiance (peanut-free options available)\\\",\\n        \\\"budget\\\": \\\"$40\\\"\\n      }\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 5,\\n    \\\"date\\\": \\\"2024-06-24\\\",\\n    \\\"activities\\\": [\\n      {\\n        \\\"time\\\": \\\"10:00 AM\\\",\\n        \\\"activity\\\": \\\"Departure from Am\\u00edlcar Cabral International Airport (SID)\\\",\\n        \\\"budget\\\": \\\"$50\\\"\\n      }\\n    ]\\n  }\\n]\"', NULL, '2024-06-19 12:33:49', '2024-06-19 12:34:10'),
(19, 1, 'Trip to lagos', 40, 200.00, 'start', 'I will be going to lagos, at Plot 9, Gbagada Industrial Scheme, beside UPS, Gbagada-Oworonshoki Expressway, Lagos. for an event that will be from 5th of july to 6th. i don\'t know about lagos, so i want you to plan a trip for me and add accomodations for hotels closests to the event center.', '2024-07-05', '2024-07-07', '\"[\\n  {\\n    \\\"day\\\": 1,\\n    \\\"date\\\": \\\"2024-07-05\\\",\\n    \\\"activities\\\": [\\n      {\\\"time\\\": \\\"08:00 AM\\\", \\\"activity\\\": \\\"Arrival at Murtala Muhammed International Airport (LOS)\\\", \\\"budget\\\": \\\"$0\\\"},\\n      {\\\"time\\\": \\\"09:00 AM\\\", \\\"activity\\\": \\\"Taxi to hotel (Golden Tulip Festac)\\\", \\\"budget\\\": \\\"$20\\\"},\\n      {\\\"time\\\": \\\"10:00 AM\\\", \\\"activity\\\": \\\"Check-in at hotel\\\", \\\"budget\\\": \\\"$50\\\"},\\n      {\\\"time\\\": \\\"12:00 PM\\\", \\\"activity\\\": \\\"Lunch at hotel restaurant (peanut-free options available)\\\", \\\"budget\\\": \\\"$20\\\"},\\n      {\\\"time\\\": \\\"02:00 PM\\\", \\\"activity\\\": \\\"Visit National Museum of Nigeria\\\", \\\"budget\\\": \\\"$10\\\"},\\n      {\\\"time\\\": \\\"05:00 PM\\\", \\\"activity\\\": \\\"Attend event at Plot 9, Gbagada Industrial Scheme\\\", \\\"budget\\\": \\\"$0\\\"}\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 2,\\n    \\\"date\\\": \\\"2024-07-06\\\",\\n    \\\"activities\\\": [\\n      {\\\"time\\\": \\\"09:00 AM\\\", \\\"activity\\\": \\\"Breakfast at hotel (peanut-free options available)\\\", \\\"budget\\\": \\\"$15\\\"},\\n      {\\\"time\\\": \\\"10:00 AM\\\", \\\"activity\\\": \\\"Explore Lekki Market\\\", \\\"budget\\\": \\\"$20\\\"},\\n      {\\\"time\\\": \\\"12:00 PM\\\", \\\"activity\\\": \\\"Lunch at local restaurant (peanut-free options available)\\\", \\\"budget\\\": \\\"$25\\\"},\\n      {\\\"time\\\": \\\"02:00 PM\\\", \\\"activity\\\": \\\"Visit Freedom Park\\\", \\\"budget\\\": \\\"$10\\\"},\\n      {\\\"time\\\": \\\"05:00 PM\\\", \\\"activity\\\": \\\"Attend event at Plot 9, Gbagada Industrial Scheme\\\", \\\"budget\\\": \\\"$0\\\"},\\n      {\\\"time\\\": \\\"08:00 PM\\\", \\\"activity\\\": \\\"Dinner at hotel restaurant (peanut-free options available)\\\", \\\"budget\\\": \\\"$30\\\"}\\n    ]\\n  },\\n  {\\n    \\\"day\\\": 3,\\n    \\\"date\\\": \\\"2024-07-07\\\",\\n    \\\"activities\\\": [\\n      {\\\"time\\\": \\\"09:00 AM\\\", \\\"activity\\\": \\\"Breakfast at hotel (peanut-free options available)\\\", \\\"budget\\\": \\\"$15\\\"},\\n      {\\\"time\\\": \\\"10:00 AM\\\", \\\"activity\\\": \\\"Visit Lagos City Hall\\\", \\\"budget\\\": \\\"$10\\\"},\\n      {\\\"time\\\": \\\"12:00 PM\\\", \\\"activity\\\": \\\"Lunch at local restaurant (peanut-free options available)\\\", \\\"budget\\\": \\\"$25\\\"},\\n      {\\\"time\\\": \\\"02:00 PM\\\", \\\"activity\\\": \\\"Shop for souvenirs at Iga Idungaran\\\", \\\"budget\\\": \\\"$50\\\"},\\n      {\\\"time\\\": \\\"05:00 PM\\\", \\\"activity\\\": \\\"Depart from Murtala Muhammed International Airport (LOS)\\\", \\\"budget\\\": \\\"$0\\\"}\\n    ]\\n  }\\n]\"', NULL, '2024-07-03 21:35:44', '2024-07-03 21:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_08_173047_add_column_to_users_table', 1),
(6, '2024_06_09_131554_country', 1),
(7, '2024_06_09_131729_create_itineraries_table', 1),
(8, '2024_06_12_133235_add_column_to_itineraries_table', 1),
(9, '2024_06_13_142843_create_country_images_table', 1),
(10, '2024_06_14_173249_create_country_details_table', 1),
(11, '2024_06_15_153145_create_savings_goals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `savings_goals`
--

CREATE TABLE `savings_goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `itinerary_id` bigint(20) UNSIGNED NOT NULL,
  `goal_amount` decimal(10,2) NOT NULL,
  `saved_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `payment_schedule` varchar(255) DEFAULT NULL,
  `goal_deadline` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `preferences` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`preferences`)),
  `travel_history` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`travel_history`)),
  `allergies` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`allergies`)),
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `ip_address`, `preferences`, `travel_history`, `allergies`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john.doe@example.com', 'user', NULL, '$2y$12$W7XwLTxbT48Y0KgHTNwZxuKHahKNQloG9752yYZkCvr5g4huEwAui', '192.168.1.1', '{\"destination\":\"Kenya\",\"travel_type\":\"Adventure\"}', '{\"visited\":[\"Kenya\",\"Uganda\"]}', '[\"peanuts\"]', NULL, '2024-06-18 23:06:51', '2024-06-18 23:06:51'),
(2, 'Jane Smith', 'jane.smith@example.com', 'user', NULL, '$2y$12$CEUyHnjSDktRJNbZzenU5eJzaTpX86HYjh26Bk4JXyuFIxPoiFvBW', '192.168.1.2', '{\"destination\":\"South Africa\",\"travel_type\":\"Cultural\"}', '{\"visited\":[\"South Africa\",\"Nigeria\"]}', '[\"gluten\"]', NULL, '2024-06-18 23:06:51', '2024-06-18 23:06:51'),
(3, 'Alice Johnson', 'alice.johnson@example.com', 'user', NULL, '$2y$12$WwuY9RM0q.3qAp3MhbWZoevIPB4cSRSuMf/O5L50SznasqwpGic0K', '192.168.1.3', '{\"destination\":\"Tanzania\",\"travel_type\":\"Relaxation\"}', '{\"visited\":[\"Tanzania\",\"Egypt\"]}', '[\"dairy\"]', NULL, '2024-06-18 23:06:52', '2024-06-18 23:06:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_details`
--
ALTER TABLE `country_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_details_country_id_foreign` (`country_id`);

--
-- Indexes for table `country_images`
--
ALTER TABLE `country_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_images_country_id_foreign` (`country_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itineraries_user_id_foreign` (`user_id`),
  ADD KEY `itineraries_destination_foreign` (`destination`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `savings_goals`
--
ALTER TABLE `savings_goals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `savings_goals_user_id_foreign` (`user_id`),
  ADD KEY `savings_goals_itinerary_id_foreign` (`itinerary_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `country_details`
--
ALTER TABLE `country_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `country_images`
--
ALTER TABLE `country_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itineraries`
--
ALTER TABLE `itineraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `savings_goals`
--
ALTER TABLE `savings_goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `country_details`
--
ALTER TABLE `country_details`
  ADD CONSTRAINT `country_details_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `country_images`
--
ALTER TABLE `country_images`
  ADD CONSTRAINT `country_images_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD CONSTRAINT `itineraries_destination_foreign` FOREIGN KEY (`destination`) REFERENCES `country` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `itineraries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `savings_goals`
--
ALTER TABLE `savings_goals`
  ADD CONSTRAINT `savings_goals_itinerary_id_foreign` FOREIGN KEY (`itinerary_id`) REFERENCES `itineraries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `savings_goals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
