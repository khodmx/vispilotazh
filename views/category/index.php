<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>

<section class="main-section set-bg" data-setbg="img/">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="title-text">
          <h1>Высший пилотаж -</h1>
            <h2>Онлайн услуги юриста<br />в любой точке России</h2>
              <h3>От консультации<br />до сложнейших<br /> судебных дел</h3>
                <a href="<?= $url = Url::to(['site/contact']); ?>" class="boxed-btn4 bn28">Связаться с нами</a>
              </div>
            </div>
          </div>
        </div>
      <div class="statue d-none d-xl-block">
    <?= Html::img('@web/img/hero-right.png', ['alt' => 'statue']) ?>
  </div>
</section>

<section class="search">
  <div class="container">
    <div class="row justify-content-center">
      <div class="form">
        <button type="submit" class="btn btn-default"><i class="fa fa-search fa-2x"></i></button>
          <form method="get" action="<?= \yii\helpers\Url::to(['/category/search'])?>">
            <input type="text" class="form-control form-input" placeholder="Найти услугу" name="s">
          </form>
        </div>
      </div>
    </div>
</section>

<section class="start-section">
  <div class="container">
    <div class="section_our_services">
      <div class="row justify-content-center">
        <div class="our_service_category">
          <div class="service_cards_box">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="service_card_online">
                    <div class="hover_color_bubble"></div>
                      <div class="service_card_title">
                        <h1>Онлайн консультация</h1>
                      </div>
                    <div class="service_card_description">
                  <p>
                    Онлайн консультация по юридическим вопросам в формате видеозвонка или письменно в чате
                  </p>
                  <a href="https://vk.com/uslugi-201751672?w=product-201751672_9489952%2Fquery">
                    <button type="button" class="service_card_online_button">Подробнее<br>об услуге</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <div class="service_card_doc">
          <div class="hover_color_bubble"></div>
            <div class="service_card_title">
              <h1>Документы</h1>
            </div>
          <div class="service_card_description">
            <p>
              • Иски
              <br>
              • Претензии
              <br>
              • Жалобы
              <br>
              • Арбитраж пакет документов для суда (претензия, иск) 
            </p>
              <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919559%2Fquery">
                <button type="button" class="service_card_doc_button">Подробнее<br>об услуге</button>
              </a>
            </div>
          </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="service_card_arb">
                  <div class="hover_color_bubble"></div>
                    <div class="service_card_title">
                      <h1>Арбитраж</h1>
                    </div>
                  <div class="service_card_description">
                    <p>
                      • Взыскание задолженности по договорам
                      <br>
                      • Защита по необоснованным искам
                      <br>
                      • Оспаривание сделок
                      <br>
                      • Представление интересов кредитора в банкротстве должника 
                    </p>
                    <p>
                      Судебное представительство включает в себя полное сопровождение квалифицированным юристом/адвокатом дела в суде первой инстанции.
                      <br>
                      От подачи иска до получения решения. 
                    </p>
                    <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919562%2Fquery">
                        <button type="button" class="service_card_arb_button">Подробнее<br>об услуге</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="service_card_protect">
              <div class="hover_color_bubble"></div>
                <div class="service_card_title">
                  <h1>Защита прав потребителей</h1>
                </div>
              <div class="service_card_description">
                <p>
                  Помощь гражданам/организациям<br>в урегулировании споров в сфере продажи товаров/оказания услуг, подпадающих под действие закона<br>РФ «О защите прав потребителей». 
                </p>
                <p>
                  Включает в себя досудебное урегулирование спора, экспертизу товара, судебное представительство
                </p>
                <a href="https://vk.com/uslugi-201751672?w=product-201751672_6057854%2Fquery">
                  <button type="button" class="service_card_protect_button">Подробнее<br>об услуге</button>
                </a>
              </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="service_card_collection">
                    <div class="hover_color_bubble"></div>
                      <div class="service_card_title">
                        <h1>Взыскание долгов</h1>
                      </div>
                    <div class="service_card_description">
                  <p>
                    По договору займа (расписке), обращение взыскания на имущество, дебиторская задолженность, арест имущества
                  </p>
                  <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919579%2Fquery">
                    <button type="button" class="service_card_collection_button">Подробнее<br>об услуге</button>
                  </a>
                </div>
              </div>
            </div>
          </div>  
        <div class="row">
          <div class="col-md-6">
            <div class="service_card_pledge">
              <div class="hover_color_bubble"></div>
                <div class="service_card_title">
                  <h1>Взыскание долгов<br> с обращением взыскания на залог</h1>
                </div>
              <div class="service_card_description">
                <p>
                  По договору займа (расписке) и обращение взыскания на залог
                </p>
                <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919578%2Fquery">
                  <button type="button" class="service_card_button">Подробнее<br>об услуге</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>

