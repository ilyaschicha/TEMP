<div class="container">
    <div class="navigation">
        <ul>
            {{-- <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="happy-outline"></ion-icon>
                    </span>
                    <span class="title">Happy Smile</span>
                </a>
            </li> --}}

            {{-- <div class="logodent">
                <span class="text">SMILE</span>
                <span class="hover-text">SMILE</span>
            </div> --}}

            {{-- <div class="effect" width="300">
                <p>ORALSPACE</p>
            </div> --}}

            <li>
                <div>
                    <img src="{{ asset('images/white.png') }}" width="75" height="75">
                </div>
            </li>

            <li>
                <a href="{{ route('dashboardpage') }}">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            @auth('administrator')
            {{-- , 'assistant', 'dentiste' --}}
                <li>
                    <a href="{{ route('patientspage') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> Patients </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('traitementpage') }}">
                        <span class="icon">
                            <ion-icon name="git-network-outline"></ion-icon>
                        </span>
                        <span class="title">Traitements</span>
                    </a>
                </li>
                @elseauth('assistant')
                <li>
                    <a href="{{ route('patientspage') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> Patients </span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('patientspage') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> Patients </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('traitementpage') }}">
                        <span class="icon">
                            <ion-icon name="git-network-outline"></ion-icon>
                        </span>
                        <span class="title">Traitements</span>
                    </a>
                </li>
            @endauth
            @auth('administrator', 'dentiste')
                <li>
                    <a href="{{ route('Paiementpage') }}">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Paiements</span>
                    </a>
                </li>
            @endauth
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Aide</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Settings</span>
                </a>
            </li>

            <li>
                @auth('administrator')
                    <a href="{{ route('admin.logout') }}">
                @endauth
                @auth('dentiste')
                    <a href="{{ route('dentiste.logout') }}">
                @endauth
                @auth('assistant')
                <a href="{{ route('assistant.logout') }}">
                @endauth

                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Se déconnecter</span>
                    </a>
        </li>


        <li>
            <a href="">
                {{-- <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox" >
                            Dark Mode
                        </label>
                    </div> --}}
            </a>
        </li>


    </ul>
</div>
</div>
