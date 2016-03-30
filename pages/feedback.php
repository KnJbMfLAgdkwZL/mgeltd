<div class="well">
	<form class="form-horizontal" style="margin-top: 25px" method="POST" action="">
		<fieldset>

			<legend style="text-align: center">Обратная связь</legend>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Ваше имя:</label>
				<div class="col-lg-10">
					<input class="form-control" name="name" id="name" placeholder="Ваше имя" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Контактная информация:</label>
				<div class="col-lg-10">
					<input class="form-control" name="contact" id="contact" placeholder="Контактная информация для связи с вами (icq, e-mail или номер телефона)" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="textArea" class="col-lg-2 control-label">Ваше сообщение:</label>
				<div class="col-lg-10">
					<textarea class="form-control" rows="3" name="message" id="message" placeholder="Ваше сообщение"></textarea>
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