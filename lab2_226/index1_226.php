<h2>Форма для регистрации студента</h2>
<form action="lab2_1_226.php" method="post">
Имя:<br>
<input type="text" name="first_name" placeholder="Имя"><br><br>
Фамилия:<br>
<input type="text" placeholder="Фамилия" name="last_name"><br><br>
Отчество:<br>
<input type="text" placeholder="Отчество" name=""><br><br>
E-mail:<br>
<input type="email" placeholder="E-mail" name="email"><br><br>
<input type=checkbox name='kurs[]' value='PHP'>PHP<br>
<input type=checkbox name='kurs[]' value='Lisp'>Lisp<br>
<input type=checkbox name='kurs[]' value='Perl'>Perl<br>
<input type=checkbox name='kurs[]' value='Unix'>Unix<br><br>
Что вы хотите, чтобы мы знали о вас?<br>
<textarea name='comment' cols=32 rows=5></textarea><br><br>
<input type=submit value='Отправить'>
<input type=reset value='Отменить'>
</form>