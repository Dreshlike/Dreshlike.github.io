<?php
// Настройки
$settings = array(
	// Ключ для доступа к API
	'user_api_key' => '0796cbf9b1bde1ba4bfe50dad0862629',
	// Хэш для построения диплинков
	'user_deep_link_hash' => 'pmm1zgc7bzzay904rvt0lvxpy3u7lwv2',
	
	// Количество товаров на странице
	'items_per_page' => 15,
	
	// Количество товаров в RSS-ленте
	'rss_items_count' => 15,
	
	// Минимальная цена товара
	'price_min' => 0.0,
	// Максимальная цена товара
	'price_max' => 1000000.0,
	
	// Название нашего сайта
	'site_name' => 'Aliexpress',
	
	// Язык описаний товаров (может быть en или ru)
	'lang' => 'ru',
	
	// Желаемая валюта
	// Поддерживаются как минимум USD, EUR, RUR, UAH, KZT. Подробнее - в документации
	'currency' => 'RUR',
	
	// Используемая библиотека кэширования
	// Если есть поддержка на хостинге то крайне рекоммендуется включить
	// Возможные значения: none, apc, mysql, xcache, memcache, memcached, wincache
	'cache_library' => 'none',
	
	// Только если в качестве кэша выбран memcache или memcached
	'memcached_host' => '127.0.0.1',
	'memcached_port' => 11211,
	'memcached_pconnect' => TRUE,
	
	// Настройки MySQL. Используются если в качестве кэша указан mysql
	'mysql_host' => '127.0.0.1',
	'mysql_user' => 'root',
	'mysql_pass' => '',
	'mysql_base' => 'test',
	'mysql_persist' => FALSE,
);
