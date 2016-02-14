<!DOCTYPE html>
<head>
	<head>
		<meta charset="utf-8">
		<title> Forms </title> 
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>Урок "Формы": теги и их атрибуты</h1>
		<h2>Расскажите немного о себе...</h2>
		<p>Попробуйте создать аналогичную форму. Для целей демонстрации вполне подойдут и вымышленые.</p>
		<form method="post">
			<fieldset>
				<legend>Коротко о себе</legend>
				<ul class="briefly">
					<li> 
						<label for="name">Имя: </label> <input id="name" type="text" name="name" /> 
					</li>
				    <li> 
				    	<label for="surname">Фамилия: </label> <input id="surname" type="text" name="surname" />
				    </li>
				    <li>Пол:
						<input id="male" type="radio" name="gender" value="мужчина" checked="checked" />
				    	<label for="male"> мужской </label>
						<input id="female" type="radio" name="gender" value="женщина" />
						<label for="female"> женский </label> 
					</li>
				    <li> 
				    	<label for="age">Возраст: </label> <input id="age" type="text" name="age" size="3"/> лет
				    </li>
				</ul>
			</fieldset>
			<fieldset>
				<legend>Подробнее о себе</legend>
					<ul class="detail">
						<li> 
							<input id="young-man" type="radio" name="person" value="молодой человек" checked="checked" /> 
							<label for="young-man">Молодой человек</label>
						</li>
				        <li> 
				        	<input id="girl" type="radio" name="person" value="девушка" /> 
				        	<label for="girl">Девушка</label> 
				        </li>
						<li> 
							<input id="birth-date" type="text" name="birth-date" /> 
							<label for="birth-date"> Дата рождения</label> 
						</li>
					    <li> 
					    	<input id="family-status" type="text" name="family-status" /> 
					    	<label for="family-status"> Семейное положение</label> 
					    </li>
					    <li> 
					    	<input id="social-status" type="text" name="social-status" />
					    	 <label for="social-status"> Социальный статус</label> 
					    </li>
					    <li> 
					    	<input id="place-of-living" type="text" name="place-of-living" /> 
					    	<label for="place-of-living"> Местожительство</label> 
					    </li>
					</ul>						
					<span class="bold"> Что вы обычно делаете на выходных: </span>
					<ul>
						<li> 
							<input id="sleep" type="checkbox" name="work[]" value="спите" />
							<label for="sleep">Сплю</label> 
						</li>
						<li>
							 <input id="friend" type="checkbox" name="work[]" value="гуляете с друзьми" />
							 <label for="friend">Гуляю с друзьями</label>
						</li>
						<li> 
							<input id="fishing" type="checkbox" name="work[]" value="ходите на рыбалку" />
							<label for="fishing">Хожу на рыбалку</label> 
						</li>
						<li> 
							<input id="games" type="checkbox" name="work[]" value="играете в игры" />
							<label for="games">Играю в игры</label>  
						</li>
					</ul>
					
					<span class="bold"> Рассказать о формах в книге, посвященной HTML: </span>
					<ul>
						<li>
							<select name="select-value">
								<option>Site frequency:</option>
								<option>значение1</option>
								<option>значение2</option>
								<option>значение3</option>
							</select> 
						</li>
					</ul>
					
					<span class="bold"> Сколько книг вы прочитали за свою жизнь: </span>
					<ul>
						<li> 
							<input id="zero-ten" type="radio" name="books" value="0-10" /> <label for="zero-ten">0-10</label> 
						</li>
					    <li> 
					    	<input id="el-tw" type="radio" name="books" value="11-20" /> <label for="el-tw">11-20</label> 
					    </li>
					    <li> 
					    	<input id="tw-fif" type="radio" name="books" value="21-50" /> <label for="tw-fif">21-50</label> 
					    </li>
					    <li> 
					    	<input id="fifty-plus" type="radio" name="books" value="50+" /> <label for="fifty-plus">50+</label> 
					    </li>
					</ul>
					
				    <ul>
						<li class="bold"> <label for="comments">Ваши коментарии:</label> </li>
				        <li> <textarea id="comments" name="comments" cols="50" rows="10"></textarea> </li>
				    </ul>
					<ul>
						<li> 
							<select name="select-position[]" size="3" multiple="multiple">
								<option value="Первая позиция">Первая позиция</option>
								<option value="Вторая позиция" selected="selected">Вторая позиция</option>
								<option value="Третья позиция">Третья позиция</option>
							</select>
						</li>
					</ul>
			</fieldset>
			<fieldset>
				<legend>И в заключении</legend>
					<span> <input type="text" name="field" size="30" placeholder="Это поле было введено до вас" /> </span>
					<ul>
						<li class="bold"> Email: </li>
						<li><input type="email" name="email" size="30"/> </li>
					</ul>	
					
						<span class="spam">Хотите подписаться на самую модную рассылку спама?</span> 
						<span class="italic">Выберите категории</span> 
					<ul>
						<li> 
							<input id="equipment" type="checkbox" name="spam[]" value="Оборудование" />
							<label for="equipment">Оборудование</label> 
						</li>
						<li> 
							<input id="dinner" type="checkbox" name="spam[]" value="Как приготовить обеды" />
							 <label for="dinner">Как приготовить обеды</label> 
						</li>
					    <li> 
					    	<input id="million" type="checkbox" name="spam[]" value="Заработай миллион за два дня" />
					    	<label for="million">Заработай миллион за два дня</label> 
					    </li>
					</ul>
					
					<span class="bold">На сколько сложная задача:</span> 
					<ul>
						<li> 
							<input id="no" type="radio" name="difficulty" value="Совсем нет" checked="checked" />
							<label for="no">Совсем нет</label>
						</li>
					    <li> 
					    	<input id="so" type="radio" name="difficulty" value="Так себе" />
							<label for="so">Так себе</label>
					    </li>
						<li> 
							<input id="hard" type="radio" name="difficulty" value="Еле справились" />
							<label for="hard">Еле справились</label>
						</li>
					</ul>
			</fieldset>
			<div class="submit">
				<input type="submit" name="button" value="Отправить"/>
			</div>
		</form>

		<div class="answer">
			<div class="about">
				<h2>Коротко о вас: </h2>
				<?php
					$name = $_POST['name'];
					$surname = $_POST['surname'];
					$gender = $_POST['gender'];
					$age = $_POST['age'];

				echo'<p>Ваше имя и фамилия:' . $name . ' ' . $surname . '</p>' .
					'<p>Вы ' . $gender . ' и ваш возраст ' . $age . '</p>';
				?>
			</div>

			<div class="about-more">
				<h2>Подробнее о вас: </h2>
				<?php
					$person = $_POST['person'];
					$birthDate = $_POST['birth-date'];
					$familyStatus = $_POST['family-status'];
					$socialStatus = $_POST['social-status'];
					$placeLiving = $_POST['place-of-living'];
					$work = $_POST['work'];
					$selectValue = $_POST['select-value'];
					$books = $_POST['books'];
					$comments = $_POST['comments'];
					$selectPosition = $_POST['select-position'];
					echo'<p>Вы '. $person . '</p>' .
						'<p>Дата рождения: ' . $birthDate . '</p>' .
						'<p>Семейное положение: ' . $familyStatus . '</p>' .
						'<p>Социальный статус: ' . $socialStatus . '</p>' .
						'<p>Местожительство: ' . $placeLiving . '</p>' .
						'<span>Обычно на выходных вы: </span>';
						if(empty($work)) {
							echo("-");
						}
						else {
							$N = count($work);
							for($i=0; $i < $N; $i++) {
								echo($work[$i] . "; ");
							}
						}
					echo'<p>Вы выбрали: ' . $selectValue . '</p>' .
						'<p>За свою жизнь вы прочитали ' . $books. ' книг </p>' .
						'<p>Ваш коментарий: ' . $comments . '</p>' .
						'<span>Ваши позиции: </span>';
						if (is_array($selectPosition) || is_object($selectPosition)) {
							foreach ($selectPosition as $selectedOption)
								echo $selectedOption . "; ";
						}
					 ?>
			</div>

			<div class="final">
				<h2>И в заключении: </h2>
				<?php
					$field = $_POST['field'];
					$email = $_POST['email'];
					$spam = $_POST['spam'];
					$difficulty = $_POST['difficulty'];

					echo'<p>Ваш текст: ' . $field . '</p>' .
						'<p>Email: ' . $email . '</p>' .
						'<span>Вы подписались на такую рассылку категорий: </span>';
						if(empty($spam)) {
							echo("-");
						}
						else {
							$N = count($spam);
							for($i=0; $i < $N; $i++) {
								echo($spam[$i] . "; ");
							}
						}
						'<p>Была ли сложная задача? ' . $email . '</p>';
				?>
					<p class="sleep">Спокойной ночи:)</p>
			</div>
		</div>
	</body>
 </html>