<section class="vertical-section set-bg spad">
  <div class="container">
    <div class="section_our_services">
      <div class="row justify-content-center">
        <div class="our_service_category">
          <div class="service_cards_box">
            <div class="col-xl-4 col-lg-12 my-col text-center">
              <div class="service_card_divorce">
                <div class="hover_color_bubble"></div>
                  <div class="service_card_title text-center">
                    <h1>Бракоразводный процесс</h1>
                  </div>
                <div class="service_card_description text-center">
                  <p class="service_card_text_alt">
                    Судебное представительство в бракоразводном процессе: расторжение брака, раздел совместного имущества и долгов.
                    <br>
                    Судебное представительство включает в себя полное сопровождение квалифицированным юристом/адвокатом дела в суде первой инстанции
                  </p>
                  <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919588%2Fquery">
                    <button type="button" class="service_card_alt_button">Подробнее<br>об услуге</button>
                  </a>
                </div>
              </div>
            </div>
          <div class="col-xl-4 col-lg-12 my-col text-center">
            <div class="service_card_children">
              <div class="hover_color_bubble"></div>
                <div class="service_card_title text-center">
                  <h1>Споры<br> о детях</h1>
                </div>
              <div class="service_card_description text-center">
                <p class="service_card_text_alt">
                  Лишение родительских прав, определение места жительства ребенка, порядок общения с ребенком.
                  Судебное представительство включает в себя полное сопровождение квалифицированным юристом/адвокатом дела в суде первой инстанции
                </p>
                <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919587%2Fquery">
                  <button type="button" class="service_card_children_button">Подробнее<br>об услуге</button>
                </a>
              </div>
            </div>
          </div>
        <div class="col-xl-4 col-lg-12 my-col text-center">
          <div class="service_card_heritage">
            <div class="hover_color_bubble"></div>
              <div class="service_card_title text-center">
                <h1>Наследственные дела</h1>
              </div>
            <div class="service_card_description text-center">
              <p class="service_card_text_alt">
                Оспаривание завещания, выдел супружеской доли, признание права на единоличную собственность. 
                Судебное представительство включает в себя полное сопровождение квалифицированным юристом/адвокатом дела в суде первой инстанции
              </p>
              <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919584%2Fquery">
                <button type="button" class="service_card_heritage_button">Подробнее<br>об услуге</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<section class="block-section_penultimate_services">
  <div class="container">
    <div class="section_our_services">
      <div class="row justify-content-center">
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 row-cols-xl-2 g-4">
          <div class="our_service_category">
            <div class="service_cards_box">
              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
                <div class="service_card">
                  <div class="hover_color_bubble"></div>
                    <div class="service_card_title">
                      <h1>Банкротство физических лиц<br>через суд</h1>
                    </div>
                  <div class="service_card_alt_description">
                    <p>
                      Полное сопровождение процедуры банкротства в Арбитражном суде
                    </p>
                    <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919561%2Fquery">
                      <button type="button" class="service_card_bankruptcy_button">Подробнее<br>об услуге</button>
                    </a>
                  </div>
                </div>
              </div> 
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
              <div class="service_card">
                <div class="hover_color_bubble"></div>
                  <div class="service_card_title">
                    <h1>Жилищные споры</h1>
                  </div>
                  <div class="service_card_description">
                    <p>
                      Вселение/выселение, определение порядка пользования жильём, взыскание ЖКУ, раздел счетов по ЖКУ, защита прав потребителей по ЖКУ
                    </p>
                    <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919566%2Fquery">
                      <button type="button" class="service_card_button">Подробнее<br>об услуге</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <div class="service_cards_box">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
              <div class="service_card">
                <div class="hover_color_bubble"></div>
                  <div class="service_card_title">
                    <h1>Банкротство физических лиц<br>через МФЦ</h1>
                  </div>
                <div class="service_card_alt_description">
                  <p>
                    Подготовка пакета документов для процедуры банкротства через МФЦ
                  </p>
                  <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919560%2Fquery">
                    <button type="button" class="service_card_bankruptcy_button">Подробнее<br>об услуге</button>
                  </a>
                </div>
              </div>
            </div>
          <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
            <div class="service_card">
              <div class="hover_color_bubble"></div>
                <div class="service_card_title">
                  <h1>Земельные споры</h3>
                </div>
              <div class="service_card_description">
                <p class="land">
                  Узаконивание самовольной постройки, земельные границы участка, раздел в натуре дома и участка, получение разрешения на строительство, приватизация земли
                </p>
                <a href="https://vk.com/uslugi-201751672?w=product-201751672_6053055%2Fquery">
                  <button type="button" class="service_card_land_button">Подробнее<br>об услуге</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<section class="block-section_last_services">
  <div class="container">
    <div class="section_our_services">
      <div class="row justify-content-center">
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 row-cols-xl-2 g-4">
          <div class="our_service_category">
            <div class="service_cards_box">
              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
                <div class="service_card">
                  <div class="hover_color_bubble"></div>
                    <div class="service_card_title">
                      <h1>Кредит под залог<br>недвижимости</h1>
                    </div>
                  <div class="service_card_credit_description">
                    <p>
                      Кредит от 8 %.<br>Цена недвижимости<br>от 500 тысяч рублей
                    </p>
                    <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919556%2Fquery">  
                      <button type="button" class="but6">Подробнее<br>об услуге</button>
                    </a>
                  </div>
                </div>
              </div> 
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
              <div class="service_card">
                <div class="hover_color_bubble"></div>
                  <div class="service_card_title">
                    <h1>Уголовные дела</h1>
                  </div>
                  <div class="service_card_criminal_description">
                    <p>
                      Уголовные дела любой сложности.
                      <br>
                      Все документы отправляете в индивидуальный чат, после онлайн оплаты. В чате получаете отчет юриста о движении вашего дела.
                      <br>Решение суда получаете почтой
                    </p>
                    <a href="https://vk.com/uslugi-201751672?w=product-201751672_9410586%2Fquery">
                      <button type="button" class="service_card_criminal_button">Подробнее<br>об услуге</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <div class="service_cards_box">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
              <div class="service_card">
                <div class="hover_color_bubble"></div>
                  <div class="service_card_title">
                    <h1>Помощь в получении<br>ипотеки/кредита</h1>
                  </div>
                  <div class="service_card_credit_description">
                    <p>
                      Стоимость 60 000 рублей при одобрении банка.<br>
                      Предоплата 10 000 рублей
                    </p>
                    <a href="https://vk.com/uslugi-201751672?w=product-201751672_9410526%2Fquery">
                      <button type="button" class="service_card_alt_button">Подробнее<br>об услуге</button>
                    </a>
                  </div>
                </div>
              </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
              <div class="service_card">
                <div class="hover_color_bubble"></div>
                  <div class="service_card_title">
                    <h1>Исполнительное производство</h1>
                  </div>
                  <div class="service_card_description">
                    <p class="enforcement">
                      Взыскание долгов по исполнительным документам.
                      <br>
                      Помощь в работе с приставами
                    </p>
                      <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919557%2Fquery">
                        <button type="button" class="service_card_enforcement_button">Подробнее<br>об услуге</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <div class="service_cards_box">
              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
                <div class="service_card_large">
                  <div class="hover_color_bubble"></div>
                    <div class="service_card_title">
                      <h1>Автоюрист</h1>
                    </div>
                  <div class="service_card_large_description">
                    <p>
                      Оспаривание органов ГИБДД о привлечении к административной ответственности, в том числе лишение прав за управление автомобилем в "нетрезвом " состоянии, отказ от прохождения мед освидетельствования и др. Споры со страховыми компаниями, финансово уполномоченными РФ, по размеру выплат в возмещение ущерба от ДТП. Защита интересов потерпевших в ДТП при причинении вреда здоровью. Взыскание морального вреда
                    </p>
                    <a href="https://vk.com/uslugi-201751672?w=product-201751672_5919563%2Fquery">
                      <button type="button" class="service_card_large_car_button">Подробнее<br>об услуге</button>
                    </a>
                  </div>
                </div>
              </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
              <div class="service_card_large">
                <div class="hover_color_bubble"></div>
                  <div class="service_card_title">
                    <h1>Недвижимость</h1>
                  </div>
                  <div class="service_card_large_description">
                    <p>
                      • Полное сопровождение сделок по купле/продаже недвижимости в любом регионе РФ.<br>
                      • Поиск объектов/поиск покупателей грамотным агентом<br>
                      • Полное юридическое сопровождение сделки юристом/адвокатом<br>
                      • «Сложные» сделки (в том числе требующие судебных разбирательств, выселения «жильцов», восстановления документов, признания собственности через суд)<br>
                      • Помощь в получении ипотеки/кредита
                    </p>
                    <a href="https://vk.com/uslugi-201751672?w=product-201751672_9410957%2Fquery">
                      <button type="button" class="service_card_large_real_estate_button">Подробнее<br>об услуге</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="about_us">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="slider">
          <ul>
            <li class="item current">
              <div class="cardaboutus" id="aboutus">
                <div class="info">
                  <div class="text-center">
                    <h1 class="about">О нас</h1>
                      <p>
                        Наша команда собрала в себе высококлассных профессионалов в области юридических услуг и услуг по недвижимости. Каждый из нас отвечает за свою область деятельности и нацелен на достижение высоких результатов, а главное для нас — это видеть радость от результата нашей работы в глазах довольных клиентов!
                        <br>
                        Мы делаем все для того, чтобы сотрудничество с нами было максимально<br> Легко и Удобно нашим партнерам. Для этого мы организовали онлайн оказание услуг, что явно имеет ряд преимуществ.
                      </p>
                    </div>
                  </div>
                </div>
              </li>
            <li class="item">
              <div class="cardaboutus">
                <div class="info">
                  <div class="text-center">
                    <h2 class="advantages">Наши преимущества</h2>
                      <p>
                        • Вы можете быть с нами на связи с любой точки земного шара, отдыхая на берегу ласкового моря дать нам поручение приобрести для Вас недвижимость или выиграть дело в суде!
                        Мы работаем, пока Вы отдыхаете!
                        <br>
                        • Расстояние для нас не проблема! У нашей команды есть успешный опыт работы с регионами, в том числе Москва, Мурманск, Краснодар и другие.
                        Современные технологии позволяют вести дела в режиме онлайн, в том числе подача документов в суды, регистрация сделок с недвижимостью, онлайн участие в судебных процессах.
                        И никакая пандемия нам не страшна!
                        <br>
                        Принципы нашей работы:
                        <br>
                        «Легко и Удобно!»
                        <br>
                        «Честность и открытость!»
                        <br>
                        «Качество услуг!»
                      </p>
                    </div>
                  </div>
                </div>
              </li>
            <li class="item">
              <div class="cardaboutus">
                <div class="info">
                  <div class="text-center">
                    <h2>Наша команда:</h2>
                      <h3>Левенков Алексей Геннадьевич</h3>
                        <h4>Специалист по недвижимости с 2010 года</h4>
                          <p>
                            Купить/Продать, кто знает лучше чем он? Найдет самое выгодное и интересное для Вас предложение! Поможет с одобрением ипотеки, получения кредита.
                            <br>
                            Нет задач, которые не имели бы решения!
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                <li class="item">
                  <div class="cardaboutus">
                    <div class="info">
                      <div class="text-center">
                        <h3>Ахметчина Алевтина Геннадьевна</h3>
                          <h4>Адвокат</h4>
                            <p class="about_info">
                              Профессиональное образование:
                              <br>
                              2005 СПб Гуманитарный Университет Профсоюзов "Экономика и управление"
                              <br>
                              2012 Институт правоведения и предпринимательства "Юриспруденция"
                              <br>
                              Наличие юридического и экономического образования делает успешной мою работу по сопровождению бизнеса юридических лиц.
                            </p>
                            <p class="about_info">
                              В числе партнеров ООО «Служба экономической безопасности», ООО «Логистик Строй», ООО «СМУ-101 Рент», ООО «Фонд бридж», ООО «Систем Вент» и многие другие.
                            </p>
                            <p class="about_info">
                              Я оказываю услуги в сфере гражданского и уголовного права. Опыт работы в статусе Адвоката с 2013 года и ведение дел различной направленности позволил мне получить бесценный профессиональный опыт, который я с удовольствием использую в своей работе. Я честна и открыта со своими Доверителями, ответственно подхожу к каждому делу. Каждая ситуация имеет решение! Я благодарна своим клиентам, ведь каждый из Вас для меня уникален и интересен!
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                  <li class="item">
                    <div class="cardaboutus">
                      <div class="info">
                        <div class="text-center">
                          <h3>Егорова Анна Николаевна</h3>
                            <h4>Старший юрист</h4>
                              <p class="about_info">
                                В 2008 году окончила Ленинградский государственный университет им. А.С. Пушкина, по специальности «Юриспруденция».
                                В 2005 году, будучи студенткой, начала трудовую деятельность в Пушкинском районном суде Санкт-Петербурга, где проработала 16 лет, последовательно занимая должности секретаря судебного заседания, помощника судьи, начальника отдела. Большой опыт работы в судебной системе позволяет мне браться за дела любой сложности.
                              </p>
                              <p class="about_info">
                                Я постоянно стремлюсь к повышению своего профессионального уровня, хорошо ориентируюсь в действующем законодательстве и правильно его применяю.
                              </p>
                              <p class="about_info">
                                Специализация: гражданское и административное право.
                              </p>
                            </div>
                          </div>
                        </div>
                      </li>
                    <li class="item">
                      <div class="cardaboutus">  
                        <div class="info">
                          <div class="about_me">
                            <h3>Ходаков Максим Игоревич</h3>
                              <h4>Программист, веб-дизайнер</h4>
                                <p>
                                  Разрабатываю и занимаюсь поддержкой сайта компании.
                                  На постоянной основе развиваю и совершенствую свои 
                                  навыки в дизайне и вёрстке. 
                                  <br>
                                  По вопросам сотрудничества: 
                                  <a class="link underlined-link" href="https://t.me/khodmx">
                                    telegram @khodmx
                                  </a>
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    <nav>
                      <a href="#" class="prev">
                        <i class="fa fa-angle-left fa-5x" aria-hidden="true"></i>
                      </a>
                      <a href="#" class="next">
                        <i class="fa fa-angle-right fa-5x" aria-hidden="true"></i>
                      </a>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
