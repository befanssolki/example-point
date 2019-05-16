<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
$this->title = 'Личный кабинет';
?>
<main>
  <div class="container white clearfix">
    <section class="container pb-3">
    <span class="d-block p-2 maincolor text-center text-white">Личный кабинет [Имя пользователя]</span>
      <div class="card" style="height: %;">
      <div class="card-body">
        <div class="row">
            <div class="col-md-4">
            <div class="card mx-auto mb-3" style="width:200px">
              <img class="card-img-top" src="/images/dogaeva.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">ФИО Пользователя</h4>
                <a href="" class="text-left"><i class="fas fa-plus-square mr-3"></i>Добавить документы</a>
                <a href="" class="text-left"><i class="fas fa-trash mr-3"></i>Удалить документы</a>
                <a href="" class="text-left"><i class="fas fa-history mr-3"></i>История документов</a>
                <a href="#" class="badge badge-info">Редактировать профиль</a>
              </div>
            </div>
              <div class="col-md-12 col-xs-12">
                
              </div>
            </div>
            <div class="col-md-4 col-xs-12">
          
            <div class="card mb-3 border-dark">
              <div class="card-header text-white maincolor text-center">Мои документы</div>
              <div class="card-body">
              <button type="button" class="btn btn-block btn-info">Номер документа</button>
              <button type="button" class="btn btn-block btn-info">Номер документа</button>
              <button type="button" class="btn btn-block btn-info">Номер документа</button>
              </div>
            </div>

            <div class="card mb-3 border-dark">
              <div class="card-header text-white maincolor text-center">Взятые документы</div>
              <div class="card-body">
              <button type="button" class="btn btn-block btn-info">Номер документа</button>
              <button type="button" class="btn btn-block btn-info">Номер документа</button>
              <button type="button" class="btn btn-block btn-info">Номер документа</button>
              </div>
            </div>

            <div class="card mb-3 border-danger">
              <div class="card-header text-white bg-danger text-center">Просроченные документы</div>
              <div class="card-body">
              <button type="button" class="btn btn-block btn-info">Номер документа</button>
              </div>
            </div>
            
            </div>
            <div class="col-md-4 col-xs-12 text-center">
              <span class="d-block p-2 maincolor text-white"></span>
              <div class="card-body">
              <h3>Сегодня: <?php echo date("d.m.Y");?></h3>
              <div class="card border-dark mb-3">
                <div class="card-header maincolor text-white">Уведомление<i class="fa fa-trash ml-2" aria-hidden="true"></i></div>
                <div class="card-body text-dark">
                  <h4 class="card-title">Заголовок уведомления</h4>
                  <p class="card-text">Текст уведомления</p>
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>
      </div>
    </section>
  </div>
</main>
