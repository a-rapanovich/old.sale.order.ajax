<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Данные о компании");
require (__DIR__ . "/header.php");
?>
<?
$APPLICATION->IncludeComponent("bitrix:main.profile", "order", Array(
	"COMPONENT_TEMPLATE" => "user_company",
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => array(	// Показывать доп. свойства
			0 => "UF_LE_NAME",
			1 => "UF_LE_CITY",
			2 => "UF_LE_POST_ADDRESS",
			3 => "UF_LE_LEGAL_ADDRESS",
			4 => "UF_LE_UNP",
			5 => "UF_LE_RS",
			6 => "UF_LE_BIK",
			7 => "UF_POST_NAME",
			8 => "UF_POST_PHONE",
			9 => "UF_POST_CITY",
			10 => "UF_POST_STREET",
			11 => "UF_POST_HOUSE",
			12 => "UF_POST_CORPUS",
			13 => "UF_POST_BUILDING",
			14 => "UF_POST_COMMENT",
		),
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"USER_PROPERTY_NAME" => "Другое",	// Название закладки с доп. свойствами
	),
	false
); ?>
<?
require __DIR__ . "/footer.php";

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>