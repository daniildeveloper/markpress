<div class="menu_section">
    <ul class="nav side-menu">
        <li>
            <a href="{{url("/manager")}}">
                <i class="fa fa-home">
                </i>
                Главная
            </a>
        </li>
    </ul>
    <ul class="nav side-menu">
        <li>
            <a>
                <i class="fa fa-users">
                </i>
                Игроки
                <span class="fa fa-chevron-down">
                </span>
            </a>
            <ul class="nav child_menu">
                <li>
                    <a href="{{route('players')}}">
                        Список игроков
                    </a>
                </li>
                <li>
                    <a href="{{route("prediction.index")}} ">
                        Список прогнозов
                    </a>
                </li>
            </ul>
        </li>
    </ul>

        {{-- MARKETING --}}
    <ul class="nav side-menu">
        <li>
            <a>
                <i class="fa fa-line-chart">
                </i>
                Реклама
                <span class="fa fa-chevron-down">
                </span>
            </a>
            <ul class="nav child_menu">
                <li>
                    <a href="{{route("ads.index")}}">
                        Баннер-карусель
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    {{-- END MARKETING --}}

    {{-- SUPPORT --}}
    <ul class="nav side-menu">
        <li>
            <a>
                <i class="fa fa-life-ring">
                </i>
                Поддержка
                <span class="fa fa-chevron-down">
                </span>
            </a>
            <ul class="nav child_menu">
                <li>
                    <a href="#">
                        Обращения пользователей
                    </a>
                </li>
                <li>
                    <a href="#">
                        Категории
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    {{-- SUPPORT --}}

    {{-- СHARTS --}}
    <ul class="nav side-menu">
        <li>
            <a>
                <i class="fa fa-line-chart">
                </i>
                Отчеты
                <span class="fa fa-chevron-down">
                </span>
            </a>
            <ul class="nav child_menu">
                <li>
                    <a href="#">
                        Все
                    </a>
                </li>
                <li>
                    <a href="#">
                        Доход
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    {{-- END CHARTS --}}

    {{-- MONEY OUT --}}
    <ul class="nav side-menu">
        <li>
            <a>
                <i class="fa fa-money">
                </i>
                Вывод денег
                <span class="fa fa-chevron-down">
                </span>
            </a>
            <ul class="nav child_menu">
                <li>
                    <a href="#">
                        Заявки на вывод
                    </a>
                </li>
                <li>
                    <a href="#">
                        Системы вывода
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    {{-- END MONEY OUT --}}
    
    {{-- LOGS --}}
    <ul class="nav side-menu">
        <li>
            <a href="#">
                <i class="fa fa-file-code-o">
                </i>
                Логи
            </a>
        </li>
    </ul>
    {{-- END LOGS --}}

        {{-- СHARTS --}}
    <ul class="nav side-menu">
        <li>
            <a>
                <i class="fa fa-cog">
                </i>
                Настройки
            </a>
        </li>
    </ul>
    {{-- END CHARTS --}}
</div>