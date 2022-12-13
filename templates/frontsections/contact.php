<div class="section bg-white py-24 md:py-48" id="contact">
	<div class="container py-24 md:py-48 bg-contain bg-no-repeat bg-center flex flex-col justify-center">
		<div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">
			<div class="order-last md:order-first">
				<div id="map" class="w-full aspect-square"></div>
				<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwKR1B6TtjTYQv72JulmzXoh0XY7X0DF8&callback=initMap">
				</script>
				<script>
                    const image = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/map-marker.png";
                    let map;
                    const myLatLng = {lat: 48.2082016, lng: 16.3526775};

                    function initMap() {
                        map = new google.maps.Map(document.getElementById("map"), {
                            center: myLatLng,
                            zoom: 14,
                        });
                        new google.maps.Marker({
                            position: myLatLng,
                            map,
                            icon: image
                        });
                    }
				</script>
			</div>
			<div>
				<h1 class="text-3xl lg:text-5xl font-serif text-logo-dark font-medium">Machen Sie den ersten Schritt,</h1>
				<h1 class="text-3xl lg:text-5xl font-serif text-logo-medium font-medium">Kontakt</h1>
				<p>Termine sind immer Dienstags von 8:00-19:00 Uhr möglich.</p>
				<div class="flex flex-col bg-logo-light bg-opacity-5 p-5 text-white">
					<div class="flex text-logo-dark space-x-5 py-3 border-b border-white">
						<div>
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
							</svg>
						</div>
						<div>
							<a href="tel:+43670/2085532" class="text-lg">+43670/2085532</a>
						</div>
					</div>
					<div class="flex text-logo-dark space-x-5 py-3">
						<div>
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
							</svg>
						</div>
						<div>
							<a href="mailto:christina.kuri@psychotherapie-kuri.at" class="text-lg">christina.kuri@psychotherapie-kuri.at</a>
						</div>
					</div>
					<div class="flex text-logo-dark space-x-5 py-3">
						<div>
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
							</svg>
						</div>
						<div>
							<address class="text-logo-dark">
								Praxis</br>
                                Auerspergstraße 7/24</br>
                                1080 wien
                            </address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>