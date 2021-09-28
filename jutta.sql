
CREATE TABLE `admins` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
)

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'something@gmail.com', '12345');

CREATE TABLE `categories` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
)

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', '2021-05-25 03:13:31', '2021-05-25 03:13:31'),
(2, 'Women', '2021-05-25 03:13:37', '2021-05-25 03:13:37');

CREATE TABLE `customers` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) 


INSERT INTO `customers` (`id`, `username`, `password`, `created_at`, `update_at`) VALUES
(4, 'something@gmail.com', '123', '2021-09-03 19:40:30', '2021-09-03 19:40:30');


CREATE TABLE `orders` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(20) NOT NULL,
  `pay_method` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
)

CREATE TABLE `products` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(90) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) 


INSERT INTO `products` (`id`, `name`, `price`, `picture`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 'Nike Air Max', 2000, 'uploads/1.png', 1, '2021-09-24 07:30:27', '2021-09-24 07:30:27'),
(9, 'Nike Air Presto', 3000, 'uploads/air-presto.png', 1, '2021-09-24 07:36:12', '2021-09-24 07:36:12'),
(13, 'Nike Blazer Mid 777', 2500, 'uploads/blazer-mid-777.jfif.png', 2, '2021-09-24 07:47:18', '2021-09-24 07:47:18');
