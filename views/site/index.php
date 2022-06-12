<?php

/** @var yii\web\View $this */

use app\models\Post;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Blog | главная страница ';
$userData = Yii::$app->user->identity;
$lastPost = '';
if (Post::find()->orderBy('id DESC')->one()) {
  $lastPost = Post::find()->orderBy('id DESC')->one();
}
?>
<header class="header">
  <?= Html::img('@web/img/logoZtt.png', ['alt' => 'Удалить', 'class' => '', 'id' => 'gumb']); ?>
  <span> <a class="logo" href=<?= Url::to(['site/']) ?>> <?= Html::img('@web/img/logo.png', ['alt' => 'Удалить', 'class' => '', 'id' => 'gumb']); ?>
      <h2>IT-BLOG</h2>
    </a>
    <p> интернет, технологии, программирование</p>
  </span>
  <?php if (!$userData) : ?>
    <a class="linkHeader" href=<?= Url::to(['site/auth']) ?>>Войти</a>
  <? endif; ?>
  <?php if ($userData) : ?>
    <a class="linkHeader" href=<?= Url::to(['site/auth']) ?>>Читать</a>
  <? endif; ?>
</header>

<main style="display: flex; flex-direction:column; align-self:center; padding-top:20px;">
  <div class="wrapperMain">
    <h1>С чего самостоятельно начать обучение программированию: этапы освоения профессии и советы новичкам
    </h1>
    <p style="color:#000">История о том, как стать программистом с нуля
    </p>
    <img src="https://i.ibb.co/RBHXhBc/Programmers-Working-Looking-At-Computer-In-IT-Office-Handsome-Young-Men-In-Casual-Closes-Typing-Code.jpg" alt="">
    <p>Здравствуйте, уважаемые читатели!

      Решили сменить сферу деятельности, и выбор пал на программирование? Прекрасно! В этой области много востребованных, прибыльных, творческих и вдохновляющих профессий.

      Но прежде чем начать обучение, подумайте и ответьте на пару вопросов: нравится ли вам программирование, готовы ли вы ежедневно посвящать этому делу время, искренне ли интересуетесь информационными технологиями, нужно ли вам вообще программирование? Если ответ на все вопросы “да”, прошу читать дальше. В противном случае, построить карьеру в IT-сфере будет весьма трудно.

      Читайте статью, если хотите узнать с чего начать обучение программированию с нуля, как освоить IT-сферу самостоятельно и с помощью онлайн-курсов, кто такой программист, что надо знать, чтобы им стать.
    </p>
    <h2>Кто такой программист
    </h2>
    <p>Программист – это человек, который разрабатывает программы и алгоритмы для решения определенных задач. В своей работе он использует математическое моделирование, на основе которого пишет код. Продуктами работы программистов могут быть компьютерные игры и операционные системы, сайты и приложения.

      Стать программистом может любой человек, независимо от пола и возраста. Но он должен искренне интересоваться компьютерами и веб-технологиями, ведь они непрерывно развиваются и меняются, поэтому специалисту надо мониторить изменения и постоянно обновлять знания.

      Программисты обладают такими качествами, как:
    </p>
    <ul>
      <li>стрессоустойчивость,
      </li>
      <li>внимательность
      </li>
      <li>усидчивость
      </li>
      <li>ответственность
      </li>
      <li>креативность
      </li>
    </ul>
    <p>Также у большинства есть высшее, чаще всего техническое, образование. Если же это гений-самоучка, то ему не помешает наработать стаж, чтобы получить должность в известной компании.
    </p>
    <h2>Что нужно знать и уметь
    </h2>
    <p>Работу программиста не назовешь простой и понятной. Для освоения этой профессии понадобится немаленький багаж знаний и умений. Сотрудник должен иметь способности к многозадачности, уметь находить контакт с коллегами, знать иностранный язык и язык программирования.

      В остальном же краткий перечень требований выглядит следующим образом:
    </p>
    <ol>
      <li>Уметь писать собственные и читать чужие коды.</li>
      <li>Иметь математические способности и логическое, аналитическое мышление.</li>
      <li>Интересоваться информационными технологиями, иметь глубокие знания в этой сфере и постоянно их обновлять.</li>
      <li>Знать английский язык.</li>
      <li>Иметь способности к многозадачности.</li>
      <li>Уметь автоматически переводить решения бизнес-задач на машинный язык.</li>
      <li>Знать, как вносить, обрабатывать, хранить информацию при помощи разработанных программ.</li>
      <li>Создавать, настраивать и внедрять в производство программные продукты.</li>
      <li>Уметь автоматизировать повторяющиеся процессы.</li>
      <li>Тестировать разработанный продукт и уметь исправлять выявленные ошибки.</li>
      <li>Понимать технические задания и самому их составлять.</li>
      <li>Уметь пользоваться инструментами программирования, фреймворками и вспомогательными программами.</li>
    </ol>
    <p>И это лишь часть того, что должен уметь делать программист.
    </p>

    <h2>Как стать программистом с нуля
    </h2>
    <p>Прежде всего надо изучать теорию алгоритмов и структур данных. Они не зависят от конкретного языка, наоборот, языки программирования устроены в соответствии с алгоритмами и структурами.

      Язык – это просто инструмент для решения бизнес-задач. Поэтому новичку надо определиться с тем, как решать задачу, разбить это решение на этапы, оптимизировать процесс, чтобы не тратить время и ресурсы впустую.

      После освоения алгоритмов и структур данных нужно выбрать направление программирования. Лишь потом можно приступить к изучению веб-технологий и инструментов. Это серверные языки и языки разметки, стили CSS и JavaScript, веб-фреймворки, подходящие к выбранному языку программирования.

      И напоследок научиться работать с базой данных.
    </p>
    <h2>Подбор направления
    </h2>
    <p>Перед изучением языка надо определиться с направлением. У программирования широкий спектр возможностей и вариантов работы. Можно создавать сайты и мобильные приложения, игры, социальные сети, интернет-магазины, разрабатывать операционные системы и программное обеспечение.

      По основной классификации программистов делят на прикладных, системных и веб-разработчиков.

      Прикладные создают программы и приложения, которые решают конкретную задачу. Примерами прикладных программ могут быть онлайн-переводчики, аудио- и видеоплееры, игры, редакторы‚ мессенджеры и т. п.

      Системные занимаются разработкой операционных систем и драйверов, а также условий и инструментов для их слаженной работы. Благодаря программистам сервис может работать как единый механизм. Специалисты предотвращают или устраняют перебои и ошибки в работе целого ряда программ на предприятии.

      Веб-программист работает над созданием веб-сервисов и пишет для них программную составляющую. Соцсети, интернет-магазины, информационные сайты, форумы и прочее – все это труды специалистов по работе в сети.

      Выбрать направление деятельности можно среди доступных профессий:
    </p>
    <ol>
      <li><a href="https://iklife.ru/internet-professii/data-scientist-kto-ehto.html" target="_blank" rel="noopener">Data Scientist</a> – специалист по работе с большими данными.</li>
      <li><a href="https://iklife.ru/internet-professii/programmist/frontend-razrabotchik-kto-ehto.html" target="_blank" rel="noopener">Frontend-разработчик</a> – программист, отвечающий за лицевую составляющую сайта.</li>
      <li><a href="https://iklife.ru/internet-professii/programmist/backend-razrabotchik-kto-ehto.html" target="_blank" rel="noopener">Backend-разработчик</a> – человек, который работает с серверной частью веб-сервиса.</li>
      <li><a href="https://iklife.ru/internet-professii/programmist/full-stack-razrabotchik-kto-ehto.html" target="_blank" rel="noopener">Fullstack-разработчик</a> совмещает в себе frontend- и backend-разработчика.</li>
      <li>Администратор базы данных – человек, разрабатывающий требования к базе данных, которая используется конкретным предприятием, и отвечающий за проектирование и использование хранилища.</li>
      <li>Системный инженер настраивает и обслуживает внутренние компьютерные сети, офисную технику и ПК.</li>
      <li>Верстальщик работает над оформлением страницы и ее элементами: заголовками и подзаголовками, рамками вокруг картинок, шрифтом, отступами, абзацами.</li>
      <li>Архитектор ПО создает сложные IT-системы для решения бизнес-задач. С его помощью организации автоматизируют и упрощают повторяющиеся бизнес-процессы.</li>

    </ol>
    <p>И это только часть должностей, которые может занимать программист.
      Для каждой работы нужен свой инструмент, который может не подходить для создания чего-то другого. Поэтому направление – решающий фактор при выборе языка программирования для изучения.
    </p>
    <h2>Выбор языка программирования
    </h2>
    <img src="https://vintaytime.com/wp-content/uploads/2017/01/programming-languages-premium-featured.png" alt="">
    <p>Когда начинающий специалист встает перед выбором языка, ему надо учитывать количество имеющихся на рынке труда вакансий и выбранное направление.

      Можно найти предложения о работе, в которых сразу написано, с каким языком надо будет работать, например, PHP-программист или программист Python.

      Если же отталкиваться от направления, то надо знать, что веб-разработчик пользуется C++, Python, Java. Системный программист – Assembler, C, C++, Python. Администратор базы данных – SQL.

      Ниже приведены самые распространенные и популярные представители языков программирования:
    </p>
    <ol>
      <li>Python – это универсальный и распространенный язык программирования. Он популярен во всем мире и используется в большинстве своем в научных проектах, в области разработки ПО и при работе с Big Data.</li>
      <li>JavaScript. Этот язык тоже универсальный и часто используемый. С ним работают при разработке игр, интерактивного веб-дизайна интерфейса и в робототехнике.</li>
      <li>Java – это один из самых простых в использовании и понимании языков программирования. С ним часто создают различные веб-приложения.</li>
      <li>PHP – один из лидеров среди языков программирования, используемых при создании динамических веб-платформ. Часто является инструментом разработки веб-приложений.</li>
      <li>Паскаль – известный, но несколько устаревший язык программирования. Тем не менее он является основой для некоторых других языков и до сих пор применяется для обучения программированию в старших классах в школе и на первых курсах в вузе.</li>
      <li>Swift – новый язык, созданный компанией Apple. Он легок в использовании и позволяет новичкам разрабатывать мобильные приложения для iOS и macOS.</li>
    </ol>
    <p>Чтобы изучить язык, сначала надо разобраться с его синтаксисом, т. е. ключевыми словами, операторами, правилами написания кода. А дальше можно перейти к более сложным конструкциям.

      Если к этому времени специалист еще не приступал к изучению фреймворков, структур и баз данных, то сейчас эти знания просто необходимы. Не надо бросаться на все сразу, лучше выбрать что-то из основного: Git, SQL, HTML, CSS, XML, JSP, Maven, Spring, ORM, REST, MySQL, PostgreSQL.
    </p>
    <h2>Самообразование
    </h2>
    <p>Книги хороши тем, что их можно читать и учиться бесплатно, и тем, что они быстро погружают в тему. Рекомендую следующие пособия:
    </p>
    <ul>
      <li><a href="https://www.litres.ru/robert-s-martin/chistyy-kod-sozdanie-analiz-i-refaktoring-6444478/?lfrom=205462191" target="_blank" rel="noopener nofollow">Роберт Мартин “Чистый код”</a></li>
      <li><a href="https://www.litres.ru/serii-knig/iskusstvo-programmirovaniya/?lfrom=205462191" target="_blank" rel="noopener nofollow">Дональд Кнут “Искусство программирования”</a></li>
      <li><a href="https://www.litres.ru/igor-savchuk/otyavlennyy-programmist-layfhaking-iz-pervyh-ruk/?lfrom=205462191" target="_blank" rel="noopener nofollow">Игорь Савчук “Отъявленный программист. Лайфхакинг из первых рук”</a></li>
      <li><a href="https://www.litres.ru/panos-luridas-132187/algoritmy-dlya-nachinauschih-teoriya-i-prakt-29420792/?lfrom=205462191" target="_blank" rel="noopener nofollow">Панос Луридас “Алгоритмы для начинающих. Теория и практика для разработчика”</a></li>
      <li><a href="https://www.litres.ru/devid-harris/cifrovaya-shemotehnika-i-arhitektura-komputera-27066912/?lfrom=205462191" target="_blank" rel="noopener nofollow">Дэвид Харрис, Сара Л. Харрис “Цифровая схемотехника и архитектура компьютера”</a></li>
      <li><a href="https://www.litres.ru/galina-ivanova-5994501/osnovy-programmirovaniya-14402838/?lfrom=205462191" target="_blank" rel="noopener nofollow">Галина Иванова “Основы программирования”</a></li>
      <li><a href="https://www.litres.ru/ched-fauler/programmist-fanatik-3/?lfrom=205462191" target="_blank" rel="noopener nofollow">Чед Фаулер “Программист-фанатик”</a></li>
      <li><a href="https://www.litres.ru/kent-bek/ekstremalnoe-programmirovanie-razrabotka-cherez-testirovanie/?lfrom=205462191" target="_blank" rel="noopener nofollow">Кент Бек “Экстремальное программирование”</a></li>
    </ul>
    <p>Можно использовать бесплатные обучающие платформы, сайты и приложения, форумы, где делятся своим опытом профессиональные программисты. А можно положиться только на самостоятельное обучение, но такой путь сложен для новичка. Лучше совмещать его с другими методами, например, с онлайн-курсами.
    </p>
    <h2>Онлайн-курсы
    </h2>
    <p>Новичку предлагаются курсы от онлайн-платформ GeekBrains, Нетологии, Skillbox, Coursera, beONmax. Постигать азы сферы информационных технологий можно в своем темпе и в домашних условиях. Так цена будет ниже, чем обучение в вузе.

      Обучение предполагает как теоретическую, так и практическую часть. Нередко выпускники курсов имеют портфолио, диплом или сертификат, подтверждающий их навыки и знания.

      Предлагаю ознакомиться со следующими обучающими программами:
    </p>
    <ul>
      <li><a href="https://go.acstat.com/33c0de508170cbc0" target="_blank" rel="noopener nofollow">Основы программирования</a></li>
      <li><a href="https://go.acstat.com/322526dd883b5990" target="_blank" rel="noopener nofollow">Как стать программистом</a></li>
      <li><a href="https://go.acstat.com/246177cfb61abe60" target="_blank" rel="noopener nofollow">Факультет веб-разработки</a></li>
      <li><a href="https://go.acstat.com/d95c180eb9fafcd3" target="_blank" rel="noopener nofollow">Старт в программировании</a></li>
      <li><a href="https://go.acstat.com/e07bae024db04835" target="_blank" rel="noopener nofollow">Веб-разработчик с нуля</a></li>
      <li><a href="https://go.acstat.com/9c2cb0549a7ba851" target="_blank" rel="noopener nofollow">Веб-разработчик с нуля до PRO</a></li>
      <li><a href="https://beonmax.com/courses/web-razrabotchik/?pref=40268" target="_blank" rel="noopener nofollow">Веб-разработчик 2020 – с нуля до результата</a></li>
    </ul>
    <h2>Заключение
    </h2>
    <h2>Подведем итоги. Чтобы начать обучение программированию, надо следовать поэтапно. Сделайте следующее:
    </h2>
    <ol>
      <li>Заполните пробелы, если таковые имеются. Речь идет об архитектуре компьютера и английском языке.</li>
      <li>Изучите для начала теорию алгоритмов и структур данных.</li>
      <li>Выберите направление, в котором есть желание развиваться.</li>
      <li>В зависимости от направления подберите язык программирования.</li>
      <li>Наберитесь знаний об инструментах программирования и веб-фреймворках.</li>
      <li>Изучите базы данных.</li>
    </ol>
    <p>И в качестве общих советов:
    </p>
    <ul>
      <li>как можно больше практикуйтесь;</li>
      <li>используйте для обучения любые доступные материалы и платформы;</li>
      <li>начинайте с малых проектов;</li>
      <li>составьте грамотное резюме и портфолио;</li>
      <li>учитесь у профессионалов;</li>
      <li>если решили уйти в программирование, то действуйте и не затягивайте с этим, пока технологии не устарели.</li>
    </ul>
    <h2>Удачи!
    </h2>
  </div>
</main>
<footer>
  <a class="logo" href=<?= Url::to(['site/']) ?>> <?= Html::img('@web/img/logo.png', ['alt' => 'Удалить', 'class' => '', 'id' => 'gumb']); ?>
    <h2>IT-BLOG</h2>
  </a>
  <div class="social">
    <a href=""><?= Html::img('@web/img/vk.png', ['alt' => '', 'class' => 'img', 'id' => 'arrow']); ?></a>
    <a href=""> <?= Html::img('@web/img/you.png', ['alt' => '', 'class' => 'img', 'id' => 'arrow']); ?></a>
    <a href=""> <?= Html::img('@web/img/twit.png', ['alt' => '', 'class' => 'img', 'id' => 'arrow']); ?></a>
  </div>
</footer>
</main>