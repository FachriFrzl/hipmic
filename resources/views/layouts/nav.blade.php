<nav class="mt-5">

<div class="accordion accordion-program d-none d-sm-block" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button1 ">
                  <a class="flex menu items-center py-2 mx-4 hover:bg-opacity-25 hover:text-dark-600 {{ Request::is('admin/dashboard*') ? '  text-dark-100' :  'text-dark-600' }}"
                    href="{{ route('admin.dashboard.index') }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>

                    <span class="mx-3">Dashboard</span>
                </a>
                  </button>
                </h2>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed {{ (request()->is('#')) ? 'program-active' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span class="flex">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                      </svg>

                      <span class="mx-4">Members</span>
                    </span>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse {{ (request()->is('admin/formdaftar*','admin/contact*','admin/about*','admin/visi*','admin/misi*','admin/moto*')) ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/formdaftar*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.formdaftar.index') }}">Register</li>
                  <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/formdaftar*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.join.index') }}">Join Member</li>
                    <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/benefit*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.benefit.index') }}">Benefit</a></li>
  

                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed {{ (request()->is('#')) ? 'program-active' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <span class="flex">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                      </svg>

                      <span class="mx-4">Tentang Hipmi</span>
                    </span>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse {{ (request()->is('admin/formdaftar*','admin/contact*','admin/about*','admin/visi*','admin/misi*','admin/moto*')) ? 'show' : '' }}" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/about*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.about.index') }}">Tentang Hipmi</li>
                  <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/visi*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.visi.index') }}">VISI</li>
                    <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/misi*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.misi.index') }}">MISI</a></li>
  

                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    <span class="flex">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"></path>
                      </svg>
                      <span class="mx-4">What We Do</span>
                    </span>
                  </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse {{ (request()->is('admin/agenda*','admin/post*','admin/kategori*')) ? 'show' : '' }}" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/opening*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.opening.index') }}">Opening</li>
                    <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/content*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.content.index') }}">Content</li>
                      <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/our*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.our.index') }}">Our Team</li>
                        <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/partner*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.partner.index') }}">Partnership & Support</li>
                    <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/social*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.social.index') }}">Social & Green Impact </a></li>  
                  </div>
                </div>
              </div>
            
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="flex">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"></path>
                      </svg>
                      <span class="mx-4">Our Impact</span>
                    </span>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse {{ (request()->is('admin/agenda*','admin/post*','admin/kategori*')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/story*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.story.index') }}">Kisah Sukses</li>
                    <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/impact*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.impact.index') }}">Data Impact</li>
                    <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/program*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.program.index') }}">Program </a></li>  
                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <span class="flex">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                      </svg>
                      <span class="mx-4">Profile</span>
                    </span>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse {{ (request()->is('admin/facility*','admin/sambutan*','secondary-school-life','pesantren','secondary-school-calendar')) ? 'show' : '' }}" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/sambutan*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.sambutan.index') }}">Sambutan</li>
                  <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/facility*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.facility.index') }}">Fasilitas</a></li>
                    
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    <span class="flex">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                      <span class="mx-4">Settings</span>
                    </span>
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse {{ (request()->is('admin/identity*','admin/slider*','admin/profile*')) ? 'show' : '' }}" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/identity*') ? ' bg-opacity-25 ' :  'text-gray-500' }}"
                                  href="{{ route('admin.identity.index') }}">Identitas Lembaga</li>
                      <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/profile*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.profile.index') }}">Profil Admin</li>
                      
                      <li class="menu"><a class="menu mt-4 py-2 {{ Request::is('admin/slider*') ? ' bg-opacity-25 ' :  'text-gray-500' }}" href="{{ route('admin.slider.index') }}">Slider</li>
                      <li class=""><a class="mt-4 py-2 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/logo*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}" href="{{ route('admin.logo.index') }}">Logo</li>
                  </div>
                </div>
              </div>
            </div> 

            </nav>

            