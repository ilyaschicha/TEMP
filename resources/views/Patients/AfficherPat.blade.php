<x-masterDash title="les patients">
    <h3 class="text-style"><strong>Profile :</strong></h3>
    <div class="patient-container">
        <div class="patient">
            <div class="patient-card">
                <img src="{{ asset('images/avatar01.jpg') }}" class="patient-img">
                <div class="vertical-line"></div>
                <div class="info">
                    <h1> {{ $patient->PrenomPat }} {{ $patient->NomPat }}</h1>
                    <hr>
                    <ul>
                        <li><strong>Num de dossier</strong> :{{ $patient->NumDoss }}</li>
                        <li> Mutuelle :{{ $patient->Mutuelle }}</li>
                        <li> Num Tel : {{ $patient->Tel }}</li>
                        <li> Email : {{ $patient->Email }}</li>
                    </ul>
                    <div class="links">
                        <a href="{{ asset('images/my-patient.pdf') }}" download>
                            <img src="{{ asset('images/download.png') }}">
                            Télécharger le Fichier
                        </a>

                        <a href="https://wa.me/+{{ $patient->Tel }}" target="_blank" class="msg-btn">
                            Envoyer le message
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-masterDash>
