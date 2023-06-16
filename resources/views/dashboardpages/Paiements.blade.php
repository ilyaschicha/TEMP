<x-masterDash title="Paiements">

    
    <div class="table-ajouter-title py-2 mt-2"> 
        <h2 style="display: inline;
        border-bottom: 7px solid #1B9C85;">  La liste des Paiements </h2>
        <a class="btn btn-primary btn-lg action-btn" href="{{ route('traitements.Ajouter') }}"role="button" >
        Ajouter
        </a>
    </div>

    <table class="table table-bordered ">
        <tr>
            <th>NumDoss</th>
            <th>Numéro de traitement</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Type de Traitement</th>
            <th>Prix </th>
            <th>Status</th>
        </tr>

        @foreach ($traitements as $traitement)
            <tr>
                <td>{{ $traitement->patients->first()->NumDoss }}</td>
                <td>{{ $traitement->Num_Traitement }}</td>
                <td>{{ $traitement->patients->first()->PrenomPat }}</td>
                <td>{{ $traitement->patients->first()->NomPat }}</td>
                <td>{{ $traitement->Acte }}</td>
                <td>{{ $traitement->Dent }}</td>
                <td class="text-center">
                    
                </td>
            </tr>
        @endforeach
    </table>

    {{ $traitements->links() }}

</x-masterDash>
