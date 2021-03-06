<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "���������� ������");
$APPLICATION->SetTitle("���������� ������");
?><?$APPLICATION->IncludeComponent(
	"custom:sale.order.ajax", 
	".default", 
	array(
		"ALLOW_AUTO_REGISTER" => "Y",
		"ALLOW_NEW_PROFILE" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"COUNT_DELIVERY_TAX" => "N",
		"DELIVERY_NO_AJAX" => "Y",
		"DELIVERY_NO_SESSION" => "N",
		"DELIVERY_TO_PAYSYSTEM" => "d2p",
		"DISABLE_BASKET_REDIRECT" => "Y",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"PATH_TO_AUTH" => "/auth/",
		"PATH_TO_BASKET" => "/personal/cart/",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"PATH_TO_PERSONAL" => "/personal/",
		"PAY_FROM_ACCOUNT" => "N",
		"PRODUCT_COLUMNS" => "",
		"PROP_1" => "",
		"SEND_NEW_USER_NOTIFY" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_PAYMENT_SERVICES_NAMES" => "Y",
		"SHOW_STORES_IMAGES" => "Y",
		"TEMPLATE_LOCATION" => "popup",
		"USE_PREPAYMENT" => "N",
		"COMPATIBLE_MODE" => "Y",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"ALLOW_USER_PROFILES" => "N",
		"TEMPLATE_THEME" => "yellow",
		"SHOW_TOTAL_ORDER_BUTTON" => "Y",
		"SHOW_PAY_SYSTEM_LIST_NAMES" => "Y",
		"SHOW_PAY_SYSTEM_INFO_NAME" => "Y",
		"SHOW_DELIVERY_LIST_NAMES" => "Y",
		"SHOW_DELIVERY_INFO_NAME" => "Y",
		"SHOW_DELIVERY_PARENT_NAMES" => "Y",
		"BASKET_POSITION" => "after",
		"SHOW_BASKET_HEADERS" => "N",
		"DELIVERY_FADE_EXTRA_SERVICES" => "N",
		"SHOW_COUPONS_BASKET" => "N",
		"SHOW_COUPONS_DELIVERY" => "N",
		"SHOW_COUPONS_PAY_SYSTEM" => "N",
		"SHOW_NEAREST_PICKUP" => "N",
		"DELIVERIES_PER_PAGE" => "8",
		"PAY_SYSTEMS_PER_PAGE" => "8",
		"PICKUPS_PER_PAGE" => "5",
		"SHOW_MAP_IN_PROPS" => "N",
		"PROPS_FADE_LIST_1" => array(
		),
		"PRODUCT_COLUMNS_VISIBLE" => array(
			0 => "PREVIEW_PICTURE",
		),
		"ADDITIONAL_PICT_PROP_13" => "MORE_PHOTO",
		"ADDITIONAL_PICT_PROP_25" => "MORE_PHOTO",
		"PRODUCT_COLUMNS_HIDDEN" => array(
		),
		"USE_YM_GOALS" => "N",
		"USE_CUSTOM_MAIN_MESSAGES" => "Y",
		"USE_CUSTOM_ADDITIONAL_MESSAGES" => "Y",
		"USE_CUSTOM_ERROR_MESSAGES" => "N",
		"MESS_AUTH_BLOCK_NAME" => "�����������",
		"MESS_REG_BLOCK_NAME" => "�����������",
		"MESS_BASKET_BLOCK_NAME" => "������ � ������",
		"MESS_REGION_BLOCK_NAME" => "������",
		"MESS_PAYMENT_BLOCK_NAME" => "������",
		"MESS_DELIVERY_BLOCK_NAME" => "��������",
		"MESS_BUYER_BLOCK_NAME" => "��������",
		"MESS_BACK" => "�����",
		"MESS_FURTHER" => "�����",
		"MESS_EDIT" => "��������",
		"MESS_ORDER" => "�������� �����",
		"MESS_PRICE" => "���������",
		"MESS_PERIOD" => "���� ��������",
		"MESS_NAV_BACK" => "�����",
		"MESS_NAV_FORWARD" => "������",
		"MESS_REGISTRATION_REFERENCE" => "���� �� ������� �� �����, � ������ ��� �� �� ��� ������� � ��� ���� ������ �����������, ��������� ��������������� �����.",
		"MESS_AUTH_REFERENCE_1" => "�������� \"���������\" (*) �������� ������������ ��� ���������� ����.",
		"MESS_AUTH_REFERENCE_2" => "����� ����������� �� �������� �������������� ������.",
		"MESS_AUTH_REFERENCE_3" => "������ ��������, ���������� � ������������ ��������-�������� ��� ����������� ��� �����-���� ���� �������, �� ����� ��� ���������� ������������� ������������ ������� ������������ � ����� �� ����������� ��������, ����� ����� ������� ����� ��� �������� �������.",
		"MESS_ADDITIONAL_PROPS" => "�������������� ��������",
		"MESS_USE_COUPON" => "��������� �����-���",
		"MESS_COUPON" => "����� ���",
		"MESS_PERSON_TYPE" => "��� �����������",
		"MESS_SELECT_PROFILE" => "�������� �������",
		"MESS_REGION_REFERENCE" => "�������� ���� ������ � ������. ���� �� �� ����� ���� �����, �������� \"������ ��������������\", � ����� ������� � ���� \"�����\"",
		"MESS_PICKUP_LIST" => "��������:",
		"MESS_NEAREST_PICKUP_LIST" => "��������� ��������:",
		"MESS_SELECT_PICKUP" => "�������",
		"MESS_INNER_PS_BALANCE" => "�� ����� ���������������� �����:",
		"MESS_ORDER_DESC" => "����������� � ������:",
		"MESS_DELIVERY_CALC_ERROR_TITLE" => "�� ������� ���������� ��������� ��������.",
		"MESS_DELIVERY_CALC_ERROR_TEXT" => "�� ������ ���������� ���������� ������, � ���� ����� �������� �������� �������� � ���� � ������� ���������� �� ��������."
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>