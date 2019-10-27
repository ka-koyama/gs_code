-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2019 年 10 月 27 日 10:19
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `bookmark`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(11) NOT NULL,
  `regist` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `regist`, `name`, `author`, `category`, `url`) VALUES
(36, '光山和哉', 'ONEPIECE', '尾田栄一郎', 'コミック', 'https://one-piece.com/'),
(37, '田中太郎', 'NARUTO', '岸本斉史', 'コミック', 'https://www.oricon.co.jp/series/4655-15ef/type/book/'),
(43, '光山和哉', '転生したらスライムだった件', '伏瀬 ', 'ラノベ', 'https://ncode.syosetu.com/n6316bn/'),
(44, '光山和哉', 'ゼルダの伝説　夢を見る島　完全攻略本', 'ニンテンドードリーム編集部', '攻略本', 'https://ga-m.com/n/zelda-yume-wo-mirusima-kouryakubon-urawaza/'),
(45, '光山和哉', '1日1ページ、読むだけで身につく世界の教養365 現代編', 'デイヴィッド・S・キダー&ノア・D・オッペンハイム', '教養', 'https://bunkyosha.com/books/9784866511443'),
(46, '田中太郎', 'ノーサイド・ゲーム', '池井戸潤', '小説（社会・歴史）', 'https://www.tbs.co.jp/noside_game_tbs/original/'),
(47, '田中太郎', '容疑者Xの献身', '東野圭吾', '小説（ミステリー・サスペンス・ハードボイルド）', 'https://books.bunshun.jp/ud/book/num/9784167110123'),
(48, '光山和哉', '古生物のサイズが実感できる! リアルサイズ古生物図鑑 中生代編', '土屋健', '図鑑', 'https://gihyo.jp/book/2019/978-4-297-10656-0'),
(49, 'ゴリマッチョ', 'FRIDAY', '講談社', '雑誌', 'https://friday.kodansha.co.jp/'),
(50, 'ゴリマッチョ', 'アフターデジタル オフラインのない時代に生き残る', '藤井 保文 ', 'ビジネス・経済', 'https://markezine.jp/article/detail/30814'),
(51, 'ゴリマッチョ', 'iPad完全マニュアル2019', 'standards', '', 'https://bookmeter.com/books/13406307'),
(52, 'ゴリマッチョ', '自分史上最高の柔軟性が手に入るストレッチ', '村山巧', '暮らし・健康', 'https://kanki-pub.co.jp/pub/book/details/9784761274320'),
(53, '豚さん', 'できるポケット 時短の王道 ショートカットキー全事典 改訂版', '株式会社インサイトイメージ', 'コンピュータ・IT', 'https://book.impress.co.jp/books/1118101084'),
(54, '豚さん', 'ハリーポッターとアズカバンの囚人', 'J・K・ローリング', '小説（SF・ホラー・ファンタジー）', 'https://www.sayzansha.com/book/b357995.html'),
(55, '豚さん', 'モンスターハンターワールド:アイスボーン 攻略ガイド', '電撃ゲーム書籍編集部', '攻略本', 'https://dengekionline.com/articles/10899/'),
(56, '光山和哉', '進撃の巨人', '諫山創', 'コミック', 'http://shingeki.net/'),
(57, '光山和哉', 'MIX', 'あだち充', 'コミック', 'https://gekkansunday.net/series/mix'),
(58, '光山和哉', 'Webデザイン良質見本帳 目的別に探せて、すぐに使えるアイデア集', '久保田 涼子 ', 'コンピュータ・IT', 'https://www.sbcr.jp/product/4797389036/'),
(59, '光山和哉', 'ハリーポッターと不死鳥の騎士団', 'J・K・ローリング', '小説（SF・ホラー・ファンタジー）', 'https://bookmeter.com/books/580218'),
(61, '田中太郎', 'Webデザインの新しい教科書　改訂新版　基礎から覚える、深く理解できる。', 'こもりまさあき', 'コンピュータ・IT', 'https://books.mdn.co.jp/books/3215203011/'),
(64, '豚さん', '進撃の巨人', '諫山創', 'コミック', ''),
(65, '豚さん', 'ぐりとぐら', '', '絵本・児童書', ''),
(66, '豚さん', '竹内涼真', '', '写真集', ''),
(67, '豚さん', '釣り', '', '趣味', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_login`
--

CREATE TABLE `gs_login` (
  `id` int(11) NOT NULL,
  `u_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `u_pw` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_login`
--

INSERT INTO `gs_login` (`id`, `u_name`, `u_pw`) VALUES
(8, '光山和哉', '14102960'),
(9, '田中太郎', '14102960'),
(10, 'ゴリマッチョ', '14102960'),
(11, '豚さん', 'test'),
(13, 'バナナ', 'test');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_login`
--
ALTER TABLE `gs_login`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- テーブルのAUTO_INCREMENT `gs_login`
--
ALTER TABLE `gs_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
