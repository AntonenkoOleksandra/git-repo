<?
//представление личного кабинета (страница личного кабинета)
if(!$unVisibleForm):?>
<h1 style="text-align:center; font-size:26px; margin:20px 0">Вход в личный кабинет</h2>
<?endif;?>
<?

if(!$unVisibleForm):
echo $msg;
?>
<form action="/enter" method="POST" style="margin:40px 0 5% 41%; font-size:16px; line-height: 1.5; font-family:HelveticaLight">
  Логин : &nbsp;<input type="text" name="login" value="<?=$login?>" /><br />
  Пароль: <input type="text" name="pass" value="<?=$pass?>" /><br />
  <input type="submit" value="Вход" style="margin:20px 90px; font-size:16px; line-height: 1.5; font-family:HelveticaLight"/>
</form>
<?else:?>
<h2>Личный кабинет пользователя <?=$userName?></h2>
<a href="/enter?out=1">Выйти из кабинета!</a>
<?endif;?>
