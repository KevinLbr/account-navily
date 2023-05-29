<template>
	<div class="bg-white p-5 card-login">
		<h1 class="text-xl-plus text-weight-700 text-center text-main-deep-color pb-3">
			Connexion
		</h1>

		<form @submit.prevent="login()">
			<div class="alert alert-danger" v-if="hasErrors">
				<span class="text-danger">
					Le mot de passe ou l'identifiant est incorrecte
				</span>
			</div>

			<div class="form-group pt-2">
				<label for="email" class="text-secondary-color">
					E-mail
				</label>

				<input
					type="email"
					id="email"
					name="email"
					:class="['input-navily form-control', {'is-invalid' : hasErrors}]"
					v-model="email"
				>
			</div>

			<div class="form-group">
				<label for="password" class="text-secondary-color">
					Mot de passe
				</label>

				<input
					type="password"
					name="password"
					id="password"
					:class="['input-navily form-control', {'is-invalid' : hasErrors}]"
					v-model="password"
				>
			</div>

			<div class="text-center pt-4">
				<button type="submit" class="btn btn-plainsailing" id="dusk-login-btn">
					Connexion
				</button>
			</div>
		</form>
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
			hasErrors : false,
		}
	},

	methods : {
		login()
		{
			var self = this;

			var credentials = {
				email: this.email,
				password: this.password,
			}
			axios.post('/login', credentials)
				 .then(() => {
					 self.hasErrors = false;
					window.location = '/account/informations';
				})
				.catch((r) => {
					self.hasErrors = true;
				})
		}
	}
};
</script>
