<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "МТС Коммуникатор");
$APPLICATION->SetPageProperty("hide_h1", "N");
$APPLICATION->SetPageProperty("HAS_SIDEBAR", "N");
$APPLICATION->SetPageProperty("LAYOUT-CLASS", "layout--map layout--landing");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
?>

<?
$APPLICATION->AddHeadString("<link href='/other/lp-br/build/css/style.css' rel='stylesheet'>");
$APPLICATION->AddHeadString("<link href='/other/lp-br/build/css/libs.min.css' rel='stylesheet'>");
?>

    <div class="landing">
        <div class="landing-top">
            <div class="landing-top-menu">
                <div class="landing-top-menu__wrap">
                    <a href="#capabilities" class="landing-top-menu__link">Наши возможности</a>
                    <a href="#landing-how" class="landing-top-menu__link">Как подключить</a>
                    <a href="#landing-cost" class="landing-top-menu__link">Стоимость</a>
                    <a href="#landing-question" class="landing-top-menu__link">Вопрос-ответ</a>
                    <a href="#landing-contacts" class="landing-top-menu__link">Контакты</a>
                </div>
                <a href="https://br.mts.by" class="landing-top-menu__btn" target="_blank">Войти</a>
            </div>
            <div class="landing-container">
                <div class="landing-top__wrap">
                    <div class="landing-top__info">
                        <h1>МТС Коммуникатор</h1>
                        <div class="landing-top__txt">
                            Это безопасная, надежная и экономичная платформа, которая обеспечивает бесперебойную и своевременную доставку сообщений по каналам SMS и Viber
                        </div>
                        <a href="https://br.mts.by" class="landing-top__btn" target="_blank">Запустить рассылку</a>
                        <div class="landing-top-consult">
                            <div class="landing-top-consult__icon">
                                <svg width="37" height="59" viewBox="0 0 37 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="33" height="55" rx="6" stroke="white" stroke-width="4"/>
                                    <rect x="9" y="4" width="19" height="4" fill="white"/>
                                </svg>
                            </div>
                            <div class="landing-top-consult__info">
                                <div class="landing-top-consult__top">Бесплатная консультация:</div>
                                <div class="landing-top-consult__phone">
                                    <span>0990</span> пн-пт: 9:00 – 18:00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="landing-top__icon">
                        <img src="/other/lp-br/build/img-landing/content/top-icon.png" alt="">
                        <div class="landing-top__add">
                            Привлекайте новых клиентов с помощью SMS и Viber-уведомлений
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="capabilities" id="capabilities">
            <div class="landing-container">
                <div class="t-center">
                    <h2>Наши возможности</h2>
                </div>
                <div class="capabilities-slider">
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap1.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Высокая скорость доставки
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap2.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Запланированная рассылка
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap3.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Загрузка получателей из файла
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap4.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Статус доставки
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap5.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Транслитерация текстов сообщений
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap6.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            SMS-рассылка во все сети и за рубеж
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap7.svg" alt="">
                        </div>
                        <div class="capabilities-txt">Безопасность</div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap8.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            API для интеграции
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap9.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Viber-рассылка
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap10.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Выгодные тарифы
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap11.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Альфа-имя отправителя
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap12.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Мультиканальность рассылки
                        </div>
                    </div>
                    <div class="capabilities-item">
                        <div class="capabilities-icon">
                            <img src="/other/lp-br/build/img-landing/svg/cap13.svg" alt="">
                        </div>
                        <div class="capabilities-txt">
                            Подробные отчеты
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="selecting">
            <div class="landing-container">
                <h2>
                    Выберите, как рассказать про услуги в<br> зависимости от ваших задач
                </h2>
                <div class="selecting">
                    <div class="selecting__item">
                        <div class="selecting__wrap">
                            <div class="selecting__info">
                                <div class="selecting__top">SMS-рассылка</div>
                                <ul>
                                    <li>
                                        Быстрый результат — в <span class="red-t">94%</span> случаев открывают в первые минуты
                                    </li>
                                    <li>
                                        Большая аудитория — получат даже те, у кого нет смартфона
                                    </li>
                                    <li>
                                        Уникальное имя отправителя — бесплатно
                                    </li>
                                </ul>
                                <a href="https://br.mts.by" class="btn" target="_blank">Запустить рассылку</a>
                            </div>
                            <div class="selecting__img m-center">
                                <img src="/other/lp-br/build/img-landing/content/selecting1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="selecting__item">
                        <div class="selecting__wrap">
                            <div class="selecting__info">
                                <div class="selecting__top">Viber-рассылка</div>
                                <ul>
                                    <li>
                                        Больше текста, изображение и кнопка
                                    </li>
                                    <li>
                                        Есть у <span class="red-t">60%</span> владельцев смартфонов в Беларуси
                                    </li>
                                    <li>
                                        Уникальное имя отправителя — в рамках абонентской платы
                                    </li>
                                </ul>
                                <a href="https://br.mts.by" class="btn" target="_blank">Запустить рассылку</a>
                            </div>
                            <div class="selecting__img m-left">
                                <img src="/other/lp-br/build/img-landing/content/selecting2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-how" id="landing-how">
            <div class="landing-container">
                <div class="t-center">
                    <h2>Как подключить</h2>
                </div>
                <div class="landing-how__wrap">
                    <div class="landing-how__item">
                        <div class="landing-how__num"><span>1</span></div>
                        <div class="landing-how__info">
                            <a href="#form" data-effect="mfp-zoom-in" class="textForm">
                                <?
                                $APPLICATION->IncludeComponent(
                                    "ns:feedback.form",
                                    "business_newsletter",
                                    array(
                                        "ACTIVE_ELEMENT" => "N",
                                        "ADD_HREF_LINK" => "Y",
                                        "ALX_LINK_POPUP" => "Y",
                                        "BBC_MAIL" => "",
                                        "CAPTCHA_TYPE" => "recaptcha",
                                        "CATEGORY_SELECT_NAME" => "Выберите категорию",
                                        "CHANGE_CAPTCHA" => "N",
                                        "CHECKBOX_TYPE" => "CHECKBOX",
                                        "CHECK_ERROR" => "Y",
                                        "COLOR_OTHER" => "",
                                        "COLOR_SCHEME" => "BRIGHT",
                                        "COLOR_THEME" => "",
                                        "COMPONENT_TEMPLATE" => "business_newsletter",
                                        "EVENT_TYPE" => "ALX_BUSINESS_NEWSLETTER_SEND_MAIL",
                                        "FB_TEXT_NAME" => "",
                                        "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
                                        "FORM_ID" => "business_newsletter",
                                        "IBLOCK_ID" => "50",
                                        "IBLOCK_TYPE" => "altasib_feedback",
                                        "INPUT_APPEARENCE" => array(
                                            0 => "DEFAULT",
                                        ),
                                        "JQUERY_EN" => "jquery",
                                        "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
                                        "LOCAL_REDIRECT_ENABLE" => "N",
                                        "MASKED_INPUT_PHONE" => array(
                                            0 => "PHONE",
                                        ),
                                        "MESSAGE_OK" => "Спасибо, в ближайшее время с Вами свяжутся специалисты для подключения услуги!",
                                        "NAME_ELEMENT" => "ALX_DATE",
                                        "NOT_CAPTCHA_AUTH" => "N",
                                        "PROPERTY_FIELDS" => array(
                                            0 => "EMAIL",
                                            1 => "CITY",
                                            2 => "NAME",
                                            3 => "NAME_ORGANIZATION",
                                            4 => "CONSENT",
                                            5 => "PHONE",
                                        ),
                                        "PROPERTY_FIELDS_REQUIRED" => array(
                                            0 => "EMAIL",
                                            1 => "CITY",
                                            2 => "NAME",
                                            3 => "NAME_ORGANIZATION",
                                            4 => "CONSENT",
                                            5 => "PHONE",
                                        ),
                                        "PROPERTY_TO_SEND_USER" => array(
                                            0 => "EMAIL",
                                            1 => "CITY",
                                            2 => "NAME",
                                            3 => "NAME_ORGANIZATION",
                                            4 => "CONSENT",
                                            5 => "PHONE",
                                        ),
                                        "PROPS_AUTOCOMPLETE_EMAIL" => array(
                                        ),
                                        "PROPS_AUTOCOMPLETE_NAME" => array(
                                        ),
                                        "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
                                        ),
                                        "PROPS_AUTOCOMPLETE_VETO" => "N",
                                        "RECAPTCHA_THEME" => "light",
                                        "RECAPTCHA_TYPE" => "image",
                                        "SECTION_FIELDS_ENABLE" => "N",
                                        "SECTION_MAIL_ALL" => "ruckiy@mts.by‌‌",
                                        "SEND_IMMEDIATE" => "Y",
                                        "SEND_MAIL" => "N",
                                        "SHOW_LINK_TO_SEND_MORE" => "N",
                                        "SHOW_MESSAGE_LINK" => "Y",
                                        "USERMAIL_FROM" => "N",
                                        "USER_CONSENT" => "N",
                                        "USER_CONSENT_ID" => "0",
                                        "USER_CONSENT_INPUT_LABEL" => "",
                                        "USER_CONSENT_IS_CHECKED" => "N",
                                        "USER_CONSENT_IS_LOADED" => "N",
                                        "USE_CAPTCHA" => "Y",
                                        "WIDTH_FORM" => "",
                                        "USER_EVENT" => "ALX_BUSINESS_NEWSLETTER_SEND_MAIL",
                                        "ADD_EVENT_FILES" => "N",
                                        "COMPOSITE_FRAME_MODE" => "A",
                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                        "ALX_NAME_LINK" => "Заполните форму",
                                        "ALX_LOAD_PAGE" => "Y",
                                        "ALX_IBLOCK_ELEMENT_LINK" => "",
                                        "ALX_POPUP_TITLE" => "",
                                        "POPUP_ANIMATION" => "0",
                                        "POPUP_DELAY" => "0"
                                    ),
                                    false
                                );

                                ?>
                            </a>, <br> и с вами свяжется менеджер
                        </div>
                    </div>
                    <div class="landing-how__item">
                        <div class="landing-how__num"><span>2</span></div>
                        <div class="landing-how__info">
                            Подпишите договор и получите пароль для входа
                        </div>
                    </div>
                    <div class="landing-how__item">
                        <div class="landing-how__num"><span>3</span></div>
                        <div class="landing-how__info">
                            Авторизуйтесь на <a href="https://br.mts.by" target="_blank">портале</a>, используя ваш e-mail и пароль для входа в систему
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-cost" id="landing-cost">
            <div class="landing-container">
                <div class="landing-cost__wrap">
                    <div class="landing-cost__item">
                        <div class="landing-cost__inner">
                            <h4>Стоимость SMS-рассылки</h4>
                            <div class="landing-cost__msg">
                                В сеть МТС – 0,015 руб.
                            </div>
                            <div class="landing-cost__msg">
                                В сети др. операторов – 0,017 руб.
                            </div>
                            <div class="landing-cost__msg">
                                Сообщение за границу – 0,2 руб.
                            </div>
                        </div>
                    </div>
                    <div class="landing-cost__item">
                        <div class="landing-cost__inner">
                            <h4>Стоимость Viber-рассылки</h4>
                            <div class="landing-cost__msg">
                                Сервисное сообщение – 0,01 руб.
                            </div>
                            <div class="landing-cost__msg">
                                Рекламное сообщение – 0,03 руб.
                            </div>
                            <div class="landing-cost__msg">
                                Альфа-имя – 500 руб./мес.
                            </div>
                            <div class="landing-cost__add">
                                В абонентскую плату включена стоимость сервисных и рекламных сообщений
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-calc">
            <div class="landing-container">
                <h2>Рассчитайте стоимость сообщений</h2>

                <div class="landing-calc__wrap">
                    <div class="landing-calc__form">
                        <form action="#" method="post">
                            <div class="landing-calc__msg">Укажите количество</div>
                            <div class="landing-calc__item">
                                <div class="landing-calc__label">SMS в сеть МТС</div>
                                <input type="text" maxlength="4" id="smsMts" placeholder="0">
                            </div>
                            <div class="landing-calc__item">
                                <div class="landing-calc__label">SMS в другие сети</div>
                                <input type="text" maxlength="4" id="smsAnother" placeholder="0">
                            </div>
                            <div class="landing-calc__item">
                                <div class="landing-calc__label">SMS за границу</div>
                                <input type="text" maxlength="4" id="smsAbroad" placeholder="0">
                            </div>
                            <div class="landing-calc__item">
                                <div class="landing-calc__label">Сервисных Viber-сообщений</div>
                                <input type="text" maxlength="4" id="serviceViber" placeholder="0">
                            </div>
                            <div class="landing-calc__item">
                                <div class="landing-calc__label">Рекламных Viber-сообщений</div>
                                <input type="text" maxlength="4" id="advertisingViber"  placeholder="0">
                            </div>
                            <div class="landing-calc__btn">
                                <a href="#" class="btn" id="totalCount">Рассчитать</a>
                            </div>
                        </form>
                    </div>
                    <div class="landing-calc__total">
                        <div class="landing-calc-in">
                            <div class="landing-calc-in__top">Стоимость всех сообщений</div>
                            <div class="landing-calc-in__total">
                                <span id="landing-calc-in__total">0</span> руб.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-question" id="landing-question">
            <div class="landing-container">
                <h2>Часто задаваемые вопросы</h2>
                <div class="accordeon">
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">Что такое «МТС Коммуникатор»?</a>
                        <div class="accordeon__info">
                            Это массовая отправка SMS, Viber-уведомлений с расширенной пропускной способностью.
                        </div>
                    </div>
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">Для кого предназначена платформа</a>
                        <div class="accordeon__info">
                            <p>
                                Для магазинов:<br>
                                информирование о проводимых акциях, скидках, новинках, специальных предложениях, бонусных баллах и т.п.
                            </p>
                            <p>
                                Для салонов красоты:<br>
                                информирование клиентов об услугах, скидках, новинках, поздравление клиентов с днем рождения и др. праздниками и т.п.;
                            </p>

                            <p>
                                Для  турагентств:<br>
                                оповещение клиентов о новых услугах, о времени вылета/прилета рейсов и т.п.;
                            </p>
                            <p>
                                Для образовательных центров и государственных учреждений (ЖЭСы, налоговые службы, суды и др.):<br>
                                информирование клиентов о новых услугах, времени работы учреждений и т.п.
                            </p>
                        </div>
                    </div>
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">SMS и Viber-рассылка</a>
                        <div class="accordeon__info">
                            <div class="table-wrap">
                                <table>
                                    <tr>
                                        <th>SMS</th>
                                        <th>Viber</th>
                                    </tr>
                                    <tr>
                                        <td>в сеть МТС  - 0,015 BYN</td>
                                        <td>сервисное сообщение - 0,01 BYN</td>
                                    </tr>
                                    <tr>
                                        <td>в другие сети - 0,017 BYN</td>
                                        <td>рекламное сообщение - 0,03 BYN</td>
                                    </tr>
                                    <tr>
                                        <td>в другие страны - 0,2 BYN</td>
                                        <td>В абонентскую плату включена стоимость сервисных и рекламных сообщений</td>
                                    </tr>
                                </table>
                            </div>
                            Все тарифы приведены в белорусских рублях с учетом НДС.
                        </div>
                    </div>
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">Как воспользоваться рассылкой?</a>
                        <div class="accordeon__info">
                            <p>
                                Обратитесь в Салон МТС или к Вашему персональному менеджеру, подключите тарифный план «SMS Информ», заполните регистрационную форму и получите пароль для входа в систему.
                            </p>
                            <p>
                                Авторизуйтесь на портале по ссылке  <a href="https://br.mts.by/">https://br.mts.by/</a>),  используя полученный пароль и адрес электронной почты, указанный при регистрации.
                            </p>
                            <p>
                                После утверждения альфа-номера* сформируйте рассылку в системе: создайте текст и загрузите список номеров.
                            </p>
                            <p>
                                Проводите рассылку**.
                            </p>
                            *Порядок утверждения альфа-номера и правила текста рассылки смотрите в Правилах оказания услуг.<br>
                            **Списание за услугу будет происходить с номера телефона, указанного при регистрации.

                        </div>
                    </div>
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">Как получить пароль для первого входа в систему</a>
                        <div class="accordeon__info">
                            Пароль будет Вам выдан в Салоне МТС при подключении на тарифный план «SMS Информ».
                        </div>
                    </div>
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">Что такое альфаномер?</a>
                        <div class="accordeon__info">
                            <p>
                                Альфаномер – цифро-буквенная замена номера телефона, с которого вашим клиентам будут приходить сообщения по каналам SMS и/или Viber.
                            </p>
                            <p>
                                Альфа-номера должны соответствовать следующим критериям:
                            </p>
                            <ul>
                                <li>
                                    Альфа-номер не должен содержать знаки товаров/услуг, товарные знаки, фирменное наименование или имена собственные, на которые Пользователь не может подтвердить свои права на использование и т.д.;
                                </li>
                                <li>
                                    по своему содержанию Альфа-номер должен соответствовать социальным, моральным и этическим принципам (не содержать слов, оскорбляющих человеческое достоинство, пропагандирующих насилие, расовую или национальную вражду и т.п.);
                                </li>
                                <li>
                                    Альфа-номер не должен содержать несуществующий или фальсифицированный адрес отправителя;
                                </li>
                                <li>
                                    Альфа-номер не должен вводить получателя в заблуждение относительно характера и сути предоставляемых услуг Пользователя, должно позволять определить отправителя данного сообщения;
                                </li>
                                <li>
                                    Альфа-номер должен содержать 11 буквенных латинских символов или комбинации букв латинского алфавита и цифр для отправки сообщений по каналу SMS и не должна превышать 30 символов для отправки сообщений по каналу Viber;
                                </li>
                                <li>
                                    Альфа-номер должен использоваться для отправки сообщений с информацией об услугах/товарах/работах только Пользователя:
                                </li>
                                <li>
                                    допускается комбинация строчных и прописных букв и знаков препинания;
                                </li>
                                <li>
                                    не допускается использование пробелов;
                                </li>
                                <li>
                                    соответствовать социальным, моральным и этическим нормам;
                                </li>
                                <li>
                                    не содержать ненормативную лексику;
                                </li>
                                <li>
                                    не содержать фамилии политиков и другие наименования, которые нарушают законодательство Республики Беларусь.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">Как узнать баланс?</a>
                        <div class="accordeon__info">
                            Ваш баланс Вы можете узнать при обращении в контактный центр МТС по номеру 0990, у Вашего персонального менеджера или в личном кабинете Интернет-помощника.
                        </div>
                    </div>
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">Как узнать, что рассылка прошла успешно?</a>
                        <div class="accordeon__info">
                            Статус рассылки Вы можете посмотреть в личном кабинете в разделе «Статистика» в виде визуального отчета, табличной выгрузки и сводной статистики, выбрав нужный Вам вид отчета.
                        </div>
                    </div>
                    <div class="accordeon__item">
                        <a href="#" class="accordeon__link">Какие полезные функции выполняет платформа?</a>
                        <div class="accordeon__info">
                            <p>
                                На платформе «МТС Коммуникатор» Вы можете воспользоваться такими полезными функциями, как:
                            </p>
                            <ul>
                                <li>
                                    транслитерация текстов сообщений, которая позволяет автоматически переводить текст кириллического алфавита в латинский и наоборот;
                                </li>
                                <li>
                                    калькулятор стоимости рассылок позволяет определить стоимость всех сообщений перед покупкой;
                                </li>
                                <li>
                                    получать подробные отчеты по каждому виду рассылки.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-contacts" id="landing-contacts">
            <div class="landing-container">
                <h2 class="t-center">Контакты</h2>
                <div class="landing-contacts__wrap">
                    <div class="landing-contacts__item">
                        <div class="landing-contacts__top">Нужна помощь?</div>
                        <a href="https://help.mts.by/hc/ru/requests/new" class="btn" target="_blank">Онлайн-поддержка</a>
                    </div>
                    <div class="landing-contacts__item">
                        <div class="landing-contacts__top">Короткий номер</div>
                        <div class="short-n">0990</div>
                        <div class="short-n-add">пн-пт: 9:00 – 18:00</div>
                    </div>
                    <div class="landing-contacts__item">
                        <div class="landing-contacts__top">Телефоны в регионах</div>
                        <div class="landing-contacts-number">
                            +375 29 777-68-69
                        </div>
                        <div class="landing-contacts-select">
                            <select name="" id="landing-contacts-select" class="fs">
                                <option value="Минск">Минск</option>
                                <option value="Брест">Брест</option>
                                <option value="Витебск">Витебск</option>
                                <option value="Гомель">Гомель</option>
                                <option value="Гродно">Гродно</option>
                                <option value="Могилев">Могилев</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?$APPLICATION->IncludeComponent(
    "ns:offices.list",
    ".default",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "ID",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => IB_MAPS_OFFICES,
        "IBLOCK_TYPE" => "maps_content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "999",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "OFFICES_CITY",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "PROPERTY_OFFICES_CITY",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => ".default",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "USE_CORP_DEPARTS" => "N",
        "DEPART_FILTER" => array(
            0 => "426",
        )
    ),
    false
);?>

    <script src="/other/lp-br/build/js/libs.min.js"></script>
    <script src="/other/lp-br/build/js/interface.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>