</section>  

<section class="extra-section set-bg spad" id="doc">
  <div class="container">
    <div class="section_our_services">
      <div class="row justify-content-center">
        <div class="our_service_category">
          <div class="service_cards_box">
            <div class="col-xl-4 col-lg-12 my-col text-center">
              <a href = "https://vk.com/uristuslugionline?w=app6326142_-201751672"> 
                <div class="service_card_reviews">
                  <div class="hover_color_bubble"></div>
                    <div class="service_card_title text-center">
                      <h1>Отзывы</h1>
                    </div>
                  </div>
                </a>
              </div>
            <div class="col-xl-4 col-lg-12 my-col text-center">
              <a href ="https://vk.com/album-201751672_276793397">
                <div class="service_card_certificates">
                  <div class="hover_color_bubble"></div>
                    <div class="service_card_title text-center">
                      <h1>Сертификаты</h1>
                    </div>
                  </div>
                </a>
              </div>
            <div class="col-xl-4 col-lg-12 my-col text-center">
              <a href ="https://vk.com/album-201751672_281871223">
                <div class="service_card_gratitude">
                  <div class="hover_color_bubble"></div>
                    <div class="service_card_title text-center">
                      <h1>Благодарности</h1>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="price" id="pricelist">
  <div class="container">
    <div class="row justify-content-center">
      <div class="price_card">  
        <div class="text-center"> 
          <h1>Прайс-лист услуг</h1>
        </div> 
        <h2>Вид услуги</h2>                                                                             
          <h2 class="text_right">Цена (₽)</h2>
            <p>Экспресс консультация</p><br><p class="text_right">500</p>
            <p>Онлайн консультация</p><br><p class="text_right">2&nbsp;000</p>
            <p>Документы: иск</p><br><p class="text_right">от 7&nbsp;000</p>
            <p>Документы: претензия</p><br><p class="text_right">от 5&nbsp;000</p>
            <p>Документы: жалоба</p><br><p class="text_right">от 5&nbsp;000</p>
            <p>Арбитраж пакет документов для суда (претензия, иск)</p><br><p class="text_right">от 25&nbsp;000</p>
            <p>Помощь в получении ипотеки/кредита</p><br><p class="text_right">по договорённости</p>
            <p>Взыскание долгов:</p>
            <p>по договору займа (расписке)</p><br><p class="text_right">по договорённости</p>
            <p>по договору займа и обращение взыскания на залог</p><br><p class="text_right">100&nbsp;000</p>
            <p>Банкротство физического лица через МФЦ</p><br><p class="text_right">50&nbsp;000</p>
            <p>Банкротство физического лица через суд</p><br><p class="text_right">90&nbsp;000</p>
            <p>Банкротство юридического лица через суд</p><br><p class="text_right">350&nbsp;000</p>
            <p>Автоюрист</p><br><p class="text_right">50&nbsp;000</p>
            <p>Жилищные споры</p><br><p class="text_right">60&nbsp;000</p>
            <p>Земельные споры</p><br><p class="text_right">по договорённости</p>
            <p>Споры о детях</p><br><p class="text_right">80&nbsp;000</p>
            <p>Бракоразводный процесс</p><br><p class="text_right">100&nbsp;000</p>
            <p>Наследственные дела</p><br><p class="text_right">150&nbsp;000</p>
            <p>Арбитраж</p><br><p class="text_right">100&nbsp;000</p>
            <p>Недвижимость</p><br><p class="text_right">по договорённости</p>
            <p>Уголовные дела</p><br><p class="text_right">по договорённости</p>
            <p>Кредит под залог недвижимости</p><br><p class="text_right">по договорённости</p>
            <p>Исполнительное производство: взыскание долгов</p><br><p class="text_right">по договорённости</p>
            <p>Защита прав потребителей</p><br><p class="text_right">50&nbsp;000 рублей + 10% от взысканной суммы</p>
            </div>
          </div>
        </div>
