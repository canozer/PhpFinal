
CREATE TABLE `yemekler` (
  `id` int(11) NOT NULL,
  `yemek_adi` varchar(255) NOT NULL,
  `malzeme_listesi` text NOT NULL,
  `tarif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=u8mb4;

INSERT INTO `yemekler` (`yemeginadi`, `malzemeler`) VALUES
('menemen','malzemeler: yumurta,domates,biber,soğan'),

ALTER TABLE `yemekler`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `yemekler`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
