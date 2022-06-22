-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2022 г., 13:33
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `biblioteka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint UNSIGNED NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `products_id` bigint UNSIGNED NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Детективы', '1', 'category/VTVd0TkbxFl73k10pZ1z7IE6UN3mFgRWM5NkQy5R.png', '2022-06-20 14:32:47', '2022-06-20 14:32:47'),
(2, 'Романы', '2', 'category/7G1HWOvRwI633NFVYpuzH2kcgKKxHyMFsDzj41pL.png', '2022-06-20 14:33:01', '2022-06-20 14:33:01'),
(3, 'Комедии', '3', 'category/FoAWvIE1HX19OBd2HwWRP8qeYjTE98KLiJzcXVXD.png', '2022-06-20 14:33:13', '2022-06-20 14:33:13'),
(4, 'Познавательные', '4', 'category/Uuvh1PpcwI6VaxY6gebNRigILSH3yaNYLMAYTH40.png', '2022-06-20 14:33:32', '2022-06-20 14:33:32'),
(5, 'Милодрамма', '5', 'category/sqGeZ3avw4k7VW8QzH9GQQzqFtSvc1T3QJdteYHB.png', '2022-06-20 14:42:55', '2022-06-20 14:42:55'),
(6, 'Приключение', '6', 'category/7OESvoDljwFNGdN2bML7cDCIbvQcgGbm8sDSSUKQ.png', '2022-06-20 14:43:14', '2022-06-20 14:43:14'),
(7, 'Классика', '7', 'category/3KR16Lr7pnciBjH7fimHcbGP3CqE6ZBMGdEXFhWJ.png', '2022-06-20 14:43:48', '2022-06-20 14:43:48'),
(8, 'Старая литература', '8', 'category/ScxtOiN83iE2WX9HHjHu6ewkn8aYSzQuK9PHUiJ3.png', '2022-06-20 14:44:22', '2022-06-20 14:44:22');

-- --------------------------------------------------------

--
-- Структура таблицы `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint UNSIGNED NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `products_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `favourites`
--

INSERT INTO `favourites` (`id`, `users_id`, `products_id`, `created_at`, `updated_at`) VALUES
(13, 1, 1, '2022-06-22 03:04:15', '2022-06-22 03:04:15'),
(15, 2, 1, '2022-06-22 03:05:57', '2022-06-22 03:05:57');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(66, '2014_10_12_000000_create_users_table', 1),
(70, '2022_06_15_175127_create_categories_table', 1),
(71, '2022_06_15_175308_create_products_table', 1),
(74, '2022_06_15_175705_alter_users_table', 1),
(77, '2022_06_15_180108_alter_orders_table', 1),
(79, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(80, '2022_06_15_175441_create_baskets_table', 2),
(81, '2022_06_22_052522_create_favourites_table', 2),
(82, '2022_06_15_175931_create_orders_table', 3),
(83, '2022_06_15_180008_create_order_items_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_sum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `users_id`, `name`, `email`, `phone`, `address`, `count`, `total_sum`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', 'test@ml.ru', 'test', 'test', '3', '5120', 'test', '2022-06-22 01:49:51', '2022-06-22 01:49:51'),
(3, 1, 'Иванов Иван', 'mail@mail.ru', '89999', 'ул. Пупкина д 30', '3', '9000', 'коммент', '2022-06-22 01:53:20', '2022-06-22 01:53:20'),
(4, 2, 'Петров Никоалй', 'test@mail.ru', '899', 'ул. Пушкина д 30', '2', '2800', NULL, '2022-06-22 03:06:27', '2022-06-22 03:06:27');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `count`, `price`, `created_at`, `updated_at`) VALUES
(6, 4, 1, '2', '2800', '2022-06-22 03:06:27', '2022-06-22 03:06:27');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `author` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `subcontent`, `content`, `author`, `slug`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Зверский детектив', 'Очень классный детектив о том что пара человек в звериных обличиях раскрыли тайну', 'Очень классный детектив о том что пара человек в звериных обличиях раскрыли тайну дорогих продуктов которые украли у них.', 'Евгений', '1', 'product/1wXkcZQYXZdbM1VzRWMblnO1sq8op5r5yKx6fgA9.png', '1400', '2022-06-20 14:34:00', '2022-06-20 14:34:00'),
(6, 7, 'Глазами волка', 'Ритм… ритм, ритм, ритм, удар, удар, удар, удар, туум, тууумм, тууууммм, туууууммммм… То чаще, то реже, то звонче, то тише…. Мерцает огонек, и я, завороженный этим ритмом, уже слышу волчий вой, зовущий меня дружелюбно.', 'Ритм… ритм, ритм, ритм, удар, удар, удар, удар, туум, тууумм, тууууммм, туууууммммм… То чаще, то реже, то звонче, то тише…. Мерцает огонек, и я, завороженный этим ритмом, уже слышу волчий вой, зовущий меня дружелюбно. Вижу… Вот он, большой волк на вершине заснеженного холма, а за ним вся стая… И мы уже все вместе несемся по снежной равнине, утопая в снегу. Могучий волк, вожак… обернулся, и его ослепительный яростный взгляд пронизывает все мое естество до последней клеточки и наполняет силой и знанием.', 'Сергей Радченко', '6', 'product/IVNg1DKRKFX2PwaW36GRG4lJ4RlxbMDRRRvp2Zwp.jpg', '2100', '2022-06-21 01:29:51', '2022-06-21 01:32:43'),
(7, 1, 'Сверхъестественное', 'События книги разворачиваются в таймлайне второго сезона, через неделю после событий книги «Ведьмино ущелье».', 'Охотники за призраками и убийцы демонов Дин и Сэм Винчестеры на своем неизменном «Шевроле Импала» приезжают в городок Сидар-Уэллс, штат Аризона. Рядом находится Большой каньон, и это привлекает сюда тысячи туристов. Но что творится здесь в туристическое межсезонье? Какие тайны хранят местные жители? Дин и Сэм знают одно: каждый сорок лет город накрывает волна кровавых убийств. Никакой логики, никакой закономерности — люди гибнут на улицах и у себя дома. Очень немногие из выживших неохотно рассказывают о свирепых индейцах и солдатах в форме давно прошедшей войны… Вот-вот начнется новый сорокалетний цикл, и братья Винчестеры намерены разобраться с тем, что происходит в Сидар-Уэллсе.', 'Джефф Мариотт', '7', 'product/o0yjll1MpMB8r2Pjm4tyRbG4otG1CXD6bt40SYvI.png', '500', '2022-06-22 05:30:45', '2022-06-22 05:30:45'),
(8, 2, 'До встречи с тобой', 'Луиза - девушка без особых амбиций. В 26 лет она все еще живет в родительском доме в маленьком английском городке, встречается с довольно ограниченным Патриком и работает в небольшом кафе. Но кафе закрывается и Луизе срочно нужна работа.', 'Луиза - девушка без особых амбиций. В 26 лет она все еще живет в родительском доме в маленьком английском городке, встречается с довольно ограниченным Патриком и работает в небольшом кафе. Но кафе закрывается и Луизе срочно нужна работа. Уилл Трейнор, бывший бизнес магнат, ловелас и заядлый путешественник, обожающий экстремальные виды спорта, парализован в результате ДТП два года назад. Лизе предлагают большую зарплату за то, что она станет сиделкой и компаньонкой Уилла. Властный, капризный, язвительный и колючий Уилл, испытывая физические и психологические страдания, решительно настроен покончить со столь никчемной жизнью. Но, постепенно, молодые люди, делая навстречу друг другу малые шажки, преображают свою жизнь. Только времена Джейн Эйр и мистера Рочестера давно прошли и на легкий сентиментальный финал рассчитывать не приходится.', 'Джоджо Мойес', '8', 'product/QA6brYVRNxW6q1blS0HWoZgLCIcnW6QuOPUoqLdo.jpg', '600', '2022-06-22 05:33:20', '2022-06-22 05:33:20');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'marat', 'admin@mail.ru', 1, NULL, '$2y$10$q/M1TFToSIsMDjjKvYqJ4.n0lx./vy9ryaRiJqwKPm8GLkvxwo9Km', NULL, '2022-06-20 14:32:12', '2022-06-20 14:32:12'),
(2, 'test1111', 'test@mail.ru', 0, NULL, '$2y$10$hBR6IUuyACb9T8DDkL4Ys.3aN8NymJALaTt7pVuUzpsSN9SGv.W6a', NULL, '2022-06-22 03:04:37', '2022-06-22 03:04:37');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baskets_users_id_foreign` (`users_id`),
  ADD KEY `baskets_products_id_foreign` (`products_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Индексы таблицы `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourites_users_id_foreign` (`users_id`),
  ADD KEY `favourites_products_id_foreign` (`products_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_users_id_foreign` (`users_id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `baskets_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `baskets_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favourites_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
