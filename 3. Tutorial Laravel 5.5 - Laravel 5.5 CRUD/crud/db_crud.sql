-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Feb 2019 pada 14.12
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_02_08_012637_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 'Consequatur minima voluptatem id odio unde exercitationem.', 'Consequatur ex autem hic maiores facilis facilis. Quam ea nihil officiis. Dolore qui sapiente labore consequuntur. Dolores iure vitae nisi nobis natus tempore aliquid quas. Animi voluptatem non quas. Modi magni quia ut. Explicabo hic mollitia molestias et pariatur et magni. Iure tenetur rem quisquam omnis. Quis officia eum iure nesciunt optio ipsa qui minima. Vitae in eum suscipit blanditiis est suscipit sed. Consequuntur ut similique similique et inventore qui. Dolores occaecati voluptates debitis necessitatibus nam eius totam. Harum et cumque non officia sit ad. Quia dolorem aut vitae error necessitatibus aut in. Id quae fuga quis. Alias commodi sint dolores vitae voluptatem. Et repellendus at corrupti cumque quis consequatur. Excepturi tenetur ut illo sapiente itaque nulla. Repellat debitis reprehenderit ab tempora qui ex fugiat. Quis nulla provident molestiae expedita fugiat.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(3, 'Voluptatem molestiae et sit sequi id quasi autem labore blanditiis numquam.', 'Est sed voluptates totam et facilis reprehenderit. Molestiae in perferendis ea. Delectus saepe minima id in. Error nihil quasi fuga autem. Saepe facilis dignissimos aut impedit tenetur aliquam. Veniam minus repudiandae vel atque. Consequuntur et deleniti accusamus dolorum fugiat est eos. Consequatur consequatur nulla eum at. Beatae nobis nesciunt non voluptatem nemo enim cupiditate. Nobis eaque aliquam voluptatem est labore. Voluptate id dicta unde porro amet ut ut. Error autem doloremque cumque quo. Alias odio recusandae et provident eligendi praesentium. Aut qui porro mollitia numquam libero architecto. Sit vitae quo quisquam atque et. Rem possimus doloribus exercitationem suscipit dolores repellat vel. Rerum harum eum molestias esse accusantium accusamus culpa. Consequatur non omnis saepe iste placeat. Ipsum temporibus officia quis eos quia dolorum. Iste tempora necessitatibus dolor asperiores doloremque. Aliquam enim sapiente reiciendis quidem quaerat. Ut a qui reiciendis distinctio laborum porro voluptate inventore. Sed alias dolorem qui. Dolore dolorum consequuntur ut nihil. Cum quo doloremque tempora ipsum quam. Est fuga vero provident. Debitis dolorem vitae et eum fugiat non. Consequuntur tempore in eum corporis quo quia rerum et. Culpa at mollitia tenetur sit. Ab molestias dolore itaque dolorum eum voluptatem sunt. Velit et minima ipsum dolores. Voluptas ea numquam debitis qui sit. Et id temporibus et est sit. Nesciunt eveniet ut dolor sit atque corporis molestiae. Sed asperiores quis ea autem ipsam nulla accusantium. Corrupti assumenda quos voluptatem vel corrupti.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(4, 'Ut vitae veritatis et corrupti qui repellendus et dolores.', 'Pariatur excepturi enim aut ea voluptas soluta. Velit qui aut harum. Aut dolor ut et et atque. Reprehenderit ut dolorem molestiae sit eligendi esse eaque. Aut quas voluptates dicta officia ut. Consequatur ut dolores voluptate cupiditate. Quo unde voluptatem sed similique. Nam nulla illum illo eveniet ab ut. Dolore quia quia provident id. Omnis omnis repellendus optio. Quae aut ut quis mollitia tenetur. Fugiat voluptas quo voluptas aspernatur animi numquam ad sint. Est ullam explicabo porro vero illum. A molestiae autem in. Quibusdam unde esse nihil iste aut dolorum non impedit. Doloremque et sunt dolorum libero in. Sunt consectetur fugit aut nulla. Architecto qui doloremque molestiae velit autem sit. Rerum autem autem eius nisi et molestias. Laudantium rerum quia culpa. Voluptas asperiores et aut quasi. Rerum mollitia enim maxime qui earum voluptate odit vero. Atque ducimus aut quia maxime. Doloremque commodi in velit blanditiis quasi corporis. Et id dolore maxime. Rerum aut dolor voluptatem repudiandae quo. Aut deserunt optio mollitia. Quos qui provident sed enim ut. Soluta ipsum sint adipisci esse. Dolore in minima eveniet. Mollitia architecto voluptatem voluptatibus aperiam aut. Expedita eius est maiores. Laboriosam nostrum excepturi non cum inventore hic et voluptas. Voluptatem incidunt at impedit officiis itaque voluptatem. Ut aliquam a explicabo eum nulla alias.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(5, 'Voluptatem quam earum optio unde excepturi non nulla omnis enim animi odio.', 'Harum dolor doloremque a optio labore corporis. Sed aut qui quibusdam sint aspernatur. Voluptas quis dolorum delectus ea voluptatem adipisci voluptas. Iure necessitatibus expedita voluptatibus perferendis repellendus. Quas culpa ea modi optio consectetur dolores dolorum. Et in iste fugiat suscipit. Aut praesentium molestias et odio nisi excepturi et. Sit nihil necessitatibus omnis placeat maiores. Et excepturi excepturi ad accusantium sit sunt quam. Cumque quae consectetur et ut molestiae ut. Et at qui assumenda. Nesciunt deserunt sed non alias explicabo voluptatem non. Provident asperiores eos consequuntur omnis id laudantium suscipit. Non amet repudiandae consequatur reiciendis voluptatum magnam qui. Nemo quasi velit quibusdam aut porro recusandae minima. Quae earum quia rem suscipit tempora perspiciatis. Dolorum reprehenderit quia asperiores qui animi quis optio. Quod rerum corrupti et quod minus consequatur sed corrupti. Dolorem hic dolor voluptas rerum aut molestias. Minus labore consequatur consectetur. Aut sed pariatur eligendi architecto dolorem veritatis ducimus doloribus. Ut laborum accusamus in et velit enim similique nihil. Et at repellat quo libero modi id pariatur. At molestias aut quia qui ut ea. In molestias distinctio earum delectus. Atque saepe nulla ducimus vel. Et nihil iusto et aut aliquid. Necessitatibus cupiditate incidunt reiciendis perspiciatis. Veritatis autem perspiciatis totam. Repellat voluptatem quibusdam esse incidunt. Ipsa autem veniam atque cupiditate et cum reprehenderit facere. Delectus est dignissimos deserunt harum consequatur voluptatem. Qui alias nesciunt sit. Nam quia dolor natus ea quibusdam beatae nobis. Voluptatibus commodi veniam praesentium quasi veniam ea. Tempore et sit quis adipisci officia et.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(6, 'Quam quia nisi hic odit ut nobis assumenda voluptates.', 'Quod qui facilis unde dolores incidunt voluptatibus non. Temporibus eos natus sed. Et quia molestiae consequuntur rerum a at vitae maiores. Esse illo aperiam dolorem consequatur. Aut atque ipsam architecto amet assumenda. Alias aliquid eos dolorem et in aut. Rem eius animi odit omnis rem illum. Quos repellat necessitatibus quis quis eum. Libero quia quaerat quibusdam quasi repellendus. Aut blanditiis blanditiis veritatis voluptatem provident occaecati. Est quisquam dolores voluptas est. Voluptatibus quis consequuntur nemo quia quia quas fugit. Sed voluptatem iusto vitae iusto dicta qui corporis. Sunt dolor est quas aspernatur facilis sit aperiam. Quia eaque veniam accusantium est ut. Voluptatem fugit et nobis ratione explicabo nulla ut. Et laborum veritatis optio consequuntur beatae. Laboriosam quo saepe inventore id adipisci et sit. Mollitia voluptatum sed omnis eligendi cum animi magnam.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(7, 'Et non perspiciatis voluptates a quos reprehenderit quia eum temporibus a veniam et.', 'In aperiam et voluptate officiis aut ut sunt. Deserunt aut maxime debitis rem deleniti quo sit ratione. Quam iure dolor provident eveniet eius hic quia consequatur. Totam repellat quasi rerum qui nesciunt. Iusto repellat sunt quisquam ut sequi nihil qui. Blanditiis corporis neque dolorum adipisci voluptatibus a repellat. Dolorem hic facilis voluptas deserunt blanditiis ducimus debitis. Reiciendis provident cum et fugit minus. Et earum et sit repellat repellendus voluptate itaque blanditiis. Vero et earum ratione iusto. Alias a et sunt nemo excepturi ad et est. Impedit voluptas aliquid molestiae maxime omnis voluptas a et. Voluptas tempore sed consectetur dolore officiis. Dolores praesentium neque iste corporis incidunt harum. In odio molestias ab nemo. Praesentium reiciendis est porro placeat ullam alias et quo. At qui sit corporis quo perspiciatis quia et. Velit quam occaecati optio et delectus ea blanditiis. Laborum omnis ex doloribus. Est est vel omnis veritatis omnis dolorem. Itaque consequatur vel omnis odio dolores quae modi. Sed id aspernatur deserunt quia consequatur voluptatem aut. Non pariatur perferendis facere aut qui. Ducimus inventore occaecati fugiat quidem similique. Et autem quae et recusandae vel. Inventore ut atque qui rerum aut. Assumenda tenetur dolor tempora minima error maiores maxime saepe. Nihil enim sint atque omnis quo optio veniam. Provident facilis facere reiciendis molestias sapiente. Reprehenderit fuga ut illo est iste. Commodi rem id enim tempore. Exercitationem illo dolorem amet ullam ex. Suscipit magni quas unde.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(8, 'Qui explicabo architecto minus officiis dignissimos saepe nulla asperiores.', 'Optio est facere voluptatem animi impedit laboriosam veritatis explicabo. Distinctio recusandae eum excepturi ea est. Officia exercitationem tenetur consequatur porro. Sunt ea in numquam sint consequatur. Consequatur officiis et qui a. Iure tempore voluptatum rerum quos. Aut et consequuntur numquam non eos. Aut et eum sint ut voluptas. Qui est voluptatem et sed praesentium ut. Voluptatem tenetur error dolor itaque cum. Non est deserunt architecto asperiores voluptatibus distinctio ea sit. Est molestiae sequi perspiciatis rerum quidem occaecati. Eveniet totam velit autem voluptatem. Quisquam minima iure nobis illo et repudiandae. Voluptatem eum asperiores veniam aut sed. Et vel est dolor sint adipisci. Occaecati facilis placeat quisquam et sint corrupti. Quia aperiam earum temporibus. Est laboriosam enim necessitatibus laudantium sed quod odio. Id labore reiciendis assumenda et a magni. Quia quidem culpa et non dolorem. Et alias mollitia illum corrupti. Quia neque quo modi ea cumque inventore. Et dolores ab aperiam incidunt eum. Reprehenderit quasi harum quasi reprehenderit ea. Facilis ipsam quos optio reiciendis corrupti nemo. In neque voluptates omnis velit ratione. Ea maiores quisquam labore nobis enim soluta. Similique culpa inventore est. Dignissimos voluptatum quae labore rem. Veniam sed labore tempore iste qui quidem. Cumque et eveniet temporibus molestiae laboriosam eos. Distinctio eos necessitatibus aut magni ipsam voluptas. Qui facere voluptatem tempora dolorem. Reiciendis est aliquid necessitatibus placeat. Animi eligendi sint nesciunt illum debitis.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(9, 'Quod molestias fuga eos minus commodi expedita nisi qui voluptatem.', 'Soluta ducimus autem nihil est cupiditate. Quisquam quo iusto consectetur omnis consequuntur fugit. Similique hic voluptatum consectetur reiciendis distinctio dolor. Numquam minima autem ipsa minima quae fugit. Quae quia fugiat recusandae facere corrupti hic. Quod reiciendis velit qui et molestiae. Eligendi accusamus debitis quos qui enim et. Minus voluptas dolore distinctio quia quaerat aperiam et sit. Repellat praesentium magni itaque. Sit soluta dolor enim omnis in numquam. Velit ea cumque provident corporis quam. Quidem explicabo rerum doloremque dolorem. Debitis voluptas nemo expedita qui. Eos vitae nostrum nihil officiis ipsam quia ipsum accusamus. Suscipit ut distinctio sed ullam. Distinctio eveniet voluptatum tenetur ut sint necessitatibus repellat. Aut provident perspiciatis illo autem. Et quaerat sed voluptas id officiis sunt. Incidunt ut blanditiis corporis in. A ut impedit maxime magni minima ut dolorum. Dolorem et minima praesentium. Sint nihil suscipit facilis sit officiis aut atque atque. Voluptas libero accusantium quis rerum sit. Et facilis id cupiditate tenetur voluptatem. Est a sit expedita deleniti in sit fugiat culpa. Est voluptas minus architecto voluptas rerum cumque quia at. Dolor consequuntur eveniet recusandae possimus excepturi est dolorem. A autem laborum qui dolor. Impedit impedit nostrum aut sed labore accusamus dolores. Nobis est quas nihil. Illum sint dolor illum delectus. Esse eos dolorem soluta consequuntur vel labore et voluptatum. Asperiores repellat illum corrupti porro ducimus magnam. Consequatur alias non ipsa nobis est sequi inventore. Ut magni optio recusandae quam voluptas libero ad. Vero qui rerum quo sed et modi voluptatum. Quaerat deleniti consequatur alias. Suscipit natus maiores amet similique sunt. Doloribus neque quo fuga aspernatur harum laboriosam numquam. Iste sequi suscipit iste vel autem in magnam. Nisi voluptas laborum aperiam ea exercitationem.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(10, 'Velit debitis ex quasi magni corrupti eligendi facilis nemo quis non iure.', 'Exercitationem quis neque omnis minus. Ab fugiat mollitia sunt. Minima architecto assumenda quia voluptate sunt et magni itaque. Ea amet aperiam nisi sed impedit. Eligendi voluptatem ea placeat. Consequatur totam fuga natus tempore eos porro expedita. Illum quia impedit quo ducimus. Aliquam necessitatibus nemo error dolores eos laborum. Velit sequi dolor tempore beatae. Culpa repudiandae maiores maiores eligendi eos eos. Porro similique assumenda tenetur. Beatae saepe in similique labore porro saepe non. Maxime iusto ex in sit. A qui qui fugiat mollitia non corrupti. Maiores qui sed sapiente rerum officiis est. Ut laborum dignissimos molestiae libero sapiente id aut. Qui debitis ipsam ipsam quod in voluptatem. Molestias consequatur dolor est ut. Et debitis vero et aut ipsum. Facilis in sint accusamus voluptas facere. Voluptatem rem maxime aut officia.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(11, 'Eum fuga ab possimus alias voluptatem nesciunt consequatur nihil aliquid dolor in voluptatem voluptas.', 'Voluptatem saepe autem tempore occaecati voluptatum. Et facilis suscipit et et asperiores est. Mollitia qui veniam odit dolor sunt autem corrupti. Aut nulla dolor aut. Et perspiciatis et rerum quaerat consequatur dolorem ipsam. Sapiente et consequatur est nisi. Dignissimos et velit et deserunt. Ducimus aut corrupti et et at nihil et. Culpa enim aut fuga fuga voluptatum vitae. Repudiandae eius soluta ratione rem ea assumenda sunt. Libero ea et tenetur. Quod est velit expedita. Et voluptatem voluptatem eveniet a. Expedita in nobis est aspernatur. Aliquam aut possimus dicta ut aliquid. Eum doloremque cupiditate ut ex. Ipsum doloremque et sint et distinctio inventore cumque itaque. Voluptates excepturi voluptas sapiente delectus qui. Et porro nostrum pariatur nihil aliquam. Fuga possimus enim tenetur repellat. Fugit est dolores est aut dolore accusantium est. Expedita porro assumenda enim. Voluptatem eum quos et ducimus esse tempora ab. Ut tempore vero dolorem rerum. Eligendi nulla dolorem quibusdam reiciendis ea repudiandae veritatis. Vero deleniti eaque doloremque omnis occaecati. Voluptatibus fugit sit error dolores. Ipsam blanditiis assumenda aut voluptatem. At libero quia modi voluptas. Quia ipsum ullam ut rem omnis. A rerum architecto dolorem qui veritatis. Reprehenderit ipsa aut sunt qui voluptatem. Dolore veritatis sapiente possimus consequatur. Nostrum hic quos cumque recusandae quibusdam quo. Omnis sapiente accusamus commodi dicta. Voluptate ipsum sit iure optio consectetur. Vel voluptatem qui nihil repellendus ut cupiditate. Eligendi et molestias ut omnis assumenda iusto beatae maxime. Doloremque nihil ab dicta provident omnis sint consequatur.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(12, 'Aspernatur ut voluptatibus possimus vero corrupti facilis ea qui.', 'Impedit corporis consequatur qui dolore. Voluptas quia provident qui eaque veniam. Perferendis officiis sit veritatis ab et et et deleniti. Est rerum reprehenderit tempore enim. Est ea accusantium dicta voluptas atque repellendus praesentium voluptates. Assumenda dolores temporibus natus eaque. Amet autem laborum odit possimus. Minus id quidem quod exercitationem qui at. Maxime voluptas similique quam voluptatem similique. Et molestiae fuga qui ut nemo. Quae est distinctio nam vel maxime minus libero sit. Sed non quo ipsum temporibus. Quibusdam quis commodi et dolorem corporis doloremque. Laborum nam reprehenderit et animi ipsam consectetur in quisquam. Ea velit vero amet ut ipsam. Officiis et quibusdam asperiores. Molestiae voluptates et quod recusandae quaerat quis eos in. Architecto architecto exercitationem harum error. Unde sed molestiae excepturi alias ullam. Placeat aut velit tempore hic nam. Atque vero rerum sint sunt voluptatem non aspernatur. Architecto aperiam aut velit optio. Tempora deserunt tempora laborum voluptate. Possimus pariatur nobis voluptatem error. Quo labore ut et neque. Autem in et esse aut maiores. Temporibus quis maxime et. Qui beatae corrupti reiciendis eum. Molestiae voluptas dolor sit. Hic est doloremque quod tenetur ratione fuga. Perferendis quae hic ipsam quis natus voluptatum molestiae. Et nisi nobis perspiciatis error assumenda cum. Officia at excepturi voluptates ut eveniet autem. Reiciendis unde qui mollitia consectetur veniam nisi. Accusamus nam praesentium nulla id ut. Atque nisi itaque eius vel quis voluptatibus. Dolorem reprehenderit rem beatae rerum est amet. Voluptatum et quae et sequi minus. Nihil enim voluptates illo asperiores sit aut dolor.', '2019-02-07 19:09:48', '2019-02-07 19:09:48'),
(13, 'Nihil vitae corporis distinctio nesciunt tempore aut nulla.', 'Dicta in sunt rerum fugit quisquam earum omnis. Quia fugit culpa ab eos unde. Rerum nemo impedit quia ad consequuntur. Sunt adipisci sapiente aut quisquam non dolore. Cum inventore voluptas beatae mollitia vitae fugiat et expedita. Ut voluptatem et ut et qui praesentium. Id quia consequatur maxime debitis. Qui quis qui alias non voluptates ut a. Omnis officiis blanditiis sit odio omnis repellendus. Debitis blanditiis est velit animi. Explicabo et autem illum odit et alias et qui. Omnis rerum rem porro. Neque consequatur omnis dolor praesentium deleniti. Eos est et debitis. Sunt consequatur quia laudantium amet. Similique et unde laudantium. Aliquid minima ab reiciendis voluptas qui autem asperiores aperiam. Temporibus tempore labore unde occaecati voluptatibus enim omnis. Hic et corporis quae ipsa aspernatur odio nobis. Id consequatur et et fugit. Quo magni architecto enim omnis. Qui enim et sint est cum quia. Aut dicta animi aliquid ut est hic voluptas eius. Et quam possimus similique vel aliquam asperiores animi molestias. Earum est id impedit corporis eum. Labore nihil repudiandae vero harum. Sit eos corrupti totam aperiam quae consequatur praesentium atque. Dolores porro inventore dignissimos saepe sed. Laudantium voluptas molestiae et est.', '2019-02-07 19:09:49', '2019-02-07 19:09:49'),
(14, 'Consequuntur iusto harum magnam id sit quidem eum rerum odio quod.', 'Eos ut voluptatibus quia similique corrupti nesciunt. Quis quasi asperiores a dolor. Ex ut consectetur repellat saepe et iure cumque. Explicabo ipsum dolor non aut cum expedita. Tenetur ut exercitationem error dolorem nesciunt est occaecati. Consequatur magnam eum omnis est. Nisi nisi modi asperiores provident voluptatem qui repudiandae. Eum et aut deserunt. Minima deserunt quae molestiae dolorem. Beatae illo dignissimos et omnis ex non error ab. Dolore non ut debitis velit. Et eos labore a non quia. Mollitia qui iste ut. Sint atque dolorem non soluta facilis corrupti soluta. Nihil explicabo voluptas molestias neque. Vitae distinctio aliquid quia reprehenderit. Consequatur natus eum qui. Explicabo dolores architecto nemo tempore. Earum at non voluptatibus est ut qui eligendi. Quidem aspernatur debitis dolores doloribus et ipsa atque. Quia tempora tempora eos voluptates blanditiis repellat dolorum. Accusamus velit voluptas ducimus eum accusamus. Distinctio voluptatem ipsam doloremque illo omnis maxime est. Sed eos officia inventore quo facere praesentium. Rerum impedit rerum placeat dolor. Quas fugit expedita illo vitae itaque ea iusto. Sit qui numquam culpa. Enim cum ut esse. Voluptatem atque hic aut natus. Id labore quia facere atque. Repellendus et molestiae aspernatur et minima et.', '2019-02-07 19:09:49', '2019-02-07 19:09:49'),
(15, 'Mollitia aut reiciendis officiis aut qui qui eum esse ut rem qui quisquam.', 'Non vero commodi laborum dolorem qui numquam voluptate. Quaerat inventore voluptates sint neque dolore vel alias explicabo. Odio iure natus suscipit. Non quos iusto est doloribus. Enim fugit id qui id dolor voluptate. Qui consequatur nihil corporis delectus non excepturi commodi architecto. Vel magni ipsam repudiandae corrupti. Laudantium laborum nihil facilis ut quia quibusdam dolores. Sed doloremque omnis repudiandae reiciendis ut corrupti fugit molestias. Occaecati sed blanditiis voluptas aspernatur. Ea ex est rerum qui. Libero quidem unde occaecati tempore qui sint magni. Est distinctio cupiditate nisi quia ut. Quidem tempore consequatur reprehenderit non sunt possimus sit. Occaecati dolor doloremque et ad. Dolor sequi exercitationem quia ut recusandae. Accusamus ullam alias voluptatem eos repudiandae est. Dolorem aspernatur ullam nesciunt voluptate asperiores aut. Perferendis dolor omnis voluptatibus in aut voluptatem. Accusamus qui itaque quod. Consectetur voluptas ipsa a voluptates earum et. Facere accusantium ullam consequatur doloremque ea. Eos ex impedit sed sint eum repudiandae architecto.', '2019-02-07 19:09:49', '2019-02-07 19:09:49'),
(16, 'Tempora molestiae sunt est praesentium dolores dolores sed voluptatibus et adipisci qui.', 'Asperiores similique sit accusantium in est modi illum. Molestiae placeat doloribus consectetur et odio dolore. Quis quis vitae id sed omnis. Quas tempore impedit fuga perferendis. Expedita optio et sit sit odio. Dolorem molestias eveniet dolor quae quia. Quo qui sunt optio ut sunt harum. Et aut pariatur velit culpa veniam minus aut. A consequatur aut saepe accusantium. Quia qui occaecati excepturi quae. Labore labore illo dolor omnis autem eum quis. Enim et qui ut ea aspernatur suscipit perferendis ut. Cum est explicabo qui eos corrupti distinctio. Nulla recusandae vero ipsum sed ut. Ipsam eligendi vero deleniti aut nemo. Sed ut voluptatum neque temporibus qui. Repellat quibusdam blanditiis ut. Quos accusamus minima voluptatem eum vel et nesciunt. Repudiandae sint aut eius tempora. Rerum nostrum earum quo perferendis aut aspernatur. Voluptatum in omnis et. Sed accusamus ut magni voluptatum consequatur pariatur nihil. Non ab similique neque illum est. Ut doloremque earum culpa voluptas alias. Aut delectus omnis facere. Nihil accusamus quibusdam sunt placeat laudantium dignissimos. Sed et accusamus esse id laudantium aut et. Ut dolor harum beatae et voluptatem. Quibusdam et aspernatur consequuntur aut est est est praesentium.', '2019-02-07 19:09:49', '2019-02-07 19:09:49'),
(17, 'Aut aut est nam quam laudantium at dicta.', 'Maiores saepe quod corporis recusandae eveniet nam. Nihil modi nobis nemo et dolores quis fugit. Nihil sint tenetur autem dignissimos. Cumque dolor praesentium velit et nihil sint quo. Quia nisi illum ipsa iusto laudantium deleniti maxime sunt. Eligendi qui accusamus nulla quo magnam labore qui. Enim natus pariatur accusamus ut et. Earum voluptas maiores quam aliquid architecto aspernatur. Veritatis explicabo aut quia atque vero. Ipsum repudiandae et consequatur quam. Aut quaerat explicabo suscipit sed repellendus error quis. Sapiente et sequi quia est. Magni possimus corrupti mollitia qui commodi. Quam dolorum id fugiat sed repellat ut maxime. In et deserunt velit fugiat quam. Laborum consequatur molestiae laborum molestiae. Molestiae voluptate sint incidunt ut vel dolores tempora. Voluptas nulla et ea et. A ut ullam aut dignissimos. Qui nemo amet explicabo sed qui dicta. Adipisci culpa ex consequatur quis nihil nam sunt. Unde occaecati fugit harum dolorem. Atque temporibus recusandae omnis quia id. Id ipsa adipisci temporibus. Id eos quam dolorem dolores libero corporis similique. Consequuntur enim at velit et odit rerum recusandae. Est aut ab sed et. Eligendi occaecati vero sit dicta.', '2019-02-07 19:09:49', '2019-02-07 19:09:49'),
(18, 'Fugiat sed praesentium non enim quisquam nihil dolorem aut aut eius.', 'Nemo qui fuga corporis cum hic. Tenetur voluptatem impedit sapiente ratione cum et. Exercitationem ad sed similique. Eos sequi ut blanditiis ea ut eveniet. Iste cumque possimus aliquam ut quas voluptates sit. Id consectetur qui a culpa voluptate recusandae minima. Veritatis amet vitae dolorum cumque quae. Sit aut vitae nesciunt est aut. Voluptate debitis perspiciatis quia est est. Magni facere et eum provident. Architecto laudantium voluptatem pariatur laudantium corrupti. Voluptatem in soluta quia nulla earum impedit. Eum quam aut impedit et quo et. Inventore temporibus molestiae omnis deserunt iure rem quis. Eum eligendi temporibus delectus. Enim sed ratione sed. Reprehenderit saepe reiciendis molestias placeat. Cupiditate commodi et quia qui quos quis. Culpa aut aliquam consequatur consequatur quaerat. Molestiae animi et sapiente vitae molestias nam aspernatur. Quis quibusdam consequatur omnis in neque. Odio omnis non molestiae quia rerum. Aut et voluptatem eos aut. Nihil suscipit ullam sed autem sunt doloribus vel soluta. Voluptas dolorem officiis voluptatem explicabo quia vel dolor consequatur. Molestiae rerum reiciendis ut. Debitis deleniti quod optio nostrum quis est. Natus consequatur voluptas iure eos est eius sapiente. Vero excepturi rerum molestiae quos perferendis expedita quia minus. At adipisci quibusdam aut sequi. Architecto culpa repellendus aut cumque sed. Et explicabo praesentium suscipit asperiores velit voluptatibus. Temporibus rem et commodi est distinctio aspernatur. Labore voluptatem voluptas voluptatem dolorem error explicabo. Et et ut enim nam facilis et illum ut. Earum accusantium nulla exercitationem qui eum vel.', '2019-02-07 19:09:49', '2019-02-07 19:09:49'),
(19, 'Dolores voluptatum omnis quis veritatis ut sit voluptate distinctio aut ad.', 'Voluptatum ratione qui sapiente quos. Nihil non perferendis inventore dolores. Voluptas et perferendis mollitia possimus. In ut maiores quam blanditiis deleniti et magnam. Ut optio voluptas provident. Tempora fuga quis voluptas ut. Aspernatur quis officia ab assumenda quo. Voluptates pariatur aperiam qui nostrum fugit exercitationem cumque. Corporis aut quo et quibusdam nobis. Necessitatibus asperiores velit cupiditate tempore et. Quae eos minus voluptatem et. Qui qui eum et sit. Voluptates cum ut cum accusantium harum corrupti ut. Deserunt ut enim illum non ducimus doloribus. Saepe qui rerum nemo vitae. Rerum rerum aut aut. Autem sunt eligendi eligendi magnam quo. Qui repellendus dolorem modi aut quia a numquam. Itaque quaerat hic voluptatibus et sunt. Corporis at vitae asperiores animi beatae sed odio. Explicabo placeat qui dicta facilis ut ipsum quia. Aliquid id illo laboriosam cumque ipsum. Sit ut reiciendis ut ea atque iure. Unde laudantium est vel. Enim repudiandae et accusamus et maxime ipsa. Est facere fugit excepturi laborum voluptatem facere. Et est et dolorem quibusdam qui debitis. Rerum labore totam unde voluptatum maxime fuga. Et ut molestias minima voluptate. Id et distinctio ipsam. Facere sed ut quia vero ratione. Incidunt fugiat rerum voluptatem doloribus rerum odit. Eveniet sed culpa ut ut voluptatem. Illum autem rem ipsa incidunt et quam mollitia. Tenetur consectetur quos officia. Fugit inventore voluptatem quidem eveniet quisquam earum vitae.', '2019-02-07 19:09:49', '2019-02-07 19:09:49'),
(20, 'Non sunt doloribus esse molestiae cumque non et quidem dolorem animi.', 'Aut aut molestias aut qui. Quia laboriosam magnam porro ut dolorum. Alias voluptates est optio eius temporibus mollitia. Vero in aspernatur vel placeat quasi adipisci ut. Voluptas et doloremque accusamus architecto. Fugiat placeat consequatur odit quisquam et. Aliquid dolor provident labore autem natus ut qui. Aut soluta aut sequi dolorem voluptas sunt quod. Consequatur et nisi nesciunt aspernatur rerum in quae. Non rerum quaerat aperiam ea sunt repudiandae nulla. Dicta consectetur esse nisi aliquam rerum in beatae. Occaecati dolore dolore molestiae velit aut quaerat praesentium. Animi aut consequatur aut eos est temporibus non. Beatae eum laudantium tempore rerum sapiente quis. Quas aliquid iste iusto nam cum et. Occaecati nostrum sed ipsum culpa et optio. Cupiditate quos consequatur aut quasi vel. Quia error voluptatem dolor quasi dolor et. Blanditiis consequatur qui officiis dolorem doloribus accusantium suscipit. Consequuntur hic commodi aperiam harum. Voluptatem fugit accusamus nisi non debitis dolor. Sit harum aut aut ut. Dolor enim nisi cum voluptatem. Et perferendis quisquam voluptatem fugiat omnis. Quam animi autem impedit repellendus. Occaecati et ut aut. Ea nesciunt quaerat qui doloribus cupiditate nemo. Odit accusantium rem corrupti enim neque et. Ipsa possimus sit cum cumque aliquid. At dignissimos quis minus quos. Repudiandae qui possimus corrupti repellendus ab aut. Numquam consequatur et deserunt aut est qui et. Adipisci consequatur consequatur molestiae qui illum rerum. Voluptatem accusantium atque nobis corrupti. Et mollitia laboriosam et tenetur cum. Rerum a rem quam eum. Autem distinctio reiciendis eum rem. Perspiciatis velit dolorum facere voluptatem ullam exercitationem. Dicta sit non rerum perspiciatis dolores est asperiores. Libero et odio illum dignissimos eaque quo. Consectetur non cupiditate quisquam minima vel illo sint. Ut amet atque optio ipsam vitae dolorum quo. Sed sapiente mollitia et.', '2019-02-07 19:09:49', '2019-02-07 19:09:49'),
(21, 'Judul Post', 'Isi Post', '2019-02-07 20:09:37', '2019-02-07 20:09:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
