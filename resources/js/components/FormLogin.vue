<template>
	<div class="bg-white p-5" style="border-radius: 15px;box-shadow: 0px 0px 10px #081a3342;">
		<h1 class="text-xl-plus text-weight-700 text-center text-main-deep-color">
			Connexion
		</h1>

		<div class="form-group pt-5">
			<label for="email" class="text-secondary-color">
				E-mail
			</label>

			<input type="email" class="input-navily" v-model="email">
		</div>

		<div class="form-group">
			<label for="email" class="text-secondary-color">
				Mot de passe
			</label>

			<input type="password" class="input-navily" v-model="password">
		</div>

		<div class="text-center pt-4">
			<button class="btn btn-plainsailing" @click="login()">
				Connexion
			</button>
		</div>
	</div>
</template>

<script>

export default {
	props: {},

	data()
	{
		return {
			email : null,
			password : null,
		}
	},

	methods : {
		login()
		{
			var credentials = {
				email: this.email,
				password: this.password,
			}
			axios.post('/login', credentials).then((r) => {
				console.log(r)


				window.location = '/account';
			});
		}
	}
};
</script>
