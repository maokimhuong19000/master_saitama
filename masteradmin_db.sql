/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100432
 Source Host           : localhost:3306
 Source Schema         : masteradmin_db

 Target Server Type    : MySQL
 Target Server Version : 100432
 File Encoding         : 65001

 Date: 18/07/2024 15:23:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` bigint UNSIGNED NULL DEFAULT NULL,
  `session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `carts_customer_id_index`(`customer_id` ASC) USING BTREE,
  INDEX `carts_product_id_index`(`product_id` ASC) USING BTREE,
  CONSTRAINT `carts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carts
-- ----------------------------
INSERT INTO `carts` VALUES (1, 1, 'session123', 1, 1, '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `carts` VALUES (2, 2, 'session456', 2, 2, '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for checkouts
-- ----------------------------
DROP TABLE IF EXISTS `checkouts`;
CREATE TABLE `checkouts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `payment_method` enum('ABA','ACELEDA','KHQR','DELIVERY','OTHER','') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'OTHER',
  `payment_status` enum('paid','pending') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `shipping_id` bigint UNSIGNED NULL DEFAULT NULL,
  `discount_id` bigint UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `checkouts_order_id_index`(`order_id` ASC) USING BTREE,
  INDEX `checkouts_customer_id_index`(`customer_id` ASC) USING BTREE,
  INDEX `checkouts_shipping_id_index`(`shipping_id` ASC) USING BTREE,
  INDEX `checkouts_discount_id_index`(`discount_id` ASC) USING BTREE,
  CONSTRAINT `checkouts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `checkouts_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `checkouts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `checkouts_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shipping` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of checkouts
-- ----------------------------
INSERT INTO `checkouts` VALUES (1, 1, 1, 'ABA', 'paid', 1, NULL, '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `checkouts` VALUES (2, 2, 2, 'ACELEDA', 'pending', 2, NULL, '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for customer_details
-- ----------------------------
DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE `customer_details`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` bigint UNSIGNED NOT NULL,
  `birthdate` date NULL DEFAULT NULL,
  `gender` enum('Male','Female','Other') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `preferences` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `customer_details_customer_id_foreign`(`customer_id` ASC) USING BTREE,
  CONSTRAINT `customer_details_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customer_details
-- ----------------------------
INSERT INTO `customer_details` VALUES (1, 1, '1990-05-15', 'Male', 'Likes fast delivery', '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `customer_details` VALUES (2, 2, '1985-08-20', 'Female', 'Prefers email notifications', '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES (1, 'John Doe', 'john.doe@example.com', '123456789', '123 Main St, City, Country', '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `customers` VALUES (2, 'Jane Smith', 'jane.smith@example.com', '987654321', '456 Oak Ave, Town, Country', '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for details
-- ----------------------------
DROP TABLE IF EXISTS `details`;
CREATE TABLE `details`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of details
-- ----------------------------
INSERT INTO `details` VALUES (1, 'Size', 'Large', '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `details` VALUES (2, 'Color', 'Red', '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for discounts
-- ----------------------------
DROP TABLE IF EXISTS `discounts`;
CREATE TABLE `discounts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `amount` decimal(10, 2) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of discounts
-- ----------------------------
INSERT INTO `discounts` VALUES (1, 'SUMMER20', 'Summer discount 20%', 20.00, '2024-06-01', '2024-08-31', '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for invoices
-- ----------------------------
DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `invoice_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` decimal(10, 2) NOT NULL,
  `due_date` date NOT NULL,
  `status` enum('unpaid','paid') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `invoices_order_id_index`(`order_id` ASC) USING BTREE,
  INDEX `invoices_customer_id_index`(`customer_id` ASC) USING BTREE,
  CONSTRAINT `invoices_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `invoices_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of invoices
-- ----------------------------
INSERT INTO `invoices` VALUES (1, 1, 1, 'INV2024001', 1500.00, '2024-07-18', 'paid', '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `invoices` VALUES (2, 2, 2, 'INV2024002', 45.00, '2024-07-18', 'unpaid', '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (2, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2024_07_14_065712_create_users_table', 2);
INSERT INTO `migrations` VALUES (4, '2024_07_17_062054_create_products_table', 3);
INSERT INTO `migrations` VALUES (5, '2024_07_17_062101_create_product_details_table', 3);
INSERT INTO `migrations` VALUES (6, '2024_07_17_062222_create_product_categories_table', 3);

-- ----------------------------
-- Table structure for order_details
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10, 2) NOT NULL,
  `subtotal` decimal(10, 2) GENERATED ALWAYS AS (`quantity` * `price`) STORED NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `order_details_order_id_index`(`order_id` ASC) USING BTREE,
  INDEX `order_details_product_id_index`(`product_id` ASC) USING BTREE,
  CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_details
-- ----------------------------
INSERT INTO `order_details` VALUES (1, 1, 1, 1, 1500.00, DEFAULT, '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `order_details` VALUES (2, 2, 2, 2, 50.00, DEFAULT, '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` bigint UNSIGNED NOT NULL,
  `order_date` timestamp NULL DEFAULT NULL,
  `total_amount` decimal(10, 2) NOT NULL,
  `status` enum('pending','processing','completed') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `orders_customer_id_index`(`customer_id` ASC) USING BTREE,
  CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, 1, '2024-07-18 10:48:19', 1500.00, 'completed', '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `orders` VALUES (2, 2, '2024-07-18 10:48:19', 45.00, 'pending', '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for product_categories
-- ----------------------------
DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE `product_categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1004 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_categories
-- ----------------------------
INSERT INTO `product_categories` VALUES (1, 'Medicines', 'Category for various medicines and pharmaceutical products', '2024-07-17 13:43:42', '2024-07-17 13:43:42');
INSERT INTO `product_categories` VALUES (2, 'Healthcare', 'Category for healthcare products and supplements', '2024-07-17 13:43:42', '2024-07-17 13:43:42');
INSERT INTO `product_categories` VALUES (3, 'Personal Care', 'Category for personal care items and hygiene products', '2024-07-17 13:43:42', '2024-07-17 13:43:42');
INSERT INTO `product_categories` VALUES (4, 'Electronics', 'Category for electronic products', '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `product_categories` VALUES (5, 'Clothing', 'Category for clothing products', '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `product_categories` VALUES (6, 'Books', 'Category for books', '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for product_details
-- ----------------------------
DROP TABLE IF EXISTS `product_details`;
CREATE TABLE `product_details`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `barcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `quantity` int NULL DEFAULT NULL,
  `allow_out_of_stock` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `notify_low_stock` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `display_at_storefront` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `standard_shipping` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `express_shipping` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `priority_shipping` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `tax_excluded` decimal(10, 2) NULL DEFAULT NULL,
  `tax_included` decimal(10, 2) NULL DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gallery_urls` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_details_product_id_foreign`(`product_id` ASC) USING BTREE,
  CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1005 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_details
-- ----------------------------
INSERT INTO `product_details` VALUES (1, 1, 'PR-001', '1234567890', 500, '1', '0', '1', '1', '1', '1', 15.99, 19.99, '/images/pain_relief_tablets.jpg', '/images/pain_relief_tablets_gallery', '2024-07-17 13:44:01', '2024-07-17 13:44:01');
INSERT INTO `product_details` VALUES (2, 2, 'VC-001', '0987654321', 300, '1', '1', '1', '1', '1', '1', 12.50, 15.00, '/images/vitamin_c_supplements.jpg', '/images/vitamin_c_supplements_gallery', '2024-07-17 13:44:01', '2024-07-17 13:44:01');
INSERT INTO `product_details` VALUES (3, 3, 'ABS-001', '2468013579', 700, '1', '1', '1', '1', '1', '1', 7.99, 9.99, '/images/antibacterial_hand_soap.jpg', '/images/antibacterial_hand_soap_gallery', '2024-07-17 13:44:01', '2024-07-17 13:44:01');
INSERT INTO `product_details` VALUES (4, 4, 'PR-001', '1234567890', 500, '1', '1', '1', '1', '1', '1', 15.99, 19.99, '/images/pain_relief_tablets.jpg', '/images/pain_relief_tablets_gallery', '2024-07-17 13:44:01', '2024-07-17 13:44:01');
INSERT INTO `product_details` VALUES (5, 5, 'VC-001', '0987654321', 300, '1', '1', '1', '1', '1', '1', 12.50, 15.00, '/images/vitamin_c_supplements.jpg', '/images/vitamin_c_supplements_gallery', '2024-07-17 13:44:01', '2024-07-17 13:44:01');
INSERT INTO `product_details` VALUES (6, 6, 'ABS-001', '2468013579', 700, '1', '1', '0', '1', '1', '1', 7.99, 9.99, '/images/antibacterial_hand_soap.jpg', '/images/antibacterial_hand_soap_gallery', '2024-07-17 13:44:01', '2024-07-17 13:44:01');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` enum('Sale','New Products','Low Stock') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sale',
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL,
  `stock` bigint NULL DEFAULT NULL,
  `image` blob NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `category_id`(`category_id` ASC) USING BTREE,
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1004 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Pain Relief Tablets', 1, 'Effective pain relief tablets for various conditions', 'Sale', 'Admin', '2024-07-17 13:43:52', '2024-07-17 13:43:52', 12.00, 100, NULL);
INSERT INTO `products` VALUES (2, 'Vitamin C Supplements', 2, 'High-quality vitamin C supplements for immune support', 'Low Stock', 'Admin', '2024-07-17 13:43:52', '2024-07-17 13:43:52', 10.00, 120, NULL);
INSERT INTO `products` VALUES (3, 'Antibacterial Hand Soap', 3, 'Gentle antibacterial hand soap for daily use', 'New Products', 'Admin', '2024-07-17 13:43:52', '2024-07-17 13:43:52', 15.00, 130, NULL);
INSERT INTO `products` VALUES (4, 'Pain Relief Tablets', 1, 'Effective pain relief tablets for various conditions', 'Sale', 'Admin', '2024-07-17 13:43:52', '2024-07-17 13:43:52', 12.00, 100, NULL);
INSERT INTO `products` VALUES (5, 'Vitamin C Supplements', 2, 'High-quality vitamin C supplements for immune support', 'Low Stock', 'Admin', '2024-07-17 13:43:52', '2024-07-17 13:43:52', 10.00, 120, NULL);
INSERT INTO `products` VALUES (6, 'Antibacterial Hand Soap', 3, 'Gentle antibacterial hand soap for daily use', 'New Products', 'Admin', '2024-07-17 13:43:52', '2024-07-17 13:43:52', 15.00, 130, NULL);

-- ----------------------------
-- Table structure for shipping
-- ----------------------------
DROP TABLE IF EXISTS `shipping`;
CREATE TABLE `shipping`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tracking_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('shipped','delivered') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `shipping_order_id_index`(`order_id` ASC) USING BTREE,
  CONSTRAINT `shipping_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shipping
-- ----------------------------
INSERT INTO `shipping` VALUES (1, 1, 'Standard', '123 Main St, City, Country', 'ST123456', 'delivered', '2024-07-18 10:48:19', '2024-07-18 10:48:19');
INSERT INTO `shipping` VALUES (2, 2, 'Express', '456 Oak Ave, Town, Country', 'EX987654', 'shipped', '2024-07-18 10:48:19', '2024-07-18 10:48:19');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Huong', 'maokimhuong.office@gmail.com', NULL, '$2y$12$V2FtIIlelGDBh/KPlfBk2.qMh9HSqxQW9i76bK/48j0A5Xw10x48a', NULL, '2024-07-14 07:37:09', '2024-07-14 07:37:09');
INSERT INTO `users` VALUES (2, 'Mao Kim Huong', 'test@gmail.com', NULL, '$2y$12$2DiI8eP3XVSp2qluhkjEb.rC1Zl07qjMRzfR2iVDUBpWmqnw3IVL2', NULL, '2024-07-14 07:41:08', '2024-07-14 07:41:08');
INSERT INTO `users` VALUES (3, 'admin', 'admin@gmail.com', NULL, '$2y$12$8ry6nSWWy.EDQpG7kPCFueizwniP8tjDRhGZOuXdJUs8bD13x2t0q', NULL, '2024-07-14 08:35:58', '2024-07-14 08:35:58');

SET FOREIGN_KEY_CHECKS = 1;
