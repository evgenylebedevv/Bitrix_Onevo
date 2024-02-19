<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ваш вопрос принят");
?><p>
 <span style="color: #005824;">Спасибо, ваш вопрос принят.</span>
</p>
<p>
	 Наши специалисты постараются ответить на него максимально оперативно.
</p>
 <br>
<table>
<tbody>
<tr>
	<td>
 <a href="/question_answer/ask_question.php"><b>Задать новый вопрос</b></a>
	</td>
	<td>
	</td>
	<td>
 <a href="/question_answer/index.php"><b>Вернуться к списку вопросов</b></a>
	</td>
</tr>
</tbody>
</table>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>