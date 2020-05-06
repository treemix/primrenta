<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories_arg = array(
            'courier' => array(
                'name' => 'Курьерские услуги',
                'slug' => 'courier',
                'description' => 'Курьерские услуги',
                'parent' => array(
                    'pedestrian' => array(
                        'name' => 'Услуги пешего курьера',
                        'slug' => 'pedestrian',
                        'description' => 'Услуги пешего курьера',
                    ),
                    'car' => array(
                        'name' => 'Услуги курьера на легковом авто',
                        'slug' => 'car',
                        'description' => 'Услуги курьера на легковом авто',
                    ),
                    'courierbuyanddelivery' => array(
                        'name' => 'Купить и доставить',
                        'slug' => 'courierbuyanddelivery',
                        'description' => 'Купить и доставить',
                    ),
                    'expressdelivery' => array(
                        'name' => 'Срочная доставка',
                        'slug' => 'expressdelivery',
                        'description' => 'Срочная доставка',
                    ),
                    'productsdelivery' => array(
                        'name' => 'Доставка продуктов',
                        'slug' => 'productsdelivery',
                        'description' => 'Доставка продуктов',
                    ),
                    'restaurantfooddelivery' => array(
                        'name' => 'Доставка еды из ресторанов',
                        'slug' => 'restaurantfooddelivery',
                        'description' => 'Доставка еды из ресторанов',
                    ),
                    'regularcourier' => array(
                        'name' => 'Курьер на день',
                        'slug' => 'regularcourier',
                        'description' => 'Курьер на день',
                    ),
                    'courierother' => array(
                        'name' => 'Другая посылка',
                        'slug' => 'courierother',
                        'description' => 'Другая посылка',
                    )
                ),
            ),
            'clerical' => array(
                'name' => 'Ремонт и строительство',
                'slug' => '',
                'description' => 'Ремонт и строительство',
                'parent' => array(
                    'repairsmall' => array(
                        'name' => 'Мастер на час',
                        'slug' => 'repairsmall',
                        'description' => 'Мастер на час',
                    ),
                    'complexflatrepair' => array(
                        'name' => 'Ремонт под ключ',
                        'slug' => 'complexflatrepair',
                        'description' => 'Ремонт под ключ',
                    ),
                    'repairplumbing' => array(
                        'name' => 'Сантехнические работы',
                        'slug' => 'repairplumbing',
                        'description' => 'Сантехнические работы',
                    ),
                    'repairelectric' => array(
                        'name' => 'Электромонтажные работы',
                        'slug' => 'repairelectric',
                        'description' => 'Электромонтажные работы',
                    ),
                    'facing' => array(
                        'name' => 'Отделочные работы',
                        'slug' => 'facing',
                        'description' => 'Отделочные работы',
                    ),
                    'ceilings' => array(
                        'name' => 'Потолки',
                        'slug' => 'ceilings',
                        'description' => 'Потолки',
                    ),
                    'floor' => array(
                        'name' => 'Полы',
                        'slug' => 'floor',
                        'description' => 'Полы',
                    ),
                    'tiling' => array(
                        'name' => 'Плиточные работы',
                        'slug' => 'tiling',
                        'description' => 'Плиточные работы',
                    ),
                    'repairfurniture' => array(
                        'name' => 'Сборка и ремонт мебели',
                        'slug' => 'repairfurniture',
                        'description' => 'Сборка и ремонт мебели',
                    ),
                    'repairdoors' => array(
                        'name' => 'Установка и ремонт дверей, замков',
                        'slug' => 'repairdoors',
                        'description' => 'Установка и ремонт дверей, замков',
                    ),
                    'glazingofbalconies' => array(
                        'name' => 'Окна, остекление, балконы',
                        'slug' => 'glazingofbalconies',
                        'description' => 'Окна, остекление, балконы',
                    ),
                    'roofingandfacadework' => array(
                        'name' => 'Кровельные и фасадные работы',
                        'slug' => 'roofingandfacadework',
                        'description' => 'Кровельные и фасадные работы',
                    ),
                    'heatingwatersupplysewerage' => array(
                        'name' => 'Отопление, водоснабжение, канализация',
                        'slug' => 'heatingwatersupplysewerage',
                        'description' => 'Отопление, водоснабжение, канализация',
                    ),
                    'insulationwork' => array(
                        'name' => 'Изоляционные работы',
                        'slug' => 'insulationwork',
                        'description' => 'Изоляционные работы',
                    ),
                    'buildinginstallationwork' => array(
                        'name' => 'Строительно-монтажные работы',
                        'slug' => 'buildinginstallationwork',
                        'description' => 'Строительно-монтажные работы',
                    ),
                    'buildingservices' => array(
                        'name' => 'Крупное строительство',
                        'slug' => 'buildingservices',
                        'description' => 'Крупное строительство',
                    ),
                    'securitysystems' => array(
                        'name' => 'Охранные системы',
                        'slug' => 'securitysystems',
                        'description' => 'Охранные системы',
                    ),
                    'clericalother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'clericalother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'trucking' => array(
                'name' => 'Грузоперевозки',
                'slug' => 'trucking',
                'description' => 'Грузоперевозки',
                'parent' => array(
                    'migrationfurniture' => array(
                        'name' => 'Перевозка вещей, переезды',
                        'slug' => 'migrationfurniture',
                        'description' => 'Перевозка вещей, переезды',
                    ),
                    'passengertransportation' => array(
                        'name' => 'Пассажирские перевозки',
                        'slug' => 'passengertransportation',
                        'description' => 'Пассажирские перевозки',
                    ),
                    'constructionfreight' => array(
                        'name' => 'Строительные грузы и оборудование',
                        'slug' => 'constructionfreight',
                        'description' => 'Строительные грузы и оборудование',
                    ),
                    'garbagetransportation' => array(
                        'name' => 'Вывоз мусора',
                        'slug' => 'garbagetransportation',
                        'description' => 'Вывоз мусора',
                    ),
                    'drivers' => array(
                        'name' => 'Эвакуаторы',
                        'slug' => 'drivers',
                        'description' => 'Эвакуаторы',
                    ),
                    'intercitytransportation' => array(
                        'name' => 'Междугородные перевозки',
                        'slug' => 'intercitytransportation',
                        'description' => 'Междугородные перевозки',
                    ),
                    'loaderservices' => array(
                        'name' => 'Услуги грузчиков',
                        'slug' => 'loaderservices',
                        'description' => 'Услуги грузчиков',
                    ),
                    'foodstufftransportation' => array(
                        'name' => 'Перевозка продуктов',
                        'slug' => 'foodstufftransportation',
                        'description' => 'Перевозка продуктов',
                    ),
                    'manipulator' => array(
                        'name' => 'Услуги манипулятора',
                        'slug' => 'manipulator',
                        'description' => 'Услуги манипулятора',
                    ),
                    'truckingother' => array(
                        'name' => 'Другой груз',
                        'slug' => 'truckingother',
                        'description' => 'Другой груз',
                    )
                )
            ),
            'house' => array(
                'name' => 'Уборка и помощь по хозяйству',
                'slug' => 'house',
                'description' => 'Уборка и помощь по хозяйству',
                'parent' => array(
                    'housemaid' => array(
                        'name' => 'Поддерживающая уборка',
                        'slug' => 'housemaid',
                        'description' => 'Поддерживающая уборка',
                    ),
                    'regularhousemaid' => array(
                        'name' => 'Генеральная уборка',
                        'slug' => 'regularhousemaid',
                        'description' => 'Генеральная уборка',
                    ),
                    'windowswashing' => array(
                        'name' => 'Мытье окон',
                        'slug' => 'windowswashing',
                        'description' => 'Мытье окон',
                    ),
                    'garbage' => array(
                        'name' => 'Вынос мусора',
                        'slug' => 'garbage',
                        'description' => 'Вынос мусора',
                    ),
                    'clothesrepair' => array(
                        'name' => 'Помощь швеи',
                        'slug' => 'clothesrepair',
                        'description' => 'Помощь швеи',
                    ),
                    'cooking' => array(
                        'name' => 'Приготовление еды',
                        'slug' => 'cooking',
                        'description' => 'Приготовление еды',
                    ),
                    'clothes' => array(
                        'name' => 'Глажение белья',
                        'slug' => 'clothes',
                        'description' => 'Глажение белья',
                    ),
                    'carpetandfurniturecleaning' => array(
                        'name' => 'Химчистка',
                        'slug' => 'carpetandfurniturecleaning',
                        'description' => 'Химчистка',
                    ),
                    'animalcare' => array(
                        'name' => 'Уход за животными',
                        'slug' => 'animalcare',
                        'description' => 'Уход за животными',
                    ),
                    'gardening' => array(
                        'name' => 'Работы в саду, огороде, на участке',
                        'slug' => 'gardening',
                        'description' => 'Работы в саду, огороде, на участке',
                    ),
                    'caregivers' => array(
                        'name' => 'Сиделки',
                        'slug' => 'caregivers',
                        'description' => 'Сиделки',
                    ),
                    'childminder' => array(
                        'name' => 'Няни',
                        'slug' => 'childminder',
                        'description' => 'Няни',
                    ),
                    'houseother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'houseother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'virtualassistant' => array(
                'name' => 'Виртуальный помощник',
                'slug' => 'virtualassistant',
                'description' => 'Виртуальный помощник',
                'parent' => array(
                    'writing' => array(
                        'name' => 'Работа с текстом, копирайтинг, переводы',
                        'slug' => 'writing',
                        'description' => 'Работа с текстом, копирайтинг, переводы',
                    ),
                    'informationretrieval' => array(
                        'name' => 'Поиск и обработка информации',
                        'slug' => 'informationretrieval',
                        'description' => 'Поиск и обработка информации',
                    ),
                    'excelpowerpointetc' => array(
                        'name' => 'Работа в Excel, Power Point и т.д.',
                        'slug' => 'excelpowerpointetc',
                        'description' => 'Работа в Excel, Power Point и т.д.',
                    ),
                    'audiovideorecognition' => array(
                        'name' => 'Расшифровка аудио- и видеозаписей',
                        'slug' => 'audiovideorecognition',
                        'description' => 'Расшифровка аудио- и видеозаписей',
                    ),
                    'advertising' => array(
                        'name' => 'Размещение объявлений',
                        'slug' => 'advertising',
                        'description' => 'Размещение объявлений',
                    ),
                    'seo' => array(
                        'name' => 'Реклама и продвижение в интернете',
                        'slug' => 'seo',
                        'description' => 'Реклама и продвижение в интернете',
                    ),
                    'telephonecalls' => array(
                        'name' => 'Обзвон по базе',
                        'slug' => 'telephonecalls',
                        'description' => 'Обзвон по базе',
                    ),
                    'virtualassistantother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'virtualassistantother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'computerhelp' => array(
                'name' => 'Компьютерная помощь',
                'slug' => 'computerhelp',
                'description' => 'Компьютерная помощь',
                'parent' => array(
                    'computerrepair' => array(
                        'name' => 'Ремонт компьютеров и ноутбуков',
                        'slug' => 'computerrepair',
                        'description' => 'Ремонт компьютеров и ноутбуков',
                    ),
                    'softwareinstallation' => array(
                        'name' => 'Установка и настройка операц. систем, программ',
                        'slug' => 'softwareinstallation',
                        'description' => 'Установка и настройка операц. систем, программ',
                    ),
                    'antivirus' => array(
                        'name' => 'Удаление вирусов',
                        'slug' => 'antivirus',
                        'description' => 'Удаление вирусов',
                    ),
                    'internetsetup' => array(
                        'name' => 'Настройка интернета и Wi-Fi',
                        'slug' => 'internetsetup',
                        'description' => 'Настройка интернета и Wi-Fi',
                    ),
                    'hardwarerepair' => array(
                        'name' => 'Ремонт и замена комплектующих',
                        'slug' => 'hardwarerepair',
                        'description' => 'Ремонт и замена комплектующих',
                    ),
                    'datarecovery' => array(
                        'name' => 'Восстановление данных',
                        'slug' => 'datarecovery',
                        'description' => 'Восстановление данных',
                    ),
                    'printerrepair' => array(
                        'name' => 'Настройка и ремонт оргтехники',
                        'slug' => 'printerrepair',
                        'description' => 'Настройка и ремонт оргтехники',
                    ),
                    'computertraining' => array(
                        'name' => 'Консультация и обучение',
                        'slug' => 'computertraining',
                        'description' => 'Консультация и обучение',
                    ),
                    'computerhelpother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'computerhelpother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'promo' => array(
                'name' => 'Мероприятия и промоакции',
                'slug' => 'promo',
                'description' => 'Мероприятия и промоакции',
                'parent' => array(
                    'helpatevents' => array(
                        'name' => 'Помощь в проведении мероприятий',
                        'slug' => 'helpatevents',
                        'description' => 'Помощь в проведении мероприятий',
                    ),
                    'promodistribution' => array(
                        'name' => 'Раздача промо-материалов',
                        'slug' => 'promodistribution',
                        'description' => 'Раздача промо-материалов',
                    ),
                    'secretbuyers' => array(
                        'name' => 'Тайный покупатель',
                        'slug' => 'secretbuyers',
                        'description' => 'Тайный покупатель',
                    ),
                    'handyman' => array(
                        'name' => 'Разнорабочий',
                        'slug' => 'handyman',
                        'description' => 'Разнорабочий',
                    ),
                    'promoters' => array(
                        'name' => 'Промоутер',
                        'slug' => 'promoters',
                        'description' => 'Промоутер',
                    ),
                    'toastmaster' => array(
                        'name' => 'Тамада, ведущий, аниматор',
                        'slug' => 'toastmaster',
                        'description' => 'Тамада, ведущий, аниматор',
                    ),
                    'models' => array(
                        'name' => 'Промо-модель',
                        'slug' => 'models',
                        'description' => 'Промо-модель',
                    ),
                    'promoother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'promoother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'design' => array(
                'name' => 'Дизайн',
                'slug' => 'design',
                'description' => 'Дизайн',
                'parent' => array(
                    'corporateidentity' => array(
                        'name' => 'Фирменный стиль, логотипы, визитки',
                        'slug' => 'corporateidentity',
                        'description' => 'Фирменный стиль, логотипы, визитки',
                    ),
                    'bookletsandcards' => array(
                        'name' => 'Полиграфический дизайн',
                        'slug' => 'bookletsandcards',
                        'description' => 'Полиграфический дизайн',
                    ),
                    'iconsandillustrations' => array(
                        'name' => 'Иллюстрации, живопись, граффити',
                        'slug' => 'iconsandillustrations',
                        'description' => 'Иллюстрации, живопись, граффити',
                    ),
                    'design' => array(
                        'name' => 'Дизайн сайтов и приложений',
                        'slug' => 'design',
                        'description' => 'Дизайн сайтов и приложений',
                    ),
                    'socialnetworksandbanners' => array(
                        'name' => 'Интернет-баннеры, оформление соц.сетей',
                        'slug' => 'socialnetworksandbanners',
                        'description' => 'Интернет-баннеры, оформление соц.сетей',
                    ),
                    '3ddesignandanimation' => array(
                        'name' => '3d-графика, анимация',
                        'slug' => '3ddesignandanimation',
                        'description' => '3d-графика, анимация',
                    ),
                    'presentationdesign' => array(
                        'name' => 'Инфографика, презентации, иконки',
                        'slug' => 'presentationdesign',
                        'description' => 'Инфографика, презентации, иконки',
                    ),
                    'outdooradvertising' => array(
                        'name' => 'Наружная реклама, стенды, pos-материалы',
                        'slug' => 'outdooradvertising',
                        'description' => 'Наружная реклама, стенды, pos-материалы',
                    ),
                    'interiordesign' => array(
                        'name' => 'Архитектура, интерьер, ландшафт',
                        'slug' => 'interiordesign',
                        'description' => 'Архитектура, интерьер, ландшафт',
                    ),
                    'designother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'designother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'webdevelopment' => array(
                'name' => 'Web-разработка',
                'slug' => 'webdevelopment',
                'description' => 'Web-разработка',
                'parent' => array(
                    'entiresite' => array(
                        'name' => 'Сайт под ключ',
                        'slug' => 'entiresite',
                        'description' => 'Сайт под ключ',
                    ),
                    'sitehelpandsupport' => array(
                        'name' => 'Доработка и поддержка сайта',
                        'slug' => 'sitehelpandsupport',
                        'description' => 'Доработка и поддержка сайта',
                    ),
                    'webdev' => array(
                        'name' => 'Программирование и разработка ПО',
                        'slug' => 'webdev',
                        'description' => 'Программирование и разработка ПО',
                    ),
                    'layout' => array(
                        'name' => 'Верстка',
                        'slug' => 'layout',
                        'description' => 'Верстка',
                    ),
                    'appdevelopment' => array(
                        'name' => 'Разработка мобильных приложений',
                        'slug' => 'appdevelopment',
                        'description' => 'Разработка мобильных приложений',
                    ),
                    'webdevelopmentother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'webdevelopmentother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'photoshop' => array(
                'name' => 'Фото- и видеоуслуги',
                'slug' => 'photoshop',
                'description' => 'Фото- и видеоуслуги',
                'parent' => array(
                    'photographers' => array(
                        'name' => 'Фотосъемка',
                        'slug' => 'photographers',
                        'description' => 'Фотосъемка',
                    ),
                    'cameramen' => array(
                        'name' => 'Видеосъемка',
                        'slug' => 'cameramen',
                        'description' => 'Видеосъемка',
                    ),
                    'photo' => array(
                        'name' => 'Ретушь фотографий',
                        'slug' => 'photo',
                        'description' => 'Ретушь фотографий',
                    ),
                    'videoclipscreation' => array(
                        'name' => 'Создание видеороликов под ключ',
                        'slug' => 'videoclipscreation',
                        'description' => 'Создание видеороликов под ключ',
                    ),
                    'video' => array(
                        'name' => 'Монтаж и цветокоррекция видео',
                        'slug' => 'video',
                        'description' => 'Монтаж и цветокоррекция видео',
                    ),
                    'digitization' => array(
                        'name' => 'Оцифровка',
                        'slug' => 'digitization',
                        'description' => 'Оцифровка',
                    ),
                    'photoshopother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'photoshopother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'techrepair' => array(
                'name' => 'Установка и ремонт техники',
                'slug' => 'techrepair',
                'description' => 'Установка и ремонт техники',
                'parent' => array(
                    'refrigerators' => array(
                        'name' => 'Холодильники и морозильные камеры',
                        'slug' => 'refrigerators',
                        'description' => 'Холодильники и морозильные камеры',
                    ),
                    'washingmachines' => array(
                        'name' => 'Стиральные и сушильные машины',
                        'slug' => 'washingmachines',
                        'description' => 'Стиральные и сушильные машины',
                    ),
                    'dishwashers' => array(
                        'name' => 'Посудомоечные машины',
                        'slug' => 'dishwashers',
                        'description' => 'Посудомоечные машины',
                    ),
                    'kitchenelectrocookers' => array(
                        'name' => 'Электрические плиты и панели',
                        'slug' => 'kitchenelectrocookers',
                        'description' => 'Электрические плиты и панели',
                    ),
                    'kitchencookers' => array(
                        'name' => 'Газовые плиты',
                        'slug' => 'kitchencookers',
                        'description' => 'Газовые плиты',
                    ),
                    'ovens' => array(
                        'name' => 'Духовые шкафы',
                        'slug' => 'ovens',
                        'description' => 'Духовые шкафы',
                    ),
                    'drawingsout' => array(
                        'name' => 'Вытяжки',
                        'slug' => 'drawingsout',
                        'description' => 'Вытяжки',
                    ),
                    'airconditioner' => array(
                        'name' => 'Климатическая техника',
                        'slug' => 'airconditioner',
                        'description' => 'Климатическая техника',
                    ),
                    'waterheaters' => array(
                        'name' => 'Водонагреватели, бойлеры, котлы, колонки',
                        'slug' => 'waterheaters',
                        'description' => 'Водонагреватели, бойлеры, котлы, колонки',
                    ),
                    'sewingmachine' => array(
                        'name' => 'Швейные машины',
                        'slug' => 'sewingmachine',
                        'description' => 'Швейные машины',
                    ),
                    'cleaners' => array(
                        'name' => 'Пылесосы и очистители',
                        'slug' => 'cleaners',
                        'description' => 'Пылесосы и очистители',
                    ),
                    'ironsandclothingcare' => array(
                        'name' => 'Утюги и уход за одеждой',
                        'slug' => 'ironsandclothingcare',
                        'description' => 'Утюги и уход за одеждой',
                    ),
                    'coffeemachines' => array(
                        'name' => 'Кофемашины',
                        'slug' => 'coffeemachines',
                        'description' => 'Кофемашины',
                    ),
                    'microwaveovens' => array(
                        'name' => 'СВЧ печи',
                        'slug' => 'microwaveovens',
                        'description' => 'СВЧ печи',
                    ),
                    'smallkitchenappliances' => array(
                        'name' => 'Мелкая кухонная техника',
                        'slug' => 'smallkitchenappliances',
                        'description' => 'Мелкая кухонная техника',
                    ),
                    'bodycare' => array(
                        'name' => 'Уход за телом и здоровьем',
                        'slug' => 'bodycare',
                        'description' => 'Уход за телом и здоровьем',
                    ),
                    'buildingandgardenequipment' => array(
                        'name' => 'Строительная и садовая техника',
                        'slug' => 'buildingandgardenequipment',
                        'description' => 'Строительная и садовая техника',
                    ),
                    'techrepairother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'techrepairother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'healthandbeauty' => array(
                'name' => 'Красота и здоровье',
                'slug' => 'healthandbeauty',
                'description' => 'Красота и здоровье',
                'parent' => array(
                    'heirdressers' => array(
                        'name' => 'Парикмахерские услуги',
                        'slug' => 'heirdressers',
                        'description' => 'Парикмахерские услуги',
                    ),
                    'manicure' => array(
                        'name' => 'Ногтевой сервис',
                        'slug' => 'manicure',
                        'description' => 'Ногтевой сервис',
                    ),
                    'masseurs' => array(
                        'name' => 'Массаж',
                        'slug' => 'masseurs',
                        'description' => 'Массаж',
                    ),
                    'makeup' => array(
                        'name' => 'Косметология, макияж',
                        'slug' => 'makeup',
                        'description' => 'Косметология, макияж',
                    ),
                    'stylists' => array(
                        'name' => 'Стилисты и имиджмейкеры',
                        'slug' => 'stylists',
                        'description' => 'Стилисты и имиджмейкеры',
                    ),
                    'personaltrainer' => array(
                        'name' => 'Персональный тренер',
                        'slug' => 'personaltrainer',
                        'description' => 'Персональный тренер',
                    ),
                    'healthandbeautyother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'healthandbeautyother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'electronicrepair' => array(
                'name' => 'Ремонт цифровой техники',
                'slug' => 'electronicrepair',
                'description' => 'Ремонт цифровой техники',
                'parent' => array(
                    'phonesandtablets' => array(
                        'name' => 'Планшеты и телефоны',
                        'slug' => 'phonesandtablets',
                        'description' => 'Планшеты и телефоны',
                    ),
                    'audio' => array(
                        'name' => 'Аудиотехника и системы',
                        'slug' => 'audio',
                        'description' => 'Аудиотехника и системы',
                    ),
                    'tv' => array(
                        'name' => 'Телевизоры и мониторы',
                        'slug' => 'tv',
                        'description' => 'Телевизоры и мониторы',
                    ),
                    'auto' => array(
                        'name' => 'Автомобильная электроника',
                        'slug' => 'auto',
                        'description' => 'Автомобильная электроника',
                    ),
                    'optics' => array(
                        'name' => 'Видео/фототехника',
                        'slug' => 'optics',
                        'description' => 'Видео/фототехника',
                    ),
                    'games' => array(
                        'name' => 'Игровые приставки',
                        'slug' => 'games',
                        'description' => 'Игровые приставки',
                    ),
                    'satellitedishes' => array(
                        'name' => 'Спутниковые и эфирные антенны',
                        'slug' => 'satellitedishes',
                        'description' => 'Спутниковые и эфирные антенны',
                    ),
                    'watches' => array(
                        'name' => 'Часы и хронометры',
                        'slug' => 'watches',
                        'description' => 'Часы и хронометры',
                    ),
                    'electronicrepairother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'electronicrepairother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'legaladvice' => array(
                'name' => 'Юридическая помощь',
                'slug' => 'legaladvice',
                'description' => 'Юридическая помощь',
                'parent' => array(
                    'legaladvice' => array(
                        'name' => 'Юридическая консультация',
                        'slug' => 'legaladvice',
                        'description' => 'Юридическая консультация',
                    ),
                    'documentcompilation' => array(
                        'name' => 'Составление и проверка договоров',
                        'slug' => 'documentcompilation',
                        'description' => 'Составление и проверка договоров',
                    ),
                    'complaints' => array(
                        'name' => 'Составление и подача жалоб, исков',
                        'slug' => 'complaints',
                        'description' => 'Составление и подача жалоб, исков',
                    ),
                    'documentexecution' => array(
                        'name' => 'Оформление документов',
                        'slug' => 'documentexecution',
                        'description' => 'Оформление документов',
                    ),
                    'companiesregistrar' => array(
                        'name' => 'Регистрация, ликвидация компаний',
                        'slug' => 'companiesregistrar',
                        'description' => 'Регистрация, ликвидация компаний',
                    ),
                    'legaladviceother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'legaladviceother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'teaching' => array(
                'name' => 'Репетиторы и обучение',
                'slug' => 'teaching',
                'description' => 'Репетиторы и обучение',
                'parent' => array(
                    'russianandliterature' => array(
                        'name' => 'Русский язык и литература',
                        'slug' => 'russianandliterature',
                        'description' => 'Русский язык и литература',
                    ),
                    'english' => array(
                        'name' => 'Английский язык',
                        'slug' => 'english',
                        'description' => 'Английский язык',
                    ),
                    'french' => array(
                        'name' => 'Французский язык',
                        'slug' => 'french',
                        'description' => 'Французский язык',
                    ),
                    'deutsch' => array(
                        'name' => 'Немецкий язык',
                        'slug' => 'deutsch',
                        'description' => 'Немецкий язык',
                    ),
                    'spanish' => array(
                        'name' => 'Испанский язык',
                        'slug' => 'spanish',
                        'description' => 'Испанский язык',
                    ),
                    'foreignlanguages' => array(
                        'name' => 'Другие иностранные языки',
                        'slug' => 'foreignlanguages',
                        'description' => 'Другие иностранные языки',
                    ),
                    'mathandphysics' => array(
                        'name' => 'Математика и физика',
                        'slug' => 'mathandphysics',
                        'description' => 'Математика и физика',
                    ),
                    'biologyandchemistry' => array(
                        'name' => 'Биология и химия',
                        'slug' => 'biologyandchemistry',
                        'description' => 'Биология и химия',
                    ),
                    'historyandsocialstudies' => array(
                        'name' => 'История и обществознание',
                        'slug' => 'historyandsocialstudies',
                        'description' => 'История и обществознание',
                    ),
                    'geographyandeconomics' => array(
                        'name' => 'География и экономика',
                        'slug' => 'geographyandeconomics',
                        'description' => 'География и экономика',
                    ),
                    'computerscience' => array(
                        'name' => 'Информатика и программирование',
                        'slug' => 'computerscience',
                        'description' => 'Информатика и программирование',
                    ),
                    'schoolpreparation' => array(
                        'name' => 'Подготовка к школе и младшие классы',
                        'slug' => 'schoolpreparation',
                        'description' => 'Подготовка к школе и младшие классы',
                    ),
                    'music' => array(
                        'name' => 'Музыка, танцы, арт',
                        'slug' => 'music',
                        'description' => 'Музыка, танцы, арт',
                    ),
                    'university' => array(
                        'name' => 'Помощь студентам',
                        'slug' => 'university',
                        'description' => 'Помощь студентам',
                    ),
                    'logopedist' => array(
                        'name' => 'Логопеды',
                        'slug' => 'logopedist',
                        'description' => 'Логопеды',
                    ),
                    'sport' => array(
                        'name' => 'Спорт',
                        'slug' => 'sport',
                        'description' => 'Спорт',
                    ),
                    'carinstructors' => array(
                        'name' => 'Автоинструкторы',
                        'slug' => 'carinstructors',
                        'description' => 'Автоинструкторы',
                    ),
                    'teachingother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'teachingother',
                        'description' => 'Что-то другое',
                    )
                )
            ),
            'auto' => array(
                'name' => 'Ремонт транспорта',
                'slug' => 'auto',
                'description' => 'Ремонт транспорта',
                'parent' => array(
                    'carmaintenance' => array(
                        'name' => 'Техническое обслуживание автомобиля',
                        'slug' => 'carmaintenance',
                        'description' => 'Техническое обслуживание автомобиля',
                    ),
                    'cardiagnosis' => array(
                        'name' => 'Диагностика и ремонт двигателя, КПП и ходовой части',
                        'slug' => 'cardiagnosis',
                        'description' => 'Диагностика и ремонт двигателя, КПП и ходовой части',
                    ),
                    'caraircondition' => array(
                        'name' => 'Обслуживание системы кондиционирования',
                        'slug' => 'caraircondition',
                        'description' => 'Обслуживание системы кондиционирования',
                    ),
                    'carbody' => array(
                        'name' => 'Кузовной ремонт',
                        'slug' => 'carbody',
                        'description' => 'Кузовной ремонт',
                    ),
                    'carelectric' => array(
                        'name' => 'Автоэлектрика',
                        'slug' => 'carelectric',
                        'description' => 'Автоэлектрика',
                    ),
                    'glassandtinting' => array(
                        'name' => 'Автостекла и тонировка',
                        'slug' => 'glassandtinting',
                        'description' => 'Автостекла и тонировка',
                    ),
                    'tireservice' => array(
                        'name' => 'Шиномонтаж',
                        'slug' => 'tireservice',
                        'description' => 'Шиномонтаж',
                    ),
                    'washanddry' => array(
                        'name' => 'Мойка и химчистка',
                        'slug' => 'washanddry',
                        'description' => 'Мойка и химчистка',
                    ),
                    'cartuning' => array(
                        'name' => 'Тюнинг (внешний и внутренний)',
                        'slug' => 'cartuning',
                        'description' => 'Тюнинг (внешний и внутренний)',
                    ),
                    'roadassistance' => array(
                        'name' => 'Помощь на дороге',
                        'slug' => 'roadassistance',
                        'description' => 'Помощь на дороге',
                    ),
                    'moto' => array(
                        'name' => 'Мотосервис',
                        'slug' => 'moto',
                        'description' => 'Мотосервис',
                    ),
                    'carother' => array(
                        'name' => 'Что-то другое',
                        'slug' => 'carother',
                        'description' => 'Что-то другое',
                    )
                )
            )
        );


        foreach ($categories_arg as $item){
            $cat = new Category();
            $cat->name = $item['name'];
            $cat->slug = $item['slug'];
            $cat->description = $item['description'];
            $cat->save();
            if(!empty($item['parent'])){
                foreach ($item['parent'] as $item_parent){
                    $cat_parent = new Category();
                    $cat_parent->parent_id = $cat->id;
                    $cat_parent->name = $item_parent['name'];
                    $cat_parent->slug = $item_parent['slug'];
                    $cat_parent->description = $item_parent['description'];
                    $cat_parent->save();
                }
            }
        }

    }
}
