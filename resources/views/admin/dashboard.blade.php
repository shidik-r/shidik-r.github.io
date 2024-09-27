<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between">
			<div>
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
					{{ __('Dashboard') }}
				</h2>
			</div>
			<div class="flex flex-col text-gray-800 dark:text-gray-200 justify-items-end">
				<h4 class="flex items-center justify-between gap-2 text-sm font-semibold leading-tight text-gray-800 dark:text-gray-200" style="display: none;">
					<div class="flex items-center gap-1">
						<svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
						<span>Current Time</span>
					</div>
					<span id="current-datetime"> </span>
				</h4>
				<h4 class="flex items-center justify-between gap-2 mb-2 text-sm font-semibold leading-tight text-gray-800 dark:text-gray-200">
					<div class="flex items-center gap-1">
						<svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
						<span>Last Update</span>
					</div>
					<span id="lastUpdate">Loading...</span>
				</h4>
			</div>
		</div>
	</x-slot>
	<!-- Card Section -->
	<div class="max-w-[85rem] px-4 py-10 sm:px-6 md:px-6 lg:ps-72 mx-auto">
		<!-- Grid -->
		<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-2 sm:gap-6">
			<!-- Card -->
			<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
				<div class="flex justify-between p-4 md:p-5 gap-x-3">
					<div>
						<p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
							Soil Moisture
						</p>
						<div class="flex items-center mt-6 gap-x-2">
							<h3 id="soil_moisture" class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
								Loading...
							</h3>

						</div>
					</div>
					<div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
						<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
							<path d="m24,9v1H0v-1h24Zm-4.47,3.487c-.882.67-2.179.67-3.061,0-.852-.648-2.088-.648-2.939,0-.882.67-2.179.67-3.061,0-.852-.648-2.088-.648-2.939,0-.882.67-2.179.67-3.061,0-.852-.648-2.088-.648-2.939,0-.441.335-.97.513-1.53.513v1c.781,0,1.519-.248,2.136-.718.493-.375,1.235-.375,1.729,0,1.233.939,3.038.939,4.271,0,.493-.375,1.235-.375,1.729,0,1.233.939,3.038.939,4.271,0,.493-.375,1.235-.375,1.729,0,1.233.939,3.038.939,4.271,0,.493-.375,1.235-.375,1.729,0,.617.47,1.355.718,2.136.718v-1c-.56,0-1.089-.178-1.53-.513-.852-.648-2.088-.648-2.939,0Zm-13.53,6.513c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm3-3c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm-6,0c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm12,0c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm6,0c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm-12,6c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm-6,0c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm12,0c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm6,0c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm-9-3c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm6,0c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1ZM6.502,8.001c.379,0,.758-.144,1.045-.43l2.801-2.712-.695-.719-2.652,2.568V0h-1v6.709l-2.652-2.568-.695.719,2.795,2.706c.291.291.673.436,1.055.436Zm11,0c.379,0,.758-.144,1.045-.43l2.801-2.712-.695-.719-2.652,2.568V0h-1v6.709l-2.652-2.568-.695.719,2.795,2.706c.291.291.673.436,1.055.436Z" />
						</svg>
					</div>
				</div>
			</div>
			<!-- End Card -->

			<!-- Card -->
			<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
				<div class="flex justify-between p-4 md:p-5 gap-x-3">
					<div>
						<p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
							Humidity
						</p>
						<div class="flex items-center mt-6 gap-x-2">
							<h3 id="humidity" class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
								Loading...
							</h3>
						</div>
					</div>
					<div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
						<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
							<path d="M12,24A10,10,0,0,1,4.929,6.929L12,.013l7.063,6.908a10.014,10.014,0,0,1,.008,14.15h0A9.936,9.936,0,0,1,12,24ZM12,2.811,6.335,8.351a8,8,0,1,0,11.322-.008ZM9,10a1,1,0,1,0,1,1A1,1,0,0,0,9,10Zm6,6a1,1,0,1,0,1,1A1,1,0,0,0,15,16ZM8.434,18h2.332l4.8-8H13.234Z" />
						</svg>
					</div>
				</div>
			</div>
			<!-- End Card -->

			<!-- Card -->
			<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
				<div class="flex justify-between p-4 md:p-5 gap-x-3">
					<div>
						<p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
							Temperature
						</p>
						<div class="flex items-center mt-6 gap-x-2">
							<h3 id="temperature" class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
								Loading...
							</h3>
						</div>
					</div>
					<div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
						<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
							<path d="M11.488,23.998c-.456,0-.917-.047-1.376-.143-2.466-.512-4.464-2.516-4.972-4.987-.461-2.244,.232-4.488,1.859-6.049V4.5C7,2.019,9.019,0,11.5,0s4.5,2.019,4.5,4.5V12.819c1.273,1.225,2,2.918,2,4.681,0,1.964-.875,3.803-2.4,5.044-1.169,.951-2.616,1.454-4.111,1.454Zm.012-22.998c-1.93,0-3.5,1.57-3.5,3.5V13.037c0,.142-.061,.277-.166,.372-1.478,1.325-2.118,3.29-1.713,5.258,.428,2.086,2.113,3.778,4.194,4.21,1.664,.346,3.362-.058,4.653-1.108s2.031-2.606,2.031-4.269c0-1.554-.668-3.045-1.834-4.091-.105-.095-.166-.23-.166-.372V4.5c0-1.93-1.57-3.5-3.5-3.5Zm0,19c-1.379,0-2.5-1.121-2.5-2.5,0-1.207,.86-2.218,2-2.45V4.5c0-.276,.224-.5,.5-.5s.5,.224,.5,.5V15.05c1.14,.232,2,1.243,2,2.45,0,1.379-1.121,2.5-2.5,2.5Zm0-4c-.827,0-1.5,.673-1.5,1.5s.673,1.5,1.5,1.5,1.5-.673,1.5-1.5-.673-1.5-1.5-1.5ZM21.5,5c-1.379,0-2.5-1.121-2.5-2.5s1.121-2.5,2.5-2.5,2.5,1.121,2.5,2.5-1.121,2.5-2.5,2.5Zm0-4c-.827,0-1.5,.673-1.5,1.5s.673,1.5,1.5,1.5,1.5-.673,1.5-1.5-.673-1.5-1.5-1.5Z" />
						</svg>
					</div>
				</div>
			</div>
			<!-- End Card -->

			<!-- Card -->
			<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
				<div class="flex justify-between p-4 md:p-5 gap-x-3">
					<div>
						<p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
							Pump
						</p>
						<div class="flex items-center mt-6 gap-x-4">
							<div id="pump">
								<h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
									Loading...
								</h3>
							</div>
							<div id="pump_s_div">
								<input type="checkbox" id="pump_switch_check" class="relative w-[3.25rem] h-7 p-px bg-gray-400 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-neutral-400 dark:checked:before:bg-blue-200">
							</div>
						</div>
					</div>
					<div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
						<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
							<path d="M19.5,5h-.5V2h2.5c.276,0,.5-.224,.5-.5s-.224-.5-.5-.5h-6c-.276,0-.5,.224-.5,.5s.224,.5,.5,.5h2.5v3H4.5C2.019,5,0,7.019,0,9.5v7c0,1.956,1.254,3.624,3,4.243v1.757c0,.276,.224,.5,.5,.5s.5-.224,.5-.5v-1.528c.164,.018,.331,.028,.5,.028h15c.169,0,.336-.01,.5-.028v1.528c0,.276,.224,.5,.5,.5s.5-.224,.5-.5v-1.757c1.746-.619,3-2.287,3-4.243v-7c0-2.481-2.019-4.5-4.5-4.5Zm3.5,11.5c0,1.93-1.57,3.5-3.5,3.5H4.5c-1.93,0-3.5-1.57-3.5-3.5v-7c0-1.93,1.57-3.5,3.5-3.5h15c1.93,0,3.5,1.57,3.5,3.5v7ZM2,3.5c0-.276,.224-.5,.5-.5h6c.276,0,.5,.224,.5,.5s-.224,.5-.5,.5H2.5c-.276,0-.5-.224-.5-.5Zm15,5.5c-2.206,0-4,1.794-4,4s1.794,4,4,4,4-1.794,4-4-1.794-4-4-4Zm0,7c-1.484,0-2.719-1.083-2.958-2.5h2.458c.276,0,.5-.224,.5-.5s-.224-.5-.5-.5h-2.458c.239-1.417,1.474-2.5,2.958-2.5,1.654,0,3,1.346,3,3s-1.346,3-3,3ZM7,9c-2.206,0-4,1.794-4,4,0,2.5,2,4,4,4,2.206,0,4-1.794,4-4s-1.794-4-4-4Zm0,7c-.647,0-1.246-.207-1.737-.556l1.737-1.737c.195-.195,.195-.512,0-.707s-.512-.195-.707,0l-1.737,1.737c-.35-.49-.556-1.09-.556-1.737,0-1.654,1.346-3,3-3s3,1.346,3,3-1.346,3-3,3Z" />
						</svg>
					</div>
				</div>

			</div>
			<!-- End Card -->
		</div>
		<!-- End Grid -->
	</div>
	<!-- End Card Section -->

	<form method="POST" action="{{ route('switch.pump') }}" id="switchPump">
		@csrf
		<input type="hidden" name="sensor_id" value="1">
		<input type="hidden" name="switch_status" id="switchStatus" value="0">
	</form>


	<!-- panggil file jquery untuk proses realtime-->
	<script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>
	<script type="text/javascript">
		let refreshInterval = "{{ $refresh_rate }}";
		$(document).ready(function() {
			// Init first load
			let isPumpActive = false;
			$("#soil_moisture").load("{{ url('soilmoisture') }} ");
			$("#humidity").load("{{ url('humidity') }} ");
			$("#temperature").load("{{ url('temperature') }} ");
			$("#pump").load("{{ url('pump') }}", function(response, status, xhr) {
				// Callback function executed after the load is complete
				if (status == "success") {
					if ($("#pump").children("h3").html() == "On") {
						isPumpActive = true;
					}
					$("#pump_switch_check").prop("checked", isPumpActive);
				}
			});
			$("#lastUpdate").load("{{ url('last-update') }} ");

			// Loop after init
			setInterval(function() {
				$("#soil_moisture").load("{{ url('soilmoisture') }} ");
				$("#humidity").load("{{ url('humidity') }} ");
				$("#temperature").load("{{ url('temperature') }} ");
				$("#pump").load("{{ url('pump') }}", function(response, status, xhr) {
					// Callback function executed after the load is complete
					if (status == "success") {
						if ($("#pump").children("h3").html() == "On") {
							isPumpActive = true;
						}
						$("#pump_switch_check").prop("checked", isPumpActive);
					}
				});
				$("#lastUpdate").load("{{ url('last-update') }} ");
			}, Number(refreshInterval)); // Sesuai dengan setting
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#pump_switch_check').change(function() {
				let ss = (this.checked) ? 1 : 0;
				let sback = (this.checked) ? 0 : 1;
				let sname = (this.checked) ? "On" : "Off";

				if (confirm("Are you sure to switch " + sname + " this pump?")) {
					$("#switchStatus").val(ss);
					$("#switchPump").submit();
				} else {
					$(this).prop("checked", sback);
				}
			});
		})
	</script>

	<script>
		function displayDateTime() {
			var now = new Date();
			var year = now.getFullYear();
			var month = now.getMonth(); // getMonth() returns months from 0-11
			var day = now.getDate();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds();

			// Add leading zeros to day, hours, minutes, seconds if needed
			day = day < 10 ? '0' + day : day;
			hours = hours < 10 ? '0' + hours : hours;
			minutes = minutes < 10 ? '0' + minutes : minutes;
			seconds = seconds < 10 ? '0' + seconds : seconds;

			// Array of month names
			var monthNames = [
				"January", "February", "March", "April", "May", "June",
				"July", "August", "September", "October", "November", "December"
			];

			var formattedDate = day + ' ' + monthNames[month] + ' ' + year;
			var formattedTime = hours + ':' + minutes + ':' + seconds;

			document.getElementById('current-datetime').textContent = formattedDate + ' ' + formattedTime;
		}

		// Call displayDateTime when the page loads
		window.onload = function() {
			displayDateTime();
			setInterval(displayDateTime, 1000); // Update the time every second
		};
	</script>
</x-app-layout>
