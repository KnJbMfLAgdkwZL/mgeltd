<div class="well">
	<form class="form-horizontal" style="margin-top: 25px" method="POST" action="">
		<fieldset>

			<legend style="text-align: center">Анкета на трудоустройство</legend>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Ваше имя:</label>
				<div class="col-lg-10">
					<input class="form-control" name="name" id="name" placeholder="Ваше имя" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Фамилия:</label>
				<div class="col-lg-10">
					<input class="form-control" name="surname" id="surname" placeholder="Фамилия" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Отчество:</label>
				<div class="col-lg-10">
					<input class="form-control" name="sursurname" id="sursurname" placeholder="Отчество" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Дата рождения:</label>
				<div class="col-lg-10">
					<input class="form-control" name="data" id="data" placeholder="Дата рождения" type="text">
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-2 control-label">Пол:</label>
				<div class="col-lg-10">
					<div class="radio">
						<label>
							<input name="pol" id="pol" value="Муж" checked="" type="radio">
							Муж
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="pol" id="pol" value="Жен" type="radio">
							Жен
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-2 control-label">Образование:</label>
				<div class="col-lg-10">
					<div class="radio">
						<label>
							<input name="obraz" id="obraz" value="Среднее" checked="" type="radio">
							Среднее
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="obraz" id="obraz" value="Средне-специальное" type="radio">
							Средне-специальное
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="obraz" id="obraz" value="Высшее" type="radio">
							Высшее
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Специальность по диплому:</label>
				<div class="col-lg-10">
					<input class="form-control" name="special" id="special" placeholder="Специальность по диплому" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Претендуемая должность:</label>
				<div class="col-lg-10">
					<input class="form-control" name="dolzhnost" id="dolzhnost" placeholder="Претендуемая должность" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Минимальная З/П:</label>
				<div class="col-lg-10">
					<input class="form-control" name="zp" id="zp" placeholder="Минимальная З/П" type="text">
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-2 control-label">Вахтовый метод:</label>
				<div class="col-lg-10">
					<div class="radio">
						<label>
							<input name="vahta" id="vahta" value="Да" checked="" type="radio">
							Да
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="vahta" id="vahta" value="Нет" type="radio">
							Нет
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Опыт работы:</label>
				<div class="col-lg-10">
					<input class="form-control" name="opyt" id="opyt" placeholder="Опыт работы" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Ваш e-mail (для ответа):</label>
				<div class="col-lg-10">
					<input class="form-control" name="email" id="email" placeholder="Ваш e-mail (для ответа)" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="textArea" class="col-lg-2 control-label">Дополнительная информация:</label>
				<div class="col-lg-10">
					<textarea class="form-control" rows="3" name="message" id="message" placeholder="Дополнительная информация"></textarea>
				</div>
			</div>

			<div class="form-group" style="text-align: right">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="submit" class="btn btn-primary">Отправить</button>
				</div>
			</div>
		</fieldset>
	</form>
</div>

<style>
	.form-control {
		border: 1px solid #BBB;
	}
</style>