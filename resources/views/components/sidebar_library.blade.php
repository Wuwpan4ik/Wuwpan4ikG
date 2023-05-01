@empty($prompts_folder)
	<div class="notAddedRazdel">
			<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_16_1857)"><path d="M28.4575 5.70745C28.0007 5.51718 27.4977 5.46717 27.0124 5.56378C26.5271 5.66039 26.0816 5.89925 25.7325 6.24995L22.5 9.48245L16.7675 3.74995C16.2987 3.28127 15.6629 3.01798 15 3.01798C14.3371 3.01798 13.7013 3.28127 13.2325 3.74995L7.5 9.48245L4.2675 6.24995C3.91787 5.90043 3.47246 5.66241 2.98758 5.56599C2.5027 5.46957 2.00011 5.51908 1.54336 5.70825C1.08661 5.89743 0.696207 6.21778 0.421496 6.6288C0.146785 7.03983 0.000105561 7.52307 0 8.01745L0 21.25C0.00198482 22.9069 0.661102 24.4955 1.83277 25.6672C3.00445 26.8389 4.59301 27.498 6.25 27.5H23.75C25.407 27.498 26.9956 26.8389 28.1672 25.6672C29.3389 24.4955 29.998 22.9069 30 21.25V8.01745C30.0001 7.52303 29.8536 7.03968 29.5791 6.62851C29.3045 6.21734 28.9142 5.89681 28.4575 5.70745ZM27.5 21.25C27.5 22.2445 27.1049 23.1983 26.4017 23.9016C25.6984 24.6049 24.7446 25 23.75 25H6.25C5.25544 25 4.30161 24.6049 3.59835 23.9016C2.89509 23.1983 2.5 22.2445 2.5 21.25V8.01745L6.61625 12.1337C6.85066 12.368 7.16854 12.4997 7.5 12.4997C7.83146 12.4997 8.14934 12.368 8.38375 12.1337L15 5.51745L21.6162 12.1337C21.8507 12.368 22.1685 12.4997 22.5 12.4997C22.8315 12.4997 23.1493 12.368 23.3838 12.1337L27.5 8.01745V21.25Z" fill="white" fill-opacity="0.3"/></g><defs><clipPath id="clip0_16_1857"><rect width="30" height="30" fill="white"/></clipPath></defs></svg>
			<p>
				Вы ещё не создали ни одного раздела
			</p>
	</div>
@else
	@foreach($prompts_folder as $prompt)
			<div onclick="myFunction({{ $prompt->id }}, {{ $prompt->is_main }})" class="tablink addChatIcon tab__link-edit">
				@include('components.chat', ['main' => $prompt])
			</div>
	@endforeach
@endempty