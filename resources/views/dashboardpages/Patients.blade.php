<x-masterDash title="Patients">


    <div class="table-ajouter-title py-2 mt-2"> 
        <h2 style="display: inline;
        border-bottom: 7px solid #1B9C85;">  La liste des patients </h2>

        <div>
            <a class="btn btn-danger btn-lg action-btn" href="{{ route('patients.Ajouter') }}"
            role="button">Export</a>
            <a class="btn btn-primary btn-lg action-btn" href="{{ route('patients.Ajouter') }}"
            role="button">Ajouter</a>
        </div>
            
    </div>

    <table class="table table-bordered ">
        <tr>
            <th>NumDoss</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th class="td-email">Email</th>
            <th>Actions</th>
        </tr>

        @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient->NumDoss }}</td>
                <td>{{ $patient->NomPat }}</td>
                <td>{{ $patient->PrenomPat }}</td>
                <td class="td-email">{{ $patient->Email }}</td>
                <td class="text-center">
                    {{-- Les actions d'insertion,modification et suppression  --}}
                    
                    <form action="{{ route('patients.modifier', $patient->NumDoss) }}" method="GET"
                        style="display:inline">
                        @csrf
                        <button type="submit" class="modi-button btn btn-secondary btn-sm action-btn">Modifier</button>
                    </form>
                    <form action="{{ route('patients.supprimer', $patient->NumDoss) }}" method="POST"
                        style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="modi-button btn btn-danger btn-sm action-btn">Supprimer</button>
                    </form>
                    <a class="modi-button btn btn-warning btn-sm action-btn"
                        href="{{ route('patients.Afficher', $patient->NumDoss) }}" role="button">Afficher Plus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $patients->links() }}
</x-masterDash>
