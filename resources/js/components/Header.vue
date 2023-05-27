<template>
	<header class="fixed-top">
		<div class="container container-large">
			<div class="menu-desktop">
				<div class="d-flex align-items-center">
					<div class="wrapper-logo d-flex justify-content-between">
						<a href="/">
							<img
								src="/images/logo/logo-primary.svg"
								loading="lazy"
								alt="Logo Navily"
								class="logo-blue w-100"
							>
						</a>
					</div>

					<nav v-if="items.length > 0">
						<ul class="d-flex align-items-center text-weight-700"
							style="list-style: none;"
						>
							<li v-for="item in items">
								<a
									style="color: #113a73;font-family: Rubik,sans-serif;"
									:href="item.url"
									:title="item.title"
									:target="item.target"
								>
									{{ item.text }}
								</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="d-flex align-items-center">
					<form action="#" class="mr-5">
						<div class="text-center wrapper-input big-rounded d-flex justify-content-between">
							<input
								type="text"
								placeholder="Rechercher"
								size="10"
								class="search-modal-triggerer"
							>

							<img
								src="https://www.navily.com/images/icons/utils/search.svg"
								loading="lazy"
								alt="Icone recherche"
								class="px-3"
							>
						</div>
					</form>

					<div class="dropdown dropleft">
						<div data-toggle="dropdown" class="d-flex dropdown-toggle pointer">
							<div class="sm-plus-icon d-flex align-items-center">
								<img
									src="https://www.navily.com/images/flags/fr.jpg"
									loading="lazy"
									alt="French"
									class="w-100"
								>
							</div>

							<div class="mx-2 select-arrow-down d-flex align-items-center">
								<img
									src="https://www.navily.com/images/icons/arrows/arrow-down-blue.svg"
									loading="lazy"
									alt="Afficher la liste des langues"
									class="arrow-down-blue w-100"
								>
							</div>
						</div>

						<div class="dropdown-menu dropdown-lang">
							<li class="dropdown-item d-flex">
								<a
									rel="alternate"
									hreflang="en"
									href="https://www.navily.com/en/region/corse-mouillges-ports/306"
								>
									<img src="https://www.navily.com/images/flags/en.jpg" loading="lazy" alt="English">
								</a>
							</li>

							<li class="dropdown-item d-flex">
								<a
									rel="alternate"
									hreflang="fr"
									href="https://www.navily.com/fr/region/corse-mouillges-ports/306"
								>
									<img src="https://www.navily.com/images/flags/fr.jpg" loading="lazy" alt="français">
								</a>
							</li>

							<li class="dropdown-item d-flex">
								<a
									rel="alternate"
									hreflang="it"
									href="https://www.navily.com/it/region/corse-mouillges-ports/306"
								>
									<img src="https://www.navily.com/images/flags/it.jpg" loading="lazy" alt="italiano">
								</a>
							</li>

							<li class="dropdown-item d-flex">
								<a
									rel="alternate"
									hreflang="de"
									href="https://www.navily.com/de/region/corse-mouillges-ports/306"
								>
									<img src="https://www.navily.com/images/flags/de.jpg" loading="lazy" alt="Deutsch">
								</a>
							</li>

							<li class="dropdown-item d-flex">
								<a
									rel="alternate"
									hreflang="es"
									href="https://www.navily.com/es/region/corse-mouillges-ports/306"
								>
									<img src="https://www.navily.com/images/flags/es.jpg" loading="lazy" alt="español">
								</a>
							</li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
</template>

<script>

export default {
	data()
	{
		return {
			items : [
				{
					url: 'https://www.navily.com/fr/carte',
					text: 'Carte',
					title: 'Carte',
					target: '_blank'
				},

				{
					url: 'https://www.navily.com/fr/navily-premium',
					text: 'Navily Premium',
					title: 'Navily Premium',
					target: '_blank'
				},

				{
					url: 'http://blog.navily.com/',
					text: 'Blog',
					title: 'Blog',
					target: '_blank'
				}
			],
		}
	}
};
</script>