</section>

<section class="contacts d-flex flex-column">
  <footer class="contacts_info" id="contacts">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-xl-12 col-lg-12 col-md-12 mb-4 mb-lg-0">
          <h1>Контакты</h1>
          <p>Наш телефон:<a class="link underlined-link" href ="tel:+79522883238" class="telephone"> +7 (952) 288-32-38</a>&nbsp;<i class="fa fa-phone fa-flip-horizontal"></i></a></p>
          <p>Наша почта: <a class="link underlined-link" href="mailto:vispilotazh@yandex.ru">vispilotazh@yandex.ru</a>&nbsp;<i class="fa fa-envelope-o" aria-hidden="true"></i></p>
          <p>Мы в социальных сетях:</p>
            <ul class="icon-list">
              <li class="icon-item">
                <a href="https://vk.com/uristuslugionline" class="icon-link"><i class="fa fa-vk fa-lg"></i></a>
              </li>
              <li class="icon-item">
                <a href="https://api.whatsapp.com/send/?phone=89522883238&text&app_absent=0" class="icon-link"><i class="fa fa-whatsapp fa-lg"></i></a>
              </li>
              <li class="icon-item">
                <a href="https://t.me/vispilotazh" class="icon-link"><i class="fa fa-telegram fa-lg"></i></a>
              </li>  
            </ul>
          </div>
        </div>
      </div>
    </footer>
</section>