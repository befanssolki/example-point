<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

?>
<main>
  <div class="container white clearfix margint-100">
    <section class="text-center container pb-3">
      <div class="card text-center">

      <div class="card-body">
        <div class="row paneltext">
            <div class="col-md-8 col-xs-12">Номер группы <br> направление <br> подразделение</div>
            <div class="col-md-4 col-xs-12">
              <ul>
                <li>
                  Учебный процесс: Теоритическое обучение
                </li>
                <li>
                  Смена расписания: 31.01.2019
                </li>
                <li>
                  Ссесия: 22.06.2019
                </li>
              </ul>
            </div>
        </div>
        <div>
            <div class="col-md-4 col-xs-12">
              <button class="btn m-1 btn-outline-primary">Педыдущая неделя</button>
            </div>
            <div class="col-md-4 col-xs-12">
              <button class="btn m-1 btn-outline-primary">Чётная неделя</button>
              <button class="btn m-1 btn-outline-primary">Нечётная неделя</button>
            </div>
            <div class="col-md-4 col-xs-12">
              <button class="btn m-1 btn-outline-primary">Следующая неделя</button>
            </div>
        </div>
      </div>

      </div>
    </section>
    <div class="text-center"><h3><i class="fa fa-calendar-alt"></i> Понедельник, 31 января 2019 г. </h3></div>
    <section class="text-center container pt-3 pb-3">
    <div class="row">
      <div class="table-responsive">
        <table class="table table-bordered mt-1">
        <thead>
          <tr>
            <th class="text-center">Время</th>
            <th class="text-center">Понедельник</th>
            <th class="text-center">Вторник</th>
            <th class="text-center">Среда</th>
            <th class="text-center">Четверг</th>
            <th class="text-center">Пятница</th>
            <th class="text-center">Суббота</th>
          </tr>
          <thead>
          <tbody>
          <tr>
            <th class="text-center">8:30 <br> 10:05</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="text-center">10:25 <br> 12:00</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="text-center">12:50 <br> 14:25</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="text-center">14:35 <br> 16:05</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="text-center">16:15 <br> 17:50</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        </table>
      </div>
    </div>
    </section>
</main>
