/*
 Navicat Premium Data Transfer

 Source Server         : nyxz
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : nyxz

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 18/03/2022 14:59:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `permission` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES (1, 0, 1, 'Dashboard', 'fa-bar-chart', '/', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (2, 0, 2, 'Admin', 'fa-tasks', '', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (3, 2, 3, 'Users', 'fa-users', 'auth/users', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (4, 2, 4, 'Roles', 'fa-user', 'auth/roles', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (5, 2, 5, 'Permission', 'fa-ban', 'auth/permissions', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (6, 2, 6, 'Menu', 'fa-bars', 'auth/menu', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (7, 2, 7, 'Operation log', 'fa-history', 'auth/logs', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (8, 0, 0, '网站信息', 'fa-bars', NULL, '*', '2020-08-08 18:37:38', '2020-08-08 18:37:38');
INSERT INTO `admin_menu` VALUES (9, 8, 0, '友情链接', 'fa-bars', 'links', '*', '2020-08-08 18:38:09', '2020-08-08 18:38:09');
INSERT INTO `admin_menu` VALUES (10, 8, 0, '产品信息', 'fa-dedent', 'products', '*', '2020-08-08 18:58:51', '2020-08-08 18:58:51');
INSERT INTO `admin_menu` VALUES (11, 8, 0, '店铺图片', 'fa-bars', 'stores', '*', '2020-08-08 19:21:53', '2020-08-08 19:22:12');
INSERT INTO `admin_menu` VALUES (12, 8, 0, 'Seo设置', 'fa-anchor', 'seo', '*', '2020-08-08 19:33:43', '2020-08-08 19:33:43');
INSERT INTO `admin_menu` VALUES (13, 8, 0, '留言列表', 'fa-briefcase', 'messages', '*', '2020-08-08 21:14:13', '2020-08-08 21:14:34');
INSERT INTO `admin_menu` VALUES (14, 8, 0, '新闻列表', 'fa-commenting-o', 'news', NULL, '2020-08-08 21:52:58', '2020-08-17 18:41:04');

-- ----------------------------
-- Table structure for admin_operation_log
-- ----------------------------
DROP TABLE IF EXISTS `admin_operation_log`;
CREATE TABLE `admin_operation_log`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `admin_operation_log_user_id_index`(`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin_operation_log
-- ----------------------------
INSERT INTO `admin_operation_log` VALUES (1, 1, 'admin', 'GET', '127.0.0.1', '[]', '2022-02-24 17:56:46', '2022-02-24 17:56:46');
INSERT INTO `admin_operation_log` VALUES (2, 1, 'admin/news', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-02-24 17:56:54', '2022-02-24 17:56:54');
INSERT INTO `admin_operation_log` VALUES (3, 1, 'admin/messages', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-02-24 17:56:58', '2022-02-24 17:56:58');
INSERT INTO `admin_operation_log` VALUES (4, 1, 'admin/seo', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-02-24 17:57:00', '2022-02-24 17:57:00');
INSERT INTO `admin_operation_log` VALUES (5, 1, 'admin/stores', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-02-24 17:57:01', '2022-02-24 17:57:01');
INSERT INTO `admin_operation_log` VALUES (6, 1, 'admin/products', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-02-24 17:57:02', '2022-02-24 17:57:02');
INSERT INTO `admin_operation_log` VALUES (7, 1, 'admin/links', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-02-24 17:57:03', '2022-02-24 17:57:03');
INSERT INTO `admin_operation_log` VALUES (8, 1, 'admin/links', 'GET', '127.0.0.1', '[]', '2022-02-25 09:35:30', '2022-02-25 09:35:30');
INSERT INTO `admin_operation_log` VALUES (9, 1, 'admin', 'GET', '127.0.0.1', '[]', '2022-02-26 11:15:47', '2022-02-26 11:15:47');
INSERT INTO `admin_operation_log` VALUES (10, 1, 'admin/messages', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-02-26 11:15:52', '2022-02-26 11:15:52');
INSERT INTO `admin_operation_log` VALUES (11, 1, 'admin/seo', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-02-26 11:15:54', '2022-02-26 11:15:54');
INSERT INTO `admin_operation_log` VALUES (12, 1, 'admin', 'GET', '127.0.0.1', '[]', '2022-03-12 17:43:41', '2022-03-12 17:43:41');
INSERT INTO `admin_operation_log` VALUES (13, 1, 'admin/messages', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-12 17:43:45', '2022-03-12 17:43:45');
INSERT INTO `admin_operation_log` VALUES (14, 1, 'admin/messages', 'GET', '127.0.0.1', '[]', '2022-03-12 17:50:47', '2022-03-12 17:50:47');
INSERT INTO `admin_operation_log` VALUES (15, 1, 'admin/links', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-12 17:50:51', '2022-03-12 17:50:51');
INSERT INTO `admin_operation_log` VALUES (16, 1, 'admin/messages', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-12 17:50:53', '2022-03-12 17:50:53');
INSERT INTO `admin_operation_log` VALUES (17, 1, 'admin/news', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-12 17:50:55', '2022-03-12 17:50:55');
INSERT INTO `admin_operation_log` VALUES (18, 1, 'admin/news', 'GET', '127.0.0.1', '[]', '2022-03-12 17:52:58', '2022-03-12 17:52:58');
INSERT INTO `admin_operation_log` VALUES (19, 1, 'admin/links', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 11:00:24', '2022-03-13 11:00:24');
INSERT INTO `admin_operation_log` VALUES (20, 1, 'admin/_handle_action_', 'POST', '127.0.0.1', '{\"_key\":\"4\",\"_model\":\"App_models_Links\",\"_token\":\"WJOZkoFrpx45BTZaKJUeQdknusDD3oN29WerXa5s\",\"_action\":\"Encore_Admin_Grid_Actions_Delete\",\"_input\":\"true\"}', '2022-03-13 11:00:40', '2022-03-13 11:00:40');
INSERT INTO `admin_operation_log` VALUES (21, 1, 'admin/links', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 11:00:41', '2022-03-13 11:00:41');
INSERT INTO `admin_operation_log` VALUES (22, 1, 'admin/news', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:35:22', '2022-03-13 16:35:22');
INSERT INTO `admin_operation_log` VALUES (23, 1, 'admin/news/1165/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:35:31', '2022-03-13 16:35:31');
INSERT INTO `admin_operation_log` VALUES (24, 1, 'admin/news/1165/edit', 'GET', '127.0.0.1', '[]', '2022-03-13 16:36:02', '2022-03-13 16:36:02');
INSERT INTO `admin_operation_log` VALUES (25, 1, 'admin/news/1165/edit', 'GET', '127.0.0.1', '[]', '2022-03-13 16:56:17', '2022-03-13 16:56:17');
INSERT INTO `admin_operation_log` VALUES (26, 1, 'admin/news', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:56:31', '2022-03-13 16:56:31');
INSERT INTO `admin_operation_log` VALUES (27, 1, 'admin/news/1165/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:56:42', '2022-03-13 16:56:42');
INSERT INTO `admin_operation_log` VALUES (28, 1, 'admin/news', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:56:46', '2022-03-13 16:56:46');
INSERT INTO `admin_operation_log` VALUES (29, 1, 'admin/news/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:56:49', '2022-03-13 16:56:49');
INSERT INTO `admin_operation_log` VALUES (30, 1, 'admin/news', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:57:05', '2022-03-13 16:57:05');
INSERT INTO `admin_operation_log` VALUES (31, 1, 'admin/news/1165/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:57:07', '2022-03-13 16:57:07');
INSERT INTO `admin_operation_log` VALUES (32, 1, 'admin/news/1165', 'PUT', '127.0.0.1', '{\"title\":\"\\u706b\\u9505\\u5e97\\u5e94\\u8be5\\u6709\\u54ea\\u4e9b\\u4fc3\\u9500\\u6280\\u5de7\\uff1f\\u4e00\\u7ad9\\u5f0f\\u5e2e\\u6276\\u65e0\\u540e\\u987e\\u4e4b\\u5fe7\",\"summary\":\"\\u706b\\u9505\\u662f\\u4eba\\u4eec\\u90fd\\u6bd4\\u8f83\\u559c\\u7231\\u5403\\u7684\\u4e00\\u79cd\\u7f8e\\u98df\\uff0c\\u5b83\\u80fd\\u591f\\u66f4\\u597d\\u5730\\u8ba9\\u4eba\\u4eec\\u54c1\\u5c1d\\u5230\\u7f8e\\u98df\\uff0c\\u73b0\\u5728\\u706b\\u9505\\u5e97\\u4f17\\u591a\\u5982\\u4f55\\u5728\\u8fd9\\u4e48\\u591a\\u706b\\u9505\\u5e97\\u4e2d\\u8131\\u5f15\\u800c\\u51fa\\uff0c\\u5438\\u5f15\\u66f4\\u591a\\u987e\\u5ba2\\uff1f\\u706b\\u9505\\u5e97\\u5e94\\u8be5\\u6709\\u54ea\\u4e9b\\u4fc3\\u9500\\u6280\\u5de7\\uff1f\\u4e0b\\u9762\\u6211\\u4eec\\u4e00\\u8d77\\u6765\\u770b\\u4e00\\u4e0b\\u5427\\u3002\",\"keywords\":\"\\u706b\\u9505\\u5e97\\u5e94\\u8be5\\u6709\\u54ea\\u4e9b\\u4fc3\\u9500\\u6280\\u5de7\",\"news_type\":\"\\u6700\\u65b0\\u8d44\\u8baf\",\"content\":\"<p>\\u706b\\u9505\\u662f\\u4eba\\u4eec\\u90fd\\u6bd4\\u8f83\\u559c\\u7231\\u5403\\u7684\\u4e00\\u79cd\\u7f8e\\u98df\\uff0c\\u5b83\\u80fd\\u591f\\u66f4\\u597d\\u5730\\u8ba9\\u4eba\\u4eec\\u54c1\\u5c1d\\u5230\\u7f8e\\u98df\\uff0c\\u73b0\\u5728\\u706b\\u9505\\u5e97\\u4f17\\u591a\\u5982\\u4f55\\u5728\\u8fd9\\u4e48\\u591a\\u706b\\u9505\\u5e97\\u4e2d\\u8131\\u5f15\\u800c\\u51fa\\uff0c\\u5438\\u5f15\\u66f4\\u591a\\u987e\\u5ba2\\uff1f<span style=\\\"font-weight: bold;\\\">\\u706b\\u9505\\u5e97\\u5e94\\u8be5\\u6709\\u54ea\\u4e9b\\u4fc3\\u9500\\u6280\\u5de7<\\/span>\\uff1f\\u4e0b\\u9762\\u6211\\u4eec\\u4e00\\u8d77\\u6765\\u770b\\u4e00\\u4e0b\\u5427\\u3002<br><br><span style=\\\"color: rgb(194, 79, 74);\\\">1\\u3001\\u4f1a\\u5458\\u5236\\u4fc3\\u9500<\\/span><br><br>\\u706b\\u9505\\u5e97\\u5e94\\u8be5\\u6709\\u54ea\\u4e9b\\u4fc3\\u9500\\u6280\\u5de7\\uff1f\\u53ef\\u4ee5\\u8ba9\\u7b2c\\u4e00\\u6b21\\u8fdb\\u5e97\\u7684\\u987e\\u5ba2\\u529e\\u7406\\u4f1a\\u5458\\u5361\\uff0c\\u529e\\u4f1a\\u5458\\u5361\\u5c31\\u4f1a\\u8d60\\u9001\\u793c\\u54c1\\u8fd8\\u4f1a\\u4eab\\u53d7\\u6298\\u6263\\u4f18\\u60e0\\uff0c\\u79ef\\u6512\\u7684\\u79ef\\u5206\\u53ef\\u4ee5\\u5728\\u672c\\u5e97\\u6d88\\u8d39\\u3002<br><br><span style=\\\"color: rgb(194, 79, 74);\\\">2\\u3001\\u4f18\\u60e0\\u5238\\u4fc3\\u9500<\\/span><br><br>\\u9047\\u5230\\u7ade\\u4e89\\u5bf9\\u624b\\u7684\\u4f4e\\u4ef7\\u51fa\\u51fb\\uff0c\\u4e3a\\u4e86\\u4fdd\\u4f4f\\u8001\\u5ba2\\u6237\\uff0c\\u53ef\\u4ee5\\u6d3e\\u6d3e\\u4f18\\u60e0\\u5238\\u3002\\u521a\\u521a\\u5f00\\u4e1a\\uff0c\\u4e3a\\u4e86\\u6269\\u5927\\u5f71\\u54cd\\uff0c\\u53ef\\u4ee5\\u5728\\u5468\\u8fb9\\u5730\\u533a\\u53d1\\u653e\\u793c\\u5238\\u3002\\u4e3a\\u4e86\\u63d0\\u9ad8\\u5ba2\\u6237\\u5fe0\\u8bda\\u5ea6\\uff0c\\u4e5f\\u53ef\\u4ee5\\u7ed9\\u4e88\\u8001\\u5ba2\\u6237\\u9002\\u5f53\\u7684\\u4f18\\u60e0\\u3002<br><br><span style=\\\"color: rgb(194, 79, 74);\\\">3\\u3001\\u793c\\u54c1\\u8d60\\u9001\\u4fc3\\u9500<\\/span><br><br>\\u793c\\u54c1\\u7684\\u8d60\\u9001\\u4e5f\\u5177\\u6709\\u9488\\u5bf9\\u6027\\uff0c\\u4e0d\\u53ef\\u65e0\\u6761\\u4ef6\\u5949\\u9001\\u3002\\u5426\\u5219\\u793c\\u54c1\\u8d60\\u9001\\u5c06\\u5931\\u53bb\\u4ef7\\u503c\\uff0c\\u793c\\u54c1\\u8d60\\u9001\\u4e0d\\u4ec5\\u8981\\u5efa\\u7acb\\u54c1\\u724c\\u7684\\u77e5\\u540d\\u5ea6\\uff0c\\u540c\\u65f6\\u4e5f\\u8981\\u8003\\u8651\\u63d0\\u5347\\u54c1\\u724c\\u7684\\u7f8e\\u8a89\\u5ea6\\uff0c\\u4e0e\\u81ea\\u8eab\\u7684\\u54c1\\u724c\\u5f62\\u8c61\\u7d27\\u7d27\\u8054\\u7cfb\\u8d77\\u6765\\u3002<br><br>\\u706b\\u9505\\u5e97\\u5e94\\u8be5\\u6709\\u54ea\\u4e9b\\u4fc3\\u9500\\u6280\\u5de7\\uff1f\\u638c\\u63e1\\u4e00\\u4e9b\\u4fc3\\u9500\\u624b\\u6bb5\\u80fd\\u6709\\u6548\\u7684\\u63d0\\u9ad8\\u706b\\u9505\\u52a0\\u76df\\u5e97\\u7684\\u5229\\u6da6\\uff0c\\u540c\\u65f6\\u4e5f\\u80fd\\u66f4\\u597d\\u5730\\u5438\\u5f15\\u987e\\u5ba2\\uff0c\\u7559\\u4f4f\\u8001\\u987e\\u5ba2\\u5fc3\\u97f3\\u65b0\\u987e\\u5ba2\\u7684\\u524d\\u6765\\u3002\\u534a\\u57ce\\u5916\\u725b\\u8169\\u706b\\u9505\\u603b\\u90e8\\u63d0\\u4f9b\\u4e00\\u7ad9\\u5f0f\\u5e2e\\u6276\\uff0c\\u8ba9\\u60a8\\u8f7b\\u677e\\u5f00\\u5e97\\uff0c\\u6ca1\\u6709\\u540e\\u987e\\u4e4b\\u5fe7\\u3002<\\/p>\",\"views\":\"671\",\"created_at\":\"2022-03-13 16:57:07\",\"_token\":\"gWz3qagXE7r0lkyD7qG7tKI4hV7EzfYwvbNgh1fy\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/nyxz.local.com\\/admin\\/news\"}', '2022-03-13 16:57:11', '2022-03-13 16:57:11');
INSERT INTO `admin_operation_log` VALUES (33, 1, 'admin/news', 'GET', '127.0.0.1', '[]', '2022-03-13 16:57:11', '2022-03-13 16:57:11');
INSERT INTO `admin_operation_log` VALUES (34, 1, 'admin/news/1165/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:57:15', '2022-03-13 16:57:15');
INSERT INTO `admin_operation_log` VALUES (35, 1, 'admin/messages', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:57:25', '2022-03-13 16:57:25');
INSERT INTO `admin_operation_log` VALUES (36, 1, 'admin/messages', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\",\"_export_\":\"all\"}', '2022-03-13 16:57:27', '2022-03-13 16:57:27');
INSERT INTO `admin_operation_log` VALUES (37, 1, 'admin/links', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2022-03-13 16:57:59', '2022-03-13 16:57:59');

-- ----------------------------
-- Table structure for admin_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_permissions`;
CREATE TABLE `admin_permissions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `http_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admin_permissions_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `admin_permissions_slug_unique`(`slug`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin_permissions
-- ----------------------------
INSERT INTO `admin_permissions` VALUES (1, 'All permission', '*', '', '*', NULL, NULL);
INSERT INTO `admin_permissions` VALUES (2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL);
INSERT INTO `admin_permissions` VALUES (3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL);
INSERT INTO `admin_permissions` VALUES (4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL);
INSERT INTO `admin_permissions` VALUES (5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL);

-- ----------------------------
-- Table structure for admin_role_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_menu`;
CREATE TABLE `admin_role_menu`  (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `admin_role_menu_role_id_menu_id_index`(`role_id`, `menu_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of admin_role_menu
-- ----------------------------
INSERT INTO `admin_role_menu` VALUES (1, 2, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (1, 8, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (1, 9, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (1, 10, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (1, 11, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (1, 12, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (1, 13, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (1, 14, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (3, 12, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (3, 14, NULL, NULL);
INSERT INTO `admin_role_menu` VALUES (3, 8, NULL, NULL);

-- ----------------------------
-- Table structure for admin_role_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_permissions`;
CREATE TABLE `admin_role_permissions`  (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `admin_role_permissions_role_id_permission_id_index`(`role_id`, `permission_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of admin_role_permissions
-- ----------------------------
INSERT INTO `admin_role_permissions` VALUES (1, 1, NULL, NULL);

-- ----------------------------
-- Table structure for admin_role_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_users`;
CREATE TABLE `admin_role_users`  (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `admin_role_users_role_id_user_id_index`(`role_id`, `user_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of admin_role_users
-- ----------------------------
INSERT INTO `admin_role_users` VALUES (1, 1, NULL, NULL);
INSERT INTO `admin_role_users` VALUES (3, 3, NULL, NULL);

-- ----------------------------
-- Table structure for admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE `admin_roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admin_roles_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `admin_roles_slug_unique`(`slug`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin_roles
-- ----------------------------
INSERT INTO `admin_roles` VALUES (1, 'Administrator', 'administrator', '2020-08-07 22:42:03', '2020-08-07 22:42:03');
INSERT INTO `admin_roles` VALUES (3, '运营管理员', 'operation', '2020-08-17 18:47:53', '2020-08-17 18:47:53');

-- ----------------------------
-- Table structure for admin_user_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_user_permissions`;
CREATE TABLE `admin_user_permissions`  (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `admin_user_permissions_user_id_permission_id_index`(`user_id`, `permission_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of admin_user_permissions
-- ----------------------------
INSERT INTO `admin_user_permissions` VALUES (3, 7, NULL, NULL);
INSERT INTO `admin_user_permissions` VALUES (3, 1, NULL, NULL);

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admin_users_username_unique`(`username`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES (1, 'admin', '$2y$10$W88NppWuW46wQ.m0BUMDJeH7EJha8Br05n0cnMVjz2aYwzVGYaVZG', 'Administrator', NULL, 'jzyBNwPgVoCQ0AtafUCPzMEnsuCGntkSbaMjANYtF5Mf53lOcIxjXtoJO4nn', '2020-08-07 22:42:03', '2020-08-07 22:42:03');
INSERT INTO `admin_users` VALUES (3, '运营管理员', '$2y$10$Q6ROSR2BzlTV0eVQ2vNLIegp0ER5LvtqNFyY/Ox8PJJZwcOpG8Dii', '运营管理员', NULL, 'LTh6dUzM3bZ7HUnWZzTd5piqNlHgKeKMR3tBNAQWQwaK3AQJyQpQTfAN0y7Z', '2020-08-17 18:50:24', '2020-08-17 18:50:24');

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `target` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sort` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `delete_time` int(11) NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES (21, NULL, 'http://www.hz-dsqy.com/', '999', '德胜企业管理有限公司', 1551690530, '2020-08-09', '2020-08-09');
INSERT INTO `link` VALUES (22, NULL, 'http://www.nanchaoxian.cn/sitemap.html', NULL, '网站地图', 1551841334, NULL, NULL);
INSERT INTO `link` VALUES (26, NULL, 'http://www.yskaorou.com', '9', '原时烤肉', NULL, NULL, NULL);
INSERT INTO `link` VALUES (27, NULL, 'http://www.mangguoriji.cn', '9', '芒果日记', NULL, '2020-08-09', '2020-08-09');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `origin` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ip` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ip_city` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '来源页面',
  `area` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '面积',
  `budget` varchar(129) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算',
  `is_food` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '是否从事过餐饮行业',
  `update_time` datetime(0) NULL DEFAULT NULL,
  `delete_time` int(20) NULL DEFAULT NULL,
  `is_send_mail` int(2) NOT NULL DEFAULT 0,
  `only_tip` varchar(28) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES (1, '', '18653881453', '', '该用户没有添加留言内容', 'http://nyxz.local.com/', '127.0.0.1', 'IP无法定位', '电脑端', '/', '', '', '', '2022-03-12 17:43:27', 0, 1, NULL);
INSERT INTO `message` VALUES (2, '', '18653881453', '', '该用户没有添加留言内容', 'http://nyxz.local.com/contacts', '127.0.0.1', 'IP无法定位', '电脑端', '/contacts', '', '', '', '2022-03-14 13:59:36', 0, 1, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2016_01_04_173148_create_admin_tables', 1);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `summary` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `keywords` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `news_type` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `create_date` date NULL DEFAULT NULL,
  `views` int(11) NULL DEFAULT NULL,
  `delete_time` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1166 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1165, '火锅店应该有哪些促销技巧？一站式帮扶无后顾之忧', '火锅是人们都比较喜爱吃的一种美食，它能够更好地让人们品尝到美食，现在火锅店众多如何在这么多火锅店中脱引而出，吸引更多顾客？火锅店应该有哪些促销技巧？下面我们一起来看一下吧。', '火锅店应该有哪些促销技巧', '最新资讯', '<p>火锅是人们都比较喜爱吃的一种美食，它能够更好地让人们品尝到美食，现在火锅店众多如何在这么多火锅店中脱引而出，吸引更多顾客？<span style=\"font-weight: bold;\">火锅店应该有哪些促销技巧</span>？下面我们一起来看一下吧。<br><br><span style=\"color: rgb(194, 79, 74);\">1、会员制促销</span><br><br>火锅店应该有哪些促销技巧？可以让第一次进店的顾客办理会员卡，办会员卡就会赠送礼品还会享受折扣优惠，积攒的积分可以在本店消费。<br><br><span style=\"color: rgb(194, 79, 74);\">2、优惠券促销</span><br><br>遇到竞争对手的低价出击，为了保住老客户，可以派派优惠券。刚刚开业，为了扩大影响，可以在周边地区发放礼券。为了提高客户忠诚度，也可以给予老客户适当的优惠。<br><br><span style=\"color: rgb(194, 79, 74);\">3、礼品赠送促销</span><br><br>礼品的赠送也具有针对性，不可无条件奉送。否则礼品赠送将失去价值，礼品赠送不仅要建立品牌的知名度，同时也要考虑提升品牌的美誉度，与自身的品牌形象紧紧联系起来。<br><br>火锅店应该有哪些促销技巧？掌握一些促销手段能有效的提高火锅加盟店的利润，同时也能更好地吸引顾客，留住老顾客心音新顾客的前来。半城外牛腩火锅总部提供一站式帮扶，让您轻松开店，没有后顾之忧。</p>', '2018-12-23', 671, 1, '2022-03-13 16:57:07', '2022-03-13 16:57:11');
INSERT INTO `news` VALUES (1164, '火锅店如何处理顾客的投诉？快速、冷静、细心、真诚', '近年来，火锅行业海外扩张步伐日渐加快，未来发展前途一片大好。但是任何餐饮，不论大小店面，都会遭遇顾客投诉的问题，如果不能很好的解决将会给你的店面带来非常不好的影响。火锅店如何处理顾客的投诉呢？这是我们需要解决的一大问题。', '火锅店如何处理顾客的投诉', '最新资讯', '<p>近年来，火锅行业海外扩张步伐日渐加快，未来发展前途一片大好。但是任何餐饮，不论大小店面，都会遭遇顾客投诉的问题，如果不能很好的解决将会给你的店面带来非常不好的影响。<span style=\"font-weight: bold;\">火锅店如何处理顾客的投诉</span>呢？这是我们需要解决的一大问题。<br><br><span style=\"color: rgb(194, 79, 74);\">1、快速反应<br></span><br>火锅店如何处理顾客的投诉？绝不让顾客等待，快速的反应能让顾客觉得火锅店经营者非常重视他们的意见，尽管有问题出现，但是也能提升对火锅店的好感。<br><br><span style=\"color: rgb(194, 79, 74);\">2、保持冷静</span><br><br>火锅店如何处理顾客的投诉？火锅店经营者应该持有专业的职业素养和态度去面对顾客，对自己有信心，冷静的观察问题症结所在，有的时候管理者大态度会比问题本身还重要。<br><span style=\"color: rgb(194, 79, 74);\"><br>3、仔细聆听<br></span><br>聆听顾客的抱怨，倾听顾客的反馈，仔细收集事实，有则改之无则加勉。并且应该立即以诚恳的态度提出解决方案，与顾客达成一致后立即行动，与顾客保持良好的沟通，追踪问题的进展，直到顾客满意。<br><br><span style=\"color: rgb(194, 79, 74);\">4、真诚抱歉</span><br><br>火锅店如何处理顾客的投诉？不管是任何原因造成的投诉，都不能责备顾客，应该用常用语句“对不起，给您带来不便”来回应顾客，这样才能让顾客感受到你对他的重视。<br><br>火锅店如何处理顾客的投诉？半城外牛腩火锅提供一对一的培训，全面传授店铺运营经验，并且开业会有专业老师下店指导，帮助您更好的经营。</p>', '2018-12-23', 833, 1, NULL, NULL);
INSERT INTO `news` VALUES (1163, '吃火锅的禁忌，哪些人不合适吃火锅？', '据考证，西汉时期即有火锅，到宋代，火锅的吃法在民间已十分常见，南宋林洪的《山家清供》食谱中，便有同友人吃火锅的介绍。元代，火锅流传到蒙古一带，用来煮牛羊肉。至清代，火锅不仅在民间盛行，而且成了一道著名的“宫廷菜”，用料是山鸡等野味。火锅的特色是边煮边吃，吃的时候食物热气腾腾，汤物合一。但是你知道吃火锅的禁忌吗？哪些人不适合吃火锅。', '吃火锅的禁忌', '最新资讯', '<p>据考证，西汉时期即有火锅，到宋代，火锅的吃法在民间已十分常见，南宋林洪的《山家清供》食谱中，便有同友人吃火锅的介绍。元代，火锅流传到蒙古一带，用来煮牛羊肉。至清代，火锅不仅在民间盛行，而且成了一道著名的“宫廷菜”，用料是山鸡等野味。火锅的特色是边煮边吃，吃的时候食物热气腾腾，汤物合一。但是你知道<span style=\"font-weight: bold;\">吃火锅的禁忌</span>吗？哪些人不适合吃火锅。<br><br><span style=\"color: rgb(194, 79, 74);\">1、忌半生不熟<br></span><br>吃火锅的禁忌：半生不熟的肉类除了造成消化不良外，潜藏于食物中的细菌、寄生虫卵会随食物吞入胃肠从而导致疾病的发生。不洁的猪肉片和牛肉片里很可能含有旋毛虫、绦虫和囊虫这三类寄生虫。<br><br>避免措施：吃火锅的时候一定要将肉切薄、多烫，涮猪肉片、牛肉片时，一定要涮熟再吃。同时，还要看肉片上有无白色、米粒状物质，如有，则可能是囊虫卵。<br><br><span style=\"color: rgb(194, 79, 74);\">2、最好按体质选火锅汤底</span><br><br>吃火锅的禁忌：火锅中常常放一些滋补原料，如大枣、枸杞、人参、天麻之类，还可能有大量的生姜与辣椒，不同体质的人需按自己的体质来挑选。<br><br>避免措施：容易上火者应避免选择“滋补”效用过强的火锅底料；身体虚寒者多放姜葱辣椒可以温暖身体；减肥者需选择少加香油和麻料的蘸料；担心皮肤长痘者需控制葱花、香菜和辣椒油的数量。<br><br><span style=\"color: rgb(194, 79, 74);\">3、忌太烫太辣</span><br><br>口腔、食道和胃黏膜一般只能耐受50℃的温度，火锅浓汤的温度可高达120℃，火锅的辛辣味道最先刺激的是食道，接着迅速通过胃、小肠等，严重刺激胃肠壁黏膜，太烫辛辣的食物，会损伤黏膜，烫伤口腔、舌部、食道以及胃的黏膜。<br><br>避免措施：吃火锅不可心急，又麻又辣的火锅还是少吃为妙，从火锅中取出的食物等降温后再入口，并要尽量把调料调至微辣，不要喝火锅汤底。<br><br><span style=\"color: rgb(194, 79, 74);\">冬季哪些人慎吃火锅</span><br><br>1、火锅料如鱼饺、虾饺、各种丸子，含有高量的油脂，糖尿病、高血压、高血脂的病人要注意。<br><br>2、调味料如辣椒酱，对肠胃刺激大，有胃肠疾病的人尽可能使用麻油等较清淡的调料。<br><br>3、肝功能不好慎吃狗肉、羊肉火锅，狗肉、羊肉甘温而大热，吃后可导致某些慢性疾病复发或病情加重，尤其是肝炎和肝脏疾病患者。<br><br>4、火锅汤(如动物内脏、水产品、豆子、香菇、紫菜等)中含有大量嘌呤，痛风的病人不要吃。<br><br>5、火锅汤中含钠离子、钾离子多，有肾脏病、高血压的人要小心。</p>', '2018-12-23', 929, 1, NULL, NULL);
INSERT INTO `news` VALUES (1162, '开火锅店选址，必须符合的3点要求', '如今餐饮行业是大热行业，吸引了很多投资者的加入。很多刚进入餐饮行业的新手创业者在选址时都会陷入误区，总认为核心商圈、黄金路段就是好的，往往忽略了地段成本与消费人群的问题。下面就来说说开火锅店选址必须符合的3点要求。', '开火锅店选址', '最新资讯', '<p>如今餐饮行业是大热行业，吸引了很多投资者的加入。很多刚进入餐饮行业的新手创业者在选址时都会陷入误区，总认为核心商圈、黄金路段就是好的，往往忽略了地段成本与消费人群的问题。下面就来说说<span style=\"font-weight: bold;\">开火锅店选址</span>必须符合的3点要求。<br><br><span style=\"color: rgb(194, 79, 74);\">1、选址需符合品牌定位</span><br><br>选址要根据消费者属性、用餐习惯、消费习惯等来选，要与品牌的整体调性相符合，所以说开火锅店选址时必须综合考虑才能选址最适合的地段。半城外的定位是大众消费人群，在选址时，选址人潮涌动的地方，如在大型社区周边、写字楼附近、商业街等。<br><br><span style=\"color: rgb(194, 79, 74);\">2、选址考虑人群聚集</span><br><br>店铺成功与否，关键在客流量。开火锅店选址时，一定要好好对客流量进行分析。过去古语说“一步差三市”，开店地址差一步就有可能差三成的买卖。对餐饮业态来说，选址在人流密集的地方尤为关键。这样会更加有机会吸引消费者的注意力，有进店观看的想法。<br><span style=\"color: rgb(194, 79, 74);\"><br>3、选址宜交通便利</span><br><br>酒香不怕巷子深，但不是所有产品都是这样的。开火锅店选址，如果人流量很少，别人根本看不到，那么再好的东西卖给谁呢？所以在选址时必须考虑交通便利的店铺。<br><br>总结起来，开火锅店选址必须要具备三个因素：目标消费人群多、人流量大、交通便利。半城外牛腩火锅诚邀合伙人，选址、设计、开业、营销等一站式全方位扶持，解决您的一切后顾之忧</p>', '2018-12-23', 998, 1, NULL, NULL);
INSERT INTO `news` VALUES (1161, '警惕投资骗局，火锅投资如何预防陷阱？', '创业者源源不断地加入，火锅行业发展得如火如荼。火锅总部提供的大力支持帮助创业者更稳更快地走向事业成功，实现创业梦。然而，每个行业都会有一些负面的事情存在，火锅投资骗局也是屡屡出现在人们的视线中。警惕投资骗局，火锅投资如何预防陷阱？', '火锅投资如何预防陷阱', '最新资讯', '<p>创业者源源不断地加入，火锅行业发展得如火如荼。火锅总部提供的大力支持帮助创业者更稳更快地走向事业成功，实现创业梦。然而，每个行业都会有一些负面的事情存在，火锅投资骗局也是屡屡出现在人们的视线中。警惕投资骗局，<span style=\"font-weight: bold;\">火锅投资如何预防陷阱</span>？<br><br><span style=\"color: rgb(194, 79, 74);\">一、警惕对方用证书来做障眼法</span><br><br>现在一些火锅品牌都会说自家品牌拥有很多荣誉证书，而其中有人利用投资者盲目崇拜、信任的心理，用假证书忽悠投资者。如果品牌方不断反复向投资者出示一些获奖证书，投资者就要注意了。<br><br>建议上网进行查询发证机构的名称，如果查询不到就可以确认是骗子，如果有，但是相关信息很少，甚至连官网都没有，那么投资者要谨慎，最好向该机构的上级管理部门核实一下，避免上当受骗。<br><br><span style=\"color: rgb(194, 79, 74);\">二、注意总部是否过于强势</span><br><br>火锅投资如何预防陷阱？投资者还未签下合约时，总部的业务人员要从中谋利，所以显得非常殷勤。可等到签约以后，需要他们提供服务的时候，他们就摆出一副盛气凌人的嘴脸，嫌你经验不够。<br><br>此外有些品牌在合约上的限制很多，且单方面对偏向总部，对投资者并不利，甚至有一些条文是违法的。大多新手因经验不足，再加上急于想要创业，于是签下卖身契。因此创业者在签约之前最好多走访几家火锅品牌进行对比，并了解之后的服务情况。<br><br><span style=\"color: rgb(194, 79, 74);\">三、高注册资本可能是融资而来</span><br><br>火锅投资如何预防陷阱？现在很多火锅连锁企业都会在注册资本上玩花样，动辄就几百万元的注册资本，让很多投资者误认为这是一家很有实力的企业。<br><br>其实注册资本的高低与企业的实力并不具备直接联系。有不少企业的注册资本并非是企业自身出资，而是通过一些中介机构进行融资，只要通过了工商局的验资即可，再将注册资本还给中介机构。<br><br>甚至有的连锁企业可能全部家当只有一两万元，但是同样可以注册一个资本在百万元以上的企业。所以投资者千万不要被企业的注册资本所蒙蔽。<br><br>火锅投资如何预防陷阱？半城外牛腩火锅，一站式服务，前期选址，后期运营，都有专业人员全程服务，让投资者轻轻松松开好一家火锅店。</p>', '2018-12-23', 789, 1, NULL, NULL);
INSERT INTO `news` VALUES (1160, '从三个角度看火锅品牌是否靠谱', '餐饮行业的火热，从古至今都持续保持着。而相较其他业态，火锅行业更具市场潜力。许多火锅品牌总部实力强大，旗下产品味道极佳，适口性强，这更使得消费人群群体更加庞大，使盈利率更高，所以通过综合对比可以明显发现，火锅加盟要更具优势。', '火锅品牌是否靠谱', '最新资讯', '<p>餐饮行业的火热，从古至今都持续保持着。而相较其他业态，火锅行业更具市场潜力。许多火锅品牌总部实力强大，旗下产品味道极佳，适口性强，这更使得消费人群群体更加庞大，使盈利率更高，所以通过综合对比可以明显发现，火锅加盟要更具优势。<br><br>当然，市面上的火锅品牌越来越多，好坏也是参差不齐，让不少投资者摸不着头脑。如何识别火锅品牌是否靠谱呢？下面半城外牛腩火锅告诉你，从三个角度看<span style=\"font-weight: bold;\">火锅品牌是否靠谱</span>。<br><br><span style=\"color: rgb(194, 79, 74);\">（一）从品牌来辨别</span><br><br>火锅品牌非常的多，每个品牌的品质也是参差不齐的。要了解一个品牌首先要了解品牌背后运作的公司，公司的运作模式，是否是负面信息等等。这一切都是品牌好坏的辨别基础。<br><br><span style=\"color: rgb(194, 79, 74);\">（二）从费用来综合判断</span><br><br>加盟费用往往是投资者考虑的一大因素，不能为了加盟费而选择一家价格很低的火锅品牌，甚至有的品牌为了博得最初的信任都是不收取加盟费用的，这一类品牌总会在你签下合同后给各位投资商挖下无数个坑。<br><br><span style=\"color: rgb(194, 79, 74);\">（三）从经营来判断</span><br><br>了解该火锅品牌的经营模式，对于店铺运营的政策等等。半城外牛腩火锅有多年的餐饮品牌运营经验，针对单店有一套独特的运营方式，根据每个节日节点配合出营销方案，让每一家加盟店都能保持持续火热状态。<br><br>如何识别火锅品牌是否靠谱？如果您也想开一家生意火爆的火锅店，欢迎与半城外牛腩火锅联系，总部专业团队将竭诚为您服务。</p>', '2018-12-23', 850, 1, NULL, NULL);
INSERT INTO `news` VALUES (1159, '火锅店怎么做好员工管理，员工培训怎么培训？', '火锅项目火爆延续至今，是很多人眼中的香饽饽，投资者都渴望成功经营一家火锅店。火锅店营业期间，需要员工的大力支持才能够在市场上稳步发展下去。火锅加盟店的员工持续为消费者提供良好的服务，会带来更好的口碑和更多的回头客。火锅店怎么做好员工管理，员工培训怎么培训？', '火锅店怎么做好员工管理', '最新资讯', '<p>火锅项目火爆延续至今，是很多人眼中的香饽饽，投资者都渴望成功经营一家火锅店。火锅店营业期间，需要员工的大力支持才能够在市场上稳步发展下去。火锅加盟店的员工持续为消费者提供良好的服务，会带来更好的口碑和更多的回头客。<span style=\"font-weight: bold;\">火锅店怎么做好员工管理</span>，员工培训怎么培训？<br><br>一、要对员工做到销售意识的强化。强调“服务=利润”这种意识，利用菜品推销等激励手段来激发销售热情。<br><br>二、要制定企业的系统激励机制，鼓励士气，如制度上的奖惩分明，销售提成、各类奖项(服务标兵、创新奖、进步奖等等)、管理人员口头表扬习惯的养成等。<br><br>三、使企业目标与员工个人事业目标的统一，帮助员工制定事业发展计划或职业生涯规划等。这有助于员工队伍的稳定。<br><br>四、管理层自信心的建立对下级产生正面的影响。<br><br>五、给与新旧员工平等的发展机会，做到公正平等的对待。<br><br>六、为员工的事业成长提供足够的空间及平台。<br><br>七、赋予权利与信任的同时保持监控，并予以适时的帮助，帮助其建立自信心。<br><br>八、餐厅的员工培训就是对员工的教育，不仅是课堂上的培训，更是在日常工作中随时、随地地进行教育指导。<br><br>九、餐厅培训的内容不仅是专业知识的培训，更多的是要提升他们的整体素质，教会他们为人处世等方方面面。<br><br>火锅店怎么做好员工管理？半城外牛腩火锅，总部提供一对一的培训，全面传授店铺运营技巧，轻松上路，经营无忧。</p>', '2018-12-23', 508, 1, NULL, NULL);
INSERT INTO `news` VALUES (1158, '火锅店如何做菜单呢？千万别犯的几大错误', '现如今各行各业竞争压力大，如果没有突破没有亮点，是万万行不通的。例如热门的火锅店，除了好的味道做基础，好的位置做铺垫，更需要在各种细节上花功夫，比如菜单也是一个打动消费者的小细节呢。火锅店如何做菜单呢？', '火锅店如何做菜单', '最新资讯', '<p>现如今各行各业竞争压力大，如果没有突破没有亮点，是万万行不通的。例如热门的火锅店，除了好的味道做基础，好的位置做铺垫，更需要在各种细节上花功夫，比如菜单也是一个打动消费者的小细节呢。<span style=\"font-weight: bold;\">火锅店如何做菜单</span>呢？<br><br><span style=\"color: rgb(194, 79, 74);\">1、无聊死板     </span><br><br>火锅店如何做菜单呢？呆头呆脑的模板型菜单比比皆是，老板认为菜单只是一个点菜的工具而已，可有可无，更别说什么设计理念。这种菜单，别说什么欣赏价值，就是看一眼都觉得心累。<br><br><span style=\"color: rgb(194, 79, 74);\">2、傲娇任性     </span><br><br>菜单最基本的作用就是向消费者提供信息，但也有一些剑走偏锋的存在。在我国这个大环境中，大家生活节奏较快，来餐厅吃饭就图个放松，谁也不想拿到菜单还得猜谜。<br><br><span style=\"color: rgb(194, 79, 74);\">3、贪得无厌      </span><br><br>火锅店老板一方面希望节约菜单印刷成本，一方面又舍不得删减菜品。每一道菜都要有雅称、价格、文案、图片，除此之外最好还要能放下会员、套餐、直营店、加盟信息，恨不得那一张半开不到的纸张上有三维立体空间，装的东西越多越好。<br><br><span style=\"color: rgb(194, 79, 74);\">4、敷衍了事   </span><br><br>还有一种最不负责任的菜单，设计时从不考虑阅读体验，不算出血、不算装订，无视最基本的装帧设计概念。印刷出来后常常出现字迹不全，图片模糊，甚至夹杂错别字的低级错误。且这种菜单也不会考虑色彩对食客的心理暗示，菜单配色昏暗，很难激起消费者的食欲。<br><br><span style=\"color: rgb(194, 79, 74);\">5、急功近利       </span><br><br>还有一些菜单总是想着每个消费者都点利润最大的菜，所以常常把贵菜、特色菜密集地排布在菜单的最前面，而利润较低的小菜则放到不起眼的角落。这种方式太过突兀，往往会让消费者产生抵触心理，给餐厅打上性价比不高的标签。且这种排列方式会导致菜单的品类混乱，整个菜单看上去毫无章法，无序可循。<br><br>火锅店如何做菜单呢？半城外牛腩火锅，整店输出，从选址、装修到人员培训、运营管理、营销策划等一站式服务，经营无忧。</p>', '2018-12-23', 546, 1, NULL, NULL);
INSERT INTO `news` VALUES (1157, '半城外牛腩火锅：为什么吃火锅会拉肚子？', '很多人都喜欢吃火锅，特别是在冬季，一顿火锅下来，不仅满足的口腹之欲，还能驱寒，但经常有人一吃火锅就拉肚子，为什么吃火锅会拉肚子？怎么吃火锅才不会拉肚子？', '为什么吃火锅会拉肚子', '最新资讯', '<p>很多人都喜欢吃火锅，特别是在冬季，一顿火锅下来，不仅满足的口腹之欲，还能驱寒，但经常有人一吃火锅就拉肚子，<span style=\"font-weight: bold;\">为什么吃火锅会拉肚子</span>？怎么吃火锅才不会拉肚子？<br><br>吃火锅时一般都是在锅中烫一下就吃，如果食材没有煮熟，吃这些半生不熟的食物，容易导致细菌或寄生虫感染，很容易造成腹泻。<br><span style=\"color: rgb(194, 79, 74);\"><br>1、要掌握好火候</span><br><br>吃火锅时，若食物在火锅中煮久了会失去鲜味，破坏营养成分；倘若煮的时间不够，又容易引起消化道疾病。<br><br><span style=\"color: rgb(194, 79, 74);\">2、吃的时间不要太长</span><br><br>有的人，一吃就是数小时之久，甚至通宵达旦。这样会使胃液、胆汁、胰液等消化液不停地分泌，腺体得不到正常的休息，导致胃肠功能紊乱而发生腹痛、腹泻，严重的可患慢性胃肠炎、胰腺炎等。<br><br><span style=\"color: rgb(194, 79, 74);\">3、不要太辣、太麻</span><br><br>太辣、太麻的食物，不仅会刺激口腔、食管与胃肠道的粘膜而使其发生充血和水肿，还容易诱发一些更重的疾病。凡是口腔炎、慢性咽炎、溃疡病、慢性胰腺炎、胆囊炎病复发者及上腹部做过手术的人都不要吃火锅。<br><br><span style=\"color: rgb(194, 79, 74);\">4、吃火锅中途不要喝凉水</span><br><br>有些小伙伴总是喜欢辣到不行的时候喝点凉水缓解下口腔的灼烧感，这样非常伤肠胃的。因为吃了大量的食物后，肠胃需要消化液，但是你大量的和凉水会稀释胃液，导致肠胃不舒服。<br><br>为什么吃火锅会拉肚子？半城外牛腩火锅，养生虫草花菌王汤，大块牛腩充分烹煮后用刀叉切成小块而食，美味无法阻挡，好吃又健康。</p>', '2018-12-22', 563, 1, NULL, NULL);
INSERT INTO `news` VALUES (1156, '创业解惑：考察火锅品牌时应该侧重哪几方面？', '对于吃货而言，火锅是一款男女老少都喜爱的美食，而对于投资者而言，便是一个非常有市场潜力的创业项目。如今创业的人越来越多，而琳琅满目的火锅品牌更是让人挑花了眼。考察火锅品牌时应该侧重哪几方面？接下来，腩潮鲜牛腩火锅为您解答疑惑。', '考察火锅品牌', '最新资讯', '<p>对于吃货而言，火锅是一款男女老少都喜爱的美食，而对于投资者而言，便是一个非常有市场潜力的创业项目。如今创业的人越来越多，而琳琅满目的火锅品牌更是让人挑花了眼。<span style=\"font-weight: bold;\">考察火锅品牌</span>时应该侧重哪几方面？接下来，半城外牛腩火锅为您解答疑惑。<br><br><span style=\"color: rgb(194, 79, 74);\">一、了解品牌知名度<br></span><br>选择火锅品牌一定要注重品牌知名度，如果不注重知名度的话，为什么不自己开店呢？选择加盟品牌，看重的就是品牌效应。因此加盟火锅店时，投资者应根据自己的预算，尽量选择知名度高、有特色的品牌。<br><br><span style=\"color: rgb(194, 79, 74);\">二、了解加盟店数量<br></span><br>火锅品牌的加盟门店数量非常有参考价值，因为那是品牌的沉淀，其中包括品牌的发展、以及门店的经营经验。数量多的品牌肯定富含经验，对于投资者未来的经营也比较有帮助。如果一个品牌连加盟店都没有，看不到成功案例，就算不要加盟费相信你也不敢投资吧。<br><br><span style=\"color: rgb(194, 79, 74);\">三、门店装修风格</span><br><br>门店的装修关系着路过的顾客能否被吸引，是很重要的一方面。而且火锅品牌的装修也可以看出加盟总部的审美以及是否有关注到每一个细节。<br><span style=\"color: rgb(194, 79, 74);\"><br>四、产品品质</span><br><br>不管你的味道有多好，如果菜品质量不过关、卫生不合格或是份量不足等等，这都会关乎到你的店铺口碑。只有用心做好品质把关，顾客才会络绎不绝，品牌之路才会走的远和长久。<br><span style=\"color: rgb(194, 79, 74);\"><br>五、品牌加盟政策和扶持</span><br><br>除了以上几点外，总部的加盟政策相当重要。看看总部是否设有区域保障、物流团队、客服团队支持，这样才能降低经营的风险。重庆崽儿火锅一站式扶持政策，全方位保护加盟商利益，珍惜加盟商每一分钱，尽可能将投资风险降到更低。<br><br>考察火锅品牌时需要保持一个清醒的头脑，半城外牛腩火锅总部政策好，有多年店铺运营经验，可以帮助投资商轻松开店经营。</p>', '2018-12-22', 943, 1, NULL, NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `keywords` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `memprice` double NULL DEFAULT NULL,
  `imageurl` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `delete_time` int(11) NULL DEFAULT NULL,
  `sort` int(11) NULL DEFAULT NULL,
  `product_cat` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, '1111111111', NULL, NULL, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (2, '11111111', NULL, NULL, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (3, '111111111', NULL, NULL, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (4, '11111111', NULL, NULL, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (5, '1111111111', NULL, NULL, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (6, '11111111', NULL, NULL, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (7, '22222', NULL, NULL, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for seo
-- ----------------------------
DROP TABLE IF EXISTS `seo`;
CREATE TABLE `seo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuotom_name` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `page_title` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `page_keywords` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `page_description` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url_address` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of seo
-- ----------------------------
INSERT INTO `seo` VALUES (1, '首页1', '首页1', '首页1', '首页1', '/', '2022-02-13', '2022-02-13');

-- ----------------------------
-- Table structure for store
-- ----------------------------
DROP TABLE IF EXISTS `store`;
CREATE TABLE `store`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `from` int(11) NULL DEFAULT NULL,
  `delete_time` int(11) NULL DEFAULT NULL,
  `store_name` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of store
-- ----------------------------
INSERT INTO `store` VALUES (1, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, '测试', NULL, NULL);
INSERT INTO `store` VALUES (2, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `store` VALUES (3, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `store` VALUES (4, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `store` VALUES (5, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `store` VALUES (6, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `store` VALUES (7, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `store` VALUES (8, '/static/home/images/home_video_img.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
