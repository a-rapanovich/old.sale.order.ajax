<div class="account">
    <div class="container-small account__container">
        <div class="account__content">
            <div class="account__header">
                <div class="account-nav">
                    <? $APPLICATION->IncludeComponent("bitrix:menu", "account", Array(
                        "COMPONENT_TEMPLATE" => "top",
                        "ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
                        "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                        "MENU_CACHE_TIME" => "36000",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    ),
                        false
                    );?>
                </div>
                <h1 class="section-title account__section-title"><? $APPLICATION->ShowTitle(false) ?></h1>
                <div class="account__inner">
                    <div class="account__main">
